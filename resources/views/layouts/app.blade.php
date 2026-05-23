<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Andika — Portfolio') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap" rel="stylesheet">

    @stack('styles')

    <style>

        /* ════════════════════════════════════════
           DESIGN TOKENS — DARK MODE (default)
        ════════════════════════════════════════ */
        :root {
            --bg:           #080c14;
            --bg-2:         #0c1220;
            --surface:      rgba(255,255,255,0.035);
            --surface-h:    rgba(255,255,255,0.065);
            --border:       rgba(255,255,255,0.07);
            --border-h:     rgba(139,196,248,0.25);

            --gold:         #c8a96e;
            --gold-l:       #dfc08a;
            --gold-dim:     rgba(200,169,110,0.12);
            --sky:          #8bc4f8;
            --sky-dim:      rgba(139,196,248,0.10);

            --text:         #eef1f6;
            --text-2:       #a8b3c8;
            --text-3:       #5a6880;

            --radius-sm:    10px;
            --radius-md:    16px;
            --radius-lg:    24px;
            --radius-xl:    32px;

            --font-display: 'DM Serif Display', Georgia, serif;
            --font-body:    'DM Sans', system-ui, sans-serif;

            --ease-out:     cubic-bezier(0.22, 1, 0.36, 1);
            --ease-in-out:  cubic-bezier(0.65, 0, 0.35, 1);

            --modal-bg:     #0a0f1e;
            --navbar-bg:    rgba(8, 12, 20, 0.6);
            --navbar-bg-scrolled: rgba(8, 12, 20, 0.85);
            --navbar-mobile-bg: rgba(8,12,20,0.97);
            --project-overlay: linear-gradient(to top, rgba(8,12,20,0.95) 0%, rgba(8,12,20,0.3) 50%, transparent 100%);
            --project-cat-bg: rgba(8,12,20,0.7);
            --hero-badge-bg: rgba(8, 12, 20, 0.85);
            --scrollbar-bg: transparent;
        }

        /* ════════════════════════════════════════
           LIGHT MODE TOKENS
        ════════════════════════════════════════ */
        body.light-mode {
            --bg:           #f5f3ef;
            --bg-2:         #ede9e2;
            --surface:      rgba(0,0,0,0.03);
            --surface-h:    rgba(0,0,0,0.06);
            --border:       rgba(0,0,0,0.09);
            --border-h:     rgba(180,130,60,0.35);

            --gold:         #a07830;
            --gold-l:       #b8902a;
            --gold-dim:     rgba(160,120,48,0.10);
            --sky:          #3a7cc8;
            --sky-dim:      rgba(58,124,200,0.10);

            --text:         #1a1a2e;
            --text-2:       #4a5568;
            --text-3:       #9aa5b4;

            --modal-bg:     #f0ece4;
            --navbar-bg:    rgba(245, 243, 239, 0.75);
            --navbar-bg-scrolled: rgba(245, 243, 239, 0.95);
            --navbar-mobile-bg: rgba(245,243,239,0.98);
            --project-overlay: linear-gradient(to top, rgba(240,236,228,0.95) 0%, rgba(240,236,228,0.3) 50%, transparent 100%);
            --project-cat-bg: rgba(245,243,239,0.8);
            --hero-badge-bg: rgba(245, 243, 239, 0.9);
            --scrollbar-bg: transparent;
        }

        body.light-mode .bg-radial-top {
            background: radial-gradient(ellipse, rgba(200,169,110,0.08) 0%, transparent 65%);
        }
        body.light-mode .bg-radial-bottom {
            background: radial-gradient(ellipse, rgba(58,124,200,0.06) 0%, transparent 65%);
        }
        body.light-mode .bg-grid {
            background-image: radial-gradient(circle, rgba(0,0,0,0.06) 1px, transparent 1px);
        }
        body.light-mode .bg-noise { opacity: 0.015; }
        body.light-mode .modal-content { background: var(--modal-bg); }
        body.light-mode .project-img-wrap img { filter: brightness(0.85) saturate(0.8); }
        body.light-mode .project-card:hover .project-img-wrap img { filter: brightness(0.95) saturate(1); }
        body.light-mode .hero-badge { background: var(--hero-badge-bg); }
        body.light-mode ::-webkit-scrollbar-thumb { background: var(--gold); }
        body.light-mode .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28160%2C120%2C48%2C0.9%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ════════════════════════════════════════
           RESET
        ════════════════════════════════════════ */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: var(--font-body);
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
            transition: background 0.4s ease, color 0.4s ease;
        }

        /* ════════════════════════════════════════
           SCROLLBAR
        ════════════════════════════════════════ */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 4px;
            opacity: 0.5;
        }

        /* ════════════════════════════════════════
           SCROLL PROGRESS
        ════════════════════════════════════════ */
        #scroll-bar {
            position: fixed;
            top: 0; left: 0;
            height: 2px;
            width: 0%;
            background: linear-gradient(to right, var(--gold), var(--sky));
            z-index: 9999;
            transition: width 0.08s linear;
        }

        /* ════════════════════════════════════════
           BACKGROUND
        ════════════════════════════════════════ */
        .bg-canvas {
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            overflow: hidden;
        }

        .bg-noise {
            position: absolute;
            inset: 0;
            opacity: 0.025;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
            background-size: 200px 200px;
            transition: opacity 0.4s;
        }

        .bg-radial-top {
            position: absolute;
            top: -30%;
            left: 50%;
            transform: translateX(-50%);
            width: 900px;
            height: 600px;
            background: radial-gradient(ellipse, rgba(200,169,110,0.06) 0%, transparent 65%);
            transition: background 0.4s;
        }

        .bg-radial-bottom {
            position: absolute;
            bottom: -10%;
            right: -10%;
            width: 700px;
            height: 700px;
            background: radial-gradient(ellipse, rgba(139,196,248,0.05) 0%, transparent 65%);
            transition: background 0.4s;
        }

        .bg-grid {
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle, rgba(255,255,255,0.07) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: radial-gradient(ellipse 70% 70% at 50% 30%, black 0%, transparent 100%);
            transition: background-image 0.4s;
        }

        /* ════════════════════════════════════════
           NAVBAR
        ════════════════════════════════════════ */
        .navbar {
            background: var(--navbar-bg);
            backdrop-filter: blur(24px) saturate(1.4);
            -webkit-backdrop-filter: blur(24px) saturate(1.4);
            border-bottom: 1px solid transparent;
            padding: 20px 0;
            transition: padding 0.35s var(--ease-out), border-color 0.35s, background 0.35s;
            z-index: 1000;
        }

        .navbar.scrolled {
            padding: 13px 0;
            border-bottom-color: var(--border);
            background: var(--navbar-bg-scrolled);
        }

        .navbar-brand {
            font-family: var(--font-display);
            font-size: 22px;
            font-style: italic;
            color: var(--gold) !important;
            letter-spacing: 0.2px;
            text-decoration: none;
        }

        .nav-link {
            color: var(--text-2) !important;
            font-size: 13.5px;
            font-weight: 400;
            letter-spacing: 0.2px;
            padding: 6px 16px !important;
            border-radius: 8px;
            transition: color 0.2s, background 0.2s;
        }

        .nav-link:hover {
            color: var(--text) !important;
            background: var(--surface-h);
        }

        .nav-link.active {
            color: var(--gold-l) !important;
            background: var(--gold-dim);
        }

        .navbar-toggler {
            border: 1px solid var(--border);
            padding: 6px 10px;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28200%2C169%2C110%2C0.9%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ════════════════════════════════════════
           TOGGLE BUTTONS (Lang + Theme)
        ════════════════════════════════════════ */
        .nav-toggles {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .toggle-pill {
            display: inline-flex;
            align-items: center;
            gap: 0;
            border: 1px solid var(--border);
            border-radius: 100px;
            background: var(--surface);
            padding: 3px;
            transition: border-color 0.25s;
        }

        .toggle-pill:hover {
            border-color: rgba(200,169,110,0.25);
        }

        .toggle-pill-btn {
            font-size: 10.5px;
            font-weight: 500;
            letter-spacing: 0.5px;
            color: var(--text-3);
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 4px 11px;
            border-radius: 100px;
            transition: all 0.2s;
            line-height: 1;
            font-family: var(--font-body);
        }

        .toggle-pill-btn.active {
            background: var(--gold);
            color: #0d1117;
            font-weight: 600;
        }

        body.light-mode .toggle-pill-btn.active {
            color: #fff8f0;
        }

        /* Theme toggle */
        .theme-toggle {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text-3);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.25s;
            flex-shrink: 0;
        }

        .theme-toggle:hover {
            border-color: rgba(200,169,110,0.3);
            color: var(--gold);
            background: var(--gold-dim);
        }

        .theme-toggle svg {
            transition: transform 0.4s var(--ease-out), opacity 0.3s;
        }

        /* Icon visibility per mode */
        .icon-moon { display: block; }
        .icon-sun  { display: none; }
        body.light-mode .icon-moon { display: none; }
        body.light-mode .icon-sun  { display: block; }

        /* ════════════════════════════════════════
           CONTENT WRAPPER
        ════════════════════════════════════════ */
        .content-wrap {
            position: relative;
        }

        /* ════════════════════════════════════════
           HERO
        ════════════════════════════════════════ */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 90px;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 28px;
        }

        .hero-eyebrow::before {
            content: '';
            display: block;
            width: 32px;
            height: 1px;
            background: var(--gold);
            opacity: 0.6;
        }

        .hero-title {
            font-family: var(--font-display);
            font-size: clamp(42px, 5.5vw, 68px);
            font-weight: 400;
            line-height: 1.05;
            letter-spacing: -0.5px;
            margin-bottom: 24px;
            color: var(--text);
        }

        .hero-title .accent-line {
            font-style: italic;
            background: linear-gradient(120deg, var(--gold-l) 0%, var(--sky) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-desc {
            font-size: 15.5px;
            color: var(--text-2);
            max-width: 500px;
            line-height: 1.9;
            margin-bottom: 36px;
            font-weight: 300;
        }

        .hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 40px;
        }

        .hero-tag {
            font-size: 11.5px;
            font-weight: 400;
            letter-spacing: 0.3px;
            color: var(--text-3);
            border: 1px solid var(--border);
            padding: 5px 14px;
            border-radius: 100px;
            background: var(--surface);
            transition: all 0.25s;
        }

        .hero-tag:hover {
            border-color: var(--border-h);
            color: var(--text-2);
        }

        .hero-cta {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        /* ════════════════════════════════════════
           BUTTONS
        ════════════════════════════════════════ */
        .btn-primary-custom {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--gold);
            color: #0d1117;
            font-weight: 600;
            font-size: 13px;
            padding: 13px 28px;
            border-radius: var(--radius-sm);
            border: none;
            cursor: pointer;
            transition: all 0.3s var(--ease-out);
            text-decoration: none;
            letter-spacing: 0.1px;
        }

        .btn-primary-custom:hover {
            background: var(--gold-l);
            color: #080c14;
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(200,169,110,0.3);
        }

        .btn-secondary-custom {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: var(--text-2);
            font-weight: 400;
            font-size: 13px;
            padding: 12px 28px;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border);
            cursor: pointer;
            transition: all 0.3s var(--ease-out);
            text-decoration: none;
        }

        .btn-secondary-custom:hover {
            border-color: var(--border-h);
            color: var(--text);
            background: var(--surface-h);
        }

        /* ════════════════════════════════════════
           HERO VISUAL
        ════════════════════════════════════════ */
        .hero-visual {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .hero-avatar-wrap {
            position: relative;
            width: 300px;
            height: 300px;
        }

        .hero-ring {
            position: absolute;
            inset: -20px;
            border-radius: 50%;
            border: 1px dashed rgba(200,169,110,0.15);
            animation: ring-spin 25s linear infinite;
        }

        .hero-ring-2 {
            inset: -44px;
            border-style: solid;
            border-color: rgba(139,196,248,0.08);
            animation-duration: 40s;
            animation-direction: reverse;
        }

        @keyframes ring-spin {
            to { transform: rotate(360deg); }
        }

        .hero-ring::before {
            content: '';
            position: absolute;
            width: 6px; height: 6px;
            background: var(--gold);
            border-radius: 50%;
            top: -3px; left: 50%;
            transform: translateX(-50%);
            box-shadow: 0 0 10px var(--gold);
        }

        .hero-avatar-box {
            width: 100%;
            height: 100%;
            border-radius: var(--radius-xl);
            background: linear-gradient(135deg, rgba(200,169,110,0.08) 0%, rgba(139,196,248,0.05) 100%);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .avatar-placeholder {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 80px;
            font-weight: 400;
            background: linear-gradient(135deg, var(--gold-l), var(--sky));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
        }

        .hero-badge {
            position: absolute;
            background: var(--hero-badge-bg);
            border: 1px solid var(--border-h);
            border-radius: var(--radius-sm);
            padding: 9px 15px;
            backdrop-filter: blur(12px);
            font-size: 12px;
            font-weight: 400;
            transition: background 0.4s;
        }

        .hero-badge-1 {
            bottom: 20px; left: -36px;
            color: #6ee7b7;
        }

        .hero-badge-2 {
            top: 30px; right: -24px;
            color: var(--sky);
        }

        .badge-dot {
            display: inline-block;
            width: 6px; height: 6px;
            border-radius: 50%;
            background: #34d399;
            margin-right: 7px;
            box-shadow: 0 0 8px #34d399;
            animation: pulse-dot 2.2s ease-in-out infinite;
        }

        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.75); }
        }

        /* ════════════════════════════════════════
           SECTION BASE
        ════════════════════════════════════════ */
        .section {
            padding: 110px 0;
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 10.5px;
            font-weight: 500;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 16px;
        }

        .section-label span {
            opacity: 0.35;
            font-family: var(--font-body);
            letter-spacing: 1px;
        }

        .section-title {
            font-family: var(--font-display);
            font-size: clamp(26px, 3.2vw, 42px);
            font-weight: 400;
            letter-spacing: -0.5px;
            line-height: 1.15;
            margin-bottom: 16px;
            color: var(--text);
        }

        .section-title em {
            font-style: italic;
            color: var(--gold-l);
        }

        .section-subtitle {
            color: var(--text-2);
            font-size: 15px;
            max-width: 560px;
            line-height: 1.85;
            font-weight: 300;
        }

        /* ════════════════════════════════════════
           DIVIDER
        ════════════════════════════════════════ */
        .h-line {
            height: 1px;
            background: linear-gradient(to right,
                transparent 0%,
                var(--border) 20%,
                var(--border) 80%,
                transparent 100%);
        }

        /* ════════════════════════════════════════
           GLASS CARD
        ════════════════════════════════════════ */
        .glass-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            padding: 28px;
            transition: all 0.4s var(--ease-out);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .glass-card::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(200,169,110,0.04) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .glass-card:hover {
            border-color: rgba(200,169,110,0.2);
            transform: translateY(-4px);
            box-shadow:
                0 20px 48px rgba(0,0,0,0.4),
                0 0 0 1px rgba(200,169,110,0.05);
        }

        body.light-mode .glass-card:hover {
            box-shadow: 0 20px 48px rgba(0,0,0,0.12), 0 0 0 1px rgba(200,169,110,0.05);
        }

        .glass-card:hover::after {
            opacity: 1;
        }

        .card-icon {
            width: 40px; height: 40px;
            border-radius: 10px;
            background: var(--gold-dim);
            border: 1px solid rgba(200,169,110,0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            font-size: 17px;
        }

        .card-title {
            font-family: var(--font-display);
            font-size: 16px;
            font-weight: 400;
            color: var(--text);
            margin-bottom: 8px;
        }

        .card-text {
            color: var(--text-2);
            font-size: 13.5px;
            line-height: 1.75;
            font-weight: 300;
        }

        /* ════════════════════════════════════════
           ABOUT STATS
        ════════════════════════════════════════ */
        .stat-item {
            text-align: center;
            padding: 24px;
        }

        .stat-number {
            font-family: var(--font-display);
            font-size: 38px;
            font-weight: 400;
            font-style: italic;
            color: var(--gold-l);
            line-height: 1;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 11.5px;
            font-weight: 400;
            color: var(--text-3);
            letter-spacing: 0.3px;
        }

        /* ════════════════════════════════════════
           SKILL PILLS
        ════════════════════════════════════════ */
        .skill-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 13px;
            border-radius: 100px;
            border: 1px solid var(--border);
            font-size: 11.5px;
            font-weight: 400;
            color: var(--text-2);
            background: var(--surface);
            transition: all 0.25s;
        }

        .skill-pill:hover {
            border-color: rgba(200,169,110,0.25);
            color: var(--text);
            background: var(--gold-dim);
        }

        .skill-pill-dot {
            width: 4px; height: 4px;
            border-radius: 50%;
            background: var(--gold);
            flex-shrink: 0;
        }

        /* ════════════════════════════════════════
           PROJECT CARD
        ════════════════════════════════════════ */
        .project-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all 0.4s var(--ease-out);
            height: 100%;
            cursor: pointer;
        }

        .project-card:hover {
            border-color: rgba(200,169,110,0.2);
            transform: translateY(-5px);
            box-shadow: 0 24px 56px rgba(0,0,0,0.45);
        }

        body.light-mode .project-card:hover {
            box-shadow: 0 24px 56px rgba(0,0,0,0.15);
        }

        .project-img-wrap {
            overflow: hidden;
            position: relative;
            height: 210px;
        }

        .project-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s var(--ease-out);
            filter: brightness(0.6) saturate(0.6);
        }

        .project-card:hover .project-img-wrap img {
            transform: scale(1.05);
            filter: brightness(0.75) saturate(0.9);
        }

        .project-overlay {
            position: absolute;
            inset: 0;
            background: var(--project-overlay);
        }

        .project-cat {
            position: absolute;
            top: 16px; left: 16px;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 1.8px;
            text-transform: uppercase;
            color: var(--gold);
            background: var(--project-cat-bg);
            backdrop-filter: blur(8px);
            padding: 4px 12px;
            border-radius: 100px;
            border: 1px solid rgba(200,169,110,0.2);
        }

        .project-body {
            padding: 24px 26px;
        }

        .project-title {
            font-family: var(--font-display);
            font-size: 17px;
            font-weight: 400;
            margin-bottom: 8px;
            letter-spacing: -0.2px;
            color: var(--text);
        }

        .project-desc {
            color: var(--text-2);
            font-size: 13.5px;
            line-height: 1.75;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .project-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tech-badge {
            font-size: 11px;
            font-weight: 400;
            color: var(--text-3);
            letter-spacing: 0.2px;
        }

        .view-btn {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 12px;
            font-weight: 500;
            color: var(--gold);
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            transition: gap 0.2s, color 0.2s;
        }

        .view-btn:hover {
            gap: 9px;
            color: var(--gold-l);
        }

        /* ════════════════════════════════════════
           CONTACT
        ════════════════════════════════════════ */
        .contact-box {
            border: 1px solid var(--border);
            border-radius: var(--radius-xl);
            padding: 70px 80px;
            position: relative;
            overflow: hidden;
            text-align: center;
            background: linear-gradient(135deg,
                rgba(200,169,110,0.04) 0%,
                rgba(8,12,20,0) 50%,
                rgba(139,196,248,0.03) 100%);
        }

        .contact-box::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 50% 70% at 50% 50%,
                rgba(200,169,110,0.06) 0%, transparent 70%);
            pointer-events: none;
        }

        .contact-box::after {
            content: '';
            position: absolute;
            top: -1px; left: 50%;
            transform: translateX(-50%);
            width: 160px;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--gold), transparent);
        }

        .contact-mail {
            font-family: var(--font-display);
            font-style: italic;
            font-size: clamp(15px, 1.8vw, 20px);
            font-weight: 400;
            color: var(--text-2);
            margin-bottom: 32px;
            position: relative;
            z-index: 1;
        }

        /* ════════════════════════════════════════
           FOOTER
        ════════════════════════════════════════ */
        footer {
            border-top: 1px solid var(--border);
            padding: 30px 0;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-brand {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 18px;
            color: var(--gold);
        }

        .footer-copy {
            font-size: 12px;
            color: var(--text-3);
            font-weight: 300;
        }

        /* ════════════════════════════════════════
           MODAL
        ════════════════════════════════════════ */
        .modal-backdrop {
            background-color: rgba(4, 7, 14, 0.85) !important;
            z-index: 1050 !important;
        }

        body.light-mode .modal-backdrop {
            background-color: rgba(100, 90, 70, 0.5) !important;
        }

        .modal {
            z-index: 1055 !important;
        }

        .modal-content {
            background: var(--modal-bg);
            border: 1px solid var(--border);
            border-radius: var(--radius-xl);
            color: var(--text);
            transition: background 0.4s, border-color 0.4s;
        }

        .modal-header-custom {
            padding: 32px 38px 0;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
        }

        .modal-date {
            font-size: 10.5px;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 8px;
        }

        .modal-title-custom {
            font-family: var(--font-display);
            font-size: 24px;
            font-weight: 400;
            letter-spacing: -0.3px;
            margin-bottom: 0;
        }

        .modal-body-custom {
            padding: 24px 38px 38px;
        }

        .modal-close {
            width: 34px; height: 34px;
            border-radius: 9px;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--text-2);
            cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: all 0.2s;
            flex-shrink: 0;
            font-size: 15px;
            position: relative;
            z-index: 10;
        }

        .modal-close:hover {
            border-color: rgba(200,169,110,0.3);
            color: var(--text);
            background: var(--gold-dim);
        }

        .modal-p {
            color: var(--text-2);
            font-size: 14px;
            line-height: 1.85;
            margin-bottom: 18px;
            font-weight: 300;
        }

        .modal-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 18px;
        }

        .modal-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 13.5px;
            font-weight: 300;
            color: var(--text-2);
        }

        .modal-list li::before {
            content: '';
            display: block;
            width: 5px; height: 5px;
            background: var(--gold);
            border-radius: 50%;
            flex-shrink: 0;
            box-shadow: 0 0 6px rgba(200,169,110,0.5);
        }

        /* ════════════════════════════════════════
           REVEAL ANIMATIONS
        ════════════════════════════════════════ */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.75s var(--ease-out), transform 0.75s var(--ease-out);
        }

        .reveal.visible {
            opacity: 1;
            transform: none;
        }

        .reveal-group > * {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.65s var(--ease-out), transform 0.65s var(--ease-out);
        }

        .reveal-group.visible > *:nth-child(1) { opacity:1; transform:none; transition-delay:0s; }
        .reveal-group.visible > *:nth-child(2) { opacity:1; transform:none; transition-delay:0.1s; }
        .reveal-group.visible > *:nth-child(3) { opacity:1; transform:none; transition-delay:0.2s; }
        .reveal-group.visible > *:nth-child(4) { opacity:1; transform:none; transition-delay:0.3s; }

        /* ════════════════════════════════════════
           SOCIAL LINKS
        ════════════════════════════════════════ */
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px; height: 36px;
            border-radius: 9px;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text-3);
            text-decoration: none;
            transition: all 0.25s;
            font-size: 14px;
        }

        .social-link:hover {
            border-color: rgba(200,169,110,0.3);
            color: var(--gold);
            background: var(--gold-dim);
        }

        /* ════════════════════════════════════════
           RESPONSIVE
        ════════════════════════════════════════ */
        @media (max-width: 1199px) {
            .hero-avatar-wrap { width: 260px; height: 260px; }
            .hero-badge-1 { left: -10px; }
            .hero-badge-2 { right: -10px; }
        }

        @media (max-width: 991px) {
            .hero {
                padding: 100px 0 70px;
                text-align: center;
            }
            .hero-visual { display: none; }
            .hero-eyebrow { justify-content: center; }
            .hero-desc { margin-left: auto; margin-right: auto; }
            .hero-tags { justify-content: center; }
            .hero-cta { justify-content: center; }

            #navbarNav {
                background: var(--navbar-mobile-bg);
                border: 1px solid var(--border);
                border-radius: var(--radius-md);
                margin-top: 12px;
                padding: 12px 16px;
            }
            .nav-link { padding: 10px 14px !important; }
            .navbar-nav .ms-lg-2 { margin-top: 8px; }
            .navbar-nav .btn-primary-custom { width: 100%; justify-content: center; }

            .nav-toggles {
                margin-top: 10px;
                padding-top: 10px;
                border-top: 1px solid var(--border);
                justify-content: center;
            }

            .col-lg-6.reveal { text-align: center; }
            .col-lg-6 .section-subtitle { margin-left: auto; margin-right: auto; }
            .col-lg-6 .d-flex.gap-3 { justify-content: center; }

            .col-lg-4.reveal { text-align: center; }
            .col-lg-4 .section-subtitle { margin-left: auto; margin-right: auto; }

            .contact-box { padding: 50px 32px; }
            .footer-inner { justify-content: center; text-align: center; flex-direction: column; gap: 16px; }
        }

        @media (max-width: 767px) {
            .section { padding: 80px 0; }
            .hero { padding: 90px 0 60px; }
            .hero-title { font-size: clamp(36px, 9vw, 52px); }
            .col-lg-6 { width: 100% !important; max-width: 100% !important; flex: 0 0 100%; }
            .col-md-4 { width: 50% !important; max-width: 50% !important; flex: 0 0 50%; }
            .contact-box { padding: 44px 24px; border-radius: var(--radius-lg); }
            .modal-header-custom { padding: 24px 24px 0; }
            .modal-body-custom { padding: 20px 24px 32px; }
            .modal-title-custom { font-size: 20px; }
            .modal-dialog { margin: 12px; }
            .modal-content { border-radius: var(--radius-lg); }
        }

        @media (max-width: 480px) {
            .section { padding: 64px 0; }
            .hero { padding: 80px 0 50px; }
            .hero-eyebrow { font-size: 10px; }
            .hero-title { font-size: clamp(30px, 10vw, 42px); }
            .hero-desc { font-size: 14.5px; }
            .hero-tags { gap: 6px; }
            .hero-tag { font-size: 10.5px; padding: 4px 11px; }
            .btn-primary-custom,
            .btn-secondary-custom { padding: 11px 22px; font-size: 12.5px; }
            .col-md-4 { width: 100% !important; max-width: 100% !important; flex: 0 0 100%; }
            .stat-number { font-size: 32px; }
            .section-title { font-size: clamp(22px, 7vw, 30px); }
            .contact-box { padding: 36px 20px; }
            .contact-mail { font-size: 13px; word-break: break-all; }
            .modal-header-custom { padding: 20px 18px 0; }
            .modal-body-custom { padding: 16px 18px 28px; }
            .modal-title-custom { font-size: 18px; }
            .modal-list li { font-size: 13px; }
            .modal-p { font-size: 13.5px; }
        }

        .project-card {
            position: relative;
        }
    </style>
