<?php
defined('_JEXEC') or die;
require dirname(__FILE__) . '/php/init.php';
?>
<head>
	<link href="/templates/grushovec/favicon.ico" rel="icon" type="image/x-icon" />
    <jdoc:include type="head" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/templates/grushovec/css/template.css">
	<script type="text/javascript" src="/templates/grushovec/js/libs/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="/templates/grushovec/js/libs/jquery.bgswitcher.js"></script>
	<script type="text/javascript" src="/templates/grushovec/js/template.js"></script>

</head>
<body>
	<?php $requestUrl = $_SERVER['REQUEST_URI']; ?>
	<?php if ($requestUrl == '/' || $requestUrl == '/ru/' || $requestUrl == '/ru' || $requestUrl == '/ua' || $requestUrl == '/ua/') : ?>
		<header class="main">
			<div class="header-wrap">
				<div class="logo">
					<jdoc:include type="modules" name="logo-main" />
				</div>
				<div class="menu-main">
					<jdoc:include type="modules" name="menu" />
				</div>
				<div class="phone-main">
					<jdoc:include type="modules" name="phone" />
				</div>
				<div class="langs-main">
					<jdoc:include type="modules" name="langs" />
				</div>
			</div>
		</header>
		<div class="clear"></div>
		
		<div class="top-slider">
			<jdoc:include type="modules" name="top-slider" />
		</div>
		
		<jdoc:include type="modules" name="short_about" />
		<div class="services">
			<jdoc:include type="modules" name="services" />
		</div>
		<div class="clear"></div>
		
		<div class="news">
			<?php if ($requestUrl == '/' || $requestUrl == '/ua' || $requestUrl == '/ua/') : ?>
				<div class="inner-header">
					<p>НОВИНИ</p>
				</div>
			<?php else : ?>
				<div class="inner-header">
					<p>НОВОСТИ</p>
				</div>
			<?php endif; ?>
			<div class="debiline-light"></div>
			<jdoc:include type="modules" name="news" />
		</div>
		
	<?php else : ?>
		<header>
			<div class="header-wrap">
				<div class="logo">
					<jdoc:include type="modules" name="logo" />
				</div>
				<div class="menu">
					<jdoc:include type="modules" name="menu" />
				</div>
				<div class="phone">
					<jdoc:include type="modules" name="phone" />
				</div>
				<div class="langs">
					<jdoc:include type="modules" name="langs" />
				</div>
			</div>
		</header>
		<div class="clear"></div>
	
		<div class="component-wrapper">
			
			<!-- show Joomla messages -->
			<?php if ($tpl->isError()) : ?>
				<jdoc:include type="message" />
			<?php endif; ?>
			
			<div class="breadcrumbs<?php echo(($requestUrl == '/kontakti' || $requestUrl == '/ru/kontakty') ? ' contactBread' : '') ?>">
				<div class="breadcrumbs-wrap">
					<jdoc:include type="modules" name="breadcrumbs" />
				</div>
			</div>

			<jdoc:include type="modules" name="pre_component" />
			<jdoc:include type="component" />
			<jdoc:include type="modules" name="post_component" />
		</div>
	<?php endif; ?>
	
	<div class="foo-place"></div>
	<?php if ($requestUrl == '/kontakti' || $requestUrl == '/ru/kontakty') : ?>
		<footer class="contacts-foo">
			<div class="footer-wrap">
				<div class="logo">
					<jdoc:include type="modules" name="logo" />
				</div>
				<div class="menu">
					<jdoc:include type="modules" name="menu" />
				</div>
				<div class="phone">
					<jdoc:include type="modules" name="phone" />
				</div>
				<div class="langs">
					<jdoc:include type="modules" name="langs" />
				</div>
				<div class="clear"></div>
				<div class="copyright-dark">Copyright <?php echo date("Y", time()); ?></div>
			</div>
		</footer>
	<?php else: ?>
		<footer>
			<div class="footer-wrap">
				<div class="logo">
					<jdoc:include type="modules" name="logo-main" />
				</div>
				<div class="menu-main">
					<jdoc:include type="modules" name="menu" />
				</div>
				<div class="phone-main">
					<jdoc:include type="modules" name="phone" />
				</div>
				<div class="langs-main">
					<jdoc:include type="modules" name="langs" />
				</div>
				<div class="clear"></div>
				<div class="copyright">Copyright <?php echo date("Y", time()); ?></div>
			</div>
		</footer>
	<?php endif; ?>

</body></html>
