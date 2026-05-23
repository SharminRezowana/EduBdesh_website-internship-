<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in the USA | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; box-sizing: border-box; background-color: #ffffff; }
        .usa-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .usa-padding-block { padding: 80px 0; }
        .usa-bg-tint { background-color: #f8f9fa; }
        .usa-bg-dark { background-color: #1a1a1a; }
        .usa-section-header { text-align: center; margin-bottom: 50px; }
        .usa-section-header h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #222; letter-spacing: -0.5px; }
        .usa-section-header p { max-width: 700px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.6; }

        /* --- Hero Section --- */
        .usa-hero {
            background: url('https://images.unsplash.com/photo-1485738422979-f5c462d49f74?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative; min-height: 450px; display: flex; align-items: center;
        }
        .usa-hero-overlay { background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)); width: 100%; padding: 100px 0; }
        .usa-badge-white { color: #fff; border: 2px solid #fff; padding: 6px 18px; border-radius: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; }
        .usa-hero-title { color: white !important; font-size: 3.8rem; font-weight: 700; margin: 20px 0 10px 0; letter-spacing: -1px; }
        .usa-hero-subtitle { color: #e5e5e5 !important; font-size: 1.25rem; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        /* --- Grid Utilities --- */
        .usa-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; }
        .usa-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .usa-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px; }

        /* --- Advantage Cards --- */
        .usa-card-advantage { background: white; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; text-align: left; border: 1px solid #efefef; }
        .usa-card-advantage:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
        .usa-icon-wrapper { width: 60px; height: 60px; background: rgba(10, 49, 97, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .usa-icon-wrapper i { font-size: 1.6rem; color: #0a3161; }
        .usa-card-advantage h4 { font-size: 1.3rem; margin: 0 0 12px 0; color: #222; font-weight: 600; }
        .usa-card-advantage p { color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0; }

        /* --- Intakes Elements --- */
        .usa-flex-row { display: flex; flex-wrap: wrap; gap: 30px; }
        .usa-intake-card { background: white; padding: 40px; border-radius: 16px; flex: 1; min-width: 320px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); }
        .usa-border-red { border-top: 5px solid #0a3161; }
        .usa-border-blue { border-top: 5px solid #b22234; }
        .usa-tag { padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.75rem; letter-spacing: 0.5px; display: inline-block; }
        .tag-primary { background: rgba(10,49,97,0.08); color: #0a3161; }
        .tag-secondary { background: rgba(178,34,52,0.08); color: #b22234; }
        .usa-intake-card h3 { font-size: 1.5rem; margin: 20px 0 12px 0; color: #222; }
        .usa-intake-card p { color: #666; font-size: 1rem; line-height: 1.6; margin: 0; }
        .usa-deadline { font-weight: 600; margin-top: 25px !important; font-size: 0.95rem; color: #333; }
        .fa-regular.fa-clock { color: #0a3161; margin-right: 5px; }

        /* --- Split Layout Rows --- */
        .usa-flex-split { display: flex; flex-wrap: wrap; gap: 60px; align-items: center; }
        .usa-split-side { flex: 1; min-width: 400px; }
        @media (max-width: 768px) { .usa-split-side { min-width: 100%; } }
        .usa-round-img { width: 100%; height: auto; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.12); display: block; }
        .usa-sub-label { color: #0a3161; font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; display: block; margin-bottom: 8px; }
        .usa-desc { color: #666; line-height: 1.6; margin-bottom: 25px; font-size: 1.05rem; }
        .usa-price-row { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding: 15px 0; font-size: 1.05rem; }
        .usa-price-row strong { color: #0a3161; font-weight: 700; }

        /* --- Universities Modules --- */
        .usa-uni-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; }
        .usa-uni-card img { width: 100%; height: 220px; object-fit: cover; }
        .usa-uni-info { padding: 25px; }
        .usa-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px 0; color: #222; }
        .usa-uni-info p { color: #777; margin: 0 0 20px 0; font-size: 0.9rem; }
        .usa-uni-badge { background: #f1f3f5; padding: 6px 12px; border-radius: 6px; font-weight: 600; color: #495057; font-size: 0.85rem; }

        /* --- Scholarships Cards --- */
        .usa-scholarship-card { background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border-left: 5px solid #0a3161; text-align: left; }
        .usa-scholarship-card h4 { margin: 0 0 12px 0; font-size: 1.2rem; color: #222; font-weight: 600; }
        .usa-scholarship-card h4 i { color: #0a3161; margin-right: 6px; }

        /* --- Roadmaps Timeline --- */
        .usa-timeline { display: flex; flex-direction: column; gap: 25px; max-width: 900px; margin: 0 auto; }
        .usa-timeline-item { display: flex; gap: 30px; background: #252525; padding: 30px; border-radius: 12px; align-items: center; text-align: left; }
        .usa-timeline-number { font-size: 2.5rem; font-weight: 800; color: #0a3161; min-width: 50px; }
        .usa-timeline-content h3 { font-size: 1.3rem; margin: 0 0 5px 0; color: white; }
        .usa-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Criteria --- */
        .usa-requirement-box { background: #f8f9fa; padding: 40px; border-radius: 16px; border: 1px solid #e9ecef; text-align: left; }
        .usa-requirement-box h3 { font-size: 1.4rem; color: #222; margin: 0 0 25px 0; }
        .usa-requirement-box h3 i { color: #0a3161; margin-right: 8px; }
        .usa-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px; }
        .usa-list li { display: flex; gap: 15px; font-size: 1rem; line-height: 1.6; color: #444; }
        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields of Study --- */
        .usa-field-card { background: white; padding: 40px 30px; border-radius: 16px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        .field-icon { font-size: 2.5rem; color: #0a3161; margin-bottom: 20px; }
        .usa-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .usa-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- Accordion --- */
        .usa-faq-container { max-width: 850px; margin: 0 auto; }
        .usa-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .usa-accordion-item { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #edf2f7; text-align: left; }
        .faq-head { padding: 22px 30px; font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #222; user-select: none; }
        .usa-plus-icon { transition: transform 0.25s; color: #888; }
        .faq-body { max-height: 0; padding: 0 30px; overflow: hidden; transition: max-height 0.35s ease; background: #fcfcfc; }
        .faq-body p { padding-bottom: 22px; margin: 0; font-size: 1rem; color: #555; line-height: 1.6; }

        /* --- CTA Interface --- */
        .usa-cta-text { max-width: 600px; margin: 0 auto 30px auto; color: #555; font-size: 1.1rem; line-height: 1.6; }
        .usa-cta-btn { display: inline-block; background: #0a3161 !important; color: white !important; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(10,49,97,0.3); transition: transform 0.2s; }
        .usa-cta-btn:hover { transform: scale(1.03); }
    </style>
</head>
<body>

    <section class="usa-hero">
        <div class="usa-hero-overlay">
            <div class="usa-container text-center">
                <span class="usa-badge-white">Destination Guide</span>
                <h1 class="usa-hero-title">Study in the USA</h1>
                <p class="usa-hero-subtitle">Access unmatched innovation, Ivy League quality, and high-growth industry networks.</p>
            </div>
        </div>
    </section>

    <section class="usa-padding-block">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2>Why Select the United States?</h2>
                <p>The USA remains the premier global standard for corporate tech placements and extensive academic research ecosystems.</p>
            </div>
            
            <div class="usa-grid-4">
                <div class="usa-card-advantage">
                    <div class="usa-icon-wrapper"><i class="fa-solid fa-bolt"></i></div>
                    <h4>3-Year STEM OPT</h4>
                    <p>Graduates from STEM disciplines unlock an extended 36-month temporary operational work framework.</p>
                </div>
                <div class="usa-card-advantage">
                    <div class="usa-icon-wrapper"><i class="fa-solid fa-building-columns"></i></div>
                    <h4>Elite Ivy Plus Tier</h4>
                    <p>Study within premium global ecosystems carrying unmatched alumni authority and venture capital links.</p>
                </div>
                <div class="usa-card-advantage">
                    <div class="usa-icon-wrapper"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h4>TA / RA Funding</h4>
                    <p>Offset complete cost components via highly structured graduate teaching assistantships.</p>
                </div>
                <div class="usa-card-advantage">
                    <div class="usa-icon-wrapper"><i class="fa-solid fa-gears"></i></div>
                    <h4>Curricular CPT</h4>
                    <p>Gain direct off-campus corporate training placement opportunities while actively pursuing your course modules.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-bg-tint usa-padding-block">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2>Primary Academic Cycles</h2>
                <p>U.S. higher education functions across two core enrollment processing tracks every year.</p>
            </div>
            
            <div class="usa-flex-row">
                <div class="usa-intake-card usa-border-red">
                    <span class="usa-tag tag-primary">PRIMARY INTAKE</span>
                    <h3>Fall Semester (August / Sept)</h3>
                    <p>The standard corporate enrollment session. Maximizes department fellowship considerations and complete course inventory structures.</p>
                    <p class="usa-deadline"><i class="fa-regular fa-clock"></i> Deadline: Dec - Mar</p>
                </div>
                
                <div class="usa-intake-card usa-border-blue">
                    <span class="usa-tag tag-secondary">MID-YEAR INTAKE</span>
                    <h3>Spring Semester (January)</h3>
                    <p>Highly effective secondary track. Fully structured for computing, management branches, and mathematical modeling applications.</p>
                    <p class="usa-deadline"><i class="fa-regular fa-clock"></i> Deadline: Jul - Sep</p>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-padding-block">
        <div class="usa-container">
            <div class="usa-flex-split">
                <div class="usa-split-side">
                    <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?auto=format&fit=crop&w=800&q=80" alt="New York City Statue" class="usa-round-img">
                </div>
                <div class="usa-split-side">
                    <span class="usa-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="usa-desc">Verify annual financial capability baselines matching standard I-20 documentation needs.</p>
                    
                    <div class="usa-price-list">
                        <div class="usa-price-row">
                            <span>State Universities</span>
                            <strong>USD $22,000 - $40,000 / Yr</strong>
                        </div>
                        <div class="usa-price-row">
                            <span>Private Ivy Institutions</span>
                            <strong>USD $45,000 - $70,000 / Yr</strong>
                        </div>
                        <div class="usa-price-row">
                            <span>Standard Living Costs</span>
                            <strong>USD $12,000 - $18,000 / Yr</strong>
                        </div>
                        <div class="usa-price-row no-border">
                            <span>F-1 Financial Proof Baseline</span>
                            <strong>Tuition + Living Combined</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-bg-tint usa-padding-block">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2>Top World-Class Ivy Plus Institutions</h2>
                <p>Gain access to the highest-performing technological and strategic foundational research labs on Earth.</p>
            </div>
            <div class="usa-grid-3">
                <div class="usa-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="MIT Building">
                    <div class="usa-uni-info">
                        <h3>MIT</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Massachusetts, Cambridge</p>
                        <span class="usa-uni-badge">QS World Rank: #1</span>
                    </div>
                </div>
                <div class="usa-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="Stanford">
                    <div class="usa-uni-info">
                        <h3>Stanford University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> California, Stanford</p>
                        <span class="usa-uni-badge">QS World Rank: #6</span>
                    </div>
                </div>
                <div class="usa-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="Harvard">
                    <div class="usa-uni-info">
                        <h3>Harvard University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Massachusetts, Cambridge</p>
                        <span class="usa-uni-badge">QS World Rank: #4</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-padding-block">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Fulfill cost mitigation targets leveraging elite global scholarship structures.</p>
            </div>
            
            <div class="usa-grid-4">
                <div class="usa-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Fulbright Foreign</h4>
                    <p>Highly prestigious comprehensive award covering full travel, lifestyle maintenance, and complete course costs.</p>
                </div>
                <div class="usa-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Hubert Humphrey</h4>
                    <p>Non-degree execution platforms targeting senior corporate development figures across policy structures.</p>
                </div>
                <div class="usa-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Institutional Merit</h4>
                    <p>Direct cost outlays reducing tuition brackets by 15% up to 50% via high test profiles.</p>
                </div>
                <div class="usa-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Need-Blind Aid</h4>
                    <p>Premium elite universities evaluate profiles completely independent of financial backing limitations.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-bg-dark usa-padding-block" style="color: white;">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="usa-timeline">
                <div class="usa-timeline-item">
                    <div class="usa-timeline-number">01</div>
                    <div class="usa-timeline-content">
                        <h3>Profile Standardization</h3>
                        <p>We compile your academic profiles, evaluation papers, and testing targets accurately.</p>
                    </div>
                </div>
                <div class="usa-timeline-item">
                    <div class="usa-timeline-number">02</div>
                    <div class="usa-timeline-content">
                        <h3>University Filing</h3>
                        <p>We process secure files matching competitive portal platforms to secure a formal approval track.</p>
                    </div>
                </div>
                <div class="usa-timeline-item">
                    <div class="usa-timeline-number">03</div>
                    <div class="usa-timeline-content">
                        <h3>I-20 Form Issuance</h3>
                        <p>We audit bank verifications to clear university financial checks and secure your official digital I-20 form.</p>
                    </div>
                </div>
                <div class="usa-timeline-item">
                    <div class="usa-timeline-number">04</div>
                    <div class="usa-timeline-content">
                        <h3>F-1 Visa Interview Prep</h3>
                        <p>We handle your SEVIS registration fee tracking and execute rigorous mock interview training frameworks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-padding-block">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Review the primary processing metrics enforced across international application channels.</p>
            </div>
            
            <div class="usa-grid-2">
                <div class="usa-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="usa-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>GPA Standard:</strong> High alignment tracking minimum 3.0 out of 4.0; holistic tracking for elite programs.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>GRE / GMAT:</strong> Optional across specific domains, but remains highly beneficial for tier-1 computer tracks.</span></li>
                    </ul>
                </div>
                
                <div class="usa-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="usa-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>TOEFL / IELTS:</strong> Minimum 80 on TOEFL iBT or 6.5 bands baseline across standard university frameworks.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Duolingo Options:</strong> Widely adopted alternative validation benchmarks tracking above 110 to 120.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-bg-tint usa-padding-block">
        <div class="usa-container">
            <div class="usa-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Align qualifications to industries providing maximum technical extension options.</p>
            </div>
            <div class="usa-grid-3">
                <div class="usa-field-card">
                    <i class="fa-solid fa-shield-halved field-icon"></i>
                    <h3>Cybersecurity & AI</h3>
                    <p>Acquire qualifications focused on cloud intelligence modeling, security logic architectures, and systems processing.</p>
                </div>
                <div class="usa-field-card">
                    <i class="fa-solid fa-dna field-icon"></i>
                    <h3>Biomedical Research</h3>
                    <p>Work directly within modern computational genetics, device engineering labs, and advanced pharmacology.</p>
                </div>
                <div class="usa-field-card">
                    <i class="fa-solid fa-chart-pie field-icon"></i>
                    <h3>Business Analytics</h3>
                    <p>Bridge business management with math modules to qualify for high-growth tech strategy lines.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-padding-block">
        <div class="usa-container usa-faq-container">
            <div class="usa-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="usa-accordion-wrapper">
                <div class="usa-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What precisely is the SEVIS fee?
                        <i class="fa-solid fa-plus usa-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>The SEVIS fee supports the automated tracking platform managed by Homeland Security and must be completed online before your embassy interview.</p>
                    </div>
                </div>

                <div class="usa-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can I accept off-campus corporate roles on Day 1?
                        <i class="fa-solid fa-plus usa-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>No, standard rules require F-1 holders to complete one full academic year before deploying CPT work authorizations off-campus.</p>
                    </div>
                </div>

                <div class="usa-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What distinguishes STEM OPT from standard OPT layouts?
                        <i class="fa-solid fa-plus usa-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Standard OPT allows 12 months of training, while verified STEM-designated modules grant an extra 24-month extension, totaling 3 full years.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="usa-bg-tint usa-padding-block text-center">
        <div class="usa-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your U.S. Admission Processing</h2>
            <p class="usa-cta-text">Our counselors will manage your GTE verification procedures and visa document compilation phases seamlessly.</p>
            <a href="#" class="btn-primary pill usa-cta-btn" onclick="openForm()">Book Free Consultation</a>
        </div>
    </section>

    <script>
        function toggleAccordion(headerElement) {
            const body = headerElement.nextElementSibling;
            if (body.style.maxHeight && body.style.maxHeight !== "0px") {
                body.style.maxHeight = "0px";
            } else {
                body.style.maxHeight = "300px";
            }
        }
    </script>
</body>
</html>