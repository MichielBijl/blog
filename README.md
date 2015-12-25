# Blog
WordPress template for [my blog](http://www.michielbijl.nl/). This will double as a test with PostCSS and its many plugins.

## Installation

1. Run `npm install`
2. Yay!
3. Nay? Open an issue.

## Usage

1. Run `gulp`

This will compile CSS, activate watch and auto reload, and run server at localhost:8080.

## Vertical rhythm

I'd like to establish a vertical rhythm on the website. This is something that makes everything easier on the eyes. It's been a while since I've built something like this, so any tips are welcome. For now, I'm going with 32 pixels as my base rhythm. `vertical.html` contains a test for these values.

Space between text elements should be equal to one line height if it's flowing text. For UI elements it should be a multiply of that.

* Base text size: 1.25rem (20px)
* Base line-height: 1.6em (32px)
* Base margin top: 1.6em (32px)
* Large text size: 1.875rem (30px)
* Large line-height: 1.6em (48px / 3rem)
* Large margin top: 1.6em (48px / 3rem)

## Learned and thought during development

* Publish date
  * Tried schema.org syntax; too much noise in source code
  * `pubdate`is deprecated
* Flexbox all the things!
  * Header
  * Navigation
  * Article title
* Who needs .classes anyway
* No images for layout
* Constrast 4.5 - design 1
  * Had issues with colour contrast in the menu. Contrast now 5.82:1.
* Tools used
  * CodePen; all preparation for this design were done in CodePen.
  * WebAim's colour contrast checker
  * TPG's colour contrast checker app
  * Sip Colour Picker
  * Accessibility Inspector
  * VoiceOver
  * VirtualBox
  * BrowserStack
  * IRC / Slack
    * w3c/a11ySlackers
    * #a11y on Slack
    * irc.w3.org #aria
  * Spotify (can't code without music)
* Include links to relevant specifications
* Scripts used
  * what-input for focus management
  * couple of lines to get skip link to work in WebKit/Blink browsers.
* Picking the right font is hard
