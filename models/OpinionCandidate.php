<?php

namespace app\models;

/**
 * This is the model class for table "opinion_candidate".
 *
 * @property int $id
 * @property int $candidate_id
 * @property int $employed
 *
 * @property Candidate $candidate
 */
class OpinionCandidate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'opinion_candidate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidate_id'], 'required'],
            [['candidate_id', 'employed'], 'integer'],
            [
                ['candidate_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Candidate::className(),
                'targetAttribute' => ['candidate_id' => 'id']
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'candidate_id' => 'Candidate ID',
            'employed' => 'Employed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCandidate()
    {
        return $this->hasOne(Candidate::className(), ['id' => 'candidate_id']);
    }
}
