<?php

use yii\db\Migration;
use app\models\info\InfoEducationEdditional;
use app\models\info\InfoEducationLevel;
use app\models\info\InfoEducationSpecialty;
use app\models\info\InfoManager;
use app\models\info\InfoProjectWork;
use app\models\info\InfoHousingCondition;

/**
 * Class m180518_120322_insert_data_in_array
 */
class m180518_120322_insert_data_in_array extends Migration
{
    private $arrEducationLevel = [
        'высшее техническое',
        'высшее экономическое',
        'высшее прочее',
        'все остальные варианты',
    ];
    private $arrEducationSpecialty  = [
        'непрофильная',
        'профильная',
        'смежная'
    ];
    private $arrEducationEdditional = [
        'профильная, больше 40 часов',
        'олимпиады, конкурсы',
        'непрофильная'
    ];

    private $arrManager = [
        'от 30 человек',
        '10-30 человек',
        'до 10 человек',
        'нет'
    ];

    private $arrHousingCondition = [
        'намерение приобрести собственное жилье через ипотеку',
        'собственное жилье',
        'проживание с родителями',
        'все остальные варианты'
    ];

    private $arrProjectWork = [
        'руководитель',
        'участник',
        'все остальные варианты',
    ];
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach ($this->arrEducationEdditional as $edd) {
            $education = new InfoEducationEdditional();
            $education->name = $edd;
            $education->save();
        }

        foreach ($this->arrEducationLevel as $levelEdd) {
            $level = new InfoEducationLevel();
            $level->name = $levelEdd;
            $level->save();
        }

        foreach ($this->arrEducationSpecialty as $specialty) {
            $specNew = new InfoEducationSpecialty();
            $specNew->name = $specialty;
            $specNew->save();
        }

        foreach ($this->arrHousingCondition as $housing) {
            $houseCondition = new InfoHousingCondition();
            $houseCondition->name = $housing;
            $houseCondition->save();
        }

        foreach ($this->arrManager as $manager) {
            $managerNew = new InfoManager();
            $managerNew->name = $manager;
            $managerNew->save();
        }

        foreach ($this->arrProjectWork as $project) {
            $projectNew = new InfoProjectWork();
            $projectNew->name = $project;
            $projectNew->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete(InfoEducationEdditional::tableName());
        $this->delete(InfoEducationLevel::tableName());
        $this->delete(InfoEducationSpecialty::tableName());
        $this->delete(InfoHousingCondition::tableName());
        $this->delete(InfoManager::tableName());
        $this->delete(InfoProjectWork::tableName());

        return true;
    }

}
