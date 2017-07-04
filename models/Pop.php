<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.06.2017
 * Time: 16:59
 */

namespace app\models;
use yii\db\ActiveRecord;

class Pop extends ActiveRecord
{
    public static  function tableName()
    {
        return 'popular';
    }

}