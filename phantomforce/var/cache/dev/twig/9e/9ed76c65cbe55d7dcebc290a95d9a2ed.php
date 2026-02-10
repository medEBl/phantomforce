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

/* team/index.html.twig */
class __TwigTemplate_dd662e12b915ce469f874eeca87aad2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index.html.twig"));

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

        yield "🎮 ARENA - Équipes E-sport";
        
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
        --blood-red: #ff0000;
        --fire-red: #ff3300;
        --dark-red: #cc0000;
        --neon-red: #ff003c;
        --black-bg: #000000;
        --dark-gray: #1a1a1a;
        --gray: #333333;
        --light-gray: #666666;
        --white: #ffffff;
        --red-gradient: linear-gradient(135deg, #ff0000 0%, #cc0000 50%, #990000 100%);
        --red-glow: rgba(255, 0, 0, 0.7);
        --red-light-glow: rgba(255, 51, 51, 0.3);
    }
    
    body {
        background: linear-gradient(135deg, #000000 0%, #1a0000 50%, #330000 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
        color: var(--white);
    }
    
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(255, 0, 0, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(204, 0, 0, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(255, 51, 51, 0.1) 0%, transparent 50%);
        z-index: -1;
    }
    
    .gaming-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .header-glow {
        position: relative;
        text-align: center;
        margin-bottom: 2rem;
        padding: 2rem;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 20px;
        border: 2px solid var(--blood-red);
        box-shadow: 
            0 0 30px var(--red-glow),
            inset 0 0 20px rgba(255, 0, 0, 0.1);
    }
    
    .header-glow::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--blood-red), 
            var(--fire-red),
            var(--dark-red),
            var(--neon-red));
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
        font-size: 3.5rem;
        background: linear-gradient(to right, 
            var(--blood-red), 
            var(--fire-red),
            var(--neon-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(255, 0, 0, 0.7);
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        animation: textGlow 2s ease-in-out infinite alternate;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(255, 0, 0, 0.7); }
        to { text-shadow: 0 0 30px rgba(255, 51, 0, 0.9), 
                         0 0 40px rgba(255, 0, 0, 0.5); }
    }
    
    .controls-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }
    
    .add-team-btn {
        position: relative;
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        border: none;
        padding: 1rem 2.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(255, 0, 0, 0.6);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 300px;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .add-team-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .add-team-btn:hover::before {
        left: 100%;
    }
    
    .add-team-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.9);
        background: linear-gradient(45deg, var(--fire-red), var(--blood-red));
    }
    
    .music-control-btn {
        position: relative;
        background: linear-gradient(45deg, #8b0000, #660000);
        border: none;
        padding: 1rem 2.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(139, 0, 0, 0.5);
        z-index: 1;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 300px;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .music-control-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .music-control-btn:hover::before {
        left: 100%;
    }
    
    .music-control-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(139, 0, 0, 0.8);
        background: linear-gradient(45deg, #660000, #8b0000);
    }
    
    .music-control-btn.muted {
        background: linear-gradient(45deg, #333333, #666666);
        box-shadow: 0 0 25px rgba(51, 51, 51, 0.5);
    }
    
    .music-control-btn.muted:hover {
        box-shadow: 0 0 40px rgba(51, 51, 51, 0.8);
    }
    
    .music-control-btn.playing {
        animation: pulseMusic 1.5s infinite;
    }
    
    @keyframes pulseMusic {
        0%, 100% { box-shadow: 0 0 25px rgba(255, 0, 0, 0.5); }
        50% { box-shadow: 0 0 40px rgba(255, 0, 0, 0.9); }
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
    }
    
    .team-card {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 0, 0, 0.3);
        backdrop-filter: blur(10px);
    }
    
    .team-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.7),
            0 0 30px rgba(255, 0, 0, 0.5);
        border-color: var(--blood-red);
    }
    
    .team-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, 
            var(--blood-red), 
            var(--fire-red),
            var(--neon-red));
        background-size: 200% 100%;
        animation: slide 3s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .team-id {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(0, 0, 0, 0.8);
        color: var(--fire-red);
        font-family: 'Orbitron', monospace;
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        border: 1px solid var(--fire-red);
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.7);
    }
    
    .team-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .team-name::before {
        content: '⚔️';
        color: var(--blood-red);
        animation: pulse 1s infinite;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    .team-info {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
    }
    
    .info-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #cc9999;
        font-size: 1.1rem;
    }
    
    .info-item strong {
        color: var(--fire-red);
        min-width: 120px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .actions-container {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 0, 0, 0.2);
    }
    
    .action-btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .view-btn {
        background: linear-gradient(45deg, #8b0000, #660000);
        color: white;
    }
    
    .edit-btn {
        background: linear-gradient(45deg, #b30000, #990000);
        color: white;
    }
    
    .delete-btn {
        background: linear-gradient(45deg, #cc0000, #990000);
        color: white;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
        filter: brightness(1.3);
    }
    
    .no-teams {
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem;
        background: rgba(255, 0, 0, 0.15);
        border: 2px dashed var(--blood-red);
        border-radius: 20px;
        animation: alertPulse 2s infinite;
        backdrop-filter: blur(5px);
    }
    
    @keyframes alertPulse {
        0%, 100% { 
            opacity: 1;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
        }
        50% { 
            opacity: 0.9;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
        }
    }
    
    .no-teams h2 {
        color: var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        margin-bottom: 1rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .no-teams p {
        color: #ff9999;
        font-size: 1.2rem;
        margin-bottom: 2rem;
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
        color: var(--blood-red);
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
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
    
    .game-icon {
        display: inline-block;
        background: rgba(255, 0, 0, 0.3);
        color: white;
        padding: 0.2rem 0.8rem;
        border-radius: 5px;
        font-size: 0.9rem;
        margin-left: 0.5rem;
        border: 1px solid rgba(255, 0, 0, 0.5);
    }
    
    .volume-controls {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 1000;
    }
    
    .volume-slider {
        background: rgba(0, 0, 0, 0.9);
        padding: 10px;
        border-radius: 10px;
        border: 1px solid var(--blood-red);
        display: none;
    }
    
    .volume-slider.active {
        display: block;
        animation: slideUp 0.3s ease;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
    }
    
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .volume-slider input {
        width: 100%;
        margin: 5px 0;
    }
    
    /* Filtres */
    .filters-container {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(255, 0, 0, 0.4);
        backdrop-filter: blur(10px);
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.2);
    }
    
    .search-box {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .search-input {
        width: 100%;
        padding: 1rem 3rem 1rem 1.5rem;
        background: rgba(0, 0, 0, 0.9);
        border: 2px solid var(--dark-red);
        border-radius: 10px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: var(--blood-red);
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
    }
    
    .search-input::placeholder {
        color: rgba(255, 153, 153, 0.7);
    }
    
    .clear-search {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--blood-red);
        font-size: 1.2rem;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.3s;
    }
    
    .clear-search:hover {
        opacity: 1;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.7);
    }
    
    .filter-controls {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .filter-label {
        color: var(--fire-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .filter-select {
        padding: 0.8rem 1rem;
        background: rgba(0, 0, 0, 0.9);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .filter-select:hover, .filter-select:focus {
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
        outline: none;
    }
    
    .reset-btn {
        grid-column: span 1;
        padding: 0.8rem 1.5rem;
        background: linear-gradient(45deg, #333333, #666666);
        border: none;
        border-radius: 8px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 1.7rem;
    }
    
    .reset-btn:hover {
        background: linear-gradient(45deg, #444444, #777777);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
    }
    
    .results-counter {
        text-align: center;
        padding: 0.8rem;
        background: rgba(255, 0, 0, 0.15);
        border-radius: 8px;
        border: 1px solid var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        color: var(--fire-red);
        font-size: 1.1rem;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
    }
    
    .results-counter span {
        font-size: 1.5rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
        color: var(--blood-red);
    }
    
    /* Styles pour l'effet de filtrage */
    .team-card.hidden {
        display: none;
    }
    
    .team-card.filtered-out {
        opacity: 0.3;
        transform: scale(0.95);
        transition: all 0.3s ease;
    }
    
    @media (max-width: 768px) {
        .main-title {
            font-size: 2rem;
        }
        
        .teams-grid {
            grid-template-columns: 1fr;
        }
        
        .header-glow {
            padding: 1rem;
        }
        
        .controls-container {
            flex-direction: column;
            align-items: center;
        }
        
        .add-team-btn, .music-control-btn {
            min-width: 250px;
            font-size: 1rem;
        }
        
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 690
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

        // line 691
        yield "<div class=\"gaming-container\">
    
    <!-- Audio pour la musique (caché pour l'instant) -->
    <audio id=\"esportMusic\" loop style=\"display: none;\">
        <source src=\"";
        // line 695
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("music/music.mp3"), "html", null, true);
        yield "\" type=\"audio/mpeg\">
        Votre navigateur ne supporte pas l'audio.
    </audio>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 701
        $context["icons"] = ["⚔️", "🔥", "💀", "👑", "🛡️", "🎯", "🏆", "💥", "⚡", "⭐"];
        // line 702
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 703
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 703, $this->source); })())));
            // line 704
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 705
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 706
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 707
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 708, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 709
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 709, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 710, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 712
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 712, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 712, $this->source); })()), [], "array", false, false, false, 712), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 715
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PHANTOM FORCE - ÉQUIPES</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            COMMANDEZ VOS LÉGIONS • ";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 721, $this->source); })())), "html", null, true);
        yield " ÉQUIPES EN COMBAT
        </p>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        <a href=\"";
        // line 727
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
        yield "\" class=\"add-team-btn\">
            ⚔️ CRÉER UNE NOUVELLE LÉGION
        </a>
        
        <button id=\"musicBtn\" class=\"music-control-btn\">
            🔊 MUSIQUE DE COMBAT
        </button>
    </div>
    
    <!-- Barre de recherche et filtres -->
    <div class=\"filters-container\">
        <div class=\"search-box\">
            <input type=\"text\" id=\"searchInput\" placeholder=\"🔍 Rechercher une équipe...\" class=\"search-input\">
            <button class=\"clear-search\" id=\"clearSearch\">✖</button>
        </div>
        
        <div class=\"filter-controls\">
            <div class=\"filter-group\">
                <label class=\"filter-label\">🎮 FILTRER PAR JEU :</label>
                <select id=\"gameFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les jeux</option>
                    ";
        // line 748
        $context["games"] = [];
        // line 749
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 749, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 750
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 750), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 750, $this->source); })()))) {
                // line 751
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 751, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 751)]);
                // line 752
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 752), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 752), "html", null, true);
                yield "</option>
                        ";
            }
            // line 754
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">📅 TRIER PAR :</label>
                <select id=\"sortBy\" class=\"filter-select\">
                    <option value=\"id-asc\">ID ↑</option>
                    <option value=\"id-desc\">ID ↓</option>
                    <option value=\"name-asc\">Nom (A-Z)</option>
                    <option value=\"name-desc\">Nom (Z-A)</option>
                    <option value=\"date-asc\">Date (ancien)</option>
                    <option value=\"date-desc\">Date (récent)</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">👑 AVEC COACH :</label>
                <select id=\"coachFilter\" class=\"filter-select\">
                    <option value=\"\">Toutes</option>
                    <option value=\"with\">Avec coach</option>
                    <option value=\"without\">Sans coach</option>
                </select>
            </div>
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"teamCount\">";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 783, $this->source); })())), "html", null, true);
        yield "</span> LÉGIONS DISPONIBLES
        </div>
    </div>
    
    ";
        // line 787
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 787, $this->source); })())) > 0)) {
            // line 788
            yield "        <!-- Grille des équipes -->
        <div class=\"teams-grid\" id=\"teamsGrid\">
            ";
            // line 790
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 790, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 791
                yield "                <div class=\"team-card\" 
                     data-id=\"";
                // line 792
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 792), "html", null, true);
                yield "\" 
                     data-name=\"";
                // line 793
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 793)), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 794
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 794)), "html", null, true);
                yield "\" 
                     data-date=\"";
                // line 795
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 795)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 795), "U"), "html", null, true)) : (0));
                yield "\"
                     data-coach=\"";
                // line 796
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 796)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\">
                    <div class=\"team-id\">#";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 797), "html", null, true);
                yield "</div>
                    
                    <h2 class=\"team-name\">
                        ";
                // line 800
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 800)), "html", null, true);
                yield "
                    </h2>
                    
                    <div class=\"team-info\">
                        <div class=\"info-item\">
                            <strong>🎮 JEU :</strong>
                            <span class=\"game-value\">";
                // line 806
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 806), "html", null, true);
                yield "</span>
                            <span class=\"game-icon\">";
                // line 807
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 807), 0, 3)), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>📅 CRÉATION :</strong>
                            <span class=\"date-value\">";
                // line 812
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 812)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 812), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>👑 COACH :</strong>
                            <span style=\"color: ";
                // line 817
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 817)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "var(--fire-red)";
                } else {
                    yield "var(--blood-red)";
                }
                yield ";\">
                                ";
                // line 818
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 818)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 818), "html", null, true)) : ("EN ATTENTE"));
                yield "
                            </span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>🏆 STATUT :</strong>
                            <span style=\"color: var(--fire-red); font-weight: bold;\">COMBAT READY</span>
                        </div>
                    </div>
                    
                    <div class=\"actions-container\">
                        <a href=\"";
                // line 829
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 829)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails de l'équipe\">
                            👁️ ANALYSER
                        </a>
                        
                        <a href=\"";
                // line 835
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 835)]), "html", null, true);
                yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier l'équipe\">
                            ⚙️ MODIFIER
                        </a>
                        
                        <form method=\"post\" 
                              action=\"";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 842)]), "html", null, true);
                yield "\"
                              onsubmit=\"return confirm('💀 Êtes-vous sûr de vouloir dissoudre cette légion ? Cette action est irréversible !');\"
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 845
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 845))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                💥 DISSOUDRE
                            </button>
                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 853
            yield "        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeTeams\">";
            // line 858
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 858, $this->source); })())), "html", null, true);
            yield "</span> LÉGIONS ACTIVES • DERNIÈRE MISE À JOUR : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 863
            yield "        <!-- Message quand aucune équipe n'existe -->
        <div class=\"no-teams\">
            <h2>⚠️ ARÈNE DÉSERTE ⚠️</h2>
            <p>Aucune légion n'a encore été créée. Forgez la première !</p>
            <a href=\"";
            // line 867
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
            yield "\" class=\"add-team-btn\" style=\"display: inline-block; width: auto;\">
                🏆 FORGER LA PREMIÈRE LÉGION
            </a>
        </div>
    ";
        }
        // line 872
        yield "</div>

