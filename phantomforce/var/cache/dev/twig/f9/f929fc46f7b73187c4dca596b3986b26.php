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
class __TwigTemplate_2959f9b6592dde5b699af21615af1881 extends Template
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
        --electric-blue: #00ffff;
        --cyber-green: #00ff00;
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
    
    .advanced-controls {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        padding: 1.5rem;
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .control-btn {
        position: relative;
        background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
        border: none;
        padding: 0.8rem 1.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        color: white;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 150px;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
    }
    
    .control-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .control-btn:hover::before {
        left: 100%;
    }
    
    .control-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
    }
    
    .export-btn {
        background: linear-gradient(45deg, #0066cc, #004499);
        box-shadow: 0 0 15px rgba(0, 102, 204, 0.5);
    }
    
    .export-btn:hover {
        box-shadow: 0 0 25px rgba(0, 102, 204, 0.8);
    }
    
    .print-btn {
        background: linear-gradient(45deg, #009900, #006600);
        box-shadow: 0 0 15px rgba(0, 153, 0, 0.5);
    }
    
    .print-btn:hover {
        box-shadow: 0 0 25px rgba(0, 153, 0, 0.8);
    }
    
    .stats-btn {
        background: linear-gradient(45deg, #9900cc, #660099);
        box-shadow: 0 0 15px rgba(153, 0, 204, 0.5);
    }
    
    .stats-btn:hover {
        box-shadow: 0 0 25px rgba(153, 0, 204, 0.8);
    }
    
    .bulk-btn {
        background: linear-gradient(45deg, #cc9900, #996600);
        box-shadow: 0 0 15px rgba(204, 153, 0, 0.5);
    }
    
    .bulk-btn:hover {
        box-shadow: 0 0 25px rgba(204, 153, 0, 0.8);
    }
    
    .controls-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 2rem;
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
    
    /* Styles pour les modales et popups */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(5px);
    }
    
    .modal-overlay.active {
        display: flex;
        animation: fadeInModal 0.3s ease;
    }
    
    @keyframes fadeInModal {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .modal-content {
        background: linear-gradient(135deg, rgba(26, 0, 0, 0.95), rgba(51, 0, 0, 0.95));
        border-radius: 20px;
        padding: 2rem;
        max-width: 500px;
        width: 90%;
        border: 2px solid var(--blood-red);
        box-shadow: 0 0 50px rgba(255, 0, 0, 0.5);
        position: relative;
    }
    
    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .modal-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .close-modal {
        background: none;
        border: none;
        color: var(--blood-red);
        font-size: 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        line-height: 1;
    }
    
    .close-modal:hover {
        transform: scale(1.2);
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
    }
    
    .modal-body {
        margin-bottom: 2rem;
    }
    
    .modal-options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin: 1rem 0;
    }
    
    .modal-option {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 0, 0, 0.3);
        border-radius: 10px;
        padding: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .modal-option:hover {
        background: rgba(255, 0, 0, 0.2);
        border-color: var(--blood-red);
        transform: translateY(-3px);
    }
    
    .modal-option.selected {
        background: rgba(255, 0, 0, 0.3);
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
    }
    
    .modal-footer {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .modal-btn {
        padding: 0.8rem 2rem;
        border: none;
        border-radius: 10px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .modal-btn.confirm {
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        color: white;
    }
    
    .modal-btn.cancel {
        background: linear-gradient(45deg, #333333, #666666);
        color: white;
    }
    
    .modal-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
    }
    
    /* Styles pour les notifications */
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 2rem;
        border-radius: 10px;
        background: linear-gradient(45deg, rgba(0, 100, 0, 0.9), rgba(0, 150, 0, 0.9));
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        z-index: 9999;
        transform: translateX(120%);
        transition: transform 0.3s ease;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(0, 255, 0, 0.3);
    }
    
    .notification.show {
        transform: translateX(0);
    }
    
    .notification.error {
        background: linear-gradient(45deg, rgba(100, 0, 0, 0.9), rgba(150, 0, 0, 0.9));
    }
    
    .notification.info {
        background: linear-gradient(45deg, rgba(0, 0, 100, 0.9), rgba(0, 0, 150, 0.9));
    }
    
    /* Styles pour l'impression */
    @media print {
        body {
            background: white !important;
            color: black !important;
        }
        
        .header-glow, .controls-container, .advanced-controls, .music-control-btn, 
        .add-team-btn, .filters-container, .action-btn, .floating-elements {
            display: none !important;
        }
        
        .team-card {
            break-inside: avoid;
            border: 1px solid #ccc !important;
            box-shadow: none !important;
            background: white !important;
            color: black !important;
            margin-bottom: 20px;
        }
        
        .teams-grid {
            display: block !important;
        }
        
        .team-name {
            color: black !important;
            text-shadow: none !important;
        }
        
        .team-id, .game-icon {
            border-color: #ccc !important;
            color: #666 !important;
        }
    }
    
    /* Styles pour la sélection multiple */
    .team-card.selected {
        border-color: var(--electric-blue);
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
    }
    
    .selection-checkbox {
        position: absolute;
        top: 1rem;
        left: 1rem;
        width: 20px;
        height: 20px;
        accent-color: var(--blood-red);
        cursor: pointer;
        transform: scale(1.2);
    }
    
    .selection-mode-active .selection-checkbox {
        display: block !important;
    }
    
    .selection-mode-active .team-card {
        cursor: pointer;
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
        
        .advanced-controls {
            flex-direction: column;
            align-items: center;
        }
        
        .control-btn {
            min-width: 100%;
            margin-bottom: 0.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1023
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

        // line 1024
        yield "<div class=\"gaming-container\">
    
    <!-- Audio pour la musique (caché pour l'instant) -->
    <audio id=\"esportMusic\" loop style=\"display: none;\">
        <source src=\"";
        // line 1028
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("music/music.mp3"), "html", null, true);
        yield "\" type=\"audio/mpeg\">
        Votre navigateur ne supporte pas l'audio.
    </audio>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 1034
        $context["icons"] = ["⚔️", "🔥", "💀", "👑", "🛡️", "🎯", "🏆", "💥", "⚡", "⭐"];
        // line 1035
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1036
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1036, $this->source); })())));
            // line 1037
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 1038
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 1039
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 1040
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 1041
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 1041, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 1042
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 1042, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 1043
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 1043, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 1045
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1045, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 1045, $this->source); })()), [], "array", false, false, false, 1045), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PHANTOM FORCE - ÉQUIPES</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            COMMANDEZ VOS LÉGIONS • ";
        // line 1054
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1054, $this->source); })())), "html", null, true);
        yield " ÉQUIPES EN COMBAT
        </p>
    </div>
    
    <!-- Nouveaux contrôles avancés -->
    <div class=\"advanced-controls\">
        <button id=\"exportBtn\" class=\"control-btn export-btn\">
            📤 EXPORTER LES DONNÉES
        </button>
        
        <button id=\"printBtn\" class=\"control-btn print-btn\">
            🖨️ IMPRIMER LA LISTE
        </button>
        
        <button id=\"statsBtn\" class=\"control-btn stats-btn\">
            📊 STATISTIQUES
        </button>
        
        <button id=\"bulkActionsBtn\" class=\"control-btn bulk-btn\">
            🎯 ACTIONS GROUPÉES
        </button>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
    ";
        // line 1079
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 1080
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
            yield "\" class=\"add-team-btn\">
            ⚔️ CRÉER UNE NOUVELLE LÉGION
        </a>
         ";
        }
        // line 1084
        yield "        
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
        // line 1102
        $context["games"] = [];
        // line 1103
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 1104
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1104), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1104, $this->source); })()))) {
                // line 1105
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1105, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1105)]);
                // line 1106
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1106), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1106), "html", null, true);
                yield "</option>
                        ";
            }
            // line 1108
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1109
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
        // line 1137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1137, $this->source); })())), "html", null, true);
        yield "</span> LÉGIONS DISPONIBLES
        </div>
    </div>
    
    ";
        // line 1141
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1141, $this->source); })())) > 0)) {
            // line 1142
            yield "        <!-- Grille des équipes -->
        <div class=\"teams-grid\" id=\"teamsGrid\">
            ";
            // line 1144
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 1145
                yield "                <div class=\"team-card\" 
                     data-id=\"";
                // line 1146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1146), "html", null, true);
                yield "\" 
                     data-name=\"";
                // line 1147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 1147)), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 1148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1148)), "html", null, true);
                yield "\" 
                     data-date=\"";
                // line 1149
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 1149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 1149), "U"), "html", null, true)) : (0));
                yield "\"
                     data-coach=\"";
                // line 1150
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 1150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\">
                    <!-- Checkbox pour sélection multiple -->
                    <input type=\"checkbox\" class=\"selection-checkbox\" style=\"display: none;\">
                    
                    <div class=\"team-id\">#";
                // line 1154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1154), "html", null, true);
                yield "</div>
                    
                    <h2 class=\"team-name\">
                        ";
                // line 1157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 1157)), "html", null, true);
                yield "
                    </h2>
                    
                    <div class=\"team-info\">
                        <div class=\"info-item\">
                            <strong>🎮 JEU :</strong>
                            <span class=\"game-value\">";
                // line 1163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1163), "html", null, true);
                yield "</span>
                            <span class=\"game-icon\">";
                // line 1164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1164), 0, 3)), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>📅 CRÉATION :</strong>
                            <span class=\"date-value\">";
                // line 1169
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 1169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 1169), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>👑 COACH :</strong>
                            <span style=\"color: ";
                // line 1174
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 1174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "var(--fire-red)";
                } else {
                    yield "var(--blood-red)";
                }
                yield ";\">
                                ";
                // line 1175
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 1175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 1175), "html", null, true)) : ("EN ATTENTE"));
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
                // line 1186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1186)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails de l'équipe\">
                            👁️ ANALYSER
                        </a>
                         ";
                // line 1191
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 1192
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1192)]), "html", null, true);
                    yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier l'équipe\">
                            ⚙️ MODIFIER
                        </a>
                        ";
                }
                // line 1198
                yield "                        <form method=\"post\" 
                              action=\"";
                // line 1199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1199)]), "html", null, true);
                yield "\"
                              onsubmit=\"return confirm('💀 Êtes-vous sûr de vouloir dissoudre cette légion ? Cette action est irréversible !');\"
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 1202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1202))), "html", null, true);
                yield "\">
                            ";
                // line 1203
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 1204
                    yield "                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                💥 DISSOUDRE
                            </button>
                            ";
                }
                // line 1208
                yield "                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1212
            yield "        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeTeams\">";
            // line 1217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1217, $this->source); })())), "html", null, true);
            yield "</span> LÉGIONS ACTIVES • DERNIÈRE MISE À JOUR : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 1222
            yield "        <!-- Message quand aucune équipe n'existe -->
        <div class=\"no-teams\">
            <h2>⚠️ ARÈNE DÉSERTE ⚠️</h2>
            <p>Aucune légion n'a encore été créée. Forgez la première !</p>
            <a href=\"";
            // line 1226
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
            yield "\" class=\"add-team-btn\" style=\"display: inline-block; width: auto;\">
                🏆 FORGER LA PREMIÈRE LÉGION
            </a>
        </div>
    ";
        }
        // line 1231
        yield "</div>

