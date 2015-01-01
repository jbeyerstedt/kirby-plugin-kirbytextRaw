<?php
/* 
 * kirby 2 plugin - kirbytextRaw
 * parse text as kirbytext but remove the p tags
 *
 * Jannik Beyerstedt, Hamburg, Germany | http://jannikbeyerstedt.de | jtByt.Pictures@gmail.com
 * CC BY-NC-SA 3.0
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