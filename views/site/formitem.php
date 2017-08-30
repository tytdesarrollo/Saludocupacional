<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Alert;
use yii\helpers\Url;

$this->title = 'Formulario Actividades';
?>
<div class="site-about text-center">
    
<!-- Configurar margin en estilos: .nav-tabs {margin-top: 25px;} tabs.less-->
<br>

    <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTabs" role="tablist">
    <li role="presentation" class="btn btn-info btn-fab btn-tabs" class="active"><a href="#pag1" aria-controls="uno" role="tab" data-toggle="tab">1</a></li>
    <li role="presentation" class="btn btn-info btn-fab btn-tabs"><a href="#pag3" aria-controls="tres" role="tab" data-toggle="tab">2</a></li>
    <li role="presentation" class="btn btn-info btn-fab btn-tabs"><a href="#pag4" aria-controls="cuatro" role="tab" data-toggle="tab">3</a></li>
    <li role="presentation" class="btn btn-info btn-fab btn-tabs"><a href="#pag5" aria-controls="cinco" role="tab" data-toggle="tab">4</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content text-left">
<!-- primer pagina -->
	<div role="tabpanel" class="tab-pane active" id="pag1">

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Actividades</div>
		  <div class="panel-body">
			<div class="form-group select-m">
				<!-- <label class="control-label" for="compagoSelect">Año</label> -->
				<div class="mad-select">
					<ul>
						<li data-value="1">Seleccionar</li>
						<li data-value="2">Elaboración del procedimiento para identificar los requisitos legales de SST aplicables al Banco Santander y evaluar su cumplimiento</li>
						<li data-value="3">Inspección instalaciones, extintores, luces de emergencia</li>
						<li data-value="4">Evaluaciòn puestos de trabajo</li>
						<li data-value="5">Análisis de vulnerabilidad e identificación de amenazas</li>
						<li data-value="6">Capacitaciòn y entrenamiento de brigadas</li>
					</ul>
					<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
				</div>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Rutinario / No Rutinario</div>
		  <div class="panel-body">
			<!-- List group -->
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario" id="optionsRadios1" value="option2">
					R
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario" id="optionsRadios2" value="option2">
					NR
			  </label>
			</div>
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
			<div class="form-group select-m">
				<div class="mad-select">
					<ul>
						<li data-value="1">Seleccionar</li>
						<li data-value="2">Efectos Sistémicos</li>
						<li data-value="3">Efectos Letales o Mortales</li>
						<li data-value="4">Efectos DIrectos(localizados)</li>
						<li data-value="5">Irritaciòn en la piel</li>
						<li data-value="6">Corrosiòn en la piel</li>
						<li data-value="7">Transmisiòn de Infecciones Ocupacionales</li>
						<li data-value="8">Inoculaciòn por pinchazo con aguja contaminada</li>
						<li data-value="9">Perdida audicion</li>
						<li data-value="10">perdida vision</li>
					</ul>
					<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
				</div>
			</div>
		  </div>
		</div>
		
		<div class="form-group text-right">
			<button onclick="myFunction()" class="btn btn-actions btn-raised" href="#pag3" aria-controls="dos" role="tab" data-toggle="tab">Siguiente</button>
		</div>

	</div>
