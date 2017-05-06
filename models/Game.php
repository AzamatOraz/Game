<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game".
 *
 * @property integer $id
 * @property string $game
 * @property string $description
 * @property string $rules
 */
class Game extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game', 'description', 'rules'], 'required'],
            [['game'], 'string', 'max' => 128],
            [['description', 'rules'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'game' => 'Game',
            'description' => 'Description',
            'rules' => 'Rules',
        ];
    }
}
