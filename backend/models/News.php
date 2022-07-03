<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $image_link
 * @property string $text
 * @property string $datetime
 * @property string $author
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image_link', 'text', 'datetime', 'author'], 'required'],
            [['text'], 'string'],
            [['datetime'], 'safe'],
            [['title', 'image_link', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок',
            'image_link' => 'Изображение',
            'short_desc' => 'Краткое описание',
            'text' => 'Текст',
            'datetime' => 'Дата публикации',
            'author' => 'Автор',
        ];
    }
}