<!-- Segunda pagina -->
    <div role="tabpanel" class="tab-pane" id="pag3">

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Riesgo</div>
		  <div class="panel-body">
			<div class="form-group select-m">
				<div class="mad-select">
					<ul>
						<li data-value="1">Seleccionar</li>
						<li data-value="2">RUIDO</li>
						<li data-value="3">ILUMINACION</li>
						<li data-value="4">TEMPERATURA EXTREMA</li>
						<li data-value="5">RADIACION IONIZANTE</li>
						<li data-value="6">RADIACION NO IONIZANTE</li>
						<li data-value="7">BIOLOGICOS</li>
						<li data-value="8">DE SEGURIDAD</li>
						<li data-value="9">SANEAMIENTO BASICO</li>
						<li data-value="10">POLVOS Y HUMOS</li>
						<li data-value="11">QUIMICOS - METALES</li>
						<li data-value="12">SOLVENTES</li>
						<li data-value="13">SICOSOCIALES</li>
						<li data-value="14">ERGONOMICOS</li>
						<li data-value="15">OTRO RIESGO</li>
						<li data-value="16">VIBRACIÓN</li>
						<li data-value="17">HUMEDAD</li>
						<li data-value="18">PRESIONES EXTREMAS</li>
						<li data-value="19">VENTILACIÓN</li>
						<li data-value="20">HUMOS METÁLICOS</li>
						<li data-value="21">GASES</li>
						<li data-value="22">VAPORES</li>
						<li data-value="23">LÍQUIDOS</li>
						<li data-value="24">VIRUS</li>
						<li data-value="25">RICKETSIAS Y CLAMIDIAS</li>
						<li data-value="26">BACTERIAS</li>
						<li data-value="27">HONGOS</li>
						<li data-value="28">PARÁSITOS</li>
						<li data-value="29">ROEDORES</li>
						<li data-value="30">INSECTOS</li>
						<li data-value="31">NO SE ESPECIFICA</li>
						<li data-value="32">CONDICIONES DEL INDIVIDUO</li>
						<li data-value="33">CONDICIONES INTERNAS DEL TRABAJO</li>
						<li data-value="34">MONOTONÍA</li>
						<li data-value="35">ACOSO LABORAL</li>
						<li data-value="36">CARGA DE TRABAJO ESTÁTICA</li>
						<li data-value="37">CARGA DE TRABAJO DINÁMICA</li>
						<li data-value="38">DISEÑO DE PUESTO DE TRABAJO</li>
						<li data-value="39">TRABAJO CON VIDEO TERMINALES</li>
						<li data-value="40">SOBRECARGA Y ESFUERZOS</li>
						<li data-value="41">POSTURAS CRÍTICAS</li>
						<li data-value="42">INSTALACIONES LOCATIVAS DEFECTUOSAS</li>
						<li data-value="43">MECÁNICOS (CAÍDA, ATRAPAMIENTO, GOLPE, CORTADURA, QUEMADURA)</li>
						<li data-value="44">ELÉCTRICOS</li>
						<li data-value="45">FUENTES GENERADORAS DE INCENDIO Y EXPLOSIÓN</li>
						<li data-value="46">ORDEN Y ASEO</li>
						<li data-value="47">ALMACENAMIENTO</li>
						<li data-value="48">SEGURIDAD PERSONAL</li>
						<li data-value="49">MANEJO DE VEHÍCULOS</li>
						<li data-value="50">SERVICIOS SANITARIOS EN MAL ESTADO</li>
						<li data-value="51">DISPOSICIÓN DE BASURAS, DESECHOS Y RESIDUOS</li>
						<li data-value="52">AGUA POTABLE</li>
						<li data-value="53">ALCANTARILLADO</li>
						<li data-value="54">DISPOSICIÓN DE SUSTANCIAS TÓXICAS</li>
						<li data-value="55">ACTIVIDAD DEPORTIVA</li>
						<li data-value="56">Repetitivo:  2 veces/ min., mínimo 40 – 50% de la jornada laboral</li>
						<li data-value="57">Posición de la muñeca:  en algunos estudios no es considerado factor de riesgo, cuando se encuentra solo este factor.</li>
						<li data-value="58">Fuerza:  es un factor importante de acuerdo con la cantidad:  cuando se encuentra que el peso es > de 5 libras.</li>
						<li data-value="59">Vibración:  30 veces / segundo.</li>
						<li data-value="60">Estrés mecánico:  roce de muñeca.</li>
						<li data-value="61">Temperaturas extremas frías:  disminuye la conducción nerviosa.</li>
						<li data-value="62">Anatómicos</li>
						<li data-value="63">Endocrinos</li>
						<li data-value="64">Obesidad</li>
						<li data-value="65">Trauma de muñeca</li>
						<li data-value="66">Raza</li>
						<li data-value="67">Otras patologías metabólicas o inflamatorias</li>
					</ul>
					<input type="hidden" id="compagoSelect" name="myOptions" value="1" class="form-control">
				</div>
			</div>
		  </div>
		</div>

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
			<div class="form-group label-floating">
				<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de procedimientos existentes</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario2" id="optionsRadios1" value="option2">
					No aplica
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario2" id="optionsRadios2" value="option2">
					Existen son satisfactorios y suficientes
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario" id="optionsRadios3" value="option2">
					Existen parcialmente y no son satisfactorios ò suficientes
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario2" id="optionsRadios4" value="option2">
					No existen
			  </label>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de capacitación</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario3" id="optionsRadios1" value="option2">
					No aplica
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario3" id="optionsRadios2" value="option2">
					Personal entrenado. Conoce el peligro y lo previene
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario3" id="optionsRadios3" value="option2">
					Personal parcialmente entrenado, conoce el peligro pero no toma acciones de control
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario3" id="optionsRadios4" value="option2">
					Personal no entrenado, no conoce el peligro,no toma acciones de control
			  </label>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Exposición al Peligro</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario4" id="optionsRadios1" value="option2">
					"- Al menos una vez al año. <br>
					- Esporadicamente. <br>
					- Alguna vez en su jornada laboral y con periodo corto de tiempo."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario4" id="optionsRadios2" value="option2">
					"- Al menos una sola vez al mes. <br>
					- Eventualmente. <br>
					- Varias veces en su jornada laboral,aunque sea con tiempos cortos."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario4" id="optionsRadios3" value="option2">
					"* Al menos una vez al dia. <br>
					* Permanentemente, continuamente o varias veces en su jornada laboral con tiempo prolongado."
			  </label>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Probabilidad</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item">
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
				</li>
				<li class="list-group-item"><!--<input type="button" value="Verificar" onclick="verificar()">-->
				<button class="btn btn-default btn-raised">Verificar</button></li></li>
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
				<li class="list-group-item">
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
				<!--<input type="text" name="verificacion">--> </li>
				<li class="list-group-item"><!-- Accent-colored raised button with ripple -->
				<button class="btn btn-default btn-raised">Verificar</button></li></li>
			</ul>
		  </div>
		</div>
		
		<div class="form-group text-center">
			<button onclick="myFunction()" class="btn btn-actions btn-raised" href="#pag2" aria-controls="dos" role="tab" data-toggle="tab">Anterior</button>
			<button onclick="myFunction()" class="btn btn-actions btn-raised" href="#pag4" aria-controls="dos" role="tab" data-toggle="tab">Siguiente</button>
		</div>
		
    </div>
