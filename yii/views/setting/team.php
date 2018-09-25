<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
?>
<div id="index_portofolio">
    <ul class="breadcrumb push-down-0">
        <li><a href="#">Home</a></li>
        <li><a href="#">Setting</a></li>
        <li class="active">Team</li>
    </ul>
    <div class="content-frame">
        <div class="content-frame-top">                        
            <div class="page-title">                    
                <h2><span class="fa fa-image"></span> Team</h2>
            </div>                                      
            <div class="pull-right">                            
                <button class="btn btn-primary"><span class="fa fa-upload"></span> Upload</button>
                <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
            </div>                         
        </div>
        <div class="col-md-12">
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
                <a class="gallery-item" href="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" title="Nature Image 1" data-gallery>
                    <div class="image">                              
                        <img src="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" alt="Nature Image 1"/>                   
                        <ul class="gallery-item-controls">
                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                        </ul>                                                                    
                    </div>
                    <div class="meta">
                        <strong>Nature image 1</strong>
                        <span>Description</span>
                    </div>                                
                </a>
                <a class="gallery-item" href="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" title="Nature Image 1" data-gallery>
                    <div class="image">                              
                        <img src="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" alt="Nature Image 1"/>                   
                        <ul class="gallery-item-controls">
                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                        </ul>                                                                    
                    </div>
                    <div class="meta">
                        <strong>Nature image 1</strong>
                        <span>Description</span>
                    </div>                                
                </a>
                <a class="gallery-item" href="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" title="Nature Image 1" data-gallery>
                    <div class="image">                              
                        <img src="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" alt="Nature Image 1"/>                   
                        <ul class="gallery-item-controls">
                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                        </ul>                                                                    
                    </div>
                    <div class="meta">
                        <strong>Nature image 1</strong>
                        <span>Description</span>
                    </div>                                
                </a>
                <a class="gallery-item" href="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" title="Nature Image 1" data-gallery>
                    <div class="image">                              
                        <img src="<?= Url::base()?>/themes/joli/assets/images/gallery/nature-1.jpg" alt="Nature Image 1"/>                   
                        <ul class="gallery-item-controls">
                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                            <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                        </ul>                                                                    
                    </div>
                    <div class="meta">
                        <strong>Nature image 1</strong>
                        <span>Description</span>
                    </div>                                
                </a>
            </div>
        </div>
    </div>
</div>
