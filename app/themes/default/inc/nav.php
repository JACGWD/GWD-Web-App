<nav class="navigation">
<button aria-expanded="false" aria-controls="menu" class="hide-text">Menu</button>

<ul id="menu" hidden>

    <li><a href="<?php echo $baseFolder ?>index.php" <?php if ($Highlight_Menu_item=="home") echo " class=\"currentpage\""; ?>>Home</a></li>

    <li><a href="<?php echo $baseFolder ?>about.php" <?php if ($Highlight_Menu_item=="about") echo " class=\"currentpage\""; ?>>About</a></li>

    <li><a href="<?php echo $baseFolder ?>resume.php" <?php if ($Highlight_Menu_item=="resume") echo " class=\"currentpage\""; ?>>Resume</a></li>

    <li><a href="<?php echo $baseFolder ?>web-portfolio.php" <?php if ($Highlight_Menu_item=="web") echo " class=\"currentpage\""; ?>>Web Portfolio</a></li>

    <li><a href="<?php echo $baseFolder ?>print-portfolio.php" <?php if ($Highlight_Menu_item=="print") echo " class=\"currentpage\""; ?>>Print Portfolio</a></li>

    <li><a href="<?php echo $baseFolder ?>contact.php" <?php if ($Highlight_Menu_item=="contact") echo " class=\"currentpage\""; ?>>Contact</a></li>
</ul>
</nav>
