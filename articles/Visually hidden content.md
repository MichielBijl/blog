More information on why and how to visually hide my answer to Yusuf’s case (Stedentrips).

## How?
```CSS
.visually-hidden {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    width: 1px;
    height: 1px;
    overflow: hidden;
}
```

## Why?
W3C's [Web Content Accessibility Guideline](https://www.w3.org/TR/WCAG20/) (WCAG) tells us that: 

The purpose of each link can be determined from the link text alone or from the link text together with its programmatically determined link context, except where the purpose of the link would be ambiguous to users in general. (Level A)

2.4.4 under: [2.4 Navigable](https://www.w3.org/TR/WCAG20/#navigation-mechanisms)

In some cases—like Yusuf’s—the visible text doesn’t communicate the purpose of a link or button—maybe it’s an icon button that uses icon fonts (and thus doesn’t have an alternative text. This can be circumvented with the addition of some visually hidden text. If we take the CSS given above, and the following HTML, we can make the whole thing a lot more accessible:

```HTML
<a href=“/hotels/details/edge-of-the-universe">Bekijk details <span class="visually-hidden">van het “Edge of the Universe” hotel</span></a>
```

This would read out—to a screen reader, but also to search engine bots—something like “Bekijk details van het Edge of the Universe hotel, link, press modifier plus space to activate”. If we wouldn’t add this, it would just read “Bekijk details, link” and nobody would know which details are referred to.

## Articles on visually hidden text
* [Invisible Content Just for Screen Reader Users](http://webaim.org/techniques/css/invisiblecontent/) by WebAIM
* [The state of hidden content support in 2016](https://www.paciellogroup.com/blog/2016/01/the-state-of-hidden-content-support-in-2016/) by Paciello Group
* [How-to: Hide Content](http://a11yproject.com/posts/how-to-hide-content/) by The A11y Project
* [Clip Your Hidden Content For Better Accessibility](https://developer.yahoo.com/blogs/ydn/clip-hidden-content-better-accessibility-53456.html) by Yahoo!
* [Hiding content untangled](https://www.marcozehe.de/2012/04/24/hiding-content-untangled-hiding-vs-moving-out-of-the-visible-viewport/) by Marco Zehe