<!-- Modal pour l'export -->
<div id=\"exportModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title\">📤 EXPORTER LES DONNÉES</h3>
            <button class=\"close-modal\" onclick=\"closeModal('exportModal')\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <p>Sélectionnez le format d'exportation :</p>
            <div class=\"modal-options\">
                <div class=\"modal-option\" data-format=\"csv\">
                    📊 CSV (Excel)
                    <small>Compatible avec Excel, Numbers, Google Sheets</small>
                </div>
                <div class=\"modal-option\" data-format=\"json\">
                    🔧 JSON
                    <small>Format structuré pour les développeurs</small>
                </div>
                <div class=\"modal-option\" data-format=\"pdf\">
                    📄 PDF
                    <small>Document formaté pour l'impression</small>
                </div>
            </div>
            <div style=\"margin-top: 1rem;\">
                <label>
                    <input type=\"checkbox\" id=\"exportAll\" checked> Exporter toutes les équipes
                </label>
                <br>
                <label>
                    <input type=\"checkbox\" id=\"exportSelected\" disabled> Exporter uniquement la sélection
                </label>
            </div>
        </div>
        <div class=\"modal-footer\">
            <button class=\"modal-btn cancel\" onclick=\"closeModal('exportModal')\">Annuler</button>
            <button class=\"modal-btn confirm\" onclick=\"exportData()\">Exporter</button>
        </div>
    </div>
</div>

<!-- Modal pour les statistiques -->
<div id=\"statsModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title\">📊 STATISTIQUES</h3>
            <button class=\"close-modal\" onclick=\"closeModal('statsModal')\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <div id=\"statsContent\">
                <!-- Les statistiques seront générées dynamiquement -->
            </div>
        </div>
        <div class=\"modal-footer\">
            <button class=\"modal-btn cancel\" onclick=\"closeModal('statsModal')\">Fermer</button>
        </div>
    </div>
