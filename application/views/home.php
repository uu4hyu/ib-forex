<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IBExnessindo — Introducing Broker Resmi Exness Indonesia</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --navy-900: #0A0F1C;
      --navy-800: #0D1A2D;
      --navy-700: #122240;
      --navy-600: #1A3055;
      --navy-500: #1E3A5F;
      --gold-400: #F5C842;
      --gold-500: #E5B100;
      --gold-300: #FFE082;
      --white: #FFFFFF;
      --gray-100: #F0F2F5;
      --gray-200: #E1E5EB;
      --gray-300: #C5CBD6;
      --gray-400: #8892A4;
      --gray-500: #5A6577;
      --green-400: #22C55E;
      --red-400: #EF4444;
      --radius: 16px;
      --radius-sm: 10px;
      --radius-xs: 6px;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: var(--navy-900);
      color: var(--white);
      line-height: 1.6;
      overflow-x: hidden;
    }

    /* ─── UTILITY ──────────────────────────────── */
    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .section { padding: 100px 0; }
    .gold-text { color: var(--gold-400); }
    .mono { font-family: 'Space Mono', monospace; }
    .badge {
      display: inline-block;
      padding: 6px 14px;
      border-radius: 100px;
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
    }
    .badge-gold { background: rgba(245,200,66,0.12); color: var(--gold-400); border: 1px solid rgba(245,200,66,0.2); }
    .badge-green { background: rgba(34,197,94,0.12); color: var(--green-400); border: 1px solid rgba(34,197,94,0.2); }

    /* ─── ANIMATED GRADIENT BG ─────────────────── */
    .hero-glow {
      position: absolute;
      width: 600px; height: 600px;
      border-radius: 50%;
      filter: blur(120px);
      opacity: 0.15;
      pointer-events: none;
      animation: floatGlow 8s ease-in-out infinite alternate;
    }
    .hero-glow.g1 { top: -150px; right: -100px; background: var(--gold-400); }
    .hero-glow.g2 { bottom: -200px; left: -150px; background: #3B82F6; }

    @keyframes floatGlow {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(30px, -20px) scale(1.1); }
    }

    /* ─── NAVBAR ────────────────────────────────── */
    .navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      padding: 16px 0;
      transition: all 0.35s ease;
      backdrop-filter: blur(0px);
    }
    .navbar.scrolled {
      background: rgba(10,15,28,0.92);
      backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(255,255,255,0.06);
      padding: 10px 0;
    }
    .navbar .container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .nav-logo {
      font-size: 1.35rem;
      font-weight: 800;
      letter-spacing: -0.5px;
      text-decoration: none;
      color: var(--white);
    }
    .nav-logo span { color: var(--gold-400); }
    .nav-links { display: flex; gap: 8px; align-items: center; }
    .nav-links a {
      color: var(--gray-300);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      padding: 8px 16px;
      border-radius: 8px;
      transition: all 0.25s;
    }
    .nav-links a:hover { color: var(--white); background: rgba(255,255,255,0.06); }
    .nav-cta {
      background: var(--gold-400) !important;
      color: var(--navy-900) !important;
      font-weight: 700 !important;
      padding: 10px 24px !important;
      border-radius: 10px !important;
    }
    .nav-cta:hover { background: var(--gold-300) !important; transform: translateY(-1px); }

    /* Mobile Menu */
    .nav-burger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 8px;
    }
    .nav-burger span {
      width: 24px; height: 2px;
      background: var(--white);
      border-radius: 2px;
      transition: all 0.3s;
    }
    .nav-burger.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    .nav-burger.active span:nth-child(2) { opacity: 0; }
    .nav-burger.active span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

    .mobile-menu {
      display: none;
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(10,15,28,0.98);
      backdrop-filter: blur(24px);
      z-index: 999;
      padding: 100px 32px 40px;
      flex-direction: column;
      gap: 4px;
      overflow-y: auto;
    }
    .mobile-menu.active { display: flex; }
    .mobile-menu a {
      color: var(--gray-300);
      text-decoration: none;
      font-size: 1.2rem;
      font-weight: 600;
      padding: 16px 0;
      border-bottom: 1px solid rgba(255,255,255,0.06);
      transition: color 0.2s;
    }
    .mobile-menu a:hover, .mobile-menu a:active { color: var(--gold-400); }
    .mobile-menu .mob-cta {
      margin-top: 24px;
      text-align: center;
      background: var(--gold-400);
      color: var(--navy-900);
      padding: 18px;
      border-radius: var(--radius-sm);
      font-weight: 800;
      border: none;
    }

    /* ─── HERO ──────────────────────────────────── */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      overflow: hidden;
      padding: 140px 0 80px;
    }
    .hero-content {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 60px;
      align-items: center;
    }
    .hero-tagline {
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: var(--gold-400);
      margin-bottom: 20px;
      opacity: 0;
      animation: fadeUp 0.6s 0.2s forwards;
    }
    .hero h1 {
      font-size: clamp(2.5rem, 5.5vw, 4.2rem);
      font-weight: 800;
      line-height: 1.08;
      letter-spacing: -1.5px;
      margin-bottom: 24px;
      opacity: 0;
      animation: fadeUp 0.6s 0.35s forwards;
    }
    .hero p {
      font-size: 1.1rem;
      color: var(--gray-400);
      max-width: 520px;
      margin-bottom: 40px;
      opacity: 0;
      animation: fadeUp 0.6s 0.5s forwards;
    }
    .hero-buttons {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      opacity: 0;
      animation: fadeUp 0.6s 0.65s forwards;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 16px 32px;
      border-radius: var(--radius-sm);
      font-size: 1rem;
      font-weight: 700;
      text-decoration: none;
      transition: all 0.3s;
      cursor: pointer;
      border: none;
      font-family: inherit;
    }
    .btn-primary {
      background: var(--gold-400);
      color: var(--navy-900);
    }
    .btn-primary:hover { background: var(--gold-300); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(245,200,66,0.25); }
    .btn-outline {
      background: transparent;
      color: var(--white);
      border: 1.5px solid rgba(255,255,255,0.2);
    }
    .btn-outline:hover { border-color: var(--gold-400); color: var(--gold-400); transform: translateY(-2px); }

    /* Hero Card */
    .hero-card {
      background: linear-gradient(145deg, var(--navy-700), var(--navy-800));
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 24px;
      padding: 40px;
      position: relative;
      overflow: hidden;
      opacity: 0;
      animation: fadeUp 0.8s 0.5s forwards;
    }
    .hero-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--gold-400), #3B82F6);
    }
    .hero-card h3 {
      font-size: 1rem;
      color: var(--gray-400);
      font-weight: 500;
      margin-bottom: 24px;
    }
    .rate-display {
      display: flex;
      gap: 24px;
      margin-bottom: 32px;
    }
    .rate-item { flex: 1; }
    .rate-label {
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      color: var(--gray-400);
      margin-bottom: 8px;
    }
    .rate-value {
      font-family: 'Space Mono', monospace;
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--white);
    }
    .rate-value .currency { font-size: 0.9rem; color: var(--gray-400); margin-left: 4px; }

    .quick-actions { display: flex; flex-direction: column; gap: 10px; }
    .quick-actions a {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 20px;
      border-radius: var(--radius-sm);
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.06);
      color: var(--white);
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: all 0.25s;
    }
    .quick-actions a:hover {
      background: rgba(245,200,66,0.08);
      border-color: rgba(245,200,66,0.2);
      transform: translateX(4px);
    }
    .quick-actions a .arrow { color: var(--gold-400); font-size: 1.2rem; }

    /* ─── SCROLLING TICKER ─────────────────────── */
    .ticker-wrap {
      background: var(--navy-800);
      border-top: 1px solid rgba(255,255,255,0.04);
      border-bottom: 1px solid rgba(255,255,255,0.04);
      overflow: hidden;
      padding: 14px 0;
    }
    .ticker {
      display: flex;
      gap: 48px;
      animation: ticker 30s linear infinite;
      width: max-content;
    }
    .ticker-item {
      display: flex;
      align-items: center;
      gap: 10px;
      white-space: nowrap;
      font-size: 0.9rem;
      font-weight: 600;
    }
    .ticker-item .pair { color: var(--gray-300); }
    .ticker-item .price { font-family: 'Space Mono', monospace; color: var(--white); }
    .ticker-item .change { font-family: 'Space Mono', monospace; font-size: 0.8rem; }
    .ticker-item .up { color: var(--green-400); }
    .ticker-item .down { color: var(--red-400); }

    @keyframes ticker {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    /* ─── FEATURES ─────────────────────────────── */
    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .feature-card {
      background: linear-gradient(160deg, var(--navy-700), var(--navy-800));
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      padding: 36px;
      transition: all 0.35s;
      position: relative;
      overflow: hidden;
    }
    .feature-card:hover {
      border-color: rgba(245,200,66,0.15);
      transform: translateY(-4px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    }
    .feature-icon {
      width: 52px; height: 52px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 20px;
      background: rgba(245,200,66,0.1);
      border: 1px solid rgba(245,200,66,0.15);
    }
    .feature-card h3 {
      font-size: 1.15rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    .feature-card p {
      font-size: 0.9rem;
      color: var(--gray-400);
      line-height: 1.7;
    }

    /* Section Header */
    .section-header {
      text-align: center;
      max-width: 640px;
      margin: 0 auto 64px;
    }
    .section-header h2 {
      font-size: clamp(2rem, 4vw, 2.8rem);
      font-weight: 800;
      letter-spacing: -1px;
      margin-top: 16px;
      margin-bottom: 16px;
    }
    .section-header p {
      color: var(--gray-400);
      font-size: 1.05rem;
    }

    /* ─── ACCOUNT TYPES ────────────────────────── */
    .accounts-section {
      background: linear-gradient(180deg, var(--navy-900) 0%, var(--navy-800) 50%, var(--navy-900) 100%);
    }
    .accounts-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .account-card {
      background: var(--navy-700);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      padding: 40px;
      text-align: center;
      transition: all 0.35s;
      position: relative;
    }
    .account-card.popular {
      border-color: var(--gold-400);
      box-shadow: 0 0 60px rgba(245,200,66,0.08);
    }
    .account-card.popular::before {
      content: 'POPULER';
      position: absolute;
      top: -1px; left: 50%; transform: translateX(-50%);
      background: var(--gold-400);
      color: var(--navy-900);
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 2px;
      padding: 6px 20px;
      border-radius: 0 0 8px 8px;
    }
    .account-card:hover { transform: translateY(-4px); }
    .account-type {
      font-size: 1.3rem;
      font-weight: 800;
      margin-bottom: 8px;
    }
    .account-deposit {
      font-family: 'Space Mono', monospace;
      font-size: 2.4rem;
      font-weight: 700;
      color: var(--gold-400);
      margin: 20px 0;
    }
    .account-deposit small { font-size: 0.9rem; color: var(--gray-400); }
    .account-features { list-style: none; text-align: left; margin: 28px 0; }
    .account-features li {
      padding: 10px 0;
      border-bottom: 1px solid rgba(255,255,255,0.04);
      font-size: 0.9rem;
      color: var(--gray-300);
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .account-features li::before {
      content: '✓';
      color: var(--gold-400);
      font-weight: 700;
      flex-shrink: 0;
    }
    .account-btn {
      display: block;
      width: 100%;
      padding: 16px;
      border-radius: var(--radius-sm);
      font-weight: 700;
      font-size: 1rem;
      text-decoration: none;
      text-align: center;
      transition: all 0.3s;
      font-family: inherit;
      cursor: pointer;
    }
    .account-card.popular .account-btn {
      background: var(--gold-400);
      color: var(--navy-900);
      border: none;
    }
    .account-card:not(.popular) .account-btn {
      background: transparent;
      color: var(--white);
      border: 1.5px solid rgba(255,255,255,0.15);
    }
    .account-btn:hover { transform: translateY(-2px); }

    /* ─── STATS BAR ────────────────────────────── */
    .stats-bar {
      background: var(--navy-700);
      border: 1px solid rgba(255,255,255,0.05);
      border-radius: var(--radius);
      padding: 48px;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 32px;
      text-align: center;
    }
    .stat-item h3 {
      font-family: 'Space Mono', monospace;
      font-size: clamp(2rem, 3.5vw, 2.8rem);
      font-weight: 700;
      color: var(--gold-400);
      margin-bottom: 6px;
    }
    .stat-item p {
      font-size: 0.85rem;
      color: var(--gray-400);
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 600;
    }

    /* ─── STEPS / HOW IT WORKS ─────────────────── */
    .steps-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
      position: relative;
    }
    .steps-grid::before {
      content: '';
      position: absolute;
      top: 42px;
      left: 13%;
      right: 13%;
      height: 2px;
      background: linear-gradient(90deg, var(--gold-400), var(--navy-600), var(--gold-400));
      opacity: 0.3;
    }
    .step-card { text-align: center; position: relative; }
    .step-number {
      width: 56px; height: 56px;
      border-radius: 50%;
      background: var(--navy-700);
      border: 2px solid var(--gold-400);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Space Mono', monospace;
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--gold-400);
      margin: 0 auto 20px;
      position: relative;
      z-index: 2;
    }
    .step-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 10px; }
    .step-card p { font-size: 0.85rem; color: var(--gray-400); line-height: 1.7; }

    /* ─── ARTICLES ─────────────────────────────── */
    .articles-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .article-card {
      background: var(--navy-700);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      overflow: hidden;
      transition: all 0.35s;
    }
    .article-card:hover {
      border-color: rgba(245,200,66,0.15);
      transform: translateY(-4px);
    }
    .article-thumb {
      height: 180px;
      background: linear-gradient(135deg, var(--navy-600), var(--navy-800));
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.5rem;
    }
    .article-body { padding: 28px; }
    .article-date {
      font-size: 0.78rem;
      color: var(--gray-400);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 10px;
    }
    .article-body h3 {
      font-size: 1.05rem;
      font-weight: 700;
      margin-bottom: 10px;
      line-height: 1.4;
    }
    .article-body p {
      font-size: 0.85rem;
      color: var(--gray-400);
      line-height: 1.7;
    }
    .article-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      color: var(--gold-400);
      font-size: 0.9rem;
      font-weight: 600;
      text-decoration: none;
      margin-top: 16px;
      transition: gap 0.25s;
    }
    .article-link:hover { gap: 10px; }

    /* ─── EDUCATION TABS ───────────────────────── */
    .edu-tabs {
      display: flex;
      gap: 8px;
      justify-content: center;
      margin-bottom: 48px;
      flex-wrap: wrap;
    }
    .edu-tab {
      padding: 10px 24px;
      border-radius: 100px;
      border: 1px solid rgba(255,255,255,0.1);
      background: transparent;
      color: var(--gray-300);
      font-family: inherit;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.25s;
    }
    .edu-tab.active, .edu-tab:hover {
      background: var(--gold-400);
      color: var(--navy-900);
      border-color: var(--gold-400);
    }

    /* ─── TESTIMONIAL ──────────────────────────── */
    .testimonial-section {
      background: linear-gradient(180deg, var(--navy-800) 0%, var(--navy-900) 100%);
    }
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }
    .testimonial-card {
      background: var(--navy-700);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      padding: 32px;
    }
    .testimonial-stars { color: var(--gold-400); font-size: 1rem; margin-bottom: 16px; letter-spacing: 2px; }
    .testimonial-card blockquote {
      font-size: 0.95rem;
      color: var(--gray-300);
      line-height: 1.8;
      font-style: italic;
      margin-bottom: 24px;
    }
    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .testimonial-avatar {
      width: 44px; height: 44px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--gold-400), var(--navy-500));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 1rem;
      color: var(--navy-900);
    }
    .testimonial-name { font-weight: 700; font-size: 0.9rem; }
    .testimonial-role { font-size: 0.8rem; color: var(--gray-400); }

    /* ─── CTA ──────────────────────────────────── */
    .cta-section {
      position: relative;
      overflow: hidden;
    }
    .cta-box {
      background: linear-gradient(135deg, var(--navy-700), var(--navy-600));
      border: 1px solid rgba(245,200,66,0.15);
      border-radius: 28px;
      padding: 80px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .cta-box::before {
      content: '';
      position: absolute;
      top: -50%; left: -50%;
      width: 200%; height: 200%;
      background: radial-gradient(circle at center, rgba(245,200,66,0.06) 0%, transparent 50%);
    }
    .cta-box h2 {
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 800;
      letter-spacing: -1px;
      margin-bottom: 16px;
      position: relative;
    }
    .cta-box p {
      color: var(--gray-400);
      font-size: 1.1rem;
      max-width: 500px;
      margin: 0 auto 40px;
      position: relative;
    }
    .cta-buttons {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
      position: relative;
    }

    /* ─── FOOTER ────────────────────────────────── */
    .footer {
      border-top: 1px solid rgba(255,255,255,0.05);
      padding: 64px 0 32px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1fr;
      gap: 48px;
      margin-bottom: 48px;
    }
    .footer-brand h3 {
      font-size: 1.3rem;
      font-weight: 800;
      margin-bottom: 12px;
    }
    .footer-brand h3 span { color: var(--gold-400); }
    .footer-brand p {
      color: var(--gray-400);
      font-size: 0.88rem;
      line-height: 1.8;
      margin-bottom: 20px;
    }
    .footer-social {
      display: flex;
      gap: 10px;
    }
    .footer-social a {
      width: 40px; height: 40px;
      border-radius: 10px;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gray-300);
      text-decoration: none;
      transition: all 0.25s;
      font-size: 1.1rem;
    }
    .footer-social a:hover {
      background: rgba(245,200,66,0.1);
      border-color: rgba(245,200,66,0.3);
      color: var(--gold-400);
    }
    .footer-col h4 {
      font-size: 0.85rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      color: var(--gray-400);
      margin-bottom: 20px;
    }
    .footer-col a {
      display: block;
      color: var(--gray-300);
      text-decoration: none;
      font-size: 0.9rem;
      padding: 6px 0;
      transition: color 0.2s;
    }
    .footer-col a:hover { color: var(--gold-400); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.05);
      padding-top: 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
    }
    .footer-bottom p {
      color: var(--gray-500);
      font-size: 0.82rem;
    }
    .footer-badges {
      display: flex;
      gap: 12px;
      align-items: center;
    }
    .footer-badge {
      padding: 6px 14px;
      border-radius: 6px;
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.06);
      font-size: 0.72rem;
      font-weight: 600;
      color: var(--gray-400);
      letter-spacing: 0.5px;
    }

    /* ─── FLOATING WA ──────────────────────────── */
    .wa-float {
      position: fixed;
      bottom: 28px;
      right: 28px;
      z-index: 900;
      width: 60px; height: 60px;
      border-radius: 50%;
      background: #25D366;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.8rem;
      text-decoration: none;
      box-shadow: 0 8px 30px rgba(37,211,102,0.35);
      transition: all 0.3s;
      animation: waFloat 3s ease-in-out infinite;
    }
    .wa-float:hover { transform: scale(1.1); box-shadow: 0 12px 40px rgba(37,211,102,0.5); }
    @keyframes waFloat {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
    }

    /* ─── DISCLAIMER BAR ───────────────────────── */
    .disclaimer-bar {
      background: var(--navy-800);
      border-top: 1px solid rgba(255,255,255,0.04);
      padding: 20px 0;
    }
    .disclaimer-bar p {
      color: var(--gray-500);
      font-size: 0.75rem;
      line-height: 1.8;
      text-align: center;
    }

    /* ─── ANIMATIONS ───────────────────────────── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-on-scroll {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .animate-on-scroll.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ─── RESPONSIVE ───────────────────────────── */
    @media (max-width: 1024px) {
      .hero-content { grid-template-columns: 1fr; gap: 40px; }
      .features-grid, .accounts-grid, .articles-grid, .testimonials-grid { grid-template-columns: repeat(2, 1fr); }
      .footer-grid { grid-template-columns: repeat(2, 1fr); }
      .stats-bar { grid-template-columns: repeat(2, 1fr); }
      .steps-grid { grid-template-columns: repeat(2, 1fr); }
      .steps-grid::before { display: none; }
      .cta-box { padding: 60px 40px; }
    }

    @media (max-width: 768px) {
      .nav-links { display: none; }
      .nav-burger { display: flex; }
      .section { padding: 72px 0; }
      .hero { padding: 120px 0 60px; min-height: auto; }
      .hero h1 { font-size: 2.2rem; }
      .features-grid, .accounts-grid, .articles-grid, .testimonials-grid { grid-template-columns: 1fr; }
      .stats-bar { grid-template-columns: repeat(2, 1fr); padding: 32px; gap: 24px; }
      .steps-grid { grid-template-columns: 1fr; max-width: 400px; margin: 0 auto; }
      .footer-grid { grid-template-columns: 1fr; gap: 32px; }
      .cta-box { padding: 48px 24px; border-radius: 20px; }
      .hero-card { padding: 28px; }
      .rate-display { flex-direction: column; gap: 16px; }
      .footer-bottom { flex-direction: column; text-align: center; }
      .section-header h2 { font-size: 1.8rem; }
      .hero-buttons { flex-direction: column; }
      .hero-buttons .btn { justify-content: center; }
    }
  </style>
