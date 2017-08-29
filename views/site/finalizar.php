<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Finalizar';
?>
<div class="row main-health fin__main">
	<div class="fin__main-content txt-white">
		<div class="box-bg bg-green-grad"></div>
		<h2 class="main-title">Completado</h2>
		<div class="fin__content-percent text-center">
			<div class="percent">
				100%
			</div>
		</div>
		<div class="form-group fin__content-buttons text-center">
			<button class="btn btn-black btn-raised">
				Exportar
			</button>
			<button onclick="window.location.href='<?php echo Url::toRoute(['site/listitem']); ?>'" class="btn btn-white btn-raised">
				Guardar
			</button>
		</div>
	</div>
	<div class="fin__content-email">
		<p class="txt-desc">Enviar el reporte por correo electrónico.</p>
		<div class="form-group label-floating">
			<label class="control-label" for="email">Correo electrónico</label>
			  <div class="input-group">
					<input type="text" id="email" class="form-control">
					<span class="input-group-btn">
						<button type="button" class="btn btn-info btn-fab btn-fab-mini">
							<i class="material-icons">send</i>
						</button>
					</span>
			  </div>
		</div>
	</div>
</div>
