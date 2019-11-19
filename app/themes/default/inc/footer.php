<footer>
<ul class="footer nav">
  <li><a href="<?php echo $baseFolder ?>about.php" class="<?php if ($Highlight_Menu_item=="about") echo "currentpage"; ?>">About</a></li>
  <li><a href="<?php echo $baseFolder ?>ca/index.php" class="<?php if ($Highlight_Menu_item=="ca") echo "currentpage"; ?>">Comprehensive Assessment</a></li>
  <li><a href="<?php echo $baseFolder ?>copyright-notice.php" class="<?php if ($Highlight_Menu_item=="copyright") echo "currentpage"; ?>">Copyright Notice</a></li>
  <li><a href="<?php echo $baseFolder ?>contact.php" class="<?php if ($Highlight_Menu_item=="contact") echo "currentpage"; ?>">Contact</a></li>
</ul>

<ul class="footer nav social">
  <li><a href="#" target="_blank">LinkedIn</a></li>
  <li><a href="#" target="_blank">YouTube</a></li>
  <li><a href="#" target="_blank">Twitter</a></li>
  <li><a href="#" target="_blank">Facebook</a></li>
</ul>

<p>All images and web site content &copy; <?php echo $graduatingStudentName; ?> 2017-<?php echo date("Y"); ?>. All rights reserved for published and unpublished works.</p>
</footer>


<script src="<?php echo $baseFolder ?>app/themes/<?php echo $theme ?>/js/modernizr-3.7.1.min.js"></script>
<?php // load Modernizr for feature detection (classes added to the html tag) ?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="<?php echo $baseFolder ?>app/themes/<?php echo $theme ?>/js/jquery-3.4.1.min.js"><\/script>')</script>

<script src="<?php echo $baseFolder  ?>app/themes/<?php echo $theme ?>/js/combined-scripts.js"></script>

<?php
if ($Enable_JQueryPlugins == TRUE) {echo '<script src="' . $baseFolder  . "app/themes/" . $theme . "/js/plugins.js\"></script>" ."\r\n";}
else {
  echo NULL;
}
?>



<?php if (isset($ExtraFooterCode)) {echo $ExtraFooterCode;} else {echo NULL;} ?>


<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-74044702-1', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>

<script src="https://www.google-analytics.com/analytics.js" async></script>

</body>
</html>