</div>

<!-- Modal pour les actions groupées -->
<div id=\"bulkModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title\">🎯 ACTIONS GROUPÉES</h3>
            <button class=\"close-modal\" onclick=\"closeModal('bulkModal')\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <p>Sélectionnez une action à effectuer sur plusieurs équipes :</p>
            <div class=\"modal-options\">
                <div class=\"modal-option\" data-action=\"select\">
                    ✅ Sélection multiple
                    <small>Activer/désactiver le mode sélection</small>
                </div>
                <div class=\"modal-option\" data-action=\"delete\">
                    🗑️ Suppression groupée
                    <small>Supprimer plusieurs équipes</small>
                </div>
                <div class=\"modal-option\" data-action=\"export\">
                    📤 Export groupé
                    <small>Exporter les équipes sélectionnées</small>
                </div>
                <div class=\"modal-option\" data-action=\"duplicate\">
                    📝 Dupliquer
                    <small>Créer des copies des équipes</small>
                </div>
            </div>
            <div id=\"selectedCount\" style=\"margin-top: 1rem; color: var(--electric-blue); display: none;\">
                <strong>0</strong> équipes sélectionnées
            </div>
        </div>
        <div class=\"modal-footer\">
            <button class=\"modal-btn cancel\" onclick=\"closeModal('bulkModal')\">Annuler</button>
            <button class=\"modal-btn confirm\" onclick=\"executeBulkAction()\">Exécuter</button>
        </div>
    </div>
</div>

<!-- Notification -->
<div id=\"notification\" class=\"notification\"></div>

