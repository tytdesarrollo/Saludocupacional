<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Formulario Actividades';
?>
<div class="site-about">
    <p>
        Hello world!!
    </p>

    <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#pag1" aria-controls="home" role="tab" data-toggle="tab">pag1</a></li>
    <li role="presentation"><a href="#pag2" aria-controls="profile" role="tab" data-toggle="tab">pag2</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
<!-- primer pagina -->
   <div role="tabpanel" class="tab-pane active" id="pag1">

    <div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Actividades</div>
	  <div class="panel-body">
		<!-- List group -->
		  <ul class="list-group">
		    <li class="list-group-item"><input type="radio"> PROBANDO1</li>
		    <li class="list-group-item"><input type="radio"> Dapibus ac facilisis in</li>
		    <li class="list-group-item"><input type="radio"> Morbi leo risus</li>
		    <li class="list-group-item"><input type="radio"> Porta ac consectetur ac</li>
		    <li class="list-group-item"><input type="radio"> Vestibulum at eros</li>
		  </ul>
	  </div>
	</div>

   </div>
    <div role="tabpanel" class="tab-pane" id="pag2">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Actividades</div>
		  <div class="panel-body">
			<!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item"><input type="radio"> PROBANDO1</li>
			    <li class="list-group-item"><input type="radio"> Dapibus ac facilisis in</li>
			    <li class="list-group-item"><input type="radio"> Morbi leo risus</li>
			    <li class="list-group-item"><input type="radio"> Porta ac consectetur ac</li>
			    <li class="list-group-item"><input type="radio"> Vestibulum at eros</li>
			  </ul>
		  </div>
		</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>

<script type="text/javascript">
	$('#myTabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
</script>