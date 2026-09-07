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

<!-- Milestone Page Custom Styles -->
<style>
    .milestone-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(10, 31, 68, 0.9) 0%, rgba(13, 110, 253, 0.4)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
        padding: 160px 0 120px 0;
        text-align: center;
        color: #ffffff;
        overflow: hidden;
    }

    .milestone-company-super {
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        margin-bottom: 15px;
        display: block;
    }

    .milestone-hero h1 {
        font-size: 3.8rem;
        font-weight: 800;
        letter-spacing: -0.5px;
        color: #ffffff;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
        margin-bottom: 20px;
    }

    .milestone-hero p {
        font-size: 1.3rem;
        font-weight: 500;
        color: #f8fafc;
        max-width: 820px;
        margin: 0 auto;
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        line-height: 1.6;
    }

    .milestone-section {
        padding: 110px 0;
        background: #f8fbff;
        position: relative;
        overflow: hidden;
    }

    .section-title-box {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 60px auto;
        padding: 0 15px;
    }

    .section-title-box span {
        color: #2563eb; 
        font-weight: 700; 
        font-size: 13px; 
        text-transform: uppercase; 
        letter-spacing: 2px;
        background: rgba(37, 99, 235, 0.1);
        padding: 6px 16px;
        border-radius: 50px;
    }

    .section-title-box h2 {
        font-size: 2.8rem;
        font-weight: 800;
        color: #0f172a;
        margin-top: 15px;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }

    .section-title-box p {
        font-size: 1.1rem;
        color: #475569;
        line-height: 1.6;
        margin-bottom: 0;
    }

    .timeline-container {
        position: relative;
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px 15px;
    }

    .timeline-container::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: linear-gradient(180deg, #2563eb, #3b82f6);
        transform: translateX(-50%);
        border-radius: 4px;
    }

    .timeline-row {
        position: relative;
        margin-bottom: 50px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .timeline-row:last-child {
        margin-bottom: 0;
    }

    .timeline-row:nth-child(odd) {
        flex-direction: row-reverse;
    }

    .timeline-box {
        width: 45%;
        position: relative;
    }

    .timeline-content-card {
        background: #ffffff;
        padding: 35px 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
        border: 1px solid rgba(37, 99, 235, 0.12);
        transition: all 0.4s ease;
        position: relative;
    }

    .timeline-content-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 45px rgba(37, 99, 235, 0.15);
        border-color: #2563eb;
    }

    .timeline-header-flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
    }

    .timeline-year-badge {
        font-size: 1.3rem;
        font-weight: 800;
        color: #2563eb;
        background: rgba(37, 99, 235, 0.1);
        padding: 6px 18px;
        border-radius: 50px;
        letter-spacing: 0.5px;
    }

    .timeline-circle-img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid #2563eb;
        box-shadow: 0 8px 22px rgba(37, 99, 235, 0.25);
        flex-shrink: 0;
    }

    .timeline-circle-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .timeline-content-card:hover .timeline-circle-img img {
        transform: scale(1.15);
    }

    .timeline-content-card h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.5;
        margin-bottom: 0;
    }

    .timeline-center-dot {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 22px;
        height: 22px;
        background: #ffffff;
        border: 4px solid #2563eb;
        border-radius: 50%;
        z-index: 10;
        box-shadow: 0 0 0 5px rgba(37, 99, 235, 0.2);
    }

    @media (max-width: 768px) {
        .timeline-container::before { left: 30px; }
        .timeline-row, .timeline-row:nth-child(odd) {
            flex-direction: row;
            justify-content: flex-start;
            padding-left: 55px;
        }
        .timeline-box { width: 100%; }
        .timeline-center-dot { left: 30px; }
        .timeline-circle-img { width: 95px; height: 95px; }
        .section-title-box h2 { font-size: 2.1rem; }
        .milestone-hero h1 { font-size: 2.8rem; }
    }
</style>

<!-- Hero / Header Section -->
<section class="milestone-hero">
    <div class="container position-relative">
        <span class="milestone-company-super animate__animated animate__fadeInDown">NN AUTOMATION PRIVATE LIMITED</span>
        <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Our Milestone Journey</h1>
        <p class="animate__animated animate__fadeInUp animate__delay-1s">A journey of innovation, dedication, and continuous growth shaping the future of industrial automation.</p>
    </div>
</section>

<!-- Milestone Journey Dynamic Section -->
<section class="milestone-section">
    <div class="container">
        <div class="section-title-box" data-aos="fade-up" data-aos-duration="800">
            <span>Growth & Evolution</span>
            <h2>Our Historical Milestones</h2>
            <p>Tracing our path of continuous innovation and excellence from establishment to present day.</p>
        </div>

        <div class="timeline-container">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM milestones ORDER BY year ASC");
            if ($query && mysqli_num_rows($query) > 0) {
                $delay = 100;
                while ($row = mysqli_fetch_assoc($query)) {
                    if (!empty($row['image']) && file_exists("admin/uploads/" . $row['image'])) {
                        $imgSrc = "admin/uploads/" . $row['image'];
                    } else {
                        $imgSrc = "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=400&q=80";
                    }
                    
                    echo '
                    <div class="timeline-row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="'.$delay.'">
                        <div class="timeline-box">
                            <div class="timeline-content-card">
                                <div class="timeline-header-flex">
                                    <span class="timeline-year-badge">'.$row['year'].'</span>
                                    <div class="timeline-circle-img">
                                        <img src="'.$imgSrc.'" alt="Milestone '.$row['year'].'">
                                    </div>
                                </div>
                                <h3>'.htmlspecialchars($row['title']).'</h3>
                            </div>
                        </div>
                        <div class="timeline-center-dot"></div>
                    </div>';
                    
                    $delay += 100;
                    if($delay > 300) $delay = 100;
                }
            } else {
                echo '<div class="text-center py-5 text-muted">No milestones added yet.</div>';
            }
            ?>
        </div>
    </div>
</section>

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