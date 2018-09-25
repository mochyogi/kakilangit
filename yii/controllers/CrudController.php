<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\Portofolio;
use app\models\Contact;
use app\models\Team;
use app\models\Testiomoni;

class CrudController extends Controller
{
	public function actionCreatePortofolio(){
		if(
            isset($_POST['title']) &&
            isset($_POST['deskripsi']) &&
            isset($_POST['tipe']) &&
            isset($_POST['gambar']) &&
        ){
            $obj_portofolio = new Portofolio();
            $obj_portofolio->title = $title;
            $obj_portofolio->deskripsi = $deskripsi;
            $obj_portofolio->tipe = $tipe;
            $obj_portofolio->gambar = $gambar;
        }

        $forms = new Portofolio();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate())
        {
            $request = Yii::$app->request;
            $forms->photo = UploadedFile::getInstance($forms, 'photo');

            $team = new TeamGalleries();
            $team->name = $request->post('TeamGalleriesForm')['name'];
            $team->description = $request->post('TeamGalleriesForm')['description'];
            $team->team_id = $id;
            $team->save();

            $filepath = 'upload/'.$forms->photo->baseName.'_'.sha1($team->id).'.'.$forms->photo->extension;
            $forms->photo->saveAs($filepath);
            $team->filepath = $filepath;
            $team->save();

            return $this->redirect(Url::to(['helo-crud/gallery', 'id'=>$id]));
        }
        else 
        {
            $team = Teams::findOne(['id' => $id]);
            return $this->render('add_photo', ['team'=>$team, 'forms'=>$forms]);
        }
	}
}