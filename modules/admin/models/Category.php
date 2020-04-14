<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 * @property string $banner_img
 * @property string|null $banner_title
 * @property string|null $banner_subtitle
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['title'], 'required'],
            [['title', 'description', 'keywords', 'banner_img', 'banner_title', 'banner_subtitle'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Родительская категория',
            'title' => 'Название',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'banner_img' => 'Баннер',
            'banner_title' => 'Заголовок баннера',
            'banner_subtitle' => 'Подзаголовок баннера',
        ];
    }

    public function getParentName(){
        if (!$this->parent_id) return '-';
        return self::findOne(['id' => $this->parent_id])->title;
    }
}
