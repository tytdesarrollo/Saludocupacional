<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Finalizar';
?>
<div class="main-health">
	<div class="fin__main-content">
		<div class="fin__content-percent text-center">
			<div class="percent">
				100%
			</div>
		</div>
		<div class="form-group text-center">
			<button class="btn btn-default btn-raised">
				Guardar
			</button>
		</div>
		<p>Enviar el reporte por correo electrónico.</p>
		<div class="form-group label-floating">
			<label class="control-label" for="email">Correo electrónico</label>
			  <div class="input-group">
					<input type="text" id="email" class="form-control">
					<span class="input-group-btn">
						<button type="button" class="btn btn-fab btn-fab-mini">
							<i class="material-icons">send</i>
						</button>
					</span>
			  </div>
		</div>
	</div>
</div>
