<?php
# ######################################################################
#  GWD Web App version 0.84 Beta
# #######################################################################
?>

<footer>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/app/themes/default/inc/footer-nav.php"; ?>

<ul class="footer nav social">
  <li><a href="#" target="_blank">LinkedIn</a></li>
  <li><a href="#" target="_blank">YouTube</a></li>
  <li><a href="#" target="_blank">Twitter</a></li>
  <li><a href="#" target="_blank">Facebook</a></li>
</ul>

<p>All images and web site content &copy; <?php echo $student_name; ?> 2017-<?php echo date("Y"); ?>. All rights reserved for published and unpublished works.</p>
</footer>


<script src="<?php echo $baseFolder ?>app/themes/<?php echo $theme ?>/js/modernizr-jacgwd.min.js"></script>
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
