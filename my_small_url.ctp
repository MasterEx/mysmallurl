<?php
/**
 * Layout template
 *
 * Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 *
 * Licensed under the GNU General Public License, version 3 (GPLv3)
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 * @license       GPLv3 License (http://www.opensource.org/licenses/gpl-3.0.html)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php echo $this->Html->css('/css/my.small.url') ?>
</head>
<body>

<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
<h1>My Small Url</h1>
<?php echo $session->flash(); // this line displays our flash messages ?>

<!-- Here's where I want my views to be displayed -->
<?php echo $content_for_layout ?>

<!-- Add a footer to each displayed page -->
<br /><br />
<div id="footer">Written by <a href="http://periklis.is-a-geek.com/" title="Periklis Ntanasis" target="_blank">Master_Ex</a>.
MySmallUrl is <a href="http://en.wikipedia.org/wiki/Free_software">free</a> software.</div>

</body>
</html>
