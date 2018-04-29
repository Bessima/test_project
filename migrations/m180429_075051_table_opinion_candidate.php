<?php

use yii\db\Migration;

/**
 * Class m180429_075051_table_opinion_candidate
 */
class m180429_075051_table_opinion_candidate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('opinion_candidate',[
            'id' => $this->primaryKey(),
            'candidate_id' => $this->integer()->notNull(),
            'employed' => $this->boolean()->defaultValue(0),
        ]);

        $this->createIndex(
            'idx-candidate_id',
            'opinion_candidate',
            'candidate_id'
        );

        $this->addForeignKey(
            'fk-candidate_id',
            'opinion_candidate',
            'candidate_id',
            'candidate',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-candidate_id',
            'opinion_candidate'
        );

        $this->dropIndex(
            'idx-candidate_id',
            'opinion_candidate'
        );

        $this->dropTable('opinion_candidate');

        return true;
    }
}
