<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.06.2017
 * Time: 18:40
 */

namespace app\models;
use yii\db\ActiveRecord;

class Useful extends ActiveRecord
{
    public static  function tableName()
    {
        return 'useful';
    }

    public function getImage()
    {
        return ($this->image) ? '' . $this->image : 'no-image.png';
    }

}