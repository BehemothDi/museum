<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property int $id
 * @property int $status
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

    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;
    const STATUS_REJECTED = 2;

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
            [['name', 'surname', 'patronymic', 'phone', 'email', 'date', 'time', 'amount_info',], 'required'],
            [['id', 'phone'], 'integer'],
            [['status'], 'integer'],
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
            'id' => 'id',
            'status' => 'Статус',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'date' => 'Дата',
            'time' => 'Время',
            'amount_info' => 'Количество',
            'commentary' => 'Дополнительно',
        ];
    }

    public static function getStatuses()
    {
        return [
            static::STATUS_PENDING => 'Требует подтверждения',
            static::STATUS_APPROVED => 'Запись подтверждена',
            static::STATUS_REJECTED => 'Запись отклонена',
        ];
    }

    public function attributeValues() {
        return [
            'status' => function(Record $model) {
            $statuses = Record::getStatuses();
            return $statuses[$model->status];}

        ];
    }


}


