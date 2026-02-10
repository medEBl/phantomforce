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

/* front/matchy/index.html.twig */
class __TwigTemplate_d2d8eeff3296c85877db4ee12e017ffc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/index.html.twig"));

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

        yield "⚔️ ARENA - Matchs E-sport";
        
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
        --red-glow: rgba(255, 0, 0, 0.7);
        --red-light: rgba(255, 51, 51, 0.3);
        --black-bg: #000000;
        --dark-gray: #1a1a1a;
        --gray: #333333;
        --light-gray: #666666;
        --white: #ffffff;
        --red-gradient: linear-gradient(135deg, #ff0000 0%, #cc0000 50%, #990000 100%);
        --fire-gradient: linear-gradient(45deg, #ff0000, #ff3300, #cc0000);
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
    
    .add-match-btn {
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
    
    .add-match-btn::before {
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
    
    .add-match-btn:hover::before {
        left: 100%;
    }
    
    .add-match-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.9);
        background: linear-gradient(45deg, var(--fire-red), var(--blood-red));
    }
    
    .live-counter {
        position: absolute;
        top: -10px;
        right: -10px;
        background: var(--fire-red);
        color: white;
        font-family: 'Orbitron', monospace;
        font-size: 0.8rem;
        padding: 0.3rem 0.6rem;
        border-radius: 12px;
        border: 2px solid white;
        animation: counterPulse 2s infinite;
        box-shadow: 0 0 10px rgba(255, 51, 0, 0.8);
        z-index: 10;
    }
    
    @keyframes counterPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    
    .matches-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(420px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
        position: relative;
    }
    
    .match-card.selectable {
        cursor: grab;
        user-select: none;
    }
    
    .match-card.selectable:active {
        cursor: grabbing;
    }
    
    .match-card.selected {
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.7), 
                    0 20px 40px rgba(0, 0, 0, 0.5);
        border-color: white;
        animation: selectedPulse 1.5s infinite;
    }
    
    @keyframes selectedPulse {
        0%, 100% { border-color: white; }
        50% { border-color: var(--blood-red); }
    }
    
    .match-card {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.8rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        min-height: 320px;
        display: flex;
        flex-direction: column;
    }
    
    .match-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.7),
            0 0 30px rgba(255, 0, 0, 0.5);
        border-color: var(--blood-red);
    }
    
    .match-card::before {
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
    
    .match-card.ongoing::after {
        content: '🔥';
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 1.5rem;
        animation: fireGlow 1.5s infinite alternate;
        filter: drop-shadow(0 0 5px rgba(255, 51, 0, 0.8));
        z-index: 2;
    }
    
    @keyframes fireGlow {
        from { transform: scale(1); opacity: 0.8; }
        to { transform: scale(1.2); opacity: 1; }
    }
    
    .match-id {
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
    
    .match-header {
        text-align: center;
        margin-bottom: 1.5rem;
        flex-shrink: 0;
        position: relative;
    }
    
    .match-game {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .match-date {
        color: var(--fire-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .teams-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        padding: 1.2rem;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        border: 1px solid rgba(255, 0, 0, 0.3);
        flex-shrink: 0;
        position: relative;
    }
    
    .score-bar-container {
        position: absolute;
        bottom: -5px;
        left: 10px;
        right: 10px;
        height: 3px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 2px;
        overflow: hidden;
    }
    
    .score-bar {
        height: 100%;
        background: var(--fire-red);
        transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 0 10px var(--fire-red);
    }
    
    .team-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        min-width: 0;
    }
    
    .team-name {
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        color: white;
        margin-bottom: 0.5rem;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
        padding: 0 0.5rem;
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    }
    
    .team-score {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 900;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 51, 0, 0.7);
        min-width: 40px;
        text-align: center;
    }
    
    .vs-container {
        padding: 0 1.2rem;
        color: var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.3rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
        flex-shrink: 0;
        position: relative;
    }
    
    .vs-container::before {
        content: '⚔️';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        opacity: 0.3;
    }
    
    .match-details {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
        flex-grow: 1;
        overflow: hidden;
    }
    
    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #cc9999;
        font-size: 0.95rem;
        min-height: 24px;
    }
    
    .detail-item strong {
        color: var(--fire-red);
        min-width: 80px;
        flex-shrink: 0;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .detail-item span {
        flex-grow: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .status-badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-family: 'Orbitron', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
    }
    
    .status-planned {
        background: rgba(255, 0, 0, 0.15);
        color: var(--blood-red);
        border: 1px solid var(--blood-red);
    }
    
    .status-ongoing {
        background: rgba(255, 102, 0, 0.15);
        color: #ff6600;
        border: 1px solid #ff6600;
        animation: pulse 1.5s infinite;
        box-shadow: 0 0 10px rgba(255, 102, 0, 0.5);
    }
    
    .status-finished {
        background: rgba(204, 0, 0, 0.15);
        color: var(--dark-red);
        border: 1px solid var(--dark-red);
    }
    
    .status-cancelled {
        background: rgba(153, 0, 0, 0.15);
        color: #990000;
        border: 1px solid #990000;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; box-shadow: 0 0 10px rgba(255, 102, 0, 0.5); }
        50% { opacity: 0.8; box-shadow: 0 0 20px rgba(255, 102, 0, 0.7); }
    }
    
    .winner-info {
        background: rgba(255, 0, 0, 0.2);
        color: var(--fire-red);
        padding: 0.8rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        text-align: center;
        margin-top: auto;
        border: 1px solid rgba(255, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
        position: relative;
        overflow: hidden;
    }
    
    .winner-info::before {
        content: '🏆';
        position: absolute;
        left: 10px;
        animation: trophyShine 2s infinite;
    }
    
    @keyframes trophyShine {
        0%, 100% { transform: rotate(0deg); }
        50% { transform: rotate(15deg); }
    }
    
    .no-winner {
        background: rgba(153, 0, 0, 0.15);
        color: #cc6666;
        padding: 0.8rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        text-align: center;
        margin-top: auto;
        border: 1px solid rgba(153, 0, 0, 0.3);
    }
    
    .actions-container {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 0, 0, 0.2);
        flex-shrink: 0;
    }
    
    .action-btn {
        padding: 0.6rem 1.2rem;
        border: none;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        flex: 1;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
    }
    
    .view-btn {
        background: linear-gradient(45deg, #8b0000, #660000);
        color: white;
    }
    
    .edit-btn {
        background: linear-gradient(45deg, #b30000, #990000);
        color: white;
    }
    
    .email-btn {
        background: linear-gradient(45deg, #cc0000, #990000);
        color: white;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
        filter: brightness(1.3);
    }
    
    .action-btn::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }
    
    .action-btn:hover::after {
        left: 100%;
    }
    
    .no-matches {
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
    
    .no-matches h2 {
        color: var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        margin-bottom: 1rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .no-matches p {
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
    .match-card.hidden {
        display: none;
    }
    
    .match-card.filtered-out {
        opacity: 0.3;
        transform: scale(0.95);
        transition: all 0.3s ease;
    }
    
    /* Modal pour l'email */
    .email-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 10000;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
    }
    
    .email-modal.active {
        display: flex;
        animation: modalFadeIn 0.3s ease;
    }
    
    @keyframes modalFadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .email-modal-content {
        background: rgba(26, 0, 0, 0.95);
        border-radius: 20px;
        padding: 2rem;
        width: 90%;
        max-width: 500px;
        border: 2px solid var(--blood-red);
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.5);
        position: relative;
        animation: modalSlideUp 0.4s ease;
    }
    
    @keyframes modalSlideUp {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .email-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .email-modal-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 51, 0, 0.5);
    }
    
    .email-modal-close {
        background: none;
        border: none;
        color: var(--blood-red);
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .email-modal-close:hover {
        transform: scale(1.2);
        color: white;
    }
    
    .email-form-group {
        margin-bottom: 1.5rem;
    }
    
    .email-form-label {
        display: block;
        color: var(--fire-red);
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .email-form-input {
        width: 100%;
        padding: 0.8rem 1rem;
        background: rgba(0, 0, 0, 0.8);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .email-form-input:focus {
        outline: none;
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
    }
    
    .email-form-textarea {
        width: 100%;
        padding: 0.8rem 1rem;
        background: rgba(0, 0, 0, 0.8);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
        min-height: 120px;
        resize: vertical;
    }
    
    .email-form-textarea:focus {
        outline: none;
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
    }
    
    .email-form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .email-send-btn {
        flex: 1;
        padding: 1rem;
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        border: none;
        border-radius: 8px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .email-send-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 0, 0, 0.6);
        background: linear-gradient(45deg, var(--fire-red), var(--blood-red));
    }
    
    .email-send-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .email-cancel-btn {
        flex: 1;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid var(--light-gray);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .email-cancel-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: white;
    }
    
    .email-status {
        text-align: center;
        padding: 1rem;
        margin-top: 1rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        display: none;
    }
    
    .email-status.success {
        background: rgba(0, 255, 0, 0.1);
        color: #00ff00;
        border: 1px solid #00ff00;
        display: block;
    }
    
    .email-status.error {
        background: rgba(255, 0, 0, 0.1);
        color: var(--blood-red);
        border: 1px solid var(--blood-red);
        display: block;
    }
    
    .email-status.loading {
        background: rgba(255, 255, 0, 0.1);
        color: #ffff00;
        border: 1px solid #ffff00;
        display: block;
    }
    
    @media (max-width: 768px) {
        .main-title {
            font-size: 2rem;
        }
        
        .matches-grid {
            grid-template-columns: 1fr;
        }
        
        .header-glow {
            padding: 1rem;
        }
        
        .controls-container {
            flex-direction: column;
            align-items: center;
        }
        
        .add-match-btn {
            min-width: 250px;
            font-size: 1rem;
        }
        
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
        
        .teams-container {
            flex-direction: column;
            gap: 1rem;
        }
        
        .vs-container {
            padding: 1rem 0;
        }
        
        .team-name {
            font-size: 1.1rem;
        }
        
        .match-card {
            min-height: 350px;
        }
        
        .email-modal-content {
            padding: 1.5rem;
            margin: 1rem;
        }
        
        .email-form-actions {
            flex-direction: column;
        }
    }
    
    @media (max-width: 480px) {
        .gaming-container {
            padding: 1rem;
        }
        
        .match-card {
            padding: 1.5rem;
        }
        
        .match-game {
            font-size: 1.4rem;
        }
        
        .team-name {
            font-size: 1rem;
        }
        
        .team-score {
            font-size: 1.8rem;
        }
        
        .detail-item {
            font-size: 0.9rem;
        }
        
        .action-btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1116
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

        // line 1117
        yield "<div class=\"gaming-container\">
    
    <!-- Modal pour l'envoi d'email -->
    <div class=\"email-modal\" id=\"emailModal\">
        <div class=\"email-modal-content\">
            <div class=\"email-modal-header\">
                <h3 class=\"email-modal-title\">📧 ENVOYER UN RÉCAPITULATIF</h3>
                <button class=\"email-modal-close\" id=\"closeEmailModal\">✕</button>
            </div>
            
            <form id=\"emailForm\">
                <input type=\"hidden\" id=\"matchId\" name=\"matchId\">
                <input type=\"hidden\" id=\"matchData\" name=\"matchData\">
                
                <div class=\"email-form-group\">
                    <label class=\"email-form-label\" for=\"recipientEmail\">Email du destinataire</label>
                    <input type=\"email\" id=\"recipientEmail\" name=\"recipientEmail\" 
                           class=\"email-form-input\" placeholder=\"exemple@phantom-force.com\" required>
                </div>
                
                <div class=\"email-form-group\">
                    <label class=\"email-form-label\" for=\"emailSubject\">Sujet de l'email</label>
                    <input type=\"text\" id=\"emailSubject\" name=\"emailSubject\" 
                           class=\"email-form-input\" placeholder=\"Récapitulatif du match\" required>
                </div>
                
                <div class=\"email-form-group\">
                    <label class=\"email-form-label\" for=\"emailMessage\">Message personnalisé</label>
                    <textarea id=\"emailMessage\" name=\"emailMessage\" class=\"email-form-textarea\" 
                              placeholder=\"Ajoutez un message personnel...\"></textarea>
                </div>
                
                <div class=\"email-form-actions\">
                    <button type=\"button\" class=\"email-cancel-btn\" id=\"cancelEmail\">ANNULER</button>
                    <button type=\"submit\" class=\"email-send-btn\" id=\"sendEmailBtn\">
                        <span id=\"sendEmailText\">🚀 ENVOYER LE RÉCAP</span>
                        <span id=\"sendingText\" style=\"display: none;\">⏳ ENVOI EN COURS...</span>
                    </button>
                </div>
                
                <div class=\"email-status\" id=\"emailStatus\"></div>
            </form>
        </div>
    </div>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 1164
        $context["icons"] = ["⚔️", "🔥", "💀", "👑", "🛡️", "🎯", "🏆", "💥", "⚡", "⭐"];
        // line 1165
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1166
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1166, $this->source); })())));
            // line 1167
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 1168
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 1169
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 1170
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 1171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 1171, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 1172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 1172, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 1173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 1173, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 1175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1175, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 1175, $this->source); })()), [], "array", false, false, false, 1175), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1178
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PHANTOM FORCE - MATCHS</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            BATAILLES ÉPICQUES • ";
        // line 1184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1184, $this->source); })())), "html", null, true);
        yield " COMBATS PROGRAMMÉS
        </p>
        <div class=\"live-counter\" id=\"liveCounter\">⚡ LIVE</div>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        ";
        // line 1191
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 1192
            yield "
        <a href=\"";
            // line 1193
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_new");
            yield "\" class=\"add-match-btn\">
            ⚔️ PROGRAMMER UN COMBAT
        </a>
        ";
        }
        // line 1197
        yield "    </div>
    
    <!-- Barre de recherche et filtres -->
    <div class=\"filters-container\">
        <div class=\"search-box\">
            <input type=\"text\" id=\"searchInput\" placeholder=\"🔍 Rechercher un combat...\" class=\"search-input\">
            <button class=\"clear-search\" id=\"clearSearch\">✖</button>
        </div>
        
        <div class=\"filter-controls\">
            <div class=\"filter-group\">
                <label class=\"filter-label\">🎮 FILTRER PAR JEU :</label>
                <select id=\"gameFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les jeux</option>
                    ";
        // line 1211
        $context["games"] = [];
        // line 1212
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1212, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 1213
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1213), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1213, $this->source); })()))) {
                // line 1214
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1214, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1214)]);
                // line 1215
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1215), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1215), "html", null, true);
                yield "</option>
                        ";
            }
            // line 1217
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1218
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">📅 FILTRER PAR STATUT :</label>
                <select id=\"statusFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"planned\">Planifié</option>
                    <option value=\"ongoing\">En cours</option>
                    <option value=\"finished\">Terminé</option>
                    <option value=\"cancelled\">Annulé</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">🏆 AVEC GAGNANT :</label>
                <select id=\"winnerFilter\" class=\"filter-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"with\">Avec gagnant</option>
                    <option value=\"without\">Sans gagnant</option>
                </select>
            </div>
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"matchCount\">";
        // line 1245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1245, $this->source); })())), "html", null, true);
        yield "</span> COMBATS ENREGISTRÉS
        </div>
    </div>
    
    ";
        // line 1249
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1249, $this->source); })())) > 0)) {
            // line 1250
            yield "        <!-- Grille des matchs -->
        <div class=\"matches-grid\" id=\"matchesGrid\">
            ";
            // line 1252
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1252, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 1253
                yield "                ";
                $context["matchData"] = ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1254
$context["match"], "id", [], "any", false, false, false, 1254), "game" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1255
$context["match"], "game", [], "any", false, false, false, 1255), "date" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 1256
$context["match"], "matchDate", [], "any", false, false, false, 1256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1256), "d/m/Y H:i")) : ("Date non définie")), "team1" => ["name" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 1258
$context["match"], "team1", [], "any", false, true, false, 1258), "name", [], "any", true, true, false, 1258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1258), "name", [], "any", false, false, false, 1258), "Équipe 1")) : ("Équipe 1")), "score" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1259
$context["match"], "scoreTeam1", [], "any", true, true, false, 1259) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1259)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1259)) : (0))], "team2" => ["name" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 1262
$context["match"], "team2", [], "any", false, true, false, 1262), "name", [], "any", true, true, false, 1262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1262), "name", [], "any", false, false, false, 1262), "Équipe 2")) : ("Équipe 2")), "score" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1263
$context["match"], "scoreTeam2", [], "any", true, true, false, 1263) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1263)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1263)) : (0))], "status" => Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                 // line 1265
$context["match"], "status", [], "any", false, false, false, 1265)), "winner" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 1266
$context["match"], "winnerTeam", [], "any", false, false, false, 1266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1266), "name", [], "any", false, false, false, 1266)) : ("Pas encore de vainqueur")), "status_label" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1267
$context["match"], "statusLabel", [], "any", true, true, false, 1267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "statusLabel", [], "any", false, false, false, 1267), Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1267)))) : (Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1267))))];
                // line 1269
                yield "                
                <div class=\"match-card ";
                // line 1270
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1270) == "ongoing")) {
                    yield "ongoing";
                }
                yield "\" 
                     data-id=\"";
                // line 1271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1271), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 1272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1272)), "html", null, true);
                yield "\" 
                     data-status=\"";
                // line 1273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1273)), "html", null, true);
                yield "\"
                     data-date=\"";
                // line 1274
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1274), "U"), "html", null, true)) : (0));
                yield "\"
                     data-winner=\"";
                // line 1275
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1275)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\"
                     data-match='";
                // line 1276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["matchData"]) || array_key_exists("matchData", $context) ? $context["matchData"] : (function () { throw new RuntimeError('Variable "matchData" does not exist.', 1276, $this->source); })())), "html_attr");
                yield "'>
                    <div class=\"match-id\">#";
                // line 1277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1277), "html", null, true);
                yield "</div>
                    
                    <div class=\"match-header\">
                        <div class=\"match-game\">";
                // line 1280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1280)), "html", null, true);
                yield "</div>
                        <div class=\"match-date\">
                            ";
                // line 1282
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1282), "d/m/Y H:i"), "html", null, true)) : ("Date non définie"));
                yield "
                        </div>
                    </div>
                    
                    <div class=\"teams-container\">
                        ";
                // line 1287
                $context["score1"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 1287) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1287)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1287)) : (0));
                // line 1288
                yield "                        ";
                $context["score2"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 1288) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1288)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1288)) : (0));
                // line 1289
                yield "                        ";
                $context["totalScore"] = ((isset($context["score1"]) || array_key_exists("score1", $context) ? $context["score1"] : (function () { throw new RuntimeError('Variable "score1" does not exist.', 1289, $this->source); })()) + (isset($context["score2"]) || array_key_exists("score2", $context) ? $context["score2"] : (function () { throw new RuntimeError('Variable "score2" does not exist.', 1289, $this->source); })()));
                // line 1290
                yield "                        ";
                $context["percentage1"] = ((((isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 1290, $this->source); })()) > 0)) ? ((((isset($context["score1"]) || array_key_exists("score1", $context) ? $context["score1"] : (function () { throw new RuntimeError('Variable "score1" does not exist.', 1290, $this->source); })()) / (isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 1290, $this->source); })())) * 100)) : (50));
                // line 1291
                yield "                        
                        <div class=\"score-bar-container\">
                            <div class=\"score-bar\" style=\"width: ";
                // line 1293
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage1"]) || array_key_exists("percentage1", $context) ? $context["percentage1"] : (function () { throw new RuntimeError('Variable "percentage1" does not exist.', 1293, $this->source); })()), "html", null, true);
                yield "%\"></div>
                        </div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"";
                // line 1297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 1297), "name", [], "any", true, true, false, 1297)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1297), "name", [], "any", false, false, false, 1297), "Équipe 1")) : ("Équipe 1")), "html", null, true);
                yield "\">
                                ";
                // line 1298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 1298), "name", [], "any", true, true, false, 1298)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1298), "name", [], "any", false, false, false, 1298), "Équipe 1")) : ("Équipe 1")), 0, 15), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 1298), "name", [], "any", true, true, false, 1298)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1298), "name", [], "any", false, false, false, 1298), "")) : (""))) > 15)) ? ("...") : (""));
                yield "
                            </div>
                            <div class=\"team-score\">";
                // line 1300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score1"]) || array_key_exists("score1", $context) ? $context["score1"] : (function () { throw new RuntimeError('Variable "score1" does not exist.', 1300, $this->source); })()), "html", null, true);
                yield "</div>
                        </div>
                        
                        <div class=\"vs-container\">VS</div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"";
                // line 1306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 1306), "name", [], "any", true, true, false, 1306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1306), "name", [], "any", false, false, false, 1306), "Équipe 2")) : ("Équipe 2")), "html", null, true);
                yield "\">
                                ";
                // line 1307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 1307), "name", [], "any", true, true, false, 1307)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1307), "name", [], "any", false, false, false, 1307), "Équipe 2")) : ("Équipe 2")), 0, 15), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 1307), "name", [], "any", true, true, false, 1307)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1307), "name", [], "any", false, false, false, 1307), "")) : (""))) > 15)) ? ("...") : (""));
                yield "
                            </div>
                            <div class=\"team-score\">";
                // line 1309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score2"]) || array_key_exists("score2", $context) ? $context["score2"] : (function () { throw new RuntimeError('Variable "score2" does not exist.', 1309, $this->source); })()), "html", null, true);
                yield "</div>
                        </div>
                    </div>
                    
                    <div class=\"match-details\">
                        <div class=\"detail-item\">
                            <strong>🎮 JEU :</strong>
                            <span>";
                // line 1316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1316), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📅 DATE :</strong>
                            <span>";
                // line 1321
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1321), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📊 STATUT :</strong>
                            ";
                // line 1326
                $context["statusClass"] = "";
                // line 1327
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1327) == "planned")) {
                    // line 1328
                    yield "                                ";
                    $context["statusClass"] = "status-planned";
                    // line 1329
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1329) == "ongoing")) {
                    // line 1330
                    yield "                                ";
                    $context["statusClass"] = "status-ongoing";
                    // line 1331
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1331) == "finished")) {
                    // line 1332
                    yield "                                ";
                    $context["statusClass"] = "status-finished";
                    // line 1333
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1333) == "cancelled")) {
                    // line 1334
                    yield "                                ";
                    $context["statusClass"] = "status-cancelled";
                    // line 1335
                    yield "                            ";
                }
                // line 1336
                yield "                            <span class=\"status-badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 1336, $this->source); })()), "html", null, true);
                yield "\">
                                ";
                // line 1337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1337)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    
                    ";
                // line 1342
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1343
                    yield "                        <div class=\"winner-info\">
                            🏆 VICTOIRE : ";
                    // line 1344
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1344), "name", [], "any", false, false, false, 1344), "html", null, true);
                    yield "
                        </div>
                    ";
                } else {
                    // line 1347
                    yield "                        <div class=\"no-winner\">
                            ⏳ Pas encore de vainqueur
                        </div>
                    ";
                }
                // line 1351
                yield "                    
                    <div class=\"actions-container\">
                        <a href=\"";
                // line 1353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1353)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails du match\">
                            👁️ ANALYSER
                        </a>
                            ";
                // line 1358
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 1359
                    yield "
                        <a href=\"";
                    // line 1360
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1360)]), "html", null, true);
                    yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier le match\">
                            ⚙️ MODIFIER
                        </a>
                        ";
                }
                // line 1366
                yield "                        
                        <button class=\"action-btn email-btn\" 
                                title=\"Envoyer un récapitulatif par email\"
                                data-match-id=\"";
                // line 1369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1369), "html", null, true);
                yield "\">
                            📧 RECAP
                        </button>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1375
            yield "        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeMatches\">";
            // line 1380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1380, $this->source); })())), "html", null, true);
            yield "</span> BATAILLES ENREGISTRÉES • DERNIÈRE MISE À JOUR : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 1385
            yield "        <!-- Message quand aucun match n'existe -->
        <div class=\"no-matches\">
            <h2>⚠️ CHAMP DE BATAILLE VIDE ⚠️</h2>
            <p>Aucun combat n'a encore été programmé. Organisez le premier affrontement !</p>
            <a href=\"";
            // line 1389
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_new");
            yield "\" class=\"add-match-btn\" style=\"display: inline-block; width: auto;\">
                🏆 PROGRAMMER LE PREMIER COMBAT
            </a>
        </div>
    ";
        }
        // line 1394
        yield "</div>

