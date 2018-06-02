<?php

use yii\db\Migration;
use app\models\Candidate;

/**
 * Class m180515_210340_generate_much_data
 */
class m180515_210340_generate_much_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Candidate::deleteAll();


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180515_210340_generate_much_data cannot be reverted.\n";

        return false;
    }
    */
}
