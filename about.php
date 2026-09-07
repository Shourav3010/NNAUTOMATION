<?php
// about.php (Root Folder)
include('config/db.php');
// Header & Navbar Include
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!-- Bootstrap 5 CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome Icons CDN (For Social Media & UI Icons) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Animate.css & AOS (Animate On Scroll) CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

<style>
    /* Hero Section */
    .about-hero-section {
        position: relative;
        background: linear-gradient(135deg, rgba(10, 31, 68, 0.9) 0%, rgba(13, 110, 253, 0.4)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
        padding: 160px 0 120px 0;
        text-align: center;
        color: #ffffff;
        overflow: hidden;
    }

    .about-company-super {
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        margin-bottom: 15px;
        display: block;
    }

    .about-hero-title {
        font-size: 3.8rem;
        font-weight: 800;
        letter-spacing: -0.5px;
        color: #ffffff;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
        margin-bottom: 20px;
    }

    .about-hero-text {
        font-size: 1.3rem;
        font-weight: 500;
        color: #f8fafc;
        max-width: 820px;
        margin: 0 auto;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        line-height: 1.6;
    }

    /* Mobile Responsive Fix for Hero Text */
    @media (max-width: 991.98px) {
        .about-hero-section {
            padding: 120px 15px 80px 15px;
        }
        .about-company-super {
            font-size: 1.1rem;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .about-hero-title {
            font-size: 2.4rem;
            margin-bottom: 15px;
        }
        .about-hero-text {
            font-size: 1rem;
            line-height: 1.5;
        }
    }

    @media (max-width: 575.98px) {
        .about-hero-title {
            font-size: 2rem;
        }
        .about-company-super {
            font-size: 0.95rem;
        }
    }

    /* Sections Background Styling */
    .company-intro-section {
        padding: 110px 0;
        background-color: #f8fbff;
        overflow: hidden;
    }

    .section-tag {
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 2px;
        color: #0d6efd;
        text-transform: uppercase;
        margin-bottom: 12px;
        display: inline-block;
    }

    .section-main-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: #1e293b;
        line-height: 1.2;
        margin-bottom: 24px;
        letter-spacing: -0.5px;
    }

    .section-main-title .highlight-text {
        color: #0d6efd;
    }

    .intro-paragraph {
        font-size: 1.15rem;
        line-height: 1.8;
        color: #475569;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .feature-mini-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(13, 110, 253, 0.06);
        border: 1px solid rgba(13, 110, 253, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .feature-mini-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(13, 110, 253, 0.12);
    }

    .feature-mini-card h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 8px;
    }

    .feature-mini-card p {
        font-size: 0.95rem;
        color: #64748b;
        margin-bottom: 0;
        line-height: 1.5;
    }

    @keyframes floatImage {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
        100% { transform: translateY(0px); }
    }

    .floating-img-box {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(13, 110, 253, 0.18);
        border: 4px solid #ffffff;
        background: #ffffff;
        animation: floatImage 4s ease-in-out infinite;
        transition: all 0.4s ease;
    }

    .floating-img-box:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 30px 60px rgba(13, 110, 253, 0.28);
        animation-play-state: paused;
        border-color: #0d6efd;
    }

    .floating-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Updated Mission & Vision Styles */
    .mission-vision-card {
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        transition: all 0.4s ease;
        background: #ffffff;
    }

    .mission-vision-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(13, 110, 253, 0.15);
        border-color: #0d6efd;
    }

    .mission-vision-card:hover .transition-scale {
        transform: scale(1.1);
    }

    .transition-scale {
        transition: transform 0.6s ease;
    }

    .expertise-section {
        padding: 100px 0;
        background: #ffffff;
    }

    .expertise-card-image {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: all 0.4s ease;
        height: 100%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .expertise-card-image:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(13, 110, 253, 0.15);
        border-color: #0d6efd;
    }

    .expertise-img-wrapper {
        width: 100%;
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .expertise-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .expertise-card-image:hover .expertise-img-wrapper img {
        transform: scale(1.1);
    }

    .expertise-content {
        padding: 24px 20px;
        text-align: center;
    }

    .core-values-light-section {
        padding: 110px 0;
        background: #f1f5f9;
    }

    .value-card-image {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        transition: all 0.4s ease;
        height: 100%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .value-card-image:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        border-color: #cbd5e1;
    }

    .value-img-wrapper {
        width: 100%;
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .value-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .value-card-image:hover .value-img-wrapper img {
        transform: scale(1.1);
    }

    .value-content {
        padding: 24px 20px;
        text-align: center;
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="about-hero-section">
        <div class="container position-relative">
            <span class="about-company-super animate__animated animate__fadeInDown">NN AUTOMATION PRIVATE LIMITED</span>
            <h1 class="about-hero-title animate__animated animate__fadeInDown animate__delay-1s">ABOUT OUR COMPANY</h1>
            <p class="about-hero-text animate__animated animate__fadeInUp animate__delay-1s">
                Innovating the future of Industrial Automation and Smart Manufacturing Lines.
            </p>
        </div>
    </section>

    <!-- Who We Are Section -->
    <section class="company-intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="floating-img-box">
                        <img src="assets/tylijura-ai-generated-9295640.png" alt="Engineers working on automated layouts">
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="section-tag">WHO WE ARE</h3>
                    <h2 class="section-main-title">Engineers of <span class="highlight-text">Efficiency</span></h2>
                    
                    <p class="intro-paragraph">
                        <strong>NN Automation Private Limited</strong> is a premier industrial automation company specializing in PLC, SCADA, robotic integration, process lines, and Special Purpose Machines (SPMs). We transform standard manufacturing units into high-performance smart facilities.
                    </p>
                    
                    <div class="row g-3 mt-2">
                        <div class="col-sm-6">
                            <div class="feature-mini-card">
                                <h5>Expert Integration</h5>
                                <p>Specialized in Robotic, Welding, & Conveyor Line Automation systems.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-mini-card">
                                <h5>Turnkey Solutions</h5>
                                <p>Comprehensive setup from customized SPM design to system maintenance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section (Redesigned) -->
    <section class="mission-vision-section py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #f8fbff 0%, #edf4ff 100%);">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-tag">OUR PURPOSE & DIRECTION</span>
                <h2 class="section-main-title">MISSION <span class="highlight-text">& VISION</span></h2>
                <div style="width: 70px; height: 4px; background: linear-gradient(90deg, #0d6efd, #0dcaf0); margin: 12px auto; border-radius: 2px;"></div>
                <p class="text-muted mt-3" style="max-width: 650px; margin: 0 auto; font-size: 1.1rem;">Driving industrial transformation through precision engineering, innovation, and advanced robotics technology.</p>
            </div>
            
            <div class="row g-4 align-items-stretch">
                <!-- Mission Card -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="mission-vision-card position-relative h-100 border-0 shadow-lg rounded-4 overflow-hidden bg-white">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 position-relative overflow-hidden">
                                <div class="mv-img-wrapper h-100" style="min-height: 250px;">
                                    <img src="assets/mission.jpg" alt="Our Mission" class="w-100 h-100 object-fit-cover transition-scale">
                                </div>
                                <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-2 rounded-end-pill fw-bold shadow-sm" style="font-size: 0.85rem; margin-top: 20px;">
                                    <i class="fas fa-bullseye me-1"></i> FOCUS
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="mv-content p-4 p-lg-4">
                                    <div class="mb-2 text-primary"><i class="fas fa-rocket fa-2x"></i></div>
                                    <h3 class="fw-bold text-dark mb-3" style="font-size: 1.4rem;">OUR MISSION</h3>
                                    <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7;">To deliver world-class industrial automation, robotic solutions, and custom Special Purpose Machines (SPMs) that empower manufacturing industries to maximize productivity, maintain strict safety compliance, and achieve cost-effective operational excellence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="mission-vision-card position-relative h-100 border-0 shadow-lg rounded-4 overflow-hidden bg-white">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 position-relative overflow-hidden">
                                <div class="mv-img-wrapper h-100" style="min-height: 250px;">
                                    <img src="assets/vission.webp" alt="Our Vision" class="w-100 h-100 object-fit-cover transition-scale">
                                </div>
                                <div class="position-absolute top-0 start-0 bg-dark text-white px-3 py-2 rounded-end-pill fw-bold shadow-sm" style="font-size: 0.85rem; margin-top: 20px;">
                                    <i class="fas fa-eye me-1"></i> FUTURE
                                </div>
                            </div>
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="mv-content p-4 p-lg-4">
                                    <div class="mb-2 text-dark"><i class="fas fa-lightbulb fa-2x text-warning"></i></div>
                                    <h3 class="fw-bold text-dark mb-3" style="font-size: 1.4rem;">OUR VISION</h3>
                                    <p class="text-muted" style="font-size: 0.95rem; line-height: 1.7;">To be recognized globally as a trusted trailblazer in smart factory transformation and industrial robotics—pioneering cutting-edge technology integrations that shape the future of modern manufacturing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section class="expertise-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-main-title">OUR <span class="highlight-text">EXPERTISE</span></h2>
                <div style="width: 60px; height: 4px; background: #0d6efd; margin: 10px auto; border-radius: 2px;"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="expertise-card-image">
                        <div class="expertise-img-wrapper"><img src="assets/plc.webp" alt="PLC & SCADA"></div>
                        <div class="expertise-content">
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: #1e293b; margin-bottom: 10px;">PLC & SCADA</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 0;">Advanced automation control software and hardware integration.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="expertise-card-image">
                        <div class="expertise-img-wrapper"><img src="assets/vilkasss-welder-9937951.jpg" alt="Robotics"></div>
                        <div class="expertise-content">
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: #1e293b; margin-bottom: 10px;">ROBOTICS</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 0;">High-speed robotic assembly and automated welding lines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="expertise-card-image">
                        <div class="expertise-img-wrapper"><img src="assets/spm.webp" alt="SPM Design"></div>
                        <div class="expertise-content">
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: #1e293b; margin-bottom: 10px;">SPM DESIGN</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 0;">Custom Special Purpose Machines and jigs/fixtures design.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="expertise-card-image">
                        <div class="expertise-img-wrapper"><img src="assets/iot.webp" alt="IoT"></div>
                        <div class="expertise-content">
                            <h4 style="font-size: 1.15rem; font-weight: 700; color: #1e293b; margin-bottom: 10px;">CONVEYOR & IOT</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin-bottom: 0;">Smart factory conveyor automation and monitoring systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="core-values-light-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-main-title">OUR <span class="highlight-text">CORE VALUES</span></h2>
                <div style="width: 60px; height: 4px; background: #0d6efd; margin: 10px auto; border-radius: 2px;"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card-image">
                        <div class="value-img-wrapper"><img src="assets/INNOVATION.webp" alt="Innovation"></div>
                        <div class="value-content">
                            <h4 style="font-size: 1.25rem; font-weight: 700; color: #1e293b; margin-bottom: 12px;">INNOVATION</h4>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">We solve complex industrial challenges using state-of-the-art automation tech and smart robotics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card-image">
                        <div class="value-img-wrapper"><img src="assets/QUALITY.webp" alt="Quality"></div>
                        <div class="value-content">
                            <h4 style="font-size: 1.25rem; font-weight: 700; color: #1e293b; margin-bottom: 12px;">QUALITY</h4>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">Precision is our core identity. Every PLC setup and engineered machine meets rigid industrial standards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card-image">
                        <div class="value-img-wrapper"><img src="assets/Ingrity-Signpost.jpg" alt="Integrity"></div>
                        <div class="value-content">
                            <h4 style="font-size: 1.25rem; font-weight: 700; color: #1e293b; margin-bottom: 12px;">INTEGRITY</h4>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin-bottom: 0;">Transparent client relationships and committed long-term customer support underline our business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Trusted Clients Section (Static Grid Layout) -->
<section class="section" style="background-color: #ffffff; overflow: hidden; padding: 100px 0; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container" style="text-align: center; margin-bottom: 50px;" data-aos="fade-up">
        <span style="color: var(--primary-blue, #0066ff); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 13px; display: block; margin-bottom: 10px;">Our Clients</span>
        <h2 class="section-title" style="font-size: 38px; font-weight: 800; color: #0a2540; letter-spacing: -1px;">
            TRUSTED BY <span style="color: var(--primary-blue, #0066ff);">LEADING INDUSTRIES</span>
        </h2>
        <div style="width: 60px; height: 3px; background-color: var(--primary-blue, #0066ff); margin: 12px auto 0 auto;"></div>
    </div>

    <!-- 1st Row: Direct Clients (Fixed Grid) -->
    <div class="container mb-5">
        <h3 style="text-align: center; color: #0a2540; font-weight: 800; font-size: 22px; margin-bottom: 35px; text-transform: uppercase; letter-spacing: 1px;" data-aos="fade-up">Direct Clients</h3>
        
        <div class="row g-4 justify-content-center">
            <?php
            $direct_query = "SELECT * FROM clients WHERE client_type = 'direct' ORDER BY id DESC";
            $direct_result = mysqli_query($conn, $direct_query);

            if ($direct_result && mysqli_num_rows($direct_result) > 0) {
                while ($client = mysqli_fetch_assoc($direct_result)) {
                    echo '
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="client-logo-box">
                            <img src="admin/uploads/' . htmlspecialchars($client['client_logo']) . '" alt="' . htmlspecialchars($client['client_name']) . '">
                        </div>
                    </div>';
                }
            } else {
                echo '<p class="text-center text-muted w-100" style="font-size: 14px;">No direct clients added yet.</p>';
            }
            ?>
        </div>
    </div>

    <!-- 2nd Row: Indirect Partners (Fixed Grid) -->
    <div class="container mt-5 pt-4">
        <h3 style="text-align: center; color: #0a2540; font-weight: 800; font-size: 22px; margin-bottom: 35px; text-transform: uppercase; letter-spacing: 1px;" data-aos="fade-up">Indirect Partners</h3>
        
        <div class="row g-4 justify-content-center">
            <?php
            $indirect_query = "SELECT * FROM clients WHERE client_type = 'indirect' ORDER BY id DESC";
            $indirect_result = mysqli_query($conn, $indirect_query);

            if ($indirect_result && mysqli_num_rows($indirect_result) > 0) {
                while ($client = mysqli_fetch_assoc($indirect_result)) {
                    echo '
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="client-logo-box">
                            <img src="admin/uploads/' . htmlspecialchars($client['client_logo']) . '" alt="' . htmlspecialchars($client['client_name']) . '">
                        </div>
                    </div>';
                }
            } else {
                echo '<p class="text-center text-muted w-100" style="font-size: 14px;">No indirect clients added yet.</p>';
            }
            ?>
        </div>
    </div>
</section>

<style>
    .client-logo-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        height: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease;
    }
    .client-logo-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(13, 110, 253, 0.12);
        border-color: #0d6efd;
    }
    .client-logo-box img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        filter: grayscale(20%);
        transition: filter 0.3s ease;
    }
    .client-logo-box:hover img {
        filter: grayscale(0%);
    }
</style>
</main>

<!-- Footer Include -->
<?php 
$footer_path = 'includes/footer.php';
if (file_exists($footer_path)) {
    include($footer_path); 
} 
?>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation JS Init -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({ once: true, offset: 100 });
    });
</script>