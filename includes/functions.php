<?php
/**
 * Helper functions for the website
 */

// Active menu class
function getActiveClass($page) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page == $page) ? 'active' : '';
}

// Format phone number
function formatPhoneNumber($number) {
    return preg_replace('/[^0-9+]/', '', $number);
}

// Include section safely
function getSection($section_name) {
    $section_path = __DIR__ . '/../sections/' . $section_name . '.php';
    if (file_exists($section_path)) {
        include $section_path;
    } else {
        echo "<!-- Section {$section_name} not found -->";
    }
}

// Asset helper
function asset($path) {
    return BASE_URL . 'assets/' . ltrim($path, '/');
}

// Include file with variables
function includeWithVariables($filePath, $variables = array(), $print = true) {
    $output = NULL;

    if (file_exists($filePath)) {
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

// Debug helper
function debug_path($path) {
    echo "<!-- Debug: Looking for: " . $path . " -->";
}
?>