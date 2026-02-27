<?php
$testimonialsData = [
    [
        'author' => 'Nigeria Transports',
        'title' => 'Highly Skilled and Professional Team',
        'text' => 'We had a challenging task of integrating Tally with multiple third-party applications. Their expertise in Tally integration, especially with APIs, made all the difference. Their team is professional, knowledgeable, and always available when we need them. They\'ve been a vital partner in our digital transformation.'
    ],
    [
        'author' => 'Habeeb Tanning Industries',
        'title' => 'Tailored Solutions That Fit Our Needs',
        'text' => 'We were struggling with some specific reporting requirements, and their team created a perfect solution using TDL. The software is now tailored to our business processes, and it works flawlessly.'
    ],
    [
        'author' => 'Prasad Studios',
        'title' => 'Best Decision for Our Business',
        'text' => 'From installation to customization and integration with other tools, they\'ve been with us every step of the way. Their solutions have made a big impact on our productivity and efficiency. We couldn\'t ask for a better team to work with.'
    ]
];
?>

<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="section-header text-center animate-fade-in">
            <div class="badge glass-panel">Client Testimonials</div>
            <h2 class="section-title">
                What Our Clients <span class="text-gradient">Say</span>
            </h2>
            <p class="section-subtitle">
                We helped <?php echo HAPPY_CUSTOMERS; ?> customers in managing accounting for their firm.
            </p>
        </div>

        <div class="testimonials-intro glass-panel animate-fade-in delay-100">
            <p>
                "Our experience with Cloud9 Soft Technologies and their Tally Accounts Software has been exceptional. Their team provided us with comprehensive training and support, ensuring that our staff could efficiently use the software to manage our accounts seamlessly. The software’s user-friendly interface and robust features, such as inventory management, GST compliance, and financial reporting, have significantly streamlined our operations."
            </p>
            <p class="mt-2">
                <strong><?php echo SITE_NAME; ?></strong> expertise and dedication to customer service were evident throughout the process, making it easier for us to integrate Tally into our workflow. We highly recommend “<?php echo SITE_NAME; ?>” for businesses looking for reliable and effective accounting solutions.
            </p>
        </div>

        <div class="testimonials-grid mt-4 animate-fade-in delay-200">
            <?php foreach($testimonialsData as $testimonial): ?>
                <div class="testimonial-card glass-panel">
                    <i class="fas fa-quote-right quote-icon" style="font-size: 40px;"></i>
                    <div class="stars">
                        <?php for($i = 0; $i < 5; $i++): ?>
                            <i class="fas fa-star" style="color: var(--accent-secondary);"></i>
                        <?php endfor; ?>
                    </div>
                    <h4 class="testimonial-title"><?php echo $testimonial['title']; ?></h4>
                    <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                    <div class="testimonial-author">
                        <strong><?php echo $testimonial['author']; ?></strong>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>