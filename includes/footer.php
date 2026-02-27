    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo" style="color: var(--text-primary); background: transparent; border: none; padding: 0;">
                        <i class="fas fa-cloud" style="color: var(--accent-primary); font-size: 32px;"></i>
                        <span class="logo-text text-gradient"><?php echo SITE_NAME; ?></span>
                    </div>
                    <p class="footer-desc">
                        Your trusted partner in Accounting Management. We specialize in providing comprehensive Tally solutions that empower businesses to streamline their operations.
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-links-group">
                    <h3>Company</h3>
                    <a href="index#about">About Us</a>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="contact.php">Contact</a>
                </div>

                <div class="footer-links-group">
                    <h3>Products & Services</h3>
                    <a href="index#services">TallyPrime</a>
                    <a href="index#services">TallyPrime Server</a>
                    <a href="index#services">TallyPrime on AWS</a>
                    <a href="index#services">Tally Customization</a>
                </div>

                <div class="footer-links-group">
                    <h3>Legal</h3>
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>