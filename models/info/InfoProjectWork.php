<?php

namespace app\models\info;

use Yii;

/**
 * This is the model class for table "infoProjectWork".
 *
 * @property int $id
 * @property string $name
 */
class InfoProjectWork extends InfoPrototype
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'infoProjectWork';
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