<script>
    // Initialisation des variables
    let allTeams = Array.from(document.querySelectorAll('.team-card'));
    let currentTeams = [...allTeams];
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const sortBy = document.getElementById('sortBy');
    const coachFilter = document.getElementById('coachFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
    
    // Fonction pour mettre à jour le compteur
    function updateCounter(visibleCount) {
        teamCount.textContent = visibleCount;
        if (activeTeams) {
            activeTeams.textContent = visibleCount;
        }
        
        // Animation du compteur
        teamCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            teamCount.style.transform = 'scale(1)';
        }, 200);
    }
    
    // Fonction de recherche
    function searchTeams() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentTeams.forEach(team => {
            const teamName = team.dataset.name;
            const gameName = team.querySelector('.game-value').textContent.toLowerCase();
            
            if (searchTerm === '' || 
                teamName.includes(searchTerm) || 
                gameName.includes(searchTerm)) {
                team.classList.remove('hidden', 'filtered-out');
            } else {
                team.classList.add('filtered-out');
            }
        });
        
        applyFilters();
    }
    
    // Fonction pour appliquer tous les filtres
    function applyFilters() {
        let visibleTeams = [];
        
        currentTeams.forEach(team => {
            let isVisible = !team.classList.contains('filtered-out');
            
            // Filtre par jeu
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && team.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            // Filtre par coach
            const coachStatus = coachFilter.value;
            if (coachStatus === 'with' && team.dataset.coach === 'no') {
                isVisible = false;
            }
            if (coachStatus === 'without' && team.dataset.coach === 'yes') {
                isVisible = false;
            }
            
            if (isVisible) {
                team.classList.remove('hidden');
                visibleTeams.push(team);
            } else {
                team.classList.add('hidden');
            }
        });
        
        // Appliquer le tri
        sortTeams(visibleTeams);
        
        // Mettre à jour le compteur
        updateCounter(visibleTeams.length);
    }
    
    // Fonction de tri
    function sortTeams(teams) {
        const sortValue = sortBy.value;
        const [criteria, order] = sortValue.split('-');
        
        teams.sort((a, b) => {
            let aValue, bValue;
            
            switch(criteria) {
                case 'id':
                    aValue = parseInt(a.dataset.id);
                    bValue = parseInt(b.dataset.id);
                    break;
                case 'name':
                    aValue = a.dataset.name;
                    bValue = b.dataset.name;
                    break;
                case 'date':
                    aValue = parseInt(a.dataset.date);
                    bValue = parseInt(b.dataset.date);
                    break;
                default:
                    return 0;
            }
            
            // Comparaison
            if (typeof aValue === 'string') {
                return order === 'asc' ? 
                    aValue.localeCompare(bValue) : 
                    bValue.localeCompare(aValue);
            } else {
                return order === 'asc' ? 
                    aValue - bValue : 
                    bValue - aValue;
            }
        });
        
        // Réorganiser le DOM
        const grid = document.getElementById('teamsGrid');
        if (grid) {
            teams.forEach(team => {
                grid.appendChild(team);
            });
        }
    }
    
    // Événements
    searchInput.addEventListener('input', searchTeams);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchTeams();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    sortBy.addEventListener('change', applyFilters);
    coachFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        sortBy.value = 'id-asc';
        coachFilter.value = '';
        
        currentTeams.forEach(team => {
            team.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
    });
    
    // Gestion de la musique (version simple)
    const musicBtn = document.getElementById('musicBtn');
    const music = document.getElementById('esportMusic');
    let isPlaying = false;
    
    musicBtn.addEventListener('click', function() {
        if (!isPlaying) {
            music.play().then(() => {
                isPlaying = true;
                musicBtn.innerHTML = '🔊 MUSIQUE ON';
                musicBtn.style.background = 'linear-gradient(45deg, var(--blood-red), var(--fire-red))';
                musicBtn.classList.add('playing');
            }).catch(error => {
                console.log(\"Audio error:\", error);
                alert(\"Cliquez d'abord sur la page pour autoriser l'audio.\");
            });
        } else {
            music.pause();
            isPlaying = false;
            musicBtn.innerHTML = '🔇 MUSIQUE OFF';
            musicBtn.style.background = 'linear-gradient(45deg, #8b0000, #660000)';
            musicBtn.classList.remove('playing');
        }
    });
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.team-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            this.style.transform = `translateY(-10px) scale(1.02) rotateX(\${(y - rect.height/2)/20}deg) rotateY(\${(x - rect.width/2)/20}deg)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
        });
    });
    
    // Effet d'étincelle au clic
    document.addEventListener('click', function(e) {
        const spark = document.createElement('div');
        spark.style.position = 'fixed';
        spark.style.left = e.clientX + 'px';
        spark.style.top = e.clientY + 'px';
        spark.style.width = '10px';
        spark.style.height = '10px';
        spark.style.background = 'radial-gradient(circle, var(--blood-red) 0%, transparent 70%)';
        spark.style.borderRadius = '50%';
        spark.style.pointerEvents = 'none';
        spark.style.zIndex = '9999';
        spark.style.boxShadow = '0 0 10px var(--blood-red)';
        spark.style.animation = 'sparkFade 0.5s forwards';
        
        document.body.appendChild(spark);
        
        setTimeout(() => {
            spark.remove();
        }, 500);
    });
    
    // Ajouter l'animation CSS pour les étincelles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes sparkFade {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
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
        return "team/index.html.twig";
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
        return array (  1132 => 872,  1124 => 867,  1118 => 863,  1108 => 858,  1101 => 853,  1087 => 845,  1081 => 842,  1071 => 835,  1062 => 829,  1048 => 818,  1040 => 817,  1032 => 812,  1024 => 807,  1020 => 806,  1011 => 800,  1005 => 797,  1001 => 796,  997 => 795,  993 => 794,  989 => 793,  985 => 792,  982 => 791,  978 => 790,  974 => 788,  972 => 787,  965 => 783,  935 => 755,  929 => 754,  921 => 752,  918 => 751,  915 => 750,  910 => 749,  908 => 748,  884 => 727,  875 => 721,  867 => 715,  858 => 712,  853 => 710,  849 => 709,  845 => 708,  842 => 707,  839 => 706,  836 => 705,  833 => 704,  830 => 703,  825 => 702,  823 => 701,  814 => 695,  808 => 691,  795 => 690,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎮 ARENA - Équipes E-sport{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --blood-red: #ff0000;
        --fire-red: #ff3300;
        --dark-red: #cc0000;
        --neon-red: #ff003c;
        --black-bg: #000000;
        --dark-gray: #1a1a1a;
        --gray: #333333;
        --light-gray: #666666;
        --white: #ffffff;
        --red-gradient: linear-gradient(135deg, #ff0000 0%, #cc0000 50%, #990000 100%);
        --red-glow: rgba(255, 0, 0, 0.7);
        --red-light-glow: rgba(255, 51, 51, 0.3);
    }
    
    body {
        background: linear-gradient(135deg, #000000 0%, #1a0000 50%, #330000 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
        color: var(--white);
    }
    
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(255, 0, 0, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(204, 0, 0, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(255, 51, 51, 0.1) 0%, transparent 50%);
        z-index: -1;
    }
    
    .gaming-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .header-glow {
        position: relative;
        text-align: center;
        margin-bottom: 2rem;
        padding: 2rem;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 20px;
        border: 2px solid var(--blood-red);
        box-shadow: 
            0 0 30px var(--red-glow),
            inset 0 0 20px rgba(255, 0, 0, 0.1);
    }
    
    .header-glow::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--blood-red), 
            var(--fire-red),
            var(--dark-red),
            var(--neon-red));
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
        font-size: 3.5rem;
        background: linear-gradient(to right, 
            var(--blood-red), 
            var(--fire-red),
            var(--neon-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(255, 0, 0, 0.7);
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        animation: textGlow 2s ease-in-out infinite alternate;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(255, 0, 0, 0.7); }
        to { text-shadow: 0 0 30px rgba(255, 51, 0, 0.9), 
                         0 0 40px rgba(255, 0, 0, 0.5); }
    }
    
    .controls-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }
    
    .add-team-btn {
        position: relative;
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        border: none;
        padding: 1rem 2.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(255, 0, 0, 0.6);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 300px;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .add-team-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .add-team-btn:hover::before {
        left: 100%;
    }
    
    .add-team-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.9);
        background: linear-gradient(45deg, var(--fire-red), var(--blood-red));
    }
    
    .music-control-btn {
        position: relative;
        background: linear-gradient(45deg, #8b0000, #660000);
        border: none;
        padding: 1rem 2.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(139, 0, 0, 0.5);
        z-index: 1;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 300px;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .music-control-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .music-control-btn:hover::before {
        left: 100%;
    }
    
    .music-control-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(139, 0, 0, 0.8);
        background: linear-gradient(45deg, #660000, #8b0000);
    }
    
    .music-control-btn.muted {
        background: linear-gradient(45deg, #333333, #666666);
        box-shadow: 0 0 25px rgba(51, 51, 51, 0.5);
    }
    
    .music-control-btn.muted:hover {
        box-shadow: 0 0 40px rgba(51, 51, 51, 0.8);
    }
    
    .music-control-btn.playing {
        animation: pulseMusic 1.5s infinite;
    }
    
    @keyframes pulseMusic {
        0%, 100% { box-shadow: 0 0 25px rgba(255, 0, 0, 0.5); }
        50% { box-shadow: 0 0 40px rgba(255, 0, 0, 0.9); }
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
    }
    
    .team-card {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 0, 0, 0.3);
        backdrop-filter: blur(10px);
    }
    
    .team-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.7),
            0 0 30px rgba(255, 0, 0, 0.5);
        border-color: var(--blood-red);
    }
    
    .team-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, 
            var(--blood-red), 
            var(--fire-red),
            var(--neon-red));
        background-size: 200% 100%;
        animation: slide 3s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .team-id {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(0, 0, 0, 0.8);
        color: var(--fire-red);
        font-family: 'Orbitron', monospace;
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        border: 1px solid var(--fire-red);
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.7);
    }
    
    .team-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .team-name::before {
        content: '⚔️';
        color: var(--blood-red);
        animation: pulse 1s infinite;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    .team-info {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
    }
    
    .info-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #cc9999;
        font-size: 1.1rem;
    }
    
    .info-item strong {
        color: var(--fire-red);
        min-width: 120px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .actions-container {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 0, 0, 0.2);
    }
    
    .action-btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .view-btn {
        background: linear-gradient(45deg, #8b0000, #660000);
        color: white;
    }
    
    .edit-btn {
        background: linear-gradient(45deg, #b30000, #990000);
        color: white;
    }
    
    .delete-btn {
        background: linear-gradient(45deg, #cc0000, #990000);
        color: white;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
        filter: brightness(1.3);
    }
    
    .no-teams {
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem;
        background: rgba(255, 0, 0, 0.15);
        border: 2px dashed var(--blood-red);
        border-radius: 20px;
        animation: alertPulse 2s infinite;
        backdrop-filter: blur(5px);
    }
    
    @keyframes alertPulse {
        0%, 100% { 
            opacity: 1;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
        }
        50% { 
            opacity: 0.9;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
        }
    }
    
    .no-teams h2 {
        color: var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        margin-bottom: 1rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .no-teams p {
        color: #ff9999;
        font-size: 1.2rem;
        margin-bottom: 2rem;
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
        color: var(--blood-red);
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
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
    
    .game-icon {
        display: inline-block;
        background: rgba(255, 0, 0, 0.3);
        color: white;
        padding: 0.2rem 0.8rem;
        border-radius: 5px;
        font-size: 0.9rem;
        margin-left: 0.5rem;
        border: 1px solid rgba(255, 0, 0, 0.5);
    }
    
    .volume-controls {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 1000;
    }
    
    .volume-slider {
        background: rgba(0, 0, 0, 0.9);
        padding: 10px;
        border-radius: 10px;
        border: 1px solid var(--blood-red);
        display: none;
    }
    
    .volume-slider.active {
        display: block;
        animation: slideUp 0.3s ease;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
    }
    
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .volume-slider input {
        width: 100%;
        margin: 5px 0;
    }
    
    /* Filtres */
    .filters-container {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(255, 0, 0, 0.4);
        backdrop-filter: blur(10px);
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.2);
    }
    
    .search-box {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .search-input {
        width: 100%;
        padding: 1rem 3rem 1rem 1.5rem;
        background: rgba(0, 0, 0, 0.9);
        border: 2px solid var(--dark-red);
        border-radius: 10px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: var(--blood-red);
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
    }
    
    .search-input::placeholder {
        color: rgba(255, 153, 153, 0.7);
    }
    
    .clear-search {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--blood-red);
        font-size: 1.2rem;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.3s;
    }
    
    .clear-search:hover {
        opacity: 1;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.7);
    }
    
    .filter-controls {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .filter-label {
        color: var(--fire-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .filter-select {
        padding: 0.8rem 1rem;
        background: rgba(0, 0, 0, 0.9);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .filter-select:hover, .filter-select:focus {
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
        outline: none;
    }
    
    .reset-btn {
        grid-column: span 1;
        padding: 0.8rem 1.5rem;
        background: linear-gradient(45deg, #333333, #666666);
        border: none;
        border-radius: 8px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 1.7rem;
    }
    
    .reset-btn:hover {
        background: linear-gradient(45deg, #444444, #777777);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
    }
    
    .results-counter {
        text-align: center;
        padding: 0.8rem;
        background: rgba(255, 0, 0, 0.15);
        border-radius: 8px;
        border: 1px solid var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        color: var(--fire-red);
        font-size: 1.1rem;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
    }
    
    .results-counter span {
        font-size: 1.5rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
        color: var(--blood-red);
    }
    
    /* Styles pour l'effet de filtrage */
    .team-card.hidden {
        display: none;
    }
    
    .team-card.filtered-out {
        opacity: 0.3;
        transform: scale(0.95);
        transition: all 0.3s ease;
    }
    
    @media (max-width: 768px) {
        .main-title {
            font-size: 2rem;
        }
        
        .teams-grid {
            grid-template-columns: 1fr;
        }
        
        .header-glow {
            padding: 1rem;
        }
        
        .controls-container {
            flex-direction: column;
            align-items: center;
        }
        
        .add-team-btn, .music-control-btn {
            min-width: 250px;
            font-size: 1rem;
        }
        
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"gaming-container\">
    
    <!-- Audio pour la musique (caché pour l'instant) -->
    <audio id=\"esportMusic\" loop style=\"display: none;\">
        <source src=\"{{ asset('music/music.mp3') }}\" type=\"audio/mpeg\">
        Votre navigateur ne supporte pas l'audio.
    </audio>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        {% set icons = ['⚔️', '🔥', '💀', '👑', '🛡️', '🎯', '🏆', '💥', '⚡', '⭐'] %}
        {% for i in 1..15 %}
            {% set iconIndex = (i % icons|length) %}
            {% set leftPosition = 5 + ((i * 7) % 90) %}
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
        <h1 class=\"main-title\">PHANTOM FORCE - ÉQUIPES</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            COMMANDEZ VOS LÉGIONS • {{ teams|length }} ÉQUIPES EN COMBAT
        </p>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        <a href=\"{{ path('app_team_new') }}\" class=\"add-team-btn\">
            ⚔️ CRÉER UNE NOUVELLE LÉGION
        </a>
        
        <button id=\"musicBtn\" class=\"music-control-btn\">
            🔊 MUSIQUE DE COMBAT
        </button>
    </div>
    
    <!-- Barre de recherche et filtres -->
    <div class=\"filters-container\">
        <div class=\"search-box\">
            <input type=\"text\" id=\"searchInput\" placeholder=\"🔍 Rechercher une équipe...\" class=\"search-input\">
            <button class=\"clear-search\" id=\"clearSearch\">✖</button>
        </div>
        
        <div class=\"filter-controls\">
            <div class=\"filter-group\">
                <label class=\"filter-label\">🎮 FILTRER PAR JEU :</label>
                <select id=\"gameFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les jeux</option>
                    {% set games = [] %}
                    {% for team in teams %}
                        {% if team.game not in games %}
                            {% set games = games|merge([team.game]) %}
                            <option value=\"{{ team.game }}\">{{ team.game }}</option>
                        {% endif %}
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">📅 TRIER PAR :</label>
                <select id=\"sortBy\" class=\"filter-select\">
                    <option value=\"id-asc\">ID ↑</option>
                    <option value=\"id-desc\">ID ↓</option>
                    <option value=\"name-asc\">Nom (A-Z)</option>
                    <option value=\"name-desc\">Nom (Z-A)</option>
                    <option value=\"date-asc\">Date (ancien)</option>
                    <option value=\"date-desc\">Date (récent)</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">👑 AVEC COACH :</label>
                <select id=\"coachFilter\" class=\"filter-select\">
                    <option value=\"\">Toutes</option>
                    <option value=\"with\">Avec coach</option>
                    <option value=\"without\">Sans coach</option>
                </select>
            </div>
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"teamCount\">{{ teams|length }}</span> LÉGIONS DISPONIBLES
        </div>
    </div>
    
    {% if teams|length > 0 %}
        <!-- Grille des équipes -->
        <div class=\"teams-grid\" id=\"teamsGrid\">
            {% for team in teams %}
                <div class=\"team-card\" 
                     data-id=\"{{ team.id }}\" 
                     data-name=\"{{ team.name|lower }}\" 
                     data-game=\"{{ team.game|lower }}\" 
                     data-date=\"{{ team.creationDate ? team.creationDate|date('U') : 0 }}\"
                     data-coach=\"{{ team.coachId ? 'yes' : 'no' }}\">
                    <div class=\"team-id\">#{{ team.id }}</div>
                    
                    <h2 class=\"team-name\">
                        {{ team.name|upper }}
                    </h2>
                    
                    <div class=\"team-info\">
                        <div class=\"info-item\">
                            <strong>🎮 JEU :</strong>
                            <span class=\"game-value\">{{ team.game }}</span>
                            <span class=\"game-icon\">{{ team.game|slice(0, 3)|upper }}</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>📅 CRÉATION :</strong>
                            <span class=\"date-value\">{{ team.creationDate ? team.creationDate|date('d/m/Y H:i') : 'N/A' }}</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>👑 COACH :</strong>
                            <span style=\"color: {% if team.coachId %}var(--fire-red){% else %}var(--blood-red){% endif %};\">
                                {{ team.coachId ? team.coachId : 'EN ATTENTE' }}
                            </span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>🏆 STATUT :</strong>
                            <span style=\"color: var(--fire-red); font-weight: bold;\">COMBAT READY</span>
                        </div>
                    </div>
                    
                    <div class=\"actions-container\">
                        <a href=\"{{ path('app_team_show', {'id': team.id}) }}\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails de l'équipe\">
                            👁️ ANALYSER
                        </a>
                        
                        <a href=\"{{ path('app_team_edit', {'id': team.id}) }}\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier l'équipe\">
                            ⚙️ MODIFIER
                        </a>
                        
                        <form method=\"post\" 
                              action=\"{{ path('app_team_delete', {'id': team.id}) }}\"
                              onsubmit=\"return confirm('💀 Êtes-vous sûr de vouloir dissoudre cette légion ? Cette action est irréversible !');\"
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ team.id) }}\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                💥 DISSOUDRE
                            </button>
                        </form>
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeTeams\">{{ teams|length }}</span> LÉGIONS ACTIVES • DERNIÈRE MISE À JOUR : {{ \"now\"|date('H:i:s') }}
            </p>
        </div>
        
    {% else %}
        <!-- Message quand aucune équipe n'existe -->
        <div class=\"no-teams\">
            <h2>⚠️ ARÈNE DÉSERTE ⚠️</h2>
            <p>Aucune légion n'a encore été créée. Forgez la première !</p>
            <a href=\"{{ path('app_team_new') }}\" class=\"add-team-btn\" style=\"display: inline-block; width: auto;\">
                🏆 FORGER LA PREMIÈRE LÉGION
            </a>
        </div>
    {% endif %}
</div>

<script>
    // Initialisation des variables
    let allTeams = Array.from(document.querySelectorAll('.team-card'));
    let currentTeams = [...allTeams];
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const sortBy = document.getElementById('sortBy');
    const coachFilter = document.getElementById('coachFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
    
    // Fonction pour mettre à jour le compteur
    function updateCounter(visibleCount) {
        teamCount.textContent = visibleCount;
        if (activeTeams) {
            activeTeams.textContent = visibleCount;
        }
        
        // Animation du compteur
        teamCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            teamCount.style.transform = 'scale(1)';
        }, 200);
    }
    
    // Fonction de recherche
    function searchTeams() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentTeams.forEach(team => {
            const teamName = team.dataset.name;
            const gameName = team.querySelector('.game-value').textContent.toLowerCase();
            
            if (searchTerm === '' || 
                teamName.includes(searchTerm) || 
                gameName.includes(searchTerm)) {
                team.classList.remove('hidden', 'filtered-out');
            } else {
                team.classList.add('filtered-out');
            }
        });
        
        applyFilters();
    }
    
    // Fonction pour appliquer tous les filtres
    function applyFilters() {
        let visibleTeams = [];
        
        currentTeams.forEach(team => {
            let isVisible = !team.classList.contains('filtered-out');
            
            // Filtre par jeu
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && team.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            // Filtre par coach
            const coachStatus = coachFilter.value;
            if (coachStatus === 'with' && team.dataset.coach === 'no') {
                isVisible = false;
            }
            if (coachStatus === 'without' && team.dataset.coach === 'yes') {
                isVisible = false;
            }
            
            if (isVisible) {
                team.classList.remove('hidden');
                visibleTeams.push(team);
            } else {
                team.classList.add('hidden');
            }
        });
        
        // Appliquer le tri
        sortTeams(visibleTeams);
        
        // Mettre à jour le compteur
        updateCounter(visibleTeams.length);
    }
    
    // Fonction de tri
    function sortTeams(teams) {
        const sortValue = sortBy.value;
        const [criteria, order] = sortValue.split('-');
        
        teams.sort((a, b) => {
            let aValue, bValue;
            
            switch(criteria) {
                case 'id':
                    aValue = parseInt(a.dataset.id);
                    bValue = parseInt(b.dataset.id);
                    break;
                case 'name':
                    aValue = a.dataset.name;
                    bValue = b.dataset.name;
                    break;
                case 'date':
                    aValue = parseInt(a.dataset.date);
                    bValue = parseInt(b.dataset.date);
                    break;
                default:
                    return 0;
            }
            
            // Comparaison
            if (typeof aValue === 'string') {
                return order === 'asc' ? 
                    aValue.localeCompare(bValue) : 
                    bValue.localeCompare(aValue);
            } else {
                return order === 'asc' ? 
                    aValue - bValue : 
                    bValue - aValue;
            }
        });
        
        // Réorganiser le DOM
        const grid = document.getElementById('teamsGrid');
        if (grid) {
            teams.forEach(team => {
                grid.appendChild(team);
            });
        }
    }
    
    // Événements
    searchInput.addEventListener('input', searchTeams);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchTeams();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    sortBy.addEventListener('change', applyFilters);
    coachFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        sortBy.value = 'id-asc';
        coachFilter.value = '';
        
        currentTeams.forEach(team => {
            team.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
    });
    
    // Gestion de la musique (version simple)
    const musicBtn = document.getElementById('musicBtn');
    const music = document.getElementById('esportMusic');
    let isPlaying = false;
    
    musicBtn.addEventListener('click', function() {
        if (!isPlaying) {
            music.play().then(() => {
                isPlaying = true;
                musicBtn.innerHTML = '🔊 MUSIQUE ON';
                musicBtn.style.background = 'linear-gradient(45deg, var(--blood-red), var(--fire-red))';
                musicBtn.classList.add('playing');
            }).catch(error => {
                console.log(\"Audio error:\", error);
                alert(\"Cliquez d'abord sur la page pour autoriser l'audio.\");
            });
        } else {
            music.pause();
            isPlaying = false;
            musicBtn.innerHTML = '🔇 MUSIQUE OFF';
            musicBtn.style.background = 'linear-gradient(45deg, #8b0000, #660000)';
            musicBtn.classList.remove('playing');
        }
    });
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.team-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            this.style.transform = `translateY(-10px) scale(1.02) rotateX(\${(y - rect.height/2)/20}deg) rotateY(\${(x - rect.width/2)/20}deg)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
        });
    });
    
    // Effet d'étincelle au clic
    document.addEventListener('click', function(e) {
        const spark = document.createElement('div');
        spark.style.position = 'fixed';
        spark.style.left = e.clientX + 'px';
        spark.style.top = e.clientY + 'px';
        spark.style.width = '10px';
        spark.style.height = '10px';
        spark.style.background = 'radial-gradient(circle, var(--blood-red) 0%, transparent 70%)';
        spark.style.borderRadius = '50%';
        spark.style.pointerEvents = 'none';
        spark.style.zIndex = '9999';
        spark.style.boxShadow = '0 0 10px var(--blood-red)';
        spark.style.animation = 'sparkFade 0.5s forwards';
        
        document.body.appendChild(spark);
        
        setTimeout(() => {
            spark.remove();
        }, 500);
    });
    
    // Ajouter l'animation CSS pour les étincelles
    const style = document.createElement('style');
    style.textContent = `
        @keyframes sparkFade {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
</script>
{% endblock %}", "team/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\team\\index.html.twig");
    }
}
