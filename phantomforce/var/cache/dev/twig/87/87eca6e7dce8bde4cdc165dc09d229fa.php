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

/* base_user.html.twig */
class __TwigTemplate_80ebd63a25862d7ccdae6d47b6197315 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_user.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22 fill=%22%23ff0000%22>⚔️</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 413
        yield "
        ";
        // line 414
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 525
        yield "    </head>
    <body>
        <!-- Particle Background -->
        
        <!-- Cyber Navigation -->
        <nav class=\"cyber-nav\">
            <div class=\"nav-container\">
                <div class=\"nav-logo\">
                    <a href=\"";
        // line 533
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">ARENA-X</a>
                </div>
                
                <ul class=\"nav-menu\">
                    <li><a href=\"";
        // line 537
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">HOME BASE</a></li>
                    
                    
                        
                        ";
        // line 541
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 542
            yield "                            <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">COMMAND CENTER</a></li>
                        ";
        }
        // line 544
        yield "                    
                </ul>
                
                <div class=\"nav-user\">
                    ";
        // line 548
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 548, $this->source); })()), "user", [], "any", false, false, false, 548)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 549
            yield "                        <div class=\"user-greeting\">
                            <span>";
            // line 550
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 550, $this->source); })()), "user", [], "any", false, false, false, 550), "username", [], "any", false, false, false, 550), "html", null, true);
            yield "</span>
                            ";
            // line 551
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 552
                yield "                                <span class=\"admin-badge\">ADMIN</span>
                            ";
            }
            // line 554
            yield "                        </div>
                        <a href=\"";
            // line 555
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"cyber-btn cyber-btn-logout\">
                            EXTRACT
                        </a>
                    ";
        } else {
            // line 559
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"cyber-btn\">
                            LOGIN
                        </a>
                        <a href=\"";
            // line 562
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"cyber-btn\" style=\"background: linear-gradient(45deg, var(--toxic-purple), #9d00ff);\">
                            ENLIST
                        </a>
                    ";
        }
        // line 566
        yield "                </div>
            </div>
        </nav>
        
        <!-- Flash Messages -->
        <div class=\"flash-container\">
            ";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 572, $this->source); })()), "flashes", ["success"], "method", false, false, false, 572));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 573
            yield "                <div class=\"cyber-alert alert-success\">
                    <strong>✓ SUCCESS:</strong> ";
            // line 574
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 577
        yield "            
            ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 578, $this->source); })()), "flashes", ["error"], "method", false, false, false, 578));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 579
            yield "                <div class=\"cyber-alert alert-error\">
                    <strong>✗ ALERT:</strong> ";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        yield "        </div>
        
        <!-- Main Content -->
        <div class=\"main-container\">
            ";
        // line 587
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 588
        yield "        </div>
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

        yield "ARENA X - ESPORT DOMINATION";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "            <link href=\"https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&family=Aldrich&display=swap\" rel=\"stylesheet\">
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
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    background: 
                        linear-gradient(135deg, #000000 0%, #1a0000 50%, #000000 100%),
                        repeating-linear-gradient(45deg, transparent, transparent 2px, rgba(139,0,0,0.1) 3px, rgba(139,0,0,0.1) 4px);
                    background-color: var(--black-hole);
                    font-family: 'Orbitron', 'Rajdhani', 'Arial Black', sans-serif;
                    color: white;
                    min-height: 100vh;
                    overflow-x: hidden;
                    position: relative;
                }

                body::before {
                    content: '';
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: 
                        radial-gradient(circle at 20% 30%, rgba(255,0,60,0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(255,0,0,0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 80%, rgba(157,0,255,0.05) 0%, transparent 50%);
                    pointer-events: none;
                    z-index: -1;
                }

                /* === NAVBAR EXTREME === */
                .cyber-nav {
                    background: linear-gradient(90deg, 
                        rgba(17,17,17,0.95) 0%, 
                        rgba(34,34,34,0.95) 50%, 
                        rgba(17,17,17,0.95) 100%);
                    padding: 0;
                    margin-bottom: 30px;
                    border-bottom: 3px solid var(--blood-red);
                    box-shadow: 
                        0 0 30px rgba(255,0,0,0.5),
                        0 5px 20px rgba(0,0,0,0.8);
                    position: relative;
                    overflow: hidden;
                }

                .cyber-nav::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, 
                        transparent, 
                        rgba(255,0,60,0.2), 
                        transparent);
                    animation: scanNav 3s linear infinite;
                }

                @keyframes scanNav {
                    0% { left: -100%; }
                    100% { left: 100%; }
                }

                .nav-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    display: flex;
                    align-items: center;
                    padding: 0 20px;
                    position: relative;
                }

                .nav-logo {
                    font-family: 'Aldrich', sans-serif;
                    font-size: 2em;
                    font-weight: 900;
                    text-transform: uppercase;
                    letter-spacing: 4px;
                    margin-right: 40px;
                    position: relative;
                }

                .nav-logo a {
                    color: transparent;
                    background: linear-gradient(45deg, var(--blood-red), var(--neon-red), var(--toxic-purple));
                    -webkit-background-clip: text;
                    background-clip: text;
                    text-decoration: none;
                    text-shadow: 0 0 20px rgba(255,0,60,0.7);
                    transition: all 0.3s;
                }

                .nav-logo a:hover {
                    text-shadow: 0 0 30px rgba(255,0,60,1), 0 0 40px rgba(157,0,255,0.7);
                }

                .nav-logo::after {
                    content: '▮';
                    position: absolute;
                    right: -20px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: var(--blood-red);
                    animation: blink 1s infinite;
                }

                @keyframes blink {
                    0%, 100% { opacity: 1; }
                    50% { opacity: 0; }
                }

                .nav-menu {
                    display: flex;
                    list-style: none;
                    gap: 30px;
                    flex-grow: 1;
                }

                .nav-menu li {
                    position: relative;
                }

                .nav-menu a {
                    color: #ccc;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-size: 0.9em;
                    letter-spacing: 2px;
                    padding: 20px 0;
                    position: relative;
                    transition: all 0.3s;
                    font-weight: 600;
                }

                .nav-menu a::before {
                    content: '>';
                    margin-right: 8px;
                    color: var(--blood-red);
                    opacity: 0;
                    transition: opacity 0.3s;
                }

                .nav-menu a:hover {
                    color: white;
                    text-shadow: 0 0 10px var(--neon-red);
                }

                .nav-menu a:hover::before {
                    opacity: 1;
                }

                .nav-menu a::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0;
                    height: 3px;
                    background: linear-gradient(90deg, var(--blood-red), var(--neon-red));
                    transition: width 0.3s;
                }

                .nav-menu a:hover::after {
                    width: 100%;
                }

                .nav-user {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                    margin-left: auto;
                }

                .user-greeting {
                    background: linear-gradient(45deg, var(--carbon-gray), var(--metal-gray));
                    padding: 10px 20px;
                    border-radius: 4px;
                    border: 1px solid rgba(255,0,60,0.3);
                    position: relative;
                    overflow: hidden;
                }

                .user-greeting::before {
                    content: '👤';
                    margin-right: 8px;
                    filter: drop-shadow(0 0 2px var(--neon-red));
                }

                .cyber-btn {
                    padding: 10px 25px;
                    background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
                    border: none;
                    color: white;
                    font-family: 'Orbitron', sans-serif;
                    font-weight: 700;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                    transition: all 0.3s;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 0.9em;
                    border-radius: 3px;
                    box-shadow: 
                        0 4px 15px rgba(139,0,0,0.4),
                        inset 0 1px 0 rgba(255,255,255,0.1);
                }

                .cyber-btn::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                    transition: 0.5s;
                }

                .cyber-btn:hover {
                    background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
                    transform: translateY(-2px);
                    box-shadow: 
                        0 6px 20px rgba(255,0,60,0.6),
                        inset 0 1px 0 rgba(255,255,255,0.2);
                }

                .cyber-btn:hover::before {
                    left: 100%;
                }

                .cyber-btn:active {
                    transform: translateY(1px);
                    box-shadow: 
                        0 2px 10px rgba(255,0,60,0.4),
                        inset 0 1px 0 rgba(255,255,255,0.1);
                }

                .cyber-btn-logout {
                    background: linear-gradient(45deg, #333333, #555555);
                }

                .cyber-btn-logout:hover {
                    background: linear-gradient(45deg, #555555, #777777);
                }

                /* === FLASH MESSAGES === */
                .flash-container {
                    max-width: 1200px;
                    margin: 20px auto;
                    padding: 0 20px;
                }

                .cyber-alert {
                    padding: 20px;
                    margin: 15px 0;
                    border-left: 5px solid;
                    background: rgba(0,0,0,0.7);
                    position: relative;
                    overflow: hidden;
                    animation: slideIn 0.5s ease-out;
                    backdrop-filter: blur(10px);
                    border: 1px solid;
                    box-shadow: 0 0 20px rgba(0,0,0,0.5);
                }

                @keyframes slideIn {
                    from { transform: translateX(-100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }

                .alert-success {
                    border-left-color: var(--hacker-green);
                    border-color: rgba(0,255,0,0.3);
                    background: linear-gradient(90deg, rgba(0,255,0,0.1) 0%, rgba(0,0,0,0.7) 30%);
                }

                .alert-success::before {
                    content: '✓';
                    position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    font-size: 2em;
                    color: var(--hacker-green);
                    opacity: 0.3;
                }

                .alert-error {
                    border-left-color: var(--blood-red);
                    border-color: rgba(255,0,0,0.3);
                    background: linear-gradient(90deg, rgba(255,0,0,0.1) 0%, rgba(0,0,0,0.7) 30%);
                }

                .alert-error::before {
                    content: '✗';
                    position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    font-size: 2em;
                    color: var(--blood-red);
                    opacity: 0.3;
                }

                /* === MAIN CONTENT === */
                .main-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 0 20px 40px;
                    min-height: calc(100vh - 200px);
                }

                /* === PARTICLES === */
                #particles-js {
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    z-index: -1;
                    pointer-events: none;
                }

                /* === RESPONSIVE === */
                @media (max-width: 768px) {
                    .nav-container {
                        flex-direction: column;
                        padding: 15px;
                    }

                    .nav-logo {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .nav-menu {
                        flex-direction: column;
                        gap: 10px;
                        width: 100%;
                        text-align: center;
                    }

                    .nav-user {
                        margin-left: 0;
                        margin-top: 15px;
                        flex-direction: column;
                        gap: 10px;
                        width: 100%;
                    }

                    .cyber-btn {
                        width: 100%;
                        text-align: center;
                    }

                    .user-greeting {
                        width: 100%;
                        text-align: center;
                    }
                }

                /* === ADMIN BADGE === */
                .admin-badge {
                    display: inline-block;
                    background: linear-gradient(45deg, var(--toxic-purple), #ff00ff);
                    color: white;
                    padding: 3px 10px;
                    border-radius: 12px;
                    font-size: 0.7em;
                    margin-left: 10px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    animation: pulsePurple 2s infinite;
                }

                @keyframes pulsePurple {
                    0%, 100% { box-shadow: 0 0 5px var(--toxic-purple); }
                    50% { box-shadow: 0 0 15px var(--toxic-purple); }
                }
            </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 414
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

        // line 415
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 416
        yield "            <script>
                // Particles.js configuration
                document.addEventListener('DOMContentLoaded', function() {
                    // Create particle container
                    const particlesContainer = document.createElement('div');
                    particlesContainer.id = 'particles-js';
                    document.body.prepend(particlesContainer);

                    // Simple particle system
                    const particles = [];
                    const particleCount = 100;

                    for (let i = 0; i < particleCount; i++) {
                        createParticle();
                    }

                    function createParticle() {
                        const particle = document.createElement('div');
                        particle.className = 'particle';
                        
                        // Random properties
                        const size = Math.random() * 4 + 1;
                        const colors = [
                            'rgba(255, 0, 60, 0.3)',
                            'rgba(255, 0, 0, 0.2)',
                            'rgba(157, 0, 255, 0.1)',
                            'rgba(0, 240, 255, 0.1)'
                        ];
                        const color = colors[Math.floor(Math.random() * colors.length)];
                        
                        particle.style.cssText = `
                            position: fixed;
                            width: \${size}px;
                            height: \${size}px;
                            background: \${color};
                            border-radius: 50%;
                            left: \${Math.random() * 100}vw;
                            top: \${Math.random() * 100}vh;
                            pointer-events: none;
                            z-index: -1;
                        `;
                        
                        document.body.appendChild(particle);
                        
                        // Store particle data
                        particles.push({
                            element: particle,
                            x: parseFloat(particle.style.left),
                            y: parseFloat(particle.style.top),
                            speedX: (Math.random() - 0.5) * 0.5,
                            speedY: (Math.random() - 0.5) * 0.5,
                            opacity: Math.random() * 0.5 + 0.1
                        });
                    }

                    // Animate particles
                    function animateParticles() {
                        particles.forEach(p => {
                            p.x += p.speedX;
                            p.y += p.speedY;
                            
                            // Wrap around screen
                            if (p.x > 100) p.x = 0;
                            if (p.x < 0) p.x = 100;
                            if (p.y > 100) p.y = 0;
                            if (p.y < 0) p.y = 100;
                            
                            // Pulsing opacity
                            p.opacity = 0.1 + Math.sin(Date.now() * 0.001 + p.x) * 0.2;
                            
                            p.element.style.left = `\${p.x}vw`;
                            p.element.style.top = `\${p.y}vh`;
                            p.element.style.opacity = p.opacity;
                        });
                        
                        requestAnimationFrame(animateParticles);
                    }
                    
                    animateParticles();

                    // Navbar hover effects
                    const navLinks = document.querySelectorAll('.nav-menu a');
                    navLinks.forEach(link => {
                        link.addEventListener('mouseenter', function() {
                            this.style.transform = 'translateY(-2px)';
                        });
                        
                        link.addEventListener('mouseleave', function() {
                            this.style.transform = 'translateY(0)';
                        });
                    });

                    // Flash message auto-remove
                    setTimeout(() => {
                        const alerts = document.querySelectorAll('.cyber-alert');
                        alerts.forEach(alert => {
                            alert.style.opacity = '0';
                            alert.style.transform = 'translateX(100%)';
                            setTimeout(() => alert.remove(), 500);
                        });
                    }, 5000);
                });

                // Window resize handler
                window.addEventListener('resize', function() {
                    // Update any layout calculations if needed
                });
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 415
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 587
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_user.html.twig";
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
        return array (  821 => 587,  798 => 415,  679 => 416,  676 => 415,  663 => 414,  248 => 8,  235 => 7,  212 => 5,  199 => 588,  197 => 587,  191 => 583,  182 => 580,  179 => 579,  175 => 578,  172 => 577,  163 => 574,  160 => 573,  156 => 572,  148 => 566,  141 => 562,  134 => 559,  127 => 555,  124 => 554,  120 => 552,  118 => 551,  114 => 550,  111 => 549,  109 => 548,  103 => 544,  97 => 542,  95 => 541,  88 => 537,  81 => 533,  71 => 525,  69 => 414,  66 => 413,  64 => 7,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}ARENA X - ESPORT DOMINATION{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22 fill=%22%23ff0000%22>⚔️</text></svg>\">
        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&family=Aldrich&display=swap\" rel=\"stylesheet\">
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
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    background: 
                        linear-gradient(135deg, #000000 0%, #1a0000 50%, #000000 100%),
                        repeating-linear-gradient(45deg, transparent, transparent 2px, rgba(139,0,0,0.1) 3px, rgba(139,0,0,0.1) 4px);
                    background-color: var(--black-hole);
                    font-family: 'Orbitron', 'Rajdhani', 'Arial Black', sans-serif;
                    color: white;
                    min-height: 100vh;
                    overflow-x: hidden;
                    position: relative;
                }

                body::before {
                    content: '';
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: 
                        radial-gradient(circle at 20% 30%, rgba(255,0,60,0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(255,0,0,0.1) 0%, transparent 50%),
                        radial-gradient(circle at 40% 80%, rgba(157,0,255,0.05) 0%, transparent 50%);
                    pointer-events: none;
                    z-index: -1;
                }

                /* === NAVBAR EXTREME === */
                .cyber-nav {
                    background: linear-gradient(90deg, 
                        rgba(17,17,17,0.95) 0%, 
                        rgba(34,34,34,0.95) 50%, 
                        rgba(17,17,17,0.95) 100%);
                    padding: 0;
                    margin-bottom: 30px;
                    border-bottom: 3px solid var(--blood-red);
                    box-shadow: 
                        0 0 30px rgba(255,0,0,0.5),
                        0 5px 20px rgba(0,0,0,0.8);
                    position: relative;
                    overflow: hidden;
                }

                .cyber-nav::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, 
                        transparent, 
                        rgba(255,0,60,0.2), 
                        transparent);
                    animation: scanNav 3s linear infinite;
                }

                @keyframes scanNav {
                    0% { left: -100%; }
                    100% { left: 100%; }
                }

                .nav-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    display: flex;
                    align-items: center;
                    padding: 0 20px;
                    position: relative;
                }

                .nav-logo {
                    font-family: 'Aldrich', sans-serif;
                    font-size: 2em;
                    font-weight: 900;
                    text-transform: uppercase;
                    letter-spacing: 4px;
                    margin-right: 40px;
                    position: relative;
                }

                .nav-logo a {
                    color: transparent;
                    background: linear-gradient(45deg, var(--blood-red), var(--neon-red), var(--toxic-purple));
                    -webkit-background-clip: text;
                    background-clip: text;
                    text-decoration: none;
                    text-shadow: 0 0 20px rgba(255,0,60,0.7);
                    transition: all 0.3s;
                }

                .nav-logo a:hover {
                    text-shadow: 0 0 30px rgba(255,0,60,1), 0 0 40px rgba(157,0,255,0.7);
                }

                .nav-logo::after {
                    content: '▮';
                    position: absolute;
                    right: -20px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: var(--blood-red);
                    animation: blink 1s infinite;
                }

                @keyframes blink {
                    0%, 100% { opacity: 1; }
                    50% { opacity: 0; }
                }

                .nav-menu {
                    display: flex;
                    list-style: none;
                    gap: 30px;
                    flex-grow: 1;
                }

                .nav-menu li {
                    position: relative;
                }

                .nav-menu a {
                    color: #ccc;
                    text-decoration: none;
                    text-transform: uppercase;
                    font-size: 0.9em;
                    letter-spacing: 2px;
                    padding: 20px 0;
                    position: relative;
                    transition: all 0.3s;
                    font-weight: 600;
                }

                .nav-menu a::before {
                    content: '>';
                    margin-right: 8px;
                    color: var(--blood-red);
                    opacity: 0;
                    transition: opacity 0.3s;
                }

                .nav-menu a:hover {
                    color: white;
                    text-shadow: 0 0 10px var(--neon-red);
                }

                .nav-menu a:hover::before {
                    opacity: 1;
                }

                .nav-menu a::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 0;
                    height: 3px;
                    background: linear-gradient(90deg, var(--blood-red), var(--neon-red));
                    transition: width 0.3s;
                }

                .nav-menu a:hover::after {
                    width: 100%;
                }

                .nav-user {
                    display: flex;
                    align-items: center;
                    gap: 20px;
                    margin-left: auto;
                }

                .user-greeting {
                    background: linear-gradient(45deg, var(--carbon-gray), var(--metal-gray));
                    padding: 10px 20px;
                    border-radius: 4px;
                    border: 1px solid rgba(255,0,60,0.3);
                    position: relative;
                    overflow: hidden;
                }

                .user-greeting::before {
                    content: '👤';
                    margin-right: 8px;
                    filter: drop-shadow(0 0 2px var(--neon-red));
                }

                .cyber-btn {
                    padding: 10px 25px;
                    background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
                    border: none;
                    color: white;
                    font-family: 'Orbitron', sans-serif;
                    font-weight: 700;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                    transition: all 0.3s;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 0.9em;
                    border-radius: 3px;
                    box-shadow: 
                        0 4px 15px rgba(139,0,0,0.4),
                        inset 0 1px 0 rgba(255,255,255,0.1);
                }

                .cyber-btn::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
                    transition: 0.5s;
                }

                .cyber-btn:hover {
                    background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
                    transform: translateY(-2px);
                    box-shadow: 
                        0 6px 20px rgba(255,0,60,0.6),
                        inset 0 1px 0 rgba(255,255,255,0.2);
                }

                .cyber-btn:hover::before {
                    left: 100%;
                }

                .cyber-btn:active {
                    transform: translateY(1px);
                    box-shadow: 
                        0 2px 10px rgba(255,0,60,0.4),
                        inset 0 1px 0 rgba(255,255,255,0.1);
                }

                .cyber-btn-logout {
                    background: linear-gradient(45deg, #333333, #555555);
                }

                .cyber-btn-logout:hover {
                    background: linear-gradient(45deg, #555555, #777777);
                }

                /* === FLASH MESSAGES === */
                .flash-container {
                    max-width: 1200px;
                    margin: 20px auto;
                    padding: 0 20px;
                }

                .cyber-alert {
                    padding: 20px;
                    margin: 15px 0;
                    border-left: 5px solid;
                    background: rgba(0,0,0,0.7);
                    position: relative;
                    overflow: hidden;
                    animation: slideIn 0.5s ease-out;
                    backdrop-filter: blur(10px);
                    border: 1px solid;
                    box-shadow: 0 0 20px rgba(0,0,0,0.5);
                }

                @keyframes slideIn {
                    from { transform: translateX(-100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }

                .alert-success {
                    border-left-color: var(--hacker-green);
                    border-color: rgba(0,255,0,0.3);
                    background: linear-gradient(90deg, rgba(0,255,0,0.1) 0%, rgba(0,0,0,0.7) 30%);
                }

                .alert-success::before {
                    content: '✓';
                    position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    font-size: 2em;
                    color: var(--hacker-green);
                    opacity: 0.3;
                }

                .alert-error {
                    border-left-color: var(--blood-red);
                    border-color: rgba(255,0,0,0.3);
                    background: linear-gradient(90deg, rgba(255,0,0,0.1) 0%, rgba(0,0,0,0.7) 30%);
                }

                .alert-error::before {
                    content: '✗';
                    position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    font-size: 2em;
                    color: var(--blood-red);
                    opacity: 0.3;
                }

                /* === MAIN CONTENT === */
                .main-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 0 20px 40px;
                    min-height: calc(100vh - 200px);
                }

                /* === PARTICLES === */
                #particles-js {
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    z-index: -1;
                    pointer-events: none;
                }

                /* === RESPONSIVE === */
                @media (max-width: 768px) {
                    .nav-container {
                        flex-direction: column;
                        padding: 15px;
                    }

                    .nav-logo {
                        margin-right: 0;
                        margin-bottom: 15px;
                    }

                    .nav-menu {
                        flex-direction: column;
                        gap: 10px;
                        width: 100%;
                        text-align: center;
                    }

                    .nav-user {
                        margin-left: 0;
                        margin-top: 15px;
                        flex-direction: column;
                        gap: 10px;
                        width: 100%;
                    }

                    .cyber-btn {
                        width: 100%;
                        text-align: center;
                    }

                    .user-greeting {
                        width: 100%;
                        text-align: center;
                    }
                }

                /* === ADMIN BADGE === */
                .admin-badge {
                    display: inline-block;
                    background: linear-gradient(45deg, var(--toxic-purple), #ff00ff);
                    color: white;
                    padding: 3px 10px;
                    border-radius: 12px;
                    font-size: 0.7em;
                    margin-left: 10px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                    animation: pulsePurple 2s infinite;
                }

                @keyframes pulsePurple {
                    0%, 100% { box-shadow: 0 0 5px var(--toxic-purple); }
                    50% { box-shadow: 0 0 15px var(--toxic-purple); }
                }
            </style>
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
            <script>
                // Particles.js configuration
                document.addEventListener('DOMContentLoaded', function() {
                    // Create particle container
                    const particlesContainer = document.createElement('div');
                    particlesContainer.id = 'particles-js';
                    document.body.prepend(particlesContainer);

                    // Simple particle system
                    const particles = [];
                    const particleCount = 100;

                    for (let i = 0; i < particleCount; i++) {
                        createParticle();
                    }

                    function createParticle() {
                        const particle = document.createElement('div');
                        particle.className = 'particle';
                        
                        // Random properties
                        const size = Math.random() * 4 + 1;
                        const colors = [
                            'rgba(255, 0, 60, 0.3)',
                            'rgba(255, 0, 0, 0.2)',
                            'rgba(157, 0, 255, 0.1)',
                            'rgba(0, 240, 255, 0.1)'
                        ];
                        const color = colors[Math.floor(Math.random() * colors.length)];
                        
                        particle.style.cssText = `
                            position: fixed;
                            width: \${size}px;
                            height: \${size}px;
                            background: \${color};
                            border-radius: 50%;
                            left: \${Math.random() * 100}vw;
                            top: \${Math.random() * 100}vh;
                            pointer-events: none;
                            z-index: -1;
                        `;
                        
                        document.body.appendChild(particle);
                        
                        // Store particle data
                        particles.push({
                            element: particle,
                            x: parseFloat(particle.style.left),
                            y: parseFloat(particle.style.top),
                            speedX: (Math.random() - 0.5) * 0.5,
                            speedY: (Math.random() - 0.5) * 0.5,
                            opacity: Math.random() * 0.5 + 0.1
                        });
                    }

                    // Animate particles
                    function animateParticles() {
                        particles.forEach(p => {
                            p.x += p.speedX;
                            p.y += p.speedY;
                            
                            // Wrap around screen
                            if (p.x > 100) p.x = 0;
                            if (p.x < 0) p.x = 100;
                            if (p.y > 100) p.y = 0;
                            if (p.y < 0) p.y = 100;
                            
                            // Pulsing opacity
                            p.opacity = 0.1 + Math.sin(Date.now() * 0.001 + p.x) * 0.2;
                            
                            p.element.style.left = `\${p.x}vw`;
                            p.element.style.top = `\${p.y}vh`;
                            p.element.style.opacity = p.opacity;
                        });
                        
                        requestAnimationFrame(animateParticles);
                    }
                    
                    animateParticles();

                    // Navbar hover effects
                    const navLinks = document.querySelectorAll('.nav-menu a');
                    navLinks.forEach(link => {
                        link.addEventListener('mouseenter', function() {
                            this.style.transform = 'translateY(-2px)';
                        });
                        
                        link.addEventListener('mouseleave', function() {
                            this.style.transform = 'translateY(0)';
                        });
                    });

                    // Flash message auto-remove
                    setTimeout(() => {
                        const alerts = document.querySelectorAll('.cyber-alert');
                        alerts.forEach(alert => {
                            alert.style.opacity = '0';
                            alert.style.transform = 'translateX(100%)';
                            setTimeout(() => alert.remove(), 500);
                        });
                    }, 5000);
                });

                // Window resize handler
                window.addEventListener('resize', function() {
                    // Update any layout calculations if needed
                });
            </script>
        {% endblock %}
    </head>
    <body>
        <!-- Particle Background -->
        
        <!-- Cyber Navigation -->
        <nav class=\"cyber-nav\">
            <div class=\"nav-container\">
                <div class=\"nav-logo\">
                    <a href=\"{{ path('front_home') }}\">ARENA-X</a>
                </div>
                
                <ul class=\"nav-menu\">
                    <li><a href=\"{{ path('front_home') }}\">HOME BASE</a></li>
                    
                    
                        
                        {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"{{ path('admin_dashboard') }}\">COMMAND CENTER</a></li>
                        {% endif %}
                    
                </ul>
                
                <div class=\"nav-user\">
                    {% if app.user %}
                        <div class=\"user-greeting\">
                            <span>{{ app.user.username }}</span>
                            {% if is_granted('ROLE_ADMIN') %}
                                <span class=\"admin-badge\">ADMIN</span>
                            {% endif %}
                        </div>
                        <a href=\"{{ path('app_logout') }}\" class=\"cyber-btn cyber-btn-logout\">
                            EXTRACT
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"cyber-btn\">
                            LOGIN
                        </a>
                        <a href=\"{{ path('app_register') }}\" class=\"cyber-btn\" style=\"background: linear-gradient(45deg, var(--toxic-purple), #9d00ff);\">
                            ENLIST
                        </a>
                    {% endif %}
                </div>
            </div>
        </nav>
        
        <!-- Flash Messages -->
        <div class=\"flash-container\">
            {% for message in app.flashes('success') %}
                <div class=\"cyber-alert alert-success\">
                    <strong>✓ SUCCESS:</strong> {{ message }}
                </div>
            {% endfor %}
            
            {% for message in app.flashes('error') %}
                <div class=\"cyber-alert alert-error\">
                    <strong>✗ ALERT:</strong> {{ message }}
                </div>
            {% endfor %}
        </div>
        
        <!-- Main Content -->
        <div class=\"main-container\">
            {% block body %}{% endblock %}
        </div>
    </body>
</html>", "base_user.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\base_user.html.twig");
    }
}
