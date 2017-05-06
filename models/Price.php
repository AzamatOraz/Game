<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price".
 *
 * @property integer $id
 * @property string $game
 * @property integer $price
 * @property string $amount
 * @property double $rating
 */
class Price extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game', 'price', 'amount', 'rating'], 'required'],
            [['price'], 'integer'],
            [['rating'], 'number'],
            [['game'], 'string', 'max' => 11],
            [['amount'], 'string', 'max' => 128],
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
            'price' => 'Price',
            'amount' => 'Amount',
            'rating' => 'Rating',
        ];
    }
}
