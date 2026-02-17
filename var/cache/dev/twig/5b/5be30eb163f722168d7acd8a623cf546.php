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

/* front/matchy/new.html.twig */
class __TwigTemplate_ef06e517b09b6354cdca3f4dc5d9e6f4 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/new.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "🎮 ARENA - Nouveau Match";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --neon-blue: #00f3ff;
        --neon-purple: #9d00ff;
        --neon-red: #ff003c;
        --neon-green: #00ff88;
        --neon-yellow: #ffcc00;
        --dark-bg: #0a0a14;
        --location-glow: rgba(255, 204, 0, 0.5);
    }
    
    body {
        background: linear-gradient(135deg, #0a0a14 0%, #1a1a2e 50%, #16213e 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
    }
    
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(157, 0, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(0, 243, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(255, 0, 60, 0.1) 0%, transparent 50%);
        z-index: -1;
    }
    
    .creation-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
        max-width: 900px;
        margin: 0 auto;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .header-glow {
        position: relative;
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem;
        background: rgba(10, 10, 20, 0.7);
        border-radius: 20px;
        border: 2px solid var(--neon-blue);
        box-shadow: 
            0 0 30px rgba(0, 243, 255, 0.3),
            inset 0 0 20px rgba(0, 243, 255, 0.1);
    }
    
    .header-glow::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red),
            var(--neon-green));
        border-radius: 22px;
        z-index: -1;
        filter: blur(10px);
        animation: borderGlow 4s linear infinite;
        background-size: 400% 400%;
    }
    
    @keyframes borderGlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .main-title {
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2.8rem;
        background: linear-gradient(to right, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.5);
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        animation: textGlow 2s ease-in-out infinite alternate;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(0, 243, 255, 0.5); }
        to { text-shadow: 0 0 30px rgba(157, 0, 255, 0.7), 
                         0 0 40px rgba(157, 0, 255, 0.4); }
    }
    
    .form-card {
        background: rgba(20, 20, 35, 0.8);
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 243, 255, 0.2);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        margin-bottom: 2rem;
    }
    
    .form-card:hover {
        border-color: var(--neon-blue);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.9),
            0 0 50px rgba(0, 243, 255, 0.4);
    }
    
    .form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        background-size: 200% 100%;
        animation: slide 2.5s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .form-group {
        margin-bottom: 2rem;
        position: relative;
    }
    
    .form-label {
        display: block;
        color: var(--neon-green);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(0, 255, 136, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
    }
    
    .form-input:focus {
        outline: none;
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }
    
    .form-select {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        cursor: pointer;
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2300f3ff' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1rem;
    }
    
    .form-select:focus {
        outline: none;
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background-color: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 2rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .vs-container {
        text-align: center;
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        padding: 1rem;
    }
    
    .team-select-container {
        background: rgba(0, 0, 0, 0.4);
        border-radius: 12px;
        padding: 1.5rem;
        border: 2px solid var(--neon-purple);
        transition: all 0.3s ease;
    }
    
    .team-select-container:hover {
        border-color: var(--neon-blue);
        box-shadow: 0 0 20px rgba(0, 243, 255, 0.2);
    }
    
    .team-select-label {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 1rem;
        text-align: center;
        display: block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .score-inputs {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 1.5rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .score-input {
        width: 100%;
        padding: 1.2rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-green);
        border-radius: 12px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .score-input:focus {
        outline: none;
        border-color: var(--neon-blue);
        box-shadow: 0 0 25px rgba(0, 243, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .score-separator {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.8rem;
        text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
    }
    
    /* NOUVEAU STYLE POUR LA SECTION LOCALISATION */
    .location-section {
        background: rgba(255, 204, 0, 0.05);
        border: 2px solid var(--neon-yellow);
        border-radius: 15px;
        padding: 1.5rem;
        margin: 2rem 0;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .location-section:hover {
        border-color: var(--neon-green);
        box-shadow: 0 0 30px var(--location-glow);
    }
    
    .location-section::before {
        content: '📍';
        position: absolute;
        top: -15px;
        left: 20px;
        background: var(--dark-bg);
        padding: 0 10px;
        font-size: 1.5rem;
        color: var(--neon-yellow);
    }
    
    .location-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-top: 1rem;
    }
    
    .location-input {
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-yellow);
        border-radius: 12px;
        padding: 1.2rem;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        width: 100%;
        transition: all 0.3s ease;
    }
    
    .location-input:focus {
        outline: none;
        border-color: var(--neon-green);
        box-shadow: 0 0 20px var(--location-glow);
        transform: translateY(-2px);
    }
    
    .location-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
        font-style: italic;
    }
    
    .coordinate-help {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 8px;
        font-size: 0.9rem;
        color: #a0a0c0;
    }
    
    .coordinate-help button {
        background: linear-gradient(45deg, var(--neon-yellow), #ffaa00);
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        color: black;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 15px var(--location-glow);
    }
    
    .coordinate-help button:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 25px var(--neon-green);
    }
    
    .coordinate-help small {
        opacity: 0.7;
        display: block;
        margin-top: 0.3rem;
    }
    
    .form-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(0, 243, 255, 0.3);
    }
    
    .submit-btn {
        position: relative;
        background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.6);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: pointer;
        min-width: 250px;
    }
    
    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: 0.6s;
        z-index: -1;
    }
    
    .submit-btn:hover::before {
        left: 100%;
    }
    
    .submit-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 50px rgba(255, 0, 60, 0.9);
        background: linear-gradient(45deg, var(--neon-purple), var(--neon-red));
    }
    
    .back-btn {
        position: relative;
        background: linear-gradient(45deg, #333344, #444455);
        border: 2px solid var(--neon-blue);
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: pointer;
        min-width: 250px;
    }
    
    .back-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.6s;
        z-index: -1;
    }
    
    .back-btn:hover::before {
        left: 100%;
    }
    
    .back-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(0, 243, 255, 0.5);
        background: linear-gradient(45deg, #444455, #333344);
        border-color: var(--neon-purple);
    }
    
    .input-icon {
        position: absolute;
        right: 1.5rem;
        top: 3.8rem;
        color: var(--neon-blue);
        font-size: 1.3rem;
        pointer-events: none;
    }
    
    .floating-elements {
        position: fixed;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }
    
    .floating-element {
        position: absolute;
        opacity: 0.1;
        font-size: 2rem;
        animation: float 20s infinite linear;
    }
    
    @keyframes float {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 0.1;
        }
        90% {
            opacity: 0.1;
        }
        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 0;
        }
    }
    
    .game-suggestions {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .game-option {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid #333344;
        border-radius: 10px;
        padding: 1.2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: #a0a0c0;
    }
    
    .game-option:hover {
        border-color: var(--neon-blue);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 243, 255, 0.2);
    }
    
    .game-option.selected {
        border-color: var(--neon-green);
        background: rgba(0, 255, 136, 0.1);
        color: var(--neon-green);
        box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
        transform: translateY(-3px);
    }
    
    .game-option-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    /* Styles pour les erreurs de validation */
    .form-error {
        color: var(--neon-red);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 8px;
        border-left: 3px solid var(--neon-red);
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    /* Style pour les champs avec erreur */
    .form-input.error,
    .form-select.error,
    .score-input.error,
    .location-input.error {
        border-color: var(--neon-red) !important;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.3) !important;
        background: rgba(255, 0, 60, 0.05) !important;
    }
    
    /* Style pour les messages d'erreur globaux */
    .form-global-error {
        background: rgba(255, 0, 60, 0.1);
        border: 2px solid var(--neon-red);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--neon-green);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
    }
    
    .form-global-error ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    
    .form-global-error li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }
    
    .form-global-error li::before {
        content: '❌';
        position: absolute;
        left: 0;
        top: 0;
    }
    
    @media (max-width: 768px) {
        .creation-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .form-card {
            padding: 1.5rem;
        }
        
        .teams-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .vs-container {
            order: 2;
            padding: 0;
        }
        
        .score-inputs {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .score-separator {
            order: 2;
        }
        
        .location-grid {
            grid-template-columns: 1fr;
        }
        
        .coordinate-help {
            flex-direction: column;
            text-align: center;
        }
        
        .form-actions {
            flex-direction: column;
            gap: 1rem;
        }
        
        .submit-btn, .back-btn {
            min-width: 100%;
            font-size: 1.1rem;
            padding: 1rem 2rem;
        }
        
        .game-suggestions {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 717
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

        // line 718
        yield "<div class=\"creation-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 722
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐", "📍", "🗺️"];
        // line 723
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 724
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 724, $this->source); })())));
            // line 725
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 726
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 727
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 728
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 729
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 729, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 730
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 730, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 731
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 731, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 733
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 733, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 733, $this->source); })()), [], "array", false, false, false, 733), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PROGRAMMER UN COMBAT</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            CRÉEZ UN NOUVEAU MATCH POUR L'ARÈNE E-SPORT
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        ";
        // line 748
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 748, $this->source); })()), 'form_start');
        yield "
        
        ";
        // line 751
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 751, $this->source); })()), "vars", [], "any", false, false, false, 751), "errors", [], "any", false, false, false, 751)) > 0)) {
            // line 752
            yield "        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            ";
            // line 754
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 754, $this->source); })()), 'errors');
            yield "
        </div>
        ";
        }
        // line 757
        yield "        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            ";
        // line 762
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 762, $this->source); })()), "game", [], "any", false, false, false, 762), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN JEU"]]);
        // line 767
        yield "
            <div class=\"input-icon\">🕹️</div>
            
            ";
        // line 771
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 771, $this->source); })()), "game", [], "any", false, false, false, 771), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            
            <!-- Suggestions de jeux populaires -->
            <div class=\"game-suggestions\" id=\"gameSuggestions\">
                <div class=\"game-option\" data-game=\"VALORANT\">
                    <span class=\"game-option-icon\">🔫</span>
                    VALORANT
                </div>
                <div class=\"game-option\" data-game=\"LEAGUE OF LEGENDS\">
                    <span class=\"game-option-icon\">⚔️</span>
                    LEAGUE OF LEGENDS
                </div>
                <div class=\"game-option\" data-game=\"COUNTER-STRIKE 2\">
                    <span class=\"game-option-icon\">🎯</span>
                    COUNTER-STRIKE 2
                </div>
                <div class=\"game-option\" data-game=\"DOTA 2\">
                    <span class=\"game-option-icon\">🛡️</span>
                    DOTA 2
                </div>
                <div class=\"game-option\" data-game=\"OVERWATCH 2\">
                    <span class=\"game-option-icon\">✨</span>
                    OVERWATCH 2
                </div>
                <div class=\"game-option\" data-game=\"RAINBOW SIX SIEGE\">
                    <span class=\"game-option-icon\">🔍</span>
                    RAINBOW SIX SIEGE
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📅 DATE DU MATCH</span>
            </label>
            ";
        // line 806
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 806, $this->source); })()), "match_date", [], "any", false, false, false, 806), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "JJ/MM/AAAA HH:MM"]]);
        // line 811
        yield "
            <div class=\"input-icon\">📅</div>
            
            ";
        // line 815
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 815, $this->source); })()), "match_date", [], "any", false, false, false, 815), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <!-- Sélection des équipes -->
        <div class=\"teams-grid\">
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 1</label>
                ";
        // line 822
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 822, $this->source); })()), "team1", [], "any", false, false, false, 822), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 826
        yield "
                
                ";
        // line 829
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()), "team1", [], "any", false, false, false, 829), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                ";
        // line 836
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 836, $this->source); })()), "team2", [], "any", false, false, false, 836), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 840
        yield "
                
                ";
        // line 843
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 843, $this->source); })()), "team2", [], "any", false, false, false, 843), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                ";
        // line 850
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 850, $this->source); })()), "score_team1", [], "any", false, false, false, 850), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0"]]);
        // line 855
        yield "
                ";
        // line 857
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 857, $this->source); })()), "score_team1", [], "any", false, false, false, 857), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                ";
        // line 863
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 863, $this->source); })()), "score_team2", [], "any", false, false, false, 863), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0"]]);
        // line 868
        yield "
                ";
        // line 870
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "score_team2", [], "any", false, false, false, 870), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📊 STATUT DU MATCH</span>
            </label>
            ";
        // line 878
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 878, $this->source); })()), "status", [], "any", false, false, false, 878), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 882
        yield "
            <div class=\"input-icon\">📈</div>
            
            ";
        // line 886
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 886, $this->source); })()), "status", [], "any", false, false, false, 886), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🏆 GAGNANT (FACULTATIF)</span>
            </label>
            ";
        // line 893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 893, $this->source); })()), "winner_team", [], "any", false, false, false, 893), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN GAGNANT"]]);
        // line 898
        yield "
            <div class=\"input-icon\">👑</div>
            
            ";
        // line 902
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 902, $this->source); })()), "winner_team", [], "any", false, false, false, 902), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <!-- NOUVELLE SECTION LOCALISATION -->
        <div class=\"location-section\">
            <label class=\"form-label\" style=\"margin-bottom: 1.5rem;\">
                <span>📍 LOCALISATION DE L'ARÈNE</span>
            </label>
            
            <div class=\"form-group\">
                <label style=\"color: var(--neon-yellow); font-size: 1rem; margin-bottom: 0.5rem; display: block;\">
                    Adresse / Lieu du match
                </label>
                ";
        // line 915
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 915, $this->source); })()), "location", [], "any", false, false, false, 915), 'widget', ["attr" => ["class" => "location-input", "placeholder" => "Ex: Accor Arena, Paris • 8 Boulevard de Bercy, 75012 Paris"]]);
        // line 920
        yield "
                ";
        // line 921
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 921, $this->source); })()), "location", [], "any", false, false, false, 921), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"location-grid\">
                <div>
                    <label style=\"color: var(--neon-yellow); font-size: 0.9rem; margin-bottom: 0.5rem; display: block;\">
                        Latitude
                    </label>
                    ";
        // line 929
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 929, $this->source); })()), "latitude", [], "any", false, false, false, 929), 'widget', ["attr" => ["class" => "location-input", "placeholder" => "Ex: 48.8381", "step" => "any"]]);
        // line 935
        yield "
                    ";
        // line 936
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 936, $this->source); })()), "latitude", [], "any", false, false, false, 936), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
                
                <div>
                    <label style=\"color: var(--neon-yellow); font-size: 0.9rem; margin-bottom: 0.5rem; display: block;\">
                        Longitude
                    </label>
                    ";
        // line 943
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 943, $this->source); })()), "longitude", [], "any", false, false, false, 943), 'widget', ["attr" => ["class" => "location-input", "placeholder" => "Ex: 2.3785", "step" => "any"]]);
        // line 949
        yield "
                    ";
        // line 950
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 950, $this->source); })()), "longitude", [], "any", false, false, false, 950), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
                </div>
            </div>
            
            <div class=\"coordinate-help\">
                <div style=\"flex: 1;\">
                    <span style=\"color: var(--neon-yellow);\">💡 Comment obtenir les coordonnées ?</span>
                    <small>Rendez-vous sur Google Maps, cliquez droit sur l'emplacement exact, et sélectionnez \"Quoi de neuf ?\" pour voir les coordonnées.</small>
                </div>
                <button type=\"button\" id=\"fillParisCoords\" class=\"btn-help\">
                    🇫🇷 TEST (Paris)
                </button>
                <button type=\"button\" id=\"fillLyonCoords\" class=\"btn-help\">
                    🇫🇷 TEST (Lyon)
                </button>
            </div>
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                ⚡ CRÉER LE MATCH
            </button>
            <a href=\"";
        // line 972
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        ";
        // line 977
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 977, $this->source); })()), 'form_end');
        yield "
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: #a0a0c0; font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEIL :</strong> Assurez-vous que les deux équipes sont différentes et que les scores sont corrects !</p>
        <p style=\"margin-top: 0.5rem;\">📍 <strong>LOCALISATION :</strong> Plus vous êtes précis, mieux le match sera positionné sur la carte !</p>
    </div>
