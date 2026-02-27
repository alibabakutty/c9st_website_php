<?php
$servicesData = [
    [
        'icon' => 'fa-database',
        'title' => 'TallyPrime Implementation',
        'description' => 'Comprehensive business management software setup tailored to your accounting, inventory, payroll, and taxation needs.'
    ],
    [
        'icon' => 'fa-server',
        'title' => 'TallyPrime Server',
        'description' => 'Advanced server-based solutions designed to support multi-user environments with large volumes of transactional data.'
    ],
    [
        'icon' => 'fa-code',
        'title' => 'TallyPrime Developer (TDL)',
        'description' => 'Customizing, extending, and developing tailored solutions, reports, and integrations using Tally Definition Language.'
    ],
    [
        'icon' => 'fa-cloud',
        'title' => 'TallyPrime on AWS',
        'description' => 'Deploying Tally Prime on Amazon Web Services for secure, scalable, and real-time cloud-based accounting from anywhere.'
    ],
    [
        'icon' => 'fa-mobile-alt',
        'title' => 'Tally Shoper 9',
        'description' => 'Robust business management for retail and distribution, managing multi-location inventory and point-of-sale activities.'
    ],
    [
        'icon' => 'fa-shield-alt',
        'title' => 'Tally Software Service',
        'description' => 'Ongoing support, configuration, training, and troubleshooting to ensure your Tally software performs optimally.'
    ]
];
?>

<section id="services" class="services-section">
    <div class="container">
        <div class="section-header text-center animate-fade-in">
            <div class="badge glass-panel">What We Do</div>
            <h2 class="section-title">
                Our <span class="text-gradient">Services</span>
            </h2>
            <div class="services-intro glass-panel mt-4 animate-fade-in delay-100" style="padding: 2rem; border-radius: 16px; margin-bottom: 3rem; text-align: left;">
                <p style="margin-bottom: 1rem; color: var(--text-primary); line-height: 1.8;">
                    At <strong><?php echo SITE_NAME; ?></strong>, we specialize in providing comprehensive Tally solutions that empower businesses to streamline their operations. Our team of experts is dedicated to delivering tailored services that meet your unique needs, from installation and support to advanced customizations and integrations.
                </p>
                <p style="margin-bottom: 1rem; color: var(--text-primary); line-height: 1.8;">
                    We empower organizations by integrating Tally with advanced tools and features, such as GST compliance, inventory management, payroll processing, and financial reporting. Whether you're a small business or a large enterprise, our solutions are designed to optimize your accounting workflows, enhance accuracy, and provide real-time insights for better decision-making.
                </p>
                <p style="color: var(--text-primary); line-height: 1.8;">
                    Experience unmatched service quality, timely assistance, and a commitment to driving your business growth with Tally's robust capabilities. <?php echo SITE_NAME; ?> positions itself as a one-stop solution for all Tally accounting software needs.
                </p>
            </div>
        </div>

        <div class="services-grid">
            <?php foreach($servicesData as $index => $service): ?>
                <div class="service-card glass-panel animate-fade-in delay-<?php echo (($index % 3 + 1) * 100); ?>">
                    <div class="service-icon-wrapper">
                        <i class="fas <?php echo $service['icon']; ?>" style="font-size: 40px;"></i>
                    </div>
                    <h3 class="service-title"><?php echo $service['title']; ?></h3>
                    <p class="service-desc"><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>