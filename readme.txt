=== Lytebox ===
Contributors: Ash Breeze
Tags: Lytebox, lytebox 
Requires at least: 2.0.2
Tested up to: 2.9.2
Stable tag: 3.22


== How To Use ==
Add the appropriate rel attribute for the type of display you want. See the examples below.

    Single Image Example:

<a href="images/image-1.jpg" rel="lytebox" title="Image Description">Image #1</a>

    Grouped Images Example:

<a href="images/image-1.jpg" rel="lytebox[vacation]" title="Mom and Dad">Mom and Dad</a>
<a href="images/image-2.jpg" rel="lytebox[vacation]" title="My Sister">My Sister</a>

    Slideshow Example (note the use of lyteshow instead of lytebox):

<a href="images/image-1.jpg" rel="lyteshow[vacation]" title="Mom and Dad">Mom and Dad</a>
<a href="images/image-2.jpg" rel="lyteshow[vacation]" title="My Sister">My Sister</a>

    HTML Content Example (note the use of lyteframe instead of lytebox):

<a href="http://www.google.com" rel="lyteframe" title="Search Google" 
   rev="width: 400px; height: 300px; scrolling: no;">Google Search</a>

<a href="catalog1.htm" rel="lyteframe[catalog]" title="Summer Catalog">Summer Catalog</a>
<a href="catalog1.htm" rel="lyteframe[catalog]" title="Winter Catalog">Winter Catalog</a>

Note: When using the "Lyteframe" feature, the REV attribute is used to control the width, height, and scrolling of the window. If the REV attribute is omitted, then by default width/height is set to 400px and scrolling is set to auto. 


== Browser Compatibility ==

While browser compatibility was in mind from the start, not all browsers were available for testing. These browsers include Safari, Netscape, and Linux-only browsers such as Konquerer. The major browsers that were tested cover approximately 98% of browsers in use, so it's fairly safe to say that no major problems will arise.

There is a "special" issue that is related to IE only. Sometimes the right side of the page will have a small area that is not overlayed. This is due to the way IE measures it's margins. Adding the following style to the page will fix this issue (but it will also affect the appearance of the entire page): body { margin: 0 auto; }

The following browsers have been tested with this script:

    * IE 5.01 SP2 - The fade effect does not work, but the background is darkened (completely).
    * IE 5.5 SP2 - No known issues.
    * IE 7.0 - No known issues.
    * Opera 9.23 - No known issues.
    * Firefox 1.5+ - No known issues, of course.

== Changelog ==

= 1.0 =
* Fix the errors that where in development versions.

= 3.22 =
* Fixed bugs
* Added Lightshow feature



== License ==


Creative Commons License
This work is licensed under a Creative Commons Attribution 3.0 License. 