<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sample".
 *
 * @property int $id
 * @property string $title
 * @property string $image_link
 * @property string $description
 */
class Sample extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sample';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image_link', 'description'], 'required'],
            [['description'], 'string'],
            [['title', 'image_link'], 'string', 'max' => 255],
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
            'description' => 'Description',
        ];
    }
}
