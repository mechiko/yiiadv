<?php
	Yii::app()->clientScript->coreScriptPosition=CClientScript::POS_END;
	Yii::app()->clientscript
//		->registerCssFile( Yii::app()->baseUrl . '/css/bootstrap.css')
//		->registerCssFile( Yii::app()->baseUrl . '/css/bootstrap-theme.css')
//		->registerCssFile( Yii::app()->baseUrl . '/css/font-awesome.css')
		->registerCssFile( Yii::app()->baseUrl . '/css/my.css')
//		->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', CClientScript::POS_END)
//		->registerCoreScript('jquery')
//		->registerScriptFile(Yii::app()->baseUrl . '/js/modernizr.js', CClientScript::POS_HEAD)
//		->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap.js', CClientScript::POS_END)
		->registerScriptFile(Yii::app()->baseUrl . '/js/my.js', CClientScript::POS_END);
//		Yii::App()->clientScript->registerCoreScript('jquery');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->pageTitle; ?></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
<!--Uncomment when required-->
<!--<link rel="apple-touch-icon" href="images/apple-touch-icon.png">-->
<!--<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">-->
<!--<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">-->
</head>
<body>
<!-- Begin Body -->
<div class="container">
	<header>
		<h1 class="fa fa-home fa-3x"></h1>
	</header>
	<!-- Begin Navbar -->
	<div id="nav-wrapper" class="">
		<div id="nav" class="navbar affix">
			<div class="container">
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<b class="navbar-brand" href="#">Brand</b>
				<div class="navbar-collapse collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav navbar-nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/user/user/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
					<?php if (!Yii::app()->user->isGuest) : ?>
					<p class="navbar-text pull-right">Logged in as <a href="#"><?php echo Yii::app()->user->name ?></a></p>
					<?php endif; ?>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav pull-right navbar-nav">
						<li>
							<form class="navbar-form">
								<input type="text" class="form-control" placeholder="Search">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<li>
							<a href="#"><i class="fa fa-flag"></i> <span class="badge">2</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div><!-- /.navbar -->
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 columns">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>