<?php

namespace app\models\info;

use Yii;

/**
 * This is the model class for table "infoEducationEdditional".
 *
 * @property int $id
 * @property string $name
 */
class InfoEducationEdditional extends InfoPrototype
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'infoEducationEdditional';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'name' => 'Name',
        ];
    }
}
