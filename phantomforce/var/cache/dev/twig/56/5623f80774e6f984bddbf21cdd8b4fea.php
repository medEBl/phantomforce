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

/* registration/register.html.twig */
class __TwigTemplate_f0616e92a945c0adb01356868d3d000f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "ARENA-X | ENLISTMENT PROTOCOL";
        
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
            --cyber-yellow: #ffff00;
        }

        .enlistment-section {
            position: relative;
            min-height: 100vh;
            padding: 60px 20px;
            background: 
                linear-gradient(135deg, #000000 0%, #1a0000 100%),
                url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><path d=\"M20,20 L80,80 M20,80 L80,20\" stroke=\"%238B0000\" stroke-width=\"1\" opacity=\"0.1\"/></svg>');
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .enlistment-container {
            position: relative;
            max-width: 900px;
            width: 100%;
            background: linear-gradient(145deg, rgba(17,17,17,0.95), rgba(34,34,34,0.95));
            border: 3px solid;
            border-image: linear-gradient(45deg, var(--toxic-purple), var(--neon-red), var(--cyber-yellow)) 1;
            padding: 50px;
            box-shadow: 
                0 0 50px rgba(157,0,255,0.4),
                0 0 100px rgba(255,0,60,0.2),
                inset 0 0 30px rgba(0,0,0,0.7);
            animation: borderPulse 3s infinite alternate;
        }

        @keyframes borderPulse {
            0% { border-image-source: linear-gradient(45deg, var(--toxic-purple), var(--neon-red), var(--cyber-yellow)); }
            100% { border-image-source: linear-gradient(45deg, var(--cyber-yellow), var(--toxic-purple), var(--neon-red)); }
        }

        .enlistment-container::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, var(--toxic-purple), var(--neon-red), var(--cyber-yellow));
            z-index: -1;
            filter: blur(20px);
            opacity: 0.3;
        }

        .enlistment-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .enlistment-title {
            font-size: 3.5em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 6px;
            margin-bottom: 20px;
            font-family: 'Aldrich', sans-serif;
            background: linear-gradient(45deg, var(--cyber-yellow), var(--toxic-purple), var(--neon-red));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 30px rgba(157,0,255,0.5);
            position: relative;
            display: inline-block;
        }

        .enlistment-title::after {
            content: '🛡️';
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            filter: drop-shadow(0 0 10px var(--cyber-yellow));
            animation: shieldPulse 2s infinite;
        }

        @keyframes shieldPulse {
            0%, 100% { transform: translateY(-50%) scale(1); }
            50% { transform: translateY(-50%) scale(1.1); }
        }

        .enlistment-subtitle {
            color: #aaa;
            font-size: 1.2em;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .protocol-steps {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 900;
            color: white;
            font-size: 1.2em;
            box-shadow: 0 0 15px rgba(255,0,60,0.5);
            animation: stepPulse 2s infinite;
        }

        @keyframes stepPulse {
            0%, 100% { box-shadow: 0 0 15px rgba(255,0,60,0.5); }
            50% { box-shadow: 0 0 25px rgba(255,0,60,0.8); }
        }

        .step-label {
            color: #ccc;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cyber-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            position: relative;
        }

        .form-column {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--glitch-blue);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
            font-weight: 600;
            position: relative;
        }

        .form-label::before {
            content: '▶';
            margin-right: 8px;
            color: var(--neon-red);
            font-size: 0.8em;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 2px solid var(--carbon-gray);
            border-left: 5px solid var(--toxic-purple);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: 1em;
            transition: all 0.3s;
            box-shadow: inset 0 0 15px rgba(0,0,0,0.5);
            border-radius: 6px;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--neon-red);
            border-left-color: var(--cyber-yellow);
            box-shadow: 
                inset 0 0 25px rgba(157,0,255,0.3),
                0 0 20px rgba(255,0,60,0.2);
            background: rgba(0,0,0,0.9);
        }

        .form-input.is-invalid {
            border-color: var(--neon-red) !important;
            border-left-color: var(--neon-red) !important;
            background: rgba(139, 0, 0, 0.2);
        }

        .form-input.is-valid {
            border-color: var(--hacker-green) !important;
            border-left-color: var(--hacker-green) !important;
            background: rgba(0, 100, 0, 0.2);
        }

        .form-input::placeholder {
            color: #666;
            font-style: italic;
        }

        .password-group {
            position: relative;
        }

        .password-strength {
            height: 4px;
            background: var(--carbon-gray);
            margin-top: 10px;
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }

        .strength-meter {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--blood-red), var(--cyber-yellow), var(--hacker-green));
            transition: width 0.3s;
        }

        .form-select {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 2px solid var(--carbon-gray);
            border-left: 5px solid var(--toxic-purple);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: 1em;
            transition: all 0.3s;
            cursor: pointer;
            appearance: none;
            background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ff003c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 20px;
            border-radius: 6px;
        }

        .form-select:focus {
            outline: none;
            border-color: var(--neon-red);
            border-left-color: var(--cyber-yellow);
            box-shadow: 
                inset 0 0 25px rgba(157,0,255,0.3),
                0 0 20px rgba(255,0,60,0.2);
        }

        .form-select.is-invalid {
            border-color: var(--neon-red) !important;
            border-left-color: var(--neon-red) !important;
            background: rgba(139, 0, 0, 0.2);
        }

        .form-select.is-valid {
            border-color: var(--hacker-green) !important;
            border-left-color: var(--hacker-green) !important;
        }

        .checkbox-group {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 20px 0;
        }

        .cyber-checkbox {
            display: none;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #ccc;
            font-size: 0.9em;
            position: relative;
        }

        .custom-checkbox {
            width: 25px;
            height: 25px;
            border: 2px solid var(--neon-red);
            margin-right: 15px;
            position: relative;
            transition: all 0.3s;
            background: rgba(0,0,0,0.5);
        }

        .custom-checkbox::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--hacker-green);
            opacity: 0;
            font-size: 1.2em;
            transition: opacity 0.3s;
        }

        .cyber-checkbox:checked + .custom-checkbox {
            border-color: var(--hacker-green);
            box-shadow: 0 0 15px rgba(0,255,0,0.5);
        }

        .cyber-checkbox:checked + .custom-checkbox::after {
            opacity: 1;
        }

        .submit-section {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 30px;
        }

        .enlist-button {
            padding: 20px 60px;
            background: linear-gradient(45deg, var(--toxic-purple), var(--neon-red));
            border: none;
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.3em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 3px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s;
            box-shadow: 
                0 10px 30px rgba(157,0,255,0.4),
                inset 0 0 20px rgba(255,255,255,0.1);
            border-radius: 6px;
        }

        .enlist-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: 0.6s;
        }

        .enlist-button:hover {
            background: linear-gradient(45deg, var(--neon-red), var(--cyber-yellow));
            transform: translateY(-5px);
            box-shadow: 
                0 15px 40px rgba(255,0,60,0.6),
                0 0 30px rgba(255,215,0,0.4),
                inset 0 0 20px rgba(255,255,255,0.2);
            letter-spacing: 4px;
        }

        .enlist-button:hover::before {
            left: 100%;
        }

        .enlist-button:active {
            transform: translateY(2px);
            box-shadow: 
                0 5px 20px rgba(255,0,60,0.4),
                inset 0 0 20px rgba(0,0,0,0.5);
        }

        .login-link {
            text-align: center;
            margin-top: 40px;
            color: #aaa;
        }

        .login-link a {
            color: var(--glitch-blue);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            position: relative;
            transition: all 0.3s;
        }

        .login-link a:hover {
            color: var(--cyber-yellow);
            text-shadow: 0 0 15px rgba(255,215,0,0.5);
        }

        .login-link a::after {
            content: '↗';
            margin-left: 8px;
            display: inline-block;
            transition: transform 0.3s;
        }

        .login-link a:hover::after {
            transform: translate(3px, -3px);
        }

        .invalid-feedback {
            color: var(--neon-red);
            font-size: 0.9em;
            margin-top: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding-left: 20px;
            display: block;
            text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
        }

        .valid-feedback {
            color: var(--hacker-green);
            font-size: 0.9em;
            margin-top: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding-left: 20px;
            display: block;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }

        .form-hint {
            color: var(--glitch-blue);
            font-size: 0.8em;
            margin-top: 5px;
            padding-left: 15px;
            font-style: italic;
            opacity: 0.8;
        }

        .form-hint::before {
            content: '💡';
            margin-right: 5px;
        }

        .hologram-effect {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(transparent 65%, rgba(0, 240, 255, 0.1) 75%, transparent 85%);
            pointer-events: none;
            animation: hologramScan 3s linear infinite;
            opacity: 0.3;
        }

        @keyframes hologramScan {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }

        .password-requirements {
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid var(--carbon-gray);
            border-radius: 6px;
            padding: 15px;
            margin-top: 10px;
            font-size: 0.85em;
        }

        .password-requirements ul {
            margin: 0;
            padding-left: 20px;
            color: #aaa;
        }

        .password-requirements li {
            margin-bottom: 5px;
            font-size: 0.9em;
        }

        .password-requirements li.valid {
            color: var(--hacker-green);
        }

        .password-requirements li.invalid {
            color: var(--neon-red);
        }

        .password-requirements li::before {
            content: '▢';
            margin-right: 8px;
        }

        .password-requirements li.valid::before {
            content: '✓';
            color: var(--hacker-green);
        }

        .password-requirements li.invalid::before {
            content: '✗';
            color: var(--neon-red);
        }

        .global-error {
            background: linear-gradient(90deg, rgba(139,0,0,0.1), rgba(255,0,60,0.1));
            border-left: 4px solid var(--blood-red);
            padding: 15px 20px;
            margin-bottom: 30px;
            animation: errorGlow 2s infinite alternate;
        }

        @keyframes errorGlow {
            0% { box-shadow: 0 0 10px rgba(255,0,60,0.2); }
            100% { box-shadow: 0 0 20px rgba(255,0,60,0.4); }
        }

        .global-error strong {
            color: var(--neon-red);
            display: block;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .alert-danger {
            background: rgba(139,0,0,0.2);
            border-left: 4px solid var(--blood-red);
            padding: 15px;
            margin-bottom: 30px;
            color: var(--neon-red);
        }

        .alert-danger strong {
            color: var(--neon-red);
            display: block;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .cyber-form {
                grid-template-columns: 1fr;
            }
            
            .enlistment-container {
                padding: 30px 20px;
            }
            
            .enlistment-title {
                font-size: 2.5em;
                letter-spacing: 3px;
            }
            
            .protocol-steps {
                flex-wrap: wrap;
                gap: 20px;
            }
            
            .enlist-button {
                padding: 15px 40px;
                font-size: 1.1em;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 595
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

        // line 596
        yield "    <section class=\"enlistment-section\">
        <div class=\"hologram-effect\"></div>
        
        <div class=\"enlistment-container\">
            <div class=\"enlistment-header\">
                <h1 class=\"enlistment-title\">ENLISTMENT PROTOCOL</h1>
                <p class=\"enlistment-subtitle\">JOIN THE ELITE FORCES OF ARENA-X</p>
                
                <div class=\"protocol-steps\">
                    <div class=\"step\">
                        <div class=\"step-number\">1</div>
                        <div class=\"step-label\">IDENTITY</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-number\">2</div>
                        <div class=\"step-label\">CREDENTIALS</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-number\">3</div>
                        <div class=\"step-label\">VERIFICATION</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-number\">4</div>
                        <div class=\"step-label\">DEPLOYMENT</div>
                    </div>
                </div>
            </div>
            
            ";
        // line 624
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 624, $this->source); })()), "flashes", ["error"], "method", false, false, false, 624));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 625
            yield "                <div style=\"background: rgba(139,0,0,0.2); border-left: 4px solid var(--blood-red); padding: 15px; margin-bottom: 30px;\">
                    <strong style=\"color: var(--neon-red);\">⚠ ALERT:</strong> ";
            // line 626
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        yield "            
           ";
        // line 630
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 630, $this->source); })()), "vars", [], "any", false, false, false, 630), "errors", [], "any", false, false, false, 630))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 631
            yield "    <div class=\"alert alert-danger\">
        <strong>⚠ ENLISTMENT PROTOCOL VIOLATION</strong>
        ";
            // line 633
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 633, $this->source); })()), 'errors');
            yield "
    </div>
