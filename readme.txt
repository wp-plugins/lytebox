=== Lytebox ===
Contributors: Ash Breeze
Tags: Lytebox, lytebox 
Requires at least: 2.0.2
Tested up to: 3.5
Stable tag: 5.5.1

A tool that can dynamicly load image and html content in a simple, elegant overlay.

== Description ==

Lytebox allows you to display images and html content on a webpage without have the viewer leave the page by displaying the content in an easy to use way.

== How To Use ==
Add the appropriate rel attribute for the type of display you want.

To display images, add rel="lytebox" to the link to the image.

To display html content, add rel="lyteframe" to the link to the page.


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

= 5.5 =
* More bug fixes
* Updates

= 5.5.1 =
* Fixed a bug that was not displaying the images properly



== License ==


Creative Commons License
This work is licensed under a Creative Commons Attribution 3.0 License. 