## Introduction
Sometimes it is necessiary to get some text parsed as kirbytext, but without the p-tags added. Here is the plugin for this problem.
I often use this in automatic article excerpts or even headings and titles, where links, etc. should be parsed, but i need to have a different html-tag sourrounding the text.

#### installation
store this file in

    site/plugins/

#### usage
use it in your templates as any other kirby function like `kirbytext()`:

    $page->title()->kirbytextRaw()

Simply replace the `kirbytext()` function by `kirbytextRaw()`.


## contribution
Feel free to fork this repository an make it better. If there is a bug I missed, please let me know by opening an issue.
