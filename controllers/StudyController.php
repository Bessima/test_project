<?php

namespace app\controllers;

use app\models\Candidate;
use app\models\info\InfoEducationEdditional;
use app\models\info\InfoEducationLevel;
use app\models\info\InfoEducationSpecialty;
use app\models\info\InfoHousingCondition;
use app\models\info\InfoManager;
use app\models\info\InfoProjectWork;
use app\models\OpinionCandidate;
use app\models\UploadStudy;
use Phpml\Classification\MLPClassifier;
use Phpml\ModelManager;
use Phpml\NeuralNetwork\ActivationFunction\PReLU;
use Phpml\NeuralNetwork\ActivationFunction\Sigmoid;
use yii\helpers\FileHelper;
use yii\web\Controller;

class StudyController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLearning()
    {
        $perceptron = new MLPClassifier(7, [
            [4, new Sigmoid()]
        ], [0, 1]);

        $candidateWithOpinion = OpinionCandidate::find()
            ->select(['candidate_id', 'employed'])
            ->asArray()
            ->all();
        $idCandidate = array_column(
            $candidateWithOpinion,
            'candidate_id'
        );

        $candidate = Candidate::find()
            ->where(['in', 'id', $idCandidate])
            ->select([
                'age',
                'educationLevel',
                'educationSpecialty',
                'educationEdditional',
                'experienceManager',
                'housingCondition',
                'iq'
            ])
            ->asArray()
            ->all();

        $receptionCandidate = array_column(
            $candidateWithOpinion,
            'employed'
        );
        $candidates = [];
        foreach ($candidate as $key => $valueAbout) {
            foreach ($valueAbout as $value) {
                $candidates[$key][] = (int)$value;
            }
        }

        $receptionCandidate = $this->getIntValueInArray($receptionCandidate);

        $perceptron->train($candidates, $receptionCandidate);

        $nameFile = time() . '.data';
        $path = \Yii::getAlias('@study') . "/{$nameFile}";
        if (!is_dir(\Yii::getAlias('@study'))) {
            FileHelper::createDirectory(\Yii::getAlias('study'));
        }

        $modelManager = new ModelManager();

        $upload = new UploadStudy();
        $upload->date = date('Y-m-d');
        $upload->name = $nameFile;
        $result = false;

        try {
            if (!$upload->save()) {
                throw new \Exception('Не удалось сохранить в базу');
            }
            $modelManager->saveToFile($perceptron, $path);
            \Yii::$app->session->setFlash(
                'success',
                'Нейронная сеть обучена',
                false
            );

            $result = true;

        } catch (\Exception $e) {

            \Yii::$app->session->setFlash(
                'error',
                'Сохранить данные не удалось',
                false
            );
        }

        return $this->render('learning', ['result' => $result]);
    }

    public function actionAutotest()
    {
        $lastRecord = UploadStudy::find()
            ->select(['name'])
            ->orderBy('id DESC')
            ->one();

        if (!$lastRecord) {
            \Yii::$app->session->setFlash(
                'warning',
                'Нейронная сеть не была обучена',
                false
            );
            return $this->render('autotest', ['notLearning' => true]);
        }

        $path = $this->getPathByStudyFile($lastRecord->name);
        $modelManager = new ModelManager();
        $restoredClassifier = $modelManager->restoreFromFile($path);

        $complexId = Candidate::find()->select('id')->asArray()->all();
        $allId = [];
        foreach ($complexId as $aId) {
            $allId[] = $aId['id'];
        }
        $oneRandIdKey = array_rand($allId);

        $candidate = array_values(Candidate::find()
            ->select([
                'age',
                'educationLevel',
                'educationSpecialty',
                'educationEdditional',
                'experienceManager',
                'housingCondition',
                'iq'
            ])
            ->where(['id' => $allId[$oneRandIdKey]])
            ->asArray()
            ->one());

        $candidate = $this->getIntValueInArray($candidate);

        $rightResult = OpinionCandidate::find()
            ->select('employed')
            ->where(['id' => $allId[$oneRandIdKey]])
            ->one();

        $opinion = $restoredClassifier->predict($candidate);

        return $this->render('autotest', [
            'testSample' => implode(',' , $candidate),
            'rightResult' => $rightResult->employed,
            'testResult' => $opinion,
        ]);
    }

    private function getIntValueInArray($array)
    {
        foreach ($array as &$value) {
            $value = (int)$value;
        }

        return $array;
    }

    private function getPathByStudyFile($file)
    {
        return \Yii::getAlias('@study') . "/{$file}";
    }

    /**
     * @return string
     */
    public function actionTesting()
    {
        return $this->render('testing', [
            'model' => new Candidate(),
            'edducationLevel' => InfoEducationLevel::getDataAsArray(),
            'edducationEdditional' => InfoEducationEdditional::getDataAsArray(),
            'edducationSpecialty' => InfoEducationSpecialty::getDataAsArray(),
            'edducationHousing' => InfoHousingCondition::getDataAsArray(),
            'edducationManager' => InfoManager::getDataAsArray(),
            'edducationProject' => InfoProjectWork::getDataAsArray(),
        ]);
    }

    public function actionResultTesting()
    {
        $candidateCharacter = \Yii::$app->request->post('Candidate');
        if ($candidateCharacter) {
            $lastRecord = UploadStudy::find()
                ->select(['name'])
                ->orderBy('id DESC')
                ->one();
            $path = $this->getPathByStudyFile($lastRecord->name);

            $modelManager = new ModelManager();
            $restoredClassifier = $modelManager->restoreFromFile($path);

            $candidateCharacter = $this->getIntValueInArray(
                array_values($candidateCharacter)
            );

            $opinion = $restoredClassifier->predict($candidateCharacter);

            return $this->render('autotest', [
                'testSample' => implode(',' , $candidateCharacter),
                'testResult' => $opinion,
            ]);
        }

        \Yii::$app->session->setFlash(
                'error',
                'Не удалось загрузить данные из формы',
                false
        );
        return $this->render('autotest', ['notLearning' => true]);
    }
}