<script>
    // Initialisation des variables
    let allMatches = Array.from(document.querySelectorAll('.match-card'));
    let currentMatches = [...allMatches];
    let currentMatchData = null;
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const statusFilter = document.getElementById('statusFilter');
    const winnerFilter = document.getElementById('winnerFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const matchCount = document.getElementById('matchCount');
    const activeMatches = document.getElementById('activeMatches');
    const liveCounter = document.getElementById('liveCounter');
    
    // Éléments email
    const emailModal = document.getElementById('emailModal');
    const closeEmailModal = document.getElementById('closeEmailModal');
    const cancelEmail = document.getElementById('cancelEmail');
    const emailForm = document.getElementById('emailForm');
    const sendEmailBtn = document.getElementById('sendEmailBtn');
    const sendEmailText = document.getElementById('sendEmailText');
    const sendingText = document.getElementById('sendingText');
    const emailStatus = document.getElementById('emailStatus');
    const recipientEmail = document.getElementById('recipientEmail');
    const emailSubject = document.getElementById('emailSubject');
    const emailMessage = document.getElementById('emailMessage');
    const matchIdInput = document.getElementById('matchId');
    const matchDataInput = document.getElementById('matchData');
    
    // API Email Configuration (à configurer selon votre service d'email)
    const EMAIL_API_CONFIG = {
        // Utilisation de EmailJS (https://www.emailjs.com/) - Exemple
        // Vous pouvez remplacer par votre propre API
        serviceId: 'service_z6s2ry1', // À remplacer avec votre Service ID
        templateId: 'template_504zw2f', // À remplacer avec votre Template ID
        userId: 'vWh8V7F3_yVsHPK_o', // À remplacer avec votre Public Key
        endpoint: 'https://api.emailjs.com/api/v1.0/email/send'
    };
    
    // Fonction pour mettre à jour le compteur
    function updateCounter(visibleCount) {
        matchCount.textContent = visibleCount;
        if (activeMatches) {
            activeMatches.textContent = visibleCount;
        }
        
        // Animation du compteur
        matchCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            matchCount.style.transform = 'scale(1)';
        }, 200);
    }
    
    // Fonction de recherche
    function searchMatches() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentMatches.forEach(match => {
            const gameName = match.dataset.game;
            const matchId = match.querySelector('.match-id').textContent.toLowerCase();
            const team1Name = match.querySelector('.team-info:first-child .team-name').textContent.toLowerCase();
            const team2Name = match.querySelector('.team-info:last-child .team-name').textContent.toLowerCase();
            
            if (searchTerm === '' || 
                gameName.includes(searchTerm) || 
                matchId.includes(searchTerm) ||
                team1Name.includes(searchTerm) ||
                team2Name.includes(searchTerm)) {
                match.classList.remove('hidden', 'filtered-out');
            } else {
                match.classList.add('filtered-out');
            }
        });
        
        applyFilters();
    }
    
    // Fonction pour appliquer tous les filtres
    function applyFilters() {
        let visibleMatches = [];
        
        currentMatches.forEach(match => {
            let isVisible = !match.classList.contains('filtered-out');
            
            // Filtre par jeu
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && match.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            // Filtre par statut
            const selectedStatus = statusFilter.value;
            if (selectedStatus && match.dataset.status !== selectedStatus) {
                isVisible = false;
            }
            
            // Filtre par gagnant
            const winnerStatus = winnerFilter.value;
            if (winnerStatus === 'with' && match.dataset.winner === 'no') {
                isVisible = false;
            }
            if (winnerStatus === 'without' && match.dataset.winner === 'yes') {
                isVisible = false;
            }
            
            if (isVisible) {
                match.classList.remove('hidden');
                visibleMatches.push(match);
            } else {
                match.classList.add('hidden');
            }
        });
        
        // Mettre à jour le compteur
        updateCounter(visibleMatches.length);
    }
    
    // Événements
    searchInput.addEventListener('input', searchMatches);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchMatches();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    statusFilter.addEventListener('change', applyFilters);
    winnerFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        statusFilter.value = '';
        winnerFilter.value = '';
        
        currentMatches.forEach(match => {
            match.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        
        // Afficher le nom complet des équipes au survol
        document.querySelectorAll('.team-name').forEach(element => {
            element.addEventListener('mouseenter', function() {
                const title = this.getAttribute('title');
                if (title && title !== this.textContent) {
                    const originalText = this.textContent;
                    this.textContent = title;
                    
                    this.addEventListener('mouseleave', () => {
                        this.textContent = originalText;
                    }, { once: true });
                }
            });
        });
        
        // Animation du compteur live
        if (liveCounter) {
            setInterval(() => {
                liveCounter.style.transform = 'scale(1.1)';
                liveCounter.style.boxShadow = '0 0 15px rgba(255, 51, 0, 0.9)';
                setTimeout(() => {
                    liveCounter.style.transform = 'scale(1)';
                    liveCounter.style.boxShadow = '0 0 10px rgba(255, 51, 0, 0.8)';
                }, 300);
            }, 2000);
        }
        
        // Mise à jour de la barre de score en direct
        updateScoreBars();
        
        // Gestion des boutons d'email
        document.querySelectorAll('.email-btn').forEach(button => {
            button.addEventListener('click', function() {
                const matchId = this.getAttribute('data-match-id');
                const matchCard = this.closest('.match-card');
                const matchData = matchCard.getAttribute('data-match');
                
                openEmailModal(matchId, matchData);
            });
        });
    });
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.match-card');
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
    
    // Effet de score en temps réel
    function updateScoreBars() {
        document.querySelectorAll('.match-card').forEach(card => {
            const score1 = parseInt(card.querySelector('.team-info:first-child .team-score').textContent);
            const score2 = parseInt(card.querySelector('.team-info:last-child .team-score').textContent);
            const totalScore = score1 + score2;
            const percentage1 = totalScore > 0 ? (score1 / totalScore * 100) : 50;
            
            const scoreBar = card.querySelector('.score-bar');
            if (scoreBar) {
                scoreBar.style.width = `\${percentage1}%`;
                
                // Animation pour les matchs en cours
                if (card.classList.contains('ongoing')) {
                    scoreBar.style.animation = 'pulse 2s infinite';
                }
            }
        });
    }
    
    // Gestion de l'email modal
    function openEmailModal(matchId, matchData) {
        currentMatchData = JSON.parse(matchData);
        
        // Remplir les champs du formulaire
        matchIdInput.value = matchId;
        matchDataInput.value = matchData;
        
        // Générer un sujet par défaut
        const defaultSubject = `📊 Récapitulatif du match #\${matchId} - \${currentMatchData.team1.name} vs \${currentMatchData.team2.name}`;
        emailSubject.value = defaultSubject;
        
        // Générer un message par défaut
        const defaultMessage = generateDefaultEmailMessage(currentMatchData);
        emailMessage.value = defaultMessage;
        
        // Réinitialiser le statut
        emailStatus.className = 'email-status';
        emailStatus.style.display = 'none';
        emailStatus.textContent = '';
        
        // Afficher le modal
        emailModal.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Focus sur le premier champ
        recipientEmail.focus();
    }
    
    function closeEmailModalFunc() {
        emailModal.classList.remove('active');
        document.body.style.overflow = '';
        currentMatchData = null;
        emailForm.reset();
    }
    
    closeEmailModal.addEventListener('click', closeEmailModalFunc);
    cancelEmail.addEventListener('click', closeEmailModalFunc);
    
    // Fermer le modal avec la touche ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && emailModal.classList.contains('active')) {
            closeEmailModalFunc();
        }
    });
    
    // Générer le message email par défaut (UNIQUEMENT avec les attributs existants)
    function generateDefaultEmailMessage(matchData) {
        const winnerText = matchData.winner !== 'Pas encore de vainqueur' 
            ? `🏆 **Vainqueur :** \${matchData.winner}`
            : '⚔️ **Match en attente de résultat**';
        
        return `Bonjour,

Voici le récapitulatif du match #\${matchData.id} :

🎮 **Jeu :** \${matchData.game}
📅 **Date :** \${matchData.date}

⚔️ **Équipes :**
- \${matchData.team1.name} : \${matchData.team1.score} points
- \${matchData.team2.name} : \${matchData.team2.score} points

📊 **Statut :** \${matchData.status_label || matchData.status}
\${winnerText}

🏆 **Détails du match :**
Le match s'est déroulé sur la plateforme Phantom Force Esports.

Pour plus de détails, consultez la plateforme Phantom Force.

Cordialement,
L'équipe Phantom Force Esports

--
Cet email a été généré automatiquement.`;
    }
    
    // Envoyer l'email via l'API
    emailForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Validation de l'email
        const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
        if (!emailRegex.test(recipientEmail.value)) {
            showEmailStatus('Veuillez entrer une adresse email valide.', 'error');
            return;
        }
        
        // Afficher l'état d'envoi
        sendEmailBtn.disabled = true;
        sendEmailText.style.display = 'none';
        sendingText.style.display = 'inline';
        
        showEmailStatus('Envoi du récapitulatif en cours...', 'loading');
        
        try {
            // Préparer les données pour l'API (UNIQUEMENT avec les attributs existants)
            const emailData = {
                service_id: EMAIL_API_CONFIG.serviceId,
                template_id: EMAIL_API_CONFIG.templateId,
                user_id: EMAIL_API_CONFIG.userId,
                template_params: {
                    to_email: recipientEmail.value,
                    subject: emailSubject.value,
                    message: emailMessage.value,
                    match_id: currentMatchData.id,
                    game: currentMatchData.game,
                    match_date: currentMatchData.date,
                    team1_name: currentMatchData.team1.name,
                    team1_score: currentMatchData.team1.score,
                    team2_name: currentMatchData.team2.name,
                    team2_score: currentMatchData.team2.score,
                    status: currentMatchData.status_label || currentMatchData.status,
                    winner: currentMatchData.winner,
                    sent_date: new Date().toLocaleDateString('fr-FR')
                }
            };
            
            // Envoyer l'email via l'API
            const response = await fetch(EMAIL_API_CONFIG.endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(emailData)
            });
            
            if (response.ok) {
                showEmailStatus('✅ Récapitulatif envoyé avec succès !', 'success');
                
                // Réinitialiser après succès
                setTimeout(() => {
                    closeEmailModalFunc();
                    sendEmailBtn.disabled = false;
                    sendEmailText.style.display = 'inline';
                    sendingText.style.display = 'none';
                }, 2000);
                
                // Animation de succès
                createSuccessAnimation();
            } else {
                throw new Error('Erreur lors de l\\'envoi');
            }
            
        } catch (error) {
            console.error('Erreur d\\'envoi d\\'email:', error);
            showEmailStatus('❌ Erreur lors de l\\'envoi. Veuillez réessayer.', 'error');
            
            // Réactiver le bouton
            sendEmailBtn.disabled = false;
            sendEmailText.style.display = 'inline';
            sendingText.style.display = 'none';
        }
    });
    
    function showEmailStatus(message, type) {
        emailStatus.textContent = message;
        emailStatus.className = `email-status \${type}`;
        emailStatus.style.display = 'block';
        
        // Animation d'entrée
        emailStatus.style.opacity = '0';
        emailStatus.style.transform = 'translateY(-10px)';
        
        setTimeout(() => {
            emailStatus.style.opacity = '1';
            emailStatus.style.transform = 'translateY(0)';
            emailStatus.style.transition = 'all 0.3s ease';
        }, 10);
    }
    
    function createSuccessAnimation() {
        const successIcon = document.createElement('div');
        successIcon.innerHTML = '📧';
        successIcon.style.position = 'fixed';
        successIcon.style.top = '50%';
        successIcon.style.left = '50%';
        successIcon.style.transform = 'translate(-50%, -50%)';
        successIcon.style.fontSize = '4rem';
        successIcon.style.opacity = '0';
        successIcon.style.zIndex = '10001';
        successIcon.style.animation = 'emailSent 2s forwards';
        
        document.body.appendChild(successIcon);
        
        setTimeout(() => {
            successIcon.remove();
        }, 2000);
    }
    
    // Ajouter l'animation CSS pour l'envoi d'email
    const style = document.createElement('style');
    style.textContent = `
        @keyframes emailSent {
            0% { 
                transform: translate(-50%, -50%) scale(0.5); 
                opacity: 0; 
            }
            50% { 
                transform: translate(-50%, -50%) scale(1.2); 
                opacity: 1; 
                filter: drop-shadow(0 0 20px rgba(0, 255, 0, 0.8));
            }
            100% { 
                transform: translate(-50%, -50%) scale(1) translateY(-100px); 
                opacity: 0; 
            }
        }
        
        @keyframes sparkFade {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }
        
        @keyframes fireGlow {
            0%, 100% { 
                transform: scale(1) rotate(0deg); 
                filter: drop-shadow(0 0 5px rgba(255, 51, 0, 0.8));
            }
            50% { 
                transform: scale(1.2) rotate(10deg); 
                filter: drop-shadow(0 0 10px rgba(255, 51, 0, 0.9));
            }
        }
    `;
    document.head.appendChild(style);
    
    // Effet de destruction au clic (pour le fun)
    document.addEventListener('click', function(e) {
        if (e.target.closest('.match-card') || e.target.closest('.action-btn') || e.target.closest('.add-match-btn')) {
            return;
        }
        
        const spark = document.createElement('div');
        spark.style.position = 'fixed';
        spark.style.left = e.clientX + 'px';
        spark.style.top = e.clientY + 'px';
        spark.style.width = '8px';
        spark.style.height = '8px';
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
    
    // Auto-refresh pour les matchs en cours
    setInterval(() => {
        document.querySelectorAll('.match-card.ongoing .team-score').forEach(scoreElement => {
            const currentScore = parseInt(scoreElement.textContent);
            if (Math.random() > 0.7) {
                const newScore = currentScore + Math.floor(Math.random() * 3);
                scoreElement.textContent = newScore;
                scoreElement.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    scoreElement.style.transform = 'scale(1)';
                }, 300);
                
                // Mettre à jour les barres de score
                updateScoreBars();
            }
        });
    }, 5000);
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
        return "front/matchy/index.html.twig";
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
        return array (  1721 => 1394,  1713 => 1389,  1707 => 1385,  1697 => 1380,  1690 => 1375,  1678 => 1369,  1673 => 1366,  1664 => 1360,  1661 => 1359,  1659 => 1358,  1651 => 1353,  1647 => 1351,  1641 => 1347,  1635 => 1344,  1632 => 1343,  1630 => 1342,  1622 => 1337,  1617 => 1336,  1614 => 1335,  1611 => 1334,  1608 => 1333,  1605 => 1332,  1602 => 1331,  1599 => 1330,  1596 => 1329,  1593 => 1328,  1590 => 1327,  1588 => 1326,  1580 => 1321,  1572 => 1316,  1562 => 1309,  1556 => 1307,  1552 => 1306,  1543 => 1300,  1537 => 1298,  1533 => 1297,  1526 => 1293,  1522 => 1291,  1519 => 1290,  1516 => 1289,  1513 => 1288,  1511 => 1287,  1503 => 1282,  1498 => 1280,  1492 => 1277,  1488 => 1276,  1484 => 1275,  1480 => 1274,  1476 => 1273,  1472 => 1272,  1468 => 1271,  1462 => 1270,  1459 => 1269,  1457 => 1267,  1456 => 1266,  1455 => 1265,  1454 => 1263,  1453 => 1262,  1452 => 1259,  1451 => 1258,  1450 => 1256,  1449 => 1255,  1448 => 1254,  1446 => 1253,  1442 => 1252,  1438 => 1250,  1436 => 1249,  1429 => 1245,  1400 => 1218,  1394 => 1217,  1386 => 1215,  1383 => 1214,  1380 => 1213,  1375 => 1212,  1373 => 1211,  1357 => 1197,  1350 => 1193,  1347 => 1192,  1345 => 1191,  1335 => 1184,  1327 => 1178,  1318 => 1175,  1313 => 1173,  1309 => 1172,  1305 => 1171,  1302 => 1170,  1299 => 1169,  1296 => 1168,  1293 => 1167,  1290 => 1166,  1285 => 1165,  1283 => 1164,  1234 => 1117,  1221 => 1116,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}⚔️ ARENA - Matchs E-sport{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --blood-red: #ff0000;
        --fire-red: #ff3300;
        --dark-red: #cc0000;
        --neon-red: #ff003c;
        --red-glow: rgba(255, 0, 0, 0.7);
        --red-light: rgba(255, 51, 51, 0.3);
        --black-bg: #000000;
        --dark-gray: #1a1a1a;
        --gray: #333333;
        --light-gray: #666666;
        --white: #ffffff;
        --red-gradient: linear-gradient(135deg, #ff0000 0%, #cc0000 50%, #990000 100%);
        --fire-gradient: linear-gradient(45deg, #ff0000, #ff3300, #cc0000);
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
    
    .add-match-btn {
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
    
    .add-match-btn::before {
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
    
    .add-match-btn:hover::before {
        left: 100%;
    }
    
    .add-match-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.9);
        background: linear-gradient(45deg, var(--fire-red), var(--blood-red));
    }
    
    .live-counter {
        position: absolute;
        top: -10px;
        right: -10px;
        background: var(--fire-red);
        color: white;
        font-family: 'Orbitron', monospace;
        font-size: 0.8rem;
        padding: 0.3rem 0.6rem;
        border-radius: 12px;
        border: 2px solid white;
        animation: counterPulse 2s infinite;
        box-shadow: 0 0 10px rgba(255, 51, 0, 0.8);
        z-index: 10;
    }
    
    @keyframes counterPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    
    .matches-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(420px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
        position: relative;
    }
    
    .match-card.selectable {
        cursor: grab;
        user-select: none;
    }
    
    .match-card.selectable:active {
        cursor: grabbing;
    }
    
    .match-card.selected {
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.7), 
                    0 20px 40px rgba(0, 0, 0, 0.5);
        border-color: white;
        animation: selectedPulse 1.5s infinite;
    }
    
    @keyframes selectedPulse {
        0%, 100% { border-color: white; }
        50% { border-color: var(--blood-red); }
    }
    
    .match-card {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.8rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        min-height: 320px;
        display: flex;
        flex-direction: column;
    }
    
    .match-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.7),
            0 0 30px rgba(255, 0, 0, 0.5);
        border-color: var(--blood-red);
    }
    
    .match-card::before {
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
    
    .match-card.ongoing::after {
        content: '🔥';
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 1.5rem;
        animation: fireGlow 1.5s infinite alternate;
        filter: drop-shadow(0 0 5px rgba(255, 51, 0, 0.8));
        z-index: 2;
    }
    
    @keyframes fireGlow {
        from { transform: scale(1); opacity: 0.8; }
        to { transform: scale(1.2); opacity: 1; }
    }
    
    .match-id {
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
    
    .match-header {
        text-align: center;
        margin-bottom: 1.5rem;
        flex-shrink: 0;
        position: relative;
    }
    
    .match-game {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .match-date {
        color: var(--fire-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .teams-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        padding: 1.2rem;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        border: 1px solid rgba(255, 0, 0, 0.3);
        flex-shrink: 0;
        position: relative;
    }
    
    .score-bar-container {
        position: absolute;
        bottom: -5px;
        left: 10px;
        right: 10px;
        height: 3px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 2px;
        overflow: hidden;
    }
    
    .score-bar {
        height: 100%;
        background: var(--fire-red);
        transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 0 10px var(--fire-red);
    }
    
    .team-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        min-width: 0;
    }
    
    .team-name {
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        color: white;
        margin-bottom: 0.5rem;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
        padding: 0 0.5rem;
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
    }
    
    .team-score {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 900;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 51, 0, 0.7);
        min-width: 40px;
        text-align: center;
    }
    
    .vs-container {
        padding: 0 1.2rem;
        color: var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.3rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
        flex-shrink: 0;
        position: relative;
    }
    
    .vs-container::before {
        content: '⚔️';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1rem;
        opacity: 0.3;
    }
    
    .match-details {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
        flex-grow: 1;
        overflow: hidden;
    }
    
    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #cc9999;
        font-size: 0.95rem;
        min-height: 24px;
    }
    
    .detail-item strong {
        color: var(--fire-red);
        min-width: 80px;
        flex-shrink: 0;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .detail-item span {
        flex-grow: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .status-badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-family: 'Orbitron', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
    }
    
    .status-planned {
        background: rgba(255, 0, 0, 0.15);
        color: var(--blood-red);
        border: 1px solid var(--blood-red);
    }
    
    .status-ongoing {
        background: rgba(255, 102, 0, 0.15);
        color: #ff6600;
        border: 1px solid #ff6600;
        animation: pulse 1.5s infinite;
        box-shadow: 0 0 10px rgba(255, 102, 0, 0.5);
    }
    
    .status-finished {
        background: rgba(204, 0, 0, 0.15);
        color: var(--dark-red);
        border: 1px solid var(--dark-red);
    }
    
    .status-cancelled {
        background: rgba(153, 0, 0, 0.15);
        color: #990000;
        border: 1px solid #990000;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; box-shadow: 0 0 10px rgba(255, 102, 0, 0.5); }
        50% { opacity: 0.8; box-shadow: 0 0 20px rgba(255, 102, 0, 0.7); }
    }
    
    .winner-info {
        background: rgba(255, 0, 0, 0.2);
        color: var(--fire-red);
        padding: 0.8rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        text-align: center;
        margin-top: auto;
        border: 1px solid rgba(255, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
        position: relative;
        overflow: hidden;
    }
    
    .winner-info::before {
        content: '🏆';
        position: absolute;
        left: 10px;
        animation: trophyShine 2s infinite;
    }
    
    @keyframes trophyShine {
        0%, 100% { transform: rotate(0deg); }
        50% { transform: rotate(15deg); }
    }
    
    .no-winner {
        background: rgba(153, 0, 0, 0.15);
        color: #cc6666;
        padding: 0.8rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        text-align: center;
        margin-top: auto;
        border: 1px solid rgba(153, 0, 0, 0.3);
    }
    
    .actions-container {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 0, 0, 0.2);
        flex-shrink: 0;
    }
    
    .action-btn {
        padding: 0.6rem 1.2rem;
        border: none;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
        flex: 1;
        justify-content: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
    }
    
    .view-btn {
        background: linear-gradient(45deg, #8b0000, #660000);
        color: white;
    }
    
    .edit-btn {
        background: linear-gradient(45deg, #b30000, #990000);
        color: white;
    }
    
    .email-btn {
        background: linear-gradient(45deg, #cc0000, #990000);
        color: white;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
        filter: brightness(1.3);
    }
    
    .action-btn::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }
    
    .action-btn:hover::after {
        left: 100%;
    }
    
    .no-matches {
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
    
    .no-matches h2 {
        color: var(--blood-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        margin-bottom: 1rem;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .no-matches p {
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
    .match-card.hidden {
        display: none;
    }
    
    .match-card.filtered-out {
        opacity: 0.3;
        transform: scale(0.95);
        transition: all 0.3s ease;
    }
    
    /* Modal pour l'email */
    .email-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 10000;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
    }
    
    .email-modal.active {
        display: flex;
        animation: modalFadeIn 0.3s ease;
    }
    
    @keyframes modalFadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .email-modal-content {
        background: rgba(26, 0, 0, 0.95);
        border-radius: 20px;
        padding: 2rem;
        width: 90%;
        max-width: 500px;
        border: 2px solid var(--blood-red);
        box-shadow: 0 0 40px rgba(255, 0, 0, 0.5);
        position: relative;
        animation: modalSlideUp 0.4s ease;
    }
    
    @keyframes modalSlideUp {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .email-modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .email-modal-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 51, 0, 0.5);
    }
    
    .email-modal-close {
        background: none;
        border: none;
        color: var(--blood-red);
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .email-modal-close:hover {
        transform: scale(1.2);
        color: white;
    }
    
    .email-form-group {
        margin-bottom: 1.5rem;
    }
    
    .email-form-label {
        display: block;
        color: var(--fire-red);
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .email-form-input {
        width: 100%;
        padding: 0.8rem 1rem;
        background: rgba(0, 0, 0, 0.8);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .email-form-input:focus {
        outline: none;
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
    }
    
    .email-form-textarea {
        width: 100%;
        padding: 0.8rem 1rem;
        background: rgba(0, 0, 0, 0.8);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
        min-height: 120px;
        resize: vertical;
    }
    
    .email-form-textarea:focus {
        outline: none;
        border-color: var(--fire-red);
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
    }
    
    .email-form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .email-send-btn {
        flex: 1;
        padding: 1rem;
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        border: none;
        border-radius: 8px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .email-send-btn:hover:not(:disabled) {
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(255, 0, 0, 0.6);
        background: linear-gradient(45deg, var(--fire-red), var(--blood-red));
    }
    
    .email-send-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .email-cancel-btn {
        flex: 1;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid var(--light-gray);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .email-cancel-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: white;
    }
    
    .email-status {
        text-align: center;
        padding: 1rem;
        margin-top: 1rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        display: none;
    }
    
    .email-status.success {
        background: rgba(0, 255, 0, 0.1);
        color: #00ff00;
        border: 1px solid #00ff00;
        display: block;
    }
    
    .email-status.error {
        background: rgba(255, 0, 0, 0.1);
        color: var(--blood-red);
        border: 1px solid var(--blood-red);
        display: block;
    }
    
    .email-status.loading {
        background: rgba(255, 255, 0, 0.1);
        color: #ffff00;
        border: 1px solid #ffff00;
        display: block;
    }
    
    @media (max-width: 768px) {
        .main-title {
            font-size: 2rem;
        }
        
        .matches-grid {
            grid-template-columns: 1fr;
        }
        
        .header-glow {
            padding: 1rem;
        }
        
        .controls-container {
            flex-direction: column;
            align-items: center;
        }
        
        .add-match-btn {
            min-width: 250px;
            font-size: 1rem;
        }
        
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
        
        .teams-container {
            flex-direction: column;
            gap: 1rem;
        }
        
        .vs-container {
            padding: 1rem 0;
        }
        
        .team-name {
            font-size: 1.1rem;
        }
        
        .match-card {
            min-height: 350px;
        }
        
        .email-modal-content {
            padding: 1.5rem;
            margin: 1rem;
        }
        
        .email-form-actions {
            flex-direction: column;
        }
    }
    
    @media (max-width: 480px) {
        .gaming-container {
            padding: 1rem;
        }
        
        .match-card {
            padding: 1.5rem;
        }
        
        .match-game {
            font-size: 1.4rem;
        }
        
        .team-name {
            font-size: 1rem;
        }
        
        .team-score {
            font-size: 1.8rem;
        }
        
        .detail-item {
            font-size: 0.9rem;
        }
        
        .action-btn {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"gaming-container\">
    
    <!-- Modal pour l'envoi d'email -->
    <div class=\"email-modal\" id=\"emailModal\">
        <div class=\"email-modal-content\">
            <div class=\"email-modal-header\">
                <h3 class=\"email-modal-title\">📧 ENVOYER UN RÉCAPITULATIF</h3>
                <button class=\"email-modal-close\" id=\"closeEmailModal\">✕</button>
            </div>
            
            <form id=\"emailForm\">
                <input type=\"hidden\" id=\"matchId\" name=\"matchId\">
                <input type=\"hidden\" id=\"matchData\" name=\"matchData\">
                
                <div class=\"email-form-group\">
                    <label class=\"email-form-label\" for=\"recipientEmail\">Email du destinataire</label>
                    <input type=\"email\" id=\"recipientEmail\" name=\"recipientEmail\" 
                           class=\"email-form-input\" placeholder=\"exemple@phantom-force.com\" required>
                </div>
                
                <div class=\"email-form-group\">
                    <label class=\"email-form-label\" for=\"emailSubject\">Sujet de l'email</label>
                    <input type=\"text\" id=\"emailSubject\" name=\"emailSubject\" 
                           class=\"email-form-input\" placeholder=\"Récapitulatif du match\" required>
                </div>
                
                <div class=\"email-form-group\">
                    <label class=\"email-form-label\" for=\"emailMessage\">Message personnalisé</label>
                    <textarea id=\"emailMessage\" name=\"emailMessage\" class=\"email-form-textarea\" 
                              placeholder=\"Ajoutez un message personnel...\"></textarea>
                </div>
                
                <div class=\"email-form-actions\">
                    <button type=\"button\" class=\"email-cancel-btn\" id=\"cancelEmail\">ANNULER</button>
                    <button type=\"submit\" class=\"email-send-btn\" id=\"sendEmailBtn\">
                        <span id=\"sendEmailText\">🚀 ENVOYER LE RÉCAP</span>
                        <span id=\"sendingText\" style=\"display: none;\">⏳ ENVOI EN COURS...</span>
                    </button>
                </div>
                
                <div class=\"email-status\" id=\"emailStatus\"></div>
            </form>
        </div>
    </div>
    
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
        <h1 class=\"main-title\">PHANTOM FORCE - MATCHS</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            BATAILLES ÉPICQUES • {{ matchies|length }} COMBATS PROGRAMMÉS
        </p>
        <div class=\"live-counter\" id=\"liveCounter\">⚡ LIVE</div>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}

        <a href=\"{{ path('app_matchy_new') }}\" class=\"add-match-btn\">
            ⚔️ PROGRAMMER UN COMBAT
        </a>
        {% endif %}
    </div>
    
    <!-- Barre de recherche et filtres -->
    <div class=\"filters-container\">
        <div class=\"search-box\">
            <input type=\"text\" id=\"searchInput\" placeholder=\"🔍 Rechercher un combat...\" class=\"search-input\">
            <button class=\"clear-search\" id=\"clearSearch\">✖</button>
        </div>
        
        <div class=\"filter-controls\">
            <div class=\"filter-group\">
                <label class=\"filter-label\">🎮 FILTRER PAR JEU :</label>
                <select id=\"gameFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les jeux</option>
                    {% set games = [] %}
                    {% for match in matchies %}
                        {% if match.game not in games %}
                            {% set games = games|merge([match.game]) %}
                            <option value=\"{{ match.game }}\">{{ match.game }}</option>
                        {% endif %}
                    {% endfor %}
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">📅 FILTRER PAR STATUT :</label>
                <select id=\"statusFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les statuts</option>
                    <option value=\"planned\">Planifié</option>
                    <option value=\"ongoing\">En cours</option>
                    <option value=\"finished\">Terminé</option>
                    <option value=\"cancelled\">Annulé</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">🏆 AVEC GAGNANT :</label>
                <select id=\"winnerFilter\" class=\"filter-select\">
                    <option value=\"\">Tous</option>
                    <option value=\"with\">Avec gagnant</option>
                    <option value=\"without\">Sans gagnant</option>
                </select>
            </div>
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"matchCount\">{{ matchies|length }}</span> COMBATS ENREGISTRÉS
        </div>
    </div>
    
    {% if matchies|length > 0 %}
        <!-- Grille des matchs -->
        <div class=\"matches-grid\" id=\"matchesGrid\">
            {% for match in matchies %}
                {% set matchData = {
                    'id': match.id,
                    'game': match.game,
                    'date': match.matchDate ? match.matchDate|date('d/m/Y H:i') : 'Date non définie',
                    'team1': {
                        'name': match.team1.name|default('Équipe 1'),
                        'score': match.scoreTeam1 ?? 0
                    },
                    'team2': {
                        'name': match.team2.name|default('Équipe 2'),
                        'score': match.scoreTeam2 ?? 0
                    },
                    'status': match.status|upper,
                    'winner': match.winnerTeam ? match.winnerTeam.name : 'Pas encore de vainqueur',
                    'status_label': match.statusLabel|default(match.status|upper)
                } %}
                
                <div class=\"match-card {% if match.status == 'ongoing' %}ongoing{% endif %}\" 
                     data-id=\"{{ match.id }}\" 
                     data-game=\"{{ match.game|lower }}\" 
                     data-status=\"{{ match.status|lower }}\"
                     data-date=\"{{ match.matchDate ? match.matchDate|date('U') : 0 }}\"
                     data-winner=\"{{ match.winnerTeam ? 'yes' : 'no' }}\"
                     data-match='{{ matchData|json_encode|escape('html_attr') }}'>
                    <div class=\"match-id\">#{{ match.id }}</div>
                    
                    <div class=\"match-header\">
                        <div class=\"match-game\">{{ match.game|upper }}</div>
                        <div class=\"match-date\">
                            {{ match.matchDate ? match.matchDate|date('d/m/Y H:i') : 'Date non définie' }}
                        </div>
                    </div>
                    
                    <div class=\"teams-container\">
                        {% set score1 = match.scoreTeam1 ?? 0 %}
                        {% set score2 = match.scoreTeam2 ?? 0 %}
                        {% set totalScore = score1 + score2 %}
                        {% set percentage1 = totalScore > 0 ? (score1 / totalScore * 100) : 50 %}
                        
                        <div class=\"score-bar-container\">
                            <div class=\"score-bar\" style=\"width: {{ percentage1 }}%\"></div>
                        </div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"{{ match.team1.name|default('Équipe 1') }}\">
                                {{ match.team1.name|default('Équipe 1')|slice(0, 15) }}{{ match.team1.name|default('')|length > 15 ? '...' : '' }}
                            </div>
                            <div class=\"team-score\">{{ score1 }}</div>
                        </div>
                        
                        <div class=\"vs-container\">VS</div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"{{ match.team2.name|default('Équipe 2') }}\">
                                {{ match.team2.name|default('Équipe 2')|slice(0, 15) }}{{ match.team2.name|default('')|length > 15 ? '...' : '' }}
                            </div>
                            <div class=\"team-score\">{{ score2 }}</div>
                        </div>
                    </div>
                    
                    <div class=\"match-details\">
                        <div class=\"detail-item\">
                            <strong>🎮 JEU :</strong>
                            <span>{{ match.game }}</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📅 DATE :</strong>
                            <span>{{ match.matchDate ? match.matchDate|date('d/m/Y H:i') : 'N/A' }}</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📊 STATUT :</strong>
                            {% set statusClass = '' %}
                            {% if match.status == 'planned' %}
                                {% set statusClass = 'status-planned' %}
                            {% elseif match.status == 'ongoing' %}
                                {% set statusClass = 'status-ongoing' %}
                            {% elseif match.status == 'finished' %}
                                {% set statusClass = 'status-finished' %}
                            {% elseif match.status == 'cancelled' %}
                                {% set statusClass = 'status-cancelled' %}
                            {% endif %}
                            <span class=\"status-badge {{ statusClass }}\">
                                {{ match.status|upper }}
                            </span>
                        </div>
                    </div>
                    
                    {% if match.winnerTeam %}
                        <div class=\"winner-info\">
                            🏆 VICTOIRE : {{ match.winnerTeam.name }}
                        </div>
                    {% else %}
                        <div class=\"no-winner\">
                            ⏳ Pas encore de vainqueur
                        </div>
                    {% endif %}
                    
                    <div class=\"actions-container\">
                        <a href=\"{{ path('app_matchy_show', {'id': match.id}) }}\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails du match\">
                            👁️ ANALYSER
                        </a>
                            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}

                        <a href=\"{{ path('app_matchy_edit', {'id': match.id}) }}\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier le match\">
                            ⚙️ MODIFIER
                        </a>
                        {% endif %}
                        
                        <button class=\"action-btn email-btn\" 
                                title=\"Envoyer un récapitulatif par email\"
                                data-match-id=\"{{ match.id }}\">
                            📧 RECAP
                        </button>
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeMatches\">{{ matchies|length }}</span> BATAILLES ENREGISTRÉES • DERNIÈRE MISE À JOUR : {{ \"now\"|date('H:i:s') }}
            </p>
        </div>
        
    {% else %}
        <!-- Message quand aucun match n'existe -->
        <div class=\"no-matches\">
            <h2>⚠️ CHAMP DE BATAILLE VIDE ⚠️</h2>
            <p>Aucun combat n'a encore été programmé. Organisez le premier affrontement !</p>
            <a href=\"{{ path('app_matchy_new') }}\" class=\"add-match-btn\" style=\"display: inline-block; width: auto;\">
                🏆 PROGRAMMER LE PREMIER COMBAT
            </a>
        </div>
    {% endif %}
</div>

<script>
    // Initialisation des variables
    let allMatches = Array.from(document.querySelectorAll('.match-card'));
    let currentMatches = [...allMatches];
    let currentMatchData = null;
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const statusFilter = document.getElementById('statusFilter');
    const winnerFilter = document.getElementById('winnerFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const matchCount = document.getElementById('matchCount');
    const activeMatches = document.getElementById('activeMatches');
    const liveCounter = document.getElementById('liveCounter');
    
    // Éléments email
    const emailModal = document.getElementById('emailModal');
    const closeEmailModal = document.getElementById('closeEmailModal');
    const cancelEmail = document.getElementById('cancelEmail');
    const emailForm = document.getElementById('emailForm');
    const sendEmailBtn = document.getElementById('sendEmailBtn');
    const sendEmailText = document.getElementById('sendEmailText');
    const sendingText = document.getElementById('sendingText');
    const emailStatus = document.getElementById('emailStatus');
    const recipientEmail = document.getElementById('recipientEmail');
    const emailSubject = document.getElementById('emailSubject');
    const emailMessage = document.getElementById('emailMessage');
    const matchIdInput = document.getElementById('matchId');
    const matchDataInput = document.getElementById('matchData');
    
    // API Email Configuration (à configurer selon votre service d'email)
    const EMAIL_API_CONFIG = {
        // Utilisation de EmailJS (https://www.emailjs.com/) - Exemple
        // Vous pouvez remplacer par votre propre API
        serviceId: 'service_z6s2ry1', // À remplacer avec votre Service ID
        templateId: 'template_504zw2f', // À remplacer avec votre Template ID
        userId: 'vWh8V7F3_yVsHPK_o', // À remplacer avec votre Public Key
        endpoint: 'https://api.emailjs.com/api/v1.0/email/send'
    };
    
    // Fonction pour mettre à jour le compteur
    function updateCounter(visibleCount) {
        matchCount.textContent = visibleCount;
        if (activeMatches) {
            activeMatches.textContent = visibleCount;
        }
        
        // Animation du compteur
        matchCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            matchCount.style.transform = 'scale(1)';
        }, 200);
    }
    
    // Fonction de recherche
    function searchMatches() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentMatches.forEach(match => {
            const gameName = match.dataset.game;
            const matchId = match.querySelector('.match-id').textContent.toLowerCase();
            const team1Name = match.querySelector('.team-info:first-child .team-name').textContent.toLowerCase();
            const team2Name = match.querySelector('.team-info:last-child .team-name').textContent.toLowerCase();
            
            if (searchTerm === '' || 
                gameName.includes(searchTerm) || 
                matchId.includes(searchTerm) ||
                team1Name.includes(searchTerm) ||
                team2Name.includes(searchTerm)) {
                match.classList.remove('hidden', 'filtered-out');
            } else {
                match.classList.add('filtered-out');
            }
        });
        
        applyFilters();
    }
    
    // Fonction pour appliquer tous les filtres
    function applyFilters() {
        let visibleMatches = [];
        
        currentMatches.forEach(match => {
            let isVisible = !match.classList.contains('filtered-out');
            
            // Filtre par jeu
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && match.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            // Filtre par statut
            const selectedStatus = statusFilter.value;
            if (selectedStatus && match.dataset.status !== selectedStatus) {
                isVisible = false;
            }
            
            // Filtre par gagnant
            const winnerStatus = winnerFilter.value;
            if (winnerStatus === 'with' && match.dataset.winner === 'no') {
                isVisible = false;
            }
            if (winnerStatus === 'without' && match.dataset.winner === 'yes') {
                isVisible = false;
            }
            
            if (isVisible) {
                match.classList.remove('hidden');
                visibleMatches.push(match);
            } else {
                match.classList.add('hidden');
            }
        });
        
        // Mettre à jour le compteur
        updateCounter(visibleMatches.length);
    }
    
    // Événements
    searchInput.addEventListener('input', searchMatches);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchMatches();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    statusFilter.addEventListener('change', applyFilters);
    winnerFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        statusFilter.value = '';
        winnerFilter.value = '';
        
        currentMatches.forEach(match => {
            match.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        
        // Afficher le nom complet des équipes au survol
        document.querySelectorAll('.team-name').forEach(element => {
            element.addEventListener('mouseenter', function() {
                const title = this.getAttribute('title');
                if (title && title !== this.textContent) {
                    const originalText = this.textContent;
                    this.textContent = title;
                    
                    this.addEventListener('mouseleave', () => {
                        this.textContent = originalText;
                    }, { once: true });
                }
            });
        });
        
        // Animation du compteur live
        if (liveCounter) {
            setInterval(() => {
                liveCounter.style.transform = 'scale(1.1)';
                liveCounter.style.boxShadow = '0 0 15px rgba(255, 51, 0, 0.9)';
                setTimeout(() => {
                    liveCounter.style.transform = 'scale(1)';
                    liveCounter.style.boxShadow = '0 0 10px rgba(255, 51, 0, 0.8)';
                }, 300);
            }, 2000);
        }
        
        // Mise à jour de la barre de score en direct
        updateScoreBars();
        
        // Gestion des boutons d'email
        document.querySelectorAll('.email-btn').forEach(button => {
            button.addEventListener('click', function() {
                const matchId = this.getAttribute('data-match-id');
                const matchCard = this.closest('.match-card');
                const matchData = matchCard.getAttribute('data-match');
                
                openEmailModal(matchId, matchData);
            });
        });
    });
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.match-card');
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
    
    // Effet de score en temps réel
    function updateScoreBars() {
        document.querySelectorAll('.match-card').forEach(card => {
            const score1 = parseInt(card.querySelector('.team-info:first-child .team-score').textContent);
            const score2 = parseInt(card.querySelector('.team-info:last-child .team-score').textContent);
            const totalScore = score1 + score2;
            const percentage1 = totalScore > 0 ? (score1 / totalScore * 100) : 50;
            
            const scoreBar = card.querySelector('.score-bar');
            if (scoreBar) {
                scoreBar.style.width = `\${percentage1}%`;
                
                // Animation pour les matchs en cours
                if (card.classList.contains('ongoing')) {
                    scoreBar.style.animation = 'pulse 2s infinite';
                }
            }
        });
    }
    
    // Gestion de l'email modal
    function openEmailModal(matchId, matchData) {
        currentMatchData = JSON.parse(matchData);
        
        // Remplir les champs du formulaire
        matchIdInput.value = matchId;
        matchDataInput.value = matchData;
        
        // Générer un sujet par défaut
        const defaultSubject = `📊 Récapitulatif du match #\${matchId} - \${currentMatchData.team1.name} vs \${currentMatchData.team2.name}`;
        emailSubject.value = defaultSubject;
        
        // Générer un message par défaut
        const defaultMessage = generateDefaultEmailMessage(currentMatchData);
        emailMessage.value = defaultMessage;
        
        // Réinitialiser le statut
        emailStatus.className = 'email-status';
        emailStatus.style.display = 'none';
        emailStatus.textContent = '';
        
        // Afficher le modal
        emailModal.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Focus sur le premier champ
        recipientEmail.focus();
    }
    
    function closeEmailModalFunc() {
        emailModal.classList.remove('active');
        document.body.style.overflow = '';
        currentMatchData = null;
        emailForm.reset();
    }
    
    closeEmailModal.addEventListener('click', closeEmailModalFunc);
    cancelEmail.addEventListener('click', closeEmailModalFunc);
    
    // Fermer le modal avec la touche ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && emailModal.classList.contains('active')) {
            closeEmailModalFunc();
        }
    });
    
    // Générer le message email par défaut (UNIQUEMENT avec les attributs existants)
    function generateDefaultEmailMessage(matchData) {
        const winnerText = matchData.winner !== 'Pas encore de vainqueur' 
            ? `🏆 **Vainqueur :** \${matchData.winner}`
            : '⚔️ **Match en attente de résultat**';
        
        return `Bonjour,

Voici le récapitulatif du match #\${matchData.id} :

🎮 **Jeu :** \${matchData.game}
📅 **Date :** \${matchData.date}

⚔️ **Équipes :**
- \${matchData.team1.name} : \${matchData.team1.score} points
- \${matchData.team2.name} : \${matchData.team2.score} points

📊 **Statut :** \${matchData.status_label || matchData.status}
\${winnerText}

🏆 **Détails du match :**
Le match s'est déroulé sur la plateforme Phantom Force Esports.

Pour plus de détails, consultez la plateforme Phantom Force.

Cordialement,
L'équipe Phantom Force Esports

--
Cet email a été généré automatiquement.`;
    }
    
    // Envoyer l'email via l'API
    emailForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Validation de l'email
        const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
        if (!emailRegex.test(recipientEmail.value)) {
            showEmailStatus('Veuillez entrer une adresse email valide.', 'error');
            return;
        }
        
        // Afficher l'état d'envoi
        sendEmailBtn.disabled = true;
        sendEmailText.style.display = 'none';
        sendingText.style.display = 'inline';
        
        showEmailStatus('Envoi du récapitulatif en cours...', 'loading');
        
        try {
            // Préparer les données pour l'API (UNIQUEMENT avec les attributs existants)
            const emailData = {
                service_id: EMAIL_API_CONFIG.serviceId,
                template_id: EMAIL_API_CONFIG.templateId,
                user_id: EMAIL_API_CONFIG.userId,
                template_params: {
                    to_email: recipientEmail.value,
                    subject: emailSubject.value,
                    message: emailMessage.value,
                    match_id: currentMatchData.id,
                    game: currentMatchData.game,
                    match_date: currentMatchData.date,
                    team1_name: currentMatchData.team1.name,
                    team1_score: currentMatchData.team1.score,
                    team2_name: currentMatchData.team2.name,
                    team2_score: currentMatchData.team2.score,
                    status: currentMatchData.status_label || currentMatchData.status,
                    winner: currentMatchData.winner,
                    sent_date: new Date().toLocaleDateString('fr-FR')
                }
            };
            
            // Envoyer l'email via l'API
            const response = await fetch(EMAIL_API_CONFIG.endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(emailData)
            });
            
            if (response.ok) {
                showEmailStatus('✅ Récapitulatif envoyé avec succès !', 'success');
                
                // Réinitialiser après succès
                setTimeout(() => {
                    closeEmailModalFunc();
                    sendEmailBtn.disabled = false;
                    sendEmailText.style.display = 'inline';
                    sendingText.style.display = 'none';
                }, 2000);
                
                // Animation de succès
                createSuccessAnimation();
            } else {
                throw new Error('Erreur lors de l\\'envoi');
            }
            
        } catch (error) {
            console.error('Erreur d\\'envoi d\\'email:', error);
            showEmailStatus('❌ Erreur lors de l\\'envoi. Veuillez réessayer.', 'error');
            
            // Réactiver le bouton
            sendEmailBtn.disabled = false;
            sendEmailText.style.display = 'inline';
            sendingText.style.display = 'none';
        }
    });
    
    function showEmailStatus(message, type) {
        emailStatus.textContent = message;
        emailStatus.className = `email-status \${type}`;
        emailStatus.style.display = 'block';
        
        // Animation d'entrée
        emailStatus.style.opacity = '0';
        emailStatus.style.transform = 'translateY(-10px)';
        
        setTimeout(() => {
            emailStatus.style.opacity = '1';
            emailStatus.style.transform = 'translateY(0)';
            emailStatus.style.transition = 'all 0.3s ease';
        }, 10);
    }
    
    function createSuccessAnimation() {
        const successIcon = document.createElement('div');
        successIcon.innerHTML = '📧';
        successIcon.style.position = 'fixed';
        successIcon.style.top = '50%';
        successIcon.style.left = '50%';
        successIcon.style.transform = 'translate(-50%, -50%)';
        successIcon.style.fontSize = '4rem';
        successIcon.style.opacity = '0';
        successIcon.style.zIndex = '10001';
        successIcon.style.animation = 'emailSent 2s forwards';
        
        document.body.appendChild(successIcon);
        
        setTimeout(() => {
            successIcon.remove();
        }, 2000);
    }
    
    // Ajouter l'animation CSS pour l'envoi d'email
    const style = document.createElement('style');
    style.textContent = `
        @keyframes emailSent {
            0% { 
                transform: translate(-50%, -50%) scale(0.5); 
                opacity: 0; 
            }
            50% { 
                transform: translate(-50%, -50%) scale(1.2); 
                opacity: 1; 
                filter: drop-shadow(0 0 20px rgba(0, 255, 0, 0.8));
            }
            100% { 
                transform: translate(-50%, -50%) scale(1) translateY(-100px); 
                opacity: 0; 
            }
        }
        
        @keyframes sparkFade {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }
        
        @keyframes fireGlow {
            0%, 100% { 
                transform: scale(1) rotate(0deg); 
                filter: drop-shadow(0 0 5px rgba(255, 51, 0, 0.8));
            }
            50% { 
                transform: scale(1.2) rotate(10deg); 
                filter: drop-shadow(0 0 10px rgba(255, 51, 0, 0.9));
            }
        }
    `;
    document.head.appendChild(style);
    
    // Effet de destruction au clic (pour le fun)
    document.addEventListener('click', function(e) {
        if (e.target.closest('.match-card') || e.target.closest('.action-btn') || e.target.closest('.add-match-btn')) {
            return;
        }
        
        const spark = document.createElement('div');
        spark.style.position = 'fixed';
        spark.style.left = e.clientX + 'px';
        spark.style.top = e.clientY + 'px';
        spark.style.width = '8px';
        spark.style.height = '8px';
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
    
    // Auto-refresh pour les matchs en cours
    setInterval(() => {
        document.querySelectorAll('.match-card.ongoing .team-score').forEach(scoreElement => {
            const currentScore = parseInt(scoreElement.textContent);
            if (Math.random() > 0.7) {
                const newScore = currentScore + Math.floor(Math.random() * 3);
                scoreElement.textContent = newScore;
                scoreElement.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    scoreElement.style.transform = 'scale(1)';
                }, 300);
                
                // Mettre à jour les barres de score
                updateScoreBars();
            }
        });
    }, 5000);
</script>
{% endblock %}", "front/matchy/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\matchy\\index.html.twig");
    }
}
