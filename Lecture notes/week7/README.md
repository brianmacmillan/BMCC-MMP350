#Introducing SASS

[Calculating color](http://owenroberts.github.io/mmp350/week7/)

Today we're going talk about using SASS and getting started with prototyping our portfolio sites.

**SASS** is a CSS pre-processor.  It allows us to write CSS style documents that are more complex and more elegant by introducing some basic concepts like variables, nesting and inheritance.  It takes some time to learn but saves a lot of time in the long run.

We're going to focus on these topics:
- variables
- nesting
- partials

Let's start by going over the [SASS Basics](http://sass-lang.com/guide) guide on their website.

Okay, let's start writing some SASS.  In our project where we have already started our prototypes, we're going to create a style.scss file and write some code.  Once we're ready to test that code we need to process it.  SASS files cannot be interpreted on their own by the browser, so we need to process them into a regular CSS file.  There are many ways to do this, and if you are familiar with Sublime Text Package Control tools you might want to explore that.  For most of us, we're going to use a program called Scout that does the processing through a graphical interface.

SASS provides two different syntactical approaches to CSS styles.  **.sass** files will compile without the traditional CSS `{ }` separating rules, ie:
```
ul
  	margin: 0
  	padding: 0
  	list-style: none
	li
	  	display: inline-block
	a
	  	display: block
	  	padding: 6px 12px
	  	text-decoration: none
```

**.scss** require curly brackets.
```
ul {
    margin: 0;
    padding: 0;
    list-style: none;
    li { display: inline-block; }
	a {
	    display: block;
	    padding: 6px 12px;
	    text-decoration: none;
	}
}
```

I prefer **.scss** styling but either are appropriate as long as the correct file names are chosen.

**Nesting**
When writing pure CSS you have probably noticed that there is not visual hierarchy to the document structure the way you would see in HTML.  Here's an example of some HTML we wrote in week 5:
```
<div class="column project">
    <a href="#">
        <img src="imgs/cat.jpg" />
        <div class="label">Project #1</div>
    </a>
</div>
```
And the corresponding CSS rules:
```
.project {
	position:relative;
}
.project .label {
	display:none;
	position:absolute;

}
.project:hover .label {
	display:inline-block;
}
```
The HTML structure is much easier to follow than the CSS structure.  SASS allows us to make the CSS structure mimic the HTML:
```
.project {
	position:relative;
	.label {
		display:none;
		position:absolute;

	}
	&:hover .label {
		display:inline-block;
	}
}
```
This also add the benefit of making it easier to avoid global rules for common tags like `a`, `li` and `p`.

In SASS we can also use variables, like we might in a language like JavaScrip or php, which can be very useful for making changes to a design more quickly.  For example, we could set a color variable use it for different elements:
```
$main-color: #dfdfdf;

body { color: $main-color; }
a { color: $main-color; }
```
Using this syntax we can change the color once and update both rules.  Any CSS style rule can be saved as a variable.

For more on SASS, check out these [tutorials](http://thesassway.com/).

For SASS to work it needs to be processed.  Our browsers can't read SASS as is, so we have to run them through a program, which will read the SASS and compile it into pure CSS.  We're going to use **Scout** which is a free program.  We need to [download](https://mhs.github.io/scout-app/) it first, and walk through the install.

<img src="https://raw.github.com/owenroberts/mmp350/master/week7/scout.jpg" />

Click the plus button to create a new project.

<img src="https://raw.github.com/owenroberts/mmp350/master/week7/create.png" />

Set the input and output directories.  This should be the same directory for our project.  This is where Scout will find style.scss and output style.css.

<img src="https://raw.github.com/owenroberts/mmp350/master/week7/config.png" />

To start Scout, click the play button.  Then just leave it running and it will continue to generate style.css everytime you save change to style.scss.

<img src="https://raw.github.com/owenroberts/mmp350/master/week7/play.png" />

Check the output window for errors.

<img src="https://raw.github.com/owenroberts/mmp350/master/week7/output.png" />


**In class work**
- Start using SASS.
- Create a SASS or SCSS stylesheet and rewrite your style.css page from your portfolio template.
- Use at least one variable for color and one for font.
- Compile your SASS or SCSS file.