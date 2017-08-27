<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!--<?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>-->

    <div class="container">
        <!--<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>-->
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script>
	$(function () {
		$.material.init();
	});
</script>
<script>
	$(function () {
  
	// MAD-SELECT
		var madSelectHover = 0;
		$(".mad-select").each(function() {
			var $input = $(this).find("input"),
				$ul = $(this).find("> ul"),
				$ulDrop =  $ul.clone().addClass("mad-select-drop");

			$(this)
			  .append('<i class="material-icons">arrow_drop_down</i>', $ulDrop)
			  .on({
			  hover : function() { madSelectHover ^= 1; },
			  click : function() { $ulDrop.toggleClass("show");}
			});

			// PRESELECT
			$ul.add($ulDrop).find("li[data-value='"+ $input.val() +"']").addClass("selected");

			// MAKE SELECTED
			$ulDrop.on("click", "li", function(evt) {
			  evt.stopPropagation();
			  $input.val($(this).data("value")); // Update hidden input value
			  $ul.find("li").eq($(this).index()).add(this).addClass("selected")
				.siblings("li").removeClass("selected");
			});
			// UPDATE LIST SCROLL POSITION
			$ul.on("click", function() {
			  var liTop = $ulDrop.find("li.selected").position().top;
			  $ulDrop.scrollTop(liTop + $ulDrop[0].scrollTop);
			});
		});

		$(document).on("mouseup", function(){
			if(!madSelectHover) $(".mad-select-drop").removeClass("show");
		});
		  
	});
</script>
