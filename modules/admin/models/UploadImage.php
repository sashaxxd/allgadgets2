<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 11.05.2017
 * Time: 0:03
 */

namespace app\modules\admin\models;


use yii\base\Model;

class UploadImage extends  Model //Cоздали модель для загрузки
{
    public $image;

    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function UploadedFile($file)
    {

        $filename = strtolower(md5(uniqid($file->baseName))) .'.'. $file->extension;

        $file->saveAs(\Yii::getAlias('@web'). 'images/upload/' . $filename);
        return $filename;
    }

    public function UploadedFile2($file, $kart )
    {

        if(file_exists(\Yii::getAlias('@web'). 'images/upload/' . $kart))
        {

            
            unlink(\Yii::getAlias('@web'). 'images/upload/' . $kart);
        }


        
        $filename = strtolower(md5(uniqid($file->baseName))) .'.'. $file->extension;

        $file->saveAs(\Yii::getAlias('@web'). 'images/upload/' . $filename);
        return $filename;
    }

    public function attributeLabels()
    {
        return [

            'image' => 'Изображение',

        ];
    }

}