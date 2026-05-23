<section class="hero" id="home">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- LEFT: Text Content --}}
            <div class="col-lg-7">

                <div class="hero-eyebrow reveal" data-i18n="hero.eyebrow">Portfolio 2026</div>

                <h1 class="hero-title reveal">
                    I Gusti Made<br>
                    <span class="accent-line">Andika Bramastra</span>
                </h1>

                <p class="hero-desc reveal" data-i18n="hero.desc">
                    IT Enthusiast, Front-End Developer, dan IoT Engineer -
                    membangun antarmuka modern dan sistem cerdas dengan
                    passion terhadap teknologi.
                </p>

                <div class="hero-tags reveal">
                    <span class="hero-tag" data-i18n="hero.tag1">Front-End Development</span>
                    <span class="hero-tag" data-i18n="hero.tag2">Internet of Things</span>
                    <span class="hero-tag" data-i18n="hero.tag3">IT Troubleshooting</span>
                </div>

                <div class="hero-cta reveal">
                    <button class="btn-primary-custom"
                            onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})"
                            data-i18n="hero.cta1">
                        Hubungi Saya
                        <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                  stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="btn-secondary-custom"
                            onclick="document.getElementById('projects').scrollIntoView({behavior:'smooth'})"
                            data-i18n="hero.cta2">
                        Lihat Projek
                    </button>
                </div>

            </div>

            {{-- RIGHT: Avatar Visual --}}
            <div class="col-lg-5 hero-visual">
                <div class="hero-avatar-wrap">
                    <div class="hero-ring"></div>
                    <div class="hero-ring hero-ring-2"></div>
                    <div class="hero-avatar-box">
                        <img src="{{ asset('images/profile.jpeg') }}" 
                             style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <div class="hero-badge hero-badge-1">
                        <span class="badge-dot"></span><span data-i18n="hero.badge1">Available for work</span>
                    </div>
                    <div class="hero-badge hero-badge-2">
                        ⚡ IoT + Web Dev
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