</head>
<body>

  <!-- ═══════ NAVBAR ═══════ -->
  <nav class="navbar" id="navbar">
    <div class="container">
      <a href="#" class="nav-logo">IBEX<span>ID</span></a>
      <div class="nav-links">
        <a href="#features">Keunggulan</a>
        <a href="#accounts">Account</a>
        <a href="#howto">Cara Mulai</a>
        <a href="#edukasi">Edukasi</a>
        <a href="#faq">FAQ</a>
        <a href="#daftar" class="nav-cta">Buka Account →</a>
      </div>
      <button class="nav-burger" id="burger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="#features" onclick="closeMenu()">Keunggulan</a>
    <a href="#accounts" onclick="closeMenu()">Tipe Account</a>
    <a href="#howto" onclick="closeMenu()">Cara Mulai</a>
    <a href="#edukasi" onclick="closeMenu()">Edukasi</a>
    <a href="#articles" onclick="closeMenu()">Artikel</a>
    <a href="#testimonial" onclick="closeMenu()">Testimonial</a>
    <a href="#faq" onclick="closeMenu()">FAQ</a>
    <a href="#" onclick="closeMenu()" class="mob-cta">Buka Account Sekarang →</a>
  </div>

  <!-- ═══════ HERO ═══════ -->
  <section class="hero" id="hero">
    <div class="hero-glow g1"></div>
    <div class="hero-glow g2"></div>
    <div class="container">
      <div class="hero-content">
        <div>
          <div class="hero-tagline">IB Resmi Exness Indonesia Sejak 2009</div>
          <h1>Trading Forex<br>Tanpa Batas,<br><span class="gold-text">Profit Maksimal.</span></h1>
          <p>Platform trading terpercaya dengan spread mulai 0.3 pips, leverage hingga 1:2000, dan deposit/withdraw otomatis dalam hitungan menit.</p>
          <div class="hero-buttons">
            <a href="#daftar" class="btn btn-primary">Buka Account Gratis →</a>
            <a href="#howto" class="btn btn-outline">Pelajari Lebih Lanjut</a>
          </div>
        </div>
        <div class="hero-card">
          <h3>💱 Kurs Hari Ini</h3>
          <div class="rate-display">
            <div class="rate-item">
              <div class="rate-label">Deposit</div>
              <div class="rate-value">16.900<span class="currency">IDR/USD</span></div>
            </div>
            <div class="rate-item">
              <div class="rate-label">Withdraw</div>
              <div class="rate-value">16.500<span class="currency">IDR/USD</span></div>
            </div>
          </div>
          <div class="quick-actions">
            <a href="#">Deposit Bank Lokal <span class="arrow">→</span></a>
            <a href="#">Withdraw Instan <span class="arrow">→</span></a>
            <a href="#">Login Member Area <span class="arrow">→</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ TICKER ═══════ -->
  <div class="ticker-wrap">
    <div class="ticker">
      <div class="ticker-item"><span class="pair">EUR/USD</span> <span class="price">1.0842</span> <span class="change up">+0.12%</span></div>
      <div class="ticker-item"><span class="pair">GBP/USD</span> <span class="price">1.2715</span> <span class="change up">+0.08%</span></div>
      <div class="ticker-item"><span class="pair">USD/JPY</span> <span class="price">149.53</span> <span class="change down">-0.15%</span></div>
      <div class="ticker-item"><span class="pair">XAU/USD</span> <span class="price">2,634.20</span> <span class="change up">+0.42%</span></div>
      <div class="ticker-item"><span class="pair">EUR/JPY</span> <span class="price">162.08</span> <span class="change down">-0.03%</span></div>
      <div class="ticker-item"><span class="pair">AUD/USD</span> <span class="price">0.6572</span> <span class="change up">+0.21%</span></div>
      <div class="ticker-item"><span class="pair">USD/CHF</span> <span class="price">0.8803</span> <span class="change down">-0.09%</span></div>
      <div class="ticker-item"><span class="pair">NZD/USD</span> <span class="price">0.6108</span> <span class="change up">+0.17%</span></div>
      <!-- Duplicate for seamless scroll -->
      <div class="ticker-item"><span class="pair">EUR/USD</span> <span class="price">1.0842</span> <span class="change up">+0.12%</span></div>
      <div class="ticker-item"><span class="pair">GBP/USD</span> <span class="price">1.2715</span> <span class="change up">+0.08%</span></div>
      <div class="ticker-item"><span class="pair">USD/JPY</span> <span class="price">149.53</span> <span class="change down">-0.15%</span></div>
      <div class="ticker-item"><span class="pair">XAU/USD</span> <span class="price">2,634.20</span> <span class="change up">+0.42%</span></div>
      <div class="ticker-item"><span class="pair">EUR/JPY</span> <span class="price">162.08</span> <span class="change down">-0.03%</span></div>
      <div class="ticker-item"><span class="pair">AUD/USD</span> <span class="price">0.6572</span> <span class="change up">+0.21%</span></div>
      <div class="ticker-item"><span class="pair">USD/CHF</span> <span class="price">0.8803</span> <span class="change down">-0.09%</span></div>
      <div class="ticker-item"><span class="pair">NZD/USD</span> <span class="price">0.6108</span> <span class="change up">+0.17%</span></div>
    </div>
  </div>

  <!-- ═══════ STATS ═══════ -->
  <section class="section" style="padding-bottom: 48px;">
    <div class="container">
      <div class="stats-bar animate-on-scroll">
        <div class="stat-item">
          <h3>15+</h3>
          <p>Tahun Beroperasi</p>
        </div>
        <div class="stat-item">
          <h3>1:2000</h3>
          <p>Leverage Maksimal</p>
        </div>
        <div class="stat-item">
          <h3>700+</h3>
          <p>Instrumen Trading</p>
        </div>
        <div class="stat-item">
          <h3>0.3</h3>
          <p>Spread Dari (Pips)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ FEATURES ═══════ -->
  <section class="section" id="features" style="padding-top: 48px;">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <span class="badge badge-gold">Keunggulan</span>
        <h2>Mengapa Trader Memilih <span class="gold-text">IBEX ID</span>?</h2>
        <p>Platform terpercaya dengan teknologi terdepan untuk memaksimalkan profit Anda.</p>
      </div>
      <div class="features-grid">
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">⚡</div>
          <h3>Eksekusi Ultra Cepat</h3>
          <p>Tanpa requote, eksekusi order dalam hitungan milidetik untuk hasil trading yang optimal.</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">🏦</div>
          <h3>Deposit & WD Otomatis</h3>
          <p>Deposit dan withdraw via bank lokal BCA, Mandiri, BRI, BNI — proses otomatis dalam hitungan menit.</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">🎯</div>
          <h3>Spread Mulai 0.3 Pips</h3>
          <p>Spread terkecil di industri forex untuk memaksimalkan keuntungan setiap transaksi Anda.</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">🤖</div>
          <h3>Robot Trading (EA)</h3>
          <p>Bebas menggunakan Expert Advisors (EA), scalping, dan hedging tanpa batasan.</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">🕌</div>
          <h3>Islamic Account</h3>
          <p>Tersedia akun syariah bebas swap untuk trader muslim yang mengedepankan prinsip halal.</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">💰</div>
          <h3>Cash Back $3/Lot</h3>
          <p>Bonus cash back money hingga $3 USD per lot khusus member IBEX ID. Semakin aktif, semakin untung.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ ACCOUNT TYPES ═══════ -->
  <section class="section accounts-section" id="accounts">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <span class="badge badge-gold">Tipe Account</span>
        <h2>Pilih Account yang <span class="gold-text">Cocok untuk Anda</span></h2>
        <p>Tiga jenis account trading yang dirancang untuk semua level trader.</p>
      </div>
      <div class="accounts-grid">
        <div class="account-card animate-on-scroll">
          <div class="account-type">Account Cent</div>
          <div style="color: var(--gray-400); font-size: 0.88rem;">Pemula</div>
          <div class="account-deposit">$1<small> min. deposit</small></div>
          <ul class="account-features">
            <li>Leverage hingga 1:2000</li>
            <li>Lot mulai 0.01</li>
            <li>Spread dari 0.3 pips</li>
            <li>MetaTrader 4 & 5</li>
            <li>Free Swap tersedia</li>
          </ul>
          <a href="#" class="account-btn">Daftar Sekarang</a>
        </div>
        <div class="account-card popular animate-on-scroll">
          <div class="account-type">Account Mini</div>
          <div style="color: var(--gray-400); font-size: 0.88rem;">Favorit Trader</div>
          <div class="account-deposit">$10<small> min. deposit</small></div>
          <ul class="account-features">
            <li>Leverage hingga 1:2000</li>
            <li>Lot mulai 0.01</li>
            <li>Spread dari 0.3 pips</li>
            <li>MetaTrader 4 & 5</li>
            <li>Bonus deposit 60%</li>
            <li>Cash back $3/lot</li>
          </ul>
          <a href="#" class="account-btn">Daftar Sekarang →</a>
        </div>
        <div class="account-card animate-on-scroll">
          <div class="account-type">Account Classic</div>
          <div style="color: var(--gray-400); font-size: 0.88rem;">Profesional</div>
          <div class="account-deposit">$100<small> min. deposit</small></div>
          <ul class="account-features">
            <li>Leverage hingga 1:2000</li>
            <li>Lot mulai 0.1</li>
            <li>Spread dari 0.1 pips</li>
            <li>MetaTrader 4 & 5</li>
            <li>Gratis VPS</li>
            <li>Priority support</li>
          </ul>
          <a href="#" class="account-btn">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ HOW TO ═══════ -->
  <section class="section" id="howto">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <span class="badge badge-gold">Mulai Trading</span>
        <h2>4 Langkah Mudah <span class="gold-text">Memulai</span></h2>
        <p>Mulai trading forex dalam hitungan menit dengan proses yang simpel.</p>
      </div>
      <div class="steps-grid">
        <div class="step-card animate-on-scroll">
          <div class="step-number">01</div>
          <h3>Registrasi</h3>
          <p>Buka account trading gratis dengan data yang valid.</p>
        </div>
        <div class="step-card animate-on-scroll">
          <div class="step-number">02</div>
          <h3>Verifikasi</h3>
          <p>Upload KTP untuk verifikasi identitas agar akun berstatus Verified.</p>
        </div>
        <div class="step-card animate-on-scroll">
          <div class="step-number">03</div>
          <h3>Deposit</h3>
          <p>Isi saldo melalui bank lokal atau e-currency mulai dari $1 USD.</p>
        </div>
        <div class="step-card animate-on-scroll">
          <div class="step-number">04</div>
          <h3>Mulai Trading</h3>
          <p>Download MetaTrader, login, dan mulai raih profit Anda.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ EDUKASI ═══════ -->
  <section class="section" id="edukasi" style="background: var(--navy-800);">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <span class="badge badge-gold">Edukasi</span>
        <h2>Tingkatkan <span class="gold-text">Skill Trading</span> Anda</h2>
        <p>Materi edukasi lengkap dari dasar hingga mahir untuk semua level trader.</p>
      </div>
      <div class="edu-tabs animate-on-scroll">
        <button class="edu-tab active">Forex Dasar</button>
        <button class="edu-tab">Analisa Fundamental</button>
        <button class="edu-tab">Analisa Teknikal</button>
        <button class="edu-tab">Signal Update</button>
      </div>
      <div class="articles-grid">
        <div class="article-card animate-on-scroll">
          <div class="article-thumb">📊</div>
          <div class="article-body">
            <div class="article-date">07 Februari 2018</div>
            <h3>Exness Meningkatkan Lisensi FCA dan Bersiap Operasi di Inggris</h3>
            <p>Langkah besar Exness dalam memperluas regulasi global untuk keamanan trader.</p>
            <a href="#" class="article-link">Baca Selengkapnya →</a>
          </div>
        </div>
        <div class="article-card animate-on-scroll">
          <div class="article-thumb">⚽</div>
          <div class="article-body">
            <div class="article-date">01 Agustus 2017</div>
            <h3>Exness Mengumumkan Kemitraan Resmi dengan Real Madrid</h3>
            <p>Kolaborasi strategis yang memperkuat posisi Exness di panggung internasional.</p>
            <a href="#" class="article-link">Baca Selengkapnya →</a>
          </div>
        </div>
        <div class="article-card animate-on-scroll">
          <div class="article-thumb">🏆</div>
          <div class="article-body">
            <div class="article-date">11 Juli 2016</div>
            <h3>Kontes Akun Demo FX1 Grand Prix 2016 Exness Di Mulai</h3>
            <p>Kesempatan emas bagi trader untuk berkompetisi dan memenangkan hadiah menarik.</p>
            <a href="#" class="article-link">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ TESTIMONIAL ═══════ -->
  <section class="section testimonial-section" id="testimonial">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <span class="badge badge-green">Testimonial</span>
        <h2>Apa Kata <span class="gold-text">Trader Kami</span>?</h2>
        <p>Ribuan trader Indonesia telah mempercayakan aktivitas trading mereka bersama IBEX ID.</p>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card animate-on-scroll">
          <div class="testimonial-stars">★★★★★</div>
          <blockquote>"Deposit dan withdraw sangat cepat, hanya butuh beberapa menit saja via bank lokal. Support tim IBExnessindo sangat responsif."</blockquote>
          <div class="testimonial-author">
            <div class="testimonial-avatar">A</div>
            <div>
              <div class="testimonial-name">Andi S.</div>
              <div class="testimonial-role">Trader sejak 2015</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card animate-on-scroll">
          <div class="testimonial-stars">★★★★★</div>
          <blockquote>"Spread sangat kompetitif dan eksekusi cepat tanpa requote. Cash back per lot juga sangat menguntungkan untuk scalper."</blockquote>
          <div class="testimonial-author">
            <div class="testimonial-avatar">R</div>
            <div>
              <div class="testimonial-name">Rizky P.</div>
              <div class="testimonial-role">Scalper profesional</div>
            </div>
          </div>
        </div>
        <div class="testimonial-card animate-on-scroll">
          <div class="testimonial-stars">★★★★★</div>
          <blockquote>"Saya senang ada opsi Islamic Account. Proses registrasi mudah dan bonus deposit membantu menambah modal awal saya."</blockquote>
          <div class="testimonial-author">
            <div class="testimonial-avatar">F</div>
            <div>
              <div class="testimonial-name">Fitri M.</div>
              <div class="testimonial-role">Swing trader</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ CTA ═══════ -->
  <section class="section cta-section" id="daftar">
    <div class="container">
      <div class="cta-box animate-on-scroll">
        <h2>Siap Mulai <span class="gold-text">Trading?</span></h2>
        <p>Buka account trading Anda sekarang dan rasakan kemudahan trading bersama IBEX ID.</p>
        <div class="cta-buttons">
          <a href="#" class="btn btn-primary" style="font-size: 1.1rem; padding: 18px 40px;">Buka Account Sekarang →</a>
          <a href="https://wa.me/6281229443909/" class="btn btn-outline" style="font-size: 1.1rem; padding: 18px 40px;">💬 Hubungi via WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════ FOOTER ═══════ -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <h3>IBEX<span>ID</span></h3>
          <p>Introducing Broker resmi Exness di Indonesia sejak 2009. Melayani para trader dengan deposit/withdraw bank lokal, bonus kompetitif, dan support profesional.</p>
          <div class="footer-social">
            <a href="https://www.facebook.com/Exnessindo" aria-label="Facebook">f</a>
            <a href="#" aria-label="Twitter">𝕏</a>
            <a href="https://wa.me/6281229443909/" aria-label="WhatsApp">w</a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Trading</h4>
          <a href="#">Buka Account</a>
          <a href="#">Deposit Bank Lokal</a>
          <a href="#">Withdraw Instan</a>
          <a href="#">Download MT4/MT5</a>
          <a href="#">Exness Calculator</a>
        </div>
        <div class="footer-col">
          <h4>Edukasi</h4>
          <a href="#">Forex Dasar</a>
          <a href="#">Analisa Fundamental</a>
          <a href="#">Analisa Teknikal</a>
          <a href="#">Signal Update</a>
          <a href="#">Artikel</a>
        </div>
        <div class="footer-col">
          <h4>Informasi</h4>
          <a href="#">Tentang Kami</a>
          <a href="#">Spesifikasi Kontrak</a>
          <a href="#">Program Partner</a>
          <a href="#">FAQ</a>
          <a href="#">Disclaimer</a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2009–2025 IBExnessindo.com — All Rights Reserved</p>
        <div class="footer-badges">
          <span class="footer-badge">EXNESS (CY) LTD</span>
          <span class="footer-badge">ISO 9001</span>
          <span class="footer-badge">CySEC Regulated</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- ═══════ DISCLAIMER ═══════ -->
  <div class="disclaimer-bar">
    <div class="container">
      <p><strong>Disclaimer:</strong> Perdagangan berjangka termasuk Forex, Indeks dan sejenisnya mempunyai resiko yang tinggi. Anda perlu secara hati-hati mempertimbangkan sasaran hasil investasi, tingkat pengalaman, dan segala resiko sebelum memutuskan untuk transaksi. Kemungkinan bahwa Anda merugi dari seluruh modal bisa terjadi. Silahkan mencari nasihat dari penasehat keuangan mandiri.</p>
    </div>
  </div>

  <!-- ═══════ FLOATING WA ═══════ -->
  <a href="https://wa.me/6281229443909/" class="wa-float" target="_blank" rel="noopener" aria-label="Chat WhatsApp">
    💬
  </a>

  <script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 40);
    });

    // Mobile menu
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    burger.addEventListener('click', () => {
      burger.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    });
    function closeMenu() {
      burger.classList.remove('active');
      mobileMenu.classList.remove('active');
      document.body.style.overflow = '';
    }

    // Scroll animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('visible');
          }, i * 80);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // Education tabs (visual only)
    document.querySelectorAll('.edu-tab').forEach(tab => {
      tab.addEventListener('click', () => {
        document.querySelectorAll('.edu-tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
      });
    });
  </script>
</body>
</html>