<!-- Tercera pagina -->
    <div role="tabpanel" class="tab-pane" id="pag4">
		
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Riesgo Puro</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario5" id="optionsRadios1" value="option2">
					<strong>Ligeramente dañino:</strong> "- Lesión sin incapacidad: pequeños cortes o magulladuras, irritación de ojos por polvo. <br>
					&nbsp;&nbsp; - Molestias e incomodidad: dolor de cabeza."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario5" id="optionsRadios2" value="option2">
					 <strong>Dañino:</strong> "- Lesión con incapacidad temporal: fracturas menores. <br>
					&nbsp;&nbsp; - Daños a la salud reversible: sordera, dermatitis, asma, trastornos, músculo-esqueléticos"
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario5" id="optionsRadios3" value="option2">
					 <strong>Extremadamente dañino:</strong> "Lesión con incapacidad permanente: amputaciones, fracturas mayores. Muerte. <br>
					&nbsp;&nbsp; - Daño a la salud irreversible: intoxicaciones, lesiones múltiples, lesiones fatales."
			  </label>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Actividad Critica</div>
		  <div class="panel-body">
			<!-- Textfield with Floating Label -->
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
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
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
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
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
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
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
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
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
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
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div>
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
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario6" id="optionsRadios1" value="option2">
					No aplica
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario6" id="optionsRadios2" value="option2">
					Existen son satisfactorios y suficientes
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario6" id="optionsRadios3" value="option2">
					Existen parcialmente y no son satisfactorios ò suficientes
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario6" id="optionsRadios4" value="option2">
					No existen
			  </label>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de capacitación</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario7" id="optionsRadios1" value="option2">
					No aplica
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario7" id="optionsRadios2" value="option2">
					Personal entrenado. Conoce el peligro y lo previene
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario7" id="optionsRadios3" value="option2">
					Personal parcialmente entrenado, conoce el peligro pero no toma acciones de control
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario7" id="optionsRadios4" value="option2">
					Personal no entrenado, no conoce el peligro,no toma acciones de control
			  </label>
			</div>
		  </div>
		</div>
		
		<div class="form-group text-center">
			<button onclick="myFunction()" class="btn btn-actions btn-raised" href="#pag3" aria-controls="dos" role="tab" data-toggle="tab">Anterior</button>
			<button onclick="myFunction()" class="btn btn-actions btn-raised" href="#pag5" aria-controls="dos" role="tab" data-toggle="tab">Siguiente</button>
		</div>

    </div>
