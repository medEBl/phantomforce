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

/* security/login.html.twig */
class __TwigTemplate_f05da5838e9964eea15acae2de481cea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "ACCÈS COMBATTANT - Login";
        
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
            --black-hole: #000000;
            --metal-gray: #1a1a1a;
            --carbon-gray: #2b2b2b;
            --glitch-blue: #00f0ff;
            --hacker-green: #00ff00;
        }

        body {
            background: 
                linear-gradient(45deg, rgba(0,0,0,0.9) 0%, rgba(139,0,0,0.7) 100%),
                url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><path d=\"M20,20 L80,80 M20,80 L80,20\" stroke=\"%238B0000\" stroke-width=\"2\" opacity=\"0.3\"/></svg>'),
                radial-gradient(circle at 20% 80%, rgba(255,0,60,0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,0,0,0.2) 0%, transparent 50%);
            background-color: var(--black-hole);
            font-family: 'Orbitron', 'Rajdhani', 'Arial Black', sans-serif;
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .cyber-container {
            position: relative;
            max-width: 500px;
            margin: 50px auto;
            padding: 40px;
            background: linear-gradient(145deg, rgba(26,26,26,0.95) 0%, rgba(43,43,43,0.95) 100%);
            border: 2px solid var(--blood-red);
            border-image: linear-gradient(45deg, var(--blood-red), var(--neon-red)) 1;
            box-shadow: 
                0 0 30px rgba(255,0,0,0.5),
                0 0 60px rgba(255,0,60,0.3),
                inset 0 0 20px rgba(0,0,0,0.8);
            transform-style: preserve-3d;
            animation: glitch 0.5s infinite;
        }

        .cyber-container::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, transparent 40%, var(--glitch-blue) 45%, transparent 50%);
            z-index: -1;
            opacity: 0.7;
            animation: scanline 4s linear infinite;
        }

        .cyber-container::after {
            content: '◈';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--blood-red);
            font-size: 30px;
            text-shadow: 0 0 10px var(--neon-red);
            animation: pulse 1.5s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translateX(0); }
            10% { transform: translateX(-2px); }
            20% { transform: translateX(2px); }
            30% { transform: translateX(-1px); }
            40% { transform: translateX(1px); }
            50% { transform: translateX(0); }
        }

        @keyframes scanline {
            0% { background-position: 0 0; }
            100% { background-position: 0 -100%; }
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; text-shadow: 0 0 10px var(--neon-red); }
            50% { opacity: 1; text-shadow: 0 0 20px var(--neon-red), 0 0 30px var(--blood-red); }
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: transparent;
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 0 0 15px rgba(255,0,60,0.5);
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 25%;
            width: 50%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--blood-red), transparent);
        }

        .cyber-input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .cyber-input-group label {
            display: block;
            margin-bottom: 8px;
            color: #ccc;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cyber-input {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 1px solid var(--carbon-gray);
            border-left: 4px solid var(--neon-red);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: 1em;
            transition: all 0.3s;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
        }

        .cyber-input:focus {
            outline: none;
            border-color: var(--blood-red);
            box-shadow: 
                inset 0 0 20px rgba(255,0,0,0.3),
                0 0 20px rgba(255,0,0,0.2);
            background: rgba(0,0,0,0.9);
        }

        .cyber-checkbox {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .cyber-checkbox input[type=\"checkbox\"] {
            display: none;
        }

        .cyber-checkbox label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #ccc;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cyber-checkbox label::before {
            content: '☐';
            margin-right: 10px;
            font-size: 1.5em;
            color: var(--carbon-gray);
            transition: all 0.3s;
        }

        .cyber-checkbox input[type=\"checkbox\"]:checked + label::before {
            content: '☑';
            color: var(--hacker-green);
            text-shadow: 0 0 10px var(--hacker-green);
        }

        .cyber-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border: none;
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            margin: 20px 0;
            box-shadow: 
                0 5px 15px rgba(139,0,0,0.4),
                inset 0 1px 0 rgba(255,255,255,0.1);
        }

        .cyber-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .cyber-button:hover {
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
            transform: translateY(-3px);
            box-shadow: 
                0 8px 25px rgba(255,0,60,0.6),
                inset 0 1px 0 rgba(255,255,255,0.2);
        }

        .cyber-button:hover::before {
            left: 100%;
        }

        .cyber-button:active {
            transform: translateY(1px);
            box-shadow: 
                0 3px 10px rgba(255,0,60,0.4),
                inset 0 1px 0 rgba(255,255,255,0.1);
        }

        .cyber-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: var(--blood-red);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
            position: relative;
            transition: all 0.3s;
            padding: 10px;
        }

        .cyber-link:hover {
            color: var(--neon-red);
            text-shadow: 0 0 10px rgba(255,0,60,0.5);
        }

        .cyber-link::after {
            content: '↗';
            margin-left: 5px;
            display: inline-block;
            transition: transform 0.3s;
        }

        .cyber-link:hover::after {
            transform: translate(3px, -3px);
        }

        .error-box {
            background: rgba(139,0,0,0.2);
            border-left: 4px solid var(--blood-red);
            padding: 15px;
            margin: 20px 0;
            position: relative;
            overflow: hidden;
        }

        .error-box::before {
            content: '⚠';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2em;
            color: var(--blood-red);
            opacity: 0.3;
        }

        .terminal-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            opacity: 0.1;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 1px,
                rgba(0, 240, 255, 0.1) 1px,
                rgba(0, 240, 255, 0.1) 2px
            );
        }

        .matrix-rain {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: -1;
            opacity: 0.05;
        }

        @media (max-width: 768px) {
            .cyber-container {
                margin: 20px;
                padding: 20px;
            }
            
            h1 {
                font-size: 2em;
            }
        }

        /* Particles effect */
        .particles {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -2;
        }

        .particle {
            position: absolute;
            background: var(--neon-red);
            border-radius: 50%;
            opacity: 0.3;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 346
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

        // line 347
        yield "<div class=\"particles\" id=\"particles\"></div>
<div class=\"matrix-rain\"></div>

<div class=\"cyber-container\">
    <div class=\"terminal-lines\"></div>
    
    <h1>IDENTIFICATION COMBATTANT</h1>
    
    <form action=\"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
        
        <div class=\"cyber-input-group\">
            <label for=\"email\">EMAIL DE GUERRIER</label>
            <input type=\"text\" 
                   id=\"email\" 
                   name=\"email\" 
                   value=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 363, $this->source); })()), "html", null, true);
        yield "\" 
                   required 
                   autofocus 
                   class=\"cyber-input\"
                   placeholder=\"combattant@clan.io\"/>
        </div>

        <div class=\"cyber-input-group\">
            <label for=\"password\">CODE D'ACCÈS</label>
            <input type=\"password\" 
                   id=\"password\" 
                   name=\"password\" 
                   required 
                   class=\"cyber-input\"
                   placeholder=\"••••••••\"/>
        </div>

        ";
        // line 381
        yield "        <div class=\"g-recaptcha\"
             data-sitekey=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 382, $this->source); })()), "html", null, true);
        yield "\"
             style=\"margin: 20px 0;\">
        </div>

        <div class=\"cyber-checkbox\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
            <label for=\"remember_me\">MAINTENIR LA CONNEXION</label>
        </div>

        ";
        // line 391
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 391, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 392
            yield "            <div class=\"error-box\">
                <strong>ALERTE:</strong> ";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 393, $this->source); })()), "messageKey", [], "any", false, false, false, 393), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 393, $this->source); })()), "messageData", [], "any", false, false, false, 393), "security"), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 396
        yield "
        <button type=\"submit\" class=\"cyber-button\">
            <span>INITIER LA CONNEXION</span>
        </button>
    </form>

    <a href=\"";
        // line 402
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"cyber-link\">
        NOUVEAU RECRUE ? ENROLEZ-VOUS ICI
    </a>
