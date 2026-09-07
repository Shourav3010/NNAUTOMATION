<?php 
// Include Database & Header
include "config/db.php"; 
include "includes/Header.php"; 
?>

<!-- Bootstrap 5, FontAwesome & Animate.css CDNs -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<body style="margin:0; scroll-behavior: smooth;">

    <!-- Navbar Include -->
    <?php include "includes/Navbar.php"; ?>

    <!-- Hero Section -->
    <div class="container-fluid" style="background: linear-gradient(135deg, #0a1f44 0%, #1e3a8a 100%); padding: 130px 20px; color: white; border-bottom: 5px solid #0d6efd;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start py-4">
                    <span class="animate__animated animate__fadeInDown" style="background: white; color: black; padding: 8px 18px; border-radius: 50px; font-size: 13px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; display: inline-block; margin-bottom: 10px;">
                        Skill Development Program
                    </span>
                    <h1 class="animate__animated animate__fadeInUp" style="font-size: clamp(32px, 5vw, 54px); font-weight: 900; line-height: 1.2; margin-top: 15px; margin-bottom: 25px;">
                        BUILD YOUR CAREER IN <br><span style="color: #60a5fa;">INDUSTRIAL AUTOMATION</span>
                    </h1>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s" style="font-size: 19px; opacity: 0.9; font-weight: 300; line-height: 1.7; margin-bottom: 35px;">
                        Learn PLC programming, SCADA, and Robotics from industry veterans with <b>10+ years</b> of hands-on experience. 
                    </p>
                    <div class="animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="#plans" style="background: white; color: black; padding: 16px 38px; border-radius: 50px; text-decoration: none; font-weight: 700; box-shadow: 0 10px 20px rgba(13,110,253,0.3); transition: 0.3s; display: inline-block;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 25px rgba(13,110,253,0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 20px rgba(13,110,253,0.3)';">Explore Plans</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4">
                    <div class="animate__animated animate__zoomIn" style="position: relative; display: inline-block; margin-top: 10px;">
                        <img src="assets/Industrial-Automation.jpg" alt="Industrial Automation Training" style="width: 100%; max-width: 450px; border-radius: 30px; border: 8px solid rgba(255,255,255,0.1); box-shadow: 0 25px 50px rgba(0,0,0,0.3);">
                        <div class="animate__animated animate__bounceIn animate__delay-1s" style="position: absolute; bottom: 20px; right: -15px; background: white; color: #0a1f44; padding: 18px 22px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); text-align: center;">
                            <h4 style="margin: 0; font-weight: 800; color: black; font-size: 22px;">100%</h4>
                            <p style="margin: 0; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Practical Task</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Training Platform Features -->
    <div class="container" style="padding: 100px 15px;">
        <div style="text-align: center; margin-bottom: 70px;">
            <h2 style="font-weight: 800; color: #0a1f44; font-size: 36px;">THE <span style="color: #0d6efd;">ALL-IN-ONE</span> TRAINING PLATFORM</h2>
            <div style="width: 60px; height: 4px; background: #0d6efd; margin: 20px auto; border-radius: 2px;"></div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div style="background: #fff; padding: 50px 30px; border-radius: 20px; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease;" onmouseover="this.style.borderColor='#0d6efd'; this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(13,110,253,0.1)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.05)'">
                    <i class="fa-solid fa-microchip animate__animated animate__pulse animate__infinite" style="font-size: 50px; color: #0d6efd;"></i>
                    <h4 style="margin-top: 25px; font-weight: 800; color: #0a1f44;">PLC Programming</h4>
                    <p style="color: #666; font-size: 15px; line-height: 1.7;">Master logic development on Siemens, Delta, and Mitsubishi PLCs with live hardware.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background: #fff; padding: 50px 30px; border-radius: 20px; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease;" onmouseover="this.style.borderColor='#0d6efd'; this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(13,110,253,0.1)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.05)'">
                    <i class="fa-solid fa-robot animate__animated animate__pulse animate__infinite" style="font-size: 50px; color: #0d6efd;"></i>
                    <h4 style="margin-top: 25px; font-weight: 800; color: #0a1f44;">Robotics Training</h4>
                    <p style="color: #666; font-size: 15px; line-height: 1.7;">Hands-on programming for Fanuc and ABB robots for welding and pick-and-place tasks.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="background: #fff; padding: 50px 30px; border-radius: 20px; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.05); border: 1px solid #f0f0f0; transition: all 0.4s ease;" onmouseover="this.style.borderColor='#0d6efd'; this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(13,110,253,0.1)'" onmouseout="this.style.borderColor='#f0f0f0'; this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 40px rgba(0,0,0,0.05)'">
                    <i class="fa-solid fa-layer-group animate__animated animate__pulse animate__infinite" style="font-size: 50px; color: #0d6efd;"></i>
                    <h4 style="margin-top: 25px; font-weight: 800; color: #0a1f44;">Industrial Projects</h4>
                    <p style="color: #666; font-size: 15px; line-height: 1.7;">Work on real-world industry case studies to build a portfolio that gets you hired.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Flexible Training Plans -->
    <div id="plans" style="background: #0a1f44; padding: 100px 15px;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-weight: 800; color: white;">FLEXIBLE <span style="color: #0d6efd;">TRAINING PLANS</span></h2>
                <p style="color: #ccc; margin-top: 10px;">Select the best path for your career growth</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 45px 35px; border-radius: 25px; text-align: center; transition: 0.4s;" onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='#0d6efd'; this.style.transform='translateY(-5px)';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)';">
                        <h5 style="text-transform: uppercase; letter-spacing: 2px; color: #0d6efd; font-weight: 700;">Basic PLC</h5>
                        <h2 style="font-size: 42px; font-weight: 900; margin: 20px 0;">₹10,000 <small style="font-size: 15px; font-weight: 400; color: #aaa;">/month</small></h2>
                        <ul style="list-style: none; padding: 0; text-align: left; margin: 30px 0; color: #ccc; font-size: 15px;">
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0d6efd; margin-right: 10px;"></i> All PLC Brands Access</li>
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0d6efd; margin-right: 10px;"></i> Logic Development Basics</li>
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0d6efd; margin-right: 10px;"></i> Certification Included</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background: #0d6efd; color: white; padding: 55px 35px; border-radius: 25px; text-align: center; transform: scale(1.05); box-shadow: 0 20px 40px rgba(13,110,253,0.4); position: relative;">
                        <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: #0a1f44; padding: 5px 20px; border-radius: 50px; font-size: 12px; font-weight: 800; letter-spacing: 1px;">MOST POPULAR</div>
                        <h5 style="text-transform: uppercase; letter-spacing: 2px; color: white; font-weight: 700;">Combo Bundle</h5>
                        <h2 style="font-size: 42px; font-weight: 900; margin: 20px 0;">₹15,000 <small style="font-size: 15px; font-weight: 400; color: white;">/month</small></h2>
                        <ul style="list-style: none; padding: 0; text-align: left; margin: 30px 0; color: white; font-size: 15px;">
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0a1f44; margin-right: 10px;"></i> PLC + Robotics Complete</li>
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0a1f44; margin-right: 10px;"></i> SCADA/HMI Integration</li>
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0a1f44; margin-right: 10px;"></i> Job Placement Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 45px 35px; border-radius: 25px; text-align: center; transition: 0.4s;" onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='#0d6efd'; this.style.transform='translateY(-5px)';" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.1)'; this.style.transform='translateY(0)';">
                        <h5 style="text-transform: uppercase; letter-spacing: 2px; color: #0d6efd; font-weight: 700;">Advanced Robot</h5>
                        <h2 style="font-size: 42px; font-weight: 900; margin: 20px 0;">₹8,000 <small style="font-size: 15px; font-weight: 400; color: #aaa;">/month</small></h2>
                        <ul style="list-style: none; padding: 0; text-align: left; margin: 30px 0; color: #ccc; font-size: 15px;">
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0d6efd; margin-right: 10px;"></i> Fanuc & ABB Programming</li>
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0d6efd; margin-right: 10px;"></i> Robot Maintenance</li>
                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-check" style="color: #0d6efd; margin-right: 10px;"></i> Troubleshooting Skills</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div style="background: #f8f9fa; padding: 100px 15px;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-weight: 800; color: #0a1f44;">WHY <span style="color: #0d6efd;">CHOOSE US?</span></h2>
                <div style="width: 50px; height: 3px; background: #0d6efd; margin: 15px auto; border-radius: 2px;"></div>
            </div>
            <div class="row text-center g-5">
                <div class="col-md-4">
                    <div style="padding: 30px 20px; border: 2px solid #0d6efd; border-radius: 15px; background: white; transition: 0.3s;" onmouseover="this.style.background='#0d6efd'; this.style.color='white'; this.querySelectorAll('i, h5, p').forEach(el => el.style.color='white');" onmouseout="this.style.background='white'; this.style.color='#0a1f44'; this.querySelectorAll('i, h5').forEach(el => el.style.color='#0d6efd'); this.querySelectorAll('p').forEach(el => el.style.color='#666');">
                        <i class="fa-solid fa-user-gear" style="font-size: 45px; color: #0d6efd; margin-bottom: 20px; transition: 0.3s;"></i>
                        <h5 style="font-weight: 800; color: #0a1f44; transition: 0.3s;">Expert Trainers</h5>
                        <p style="color: #666; font-size: 15px; transition: 0.3s;">Learn from engineers working on actual industrial sites, not just theorists.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="padding: 30px 20px; border: 2px solid #0d6efd; border-radius: 15px; background: white; transition: 0.3s;" onmouseover="this.style.background='#0d6efd'; this.style.color='white'; this.querySelectorAll('i, h5, p').forEach(el => el.style.color='white');" onmouseout="this.style.background='white'; this.style.color='#0a1f44'; this.querySelectorAll('i, h5').forEach(el => el.style.color='#0d6efd'); this.querySelectorAll('p').forEach(el => el.style.color='#666');">
                        <i class="fa-solid fa-industry" style="font-size: 45px; color: #0d6efd; margin-bottom: 20px; transition: 0.3s;"></i>
                        <h5 style="font-weight: 800; color: #0a1f44; transition: 0.3s;">Real Hardware</h5>
                        <p style="color: #666; font-size: 15px; transition: 0.3s;">Direct access to PLCs, Robots, and VFDs. No boring simulations.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="padding: 30px 20px; border: 2px solid #0d6efd; border-radius: 15px; background: white; transition: 0.3s;" onmouseover="this.style.background='#0d6efd'; this.style.color='white'; this.querySelectorAll('i, h5, p').forEach(el => el.style.color='white');" onmouseout="this.style.background='white'; this.style.color='#0a1f44'; this.querySelectorAll('i, h5').forEach(el => el.style.color='#0d6efd'); this.querySelectorAll('p').forEach(el => el.style.color='#666');">
                        <i class="fa-solid fa-certificate" style="font-size: 45px; color: #0d6efd; margin-bottom: 20px; transition: 0.3s;"></i>
                        <h5 style="font-weight: 800; color: #0a1f44; transition: 0.3s;">Certification</h5>
                        <p style="color: #666; font-size: 15px; transition: 0.3s;">Earn a globally recognized training certificate from NN Automation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted Industries Include -->
    <?php include 'includes/trusted_industries.php'; ?>

    <!-- Footer Include -->
    <?php include "includes/footer.php"; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>