<script>
    // Initialisation des variables
    let allTeams = Array.from(document.querySelectorAll('.team-card'));
    let currentTeams = [...allTeams];
    let selectedTeams = new Set();
    let isSelectionMode = false;
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const sortBy = document.getElementById('sortBy');
    const coachFilter = document.getElementById('coachFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
    const exportBtn = document.getElementById('exportBtn');
    const printBtn = document.getElementById('printBtn');
    const statsBtn = document.getElementById('statsBtn');
    const bulkActionsBtn = document.getElementById('bulkActionsBtn');
    
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
    
    // Gestion de la musique
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
                showNotification(\"Cliquez d'abord sur la page pour autoriser l'audio.\", \"error\");
            });
        } else {
            music.pause();
            isPlaying = false;
            musicBtn.innerHTML = '🔇 MUSIQUE OFF';
            musicBtn.style.background = 'linear-gradient(45deg, #8b0000, #660000)';
            musicBtn.classList.remove('playing');
        }
    });
    
    // Fonctions pour les modales
    function openModal(modalId) {
        document.getElementById(modalId).classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal(modalId) {
        document.getElementById(modalId).classList.remove('active');
        document.body.style.overflow = 'auto';
        
        // Réinitialiser les sélections dans les modales
        const options = document.querySelectorAll('.modal-option');
        options.forEach(option => {
            option.classList.remove('selected');
        });
    }
    
    // Fonction pour afficher les notifications
    function showNotification(message, type = 'success') {
        const notification = document.getElementById('notification');
        notification.textContent = message;
        notification.className = 'notification ' + type;
        notification.classList.add('show');
        
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }
    
    // Gestion de l'export
    exportBtn.addEventListener('click', () => {
        openModal('exportModal');
    });
    
    // Gestion de l'impression
    printBtn.addEventListener('click', () => {
        // Ajouter un en-tête d'impression
        const printContent = `
            <!DOCTYPE html>
            <html>
            <head>
                <title>Liste des Équipes E-sport - PHANTOM FORCE</title>
                <style>
                    body { font-family: Arial, sans-serif; margin: 20px; }
                    h1 { color: #ff0000; }
                    .team { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
                    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
                    th { background-color: #f2f2f2; }
                </style>
            </head>
            <body>
                <h1>📊 LISTE DES ÉQUIPES E-SPORT - PHANTOM FORCE</h1>
                <p>Date d'exportation : \${new Date().toLocaleDateString()}</p>
                <p>Nombre total d'équipes : \${allTeams.length}</p>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Jeu</th>
                            <th>Date de création</th>
                            <th>Coach</th>
                        </tr>
                    </thead>
                    <tbody>
                        \${Array.from(document.querySelectorAll('.team-card:not(.hidden)')).map(team => {
                            const id = team.dataset.id;
                            const name = team.querySelector('.team-name').textContent.trim();
                            const game = team.querySelector('.game-value').textContent;
                            const date = team.querySelector('.date-value').textContent;
                            const coach = team.querySelector('.info-item:nth-child(3) span').textContent;
                            
                            return `
                                <tr>
                                    <td>\${id}</td>
                                    <td>\${name}</td>
                                    <td>\${game}</td>
                                    <td>\${date}</td>
                                    <td>\${coach}</td>
                                </tr>
                            `;
                        }).join('')}
                    </tbody>
                </table>
            </body>
            </html>
        `;
        
        const printWindow = window.open('', '_blank');
        printWindow.document.write(printContent);
        printWindow.document.close();
        printWindow.print();
        
        showNotification(\"Impression lancée\", \"success\");
    });
    
    // Gestion des statistiques
    statsBtn.addEventListener('click', () => {
        openModal('statsModal');
        
        // Calculer les statistiques
        const totalTeams = allTeams.length;
        const visibleTeams = document.querySelectorAll('.team-card:not(.hidden)').length;
        
        // Statistiques par jeu
        const games = {};
        allTeams.forEach(team => {
            const game = team.querySelector('.game-value').textContent;
            games[game] = (games[game] || 0) + 1;
        });
        
        // Statistiques par coach
        let withCoach = 0;
        let withoutCoach = 0;
        allTeams.forEach(team => {
            const coachStatus = team.dataset.coach;
            if (coachStatus === 'yes') {
                withCoach++;
            } else {
                withoutCoach++;
            }
        });
        
        // Générer le contenu HTML
        const statsContent = document.getElementById('statsContent');
        statsContent.innerHTML = `
            <div style=\"margin-bottom: 1rem;\">
                <h4 style=\"color: var(--fire-red);\">📈 STATISTIQUES GÉNÉRALES</h4>
                <p>Total des équipes : <strong>\${totalTeams}</strong></p>
                <p>Équipes visibles : <strong>\${visibleTeams}</strong></p>
                <p>Avec coach : <strong>\${withCoach}</strong></p>
                <p>Sans coach : <strong>\${withoutCoach}</strong></p>
            </div>
            <div>
                <h4 style=\"color: var(--fire-red);\">🎮 RÉPARTITION PAR JEU</h4>
                <ul>
                    \${Object.entries(games).map(([game, count]) => `
                        <li>\${game} : <strong>\${count}</strong> équipes (\${Math.round((count/totalTeams)*100)}%)</li>
                    `).join('')}
                </ul>
            </div>
        `;
    });
    
    // Gestion des actions groupées
    bulkActionsBtn.addEventListener('click', () => {
        openModal('bulkModal');
        updateSelectedCount();
    });
    
    // Mise à jour du compteur de sélection
    function updateSelectedCount() {
        const selectedCountElement = document.getElementById('selectedCount');
        if (selectedCountElement) {
            selectedCountElement.innerHTML = `<strong>\${selectedTeams.size}</strong> équipes sélectionnées`;
            selectedCountElement.style.display = selectedTeams.size > 0 ? 'block' : 'none';
        }
    }
    
    // Activation/désactivation du mode sélection
    function toggleSelectionMode() {
        isSelectionMode = !isSelectionMode;
        document.body.classList.toggle('selection-mode-active', isSelectionMode);
        
        const checkboxes = document.querySelectorAll('.selection-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.style.display = isSelectionMode ? 'block' : 'none';
        });
        
        // Ajouter/supprimer l'événement de clic sur les cartes
        allTeams.forEach(team => {
            if (isSelectionMode) {
                team.addEventListener('click', handleTeamSelection);
            } else {
                team.removeEventListener('click', handleTeamSelection);
                team.classList.remove('selected');
                const checkbox = team.querySelector('.selection-checkbox');
                if (checkbox) checkbox.checked = false;
            }
        });
        
        selectedTeams.clear();
        updateSelectedCount();
        
        showNotification(
            isSelectionMode ? 
            \"Mode sélection activé - Cliquez sur les cartes pour sélectionner/désélectionner\" : 
            \"Mode sélection désactivé\",
            \"info\"
        );
    }
    
    // Gestion de la sélection d'une équipe
    function handleTeamSelection(e) {
        // Empêcher la sélection si on clique sur un lien ou un bouton
        if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON' || e.target.closest('a') || e.target.closest('button')) {
            return;
        }
        
        const team = e.currentTarget;
        const checkbox = team.querySelector('.selection-checkbox');
        const teamId = team.dataset.id;
        
        if (checkbox.checked) {
            checkbox.checked = false;
            team.classList.remove('selected');
            selectedTeams.delete(teamId);
        } else {
            checkbox.checked = true;
            team.classList.add('selected');
            selectedTeams.add(teamId);
        }
        
        updateSelectedCount();
    }
    
    // Gestion des sélections dans les modales
    document.querySelectorAll('.modal-option').forEach(option => {
        option.addEventListener('click', function() {
            const parent = this.parentElement;
            parent.querySelectorAll('.modal-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            this.classList.add('selected');
        });
    });
    
    // Fonction d'export des données
    function exportData() {
        const selectedOption = document.querySelector('.modal-option.selected');
        if (!selectedOption) {
            showNotification(\"Veuillez sélectionner un format d'export\", \"error\");
            return;
        }
        
        const format = selectedOption.dataset.format;
        const exportAll = document.getElementById('exportAll').checked;
        const exportSelected = document.getElementById('exportSelected').checked;
        
        // Déterminer quelles équipes exporter
        let teamsToExport;
        if (exportSelected && selectedTeams.size > 0) {
            teamsToExport = Array.from(allTeams).filter(team => 
                selectedTeams.has(team.dataset.id)
            );
        } else {
            teamsToExport = Array.from(document.querySelectorAll('.team-card:not(.hidden)'));
        }
        
        // Préparer les données
        const data = teamsToExport.map(team => {
            return {
                id: team.dataset.id,
                name: team.querySelector('.team-name').textContent.trim(),
                game: team.querySelector('.game-value').textContent,
                creationDate: team.querySelector('.date-value').textContent,
                coach: team.querySelector('.info-item:nth-child(3) span').textContent,
                status: \"COMBAT READY\"
            };
        });
        
        // Exporter selon le format
        switch(format) {
            case 'csv':
                exportToCSV(data);
                break;
            case 'json':
                exportToJSON(data);
                break;
            case 'pdf':
                exportToPDF(data);
                break;
        }
        
        closeModal('exportModal');
    }
    
    // Export en CSV
    function exportToCSV(data) {
        const headers = ['ID', 'Nom', 'Jeu', 'Date de création', 'Coach', 'Statut'];
        const csvRows = [
            headers.join(','),
            ...data.map(row => [
                row.id,
                `\"\${row.name}\"`,
                `\"\${row.game}\"`,
                `\"\${row.creationDate}\"`,
                `\"\${row.coach}\"`,
                `\"\${row.status}\"`
            ].join(','))
        ];
        
        const csvString = csvRows.join('\\n');
        const blob = new Blob([csvString], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = `equipes-esport-\${new Date().toISOString().slice(0,10)}.csv`;
        link.click();
        
        showNotification(\"Export CSV terminé\", \"success\");
    }
    
    // Export en JSON
    function exportToJSON(data) {
        const jsonString = JSON.stringify(data, null, 2);
        const blob = new Blob([jsonString], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = `equipes-esport-\${new Date().toISOString().slice(0,10)}.json`;
        link.click();
        
        showNotification(\"Export JSON terminé\", \"success\");
    }
    
    // Export en PDF (simulé)
    function exportToPDF(data) {
        // Dans un environnement réel, vous utiliseriez une bibliothèque comme jsPDF
        // Ici, nous simulons avec un CSV pour l'exemple
        showNotification(\"Export PDF simulé - Utilisez l'export CSV pour l'instant\", \"info\");
        exportToCSV(data);
    }
    
    // Exécution des actions groupées
    function executeBulkAction() {
        const selectedOption = document.querySelector('#bulkModal .modal-option.selected');
        if (!selectedOption) {
            showNotification(\"Veuillez sélectionner une action\", \"error\");
            return;
        }
        
        const action = selectedOption.dataset.action;
        
        switch(action) {
            case 'select':
                toggleSelectionMode();
                break;
            case 'delete':
                if (selectedTeams.size === 0) {
                    showNotification(\"Aucune équipe sélectionnée\", \"error\");
                    return;
                }
                if (confirm(`Êtes-vous sûr de vouloir supprimer \${selectedTeams.size} équipe(s) ?`)) {
                    // Dans un environnement réel, vous enverriez une requête au serveur
                    showNotification(`Suppression de \${selectedTeams.size} équipe(s) simulée`, \"info\");
                }
                break;
            case 'export':
                if (selectedTeams.size === 0) {
                    showNotification(\"Aucune équipe sélectionnée\", \"error\");
                    return;
                }
                openModal('exportModal');
                document.getElementById('exportAll').checked = false;
                document.getElementById('exportSelected').checked = true;
                break;
            case 'duplicate':
                if (selectedTeams.size === 0) {
                    showNotification(\"Aucune équipe sélectionnée\", \"error\");
                    return;
                }
                showNotification(`Duplication de \${selectedTeams.size} équipe(s) simulée`, \"info\");
                break;
        }
        
        closeModal('bulkModal');
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
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.team-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            if (isSelectionMode) return;
            
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            this.style.transform = `translateY(-10px) scale(1.02) rotateX(\${(y - rect.height/2)/20}deg) rotateY(\${(x - rect.width/2)/20}deg)`;
        });
        
        card.addEventListener('mouseleave', function() {
            if (isSelectionMode) return;
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
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        
        // Ajouter l'animation CSS pour les étincelles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes sparkFade {
                0% { transform: scale(1); opacity: 1; }
                100% { transform: scale(3); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
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
        return array (  1504 => 1231,  1496 => 1226,  1490 => 1222,  1480 => 1217,  1473 => 1212,  1464 => 1208,  1458 => 1204,  1456 => 1203,  1452 => 1202,  1446 => 1199,  1443 => 1198,  1433 => 1192,  1431 => 1191,  1423 => 1186,  1409 => 1175,  1401 => 1174,  1393 => 1169,  1385 => 1164,  1381 => 1163,  1372 => 1157,  1366 => 1154,  1359 => 1150,  1355 => 1149,  1351 => 1148,  1347 => 1147,  1343 => 1146,  1340 => 1145,  1336 => 1144,  1332 => 1142,  1330 => 1141,  1323 => 1137,  1293 => 1109,  1287 => 1108,  1279 => 1106,  1276 => 1105,  1273 => 1104,  1268 => 1103,  1266 => 1102,  1246 => 1084,  1238 => 1080,  1236 => 1079,  1208 => 1054,  1200 => 1048,  1191 => 1045,  1186 => 1043,  1182 => 1042,  1178 => 1041,  1175 => 1040,  1172 => 1039,  1169 => 1038,  1166 => 1037,  1163 => 1036,  1158 => 1035,  1156 => 1034,  1147 => 1028,  1141 => 1024,  1128 => 1023,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
        --electric-blue: #00ffff;
        --cyber-green: #00ff00;
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
    
    .advanced-controls {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        padding: 1.5rem;
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .control-btn {
        position: relative;
        background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
        border: none;
        padding: 0.8rem 1.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        color: white;
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 150px;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
    }
    
    .control-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
        z-index: -1;
    }
    
    .control-btn:hover::before {
        left: 100%;
    }
    
    .control-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
    }
    
    .export-btn {
        background: linear-gradient(45deg, #0066cc, #004499);
        box-shadow: 0 0 15px rgba(0, 102, 204, 0.5);
    }
    
    .export-btn:hover {
        box-shadow: 0 0 25px rgba(0, 102, 204, 0.8);
    }
    
    .print-btn {
        background: linear-gradient(45deg, #009900, #006600);
        box-shadow: 0 0 15px rgba(0, 153, 0, 0.5);
    }
    
    .print-btn:hover {
        box-shadow: 0 0 25px rgba(0, 153, 0, 0.8);
    }
    
    .stats-btn {
        background: linear-gradient(45deg, #9900cc, #660099);
        box-shadow: 0 0 15px rgba(153, 0, 204, 0.5);
    }
    
    .stats-btn:hover {
        box-shadow: 0 0 25px rgba(153, 0, 204, 0.8);
    }
    
    .bulk-btn {
        background: linear-gradient(45deg, #cc9900, #996600);
        box-shadow: 0 0 15px rgba(204, 153, 0, 0.5);
    }
    
    .bulk-btn:hover {
        box-shadow: 0 0 25px rgba(204, 153, 0, 0.8);
    }
    
    .controls-container {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-bottom: 2rem;
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
    
    /* Styles pour les modales et popups */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(5px);
    }
    
    .modal-overlay.active {
        display: flex;
        animation: fadeInModal 0.3s ease;
    }
    
    @keyframes fadeInModal {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .modal-content {
        background: linear-gradient(135deg, rgba(26, 0, 0, 0.95), rgba(51, 0, 0, 0.95));
        border-radius: 20px;
        padding: 2rem;
        max-width: 500px;
        width: 90%;
        border: 2px solid var(--blood-red);
        box-shadow: 0 0 50px rgba(255, 0, 0, 0.5);
        position: relative;
    }
    
    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .modal-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .close-modal {
        background: none;
        border: none;
        color: var(--blood-red);
        font-size: 2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        line-height: 1;
    }
    
    .close-modal:hover {
        transform: scale(1.2);
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
    }
    
    .modal-body {
        margin-bottom: 2rem;
    }
    
    .modal-options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin: 1rem 0;
    }
    
    .modal-option {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 0, 0, 0.3);
        border-radius: 10px;
        padding: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .modal-option:hover {
        background: rgba(255, 0, 0, 0.2);
        border-color: var(--blood-red);
        transform: translateY(-3px);
    }
    
    .modal-option.selected {
        background: rgba(255, 0, 0, 0.3);
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
    }
    
    .modal-footer {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 2rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .modal-btn {
        padding: 0.8rem 2rem;
        border: none;
        border-radius: 10px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .modal-btn.confirm {
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        color: white;
    }
    
    .modal-btn.cancel {
        background: linear-gradient(45deg, #333333, #666666);
        color: white;
    }
    
    .modal-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
    }
    
    /* Styles pour les notifications */
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 2rem;
        border-radius: 10px;
        background: linear-gradient(45deg, rgba(0, 100, 0, 0.9), rgba(0, 150, 0, 0.9));
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        z-index: 9999;
        transform: translateX(120%);
        transition: transform 0.3s ease;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(0, 255, 0, 0.3);
    }
    
    .notification.show {
        transform: translateX(0);
    }
    
    .notification.error {
        background: linear-gradient(45deg, rgba(100, 0, 0, 0.9), rgba(150, 0, 0, 0.9));
    }
    
    .notification.info {
        background: linear-gradient(45deg, rgba(0, 0, 100, 0.9), rgba(0, 0, 150, 0.9));
    }
    
    /* Styles pour l'impression */
    @media print {
        body {
            background: white !important;
            color: black !important;
        }
        
        .header-glow, .controls-container, .advanced-controls, .music-control-btn, 
        .add-team-btn, .filters-container, .action-btn, .floating-elements {
            display: none !important;
        }
        
        .team-card {
            break-inside: avoid;
            border: 1px solid #ccc !important;
            box-shadow: none !important;
            background: white !important;
            color: black !important;
            margin-bottom: 20px;
        }
        
        .teams-grid {
            display: block !important;
        }
        
        .team-name {
            color: black !important;
            text-shadow: none !important;
        }
        
        .team-id, .game-icon {
            border-color: #ccc !important;
            color: #666 !important;
        }
    }
    
    /* Styles pour la sélection multiple */
    .team-card.selected {
        border-color: var(--electric-blue);
        box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
    }
    
    .selection-checkbox {
        position: absolute;
        top: 1rem;
        left: 1rem;
        width: 20px;
        height: 20px;
        accent-color: var(--blood-red);
        cursor: pointer;
        transform: scale(1.2);
    }
    
    .selection-mode-active .selection-checkbox {
        display: block !important;
    }
    
    .selection-mode-active .team-card {
        cursor: pointer;
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
        
        .advanced-controls {
            flex-direction: column;
            align-items: center;
        }
        
        .control-btn {
            min-width: 100%;
            margin-bottom: 0.5rem;
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
    
    <!-- Nouveaux contrôles avancés -->
    <div class=\"advanced-controls\">
        <button id=\"exportBtn\" class=\"control-btn export-btn\">
            📤 EXPORTER LES DONNÉES
        </button>
        
        <button id=\"printBtn\" class=\"control-btn print-btn\">
            🖨️ IMPRIMER LA LISTE
        </button>
        
        <button id=\"statsBtn\" class=\"control-btn stats-btn\">
            📊 STATISTIQUES
        </button>
        
        <button id=\"bulkActionsBtn\" class=\"control-btn bulk-btn\">
            🎯 ACTIONS GROUPÉES
        </button>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
    {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
        <a href=\"{{ path('app_team_new') }}\" class=\"add-team-btn\">
            ⚔️ CRÉER UNE NOUVELLE LÉGION
        </a>
         {% endif %}
        
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
                    <!-- Checkbox pour sélection multiple -->
                    <input type=\"checkbox\" class=\"selection-checkbox\" style=\"display: none;\">
                    
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
                         {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
                        <a href=\"{{ path('app_team_edit', {'id': team.id}) }}\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier l'équipe\">
                            ⚙️ MODIFIER
                        </a>
                        {% endif %}
                        <form method=\"post\" 
                              action=\"{{ path('app_team_delete', {'id': team.id}) }}\"
                              onsubmit=\"return confirm('💀 Êtes-vous sûr de vouloir dissoudre cette légion ? Cette action est irréversible !');\"
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ team.id) }}\">
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                💥 DISSOUDRE
                            </button>
                            {% endif %}
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

<!-- Modal pour l'export -->
<div id=\"exportModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title\">📤 EXPORTER LES DONNÉES</h3>
            <button class=\"close-modal\" onclick=\"closeModal('exportModal')\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <p>Sélectionnez le format d'exportation :</p>
            <div class=\"modal-options\">
                <div class=\"modal-option\" data-format=\"csv\">
                    📊 CSV (Excel)
                    <small>Compatible avec Excel, Numbers, Google Sheets</small>
                </div>
                <div class=\"modal-option\" data-format=\"json\">
                    🔧 JSON
                    <small>Format structuré pour les développeurs</small>
                </div>
                <div class=\"modal-option\" data-format=\"pdf\">
                    📄 PDF
                    <small>Document formaté pour l'impression</small>
                </div>
            </div>
            <div style=\"margin-top: 1rem;\">
                <label>
                    <input type=\"checkbox\" id=\"exportAll\" checked> Exporter toutes les équipes
                </label>
                <br>
                <label>
                    <input type=\"checkbox\" id=\"exportSelected\" disabled> Exporter uniquement la sélection
                </label>
            </div>
        </div>
        <div class=\"modal-footer\">
            <button class=\"modal-btn cancel\" onclick=\"closeModal('exportModal')\">Annuler</button>
            <button class=\"modal-btn confirm\" onclick=\"exportData()\">Exporter</button>
        </div>
    </div>
</div>

<!-- Modal pour les statistiques -->
<div id=\"statsModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title\">📊 STATISTIQUES</h3>
            <button class=\"close-modal\" onclick=\"closeModal('statsModal')\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <div id=\"statsContent\">
                <!-- Les statistiques seront générées dynamiquement -->
            </div>
        </div>
        <div class=\"modal-footer\">
            <button class=\"modal-btn cancel\" onclick=\"closeModal('statsModal')\">Fermer</button>
        </div>
    </div>
</div>

<!-- Modal pour les actions groupées -->
<div id=\"bulkModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h3 class=\"modal-title\">🎯 ACTIONS GROUPÉES</h3>
            <button class=\"close-modal\" onclick=\"closeModal('bulkModal')\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <p>Sélectionnez une action à effectuer sur plusieurs équipes :</p>
            <div class=\"modal-options\">
                <div class=\"modal-option\" data-action=\"select\">
                    ✅ Sélection multiple
                    <small>Activer/désactiver le mode sélection</small>
                </div>
                <div class=\"modal-option\" data-action=\"delete\">
                    🗑️ Suppression groupée
                    <small>Supprimer plusieurs équipes</small>
                </div>
                <div class=\"modal-option\" data-action=\"export\">
                    📤 Export groupé
                    <small>Exporter les équipes sélectionnées</small>
                </div>
                <div class=\"modal-option\" data-action=\"duplicate\">
                    📝 Dupliquer
                    <small>Créer des copies des équipes</small>
                </div>
            </div>
            <div id=\"selectedCount\" style=\"margin-top: 1rem; color: var(--electric-blue); display: none;\">
                <strong>0</strong> équipes sélectionnées
            </div>
        </div>
        <div class=\"modal-footer\">
            <button class=\"modal-btn cancel\" onclick=\"closeModal('bulkModal')\">Annuler</button>
            <button class=\"modal-btn confirm\" onclick=\"executeBulkAction()\">Exécuter</button>
        </div>
    </div>
</div>

<!-- Notification -->
<div id=\"notification\" class=\"notification\"></div>

<script>
    // Initialisation des variables
    let allTeams = Array.from(document.querySelectorAll('.team-card'));
    let currentTeams = [...allTeams];
    let selectedTeams = new Set();
    let isSelectionMode = false;
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const sortBy = document.getElementById('sortBy');
    const coachFilter = document.getElementById('coachFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
    const exportBtn = document.getElementById('exportBtn');
    const printBtn = document.getElementById('printBtn');
    const statsBtn = document.getElementById('statsBtn');
    const bulkActionsBtn = document.getElementById('bulkActionsBtn');
    
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
    
    // Gestion de la musique
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
                showNotification(\"Cliquez d'abord sur la page pour autoriser l'audio.\", \"error\");
            });
        } else {
            music.pause();
            isPlaying = false;
            musicBtn.innerHTML = '🔇 MUSIQUE OFF';
            musicBtn.style.background = 'linear-gradient(45deg, #8b0000, #660000)';
            musicBtn.classList.remove('playing');
        }
    });
    
    // Fonctions pour les modales
    function openModal(modalId) {
        document.getElementById(modalId).classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal(modalId) {
        document.getElementById(modalId).classList.remove('active');
        document.body.style.overflow = 'auto';
        
        // Réinitialiser les sélections dans les modales
        const options = document.querySelectorAll('.modal-option');
        options.forEach(option => {
            option.classList.remove('selected');
        });
    }
    
    // Fonction pour afficher les notifications
    function showNotification(message, type = 'success') {
        const notification = document.getElementById('notification');
        notification.textContent = message;
        notification.className = 'notification ' + type;
        notification.classList.add('show');
        
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }
    
    // Gestion de l'export
    exportBtn.addEventListener('click', () => {
        openModal('exportModal');
    });
    
    // Gestion de l'impression
    printBtn.addEventListener('click', () => {
        // Ajouter un en-tête d'impression
        const printContent = `
            <!DOCTYPE html>
            <html>
            <head>
                <title>Liste des Équipes E-sport - PHANTOM FORCE</title>
                <style>
                    body { font-family: Arial, sans-serif; margin: 20px; }
                    h1 { color: #ff0000; }
                    .team { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
                    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
                    th { background-color: #f2f2f2; }
                </style>
            </head>
            <body>
                <h1>📊 LISTE DES ÉQUIPES E-SPORT - PHANTOM FORCE</h1>
                <p>Date d'exportation : \${new Date().toLocaleDateString()}</p>
                <p>Nombre total d'équipes : \${allTeams.length}</p>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Jeu</th>
                            <th>Date de création</th>
                            <th>Coach</th>
                        </tr>
                    </thead>
                    <tbody>
                        \${Array.from(document.querySelectorAll('.team-card:not(.hidden)')).map(team => {
                            const id = team.dataset.id;
                            const name = team.querySelector('.team-name').textContent.trim();
                            const game = team.querySelector('.game-value').textContent;
                            const date = team.querySelector('.date-value').textContent;
                            const coach = team.querySelector('.info-item:nth-child(3) span').textContent;
                            
                            return `
                                <tr>
                                    <td>\${id}</td>
                                    <td>\${name}</td>
                                    <td>\${game}</td>
                                    <td>\${date}</td>
                                    <td>\${coach}</td>
                                </tr>
                            `;
                        }).join('')}
                    </tbody>
                </table>
            </body>
            </html>
        `;
        
        const printWindow = window.open('', '_blank');
        printWindow.document.write(printContent);
        printWindow.document.close();
        printWindow.print();
        
        showNotification(\"Impression lancée\", \"success\");
    });
    
    // Gestion des statistiques
    statsBtn.addEventListener('click', () => {
        openModal('statsModal');
        
        // Calculer les statistiques
        const totalTeams = allTeams.length;
        const visibleTeams = document.querySelectorAll('.team-card:not(.hidden)').length;
        
        // Statistiques par jeu
        const games = {};
        allTeams.forEach(team => {
            const game = team.querySelector('.game-value').textContent;
            games[game] = (games[game] || 0) + 1;
        });
        
        // Statistiques par coach
        let withCoach = 0;
        let withoutCoach = 0;
        allTeams.forEach(team => {
            const coachStatus = team.dataset.coach;
            if (coachStatus === 'yes') {
                withCoach++;
            } else {
                withoutCoach++;
            }
        });
        
        // Générer le contenu HTML
        const statsContent = document.getElementById('statsContent');
        statsContent.innerHTML = `
            <div style=\"margin-bottom: 1rem;\">
                <h4 style=\"color: var(--fire-red);\">📈 STATISTIQUES GÉNÉRALES</h4>
                <p>Total des équipes : <strong>\${totalTeams}</strong></p>
                <p>Équipes visibles : <strong>\${visibleTeams}</strong></p>
                <p>Avec coach : <strong>\${withCoach}</strong></p>
                <p>Sans coach : <strong>\${withoutCoach}</strong></p>
            </div>
            <div>
                <h4 style=\"color: var(--fire-red);\">🎮 RÉPARTITION PAR JEU</h4>
                <ul>
                    \${Object.entries(games).map(([game, count]) => `
                        <li>\${game} : <strong>\${count}</strong> équipes (\${Math.round((count/totalTeams)*100)}%)</li>
                    `).join('')}
                </ul>
            </div>
        `;
    });
    
    // Gestion des actions groupées
    bulkActionsBtn.addEventListener('click', () => {
        openModal('bulkModal');
        updateSelectedCount();
    });
    
    // Mise à jour du compteur de sélection
    function updateSelectedCount() {
        const selectedCountElement = document.getElementById('selectedCount');
        if (selectedCountElement) {
            selectedCountElement.innerHTML = `<strong>\${selectedTeams.size}</strong> équipes sélectionnées`;
            selectedCountElement.style.display = selectedTeams.size > 0 ? 'block' : 'none';
        }
    }
    
    // Activation/désactivation du mode sélection
    function toggleSelectionMode() {
        isSelectionMode = !isSelectionMode;
        document.body.classList.toggle('selection-mode-active', isSelectionMode);
        
        const checkboxes = document.querySelectorAll('.selection-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.style.display = isSelectionMode ? 'block' : 'none';
        });
        
        // Ajouter/supprimer l'événement de clic sur les cartes
        allTeams.forEach(team => {
            if (isSelectionMode) {
                team.addEventListener('click', handleTeamSelection);
            } else {
                team.removeEventListener('click', handleTeamSelection);
                team.classList.remove('selected');
                const checkbox = team.querySelector('.selection-checkbox');
                if (checkbox) checkbox.checked = false;
            }
        });
        
        selectedTeams.clear();
        updateSelectedCount();
        
        showNotification(
            isSelectionMode ? 
            \"Mode sélection activé - Cliquez sur les cartes pour sélectionner/désélectionner\" : 
            \"Mode sélection désactivé\",
            \"info\"
        );
    }
    
    // Gestion de la sélection d'une équipe
    function handleTeamSelection(e) {
        // Empêcher la sélection si on clique sur un lien ou un bouton
        if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON' || e.target.closest('a') || e.target.closest('button')) {
            return;
        }
        
        const team = e.currentTarget;
        const checkbox = team.querySelector('.selection-checkbox');
        const teamId = team.dataset.id;
        
        if (checkbox.checked) {
            checkbox.checked = false;
            team.classList.remove('selected');
            selectedTeams.delete(teamId);
        } else {
            checkbox.checked = true;
            team.classList.add('selected');
            selectedTeams.add(teamId);
        }
        
        updateSelectedCount();
    }
    
    // Gestion des sélections dans les modales
    document.querySelectorAll('.modal-option').forEach(option => {
        option.addEventListener('click', function() {
            const parent = this.parentElement;
            parent.querySelectorAll('.modal-option').forEach(opt => {
                opt.classList.remove('selected');
            });
            this.classList.add('selected');
        });
    });
    
    // Fonction d'export des données
    function exportData() {
        const selectedOption = document.querySelector('.modal-option.selected');
        if (!selectedOption) {
            showNotification(\"Veuillez sélectionner un format d'export\", \"error\");
            return;
        }
        
        const format = selectedOption.dataset.format;
        const exportAll = document.getElementById('exportAll').checked;
        const exportSelected = document.getElementById('exportSelected').checked;
        
        // Déterminer quelles équipes exporter
        let teamsToExport;
        if (exportSelected && selectedTeams.size > 0) {
            teamsToExport = Array.from(allTeams).filter(team => 
                selectedTeams.has(team.dataset.id)
            );
        } else {
            teamsToExport = Array.from(document.querySelectorAll('.team-card:not(.hidden)'));
        }
        
        // Préparer les données
        const data = teamsToExport.map(team => {
            return {
                id: team.dataset.id,
                name: team.querySelector('.team-name').textContent.trim(),
                game: team.querySelector('.game-value').textContent,
                creationDate: team.querySelector('.date-value').textContent,
                coach: team.querySelector('.info-item:nth-child(3) span').textContent,
                status: \"COMBAT READY\"
            };
        });
        
        // Exporter selon le format
        switch(format) {
            case 'csv':
                exportToCSV(data);
                break;
            case 'json':
                exportToJSON(data);
                break;
            case 'pdf':
                exportToPDF(data);
                break;
        }
        
        closeModal('exportModal');
    }
    
    // Export en CSV
    function exportToCSV(data) {
        const headers = ['ID', 'Nom', 'Jeu', 'Date de création', 'Coach', 'Statut'];
        const csvRows = [
            headers.join(','),
            ...data.map(row => [
                row.id,
                `\"\${row.name}\"`,
                `\"\${row.game}\"`,
                `\"\${row.creationDate}\"`,
                `\"\${row.coach}\"`,
                `\"\${row.status}\"`
            ].join(','))
        ];
        
        const csvString = csvRows.join('\\n');
        const blob = new Blob([csvString], { type: 'text/csv;charset=utf-8;' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = `equipes-esport-\${new Date().toISOString().slice(0,10)}.csv`;
        link.click();
        
        showNotification(\"Export CSV terminé\", \"success\");
    }
    
    // Export en JSON
    function exportToJSON(data) {
        const jsonString = JSON.stringify(data, null, 2);
        const blob = new Blob([jsonString], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = `equipes-esport-\${new Date().toISOString().slice(0,10)}.json`;
        link.click();
        
        showNotification(\"Export JSON terminé\", \"success\");
    }
    
    // Export en PDF (simulé)
    function exportToPDF(data) {
        // Dans un environnement réel, vous utiliseriez une bibliothèque comme jsPDF
        // Ici, nous simulons avec un CSV pour l'exemple
        showNotification(\"Export PDF simulé - Utilisez l'export CSV pour l'instant\", \"info\");
        exportToCSV(data);
    }
    
    // Exécution des actions groupées
    function executeBulkAction() {
        const selectedOption = document.querySelector('#bulkModal .modal-option.selected');
        if (!selectedOption) {
            showNotification(\"Veuillez sélectionner une action\", \"error\");
            return;
        }
        
        const action = selectedOption.dataset.action;
        
        switch(action) {
            case 'select':
                toggleSelectionMode();
                break;
            case 'delete':
                if (selectedTeams.size === 0) {
                    showNotification(\"Aucune équipe sélectionnée\", \"error\");
                    return;
                }
                if (confirm(`Êtes-vous sûr de vouloir supprimer \${selectedTeams.size} équipe(s) ?`)) {
                    // Dans un environnement réel, vous enverriez une requête au serveur
                    showNotification(`Suppression de \${selectedTeams.size} équipe(s) simulée`, \"info\");
                }
                break;
            case 'export':
                if (selectedTeams.size === 0) {
                    showNotification(\"Aucune équipe sélectionnée\", \"error\");
                    return;
                }
                openModal('exportModal');
                document.getElementById('exportAll').checked = false;
                document.getElementById('exportSelected').checked = true;
                break;
            case 'duplicate':
                if (selectedTeams.size === 0) {
                    showNotification(\"Aucune équipe sélectionnée\", \"error\");
                    return;
                }
                showNotification(`Duplication de \${selectedTeams.size} équipe(s) simulée`, \"info\");
                break;
        }
        
        closeModal('bulkModal');
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
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.team-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            if (isSelectionMode) return;
            
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            this.style.transform = `translateY(-10px) scale(1.02) rotateX(\${(y - rect.height/2)/20}deg) rotateY(\${(x - rect.width/2)/20}deg)`;
        });
        
        card.addEventListener('mouseleave', function() {
            if (isSelectionMode) return;
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
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        
        // Ajouter l'animation CSS pour les étincelles
        const style = document.createElement('style');
        style.textContent = `
            @keyframes sparkFade {
                0% { transform: scale(1); opacity: 1; }
                100% { transform: scale(3); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    });
</script>
{% endblock %}", "team/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\team\\index.html.twig");
    }
}
