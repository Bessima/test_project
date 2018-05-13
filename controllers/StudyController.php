<?php

namespace app\controllers;

use app\models\Candidate;
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
            [4, new PReLU()], [3, new Sigmoid()]
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

        foreach ($receptionCandidate as &$accept) {
            $accept = (int)$accept;
        }

        $perceptron->train($candidates, $receptionCandidate);

        $nameFile = time() . '.data';
        $path = \Yii::getAlias('@study') . "/{$nameFile}";
        if (!is_dir(\Yii::getAlias('@study'))) {
            FileHelper::createDirectory(\Yii::getAlias('study'));
        }

        $modelManager = new ModelManager();

        $upload = new UploadStudy();
        $upload->date = date('Y-m-d');
        $upload->name = $path;
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
}
