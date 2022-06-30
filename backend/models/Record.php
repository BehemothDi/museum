<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property int $phone
 * @property string $email
 * @property string $date
 * @property string $amount_info
 * @property string $commentary
 */
class Record extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'phone', 'email', 'date', 'amount_info', 'commentary'], 'required'],
            [['phone'], 'integer'],
            [['date'], 'safe'],
            [['commentary'], 'string'],
            [['name', 'surname', 'patronymic', 'email', 'amount_info'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
            'phone' => 'Phone',
            'email' => 'Email',
            'date' => 'Date',
            'amount_info' => 'Amount Info',
            'commentary' => 'Commentary',
        ];
    }
}
