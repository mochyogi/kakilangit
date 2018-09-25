<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Portofolio;
use yii\web\UploadedFile;
use yii\helpers\Url;

class SettingController extends Controller
{

    public function beforeAction($action){
        if (Yii::$app->user->identity == null) {
            $this->layout = 'mainfront';            
        }else{
            $this->layout = 'mainadmin';
        }
        return parent::beforeAction($action);
    }

	public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPortofolio()
    {
        $model = new Portofolio();
        $galleries = Portofolio::find()->orderBy('id_portofolio')->all();
        //die(var_dump($galleries));
        if ($model->load(Yii::$app->request->post())) {

            $request = Yii::$app->request;
            $model->file_gambar = UploadedFile::getInstance($model, 'file_gambar');
            $model->title = $request->post('Portofolio')['title'];
            $model->deskripsi = $request->post('Portofolio')['deskripsi'];
            $model->tipe = $request->post('Portofolio')['tipe'];
            
            $filepath = 'upload/portofolio/'.$model->file_gambar->baseName.'.'.$model->file_gambar->extension;
            //$model->file_gambar->saveAs($filepath);
            $model->gambar = $filepath;
            if($model->save()){
                return $this->render('portofolio', [
                    'galleries' => $galleries,
                    'model' => $model,
                ]);
            }else{
                die(json_encode(array('save'=>'false', 'object' => $model->errors)));
            }
        }
        return $this->render('portofolio', [
            'galleries' => $galleries,
            'model' => $model,
        ]);
    }

    public function actionTeam()
    {
        return $this->render('team');
    }

    public function actionTestimoni()
    {
        return $this->render('testimoni');
    }
}