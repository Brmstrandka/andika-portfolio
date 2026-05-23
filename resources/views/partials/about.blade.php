<section class="section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- LEFT: Text --}}
            <div class="col-lg-6 reveal">
                <div class="section-label">
                    <span>01</span> <span data-i18n="about.label">About Me</span>
                </div>
                <h2 class="section-title">
                    <span data-i18n="about.title1">Driven by curiosity,</span><br>
                    <span data-i18n="about.title2">built on</span> <em data-i18n="about.title2em">technology.</em>
                </h2>
                <p class="section-subtitle mb-4" data-i18n="about.desc">
                    Saya adalah individu yang antusias terhadap teknologi dengan pengalaman
                    di Front-End Development, IoT, troubleshooting, dan analisis data.
                    Selalu mencari cara baru untuk menciptakan solusi yang efisien dan elegan.
                </p>
                <div class="d-flex gap-3 flex-wrap mt-2">
                    <button class="btn-primary-custom"
                            onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})"
                            data-i18n="about.cta">
                        Let's Connect
                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                  stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- RIGHT: Stats & Info Cards --}}
            <div class="col-lg-6">
                <div class="row g-3 reveal-group">

                    <div class="col-6">
                        <div class="glass-card stat-item">
                            <div class="stat-number">1+</div>
                            <div class="stat-label" data-i18n="about.years">Years Experience</div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="glass-card stat-item">
                            <div class="stat-number">4+</div>
                            <div class="stat-label" data-i18n="about.projects">Projects Done</div>
                        </div>
                    </div>

                    <!-- Education Card -->
                    <div class="col-6">
                        <div class="glass-card">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" 
                                     fill="none" stroke="currentColor" stroke-width="1.5" 
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                                </svg>
                            </div>
                            <div class="card-title" data-i18n="about.edutitle">Education</div>
                            <div class="card-text" data-i18n="about.edutxt">S1 Rekayasa Sistem Komputer · INSTIKI</div>
                        </div>
                    </div>

                    <!-- Experience Card -->
                    <div class="col-6">
                        <div class="glass-card">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" 
                                     fill="none" stroke="currentColor" stroke-width="1.5" 
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="14" rx="2"/>
                                    <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                                    <line x1="12" y1="12" x2="12" y2="12"/>
                                    <path d="M2 13h20"/>
                                </svg>
                            </div>
                            <div class="card-title" data-i18n="about.exptitle">Experience</div>
                            <div class="card-text" data-i18n="about.exptxt">Front End Dev · DPMD Gianyar · Freelancer</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
