<?php

use yii\db\Migration;
use app\models\Candidate;
use app\models\OpinionCandidate;

/**
 * Class m180429_081035_insert_candidate_data
 */
class m180429_081035_insert_candidate_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $candidatesData = [
            [
                'name' => 'Участник 1',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 0,
                'educationEdditional' => 4,
                'experienceProjectWork' => 5,
                'experienceManager' => 3,
                'housingCondition' => 4,
                'iq' => 107,
            ],
            [
                'name' => 'Участник 2',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 4,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 0,
                'iq' => 103,
            ],
            [
                'name' => 'Участник 3',
                'age' => 5,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 4,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 0,
                'iq' => 103,
            ],
            [
                'name' => 'Участник 4',
                'age' => 5,
                'educationLevel' => 3,
                'educationSpecialty' => 0,
                'educationEdditional' => 5,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 0,
                'iq' => 107,
            ],
            [
                'name' => 'Участник 5',
                'age' => 3,
                'educationLevel' => 4,
                'educationSpecialty' => 0,
                'educationEdditional' => 0,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 0,
                'iq' => 104,
            ],
            [
                'name' => 'Участник 6',
                'age' => 0,
                'educationLevel' => 3,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 4,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 107,
            ],
            [
                'name' => 'Участник 7',
                'age' => 0,
                'educationLevel' => 0,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 5,
                'experienceManager' => 3,
                'housingCondition' => 5,
                'iq' => 104,
            ],
            [
                'name' => 'Участник 8',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 0,
                'experienceManager' => 4,
                'housingCondition' => 0,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 9',
                'age' => 5,
                'educationLevel' => 4,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 0,
                'experienceManager' => 4,
                'housingCondition' => 0,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 10',
                'age' => 3,
                'educationLevel' => 3,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 4,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 11',
                'age' => 0,
                'educationLevel' => 3,
                'educationSpecialty' => 0,
                'educationEdditional' => 0,
                'experienceProjectWork' => 4,
                'experienceManager' => 3,
                'housingCondition' => 4,
                'iq' => 100,
            ],
            [
                'name' => 'Участник 12',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 99,
            ],
            [
                'name' => 'Участник 13',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 14',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 5,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 15',
                'age' => 0,
                'educationLevel' => 3,
                'educationSpecialty' => 0,
                'educationEdditional' => 0,
                'experienceProjectWork' => 4,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 103,
            ],
            [
                'name' => 'Участник 16',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 4,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 17',
                'age' => 4,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 5,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 100,
            ],
            [
                'name' => 'Участник 18',
                'age' => 3,
                'educationLevel' => 3,
                'educationSpecialty' => 0,
                'educationEdditional' => 5,
                'experienceProjectWork' => 5,
                'experienceManager' => 3,
                'housingCondition' => 0,
                'iq' => 102,
            ],
            [
                'name' => 'Участник 19',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 5,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 20',
                'age' => 3,
                'educationLevel' => 4,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 5,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 100,
            ],
            [
                'name' => 'Участник 21',
                'age' => 0,
                'educationLevel' => 5,
                'educationSpecialty' => 4,
                'educationEdditional' => 0,
                'experienceProjectWork' => 0,
                'experienceManager' => 0,
                'housingCondition' => 4,
                'iq' => 111,
            ],
            [
                'name' => 'Участник 22',
                'age' => 4,
                'educationLevel' => 3,
                'educationSpecialty' => 0,
                'educationEdditional' => 0,
                'experienceProjectWork' => 5,
                'experienceManager' => 0,
                'housingCondition' => 0,
                'iq' => 100,
            ]
        ];

        $applyKey = [0,1,3,4,5,7,9,10,15,17,18,19,20,21];

        foreach ($candidatesData as $ikey => $candidateData) {

            $candidateInsert = new Candidate();
            $candidateInsert->setAttributes($candidateData);
            $candidateInsert->save();

            $opinion = new OpinionCandidate();
            $opinion->setAttributes([
                'candidate_id' => $candidateInsert->id,
                'employed' => (int)in_array($ikey,$applyKey),
            ]);
            $opinion->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return Candidate::deleteAll();
    }
}
