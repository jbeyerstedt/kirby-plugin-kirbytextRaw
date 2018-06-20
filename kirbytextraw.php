<?php
/*
 * Kirby 2 plugin - kirbytextRaw
 * Parse Markdown-formatted text as kirbytext without enclosing <p> tags
 *
 * Copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * License: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 * v1.1.0 (2018-06-20)
 *
 * Sample usage:
 * <?php echo $page->text()->kirbytextRaw() ?>
 * <?php echo $page->text()->ktr() ?>
 */

field::$methods['kirbytextRaw'] = field::$methods['ktr'] = function ($field) {
    if ('<p>' === str::substr($field, 0, 3) && '</p>' === str::substr($field, -4)) {
        return str::substr($field, 3, -4);
    } else {
        return $field;
    }
};
