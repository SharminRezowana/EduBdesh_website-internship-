<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in UK from Bangladesh | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <style>
    /* 1. Forces everything to stay in the middle of the screen */
    .container {
        max-width: 1200px;
        margin: 0 auto !important;
        padding: 0 20px;
    }
    .center-text {
        text-align: center !important;
    }

    /* 2. Forces the Navigation to be a horizontal row in the center */
    .page-nav {
        background: #ffffff;
        padding: 15px 0;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        text-align: center;
    }
    .page-nav ul {
        display: flex !important;
        flex-direction: row !important;
        justify-content: center !important;
        align-items: center !important;
        flex-wrap: wrap;
        gap: 15px;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .page-nav a {
        text-decoration: none !important;
        color: #333333;
        font-weight: 600;
        padding: 10px 24px;
        background: #f4f5f7;
        border-radius: 30px;
        transition: 0.3s;
    }
    .page-nav a:hover {
        background: #e3000f; /* EduBdesh Red */
        color: #ffffff;
    }

    /* 3. Forces the Key Facts into a 4-column centered grid */
    .facts-grid {
        display: grid !important;
        grid-template-columns: repeat(4, 1fr) !important;
        gap: 25px;
        max-width: 1000px; /* Keeps the grid from stretching too wide */
        margin: 40px auto !important; /* Perfect middle alignment */
    }
    .fact-card {
        background: #ffffff;
        padding: 30px 20px;
        border-radius: 12px;
        text-align: center !important; /* Centers the text inside the box */
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        border-bottom: 4px solid #e3000f;
    }
    .fact-card i {
        display: block;
        font-size: 2.5rem;
        color: #e3000f;
        margin: 0 auto 15px auto !important; /* Centers the icon */
    }
    .fact-card h4 {
        font-size: 1.8rem;
        color: #111;
        margin: 0 0 5px 0;
    }
    .fact-card p {
        margin: 0;
        color: #555;
        font-size: 1rem;
    }

    /* Mobile Responsiveness */
    @media (max-width: 992px) {
        .facts-grid { grid-template-columns: repeat(2, 1fr) !important; }
    }
    @media (max-width: 576px) {
        .facts-grid { grid-template-columns: 1fr !important; }
        .page-nav ul { flex-direction: column !important; }
    }
</style>
</head>
<body>

    <header>
        <div class="container navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="EduBdesh Logo"></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="active">Study Destinations <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="study-in-uk.php">Study in UK</a></li>
                            <li><a href="#">Study in USA</a></li>
                            <li><a href="#">Study in Canada</a></li>
                            <li><a href="#">Study in Australia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Services <i class="fa-solid fa-angle-down"></i></a></li>
                    <li class="dropdown"><a href="#">Why Us <i class="fa-solid fa-angle-down"></i></a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
            <a href="#" class="btn-primary pill">Get Free Consultation</a>
        </div>
    </header>

    <section class="inner-banner uk-banner">
        <div class="container center-text banner-text">
            <h1>Study in the UK</h1>
            <p class="tagline">Requirements, Costs, Scholarships & Visa Guide for Bangladeshi Students</p>
            <a href="#consultation" class="btn-primary pill shadow mt-40">Apply Now</a>
        </div>
    </section>

    <div class="page-nav">
        <div class="container">
            <ul>
                <li><a href="#overview">Overview</a></li>
                <li><a href="#requirements">Requirements</a></li>
                <li><a href="#intakes">Intakes & Programs</a></li>
                <li><a href="#costs">Costs</a></li>
                <li><a href="#faqs">FAQs</a></li>
            </ul>
        </div>
    </div>

    <section id="overview" class="section-padding container">
        <div class="center-text">
            <h2>Key Facts About Studying in the UK</h2>
            <p class="subtitle">Everything you need to know at a glance before planning your journey.</p>
        </div>
        
        <div class="facts-grid mt-40">
            <div class="fact-card">
                <i class="fa-solid fa-university"></i>
                <h4>160+</h4>
                <p>Recognized Universities</p>
            </div>
            <div class="fact-card">
                <i class="fa-solid fa-briefcase"></i>
                <h4>20 Hours</h4>
                <p>Work allowed per week</p>
            </div>
            <div class="fact-card">
                <i class="fa-solid fa-passport"></i>
                <h4>2 Years</h4>
                <p>Post-Study Work Visa (Graduate Route)</p>
            </div>
            <div class="fact-card">
                <i class="fa-solid fa-sterling-sign"></i>
                <h4>£363</h4>
                <p>Visa Application Fee</p>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container split-layout align-start">
            <div class="text-box">
                <span class="badge">Why UK?</span>
                <h2>Study in the UK from Bangladesh</h2>
                <p>The United Kingdom remains one of the most sought-after destinations for Bangladeshi students looking for high-quality education, practical learning environments, and internationally recognized qualifications.</p>
                <ul class="benefit-list mt-40">
                    <li><i class="fa-solid fa-check-circle"></i> <strong>Shorter Courses:</strong> Bachelor’s take 3 years, and Master’s just 1 year, saving you time and money.</li>
                    <li><i class="fa-solid fa-check-circle"></i> <strong>Work Opportunities:</strong> Benefit from the 2-year Graduate Route to build your career after studying.</li>
                    <li><i class="fa-solid fa-check-circle"></i> <strong>Scholarships:</strong> Access to GREAT, Chevening, and university-specific funding.</li>
                </ul>
            </div>
            <div class="image-box">
                <img src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80" alt="London City">
            </div>
        </div>
    </section>

    <section id="requirements" class="section-padding container">
        <div class="center-text">
            <h2>Admission & Visa Requirements</h2>
            <p class="subtitle">Prepare these documents to ensure a smooth application process.</p>
        </div>
        
        <ul class="req-list mt-40">
            <li><i class="fa-solid fa-file-pdf"></i> Valid Passport (6+ months validity)</li>
            <li><i class="fa-solid fa-envelope-open-text"></i> Offer letter from a UK university</li>
            <li><i class="fa-solid fa-language"></i> English Test (IELTS, PTE, or Duolingo)</li>
            <li><i class="fa-solid fa-graduation-cap"></i> Academic Transcripts & Certificates</li>
            <li><i class="fa-solid fa-file-signature"></i> CAS (Confirmation of Acceptance for Studies)</li>
            <li><i class="fa-solid fa-x-ray"></i> Tuberculosis (TB) test certificate</li>
            <li><i class="fa-solid fa-money-check-dollar"></i> Financial Proof (Tuition & Living expenses)</li>
            <li><i class="fa-solid fa-pen-nib"></i> Statement of Purpose (SOP)</li>
            <li><i class="fa-solid fa-user-tie"></i> Updated CV & Academic References</li>
        </ul>
    </section>

    <section id="intakes" class="section-padding bg-light">
        <div class="container">
            <h2 class="center-text">Academic Intakes & Estimated Costs</h2>
            
            <div class="split-layout align-start mt-40">
                <div class="table-container">
                    <h3>Academic Intakes</h3>
                    <table class="data-table">
                        <tr>
                            <th>Intake</th>
                            <th>Start Date</th>
                            <th>Main Application Period</th>
                        </tr>
                        <tr>
                            <td><strong>Autumn</strong></td>
                            <td>Sep - Oct</td>
                            <td>Jan - June (Main Intake)</td>
                        </tr>
                        <tr>
                            <td><strong>Spring</strong></td>
                            <td>Jan - Feb</td>
                            <td>Sep - Nov</td>
                        </tr>
                        <tr>
                            <td><strong>Summer</strong></td>
                            <td>May - June</td>
                            <td>Jan - March</td>
                        </tr>
                    </table>
                </div>

                <div class="table-container" id="costs">
                    <h3>Average Tuition Fees (GBP/year)</h3>
                    <table class="data-table">
                        <tr>
                            <th>Program</th>
                            <th>Estimated Tuition</th>
                        </tr>
                        <tr>
                            <td>Undergraduate Degree</td>
                            <td>£11,000 – £28,000</td>
                        </tr>
                        <tr>
                            <td>Postgraduate (Taught)</td>
                            <td>£12,000 – £32,000</td>
                        </tr>
                        <tr>
                            <td>MBA / Business</td>
                            <td>£16,000 – £38,000</td>
                        </tr>
                        <tr>
                            <td>Living Cost (London)</td>
                            <td>£1,334 / month</td>
                        </tr>
                        <tr>
                            <td>Living Cost (Outside)</td>
                            <td>£1,023 / month</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs" class="section-padding container">
        <div class="center-text">
            <h2>Frequently Asked Questions</h2>
            <p class="subtitle">Got questions about studying in the UK from Bangladesh? We have answers.</p>
        </div>
        
        <div class="faq-container mt-40">
            <details class="faq-box" open>
                <summary>Is IELTS mandatory for studying in the UK?</summary>
                <p>IELTS is the most commonly accepted test, but many universities also accept PTE Academic, Duolingo, or MOI (Medium of Instruction) depending on your academic background.</p>
            </details>
            
            <details class="faq-box">
                <summary>Can I work while studying in the UK?</summary>
                <p>Yes! With a student visa, you can work up to 20 hours per week during term time, and full-time during holidays to help support your living expenses.</p>
            </details>

            <details class="faq-box">
                <summary>What is the Graduate Route?</summary>
                <p>The Graduate Route allows international students to stay and work in the UK after graduation. You get 2 years for a Bachelor’s or Master’s degree, and 3 years for a PhD.</p>
            </details>

            <details class="faq-box">
                <summary>Are scholarships available for Bangladeshi students?</summary>
                <p>Yes, options include Chevening Scholarships, Commonwealth Scholarships, British Council STEM scholarships, and specific merit discounts offered directly by the universities.</p>
            </details>
        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <img src="images/logo.png" alt="EduBdesh" class="footer-logo" style="filter: brightness(0) invert(1);">
                    <p>Study Abroad | Visa & Admission Assistance</p>
                    <p>Helping students achieve their global education dreams through expert guidance.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Study Destinations</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Destinations & Services</h4>
                    <ul>
                        <li><a href="#">All Destinations</a></li>
                        <li><a href="#">Study in Australia</a></li>
                        <li><a href="#">Study in UK</a></li>
                        <li><a href="#">Study in Canada</a></li>
                        <li><a href="#">Study in USA</a></li>
                        <li><a href="#">Visa Assistance</a></li>
                    </ul>
                </div>

                <div class="footer-contact">
                    <h4>Contact Info</h4>
                    <p><i class="fa-solid fa-phone"></i> +8801332132839</p>
                    <p><i class="fa-solid fa-envelope"></i> help@edubdesh.com</p>
                    <p><i class="fa-solid fa-clock"></i> Office Hours: 10:30 am - 7:00pm</p>
                    <p><i class="fa-solid fa-location-dot"></i> BDDL Rader Height, 9th Floor, Dhaka - 1229, Bangladesh</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 EduBdesh. All Rights Reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>