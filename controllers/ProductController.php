<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Product;
use Yii;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index', [
            'products' => $products,
        ]);
    }

    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Product::findOne($id);
        if ($model) {
            $model->delete();
        }

        return $this->redirect(['index']);
    }
}

public function actionCreate()
{
    $model = new Product();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        // Product saved successfully
        return $this->redirect(['index']);
    }

    return $this->render('create', ['model' => $model]);
}

public function actionIndex()
{
    $products = Product::find()->all();

    return $this->render('index', ['products' => $products]);
}

?>
