<?php
// Site configuration
define('SITE_NAME', 'Cloud 9 Soft Technologies');

// Auto-detect base URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_path = rtrim($script_dir, '/public'); // Remove /public from the path

// For localhost: http://localhost/project-root/
// For live server: https://yourdomain.com/
define('BASE_URL', $protocol . $host . $base_path . '/');

define('CONTACT_EMAIL', 'tallyperumal@gmail.com');
define('CONTACT_PHONE1', '+91 - 99400 13931');
define('CONTACT_PHONE2', '+91 - 95000 77184');
define('ADDRESS', 'S1, Plot No: 166, Nedumaran Street, Kesavarthimi, Valasaravakkam, Chennai, Tamilnadu - 6000087');

// Social Media Links
define('FACEBOOK_URL', 'https://www.facebook.com/Cloud9tallysolutions');
define('INSTAGRAM_URL', 'https://www.instagram.com/cloud9_soft_technoloiges_2025/');

// Tally Partner Status
define('TALLY_PARTNER_STATUS', '3 Star Service and Implementation (3* SI)');

// Statistics
define('YEARS_EXPERIENCE', '18+');
define('HAPPY_CUSTOMERS', '4500+');
define('TEAM_MEMBERS', '20+');

// Start session if not started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>