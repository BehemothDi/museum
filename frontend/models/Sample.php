<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sample".
 *
 * @property int $id
 * @property int $titlr
 * @property int $imagelink
 * @property int $description
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
            [['titlr', 'imagelink', 'description'], 'required'],
            [['titlr', 'imagelink', 'description'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titlr' => 'Titlr',
            'imagelink' => 'Imagelink',
            'description' => 'Description',
        ];
    }
}
