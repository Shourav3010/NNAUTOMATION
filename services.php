<?php
// Include Database Connection
include('config/db.php');
// Include Header
include('includes/header.php');
// Include Navbar
include('includes/navbar.php');
?>

<!-- Bootstrap 5 & FontAwesome CDN (Just in case) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Animate.css & AOS (Animate On Scroll) CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

<!-- Services Page Styles -->
<style>
    /* Exact Hero Section Matching about.php / products.php style */
    .services-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(10, 31, 68, 0.9) 0%, rgba(13, 110, 253, 0.4)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
        padding: 160px 0 120px 0;
        text-align: center;
        color: #ffffff;
        overflow: hidden;
    }

    .services-company-super {
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        margin-bottom: 15px;
        display: block;
    }

    .services-hero h1 {
        font-size: 3.8rem;
        font-weight: 800;
        letter-spacing: -0.5px;
        color: #ffffff;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
        margin-bottom: 20px;
    }

    .services-hero p {
        font-size: 1.3rem;
        font-weight: 500;
        color: #f8fafc;
        max-width: 820px;
        margin: 0 auto;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        line-height: 1.6;
    }

    .services-section {
        padding: 100px 0;
        background: #f8fbff;
    }

    /* Boxed Modern Cards */
    .service-card-modern {
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid rgba(37, 99, 235, 0.12);
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .service-card-modern:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 45px rgba(37, 99, 235, 0.15);
        border-color: #2563eb;
    }

    /* Video Box (Images ki jagah video container) */
    .service-media-box {
        width: 100%;
        height: 240px;
        overflow: hidden;
        position: relative;
        background: #0f172a;
    }
    .service-media-box video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .service-card-modern:hover .service-media-box video {
        transform: scale(1.08);
    }

    /* Content Area */
    .service-content {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .service-content h3 {
        font-size: 1.35rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 15px;
    }
    .service-content p {
        color: #475569;
        font-size: 0.98rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .service-btn {
        display: inline-flex;
        align-items: center;
        font-weight: 600;
        color: #2563eb;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .service-btn:hover {
        color: #1d4ed8;
    }
</style>

<!-- Hero / Header Section -->
<section class="services-hero">
    <div class="container position-relative">
        <span class="services-company-super animate__animated animate__fadeInDown">NN AUTOMATION PRIVATE LIMITED</span>
        <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Our Industrial Services</h1>
        <p class="animate__animated animate__fadeInUp animate__delay-1s">Providing cutting-edge automation, precision manufacturing, and smart engineering solutions tailored for modern industrial excellence.</p>
    </div>
</section>

<!-- Core Services Grid Section -->
<section class="services-section">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5" data-aos="fade-up" data-aos-duration="800">
            <span style="color: #2563eb; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 2px; background: rgba(37, 99, 235, 0.1); padding: 6px 16px; border-radius: 50px;">What We Offer</span>
            <h2 style="font-size: 2.6rem; font-weight: 800; color: #0f172a; margin-top: 15px; margin-bottom: 15px;">Engineering Excellence & Automation</h2>
            <p style="color: #475569; font-size: 1.1rem;">Explore our comprehensive range of high-performance automated solutions designed to maximize efficiency.</p>
        </div>

        <div class="row g-4">
            
            <!-- Service 1: Fixture Design -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <div class="service-card-modern">
                    <div class="service-media-box">
                        <video autoplay muted loop playsinline>
                            <source src="assets/videos/6194506-uhd_3840_2160_30fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="service-content">
                        <div>
                            <h3>Fixture Design & Manufacturing</h3>
                            <p>Custom-engineered welding, assembly, and inspection fixtures designed with utmost precision to ensure seamless component positioning.</p>
                        </div>
                        <a href="contact.php" class="service-btn">Enquire Now &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Service 2: SPM Design -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-modern">
                    <div class="service-media-box">
                        <video autoplay muted loop playsinline>
                            <source src="assets/videos/13814737_3840_2160_100fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="service-content">
                        <div>
                            <h3>Special Purpose Machines (SPM)</h3>
                            <p>High-efficiency custom automated special purpose machines built specifically to handle complex, repetitive production tasks at scale.</p>
                        </div>
                        <a href="contact.php" class="service-btn">Enquire Now &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Service 3: Robotics & Industrial Automation -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="service-card-modern">
                    <div class="service-media-box">
                        <video autoplay muted loop playsinline>
                            <source src="assets/videos/13814785_3840_2160_50fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="service-content">
                        <div>
                            <h3>Robotics & Industrial Automation</h3>
                            <p>Advanced robot integration and automated cell implementation to enhance manufacturing safety, speed, and absolute accuracy.</p>
                        </div>
                        <a href="contact.php" class="service-btn">Enquire Now &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Service 4: Conveyor & Warehouse Automation -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <div class="service-card-modern">
                    <div class="service-media-box">
                        <video autoplay muted loop playsinline>
                            <source src="assets/videos/6447409-hd_1920_1080_30fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="service-content">
                        <div>
                            <h3>Conveyor & Warehouse Automation</h3>
                            <p>Robust material handling solutions, roller and belt conveyors designed to optimize internal logistics and warehouse workflows smoothly.</p>
                        </div>
                        <a href="contact.php" class="service-btn">Enquire Now &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Service 5: Industrial Tooling -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-modern">
                    <div class="service-media-box">
                        <video autoplay muted loop playsinline>
                            <source src="assets/videos/7622779-uhd_3840_2160_25fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="service-content">
                        <div>
                            <h3>Industrial Tooling & Support</h3>
                            <p>Comprehensive technical support, precision tooling solutions, and dedicated post-installation maintenance services to keep your operations running.</p>
                        </div>
                        <a href="contact.php" class="service-btn">Enquire Now &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Service 6: Turnkey Automation Projects -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="service-card-modern">
                    <div class="service-media-box">
                        <video autoplay muted loop playsinline>
                            <source src="assets/videos/5675641-hd_1920_1080_30fps.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="service-content">
                        <div>
                            <h3>Turnkey Automation Solutions</h3>
                            <p>End-to-end project execution from initial concept design and simulation to final on-site installation, programming, and commissioning.</p>
                        </div>
                        <a href="contact.php" class="service-btn">Enquire Now &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Trusted By Leading Industries -->
<?php include 'includes/trusted_industries.php'; ?>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation JS Init -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            once: true,
            offset: 100
        });
    });
</script>

<?php
// Include Footer
include('includes/footer.php');
?>