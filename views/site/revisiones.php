<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Revisiones';
?>
<div class="site-about">
	<h2>Revisiones</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="pull-left">
				<h3>Revisión Febrero<small>10/02/2017</small></h3>
			</div>
			<div class="pull-right">
				<button class="btn btn-info btn-fab btn-fab-mini">
					<i class="material-icons">&#xE8F4;</i>
				</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="pull-left">
				<h3>Revisión Marzo<small>08/03/2017</small></h3>
			</div>
			<div class="pull-right">
				<button class="btn btn-info btn-fab btn-fab-mini">
					<i class="material-icons">&#xE8F4;</i>
				</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="pull-left">
				<h3>Revisión Abríl<small>15/04/2017</small></h3>
			</div>
			<div class="pull-right">
				<button class="btn btn-info btn-fab btn-fab-mini">
					<i class="material-icons">&#xE8F4;</i>
				</button>
			</div>
		</div>
	</div>
	<div class="content-btn-float">
		<button class="btn btn-success btn-fab" data-toggle="modal" data-target="#modalCrearRevision">
			<i class="material-icons">&#xE145;</i>
		</button>
	</div>
</div>
<div class="modal fade" id="modalCrearRevision" tabindex="-1" role="dialog" aria-labelledby="modalCrearRevisionLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="modalCrearRevisionLabel" class="modal-title">Crear una revisión</h4>
      </div>
      <div class="modal-body">
        <p>Nombre de la revisión</p>
		<p>Nombre Revisador</p>
		<p>Firma</p>
		<p>Nombre Aprobador</p>
		<p>Firma</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button onclick="window.location.href='<?php echo Url::toRoute(['site/listitem']); ?>'" href="" type="button" class="btn btn-primary">Crear</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
