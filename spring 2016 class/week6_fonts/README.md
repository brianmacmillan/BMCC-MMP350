##Typography


Let's review some of the basics of web typography through a few tutorials:

- <a href="http://webdesign.tutsplus.com/articles/understanding-typographic-hierarchy--webdesign-11636" target="_blank">Typographic hierarchy</a> may be the most important concept when it comes to building a good WordPress theme.  Our end user will be concerned with the readability and organization of their blog/website, and having the text be organized and readable will make a big impact.
- Let's review <a href="http://webdesign.tutsplus.com/articles/the-anatomy-of-web-typography--webdesign-10533" target="_blank">some basics</a> in terms of what&#8217;s available with web typography.
- <a href="http://webdesign.tutsplus.com/articles/typographic-readability-and-legibility--webdesign-12211" target="_blank">Legibility</a> is also important.
- We will focus on <a href="http://webdesign.tutsplus.com/articles/a-beginners-guide-to-pairing-fonts--webdesign-5706" target="_blank">pairing fonts</a> for this week.
- We&#8217;ll talk a bit about <a href="http://ia.net/know-how/responsive-typography-the-basics" target="_blank">responsive typography</a> and <a href="http://trentwalton.com/2012/06/19/fluid-type/" target="_blank">fluid type</a>, or designing for different screen sizes.


To add a Google font to our theme, we need to identify a font that you want to use in the <a href="https://www.google.com/fonts#" target="_blank">Google Font library</a>.  I am going to use **Arimo** for my body font.  When you choose a font you like Google will prompt you to select the weights you want to use and give you code to add it to your HTML, CSS or JavaScript.  We want to use the CSS tag, like this one:

<img src="https://raw.github.com/owenroberts/mmp350/master/week6/googlefont.png" />

Note that you want to remove `http:` from the beginning.  Because our BMCC servers are running on a HTTPS (secure) protocol, they won't load Google Font or any external file unless it is also done on at HTTPS connection.  The easiest way to deal with this is just take out the HTTP/HTTPS header, and the browser will fill it in.

##Assignment 5
- Create 3 different font pairings for your website
- Show each font pairing on a new copy of your blank template 
- Submit 3 URLs via Blackboard