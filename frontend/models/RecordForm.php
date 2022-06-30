<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class RecordForm extends Model
{
    public $name;
    public $surname;
    public $patronymic;
    public $email;
    public $phone;
    public $date;
    public $amount_info;
    public $commentary;


    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'email', 'phone', 'date', 'amount_info', 'commentary'], 'required', 'message' => 'Пожалуйста, введите данные'],
            ['email', 'email'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'email' => 'Электронная почта',
            'phone' => 'Телефон',
            'date' => 'Дата',
            'amount_info' => 'Количество людей',
            'commentary' => 'Дополнительно',
        ];
    }
}