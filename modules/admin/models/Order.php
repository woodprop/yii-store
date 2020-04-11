<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string|null $comment
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $total_qty
 * @property float $total_price
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address', 'created_at', 'updated_at', 'total_qty'], 'required'],
            [['comment'], 'string'],
            [['status', 'total_qty'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['total_price'], 'number'],
            [['name', 'email'], 'string', 'max' => 64],
            [['phone'], 'string', 'max' => 16],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Покупатель',
            'email' => 'Email',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'comment' => 'Примечание',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлён',
            'total_qty' => 'Товаров',
            'total_price' => 'Сумма',
        ];
    }
}
