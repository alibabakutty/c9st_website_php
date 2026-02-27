<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header text-center animate-fade-in">
            <div class="badge glass-panel">Get in Touch</div>
            <h2 class="section-title">
                Let's Build <span class="text-gradient">Together</span>
            </h2>
            <p class="section-subtitle">
                Ready to transform your business? Our team of experts is here to discuss your next big project.
            </p>
        </div>

        <div class="contact-content">
            <div class="contact-info glass-panel animate-fade-in delay-100">
                <h3>Contact Information</h3>
                <p class="info-desc">Fill up the form and our Team will get back to you within 24 hours.</p>

                <div class="info-list">
                    <div class="info-item">
                        <i class="fas fa-phone info-icon"></i>
                        <span><?php echo CONTACT_PHONE1; ?><br><?php echo CONTACT_PHONE2; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope info-icon"></i>
                        <span><?php echo CONTACT_EMAIL; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt info-icon"></i>
                        <span><?php echo ADDRESS; ?></span>
                    </div>
                </div>

                <div class="map-container">
                    <iframe
                        src="https://maps.google.com/maps?q=Cloud9%20Soft%20Technologies%20Chennai&t=&z=14&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="220"
                        style="border: 0; border-radius: 16px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Office Location">
                    </iframe>
                    <a
                        href="https://maps.app.goo.gl/cTcevky25UL3huBN9"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-outline"
                        style="width: 100%; margin-top: 1rem; display: flex; justify-content: center; align-items: center;">
                        Get Directions <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
                    </a>
                </div>

                <div class="contact-deco-orb"></div>
            </div>

            <form class="contact-form glass-panel animate-fade-in delay-200" method="POST" action="">
                <div class="form-group row">
                    <div class="input-field">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="John" required>
                    </div>
                    <div class="input-field">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Doe" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="input-field">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="john@example.com" required>
                    </div>
                    <div class="input-field">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" placeholder="+91 99400 13931" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="5" placeholder="How can we help you?" required></textarea>
                </div>

                <button type="submit" name="submit_contact" class="btn btn-primary submit-btn">
                    Send Message <i class="fas fa-paper-plane" style="margin-left: 8px;"></i>
                </button>
            </form>
        </div>
    </div>
</section>

<?php
// Handle form submission
if (isset($_POST['submit_contact'])) {
    $to = CONTACT_EMAIL;
    $subject = "New Contact Form Submission from " . SITE_NAME;
    $message = "Name: " . $_POST['first_name'] . " " . $_POST['last_name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n\n";
    $message .= "Message:\n" . $_POST['message'];
    
    $headers = "From: " . $_POST['email'];
    
    // Uncomment below line to enable email sending
    // mail($to, $subject, $message, $headers);
    
    echo '<script>alert("Thank you for your message. We will get back to you soon!");</script>';
}
?>