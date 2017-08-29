<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Lista de Actividades';
?>
<div class="main-health">
	<div class="row act__content-title">
		<h2 class="main-title">Actividades</h2>
	</div>
	<div class="row act__main-content">
		<div class="act__content-btn-additem">
			<button onclick="window.location.href='<?php echo Url::toRoute(['site/formitem']); ?>'" class="btn btn-additem btn-fab btn-raised">
				<i class="material-icons">&#xE145;</i>
			</button>
		</div>
		<div class="act__content-list">
			<ul class="act__list">
				<li>
					<div class="clearfix">
						<div class="pull-left">
							<div class="small-percent progress-green">
								1
							</div>
						</div>
						<div class="pull-left list-item-desc">
							<h3 class="rev__title">Actividad</h3>
						</div>
						<div class="pull-right list-item-actions">
							<button class="btn btn-info btn-fab btn-fab-mini">
								<i class="material-icons">&#xE150;</i>
							</button>
							<button class="btn btn-danger btn-fab btn-fab-mini">
								<i class="material-icons">&#xE14C;</i>
							</button>
						</div>
					</div>
				</li>
				<li>
					<div class="clearfix">
						<div class="pull-left">
							<div class="small-percent progress-orange">
								2
							</div>
						</div>
						<div class="pull-left list-item-desc">
							<h3 class="rev__title">Actividad</h3>
						</div>
						<div class="pull-right list-item-actions">
							<button class="btn btn-info btn-fab btn-fab-mini">
								<i class="material-icons">&#xE150;</i>
							</button>
							<button class="btn btn-danger btn-fab btn-fab-mini">
								<i class="material-icons">&#xE14C;</i>
							</button>
						</div>
					</div>
				</li>
				<li>
					<div class="clearfix">
						<div class="pull-left">
							<div class="small-percent progress-red">
								3
							</div>
						</div>
						<div class="pull-left list-item-desc">
							<h3 class="rev__title">Actividad</h3>
						</div>
						<div class="pull-right list-item-actions">
							<button class="btn btn-info btn-fab btn-fab-mini">
								<i class="material-icons">&#xE150;</i>
							</button>
							<button class="btn btn-danger btn-fab btn-fab-mini">
								<i class="material-icons">&#xE14C;</i>
							</button>
						</div>
					</div>
				</li>
				<li>
					<div class="clearfix">
						<div class="pull-left">
							<div class="small-percent progress-green">
								4
							</div>
						</div>
						<div class="pull-left list-item-desc">
							<h3 class="rev__title">Actividad</h3>
						</div>
						<div class="pull-right list-item-actions">
							<button class="btn btn-info btn-fab btn-fab-mini">
								<i class="material-icons">&#xE150;</i>
							</button>
							<button class="btn btn-danger btn-fab btn-fab-mini">
								<i class="material-icons">&#xE14C;</i>
							</button>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
