<?php

namespace backend\modules\api\controllers;

use backend\modules\api\models\Stockitems;
use Yii;
use Yii\web\Response;

class StockitemsController extends \yii\web\Controller
{
    public $enableCsrfValidation=false;
    public function actionIndex()
    {

        return $this->render('index');
    }

    /**
     * @return array
     */
    public function actionCreateStockitem()
    {

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $stockitems = new Stockitems();
        $stockitems->scenario =  Stockitems::SCENARIO_CREATE;
        $stockitems->attributes = Yii::$app->request->post();

        if ($stockitems->validate()){
            $stockitems->save();
            return ['status' => true, 'data'=>'Added stockitem'];
        }else{
            return ['status'=>false, 'data'=>$stockitems->getErrors()];
        }
    }
    public function actionListStockitems(){
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $stockitems = Stockitems::find()->all();
        if(count($stockitems)>0){
            return ['status'=>true, 'data'=> $stockitems];
        }else{
            return ['status'=>false, 'data'=>'no products '];
        }
    }

}
