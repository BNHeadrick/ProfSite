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
</head>
<body>
<!--
<div id="template" class="res_topics">
	<h1></h1>
	<ul>
		<li></li>
	</ul>
</div>
-->

<div id="res_obj" class="res_topics">
<h1>Objective</h1>
	To use my skills in computer technology to help people and gain valuable work experience in the field of mobile app development.  Interested in a full time or paid internship position for February of 2013.
</div>

<div id="res_edu" class="res_topics">
	<h1>Education</h1>
	<strong>Georgia Institute of Technology</strong><br/>
	Master of Science in Computer Science, December, 2012<br/>
	Focusing study on Interactive Intelligence<br/>
	GPA: 4.0<br/><br/>
	
	<strong>Georgia Institute of Technology</strong><br/>
	Bachelor of Science in Computer Science, May, 2011<br/>
	Focused study on artificial intelligence and digital media<br/>
	Graduated with highest honors distinction<br/>
	GPA: 3.61<br/><br/>
	
</div>

<div id="res_skills" class="res_topics">
	<h1>Skills</h1>
	<ul>
		<li>Intermediate programming experience with Lisp, Processing, C#, RPG, HTML, Javascript, CSS, and Android development</li>
		<li>Advanced programming experience with Java</li>
		<li>Intermediate experience with Maya 2011, Matchmover 2011, Unity, Weka, After Effects, Rhomobile, Corona, and the NetBeans IDE</li>
		<li>Advanced experience in the Eclipse IDE</li>
	</ul>
</div>

<div id="res_work_exp" class="res_topics">
	<h1>Work Experience</h1>
	<strong>
		2010-2012<br/>
		Georgia Institute of Technology, Atlanta, Georgia<br/>
		Researcher in the Entertainment Intelligence Laboratory<br/>
	</strong>
	<ul>
		<li>Wrote an application that extracts reviews for businesses in order to match other locations to one another based on similarity</li>
		<li>Wrote an application that takes the scored results and matches the locations using latent semantic analysis</li>
		<li>Contributed to the integration of my application with an existing system in order to increase the accuracy of the program</li>
		<li>Worked on a study to find if an assistive A.I. system for amatuer film-making would improve film quality</li>
		<li>Wrote an assistive A.I. system for amateur virtual film-making</li>
	</ul>

	<strong>
		2012<br/>
		Georgia Institute of Technology, Atlanta, Georgia<br/>
		Teaching Assistant for Video Game Design and Mobile Application Services for Convergent Systems<br/>
	</strong>
	<ul>
		<li>Graded assignments, assisted professors, and helped students with projects and technologies including Unity, C#, Java, Objective-C, HTML, CSS, JQuery, JQuery Mobile, iOS development, and Android development.</li>
	</ul>

	<strong>
		2012<br/>
		Macy’s Systems and Technology, Alpharetta, Georgia<br/>
		Software Development Intern<br/>
	</strong>
	<ul>
		<li>Designed and programmed different aspects of a warehouse management system for mobile devices </li>
		<li>Developed an application manager using the Rhomobile platform for the purpose of restricting end user access to proprietary mobile applications</li>
	</ul>

	<strong>
		2009<br/>
		Shaw Industries, Dalton, Georgia<br/>
		Information Technology Intern<br/>
	</strong>
	<ul>
		<li>Designed, programmed, and documented an HtmlUnit application for instructing and teaching employees on proper unit testing within the company</li>
	</ul>
</div>

<div id="res_pubs" class="res_topics">
	<h1>Publications</h1>
	<ul>
		<li>Nicholas Davis, Alexander Zook, Brian O'Neill, Brandon Headrick, Ashton Grosz, Michael Nitsche, and Mark O. Riedl.Creativity Support for Novice Digital Filmmaking. Proceedings of the ACM SIGCHI Conference on Human Factors in Computing Systems, Paris, France, 2013.</li>
		<li>Sanjeet Hajarnis, Brandon Headrick, Aziel Ferguson, and Mark O. Riedl. Scaling Mobile Alternate Reality Games with Geo-Location Translation. Proceedings of the Fourth International Conference on Interactive Digital Storytelling, Vancouver, Canada, 2011.</li>
		<li>Andrew MacVean, Sanjeet Hajarnis, Brandon Headrick, Aziel Ferguson, Chinmay Barve, Devika Karnik, and Mark O. Riedl. WeQuest: Scalable Alternate Reality Games Through End-User Content Authoring. Proceedings of the 8th International Conference on Advances in Computer Entertainment Technology, Lisbon, Portugal, 2011.</li>
	</ul>
</div>

</body>
</html>
