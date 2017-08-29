<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Revisiones';
?>
<div class="main-health">
	<h2 class="main-title">Revisiones</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="pull-left">
				<h3 class="rev__title">Revisión Febrero<small>10/02/2017</small></h3>
			</div>
			<div class="rev__content-btn-view-detail">
				<button class="btn btn-info btn-fab btn-fab-mini">
					<i class="material-icons">&#xE8F4;</i>
				</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="pull-left">
				<h3 class="rev__title">Revisión Marzo<small>08/03/2017</small></h3>
			</div>
			<div class="rev__content-btn-view-detail">
				<button class="btn btn-info btn-fab btn-fab-mini">
					<i class="material-icons">&#xE8F4;</i>
				</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="pull-left">
				<h3 class="rev__title">Revisión Abril<small>15/04/2017</small></h3>
			</div>
			<div class="rev__content-btn-view-detail">
				<button class="btn btn-info btn-fab btn-fab-mini">
					<i class="material-icons">&#xE8F4;</i>
				</button>
			</div>
		</div>
	</div>
	<div class="rev__content-btn-addrev">
		<button class="btn btn-addrev btn-fab btn-raised" data-toggle="modal" data-target="#modalCrearRevision">
			<i class="material-icons">&#xE145;</i>
		</button>
	</div>
</div>
<div class="modal fade" id="modalCrearRevision" tabindex="-1" role="dialog" aria-labelledby="modalCrearRevisionLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="modalCrearRevisionLabel" class="modal-title">Crear una nueva revisión</h4>
      </div>
      <div class="modal-body">
        <div class="form-group label-floating">
			<label class="control-label" for="focusedInputNomRev">Nombre de la revisión</label>
			<input class="form-control" id="focusedInputNomRev" type="text">
		</div>
		<div class="form-group label-floating">
			<label class="control-label" for="focusedInputNomRevdor">Nombre del revisador</label>
			<input class="form-control" id="focusedInputNomRevdor" type="text">
		</div>
		<div class="form-group label-floating">
			<label class="control-label" for="focusedInputNomApdor">Nombre del Aprobador</label>
			<input class="form-control" id="focusedInputNomApdor" type="text">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button onclick="window.location.href='<?php echo Url::toRoute(['site/listitem']); ?>'" type="button" class="btn btn-info">Crear</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
