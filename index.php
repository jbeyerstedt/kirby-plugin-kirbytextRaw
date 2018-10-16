<?php
/*
 * Kirby 3 plugin - kirbytextRaw
 * Parse Markdown-formatted text as kirbytext without enclosing <p> tags
 *
 * Copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * License: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 *
 * Sample usage:
 * <?php echo $page->text()->kirbytextRaw() ?>
 */

Kirby::plugin('jbeyerstedt/kirbytextraw', [
  'fieldMethods' => [
    'kirbytextRaw' => function ($field) { return kirbytextRaw ($field); },
    'ktr' => function ($field) { return kirbytextRaw ($field); }
  ]
]);

function kirbytextRaw($content) {
  $text = kirbytext($content);
  if ('<p>' === str::substr($text, 0, 3) && '</p>' === str::substr($text, -4)) {
    return str::substr($text, 3, -4);
  } else {
    return $text;
  }
}
