<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
;

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
class News extends ActiveRecord
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
            'id' => 'ID',
            'title' => 'Title',
            'image_link' => 'Image Link',
            'text' => 'Text',
            'datetime' => 'Datetime',
            'author' => 'Author',
        ];
    }


}
