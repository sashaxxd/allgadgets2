<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.06.2017
 * Time: 18:40
 */

namespace app\models;
use yii\db\ActiveRecord;

class Pages extends ActiveRecord
{
    public static  function tableName()
    {
        return 'pages';
    }



}