<?php 
// Include Database & Header
include "config/db.php"; 
include "includes/header.php"; 

$success_msg = "";
$error_msg = "";

// Form Submission Logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $phone   = mysqli_real_escape_string($conn, $_POST['phone']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        $sql = "INSERT INTO contacts (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        
        if (mysqli_query($conn, $sql)) {
            $success_msg = "Thank you! Your message has been sent successfully.";
        } else {
            $error_msg = "Something went wrong. Please try again later.";
        }
    } else {
        $error_msg = "Please fill in all required fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NN Automation</title>

    <!-- Bootstrap & FontAwesome Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Animate.css & AOS (Animate On Scroll) CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

    <style>
        .contact-hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(10, 31, 68, 0.9) 0%, rgba(13, 110, 253, 0.4)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding: 160px 0 140px 0;
            text-align: center;
            color: #ffffff;
            overflow: hidden;
        }

        .contact-company-super {
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: 1.5px;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            margin-bottom: 15px;
            display: block;
        }

        .contact-hero-title {
            font-size: 3.8rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #ffffff;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
            margin-bottom: 20px;
        }

        .contact-hero-text {
            font-size: 1.3rem;
            font-weight: 500;
            color: #f8fafc;
            max-width: 820px;
            margin: 0 auto;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            line-height: 1.6;
        }
    </style>
</head>
<body style="margin:0; background-color: #f8f9fa;">

    <!-- Navbar Include (Ensure filename in includes folder is lowercase navbar.php) -->
    <?php include "includes/navbar.php"; ?>

    <!-- Hero / Top Blue Gradient Banner -->
    <section class="contact-hero-section">
        <div class="container position-relative">
            <span class="contact-company-super animate__animated animate__fadeInDown">NN AUTOMATION PRIVATE LIMITED</span>
            <h1 class="contact-hero-title animate__animated animate__fadeInDown animate__delay-1s">GET IN TOUCH</h1>
            <p class="contact-hero-text animate__animated animate__fadeInUp animate__delay-1s">
                Industrial Automation Training & Solutions — We are here to assist you with any queries.
            </p>
        </div>
    </section>

    <!-- Contact Form Overlapping Section with AOS Animation -->
    <div class="container" style="margin-top: -100px; margin-bottom: 100px; position: relative; z-index: 10;" data-aos="fade-up" data-aos-duration="800">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div style="background: white; padding: 55px 45px; border-radius: 25px; box-shadow: 0 20px 50px rgba(0,0,0,0.15);">
                    
                    <div class="text-center mb-5">
                        <h2 style="font-weight: 900; color: #0a1f44; font-size: 32px; margin-bottom: 10px;">Send Us a Message</h2>
                        <div style="width: 50px; height: 4px; background: #0d6efd; margin: 0 auto; border-radius: 2px;"></div>
                        <p style="color: #666; font-size: 15px; margin-top: 15px;">Have a project or query? Our team is here to assist you.</p>
                    </div>

                    <!-- Alerts -->
                    <?php if (!empty($success_msg)): ?>
                        <div class="alert alert-success text-center mb-4" style="border-radius: 12px; font-weight: 600;">
                            <i class="fa-solid fa-circle-check me-2"></i> <?php echo $success_msg; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($error_msg)): ?>
                        <div class="alert alert-danger text-center mb-4" style="border-radius: 12px; font-weight: 600;">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i> <?php echo $error_msg; ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 700; color: #333; font-size: 14px;">Full Name</label>
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your name" required style="border-radius: 12px; font-size: 15px; background: #fdfdfd; border: 1px solid #e0e0e0; padding: 14px 20px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 700; color: #333; font-size: 14px;">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter email" required style="border-radius: 12px; font-size: 15px; background: #fdfdfd; border: 1px solid #e0e0e0; padding: 14px 20px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 700; color: #333; font-size: 14px;">Phone Number</label>
                                <input type="text" name="phone" class="form-control form-control-lg" placeholder="Enter phone number" required style="border-radius: 12px; font-size: 15px; background: #fdfdfd; border: 1px solid #e0e0e0; padding: 14px 20px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" style="font-weight: 700; color: #333; font-size: 14px;">Subject</label>
                                <input type="text" name="subject" class="form-control form-control-lg" placeholder="Enter subject / category" required style="border-radius: 12px; font-size: 15px; background: #fdfdfd; border: 1px solid #e0e0e0; padding: 14px 20px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="font-weight: 700; color: #333; font-size: 14px;">Your Message</label>
                                <textarea name="message" rows="5" class="form-control" placeholder="Write your message here..." required style="border-radius: 12px; font-size: 15px; background: #fdfdfd; border: 1px solid #e0e0e0; padding: 14px 20px;"></textarea>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" style="background: #0d6efd; color: white; border: none; padding: 16px 45px; border-radius: 50px; font-weight: 700; font-size: 16px; box-shadow: 0 10px 25px rgba(13,110,253,0.35); transition: 0.3s;">
                                    Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer Include -->
    <?php include "includes/footer.php"; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
</body>
</html>