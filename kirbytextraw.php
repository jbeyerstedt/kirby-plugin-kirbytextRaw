<?php
/*
 * kirby 2 plugin - kirbytextRaw
 * parse text as kirbytext but remove the p tags
 *
 * copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 * v1.0.1 (27.11.2014)
 *
 * Sample Usage:
 * <?php echo $page->text()->readingtime() ?>
 *
 * changelog:
 * v1.0.1: fix problem with </br> tags
 */

function kirbytextRaw($content) {
  $text = kirbytext($content);
  return preg_replace('/(.*)<\/p>/', '$1', preg_replace('/<p>(.*)/', '$1', $text));
}
field::$methods['kirbytextRaw'] = function($field) {
  return kirbytextRaw($field->value);
};
