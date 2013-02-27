
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->Html->script('jquery-1.9.1.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<script type='text/javascript'>
		jQuery(document).ready(function()
		{
			//setTimeout('move_up()', 1);
			jQuery("#menu_box li").hover(
			  function () {
				jQuery(this).animate({"margin-right": "10px"}, "fast");
			  }, 
			  function () {
				jQuery(this).animate({"margin-right": "0px"}, "fast");
			  }
			);
		});

	</script>
	
</head>
<body>
	
	<div id="container">
		
		<div id="header">
			<a href="/ProfSite/about"> BRANDON HEADRICK</a>
		</div>

		<div id="outer">

			<div id="menu_box">
				<ul class="menu_list">
					<!--obviously fix the URLs later-->
					<li><a href="http://localhost/ProfSite/about">About</a></li>
					<li><a href="http://localhost/ProfSite/blog">Blog</a></li>
					<li><a href="http://localhost/ProfSite/repos">Code Repos</a></li>
					<li><a href="http://localhost/ProfSite/resume">Resume</a></li>
					<li><a href="http://localhost/ProfSite/contact">Contact</a></li>
				</ul>
				<!--
				menu-box div (will have about me(is musician, coder, education, things), blog, link to code I've worked on [git, gcode], resume (with publications))
				-->
		  	</div>
			<div id="main_box">

				
				<!-- Here's where I want my views to be displayed -->
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
	
</body>
</html>
