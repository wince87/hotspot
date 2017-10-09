<?php

namespace app\models;

use Yii;

class HotQuestion extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'hot_question';
    }

    public function rules()
    {
        return [
            [['text', 'answer_1', 'answer_2', 'answer_3', 'answer_4'], 'required'],
            [['correct'], 'integer'],
            [['text'], 'string', 'max' => 255],
            [['answer_1', 'answer_2', 'answer_3', 'answer_4'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text question',
            'answer_1' => 'Answer 1',
            'answer_2' => 'Answer 2',
            'answer_3' => 'Answer 3',
            'answer_4' => 'Answer 4',
            'correct' => 'Set as correct',
        ];
    }
}
