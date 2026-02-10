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

/* home/home.html.twig */
class __TwigTemplate_2edbdec66e93d434d6cd62f2a0be6f77 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->load("base_user.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "ARENA-X | DOMINATION FIELD";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            --blood-red: #ff0000;
            --dark-red: #8b0000;
            --neon-red: #ff003c;
            --pulse-red: #ff3355;
            --black-hole: #000000;
            --metal-gray: #111111;
            --carbon-gray: #222222;
            --steel-gray: #333333;
            --glitch-blue: #00f0ff;
            --hacker-green: #00ff00;
            --toxic-purple: #9d00ff;
            --gold: #ffd700;
        }

        .hero-section {
            position: relative;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 40px 20px;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255,0,60,0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(157,0,255,0.1) 0%, transparent 50%),
                linear-gradient(180deg, rgba(0,0,0,0.9) 0%, rgba(26,0,0,0.8) 100%);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"200\" height=\"200\" viewBox=\"0 0 200 200\"><path d=\"M20,20 L180,180 M20,180 L180,20\" stroke=\"%238B0000\" stroke-width=\"1\" opacity=\"0.1\"/><path d=\"M100,20 L100,180 M20,100 L180,100\" stroke=\"%23FF003C\" stroke-width=\"0.5\" opacity=\"0.05\"/></svg>'),
                linear-gradient(45deg, transparent 45%, rgba(255,0,60,0.1) 50%, transparent 55%);
            background-size: 200px 200px, 100% 100%;
            animation: gridMove 20s linear infinite;
            pointer-events: none;
        }

        @keyframes gridMove {
            0% { background-position: 0 0, 0 0; }
            100% { background-position: 200px 200px, 100% 100%; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 1200px;
        }

        .main-title {
            font-size: 5em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 8px;
            margin-bottom: 20px;
            position: relative;
            font-family: 'Aldrich', sans-serif;
        }

        .main-title span {
            color: transparent;
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red), var(--gold));
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 
                0 0 30px rgba(255,0,60,0.5),
                0 0 60px rgba(255,0,60,0.3);
            display: inline-block;
            animation: titleGlow 3s infinite alternate;
        }

        @keyframes titleGlow {
            0% { 
                text-shadow: 
                    0 0 20px rgba(255,0,60,0.5),
                    0 0 40px rgba(255,0,60,0.3);
            }
            100% { 
                text-shadow: 
                    0 0 40px rgba(255,0,60,0.8),
                    0 0 80px rgba(255,0,60,0.5),
                    0 0 100px rgba(255,215,0,0.3);
            }
        }

        .main-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--blood-red), var(--neon-red), var(--blood-red), transparent);
            filter: blur(2px);
        }

        .tagline {
            font-size: 1.5em;
            margin-bottom: 40px;
            color: #ccc;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 300;
        }

        .tagline strong {
            color: var(--glitch-blue);
            text-shadow: 0 0 10px var(--glitch-blue);
        }

        .user-status {
            background: linear-gradient(135deg, rgba(34,34,34,0.9), rgba(17,17,17,0.9));
            border: 2px solid rgba(255,0,60,0.3);
            border-radius: 10px;
            padding: 40px;
            margin: 40px auto;
            max-width: 800px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 10px 40px rgba(0,0,0,0.7),
                inset 0 0 20px rgba(0,0,0,0.5);
        }

        .user-status::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red), var(--toxic-purple), var(--glitch-blue));
            z-index: -1;
            filter: blur(10px);
            opacity: 0.3;
        }

        .status-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .status-icon {
            font-size: 3em;
            animation: pulseIcon 2s infinite;
        }

        .logged-in .status-icon {
            color: var(--hacker-green);
            text-shadow: 0 0 20px var(--hacker-green);
        }

        .logged-out .status-icon {
            color: var(--blood-red);
            text-shadow: 0 0 20px var(--blood-red);
        }

        @keyframes pulseIcon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .username-display {
            font-size: 2em;
            color: white;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
        }

        .username-display strong {
            color: var(--gold);
            text-shadow: 0 0 15px var(--gold);
        }

        .action-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .cyber-card {
            background: linear-gradient(145deg, rgba(34,34,34,0.9), rgba(17,17,17,0.9));
            border: 2px solid;
            border-image: linear-gradient(45deg, var(--blood-red), var(--neon-red)) 1;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.4s;
            cursor: pointer;
        }

        .cyber-card:hover {
            transform: translateY(-10px);
            box-shadow: 
                0 20px 50px rgba(255,0,60,0.3),
                inset 0 0 30px rgba(0,0,0,0.5);
        }

        .cyber-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: 0.5s;
        }

        .cyber-card:hover::before {
            left: 100%;
        }

        .card-icon {
            font-size: 3em;
            margin-bottom: 20px;
            color: var(--neon-red);
        }

        .card-title {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card-desc {
            color: #aaa;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card-btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            border: none;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }

        .card-btn:hover {
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255,0,60,0.5);
        }

        .login-card {
            border-image: linear-gradient(45deg, var(--hacker-green), var(--glitch-blue)) 1;
        }

        .login-card .card-icon {
            color: var(--hacker-green);
        }

        .register-card {
            border-image: linear-gradient(45deg, var(--toxic-purple), #ff00ff) 1;
        }

        .register-card .card-icon {
            color: var(--toxic-purple);
        }

        .stats-panel {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 60px;
            padding: 40px;
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
            border: 1px solid rgba(255,0,60,0.2);
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3em;
            font-weight: 900;
            color: var(--neon-red);
            text-shadow: 0 0 20px var(--neon-red);
            margin-bottom: 10px;
        }

        .stat-label {
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
        }

        .footer-note {
            margin-top: 60px;
            text-align: center;
            color: #666;
            font-size: 0.9em;
            letter-spacing: 1px;
        }

        .glitch-text {
            position: relative;
            display: inline-block;
            animation: glitch 5s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            1% { transform: translate(-2px, 2px); }
            2% { transform: translate(-2px, -2px); }
            3% { transform: translate(2px, 2px); }
            4% { transform: translate(2px, -2px); }
            5% { transform: translate(0); }
        }

        .terminal-effect {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            background: repeating-linear-gradient(
                0deg,
                rgba(0, 0, 0, 0.15) 0px,
                rgba(0, 0, 0, 0.15) 1px,
                transparent 1px,
                transparent 2px
            );
            z-index: 1;
            opacity: 0.1;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 3em;
                letter-spacing: 4px;
            }
            
            .tagline {
                font-size: 1.2em;
            }
            
            .action-grid {
                grid-template-columns: 1fr;
            }
            
            .user-status {
                padding: 20px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 383
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

        // line 384
        yield "    <div class=\"terminal-effect\"></div>
    
    <section class=\"hero-section\">
        <div class=\"hero-content\">
            <h1 class=\"main-title\">
                <span class=\"glitch-text\">ARENA-X</span>
            </h1>
            <p class=\"tagline\">WHERE <strong>LEGENDS</strong> ARE FORGED IN DIGITAL FIRE</p>
            
            <div class=\"user-status ";
        // line 393
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "user", [], "any", false, false, false, 393)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "logged-in";
        } else {
            yield "logged-out";
        }
        yield "\">
                <div class=\"status-header\">
                    <div class=\"status-icon\">
                        ";
        // line 396
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 396, $this->source); })()), "user", [], "any", false, false, false, 396)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "⚔️";
        } else {
            yield "🔒";
        }
        // line 397
        yield "                    </div>
                    <div class=\"status-message\">
                        ";
        // line 399
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "user", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 400
            yield "                            <h2 class=\"username-display\">
                                WARRIOR: <strong>";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "user", [], "any", false, false, false, 401), "username", [], "any", false, false, false, 401)), "html", null, true);
            yield "</strong>
                            </h2>
                            <p style=\"color: #aaa; margin-top: 10px;\">READY FOR COMBAT</p>
                        ";
        } else {
            // line 405
            yield "                            <h2 class=\"username-display\">
                                SYSTEM <strong>LOCKED</strong>
                            </h2>
                            <p style=\"color: #aaa; margin-top: 10px;\">AUTHENTICATION REQUIRED</p>
                        ";
        }
        // line 410
        yield "                    </div>
                </div>
                
                <div class=\"action-grid\">
                    ";
        // line 414
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 414, $this->source); })()), "user", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 415
            yield "                        <!-- Logged In Actions -->
                      
                        
                        ";
            // line 418
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 419
                yield "                            <div class=\"cyber-card\">
                                <div class=\"card-icon\">👑</div>
                                <h3 class=\"card-title\">COMMAND CENTER</h3>
                                <p class=\"card-desc\">Admin controls and system oversight</p>
                                <a href=\"";
                // line 423
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                yield "\" class=\"card-btn\">ACCESS</a>
                            </div>
                        ";
            }
            // line 426
            yield "                        
                        <div class=\"cyber-card\">
                            <div class=\"card-icon\">⚡</div>
                            <h3 class=\"card-title\">EXTRACTION</h3>
                            <p class=\"card-desc\">Secure logout from the battle network</p>
                            <a href=\"";
            // line 431
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"card-btn\">DISCONNECT</a>
                        </div>
                    ";
        } else {
            // line 434
            yield "                        <!-- Logged Out Actions -->
                        <div class=\"cyber-card login-card\">
                            <div class=\"card-icon\">🔐</div>
                            <h3 class=\"card-title\">SYSTEM ACCESS</h3>
                            <p class=\"card-desc\">Authenticate with your warrior credentials</p>
                            <a href=\"";
            // line 439
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"card-btn\">INITIATE LOGIN</a>
                        </div>
                        
                        <div class=\"cyber-card register-card\">
                            <div class=\"card-icon\">🛡️</div>
                            <h3 class=\"card-title\">NEW RECRUIT</h3>
                            <p class=\"card-desc\">Join the elite forces of Arena-X</p>
                            <a href=\"";
            // line 446
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"card-btn\">ENLIST NOW</a>
                        </div>
                    ";
        }
        // line 449
        yield "                </div>
                
                <div class=\"stats-panel\">
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">∞</div>
                        <div class=\"stat-label\">ACTIVE BATTLES</div>
                    </div>
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">24/7</div>
                        <div class=\"stat-label\">UPTIME</div>
                    </div>
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">#1</div>
                        <div class=\"stat-label\">ESPORT RANK</div>
                    </div>
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">⚡</div>
                        <div class=\"stat-label\">RESPONSE TIME</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class=\"footer-note\">
        <p>ARENA-X ESPORT NETWORK • SECURITY LEVEL: MAXIMUM • ENCRYPTION: ACTIVE</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add typing effect to title
            const title = document.querySelector('.main-title span');
            const originalText = title.textContent;
            
            function glitchEffect() {
                const chars = '!@#\$%^&*()_+-=[]{}|;:,.<>?';
                let glitchedText = '';
                
                for(let i = 0; i < originalText.length; i++) {
                    if(Math.random() > 0.9) {
                        glitchedText += chars[Math.floor(Math.random() * chars.length)];
                    } else {
                        glitchedText += originalText[i];
                    }
                }
                
                title.textContent = glitchedText;
                
                setTimeout(() => {
                    title.textContent = originalText;
                }, 100);
            }
            
            // Random glitch effect
            setInterval(glitchEffect, 2000);
            
            // Card hover effects
            const cards = document.querySelectorAll('.cyber-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.card-icon');
                    if(icon) {
                        icon.style.animation = 'pulseIcon 0.5s infinite';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.card-icon');
                    if(icon) {
                        icon.style.animation = '';
                    }
                });
            });
            
            // Animate stat numbers
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const originalValue = stat.textContent;
                
                function randomPulse() {
                    if(originalValue === '∞' || originalValue === '24/7' || originalValue === '#1' || originalValue === '⚡') {
                        return;
                    }
                    
                    const num = parseInt(originalValue);
                    if(!isNaN(num)) {
                        const randomNum = Math.floor(Math.random() * 100) + num;
                        stat.textContent = randomNum;
                        
                        setTimeout(() => {
                            stat.textContent = originalValue;
                        }, 200);
                    }
                }
                
                setInterval(randomPulse, 3000);
            });
            
            // Background grid animation
            const heroSection = document.querySelector('.hero-section');
            let mouseX = 0;
            let mouseY = 0;
            
            document.addEventListener('mousemove', function(e) {
                mouseX = (e.clientX / window.innerWidth) * 100;
                mouseY = (e.clientY / window.innerHeight) * 100;
                
                heroSection.style.backgroundPosition = 
                    `\${mouseX * 0.1}% \${mouseY * 0.1}%, ` +
                    `\${mouseX * 0.05}% \${mouseY * 0.05}%, ` +
                    '0% 0%';
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/home.html.twig";
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
        return array (  615 => 449,  609 => 446,  599 => 439,  592 => 434,  586 => 431,  579 => 426,  573 => 423,  567 => 419,  565 => 418,  560 => 415,  558 => 414,  552 => 410,  545 => 405,  538 => 401,  535 => 400,  533 => 399,  529 => 397,  523 => 396,  513 => 393,  502 => 384,  489 => 383,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_user.html.twig' %}

{% block title %}ARENA-X | DOMINATION FIELD{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --blood-red: #ff0000;
            --dark-red: #8b0000;
            --neon-red: #ff003c;
            --pulse-red: #ff3355;
            --black-hole: #000000;
            --metal-gray: #111111;
            --carbon-gray: #222222;
            --steel-gray: #333333;
            --glitch-blue: #00f0ff;
            --hacker-green: #00ff00;
            --toxic-purple: #9d00ff;
            --gold: #ffd700;
        }

        .hero-section {
            position: relative;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 40px 20px;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255,0,60,0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(157,0,255,0.1) 0%, transparent 50%),
                linear-gradient(180deg, rgba(0,0,0,0.9) 0%, rgba(26,0,0,0.8) 100%);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"200\" height=\"200\" viewBox=\"0 0 200 200\"><path d=\"M20,20 L180,180 M20,180 L180,20\" stroke=\"%238B0000\" stroke-width=\"1\" opacity=\"0.1\"/><path d=\"M100,20 L100,180 M20,100 L180,100\" stroke=\"%23FF003C\" stroke-width=\"0.5\" opacity=\"0.05\"/></svg>'),
                linear-gradient(45deg, transparent 45%, rgba(255,0,60,0.1) 50%, transparent 55%);
            background-size: 200px 200px, 100% 100%;
            animation: gridMove 20s linear infinite;
            pointer-events: none;
        }

        @keyframes gridMove {
            0% { background-position: 0 0, 0 0; }
            100% { background-position: 200px 200px, 100% 100%; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 1200px;
        }

        .main-title {
            font-size: 5em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 8px;
            margin-bottom: 20px;
            position: relative;
            font-family: 'Aldrich', sans-serif;
        }

        .main-title span {
            color: transparent;
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red), var(--gold));
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 
                0 0 30px rgba(255,0,60,0.5),
                0 0 60px rgba(255,0,60,0.3);
            display: inline-block;
            animation: titleGlow 3s infinite alternate;
        }

        @keyframes titleGlow {
            0% { 
                text-shadow: 
                    0 0 20px rgba(255,0,60,0.5),
                    0 0 40px rgba(255,0,60,0.3);
            }
            100% { 
                text-shadow: 
                    0 0 40px rgba(255,0,60,0.8),
                    0 0 80px rgba(255,0,60,0.5),
                    0 0 100px rgba(255,215,0,0.3);
            }
        }

        .main-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--blood-red), var(--neon-red), var(--blood-red), transparent);
            filter: blur(2px);
        }

        .tagline {
            font-size: 1.5em;
            margin-bottom: 40px;
            color: #ccc;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 300;
        }

        .tagline strong {
            color: var(--glitch-blue);
            text-shadow: 0 0 10px var(--glitch-blue);
        }

        .user-status {
            background: linear-gradient(135deg, rgba(34,34,34,0.9), rgba(17,17,17,0.9));
            border: 2px solid rgba(255,0,60,0.3);
            border-radius: 10px;
            padding: 40px;
            margin: 40px auto;
            max-width: 800px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 10px 40px rgba(0,0,0,0.7),
                inset 0 0 20px rgba(0,0,0,0.5);
        }

        .user-status::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red), var(--toxic-purple), var(--glitch-blue));
            z-index: -1;
            filter: blur(10px);
            opacity: 0.3;
        }

        .status-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .status-icon {
            font-size: 3em;
            animation: pulseIcon 2s infinite;
        }

        .logged-in .status-icon {
            color: var(--hacker-green);
            text-shadow: 0 0 20px var(--hacker-green);
        }

        .logged-out .status-icon {
            color: var(--blood-red);
            text-shadow: 0 0 20px var(--blood-red);
        }

        @keyframes pulseIcon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .username-display {
            font-size: 2em;
            color: white;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
        }

        .username-display strong {
            color: var(--gold);
            text-shadow: 0 0 15px var(--gold);
        }

        .action-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .cyber-card {
            background: linear-gradient(145deg, rgba(34,34,34,0.9), rgba(17,17,17,0.9));
            border: 2px solid;
            border-image: linear-gradient(45deg, var(--blood-red), var(--neon-red)) 1;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.4s;
            cursor: pointer;
        }

        .cyber-card:hover {
            transform: translateY(-10px);
            box-shadow: 
                0 20px 50px rgba(255,0,60,0.3),
                inset 0 0 30px rgba(0,0,0,0.5);
        }

        .cyber-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: 0.5s;
        }

        .cyber-card:hover::before {
            left: 100%;
        }

        .card-icon {
            font-size: 3em;
            margin-bottom: 20px;
            color: var(--neon-red);
        }

        .card-title {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card-desc {
            color: #aaa;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .card-btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            border: none;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }

        .card-btn:hover {
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255,0,60,0.5);
        }

        .login-card {
            border-image: linear-gradient(45deg, var(--hacker-green), var(--glitch-blue)) 1;
        }

        .login-card .card-icon {
            color: var(--hacker-green);
        }

        .register-card {
            border-image: linear-gradient(45deg, var(--toxic-purple), #ff00ff) 1;
        }

        .register-card .card-icon {
            color: var(--toxic-purple);
        }

        .stats-panel {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 60px;
            padding: 40px;
            background: rgba(0,0,0,0.5);
            border-radius: 10px;
            border: 1px solid rgba(255,0,60,0.2);
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3em;
            font-weight: 900;
            color: var(--neon-red);
            text-shadow: 0 0 20px var(--neon-red);
            margin-bottom: 10px;
        }

        .stat-label {
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
        }

        .footer-note {
            margin-top: 60px;
            text-align: center;
            color: #666;
            font-size: 0.9em;
            letter-spacing: 1px;
        }

        .glitch-text {
            position: relative;
            display: inline-block;
            animation: glitch 5s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            1% { transform: translate(-2px, 2px); }
            2% { transform: translate(-2px, -2px); }
            3% { transform: translate(2px, 2px); }
            4% { transform: translate(2px, -2px); }
            5% { transform: translate(0); }
        }

        .terminal-effect {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            background: repeating-linear-gradient(
                0deg,
                rgba(0, 0, 0, 0.15) 0px,
                rgba(0, 0, 0, 0.15) 1px,
                transparent 1px,
                transparent 2px
            );
            z-index: 1;
            opacity: 0.1;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 3em;
                letter-spacing: 4px;
            }
            
            .tagline {
                font-size: 1.2em;
            }
            
            .action-grid {
                grid-template-columns: 1fr;
            }
            
            .user-status {
                padding: 20px;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"terminal-effect\"></div>
    
    <section class=\"hero-section\">
        <div class=\"hero-content\">
            <h1 class=\"main-title\">
                <span class=\"glitch-text\">ARENA-X</span>
            </h1>
            <p class=\"tagline\">WHERE <strong>LEGENDS</strong> ARE FORGED IN DIGITAL FIRE</p>
            
            <div class=\"user-status {% if app.user %}logged-in{% else %}logged-out{% endif %}\">
                <div class=\"status-header\">
                    <div class=\"status-icon\">
                        {% if app.user %}⚔️{% else %}🔒{% endif %}
                    </div>
                    <div class=\"status-message\">
                        {% if app.user %}
                            <h2 class=\"username-display\">
                                WARRIOR: <strong>{{ app.user.username|upper }}</strong>
                            </h2>
                            <p style=\"color: #aaa; margin-top: 10px;\">READY FOR COMBAT</p>
                        {% else %}
                            <h2 class=\"username-display\">
                                SYSTEM <strong>LOCKED</strong>
                            </h2>
                            <p style=\"color: #aaa; margin-top: 10px;\">AUTHENTICATION REQUIRED</p>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"action-grid\">
                    {% if app.user %}
                        <!-- Logged In Actions -->
                      
                        
                        {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"cyber-card\">
                                <div class=\"card-icon\">👑</div>
                                <h3 class=\"card-title\">COMMAND CENTER</h3>
                                <p class=\"card-desc\">Admin controls and system oversight</p>
                                <a href=\"{{ path('admin_dashboard') }}\" class=\"card-btn\">ACCESS</a>
                            </div>
                        {% endif %}
                        
                        <div class=\"cyber-card\">
                            <div class=\"card-icon\">⚡</div>
                            <h3 class=\"card-title\">EXTRACTION</h3>
                            <p class=\"card-desc\">Secure logout from the battle network</p>
                            <a href=\"{{ path('app_logout') }}\" class=\"card-btn\">DISCONNECT</a>
                        </div>
                    {% else %}
                        <!-- Logged Out Actions -->
                        <div class=\"cyber-card login-card\">
                            <div class=\"card-icon\">🔐</div>
                            <h3 class=\"card-title\">SYSTEM ACCESS</h3>
                            <p class=\"card-desc\">Authenticate with your warrior credentials</p>
                            <a href=\"{{ path('app_login') }}\" class=\"card-btn\">INITIATE LOGIN</a>
                        </div>
                        
                        <div class=\"cyber-card register-card\">
                            <div class=\"card-icon\">🛡️</div>
                            <h3 class=\"card-title\">NEW RECRUIT</h3>
                            <p class=\"card-desc\">Join the elite forces of Arena-X</p>
                            <a href=\"{{ path('app_register') }}\" class=\"card-btn\">ENLIST NOW</a>
                        </div>
                    {% endif %}
                </div>
                
                <div class=\"stats-panel\">
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">∞</div>
                        <div class=\"stat-label\">ACTIVE BATTLES</div>
                    </div>
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">24/7</div>
                        <div class=\"stat-label\">UPTIME</div>
                    </div>
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">#1</div>
                        <div class=\"stat-label\">ESPORT RANK</div>
                    </div>
                    <div class=\"stat-item\">
                        <div class=\"stat-number\">⚡</div>
                        <div class=\"stat-label\">RESPONSE TIME</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class=\"footer-note\">
        <p>ARENA-X ESPORT NETWORK • SECURITY LEVEL: MAXIMUM • ENCRYPTION: ACTIVE</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add typing effect to title
            const title = document.querySelector('.main-title span');
            const originalText = title.textContent;
            
            function glitchEffect() {
                const chars = '!@#\$%^&*()_+-=[]{}|;:,.<>?';
                let glitchedText = '';
                
                for(let i = 0; i < originalText.length; i++) {
                    if(Math.random() > 0.9) {
                        glitchedText += chars[Math.floor(Math.random() * chars.length)];
                    } else {
                        glitchedText += originalText[i];
                    }
                }
                
                title.textContent = glitchedText;
                
                setTimeout(() => {
                    title.textContent = originalText;
                }, 100);
            }
            
            // Random glitch effect
            setInterval(glitchEffect, 2000);
            
            // Card hover effects
            const cards = document.querySelectorAll('.cyber-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.card-icon');
                    if(icon) {
                        icon.style.animation = 'pulseIcon 0.5s infinite';
                    }
                });
                
                card.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.card-icon');
                    if(icon) {
                        icon.style.animation = '';
                    }
                });
            });
            
            // Animate stat numbers
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const originalValue = stat.textContent;
                
                function randomPulse() {
                    if(originalValue === '∞' || originalValue === '24/7' || originalValue === '#1' || originalValue === '⚡') {
                        return;
                    }
                    
                    const num = parseInt(originalValue);
                    if(!isNaN(num)) {
                        const randomNum = Math.floor(Math.random() * 100) + num;
                        stat.textContent = randomNum;
                        
                        setTimeout(() => {
                            stat.textContent = originalValue;
                        }, 200);
                    }
                }
                
                setInterval(randomPulse, 3000);
            });
            
            // Background grid animation
            const heroSection = document.querySelector('.hero-section');
            let mouseX = 0;
            let mouseY = 0;
            
            document.addEventListener('mousemove', function(e) {
                mouseX = (e.clientX / window.innerWidth) * 100;
                mouseY = (e.clientY / window.innerHeight) * 100;
                
                heroSection.style.backgroundPosition = 
                    `\${mouseX * 0.1}% \${mouseY * 0.1}%, ` +
                    `\${mouseX * 0.05}% \${mouseY * 0.05}%, ` +
                    '0% 0%';
            });
        });
    </script>
{% endblock %}", "home/home.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\home\\home.html.twig");
    }
}
