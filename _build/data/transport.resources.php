<?php
/**
 * resources transport file for TinymceWrapper extra
 *
 * Copyright 2015 by donShakespeare donShakespeare@gmail.com
 * Created on 07-24-2015
 *
 * @package tinymcewrapper
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
/* @var xPDOObject[] $resources */


$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array (
  'id' => 1,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'TinymceWrapper',
  'longtitle' => '',
  'description' => '<ol>
<li><em>Supports</em><strong><em> MIGX</em></strong></li>
<li><em>Supports</em><strong><em> Quick Create/Update </em></strong><em>Resources</em></li>
<li>Automatic install and init of <strong>Responsive FileManager</strong></li>
</ol>',
  'alias' => 'tinymcewrapper',
  'link_attributes' => '',
  'published' => false,
  'isfolder' => false,
  'introtext' => 'Added Responsive FileManager<strong> link</strong> to Manager topnav<strong>&gt;</strong>Media',
  'richtext' => true,
  'template' => 'TinymceWrapper',
  'menuindex' => 0,
  'searchable' => true,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/tinymcewrapper.content.html'));

return $resources;
