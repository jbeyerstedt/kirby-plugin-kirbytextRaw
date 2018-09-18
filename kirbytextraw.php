<?php
/*
 * Kirby 2 plugin - kirbytextRaw
 * Parse Markdown-formatted text as kirbytext without enclosing <p> tags
 *
 * Copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * License: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 * v1.1.1 (2018-09-18)
 *
 * Sample usage:
 * <?php echo $page->text()->kirbytextRaw() ?>
 * <?php echo $page->text()->ktr() ?>
 */

field::$methods['kirbytextRaw'] = field::$methods['ktr'] = function ($field) {
    $text = $field->kirbytext();
    if ('<p>' === str::substr($text, 0, 3) && '</p>' === str::substr($text, -4)) {
        return str::substr($text, 3, -4);
    } else {
        return $text;
    }
};
