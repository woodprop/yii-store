<?php

namespace app\modules\admin\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $content
 * @property float $price
 * @property float $old_price
 * @property string|null $description
 * @property string|null $keywords
 * @property string $img
 * @property int $is_offer
 */
class Product extends ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'content'], 'required'],
            [['category_id', 'is_offer'], 'integer'],
            [['content'], 'string'],
            [['price', 'old_price'], 'number'],
            [['title', 'description', 'keywords', 'img'], 'string', 'max' => 255],
            ['img', 'default', 'value' => 'images/no-image.jpg'],
            [['imageFile'], 'image'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'title' => 'Наименование',
            'content' => 'Описание',
            'price' => 'Цена',
            'old_price' => 'Старая цена',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'img' => 'Фото',
            'imageFile' => 'Новое фото',
            'is_offer' => 'Акция',
        ];
    }

    public function getCategory(){
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function beforeSave($insert)
    {
        if ($imageFile = UploadedFile::getInstance($this, 'imageFile')){
            $dir = 'images/products/' . date('Y-m-d') . '/';
            if (!is_dir($dir)) mkdir($dir);
            $fileName = uniqid() . $imageFile->baseName . '.' . $imageFile->extension;
            $this->img = $dir . $fileName;
            $imageFile->saveAs($this->img);
        }
        return parent::beforeSave($insert);
    }
}