</div>

<script>
    // Gestion des suggestions de jeux
    const gameOptions = document.querySelectorAll('.game-option');
    const gameSelect = document.querySelector('select[name*=\"game\"]');
    
    gameOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Retirer la sélection précédente
            gameOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Sélectionner cette option
            this.classList.add('selected');
            
            // Mettre à jour le select
            if (gameSelect) {
                const gameValue = this.getAttribute('data-game');
                gameSelect.value = gameValue;
                
                // Déclencher l'événement change
                gameSelect.dispatchEvent(new Event('change'));
            }
        });
    });
    
    // Pré-sélectionner l'option si elle correspond au select
    if (gameSelect && gameSelect.value) {
        gameOptions.forEach(option => {
            if (option.getAttribute('data-game') === gameSelect.value.toUpperCase()) {
                option.classList.add('selected');
            }
        });
    }
    
    // Mise à jour automatique des scores basée sur le gagnant
    const team1Select = document.querySelector('select[name*=\"team1\"]');
    const team2Select = document.querySelector('select[name*=\"team2\"]');
    const winnerSelect = document.querySelector('select[name*=\"winner_team\"]');
    const scoreTeam1Input = document.querySelector('input[name*=\"score_team1\"]');
    const scoreTeam2Input = document.querySelector('input[name*=\"score_team2\"]');
    
    if (winnerSelect && scoreTeam1Input && scoreTeam2Input) {
        winnerSelect.addEventListener('change', function() {
            const winnerId = this.value;
            const team1Id = team1Select ? team1Select.value : null;
            const team2Id = team2Select ? team2Select.value : null;
            
            if (winnerId && team1Id && team2Id) {
                if (winnerId === team1Id) {
                    // Équipe 1 gagnante
                    scoreTeam1Input.value = '3';
                    scoreTeam2Input.value = '0';
                } else if (winnerId === team2Id) {
                    // Équipe 2 gagnante
                    scoreTeam1Input.value = '0';
                    scoreTeam2Input.value = '3';
                }
            }
        });
    }
    
    // NOUVEAU: Remplissage automatique des coordonnées pour les tests
    document.getElementById('fillParisCoords')?.addEventListener('click', function() {
        const locationInput = document.querySelector('input[name*=\"location\"]');
        const latInput = document.querySelector('input[name*=\"latitude\"]');
        const lngInput = document.querySelector('input[name*=\"longitude\"]');
        
        if (locationInput) locationInput.value = 'Accor Arena, 8 Boulevard de Bercy, 75012 Paris';
        if (latInput) latInput.value = '48.8381';
        if (lngInput) lngInput.value = '2.3785';
        
        // Animation de confirmation
        this.style.background = 'linear-gradient(45deg, var(--neon-green), #00cc66)';
        this.textContent = '✓ COPIÉ !';
        setTimeout(() => {
            this.style.background = 'linear-gradient(45deg, var(--neon-yellow), #ffaa00)';
            this.textContent = '🇫🇷 TEST (Paris)';
        }, 2000);
    });
    
    document.getElementById('fillLyonCoords')?.addEventListener('click', function() {
        const locationInput = document.querySelector('input[name*=\"location\"]');
        const latInput = document.querySelector('input[name*=\"latitude\"]');
        const lngInput = document.querySelector('input[name*=\"longitude\"]');
        
        if (locationInput) locationInput.value = 'Groupama Stadium, 10 Avenue Simone Veil, 69150 Décines-Charpieu';
        if (latInput) latInput.value = '45.7653';
        if (lngInput) lngInput.value = '4.9808';
        
        // Animation de confirmation
        this.style.background = 'linear-gradient(45deg, var(--neon-green), #00cc66)';
        this.textContent = '✓ COPIÉ !';
        setTimeout(() => {
            this.style.background = 'linear-gradient(45deg, var(--neon-yellow), #ffaa00)';
            this.textContent = '🇫🇷 TEST (Lyon)';
        }, 2000);
    });
    
    // Validation des équipes différentes
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const team1Value = team1Select ? team1Select.value : null;
            const team2Value = team2Select ? team2Select.value : null;
            
            if (team1Value && team2Value && team1Value === team2Value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
                return false;
            }
            
            // Validation des coordonnées (optionnel)
            const latInput = document.querySelector('input[name*=\"latitude\"]');
            const lngInput = document.querySelector('input[name*=\"longitude\"]');
            const locationInput = document.querySelector('input[name*=\"location\"]');
            
            if (locationInput && locationInput.value.trim() !== '') {
                if (!latInput.value || !lngInput.value) {
                    if (!confirm('⚠️ Vous avez spécifié une adresse mais pas les coordonnées. Le match n\\'apparaîtra pas sur la carte. Continuer ?')) {
                        e.preventDefault();
                        return false;
                    }
                }
            }
            
            // Animation du bouton de soumission
            const submitBtn = this.querySelector('.submit-btn');
            if (submitBtn) {
                submitBtn.innerHTML = '⚡ CRÉATION EN COURS...';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.8';
                
                // Petite animation avant la soumission réelle
                setTimeout(() => {
                    submitBtn.innerHTML = '⚡ MATCH CRÉÉ !';
                    submitBtn.style.background = 'linear-gradient(45deg, var(--neon-green), var(--neon-blue))';
                }, 100);
            }
        });
    }
    
    // Date picker amélioré
    const dateInput = document.querySelector('input[name*=\"match_date\"]');
    if (dateInput && dateInput.type === 'text') {
        dateInput.addEventListener('focus', function() {
            // Changer le type en datetime-local pour les navigateurs modernes
            if (this.type === 'text') {
                this.type = 'datetime-local';
            }
        });
        
        // Formatage de la date
        dateInput.addEventListener('blur', function() {
            if (this.value) {
                const date = new Date(this.value);
                if (!isNaN(date.getTime())) {
                    const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                    date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                    this.value = formatted;
                }
            }
        });
    }
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.creation-container').style.opacity = '1';
        }, 100);
        
        // Animation des inputs au focus
        const formInputs = document.querySelectorAll('.form-input, .form-select, .score-input, .location-input');
        
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
        
        // Mettre en évidence les champs avec erreurs
        const errorElements = document.querySelectorAll('.form-error');
        
        errorElements.forEach(errorElement => {
            // Trouver le champ correspondant
            const formGroup = errorElement.closest('.form-group') || 
                            errorElement.closest('.team-select-container') ||
                            errorElement.closest('.location-section') ||
                            errorElement.closest('div');
            
            if (formGroup) {
                const inputElement = formGroup.querySelector('.form-input, .form-select, .score-input, .location-input');
                if (inputElement && errorElement.textContent.trim() !== '') {
                    inputElement.classList.add('error');
                    
                    // Ajouter un écouteur pour retirer la classe d'erreur
                    inputElement.addEventListener('input', function() {
                        if (errorElement.textContent.trim() !== '') {
                            errorElement.textContent = '';
                            errorElement.style.display = 'none';
                            this.classList.remove('error');
                        }
                    });
                }
            }
        });
        
        // Pour les erreurs globales, cacher après 10 secondes
        const globalError = document.querySelector('.form-global-error');
        if (globalError) {
            setTimeout(() => {
                globalError.style.opacity = '0';
                globalError.style.transition = 'opacity 1s';
                setTimeout(() => globalError.style.display = 'none', 1000);
            }, 10000);
        }
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
        return "front/matchy/new.html.twig";
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
        return array (  1165 => 977,  1157 => 972,  1132 => 950,  1129 => 949,  1127 => 943,  1117 => 936,  1114 => 935,  1112 => 929,  1101 => 921,  1098 => 920,  1096 => 915,  1079 => 902,  1074 => 898,  1072 => 893,  1061 => 886,  1056 => 882,  1054 => 878,  1042 => 870,  1039 => 868,  1037 => 863,  1027 => 857,  1024 => 855,  1022 => 850,  1011 => 843,  1007 => 840,  1005 => 836,  994 => 829,  990 => 826,  988 => 822,  977 => 815,  972 => 811,  970 => 806,  931 => 771,  926 => 767,  924 => 762,  917 => 757,  911 => 754,  907 => 752,  904 => 751,  899 => 748,  885 => 736,  876 => 733,  871 => 731,  867 => 730,  863 => 729,  860 => 728,  857 => 727,  854 => 726,  851 => 725,  848 => 724,  843 => 723,  841 => 722,  835 => 718,  822 => 717,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎮 ARENA - Nouveau Match{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --neon-blue: #00f3ff;
        --neon-purple: #9d00ff;
        --neon-red: #ff003c;
        --neon-green: #00ff88;
        --neon-yellow: #ffcc00;
        --dark-bg: #0a0a14;
        --location-glow: rgba(255, 204, 0, 0.5);
    }
    
    body {
        background: linear-gradient(135deg, #0a0a14 0%, #1a1a2e 50%, #16213e 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
    }
    
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(157, 0, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(0, 243, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(255, 0, 60, 0.1) 0%, transparent 50%);
        z-index: -1;
    }
    
    .creation-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
        max-width: 900px;
        margin: 0 auto;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .header-glow {
        position: relative;
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem;
        background: rgba(10, 10, 20, 0.7);
        border-radius: 20px;
        border: 2px solid var(--neon-blue);
        box-shadow: 
            0 0 30px rgba(0, 243, 255, 0.3),
            inset 0 0 20px rgba(0, 243, 255, 0.1);
    }
    
    .header-glow::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red),
            var(--neon-green));
        border-radius: 22px;
        z-index: -1;
        filter: blur(10px);
        animation: borderGlow 4s linear infinite;
        background-size: 400% 400%;
    }
    
    @keyframes borderGlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .main-title {
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2.8rem;
        background: linear-gradient(to right, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.5);
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        animation: textGlow 2s ease-in-out infinite alternate;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(0, 243, 255, 0.5); }
        to { text-shadow: 0 0 30px rgba(157, 0, 255, 0.7), 
                         0 0 40px rgba(157, 0, 255, 0.4); }
    }
    
    .form-card {
        background: rgba(20, 20, 35, 0.8);
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 243, 255, 0.2);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        margin-bottom: 2rem;
    }
    
    .form-card:hover {
        border-color: var(--neon-blue);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.9),
            0 0 50px rgba(0, 243, 255, 0.4);
    }
    
    .form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        background-size: 200% 100%;
        animation: slide 2.5s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .form-group {
        margin-bottom: 2rem;
        position: relative;
    }
    
    .form-label {
        display: block;
        color: var(--neon-green);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(0, 255, 136, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
    }
    
    .form-input:focus {
        outline: none;
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }
    
    .form-select {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        cursor: pointer;
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2300f3ff' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1rem;
    }
    
    .form-select:focus {
        outline: none;
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background-color: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 2rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .vs-container {
        text-align: center;
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        padding: 1rem;
    }
    
    .team-select-container {
        background: rgba(0, 0, 0, 0.4);
        border-radius: 12px;
        padding: 1.5rem;
        border: 2px solid var(--neon-purple);
        transition: all 0.3s ease;
    }
    
    .team-select-container:hover {
        border-color: var(--neon-blue);
        box-shadow: 0 0 20px rgba(0, 243, 255, 0.2);
    }
    
    .team-select-label {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 1rem;
        text-align: center;
        display: block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .score-inputs {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 1.5rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .score-input {
        width: 100%;
        padding: 1.2rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-green);
        border-radius: 12px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .score-input:focus {
        outline: none;
        border-color: var(--neon-blue);
        box-shadow: 0 0 25px rgba(0, 243, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .score-separator {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.8rem;
        text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
    }
    
    /* NOUVEAU STYLE POUR LA SECTION LOCALISATION */
    .location-section {
        background: rgba(255, 204, 0, 0.05);
        border: 2px solid var(--neon-yellow);
        border-radius: 15px;
        padding: 1.5rem;
        margin: 2rem 0;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .location-section:hover {
        border-color: var(--neon-green);
        box-shadow: 0 0 30px var(--location-glow);
    }
    
    .location-section::before {
        content: '📍';
        position: absolute;
        top: -15px;
        left: 20px;
        background: var(--dark-bg);
        padding: 0 10px;
        font-size: 1.5rem;
        color: var(--neon-yellow);
    }
    
    .location-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
        margin-top: 1rem;
    }
    
    .location-input {
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-yellow);
        border-radius: 12px;
        padding: 1.2rem;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        width: 100%;
        transition: all 0.3s ease;
    }
    
    .location-input:focus {
        outline: none;
        border-color: var(--neon-green);
        box-shadow: 0 0 20px var(--location-glow);
        transform: translateY(-2px);
    }
    
    .location-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
        font-style: italic;
    }
    
    .coordinate-help {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 8px;
        font-size: 0.9rem;
        color: #a0a0c0;
    }
    
    .coordinate-help button {
        background: linear-gradient(45deg, var(--neon-yellow), #ffaa00);
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        color: black;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 0 15px var(--location-glow);
    }
    
    .coordinate-help button:hover {
        transform: translateY(-2px);
        box-shadow: 0 0 25px var(--neon-green);
    }
    
    .coordinate-help small {
        opacity: 0.7;
        display: block;
        margin-top: 0.3rem;
    }
    
    .form-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(0, 243, 255, 0.3);
    }
    
    .submit-btn {
        position: relative;
        background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.6);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: pointer;
        min-width: 250px;
    }
    
    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: 0.6s;
        z-index: -1;
    }
    
    .submit-btn:hover::before {
        left: 100%;
    }
    
    .submit-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 50px rgba(255, 0, 60, 0.9);
        background: linear-gradient(45deg, var(--neon-purple), var(--neon-red));
    }
    
    .back-btn {
        position: relative;
        background: linear-gradient(45deg, #333344, #444455);
        border: 2px solid var(--neon-blue);
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: pointer;
        min-width: 250px;
    }
    
    .back-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.6s;
        z-index: -1;
    }
    
    .back-btn:hover::before {
        left: 100%;
    }
    
    .back-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(0, 243, 255, 0.5);
        background: linear-gradient(45deg, #444455, #333344);
        border-color: var(--neon-purple);
    }
    
    .input-icon {
        position: absolute;
        right: 1.5rem;
        top: 3.8rem;
        color: var(--neon-blue);
        font-size: 1.3rem;
        pointer-events: none;
    }
    
    .floating-elements {
        position: fixed;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
    }
    
    .floating-element {
        position: absolute;
        opacity: 0.1;
        font-size: 2rem;
        animation: float 20s infinite linear;
    }
    
    @keyframes float {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 0.1;
        }
        90% {
            opacity: 0.1;
        }
        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 0;
        }
    }
    
    .game-suggestions {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .game-option {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid #333344;
        border-radius: 10px;
        padding: 1.2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: #a0a0c0;
    }
    
    .game-option:hover {
        border-color: var(--neon-blue);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 243, 255, 0.2);
    }
    
    .game-option.selected {
        border-color: var(--neon-green);
        background: rgba(0, 255, 136, 0.1);
        color: var(--neon-green);
        box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
        transform: translateY(-3px);
    }
    
    .game-option-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    /* Styles pour les erreurs de validation */
    .form-error {
        color: var(--neon-red);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 8px;
        border-left: 3px solid var(--neon-red);
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    /* Style pour les champs avec erreur */
    .form-input.error,
    .form-select.error,
    .score-input.error,
    .location-input.error {
        border-color: var(--neon-red) !important;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.3) !important;
        background: rgba(255, 0, 60, 0.05) !important;
    }
    
    /* Style pour les messages d'erreur globaux */
    .form-global-error {
        background: rgba(255, 0, 60, 0.1);
        border: 2px solid var(--neon-red);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--neon-green);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
    }
    
    .form-global-error ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    
    .form-global-error li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }
    
    .form-global-error li::before {
        content: '❌';
        position: absolute;
        left: 0;
        top: 0;
    }
    
    @media (max-width: 768px) {
        .creation-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .form-card {
            padding: 1.5rem;
        }
        
        .teams-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .vs-container {
            order: 2;
            padding: 0;
        }
        
        .score-inputs {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .score-separator {
            order: 2;
        }
        
        .location-grid {
            grid-template-columns: 1fr;
        }
        
        .coordinate-help {
            flex-direction: column;
            text-align: center;
        }
        
        .form-actions {
            flex-direction: column;
            gap: 1rem;
        }
        
        .submit-btn, .back-btn {
            min-width: 100%;
            font-size: 1.1rem;
            padding: 1rem 2rem;
        }
        
        .game-suggestions {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"creation-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        {% set icons = ['🎮', '⚡', '🔥', '👑', '🕹️', '🎯', '🏆', '💥', '🚀', '⭐', '📍', '🗺️'] %}
        {% for i in 1..10 %}
            {% set iconIndex = (i % icons|length) %}
            {% set leftPosition = 5 + ((i * 9) % 90) %}
            {% set delay = (i * 1.3) % 21 %}
            {% set duration = 15 + ((i * 1.7) % 11) %}
            <div class=\"floating-element\" style=\"
                left: {{ leftPosition }}%;
                animation-delay: {{ delay }}s;
                animation-duration: {{ duration }}s;
            \">
                {{ icons[iconIndex] }}
            </div>
        {% endfor %}
    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PROGRAMMER UN COMBAT</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            CRÉEZ UN NOUVEAU MATCH POUR L'ARÈNE E-SPORT
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        {{ form_start(form) }}
        
        {# Afficher les erreurs globales #}
        {% if form.vars.errors|length > 0 %}
        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            {{ form_errors(form) }}
        </div>
        {% endif %}
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            {{ form_widget(form.game, {
                'attr': {
                    'class': 'form-select',
                    'placeholder': 'SÉLECTIONNEZ UN JEU'
                }
            }) }}
            <div class=\"input-icon\">🕹️</div>
            
            {# Afficher les erreurs pour le jeu #}
            {{ form_errors(form.game, {'attr': {'class': 'form-error'}}) }}
            
            <!-- Suggestions de jeux populaires -->
            <div class=\"game-suggestions\" id=\"gameSuggestions\">
                <div class=\"game-option\" data-game=\"VALORANT\">
                    <span class=\"game-option-icon\">🔫</span>
                    VALORANT
                </div>
                <div class=\"game-option\" data-game=\"LEAGUE OF LEGENDS\">
                    <span class=\"game-option-icon\">⚔️</span>
                    LEAGUE OF LEGENDS
                </div>
                <div class=\"game-option\" data-game=\"COUNTER-STRIKE 2\">
                    <span class=\"game-option-icon\">🎯</span>
                    COUNTER-STRIKE 2
                </div>
                <div class=\"game-option\" data-game=\"DOTA 2\">
                    <span class=\"game-option-icon\">🛡️</span>
                    DOTA 2
                </div>
                <div class=\"game-option\" data-game=\"OVERWATCH 2\">
                    <span class=\"game-option-icon\">✨</span>
                    OVERWATCH 2
                </div>
                <div class=\"game-option\" data-game=\"RAINBOW SIX SIEGE\">
                    <span class=\"game-option-icon\">🔍</span>
                    RAINBOW SIX SIEGE
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📅 DATE DU MATCH</span>
            </label>
            {{ form_widget(form.match_date, {
                'attr': {
                    'class': 'form-input',
                    'placeholder': 'JJ/MM/AAAA HH:MM'
                }
            }) }}
            <div class=\"input-icon\">📅</div>
            
            {# Afficher les erreurs pour la date #}
            {{ form_errors(form.match_date, {'attr': {'class': 'form-error'}}) }}
        </div>
        
        <!-- Sélection des équipes -->
        <div class=\"teams-grid\">
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 1</label>
                {{ form_widget(form.team1, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
                
                {# Afficher les erreurs pour l'équipe 1 #}
                {{ form_errors(form.team1, {'attr': {'class': 'form-error'}}) }}
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                {{ form_widget(form.team2, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
                
                {# Afficher les erreurs pour l'équipe 2 #}
                {{ form_errors(form.team2, {'attr': {'class': 'form-error'}}) }}
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                {{ form_widget(form.score_team1, {
                    'attr': {
                        'class': 'score-input',
                        'placeholder': '0'
                    }
                }) }}
                {# Afficher les erreurs pour le score team 1 #}
                {{ form_errors(form.score_team1, {'attr': {'class': 'form-error'}}) }}
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                {{ form_widget(form.score_team2, {
                    'attr': {
                        'class': 'score-input',
                        'placeholder': '0'
                    }
                }) }}
                {# Afficher les erreurs pour le score team 2 #}
                {{ form_errors(form.score_team2, {'attr': {'class': 'form-error'}}) }}
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📊 STATUT DU MATCH</span>
            </label>
            {{ form_widget(form.status, {
                'attr': {
                    'class': 'form-select'
                }
            }) }}
            <div class=\"input-icon\">📈</div>
            
            {# Afficher les erreurs pour le statut #}
            {{ form_errors(form.status, {'attr': {'class': 'form-error'}}) }}
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🏆 GAGNANT (FACULTATIF)</span>
            </label>
            {{ form_widget(form.winner_team, {
                'attr': {
                    'class': 'form-select',
                    'placeholder': 'SÉLECTIONNEZ UN GAGNANT'
                }
            }) }}
            <div class=\"input-icon\">👑</div>
            
            {# Afficher les erreurs pour le gagnant #}
            {{ form_errors(form.winner_team, {'attr': {'class': 'form-error'}}) }}
        </div>
        
        <!-- NOUVELLE SECTION LOCALISATION -->
        <div class=\"location-section\">
            <label class=\"form-label\" style=\"margin-bottom: 1.5rem;\">
                <span>📍 LOCALISATION DE L'ARÈNE</span>
            </label>
            
            <div class=\"form-group\">
                <label style=\"color: var(--neon-yellow); font-size: 1rem; margin-bottom: 0.5rem; display: block;\">
                    Adresse / Lieu du match
                </label>
                {{ form_widget(form.location, {
                    'attr': {
                        'class': 'location-input',
                        'placeholder': 'Ex: Accor Arena, Paris • 8 Boulevard de Bercy, 75012 Paris'
                    }
                }) }}
                {{ form_errors(form.location, {'attr': {'class': 'form-error'}}) }}
            </div>
            
            <div class=\"location-grid\">
                <div>
                    <label style=\"color: var(--neon-yellow); font-size: 0.9rem; margin-bottom: 0.5rem; display: block;\">
                        Latitude
                    </label>
                    {{ form_widget(form.latitude, {
                        'attr': {
                            'class': 'location-input',
                            'placeholder': 'Ex: 48.8381',
                            'step': 'any'
                        }
                    }) }}
                    {{ form_errors(form.latitude, {'attr': {'class': 'form-error'}}) }}
                </div>
                
                <div>
                    <label style=\"color: var(--neon-yellow); font-size: 0.9rem; margin-bottom: 0.5rem; display: block;\">
                        Longitude
                    </label>
                    {{ form_widget(form.longitude, {
                        'attr': {
                            'class': 'location-input',
                            'placeholder': 'Ex: 2.3785',
                            'step': 'any'
                        }
                    }) }}
                    {{ form_errors(form.longitude, {'attr': {'class': 'form-error'}}) }}
                </div>
            </div>
            
            <div class=\"coordinate-help\">
                <div style=\"flex: 1;\">
                    <span style=\"color: var(--neon-yellow);\">💡 Comment obtenir les coordonnées ?</span>
                    <small>Rendez-vous sur Google Maps, cliquez droit sur l'emplacement exact, et sélectionnez \"Quoi de neuf ?\" pour voir les coordonnées.</small>
                </div>
                <button type=\"button\" id=\"fillParisCoords\" class=\"btn-help\">
                    🇫🇷 TEST (Paris)
                </button>
                <button type=\"button\" id=\"fillLyonCoords\" class=\"btn-help\">
                    🇫🇷 TEST (Lyon)
                </button>
            </div>
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                ⚡ CRÉER LE MATCH
            </button>
            <a href=\"{{ path('app_matchy_index') }}\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        {{ form_end(form) }}
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: #a0a0c0; font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEIL :</strong> Assurez-vous que les deux équipes sont différentes et que les scores sont corrects !</p>
        <p style=\"margin-top: 0.5rem;\">📍 <strong>LOCALISATION :</strong> Plus vous êtes précis, mieux le match sera positionné sur la carte !</p>
    </div>
</div>

<script>
    // Gestion des suggestions de jeux
    const gameOptions = document.querySelectorAll('.game-option');
    const gameSelect = document.querySelector('select[name*=\"game\"]');
    
    gameOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Retirer la sélection précédente
            gameOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Sélectionner cette option
            this.classList.add('selected');
            
            // Mettre à jour le select
            if (gameSelect) {
                const gameValue = this.getAttribute('data-game');
                gameSelect.value = gameValue;
                
                // Déclencher l'événement change
                gameSelect.dispatchEvent(new Event('change'));
            }
        });
    });
    
    // Pré-sélectionner l'option si elle correspond au select
    if (gameSelect && gameSelect.value) {
        gameOptions.forEach(option => {
            if (option.getAttribute('data-game') === gameSelect.value.toUpperCase()) {
                option.classList.add('selected');
            }
        });
    }
    
    // Mise à jour automatique des scores basée sur le gagnant
    const team1Select = document.querySelector('select[name*=\"team1\"]');
    const team2Select = document.querySelector('select[name*=\"team2\"]');
    const winnerSelect = document.querySelector('select[name*=\"winner_team\"]');
    const scoreTeam1Input = document.querySelector('input[name*=\"score_team1\"]');
    const scoreTeam2Input = document.querySelector('input[name*=\"score_team2\"]');
    
    if (winnerSelect && scoreTeam1Input && scoreTeam2Input) {
        winnerSelect.addEventListener('change', function() {
            const winnerId = this.value;
            const team1Id = team1Select ? team1Select.value : null;
            const team2Id = team2Select ? team2Select.value : null;
            
            if (winnerId && team1Id && team2Id) {
                if (winnerId === team1Id) {
                    // Équipe 1 gagnante
                    scoreTeam1Input.value = '3';
                    scoreTeam2Input.value = '0';
                } else if (winnerId === team2Id) {
                    // Équipe 2 gagnante
                    scoreTeam1Input.value = '0';
                    scoreTeam2Input.value = '3';
                }
            }
        });
    }
    
    // NOUVEAU: Remplissage automatique des coordonnées pour les tests
    document.getElementById('fillParisCoords')?.addEventListener('click', function() {
        const locationInput = document.querySelector('input[name*=\"location\"]');
        const latInput = document.querySelector('input[name*=\"latitude\"]');
        const lngInput = document.querySelector('input[name*=\"longitude\"]');
        
        if (locationInput) locationInput.value = 'Accor Arena, 8 Boulevard de Bercy, 75012 Paris';
        if (latInput) latInput.value = '48.8381';
        if (lngInput) lngInput.value = '2.3785';
        
        // Animation de confirmation
        this.style.background = 'linear-gradient(45deg, var(--neon-green), #00cc66)';
        this.textContent = '✓ COPIÉ !';
        setTimeout(() => {
            this.style.background = 'linear-gradient(45deg, var(--neon-yellow), #ffaa00)';
            this.textContent = '🇫🇷 TEST (Paris)';
        }, 2000);
    });
    
    document.getElementById('fillLyonCoords')?.addEventListener('click', function() {
        const locationInput = document.querySelector('input[name*=\"location\"]');
        const latInput = document.querySelector('input[name*=\"latitude\"]');
        const lngInput = document.querySelector('input[name*=\"longitude\"]');
        
        if (locationInput) locationInput.value = 'Groupama Stadium, 10 Avenue Simone Veil, 69150 Décines-Charpieu';
        if (latInput) latInput.value = '45.7653';
        if (lngInput) lngInput.value = '4.9808';
        
        // Animation de confirmation
        this.style.background = 'linear-gradient(45deg, var(--neon-green), #00cc66)';
        this.textContent = '✓ COPIÉ !';
        setTimeout(() => {
            this.style.background = 'linear-gradient(45deg, var(--neon-yellow), #ffaa00)';
            this.textContent = '🇫🇷 TEST (Lyon)';
        }, 2000);
    });
    
    // Validation des équipes différentes
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const team1Value = team1Select ? team1Select.value : null;
            const team2Value = team2Select ? team2Select.value : null;
            
            if (team1Value && team2Value && team1Value === team2Value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
                return false;
            }
            
            // Validation des coordonnées (optionnel)
            const latInput = document.querySelector('input[name*=\"latitude\"]');
            const lngInput = document.querySelector('input[name*=\"longitude\"]');
            const locationInput = document.querySelector('input[name*=\"location\"]');
            
            if (locationInput && locationInput.value.trim() !== '') {
                if (!latInput.value || !lngInput.value) {
                    if (!confirm('⚠️ Vous avez spécifié une adresse mais pas les coordonnées. Le match n\\'apparaîtra pas sur la carte. Continuer ?')) {
                        e.preventDefault();
                        return false;
                    }
                }
            }
            
            // Animation du bouton de soumission
            const submitBtn = this.querySelector('.submit-btn');
            if (submitBtn) {
                submitBtn.innerHTML = '⚡ CRÉATION EN COURS...';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.8';
                
                // Petite animation avant la soumission réelle
                setTimeout(() => {
                    submitBtn.innerHTML = '⚡ MATCH CRÉÉ !';
                    submitBtn.style.background = 'linear-gradient(45deg, var(--neon-green), var(--neon-blue))';
                }, 100);
            }
        });
    }
    
    // Date picker amélioré
    const dateInput = document.querySelector('input[name*=\"match_date\"]');
    if (dateInput && dateInput.type === 'text') {
        dateInput.addEventListener('focus', function() {
            // Changer le type en datetime-local pour les navigateurs modernes
            if (this.type === 'text') {
                this.type = 'datetime-local';
            }
        });
        
        // Formatage de la date
        dateInput.addEventListener('blur', function() {
            if (this.value) {
                const date = new Date(this.value);
                if (!isNaN(date.getTime())) {
                    const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                    date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                    this.value = formatted;
                }
            }
        });
    }
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.creation-container').style.opacity = '1';
        }, 100);
        
        // Animation des inputs au focus
        const formInputs = document.querySelectorAll('.form-input, .form-select, .score-input, .location-input');
        
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
        
        // Mettre en évidence les champs avec erreurs
        const errorElements = document.querySelectorAll('.form-error');
        
        errorElements.forEach(errorElement => {
            // Trouver le champ correspondant
            const formGroup = errorElement.closest('.form-group') || 
                            errorElement.closest('.team-select-container') ||
                            errorElement.closest('.location-section') ||
                            errorElement.closest('div');
            
            if (formGroup) {
                const inputElement = formGroup.querySelector('.form-input, .form-select, .score-input, .location-input');
                if (inputElement && errorElement.textContent.trim() !== '') {
                    inputElement.classList.add('error');
                    
                    // Ajouter un écouteur pour retirer la classe d'erreur
                    inputElement.addEventListener('input', function() {
                        if (errorElement.textContent.trim() !== '') {
                            errorElement.textContent = '';
                            errorElement.style.display = 'none';
                            this.classList.remove('error');
                        }
                    });
                }
            }
        });
        
        // Pour les erreurs globales, cacher après 10 secondes
        const globalError = document.querySelector('.form-global-error');
        if (globalError) {
            setTimeout(() => {
                globalError.style.opacity = '0';
                globalError.style.transition = 'opacity 1s';
                setTimeout(() => globalError.style.display = 'none', 1000);
            }, 10000);
        }
    });
</script>
{% endblock %}", "front/matchy/new.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\front\\matchy\\new.html.twig");
    }
}
