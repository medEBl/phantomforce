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
class __TwigTemplate_1032fc9444df5bbbf8409be487831fc9 extends Template
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
    
    .delete-btn {
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
    
    /* Actions avancées */
    .advanced-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin: 1.5rem 0;
        flex-wrap: wrap;
    }
    
    .advanced-btn {
        background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 10px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
    }
    
    .advanced-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
    }
    
    /* Notifications */
    .notification-bell {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        border: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        z-index: 1000;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
        transition: all 0.3s ease;
    }
    
    .notification-bell:hover {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.7);
    }
    
    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--fire-red);
        color: white;
        font-size: 0.7rem;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: badgePulse 1.5s infinite;
    }
    
    @keyframes badgePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    /* Modal notifications */
    .notifications-modal {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 350px;
        max-height: 400px;
        background: rgba(26, 0, 0, 0.95);
        border: 2px solid var(--blood-red);
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
        z-index: 1001;
        overflow: hidden;
    }
    
    .notifications-modal.active {
        display: block;
        animation: slideUp 0.3s ease;
    }
    
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .notifications-header {
        padding: 1rem;
        background: rgba(255, 0, 0, 0.2);
        border-bottom: 1px solid var(--blood-red);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .notifications-title {
        font-family: 'Orbitron', sans-serif;
        color: var(--fire-red);
        font-size: 1.1rem;
    }
    
    .notifications-list {
        max-height: 300px;
        overflow-y: auto;
    }
    
    .notification-item {
        padding: 1rem;
        border-bottom: 1px solid rgba(255, 0, 0, 0.2);
        transition: all 0.3s ease;
    }
    
    .notification-item:hover {
        background: rgba(255, 0, 0, 0.1);
    }
    
    .notification-item.unread {
        background: rgba(255, 0, 0, 0.15);
    }
    
    .notification-time {
        font-size: 0.8rem;
        color: #cc9999;
        margin-top: 0.3rem;
    }
    
    /* Toast */
    .toast {
        position: fixed;
        bottom: 100px;
        right: 20px;
        background: rgba(26, 0, 0, 0.95);
        border: 2px solid var(--blood-red);
        border-radius: 10px;
        padding: 1rem;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        display: none;
        z-index: 1002;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        max-width: 300px;
        animation: slideInRight 0.3s ease;
    }
    
    .toast.show {
        display: block;
    }
    
    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    /* Stats overlay */
    .stats-overlay {
        position: fixed;
        top: 20px;
        left: 20px;
        background: rgba(26, 0, 0, 0.9);
        border: 2px solid var(--blood-red);
        border-radius: 10px;
        padding: 1rem;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        z-index: 999;
        display: none;
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
    }
    
    .stats-overlay.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }
    
    .stats-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
    
    .stats-value {
        color: var(--fire-red);
        font-weight: 700;
    }
    
    /* Match highlight */
    .match-card.highlighted {
        animation: highlightPulse 2s infinite;
        border-color: var(--neon-red);
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.6);
    }
    
    @keyframes highlightPulse {
        0%, 100% { 
            border-color: var(--neon-red);
            box-shadow: 0 0 25px rgba(255, 0, 60, 0.6);
        }
        50% { 
            border-color: var(--blood-red);
            box-shadow: 0 0 35px rgba(255, 0, 0, 0.8);
        }
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
        
        .advanced-actions {
            flex-direction: column;
            align-items: center;
        }
        
        .notifications-modal {
            width: 90%;
            right: 5%;
            bottom: 100px;
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

    // line 1107
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

        // line 1108
        yield "<div class=\"gaming-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 1112
        $context["icons"] = ["⚔️", "🔥", "💀", "👑", "🛡️", "🎯", "🏆", "💥", "⚡", "⭐"];
        // line 1113
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1114
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1114, $this->source); })())));
            // line 1115
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 1116
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 1117
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 1118
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 1119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 1119, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 1120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 1120, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 1121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 1121, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 1123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1123, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 1123, $this->source); })()), [], "array", false, false, false, 1123), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1126
        yield "    </div>
    
    <!-- Bell notifications -->
    <button class=\"notification-bell\" id=\"notificationBell\">
        🔔
        <span class=\"notification-badge\" id=\"notificationBadge\">0</span>
    </button>
    
    <!-- Notifications modal -->
    <div class=\"notifications-modal\" id=\"notificationsModal\">
        <div class=\"notifications-header\">
            <h4 class=\"notifications-title\">🔔 NOTIFICATIONS</h4>
            <button onclick=\"clearNotifications()\" style=\"background:none;border:none;color:#cc9999;cursor:pointer;\">
                Tout effacer
            </button>
        </div>
        <div class=\"notifications-list\" id=\"notificationsList\">
            <!-- Les notifications seront ajoutées ici par JavaScript -->
        </div>
    </div>
    
    <!-- Toast -->
    <div class=\"toast\" id=\"toast\"></div>
    
    <!-- Stats overlay -->
    <div class=\"stats-overlay\" id=\"statsOverlay\">
        <div class=\"stats-item\">
            <span>Matchs totaux:</span>
            <span class=\"stats-value\" id=\"statTotal\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>En cours:</span>
            <span class=\"stats-value\" id=\"statOngoing\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Terminés:</span>
            <span class=\"stats-value\" id=\"statFinished\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Avec gagnant:</span>
            <span class=\"stats-value\" id=\"statWithWinner\">0</span>
        </div>
    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PHANTOM FORCE - MATCHS</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            BATAILLES ÉPICQUES • ";
        // line 1174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1174, $this->source); })())), "html", null, true);
        yield " COMBATS PROGRAMMÉS
        </p>
        <div class=\"live-counter\" id=\"liveCounter\">⚡ LIVE</div>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        ";
        // line 1181
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 1182
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_new");
            yield "\" class=\"add-match-btn\">
            ⚔️ PROGRAMMER UN COMBAT
        </a>
        <a href=\"";
            // line 1185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
            yield "\" class=\"add-match-btn\" style=\"background: linear-gradient(45deg, #0066cc, #003399);\">
            🗺️ CARTE DES ARÈNES
        </a>
        ";
        }
        // line 1189
        yield "    </div>
    
    <!-- Actions avancées -->
    <div class=\"advanced-actions\">
        <button class=\"advanced-btn\" id=\"exportBtn\">
            📄 Exporter la liste
        </button>
        <button class=\"advanced-btn\" id=\"statsBtn\">
            📊 Afficher les stats
        </button>
        <button class=\"advanced-btn\" id=\"highlightBtn\">
            ⭐ Matchs en vedette
        </button>
        <button class=\"advanced-btn\" id=\"refreshBtn\">
            🔄 Actualiser en temps réel
        </button>
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
                    ";
        // line 1219
        $context["games"] = [];
        // line 1220
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1220, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 1221
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1221), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1221, $this->source); })()))) {
                // line 1222
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1222, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1222)]);
                // line 1223
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1223), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1223), "html", null, true);
                yield "</option>
                        ";
            }
            // line 1225
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1226
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
        // line 1253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1253, $this->source); })())), "html", null, true);
        yield "</span> COMBATS ENREGISTRÉS
        </div>
    </div>
    
    ";
        // line 1257
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1257, $this->source); })())) > 0)) {
            // line 1258
            yield "        <!-- Grille des matchs -->
        <div class=\"matches-grid\" id=\"matchesGrid\">
            ";
            // line 1260
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1260, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 1261
                yield "                ";
                $context["matchData"] = ["id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1262
$context["match"], "id", [], "any", false, false, false, 1262), "game" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1263
$context["match"], "game", [], "any", false, false, false, 1263), "date" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 1264
$context["match"], "matchDate", [], "any", false, false, false, 1264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1264), "d/m/Y H:i")) : ("Date non définie")), "team1" => ["name" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 1266
$context["match"], "team1", [], "any", false, true, false, 1266), "name", [], "any", true, true, false, 1266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1266), "name", [], "any", false, false, false, 1266), "Équipe 1")) : ("Équipe 1")), "score" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1267
$context["match"], "scoreTeam1", [], "any", true, true, false, 1267) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1267)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1267)) : (0))], "team2" => ["name" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 1270
$context["match"], "team2", [], "any", false, true, false, 1270), "name", [], "any", true, true, false, 1270)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1270), "name", [], "any", false, false, false, 1270), "Équipe 2")) : ("Équipe 2")), "score" => (((CoreExtension::getAttribute($this->env, $this->source,                 // line 1271
$context["match"], "scoreTeam2", [], "any", true, true, false, 1271) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1271)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1271)) : (0))], "status" => Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,                 // line 1273
$context["match"], "status", [], "any", false, false, false, 1273)), "winner" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 1274
$context["match"], "winnerTeam", [], "any", false, false, false, 1274)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1274), "name", [], "any", false, false, false, 1274)) : ("Pas encore de vainqueur")), "status_label" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1275
$context["match"], "statusLabel", [], "any", true, true, false, 1275)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "statusLabel", [], "any", false, false, false, 1275), Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1275)))) : (Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1275))))];
                // line 1277
                yield "                
                <div class=\"match-card ";
                // line 1278
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1278) == "ongoing")) {
                    yield "ongoing";
                }
                yield "\" 
                     data-id=\"";
                // line 1279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1279), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 1280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1280)), "html", null, true);
                yield "\" 
                     data-status=\"";
                // line 1281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1281)), "html", null, true);
                yield "\"
                     data-date=\"";
                // line 1282
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1282)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1282), "U"), "html", null, true)) : (0));
                yield "\"
                     data-winner=\"";
                // line 1283
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\"
                     data-match='";
                // line 1284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["matchData"]) || array_key_exists("matchData", $context) ? $context["matchData"] : (function () { throw new RuntimeError('Variable "matchData" does not exist.', 1284, $this->source); })())), "html_attr");
                yield "'>
                    <div class=\"match-id\">#";
                // line 1285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1285), "html", null, true);
                yield "</div>
                    
                    <div class=\"match-header\">
                        <div class=\"match-game\">";
                // line 1288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1288)), "html", null, true);
                yield "</div>
                        <div class=\"match-date\">
                            ";
                // line 1290
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1290), "d/m/Y H:i"), "html", null, true)) : ("Date non définie"));
                yield "
                        </div>
                    </div>
                    
                    <div class=\"teams-container\">
                        ";
                // line 1295
                $context["score1"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 1295) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1295)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1295)) : (0));
                // line 1296
                yield "                        ";
                $context["score2"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 1296) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1296)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1296)) : (0));
                // line 1297
                yield "                        ";
                $context["totalScore"] = ((isset($context["score1"]) || array_key_exists("score1", $context) ? $context["score1"] : (function () { throw new RuntimeError('Variable "score1" does not exist.', 1297, $this->source); })()) + (isset($context["score2"]) || array_key_exists("score2", $context) ? $context["score2"] : (function () { throw new RuntimeError('Variable "score2" does not exist.', 1297, $this->source); })()));
                // line 1298
                yield "                        ";
                $context["percentage1"] = ((((isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 1298, $this->source); })()) > 0)) ? ((((isset($context["score1"]) || array_key_exists("score1", $context) ? $context["score1"] : (function () { throw new RuntimeError('Variable "score1" does not exist.', 1298, $this->source); })()) / (isset($context["totalScore"]) || array_key_exists("totalScore", $context) ? $context["totalScore"] : (function () { throw new RuntimeError('Variable "totalScore" does not exist.', 1298, $this->source); })())) * 100)) : (50));
                // line 1299
                yield "                        
                        <div class=\"score-bar-container\">
                            <div class=\"score-bar\" style=\"width: ";
                // line 1301
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage1"]) || array_key_exists("percentage1", $context) ? $context["percentage1"] : (function () { throw new RuntimeError('Variable "percentage1" does not exist.', 1301, $this->source); })()), "html", null, true);
                yield "%\"></div>
                        </div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"";
                // line 1305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 1305), "name", [], "any", true, true, false, 1305)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1305), "name", [], "any", false, false, false, 1305), "Équipe 1")) : ("Équipe 1")), "html", null, true);
                yield "\">
                                ";
                // line 1306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 1306), "name", [], "any", true, true, false, 1306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1306), "name", [], "any", false, false, false, 1306), "Équipe 1")) : ("Équipe 1")), 0, 15), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 1306), "name", [], "any", true, true, false, 1306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1306), "name", [], "any", false, false, false, 1306), "")) : (""))) > 15)) ? ("...") : (""));
                yield "
                            </div>
                            <div class=\"team-score\">";
                // line 1308
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score1"]) || array_key_exists("score1", $context) ? $context["score1"] : (function () { throw new RuntimeError('Variable "score1" does not exist.', 1308, $this->source); })()), "html", null, true);
                yield "</div>
                        </div>
                        
                        <div class=\"vs-container\">VS</div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"";
                // line 1314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 1314), "name", [], "any", true, true, false, 1314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1314), "name", [], "any", false, false, false, 1314), "Équipe 2")) : ("Équipe 2")), "html", null, true);
                yield "\">
                                ";
                // line 1315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 1315), "name", [], "any", true, true, false, 1315)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1315), "name", [], "any", false, false, false, 1315), "Équipe 2")) : ("Équipe 2")), 0, 15), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 1315), "name", [], "any", true, true, false, 1315)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1315), "name", [], "any", false, false, false, 1315), "")) : (""))) > 15)) ? ("...") : (""));
                yield "
                            </div>
                            <div class=\"team-score\">";
                // line 1317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["score2"]) || array_key_exists("score2", $context) ? $context["score2"] : (function () { throw new RuntimeError('Variable "score2" does not exist.', 1317, $this->source); })()), "html", null, true);
                yield "</div>
                        </div>
                    </div>
                    
                    <div class=\"match-details\">
                        <div class=\"detail-item\">
                            <strong>🎮 JEU :</strong>
                            <span>";
                // line 1324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 1324), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📅 DATE :</strong>
                            <span>";
                // line 1329
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 1329), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📊 STATUT :</strong>
                            ";
                // line 1334
                $context["statusClass"] = "";
                // line 1335
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1335) == "planned")) {
                    // line 1336
                    yield "                                ";
                    $context["statusClass"] = "status-planned";
                    // line 1337
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1337) == "ongoing")) {
                    // line 1338
                    yield "                                ";
                    $context["statusClass"] = "status-ongoing";
                    // line 1339
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1339) == "finished")) {
                    // line 1340
                    yield "                                ";
                    $context["statusClass"] = "status-finished";
                    // line 1341
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1341) == "cancelled")) {
                    // line 1342
                    yield "                                ";
                    $context["statusClass"] = "status-cancelled";
                    // line 1343
                    yield "                            ";
                }
                // line 1344
                yield "                            <span class=\"status-badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 1344, $this->source); })()), "html", null, true);
                yield "\">
                                ";
                // line 1345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1345)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    
                    ";
                // line 1350
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1350)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1351
                    yield "                        <div class=\"winner-info\">
                            🏆 VICTOIRE : ";
                    // line 1352
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1352), "name", [], "any", false, false, false, 1352), "html", null, true);
                    yield "
                        </div>
                    ";
                } else {
                    // line 1355
                    yield "                        <div class=\"no-winner\">
                            ⏳ Pas encore de vainqueur
                        </div>
                    ";
                }
                // line 1359
                yield "                    
                    <div class=\"actions-container\">
                        <a href=\"";
                // line 1361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1361)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails du match\">
                            👁️ ANALYSER
                        </a>
                        
                        ";
                // line 1367
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 1368
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1368)]), "html", null, true);
                    yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier le match\">
                            ⚙️ MODIFIER
                        </a>
                        
                        <form method=\"post\" action=\"";
                    // line 1374
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1374)]), "html", null, true);
                    yield "\" 
                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\"
                              style=\"display: inline; margin: 0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 1377
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 1377))), "html", null, true);
                    yield "\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer le match\">
                                🗑️ SUPPRIMER
                            </button>
                        </form>
                        ";
                }
                // line 1383
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1386
            yield "        </div>
        
        <!-- Informations -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeMatches\">";
            // line 1391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matchies"]) || array_key_exists("matchies", $context) ? $context["matchies"] : (function () { throw new RuntimeError('Variable "matchies" does not exist.', 1391, $this->source); })())), "html", null, true);
            yield "</span> BATAILLES ENREGISTRÉES • DERNIÈRE MISE À JOUR : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 1396
            yield "        <!-- Message quand aucun match n'existe -->
        <div class=\"no-matches\">
            <h2>⚠️ CHAMP DE BATAILLE VIDE ⚠️</h2>
            <p>Aucun combat n'a encore été programmé. Organisez le premier affrontement !</p>
            <a href=\"";
            // line 1400
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_new");
            yield "\" class=\"add-match-btn\" style=\"display: inline-block; width: auto;\">
                🏆 PROGRAMMER LE PREMIER COMBAT
            </a>
        </div>
    ";
        }
        // line 1405
        yield "</div>

