<nav class="navigation">
<button aria-expanded="false" aria-controls="menu" class="hide-text">Menu</button>

<ul id="menu" hidden>

    <li><a href="<?php echo $baseFolder ?>index.php" class="<?php if ($Highlight_Menu_item=="home") echo "currentpage"; ?>">Home</a></li>

    <li><a href="<?php echo $baseFolder ?>about.php" class="<?php if ($Highlight_Menu_item=="about") echo "currentpage"; ?>">About</a></li>

    <li><a href="<?php echo $baseFolder ?>resume.php" class="<?php if ($Highlight_Menu_item=="resume") echo "currentpage"; ?>">Resume</a></li>

    <li><a href="<?php echo $baseFolder ?>web-portfolio.php" class="<?php if ($Highlight_Menu_item=="webportfolio") echo "currentpage"; ?>">Web Portfolio</a></li>

    <li><a href="<?php echo $baseFolder ?>print-portfolio.php" class="<?php if ($Highlight_Menu_item=="printportfolio") echo "currentpage"; ?>">Print Portfolio</a></li>

    <li><a href="<?php echo $baseFolder ?>contact.php" class="<?php if ($Highlight_Menu_item=="contact") echo "currentpage"; ?>">Contact</a></li>
</ul>
</nav>
