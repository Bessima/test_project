<?php

use yii\db\Migration;

/**
 * Class m180423_110517_table_candidate
 */
class m180423_110517_table_candidate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('candidate',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'age' => $this->integer()->notNull(),
            'educationLevel' => $this->integer()->notNull(),
            'educationSpecialty' => $this->integer()->notNull(),
            'educationEdditional' => $this->integer()->notNull(),
            'experienceProjectWork' => $this->integer()->notNull(),
            'experienceManager' => $this->integer()->notNull(),
            'housingCondition' => $this->integer()->notNull(),
            'iq' => $this->integer()->notNull(),
        ],'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('candidate');

        return true;
    }
}
