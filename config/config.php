<?php
// ==============================
// Site Configuration
// ==============================

define('SITE_NAME', 'Cloud 9 Soft Technologies');

define('CONTACT_EMAIL', 'tallyperumal@gmail.com');
define('CONTACT_PHONE1', '+91 - 99400 13931');
define('CONTACT_PHONE2', '+91 - 95000 77184');
define('ADDRESS', 'S1, Plot No: 166, Nedumaran Street, Kesavarthimi, Valasaravakkam, Chennai, Tamilnadu - 6000087');

define('FACEBOOK_URL', 'https://www.facebook.com/Cloud9tallysolutions');
define('INSTAGRAM_URL', 'https://www.instagram.com/cloud9_soft_technoloiges_2025/');

define('TALLY_PARTNER_STATUS', '3 Star Service and Implementation (3* SI)');

define('YEARS_EXPERIENCE', '18+');
define('HAPPY_CUSTOMERS', '4500+');
define('TEAM_MEMBERS', '20+');

// ==============================
// Base URL (IMPORTANT)
// ==============================
// Use relative root path to avoid HTTPS mixed content
define('BASE_URL', '/');

// ==============================
// Start Session
// ==============================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ==============================
// Error Reporting
// ==============================
// Turn OFF in production
error_reporting(E_ALL);
ini_set('display_errors', 1);