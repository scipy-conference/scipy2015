<?php

session_start();

?>


<!DOCTYPE html>
<html>
<?php $thisPage="Home"; ?>
<head>

<?php include('inc/header.php') ?>

<link rel="shortcut icon" href="http://conference.scipy.org/scipy2013/favicon.ico" />

</head>

<body>

<div id="container">

<?php include('inc/page_headers.php') ?>

<section id="slim_sidebar">
  <?php include("inc/sponsors_small.php") ?>
</section>

<section id="hp-content">

<div class="row">
  <div class="hp_cell">
    <h2>Attend</h2>
      <img src="img/about.png" width="251" height="84" alt="about scipy" class="hp_image" />
    <p>The annual SciPy Conference allows participants from academic, commercial, and governmental organizations to showcase their latest Scientific Python projects, learn from skilled users and developers, and collaborate on code development.</p>

    <p>Conference registration to open January 2015.</p>
  </div>
  <div class="hp_cell" style="margin: 0 2%;">
    <h2>Schedule</h2>
        <p>The 2015 conference will consist of two days of tutorials followed by three days of presentations, and conclude with two days of developer sprints on projects of interest to attendees.</p>
        
        <p style="text-indent: 1em;">Tutorials: <strong>July 6 - 7, 2015</strong></p>
        
        <p style="text-indent: 1em;">Main Conference: <strong>July 8 - 10, 2015</strong></p>
        
        <p style="text-indent: 1em;">Sprints: <strong>July 11 - 12, 2015</strong></p>
        
        <p style="clear: both;">Program and schedule details coming soon.</p>
  </div>
  <div class="hp_cell">
    <h2>What's it like?</h2>
    <p>Watch the video highlighting the conference.</p>
    <a href="video_highlights.php"><img src="img/video_placeholder.png" width="100%" alt="SciPy 2013 video highlights" class="hp_image" /></a>
    <p style="font-size: 0.75em; color: #333; text-align: right; margin-right: 1em;"><em>Video courtesy of Enthought, Inc.</em></p>
  </div>
</div>



</section>



<div style="clear: both;"></div>
<footer id="page_footer">
<?php include('inc/page_footer.php') ?>
</footer>
</div>
</body>

</html>