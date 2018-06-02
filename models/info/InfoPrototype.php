<?php

namespace app\models\info;

use yii\db\ActiveRecord;

/**
 * This is the model class for prototype
 *
 * @property int $id
 * @property string $name
 */
class InfoPrototype extends ActiveRecord
{
    public static function getDataAsArray() {
        /** @var InfoPrototype[] $items*/
        $items = self::find()->all();
        $formatItems = [];
        foreach ($items as $item) {
            $formatItems[$item->id] = $item->name;
        }

        return $formatItems;
    }
}