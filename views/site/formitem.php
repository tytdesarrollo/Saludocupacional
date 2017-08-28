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
    
<!-- Configurar margin en estilos: .nav-tabs {margin-top: 25px;} tabs.less-->
<br>

    <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTabs" role="tablist">
    <li role="presentation" class="btn btn-info btn-fab" class="active"><a href="#pag1" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
    <li role="presentation" class="btn btn-info btn-fab"><a href="#pag2" aria-controls="profile" role="tab" data-toggle="tab">2</a></li>
    <li role="presentation" class="btn btn-info btn-fab"><a href="#pag3" aria-controls="messages" role="tab" data-toggle="tab">3</a></li>
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
				<li class="list-group-item"><input type="radio" name="actividades"> Elaboración del procedimiento para identificar los requisitos legales de SST aplicables al Banco Santander y evaluar su cumplimiento</li>
				<li class="list-group-item"><input type="radio" name="actividades"> Inspección instalaciones, extintores, luces de emergencia</li>
				<li class="list-group-item"><input type="radio" name="actividades"> Evaluaciòn puestos de trabajo</li>
				<li class="list-group-item"><input type="radio" name="actividades"> Análisis de vulnerabilidad e identificación de amenazas</li>
				<li class="list-group-item"><input type="radio" name="actividades"> Capacitaciòn y entrenamiento de brigadas</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Rutinario / No Rutinario</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio" name="rutinario"> R</li>
				<li class="list-group-item"><input type="radio" name="rutinario"> NR</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Puesto</div>
		  <div class="panel-body">
			<!-- List group -->
				<div class="form-group select-m">
					<!-- <label class="control-label" for="compagoSelect">Año</label> -->
					<div class="mad-select">
						<ul>
							<li data-value="1">Seleccionar</li>
							<li data-value="2">Sala de cirugias</li>
							<li data-value="3">Oficina</li>
							<li data-value="4">Quirofanos</li>
							<li data-value="5">Cafeteria</li>
							<li data-value="6">Obra en proyecto de construccion</li>
						</ul>
						<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
					</div>
				</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Grupos de especial riesgo</div>
		  <div class="panel-body">
			<!-- List group -->
				<div class="form-group select-m">
					<!-- <label class="control-label" for="compagoSelect">Año</label> -->
					<div class="mad-select">
						<ul>
							<li data-value="1">Seleccionar</li>
							<li data-value="2">FISICO</li>
							<li data-value="3">QUIMICO</li>
							<li data-value="4">ERGONOMICO</li>
							<li data-value="5">PSICOLABORAL</li>
							<li data-value="6">LOCATIVO</li>
							<li data-value="7">PUBLICO</li>
							<li data-value="8">BIOLÓGICOS</li>
							<li data-value="9">DE SEGURIDAD</li>
							<li data-value="10">OTROS</li>
							<li data-value="11">SANEAMIENTO BÁSICO AMBIENTAL</li>
							<li data-value="12">NO OCUPACIONAL</li>
						</ul>
						<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
					</div>
				</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Peligro</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio" name="opcion"> Efectos Sistèmicos</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Efectos Letales o Mortales</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Efectos DIrectos(localizados)</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Irritaciòn en la piel</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Corrosiòn en la piel</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Transmisiòn de Infecciones Ocupacionales</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Inoculaciòn por pinchazo con aguja contaminada</li>
				<li class="list-group-item"><input type="radio" name="opcion"> Perdida audicion</li>
				<li class="list-group-item"><input type="radio" name="opcion"> perdida vision</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Riesgo</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio" name="riesgo"> RUIDO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ILUMINACION</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> TEMPERATURA EXTREMA</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> RADIACION IONIZANTE</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> RADIACION NO IONIZANTE</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> BIOLOGICOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> DE SEGURIDAD</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> SANEAMIENTO BASICO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> POLVOS Y HUMOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> QUIMICOS - METALES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> SOLVENTES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> SICOSOCIALES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ERGONOMICOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> OTRO RIESGO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> VIBRACIÓN</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> HUMEDAD</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> PRESIONES EXTREMAS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> VENTILACIÓN</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> HUMOS METÁLICOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> GASES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> VAPORES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> LÍQUIDOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> VIRUS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> RICKETSIAS Y CLAMIDIAS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> BACTERIAS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> HONGOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> PARÁSITOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> INSECTOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ROEDORES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> NO SE ESPECIFICA</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> CONDICIONES DEL INDIVIDUO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> CONDICIONES INTERNAS DEL TRABAJO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> MONOTONÍA</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ACOSO LABORAL</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> CARGA DE TRABAJO ESTÁTICA</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> CARGA DE TRABAJO DINÁMICA</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> DISEÑO DE PUESTO DE TRABAJO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> TRABAJO CON VIDEO TERMINALES</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> SOBRECARGA Y ESFUERZOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> POSTURAS CRÍTICAS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> INSTALACIONES LOCATIVAS DEFECTUOSAS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> MECÁNICOS (CAÍDA, ATRAPAMIENTO, GOLPE, CORTADURA, QUEMADURA)</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ELÉCTRICOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> FUENTES GENERADORAS DE INCENDIO Y EXPLOSIÓN</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ORDEN Y ASEO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ALMACENAMIENTO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> SEGURIDAD PERSONAL</li>

				<li class="list-group-item"><input type="radio" name="riesgo"> MANEJO DE VEHÍCULOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> SERVICIOS SANITARIOS EN MAL ESTADO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> DISPOSICIÓN DE BASURAS, DESECHOS Y RESIDUOS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> AGUA POTABLE</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ALCANTARILLADO</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> DISPOSICIÓN DE SUSTANCIAS TÓXICAS</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> ACTIVIDAD DEPORTIVA</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Repetitivo:  2 veces/ min., mínimo 40 – 50% de la jornada laboral</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Posición de la muñeca:  en algunos estudios no es considerado factor de riesgo, cuando se encuentra solo este factor.</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Fuerza:  es un factor importante de acuerdo con la cantidad:  cuando se encuentra que el peso es > de 5 libras. </li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Vibración:  30 veces / segundo.</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Estrés mecánico:  roce de muñeca.</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Temperaturas extremas frías:  disminuye la conducción nerviosa.</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Anatómicos</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Endocrinos</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Obesidad</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Embarazo</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Trauma de muñeca</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Raza</li>
				<li class="list-group-item"><input type="radio" name="riesgo"> Otras patologías metabólicas o inflamatorias</li>
			</ul>
		  </div>
		</div>

	</div>
