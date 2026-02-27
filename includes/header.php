<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> - Tally Solutions Provider</title>
    <meta name="description" content="Cloud 9 Soft Technologies - Your trusted partner in Tally Accounting Software solutions. Specializing in TallyPrime implementation, customization, and support.">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo asset('images/favicon.ico'); ?>">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="nav-content">
            <div class="nav-brand">
                <div class="logo">
                    <i class="fas fa-cloud" style="color: #ffffff; font-size: 24px;"></i>
                    <span class="logo-text"><?php echo SITE_NAME; ?></span>
                </div>
            </div>

            <div class="nav-links desktop-only">
                <a href="<?php echo BASE_URL; ?>public/index" class="<?php echo getActiveClass('index.php') ? 'active' : ''; ?>">Home</a>
                <a href="<?php echo BASE_URL; ?>public/index#about">About</a>
                <a href="<?php echo BASE_URL; ?>public/index#services">Services</a>
                <a href="<?php echo BASE_URL; ?>public/contact.php" class="<?php echo getActiveClass('contact.php') ? 'active' : ''; ?>">Contact</a>
            </div>

            <div class="nav-actions desktop-only">
                <div class="nav-contact-info">
                    <div class="contact-name">Tally Perumal</div>
                    <div class="contact-number"><?php echo CONTACT_PHONE1; ?></div>
                </div>
                <div class="nav-tally-logo">
                    <img src="<?php echo asset('images/tallylogo.jpg'); ?>" alt="Tally Logo">
                </div>
            </div>

            <div class="mobile-only mobile-toggle-container">
                <button class="mobile-toggle" id="mobileToggle">
                    <i class="fas fa-bars" style="color: #ffffff; font-size: 24px;"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu - Improved Version -->
        <div class="mobile-menu glass-panel" id="mobileMenu">
            <!-- Mobile menu header with logo -->
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(255,255,255,0.2);">
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <i class="fas fa-cloud" style="color: #ffffff; font-size: 24px;"></i>
                    <span style="color: #ffffff; font-weight: 600;"><?php echo SITE_NAME; ?></span>
                </div>
                <div style="background: #ffffff; padding: 0.3rem 0.6rem; border-radius: 4px;">
                    <img src="<?php echo asset('images/tallylogo.jpg'); ?>" alt="Tally Logo" style="height: 20px;">
                </div>
            </div>

            <!-- Mobile menu links -->
            <a href="<?php echo BASE_URL; ?>public/index.php" onclick="toggleMobileMenu()" style="color: #ffffff; font-size: 1.2rem; padding: 0.8rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">Home</a>
            <a href="<?php echo BASE_URL; ?>public/index.php#about" onclick="toggleMobileMenu()" style="color: #ffffff; font-size: 1.2rem; padding: 0.8rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">About</a>
            <a href="<?php echo BASE_URL; ?>public/index.php#services" onclick="toggleMobileMenu()" style="color: #ffffff; font-size: 1.2rem; padding: 0.8rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">Services</a>
            <a href="<?php echo BASE_URL; ?>public/contact.php" onclick="toggleMobileMenu()" style="color: #ffffff; font-size: 1.2rem; padding: 0.8rem 0; border-bottom: 1px solid rgba(255,255,255,0.1);">Contact</a>

            <!-- Contact info -->
            <div style="margin-top: 2rem; padding: 1rem; background: rgba(255,255,255,0.1); border-radius: 8px;">
                <div style="font-weight: 600; margin-bottom: 0.3rem; color: #ffffff;">Tally Perumal</div>
                <div style="font-size: 0.9rem; color: rgba(255,255,255,0.8);"><?php echo CONTACT_PHONE1; ?></div>
                <div style="font-size: 0.9rem; color: rgba(255,255,255,0.8);"><?php echo CONTACT_PHONE2; ?></div>
            </div>
        </div>
    </nav>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        document.getElementById('mobileToggle')?.addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('show');
        });

        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.remove('show');
        }
    </script>