<script>
    // Initialisation des variables
    let allMatches = Array.from(document.querySelectorAll('.match-card'));
    let currentMatches = [...allMatches];
    let notifications = [];
    let autoRefreshInterval = null;
    let isHighlightActive = false;
    
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
    
    // Boutons avancés
    const exportBtn = document.getElementById('exportBtn');
    const statsBtn = document.getElementById('statsBtn');
    const highlightBtn = document.getElementById('highlightBtn');
    const refreshBtn = document.getElementById('refreshBtn');
    
    // Notifications
    const notificationBell = document.getElementById('notificationBell');
    const notificationBadge = document.getElementById('notificationBadge');
    const notificationsModal = document.getElementById('notificationsModal');
    const notificationsList = document.getElementById('notificationsList');
    
    // Toast et stats
    const toast = document.getElementById('toast');
    const statsOverlay = document.getElementById('statsOverlay');
    const statTotal = document.getElementById('statTotal');
    const statOngoing = document.getElementById('statOngoing');
    const statFinished = document.getElementById('statFinished');
    const statWithWinner = document.getElementById('statWithWinner');
    
    // Fonction pour afficher un toast
    function showToast(message, duration = 3000) {
        toast.textContent = message;
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, duration);
    }
    
    // Fonction pour ajouter une notification
    function addNotification(message, type = 'info') {
        const timestamp = new Date().toLocaleTimeString('fr-FR', { 
            hour: '2-digit', 
            minute: '2-digit' 
        });
        
        const notification = {
            id: Date.now(),
            message: message,
            type: type,
            timestamp: timestamp,
            read: false
        };
        
        notifications.unshift(notification);
        updateNotificationBadge();
        renderNotifications();
        saveNotifications();
        
        // Notification sonore (optionnelle)
        if (type === 'alert') {
            playNotificationSound();
        }
        
        showToast(message);
    }
    
    // Fonction pour jouer un son de notification
    function playNotificationSound() {
        try {
            const audio = new Audio('data:audio/wav;base64,UklGRigAAABXQVZFZm10IBIAAAABAAEAQB8AAEAfAAABAAgAZGF0YQ');
            audio.volume = 0.3;
            audio.play();
        } catch (e) {
            // Fallback silencieux si l'audio échoue
        }
    }
    
    // Fonction pour mettre à jour le badge de notification
    function updateNotificationBadge() {
        const unreadCount = notifications.filter(n => !n.read).length;
        notificationBadge.textContent = unreadCount;
        notificationBadge.style.display = unreadCount > 0 ? 'block' : 'none';
    }
    
    // Fonction pour afficher les notifications
    function renderNotifications() {
        notificationsList.innerHTML = '';
        
        if (notifications.length === 0) {
            notificationsList.innerHTML = `
                <div class=\"notification-item\" style=\"text-align: center; color: #cc9999;\">
                    Aucune notification
                </div>
            `;
            return;
        }
        
        notifications.forEach(notification => {
            const div = document.createElement('div');
            div.className = `notification-item \${notification.read ? '' : 'unread'}`;
            div.innerHTML = `
                <div>\${notification.message}</div>
                <div class=\"notification-time\">\${notification.timestamp}</div>
            `;
            
            div.addEventListener('click', () => {
                notification.read = true;
                updateNotificationBadge();
                renderNotifications();
                saveNotifications();
            });
            
            notificationsList.appendChild(div);
        });
    }
    
    // Fonction pour effacer toutes les notifications
    function clearNotifications() {
        notifications = [];
        updateNotificationBadge();
        renderNotifications();
        saveNotifications();
    }
    
    // Fonction pour sauvegarder les notifications dans localStorage
    function saveNotifications() {
        try {
            localStorage.setItem('matchNotifications', JSON.stringify(notifications));
        } catch (e) {
            console.log('Impossible de sauvegarder les notifications');
        }
    }
    
    // Fonction pour charger les notifications depuis localStorage
    function loadNotifications() {
        try {
            const saved = localStorage.getItem('matchNotifications');
            if (saved) {
                notifications = JSON.parse(saved);
                updateNotificationBadge();
                renderNotifications();
            }
        } catch (e) {
            console.log('Impossible de charger les notifications');
        }
    }
    
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
        
        updateStats();
    }
    
    // Fonction pour mettre à jour les statistiques
    function updateStats() {
        const visibleMatches = document.querySelectorAll('.match-card:not(.hidden)');
        const ongoing = document.querySelectorAll('.match-card.ongoing:not(.hidden)').length;
        const finished = document.querySelectorAll('.match-card[data-status=\"finished\"]:not(.hidden)').length;
        const withWinner = document.querySelectorAll('.match-card[data-winner=\"yes\"]:not(.hidden)').length;
        
        statTotal.textContent = visibleMatches.length;
        statOngoing.textContent = ongoing;
        statFinished.textContent = finished;
        statWithWinner.textContent = withWinner;
    }
    
    // Fonction pour exporter la liste des matchs
    function exportMatches() {
        const visibleMatches = Array.from(document.querySelectorAll('.match-card:not(.hidden)'));
        
        if (visibleMatches.length === 0) {
            showToast('Aucun match à exporter');
            return;
        }
        
        let exportData = 'PHANTOM FORCE - LISTE DES MATCHS\\n';
        exportData += '===============================\\n\\n';
        
        visibleMatches.forEach((match, index) => {
            const game = match.querySelector('.match-game').textContent;
            const date = match.querySelector('.match-date').textContent;
            const team1 = match.querySelector('.team-info:first-child .team-name').textContent;
            const score1 = match.querySelector('.team-info:first-child .team-score').textContent;
            const team2 = match.querySelector('.team-info:last-child .team-name').textContent;
            const score2 = match.querySelector('.team-info:last-child .team-score').textContent;
            const status = match.dataset.status.toUpperCase();
            const hasWinner = match.dataset.winner === 'yes';
            
            exportData += `\${index + 1}. \${game}\\n`;
            exportData += `   Date: \${date}\\n`;
            exportData += `   \${team1} \${score1} - \${score2} \${team2}\\n`;
            exportData += `   Statut: \${status}\\n`;
            exportData += `   \${hasWinner ? 'Avec gagnant' : 'Sans gagnant'}\\n`;
            exportData += '\\n';
        });
        
        exportData += `\\nTotal: \${visibleMatches.length} match(s)\\n`;
        exportData += `Exporté le: \${new Date().toLocaleDateString('fr-FR')}`;
        
        // Créer un blob et télécharger
        const blob = new Blob([exportData], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `matchs-phantom-force-\${new Date().toISOString().split('T')[0]}.txt`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        
        showToast(`Liste exportée (\${visibleMatches.length} matchs)`);
        addNotification(`Liste de \${visibleMatches.length} matchs exportée`, 'info');
    }
    
    // Fonction pour mettre en vedette les matchs importants
    function toggleHighlight() {
        isHighlightActive = !isHighlightActive;
        
        document.querySelectorAll('.match-card').forEach(card => {
            if (isHighlightActive) {
                // Mettre en vedette les matchs en cours et ceux sans gagnant
                if (card.classList.contains('ongoing') || card.dataset.winner === 'no') {
                    card.classList.add('highlighted');
                }
            } else {
                card.classList.remove('highlighted');
            }
        });
        
        if (isHighlightActive) {
            highlightBtn.innerHTML = '⭐ Désactiver vedettes';
            showToast('Matchs en vedette activés');
            addNotification('Filtre \"Matchs en vedette\" activé', 'info');
        } else {
            highlightBtn.innerHTML = '⭐ Matchs en vedette';
            showToast('Matchs en vedette désactivés');
        }
    }
    
    // Fonction pour activer/désactiver l'actualisation automatique
    function toggleAutoRefresh() {
        if (autoRefreshInterval) {
            clearInterval(autoRefreshInterval);
            autoRefreshInterval = null;
            refreshBtn.innerHTML = '🔄 Activer actualisation';
            showToast('Actualisation automatique désactivée');
            addNotification('Actualisation automatique désactivée', 'info');
        } else {
            autoRefreshInterval = setInterval(() => {
                simulateLiveUpdates();
            }, 10000); // Actualiser toutes les 10 secondes
            
            refreshBtn.innerHTML = '🔄 Actualisation active';
            showToast('Actualisation automatique activée (10s)');
            addNotification('Actualisation automatique activée', 'alert');
        }
    }
    
    // Fonction pour simuler des mises à jour en direct
    function simulateLiveUpdates() {
        const ongoingMatches = document.querySelectorAll('.match-card.ongoing:not(.hidden)');
        
        if (ongoingMatches.length > 0) {
            // Simuler un changement de score aléatoire
            ongoingMatches.forEach(card => {
                if (Math.random() > 0.7) {
                    const score1El = card.querySelector('.team-info:first-child .team-score');
                    const score2El = card.querySelector('.team-info:last-child .team-score');
                    
                    let score1 = parseInt(score1El.textContent);
                    let score2 = parseInt(score2El.textContent);
                    
                    // Augmenter aléatoirement un score
                    if (Math.random() > 0.5) {
                        score1 += Math.floor(Math.random() * 2) + 1;
                    } else {
                        score2 += Math.floor(Math.random() * 2) + 1;
                    }
                    
                    score1El.textContent = score1;
                    score2El.textContent = score2;
                    
                    // Animation
                    score1El.style.transform = 'scale(1.2)';
                    score2El.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        score1El.style.transform = 'scale(1)';
                        score2El.style.transform = 'scale(1)';
                    }, 300);
                    
                    // Mettre à jour la barre de score
                    const totalScore = score1 + score2;
                    const percentage1 = totalScore > 0 ? (score1 / totalScore * 100) : 50;
                    const scoreBar = card.querySelector('.score-bar');
                    if (scoreBar) {
                        scoreBar.style.width = `\${percentage1}%`;
                    }
                    
                    // Notification pour les changements importants
                    if (Math.abs(score1 - score2) >= 5) {
                        const game = card.querySelector('.match-game').textContent;
                        addNotification(`\${game}: Écart important (\${score1}-\${score2})`, 'alert');
                    }
                }
            });
            
            // Mettre à jour la date de dernière mise à jour
            const now = new Date();
            const timeString = now.toLocaleTimeString('fr-FR', { 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit'
            });
            
            const updateText = document.querySelector('.text-center p');
            if (updateText) {
                const parts = updateText.textContent.split('•');
                if (parts.length > 1) {
                    updateText.textContent = `\${parts[0]}• DERNIÈRE MISE À JOUR : \${timeString}`;
                }
            }
            
            showToast(`Scores mis à jour (\${ongoingMatches.length} matchs en cours)`);
        }
    }
    
    // Fonction pour afficher/masquer les statistiques
    function toggleStats() {
        statsOverlay.classList.toggle('active');
        
        if (statsOverlay.classList.contains('active')) {
            updateStats();
            showToast('Statistiques affichées');
        } else {
            showToast('Statistiques masquées');
        }
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
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        loadNotifications();
        
        // Notifications de bienvenue
        setTimeout(() => {
            if (notifications.length === 0) {
                addNotification('Bienvenue sur Phantom Force Matchs!', 'info');
                addNotification(`Suivez \${allMatches.length} matchs en direct`, 'info');
            }
        }, 1000);
        
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
    });
    
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
        showToast('Filtres réinitialisés');
    });
    
    // Boutons avancés
    exportBtn.addEventListener('click', exportMatches);
    statsBtn.addEventListener('click', toggleStats);
    highlightBtn.addEventListener('click', toggleHighlight);
    refreshBtn.addEventListener('click', toggleAutoRefresh);
    
    // Notifications
    notificationBell.addEventListener('click', () => {
        notificationsModal.classList.toggle('active');
        
        // Marquer toutes comme lues lorsqu'on ouvre
        if (notificationsModal.classList.contains('active')) {
            notifications.forEach(n => n.read = true);
            updateNotificationBadge();
            renderNotifications();
            saveNotifications();
        }
    });
    
    // Fermer les notifications en cliquant à l'extérieur
    document.addEventListener('click', (e) => {
        if (!notificationsModal.contains(e.target) && !notificationBell.contains(e.target)) {
            notificationsModal.classList.remove('active');
        }
        
        if (!statsOverlay.contains(e.target) && e.target !== statsBtn) {
            statsOverlay.classList.remove('active');
        }
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
            if (!this.classList.contains('highlighted')) {
                this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
            }
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
    
    // Effet de particules au clic
    document.addEventListener('click', function(e) {
        if (e.target.closest('.match-card') || e.target.closest('.action-btn') || 
            e.target.closest('.add-match-btn') || e.target.closest('.advanced-btn') ||
            e.target.closest('.notification-bell') || e.target === statsBtn) {
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
    
    // Raccourcis clavier
    document.addEventListener('keydown', (e) => {
        // Ctrl+E pour exporter
        if ((e.ctrlKey || e.metaKey) && e.key === 'e') {
            e.preventDefault();
            exportMatches();
        }
        
        // Ctrl+S pour les stats
        if ((e.ctrlKey || e.metaKey) && e.key === 's') {
            e.preventDefault();
            toggleStats();
        }
        
        // Ctrl+H pour highlight
        if ((e.ctrlKey || e.metaKey) && e.key === 'h') {
            e.preventDefault();
            toggleHighlight();
        }
        
        // Échap pour fermer les modals
        if (e.key === 'Escape') {
            notificationsModal.classList.remove('active');
            statsOverlay.classList.remove('active');
        }
    });
    
    // Ajouter l'animation CSS pour les particules
    const style = document.createElement('style');
    style.textContent = `
        @keyframes sparkFade {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
    
    // Détection de matchs urgents au chargement
    setTimeout(() => {
        const urgentMatches = document.querySelectorAll('.match-card.ongoing');
        if (urgentMatches.length > 0) {
            addNotification(`\${urgentMatches.length} match(s) en cours nécessitent votre attention`, 'alert');
        }
    }, 2000);
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
        return array (  1736 => 1405,  1728 => 1400,  1722 => 1396,  1712 => 1391,  1705 => 1386,  1697 => 1383,  1688 => 1377,  1682 => 1374,  1672 => 1368,  1670 => 1367,  1661 => 1361,  1657 => 1359,  1651 => 1355,  1645 => 1352,  1642 => 1351,  1640 => 1350,  1632 => 1345,  1627 => 1344,  1624 => 1343,  1621 => 1342,  1618 => 1341,  1615 => 1340,  1612 => 1339,  1609 => 1338,  1606 => 1337,  1603 => 1336,  1600 => 1335,  1598 => 1334,  1590 => 1329,  1582 => 1324,  1572 => 1317,  1566 => 1315,  1562 => 1314,  1553 => 1308,  1547 => 1306,  1543 => 1305,  1536 => 1301,  1532 => 1299,  1529 => 1298,  1526 => 1297,  1523 => 1296,  1521 => 1295,  1513 => 1290,  1508 => 1288,  1502 => 1285,  1498 => 1284,  1494 => 1283,  1490 => 1282,  1486 => 1281,  1482 => 1280,  1478 => 1279,  1472 => 1278,  1469 => 1277,  1467 => 1275,  1466 => 1274,  1465 => 1273,  1464 => 1271,  1463 => 1270,  1462 => 1267,  1461 => 1266,  1460 => 1264,  1459 => 1263,  1458 => 1262,  1456 => 1261,  1452 => 1260,  1448 => 1258,  1446 => 1257,  1439 => 1253,  1410 => 1226,  1404 => 1225,  1396 => 1223,  1393 => 1222,  1390 => 1221,  1385 => 1220,  1383 => 1219,  1351 => 1189,  1344 => 1185,  1337 => 1182,  1335 => 1181,  1325 => 1174,  1275 => 1126,  1266 => 1123,  1261 => 1121,  1257 => 1120,  1253 => 1119,  1250 => 1118,  1247 => 1117,  1244 => 1116,  1241 => 1115,  1238 => 1114,  1233 => 1113,  1231 => 1112,  1225 => 1108,  1212 => 1107,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
    
    .delete-btn {
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
    
    /* Actions avancées */
    .advanced-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin: 1.5rem 0;
        flex-wrap: wrap;
    }
    
    .advanced-btn {
        background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
        border: none;
        padding: 0.8rem 1.5rem;
        border-radius: 10px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
    }
    
    .advanced-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 0, 0.4);
    }
    
    /* Notifications */
    .notification-bell {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
        border: none;
        color: white;
        font-size: 1.5rem;
        cursor: pointer;
        z-index: 1000;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
        transition: all 0.3s ease;
    }
    
    .notification-bell:hover {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.7);
    }
    
    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background: var(--fire-red);
        color: white;
        font-size: 0.7rem;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: badgePulse 1.5s infinite;
    }
    
    @keyframes badgePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    /* Modal notifications */
    .notifications-modal {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 350px;
        max-height: 400px;
        background: rgba(26, 0, 0, 0.95);
        border: 2px solid var(--blood-red);
        border-radius: 15px;
        box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
        z-index: 1001;
        overflow: hidden;
    }
    
    .notifications-modal.active {
        display: block;
        animation: slideUp 0.3s ease;
    }
    
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .notifications-header {
        padding: 1rem;
        background: rgba(255, 0, 0, 0.2);
        border-bottom: 1px solid var(--blood-red);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .notifications-title {
        font-family: 'Orbitron', sans-serif;
        color: var(--fire-red);
        font-size: 1.1rem;
    }
    
    .notifications-list {
        max-height: 300px;
        overflow-y: auto;
    }
    
    .notification-item {
        padding: 1rem;
        border-bottom: 1px solid rgba(255, 0, 0, 0.2);
        transition: all 0.3s ease;
    }
    
    .notification-item:hover {
        background: rgba(255, 0, 0, 0.1);
    }
    
    .notification-item.unread {
        background: rgba(255, 0, 0, 0.15);
    }
    
    .notification-time {
        font-size: 0.8rem;
        color: #cc9999;
        margin-top: 0.3rem;
    }
    
    /* Toast */
    .toast {
        position: fixed;
        bottom: 100px;
        right: 20px;
        background: rgba(26, 0, 0, 0.95);
        border: 2px solid var(--blood-red);
        border-radius: 10px;
        padding: 1rem;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        display: none;
        z-index: 1002;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        max-width: 300px;
        animation: slideInRight 0.3s ease;
    }
    
    .toast.show {
        display: block;
    }
    
    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    /* Stats overlay */
    .stats-overlay {
        position: fixed;
        top: 20px;
        left: 20px;
        background: rgba(26, 0, 0, 0.9);
        border: 2px solid var(--blood-red);
        border-radius: 10px;
        padding: 1rem;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        z-index: 999;
        display: none;
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
    }
    
    .stats-overlay.active {
        display: block;
        animation: fadeIn 0.3s ease;
    }
    
    .stats-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
    
    .stats-value {
        color: var(--fire-red);
        font-weight: 700;
    }
    
    /* Match highlight */
    .match-card.highlighted {
        animation: highlightPulse 2s infinite;
        border-color: var(--neon-red);
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.6);
    }
    
    @keyframes highlightPulse {
        0%, 100% { 
            border-color: var(--neon-red);
            box-shadow: 0 0 25px rgba(255, 0, 60, 0.6);
        }
        50% { 
            border-color: var(--blood-red);
            box-shadow: 0 0 35px rgba(255, 0, 0, 0.8);
        }
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
        
        .advanced-actions {
            flex-direction: column;
            align-items: center;
        }
        
        .notifications-modal {
            width: 90%;
            right: 5%;
            bottom: 100px;
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
    
    <!-- Bell notifications -->
    <button class=\"notification-bell\" id=\"notificationBell\">
        🔔
        <span class=\"notification-badge\" id=\"notificationBadge\">0</span>
    </button>
    
    <!-- Notifications modal -->
    <div class=\"notifications-modal\" id=\"notificationsModal\">
        <div class=\"notifications-header\">
            <h4 class=\"notifications-title\">🔔 NOTIFICATIONS</h4>
            <button onclick=\"clearNotifications()\" style=\"background:none;border:none;color:#cc9999;cursor:pointer;\">
                Tout effacer
            </button>
        </div>
        <div class=\"notifications-list\" id=\"notificationsList\">
            <!-- Les notifications seront ajoutées ici par JavaScript -->
        </div>
    </div>
    
    <!-- Toast -->
    <div class=\"toast\" id=\"toast\"></div>
    
    <!-- Stats overlay -->
    <div class=\"stats-overlay\" id=\"statsOverlay\">
        <div class=\"stats-item\">
            <span>Matchs totaux:</span>
            <span class=\"stats-value\" id=\"statTotal\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>En cours:</span>
            <span class=\"stats-value\" id=\"statOngoing\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Terminés:</span>
            <span class=\"stats-value\" id=\"statFinished\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Avec gagnant:</span>
            <span class=\"stats-value\" id=\"statWithWinner\">0</span>
        </div>
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
        <a href=\"{{ path('app_map') }}\" class=\"add-match-btn\" style=\"background: linear-gradient(45deg, #0066cc, #003399);\">
            🗺️ CARTE DES ARÈNES
        </a>
        {% endif %}
    </div>
    
    <!-- Actions avancées -->
    <div class=\"advanced-actions\">
        <button class=\"advanced-btn\" id=\"exportBtn\">
            📄 Exporter la liste
        </button>
        <button class=\"advanced-btn\" id=\"statsBtn\">
            📊 Afficher les stats
        </button>
        <button class=\"advanced-btn\" id=\"highlightBtn\">
            ⭐ Matchs en vedette
        </button>
        <button class=\"advanced-btn\" id=\"refreshBtn\">
            🔄 Actualiser en temps réel
        </button>
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
                        
                        <form method=\"post\" action=\"{{ path('app_matchy_delete', {'id': match.id}) }}\" 
                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\"
                              style=\"display: inline; margin: 0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ match.id) }}\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer le match\">
                                🗑️ SUPPRIMER
                            </button>
                        </form>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
        
        <!-- Informations -->
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
    let notifications = [];
    let autoRefreshInterval = null;
    let isHighlightActive = false;
    
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
    
    // Boutons avancés
    const exportBtn = document.getElementById('exportBtn');
    const statsBtn = document.getElementById('statsBtn');
    const highlightBtn = document.getElementById('highlightBtn');
    const refreshBtn = document.getElementById('refreshBtn');
    
    // Notifications
    const notificationBell = document.getElementById('notificationBell');
    const notificationBadge = document.getElementById('notificationBadge');
    const notificationsModal = document.getElementById('notificationsModal');
    const notificationsList = document.getElementById('notificationsList');
    
    // Toast et stats
    const toast = document.getElementById('toast');
    const statsOverlay = document.getElementById('statsOverlay');
    const statTotal = document.getElementById('statTotal');
    const statOngoing = document.getElementById('statOngoing');
    const statFinished = document.getElementById('statFinished');
    const statWithWinner = document.getElementById('statWithWinner');
    
    // Fonction pour afficher un toast
    function showToast(message, duration = 3000) {
        toast.textContent = message;
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, duration);
    }
    
    // Fonction pour ajouter une notification
    function addNotification(message, type = 'info') {
        const timestamp = new Date().toLocaleTimeString('fr-FR', { 
            hour: '2-digit', 
            minute: '2-digit' 
        });
        
        const notification = {
            id: Date.now(),
            message: message,
            type: type,
            timestamp: timestamp,
            read: false
        };
        
        notifications.unshift(notification);
        updateNotificationBadge();
        renderNotifications();
        saveNotifications();
        
        // Notification sonore (optionnelle)
        if (type === 'alert') {
            playNotificationSound();
        }
        
        showToast(message);
    }
    
    // Fonction pour jouer un son de notification
    function playNotificationSound() {
        try {
            const audio = new Audio('data:audio/wav;base64,UklGRigAAABXQVZFZm10IBIAAAABAAEAQB8AAEAfAAABAAgAZGF0YQ');
            audio.volume = 0.3;
            audio.play();
        } catch (e) {
            // Fallback silencieux si l'audio échoue
        }
    }
    
    // Fonction pour mettre à jour le badge de notification
    function updateNotificationBadge() {
        const unreadCount = notifications.filter(n => !n.read).length;
        notificationBadge.textContent = unreadCount;
        notificationBadge.style.display = unreadCount > 0 ? 'block' : 'none';
    }
    
    // Fonction pour afficher les notifications
    function renderNotifications() {
        notificationsList.innerHTML = '';
        
        if (notifications.length === 0) {
            notificationsList.innerHTML = `
                <div class=\"notification-item\" style=\"text-align: center; color: #cc9999;\">
                    Aucune notification
                </div>
            `;
            return;
        }
        
        notifications.forEach(notification => {
            const div = document.createElement('div');
            div.className = `notification-item \${notification.read ? '' : 'unread'}`;
            div.innerHTML = `
                <div>\${notification.message}</div>
                <div class=\"notification-time\">\${notification.timestamp}</div>
            `;
            
            div.addEventListener('click', () => {
                notification.read = true;
                updateNotificationBadge();
                renderNotifications();
                saveNotifications();
            });
            
            notificationsList.appendChild(div);
        });
    }
    
    // Fonction pour effacer toutes les notifications
    function clearNotifications() {
        notifications = [];
        updateNotificationBadge();
        renderNotifications();
        saveNotifications();
    }
    
    // Fonction pour sauvegarder les notifications dans localStorage
    function saveNotifications() {
        try {
            localStorage.setItem('matchNotifications', JSON.stringify(notifications));
        } catch (e) {
            console.log('Impossible de sauvegarder les notifications');
        }
    }
    
    // Fonction pour charger les notifications depuis localStorage
    function loadNotifications() {
        try {
            const saved = localStorage.getItem('matchNotifications');
            if (saved) {
                notifications = JSON.parse(saved);
                updateNotificationBadge();
                renderNotifications();
            }
        } catch (e) {
            console.log('Impossible de charger les notifications');
        }
    }
    
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
        
        updateStats();
    }
    
    // Fonction pour mettre à jour les statistiques
    function updateStats() {
        const visibleMatches = document.querySelectorAll('.match-card:not(.hidden)');
        const ongoing = document.querySelectorAll('.match-card.ongoing:not(.hidden)').length;
        const finished = document.querySelectorAll('.match-card[data-status=\"finished\"]:not(.hidden)').length;
        const withWinner = document.querySelectorAll('.match-card[data-winner=\"yes\"]:not(.hidden)').length;
        
        statTotal.textContent = visibleMatches.length;
        statOngoing.textContent = ongoing;
        statFinished.textContent = finished;
        statWithWinner.textContent = withWinner;
    }
    
    // Fonction pour exporter la liste des matchs
    function exportMatches() {
        const visibleMatches = Array.from(document.querySelectorAll('.match-card:not(.hidden)'));
        
        if (visibleMatches.length === 0) {
            showToast('Aucun match à exporter');
            return;
        }
        
        let exportData = 'PHANTOM FORCE - LISTE DES MATCHS\\n';
        exportData += '===============================\\n\\n';
        
        visibleMatches.forEach((match, index) => {
            const game = match.querySelector('.match-game').textContent;
            const date = match.querySelector('.match-date').textContent;
            const team1 = match.querySelector('.team-info:first-child .team-name').textContent;
            const score1 = match.querySelector('.team-info:first-child .team-score').textContent;
            const team2 = match.querySelector('.team-info:last-child .team-name').textContent;
            const score2 = match.querySelector('.team-info:last-child .team-score').textContent;
            const status = match.dataset.status.toUpperCase();
            const hasWinner = match.dataset.winner === 'yes';
            
            exportData += `\${index + 1}. \${game}\\n`;
            exportData += `   Date: \${date}\\n`;
            exportData += `   \${team1} \${score1} - \${score2} \${team2}\\n`;
            exportData += `   Statut: \${status}\\n`;
            exportData += `   \${hasWinner ? 'Avec gagnant' : 'Sans gagnant'}\\n`;
            exportData += '\\n';
        });
        
        exportData += `\\nTotal: \${visibleMatches.length} match(s)\\n`;
        exportData += `Exporté le: \${new Date().toLocaleDateString('fr-FR')}`;
        
        // Créer un blob et télécharger
        const blob = new Blob([exportData], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `matchs-phantom-force-\${new Date().toISOString().split('T')[0]}.txt`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        
        showToast(`Liste exportée (\${visibleMatches.length} matchs)`);
        addNotification(`Liste de \${visibleMatches.length} matchs exportée`, 'info');
    }
    
    // Fonction pour mettre en vedette les matchs importants
    function toggleHighlight() {
        isHighlightActive = !isHighlightActive;
        
        document.querySelectorAll('.match-card').forEach(card => {
            if (isHighlightActive) {
                // Mettre en vedette les matchs en cours et ceux sans gagnant
                if (card.classList.contains('ongoing') || card.dataset.winner === 'no') {
                    card.classList.add('highlighted');
                }
            } else {
                card.classList.remove('highlighted');
            }
        });
        
        if (isHighlightActive) {
            highlightBtn.innerHTML = '⭐ Désactiver vedettes';
            showToast('Matchs en vedette activés');
            addNotification('Filtre \"Matchs en vedette\" activé', 'info');
        } else {
            highlightBtn.innerHTML = '⭐ Matchs en vedette';
            showToast('Matchs en vedette désactivés');
        }
    }
    
    // Fonction pour activer/désactiver l'actualisation automatique
    function toggleAutoRefresh() {
        if (autoRefreshInterval) {
            clearInterval(autoRefreshInterval);
            autoRefreshInterval = null;
            refreshBtn.innerHTML = '🔄 Activer actualisation';
            showToast('Actualisation automatique désactivée');
            addNotification('Actualisation automatique désactivée', 'info');
        } else {
            autoRefreshInterval = setInterval(() => {
                simulateLiveUpdates();
            }, 10000); // Actualiser toutes les 10 secondes
            
            refreshBtn.innerHTML = '🔄 Actualisation active';
            showToast('Actualisation automatique activée (10s)');
            addNotification('Actualisation automatique activée', 'alert');
        }
    }
    
    // Fonction pour simuler des mises à jour en direct
    function simulateLiveUpdates() {
        const ongoingMatches = document.querySelectorAll('.match-card.ongoing:not(.hidden)');
        
        if (ongoingMatches.length > 0) {
            // Simuler un changement de score aléatoire
            ongoingMatches.forEach(card => {
                if (Math.random() > 0.7) {
                    const score1El = card.querySelector('.team-info:first-child .team-score');
                    const score2El = card.querySelector('.team-info:last-child .team-score');
                    
                    let score1 = parseInt(score1El.textContent);
                    let score2 = parseInt(score2El.textContent);
                    
                    // Augmenter aléatoirement un score
                    if (Math.random() > 0.5) {
                        score1 += Math.floor(Math.random() * 2) + 1;
                    } else {
                        score2 += Math.floor(Math.random() * 2) + 1;
                    }
                    
                    score1El.textContent = score1;
                    score2El.textContent = score2;
                    
                    // Animation
                    score1El.style.transform = 'scale(1.2)';
                    score2El.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        score1El.style.transform = 'scale(1)';
                        score2El.style.transform = 'scale(1)';
                    }, 300);
                    
                    // Mettre à jour la barre de score
                    const totalScore = score1 + score2;
                    const percentage1 = totalScore > 0 ? (score1 / totalScore * 100) : 50;
                    const scoreBar = card.querySelector('.score-bar');
                    if (scoreBar) {
                        scoreBar.style.width = `\${percentage1}%`;
                    }
                    
                    // Notification pour les changements importants
                    if (Math.abs(score1 - score2) >= 5) {
                        const game = card.querySelector('.match-game').textContent;
                        addNotification(`\${game}: Écart important (\${score1}-\${score2})`, 'alert');
                    }
                }
            });
            
            // Mettre à jour la date de dernière mise à jour
            const now = new Date();
            const timeString = now.toLocaleTimeString('fr-FR', { 
                hour: '2-digit', 
                minute: '2-digit',
                second: '2-digit'
            });
            
            const updateText = document.querySelector('.text-center p');
            if (updateText) {
                const parts = updateText.textContent.split('•');
                if (parts.length > 1) {
                    updateText.textContent = `\${parts[0]}• DERNIÈRE MISE À JOUR : \${timeString}`;
                }
            }
            
            showToast(`Scores mis à jour (\${ongoingMatches.length} matchs en cours)`);
        }
    }
    
    // Fonction pour afficher/masquer les statistiques
    function toggleStats() {
        statsOverlay.classList.toggle('active');
        
        if (statsOverlay.classList.contains('active')) {
            updateStats();
            showToast('Statistiques affichées');
        } else {
            showToast('Statistiques masquées');
        }
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
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        loadNotifications();
        
        // Notifications de bienvenue
        setTimeout(() => {
            if (notifications.length === 0) {
                addNotification('Bienvenue sur Phantom Force Matchs!', 'info');
                addNotification(`Suivez \${allMatches.length} matchs en direct`, 'info');
            }
        }, 1000);
        
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
    });
    
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
        showToast('Filtres réinitialisés');
    });
    
    // Boutons avancés
    exportBtn.addEventListener('click', exportMatches);
    statsBtn.addEventListener('click', toggleStats);
    highlightBtn.addEventListener('click', toggleHighlight);
    refreshBtn.addEventListener('click', toggleAutoRefresh);
    
    // Notifications
    notificationBell.addEventListener('click', () => {
        notificationsModal.classList.toggle('active');
        
        // Marquer toutes comme lues lorsqu'on ouvre
        if (notificationsModal.classList.contains('active')) {
            notifications.forEach(n => n.read = true);
            updateNotificationBadge();
            renderNotifications();
            saveNotifications();
        }
    });
    
    // Fermer les notifications en cliquant à l'extérieur
    document.addEventListener('click', (e) => {
        if (!notificationsModal.contains(e.target) && !notificationBell.contains(e.target)) {
            notificationsModal.classList.remove('active');
        }
        
        if (!statsOverlay.contains(e.target) && e.target !== statsBtn) {
            statsOverlay.classList.remove('active');
        }
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
            if (!this.classList.contains('highlighted')) {
                this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
            }
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
    
    // Effet de particules au clic
    document.addEventListener('click', function(e) {
        if (e.target.closest('.match-card') || e.target.closest('.action-btn') || 
            e.target.closest('.add-match-btn') || e.target.closest('.advanced-btn') ||
            e.target.closest('.notification-bell') || e.target === statsBtn) {
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
    
    // Raccourcis clavier
    document.addEventListener('keydown', (e) => {
        // Ctrl+E pour exporter
        if ((e.ctrlKey || e.metaKey) && e.key === 'e') {
            e.preventDefault();
            exportMatches();
        }
        
        // Ctrl+S pour les stats
        if ((e.ctrlKey || e.metaKey) && e.key === 's') {
            e.preventDefault();
            toggleStats();
        }
        
        // Ctrl+H pour highlight
        if ((e.ctrlKey || e.metaKey) && e.key === 'h') {
            e.preventDefault();
            toggleHighlight();
        }
        
        // Échap pour fermer les modals
        if (e.key === 'Escape') {
            notificationsModal.classList.remove('active');
            statsOverlay.classList.remove('active');
        }
    });
    
    // Ajouter l'animation CSS pour les particules
    const style = document.createElement('style');
    style.textContent = `
        @keyframes sparkFade {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
    
    // Détection de matchs urgents au chargement
    setTimeout(() => {
        const urgentMatches = document.querySelectorAll('.match-card.ongoing');
        if (urgentMatches.length > 0) {
            addNotification(`\${urgentMatches.length} match(s) en cours nécessitent votre attention`, 'alert');
        }
    }, 2000);
</script>
{% endblock %}", "front/matchy/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\matchy\\index.html.twig");
    }
}
