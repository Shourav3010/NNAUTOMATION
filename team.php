<?php
// Include Database Connection
include('config/db.php');
// Include Header
include('includes/header.php');
// Include Navbar
include('includes/navbar.php');
?>

<!-- Bootstrap 5 & FontAwesome CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

<!-- Team Page Custom Styles -->
<style>
    body {
        background-color: #f8fbff;
        color: #0f172a;
    }
    .team-hero {
        position: relative;
        background: linear-gradient(135deg, rgba(10, 31, 68, 0.9) 0%, rgba(13, 110, 253, 0.4)), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
        padding: 160px 0 120px 0;
        text-align: center;
        color: #ffffff;
        overflow: hidden;
    }
    .team-company-super {
        font-size: 1.5rem;
        font-weight: 800;
        letter-spacing: 1.5px;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        margin-bottom: 15px;
        display: block;
    }
    .team-hero h1 {
        font-size: 3.8rem;
        font-weight: 800;
        color: #ffffff;
        text-shadow: 0 3px 8px rgba(0, 0, 0, 0.4);
        margin-bottom: 20px;
    }
    .team-hero p {
        font-size: 1.3rem;
        font-weight: 500;
        color: #f8fafc;
        max-width: 820px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Mobile Responsive Fix for Hero Text */
    @media (max-width: 991.98px) {
        .team-hero {
            padding: 120px 15px 80px 15px;
        }
        .team-company-super {
            font-size: 1.1rem;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .team-hero h1 {
            font-size: 2.4rem;
            margin-bottom: 15px;
        }
        .team-hero p {
            font-size: 1rem;
            line-height: 1.5;
        }
    }

    @media (max-width: 575.98px) {
        .team-hero h1 {
            font-size: 2rem;
        }
        .team-company-super {
            font-size: 0.95rem;
        }
    }

    .team-section {
        padding: 80px 0;
        background: #f8fbff;
    }
    
    /* Hierarchical Tree Connector Structure */
    .org-hierarchy-tree {
        position: relative;
    }
    .org-hierarchy-tree::before {
        content: '';
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        height: 40px;
        background: #2563eb;
    }

    /* Department Group with Top Connector Line */
    .department-group {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid rgba(37, 99, 235, 0.15);
        margin-bottom: 35px;
        box-shadow: 0 5px 20px rgba(15, 23, 42, 0.04);
        overflow: hidden;
        position: relative;
    }
    .department-group::before {
        content: '';
        position: absolute;
        top: -35px;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        height: 35px;
        background: #2563eb;
    }

    .department-header {
        background: #2563eb; /* Changed to simple blue color */
        color: #ffffff;
        padding: 18px 25px;
        font-size: 1.2rem;
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
    }
    .department-header i {
        transition: transform 0.3s ease;
        color: #ffffff;
    }
    .department-header.collapsed i {
        transform: rotate(-90deg);
    }
    .department-body {
        padding: 25px;
        background: #f8fbff;
    }

    /* MD Special Hierarchy Styling */
    .md-card-wrapper {
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        color: #fff;
        border-radius: 18px;
        padding: 30px;
        margin-bottom: 50px;
        box-shadow: 0 15px 35px rgba(37, 99, 235, 0.2);
        position: relative;
    }

    /* Modern Team Card Style */
    .team-card-modern {
        background: #ffffff;
        padding: 20px;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(15, 23, 42, 0.04);
        border: 1px solid rgba(37, 99, 235, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }
    .team-card-modern:hover {
        border-color: #2563eb;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.1);
    }

    /* Mobile Layout: Horizontal row (Left Image, Right Content) */
    @media (max-width: 991.98px) {
        .member-summary-trigger {
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            width: 100%;
        }
        .team-img-wrapper {
            width: 65px;
            height: 65px;
            min-width: 65px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #2563eb;
            margin-bottom: 0 !important;
        }
        .member-meta-box {
            flex-grow: 1;
            text-align: left !important;
        }
        .team-member-name {
            font-size: 1rem !important;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 3px !important;
        }
        .team-member-role {
            font-size: 0.75rem !important;
            padding: 2px 8px !important;
            margin-bottom: 0 !important;
        }
        .member-summary-trigger::after {
            content: "\f078";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            font-size: 0.8rem;
            color: #64748b;
            margin-left: auto;
            transition: transform 0.3s;
        }
        .member-summary-trigger.collapsed::after {
            transform: rotate(-90deg);
        }
        .member-details-collapse:not(.show) {
            display: none;
        }
        .member-details-collapse {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed #e2e8f0;
        }
    }

    /* Laptop & Desktop Layout */
    @media (min-width: 992px) {
        .team-card-modern {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 25px 20px;
        }
        .team-img-wrapper {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 15px auto;
            border: 3px solid #2563eb;
            flex-shrink: 0;
        }
        .team-member-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 5px;
        }
        .team-member-role {
            font-size: 0.8rem;
            font-weight: 600;
            color: #2563eb;
            background: rgba(37, 99, 235, 0.08);
            padding: 3px 10px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 12px;
        }
        .member-summary-trigger {
            width: 100%;
        }
        
        /* Custom row configurations for Desktop grid */
        .dept-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .dept-row.count-4 > div {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
        .dept-row.count-4 > div:nth-child(4) {
            margin-left: auto;
            margin-right: auto;
        }
        .dept-row.count-5 > div {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
        .dept-row.count-5 > div:nth-child(4),
        .dept-row.count-5 > div:nth-child(5) {
            flex: 0 0 40%;
            max-width: 40%;
        }
    }

    .team-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .team-info-list {
        list-style: none;
        padding: 0;
        margin: 5px 0 12px 0;
        width: 100%;
        text-align: left;
        font-size: 0.85rem;
        color: #334155;
        background: #f8fafc;
        padding: 12px;
        border-radius: 8px;
    }
    .team-info-list li {
        margin-bottom: 6px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .team-info-list li:last-child {
        margin-bottom: 0;
    }
    .team-info-list li i {
        color: #2563eb;
        width: 16px;
    }
    .team-member-desc {
        font-size: 0.85rem;
        color: #64748b;
        line-height: 1.4;
        margin-bottom: 0;
        text-align: left;
        width: 100%;
    }
</style>

<!-- Hero Section -->
<section class="team-hero">
    <div class="container position-relative">
        <span class="team-company-super animate__animated animate__fadeInDown">NN AUTOMATION PRIVATE LIMITED</span>
        <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Our Organizational Structure</h1>
        <p class="animate__animated animate__fadeInUp animate__delay-1s">Explore our management hierarchy and specialized department teams driving smart manufacturing.</p>
    </div>
</section>

<!-- Team Structure Section -->
<section class="team-section">
    <div class="container org-hierarchy-tree">
        <?php
        // Fetch all team members grouped by department
        $query = "SELECT * FROM team_members ORDER BY FIELD(role, 'Managing Director', 'MD') DESC, id ASC";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $departments = [];
            while ($member = mysqli_fetch_assoc($result)) {
                $dept = !empty($member['department']) ? trim($member['department']) : 'Other Members';
                $departments[$dept][] = $member;
            }

            // Top Priority: Managing Director / Leadership
            foreach ($departments as $deptName => $members) {
                if (strtolower($deptName) == 'managing director' || strtolower($deptName) == 'leadership' || strtolower($deptName) == 'md') {
                    $mdCount = count($members);
                    $mdRowClass = ($mdCount <= 2) ? "justify-content-center" : "dept-row count-" . $mdCount;
                    ?>
                    <div class="md-card-wrapper text-center" data-aos="fade-up">
                        <h3 class="mb-4 text-white fw-bold"><i class="fas fa-crown text-warning me-2"></i>Executive Leadership</h3>
                        <div class="row <?php echo $mdRowClass; ?> g-4">
                            <?php foreach ($members as $member) { 
                                $imgData = trim($member['image']);
                                $memberImgPath = !empty($imgData) ? (str_starts_with($imgData, 'http') ? $imgData : (str_starts_with($imgData, 'uploads/') ? "admin/" . $imgData : "admin/uploads/" . $imgData)) : "https://via.placeholder.com/150";
                            ?>
                                <div class="<?php echo ($mdCount == 1) ? 'col-md-6 col-lg-4 mx-auto' : 'col-md-6 col-lg-4'; ?>">
                                    <div class="team-card-modern bg-white text-dark shadow-sm h-100">
                                        <div class="member-summary-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#md-details-<?php echo $member['id']; ?>" aria-expanded="false">
                                            <div class="team-img-wrapper">
                                                <img src="<?php echo htmlspecialchars($memberImgPath); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                                            </div>
                                            <div class="member-meta-box">
                                                <h3 class="team-member-name"><?php echo htmlspecialchars($member['name']); ?></h3>
                                                <span class="team-member-role"><?php echo htmlspecialchars($member['role']); ?></span>
                                            </div>
                                        </div>

                                        <div id="md-details-<?php echo $member['id']; ?>" class="member-details-collapse collapse d-lg-block w-100">
                                            <ul class="team-info-list">
                                                <?php if (!empty($member['qualification'])): ?>
                                                    <li><i class="fas fa-graduation-cap"></i> <span><strong>Qual:</strong> <?php echo htmlspecialchars($member['qualification']); ?></span></li>
                                                <?php endif; ?>
                                                <?php if (!empty($member['experience'])): ?>
                                                    <li><i class="fas fa-briefcase"></i> <span><strong>Exp:</strong> <?php echo htmlspecialchars($member['experience']); ?></span></li>
                                                <?php endif; ?>
                                                <?php if (!empty($member['email'])): ?>
                                                    <li><i class="fas fa-envelope"></i> <span class="text-truncate"><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($member['email']); ?>" class="text-decoration-none text-dark"><?php echo htmlspecialchars($member['email']); ?></a></span></li>
                                                <?php endif; ?>
                                                <?php if (!empty($member['phone'])): ?>
                                                    <li><i class="fas fa-phone-alt"></i> <span><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($member['phone']); ?>" class="text-decoration-none text-dark"><?php echo htmlspecialchars($member['phone']); ?></a></span></li>
                                                <?php endif; ?>
                                            </ul>
                                            <?php if (!empty($member['description'])): ?>
                                                <p class="team-member-desc"><?php echo htmlspecialchars($member['description']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                    unset($departments[$deptName]); 
                }
            }
            
            // Loop through remaining departments
            $index = 1;
            foreach ($departments as $deptName => $members) {
                $collapseId = "dept-collapse-" . $index;
                $totalMembers = count($members);
                $rowClass = ($totalMembers <= 3) ? "justify-content-center" : "dept-row count-" . $totalMembers;
                
                if($totalMembers == 1) {
                    $colClass = "col-lg-4 col-md-6 mx-auto";
                } elseif($totalMembers == 2) {
                    $colClass = "col-lg-5 col-md-6";
                } else {
                    $colClass = "col-lg-4 col-md-6";
                }
                ?>
                <div class="department-group" data-aos="fade-up">
                    <div class="department-header" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="true" aria-controls="<?php echo $collapseId; ?>">
                        <span><i class="fas fa-sitemap me-2"></i><?php echo htmlspecialchars($deptName); ?></span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div id="<?php echo $collapseId; ?>" class="collapse show department-body">
                        <div class="row <?php echo $rowClass; ?> g-4">
                            <?php foreach ($members as $member) { 
                                $imgData = trim($member['image']);
                                if (!empty($imgData)) {
                                    if (!str_starts_with($imgData, 'http') && !str_starts_with($imgData, 'admin/')) {
                                        $memberImgPath = str_starts_with($imgData, 'uploads/') ? "admin/" . $imgData : "admin/uploads/" . $imgData;
                                    } else {
                                        $memberImgPath = $imgData;
                                    }
                                } else {
                                    $memberImgPath = "https://via.placeholder.com/150";
                                }
                            ?>
                                <div class="<?php echo $colClass; ?>">
                                    <div class="team-card-modern">
                                        <!-- Mobile Horizontal View Trigger / Laptop Default Top -->
                                        <div class="member-summary-trigger collapsed" data-bs-toggle="collapse" data-bs-target="#member-details-<?php echo $member['id']; ?>" aria-expanded="false">
                                            <div class="team-img-wrapper">
                                                <img src="<?php echo htmlspecialchars($memberImgPath); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>">
                                            </div>
                                            <div class="member-meta-box">
                                                <h3 class="team-member-name"><?php echo htmlspecialchars($member['name']); ?></h3>
                                                <span class="team-member-role"><?php echo htmlspecialchars($member['role']); ?></span>
                                            </div>
                                        </div>

                                        <!-- Collapsible details for mobile, fully visible on laptop -->
                                        <div id="member-details-<?php echo $member['id']; ?>" class="member-details-collapse collapse d-lg-block w-100">
                                            <ul class="team-info-list">
                                                <?php if (!empty($member['qualification'])): ?>
                                                    <li><i class="fas fa-graduation-cap"></i> <span><strong>Qual:</strong> <?php echo htmlspecialchars($member['qualification']); ?></span></li>
                                                <?php endif; ?>
                                                <?php if (!empty($member['experience'])): ?>
                                                    <li><i class="fas fa-briefcase"></i> <span><strong>Exp:</strong> <?php echo htmlspecialchars($member['experience']); ?></span></li>
                                                <?php endif; ?>
                                                <?php if (!empty($member['email'])): ?>
                                                    <li><i class="fas fa-envelope"></i> <span class="text-truncate"><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($member['email']); ?>" class="text-decoration-none text-dark"><?php echo htmlspecialchars($member['email']); ?></a></span></li>
                                                <?php endif; ?>
                                                <?php if (!empty($member['phone'])): ?>
                                                    <li><i class="fas fa-phone-alt"></i> <span><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($member['phone']); ?>" class="text-decoration-none text-dark"><?php echo htmlspecialchars($member['phone']); ?></a></span></li>
                                                <?php endif; ?>
                                            </ul>

                                            <?php if (!empty($member['description'])): ?>
                                                <p class="team-member-desc"><?php echo htmlspecialchars($member['description']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
                $index++;
            }

        } else {
            ?>
            <div class="col-12 text-center py-5" data-aos="fade-up">
                <div class="p-5 bg-white rounded-4 shadow-sm border mx-auto" style="max-width: 600px;">
                    <i class="fas fa-users-cog text-primary mb-3" style="font-size: 48px;"></i>
                    <h3 class="fw-bold text-dark mb-2">Coming Soon</h3>
                    <p class="text-muted mb-0">Our organizational structure is being updated. Please check back later!</p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({ once: true, offset: 100 });

        // Accordion Icon Arrow toggle rotation effect
        const collapseElements = document.querySelectorAll('.department-group');
        collapseElements.forEach(group => {
            const header = group.querySelector('.department-header');
            const content = group.querySelector('.collapse');
            
            content.addEventListener('hidden.bs.collapse', () => {
                header.classList.add('collapsed');
            });
            content.addEventListener('shown.bs.collapse', () => {
                header.classList.remove('collapsed');
            });
        });
    });
</script>

<?php
// Include Footer
include('includes/footer.php');
?>