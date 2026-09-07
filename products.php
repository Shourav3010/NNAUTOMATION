<?php 
// Include Header & Database Connection
include "config/db.php"; 
include "includes/Header.php"; 
include "includes/navbar.php"; 
?>

<!-- Bootstrap 5 CSS CDN (Explicitly Linked) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Animate.css & AOS (Animate On Scroll) CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

<style>
    /* Exact Hero Section Matching about.php style */
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
</style>

<main>
    <!-- Hero Section with Exact about.php Style Background Image -->
    <section class="about-hero-section">
        <div class="container position-relative">
            <span class="about-company-super animate__animated animate__fadeInDown">NN AUTOMATION PRIVATE LIMITED</span>
            <h1 class="about-hero-title animate__animated animate__fadeInDown animate__delay-1s">INDUSTRIAL PRODUCTS</h1>
            <p class="about-hero-text animate__animated animate__fadeInUp animate__delay-1s">
                Explore our high-performance automation products designed for modern industries.
            </p>
        </div>
    </section>

    <!-- Products Grid Section with Proper Margin/Padding -->
    <div class="container" style="margin-top: 60px; margin-bottom: 100px; position: relative; z-index: 10;">
        <div class="row g-4">
            
            <?php
            // Database se products fetch karna
            $query = "SELECT * FROM products ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $modalId = "productModal" . $row['id'];
                    $productTitle = isset($row['product_title']) ? $row['product_title'] : '';
                    ?>
                    <!-- Mobile Responsive Column Fix -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12" data-aos="fade-up">
                        <div style="background: white; border-radius: 20px; padding: 25px 20px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.05); border: 1px solid #eaeaea; height: 100%; display: flex; flex-direction: column; justify-content: space-between; transition: 0.3s;">
                            
                            <div>
                                <!-- Clickable Product Image Box (Background highlight removed) -->
                                <div onclick="openModal('<?php echo $modalId; ?>')" style="background: transparent; border-radius: 15px; padding: 10px 5px; height: 180px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; cursor: pointer;" title="Click to view details">
                                    <img src="assets/<?php echo htmlspecialchars($row['product_image']); ?>" alt="<?php echo htmlspecialchars($row['product_name']); ?>" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                </div>

                                <!-- Product Model/Name -->
                                <h5 onclick="openModal('<?php echo $modalId; ?>')" style="font-weight: 800; color: #0a1f44; font-size: 16px; margin-bottom: 5px; line-height: 1.4; cursor: pointer;" title="Click to view details">
                                    <?php echo htmlspecialchars($row['product_name']); ?>
                                </h5>

                                <!-- Product Subtitle / Title below Name -->
                                <?php if (!empty($productTitle)): ?>
                                    <p onclick="openModal('<?php echo $modalId; ?>')" style="color: #6c757d; font-size: 13px; font-weight: 600; margin-bottom: 20px; cursor: pointer;">
                                        <?php echo htmlspecialchars($productTitle); ?>
                                    </p>
                                <?php else: ?>
                                    <div style="margin-bottom: 15px;"></div>
                                <?php endif; ?>
                            </div>

                            <!-- Enquiry Now Button -->
                            <div>
                                <a href="contact.php" class="btn btn-primary w-100 py-2 rounded-pill fw-bold shadow-sm" style="font-size: 13px; background: #0d6efd; border: none;">
                                    <i class="fa-solid fa-headset me-1"></i> Enquiry Now
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Custom Clean Modal (Popup) with Scrollable Body & Cut Button -->
                    <div id="<?php echo $modalId; ?>" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); z-index: 9999; align-items: center; justify-content: center; padding: 20px;">
                        <div style="background: white; width: 100%; max-width: 700px; max-height: 90vh; border-radius: 20px; padding: 25px; box-shadow: 0 15px 35px rgba(0,0,0,0.2); position: relative; display: flex; flex-direction: column;">
                            
                            <!-- Header with Title & Cut (Close) Button -->
                            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px; border-bottom: 1px solid #eaeaea; padding-bottom: 15px;">
                                <div>
                                    <h4 style="font-weight: 800; color: #0a1f44; margin: 0; font-size: 20px;"><?php echo htmlspecialchars($row['product_name']); ?></h4>
                                    <?php if (!empty($productTitle)): ?>
                                        <span style="color: #6c757d; font-size: 13px; font-weight: 600;"><?php echo htmlspecialchars($productTitle); ?></span>
                                    <?php endif; ?>
                                </div>
                                <button onclick="closeModal('<?php echo $modalId; ?>')" style="background: #f1f1f1; border: none; width: 38px; height: 38px; border-radius: 50%; font-size: 16px; cursor: pointer; font-weight: bold; display: flex; align-items: center; justify-content: center; color: #333; transition: 0.2s;" title="Close">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Scrollable Modal Body Content (Background highlight removed) -->
                            <div style="overflow-y: auto; max-height: calc(70vh - 100px); padding-right: 5px; margin-bottom: 20px;">
                                <div style="background: transparent; padding: 10px; text-align: center; margin-bottom: 20px; display: flex; align-items: center; justify-content: center;">
                                    <img src="assets/<?php echo htmlspecialchars($row['product_image']); ?>" style="max-height: 280px; max-width: 100%; object-fit: contain; border-radius: 10px;" alt="...">
                                </div>
                                <p style="color: #555; font-size: 14px; line-height: 1.7; white-space: pre-line; margin: 0;"><?php echo htmlspecialchars($row['product_desc']); ?></p>
                            </div>

                            <!-- Footer Buttons -->
                            <div style="display: flex; gap: 10px; justify-content: flex-end; border-top: 1px solid #eaeaea; padding-top: 15px;">
                                <a href="contact.php" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm" style="font-size: 14px; background: #0d6efd; border: none;"><i class="fa-solid fa-headset me-1"></i> Enquiry Now</a>
                                <button onclick="closeModal('<?php echo $modalId; ?>')" class="btn btn-outline-dark rounded-pill px-4 fw-bold shadow-sm" style="font-size: 14px;">Close</button>
                            </div>

                        </div>
                    </div>

                    <?php
                }
            } else {
                ?>
                <div class="col-12 text-center py-5">
                    <div style="background: white; padding: 60px 30px; border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eaeaea; max-width: 600px; margin: 0 auto;">
                        <div style="font-size: 50px; color: #0d6efd; margin-bottom: 20px;">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                        <h2 style="font-weight: 800; color: #0a1f44; margin-bottom: 10px;">Coming Soon!</h2>
                        <p style="color: #666; font-size: 16px; margin: 0; line-height: 1.6;">
                            We are currently updating our product catalog. Exciting industrial automation products will be added here shortly. Stay tuned!
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</main>

<!-- Footer Include -->
<?php 
include('includes/footer.php'); 
?>

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

    // Modal JavaScript Logic
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "flex";
        document.body.style.overflow = "hidden"; // Background scroll disable jab modal khula ho
    }
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
        document.body.style.overflow = "auto"; // Background scroll enable
    }
    window.onclick = function(event) {
        if (event.target.id && event.target.id.startsWith('productModal')) {
            event.target.style.display = "none";
            document.body.style.overflow = "auto";
        }
    }
</script>