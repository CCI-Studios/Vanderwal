Important Notes:

When installing the template overrides do not overwrite any existing files of your current template.
If some of the files already exist your template is already using overrides.
If that is the case you need some serious Joomla, PHP, HTML and CSS skills to compare these files and merge them.
Make a copy of your current template before installing the YOOtheme template overrides.
Only use them on a live site after thorough testing.
Do not install the overrides for 2009 YOOtheme templates. They are already using these overrides.
You can find more informations about how to install the overrides for YOOtheme templates prior 2009 here: http://forum.yootheme.com/viewtopic.php?f=6&t=14244


How to install the YOOtheme template overrides for Jooma 1.5


1. Copy css/joomla.css and css/joomla-ie6.css to the CSS folder of your template.

2. Copy the html folder to your template.

3. Make sure your template loads the joomla.css file. For example: Edit the index.php file of your template and add the following line to its header. It is important you put it after(!) all other CSS files so that it loads last.

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla.css" type="text/css" />

4. Load the joomla-i6.css file only for IE6. For example: Edit the index.php file of your template and add the following line to its header. It is important you put it right after the joomla.css file.

<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/joomla-ie6.css" type="text/css" />
<![endif]-->

Done!


