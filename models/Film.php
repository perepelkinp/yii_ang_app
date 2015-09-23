<?php
namespace app\models;
use \yii\db\ActiveRecord;
use Yii;
class Film extends ActiveRecord
{
    public static function tableName()
    {
        return 'film';
    }
    public function rules()
    {
        return[
            [['title','director','year'],'requred'],
            [['storyline'], 'string'],
            [['year'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['director'], 'string', 'max' => 100]
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'storyline' => 'Storyline',
            'director' => 'Director',
            'year' => 'Year',
        ];
    }
}