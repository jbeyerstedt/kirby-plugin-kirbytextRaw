# Kirby kirbytextRaw Plugin
by Jannik Beyerstedt from Hamburg, Germany  
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)  
**License:** GNU GPL v3  
**version:** v1.1.1

## Notice for Kirby 3
This plugin might become obsolete in some use cases, because of the new kirby function `kirbytags()`, which renders all kirbytags, but no markdown.

This plugin has been adapted for kirby 3, but because major changes are needed, a new branch was created.
You will find the kibry 3 compatible version in the branch `kirby3`.

If anyone needs composer support, please add it via a pull-request, because I don't use composer myself.


## Introduction
**Get kirbytext() without enclosing `<p>` tags**

Sometimes it is necessary to get some text parsed as kirbytext, but without the paragraph tags added. Here is the plugin for this problem. I often use this in automatic article excerpts or even headings and titles, where links etc. should be parsed, but I need the text to be enclosed by a different html element.

## User Manual

#### Installation
Store this file in and rename it to `kirbytextRaw`

    site/plugins/

#### Usage
Use it in your templates like any other Kirby function, eg `kirbytext()`:

    $page->title()->kirbytextRaw()

Simply replace the `kirbytext()` field method with `kirbytextRaw()` or the short form `kt()` with `ktr()`.

## Contribution
Feel free to fork this repository and make it better. If there is a bug I missed, please let me know by opening an issue.