<!-- Segunda pagina -->
    <div role="tabpanel" class="tab-pane" id="pag2">

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Severidad del riesgo</div>
		  <div class="panel-body">
			<!-- List group -->
				<div class="form-group select-m">
					<!-- <label class="control-label" for="compagoSelect">Año</label> -->
					<div class="mad-select">
						<ul>
							<li data-value="1">Seleccionar</li>
							<li data-value="2">Nivel 2 - Bajo</li>
							<li data-value="3">Nivel 6 - Medio</li>
							<li data-value="4">Nivel 10 - Alto</li>
						</ul>
						<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
					</div>
				</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Personas expuestas</div>
		  <div class="panel-body">
			<!-- List group -->
			<input type="number" name="points" min="0" max="100" step="1" value="0">
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de procedimientos existentes</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio"> No aplica</li>
				<li class="list-group-item"><input type="radio"> Existen son satisfactorios y suficientes</li>
				<li class="list-group-item"><input type="radio"> Existen parcialmente y no son satisfactorios ò suficientes</li>
				<li class="list-group-item"><input type="radio"> No existen</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de capacitación</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio"> No aplica</li>
				<li class="list-group-item"><input type="radio"> Personal entrenado. Conoce el peligro y lo previene</li>
				<li class="list-group-item"><input type="radio"> Personal parcialmente entrenado, conoce el peligro pero no toma acciones de control</li>
				<li class="list-group-item"><input type="radio"> Personal no entrenado, no conoce el peligro,no toma acciones de control</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Exposición al Peligro</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio" name="deposito" value="1">
				"- Al menos una vez al año. <br>
				- Esporadicamente. <br>
				- Alguna vez en su jornada laboral y con periodo corto de tiempo."</li>
				<li class="list-group-item"><input type="radio" name="deposito" value="2">
				"- Al menos una sola vez al mes. <br>
				- Eventualmente. <br>
				- Varias veces en su jornada laboral,aunque sea con tiempos cortos."</li>
				<li class="list-group-item"><input type="radio" name="deposito" value="3">
				"* Al menos una vez al dia. <br>
				* Permanentemente, continuamente o varias veces en su jornada laboral con tiempo prolongado."</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Probabilidad</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="text" name="verificacion"></li>
				<li class="list-group-item"><input type="button" value="Verificar" onclick="verificar()"></li>
		<script>
		var saldo = 0,
		deposito;
			function verificar() {
				deposito = parseFloat(document.getElementsByName("deposito")[0].value);
				saldo = saldo + deposito;
        		document.getElementsByName("verificacion")[0].value = saldo;
    		}
		</script>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Severidad</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="text" name="verificacion"></li>
				<li class="list-group-item"><!-- Accent-colored raised button with ripple -->
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Button</button></li>
			</ul>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Riesgo Puro</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio"> <strong>Ligeramente dañino:</strong> "- Lesión sin incapacidad: pequeños cortes o magulladuras, irritación de ojos por polvo. <br>
				&nbsp;&nbsp; - Molestias e incomodidad: dolor de cabeza."</li>
				<li class="list-group-item"><input type="radio"> <strong>Dañino:</strong> "- Lesión con incapacidad temporal: fracturas menores. <br>
				&nbsp;&nbsp; - Daños a la salud reversible: sordera, dermatitis, asma, trastornos, músculo-esqueléticos"</li>
				<li class="list-group-item"><input type="radio"> <strong>Extremadamente dañino:</strong> "Lesión con incapacidad permanente: amputaciones, fracturas mayores. Muerte. <br>
				&nbsp;&nbsp; - Daño a la salud irreversible: intoxicaciones, lesiones múltiples, lesiones fatales."</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Actividad Critica</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <!-- <label class="mdl-textfield__label" for="sample3">Escribir...</label> -->
			  </div>
			</form>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Eliminación</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			  </div>
			</form>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Sustitución</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			  </div>
			</form>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Ingeniería o Aislamiento</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			  </div>
			</form>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Control Administrativo</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			  </div>
			</form>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Equipo de Protección Personal</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			  </div>
			</form>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Personas expuestas</div>
		  <div class="panel-body">
			<!-- List group -->
				<div class="form-group select-m">
					<!-- <label class="control-label" for="compagoSelect">Año</label> -->
					<div class="mad-select">
						<ul>
							<li data-value="1">Seleccionar</li>
							<li data-value="2">de 1 a 3</li>
							<li data-value="3">de 4 a 12</li>
							<li data-value="4">mas de 12</li>
						</ul>
						<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
					</div>
				</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de procedimientos existentes</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio"> No aplica</li>
				<li class="list-group-item"><input type="radio"> Existen son satisfactorios y suficientes</li>
				<li class="list-group-item"><input type="radio"> Existen parcialmente y no son satisfactorios ò suficientes</li>
				<li class="list-group-item"><input type="radio"> No existen</li>
			</ul>
		  </div>
		</div>

    </div>
