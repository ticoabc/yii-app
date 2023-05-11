<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

    public function validateEntryForm(){

        $model = new EntryForm();
        $model->name = 'Qiang';
        $model->email = 'bad';

        if ($this->validate()){
            return true;
        }else{
            return  $model->getErrors();
        }
    }
}