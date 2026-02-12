<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_f81ecd42c294a4dbf91ae09eda08839b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'inline_styles' => [$this, 'block_inline_styles'],
            'body' => [$this, 'block_body'],
            'before_footer' => [$this, 'block_before_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "    
    <style>
        :root {
            --bg-main: #0b0b0e;
            --bg-card: rgba(20,20,25,0.85);
            --bg-card-light: rgba(30,30,40,0.9);
            --red: #ff2d2d;
            --red-gradient: linear-gradient(135deg, #ff2d2d 0%, #ff5e5e 100%);
            --red-soft: rgba(255,45,45,0.15);
            --blue: #4d7cff;
            --blue-gradient: linear-gradient(135deg, #4d7cff 0%, #6d9cff 100%);
            --green: #2dff8b;
            --green-gradient: linear-gradient(135deg, #2dff8b 0%, #5dffa3 100%);
            --purple: #a82dff;
            --purple-gradient: linear-gradient(135deg, #a82dff 0%, #c85dff 100%);
            --orange: #ff8a2d;
            --orange-gradient: linear-gradient(135deg, #ff8a2d 0%, #ffaa5d 100%);
            --yellow: #ffd42d;
            --yellow-gradient: linear-gradient(135deg, #ffd42d 0%, #ffe45d 100%);
            --text-main: #ffffff;
            --text-muted: #b3b3b3;
            --text-light: #e6e6e6;
            --border: rgba(255,45,45,0.2);
            --border-light: rgba(255,255,255,0.1);
            --shadow: 0 10px 30px rgba(0,0,0,0.5);
            --shadow-lg: 0 20px 50px rgba(0,0,0,0.7);
            --radius: 12px;
            --radius-lg: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { 
            box-sizing: border-box; 
            margin: 0; 
            padding: 0; 
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top, #1a1a22 0%, #07070a 70%);
            color: var(--text-main);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255,45,45,0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(77,124,255,0.05) 0%, transparent 50%);
            z-index: -1;
            pointer-events: none;
            animation: backgroundPulse 15s ease-in-out infinite alternate;
        }

        @keyframes backgroundPulse {
            0% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes logoGlow {
            0% { box-shadow: 0 0 10px rgba(255,45,45,0.3); }
            100% { box-shadow: 0 0 20px rgba(255,45,45,0.6); }
        }

        @keyframes pulseDot {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        @keyframes fadeInRight {
            from { transform: translateX(20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes notificationPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        @keyframes avatarFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes widthGrow {
            from { width: 0; }
            to { width: 100px; }
        }

        @keyframes textGlow {
            0% { filter: drop-shadow(0 0 5px rgba(255,45,45,0.3)); }
            100% { filter: drop-shadow(0 0 15px rgba(255,45,45,0.6)); }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-30px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes borderFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes countUp {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes underlineSlide {
            from { width: 0; }
            to { width: 50px; }
        }

        @keyframes scorePulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        @keyframes slideInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes ripple {
            to {
                width: 300px;
                height: 300px;
                opacity: 0;
            }
        }

        /* ================= HEADER ================= */
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 40px;
            background: rgba(10,10,15,0.9);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
            animation: slideDown 0.5s ease-out;
        }

        .logo {
            font-weight: 800;
            font-size: 24px;
            letter-spacing: 1.5px;
            display: flex;
            align-items: center;
        }

        .logo span { 
            color: var(--red);
            margin-left: 4px;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: var(--red-gradient);
            border-radius: 8px;
            margin-right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 18px;
            animation: logoGlow 2s infinite alternate;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        nav a {
            padding: 10px 20px;
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            transition: var(--transition);
            border-radius: 8px;
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        nav a:nth-child(1) { animation-delay: 0.1s; }
        nav a:nth-child(2) { animation-delay: 0.2s; }
        nav a:nth-child(3) { animation-delay: 0.3s; }
        nav a:nth-child(4) { animation-delay: 0.4s; }
        nav a:nth-child(5) { animation-delay: 0.5s; }
        nav a:nth-child(6) { animation-delay: 0.6s; }
        nav a:nth-child(7) { animation-delay: 0.7s; }
        nav a:nth-child(8) { animation-delay: 0.8s; }

        nav a.active, nav a:hover { 
            color: var(--red);
            background: rgba(255,45,45,0.1);
            transform: translateY(-2px);
        }

        nav a.active::after {
            content: '';
            position: absolute;
            bottom: -18px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            background: var(--red);
            border-radius: 50%;
            animation: pulseDot 1.5s infinite;
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 16px;
            animation: fadeInRight 0.5s ease-out;
        }

        .notification-badge {
            position: relative;
            cursor: pointer;
            color: var(--text-light);
            transition: var(--transition);
            padding: 8px;
            border-radius: 8px;
        }

        .notification-badge:hover {
            background: rgba(255,255,255,0.05);
            color: white;
            transform: scale(1.1);
        }

        .notification-badge i {
            font-size: 20px;
        }

        .notification-count {
            position: absolute;
            top: 0;
            right: 0;
            background: var(--red);
            color: white;
            font-size: 10px;
            font-weight: 700;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: notificationPulse 2s infinite;
        }

        /* ============ USER PROFILE ============ */
        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 8px 16px;
            border-radius: 10px;
            transition: var(--transition);
            background: rgba(255,255,255,0.03);
            position: relative;
        }

        .user-profile:hover {
            background: rgba(255,255,255,0.08);
        }

        .user-profile.active {
            background: rgba(255,45,45,0.1);
            border-color: rgba(255,45,45,0.3);
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--red-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            animation: avatarFloat 3s ease-in-out infinite;
            flex-shrink: 0;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            min-width: 100px;
        }

        .username {
            font-weight: 600;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-role {
            font-size: 12px;
            color: var(--text-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-profile i.fa-chevron-down {
            font-size: 12px;
            transition: var(--transition);
            margin-left: 4px;
        }
      /* Add this to your CSS */
.dropdown-toggle-btn {
    background: none;
    border: none;
    color: inherit;
    cursor: pointer;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 4px;
    transition: var(--transition);
    border-radius: 6px;
    outline: none; /* Remove default focus */
}
.dropdown-toggle-btn:focus-visible {
    outline: 2px solid var(--red);
    outline-offset: 2px;
}

.dropdown-toggle-btn:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: scale(1.1);
}

.dropdown-toggle-btn i {
    font-size: 12px;
    transition: var(--transition);
}

.user-profile.active .dropdown-toggle-btn i {
    transform: rotate(180deg);
}


        .user-profile.active i.fa-chevron-down {
            transform: rotate(180deg);
        }

        /* ============ DROPDOWN FIXES ============ */
.user-dropdown {
    position: absolute;
    top: calc(100% + 8px) !important;
    right: 0 !important;
    background: rgba(15, 15, 20, 0.98) !important;
    border: 1px solid rgba(255, 45, 45, 0.35) !important;
    border-radius: 12px !important;
    min-width: 200px !important;
    padding: 8px 0 !important;
    box-shadow: var(--shadow-lg) !important;
    backdrop-filter: blur(20px) !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transform: translateY(-10px) !important;
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s !important;
    z-index: 1000 !important;
    display: block !important;
}

.user-profile.active .user-dropdown {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateY(0) !important;
}

/* Make sure dropdown stays above everything */
.user-profile {
    position: relative;
    z-index: 1001;
}

.user-dropdown a {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 12px 20px !important;
    color: var(--text-light) !important;
    text-decoration: none !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    transition: var(--transition) !important;
}

.user-dropdown a:hover {
    background: rgba(255, 45, 45, 0.15) !important;
    color: var(--red) !important;
    padding-left: 24px !important;
}

        /* ================= MAIN CONTENT ================= */
        .container {
            padding: 30px 40px;
            max-width: 1600px;
            margin: 0 auto;
            animation: fadeIn 0.8s ease-out;
        }

        /* ================= HERO ================= */
        .hero {
            text-align: center;
            padding: 70px 20px 40px;
            position: relative;
            margin-bottom: 40px;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--red-gradient);
            border-radius: 2px;
            animation: widthGrow 1s ease-out;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 800;
            background: linear-gradient(90deg, #ff2d2d, #ff5e5e, #ff8a8a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 16px;
            line-height: 1.1;
            animation: textGlow 3s infinite alternate;
        }

        .hero p {
            color: var(--text-muted);
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .hero-badges {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .hero-badge {
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--border-light);
            border-radius: 50px;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            animation: fadeInUp 0.8s ease-out backwards;
        }

        .hero-badge:nth-child(1) { animation-delay: 0.2s; }
        .hero-badge:nth-child(2) { animation-delay: 0.3s; }
        .hero-badge:nth-child(3) { animation-delay: 0.4s; }
        .hero-badge:nth-child(4) { animation-delay: 0.5s; }

        .hero-badge:hover {
            transform: translateY(-3px) scale(1.05);
            border-color: var(--red);
            background: rgba(255,45,45,0.1);
            box-shadow: 0 10px 20px rgba(255,45,45,0.2);
        }

        .hero-badge i {
            color: var(--red);
            font-size: 16px;
        }

        /* ================= FEATURED MODULES ================= */
        .modules-section {
            margin: 60px 0;
        }

        .section-title {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 30px;
            text-align: center;
            background: linear-gradient(90deg, #ffffff, #e6e6e6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: slideInLeft 0.8s ease-out;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .module-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 30px;
            position: relative;
            backdrop-filter: blur(10px);
            transition: var(--transition);
            overflow: hidden;
            min-height: 240px;
            display: flex;
            flex-direction: column;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .module-card:nth-child(1) { animation-delay: 0.1s; }
        .module-card:nth-child(2) { animation-delay: 0.2s; }
        .module-card:nth-child(3) { animation-delay: 0.3s; }

        .module-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-lg);
            border-color: var(--red);
        }

        .module-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--red-gradient);
            animation: borderFlow 3s linear infinite;
        }

        .module-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
            transition: var(--transition);
        }

        .module-card:hover .module-icon {
            transform: rotateY(180deg);
        }

        .module-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .module-description {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .module-stats {
            display: flex;
            gap: 20px;
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid var(--border-light);
        }

        .module-stat {
            text-align: center;
        }

        .module-stat-value {
            font-size: 20px;
            font-weight: 800;
            color: var(--red);
            animation: countUp 1s ease-out;
        }

        .module-stat-label {
            font-size: 12px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ================= STATS ================= */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin: 50px 0;
        }

        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 26px;
            position: relative;
            backdrop-filter: blur(10px);
            transition: var(--transition);
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .stat-card:nth-child(1) { animation-delay: 0.1s; }
        .stat-card:nth-child(2) { animation-delay: 0.2s; }
        .stat-card:nth-child(3) { animation-delay: 0.3s; }
        .stat-card:nth-child(4) { animation-delay: 0.4s; }

        .stat-card:hover {
            transform: translateY(-5px) rotateX(5deg);
            box-shadow: var(--shadow);
            border-color: rgba(255,45,45,0.4);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--red-gradient);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--red-soft);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            color: var(--red);
            font-size: 22px;
            transition: var(--transition);
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 4px;
            background: linear-gradient(90deg, #ffffff, #e6e6e6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: pulse 2s infinite;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 15px;
            margin-bottom: 8px;
        }

        .stat-change {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            margin-top: 8px;
            animation: slideInRight 0.5s ease-out;
        }

        .positive {
            color: var(--green);
        }

        .negative {
            color: var(--red);
        }

        /* ================= ACTIVITY FEED ================= */
        .activity-section {
            margin: 60px 0;
        }

        .activity-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-top: 30px;
        }

        .activity-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 30px;
            animation: fadeInUp 0.8s ease-out;
        }

        .activity-card h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .activity-card h3 i {
            color: var(--red);
            animation: spinSlow 10s linear infinite;
        }

        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-light);
            transition: var(--transition);
            animation: slideInLeft 0.5s ease-out backwards;
        }

        .activity-item:nth-child(1) { animation-delay: 0.1s; }
        .activity-item:nth-child(2) { animation-delay: 0.2s; }
        .activity-item:nth-child(3) { animation-delay: 0.3s; }
        .activity-item:nth-child(4) { animation-delay: 0.4s; }

        .activity-item:hover {
            transform: translateX(10px);
            border-color: var(--red);
        }

        .activity-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .activity-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: white;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .activity-item:hover .activity-icon {
            transform: scale(1.1) rotate(10deg);
        }

        .activity-content h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .activity-content p {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 6px;
        }

        .activity-time {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* ================= MATCHES ================= */
        .matches-section {
            margin: 60px 0;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            animation: fadeIn 0.8s ease-out;
        }

        .section-header h2 {
            font-size: 26px;
            font-weight: 700;
            position: relative;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--red-gradient);
            animation: underlineSlide 1s ease-out;
        }

        .section-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary {
            background: var(--red-gradient);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255,45,45,0.3);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.05);
            color: var(--text-light);
            border: 1px solid var(--border-light);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }

        .matches-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .match-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
            animation: slideInRight 0.6s ease-out backwards;
        }

        .match-card:nth-child(1) { animation-delay: 0.1s; }
        .match-card:nth-child(2) { animation-delay: 0.2s; }
        .match-card:nth-child(3) { animation-delay: 0.3s; }

        .match-card:hover {
            transform: translateX(5px) scale(1.02);
            border-color: rgba(255,45,45,0.4);
            background: rgba(255,45,45,0.03);
            box-shadow: var(--shadow);
        }

        .match-teams {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .team {
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
        }

        .match-card:hover .team {
            transform: translateX(5px);
        }

        .team-logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            border: 2px solid var(--border-light);
            transition: var(--transition);
        }

        .match-card:hover .team-logo {
            transform: scale(1.1) rotate(10deg);
            border-color: var(--red);
        }

        .team-name {
            font-weight: 600;
            font-size: 16px;
        }

        .match-score {
            font-weight: 800;
            font-size: 24px;
            margin: 0 16px;
            position: relative;
        }

        .match-score::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 30px;
            background: var(--red-gradient);
            animation: scorePulse 2s infinite;
        }

        .match-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .badge {
            background: var(--red);
            color: #fff;
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .badge:hover::before {
            left: 100%;
        }

        .badge-win {
            background: var(--green);
        }

        .badge-loss {
            background: var(--red);
        }

        .badge-upcoming {
            background: var(--blue);
        }

        .match-date {
            font-size: 14px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .match-card:hover .match-date {
            color: var(--text-light);
        }

        /* ================= UPCOMING EVENTS ================= */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 30px;
        }

        .event-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 25px;
            transition: var(--transition);
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .event-card:nth-child(1) { animation-delay: 0.1s; }
        .event-card:nth-child(2) { animation-delay: 0.2s; }
        .event-card:nth-child(3) { animation-delay: 0.3s; }

        .event-card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: var(--shadow);
            border-color: var(--red);
        }

        .event-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .event-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            transition: var(--transition);
        }

        .event-card:hover .event-icon {
            transform: rotateY(180deg);
        }

        .event-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .event-date {
            font-size: 14px;
            color: var(--text-muted);
        }

        .event-participants {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
            font-size: 13px;
            color: var(--text-muted);
            transition: var(--transition);
        }

        .event-card:hover .event-participants {
            color: var(--text-light);
        }

        /* ================= FOOTER ================= */
        footer {
            margin-top: 80px;
            padding: 60px 40px 30px;
            background: rgba(10,10,15,0.95);
            border-top: 1px solid var(--border);
            animation: fadeInUp 1s ease-out;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section {
            animation: slideInUp 0.6s ease-out backwards;
        }

        .footer-section:nth-child(1) { animation-delay: 0.1s; }
        .footer-section:nth-child(2) { animation-delay: 0.2s; }
        .footer-section:nth-child(3) { animation-delay: 0.3s; }
        .footer-section:nth-child(4) { animation-delay: 0.4s; }

        .footer-section h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--red);
            position: relative;
            display: inline-block;
        }

        .footer-section h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--red-gradient);
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-links a:hover {
            color: var(--red);
            transform: translateX(10px);
        }

        .footer-links a i {
            font-size: 12px;
            opacity: 0;
            transition: var(--transition);
        }

        .footer-links a:hover i {
            opacity: 1;
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--red);
            color: white;
            transform: translateY(-5px) rotate(10deg);
        }

        .newsletter {
            margin-top: 20px;
        }

        .newsletter input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--border-light);
            border-radius: 8px;
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 10px;
            transition: var(--transition);
        }

        .newsletter input:focus {
            outline: none;
            border-color: var(--red);
            box-shadow: 0 0 0 2px rgba(255,45,45,0.2);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid var(--border-light);
            color: var(--text-muted);
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 18px;
            color: var(--red);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 1200px) {
            .activity-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            header {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }
            
            nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .container {
                padding: 20px;
            }
            
            .hero h1 {
                font-size: 40px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            footer {
                padding: 40px 20px 20px;
            }
            
            .user-info {
                min-width: auto;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }
            
            .hero-badges {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-badge {
                width: 100%;
                max-width: 300px;
            }
            
            .modules-grid {
                grid-template-columns: 1fr;
            }
            
            .stats {
                grid-template-columns: 1fr;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .match-card {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .match-teams {
                flex-direction: column;
                gap: 10px;
            }
            
            .match-details {
                flex-direction: column;
                gap: 10px;
            }
            
            .user-info {
                display: none;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .copyright {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            /* Mobile user profile fix */
            .user-profile .user-info {
                display: none;
            }
            
            .user-dropdown {
                position: fixed;
                top: auto;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                border-radius: 20px 20px 0 0;
                min-width: auto;
            }
            
            .user-profile.active .user-dropdown {
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            nav a {
                padding: 8px 12px;
                font-size: 13px;
            }
            
            .user-actions {
                gap: 10px;
            }
            
            .avatar {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }
        }
    </style>
    
    ";
        // line 1460
        yield from $this->unwrap()->yieldBlock('inline_styles', $context, $blocks);
        // line 1461
        yield "</head>
<body>
<header>
    <div class=\"logo\">
        <div class=\"logo-icon\">P</div>
        PHANTOM<span>FORCE</span>
    </div>
    
    <nav>
        <a href=\"";
        // line 1470
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        yield "\"
           class=\"";
        // line 1471
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1471, $this->source); })()), "request", [], "any", false, false, false, 1471), "attributes", [], "any", false, false, false, 1471), "get", ["_route"], "method", false, false, false, 1471) == "app_acceuil")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-home\"></i> Accueil
        </a>
         <a href=\"";
        // line 1474
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\" class=\"";
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1474, $this->source); })()), "request", [], "any", false, false, false, 1474), "get", ["_route"], "method", false, false, false, 1474)) && is_string($_v1 = "front_agent") && str_starts_with($_v0, $_v1))) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-user\"></i> Champions
        </a>

        <a href=\"";
        // line 1478
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        yield "\" class=\"";
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1478, $this->source); })()), "request", [], "any", false, false, false, 1478), "get", ["_route"], "method", false, false, false, 1478)) && is_string($_v3 = "app_team") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-users\"></i> Équipes
        </a>

       <a href=\"";
        // line 1482
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"";
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1482, $this->source); })()), "request", [], "any", false, false, false, 1482), "get", ["_route"], "method", false, false, false, 1482)) && is_string($_v5 = "app_match") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-trophy\"></i> Matchs
        </a>

        <a href=\"";
        // line 1486
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournaments");
        yield "\" class=\"";
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1486, $this->source); })()), "request", [], "any", false, false, false, 1486), "get", ["_route"], "method", false, false, false, 1486)) && is_string($_v7 = "app_tournament") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-calendar-alt\"></i> Tournois
        </a>

        <a href=\"";
        // line 1490
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"";
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1490, $this->source); })()), "request", [], "any", false, false, false, 1490), "get", ["_route"], "method", false, false, false, 1490)) && is_string($_v9 = "app_coaching") && str_starts_with($_v8, $_v9))) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-chalkboard-teacher\"></i> Coaching
        </a>

         <a href=\"";
        // line 1494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1494, $this->source); })()), "request", [], "any", false, false, false, 1494), "get", ["_route"], "method", false, false, false, 1494) == "app_shop")) ? ("active") : (""));
        yield "\">
            <i class=\"fas fa-shopping-cart\"></i> Boutique
        </a>

    </nav>
    
    <div class=\"user-actions\">
        <div class=\"notification-badge\">
            <i class=\"fas fa-bell\"></i>
            ";
        // line 1503
        $context["notification_count"] = ((array_key_exists("notification_count", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notification_count"]) || array_key_exists("notification_count", $context) ? $context["notification_count"] : (function () { throw new RuntimeError('Variable "notification_count" does not exist.', 1503, $this->source); })()), 3)) : (3));
        // line 1504
        yield "            ";
        if (((isset($context["notification_count"]) || array_key_exists("notification_count", $context) ? $context["notification_count"] : (function () { throw new RuntimeError('Variable "notification_count" does not exist.', 1504, $this->source); })()) > 0)) {
            // line 1505
            yield "                <div class=\"notification-count\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification_count"]) || array_key_exists("notification_count", $context) ? $context["notification_count"] : (function () { throw new RuntimeError('Variable "notification_count" does not exist.', 1505, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 1507
        yield "        </div>
        
       <!-- In the header section, replace the user-profile section with this: -->
<div class=\"user-profile\" id=\"user-profile\">
    <div class=\"avatar\" tabindex=\"0\" role=\"button\" aria-label=\"Toggle user menu\">
        ";
        // line 1512
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1512, $this->source); })()), "user", [], "any", false, false, false, 1512)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1512), "initials", [], "any", true, true, false, 1512)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1512, $this->source); })()), "user", [], "any", false, false, false, 1512), "initials", [], "any", false, false, false, 1512), "MK")) : ("MK")), "html", null, true)) : ("GU"));
        yield "
    </div>
    <div class=\"user-info\">
        <div class=\"username\">
            ";
        // line 1516
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1516, $this->source); })()), "user", [], "any", false, false, false, 1516)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1516), "username", [], "any", true, true, false, 1516)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1516, $this->source); })()), "user", [], "any", false, false, false, 1516), "username", [], "any", false, false, false, 1516), "Invité")) : ("Invité")), "html", null, true)) : ("Invité"));
        yield "
        </div>
        <div class=\"user-role\">
            ";
        // line 1519
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1519, $this->source); })()), "user", [], "any", false, false, false, 1519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 1519), "role", [], "any", true, true, false, 1519)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1519, $this->source); })()), "user", [], "any", false, false, false, 1519), "role", [], "any", false, false, false, 1519), "Visiteur")) : ("Visiteur")), "html", null, true)) : ("Visiteur"));
        yield "
        </div>
    </div>
    <button class=\"dropdown-toggle-btn\" type=\"button\" 
            aria-label=\"Toggle user menu\"
            aria-expanded=\"false\"
            aria-controls=\"user-dropdown-menu\">
        <i class=\"fas fa-chevron-down\"></i>
    </button>

    <!-- DROPDOWN -->
    <div class=\"user-dropdown\" id=\"user-dropdown-menu\" aria-labelledby=\"user-profile\">
        ";
        // line 1531
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1531, $this->source); })()), "user", [], "any", false, false, false, 1531)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1532
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
            </a>
            <a href=\"";
            // line 1535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1535, $this->source); })()), "user", [], "any", false, false, false, 1535), "id", [], "any", false, false, false, 1535)]), "html", null, true);
            yield "\">
                <i class=\"fas fa-user-cog\"></i> Mon Profil
            </a>
            <a href=\"#\">
                <i class=\"fas fa-cog\"></i> Paramètres
            </a>
        ";
        } else {
            // line 1542
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                <i class=\"fas fa-sign-in-alt\"></i> Connexion
            </a>
            <a href=\"#\">
                <i class=\"fas fa-user-plus\"></i> Inscription
            </a>
        ";
        }
        // line 1549
        yield "    </div>
