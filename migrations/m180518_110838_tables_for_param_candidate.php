<?php

use yii\db\Migration;

/**
 * Class m180518_110838_tables_for_param_candidate
 */
class m180518_110838_tables_for_param_candidate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('infoEducationLevel',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
            ],
            'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
        );

        $this->createTable('infoEducationSpecialty',
                    [
                        'id' => $this->primaryKey(),
                        'name' => $this->string()->notNull(),
                    ],
            'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
        );

        $this->createTable('infoEducationEdditional',
                    [
                        'id' => $this->primaryKey(),
                        'name' => $this->string()->notNull(),
                    ],
            'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
        );

        $this->createTable('infoProjectWork',
                    [
                        'id' => $this->primaryKey(),
                        'name' => $this->string()->notNull(),
                    ],
            'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
        );

        $this->createTable('infoManager',
                    [
                        'id' => $this->primaryKey(),
                        'name' => $this->string()->notNull(),
                    ],
            'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
        );

        $this->createTable('infoHousingCondition',
                    [
                        'id' => $this->primaryKey(),
                        'name' => $this->string()->notNull(),
                    ],
            'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('infoEducationLevel');
        $this->dropTable('infoEducationSpecialty');
        $this->dropTable('infoEducationEdditional');
        $this->dropTable('infoProjectWork');
        $this->dropTable('infoManager');
        $this->dropTable('infoHousingCondition');

        return true;
    }

}
