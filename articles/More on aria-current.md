Written: 2014-10-07
Tags: accessibility, aria, w3c

**Updated on 2015-12-27:** `aria-current` has been accepted and is [in the working draft](http://www.w3.org/TR/wai-aria-1.1/#aria-current).

Last week—after Léonie Watson brought [a thread about aria-current](http://lists.w3.org/Archives/Public/public-pfwg/2014Sep/0087.html) on [one of the W3C's mailing lists](http://lists.w3.org/Archives/Public/public-pfwg/) to my attention—I wrote a reply to said thread. The W3C sent me an e-mail that told me my reply was send to the lists maintainer for manual processing; this is standard procedure if you post to a mailing list for the first time. After the reply had not shown up for a couple of days [I asked the W3C for clarification on twitter](https://twitter.com/MichielBijl/status/519240194386845696). They [told me](https://twitter.com/w3c/status/519241223383842816) they would put it through to the maintainer again. Which was directly followed by a tweet that said I couldn't post to the list because I am not a member of the list.

<!--more-->

To keep this discussion alive, I'll share my reply here:

<blockquote>
<p>I want to thank Léonie for conceptualising aria-current and Heydon Pickering, who brought it to my attention. I think aria-current can be a versatile attribute if we want it to, but we need to think about the different possibilities and use cases. Recently I wrote <a href="http://www.michielbijl.nl/2014/09/23/the-current-page-conundrum/">an article</a> on extending it with a new value: "section". This was after <a href="http://www.heydonworks.com/article/the-accessible-current-page-link-conundrum">Heydon wrote an article</a> on how to communicate with users what the current page is within the primary navigation of a website. I extended that vision to a page within a section of a website, for example a news article within the news section. I suggest you read the articles I linked to if you want more information on the subject.</p>
<p>All the examples I've seen so far are based on some form of navigation (you can interact with the object and something within it marks the current thingy you are at). So to me, it would make sense to limit the use of aria-current to navigation elements. As Léonie mentioned, this is a little vague. But we can simply ask our self "What are navigation elements?" As far as I'm concerned these are anchors and to some extend buttons.</p>
<p>The current examples we have (as far as I know):</p>
<ul>
<li>Current page; communicate that an element links to the current page.
<li>Current section; communicate that the current page belongs to a particular section.
<li>Current date; mark the current date in a data picker.
<li>Current step; communicate the current step within a step based process, for example a webshop checkout or multi page form.
</ul>
<p>We could use current page for other stuff than pages, too. Mark the current file in a online text editor with tabs, or in a tree view, or the current tab in a tablist.</p>
<p>Maybe there are other use cases as well. I suggest we continue this discussion because I'd hate to see aria-current perish; I think it can be great of accessibility and because of that: usability.</p></blockquote>

If you would like to continue this discussion, you can [contact me on twitter](https://twitter.com/MichielBijl) or send me an e-mail at aria at agosto.nl. Be sure to either mentions [Léonie Watson on twitter](https://twitter.com/LeonieWatson) or send an e-mail.
