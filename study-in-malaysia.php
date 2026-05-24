<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in Malaysia | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; box-sizing: border-box; background-color: #ffffff; }
        .mys-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .mys-padding-block { padding: 80px 0; }
        .mys-bg-tint { background-color: #f8f9fa; }
        .mys-bg-dark { background-color: #1a1a1a; }
        .mys-section-header { text-align: center; margin-bottom: 50px; }
        .mys-section-header h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #222; letter-spacing: -0.5px; }
        .mys-section-header p { max-width: 700px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.6; }

        /* --- Hero Section --- */
        .mys-hero {
            background: url('https://images.unsplash.com/photo-1540959733332-eab4deceeaf7?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative; min-height: 450px; display: flex; align-items: center;
        }
        .mys-hero-overlay { background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)); width: 100%; padding: 100px 0; }
        .mys-badge-white { color: #fff; border: 2px solid #fff; padding: 6px 18px; border-radius: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; }
        .mys-hero-title { color: white !important; font-size: 3.8rem; font-weight: 700; margin: 20px 0 10px 0; letter-spacing: -1px; }
        .mys-hero-subtitle { color: #e5e5e5 !important; font-size: 1.25rem; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        /* --- Grid Utilities --- */
        .mys-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; }
        .mys-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .mys-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px; }

        /* --- Advantage Cards --- */
        .mys-card-advantage { background: white; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; text-align: left; border: 1px solid #efefef; }
        .mys-card-advantage:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
        .mys-icon-wrapper { width: 60px; height: 60px; background: rgba(0, 142, 90, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .mys-icon-wrapper i { font-size: 1.6rem; color: #008e5a; }
        .mys-card-advantage h4 { font-size: 1.3rem; margin: 0 0 12px 0; color: #222; font-weight: 600; }
        .mys-card-advantage p { color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0; }

        /* --- Intakes Elements --- */
        .mys-flex-row { display: flex; flex-wrap: wrap; gap: 30px; }
        .mys-intake-card { background: white; padding: 40px; border-radius: 16px; flex: 1; min-width: 320px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); }
        .mys-border-red { border-top: 5px solid #008e5a; }
        .mys-border-blue { border-top: 5px solid #ee2c4a; }
        .mys-tag { padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.75rem; letter-spacing: 0.5px; display: inline-block; }
        .tag-primary { background: rgba(0,142,90,0.08); color: #008e5a; }
        .tag-secondary { background: rgba(238,44,74,0.08); color: #ee2c4a; }
        .mys-intake-card h3 { font-size: 1.5rem; margin: 20px 0 12px 0; color: #222; }
        .mys-intake-card p { color: #666; font-size: 1rem; line-height: 1.6; margin: 0; }
        .mys-deadline { font-weight: 600; margin-top: 25px !important; font-size: 0.95rem; color: #333; }
        .fa-regular.fa-clock { color: #008e5a; margin-right: 5px; }

        /* --- Split Layout Rows --- */
        .mys-flex-split { display: flex; flex-wrap: wrap; gap: 60px; align-items: center; }
        .mys-split-side { flex: 1; min-width: 400px; }
        @media (max-width: 768px) { .mys-split-side { min-width: 100%; } }
        .mys-round-img { width: 100%; height: auto; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.12); display: block; }
        .mys-sub-label { color: #008e5a; font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; display: block; margin-bottom: 8px; }
        .mys-desc { color: #666; line-height: 1.6; margin-bottom: 25px; font-size: 1.05rem; }
        .mys-price-row { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding: 15px 0; font-size: 1.05rem; }
        .mys-price-row strong { color: #008e5a; font-weight: 700; }

        /* --- Universities Modules --- */
        .mys-uni-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; }
        .mys-uni-card img { width: 100%; height: 220px; object-fit: cover; }
        .mys-uni-info { padding: 25px; }
        .mys-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px 0; color: #222; }
        .mys-uni-info p { color: #777; margin: 0 0 20px 0; font-size: 0.9rem; }
        .mys-uni-badge { background: #f1f3f5; padding: 6px 12px; border-radius: 6px; font-weight: 600; color: #495057; font-size: 0.85rem; }

        /* --- Scholarships Cards --- */
        .mys-scholarship-card { background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border-left: 5px solid #008e5a; text-align: left; }
        .mys-scholarship-card h4 { margin: 0 0 12px 0; font-size: 1.2rem; color: #222; font-weight: 600; }
        .mys-scholarship-card h4 i { color: #008e5a; margin-right: 6px; }

        /* --- Roadmaps Timeline --- */
        .mys-timeline { display: flex; flex-direction: column; gap: 25px; max-width: 900px; margin: 0 auto; }
        .mys-timeline-item { display: flex; gap: 30px; background: #252525; padding: 30px; border-radius: 12px; align-items: center; text-align: left; }
        .mys-timeline-number { font-size: 2.5rem; font-weight: 800; color: #008e5a; min-width: 50px; }
        .mys-timeline-content h3 { font-size: 1.3rem; margin: 0 0 5px 0; color: white; }
        .mys-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Criteria --- */
        .mys-requirement-box { background: #f8f9fa; padding: 40px; border-radius: 16px; border: 1px solid #e9ecef; text-align: left; }
        .mys-requirement-box h3 { font-size: 1.4rem; color: #222; margin: 0 0 25px 0; }
        .mys-requirement-box h3 i { color: #008e5a; margin-right: 8px; }
        .mys-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px; }
        .mys-list li { display: flex; gap: 15px; font-size: 1rem; line-height: 1.6; color: #444; }
        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields of Study --- */
        .mys-field-card { background: white; padding: 40px 30px; border-radius: 16px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        .field-icon { font-size: 2.5rem; color: #008e5a; margin-bottom: 20px; }
        .mys-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .mys-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- Accordion --- */
        .mys-faq-container { max-width: 850px; margin: 0 auto; }
        .mys-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .mys-accordion-item { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #edf2f7; text-align: left; }
        .faq-head { padding: 22px 30px; font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #222; user-select: none; }
        .mys-plus-icon { transition: transform 0.25s; color: #888; }
        .faq-body { max-height: 0; padding: 0 30px; overflow: hidden; transition: max-height 0.35s ease; background: #fcfcfc; }
        .faq-body p { padding-bottom: 22px; margin: 0; font-size: 1rem; color: #555; line-height: 1.6; }

        /* --- CTA Interface --- */
        .mys-cta-text { max-width: 600px; margin: 0 auto 30px auto; color: #555; font-size: 1.1rem; line-height: 1.6; }
        .mys-cta-btn { display: inline-block; background: #008e5a !important; color: white !important; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(0,142,90,0.3); transition: transform 0.2s; }
        .mys-cta-btn:hover { transform: scale(1.03); }
    </style>
</head>
<body>

    <section class="mys-hero">
        <div class="mys-hero-overlay">
            <div class="mys-container text-center">
                <span class="mys-badge-white">Destination Guide</span>
                <h1 class="mys-hero-title">Study in Malaysia</h1>
                <p class="mys-hero-subtitle">Attain world-renowned UK & global degree components within a highly cost-effective paradigm.</p>
            </div>
        </div>
    </section>

    <section class="mys-padding-block">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2>Why Select Malaysia?</h2>
                <p>Malaysia combines top-tier global branch university access with incredibly affordable living standards across Southeast Asia.</p>
            </div>
            
            <div class="mys-grid-4">
                <div class="mys-card-advantage">
                    <div class="mys-icon-wrapper"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h4>Global Branch Campuses</h4>
                    <p>Graduate from world-famous British and Australian universities located right inside Kuala Lumpur.</p>
                </div>
                <div class="mys-card-advantage">
                    <div class="mys-icon-wrapper"><i class="fa-solid fa-coins"></i></div>
                    <h4>Affordable Ecosystem</h4>
                    <p>Access high-quality modern lifestyles at a fraction of Western academic operational costs.</p>
                </div>
                <div class="mys-card-advantage">
                    <div class="mys-icon-wrapper"><i class="fa-solid fa-file-shield"></i></div>
                    <h4>Seamless Visa Processing</h4>
                    <p>Benefit from clear, predictable student pass tracks via the unified EMGS digital portal.</p>
                </div>
                <div class="mys-card-advantage">
                    <div class="mys-icon-wrapper"><i class="fa-solid fa-earth-asia"></i></div>
                    <h4>Cultural Affinity</h4>
                    <p>Thrive inside an exceptionally multicultural, peaceful, and universally welcoming society.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-bg-tint mys-padding-block">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2>Primary Enrollment Intakes</h2>
                <p>Plan your institutional milestones around Malaysia's flexible rolling entry seasons.</p>
            </div>
            
            <div class="mys-flex-row">
                <div class="mys-intake-card mys-border-red">
                    <span class="mys-tag tag-primary">MAIN ENTRY TRACK</span>
                    <h3>September Intake</h3>
                    <p>The standard primary semester framework. Opens complete program charts for computing fields, engineering tracks, and business branches.</p>
                    <p class="mys-deadline"><i class="fa-regular fa-clock"></i> Deadline: May - Jul</p>
                </div>
                
                <div class="mys-intake-card mys-border-blue">
                    <span class="mys-tag tag-secondary">MID-YEAR TRACK</span>
                    <h3>February / March Intake</h3>
                    <p>Highly prominent alternative intake window. Strongly suited for advanced medical paths, creative design modules, and humanities.</p>
                    <p class="mys-deadline"><i class="fa-regular fa-clock"></i> Deadline: Oct - Dec</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-padding-block">
        <div class="mys-container">
            <div class="mys-flex-split">
                <div class="mys-split-side">
                    <img src="https://images.unsplash.com/photo-1596422846543-75c6fc18a523?auto=format&fit=crop&w=800&q=80" alt="KL Skyline Towers" class="mys-round-img">
                </div>
                <div class="mys-split-side">
                    <span class="mys-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="mys-desc">Review your foundational educational outlays and lifestyle budgets transparently.</p>
                    
                    <div class="mys-price-list">
                        <div class="mys-price-row">
                            <span>Undergraduate Tuition</span>
                            <strong>MYR 18,000 - 35,000 / Yr</strong>
                        </div>
                        <div class="mys-price-row">
                            <span>Postgraduate Masters</span>
                            <strong>MYR 22,000 - 45,000 / Yr</strong>
                        </div>
                        <div class="mys-price-row">
                            <span>International Branch Tuition</span>
                            <strong>MYR 38,000 - 60,000 / Yr</strong>
                        </div>
                        <div class="mys-price-row no-border">
                            <span>Average Monthly Living Cost</span>
                            <strong>MYR 1,500 - 2,500 / Mo</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-bg-tint mys-padding-block">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2>Top World-Class Malaysian Institutions</h2>
                <p>Earn internationally accredited qualifications backed by rigorous educational frameworks.</p>
            </div>
            <div class="mys-grid-3">
                <div class="mys-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="UM Campus">
                    <div class="mys-uni-info">
                        <h3>Universiti Malaya (UM)</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Kuala Lumpur</p>
                        <span class="mys-uni-badge">QS World Rank: #60</span>
                    </div>
                </div>
                <div class="mys-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="Taylor's Campus">
                    <div class="mys-uni-info">
                        <h3>Taylor's University</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Selangor, Subang Jaya</p>
                        <span class="mys-uni-badge">Top Private Institution</span>
                    </div>
                </div>
                <div class="mys-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="Monash Malaysia">
                    <div class="mys-uni-info">
                        <h3>Monash University Malaysia</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Selangor, Sunway</p>
                        <span class="mys-uni-badge">Australian Branch Campus</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-padding-block">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Leverage competitive awards to completely optimize your educational investments.</p>
            </div>
            
            <div class="mys-grid-4">
                <div class="mys-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> MIS Funding Track</h4>
                    <p>Governmental master/doctoral support structures covering complete tuition and monthly living stipends.</p>
                </div>
                <div class="mys-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Private Merit Tiers</h4>
                    <p>Automatic tuition reductions ranging from 20% to 50% matching high previous GPA markers.</p>
                </div>
                <div class="mys-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> GLU Collective Grants</h4>
                    <p>Specialized institutional funding pools managed directly across top public engineering spaces.</p>
                </div>
                <div class="mys-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Research Fellowships</h4>
                    <p>Postgraduate stipends unlocked directly by joining faculty-led tech innovation projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-bg-dark mys-padding-block" style="color: white;">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="mys-timeline">
                <div class="mys-timeline-item">
                    <div class="mys-timeline-number">01</div>
                    <div class="mys-timeline-content">
                        <h3>Program Architecture</h3>
                        <p>We match your historical qualifications to identify optimal direct or dual-degree pathways.</p>
                    </div>
                </div>
                <div class="mys-timeline-item">
                    <div class="mys-timeline-number">02</div>
                    <div class="mys-timeline-content">
                        <h3>Offer Letter Processing</h3>
                        <p>Our operations division processes university portals to secure your fast unconditional offer.</p>
                    </div>
                </div>
                <div class="mys-timeline-item">
                    <div class="mys-timeline-number">03</div>
                    <div class="mys-timeline-content">
                        <h3>EMGS Portal Management</h3>
                        <p>We lodge and manage your student pass files through the unified Education Malaysia system.</p>
                    </div>
                </div>
                <div class="mys-timeline-item">
                    <div class="mys-timeline-number">04</div>
                    <div class="mys-timeline-content">
                        <h3>VAL & Sticker Issuance</h3>
                        <p>We secure your physical Visa Approval Letter (VAL), paving a direct path for smooth border entry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-padding-block">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Verify your foundational eligibility metrics prior to processing institutional tracks.</p>
            </div>
            
            <div class="mys-grid-2">
                <div class="mys-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="mys-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate Level:</strong> High School completion certificates showing a minimum 60% average.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate Level:</strong> A recognized Bachelor's degree with a baseline score above 2.50 on a 4.00 GPA scale.</span></li>
                    </ul>
                </div>
                
                <div class="mys-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="mys-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>IELTS Tracking:</strong> Standard 5.5 bands baseline for undergraduate; straight 6.0 bands for master tracks.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Alternative Routes:</strong> PTE or Duolingo patterns are universally integrated across private setups.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-bg-tint mys-padding-block">
        <div class="mys-container">
            <div class="mys-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Focus your academic progression inside highly active economic sectors.</p>
            </div>
            <div class="mys-grid-3">
                <div class="mys-field-card">
                    <i class="fa-solid fa-network-wired field-icon"></i>
                    <h3>Information Technology</h3>
                    <p>Specialize in cloud engineering, mobile application structures, and active data logic architectures.</p>
                </div>
                <div class="mys-field-card">
                    <i class="fa-solid fa-business-time field-icon"></i>
                    <h3>International Business</h3>
                    <p>Master supply-chain logistics, global finance frameworks, and executive operational leadership models.</p>
                </div>
                <div class="mys-field-card">
                    <i class="fa-solid fa-compass-drafting field-icon"></i>
                    <h3>Advanced Engineering</h3>
                    <p>Access modern infrastructure training via mechanical, electrical, and structural engineering models.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-padding-block">
        <div class="mys-container mys-faq-container">
            <div class="mys-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="mys-accordion-wrapper">
                <div class="mys-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What exactly is an EMGS Approval Letter?
                        <i class="fa-solid fa-plus mys-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>EMGS stands for Education Malaysia Global Services. It is the formal governmental processing wing that audits international student documentation to issue your official digital Visa Approval Letter (VAL).</p>
                    </div>
                </div>

                <div class="mys-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can I transfer to a Western campus mid-course?
                        <i class="fa-solid fa-plus mys-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Yes, many private universities feature seamless credit-transfer systems or structured twinning frameworks (1+2 or 2+1 configurations) into the UK, Australia, or Canada.</p>
                    </div>
                </div>

                <div class="mys-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Are part-time work pathways permitted?
                        <i class="fa-solid fa-plus mys-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Students can work for up to 20 hours per week exclusively during semester breaks or long institutional holidays, subject to strict immigration clearance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mys-bg-tint mys-padding-block text-center">
        <div class="mys-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your Malaysian Processing</h2>
            <p class="mys-cta-text">Our specialists will guide you through your university shortlisting and manage your EMGS visa tracking step by step.</p>
            <a href="#" class="btn-primary pill mys-cta-btn" onclick="openForm()">Book Free Consultation</a>
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