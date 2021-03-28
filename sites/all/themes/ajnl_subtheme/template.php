<?php

/**
 * @file
 * template.php
 */

 function phptemplate_breadcrumb($breadcrumb) {
   $home = variable_get('site_name', 'drupal');
   $sep = ' &raquo; ';
   if (count($breadcrumb) > 0) {
     $breadcrumb[0] = l(t($home), '');
     return implode($sep, $breadcrumb) . $sep;
   } elseif (drupal_get_title() !== '') {
     return l(t($home), '') . $sep;
   } else {
     return t($home);
   }
}
function woofswarehouse_subtheme_process_page(&$vars) { 
  if (!empty($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;  
  }
}
function woofswarehouse_subtheme_process_page_html(&$vars) { 

  $node = menu_get_object();
  
  if ($node && $node->nid) {
    $vars['theme_hook_suggestion'][] = 'html__' . $node->type;
  }
  
}
?>