<!-- Tercera pagina -->
    <div role="tabpanel" class="tab-pane" id="pag5">
	
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Exposición al Peligro</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario8" id="optionsRadios1" value="option2">
					"- Al menos una vez al año. <br>
				- Esporadicamente. <br>
				- Alguna vez en su jornada laboral y con periodo corto de tiempo."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario8" id="optionsRadios2" value="option2">
					"- Al menos una sola vez al mes. <br>
				- Eventualmente. <br>
				- Varias veces en su jornada laboral,aunque sea con tiempos cortos."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario8" id="optionsRadios3" value="option2">
					"* Al menos una vez al dia. <br>
				* Permanentemente, continuamente o varias veces en su jornada laboral con tiempo prolongado."
			  </label>
			</div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Indice de Probabilidad</div>
		  <div class="panel-body">
			<!-- List group -->
			<ul class="list-group">
				<li class="list-group-item">
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div></li>
				<li class="list-group-item"><!--<input type="button" value="Verificar" onclick="verificar()">-->
				<button class="btn btn-default btn-raised">Verificar</button></li></li>
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
				<li class="list-group-item">
					<div class="form-group label-floating">
						<input class="form-control" id="focusedInput1" type="number" name="points" min="0" max="100">
					</div></li>
				<li class="list-group-item"><!-- Accent-colored raised button with ripple -->
				<button class="btn btn-default btn-raised">Verificar</button></li>
			</ul>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Riesgo Residual</div>
		  <div class="panel-body">
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario9" id="optionsRadios1" value="option2">
					<strong>Intolerable (IT):</strong> "No se debe comenzar ni continuar el trabajo hasta que se reduzca el riesgo. Si no es posible reducir el riesgo, incluso con recursos ilimitados, debe prohibirse el trabajo."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario9" id="optionsRadios2" value="option2">
					<strong>Importante (IM):</strong> "No debe comenzarse en el trabajo hasta que se haya reducido el riesgo. Puede que se precisen recursos considerables para controlar el riesgo. Cuando el riesgo corresponda a un trabajo que se ésta realizando, debe remediarse el problema en un tiempo inferior al de los riesgos moderados."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario9" id="optionsRadios3" value="option2">
					<strong>Moderado (M):</strong> "Se deben hacer esfuerzos para reducir el riesgo, determinando las inversiones precisas. Las medidas para reducir el riesgo deben implantarse en un periodo determinado.	<br>
				&nbsp;&nbsp; - Cuando el riesgo moderado está asociado con consecuencias extremadamente dañinas (mortal o muy graves), se precisará una acción posterior para establecer, con más precisión, la probabilidad de daño como base para determinar la necesidad de mejora de las medidas de control.	"
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario9" id="optionsRadios4" value="option2">
					<strong>Aceptable (TO):</strong> "No se necesita mejorar la acción preventiva.	<br>
				&nbsp;&nbsp; - Sin embargo se deben considerar soluciones rentables o mejoras que no supongan una carga económica importante. <br>
				&nbsp;&nbsp; - Se requieren comprobaciones periódicas para asegurar que se mantiene la eficacia de las medidas de control."
			  </label>
			</div>
			<div class="radio radio-primary">
			  <label>
				<input type="radio" name="rutinario9" id="optionsRadios5" value="option2">
					<strong>Trivial (T):</strong> "No se necesita adoptar ninguna acción."
			  </label>
			</div>
		  </div>
		</div>
		
		<div class="form-group text-center">
			<div class="form-group text-center">
			<button onclick="myFunction()" class="btn btn-actions btn-raised" href="#pag4" aria-controls="dos" role="tab" data-toggle="tab">Anterior</button>
			<!--<button onclick="window.location.href='<?php echo Url::toRoute(['site/listitem']); ?>'" class="btn btn-default btn-raised">
				Cancelar
			</button>-->
			<button onclick="window.location.href='<?php echo Url::toRoute(['site/finalizar']); ?>'" class="btn btn-actions btn-raised">
				Finalizar
			</button>
		</div>
		
    </div>

  </div>

	

<!-- Configurar margin en estilos: .nav-tabs {margin-bottom: 25px;} tabs.less-->
<br>

</div>

<script type="text/javascript">
	$('#myTabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})

	$('#myTabs a[href="#pag2"]').tab('show') // Select tab by name
	$('#myTabs a:uno').tab('show') // Select first tab
	$('#myTabs a:tres').tab('show') // Select last tab
</script>



<script>
function myFunction() {
    $("body,html").animate({scrollTop : 0}, 500);
    return false;
}
</script>