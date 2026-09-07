<?php
// index.php
include 'config/db.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/hero.php';
?>

<!-- FontAwesome CDN for Professional Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- AOS Animation Library CDN -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    :root {
        --bg-sky: #f0f9ff;
        --bg-soft-light: #f8fafc;
        --text-paragraph: #1e293b;
        --primary-blue: #0066ff;
    }

    .section {
        padding: 100px 0;
        background-color: var(--bg-white, #ffffff);
        overflow: hidden;
    }

    .section-alt {
        background: linear-gradient(135deg, #f8fbff 0%, #edf4fc 100%);
    }

    /* Uniform Section Header Design */
    .section-header {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 65px auto;
    }

    .uniform-sub-heading {
        color: var(--primary-blue, #0066ff) !important;
        font-weight: 800 !important;
        text-transform: uppercase;
        letter-spacing: 5px;
        font-size: 16px !important;
        margin-bottom: 15px;
    }

    .uniform-main-title {
        font-size: 44px !important;
        font-weight: 900 !important;
        color: var(--primary-blue, #0066ff) !important;
        letter-spacing: -1.5px;
        line-height: 1.15;
        margin-bottom: 20px;
    }

    .uniform-header-desc {
        color: #475569 !important;
        font-size: 18px !important;
        font-weight: 500;
        line-height: 1.7;
    }

    .title-underline {
        width: 80px;
        height: 4px;
        background: var(--primary-blue, #0066ff);
        margin: 25px auto 0 auto;
        border-radius: 2px;
        transition: width 0.4s ease;
    }

    .section-header:hover .title-underline {
        width: 140px;
    }

    /* --- About Section Styling --- */
    .about-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 60px;
        align-items: center;
    }

    .about-image-wrapper {
        position: relative;
        padding: 20px;
        overflow: hidden;
        border-radius: 28px;
    }

    @keyframes floatImage {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
        100% { transform: translateY(0px); }
    }

    .about-main-img {
        width: 100%;
        border-radius: 24px;
        box-shadow: 0 25px 50px rgba(0, 102, 255, 0.18);
        object-fit: cover;
        height: 480px;
        border: 4px solid #ffffff;
        animation: floatImage 4s ease-in-out infinite;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
    }

    .about-image-wrapper:hover .about-main-img {
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 35px 70px rgba(0, 102, 255, 0.3);
        animation-play-state: paused;
    }

    .about-content h3 {
        font-size: 34px;
        font-weight: 800;
        color: var(--primary-blue, #0066ff);
        margin-bottom: 22px;
        line-height: 1.35;
        transition: color 0.3s ease;
    }

    .about-content p {
        color: var(--text-paragraph, #1e293b);
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 20px;
        font-weight: 500;
    }

    .about-features {
        list-style: none;
        padding: 0;
        margin: 0 0 35px 0;
    }

    .about-features li {
        position: relative;
        padding-left: 32px;
        margin-bottom: 14px;
        font-weight: 700;
        color: #0f172a;
        font-size: 16px;
        transition: transform 0.3s ease;
    }

    .about-features li:hover {
        transform: translateX(8px);
        color: var(--primary-blue);
    }

    .about-features li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        width: 22px;
        height: 22px;
        background: rgba(0, 102, 255, 0.12);
        color: var(--primary-blue, #0066ff);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        font-size: 13px;
        transition: all 0.3s ease;
    }

    .about-features li:hover::before {
        background: var(--primary-blue);
        color: #ffffff;
        transform: scale(1.15) rotate(360deg);
    }

    /* --- Stats Section Styling --- */
    .stats-section {
        background: linear-gradient(135deg, #0a2540 0%, #1e3a8a 100%);
        padding: 85px 0;
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .stats-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(0,102,255,0.2) 0%, transparent 60%);
        animation: pulseGlow 6s ease-in-out infinite alternate;
        pointer-events: none;
    }

    @keyframes pulseGlow {
        0% { transform: scale(1); opacity: 0.8; }
        100% { transform: scale(1.1); opacity: 1; }
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(10px);
        padding: 40px 25px;
        border-radius: 22px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .stat-card:hover {
        transform: translateY(-12px) scale(1.03);
        background: rgba(255, 255, 255, 0.12);
        border-color: #0066ff;
        box-shadow: 0 25px 50px rgba(0, 102, 255, 0.4);
    }

    .stat-icon-box {
        width: 75px;
        height: 75px;
        background: linear-gradient(135deg, #0066ff 0%, #00c6ff 100%);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 22px auto;
        font-size: 28px;
        color: #ffffff;
        box-shadow: 0 10px 20px rgba(0, 102, 255, 0.4);
        transform: rotate(-5deg);
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .stat-card:hover .stat-icon-box {
        transform: rotate(0deg) scale(1.2) translateY(-4px);
    }

    .stat-card h3 {
        font-size: 44px;
        font-weight: 900;
        margin-bottom: 8px;
        color: #ffffff;
        letter-spacing: -1px;
        transition: transform 0.3s ease;
    }

    .stat-card:hover h3 {
        transform: scale(1.08);
        color: #38bdf8;
    }

    .stat-card p {
        font-size: 14px;
        color: #94a3b8;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    /* Services & Products Grid Styling with Zoom Effects */
    .grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 35px;
    }

    .service-card {
        background-color: var(--bg-white, #ffffff);
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
    }

    .service-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 0 30px 60px -12px rgba(0, 102, 255, 0.3);
        border-color: rgba(0, 102, 255, 0.6);
    }

    .service-img-wrapper {
        position: relative;
        height: 230px;
        overflow: hidden;
    }

    .service-img-wrapper img,
    .service-img-wrapper video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .service-card:hover .service-img-wrapper img,
    .service-card:hover .service-img-wrapper video {
        transform: scale(1.15) rotate(1deg);
    }

    .service-badge {
        position: absolute;
        top: 18px;
        left: 18px;
        background: rgba(0, 102, 255, 0.92);
        color: #ffffff;
        font-weight: 700;
        font-size: 12px;
        padding: 6px 14px;
        border-radius: 8px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        box-shadow: 0 4px 10px rgba(0, 102, 255, 0.3);
        z-index: 2;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .service-card:hover .service-badge {
        transform: scale(1.1);
        background: #0052cc;
    }

    .service-content {
        padding: 35px 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: background-color 0.3s ease;
    }

    .service-card:hover .service-content {
        background-color: #fafcff;
    }

    .btn-primary-action {
        display: inline-block;
        background-color: var(--primary-blue, #0066ff);
        color: #ffffff;
        padding: 14px 34px;
        font-weight: 700;
        text-decoration: none;
        border-radius: 10px;
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 6px 20px rgba(0, 102, 255, 0.3);
    }

    .btn-primary-action:hover {
        background-color: #0052cc;
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 12px 30px rgba(0, 102, 255, 0.5);
        color: #ffffff;
    }

    /* Choose Us Section Styles with Enhanced Hover Zoom */
    .choose-us-premium-section {
        position: relative;
        padding: 110px 0;
        background-color: #ffffff;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
        overflow: hidden;
    }

    .premium-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .premium-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    }

    .premium-card:hover {
        transform: translateY(-12px) scale(1.03);
        background: #ffffff;
        border-color: #0066ff;
        box-shadow: 0 25px 50px rgba(0, 102, 255, 0.15);
    }

    .card-img-wrapper {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .card-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .premium-card:hover .card-img-wrapper img {
        transform: scale(1.15) rotate(1deg);
    }

    .card-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #0066ff;
        color: #ffffff;
        font-weight: 700;
        font-size: 11px;
        padding: 5px 12px;
        border-radius: 4px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(0, 102, 255, 0.3);
        transition: transform 0.3s ease;
    }

    .premium-card:hover .card-badge {
        transform: scale(1.1);
    }

    .card-body {
        padding: 28px 24px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .premium-card-title {
        font-size: 22px !important;
        font-weight: 800 !important;
        color: var(--primary-blue, #0066ff) !important;
        margin-bottom: 12px;
        transition: color 0.3s ease;
    }

    .premium-card:hover .premium-card-title {
        color: #0040aa !important;
    }

    .premium-card-text {
        color: #475569 !important;
        font-size: 15px !important;
        line-height: 1.6;
        font-weight: 500;
        margin-bottom: 0;
    }

    @media (max-width: 900px) {
        .about-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .section {
            padding: 70px 0;
        }
        .uniform-main-title {
            font-size: 32px !important;
        }
        .stats-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .stat-card h3 {
            font-size: 36px;
        }
    }
</style>

<!-- About Section -->
<section id="about" class="section section-alt">
    <div class="container">
        <div class="section-header" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="uniform-main-title" data-aos="zoom-in" data-aos-delay="100">About NN Automation Private Limited</h2>
            
            <div class="title-underline"></div>
        </div>
        
        <div class="about-grid">
            <div class="about-image-wrapper" data-aos="fade-right" data-aos-duration="1000">
                <img src="https://feeds.newsusa.com/sites/default/files/styles/full_size_rss_feed/public/2024-10/shutterstock_2513401165.jpg?itok=FBDul56H" alt="NN Automation Factory Floor" class="about-main-img">
            </div>
            
            <div class="about-content" data-aos="fade-left" data-aos-duration="1000">
                <h3 data-aos="zoom-in" data-aos-delay="150">Pioneering Excellence in Industrial & Robotic Automation Systems</h3>
                <p data-aos="fade-up" data-aos-delay="200">
                    <strong>NN Automation Private Limited</strong> is a trusted industry leader specializing in end-to-end Industrial Automation, Process Automation, Robotic Automation, Welding Automation, and Conveyor Line Systems. 
                </p>
                <p data-aos="fade-up" data-aos-delay="250">
                    We also excel in the sales, distribution, and integration of core automation hardware including PLCs, HMIs, Industrial PCs, along with high-performance second-hand and refurbished industrial robots.
                </p>
                
                <ul class="about-features" data-aos="fade-up" data-aos-delay="300">
                    <li>Advanced PLC & SCADA System Integrations</li>
                    <li>Specialized Robotic & Welding Automation</li>
                    <li>Reliable Refurbished Industrial Robots & Components</li>
                </ul>
                
                <div data-aos="zoom-in" data-aos-delay="350">
                    <a href="#services" class="btn-primary-action">Discover Our Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Counter Section -->
<div class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                <div class="stat-icon-box"><i class="fas fa-award"></i></div>
                <h3>5+</h3>
                <p>Years Experience</p>
            </div>
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                <div class="stat-icon-box"><i class="fas fa-project-diagram"></i></div>
                <h3>50+</h3>
                <p>Projects Done</p>
            </div>
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                <div class="stat-icon-box"><i class="fas fa-users-cog"></i></div>
                <h3>10+</h3>
                <p>Engineers</p>
            </div>
            <div class="stat-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
                <div class="stat-icon-box"><i class="fas fa-headset"></i></div>
                <h3>24/7</h3>
                <p>Technical Support</p>
            </div>
        </div>
    </div>
</div>

<!-- Core Services Section -->
<section id="services" class="section" style="background: linear-gradient(180deg, #f8fafc 0%, #edf4fc 100%); position: relative; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container">
        <div class="section-header" data-aos="fade-down" data-aos-duration="1000">
            
            <h2 class="uniform-main-title" data-aos="zoom-in" data-aos-delay="100">Core Services & Solutions</h2>
            <p class="uniform-header-desc" data-aos="fade-up" data-aos-delay="200">
                Delivering high-end engineering efficiency through world-class automation and precision hardware integration.
            </p>
            <div class="title-underline"></div>
        </div>
        <div class="grid-3">
            <div class="service-card" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100" style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0;">
                <div class="service-img-wrapper">
                   
                    <img src="https://th.bing.com/th/id/OIP.KaMluw5Lf9UX4A7UoIMLUgHaEJ?w=326&h=183&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Industrial & Process Automation">
                </div>
                <div class="service-content">
                    <div>
                        <h3 style="color: var(--primary-blue, #0066ff); font-size: 22px; font-weight: 800; margin-bottom: 12px;">Industrial & Process Automation</h3>
                        <p style="color: #334155; font-size: 15px; line-height: 1.7; font-weight: 500;">Complete end-to-end factory floor optimization, custom PLC/SCADA programming, and automated manufacturing process control.</p>
                    </div>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200" style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0;">
                <div class="service-img-wrapper">
                   
                    <img src="assets/wel.webp" alt="Robotic & Welding Automation">
                </div>
                <div class="service-content">
                    <div>
                        <h3 style="color: var(--primary-blue, #0066ff); font-size: 22px; font-weight: 800; margin-bottom: 12px;">Robotic & Welding Automation</h3>
                        <p style="color: #334155; font-size: 15px; line-height: 1.7; font-weight: 500;">Advanced multi-axis robotic integration, specialized automated welding cells, and high-precision assembly line deployment.</p>
                    </div>
                </div>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300" style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0;">
                <div class="service-img-wrapper">
                    
                    <img src="assets/OIP (1).webp" alt="PLC, HMI & Refurbished Robots">
                </div>
                <div class="service-content">
                    <div>
                        <h3 style="color: var(--primary-blue, #0066ff); font-size: 22px; font-weight: 800; margin-bottom: 12px;">PLC, HMI & Refurbished Robots</h3>
                        <p style="color: #334155; font-size: 15px; line-height: 1.7; font-weight: 500;">Top-tier distribution of industrial hardware components and certified, high-performance refurbished industrial robotic arms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dynamic Recent Projects Section -->
<section id="products" class="section section-alt">
    <div class="container">
        <div class="section-header" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="uniform-main-title" data-aos="zoom-in" data-aos-delay="100">RECENT PROJECTS</h2>
            <p class="uniform-header-desc" data-aos="fade-up" data-aos-delay="200">
                Explore our successfully executed automation setups and custom engineering implementations.
            </p>
            <div class="title-underline"></div>
        </div>
        
        <!-- Yahan inline style add kiya hai taaki grid hamesha 3 columns fix rakhe -->
        <div class="grid-3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
            <?php
            if ($conn) {
                $tableCheck = mysqli_query($conn, "SHOW TABLES LIKE 'projects'");
                
                if ($tableCheck && mysqli_num_rows($tableCheck) > 0) {
                    $query = "SELECT * FROM projects ORDER BY id DESC";
                    $result = mysqli_query($conn, $query);
                    
                    if ($result && mysqli_num_rows($result) > 0) {
                        $delayCount = 100;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $badge = htmlspecialchars($row['badge']);
                            $title = htmlspecialchars($row['title']);
                            $description = htmlspecialchars($row['description']);
                            $mediaType = $row['media_type'];
                            $mediaFile = htmlspecialchars($row['media_file']);
                            
                            // Check if file is video or media_type is video
                            if ($mediaType == 'video' || preg_match('/\.(mp4|webm|ogg)$/i', $mediaFile)) {
                                $mediaHtml = '<video src="admin/uploads/' . htmlspecialchars($mediaFile) . '" autoplay muted loop playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>';
                            } else {
                                $imgSrc = (strpos($mediaFile, 'http') === 0) ? $mediaFile : 'admin/uploads/' . htmlspecialchars($mediaFile);
                                $mediaHtml = '<img src="' . $imgSrc . '" alt="' . $title . '" style="width: 100%; height: 100%; object-fit: cover;">';
                            }
                            
                            echo '
                            <div class="service-card" data-aos="fade-up" data-aos-duration="900" data-aos-delay="' . $delayCount . '" style="background: #ffffff; border-radius: 20px; border: 1px solid #e2e8f0; overflow: hidden; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);">
                                <div class="service-img-wrapper" style="position: relative; height: 230px; overflow: hidden;">
                                    <span class="service-badge" style="position: absolute; top: 18px; left: 18px; background: rgba(0, 102, 255, 0.92); color: #ffffff; font-weight: 700; font-size: 12px; padding: 6px 14px; border-radius: 8px; z-index: 2; text-transform: uppercase;">' . $badge . '</span>
                                    ' . $mediaHtml . '
                                </div>
                                <div class="service-content" style="padding: 25px 25px; background: #ffffff;">
                                    <div>
                                        <h3 style="color: var(--primary-blue, #0066ff); font-size: 20px; font-weight: 800; margin-bottom: 10px;">' . $title . '</h3>
                                        <p style="color: #1e293b; font-size: 14px; line-height: 1.6; font-weight: 500; margin-bottom: 0;">' . $description . '</p>
                                    </div>
                                </div>
                            </div>';
                            
                            $delayCount += 100;
                        }
                    } else {
                        echo '<div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b;">No projects found in the database.</div>';
                    }
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Mobile responsiveness ke liye chote screens par 1 column karne ka CSS fix -->
<style>
@media (max-width: 992px) {
    .grid-3 {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
@media (max-width: 768px) {
    .grid-3 {
        grid-template-columns: 1fr !important;
    }
}
</style>
<!-- Trusted By Leading Industries -->
<?php include 'includes/trusted_industries.php'; ?>

<!-- Why Choose Us Section - Ultra Premium Redesign -->
<section id="why-choose-us" class="choose-us-premium-section">
    <div class="container">
        <div class="section-header" data-aos="fade-down" data-aos-duration="1000">
            
            <h2 class="uniform-main-title" data-aos="zoom-in" data-aos-delay="100">
                WHY CHOOSE <span style="background: linear-gradient(135deg, #0066ff 0%, #00c6ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: inline-block;">NN AUTOMATION?</span>
            </h2>
            <p class="uniform-header-desc" data-aos="fade-up" data-aos-delay="200">
                We combine deep technical engineering expertise with cutting-edge industrial hardware to deliver robust, scalable, and cost-effective automation solutions.
            </p>
            <div class="title-underline"></div>
        </div>

        <div class="premium-grid">
            <!-- Card 1 -->
            <div class="premium-card" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="100">
                <div class="card-img-wrapper">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.Oi9EAbjR71JB3i5kGVJ50gAAAA?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="End-to-End Solutions">
                    
                </div>
                <div class="card-body">
                    <h3 class="premium-card-title">End-to-End Solutions</h3>
                    <p class="premium-card-text">
                        From initial factory floor design and PLC/SCADA programming to final robotic integration and conveyor deployment.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="premium-card" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="200">
                <div class="card-img-wrapper">
                    <img src="assets/istockphoto-1492341390-170667a.jpg" alt="Certified Quality & Safety">
                    
                </div>
                <div class="card-body">
                    <h3 class="premium-card-title">Certified Quality & Safety</h3>
                    <p class="premium-card-text">
                        Our systems adhere strictly to global industrial safety standards, guaranteeing high operational uptime and durability.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="premium-card" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="300">
                <div class="card-img-wrapper">
                    <img src="https://www.accela.com/wp-content/uploads/2022/11/tech-support-1.webp" alt="Expert Technical Support">
                    
                </div>
                <div class="card-body">
                    <h3 class="premium-card-title">Expert Technical Support</h3>
                    <p class="premium-card-text">
                        Our team of experienced engineers provides prompt troubleshooting, maintenance, and dedicated technical assistance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation Library Initialization Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    offset: 100
  });
</script>
<!-- <?php

include('includes/sidebar-ads.php'); 
?> -->
<?php
include 'includes/footer.php';
?>