<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidate".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property int $educationLevel
 * @property int $educationSpecialty
 * @property int $educationEdditional
 * @property int $experienceProjectWork
 * @property int $experienceManager
 * @property int $housingCondition
 * @property int $iq
 */
class Candidate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                [
                    'name',
                    'age',
                    'educationLevel',
                    'educationSpecialty',
                    'educationEdditional',
                    'experienceProjectWork',
                    'experienceManager',
                    'housingCondition',
                    'iq'
                ], 'required'],
            [
                [
                    'age',
                    'educationLevel',
                    'educationSpecialty',
                    'educationEdditional',
                    'experienceProjectWork',
                    'experienceManager',
                    'housingCondition',
                    'iq'
                ], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'age' => 'Возраст',
            'educationLevel' => 'Уровень образования',
            'educationSpecialty' => 'Специальность',
            'educationEdditional' => 'Дополнительное образование',
            'experienceProjectWork' => 'Опыт проектной работы',
            'experienceManager' => 'Опыт управления',
            'housingCondition' => 'Семейное положение',
            'iq' => 'IQ',
        ];
    }
}
