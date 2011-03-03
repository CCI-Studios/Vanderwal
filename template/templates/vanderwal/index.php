<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />

	<link rel="stylesheet" href="/templates/vanderwal/css/template.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>

<body>
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

		<div id="content">
			<div id="component"><div>
				<jdoc:include type="component" />
			</div></div>

			<div id="bottom"><div>
				<jdoc:include type="modules" name="bottom" style="xhtml" />
			</div></div>
		</div>

		<div id="footer-spacer"></div>
		<div id="footer"><div>
			<jdoc:include type="modules" name="footer" style="xhtml" />
		</div></div>
	</div>

	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="raw" />
	</div>
</body>
</html>