</div>

";
        // line 408
        yield "<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

<script>
    // Create particle effect
    document.addEventListener('DOMContentLoaded', function() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            const size = Math.random() * 5 + 1;
            particle.style.width = `\${size}px`;
            particle.style.height = `\${size}px`;
            particle.style.left = `\${Math.random() * 100}vw`;
            particle.style.top = `\${Math.random() * 100}vh`;
            particle.style.opacity = Math.random() * 0.5 + 0.1;
            
            particlesContainer.appendChild(particle);
            
            // Animate particle
            animateParticle(particle);
        }
        
        function animateParticle(particle) {
            let x = parseFloat(particle.style.left);
            let y = parseFloat(particle.style.top);
            
            function move() {
                x += (Math.random() - 0.5) * 2;
                y += (Math.random() - 0.5) * 2;
                
                // Keep particles within bounds
                x = Math.max(0, Math.min(x, 100));
                y = Math.max(0, Math.min(y, 100));
                
                particle.style.left = `\${x}vw`;
                particle.style.top = `\${y}vh`;
                
                // Random opacity pulse
                particle.style.opacity = 0.1 + Math.sin(Date.now() * 0.001 + x) * 0.2;
                
                requestAnimationFrame(move);
            }
            
            move();
        }
        
        // Add glitch effect to inputs on focus
        const inputs = document.querySelectorAll('.cyber-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.animation = 'glitch 0.1s 3';
                setTimeout(() => {
                    this.parentElement.style.animation = '';
                }, 300);
            });
        });
        
        // Matrix rain effect
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const matrixRain = document.querySelector('.matrix-rain');
        
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        matrixRain.appendChild(canvas);
        
        const chars = \"01\";
        const charSize = 14;
        const columns = canvas.width / charSize;
        const drops = Array(Math.floor(columns)).fill(1);
        
        function drawMatrix() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = '#0F0';
            ctx.font = `\${charSize}px monospace`;
            
            for (let i = 0; i < drops.length; i++) {
                const char = chars[Math.floor(Math.random() * chars.length)];
                ctx.fillText(char, i * charSize, drops[i] * charSize);
                
                if (drops[i] * charSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        
        let matrixInterval = setInterval(drawMatrix, 50);
        
        // Resize handling
        window.addEventListener('resize', function() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
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
        return "security/login.html.twig";
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
        return array (  551 => 408,  543 => 402,  535 => 396,  529 => 393,  526 => 392,  524 => 391,  512 => 382,  509 => 381,  489 => 363,  479 => 356,  475 => 355,  465 => 347,  452 => 346,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_user.html.twig' %}

{% block title %}ACCÈS COMBATTANT - Login{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --blood-red: #ff0000;
            --dark-red: #8b0000;
            --neon-red: #ff003c;
            --black-hole: #000000;
            --metal-gray: #1a1a1a;
            --carbon-gray: #2b2b2b;
            --glitch-blue: #00f0ff;
            --hacker-green: #00ff00;
        }

        body {
            background: 
                linear-gradient(45deg, rgba(0,0,0,0.9) 0%, rgba(139,0,0,0.7) 100%),
                url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><path d=\"M20,20 L80,80 M20,80 L80,20\" stroke=\"%238B0000\" stroke-width=\"2\" opacity=\"0.3\"/></svg>'),
                radial-gradient(circle at 20% 80%, rgba(255,0,60,0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,0,0,0.2) 0%, transparent 50%);
            background-color: var(--black-hole);
            font-family: 'Orbitron', 'Rajdhani', 'Arial Black', sans-serif;
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .cyber-container {
            position: relative;
            max-width: 500px;
            margin: 50px auto;
            padding: 40px;
            background: linear-gradient(145deg, rgba(26,26,26,0.95) 0%, rgba(43,43,43,0.95) 100%);
            border: 2px solid var(--blood-red);
            border-image: linear-gradient(45deg, var(--blood-red), var(--neon-red)) 1;
            box-shadow: 
                0 0 30px rgba(255,0,0,0.5),
                0 0 60px rgba(255,0,60,0.3),
                inset 0 0 20px rgba(0,0,0,0.8);
            transform-style: preserve-3d;
            animation: glitch 0.5s infinite;
        }

        .cyber-container::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, transparent 40%, var(--glitch-blue) 45%, transparent 50%);
            z-index: -1;
            opacity: 0.7;
            animation: scanline 4s linear infinite;
        }

        .cyber-container::after {
            content: '◈';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--blood-red);
            font-size: 30px;
            text-shadow: 0 0 10px var(--neon-red);
            animation: pulse 1.5s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translateX(0); }
            10% { transform: translateX(-2px); }
            20% { transform: translateX(2px); }
            30% { transform: translateX(-1px); }
            40% { transform: translateX(1px); }
            50% { transform: translateX(0); }
        }

        @keyframes scanline {
            0% { background-position: 0 0; }
            100% { background-position: 0 -100%; }
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; text-shadow: 0 0 10px var(--neon-red); }
            50% { opacity: 1; text-shadow: 0 0 20px var(--neon-red), 0 0 30px var(--blood-red); }
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: transparent;
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 0 0 15px rgba(255,0,60,0.5);
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 25%;
            width: 50%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--blood-red), transparent);
        }

        .cyber-input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .cyber-input-group label {
            display: block;
            margin-bottom: 8px;
            color: #ccc;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cyber-input {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 1px solid var(--carbon-gray);
            border-left: 4px solid var(--neon-red);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: 1em;
            transition: all 0.3s;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
        }

        .cyber-input:focus {
            outline: none;
            border-color: var(--blood-red);
            box-shadow: 
                inset 0 0 20px rgba(255,0,0,0.3),
                0 0 20px rgba(255,0,0,0.2);
            background: rgba(0,0,0,0.9);
        }

        .cyber-checkbox {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .cyber-checkbox input[type=\"checkbox\"] {
            display: none;
        }

        .cyber-checkbox label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #ccc;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cyber-checkbox label::before {
            content: '☐';
            margin-right: 10px;
            font-size: 1.5em;
            color: var(--carbon-gray);
            transition: all 0.3s;
        }

        .cyber-checkbox input[type=\"checkbox\"]:checked + label::before {
            content: '☑';
            color: var(--hacker-green);
            text-shadow: 0 0 10px var(--hacker-green);
        }

        .cyber-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border: none;
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            margin: 20px 0;
            box-shadow: 
                0 5px 15px rgba(139,0,0,0.4),
                inset 0 1px 0 rgba(255,255,255,0.1);
        }

        .cyber-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .cyber-button:hover {
            background: linear-gradient(45deg, var(--blood-red), var(--neon-red));
            transform: translateY(-3px);
            box-shadow: 
                0 8px 25px rgba(255,0,60,0.6),
                inset 0 1px 0 rgba(255,255,255,0.2);
        }

        .cyber-button:hover::before {
            left: 100%;
        }

        .cyber-button:active {
            transform: translateY(1px);
            box-shadow: 
                0 3px 10px rgba(255,0,60,0.4),
                inset 0 1px 0 rgba(255,255,255,0.1);
        }

        .cyber-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: var(--blood-red);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
            position: relative;
            transition: all 0.3s;
            padding: 10px;
        }

        .cyber-link:hover {
            color: var(--neon-red);
            text-shadow: 0 0 10px rgba(255,0,60,0.5);
        }

        .cyber-link::after {
            content: '↗';
            margin-left: 5px;
            display: inline-block;
            transition: transform 0.3s;
        }

        .cyber-link:hover::after {
            transform: translate(3px, -3px);
        }

        .error-box {
            background: rgba(139,0,0,0.2);
            border-left: 4px solid var(--blood-red);
            padding: 15px;
            margin: 20px 0;
            position: relative;
            overflow: hidden;
        }

        .error-box::before {
            content: '⚠';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2em;
            color: var(--blood-red);
            opacity: 0.3;
        }

        .terminal-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            opacity: 0.1;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 1px,
                rgba(0, 240, 255, 0.1) 1px,
                rgba(0, 240, 255, 0.1) 2px
            );
        }

        .matrix-rain {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: -1;
            opacity: 0.05;
        }

        @media (max-width: 768px) {
            .cyber-container {
                margin: 20px;
                padding: 20px;
            }
            
            h1 {
                font-size: 2em;
            }
        }

        /* Particles effect */
        .particles {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -2;
        }

        .particle {
            position: absolute;
            background: var(--neon-red);
            border-radius: 50%;
            opacity: 0.3;
        }
    </style>
    <link href=\"https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"particles\" id=\"particles\"></div>
