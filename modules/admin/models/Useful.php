<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "useful".
 *
 * @property string $id
 * @property string $title
 * @property string $image
 * @property string $text
 */
class Useful extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'useful';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
     
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'title' => 'Заголовок',
            'image' => 'Изображение',
            'text' => 'Описание',
        ];
    }

    public function getImage()
    {
        return ($this->image) ? '../../images/upload/' . $this->image : '../../images/upload/no-image.png';
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
//        $this->save(false);

    }
}
