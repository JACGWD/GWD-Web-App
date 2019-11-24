<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/content/nav/footer-nav.php";
// includes & requires must be configured as an absolute path

# ######################################################################
#  GWD Web App version 0.84 Beta
# #######################################################################
?>
<nav class="footer-nav">
<ul>
<?php
foreach  ( $footerNavLinks as $single_link ) {
echo "<li";
// open the <li> tag

if (isset($single_link['li-class']))
  { echo " class=\"". $single_link['li-class'] . "\""; }
  else {echo NULL;};
// if a li class exists add it inside class="..."

echo ">".
// close the li tags

"<a href=\"".
$baseFolder . $single_link['link-to'];
// Open the anchor and the url path


// ########  Do not add Classes if none are Declared ########  //

if (empty($single_link['css-classes']) && ($Highlight_Menu_item!==$single_link['highlight-menu']))
{ echo NULL; }
// if no classes at all, doing nothing



// ########  Add Classes if CSS Class Declared in Array  ########  //

else
echo "\" class=\""
// if either css-classes or highlight-menu have a value print the " class="

.$single_link['css-classes'];
// Add the css class from the array

if ((isset($single_link['css-classes']) && $Highlight_Menu_item==$single_link['highlight-menu'])) {echo " ";}
// If the css-classes variable exists and currentpage class will be added next to it, add a white space in between the two classes


// ########  Add Classes if $Highlight_Menu_Item on page Class matches one Declared in Array  ########  //

if ($Highlight_Menu_item==$single_link['highlight-menu']) {echo "currentpage". "\"".">";}
// Add current page class if it matches the variable on the PHP page

else {echo "\"".">";};
// Close the class attribute with a quotation mark and bracket

echo $single_link['link-text'] .
//print the clickable word inside the anchor

"</a>"."</li>";
// Print the closing tags

echo "\r\n";
// Add a return before the next li tag
}
?>
</ul>
</nav>
