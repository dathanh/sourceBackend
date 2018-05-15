<?php
$this->Html->script('/admin/js/plugins/jcrop-modal/jquery.Jcrop', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/script', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/inputToCrop', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/pixastic/pixastic.core', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/pixastic/pixastic.jquery', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/pixastic/actions/rotate', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/pixastic/actions/resize', array('block' => true));
$this->Html->script('/admin/js/plugins/jcrop-modal/caman.full', array('block' => true));

$this->Html->css('/admin/css/plugins/jcrop-modal/css/style', array('block' => true));
$this->Html->css('/admin/css/plugins/jcrop-modal/css/jquery.Jcrop', array('block' => true));
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadImageModal">
    <i class="fa fa-cloud-upload"></i> Upload image
</button>

<!-- Modal -->
<div class="modal fade crop-photo-modal" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Upload image</h4>
            </div>
            <div class="modal-body">
                <div class="crop-avatar wrap-container">
                    <div class="upload-error clearfix">
                        <span class="icon glyphicon glyphicon-exclamation-sign pull-left"></span>
                        <p class="pull-left">Not support this extension</p>
                    </div>
                    <div class="crop-content">
                        <h3>Make sure you're looking your best...</h3>
                        <p>Photos have to be of you. Please upload one that shows your best professional self.</p>
                    </div>
                    <div class="crop-main-section clearfix">
                        <div class="process-photo pull-left">
                            <div class="upload-container">
                                <h4>Choose a Photo</h4>
                                <p>You can upload a JPEG, GIF, or PNG file (File size limit is 4 MB).</p>
                                <div class="upload-wrap">
                                    <input type="file" id="avatarInput"/>
                                </div>
                            </div>
                            <div class="crop-container">
                                <h4>Adjust Photo</h4>
                                <p>
                                    Drag the yellow square to change position and size.
                                    <a href="#" id="avatarInputLink" class="file_input_link">Change photo.</a>
                                </p>
                                <div class="crop-wrap">
                                    <div id="cropHere" class="crop-here"></div>
                                </div>
                                <div class="control-container">
                                    <div class="tmp-image-container"></div>
                                    <a title="Rotate to left" href="#" class="rotate rotate-left"></a>
                                    <a title="Rotate to right" href="#" class="rotate rotate-right"></a>
                                </div>
                            </div>
                        </div>
                        <!--<div class="preview-container pull-left">
                            <h4>Preview</h4>
                            <div class="preview-wrap clearfix">
                                <div class="preview-item p200x300 pull-left"></div>
                                <div class="preview-item p250x150 pull-left"></div>
                                <div class="preview-item p300x300 pull-left"></div>
                                <div class="preview-item p150x150 pull-left"></div>
                                <div class="preview-item p72x52 pull-left"></div>
                                <div class="preview-item p36x36 pull-left"></div>
                                <div class="preview-item p29x29 pull-left"></div>
                            </div>
                        </div>-->
                        <div class="loading-spinner"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="release" disabled="disabled" type="button" class="btn btn-primary pull-left">
                    <i class="glyphicon glyphicon-ok"></i> Save
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-remove"></i> Close
                </button>
            </div>
        </div>
    </div>
</div>
