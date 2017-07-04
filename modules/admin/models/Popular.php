<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "popular".
 *
 * @property string $id
 * @property string $title
 * @property string $image
 * @property string $link
 */
class Popular extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'popular';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'link'], 'required'],
            [['title', 'image', 'link'], 'string', 'max' => 255],
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
            'link' => 'Ссылка',
        ];
    }
	    public function saveImage($filename)
    {
         $this->image = $filename;
//        $this->save(false);

    }
}
