# kirbytextRaw Plugin for Kirby CMS v2
by Jannik Beyerstedt from Hamburg, Germany  
[jannikbeyerstedt.de](http://jannikbeyerstedt.de) | [Github](https://github.com/jbeyerstedt)  
**License:** GNU GPL v3  
**version:** v1.1.1

## Notice for Kirby 3
This plugin has been adapted for Kirby 3, but the new version has also introduced new core methods, which make this plugin obsolete. There will be no additional development for Kirby 3.
Take a look at:
- [$field->kirbytags()](https://getkirby.com/docs/reference/templates/field-methods/kirbytags) to parse KirbyTags, but no Markdown
- (since 3.1.0) [$field->kirbytextinline()](https://getkirby.com/docs/reference/templates/field-methods/kirbytextinline) to parse KirbyTags and Markdown, but in an inline friendly way. This is the functionality, I wanted to achieve, when I created this plugin for Kirby 2.


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