";
        }
        // line 636
        yield "            
            ";
        // line 637
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 637, $this->source); })()), 'form_start', ["attr" => ["class" => "cyber-form", "novalidate" => "novalidate"]]);
        yield "
                <div class=\"form-column\">
                    <div class=\"form-group\">
                        ";
        // line 640
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 640, $this->source); })()), "email", [], "any", false, false, false, 640), 'label', ["label_attr" => ["class" => "form-label"], "label" => "COMBAT EMAIL"]);
        yield "
                        ";
        // line 641
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 641, $this->source); })()), "email", [], "any", false, false, false, 641), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 643
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 643, $this->source); })()), "email", [], "any", false, false, false, 643), "vars", [], "any", false, false, false, 643), "valid", [], "any", false, false, false, 643)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 643, $this->source); })()), "email", [], "any", false, false, false, 643), "vars", [], "any", false, false, false, 643), "errors", [], "any", false, false, false, 643))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "warrior@arena-x.io", "required" => "required"]]);
        // line 647
        yield "
                        ";
        // line 648
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 648, $this->source); })()), "email", [], "any", false, false, false, 648), 'errors');
        yield "
                        ";
        // line 649
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 649, $this->source); })()), "email", [], "any", false, false, false, 649), "vars", [], "any", false, false, false, 649), "errors", [], "any", false, false, false, 649)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 649, $this->source); })()), "email", [], "any", false, false, false, 649), "vars", [], "any", false, false, false, 649), "value", [], "any", false, false, false, 649))) {
            // line 650
            yield "                            <div class=\"valid-feedback\">✓ Valid email format</div>
                        ";
        }
        // line 652
        yield "                        <div class=\"form-hint\">Format: warrior@arena-x.io</div>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 656
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 656, $this->source); })()), "username", [], "any", false, false, false, 656), 'label', ["label_attr" => ["class" => "form-label"], "label" => "CALL SIGN"]);
        yield "
                        ";
        // line 657
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 657, $this->source); })()), "username", [], "any", false, false, false, 657), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 659
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 659, $this->source); })()), "username", [], "any", false, false, false, 659), "vars", [], "any", false, false, false, 659), "valid", [], "any", false, false, false, 659)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 659, $this->source); })()), "username", [], "any", false, false, false, 659), "vars", [], "any", false, false, false, 659), "errors", [], "any", false, false, false, 659))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Enter your warrior name", "required" => "required"]]);
        // line 663
        yield "
                        ";
        // line 664
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 664, $this->source); })()), "username", [], "any", false, false, false, 664), 'errors');
        yield "
                        ";
        // line 665
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 665, $this->source); })()), "username", [], "any", false, false, false, 665), "vars", [], "any", false, false, false, 665), "errors", [], "any", false, false, false, 665)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 665, $this->source); })()), "username", [], "any", false, false, false, 665), "vars", [], "any", false, false, false, 665), "value", [], "any", false, false, false, 665))) {
            // line 666
            yield "                            <div class=\"valid-feedback\">✓ Valid username</div>
                        ";
        }
        // line 668
        yield "                        <div class=\"form-hint\">3-50 caractères, lettres, chiffres, tirets et underscores uniquement</div>
                    </div>
                    
                    <div class=\"form-group\">
                        <div class=\"password-group\">
                            ";
        // line 673
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 673, $this->source); })()), "plainPassword", [], "any", false, false, false, 673), "first", [], "any", false, false, false, 673), 'label', ["label_attr" => ["class" => "form-label"], "label" => "ACCESS CODE"]);
        yield "
                            ";
        // line 674
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 674, $this->source); })()), "plainPassword", [], "any", false, false, false, 674), "first", [], "any", false, false, false, 674), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 676
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 676, $this->source); })()), "plainPassword", [], "any", false, false, false, 676), "first", [], "any", false, false, false, 676), "vars", [], "any", false, false, false, 676), "valid", [], "any", false, false, false, 676)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 676, $this->source); })()), "plainPassword", [], "any", false, false, false, 676), "first", [], "any", false, false, false, 676), "vars", [], "any", false, false, false, 676), "errors", [], "any", false, false, false, 676))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Minimum 8 characters", "required" => "required", "oninput" => "checkPasswordStrength(this.value)", "autocomplete" => "new-password"]]);
        // line 682
        yield "
                            ";
        // line 683
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 683, $this->source); })()), "plainPassword", [], "any", false, false, false, 683), "first", [], "any", false, false, false, 683), 'errors');
        yield "
                            ";
        // line 684
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 684, $this->source); })()), "plainPassword", [], "any", false, false, false, 684), "first", [], "any", false, false, false, 684), "vars", [], "any", false, false, false, 684), "errors", [], "any", false, false, false, 684)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 684, $this->source); })()), "plainPassword", [], "any", false, false, false, 684), "first", [], "any", false, false, false, 684), "vars", [], "any", false, false, false, 684), "value", [], "any", false, false, false, 684))) {
            // line 685
            yield "                                <div class=\"valid-feedback\">✓ Password meets requirements</div>
                            ";
        }
        // line 687
        yield "                            
                            <div class=\"password-strength\">
                                <div class=\"strength-meter\" id=\"passwordStrength\"></div>
                            </div>
                            
                            <div id=\"passwordRequirements\" class=\"password-requirements\" style=\"display: none;\">
                                <strong>EXIGENCES DU CODE D'ACCÈS:</strong>
                                <ul>
                                    <li id=\"reqLength\">Minimum 8 caractères</li>
                                    <li id=\"reqUppercase\">Au moins une majuscule</li>
                                    <li id=\"reqLowercase\">Au moins une minuscule</li>
                                    <li id=\"reqNumber\">Au moins un chiffre</li>
                                    <li id=\"reqSpecial\">Au moins un caractère spécial (@\$!%*?&)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 706
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 706, $this->source); })()), "plainPassword", [], "any", false, false, false, 706), "second", [], "any", false, false, false, 706), 'label', ["label_attr" => ["class" => "form-label"], "label" => "CONFIRM CODE"]);
        yield "
                        ";
        // line 707
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 707, $this->source); })()), "plainPassword", [], "any", false, false, false, 707), "second", [], "any", false, false, false, 707), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 709
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 709, $this->source); })()), "plainPassword", [], "any", false, false, false, 709), "second", [], "any", false, false, false, 709), "vars", [], "any", false, false, false, 709), "valid", [], "any", false, false, false, 709)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 709, $this->source); })()), "plainPassword", [], "any", false, false, false, 709), "second", [], "any", false, false, false, 709), "vars", [], "any", false, false, false, 709), "errors", [], "any", false, false, false, 709))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Repeat access code", "required" => "required"]]);
        // line 713
        yield "
                        ";
        // line 714
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 714, $this->source); })()), "plainPassword", [], "any", false, false, false, 714), "second", [], "any", false, false, false, 714), 'errors');
        yield "
                        ";
        // line 715
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 715, $this->source); })()), "plainPassword", [], "any", false, false, false, 715), "second", [], "any", false, false, false, 715), "vars", [], "any", false, false, false, 715), "errors", [], "any", false, false, false, 715)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 715, $this->source); })()), "plainPassword", [], "any", false, false, false, 715), "second", [], "any", false, false, false, 715), "vars", [], "any", false, false, false, 715), "value", [], "any", false, false, false, 715))) {
            // line 716
            yield "                            <div class=\"valid-feedback\">✓ Passwords match</div>
                        ";
        }
        // line 718
        yield "                    </div>
                </div>
                
                <div class=\"form-column\">
                    <div class=\"form-group\">
                        ";
        // line 723
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 723, $this->source); })()), "fullName", [], "any", false, false, false, 723), 'label', ["label_attr" => ["class" => "form-label"], "label" => "FULL DESIGNATION"]);
        yield "
                        ";
        // line 724
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 724, $this->source); })()), "fullName", [], "any", false, false, false, 724), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 726
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 726, $this->source); })()), "fullName", [], "any", false, false, false, 726), "vars", [], "any", false, false, false, 726), "valid", [], "any", false, false, false, 726)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 726, $this->source); })()), "fullName", [], "any", false, false, false, 726), "vars", [], "any", false, false, false, 726), "errors", [], "any", false, false, false, 726))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "John \"Reaper\" Smith", "required" => "required"]]);
        // line 730
        yield "
                        ";
        // line 731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 731, $this->source); })()), "fullName", [], "any", false, false, false, 731), 'errors');
        yield "
                        ";
        // line 732
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 732, $this->source); })()), "fullName", [], "any", false, false, false, 732), "vars", [], "any", false, false, false, 732), "errors", [], "any", false, false, false, 732)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 732, $this->source); })()), "fullName", [], "any", false, false, false, 732), "vars", [], "any", false, false, false, 732), "value", [], "any", false, false, false, 732))) {
            // line 733
            yield "                            <div class=\"valid-feedback\">✓ Valid name format</div>
                        ";
        }
        // line 735
        yield "                        <div class=\"form-hint\">2-100 caractères, lettres, espaces, tirets et apostrophes uniquement</div>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 739
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 739, $this->source); })()), "country", [], "any", false, false, false, 739), 'label', ["label_attr" => ["class" => "form-label"], "label" => "OPERATION ZONE"]);
        yield "
                        ";
        // line 740
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 740, $this->source); })()), "country", [], "any", false, false, false, 740), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 742
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 742, $this->source); })()), "country", [], "any", false, false, false, 742), "vars", [], "any", false, false, false, 742), "valid", [], "any", false, false, false, 742)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 742, $this->source); })()), "country", [], "any", false, false, false, 742), "vars", [], "any", false, false, false, 742), "errors", [], "any", false, false, false, 742))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "placeholder" => "Country of origin", "required" => "required"]]);
        // line 746
        yield "
                        ";
        // line 747
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 747, $this->source); })()), "country", [], "any", false, false, false, 747), 'errors');
        yield "
                        ";
        // line 748
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 748, $this->source); })()), "country", [], "any", false, false, false, 748), "vars", [], "any", false, false, false, 748), "errors", [], "any", false, false, false, 748)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 748, $this->source); })()), "country", [], "any", false, false, false, 748), "vars", [], "any", false, false, false, 748), "value", [], "any", false, false, false, 748))) {
            // line 749
            yield "                            <div class=\"valid-feedback\">✓ Valid country name</div>
                        ";
        }
        // line 751
        yield "                        <div class=\"form-hint\">Lettres, espaces et tirets uniquement</div>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 755
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 755, $this->source); })()), "birthDate", [], "any", false, false, false, 755), 'label', ["label_attr" => ["class" => "form-label"], "label" => "ACTIVATION DATE"]);
        yield "
                        ";
        // line 756
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 756, $this->source); })()), "birthDate", [], "any", false, false, false, 756), 'widget', ["attr" => ["class" => (("form-input" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 758
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 758, $this->source); })()), "birthDate", [], "any", false, false, false, 758), "vars", [], "any", false, false, false, 758), "valid", [], "any", false, false, false, 758)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 758, $this->source); })()), "birthDate", [], "any", false, false, false, 758), "vars", [], "any", false, false, false, 758), "errors", [], "any", false, false, false, 758))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "required" => "required"]]);
        // line 761
        yield "
                        ";
        // line 762
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 762, $this->source); })()), "birthDate", [], "any", false, false, false, 762), 'errors');
        yield "
                        ";
        // line 763
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 763, $this->source); })()), "birthDate", [], "any", false, false, false, 763), "vars", [], "any", false, false, false, 763), "errors", [], "any", false, false, false, 763)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 763, $this->source); })()), "birthDate", [], "any", false, false, false, 763), "vars", [], "any", false, false, false, 763), "value", [], "any", false, false, false, 763))) {
            // line 764
            yield "                            <div class=\"valid-feedback\">✓ Valid birth date</div>
                        ";
        }
        // line 766
        yield "                        <div class=\"form-hint\">L'utilisateur doit avoir au moins 13 ans</div>
                    </div>
                    
                    <div class=\"form-group\">
                        ";
        // line 770
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 770, $this->source); })()), "role", [], "any", false, false, false, 770), 'label', ["label_attr" => ["class" => "form-label"], "label" => "COMBAT ROLE"]);
        yield "
                        ";
        // line 771
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 771, $this->source); })()), "role", [], "any", false, false, false, 771), 'widget', ["attr" => ["class" => (("form-select" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 773
(isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 773, $this->source); })()), "role", [], "any", false, false, false, 773), "vars", [], "any", false, false, false, 773), "valid", [], "any", false, false, false, 773)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 773, $this->source); })()), "role", [], "any", false, false, false, 773), "vars", [], "any", false, false, false, 773), "errors", [], "any", false, false, false, 773))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "required" => "required"]]);
        // line 776
        yield "
                        ";
        // line 777
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 777, $this->source); })()), "role", [], "any", false, false, false, 777), 'errors');
        yield "
                        ";
        // line 778
        if (( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 778, $this->source); })()), "role", [], "any", false, false, false, 778), "vars", [], "any", false, false, false, 778), "errors", [], "any", false, false, false, 778)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 778, $this->source); })()), "role", [], "any", false, false, false, 778), "vars", [], "any", false, false, false, 778), "value", [], "any", false, false, false, 778))) {
            // line 779
            yield "                            <div class=\"valid-feedback\">✓ Role selected</div>
                        ";
        }
        // line 781
        yield "                        <div class=\"form-hint\">Choix: user, admin, moderator, editor</div>
                    </div>
                </div>
                
                <div class=\"checkbox-group\">
                    <input type=\"checkbox\" id=\"terms\" class=\"cyber-checkbox\" required>
                    <label for=\"terms\" class=\"checkbox-label\">
                        <span class=\"custom-checkbox\"></span>
                        <span>I ACCEPT THE ARENA-X COMBAT PROTOCOL AND DATA PROCESSING TERMS</span>
                    </label>
                </div>
                
                <div class=\"submit-section\">
                    <button type=\"submit\" class=\"enlist-button\">
                        <span>INITIATE ENLISTMENT</span>
                    </button>
                </div>
            ";
        // line 798
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 798, $this->source); })()), 'form_end');
        yield "
            
            <div class=\"login-link\">
                <p>ALREADY ENLISTED? <a href=\"";
        // line 801
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">PROCEED TO LOGIN</a></p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Custom form styling
            const formGroups = document.querySelectorAll('.form-group');
            formGroups.forEach(group => {
                const label = group.querySelector('label');
                const input = group.querySelector('input, select, textarea');
                
                if(label && input) {
                    // Add focus effects
                    input.addEventListener('focus', function() {
                        this.parentElement.style.transform = 'translateX(10px)';
                        setTimeout(() => {
                            this.parentElement.style.transform = 'translateX(0)';
                        }, 300);
                    });
                    
                    // Real-time validation
                    input.addEventListener('blur', function() {
                        validateField(this);
                    });
                    
                    input.addEventListener('input', function() {
                        // Remove error class on input
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                        const errorElement = this.parentElement.querySelector('.invalid-feedback');
                        const validElement = this.parentElement.querySelector('.valid-feedback');
                        
                        if(errorElement) {
                            errorElement.style.display = 'none';
                        }
                        
                        if(validElement && this.value.trim() !== '') {
                            validElement.style.display = 'block';
                        } else if(validElement) {
                            validElement.style.display = 'none';
                        }
                        
                        // Special handling for password field
                        if(this.type === 'password' && this.id.includes('first')) {
                            checkPasswordStrength(this.value);
                        }
                    });
                }
            });
            
            function validateField(field) {
                if(field.value.trim() === '' && field.hasAttribute('required')) {
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    return false;
                }
                
                // Basic email validation
                if(field.type === 'email') {
                    const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
                    if(!emailRegex.test(field.value)) {
                        field.classList.add('is-invalid');
                        field.classList.remove('is-valid');
                        return false;
                    }
                }
                
                // Basic validation passed
                if(field.value.trim() !== '') {
                    field.classList.add('is-valid');
                    field.classList.remove('is-invalid');
                }
                
                return true;
            }
            
            // Enhanced password strength checker
            window.checkPasswordStrength = function(password) {
                const meter = document.getElementById('passwordStrength');
                const requirements = document.getElementById('passwordRequirements');
                const reqs = {
                    length: document.getElementById('reqLength'),
                    uppercase: document.getElementById('reqUppercase'),
                    lowercase: document.getElementById('reqLowercase'),
                    number: document.getElementById('reqNumber'),
                    special: document.getElementById('reqSpecial')
                };
                
                if(!password) {
                    meter.style.width = '0%';
                    requirements.style.display = 'none';
                    Object.values(reqs).forEach(req => {
                        req.classList.remove('valid', 'invalid');
                    });
                    return;
                }
                
                // Show requirements
                requirements.style.display = 'block';
                
                // Check individual requirements
                let strength = 0;
                const checks = {
                    length: password.length >= 8,
                    uppercase: /[A-Z]/.test(password),
                    lowercase: /[a-z]/.test(password),
                    number: /[0-9]/.test(password),
                    special: /[^A-Za-z0-9]/.test(password)
                };
                
                // Update requirement indicators
                Object.keys(checks).forEach(key => {
                    if(checks[key]) {
                        reqs[key].classList.add('valid');
                        reqs[key].classList.remove('invalid');
                        strength += 20; // Each requirement adds 20%
                    } else {
                        reqs[key].classList.add('invalid');
                        reqs[key].classList.remove('valid');
                    }
                });
                
                // Additional points for length
                if(password.length >= 12) strength += 10;
                if(password.length >= 16) strength += 10;
                
                meter.style.width = Math.min(strength, 100) + '%';
                
                // Color based on strength
                if(strength < 50) {
                    meter.style.background = 'linear-gradient(90deg, var(--blood-red), var(--neon-red))';
                } else if(strength < 80) {
                    meter.style.background = 'linear-gradient(90deg, var(--neon-red), var(--cyber-yellow))';
                } else {
                    meter.style.background = 'linear-gradient(90deg, var(--cyber-yellow), var(--hacker-green))';
                }
            };
            
            // Form submission animation
            const form = document.querySelector('.cyber-form');
            form.addEventListener('submit', function(e) {
                // Check terms checkbox
                const termsCheckbox = document.getElementById('terms');
                if(!termsCheckbox.checked) {
                    e.preventDefault();
                    alert('You must accept the Arena-X Combat Protocol to proceed.');
                    termsCheckbox.parentElement.style.animation = 'errorPulse 0.5s ease-in-out';
                    setTimeout(() => {
                        termsCheckbox.parentElement.style.animation = '';
                    }, 500);
                    return;
                }
                
                const button = this.querySelector('.enlist-button');
                button.innerHTML = '<span>PROCESSING ENLISTMENT...</span>';
                button.style.background = 'linear-gradient(45deg, var(--cyber-yellow), var(--hacker-green))';
                button.disabled = true;
                
                // Add loading animation
                button.style.position = 'relative';
                button.style.overflow = 'hidden';
                
                const loadingBar = document.createElement('div');
                loadingBar.style.position = 'absolute';
                loadingBar.style.bottom = '0';
                loadingBar.style.left = '0';
                loadingBar.style.width = '0%';
                loadingBar.style.height = '4px';
                loadingBar.style.background = 'linear-gradient(90deg, var(--toxic-purple), var(--neon-red))';
                loadingBar.style.transition = 'width 2s';
                button.appendChild(loadingBar);
                
                setTimeout(() => {
                    loadingBar.style.width = '100%';
                }, 100);
            });
            
            // Validate all fields on page load if they have values
            const inputs = document.querySelectorAll('.form-input, .form-select');
            inputs.forEach(input => {
                if(input.value) {
                    validateField(input);
                    input.classList.add('is-valid');
                }
            });
            
            // Terms checkbox styling
            const termsCheckbox = document.getElementById('terms');
            termsCheckbox.addEventListener('change', function() {
                const customCheckbox = this.nextElementSibling;
                if(this.checked) {
                    customCheckbox.style.borderColor = 'var(--hacker-green)';
                    customCheckbox.style.boxShadow = '0 0 15px rgba(0,255,0,0.5)';
                } else {
                    customCheckbox.style.borderColor = 'var(--neon-red)';
                    customCheckbox.style.boxShadow = 'none';
                }
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
        return "registration/register.html.twig";
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
        return array (  1028 => 801,  1022 => 798,  1003 => 781,  999 => 779,  997 => 778,  993 => 777,  990 => 776,  988 => 773,  987 => 771,  983 => 770,  977 => 766,  973 => 764,  971 => 763,  967 => 762,  964 => 761,  962 => 758,  961 => 756,  957 => 755,  951 => 751,  947 => 749,  945 => 748,  941 => 747,  938 => 746,  936 => 742,  935 => 740,  931 => 739,  925 => 735,  921 => 733,  919 => 732,  915 => 731,  912 => 730,  910 => 726,  909 => 724,  905 => 723,  898 => 718,  894 => 716,  892 => 715,  888 => 714,  885 => 713,  883 => 709,  882 => 707,  878 => 706,  857 => 687,  853 => 685,  851 => 684,  847 => 683,  844 => 682,  842 => 676,  841 => 674,  837 => 673,  830 => 668,  826 => 666,  824 => 665,  820 => 664,  817 => 663,  815 => 659,  814 => 657,  810 => 656,  804 => 652,  800 => 650,  798 => 649,  794 => 648,  791 => 647,  789 => 643,  788 => 641,  784 => 640,  778 => 637,  775 => 636,  769 => 633,  765 => 631,  763 => 630,  760 => 629,  751 => 626,  748 => 625,  744 => 624,  714 => 596,  701 => 595,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_user.html.twig' %}

{% block title %}ARENA-X | ENLISTMENT PROTOCOL{% endblock %}

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
            --cyber-yellow: #ffff00;
        }

        .enlistment-section {
            position: relative;
            min-height: 100vh;
            padding: 60px 20px;
            background: 
                linear-gradient(135deg, #000000 0%, #1a0000 100%),
                url('data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100\" height=\"100\" viewBox=\"0 0 100 100\"><path d=\"M20,20 L80,80 M20,80 L80,20\" stroke=\"%238B0000\" stroke-width=\"1\" opacity=\"0.1\"/></svg>');
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .enlistment-container {
            position: relative;
            max-width: 900px;
            width: 100%;
            background: linear-gradient(145deg, rgba(17,17,17,0.95), rgba(34,34,34,0.95));
            border: 3px solid;
            border-image: linear-gradient(45deg, var(--toxic-purple), var(--neon-red), var(--cyber-yellow)) 1;
            padding: 50px;
            box-shadow: 
                0 0 50px rgba(157,0,255,0.4),
                0 0 100px rgba(255,0,60,0.2),
                inset 0 0 30px rgba(0,0,0,0.7);
            animation: borderPulse 3s infinite alternate;
        }

        @keyframes borderPulse {
            0% { border-image-source: linear-gradient(45deg, var(--toxic-purple), var(--neon-red), var(--cyber-yellow)); }
            100% { border-image-source: linear-gradient(45deg, var(--cyber-yellow), var(--toxic-purple), var(--neon-red)); }
        }

        .enlistment-container::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg, var(--toxic-purple), var(--neon-red), var(--cyber-yellow));
            z-index: -1;
            filter: blur(20px);
            opacity: 0.3;
        }

        .enlistment-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .enlistment-title {
            font-size: 3.5em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 6px;
            margin-bottom: 20px;
            font-family: 'Aldrich', sans-serif;
            background: linear-gradient(45deg, var(--cyber-yellow), var(--toxic-purple), var(--neon-red));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 30px rgba(157,0,255,0.5);
            position: relative;
            display: inline-block;
        }

        .enlistment-title::after {
            content: '🛡️';
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            filter: drop-shadow(0 0 10px var(--cyber-yellow));
            animation: shieldPulse 2s infinite;
        }

        @keyframes shieldPulse {
            0%, 100% { transform: translateY(-50%) scale(1); }
            50% { transform: translateY(-50%) scale(1.1); }
        }

        .enlistment-subtitle {
            color: #aaa;
            font-size: 1.2em;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .protocol-steps {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 900;
            color: white;
            font-size: 1.2em;
            box-shadow: 0 0 15px rgba(255,0,60,0.5);
            animation: stepPulse 2s infinite;
        }

        @keyframes stepPulse {
            0%, 100% { box-shadow: 0 0 15px rgba(255,0,60,0.5); }
            50% { box-shadow: 0 0 25px rgba(255,0,60,0.8); }
        }

        .step-label {
            color: #ccc;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cyber-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            position: relative;
        }

        .form-column {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--glitch-blue);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9em;
            font-weight: 600;
            position: relative;
        }

        .form-label::before {
            content: '▶';
            margin-right: 8px;
            color: var(--neon-red);
            font-size: 0.8em;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 2px solid var(--carbon-gray);
            border-left: 5px solid var(--toxic-purple);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: 1em;
            transition: all 0.3s;
            box-shadow: inset 0 0 15px rgba(0,0,0,0.5);
            border-radius: 6px;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--neon-red);
            border-left-color: var(--cyber-yellow);
            box-shadow: 
                inset 0 0 25px rgba(157,0,255,0.3),
                0 0 20px rgba(255,0,60,0.2);
            background: rgba(0,0,0,0.9);
        }

        .form-input.is-invalid {
            border-color: var(--neon-red) !important;
            border-left-color: var(--neon-red) !important;
            background: rgba(139, 0, 0, 0.2);
        }

        .form-input.is-valid {
            border-color: var(--hacker-green) !important;
            border-left-color: var(--hacker-green) !important;
            background: rgba(0, 100, 0, 0.2);
        }

        .form-input::placeholder {
            color: #666;
            font-style: italic;
        }

        .password-group {
            position: relative;
        }

        .password-strength {
            height: 4px;
            background: var(--carbon-gray);
            margin-top: 10px;
            border-radius: 2px;
            overflow: hidden;
            position: relative;
        }

        .strength-meter {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--blood-red), var(--cyber-yellow), var(--hacker-green));
            transition: width 0.3s;
        }

        .form-select {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 2px solid var(--carbon-gray);
            border-left: 5px solid var(--toxic-purple);
            color: white;
            font-family: 'Orbitron', monospace;
            font-size: 1em;
            transition: all 0.3s;
            cursor: pointer;
            appearance: none;
            background-image: url(\"data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23ff003c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e\");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 20px;
            border-radius: 6px;
        }

        .form-select:focus {
            outline: none;
            border-color: var(--neon-red);
            border-left-color: var(--cyber-yellow);
            box-shadow: 
                inset 0 0 25px rgba(157,0,255,0.3),
                0 0 20px rgba(255,0,60,0.2);
        }

        .form-select.is-invalid {
            border-color: var(--neon-red) !important;
            border-left-color: var(--neon-red) !important;
            background: rgba(139, 0, 0, 0.2);
        }

        .form-select.is-valid {
            border-color: var(--hacker-green) !important;
            border-left-color: var(--hacker-green) !important;
        }

        .checkbox-group {
            grid-column: 1 / -1;
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 20px 0;
        }

        .cyber-checkbox {
            display: none;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #ccc;
            font-size: 0.9em;
            position: relative;
        }

        .custom-checkbox {
            width: 25px;
            height: 25px;
            border: 2px solid var(--neon-red);
            margin-right: 15px;
            position: relative;
            transition: all 0.3s;
            background: rgba(0,0,0,0.5);
        }

        .custom-checkbox::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--hacker-green);
            opacity: 0;
            font-size: 1.2em;
            transition: opacity 0.3s;
        }

        .cyber-checkbox:checked + .custom-checkbox {
            border-color: var(--hacker-green);
            box-shadow: 0 0 15px rgba(0,255,0,0.5);
        }

        .cyber-checkbox:checked + .custom-checkbox::after {
            opacity: 1;
        }

        .submit-section {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 30px;
        }

        .enlist-button {
            padding: 20px 60px;
            background: linear-gradient(45deg, var(--toxic-purple), var(--neon-red));
            border: none;
            color: white;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.3em;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 3px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s;
            box-shadow: 
                0 10px 30px rgba(157,0,255,0.4),
                inset 0 0 20px rgba(255,255,255,0.1);
            border-radius: 6px;
        }

        .enlist-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: 0.6s;
        }

        .enlist-button:hover {
            background: linear-gradient(45deg, var(--neon-red), var(--cyber-yellow));
            transform: translateY(-5px);
            box-shadow: 
                0 15px 40px rgba(255,0,60,0.6),
                0 0 30px rgba(255,215,0,0.4),
                inset 0 0 20px rgba(255,255,255,0.2);
            letter-spacing: 4px;
        }

        .enlist-button:hover::before {
            left: 100%;
        }

        .enlist-button:active {
            transform: translateY(2px);
            box-shadow: 
                0 5px 20px rgba(255,0,60,0.4),
                inset 0 0 20px rgba(0,0,0,0.5);
        }

        .login-link {
            text-align: center;
            margin-top: 40px;
            color: #aaa;
        }

        .login-link a {
            color: var(--glitch-blue);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            position: relative;
            transition: all 0.3s;
        }

        .login-link a:hover {
            color: var(--cyber-yellow);
            text-shadow: 0 0 15px rgba(255,215,0,0.5);
        }

        .login-link a::after {
            content: '↗';
            margin-left: 8px;
            display: inline-block;
            transition: transform 0.3s;
        }

        .login-link a:hover::after {
            transform: translate(3px, -3px);
        }

        .invalid-feedback {
            color: var(--neon-red);
            font-size: 0.9em;
            margin-top: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding-left: 20px;
            display: block;
            text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
        }

        .valid-feedback {
            color: var(--hacker-green);
            font-size: 0.9em;
            margin-top: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding-left: 20px;
            display: block;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }

        .form-hint {
            color: var(--glitch-blue);
            font-size: 0.8em;
            margin-top: 5px;
            padding-left: 15px;
            font-style: italic;
            opacity: 0.8;
        }

        .form-hint::before {
            content: '💡';
            margin-right: 5px;
        }

        .hologram-effect {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(transparent 65%, rgba(0, 240, 255, 0.1) 75%, transparent 85%);
            pointer-events: none;
            animation: hologramScan 3s linear infinite;
            opacity: 0.3;
        }

        @keyframes hologramScan {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }

        .password-requirements {
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid var(--carbon-gray);
            border-radius: 6px;
            padding: 15px;
            margin-top: 10px;
            font-size: 0.85em;
        }

        .password-requirements ul {
            margin: 0;
            padding-left: 20px;
            color: #aaa;
        }

        .password-requirements li {
            margin-bottom: 5px;
            font-size: 0.9em;
        }

        .password-requirements li.valid {
            color: var(--hacker-green);
        }

        .password-requirements li.invalid {
            color: var(--neon-red);
        }

        .password-requirements li::before {
            content: '▢';
            margin-right: 8px;
        }

        .password-requirements li.valid::before {
            content: '✓';
            color: var(--hacker-green);
        }

        .password-requirements li.invalid::before {
            content: '✗';
            color: var(--neon-red);
        }

        .global-error {
            background: linear-gradient(90deg, rgba(139,0,0,0.1), rgba(255,0,60,0.1));
            border-left: 4px solid var(--blood-red);
            padding: 15px 20px;
            margin-bottom: 30px;
            animation: errorGlow 2s infinite alternate;
        }

        @keyframes errorGlow {
            0% { box-shadow: 0 0 10px rgba(255,0,60,0.2); }
            100% { box-shadow: 0 0 20px rgba(255,0,60,0.4); }
        }

        .global-error strong {
            color: var(--neon-red);
            display: block;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .alert-danger {
            background: rgba(139,0,0,0.2);
            border-left: 4px solid var(--blood-red);
            padding: 15px;
            margin-bottom: 30px;
            color: var(--neon-red);
        }

        .alert-danger strong {
            color: var(--neon-red);
            display: block;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .cyber-form {
                grid-template-columns: 1fr;
            }
            
            .enlistment-container {
                padding: 30px 20px;
            }
            
            .enlistment-title {
                font-size: 2.5em;
                letter-spacing: 3px;
            }
            
            .protocol-steps {
                flex-wrap: wrap;
                gap: 20px;
            }
            
            .enlist-button {
                padding: 15px 40px;
                font-size: 1.1em;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <section class=\"enlistment-section\">
        <div class=\"hologram-effect\"></div>
        
        <div class=\"enlistment-container\">
            <div class=\"enlistment-header\">
                <h1 class=\"enlistment-title\">ENLISTMENT PROTOCOL</h1>
                <p class=\"enlistment-subtitle\">JOIN THE ELITE FORCES OF ARENA-X</p>
                
                <div class=\"protocol-steps\">
                    <div class=\"step\">
                        <div class=\"step-number\">1</div>
                        <div class=\"step-label\">IDENTITY</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-number\">2</div>
                        <div class=\"step-label\">CREDENTIALS</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-number\">3</div>
                        <div class=\"step-label\">VERIFICATION</div>
                    </div>
                    <div class=\"step\">
                        <div class=\"step-number\">4</div>
                        <div class=\"step-label\">DEPLOYMENT</div>
                    </div>
                </div>
            </div>
            
            {% for message in app.flashes('error') %}
                <div style=\"background: rgba(139,0,0,0.2); border-left: 4px solid var(--blood-red); padding: 15px; margin-bottom: 30px;\">
                    <strong style=\"color: var(--neon-red);\">⚠ ALERT:</strong> {{ message }}
                </div>
            {% endfor %}
            
           {% if registrationForm.vars.errors|length %}
    <div class=\"alert alert-danger\">
        <strong>⚠ ENLISTMENT PROTOCOL VIOLATION</strong>
        {{ form_errors(registrationForm) }}
    </div>
{% endif %}
            
            {{ form_start(registrationForm, {'attr': {'class': 'cyber-form', 'novalidate': 'novalidate'}}) }}
                <div class=\"form-column\">
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.email, 'COMBAT EMAIL', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.email, {
                            'attr': {
                                'class': 'form-input' ~ (registrationForm.email.vars.valid ? ' is-valid' : '') ~ (registrationForm.email.vars.errors|length ? ' is-invalid' : ''),
                                'placeholder': 'warrior@arena-x.io',
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.email) }}
                        {% if not registrationForm.email.vars.errors|length and registrationForm.email.vars.value %}
                            <div class=\"valid-feedback\">✓ Valid email format</div>
                        {% endif %}
                        <div class=\"form-hint\">Format: warrior@arena-x.io</div>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.username, 'CALL SIGN', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.username, {
                            'attr': {
                                'class': 'form-input' ~ (registrationForm.username.vars.valid ? ' is-valid' : '') ~ (registrationForm.username.vars.errors|length ? ' is-invalid' : ''),
                                'placeholder': 'Enter your warrior name',
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.username) }}
                        {% if not registrationForm.username.vars.errors|length and registrationForm.username.vars.value %}
                            <div class=\"valid-feedback\">✓ Valid username</div>
                        {% endif %}
                        <div class=\"form-hint\">3-50 caractères, lettres, chiffres, tirets et underscores uniquement</div>
                    </div>
                    
                    <div class=\"form-group\">
                        <div class=\"password-group\">
                            {{ form_label(registrationForm.plainPassword.first, 'ACCESS CODE', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.plainPassword.first, {
                                'attr': {
                                    'class': 'form-input' ~ (registrationForm.plainPassword.first.vars.valid ? ' is-valid' : '') ~ (registrationForm.plainPassword.first.vars.errors|length ? ' is-invalid' : ''),
                                    'placeholder': 'Minimum 8 characters',
                                    'required': 'required',
                                    'oninput': 'checkPasswordStrength(this.value)',
                                    'autocomplete': 'new-password'
                                }
                            }) }}
                            {{ form_errors(registrationForm.plainPassword.first) }}
                            {% if not registrationForm.plainPassword.first.vars.errors|length and registrationForm.plainPassword.first.vars.value %}
                                <div class=\"valid-feedback\">✓ Password meets requirements</div>
                            {% endif %}
                            
                            <div class=\"password-strength\">
                                <div class=\"strength-meter\" id=\"passwordStrength\"></div>
                            </div>
                            
                            <div id=\"passwordRequirements\" class=\"password-requirements\" style=\"display: none;\">
                                <strong>EXIGENCES DU CODE D'ACCÈS:</strong>
                                <ul>
                                    <li id=\"reqLength\">Minimum 8 caractères</li>
                                    <li id=\"reqUppercase\">Au moins une majuscule</li>
                                    <li id=\"reqLowercase\">Au moins une minuscule</li>
                                    <li id=\"reqNumber\">Au moins un chiffre</li>
                                    <li id=\"reqSpecial\">Au moins un caractère spécial (@\$!%*?&)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.plainPassword.second, 'CONFIRM CODE', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.plainPassword.second, {
                            'attr': {
                                'class': 'form-input' ~ (registrationForm.plainPassword.second.vars.valid ? ' is-valid' : '') ~ (registrationForm.plainPassword.second.vars.errors|length ? ' is-invalid' : ''),
                                'placeholder': 'Repeat access code',
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.plainPassword.second) }}
                        {% if not registrationForm.plainPassword.second.vars.errors|length and registrationForm.plainPassword.second.vars.value %}
                            <div class=\"valid-feedback\">✓ Passwords match</div>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"form-column\">
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.fullName, 'FULL DESIGNATION', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.fullName, {
                            'attr': {
                                'class': 'form-input' ~ (registrationForm.fullName.vars.valid ? ' is-valid' : '') ~ (registrationForm.fullName.vars.errors|length ? ' is-invalid' : ''),
                                'placeholder': 'John \"Reaper\" Smith',
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.fullName) }}
                        {% if not registrationForm.fullName.vars.errors|length and registrationForm.fullName.vars.value %}
                            <div class=\"valid-feedback\">✓ Valid name format</div>
                        {% endif %}
                        <div class=\"form-hint\">2-100 caractères, lettres, espaces, tirets et apostrophes uniquement</div>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.country, 'OPERATION ZONE', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.country, {
                            'attr': {
                                'class': 'form-input' ~ (registrationForm.country.vars.valid ? ' is-valid' : '') ~ (registrationForm.country.vars.errors|length ? ' is-invalid' : ''),
                                'placeholder': 'Country of origin',
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.country) }}
                        {% if not registrationForm.country.vars.errors|length and registrationForm.country.vars.value %}
                            <div class=\"valid-feedback\">✓ Valid country name</div>
                        {% endif %}
                        <div class=\"form-hint\">Lettres, espaces et tirets uniquement</div>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.birthDate, 'ACTIVATION DATE', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.birthDate, {
                            'attr': {
                                'class': 'form-input' ~ (registrationForm.birthDate.vars.valid ? ' is-valid' : '') ~ (registrationForm.birthDate.vars.errors|length ? ' is-invalid' : ''),
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.birthDate) }}
                        {% if not registrationForm.birthDate.vars.errors|length and registrationForm.birthDate.vars.value %}
                            <div class=\"valid-feedback\">✓ Valid birth date</div>
                        {% endif %}
                        <div class=\"form-hint\">L'utilisateur doit avoir au moins 13 ans</div>
                    </div>
                    
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.role, 'COMBAT ROLE', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(registrationForm.role, {
                            'attr': {
                                'class': 'form-select' ~ (registrationForm.role.vars.valid ? ' is-valid' : '') ~ (registrationForm.role.vars.errors|length ? ' is-invalid' : ''),
                                'required': 'required'
                            }
                        }) }}
                        {{ form_errors(registrationForm.role) }}
                        {% if not registrationForm.role.vars.errors|length and registrationForm.role.vars.value %}
                            <div class=\"valid-feedback\">✓ Role selected</div>
                        {% endif %}
                        <div class=\"form-hint\">Choix: user, admin, moderator, editor</div>
                    </div>
                </div>
                
                <div class=\"checkbox-group\">
                    <input type=\"checkbox\" id=\"terms\" class=\"cyber-checkbox\" required>
                    <label for=\"terms\" class=\"checkbox-label\">
                        <span class=\"custom-checkbox\"></span>
                        <span>I ACCEPT THE ARENA-X COMBAT PROTOCOL AND DATA PROCESSING TERMS</span>
                    </label>
                </div>
                
                <div class=\"submit-section\">
                    <button type=\"submit\" class=\"enlist-button\">
                        <span>INITIATE ENLISTMENT</span>
                    </button>
                </div>
            {{ form_end(registrationForm) }}
            
            <div class=\"login-link\">
                <p>ALREADY ENLISTED? <a href=\"{{ path('app_login') }}\">PROCEED TO LOGIN</a></p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Custom form styling
            const formGroups = document.querySelectorAll('.form-group');
            formGroups.forEach(group => {
                const label = group.querySelector('label');
                const input = group.querySelector('input, select, textarea');
                
                if(label && input) {
                    // Add focus effects
                    input.addEventListener('focus', function() {
                        this.parentElement.style.transform = 'translateX(10px)';
                        setTimeout(() => {
                            this.parentElement.style.transform = 'translateX(0)';
                        }, 300);
                    });
                    
                    // Real-time validation
                    input.addEventListener('blur', function() {
                        validateField(this);
                    });
                    
                    input.addEventListener('input', function() {
                        // Remove error class on input
                        this.classList.remove('is-invalid');
                        this.classList.add('is-valid');
                        const errorElement = this.parentElement.querySelector('.invalid-feedback');
                        const validElement = this.parentElement.querySelector('.valid-feedback');
                        
                        if(errorElement) {
                            errorElement.style.display = 'none';
                        }
                        
                        if(validElement && this.value.trim() !== '') {
                            validElement.style.display = 'block';
                        } else if(validElement) {
                            validElement.style.display = 'none';
                        }
                        
                        // Special handling for password field
                        if(this.type === 'password' && this.id.includes('first')) {
                            checkPasswordStrength(this.value);
                        }
                    });
                }
            });
            
            function validateField(field) {
                if(field.value.trim() === '' && field.hasAttribute('required')) {
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    return false;
                }
                
                // Basic email validation
                if(field.type === 'email') {
                    const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
                    if(!emailRegex.test(field.value)) {
                        field.classList.add('is-invalid');
                        field.classList.remove('is-valid');
                        return false;
                    }
                }
                
                // Basic validation passed
                if(field.value.trim() !== '') {
                    field.classList.add('is-valid');
                    field.classList.remove('is-invalid');
                }
                
                return true;
            }
            
            // Enhanced password strength checker
            window.checkPasswordStrength = function(password) {
                const meter = document.getElementById('passwordStrength');
                const requirements = document.getElementById('passwordRequirements');
                const reqs = {
                    length: document.getElementById('reqLength'),
                    uppercase: document.getElementById('reqUppercase'),
                    lowercase: document.getElementById('reqLowercase'),
                    number: document.getElementById('reqNumber'),
                    special: document.getElementById('reqSpecial')
                };
                
                if(!password) {
                    meter.style.width = '0%';
                    requirements.style.display = 'none';
                    Object.values(reqs).forEach(req => {
                        req.classList.remove('valid', 'invalid');
                    });
                    return;
                }
                
                // Show requirements
                requirements.style.display = 'block';
                
                // Check individual requirements
                let strength = 0;
                const checks = {
                    length: password.length >= 8,
                    uppercase: /[A-Z]/.test(password),
                    lowercase: /[a-z]/.test(password),
                    number: /[0-9]/.test(password),
                    special: /[^A-Za-z0-9]/.test(password)
                };
                
                // Update requirement indicators
                Object.keys(checks).forEach(key => {
                    if(checks[key]) {
                        reqs[key].classList.add('valid');
                        reqs[key].classList.remove('invalid');
                        strength += 20; // Each requirement adds 20%
                    } else {
                        reqs[key].classList.add('invalid');
                        reqs[key].classList.remove('valid');
                    }
                });
                
                // Additional points for length
                if(password.length >= 12) strength += 10;
                if(password.length >= 16) strength += 10;
                
                meter.style.width = Math.min(strength, 100) + '%';
                
                // Color based on strength
                if(strength < 50) {
                    meter.style.background = 'linear-gradient(90deg, var(--blood-red), var(--neon-red))';
                } else if(strength < 80) {
                    meter.style.background = 'linear-gradient(90deg, var(--neon-red), var(--cyber-yellow))';
                } else {
                    meter.style.background = 'linear-gradient(90deg, var(--cyber-yellow), var(--hacker-green))';
                }
            };
            
            // Form submission animation
            const form = document.querySelector('.cyber-form');
            form.addEventListener('submit', function(e) {
                // Check terms checkbox
                const termsCheckbox = document.getElementById('terms');
                if(!termsCheckbox.checked) {
                    e.preventDefault();
                    alert('You must accept the Arena-X Combat Protocol to proceed.');
                    termsCheckbox.parentElement.style.animation = 'errorPulse 0.5s ease-in-out';
                    setTimeout(() => {
                        termsCheckbox.parentElement.style.animation = '';
                    }, 500);
                    return;
                }
                
                const button = this.querySelector('.enlist-button');
                button.innerHTML = '<span>PROCESSING ENLISTMENT...</span>';
                button.style.background = 'linear-gradient(45deg, var(--cyber-yellow), var(--hacker-green))';
                button.disabled = true;
                
                // Add loading animation
                button.style.position = 'relative';
                button.style.overflow = 'hidden';
                
                const loadingBar = document.createElement('div');
                loadingBar.style.position = 'absolute';
                loadingBar.style.bottom = '0';
                loadingBar.style.left = '0';
                loadingBar.style.width = '0%';
                loadingBar.style.height = '4px';
                loadingBar.style.background = 'linear-gradient(90deg, var(--toxic-purple), var(--neon-red))';
                loadingBar.style.transition = 'width 2s';
                button.appendChild(loadingBar);
                
                setTimeout(() => {
                    loadingBar.style.width = '100%';
                }, 100);
            });
            
            // Validate all fields on page load if they have values
            const inputs = document.querySelectorAll('.form-input, .form-select');
            inputs.forEach(input => {
                if(input.value) {
                    validateField(input);
                    input.classList.add('is-valid');
                }
            });
            
            // Terms checkbox styling
            const termsCheckbox = document.getElementById('terms');
            termsCheckbox.addEventListener('change', function() {
                const customCheckbox = this.nextElementSibling;
                if(this.checked) {
                    customCheckbox.style.borderColor = 'var(--hacker-green)';
                    customCheckbox.style.boxShadow = '0 0 15px rgba(0,255,0,0.5)';
                } else {
                    customCheckbox.style.borderColor = 'var(--neon-red)';
                    customCheckbox.style.boxShadow = 'none';
                }
            });
        });
    </script>
{% endblock %}", "registration/register.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\registration\\register.html.twig");
    }
}
