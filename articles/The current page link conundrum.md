Written: 2014-09-24
Tags: accessibility, aria

Early in 2014 [Heydon Pickering](https://twitter.com/heydonworks) wrote an article titled [The Accessible Current Page Link Conundrum](http://www.heydonworks.com/article/the-accessible-current-page-link-conundrum), in which he described the problem surrounding the accessible markup of a link directed at the current page and possible solutions. If you have not read the article I suggest you read that first. If you really want to get in on this there is a [video available on YouTube](http://www.youtube.com/watch?v=iQGaf0qLKNI) in which Heydon goes into further detail about possible solutions.

<!--more-->

### The Favourite Solution

Out of the suggested solutions there is one solution that everyone—including myself—seems to be a big fan of. <a href="https://twitter.com/DanielGoransson">Daniel Göransson</a> suggested—in the comment section of Heydon's article—that you could replace the value of the <code>href</code> attribute on the current menu item, with a pointer to the main content. This solution would give you a "Cascading Style Sheet" or CSS selector to style the item with, a accessible solution for the link directive and it's so simple that you're mad at yourself that you didn't come up with the damn thing yourself.

### The Problem

The solution described above is lovely, but consider the following situation: we have a website with a menubar like navigation. The menubar has links to different sections of the website: news, documents and contact. If we were to click on the link for news we would be taken to the news page. Once on the news page the href attribute for the news link would be replaced with a pointer to the main content. Because of this we can now give the news link some distinct styling to indicate that it is the current page.

So far so good right? But if we were to click on one of the articles on the news page, we would be taken to the page for that particular article, right? "So what is the problem?" you might ask. The problem is that now that we are no longer on the main news page, the news link can no longer point at the main content; the link should revert to its original state. That would however mean that we can no longer style it with our attribute selector. "But aren't we still in the news section?" yes we are, but it is not reflected in the menubar. We can of course add a "current" class to indicate its state, but that would bring us back to square one as it is not accessible. So what are we to do?

### The Solutions

Before I wrote this post [I posted it on twitter](https://twitter.com/heydonworks/status/514524222110982145) addressed at [Heydon](https://twitter.com/heydonworks). He replied:

<blockquote>
  Hmmm. Interesting. Certainly, if you are at the article permalink, the news category link should not be "same page", but having news not highlighted at all seems wrong given the nature of the "news item" content. Even a class to highlight it in the traditional way is weird, though, because you are not in the category but at an item.
  <footer>—<a href="https://twitter.com/heydonworks/status/514524222110982145">Heydon</a></footer>
</blockquote>

He went on to suggest that <q cite="https://twitter.com/heydonworks/status/514522270648528896">Perhaps the "active" link could still link to #main but have a modified label to indicate the news item, maybe by its title</q>, but we quickly concluded that this solutions wouldn't work; you would lose the link to the news page.

In his article Heydon mentions that <q cite="http://www.heydonworks.com/article/the-accessible-current-page-link-conundrum">[Léonie Watson has been discussing](http://lists.w3.org/Archives/Public/public-pfwg/2013Oct/0059.html) aria-current as a proposed standard method for indicating one’s current location within a site or step-based process.</q> In her proposal she suggested that we used `aria-current="true"` on the current link. As a possible solution to the problem at hand—a current state for the navigation item linking to the current section or category—I would like to suggest a new value for `aria-current`: section.

### aria-current=section

With this new value we could add a new level of understanding where you are within a website. Screen readers could also announce this information if one pleases; the value is the same across all languages. Imagine tabbing through the navigation and hear the screen reader announce: "News, current section". I think this would be a great solution, but I'm open for any comments you have; I'm willing to learn.

You can [contact me on twitter](https://twitter.com/MichielBijl) or send me an e-mail at aria at agosto.nl