</div>
    </div>
</header>

<main class=\"container\">
    ";
        // line 1555
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 1556
        yield "</main>

";
        // line 1558
        yield from $this->unwrap()->yieldBlock('before_footer', $context, $blocks);
        // line 1559
        yield "
<footer>
    <div class=\"footer-content\">
        <div class=\"footer-section\">
            <h4>Phantom Force</h4>
            <p style=\"color: var(--text-muted); margin-bottom: 20px; font-size: 14px; line-height: 1.6;\">
                Plateforme esport professionnelle dédiée à l'excellence compétitive. Nous fournissons les outils nécessaires pour transformer les joueurs passionnés en champions.
            </p>
            <div class=\"social-links\">
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-discord\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-twitch\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
        
        <div class=\"footer-section\">
            <h4>Navigation</h4>
            <div class=\"footer-links\">
                <a href=\"";
        // line 1579
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        yield "\"><i class=\"fas fa-chevron-right\"></i> Accueil</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Champions</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Équipes</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Matchs</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Tournois</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Coaching</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Boutique</a>
            </div>
        </div>
        
        <div class=\"footer-section\">
            <h4>Support</h4>
            <div class=\"footer-links\">
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Centre d'aide</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Contact</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> FAQ</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Tutoriels</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Status serveur</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Rapporter un bug</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Suggestions</a>
            </div>
        </div>
        
        <div class=\"footer-section\">
            <h4>Newsletter</h4>
            <p style=\"color: var(--text-muted); margin-bottom: 20px; font-size: 14px;\">
                Recevez les dernières actualités esport, les annonces de tournois et les offres exclusives.
            </p>
            <div class=\"newsletter\">
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">S'abonner</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class=\"copyright\">
        <div class=\"footer-logo\">
            <div style=\"width: 24px; height: 24px; background: var(--red-gradient); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 12px;\">P</div>
            PHANTOM FORCE
        </div>
        <div>© ";
        // line 1621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Phantom Force Esports. Tous droits réservés.</div>
        <div style=\"display: flex; gap: 20px;\">
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">Mentions légales</a>
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">Confidentialité</a>
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">Cookies</a>
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">CGU</a>
        </div>
    </div>
