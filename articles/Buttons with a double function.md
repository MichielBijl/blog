Written: 2014-09-25
Tags: aria, buttons, javascript

Earlier this month Orange Juice—my previous employer—released their new website. It is a modern, flat design, mobile first website with a lot of gimmicky stuff. The team—that worked on the website—consisted of the creative director, a designer and myself. Work on the project began back in may of 2014. At first my role was to advise the team about the possibilities and performance of animations in browsers and different devices. We discussed about different transitions, different techniques to show the content that is hidden at first to the user. One of those techniques was to show it with the use of a modal window.

<!--more-->

### Modal Window
A modal window is often visualised as a small content window that is positioned above the content of the page. In most cases the content under the window is masked with a black or white overlay; as to simulate depth in the page. If done right, this is a great solution to the problem of limited screen real estate. The typical way to activate a modal window is by pressing a button. After the button is pressed it will execute a JavaScript function which will then set the attributes or styles needed to show the modal. You can then close the button by pressing a close button or—if the developers went the extra mile—press the <kbd><kbd>esc</kbd></kbd> key.

### The Button
As stated in the previous paragraph: you typically activate a modal window by pressing a button. So what is a button? To most people, a button is a coloured rectangle with a label that explains what it does when pressed. To most, it doesn't matter what kind of HTML element is behind this button, as long as they can click or tap it. To people who have to—or simply want to—use the keyboard to navigate a website, it does matter what kind of element is behind a button; to them a button is only a button if you mark it up as a [`button`](http://www.w3.org/TR/html/forms.html#the-button-element) element.

The HTML specification has the following to say about the `button` element:

> The button element represents a button labeled by its contents. The type attribute controls the behavior of the button when it is activated.

The type attribute takes three values: `submit` (submits the form), `reset` (resets the form) and `button` (does nothing).

"So great, let's use that to active our button!" you might say. Okay, let us explore that option. The `button` element is a wondrous element, it's a delight to work with because the browser knows exactly what to do with it; you don't have to do any of the hard work. Users can get to it with the keyboard, because it is in the default taborder, keyboard users can also activate the button with <kbd><kbd>return</kbd></kbd> or <kbd><kbd>space</kbd></kbd>, users can tap it or click on it with another input device. So it is the perfect element to trigger an action with JavaScript when activated. That is what I thought when I build the functionality into the website anyway. I tested it a couple of times on different devices and was quite pleased with my work.

### The Online Marketer
Today—september 25—the online marketer came to me with a couple of updates for the "Search Engine Optimisation" or SEO features. Some new `alt` texts and `title`'s a new url here and there; nothing out of the ordinary. While I read my notes I noticed one request: <q>Please change the "Share your ambition" from a `button` element to an anchor (`a`) and add an `href` attribute with a value of '/share-your-ambition', behaviour should remain the same.</q> "But wasn't the button element the most magical thing ever?", yeah it is, so why change it now? One of the goals was to better index the contents of the modal window and make it accessible when the user had JavaScript turned off. They created a page with the exact same content and placed it at the aforementioned address. Okay, so what are we to do?

### The Problem
Obviously I agree with the notion to make it more accessible, so let's get to work! If we make it an anchor a screen reader will announce it as <q>Share your ambition, link</q>, but if the user has JavaScript enabled it will not function as an anchor; it will trigger a JavaScript function. Therefore the user can get confused; the screen reader will announce it as a link but you do not navigate to a different page. That is not what we want.

### The Solutions
A couple of solutions came to mind: we could add an anchor alongside the button. Hide the button if JavaScript is turned off and vice versa. This could work, but we would have to take the hidden element out of the taborder and we end up with two elements; which is far from ideal. We could change the element itself—from an anchor to a button—when JavaScript is loaded, but then we would have to swap out attributes as well, this would be a hassle.

Luckily for us there is such a thing as ARIA (formal name: WAI-ARIA). ARIA gives us the ability to further tell the browser—thereby assistive technology—how to interpret an element, what its state is at the current moment and all sorts of other information that might be useful to communicate with your user. One of the attributes ARIA gives us is the `role` attribute which allows us to tell the browser what kind of element or area they are dealing with. There are a lot of different values for `role` like: banner, contentinfo, menu, etc. The two values I want to focus on here are [`button`](http://www.w3.org/TR/wai-aria/roles#button) and [`link`](http://www.w3.org/TR/wai-aria/roles#link). The specification says this about those values:

> `button`: An input that allows for user-triggered actions when clicked or pressed. See related link.
> `link`: An interactive reference to an internal or external resource that, when activated, causes the user agent to navigate to that resource. See related button.

Looks like we can use these values to get the behaviour we are after. We start with an anchor which has a implicit role of `link`; so we don't need to set it our selfs. It can now function as an anchor when JavaScript is turned off.

`<a href="/share-your-ambition" data-toggle="modal">Share your ambition</a>`

### The JavaScript
When JavaScript is turned on we simply change the `role` to `button` and we have—as far as the browser is concerned—a button. We can cancel the default behaviour of the anchor and call our function to activate the modal. We also need to set one other ARIA attribute for this to work out as planned: [`aria-controls`](http://www.w3.org/TR/wai-aria/states_and_properties#aria-controls). We could also add `aria-owns`, but the specification states: <q>An element can have only one explicit owner.</q> Since it is likely that we want to have multiple buttons that open the modal on the same page; we should not.

The specification has the following to say about `aria-controls`:

> Identifies the element (or elements) whose contents or presence are controlled by the current element. See related aria-owns.

So we can use that to point at the modal, this will come in handy when we call our function; we know what modal to open. At first I thought we should also add [`aria-haspopup`](http://www.w3.org/TR/wai-aria/states_and_properties#aria-haspopup), but it turns out that this is not the case. The [AccDC Technical Style Guide](http://whatsock.com/tsg/) specifically states:

> The attribute aria-haspopup should only be used on triggering elements that open menus. Otherwise, the presence of the attribute will only misrepresent the popup type to screen reader users.

Clearly, `aria-haspopover` is not meant to be used for the behaviour that we are after; so we will not use it.

For the technically gifted among you, I've made a piece of [sample code available on CodePen](http://codepen.io/Michiel/details/vqskC/). It is written in jQuery.

### Conclusion
The method described in this article show some of the power that JavaScript gives us when combined with ARIA. Because we start with an anchor, we can keep our code semantic and our functionalities accessible.

If you spot any mistakes or just want to share your thoughts on the matter, please, feel free to [contact me on Twitter](https://twitter.com/michielbijl) or write me at aria at agosto.nl.

**Updated on 2014-09-30:** [Heydon Pickering](https://twitter.com/heydonworks) commented on this article and noted that [we can omit the `role="link"`](https://twitter.com/heydonworks/status/515404883865108480) on the initial anchor; this is the implicit role of an anchor. This makes sense and cleans up our code a bit. I've updated the sample code on CodePen, too.
