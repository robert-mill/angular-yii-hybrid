<?php

namespace backend\modules\api\models;

use Yii;

/**
 * This is the model class for table "stockitems".
 *
 * @property integer $id
 * @property string $category
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $price
 * @property string $discountprice
 * @property integer $instock
 * @property string $size
 */
class Stockitems extends \yii\db\ActiveRecord
{

    const SCENARIO_CREATE ='create';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stockitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'image','price','instock'], 'required'],
            [['category','title', 'description', 'image','price', 'discountprice', 'instock','size'], 'string'],
        ];
    }


    /**
     * @return array
     */
    public function scenarios()
    {
       $scenarios= parent::scenarios();
       $scenarios['create'] = ['category','title', 'description', 'image','price', 'discountprice','instock','size'];
       return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'category',
            'title' => 'title',
            'description' => 'Description',
            'image' => 'Image',
            'price' => 'Price',
            'discountprice' => 'Discountprice',
            'instock' => 'Instock',
            'size' => 'Size',
        ];
    }
}
