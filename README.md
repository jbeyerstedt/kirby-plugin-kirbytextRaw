# kirby CMS - plugin: kirbytextRaw
by Jannik Beyerstedt from Hamburg, Germany  
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)  
**license:** GNU GPL v3

## Introduction
**get kirbytext without the sorrounding p-tags**

Sometimes it is necessiary to get some text parsed as kirbytext, but without the p-tags added. Here is the plugin for this problem.  
I often use this in automatic article excerpts or even headings and titles, where links, etc. should be parsed, but i need to have a different html-tag sourrounding the text.

## User Manual

#### Installation
store this file in

    site/plugins/

#### Usage
use it in your templates as any other kirby function like `kirbytext()`:

    $page->title()->kirbytextRaw()

Simply replace the `kirbytext()` function by `kirbytextRaw()`.


## Contribution
Feel free to fork this repository and make it better. If there is a bug I missed, please let me know by opening an issue.
