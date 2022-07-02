<?php

namespace frontend\models;

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
 * @property mixed|null $time
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
            [['name', 'surname', 'patronymic', 'phone', 'email', 'date', 'time', 'amount_info'], 'required'],
            [['phone'], 'integer'],
            [['date'], 'safe'],
            [['time'], 'safe'],
            [['email'], 'email'],
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
             'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => 'Телефон',
            'email' => 'Электронная почта',
            'date' => 'Дата визита',
            'time' => 'Время визита',
            'amount_info' => 'Количество человек',
            'commentary' => 'Дополнительная информация',
        ];
    }
}
