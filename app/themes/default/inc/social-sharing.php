<ul id="share-buttons"><?php // This code does not pass W3C validation. Validate your pages before including this file. ?> 

<!-- Facebook -->
<li><a href="http://www.facebook.com/sharer.php?u=<?php echo getCurrentUrl(); ?>" target="_blank">Share on Facebook</a></li>
 
<!-- Twitter -->
<li><a href="http://twitter.com/share?url=<?php echo getCurrentUrl(); ?>&text=<?php echo $h1; ?>&hashtags=PDHT2015" target="_blank">Share on Twitter</a></li>
 
<!-- Google+ -->
<li><a href="https://plus.google.com/share?url=<?php echo getCurrentUrl(); ?>" target="_blank">Share on Google+</a></li>
 
<!-- Digg -->
<li><a href="http://www.digg.com/submit?url=<?php echo getCurrentUrl(); ?>" target="_blank">Share on Digg</a></li>
 
<!-- Reddit -->
<li><a href="http://reddit.com/submit?url=<?php echo getCurrentUrl(); ?>&title=<?php echo $h1; ?>" target="_blank">Share on Reddit</a></li>
 
<!-- LinkedIn -->
<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo getCurrentUrl(); ?>" target="_blank">Share on LinkedIn</a></li>
 
<!-- Pinterest -->
<li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">Share on Pinterest</a></li>
 
<!-- StumbleUpon-->
<li><a href="http://www.stumbleupon.com/submit?url=<?php echo getCurrentUrl(); ?>&title=<?php echo $h1; ?>" target="_blank">Share on StumbleUpon</a></li>
 
<!-- Email -->
<li><a href="mailto:?Subject=<?php echo $h1; ?>&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo getCurrentUrl(); ?>">Share via Email</a></li>
 
</ul>