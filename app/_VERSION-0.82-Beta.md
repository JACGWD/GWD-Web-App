# GWD Portfolio app
Demo for pedagogical purposes | MIT  
Version 0.82 Beta

## Change History

### v0.82 Beta | October 2019
- Added config switch to automatically add "current-grads/student-name/" to paths when used for graduating student eportfolios
- Added "0.82 Beta" version number of web app to config.php file and to Simple CSS Reset.
- Enabled complete disabling of static and dynamic caches via code block in /.htaccess (lines 1236 - 1253). Note this fix is Bitnami server specific and will fail under WAMP or other distributions. (Bitnami is used in this context as it can be installed without admin privileges which is essential in a school lab environment.)
- Added * {box-sizing: border-box;} as the new default in Simple CSS Reset (applies to all elements and pseudo-elements)
- Updated layout of config.php, templates and PHP pages
- Removed 1600px breakpoint from style.css
- Added automatic OG Site Name to config.php
- Automatic configuration of contact form parameters, students only add their email and optionally choose incoming email title
- All CA pages and Portfolio pages based on portfolio-item.php template
- Added default CSS to display navigation menu when javascript is turned off
- Removed 2x & 3x media queries, leaving base query + portrait and landscape (assumes most devices now are "Retina" anyway). They were unused in class projects.
- Added print and web portfolio folders and default pages.
- Added require() to index pages within portfolio folders (ex: /web-portfolio/index.php) to make root level web and print thumbnail galleries (print-portfolio.php and web-portfolio.php) canonical. Also for comprehensive-assessment.php
- renamed "web_app" to "app" for better readability in the URL bar
- renamed "/content/html" to "/content/db-records" for better vocabulary similarity to real-world infrastructure
- Added Bitnami-only php option warning text to .htaccess (lines 1252-1253)
- Added reference to 404 error configuration line in .htaccess (line 94)
- Based 404 error pag on page template
- Made redirect relative to current server, not graphicandwebdesign.ca


### v0.81 Beta | October 2019
- This version is now used in the classroom.
- Update core HTML code to be in sync with HTML 5 Boilerplate 7.2.0
- Normalize CSS updated to 8.0.1  
- Added JACGWD Twitter account to the footer
- Added Andy Bell's "Modern CSS Reset" as an optional CSS reset in addition to Normalize and Simple.
- Renumbered the style.css file to be in sync with the web app version.
- style.css is now licensed under MIT not creative commons license
- Updated link to JQuery, including integrity hash
- Updated Google Analytics code, moved to footer.php
- Enabled JQuery plugins.js on/off switch in config.php
- Updated about.html
- Updated style.css to incorporate most recent updates to the main.css from HTML5BP
- Added default CSS rule for \<button> to remove default browser button styles to properly enable text-indent: 100% in .hide-text image replacement
- Added Comprehensive Assessment index and pages
- Added graduates-archive
- Updated thumbnails and detail page masters.
- Updated srcset sizes default breakpoints to 385px, 768px, 1440px
- Removed http-equiv="X-UA-Compatible" content="IE=edge" meta tag
- Updated layout of config.php




### v0.8 Alpha | September 2019  
- Simplified code.
- Removed old scripts included in other js files: picturefill.js, swfobject.
- Replaced SERVER[DOCUMENT_ROOT] paths scripts in footer with echo getCurrentServer() as old code was producing absolute paths starting with /User on macOS
- Nested "blogs" into "community" like on live gwd site


### v0.7 Alpha | January 2019  
- PHP to HTML 5 port from the 0.66Beta Simple Web App.  
- Changed license to MIT. See license.md  
- Basic text files are now in Markdown format (.md).
- Removed picturefill.js see: https://caniuse.com/#feat=srcset
- Updated documentation files
- Renamed /media folder to /content
- Added content/html folder for containing html data as if it was a database request

### v0.66 Beta | March 6, 2015  
- Changed 'dpi' units in media queries within style.css to 'dppx' units. Because in CSS 'dpi' means dots-per-CSS-inch, not dots-per-physical-inch, so does not correspond to the actual 'dpi' of a screen.  
- Added pixel density 3 media queries for iPhone 6+ within style.css.  
- Enabled absolute URLs for pagination. Added $CurrentServer function and variable.  
- Added valid sizes attribute in srcset.  
- Enabled better PHP error reporting.  
- Moved email configuration from sendmail.php to config.php.  
- Added sections and comments in config.php  
- Added TRUE / FALSE switch to enable Normalize.css instead of simple-css-reset.css in config.php.  

### v0.65 | February 9, 2015  
- Edited inc/header.php to remove hard coded w15_eportfolio folder name and replaced with $currentGradsFolder variable.
- Added Retina media queries to new default.css.
- Added multiple theme support.

### v0.64 | February 3, 2015
- Added customizeable class for thumbnails figure tag on an individual tag basis.

### v0.63 | February 2, 2015  
- Added if/else check to add extra classes to the figure tag: both thumbnail and highres.
- Added HeaderClass to <header>.
- Removed flash-portfolio-item.php (same as page.php).
- Moved comments to content pages instead of documentation.
- Deleted commented php folder from documentation.

### v0.62 | January 30, 2015  
- Added if/else check for pagination.
- Previous/Next links will not appear if the variable is set to NULL.

### v0.61 | January 21, 2015  
- Add hooks for classes for <body> and <main>.
- Set most variables to NULL.
- Updated documentation.


### v0.6 | January 20, 2015  
- Prepare for Beta release.
- Added pagination metatags and <div class="pagination"> on portfolio-item.php.
- Moved $OgURL and $OgSiteName variable definitions to config.php because they do not need to be set on a page per page basis.

### v0.5 | January 17, 2015  
- Added Social + SEO compatibility for Schema.org, Facebook OpenGraph, Google Authorship and Twitter Cards.
- Reorganized documentation folder.
- Added social sharing feature to default sidebar.
- Add if/then check for 'gallery' Twitter Card type for thumbnails.php that adds 4 meta name="twitter:image0" links when the card type is "gallery".
- Whitelisted eportfolio.pdht.ca for both 'gallery' and 'summary' Twitter Cards.


### v0.4 | January 15, 2015  
- Added compatibility for Flash content to the page template.
- Added hooks to add custom content into the <head> or just above </body>.
- Added documentation for content pages.


### v0.32 | January 12, 2015  
- Moved addslash / stripslash functionalities to templates instead of content pages.
- Renamed variables for easier reading and comprehension.
- Add commented template pages to documentation.
- Added functionality to automatically add <aside> to custom sidebar.


### v0.31 | January 11, 2015  
- Created web_app/theme/template folder, moved templates, and edited associated file names and paths.
- Added if/else check for custom sidebar.


### v0.3 | January 10, 2015  
- Added extensive comments to all code pages.
- Added license, version and read me files.
- Added if/else check for custom high-res image size.
- Application almost ready for distribution.


### v0.2 | December 17, 2014  
- Added PHP foreach loop in thumbnails template with help from PDHT grads James Mann and Josh Abadi.


### v0.1 | December 16, 2014  
- Ported previous HTML eportfolio code to web app.
- Tested all functions and pages for rendering.
