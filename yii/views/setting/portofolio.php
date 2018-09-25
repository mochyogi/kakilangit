<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
$this->registerJsFile(Url::base().'/themes/joli/js/plugins/dropzone/dropzone.min.js');
$imageurl = ($_SERVER['HTTP_HOST'] == 'kaki-langit.com') ? '/upload/portofolio' : '/upload/portofolio' ;
?>
<div id="index_portofolio">
    <?php
    echo Alert::widget([
        'options' => [
            'class' => 'alert-success',
        ],
        'body' => '[SUCCESS] Ini adalah alert',
    ]);
    ?>
	<div class="content-frame">
		<div class="content-frame-top">                        
	        <div class="page-title">                    
	            <h2><span class="fa fa-image"></span> Gallery</h2>
	        </div>                                                              
	    </div>
        <div class="content-frame-right">               
            <div class="block push-up-10">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'tipe')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'file_gambar')->fileInput()->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>                        
            <h4>Groups:</h4>
            <div class="list-group border-bottom push-down-20">
                <a href="#" class="list-group-item active">All <span class="badge badge-primary">12</span></a>
                <a href="#" class="list-group-item">Nature <span class="badge badge-success">7</span></a>
                <a href="#" class="list-group-item">Music <span class="badge badge-danger">3</span></a>
                <a href="#" class="list-group-item">Space <span class="badge badge-info">2</span></a>
                <a href="#" class="list-group-item">Girls <span class="badge badge-warning">3</span></a>
            </div>                                                
            <h4>Tags:</h4>
            <ul class="list-tags">
                <li><a href="#"><span class="fa fa-tag"></span> amet</a></li>
                <li><a href="#"><span class="fa fa-tag"></span> rutrum</a></li>
                <li><a href="#"><span class="fa fa-tag"></span> nunc</a></li>
                <li><a href="#"><span class="fa fa-tag"></span> tempor</a></li>
                <li><a href="#"><span class="fa fa-tag"></span> eros</a></li>
                <li><a href="#"><span class="fa fa-tag"></span> suspendisse</a></li>
                <li><a href="#"><span class="fa fa-tag"></span> dolor</a></li>
            </ul>
        </div>
	    <div class="content-frame-body content-frame-body-left">
	    	<div class="pull-left push-up-10">
                <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
            </div>
            <div class="pull-right push-up-10">
                <div class="btn-group">
                    <button class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</button>
                    <button class="btn btn-primary"><span class="fa fa-trash-o"></span> Delete</button>
                </div>                            
            </div>
            
            <div class="gallery" id="links">
                <?php if (count($galleries) > 0) { ?>
                    <?php foreach ($galleries as $item): ?>
                        <a class="gallery-item" href="<?= $item->gambar?>" title="Nature Image 1" data-gallery>
                            <div class="image">    
                            <img src="<?php echo $item->gambar; ?>" class="img-circle" alt="User Image"/>
                                <img src="<?= $item->gambar?>" alt="Nature Image 1"/>                   
                                <ul class="gallery-item-controls">
                                    <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                </ul>                                                                    
                            </div>
                            <div class="meta">
                                <strong><?= $item->title?></strong>
                                <span><?= $item->gambar?></span>
                            </div>                                
                        </a>
                    <?php endforeach; ?>
                <?php } else { ?>
                <tr>
                    <td style="text-align:center;font-size:15px;padding:25px;" colspan="5">No data found...</td>
                </tr>
                <?php } ?>
            	
            </div>
	    </div>
	</div>
</div>