</footer>

";
        // line 1631
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 1632
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const userProfile = document.getElementById('user-profile');
    const toggleBtn = userProfile ? userProfile.querySelector('.dropdown-toggle-btn') : null;
    const dropdown = userProfile ? userProfile.querySelector('.user-dropdown') : null;
    
    if (userProfile && toggleBtn && dropdown) {
        console.log('Dropdown setup starting...');
        
        // DEBUG: Add console logs to see what's happening
        userProfile.addEventListener('click', function(e) {
            console.log('User profile clicked', e.target);
        });
        
        // Simple toggle function
        function toggleDropdown(e) {
            if (e) e.stopPropagation();
            console.log('Toggle called, current state:', userProfile.classList.contains('active'));
            
            // Toggle the active class
            userProfile.classList.toggle('active');
            
            // Update ARIA attribute
            const isExpanded = userProfile.classList.contains('active');
            toggleBtn.setAttribute('aria-expanded', isExpanded);
            console.log('New state:', isExpanded ? 'open' : 'closed');
        }
        
        // Click on button
        toggleBtn.addEventListener('click', toggleDropdown);
        
        // Click on avatar
        userProfile.querySelector('.avatar').addEventListener('click', toggleDropdown);
        
        // Click on user info area
        userProfile.querySelector('.user-info').addEventListener('click', toggleDropdown);
        
        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!userProfile.contains(e.target)) {
                userProfile.classList.remove('active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Close dropdown when clicking a link inside it
        dropdown.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                userProfile.classList.remove('active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            });
        });
        
        // Close with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && userProfile.classList.contains('active')) {
                userProfile.classList.remove('active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        console.log('Dropdown setup complete');
    } else {
        console.error('Missing dropdown elements:', { 
            userProfile: !!userProfile, 
            toggleBtn: !!toggleBtn, 
            dropdown: !!dropdown 
        });
    }
});
</script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Phantom Force – Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1460
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1555
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1558
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_before_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1631
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1974 => 1631,  1952 => 1558,  1930 => 1555,  1908 => 1460,  1886 => 10,  1863 => 5,  1777 => 1632,  1775 => 1631,  1762 => 1621,  1717 => 1579,  1695 => 1559,  1693 => 1558,  1689 => 1556,  1687 => 1555,  1679 => 1549,  1668 => 1542,  1658 => 1535,  1651 => 1532,  1649 => 1531,  1634 => 1519,  1628 => 1516,  1621 => 1512,  1614 => 1507,  1608 => 1505,  1605 => 1504,  1603 => 1503,  1589 => 1494,  1580 => 1490,  1571 => 1486,  1562 => 1482,  1553 => 1478,  1544 => 1474,  1538 => 1471,  1534 => 1470,  1523 => 1461,  1521 => 1460,  70 => 11,  68 => 10,  60 => 5,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Phantom Force – Dashboard{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    
    {% block stylesheets %}{% endblock %}
    
    <style>
        :root {
            --bg-main: #0b0b0e;
            --bg-card: rgba(20,20,25,0.85);
            --bg-card-light: rgba(30,30,40,0.9);
            --red: #ff2d2d;
            --red-gradient: linear-gradient(135deg, #ff2d2d 0%, #ff5e5e 100%);
            --red-soft: rgba(255,45,45,0.15);
            --blue: #4d7cff;
            --blue-gradient: linear-gradient(135deg, #4d7cff 0%, #6d9cff 100%);
            --green: #2dff8b;
            --green-gradient: linear-gradient(135deg, #2dff8b 0%, #5dffa3 100%);
            --purple: #a82dff;
            --purple-gradient: linear-gradient(135deg, #a82dff 0%, #c85dff 100%);
            --orange: #ff8a2d;
            --orange-gradient: linear-gradient(135deg, #ff8a2d 0%, #ffaa5d 100%);
            --yellow: #ffd42d;
            --yellow-gradient: linear-gradient(135deg, #ffd42d 0%, #ffe45d 100%);
            --text-main: #ffffff;
            --text-muted: #b3b3b3;
            --text-light: #e6e6e6;
            --border: rgba(255,45,45,0.2);
            --border-light: rgba(255,255,255,0.1);
            --shadow: 0 10px 30px rgba(0,0,0,0.5);
            --shadow-lg: 0 20px 50px rgba(0,0,0,0.7);
            --radius: 12px;
            --radius-lg: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { 
            box-sizing: border-box; 
            margin: 0; 
            padding: 0; 
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top, #1a1a22 0%, #07070a 70%);
            color: var(--text-main);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255,45,45,0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(77,124,255,0.05) 0%, transparent 50%);
            z-index: -1;
            pointer-events: none;
            animation: backgroundPulse 15s ease-in-out infinite alternate;
        }

        @keyframes backgroundPulse {
            0% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes logoGlow {
            0% { box-shadow: 0 0 10px rgba(255,45,45,0.3); }
            100% { box-shadow: 0 0 20px rgba(255,45,45,0.6); }
        }

        @keyframes pulseDot {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        @keyframes fadeInRight {
            from { transform: translateX(20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes notificationPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        @keyframes avatarFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes widthGrow {
            from { width: 0; }
            to { width: 100px; }
        }

        @keyframes textGlow {
            0% { filter: drop-shadow(0 0 5px rgba(255,45,45,0.3)); }
            100% { filter: drop-shadow(0 0 15px rgba(255,45,45,0.6)); }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-30px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes borderFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes countUp {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        @keyframes spinSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes underlineSlide {
            from { width: 0; }
            to { width: 50px; }
        }

        @keyframes scorePulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }

        @keyframes slideInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes ripple {
            to {
                width: 300px;
                height: 300px;
                opacity: 0;
            }
        }

        /* ================= HEADER ================= */
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 40px;
            background: rgba(10,10,15,0.9);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
            animation: slideDown 0.5s ease-out;
        }

        .logo {
            font-weight: 800;
            font-size: 24px;
            letter-spacing: 1.5px;
            display: flex;
            align-items: center;
        }

        .logo span { 
            color: var(--red);
            margin-left: 4px;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: var(--red-gradient);
            border-radius: 8px;
            margin-right: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 18px;
            animation: logoGlow 2s infinite alternate;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        nav a {
            padding: 10px 20px;
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 600;
            font-size: 14px;
            transition: var(--transition);
            border-radius: 8px;
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        nav a:nth-child(1) { animation-delay: 0.1s; }
        nav a:nth-child(2) { animation-delay: 0.2s; }
        nav a:nth-child(3) { animation-delay: 0.3s; }
        nav a:nth-child(4) { animation-delay: 0.4s; }
        nav a:nth-child(5) { animation-delay: 0.5s; }
        nav a:nth-child(6) { animation-delay: 0.6s; }
        nav a:nth-child(7) { animation-delay: 0.7s; }
        nav a:nth-child(8) { animation-delay: 0.8s; }

        nav a.active, nav a:hover { 
            color: var(--red);
            background: rgba(255,45,45,0.1);
            transform: translateY(-2px);
        }

        nav a.active::after {
            content: '';
            position: absolute;
            bottom: -18px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            background: var(--red);
            border-radius: 50%;
            animation: pulseDot 1.5s infinite;
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 16px;
            animation: fadeInRight 0.5s ease-out;
        }

        .notification-badge {
            position: relative;
            cursor: pointer;
            color: var(--text-light);
            transition: var(--transition);
            padding: 8px;
            border-radius: 8px;
        }

        .notification-badge:hover {
            background: rgba(255,255,255,0.05);
            color: white;
            transform: scale(1.1);
        }

        .notification-badge i {
            font-size: 20px;
        }

        .notification-count {
            position: absolute;
            top: 0;
            right: 0;
            background: var(--red);
            color: white;
            font-size: 10px;
            font-weight: 700;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: notificationPulse 2s infinite;
        }

        /* ============ USER PROFILE ============ */
        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 8px 16px;
            border-radius: 10px;
            transition: var(--transition);
            background: rgba(255,255,255,0.03);
            position: relative;
        }

        .user-profile:hover {
            background: rgba(255,255,255,0.08);
        }

        .user-profile.active {
            background: rgba(255,45,45,0.1);
            border-color: rgba(255,45,45,0.3);
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--red-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            animation: avatarFloat 3s ease-in-out infinite;
            flex-shrink: 0;
        }

        .user-info {
            display: flex;
            flex-direction: column;
            min-width: 100px;
        }

        .username {
            font-weight: 600;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-role {
            font-size: 12px;
            color: var(--text-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-profile i.fa-chevron-down {
            font-size: 12px;
            transition: var(--transition);
            margin-left: 4px;
        }
      /* Add this to your CSS */
.dropdown-toggle-btn {
    background: none;
    border: none;
    color: inherit;
    cursor: pointer;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 4px;
    transition: var(--transition);
    border-radius: 6px;
    outline: none; /* Remove default focus */
}
.dropdown-toggle-btn:focus-visible {
    outline: 2px solid var(--red);
    outline-offset: 2px;
}

.dropdown-toggle-btn:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: scale(1.1);
}

.dropdown-toggle-btn i {
    font-size: 12px;
    transition: var(--transition);
}

.user-profile.active .dropdown-toggle-btn i {
    transform: rotate(180deg);
}


        .user-profile.active i.fa-chevron-down {
            transform: rotate(180deg);
        }

        /* ============ DROPDOWN FIXES ============ */
.user-dropdown {
    position: absolute;
    top: calc(100% + 8px) !important;
    right: 0 !important;
    background: rgba(15, 15, 20, 0.98) !important;
    border: 1px solid rgba(255, 45, 45, 0.35) !important;
    border-radius: 12px !important;
    min-width: 200px !important;
    padding: 8px 0 !important;
    box-shadow: var(--shadow-lg) !important;
    backdrop-filter: blur(20px) !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transform: translateY(-10px) !important;
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s !important;
    z-index: 1000 !important;
    display: block !important;
}

.user-profile.active .user-dropdown {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateY(0) !important;
}

/* Make sure dropdown stays above everything */
.user-profile {
    position: relative;
    z-index: 1001;
}

.user-dropdown a {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 12px 20px !important;
    color: var(--text-light) !important;
    text-decoration: none !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    transition: var(--transition) !important;
}

.user-dropdown a:hover {
    background: rgba(255, 45, 45, 0.15) !important;
    color: var(--red) !important;
    padding-left: 24px !important;
}

        /* ================= MAIN CONTENT ================= */
        .container {
            padding: 30px 40px;
            max-width: 1600px;
            margin: 0 auto;
            animation: fadeIn 0.8s ease-out;
        }

        /* ================= HERO ================= */
        .hero {
            text-align: center;
            padding: 70px 20px 40px;
            position: relative;
            margin-bottom: 40px;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--red-gradient);
            border-radius: 2px;
            animation: widthGrow 1s ease-out;
        }

        .hero h1 {
            font-size: 52px;
            font-weight: 800;
            background: linear-gradient(90deg, #ff2d2d, #ff5e5e, #ff8a8a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 16px;
            line-height: 1.1;
            animation: textGlow 3s infinite alternate;
        }

        .hero p {
            color: var(--text-muted);
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .hero-badges {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .hero-badge {
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--border-light);
            border-radius: 50px;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            animation: fadeInUp 0.8s ease-out backwards;
        }

        .hero-badge:nth-child(1) { animation-delay: 0.2s; }
        .hero-badge:nth-child(2) { animation-delay: 0.3s; }
        .hero-badge:nth-child(3) { animation-delay: 0.4s; }
        .hero-badge:nth-child(4) { animation-delay: 0.5s; }

        .hero-badge:hover {
            transform: translateY(-3px) scale(1.05);
            border-color: var(--red);
            background: rgba(255,45,45,0.1);
            box-shadow: 0 10px 20px rgba(255,45,45,0.2);
        }

        .hero-badge i {
            color: var(--red);
            font-size: 16px;
        }

        /* ================= FEATURED MODULES ================= */
        .modules-section {
            margin: 60px 0;
        }

        .section-title {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 30px;
            text-align: center;
            background: linear-gradient(90deg, #ffffff, #e6e6e6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: slideInLeft 0.8s ease-out;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .module-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 30px;
            position: relative;
            backdrop-filter: blur(10px);
            transition: var(--transition);
            overflow: hidden;
            min-height: 240px;
            display: flex;
            flex-direction: column;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .module-card:nth-child(1) { animation-delay: 0.1s; }
        .module-card:nth-child(2) { animation-delay: 0.2s; }
        .module-card:nth-child(3) { animation-delay: 0.3s; }

        .module-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-lg);
            border-color: var(--red);
        }

        .module-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--red-gradient);
            animation: borderFlow 3s linear infinite;
        }

        .module-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
            transition: var(--transition);
        }

        .module-card:hover .module-icon {
            transform: rotateY(180deg);
        }

        .module-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .module-description {
            color: var(--text-muted);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .module-stats {
            display: flex;
            gap: 20px;
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid var(--border-light);
        }

        .module-stat {
            text-align: center;
        }

        .module-stat-value {
            font-size: 20px;
            font-weight: 800;
            color: var(--red);
            animation: countUp 1s ease-out;
        }

        .module-stat-label {
            font-size: 12px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ================= STATS ================= */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin: 50px 0;
        }

        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 26px;
            position: relative;
            backdrop-filter: blur(10px);
            transition: var(--transition);
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .stat-card:nth-child(1) { animation-delay: 0.1s; }
        .stat-card:nth-child(2) { animation-delay: 0.2s; }
        .stat-card:nth-child(3) { animation-delay: 0.3s; }
        .stat-card:nth-child(4) { animation-delay: 0.4s; }

        .stat-card:hover {
            transform: translateY(-5px) rotateX(5deg);
            box-shadow: var(--shadow);
            border-color: rgba(255,45,45,0.4);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--red-gradient);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--red-soft);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            color: var(--red);
            font-size: 22px;
            transition: var(--transition);
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 4px;
            background: linear-gradient(90deg, #ffffff, #e6e6e6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: pulse 2s infinite;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 15px;
            margin-bottom: 8px;
        }

        .stat-change {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            margin-top: 8px;
            animation: slideInRight 0.5s ease-out;
        }

        .positive {
            color: var(--green);
        }

        .negative {
            color: var(--red);
        }

        /* ================= ACTIVITY FEED ================= */
        .activity-section {
            margin: 60px 0;
        }

        .activity-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-top: 30px;
        }

        .activity-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 30px;
            animation: fadeInUp 0.8s ease-out;
        }

        .activity-card h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .activity-card h3 i {
            color: var(--red);
            animation: spinSlow 10s linear infinite;
        }

        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-light);
            transition: var(--transition);
            animation: slideInLeft 0.5s ease-out backwards;
        }

        .activity-item:nth-child(1) { animation-delay: 0.1s; }
        .activity-item:nth-child(2) { animation-delay: 0.2s; }
        .activity-item:nth-child(3) { animation-delay: 0.3s; }
        .activity-item:nth-child(4) { animation-delay: 0.4s; }

        .activity-item:hover {
            transform: translateX(10px);
            border-color: var(--red);
        }

        .activity-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .activity-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: white;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .activity-item:hover .activity-icon {
            transform: scale(1.1) rotate(10deg);
        }

        .activity-content h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .activity-content p {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 6px;
        }

        .activity-time {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* ================= MATCHES ================= */
        .matches-section {
            margin: 60px 0;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            animation: fadeIn 0.8s ease-out;
        }

        .section-header h2 {
            font-size: 26px;
            font-weight: 700;
            position: relative;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--red-gradient);
            animation: underlineSlide 1s ease-out;
        }

        .section-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary {
            background: var(--red-gradient);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255,45,45,0.3);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.05);
            color: var(--text-light);
            border: 1px solid var(--border-light);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }

        .matches-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .match-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
            animation: slideInRight 0.6s ease-out backwards;
        }

        .match-card:nth-child(1) { animation-delay: 0.1s; }
        .match-card:nth-child(2) { animation-delay: 0.2s; }
        .match-card:nth-child(3) { animation-delay: 0.3s; }

        .match-card:hover {
            transform: translateX(5px) scale(1.02);
            border-color: rgba(255,45,45,0.4);
            background: rgba(255,45,45,0.03);
            box-shadow: var(--shadow);
        }

        .match-teams {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .team {
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
        }

        .match-card:hover .team {
            transform: translateX(5px);
        }

        .team-logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 18px;
            border: 2px solid var(--border-light);
            transition: var(--transition);
        }

        .match-card:hover .team-logo {
            transform: scale(1.1) rotate(10deg);
            border-color: var(--red);
        }

        .team-name {
            font-weight: 600;
            font-size: 16px;
        }

        .match-score {
            font-weight: 800;
            font-size: 24px;
            margin: 0 16px;
            position: relative;
        }

        .match-score::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 30px;
            background: var(--red-gradient);
            animation: scorePulse 2s infinite;
        }

        .match-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .badge {
            background: var(--red);
            color: #fff;
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 700;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .badge:hover::before {
            left: 100%;
        }

        .badge-win {
            background: var(--green);
        }

        .badge-loss {
            background: var(--red);
        }

        .badge-upcoming {
            background: var(--blue);
        }

        .match-date {
            font-size: 14px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
            transition: var(--transition);
        }

        .match-card:hover .match-date {
            color: var(--text-light);
        }

        /* ================= UPCOMING EVENTS ================= */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 30px;
        }

        .event-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 25px;
            transition: var(--transition);
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .event-card:nth-child(1) { animation-delay: 0.1s; }
        .event-card:nth-child(2) { animation-delay: 0.2s; }
        .event-card:nth-child(3) { animation-delay: 0.3s; }

        .event-card:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: var(--shadow);
            border-color: var(--red);
        }

        .event-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .event-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            transition: var(--transition);
        }

        .event-card:hover .event-icon {
            transform: rotateY(180deg);
        }

        .event-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .event-date {
            font-size: 14px;
            color: var(--text-muted);
        }

        .event-participants {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
            font-size: 13px;
            color: var(--text-muted);
            transition: var(--transition);
        }

        .event-card:hover .event-participants {
            color: var(--text-light);
        }

        /* ================= FOOTER ================= */
        footer {
            margin-top: 80px;
            padding: 60px 40px 30px;
            background: rgba(10,10,15,0.95);
            border-top: 1px solid var(--border);
            animation: fadeInUp 1s ease-out;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section {
            animation: slideInUp 0.6s ease-out backwards;
        }

        .footer-section:nth-child(1) { animation-delay: 0.1s; }
        .footer-section:nth-child(2) { animation-delay: 0.2s; }
        .footer-section:nth-child(3) { animation-delay: 0.3s; }
        .footer-section:nth-child(4) { animation-delay: 0.4s; }

        .footer-section h4 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--red);
            position: relative;
            display: inline-block;
        }

        .footer-section h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--red-gradient);
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-links a:hover {
            color: var(--red);
            transform: translateX(10px);
        }

        .footer-links a i {
            font-size: 12px;
            opacity: 0;
            transition: var(--transition);
        }

        .footer-links a:hover i {
            opacity: 1;
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--red);
            color: white;
            transform: translateY(-5px) rotate(10deg);
        }

        .newsletter {
            margin-top: 20px;
        }

        .newsletter input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255,255,255,0.05);
            border: 1px solid var(--border-light);
            border-radius: 8px;
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 10px;
            transition: var(--transition);
        }

        .newsletter input:focus {
            outline: none;
            border-color: var(--red);
            box-shadow: 0 0 0 2px rgba(255,45,45,0.2);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid var(--border-light);
            color: var(--text-muted);
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 18px;
            color: var(--red);
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 1200px) {
            .activity-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            header {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }
            
            nav {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .container {
                padding: 20px;
            }
            
            .hero h1 {
                font-size: 40px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            footer {
                padding: 40px 20px 20px;
            }
            
            .user-info {
                min-width: auto;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }
            
            .hero-badges {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-badge {
                width: 100%;
                max-width: 300px;
            }
            
            .modules-grid {
                grid-template-columns: 1fr;
            }
            
            .stats {
                grid-template-columns: 1fr;
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .match-card {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .match-teams {
                flex-direction: column;
                gap: 10px;
            }
            
            .match-details {
                flex-direction: column;
                gap: 10px;
            }
            
            .user-info {
                display: none;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .copyright {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            /* Mobile user profile fix */
            .user-profile .user-info {
                display: none;
            }
            
            .user-dropdown {
                position: fixed;
                top: auto;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                border-radius: 20px 20px 0 0;
                min-width: auto;
            }
            
            .user-profile.active .user-dropdown {
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            nav a {
                padding: 8px 12px;
                font-size: 13px;
            }
            
            .user-actions {
                gap: 10px;
            }
            
            .avatar {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }
        }
    </style>
    
    {% block inline_styles %}{% endblock %}
</head>
<body>
<header>
    <div class=\"logo\">
        <div class=\"logo-icon\">P</div>
        PHANTOM<span>FORCE</span>
    </div>
    
    <nav>
        <a href=\"{{ path('app_acceuil') }}\"
           class=\"{{ app.request.attributes.get('_route') == 'app_acceuil' ? 'active' }}\">
            <i class=\"fas fa-home\"></i> Accueil
        </a>
         <a href=\"{{ path('front_agent_index') }}\" class=\"{{ app.request.get('_route') starts with 'front_agent' ? 'active' }}\">
            <i class=\"fas fa-user\"></i> Champions
        </a>

        <a href=\"{{ path('app_team_index') }}\" class=\"{{ app.request.get('_route') starts with 'app_team' ? 'active' }}\">
            <i class=\"fas fa-users\"></i> Équipes
        </a>

       <a href=\"{{ path('app_matchy_index') }}\" class=\"{{ app.request.get('_route') starts with 'app_match' ? 'active' }}\">
            <i class=\"fas fa-trophy\"></i> Matchs
        </a>

        <a href=\"{{ path('app_tournaments') }}\" class=\"{{ app.request.get('_route') starts with 'app_tournament' ? 'active' }}\">
            <i class=\"fas fa-calendar-alt\"></i> Tournois
        </a>

        <a href=\"{{ path('app_coaching_session_index') }}\" class=\"{{ app.request.get('_route') starts with 'app_coaching' ? 'active' }}\">
            <i class=\"fas fa-chalkboard-teacher\"></i> Coaching
        </a>

         <a href=\"{{ path('app_shop_item_index') }}\" class=\"{{ app.request.get('_route') == 'app_shop' ? 'active' }}\">
            <i class=\"fas fa-shopping-cart\"></i> Boutique
        </a>

    </nav>
    
    <div class=\"user-actions\">
        <div class=\"notification-badge\">
            <i class=\"fas fa-bell\"></i>
            {% set notification_count = notification_count|default(3) %}
            {% if notification_count > 0 %}
                <div class=\"notification-count\">{{ notification_count }}</div>
            {% endif %}
        </div>
        
       <!-- In the header section, replace the user-profile section with this: -->
<div class=\"user-profile\" id=\"user-profile\">
    <div class=\"avatar\" tabindex=\"0\" role=\"button\" aria-label=\"Toggle user menu\">
        {{ app.user ? app.user.initials|default('MK') : 'GU' }}
    </div>
    <div class=\"user-info\">
        <div class=\"username\">
            {{ app.user ? app.user.username|default('Invité') : 'Invité' }}
        </div>
        <div class=\"user-role\">
            {{ app.user ? app.user.role|default('Visiteur') : 'Visiteur' }}
        </div>
    </div>
    <button class=\"dropdown-toggle-btn\" type=\"button\" 
            aria-label=\"Toggle user menu\"
            aria-expanded=\"false\"
            aria-controls=\"user-dropdown-menu\">
        <i class=\"fas fa-chevron-down\"></i>
    </button>

    <!-- DROPDOWN -->
    <div class=\"user-dropdown\" id=\"user-dropdown-menu\" aria-labelledby=\"user-profile\">
        {% if app.user %}
            <a href=\"{{ path('app_logout') }}\">
                <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
            </a>
            <a href=\"{{ path('app_user_show', {'id': app.user.id}) }}\">
                <i class=\"fas fa-user-cog\"></i> Mon Profil
            </a>
            <a href=\"#\">
                <i class=\"fas fa-cog\"></i> Paramètres
            </a>
        {% else %}
            <a href=\"{{ path('app_login') }}\">
                <i class=\"fas fa-sign-in-alt\"></i> Connexion
            </a>
            <a href=\"#\">
                <i class=\"fas fa-user-plus\"></i> Inscription
            </a>
        {% endif %}
    </div>
</div>
    </div>
</header>

<main class=\"container\">
    {% block body %}{% endblock %}
</main>

{% block before_footer %}{% endblock %}

<footer>
    <div class=\"footer-content\">
        <div class=\"footer-section\">
            <h4>Phantom Force</h4>
            <p style=\"color: var(--text-muted); margin-bottom: 20px; font-size: 14px; line-height: 1.6;\">
                Plateforme esport professionnelle dédiée à l'excellence compétitive. Nous fournissons les outils nécessaires pour transformer les joueurs passionnés en champions.
            </p>
            <div class=\"social-links\">
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-twitter\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-discord\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-twitch\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"#\" class=\"social-link\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
        
        <div class=\"footer-section\">
            <h4>Navigation</h4>
            <div class=\"footer-links\">
                <a href=\"{{ path('app_acceuil') }}\"><i class=\"fas fa-chevron-right\"></i> Accueil</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Champions</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Équipes</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Matchs</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Tournois</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Coaching</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Boutique</a>
            </div>
        </div>
        
        <div class=\"footer-section\">
            <h4>Support</h4>
            <div class=\"footer-links\">
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Centre d'aide</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Contact</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> FAQ</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Tutoriels</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Status serveur</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Rapporter un bug</a>
                <a href=\"#\"><i class=\"fas fa-chevron-right\"></i> Suggestions</a>
            </div>
        </div>
        
        <div class=\"footer-section\">
            <h4>Newsletter</h4>
            <p style=\"color: var(--text-muted); margin-bottom: 20px; font-size: 14px;\">
                Recevez les dernières actualités esport, les annonces de tournois et les offres exclusives.
            </p>
            <div class=\"newsletter\">
                <form action=\"#\" method=\"post\">
                    <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required>
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"width: 100%;\">S'abonner</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class=\"copyright\">
        <div class=\"footer-logo\">
            <div style=\"width: 24px; height: 24px; background: var(--red-gradient); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 12px;\">P</div>
            PHANTOM FORCE
        </div>
        <div>© {{ \"now\"|date(\"Y\") }} Phantom Force Esports. Tous droits réservés.</div>
        <div style=\"display: flex; gap: 20px;\">
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">Mentions légales</a>
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">Confidentialité</a>
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">Cookies</a>
            <a href=\"#\" style=\"color: var(--text-muted); text-decoration: none; font-size: 13px;\">CGU</a>
        </div>
    </div>
</footer>

{% block javascripts %}{% endblock %}

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const userProfile = document.getElementById('user-profile');
    const toggleBtn = userProfile ? userProfile.querySelector('.dropdown-toggle-btn') : null;
    const dropdown = userProfile ? userProfile.querySelector('.user-dropdown') : null;
    
    if (userProfile && toggleBtn && dropdown) {
        console.log('Dropdown setup starting...');
        
        // DEBUG: Add console logs to see what's happening
        userProfile.addEventListener('click', function(e) {
            console.log('User profile clicked', e.target);
        });
        
        // Simple toggle function
        function toggleDropdown(e) {
            if (e) e.stopPropagation();
            console.log('Toggle called, current state:', userProfile.classList.contains('active'));
            
            // Toggle the active class
            userProfile.classList.toggle('active');
            
            // Update ARIA attribute
            const isExpanded = userProfile.classList.contains('active');
            toggleBtn.setAttribute('aria-expanded', isExpanded);
            console.log('New state:', isExpanded ? 'open' : 'closed');
        }
        
        // Click on button
        toggleBtn.addEventListener('click', toggleDropdown);
        
        // Click on avatar
        userProfile.querySelector('.avatar').addEventListener('click', toggleDropdown);
        
        // Click on user info area
        userProfile.querySelector('.user-info').addEventListener('click', toggleDropdown);
        
        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!userProfile.contains(e.target)) {
                userProfile.classList.remove('active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Close dropdown when clicking a link inside it
        dropdown.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                userProfile.classList.remove('active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            });
        });
        
        // Close with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && userProfile.classList.contains('active')) {
                userProfile.classList.remove('active');
                toggleBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        console.log('Dropdown setup complete');
    } else {
        console.error('Missing dropdown elements:', { 
            userProfile: !!userProfile, 
            toggleBtn: !!toggleBtn, 
            dropdown: !!dropdown 
        });
    }
});
</script>

</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\base.html.twig");
    }
}
