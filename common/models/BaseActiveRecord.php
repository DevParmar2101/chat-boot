<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

class BaseActiveRecord extends ActiveRecord
{

    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;
    const STATUS_DRAFT = 8;

    const ACTIVE = 'Active';
    const INACTIVE = 'Inactive';

    public static function getPath($name=null){
        $path = Yii::getAlias('@frontend/web/'.self::getPathPrefix());
        if($name){
            return $path.$name;
        }
        return $path;
    }

    /**
     * @param $name
     * @return string
     */
    public static function getPathPrefix($name=null): string
    {
        $path = 'uploads/'.Inflector::camel2id(StringHelper::basename(get_called_class()), '_').'/';
        if($name){
            return $path.$name;
        }
        return $path;
    }

    public function getImageName($image){
        return $image->baseName.Yii::$app->security->generateRandomString(16).'.'.$image->extension;
    }

    public static function status()
    {
        $array = [
            self::STATUS_ACTIVE => self::ACTIVE,
            self::STATUS_INACTIVE => self::INACTIVE,
        ];
        return $array;
    }

}