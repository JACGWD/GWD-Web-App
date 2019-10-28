--------------------------------
PDHT EPORTFOLIO SIMPLE WEB APP | DEMO FOR PEDAGOGICAL PURPOSES | (CC BY 4.0)
--------------------------------



--------------------------------
AUTHOR
--------------------------------

Eric Girouard
http://www.heliomedia.com
eric@heliomedia.com



--------------------------------
INTRODUCTION
--------------------------------

This simple demo web application was designed as a teaching tool for the eportfolio class at the department of Publication Design & Hypermedia Technology of John Abbott College in Sainte-Anne-de-Bellevue, Quebec, Canada. 

It is not meant as a production-ready web site template, although it can certainly generate perfectly fine HTML 5 code. Before using this code in a commercial production environment, I would suggest some hardening - notably moving the includes and templates outside of the public_html folder.

This web application is intended to be used pedagogically as a technological stepping-stone in between hand-coded web sites and PHP/MySQL applications such as WordPress. 

By moving all the HTML and CSS to the "theme" folder, all that remains in the individual PHP pages are:

- links to which template is to be used 
- the text content (which forces students to concentrate on what they are writing as well as Search Engine Optimization).

In this sense the content PHP pages only include the information that would be stored in a database. Connecting to databases through PHP would be the subject of another more advanced course.

The PHP templates are built as a series of includes, as this is the basis for coding complex web applications (once again, such as WordPress).



--------------------------------
OBJECTIVES
--------------------------------

A) To reinforce the concept of separation of content and style. Students will practice preparing text/image content as if preparing to populate a database like MySQL.

B) Search Engine Optimization will be emphasized by concentrating on writing texts to be inserted in PHP template variables. No thinking of the appearance or other technical issues. Just text.

C) Use of a MAMP / WAMP / XAMPP / Bitnami type testing server will allow students to access a WordPress installation with Yoast SEO plugin to help write properly SEO-optimized text content. https://yoast.com/wordpress/plugins/seo/

D) Students will learn to develop interfaces for code that was written by others, notably professional programmers who use a high level of abstraction in their work.

This permits students to concentrate on CSS-based design, all the while being exposed to the complex web site structures that are now common.



--------------------------------
CREDITS
--------------------------------

This demo app is heavily based on the work of the HTML 5 Boilerplate. 
http://www.html5boilerplate.com


Social SEO inspired by:
http://www.iacquire.com/blog/18-meta-tags-every-webpage-should-have-in-2013
http://d2eeipcrcdle6.cloudfront.net/seo-cheat-sheet/SEOCheatSheet_2-2013.pdf




--------------------------------
TOOLS FOR TESTING AND APPROVAL
--------------------------------

1. TWITTER VALIDATION TOOL
https://dev.twitter.com/docs/cards/validation/validator

Before your cards show on Twitter, you must first have your domain approved. Fortunately, it's a super-easy process. After you implement your cards, simply enter your sample URL into the validation tool. After checking your markup, select the "Submit for Approval" button.


2. FACEBOOK DEBUGGER
https://developers.facebook.com/tools/debug

You don't need prior approval for your meta information to show on Facebook, but the debugging tool they offer gives you a wealth of information about all your tags and can also analyze your Twitter tags.


3. GOOGLE STRUCTURED DATA TESTING TOOL
http://www.google.com/webmasters/tools/richsnippets

Webmasters traditionally use the structured data testing tool to test authorship markup and preview how snippets will appear in search results, but you can also use see what other types of meta data Google is able to extract from each page.


4. PINTEREST RICH PINS VALIDATOR
http://developers.pinterest.com/rich_pins/validator/

Like Twitter, Pinterest requires an approval process to enable Rich Pin functionality. Use the Rich Pin Validator tool to test your data markup and apply for approval at the same time.






--------------------------------
IMAGES
--------------------------------

Every social platform has different standards for sizing. Typically, it's easier to keep it simple and choose one image size that will work for all services.

Twitter thumbnail: 120x120px
Twitter large image: 280x150px
Facebook: Standards vary, but an image at least 200x200px works best. Facebook recommends large images up to 1200x630px wide.