<!-- Tercera pagina -->
    <div role="tabpanel" class="tab-pane" id="pag3">

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de capacitación</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio"> No aplica</li>
				<li class="list-group-item"><input type="radio"> Personal entrenado. Conoce el peligro y lo previene</li>
				<li class="list-group-item"><input type="radio"> Personal parcialmente entrenado, conoce el peligro pero no toma acciones de control</li>
				<li class="list-group-item"><input type="radio"> Personal no entrenado, no conoce el peligro,no toma acciones de control</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Exposición al Peligro</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio" name="deposito" value="1">
				"- Al menos una vez al año. <br>
				- Esporadicamente. <br>
				- Alguna vez en su jornada laboral y con periodo corto de tiempo."</li>
				<li class="list-group-item"><input type="radio" name="deposito" value="2">
				"- Al menos una sola vez al mes. <br>
				- Eventualmente. <br>
				- Varias veces en su jornada laboral,aunque sea con tiempos cortos."</li>
				<li class="list-group-item"><input type="radio" name="deposito" value="3">
				"* Al menos una vez al dia. <br>
				* Permanentemente, continuamente o varias veces en su jornada laboral con tiempo prolongado."</li>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Probabilidad</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="text" name="verificacion"></li>
				<li class="list-group-item"><input type="button" value="Verificar" onclick="verificar()"></li>
		<script>
		var saldo = 0,
		deposito;
			function verificar() {
				deposito = parseFloat(document.getElementsByName("deposito")[0].value);
				saldo = saldo + deposito;
        		document.getElementsByName("verificacion")[0].value = saldo;
    		}
		</script>
			</ul>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Severidad</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="text" name="verificacion"></li>
				<li class="list-group-item"><!-- Accent-colored raised button with ripple -->
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Button</button></li>
			</ul>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Riesgo Residual</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item"><input type="radio"> <strong>Intolerable (IT):</strong> "No se debe comenzar ni continuar el trabajo hasta que se reduzca el riesgo. Si no es posible reducir el riesgo, incluso con recursos ilimitados, debe prohibirse el trabajo."</li>
				<li class="list-group-item"><input type="radio"> <strong>Importante (IM):</strong> "No debe comenzarse en el trabajo hasta que se haya reducido el riesgo. Puede que se precisen recursos considerables para controlar el riesgo. Cuando el riesgo corresponda a un trabajo que se ésta realizando, debe remediarse el problema en un tiempo inferior al de los riesgos moderados."</li>
				<li class="list-group-item"><input type="radio"> <strong>Moderado (M):</strong> "Se deben hacer esfuerzos para reducir el riesgo, determinando las inversiones precisas. Las medidas para reducir el riesgo deben implantarse en un periodo determinado.	<br>
				&nbsp;&nbsp; - Cuando el riesgo moderado está asociado con consecuencias extremadamente dañinas (mortal o muy graves), se precisará una acción posterior para establecer, con más precisión, la probabilidad de daño como base para determinar la necesidad de mejora de las medidas de control.	"</li>
				<li class="list-group-item"><input type="radio"> <strong>Aceptable (TO):</strong> "No se necesita mejorar la acción preventiva.	<br>
				&nbsp;&nbsp; - Sin embargo se deben considerar soluciones rentables o mejoras que no supongan una carga económica importante. <br>
				&nbsp;&nbsp; - Se requieren comprobaciones periódicas para asegurar que se mantiene la eficacia de las medidas de control."</li>
				<li class="list-group-item"><input type="radio"> <strong>Trivial (T):</strong> "No se necesita adoptar ninguna acción."</li>
			</ul>
		  </div>
		</div>
		
		<div class="form-group text-center">
			<button onclick="window.location.href='<?php echo Url::toRoute(['site/finalizar']); ?>'" class="btn btn-default btn-raised">
				Finalizar
			</button>
		</div>
		
    </div>

  </div>

	<!-- Nav tabs -->
	  <ul class="nav nav-tabs" id="myTabs" role="tablist">
	    <li role="presentation" class="btn btn-info btn-fab" class="active"><a href="#pag1" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
	    <li role="presentation" class="btn btn-info btn-fab"><a href="#pag2" aria-controls="profile" role="tab" data-toggle="tab">2</a></li>
	    <li role="presentation" class="btn btn-info btn-fab"><a href="#pag3" aria-controls="messages" role="tab" data-toggle="tab">3</a></li>
	  </ul>

<!-- Configurar margin en estilos: .nav-tabs {margin-bottom: 25px;} tabs.less-->
<br>

</div>

<script type="text/javascript">
	$('#myTabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})

	$('#myTabs a[href="#pag2"]').tab('show') // Select tab by name
	$('#myTabs a:home').tab('show') // Select first tab
	$('#myTabs a:messages').tab('show') // Select last tab
</script>