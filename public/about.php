<?php
require_once '../includes/header.php';
?>

<main>
    <section class="hero-section" style="min-height: 40vh; padding-top: 120px;">
        <div class="container text-center">
            <h1 class="hero-title">About <span class="text-gradient">Us</span></h1>
            <p class="section-subtitle" style="margin: 2rem auto;">Learn more about our journey and expertise</p>
        </div>
    </section>
    
    <?php getSection('about'); ?>
    <?php getSection('vision-mission'); ?>
    <?php getSection('journey'); ?>
    <?php getSection('testimonials'); ?>
</main>

<?php
require_once '../includes/footer.php';
?>