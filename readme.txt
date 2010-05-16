=== Lytebox ===
Contributors: Ash Breeze
Tags: Lytebox, lytebox 
Requires at least: 2.0.2
Tested up to: 2.9.2
Stable tag: 4.00

== Using Lytebox ==

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

    * Configuration: For a complete list of configurable Lytebox options, click HERE.
    * iFrames: If you plan to use Lytebox in an iFrame environment, then you need to include lytebox.css in the parent document, while including lytebox.js in the iFrame document.
    * Source Code: The JavaScript file (lytebox.js) that is included in the download has been stripped down (comments removed) for optimization purposes. The commented source code is available HERE.


== Changelog ==

= 4.0 =
* Fix the errors


==License==
Creative Commons License
This work is licensed under a Creative Commons Attribution 3.0 License. 
