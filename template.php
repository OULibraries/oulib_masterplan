<?php

/**
 * @file
 * template.php
 
 */
 
 
/**
* Implements hook_preprocess_html(). IE Compatibility
*/
function oulib_masterplan_preprocess_html (&$vars) {
  
  $data = array(
     '#tag' => 'meta',
     '#attributes' => array(
       'http-equiv' => "X-UA-Compatible",
       'content' => "IE=edge",
       )
     );

   drupal_add_html_head($data,'key');
   
 }

 
 

