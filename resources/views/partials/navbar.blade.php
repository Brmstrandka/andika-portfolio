<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand" href="#">Andika.</a>

        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1 py-3 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#about" data-i18n="nav.about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills" data-i18n="nav.skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects" data-i18n="nav.projects">Projects</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn-primary-custom" href="#contact"
                       style="padding:9px 22px; font-size:12.5px;"
                       data-i18n="nav.contact">Contact</a>
                </li>

                {{-- ── TOGGLES ── --}}
                <li class="nav-item ms-lg-2">
                    <div class="nav-toggles">

                        {{-- Language Toggle --}}
                        <div class="toggle-pill" title="Switch language">
                            <button class="toggle-pill-btn lang-btn active"
                                    data-lang="id"
                                    onclick="setLang('id')">IDN</button>
                            <button class="toggle-pill-btn lang-btn"
                                    data-lang="en"
                                    onclick="setLang('en')">ENG</button>
                        </div>

                        {{-- Theme Toggle --}}
                        <button class="theme-toggle" id="themeToggle"
                                onclick="toggleTheme()"
                                title="Switch to Light Mode"
                                aria-label="Toggle dark/light mode">
                            {{-- Moon icon (shown in dark mode) --}}
                            <svg class="icon-moon" width="15" height="15" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                            </svg>
                            {{-- Sun icon (shown in light mode) --}}
                            <svg class="icon-sun" width="15" height="15" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"/>
                                <line x1="12" y1="1" x2="12" y2="3"/>
                                <line x1="12" y1="21" x2="12" y2="23"/>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                                <line x1="1" y1="12" x2="3" y2="12"/>
                                <line x1="21" y1="12" x2="23" y2="12"/>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                            </svg>
                        </button>

                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>
