<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study in the UK | EduBdesh</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; box-sizing: border-box; background-color: #ffffff; }
        .uk-container { max-width: 1200px; margin: 0 auto; padding: 0 20px; box-sizing: border-box; }
        .uk-padding-block { padding: 80px 0; }
        .uk-bg-tint { background-color: #f8f9fa; }
        .uk-bg-dark { background-color: #1a1a1a; }
        .uk-section-header { text-align: center; margin-bottom: 50px; }
        .uk-section-header h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #222; letter-spacing: -0.5px; }
        .uk-section-header p { max-width: 700px; margin: 0 auto; color: #666; font-size: 1.1rem; line-height: 1.6; }

        /* --- Hero Section --- */
        .uk-hero {
            background: url('https://images.unsplash.com/photo-1513635269975-59663e0ca1ad?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            position: relative; min-height: 450px; display: flex; align-items: center;
        }
        .uk-hero-overlay { background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)); width: 100%; padding: 100px 0; }
        .uk-badge-white { color: #fff; border: 2px solid #fff; padding: 6px 18px; border-radius: 25px; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; display: inline-block; }
        .uk-hero-title { color: white !important; font-size: 3.8rem; font-weight: 700; margin: 20px 0 10px 0; letter-spacing: -1px; }
        .uk-hero-subtitle { color: #e5e5e5 !important; font-size: 1.25rem; max-width: 700px; margin: 0 auto; line-height: 1.6; }

        /* --- Grid Utilities --- */
        .uk-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 30px; }
        .uk-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .uk-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 40px; }

        /* --- Advantage Cards --- */
        .uk-card-advantage { background: white; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); transition: all 0.3s ease; text-align: left; border: 1px solid #efefef; }
        .uk-card-advantage:hover { transform: translateY(-8px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
        .uk-icon-wrapper { width: 60px; height: 60px; background: rgba(0, 36, 125, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; }
        .uk-icon-wrapper i { font-size: 1.6rem; color: #00247d; }
        .uk-card-advantage h4 { font-size: 1.3rem; margin: 0 0 12px 0; color: #222; font-weight: 600; }
        .uk-card-advantage p { color: #666; font-size: 0.95rem; line-height: 1.6; margin: 0; }

        /* --- Intakes Elements --- */
        .uk-flex-row { display: flex; flex-wrap: wrap; gap: 30px; }
        .uk-intake-card { background: white; padding: 40px; border-radius: 16px; flex: 1; min-width: 320px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); }
        .uk-border-red { border-top: 5px solid #00247d; }
        .uk-border-blue { border-top: 5px solid #cf142b; }
        .uk-tag { padding: 6px 14px; border-radius: 20px; font-weight: 700; font-size: 0.75rem; letter-spacing: 0.5px; display: inline-block; }
        .tag-primary { background: rgba(0,36,125,0.08); color: #00247d; }
        .tag-secondary { background: rgba(207,20,43,0.08); color: #cf142b; }
        .uk-intake-card h3 { font-size: 1.5rem; margin: 20px 0 12px 0; color: #222; }
        .uk-intake-card p { color: #666; font-size: 1rem; line-height: 1.6; margin: 0; }
        .uk-deadline { font-weight: 600; margin-top: 25px !important; font-size: 0.95rem; color: #333; }
        .fa-regular.fa-clock { color: #00247d; margin-right: 5px; }

        /* --- Split Layout Rows --- */
        .uk-flex-split { display: flex; flex-wrap: wrap; gap: 60px; align-items: center; }
        .uk-split-side { flex: 1; min-width: 400px; }
        @media (max-width: 768px) { .uk-split-side { min-width: 100%; } }
        .uk-round-img { width: 100%; height: auto; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.12); display: block; }
        .uk-sub-label { color: #00247d; font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; display: block; margin-bottom: 8px; }
        .uk-desc { color: #666; line-height: 1.6; margin-bottom: 25px; font-size: 1.05rem; }
        .uk-price-row { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding: 15px 0; font-size: 1.05rem; }
        .uk-price-row strong { color: #00247d; font-weight: 700; }

        /* --- Universities Modules --- */
        .uk-uni-card { background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; }
        .uk-uni-card img { width: 100%; height: 220px; object-fit: cover; }
        .uk-uni-info { padding: 25px; }
        .uk-uni-info h3 { font-size: 1.3rem; margin: 0 0 8px 0; color: #222; }
        .uk-uni-info p { color: #777; margin: 0 0 20px 0; font-size: 0.9rem; }
        .uk-uni-badge { background: #f1f3f5; padding: 6px 12px; border-radius: 6px; font-weight: 600; color: #495057; font-size: 0.85rem; }

        /* --- Scholarships Cards --- */
        .uk-scholarship-card { background: white; padding: 35px 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.03); border-left: 5px solid #00247d; text-align: left; }
        .uk-scholarship-card h4 { margin: 0 0 12px 0; font-size: 1.2rem; color: #222; font-weight: 600; }
        .uk-scholarship-card h4 i { color: #00247d; margin-right: 6px; }

        /* --- Roadmaps Timeline --- */
        .uk-timeline { display: flex; flex-direction: column; gap: 25px; max-width: 900px; margin: 0 auto; }
        .uk-timeline-item { display: flex; gap: 30px; background: #252525; padding: 30px; border-radius: 12px; align-items: center; text-align: left; }
        .uk-timeline-number { font-size: 2.5rem; font-weight: 800; color: #00247d; min-width: 50px; }
        .uk-timeline-content h3 { font-size: 1.3rem; margin: 0 0 5px 0; color: white; }
        .uk-timeline-content p { color: #aaa; margin: 0; line-height: 1.5; font-size: 0.95rem; }

        /* --- Entry Criteria --- */
        .uk-requirement-box { background: #f8f9fa; padding: 40px; border-radius: 16px; border: 1px solid #e9ecef; text-align: left; }
        .uk-requirement-box h3 { font-size: 1.4rem; color: #222; margin: 0 0 25px 0; }
        .uk-requirement-box h3 i { color: #00247d; margin-right: 8px; }
        .uk-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 20px; }
        .uk-list li { display: flex; gap: 15px; font-size: 1rem; line-height: 1.6; color: #444; }
        .check-green { color: #28a745; font-size: 1.2rem; margin-top: 2px; }

        /* --- Fields of Study --- */
        .uk-field-card { background: white; padding: 40px 30px; border-radius: 16px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03); border: 1px solid #eee; }
        .field-icon { font-size: 2.5rem; color: #00247d; margin-bottom: 20px; }
        .uk-field-card h3 { margin: 0 0 12px 0; font-size: 1.3rem; color: #222; }
        .uk-field-card p { color: #666; margin: 0; font-size: 0.95rem; line-height: 1.6; }

        /* --- Accordion --- */
        .uk-faq-container { max-width: 850px; margin: 0 auto; }
        .uk-accordion-wrapper { display: flex; flex-direction: column; gap: 15px; }
        .uk-accordion-item { background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid #edf2f7; text-align: left; }
        .faq-head { padding: 22px 30px; font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; color: #222; user-select: none; }
        .uk-plus-icon { transition: transform 0.25s; color: #888; }
        .faq-body { max-height: 0; padding: 0 30px; overflow: hidden; transition: max-height 0.35s ease; background: #fcfcfc; }
        .faq-body p { padding-bottom: 22px; margin: 0; font-size: 1rem; color: #555; line-height: 1.6; }

        /* --- CTA Interface --- */
        .uk-cta-text { max-width: 600px; margin: 0 auto 30px auto; color: #555; font-size: 1.1rem; line-height: 1.6; }
        .uk-cta-btn { display: inline-block; background: #00247d !important; color: white !important; padding: 14px 40px; border-radius: 30px; text-decoration: none; font-weight: 600; font-size: 1.05rem; box-shadow: 0 6px 20px rgba(0,36,125,0.3); transition: transform 0.2s; }
        .uk-cta-btn:hover { transform: scale(1.03); }
    </style>
</head>
<body>

    <section class="uk-hero">
        <div class="uk-hero-overlay">
            <div class="uk-container text-center">
                <span class="uk-badge-white">Destination Guide</span>
                <h1 class="uk-hero-title">Study in the UK</h1>
                <p class="uk-hero-subtitle">Fast-track your global career with highly respected academic programs and heritage universities.</p>
            </div>
        </div>
    </section>

    <section class="uk-padding-block">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2>Why Select the United Kingdom?</h2>
                <p>The UK combines intensive, accelerated program layouts with direct 2-year post-study professional stay entitlements.</p>
            </div>
            
            <div class="uk-grid-4">
                <div class="uk-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-hourglass-half"></i></div>
                    <h4>1-Year Master Degrees</h4>
                    <p>Complete your postgraduate course inside 12 months, optimizing financial outlays and speed to employment.</p>
                </div>
                <div class="uk-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-briefcase"></i></div>
                    <h4>Graduate Route Visa</h4>
                    <p>Live, locate, and accept full-time roles across any local operational firm for 2 complete years post-study.</p>
                </div>
                <div class="uk-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-ranking-star"></i></div>
                    <h4>Global Prestige</h4>
                    <p>Secure degrees validated across every major worldwide enterprise sector and corporate grid.</p>
                </div>
                <div class="uk-card-advantage">
                    <div class="can-icon-wrapper"><i class="fa-solid fa-sterling-sign"></i></div>
                    <h4>Flexible Requirements</h4>
                    <p>Access high entrance tier options with specialized language testing routes or direct academic equivalents.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-bg-tint uk-padding-block">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2>Primary Enrollment Windows</h2>
                <p>Align your university processing strategy directly to the traditional autumn or winter intake setups.</p>
            </div>
            
            <div class="uk-flex-row">
                <div class="uk-intake-card uk-border-red">
                    <span class="uk-tag tag-primary">PRIMARY INTAKE</span>
                    <h3>September / October</h3>
                    <p>The largest enrollment structural window. Access all funding paths, complete college lists, and standard academic tracks.</p>
                    <p class="uk-deadline"><i class="fa-regular fa-clock"></i> Deadline: May - Jul</p>
                </div>
                
                <div class="uk-intake-card uk-border-blue">
                    <span class="uk-tag tag-secondary">MID-YEAR INTAKE</span>
                    <h3>January / February</h3>
                    <p>Highly dynamic winter intake configuration. Ideal for executive management, analytics branches, and technology suites.</p>
                    <p class="uk-deadline"><i class="fa-regular fa-clock"></i> Deadline: Sep - Nov</p>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-padding-block">
        <div class="uk-container">
            <div class="uk-flex-split">
                <div class="uk-split-side">
                    <img src="https://images.unsplash.com/photo-1486299267070-83823f5448dd?auto=format&fit=crop&w=800&q=80" alt="London Big Ben" class="uk-round-img">
                </div>
                <div class="uk-split-side">
                    <span class="uk-sub-label">Financial Roadmap</span>
                    <h2>Tuition Fees & Cost of Living</h2>
                    <p class="uk-desc">Review your foundational maintenance and structural institutional expenditures safely.</p>
                    
                    <div class="uk-price-list">
                        <div class="uk-price-row">
                            <span>Undergraduate Bachelors</span>
                            <strong>£14,000 - £26,000 / Yr</strong>
                        </div>
                        <div class="uk-price-row">
                            <span>Postgraduate Masters</span>
                            <strong>£15,000 - £30,000 / Yr</strong>
                        </div>
                        <div class="uk-price-row">
                            <span>Living Funds (Inside London)</span>
                            <strong>£1,334 / Mo</strong>
                        </div>
                        <div class="uk-price-row no-border">
                            <span>Living Funds (Outer London)</span>
                            <strong>£1,023 / Mo</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-bg-tint uk-padding-block">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2>Top World-Class UK Institutions</h2>
                <p>Gain world-recognized qualification tracks backed by historical academic research standards.</p>
            </div>
            <div class="uk-grid-3">
                <div class="uk-uni-card">
                    <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=500&q=80" alt="Oxford">
                    <div class="uk-uni-info">
                        <h3>University of Oxford</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Oxfordshire, Oxford</p>
                        <span class="uk-uni-badge">QS World Rank: #3</span>
                    </div>
                </div>
                <div class="uk-uni-card">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=500&q=80" alt="Cambridge">
                    <div class="uk-uni-info">
                        <h3>University of Cambridge</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Cambridgeshire, Cambridge</p>
                        <span class="uk-uni-badge">QS World Rank: #5</span>
                    </div>
                </div>
                <div class="uk-uni-card">
                    <img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?auto=format&fit=crop&w=500&q=80" alt="UCL">
                    <div class="uk-uni-info">
                        <h3>UCL (University College London)</h3>
                        <p><i class="fa-solid fa-location-dot"></i> Greater London, London</p>
                        <span class="uk-uni-badge">QS World Rank: #9</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-padding-block">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2>Top Scholarships for International Students</h2>
                <p>Leverage premium funding structures to offset your professional development costs.</p>
            </div>
            
            <div class="uk-grid-4">
                <div class="uk-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Chevening Funding</h4>
                    <p>Fully managed governmental master-level provisions covering total lifestyle and tuition overheads.</p>
                </div>
                <div class="uk-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Commonwealth Grants</h4>
                    <p>Targeted elite funding architectures dedicated to high-impact development students across specific states.</p>
                </div>
                <div class="uk-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> GREAT Scholarships</h4>
                    <p>Joint academic enterprise provisions enabling straight £10,000 structural support offsets.</p>
                </div>
                <div class="uk-scholarship-card">
                    <h4><i class="fa-solid fa-award"></i> Vice-Chancellor Merit</h4>
                    <p>Automated evaluation grants scaling up to £5,000 applied directly via your previous GPA metrics.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-bg-dark uk-padding-block" style="color: white;">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2 style="color: white;">Our Roadmap to Your Enrollment</h2>
                <p style="color: #ccc;">We streamline complex documentation down into a clear, stress-free milestone application track.</p>
            </div>
            <div class="uk-timeline">
                <div class="uk-timeline-item">
                    <div class="uk-timeline-number">01</div>
                    <div class="uk-timeline-content">
                        <h3>Profile Review</h3>
                        <p>We check your structural transcripts to optimize college selection patterns effectively.</p>
                    </div>
                </div>
                <div class="uk-timeline-item">
                    <div class="uk-timeline-number">02</div>
                    <div class="uk-timeline-content">
                        <h3>UCAS & Direct Submissions</h3>
                        <p>Our processing division files application sets to secure conditional or definitive unconditional offers.</p>
                    </div>
                </div>
                <div class="uk-timeline-item">
                    <div class="uk-timeline-number">03</div>
                    <div class="uk-timeline-content">
                        <h3>CAS Issuance Phase</h3>
                        <p>We ensure fast Confirmation of Acceptance for Studies (CAS) clearance by aligning required deposits smoothly.</p>
                    </div>
                </div>
                <div class="uk-timeline-item">
                    <div class="uk-timeline-number">04</div>
                    <div class="uk-timeline-content">
                        <h3>Student Visa Filing</h3>
                        <p>We manage your complete digital file processing securely via the official GOV.UK immigration portal infrastructure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-padding-block">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2>Academic & Language Entry Thresholds</h2>
                <p>Confirm the standard benchmarks used to process global applications across the UK.</p>
            </div>
            
            <div class="uk-grid-2">
                <div class="uk-requirement-box">
                    <h3><i class="fa-solid fa-book-open"></i> Scholastic Metrics</h3>
                    <ul class="can-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Undergraduate:</strong> Foundation routes from 55%; direct bachelors entries near 65% across standard profiles.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>Postgraduate:</strong> Local 3 or 4 year bachelors carrying a minimum equivalent score of 55% or higher.</span></li>
                    </ul>
                </div>
                
                <div class="uk-requirement-box">
                    <h3><i class="fa-solid fa-language"></i> Language Benchmarks</h3>
                    <ul class="can-list">
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>IELTS Tracking:</strong> Overall 6.0 bands for undergraduate; straight 6.5 bands baseline for most master-level platforms.</span></li>
                        <li><i class="fa-solid fa-circle-check check-green"></i> <span><strong>MOI Waivers:</strong> Select modern institutions accept language proofs via previous English instruction profiles.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-bg-tint uk-padding-block">
        <div class="uk-container">
            <div class="uk-section-header">
                <h2>In-Demand Fields of Study</h2>
                <p>Optimize your educational pathways inside segments carrying massive employment data metrics.</p>
            </div>
            <div class="uk-grid-3">
                <div class="uk-field-card">
                    <i class="fa-solid fa-calculator field-icon"></i>
                    <h3>Finance & Fintech</h3>
                    <p>Train near the epicenters of global banking via high-tier analytics, investment strategies, and modern risk modeling modules.</p>
                </div>
                <div class="uk-field-card">
                    <i class="fa-solid fa-microchip field-icon"></i>
                    <h3>Data Science & AI</h3>
                    <p>Specialize in advanced data science modules, machine automation protocols, and security engineering architectures.</p>
                </div>
                <div class="uk-field-card">
                    <i class="fa-solid fa-scale-balanced field-icon"></i>
                    <h3>International Law</h3>
                    <p>Gain direct clinical experience through globally recognized corporate legal frameworks and LLM tracks.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-padding-block">
        <div class="uk-container uk-faq-container">
            <div class="uk-section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Crucial contextual updates concerning student stream visas and work pathways.</p>
            </div>
            
            <div class="uk-accordion-wrapper">
                <div class="uk-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        What precisely is the IHS and how is it paid?
                        <i class="fa-solid fa-plus uk-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>The Immigration Health Surcharge (IHS) is paid upfront digitally alongside your visa fee, granting complete access to the UK's National Health Service (NHS).</p>
                    </div>
                </div>

                <div class="uk-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Can I switch to a work visa before my course ends?
                        <i class="fa-solid fa-plus uk-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Under modern guidelines, student path holders cannot transition into an active Skilled Worker visa until their degree modules are fully finished.</p>
                    </div>
                </div>

                <div class="uk-accordion-item">
                    <div class="faq-head" onclick="toggleAccordion(this)">
                        Are family members permitted under modern rules?
                        <i class="fa-solid fa-plus uk-plus-icon"></i>
                    </div>
                    <div class="faq-body">
                        <p>Dependents are limited to postgraduate research programs (like PhDs or research-based masters) or specific government-sponsored tracks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-bg-tint uk-padding-block text-center">
        <div class="uk-container">
            <h2 style="font-size: 2.4rem; margin-bottom: 10px; color: #222;">Start Your UK Admission Processing</h2>
            <p class="uk-cta-text">Our counselors will manage your GTE verification procedures and visa document compilation phases seamlessly.</p>
            <a href="#" class="btn-primary pill uk-cta-btn" onclick="openForm()">Book Free Consultation</a>
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