<?php
/**
 * Helper functions for the website
 */

function getActiveClass($page) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page == $page) ? 'active' : '';
}

function formatPhoneNumber($number) {
    return preg_replace('/[^0-9+]/', '', $number);
}

function getSection($section_name) {
    $section_path = __DIR__ . '/../sections/' . $section_name . '.php';
    if (file_exists($section_path)) {
        include $section_path;
    } else {
        echo "<!-- Section {$section_name} not found -->";
    }
}

function asset($path) {
    // Remove leading slash if present
    $path = ltrim($path, '/');
    return BASE_URL . 'assets/' . $path;
}

function includeWithVariables($filePath, $variables = array(), $print = true) {
    $output = NULL;
    if(file_exists($filePath)){
        extract($variables);
        ob_start();
        include $filePath;
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;
}

// Debug function to check paths
function debug_path($path) {
    echo "<!-- Debug: Looking for: " . $path . " -->";
}
?>