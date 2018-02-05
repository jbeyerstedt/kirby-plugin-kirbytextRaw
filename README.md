# Kirby kirbytextRaw Plugin
by Jannik Beyerstedt from Hamburg, Germany  
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)  
**License:** GNU GPL v3  
**version:** v1.0.2

## Introduction
**Get kirbytext() without enclosing `<p>` tags**

Sometimes it is necessary to get some text parsed as kirbytext, but without the paragraph tags added. Here is the plugin for this problem. I often use this in automatic article excerpts or even headings and titles, where links etc. should be parsed, but I need the text to be enclosed by a different html element.

## User Manual

#### Installation
Store this file in

    site/plugins/

#### Usage
Use it in your templates like any other Kirby function, eg `kirbytext()`:

    $page->title()->kirbytextRaw()

Simply replace the `kirbytext()` field method with `kirbytextRaw()`.


## Contribution
Feel free to fork this repository and make it better. If there is a bug I missed, please let me know by opening an issue.