<div class=\"matrix-rain\"></div>

<div class=\"cyber-container\">
    <div class=\"terminal-lines\"></div>
    
    <h1>IDENTIFICATION COMBATTANT</h1>
    
    <form action=\"{{ path('app_login') }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        
        <div class=\"cyber-input-group\">
            <label for=\"email\">EMAIL DE GUERRIER</label>
            <input type=\"text\" 
                   id=\"email\" 
                   name=\"email\" 
                   value=\"{{ last_username }}\" 
                   required 
                   autofocus 
                   class=\"cyber-input\"
                   placeholder=\"combattant@clan.io\"/>
        </div>

        <div class=\"cyber-input-group\">
            <label for=\"password\">CODE D'ACCÈS</label>
            <input type=\"password\" 
                   id=\"password\" 
                   name=\"password\" 
                   required 
                   class=\"cyber-input\"
                   placeholder=\"••••••••\"/>
        </div>

        {# ✅ reCAPTCHA v2 checkbox #}
        <div class=\"g-recaptcha\"
             data-sitekey=\"{{ recaptcha_site_key }}\"
             style=\"margin: 20px 0;\">
        </div>

        <div class=\"cyber-checkbox\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
            <label for=\"remember_me\">MAINTENIR LA CONNEXION</label>
        </div>

        {% if error %}
            <div class=\"error-box\">
                <strong>ALERTE:</strong> {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        <button type=\"submit\" class=\"cyber-button\">
            <span>INITIER LA CONNEXION</span>
        </button>
    </form>

    <a href=\"{{ path('app_register') }}\" class=\"cyber-link\">
        NOUVEAU RECRUE ? ENROLEZ-VOUS ICI
    </a>
</div>

{# ✅ Load reCAPTCHA API - MUST be outside any other script tag #}
<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

<script>
    // Create particle effect
    document.addEventListener('DOMContentLoaded', function() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 50;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            
            const size = Math.random() * 5 + 1;
            particle.style.width = `\${size}px`;
            particle.style.height = `\${size}px`;
            particle.style.left = `\${Math.random() * 100}vw`;
            particle.style.top = `\${Math.random() * 100}vh`;
            particle.style.opacity = Math.random() * 0.5 + 0.1;
            
            particlesContainer.appendChild(particle);
            
            // Animate particle
            animateParticle(particle);
        }
        
        function animateParticle(particle) {
            let x = parseFloat(particle.style.left);
            let y = parseFloat(particle.style.top);
            
            function move() {
                x += (Math.random() - 0.5) * 2;
                y += (Math.random() - 0.5) * 2;
                
                // Keep particles within bounds
                x = Math.max(0, Math.min(x, 100));
                y = Math.max(0, Math.min(y, 100));
                
                particle.style.left = `\${x}vw`;
                particle.style.top = `\${y}vh`;
                
                // Random opacity pulse
                particle.style.opacity = 0.1 + Math.sin(Date.now() * 0.001 + x) * 0.2;
                
                requestAnimationFrame(move);
            }
            
            move();
        }
        
        // Add glitch effect to inputs on focus
        const inputs = document.querySelectorAll('.cyber-input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.animation = 'glitch 0.1s 3';
                setTimeout(() => {
                    this.parentElement.style.animation = '';
                }, 300);
            });
        });
        
        // Matrix rain effect
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const matrixRain = document.querySelector('.matrix-rain');
        
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        matrixRain.appendChild(canvas);
        
        const chars = \"01\";
        const charSize = 14;
        const columns = canvas.width / charSize;
        const drops = Array(Math.floor(columns)).fill(1);
        
        function drawMatrix() {
            ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            ctx.fillStyle = '#0F0';
            ctx.font = `\${charSize}px monospace`;
            
            for (let i = 0; i < drops.length; i++) {
                const char = chars[Math.floor(Math.random() * chars.length)];
                ctx.fillText(char, i * charSize, drops[i] * charSize);
                
                if (drops[i] * charSize > canvas.height && Math.random() > 0.975) {
                    drops[i] = 0;
                }
                drops[i]++;
            }
        }
        
        let matrixInterval = setInterval(drawMatrix, 50);
        
        // Resize handling
        window.addEventListener('resize', function() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    });
</script>
{% endblock %}", "security/login.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\security\\login.html.twig");
    }
}
