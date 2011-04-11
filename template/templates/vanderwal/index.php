<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
$testing = "true";

JHtml::_('behavior.mootools');
?>
<html>
<head>
	<jdoc:include type="head" />

	<link rel="stylesheet" href="/templates/vanderwal/css/template.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script src="/templates/vanderwal/js/columns.js" ></script>
	<script src="/templates/vanderwal/js/html5.js" ></script>

	<link rel="shortcut icon" type="image/x-icon" href="/templates/vanderwal/images/favicon.ico" />
</head>

<body class="<?php echo $menu; ?>">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22079717-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

	<div id="wrapper">
		<div id="top"><div><div>
			<jdoc:include type="modules" name="top" style="xhtml" />
		</div></div></div>

		<div id="logo"><div>
			<jdoc:include type="modules" name="logo" style="xhtml" />
		</div></div>

		<div id="menu"><div>
			<jdoc:include type="modules" name="menu" style="xhtml" />
		</div></div>

		<?php if ($this->countModules('user1')): ?>
		<div id="user1"><div>
			<jdoc:include type="modules" name="user1" style="xhtml" />
		</div></div>
		<?php endif; ?>

		<div id="content"><div><div><div>
			<div id="title">
				<h1><?php
					echo JFactory::getApplication('site')->getPageTitle();
				?></h1>
			</div>

			<?php if ($this->countModules('sidebar')): ?>
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="xhtml" />
			</div>
			<?php endif; ?>

			<div id="component" <?php echo ($this->countModules('sidebar'))? '':'class="wide"'; ?>>
				<jdoc:include type="component" />
			</div>

			<div class="clr"></div>
		</div></div></div></div>

		<?php if ($this->countModules('bottom')): ?>
		<div id="bottom"><div>
			<jdoc:include type="modules" name="bottom" style="rounded" />

			<div class="clr"></div>
		</div></div>
		<?php endif; ?>

		<div id="footer-spacer"></div>
		<div id="footer"><div>
			<jdoc:include type="modules" name="footer" style="xhtml" />
			&copy; <?php echo date('Y'); ?> VanderWal All Rights Reserved.<br/>
			<br/><br/>
			Site by <a href="http://www.ccistudios.com" target="_blank">CCI Studios</a>
		</div></div>
	</div>

	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="raw" />
	</div>
</body>
</html>
