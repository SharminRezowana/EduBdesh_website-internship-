<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in Cyprus | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; box-sizing: border-box; background-color: #ffffff; }
        .cyp-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .cyp-padding-block { padding: 80px 0; }
        .cyp-bg-tint { background-color: #f8f9fa; }
        .cyp-bg-dark { background-color: #1a1a1a; }
        .cyp-section-header { text-align: center; margin-bottom: 50px; }
        .cyp-section-header h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #222; letter-spacing: -0.5px; }
        .cyp-section-header p { max-width: 700px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.6; }

        /* --- Hero Section --- */
        .cyp-hero {
            background: url('https://images.unsplash.com/photo-1517610996422-3e2e4d571952?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative; min-height: 450px; display: flex; align-items: center;
        }
        .cyp-hero-overlay { background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)); width: 100%; padding: 100px 0; }
        .cyp-badge-white { color: #fff; border: 2px solid #fff; padding: 6px 18px; border-radius: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; }
        .cyp-hero-title { color: white !important; font-size: 3.8rem; font-weight: 700; margin: 20px 0 10px 0; letter-spacing: -1px; }
        .cyp-hero-subtitle { color: #e5e5e5 !important; font-size: 1.25rem; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        /* --- Grid Utilities --- */
        .cyp-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; }
        .cyp-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .cyp-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px; }

        /* --- Advantage Cards --- */
        .cyp-card-advantage { background: white; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; text-align: left; border: 1px solid #efefef; }
        .cyp-card-advantage:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
        .cyp-icon-wrapper { width: 60px; height: 60px; background: rgba(212, 118, 14, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .cyp-icon-wrapper i { font-size: 1.6rem; color: #d4760e; }
        .cyp-card-advantage h4 { font-size: 1.3rem; margin: 0 0 12px 0; color: #222; font-weight: 600; }
        .cyp-card-advantage p { color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0; }

        /* --- Intakes Elements --- */
        .cyp-flex-row { display: flex; flex-wrap: wrap; gap: 30px; }
        .cyp-intake-card { background: white; padding: 40px; border-radius: 16px; flex: 1; min-width: 320px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); }
        .cyp-border-red { border-top: 5px solid #d4760e; }
        .cyp-border-blue { border-top: 5px solid #4a90e2; }
        .cyp-tag { padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.75rem; letter-spacing: 0.5px; display: inline-block; }
        .tag-primary { background: rgba(212,118,14,0.08); color: #d4760e; }
        .tag-secondary { background: rgba(74,144,226,0.08); color: #4a90e2; }
        .cyp-intake-card h3 { font-size: 1.5rem; margin: 20px 0 12px 0; color: #222; }
        .cyp-intake-card p { color: #666; font-size: 1rem; line-height: 1.6; margin: 0; }
        .cyp-deadline { font-weight: 600; margin-top: 25px !important; font-size: 0.95rem; color: #333; }
        .fa-regular.fa-clock { color: #d4760e; margin-right: 5px; }

        /* --- Split Layout Rows --- */
        .cyp-flex-split { display: flex; flex-wrap: wrap; gap: 60px; align-items: center; }
        .cyp-split-side { flex: 1; min-width: 400px; }
        @media (max-width: 768px) { .cyp-split-side { min-width: 100%; } }
        .cyp-round-img { width: 100%; height: auto; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.12); display: block; }
        .cyp-sub-label { color: #d4760e; font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; display: block; margin-bottom: 8px; }
        .cyp-desc { color: #666; line-height: 1.6; margin-bottom: 25px; font-size: 1.05rem; }
        .cyp-price-row { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding: 15px 0; font-size: 1.05rem; }
        .cyp-price-row strong { color: #d4760e; font-weight: 700; }

        /* --- Universities Modules --- */
        .cyp-uni-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; }
        .cyp-uni-card img { width: 100%; height: 220px; object-fit: cover; }
        .cyp-uni-info { padding: 25px; }
        .cyp-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px 0; color: #222; }
        .cyp-uni-info p { color: #777; margin: 0 0 20px 0; font-size: 0.9rem; }
        .cyp-uni-badge { background: #f1f3f5; padding: 6px 12px; border-radius: 6px; font-weight: 600; color: #495057; font-size: 0.85rem; }

        /* --- Scholarships Cards --- */
        .cyp-scholarship-card { background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border-left: 5px solid #d4760e; text-align: left; }
        .cyp-scholarship-card h4 { margin: 0 0 12px 0; font-size: 1.2rem; color: #222; font-weight: 600; }
        .cyp-scholarship-card h4 i { color: #d4760e; margin-right: 6px; }

        /* --- Roadmaps Timeline --- */
        .cyp-timeline { display: flex; flex-direction: column; gap: 25px; max-width: 900px; margin: 0 auto; }
        .cyp-timeline-item { display: flex; gap: 30px; background: #252525; padding: 30px; border-radius: 12px; align-items: center; text-align: left; }
        .cyp-timeline-number { font-size: 2.5rem; font-weight: 800; color: #d4760e; min-width: 50px; }
        .cyp-timeline-content h3 { font-size: 1.3rem; margin: 0 0 5px 0; color: white; }
        .cyp-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Criteria --- */
        .cyp-requirement-box { background: #f8f9fa; padding: 40px; border-radius: 16px; border: 1px solid #e9ecef; text-align: left; }
        .cyp-requirement-box h3 { font-size: 1.4rem; color: #222; margin: 0 0 25px 0; }
        .cyp-requirement-box h3 i { color: #d4760e; margin-right: 8px; }
        .cyp-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px; }
        .cyp-list li { display: flex; gap: 15px; font-size: 1rem; line-height: 1.6; color: #444; }
        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields of Study --- */
        .cyp-field-card { background: white; padding: 40px 30px; border-radius: 16px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        .field-icon { font-size: 2.5rem; color: #d4760e; margin-bottom: 20px; }
        .cyp-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .cyp-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- Accordion --- */
        .cyp-faq-container { max-width: 850px; margin: 0 auto; }
        .cyp-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .cyp-accordion-item { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #edf2f7; text-align: left; }
        .faq-head { padding: 22px 30px; font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #222; user-select: none; }
        .cyp-plus-icon { transition: transform 0.25s; color: #888; }
        .faq-body { max-height: 0; padding: 0 30px; overflow: hidden; transition: max-height 0.35s ease; background: #fcfcfc; }
        .faq-body p { padding-bottom: 22px; margin: 0; font-size: 1rem; color: #555; line-height: 1.6; }

        /* --- CTA Interface --- */
        .cyp-cta-text { max-width: 600px; margin: 0 auto 30px auto; color: #555; font-size: 1.1rem; line-height: 1.6; }
        .cyp-cta-btn { display: inline-block; background: #d4760e !important; color: white !important; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(212,118,14,0.3); transition: transform 0.2s; }
        .cyp-cta-btn:hover { transform: scale(1.03); }
    </style>
</head>
<body>

    <section class="cyp-hero">
        <div class="cyp-hero-overlay">
            <div class="cyp-container text-center">
                <span class="cyp-badge-white">Destination Guide</span>
                <h1 class="cyp-hero-title">Study in Cyprus</h1>
                <p class="cyp-hero-subtitle">Fast-track your international college entry with swift processing and zero mandatory language hurdles.</p>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Why Select Cyprus?</h2>
                <p>Cyprus bridges premium Mediterranean student environments with incredibly dynamic, streamlined entry requirements.</p>
            </div>
            
            <div class="cyp-grid-4">
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-ban"></i></div>
                    <h4>No IELTS Mandatory</h4>
                    <p>Secure full admission approval tracks based entirely on institutional alternative placement interviews.</p>
                </div>
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-bolt"></i></div>
                    <h4>Rapid Visa Tracks</h4>
                    <p>Experience swift, straightforward visa processing checks with absolute minimum documentation strain.</p>
                </div>
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-umbrella-beach"></i></div>
                    <h4>Mediterranean Quality</h4>
                    <p>Live, study, and thrive inside one of Europe's safest and most scenic resort lifestyle regions.</p>
                </div>
                <div class="cyp-card-advantage">
                    <div class="cyp-icon-wrapper"><i class="fa-solid fa-route"></i></div>
                    <h4>EU Pathway Potential</h4>
                    <p>Utilize global credit transfers to transition into major continental European university spaces.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Primary Enrollment Intakes</h2>
                <p>Cyprus supports multiple flexible student entry options over three primary calendar seasons.</p>
            </div>
            
            <div class="cyp-flex-row">
                <div class="cyp-intake-card cyp-border-red">
                    <span class="cyp-tag tag-primary">PRIMARY TRACK</span>
                    <h3>October Intake</h3>
                    <p>The definitive main academic session. Maximum selection choice across hospitality management, shipping lines, and computer branches.</p>
                    <p class="cyp-deadline"><i class="fa-regular fa-clock"></i> Deadline: Jun - Aug</p>
                </div>
                
                <div class="cyp-intake-card cyp-border-blue">
                    <span class="cyp-tag tag-secondary">MID-YEAR TRACK</span>
                    <h3>February / June Intakes</h3>
                    <p>Highly effective alternative enrollment blocks structured for ongoing accelerated management and computing streams.</p>
                    <p class="cyp-deadline"><i class="fa-regular fa-clock"></i> Deadline: Oct - Jan</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-flex-split">
                <div class="cyp-split-side">
                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&w=800&q=80" alt="Cyprus Coastline" class="cyp-round-img">
                </div>
                <div class="cyp-split-side">
                    <span class="cyp-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="cyp-desc">Review your highly affordable foundational study budgets for processing institutional files.</p>
                    
                    <div class="cyp-price-list">
                        <div class="cyp-price-row">
                            <span>Diploma Programs</span>
                            <strong>€3,000 - €4,500 / Yr</strong>
                        </div>
                        <div class="cyp-price-row">
                            <span>Undergraduate Bachelors</span>
                            <strong>€3,500 - €6,000 / Yr</strong>
                        </div>
                        <div class="cyp-price-row">
                            <span>Postgraduate Masters</span>
                            <strong>€4,000 - €7,500 / Yr</strong>
                        </div>
                        <div class="cyp-price-row no-border">
                            <span>Estimated Living Costs</span>
                            <strong>€400 - €550 / Mo</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Top Performing Cypriot Institutions</h2>
                <p>Secure internationally integrated qualifications fully mapping onto global validation criteria.</p>
            </div>
            <div class="cyp-grid-3">
                <div class="cyp-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="University of Nicosia">
                    <div class="cyp-uni-info">
                        <h3>University of Nicosia</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Nicosia</p>
                        <span class="cyp-uni-badge">Global Digital Leader</span>
                    </div>
                </div>
                <div class="cyp-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="EUC Campus">
                    <div class="cyp-uni-info">
                        <h3>European University Cyprus</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Nicosia</p>
                        <span class="cyp-uni-badge">Elite Medicine & Tech</span>
                    </div>
                </div>
                <div class="cyp-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="Frederick Campus">
                    <div class="cyp-uni-info">
                        <h3>Frederick University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Limassol / Nicosia</p>
                        <span class="cyp-uni-badge">Top Applied Engineering</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Minimize your structural tuition brackets utilizing automatic institutional support parameters.</p>
            </div>
            
            <div class="cyp-grid-4">
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Entrance Fee Rebates</h4>
                    <p>Automatic 30% to 50% tuition cost reductions applied natively across all incoming international files.</p>
                </div>
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Academic Excellence</h4>
                    <p>Specialized fee waivers unlocked during your study track by maintaining top term-end GPA marks.</p>
                </div>
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Shipping Sector Aid</h4>
                    <p>Targeted corporate grants dedicated to students entering maritime management modules.</p>
                </div>
                <div class="cyp-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Accommodation Grants</h4>
                    <p>Subsidized institutional housing allocations managed directly across specific private colleges.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-dark cyp-padding-block" style="color: white;">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="cyp-timeline">
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">01</div>
                    <div class="cyp-timeline-content">
                        <h3>Profile Clearance</h3>
                        <p>We review your general academic certifications to map the absolute best institutional options.</p>
                    </div>
                </div>
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">02</div>
                    <div class="cyp-timeline-content">
                        <h3>Fast Admission Filing</h3>
                        <p>Our operations wing handles college application channels to secure an immediate admission offer.</p>
                    </div>
                </div>
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">03</div>
                    <div class="cyp-timeline-content">
                        <h3>Migration Clearance</h3>
                        <p>We compile your foundational medical records and police certificates to satisfy ministerial checks.</p>
                    </div>
                </div>
                <div class="cyp-timeline-item">
                    <div class="cyp-timeline-number">04</div>
                    <div class="cyp-timeline-content">
                        <h3>Visa Sticker Finalization</h3>
                        <p>We manage your official entry visa file submission to ensure a swift, highly predictable passport return.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Review the primary processing metrics required across international application channels.</p>
            </div>
            
            <div class="cyp-grid-2">
                <div class="cyp-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="cyp-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate Tracks:</strong> High school graduation certificates with a baseline pass percentage above 50%.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate Tracks:</strong> A recognized graduation degree in any operational tracking branch.</span></li>
                    </ul>
                </div>
                
                <div class="cyp-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="cyp-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Language Exams:</strong> IELTS is fully optional; university internal clearance tests substitute seamlessly.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Interview Strategy:</strong> Clear basic conversational skills via quick digital evaluation tracks.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block">
        <div class="cyp-container">
            <div class="cyp-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Target operational industries providing excellent local and international placement paths.</p>
            </div>
            <div class="cyp-grid-3">
                <div class="cyp-field-card">
                    <i class="fa-solid fa-hotel field-icon"></i>
                    <h3>Hospitality & Tourism</h3>
                    <p>Gain direct clinical experience inside premier luxury Mediterranean resort chains and management frameworks.</p>
                </div>
                <div class="cyp-field-card">
                    <i class="fa-solid fa-ship field-icon"></i>
                    <h3>Maritime Management</h3>
                    <p>Train near major European commercial shipping networks specializing in logistics and fleet operations.</p>
                </div>
                <div class="cyp-field-card">
                    <i class="fa-solid fa-wallet field-icon"></i>
                    <h3>Business Administration</h3>
                    <p>Develop critical skills in entrepreneurial strategy, global financial structures, and team management tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-padding-block">
        <div class="cyp-container cyp-faq-container">
            <div class="cyp-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="cyp-accordion-wrapper">
                <div class="cyp-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Is Cyprus part of the Schengen zone?
                        <i class="fa-solid fa-plus cyp-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Cyprus is a full European Union (EU) member state, but operates on an individual national visa track, meaning direct Schengen travel requires a separate quick visa validation.</p>
                    </div>
                </div>

                <div class="cyp-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can international students work during their studies?
                        <i class="fa-solid fa-plus cyp-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, international student pass holders are legally permitted to work part-time for up to 20 hours per week, particularly inside thriving hospitality and service lines.</p>
                    </div>
                </div>

                <div class="cyp-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What exactly is bank solveney matching for Cyprus?
                        <i class="fa-solid fa-plus cyp-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>You must present basic financial statements showing sufficient coverage for one academic year of tuition and living expenses to satisfy Ministry checklist targets.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cyp-bg-tint cyp-padding-block text-center">
        <div class="cyp-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your Cyprus Processing</h2>
            <p class="cyp-cta-text">Our specialists will guide you through your university shortlisting and manage your direct immigration processing step by step.</p>
            <a href="#" class="btn-primary pill cyp-cta-btn" onclick="openForm()">Book Free Consultation</a>
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