</head>
<body>

    {{-- SCROLL PROGRESS --}}
    <div id="scroll-bar"></div>

    {{-- BG CANVAS --}}
    <div class="bg-canvas" aria-hidden="true">
        <div class="bg-noise"></div>
        <div class="bg-grid"></div>
        <div class="bg-radial-top"></div>
        <div class="bg-radial-bottom"></div>
    </div>

    {{-- CONTENT --}}
    <div class="content-wrap">
        @yield('content')
    </div>

    @stack('modals')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    /* ════════════════════════════════════════
       TRANSLATIONS (i18n)
    ════════════════════════════════════════ */
    const i18n = {
        id: {
            /* Navbar */
            'nav.about':    'About',
            'nav.skills':   'Skills',
            'nav.projects': 'Projects',
            'nav.contact':  'Contact',

            /* Hero */
            'hero.eyebrow': 'Portfolio 2026',
            'hero.desc':    'IT Enthusiast, Front-End Developer, dan IoT Engineer — membangun antarmuka modern dan sistem cerdas dengan passion terhadap teknologi.',
            'hero.tag1':    'Front-End Development',
            'hero.tag2':    'Internet of Things',
            'hero.tag3':    'IT Troubleshooting',
            'hero.cta1':    'Hubungi Saya',
            'hero.cta2':    'Lihat Projek',
            'hero.badge1':  'Available for work',

            /* About */
            'about.label':    'About Me',
            'about.title1':   'Driven by curiosity,',
            'about.title2':   'built on',
            'about.title2em': 'technology.',
            'about.desc':     'Saya adalah individu yang antusias terhadap teknologi dengan pengalaman di Front-End Development, IoT, troubleshooting, dan analisis data. Selalu mencari cara baru untuk menciptakan solusi yang efisien dan elegan.',
            'about.cta':      "Let's Connect",
            'about.years':    'Years Experience',
            'about.projects': 'Projects Done',
            'about.edutitle': 'Education',
            'about.edutxt':   'S1 Rekayasa Sistem Komputer · INSTIKI',
            'about.exptitle': 'Experience',
            'about.exptxt':   'Front End Dev · DPMD Gianyar · Freelancer',

            /* Skills */
            'skills.label':    'Skills',
            'skills.title1':   'What I',
            'skills.title2':   'work with.',
            'skills.desc':     'Teknologi dan tools yang saya gunakan dalam membangun proyek web, sistem IoT, dan troubleshooting IT.',

            /* Projects */
            'projects.label':     'Projects',
            'projects.title':     'Featured',
            'projects.titleem':   'Work.',
            'projects.desc':      'Projek dan pengalaman pilihan yang pernah saya kerjakan.',
            'projects.proto.label': 'Prototypes',
            'projects.proto.title': 'Learning',
            'projects.proto.em':    'Projects.',
            'projects.proto.desc':  'Website prototype yang saya bangun sebagai eksplorasi dan latihan mandiri.',
            'projects.viewdetail':  'View detail',

            /* Project cards */
            'proj.iot.desc':        'Monitoring suhu dan kelembaban menggunakan ESP32, Blynk IoT, dan Telegram Bot notification.',
            'proj.dpmd.desc':       'Pengembangan UI/UX dashboard dan antarmuka website untuk instansi pemerintah daerah.',
            'proj.alcohol.desc':    'Sistem deteksi kadar alkohol realtime menggunakan sensor MQ-3 dan ESP32 dengan web monitoring.',
            'proj.freelance.title': 'Freelance & Digital Work',
            'proj.freelance.desc':  'Rekapitulasi data mahasiswa, pengelolaan absensi, WFH assistant lecturer, dan cameraman event.',
            'proj.recell.desc':     'Toko iPhone second & brand new — landing page dengan koleksi produk, blog, dan store locator.',
            'proj.travel.title':    'Explore Bali Travel',
            'proj.travel.desc':     'Website travel destinasi wisata Bali — menampilkan Tanah Lot, Uluwatu, Tegalalang, dan banyak lagi.',
            'proj.portfolio1.desc': 'Versi pertama website portofolio pribadi — titik awal perjalanan Front-End Development saya.',

            /* Contact */
            'contact.label':  'Contact',
            'contact.title1': "Let's work",
            'contact.titleem':"together.",
            'contact.email':  'Send Email',
            'contact.linkedin': 'LinkedIn',

            /* Footer */
            'footer.copy': '© 2026 I Gusti Made Andika Bramastra.',

            /* Modals */
            'modal.iot.date':    'Januari 2024 · IoT',
            'modal.iot.p1':      'Merancang dan membangun sistem IoT untuk monitoring suhu dan kelembaban udara menggunakan Blynk IoT yang dapat dikontrol melalui Bot Telegram secara realtime.',
            'modal.iot.p2':      'Sistem secara otomatis mengaktifkan buzzer ketika suhu melebihi batas normal, serta mengirimkan notifikasi ke Telegram secara realtime.',
            'modal.dpmd.date':   'Oktober 2024 – Januari 2025 · Web Dev',
            'modal.dpmd.p1':     'Bekerja sebagai Front-End Developer dalam program MBKM di Dinas Pemberdayaan Masyarakat dan Desa (DPMD) Gianyar, mengembangkan antarmuka website dan dashboard instansi pemerintah.',
            'modal.alcohol.date':'Desember 2025 – Januari 2026 · IoT',
            'modal.alcohol.p1':  'Sistem deteksi kadar alkohol menggunakan sensor MQ-3 dan mikrokontroler ESP32, dengan data realtime yang dikirim dan ditampilkan di website monitoring.',
            'modal.alcohol.p2':  'Data hasil pengujian dikirim dan disimpan ke website secara realtime, memungkinkan pemantauan dan analisis berkelanjutan.',
            'modal.freelance.date': 'Agustus 2024 – Sekarang · Freelance',
            'modal.freelance.p1': 'Berbagai pekerjaan freelance dan digital yang dilakukan secara remote maupun on-site, mencakup bidang administrasi akademik, asisten dosen, dan kreatif.',
            'modal.recell.date': '2025 · Prototype · E-Commerce',
            'modal.recell.p1':   'Prototype landing page toko iPhone second dan brand new bernama Recell Bram. Dibangun sebagai latihan membuat website e-commerce dengan tampilan modern dan struktur konten yang lengkap.',
            'modal.recell.p2':   'Dibangun murni dengan HTML, CSS, dan JavaScript vanilla tanpa framework — fokus pada layout yang clean dan pengalaman belanja yang intuitif.',
            'modal.recell.livedemo': 'Lihat Live Demo',
            'modal.travel.date': '2025 · Prototype · Travel',
            'modal.travel.p1':   'Prototype website travel untuk destinasi wisata di Bali, dirancang sebagai platform pemandu perjalanan digital. Menampilkan berbagai destinasi ikonik Bali dengan informasi lengkap dan harga tiket per orang.',
            'modal.travel.p2':   'Menggunakan foto-foto nyata dari tiap destinasi sebagai visual utama, memberi kesan autentik dan informatif bagi calon wisatawan.',
            'modal.travel.livedemo': 'Lihat Live Demo',
            'modal.portv1.date': '2023 · Prototype · Portfolio',
            'modal.portv1.p1':   'Website portofolio pertama yang saya buat — titik awal perjalanan saya di dunia Front-End Development. Dibangun saat masih awal belajar HTML dan CSS, menjadi fondasi dari skill yang terus berkembang hingga sekarang.',
            'modal.portv1.p2':   'Website ini menandai awal serius saya dalam belajar web development dan menjadi bahan perbandingan nyata seberapa jauh kemampuan saya berkembang.',
            'modal.portv1.livedemo': 'Lihat Live Demo',
        },
        en: {
            /* Navbar */
            'nav.about':    'About',
            'nav.skills':   'Skills',
            'nav.projects': 'Projects',
            'nav.contact':  'Contact',

            /* Hero */
            'hero.eyebrow': 'Portfolio 2026',
            'hero.desc':    'IT Enthusiast, Front-End Developer, and IoT Engineer — building modern interfaces and smart systems with a passion for technology.',
            'hero.tag1':    'Front-End Development',
            'hero.tag2':    'Internet of Things',
            'hero.tag3':    'IT Troubleshooting',
            'hero.cta1':    'Contact Me',
            'hero.cta2':    'View Projects',
            'hero.badge1':  'Available for work',

            /* About */
            'about.label':    'About Me',
            'about.title1':   'Driven by curiosity,',
            'about.title2':   'built on',
            'about.title2em': 'technology.',
            'about.desc':     'I am an individual enthusiastic about technology with experience in Front-End Development, IoT, troubleshooting, and data analysis. Always looking for new ways to create efficient and elegant solutions.',
            'about.cta':      "Let's Connect",
            'about.years':    'Years Experience',
            'about.projects': 'Projects Done',
            'about.edutitle': 'Education',
            'about.edutxt':   'Bachelor of Computer Systems Engineering · INSTIKI',
            'about.exptitle': 'Experience',
            'about.exptxt':   'Front End Dev · DPMD Gianyar · Freelancer',

            /* Skills */
            'skills.label':    'Skills',
            'skills.title1':   'What I',
            'skills.title2':   'work with.',
            'skills.desc':     'Technologies and tools I use to build web projects, IoT systems, and IT troubleshooting.',

            /* Projects */
            'projects.label':     'Projects',
            'projects.title':     'Featured',
            'projects.titleem':   'Work.',
            'projects.desc':      'Selected projects and experiences I have worked on.',
            'projects.proto.label': 'Prototypes',
            'projects.proto.title': 'Learning',
            'projects.proto.em':    'Projects.',
            'projects.proto.desc':  'Website prototypes I built as personal exploration and practice.',
            'projects.viewdetail':  'View detail',

            /* Project cards */
            'proj.iot.desc':        'Temperature and humidity monitoring using ESP32, Blynk IoT, and Telegram Bot notifications.',
            'proj.dpmd.desc':       'UI/UX development for dashboard and website interface of a local government agency.',
            'proj.alcohol.desc':    'Real-time alcohol detection system using MQ-3 sensor and ESP32 with web monitoring.',
            'proj.freelance.title': 'Freelance & Digital Work',
            'proj.freelance.desc':  'Student data recapitulation, attendance management, WFH assistant lecturer, and event cameraman.',
            'proj.recell.desc':     'Used & brand new iPhone store — landing page with product gallery, blog, and store locator.',
            'proj.travel.title':    'Explore Bali Travel',
            'proj.travel.desc':     'Bali tourism travel website — featuring Tanah Lot, Uluwatu, Tegalalang, and many more.',
            'proj.portfolio1.desc': 'My first personal portfolio website — the starting point of my Front-End Development journey.',

            /* Contact */
            'contact.label':    'Contact',
            'contact.title1':   "Let's work",
            'contact.titleem':  "together.",
            'contact.email':    'Send Email',
            'contact.linkedin': 'LinkedIn',

            /* Footer */
            'footer.copy': '© 2026 I Gusti Made Andika Bramastra.',

            /* Modals */
            'modal.iot.date':    'January 2024 · IoT',
            'modal.iot.p1':      'Designed and built an IoT system for monitoring air temperature and humidity using Blynk IoT, controllable via Telegram Bot in real time.',
            'modal.iot.p2':      'The system automatically activates a buzzer when the temperature exceeds normal thresholds and sends real-time Telegram notifications.',
            'modal.dpmd.date':   'October 2024 – January 2025 · Web Dev',
            'modal.dpmd.p1':     'Worked as a Front-End Developer in the MBKM program at the Gianyar Community and Village Empowerment Office (DPMD), developing the website interface and admin dashboard.',
            'modal.alcohol.date':'December 2025 – January 2026 · IoT',
            'modal.alcohol.p1':  'An alcohol level detection system using an MQ-3 sensor and ESP32 microcontroller, with real-time data sent and displayed on a monitoring website.',
            'modal.alcohol.p2':  'Test data is transmitted and stored on the website in real time, enabling continuous monitoring and analysis.',
            'modal.freelance.date': 'August 2024 – Present · Freelance',
            'modal.freelance.p1': 'Various freelance and digital work done remotely and on-site, covering academic administration, teaching assistance, and creative fields.',
            'modal.recell.date': '2025 · Prototype · E-Commerce',
            'modal.recell.p1':   'Prototype landing page for a used and brand-new iPhone store called Recell Bram. Built as practice for creating an e-commerce website with a modern look and complete content structure.',
            'modal.recell.p2':   'Built purely with vanilla HTML, CSS, and JavaScript without any framework — focused on a clean layout and intuitive shopping experience.',
            'modal.recell.livedemo': 'View Live Demo',
            'modal.travel.date': '2025 · Prototype · Travel',
            'modal.travel.p1':   'A travel website prototype for Bali tourism destinations, designed as a digital travel guide platform. Showcasing iconic Bali destinations with complete information and per-person ticket prices.',
            'modal.travel.p2':   'Uses real photos of each destination as the main visual, giving an authentic and informative impression to potential visitors.',
            'modal.travel.livedemo': 'View Live Demo',
            'modal.portv1.date': '2023 · Prototype · Portfolio',
            'modal.portv1.p1':   'My very first portfolio website — the starting point of my journey in Front-End Development. Built when I was just beginning to learn HTML and CSS, it became the foundation of skills that have grown ever since.',
            'modal.portv1.p2':   'This website marked the beginning of my serious pursuit of web development and serves as a real benchmark for how far my skills have grown.',
            'modal.portv1.livedemo': 'View Live Demo',
        }
    };

    let currentLang = localStorage.getItem('lang') || 'id';
    let currentTheme = localStorage.getItem('theme') || 'dark';

    function t(key) {
        return i18n[currentLang][key] || i18n['id'][key] || key;
    }

    function applyTranslations() {
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = t(key);
            } else {
                el.textContent = t(key);
            }
        });
        document.querySelectorAll('[data-i18n-html]').forEach(el => {
            const key = el.getAttribute('data-i18n-html');
            el.innerHTML = t(key);
        });

        // Update lang toggle buttons
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.classList.toggle('active', btn.dataset.lang === currentLang);
        });
    }

    function applyTheme() {
        document.body.classList.toggle('light-mode', currentTheme === 'light');
        // Update theme toggle button tooltip
        const btn = document.getElementById('themeToggle');
        if (btn) btn.title = currentTheme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
    }

    function setLang(lang) {
        currentLang = lang;
        localStorage.setItem('lang', lang);
        applyTranslations();
    }

    function toggleTheme() {
        currentTheme = currentTheme === 'dark' ? 'light' : 'dark';
        localStorage.setItem('theme', currentTheme);
        applyTheme();
    }

    // Init on DOM ready
    document.addEventListener('DOMContentLoaded', function () {
        applyTheme();
        applyTranslations();

        // Move modals to body root
        document.querySelectorAll('.modal').forEach(function (modal) {
            if (modal.parentElement !== document.body) {
                document.body.appendChild(modal);
            }
        });
    });

    /* ════════════════════════════════════════
       SCROLL PROGRESS
    ════════════════════════════════════════ */
    const scrollBar = document.getElementById('scroll-bar');
    window.addEventListener('scroll', () => {
        const total = document.documentElement.scrollHeight - window.innerHeight;
        scrollBar.style.width = ((window.scrollY / total) * 100) + '%';
    }, { passive: true });

    /* ════════════════════════════════════════
       NAVBAR SCROLL STATE
    ════════════════════════════════════════ */
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });

    /* ════════════════════════════════════════
       ACTIVE NAV LINK
    ════════════════════════════════════════ */
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    const sectionObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                navLinks.forEach(l => l.classList.remove('active'));
                const a = document.querySelector(`.nav-link[href="#${e.target.id}"]`);
                if (a) a.classList.add('active');
            }
        });
    }, { rootMargin: '-40% 0px -55% 0px' });
    sections.forEach(s => sectionObs.observe(s));

    /* ════════════════════════════════════════
       REVEAL ON SCROLL
    ════════════════════════════════════════ */
    const revealObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                revealObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal, .reveal-group').forEach(el => revealObs.observe(el));

    /* ════════════════════════════════════════
       HERO AUTO-REVEAL
    ════════════════════════════════════════ */
    document.querySelectorAll('.hero .reveal').forEach((el, i) => {
        setTimeout(() => el.classList.add('visible'), i * 120 + 150);
    });
    </script>

    <script>
    document.addEventListener('hidden.bs.modal', function () {
        const openModals = document.querySelectorAll('.modal.show');
        if (openModals.length === 0) {
            document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
            document.body.classList.remove('modal-open');
            document.body.style.removeProperty('padding-right');
            document.body.style.removeProperty('overflow');
        }
    });
    </script>

    @stack('scripts')

</body>
</html>
