<?php

use yii\db\Migration;

/**
 * Class m180502_150327_table_study_network
 */
class m180502_150327_table_study_network extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('upload_study', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('upload_study');
    }
}
