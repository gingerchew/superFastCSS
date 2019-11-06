<?php
/**
 * snippets transport file for superFastCSS extra
 *
 * Copyright 2019 by Frankie <>
 * Created on 11-01-2019
 *
 * @package superfastcss
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'superFastCSS',
  'description' => 'Render snippet',
  'properties' => 
  array (
  ),
), '', true, true);
$snippets[1]->setContent(file_get_contents(MODX_BASE_PATH . 'assets/mycomponents/superfastcss/core/components/superfastcss/elements/snippets/superfastcss.snippet.php'));

return $snippets;
