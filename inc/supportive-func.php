<?php
global $globalSFormData;
/** $data = the_form_stored_data(); */
function the_form_stored_data() {
    global $globalSFormData;
    $project_id = get_the_ID();$ptname = get_the_ptname();
    $globalSFormData = !empty(get_post_meta($project_id, $ptname, true))?(array) get_post_meta($project_id, $ptname, true):[];
	// print_r($globalSFormData);
    return $globalSFormData;
}
/** <?php noste_checkbox_attrset('pilar_TY1', $data); ?> */
function noste_checkbox_attrset($value, $data = false) {
    global $globalSFormData;if (!$data) {$data = $globalSFormData;}
	$dataset = isset($data['noste_check'])?(array) $data['noste_check']:(array) $data;
	echo sprintf(
		'name="noste_check[]" value="%s" %s',
		esc_attr($value),
		in_array($value, (array) $dataset)?'checked':''
	);
}
/** <?php noste_textinput_attrset('pilar_TY1', $data, ''); ?> */
function noste_textinput_attrset($name, $data = false, $default = '') {
    global $globalSFormData;if (!$data) {$data = $globalSFormData;}
	echo sprintf(
		'name="%s" value="%s"',
		esc_attr($name),
		esc_attr(isset($data[$name])?$data[$name]:$default)
	);
}
/** <?php noste_select_options(['kpl', 'm2', 'erä', 'kpl', 'jm'], 'measured1', $data, 'kpl'); ?> */
function noste_select_options($options, $name, $data = false, $default = '') {
    global $globalSFormData;if (!$data) {$data = $globalSFormData;}
	foreach ((array) $options as $key => $title) {
		if (is_integer($key)) {$key = $title;}
		echo sprintf(
            '<option value="%s" %s>%s</option>',
            esc_attr($key),
            selected(isset($data[$name])?$data[$name]:$default, $key, false),
            wp_kses_post($title)
        );
	}
}
/** get_the_ptname() */
function get_the_ptname() {
	return implode('_', ['noste', $_GET['tm']??'', $_GET['tmin']??'']);
}

/** <?php noste_repeatable_area_checkbox_attrset('repeatable', 'second way', $data); ?> */
function noste_repeatable_area_checkbox_attrset($name, $value, $data = false) {
    global $globalSFormData;if (!$data) {$data = $globalSFormData;}
	$dataset = isset($data[$name])?(array) $data[$name]:(array) $data;
	echo sprintf(
		'name="%s[]" value="%s" %s',
		esc_attr($name),
		esc_attr($value),
		in_array($value, (array) $dataset)?'checked':''
	);
}
add_action( 'wp_ajax_noste_get_project_step', 'noste_get_project_step');
function noste_get_project_step() {
    $response = (object) ['global_keywords' => [], 'submissions' => []];
    $ptname = implode('_', ['noste', $_GET['tm'], $_GET['tmin']]);
	// $json = get_post_meta((int) $_GET['project_id']);
	// foreach ((array) $json as $key => $valArr) {if ($valArr[0]) {$json[$key] = $valArr[0];}}
    // $json = [
    //     ...$json,
    //     ...(array) json_decode(get_post_meta((int) $_GET['project_id'], $ptname, true), true)
    // ];
    $global_keywords = (array) get_post_meta((int) $_GET['project_id']);
    foreach ($global_keywords as $key => $value) {
        if (count($value) == 1) {$global_keywords[$key] = $value[0];}
    }
	$response->global_keywords = array_filter($global_keywords, function($k){
		return str_contains( $k, 'pilar_' );
	}, ARRAY_FILTER_USE_KEY);
    // 
    $response->submissions = (array) get_post_meta((int) $_GET['project_id'], $ptname, true);
	wp_send_json((array) $response);
}