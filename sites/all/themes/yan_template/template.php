<?php 

/**
 * Page alter.
 */
function yan_template_page_alter($page) {
	$mobileoptimized = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'MobileOptimized',
		'content' =>  'width'
		)
	);
	$handheldfriendly = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'HandheldFriendly',
		'content' =>  'true'
		)
	);
	$viewport = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'viewport',
		'content' =>  'width=device-width, initial-scale=1'
		)
	);
	drupal_add_html_head($mobileoptimized, 'MobileOptimized');
	drupal_add_html_head($handheldfriendly, 'HandheldFriendly');
	drupal_add_html_head($viewport, 'viewport');
}

/**
 * Preprocess variables for html.tpl.php
 */
function yan_template_preprocess_html(&$variables) {

	/**
	* Bootstrap CDN
	*/
    
    if (theme_get_setting('bootstrap_css_cdn', 'yan_template')) {
        $cdn = '//maxcdn.bootstrapcdn.com/bootstrap/' . theme_get_setting('bootstrap_css_cdn', 'yan_template')  . '/css/bootstrap.min.css';
        drupal_add_css($cdn, array('type' => 'external'));
    }
    
    if (theme_get_setting('bootstrap_js_cdn', 'yan_template')) {
        $cdn = '//maxcdn.bootstrapcdn.com/bootstrap/' . theme_get_setting('bootstrap_js_cdn', 'yan_template')  . '/js/bootstrap.min.js';
        drupal_add_js($cdn, array('type' => 'external'));
    }
}


/**
 * Preprocess variables for page template.
 */
function yan_template_preprocess_page(&$vars) {

	/**
	 * insert variables into page template.
	 */
	if($vars['page']['sidebar_first'] && $vars['page']['sidebar_second']) { 
		$vars['sidebar_grid_class'] = 'col-md-3';
		$vars['main_grid_class'] = 'col-md-6';
	} elseif ($vars['page']['sidebar_first'] || $vars['page']['sidebar_second']) {
		$vars['sidebar_grid_class'] = 'col-md-4';
		$vars['main_grid_class'] = 'col-md-8';		
	} else {
		$vars['main_grid_class'] = 'col-md-12';			
	}

	if($vars['page']['header_top_left'] && $vars['page']['header_top_right']) { 
		$vars['header_top_left_grid_class'] = 'col-md-8';
		$vars['header_top_right_grid_class'] = 'col-md-4';
	} elseif ($vars['page']['header_top_right'] || $vars['page']['header_top_left']) {
		$vars['header_top_left_grid_class'] = 'col-md-12';
		$vars['header_top_right_grid_class'] = 'col-md-12';		
	}

}

/**
 * Preprocess variables for block.tpl.php
 */
function yan_template_preprocess_block(&$variables) {
	$variables['classes_array'][]='clearfix';
}

/**
 * Override theme_breadrumb().
 *
 * Print breadcrumbs as a list, with separators.
 */
function yan_template_breadcrumb($variables) {
	$breadcrumb = $variables['breadcrumb'];

	if (!empty($breadcrumb)) {
		$breadcrumb[] = drupal_get_title();
		$breadcrumbs = '<ol class="breadcrumb">';

		$count = count($breadcrumb) - 1;
		foreach ($breadcrumb as $key => $value) {
		$breadcrumbs .= '<li>' . $value . '</li>';
		}
		$breadcrumbs .= '</ol>';

		return $breadcrumbs;
	}
}

/**
 * Search block form alter.
 */
function yan_template_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
	    unset($form['search_block_form']['#title']);
	    $form['search_block_form']['#title_display'] = 'invisible';
		$form_default = t('Search this website...');
	    $form['search_block_form']['#default_value'] = $form_default;

		$form['actions']['submit']['#attributes']['value'][] = '';

	 	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
	}
}
