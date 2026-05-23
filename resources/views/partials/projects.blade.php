<section class="section" id="projects">
    <div class="container">

        {{-- Header --}}
        <div class="d-flex align-items-end justify-content-between mb-5 flex-wrap gap-3 reveal">
            <div>
                <div class="section-label">
                    <span>03</span> <span data-i18n="projects.label">Projects</span>
                </div>
                <h2 class="section-title mb-0">
                    <span data-i18n="projects.title">Featured</span> <em data-i18n="projects.titleem">Work.</em>
                </h2>
            </div>
            <p class="section-subtitle m-0" style="max-width:320px;" data-i18n="projects.desc">
                Projek dan pengalaman pilihan yang pernah saya kerjakan.
            </p>
        </div>

        {{-- Grid --}}
        <div class="row g-4 reveal-group">

            {{-- PROJECT 1: IoT Monitoring --}}
            <div class="col-lg-6">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#iotModal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1200&auto=format&fit=crop"
                             alt="IoT Monitoring System">
                        <div class="project-overlay"></div>
                        <span class="project-cat">IoT</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title">IoT Monitoring System</div>
                        <p class="project-desc" data-i18n="proj.iot.desc">
                            Monitoring suhu dan kelembaban menggunakan ESP32,
                            Blynk IoT, dan Telegram Bot notification.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">ESP32</span>
                                <span class="tech-badge" style="opacity:.5"> · DHT11</span>
                                <span class="tech-badge" style="opacity:.5"> · Blynk</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 2: DPMD Dashboard --}}
            <div class="col-lg-6">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#dpmdModal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop"
                             alt="DPMD Gianyar Dashboard">
                        <div class="project-overlay"></div>
                        <span class="project-cat">Web Dev</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title">DPMD Gianyar Dashboard</div>
                        <p class="project-desc" data-i18n="proj.dpmd.desc">
                            Pengembangan UI/UX dashboard dan antarmuka website
                            untuk instansi pemerintah daerah.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge" style="opacity:.5"> · Bootstrap</span>
                                <span class="tech-badge" style="opacity:.5"> · JS</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 3: Alcohol Detection --}}
            <div class="col-lg-6">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#alcoholModal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=1200&auto=format&fit=crop"
                             alt="Alcohol Detection IoT">
                        <div class="project-overlay"></div>
                        <span class="project-cat">IoT</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title">Alcohol Detection IoT</div>
                        <p class="project-desc" data-i18n="proj.alcohol.desc">
                            Sistem deteksi kadar alkohol realtime menggunakan
                            sensor MQ-3 dan ESP32 dengan web monitoring.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">MQ-3</span>
                                <span class="tech-badge" style="opacity:.5"> · ESP32</span>
                                <span class="tech-badge" style="opacity:.5"> · Web</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 4: Freelance --}}
            <div class="col-lg-6">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#freelanceModal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop"
                             alt="Freelance & Digital Work">
                        <div class="project-overlay"></div>
                        <span class="project-cat">Freelance</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title" data-i18n="proj.freelance.title">Freelance & Digital Work</div>
                        <p class="project-desc" data-i18n="proj.freelance.desc">
                            Rekapitulasi data mahasiswa, pengelolaan absensi,
                            WFH assistant lecturer, dan cameraman event.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">Data</span>
                                <span class="tech-badge" style="opacity:.5"> · Admin</span>
                                <span class="tech-badge" style="opacity:.5"> · Camera</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- ── PROTOTYPE SECTION ── --}}
        <div class="d-flex align-items-end justify-content-between mt-5 mb-4 flex-wrap gap-3 reveal">
            <div>
                <div class="section-label" style="margin-bottom: 6px;">
                    <span>↗</span> <span data-i18n="projects.proto.label">Prototypes</span>
                </div>
                <h3 class="section-title mb-0" style="font-size: clamp(20px, 3vw, 28px);">
                    <span data-i18n="projects.proto.title">Learning</span> <em data-i18n="projects.proto.em">Projects.</em>
                </h3>
            </div>
            <p class="section-subtitle m-0" style="max-width:320px;" data-i18n="projects.proto.desc">
                Website prototype yang saya bangun sebagai eksplorasi dan latihan mandiri.
            </p>
        </div>

        <div class="row g-4 reveal-group">

            {{-- PROTOTYPE 1: RecellBram --}}
            <div class="col-lg-4">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#recellModal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?q=80&w=800&auto=format&fit=crop"
                             alt="RecellBram iPhone Store">
                        <div class="project-overlay"></div>
                        <span class="project-cat">Prototype</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title">RecellBram Store</div>
                        <p class="project-desc" data-i18n="proj.recell.desc">
                            Toko iPhone second & brand new — landing page
                            dengan koleksi produk, blog, dan store locator.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">HTML</span>
                                <span class="tech-badge" style="opacity:.5"> · CSS</span>
                                <span class="tech-badge" style="opacity:.5"> · JS</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROTOTYPE 2: Travel Website --}}
            <div class="col-lg-4">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#travelModal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=800&auto=format&fit=crop"
                             alt="Explore Bali Travel Website">
                        <div class="project-overlay"></div>
                        <span class="project-cat">Prototype</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title" data-i18n="proj.travel.title">Explore Bali Travel</div>
                        <p class="project-desc" data-i18n="proj.travel.desc">
                            Website travel destinasi wisata Bali — menampilkan
                            Tanah Lot, Uluwatu, Tegalalang, dan banyak lagi.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">HTML</span>
                                <span class="tech-badge" style="opacity:.5"> · CSS</span>
                                <span class="tech-badge" style="opacity:.5"> · JS</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROTOTYPE 3: Portfolio v1 --}}
            <div class="col-lg-4">
                <div class="project-card"
                     data-bs-toggle="modal"
                     data-bs-target="#portfolioV1Modal">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=800&auto=format&fit=crop"
                             alt="Portfolio Website v1">
                        <div class="project-overlay"></div>
                        <span class="project-cat">Prototype</span>
                    </div>
                    <div class="project-body">
                        <div class="project-title">Portfolio Website v1</div>
                        <p class="project-desc" data-i18n="proj.portfolio1.desc">
                            Versi pertama website portofolio pribadi —
                            titik awal perjalanan Front-End Development saya.
                        </p>
                        <div class="project-footer">
                            <div>
                                <span class="tech-badge">HTML</span>
                                <span class="tech-badge" style="opacity:.5"> · CSS</span>
                                <span class="tech-badge" style="opacity:.5"> · JS</span>
                            </div>
                            <button class="view-btn">
                                <span data-i18n="projects.viewdetail">View detail</span>
                                <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
                                    <path d="M2 7H12M12 7L8 3M12 7L8 11"
                                          stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
