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

/* matchy/show.html.twig */
class __TwigTemplate_cec08f9cd5ed2320e421374ca5c0e68a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matchy/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matchy/show.html.twig"));

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

        yield "🎮 ARENA - Détails du Match";
        
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
        --dark-bg: #0a0a14;
    }
    
    body {
        background: linear-gradient(135deg, #0a0a14 0%, #1a1a2e 50%, #16213e 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
        min-height: 100vh;
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
    
    .gaming-container {
        position: relative;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        animation: fadeIn 1s ease-out;
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
        font-size: 2.5rem;
        background: linear-gradient(to right, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.5);
        letter-spacing: 2px;
        margin-bottom: 0.5rem;
    }
    
    .match-id-badge {
        display: inline-block;
        background: rgba(0, 0, 0, 0.5);
        color: var(--neon-green);
        font-family: 'Orbitron', monospace;
        font-size: 1rem;
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        border: 2px solid var(--neon-green);
        margin-bottom: 1rem;
        box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
    }
    
    .match-card-detail {
        background: rgba(20, 20, 35, 0.85);
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        border: 2px solid rgba(0, 243, 255, 0.3);
        backdrop-filter: blur(10px);
        margin-bottom: 3rem;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    }
    
    .match-card-detail::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red),
            var(--neon-green));
        background-size: 300% 100%;
        animation: slide 3s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 300% 0; }
    }
    
    .match-header-detail {
        text-align: center;
        margin-bottom: 3rem;
        padding-bottom: 2rem;
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    }
    
    .match-game-detail {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 900;
        color: white;
        margin-bottom: 1rem;
        text-shadow: 0 0 15px rgba(0, 243, 255, 0.5);
    }
    
    .match-date-detail {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        letter-spacing: 1px;
        background: rgba(0, 0, 0, 0.3);
        padding: 0.8rem 2rem;
        border-radius: 15px;
        display: inline-block;
        border: 1px solid var(--neon-blue);
    }
    
    .teams-container-detail {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 3rem 0;
        padding: 2rem;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 15px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        position: relative;
    }
    
    .team-card {
        flex: 1;
        text-align: center;
        padding: 1.5rem;
        background: rgba(30, 30, 45, 0.7);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .team-card.winner {
        background: rgba(0, 255, 136, 0.1);
        border: 2px solid var(--neon-green);
        box-shadow: 0 0 30px rgba(0, 255, 136, 0.3);
        transform: scale(1.05);
    }
    
    .team-name-detail {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.8rem;
        color: white;
        margin-bottom: 1rem;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 8px;
    }
    
    .team-score-detail {
        font-family: 'Orbitron', sans-serif;
        font-size: 4rem;
        font-weight: 900;
        color: var(--neon-blue);
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.7);
        margin: 1rem 0;
    }
    
    .vs-detail {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2.5rem;
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.7);
        padding: 0 3rem;
        position: relative;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 3px solid var(--neon-red);
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.5);
    }
    
    .match-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin: 3rem 0;
    }
    
    .info-card {
        background: rgba(0, 0, 0, 0.3);
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        border-color: var(--neon-purple);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(157, 0, 255, 0.2);
    }
    
    .info-label {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
    }
    
    .info-value {
        color: white;
        font-size: 1.4rem;
        font-weight: 600;
        font-family: 'Rajdhani', sans-serif;
    }
    
    .status-badge-detail {
        display: inline-block;
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    
    .status-planned {
        background: rgba(0, 243, 255, 0.15);
        color: var(--neon-blue);
        border: 2px solid var(--neon-blue);
        box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
    }
    
    .status-ongoing {
        background: rgba(255, 204, 0, 0.15);
        color: #ffcc00;
        border: 2px solid #ffcc00;
        box-shadow: 0 0 15px rgba(255, 204, 0, 0.3);
        animation: pulse 1.5s infinite;
    }
    
    .status-finished {
        background: rgba(0, 255, 136, 0.15);
        color: var(--neon-green);
        border: 2px solid var(--neon-green);
        box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
    }
    
    .status-cancelled {
        background: rgba(255, 0, 60, 0.15);
        color: var(--neon-red);
        border: 2px solid var(--neon-red);
        box-shadow: 0 0 15px rgba(255, 0, 60, 0.3);
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    
    .winner-banner {
        background: linear-gradient(90deg, 
            rgba(0, 255, 136, 0.1), 
            rgba(0, 243, 255, 0.1),
            rgba(157, 0, 255, 0.1));
        border-radius: 15px;
        padding: 2rem;
        margin: 3rem 0;
        text-align: center;
        border: 2px solid var(--neon-green);
        position: relative;
        overflow: hidden;
    }
    
    .winner-banner::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--neon-green), 
            var(--neon-blue),
            var(--neon-purple));
        border-radius: 17px;
        z-index: -1;
        filter: blur(5px);
        opacity: 0.5;
    }
    
    .winner-text {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 900;
        color: var(--neon-green);
        text-shadow: 0 0 20px rgba(0, 255, 136, 0.5);
        margin-bottom: 1rem;
    }
    
    .winner-team {
        font-size: 2.5rem;
        color: white;
        font-weight: 700;
    }
    
    .actions-container-detail {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }
    
    .action-btn-detail {
        padding: 1rem 2.5rem;
        border: none;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        text-decoration: none;
        min-width: 200px;
        justify-content: center;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .back-btn {
        background: linear-gradient(45deg, #1a5fb4, #26a269);
        color: white;
        box-shadow: 0 0 25px rgba(38, 162, 105, 0.4);
    }
    
    .edit-btn-detail {
        background: linear-gradient(45deg, #cd9309, #f5c211);
        color: white;
        box-shadow: 0 0 25px rgba(245, 194, 17, 0.4);
    }
    
    .delete-section {
        margin-top: 4rem;
        padding: 2.5rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 15px;
        border: 2px solid var(--neon-red);
        position: relative;
        overflow: hidden;
    }
    
    .delete-section::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--neon-red), 
            #ff6b6b,
            #c44569);
        border-radius: 17px;
        z-index: -1;
        filter: blur(5px);
        opacity: 0.3;
    }
    
    .delete-header {
        text-align: center;
        margin-bottom: 1.5rem;
    }
    
    .delete-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        color: var(--neon-red);
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        margin-bottom: 0.5rem;
    }
    
    .delete-warning {
        color: #ff9999;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        text-align: center;
        line-height: 1.5;
    }
    
    .delete-form-container {
        text-align: center;
    }
    
    .delete-btn-detail {
        background: linear-gradient(45deg, #c01c28, #ff003c);
        color: white;
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.4);
        border: none;
        padding: 1rem 3rem;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .delete-btn-detail::before {
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
    
    .delete-btn-detail:hover::before {
        left: 100%;
    }
    
    .delete-btn-detail:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.7);
        filter: brightness(1.2);
    }
    
    .floating-elements {
        position: fixed;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
        top: 0;
        left: 0;
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
    
    @media (max-width: 768px) {
        .gaming-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .match-game-detail {
            font-size: 2rem;
        }
        
        .teams-container-detail {
            flex-direction: column;
            gap: 2rem;
        }
        
        .vs-detail {
            margin: 1rem 0;
            width: 80px;
            height: 80px;
            font-size: 2rem;
        }
        
        .team-score-detail {
            font-size: 3rem;
        }
        
        .match-info-grid {
            grid-template-columns: 1fr;
        }
        
        .actions-container-detail {
            flex-direction: column;
            align-items: center;
        }
        
        .action-btn-detail {
            width: 100%;
            max-width: 300px;
        }
        
        .delete-section {
            padding: 1.5rem;
        }
        
        .delete-title {
            font-size: 1.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 599
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

        // line 600
        yield "<div class=\"gaming-container\">
    
    <!-- Éléments flottants -->
    <div class=\"floating-elements\">
        ";
        // line 604
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 605
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 606
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 606, $this->source); })())));
            // line 607
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 10) % 90));
            // line 608
            yield "            ";
            $context["delay"] = (($context["i"] * 1.5) % 21);
            // line 609
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 2) % 11));
            // line 610
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 611, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 612, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 613, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 615, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 615, $this->source); })()), [], "array", false, false, false, 615), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        yield "    </div>
    
    <!-- En-tête -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">DÉTAILS DU MATCH</h1>
        <div class=\"match-id-badge\">MATCH #";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 623, $this->source); })()), "id", [], "any", false, false, false, 623), "html", null, true);
        yield "</div>
        <p class=\"text-light\" style=\"font-size: 1.1rem; opacity: 0.9;\">
            ARENA E-SPORT • CONFIGURATION DU COMBAT
        </p>
    </div>
    
    <!-- Carte principale du match -->
    <div class=\"match-card-detail\">
        <div class=\"match-header-detail\">
            <div class=\"match-game-detail\">";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 632, $this->source); })()), "game", [], "any", false, false, false, 632)), "html", null, true);
        yield "</div>
            <div class=\"match-date-detail\">
                ";
        // line 634
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 634, $this->source); })()), "matchDate", [], "any", false, false, false, 634)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 634, $this->source); })()), "matchDate", [], "any", false, false, false, 634), "d/m/Y • H:i"), "html", null, true)) : ("DATE NON DÉFINIE"));
        yield "
            </div>
        </div>
        
        <!-- Scores des équipes -->
        <div class=\"teams-container-detail\">
            <div class=\"team-card ";
        // line 640
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 640, $this->source); })()), "winnerTeam", [], "any", false, false, false, 640) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 640, $this->source); })()), "winnerTeam", [], "any", false, false, false, 640), "id", [], "any", false, false, false, 640) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 640, $this->source); })()), "team1", [], "any", false, false, false, 640), "id", [], "any", false, false, false, 640)))) {
            yield "winner";
        }
        yield "\">
                <div class=\"team-name-detail\">
                    ";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 642), "name", [], "any", true, true, false, 642)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 642, $this->source); })()), "team1", [], "any", false, false, false, 642), "name", [], "any", false, false, false, 642), "ÉQUIPE 1")) : ("ÉQUIPE 1")), "html", null, true);
        yield "
                    ";
        // line 643
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 643, $this->source); })()), "team1", [], "any", false, false, false, 643) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 643, $this->source); })()), "team1", [], "any", false, false, false, 643), "game", [], "any", false, false, false, 643))) {
            // line 644
            yield "                        <div style=\"font-size: 0.9rem; color: var(--neon-blue); margin-top: 0.3rem;\">
                            Jeu: ";
            // line 645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 645, $this->source); })()), "team1", [], "any", false, false, false, 645), "game", [], "any", false, false, false, 645), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 648
        yield "                </div>
                <div class=\"team-score-detail\">";
        // line 649
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", true, true, false, 649) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 649, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 649)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 649, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 649), "html", null, true)) : ("0"));
        yield "</div>
                ";
        // line 650
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 650, $this->source); })()), "winnerTeam", [], "any", false, false, false, 650) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 650, $this->source); })()), "winnerTeam", [], "any", false, false, false, 650), "id", [], "any", false, false, false, 650) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 650, $this->source); })()), "team1", [], "any", false, false, false, 650), "id", [], "any", false, false, false, 650)))) {
            // line 651
            yield "                    <div style=\"color: var(--neon-green); font-family: 'Orbitron'; font-size: 0.9rem; margin-top: 0.5rem;\">
                        🏆 GAGNANT
                    </div>
                ";
        }
        // line 655
        yield "            </div>
            
            <div class=\"vs-detail\">VS</div>
            
            <div class=\"team-card ";
        // line 659
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 659, $this->source); })()), "winnerTeam", [], "any", false, false, false, 659) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 659, $this->source); })()), "winnerTeam", [], "any", false, false, false, 659), "id", [], "any", false, false, false, 659) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 659, $this->source); })()), "team2", [], "any", false, false, false, 659), "id", [], "any", false, false, false, 659)))) {
            yield "winner";
        }
        yield "\">
                <div class=\"team-name-detail\">
                    ";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 661), "name", [], "any", true, true, false, 661)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 661, $this->source); })()), "team2", [], "any", false, false, false, 661), "name", [], "any", false, false, false, 661), "ÉQUIPE 2")) : ("ÉQUIPE 2")), "html", null, true);
        yield "
                    ";
        // line 662
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 662, $this->source); })()), "team2", [], "any", false, false, false, 662) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 662, $this->source); })()), "team2", [], "any", false, false, false, 662), "game", [], "any", false, false, false, 662))) {
            // line 663
            yield "                        <div style=\"font-size: 0.9rem; color: var(--neon-blue); margin-top: 0.3rem;\">
                            Jeu: ";
            // line 664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 664, $this->source); })()), "team2", [], "any", false, false, false, 664), "game", [], "any", false, false, false, 664), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 667
        yield "                </div>
                <div class=\"team-score-detail\">";
        // line 668
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", true, true, false, 668) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 668, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 668)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 668, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 668), "html", null, true)) : ("0"));
        yield "</div>
                ";
        // line 669
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 669, $this->source); })()), "winnerTeam", [], "any", false, false, false, 669) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 669, $this->source); })()), "winnerTeam", [], "any", false, false, false, 669), "id", [], "any", false, false, false, 669) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 669, $this->source); })()), "team2", [], "any", false, false, false, 669), "id", [], "any", false, false, false, 669)))) {
            // line 670
            yield "                    <div style=\"color: var(--neon-green); font-family: 'Orbitron'; font-size: 0.9rem; margin-top: 0.5rem;\">
                        🏆 GAGNANT
                    </div>
                ";
        }
        // line 674
        yield "            </div>
        </div>
        
        <!-- Informations détaillées -->
        <div class=\"match-info-grid\">
            <div class=\"info-card\">
                <div class=\"info-label\">🎮 JEU</div>
                <div class=\"info-value\">";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 681, $this->source); })()), "game", [], "any", false, false, false, 681), "html", null, true);
        yield "</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📅 DATE & HEURE</div>
                <div class=\"info-value\">";
        // line 686
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 686, $this->source); })()), "matchDate", [], "any", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 686, $this->source); })()), "matchDate", [], "any", false, false, false, 686), "d/m/Y • H:i:s"), "html", null, true)) : ("Non définie"));
        yield "</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📊 STATUT</div>
                <div class=\"info-value\">
                    ";
        // line 692
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 692, $this->source); })()), "status", [], "any", false, false, false, 692) == "planned")) {
            // line 693
            yield "                        <span class=\"status-badge-detail status-planned\">PLANIFIÉ</span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 694
(isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 694, $this->source); })()), "status", [], "any", false, false, false, 694) == "ongoing")) {
            // line 695
            yield "                        <span class=\"status-badge-detail status-ongoing\">EN COURS</span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 696
(isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 696, $this->source); })()), "status", [], "any", false, false, false, 696) == "finished")) {
            // line 697
            yield "                        <span class=\"status-badge-detail status-finished\">TERMINÉ</span>
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 698
(isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 698, $this->source); })()), "status", [], "any", false, false, false, 698) == "cancelled")) {
            // line 699
            yield "                        <span class=\"status-badge-detail status-cancelled\">ANNULÉ</span>
                    ";
        } else {
            // line 701
            yield "                        <span class=\"status-badge-detail status-planned\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 701, $this->source); })()), "status", [], "any", false, false, false, 701)), "html", null, true);
            yield "</span>
                    ";
        }
        // line 703
        yield "                </div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📈 SCORE ÉQUIPE 1</div>
                <div class=\"info-value\">";
        // line 708
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", true, true, false, 708) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 708, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 708)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 708, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 708), "html", null, true)) : ("0"));
        yield "</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📉 SCORE ÉQUIPE 2</div>
                <div class=\"info-value\">";
        // line 713
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", true, true, false, 713) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 713, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 713)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 713, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 713), "html", null, true)) : ("0"));
        yield "</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">🏆 GAGNANT</div>
                <div class=\"info-value\">
                    ";
        // line 719
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 719, $this->source); })()), "winnerTeam", [], "any", false, false, false, 719)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 720
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 720, $this->source); })()), "winnerTeam", [], "any", false, false, false, 720), "name", [], "any", false, false, false, 720), "html", null, true);
            yield "
                        <div style=\"font-size: 0.9rem; color: var(--neon-green); margin-top: 0.3rem;\">
                            Score gagnant: ";
            // line 722
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 722, $this->source); })()), "winnerTeam", [], "any", false, false, false, 722), "id", [], "any", false, false, false, 722) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 722, $this->source); })()), "team1", [], "any", false, false, false, 722), "id", [], "any", false, false, false, 722))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 722, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 722), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 722, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 722), "html", null, true)));
            yield "
                        </div>
                    ";
        } else {
            // line 725
            yield "                        <span style=\"color: #ff9999;\">Aucun gagnant désigné</span>
                    ";
        }
        // line 727
        yield "                </div>
            </div>
        </div>
        
        <!-- Bannière du gagnant -->
        ";
        // line 732
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 732, $this->source); })()), "winnerTeam", [], "any", false, false, false, 732)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 733
            yield "            <div class=\"winner-banner\">
                <div class=\"winner-text\">🏆 VICTOIRE 🏆</div>
                <div class=\"winner-team\">";
            // line 735
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 735, $this->source); })()), "winnerTeam", [], "any", false, false, false, 735), "name", [], "any", false, false, false, 735), "html", null, true);
            yield "</div>
                <div style=\"margin-top: 1rem; color: rgba(255, 255, 255, 0.7); font-size: 1.2rem;\">
                    Score final : ";
            // line 737
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", true, true, false, 737) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 737, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 737)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 737, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 737), "html", null, true)) : ("0"));
            yield " - ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", true, true, false, 737) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 737, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 737)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 737, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 737), "html", null, true)) : ("0"));
            yield "
                </div>
            </div>
        ";
        }
        // line 741
        yield "        
        <!-- Actions principales -->
        <div class=\"actions-container-detail\">
            <a href=\"";
        // line 744
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"action-btn-detail back-btn\">
                ← RETOUR À LA LISTE
            </a>
            
            <a href=\"";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 748, $this->source); })()), "id", [], "any", false, false, false, 748)]), "html", null, true);
        yield "\" class=\"action-btn-detail edit-btn-detail\">
                ✏️ MODIFIER LE MATCH
            </a>
        </div>
        
        <!-- Section de suppression (nouvelle section) -->
        <div class=\"delete-section\">
            <div class=\"delete-header\">
                <div class=\"delete-title\">⚠️ ZONE DE SUPPRESSION</div>
                <div class=\"delete-warning\">
                    Cette action est irréversible. Une fois supprimé, le match et toutes ses données associées seront définitivement effacés.
                </div>
            </div>
            
            <div class=\"delete-form-container\">
                <form method=\"post\" action=\"";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 763, $this->source); })()), "id", [], "any", false, false, false, 763)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirmDelete();\" class=\"delete-form\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 765, $this->source); })()), "id", [], "any", false, false, false, 765))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"delete-btn-detail\">
                        🗑️ SUPPRIMER DÉFINITIVEMENT
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Animation des éléments
    document.addEventListener('DOMContentLoaded', function() {
        // Animation des cartes au chargement
        const cards = document.querySelectorAll('.info-card, .team-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 * index);
        });
        
        // Effet de survol amélioré pour la carte principale
        const mainCard = document.querySelector('.match-card-detail');
        if (mainCard) {
            mainCard.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                this.style.transform = `rotateX(\${(y - rect.height/2)/50}deg) rotateY(\${(x - rect.width/2)/50}deg) scale(1.01)`;
            });
            
            mainCard.addEventListener('mouseleave', function() {
                this.style.transform = 'rotateX(0) rotateY(0) scale(1)';
            });
        }
        
        // Animation pour la section de suppression
        const deleteSection = document.querySelector('.delete-section');
        if (deleteSection) {
            deleteSection.style.opacity = '0';
            deleteSection.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                deleteSection.style.transition = 'all 0.8s ease';
                deleteSection.style.opacity = '1';
                deleteSection.style.transform = 'translateY(0)';
            }, 500);
        }
    });
    
    // Fonction de confirmation pour suppression
    function confirmDelete() {
        const gameName = '";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 823, $this->source); })()), "game", [], "any", false, false, false, 823), "js"), "html", null, true);
        yield "';
        const team1Name = '";
        // line 824
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 824, $this->source); })()), "team1", [], "any", false, false, false, 824)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 824, $this->source); })()), "team1", [], "any", false, false, false, 824), "name", [], "any", false, false, false, 824), "js"), "html", null, true)) : ("Équipe 1"));
        yield "';
        const team2Name = '";
        // line 825
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 825, $this->source); })()), "team2", [], "any", false, false, false, 825)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 825, $this->source); })()), "team2", [], "any", false, false, false, 825), "name", [], "any", false, false, false, 825), "js"), "html", null, true)) : ("Équipe 2"));
        yield "';
        
        const message = `⚠️ CONFIRMATION DE SUPPRESSION ⚠️\\n\\n` +
                       `Vous êtes sur le point de supprimer définitivement :\\n` +
                       `• Match: \${gameName}\\n` +
                       `• \${team1Name} VS \${team2Name}\\n` +
                       `• Date: ";
        // line 831
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 831, $this->source); })()), "matchDate", [], "any", false, false, false, 831)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 831, $this->source); })()), "matchDate", [], "any", false, false, false, 831), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "\\n\\n` +
                       `Cette action est IRRÉVERSIBLE !\\n\\n` +
                       `Êtes-vous ABSOLUMENT SÛR de vouloir continuer ?`;
        
        return confirm(message);
    }
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
        return "matchy/show.html.twig";
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
        return array (  1115 => 831,  1106 => 825,  1102 => 824,  1098 => 823,  1037 => 765,  1032 => 763,  1014 => 748,  1007 => 744,  1002 => 741,  993 => 737,  988 => 735,  984 => 733,  982 => 732,  975 => 727,  971 => 725,  965 => 722,  959 => 720,  957 => 719,  948 => 713,  940 => 708,  933 => 703,  927 => 701,  923 => 699,  921 => 698,  918 => 697,  916 => 696,  913 => 695,  911 => 694,  908 => 693,  906 => 692,  897 => 686,  889 => 681,  880 => 674,  874 => 670,  872 => 669,  868 => 668,  865 => 667,  859 => 664,  856 => 663,  854 => 662,  850 => 661,  843 => 659,  837 => 655,  831 => 651,  829 => 650,  825 => 649,  822 => 648,  816 => 645,  813 => 644,  811 => 643,  807 => 642,  800 => 640,  791 => 634,  786 => 632,  774 => 623,  767 => 618,  758 => 615,  753 => 613,  749 => 612,  745 => 611,  742 => 610,  739 => 609,  736 => 608,  733 => 607,  730 => 606,  725 => 605,  723 => 604,  717 => 600,  704 => 599,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎮 ARENA - Détails du Match{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --neon-blue: #00f3ff;
        --neon-purple: #9d00ff;
        --neon-red: #ff003c;
        --neon-green: #00ff88;
        --dark-bg: #0a0a14;
    }
    
    body {
        background: linear-gradient(135deg, #0a0a14 0%, #1a1a2e 50%, #16213e 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
        min-height: 100vh;
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
    
    .gaming-container {
        position: relative;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        animation: fadeIn 1s ease-out;
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
        font-size: 2.5rem;
        background: linear-gradient(to right, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.5);
        letter-spacing: 2px;
        margin-bottom: 0.5rem;
    }
    
    .match-id-badge {
        display: inline-block;
        background: rgba(0, 0, 0, 0.5);
        color: var(--neon-green);
        font-family: 'Orbitron', monospace;
        font-size: 1rem;
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        border: 2px solid var(--neon-green);
        margin-bottom: 1rem;
        box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
    }
    
    .match-card-detail {
        background: rgba(20, 20, 35, 0.85);
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        border: 2px solid rgba(0, 243, 255, 0.3);
        backdrop-filter: blur(10px);
        margin-bottom: 3rem;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    }
    
    .match-card-detail::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red),
            var(--neon-green));
        background-size: 300% 100%;
        animation: slide 3s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 300% 0; }
    }
    
    .match-header-detail {
        text-align: center;
        margin-bottom: 3rem;
        padding-bottom: 2rem;
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    }
    
    .match-game-detail {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 900;
        color: white;
        margin-bottom: 1rem;
        text-shadow: 0 0 15px rgba(0, 243, 255, 0.5);
    }
    
    .match-date-detail {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        letter-spacing: 1px;
        background: rgba(0, 0, 0, 0.3);
        padding: 0.8rem 2rem;
        border-radius: 15px;
        display: inline-block;
        border: 1px solid var(--neon-blue);
    }
    
    .teams-container-detail {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 3rem 0;
        padding: 2rem;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 15px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        position: relative;
    }
    
    .team-card {
        flex: 1;
        text-align: center;
        padding: 1.5rem;
        background: rgba(30, 30, 45, 0.7);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .team-card.winner {
        background: rgba(0, 255, 136, 0.1);
        border: 2px solid var(--neon-green);
        box-shadow: 0 0 30px rgba(0, 255, 136, 0.3);
        transform: scale(1.05);
    }
    
    .team-name-detail {
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.8rem;
        color: white;
        margin-bottom: 1rem;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 8px;
    }
    
    .team-score-detail {
        font-family: 'Orbitron', sans-serif;
        font-size: 4rem;
        font-weight: 900;
        color: var(--neon-blue);
        text-shadow: 0 0 20px rgba(0, 243, 255, 0.7);
        margin: 1rem 0;
    }
    
    .vs-detail {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2.5rem;
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.7);
        padding: 0 3rem;
        position: relative;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        width: 100px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 3px solid var(--neon-red);
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.5);
    }
    
    .match-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
        margin: 3rem 0;
    }
    
    .info-card {
        background: rgba(0, 0, 0, 0.3);
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        border-color: var(--neon-purple);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(157, 0, 255, 0.2);
    }
    
    .info-label {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
    }
    
    .info-value {
        color: white;
        font-size: 1.4rem;
        font-weight: 600;
        font-family: 'Rajdhani', sans-serif;
    }
    
    .status-badge-detail {
        display: inline-block;
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }
    
    .status-planned {
        background: rgba(0, 243, 255, 0.15);
        color: var(--neon-blue);
        border: 2px solid var(--neon-blue);
        box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
    }
    
    .status-ongoing {
        background: rgba(255, 204, 0, 0.15);
        color: #ffcc00;
        border: 2px solid #ffcc00;
        box-shadow: 0 0 15px rgba(255, 204, 0, 0.3);
        animation: pulse 1.5s infinite;
    }
    
    .status-finished {
        background: rgba(0, 255, 136, 0.15);
        color: var(--neon-green);
        border: 2px solid var(--neon-green);
        box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
    }
    
    .status-cancelled {
        background: rgba(255, 0, 60, 0.15);
        color: var(--neon-red);
        border: 2px solid var(--neon-red);
        box-shadow: 0 0 15px rgba(255, 0, 60, 0.3);
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    
    .winner-banner {
        background: linear-gradient(90deg, 
            rgba(0, 255, 136, 0.1), 
            rgba(0, 243, 255, 0.1),
            rgba(157, 0, 255, 0.1));
        border-radius: 15px;
        padding: 2rem;
        margin: 3rem 0;
        text-align: center;
        border: 2px solid var(--neon-green);
        position: relative;
        overflow: hidden;
    }
    
    .winner-banner::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--neon-green), 
            var(--neon-blue),
            var(--neon-purple));
        border-radius: 17px;
        z-index: -1;
        filter: blur(5px);
        opacity: 0.5;
    }
    
    .winner-text {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 900;
        color: var(--neon-green);
        text-shadow: 0 0 20px rgba(0, 255, 136, 0.5);
        margin-bottom: 1rem;
    }
    
    .winner-team {
        font-size: 2.5rem;
        color: white;
        font-weight: 700;
    }
    
    .actions-container-detail {
        display: flex;
        justify-content: center;
        gap: 2rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }
    
    .action-btn-detail {
        padding: 1rem 2.5rem;
        border: none;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        text-decoration: none;
        min-width: 200px;
        justify-content: center;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .back-btn {
        background: linear-gradient(45deg, #1a5fb4, #26a269);
        color: white;
        box-shadow: 0 0 25px rgba(38, 162, 105, 0.4);
    }
    
    .edit-btn-detail {
        background: linear-gradient(45deg, #cd9309, #f5c211);
        color: white;
        box-shadow: 0 0 25px rgba(245, 194, 17, 0.4);
    }
    
    .delete-section {
        margin-top: 4rem;
        padding: 2.5rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 15px;
        border: 2px solid var(--neon-red);
        position: relative;
        overflow: hidden;
    }
    
    .delete-section::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, 
            var(--neon-red), 
            #ff6b6b,
            #c44569);
        border-radius: 17px;
        z-index: -1;
        filter: blur(5px);
        opacity: 0.3;
    }
    
    .delete-header {
        text-align: center;
        margin-bottom: 1.5rem;
    }
    
    .delete-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        color: var(--neon-red);
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        margin-bottom: 0.5rem;
    }
    
    .delete-warning {
        color: #ff9999;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        text-align: center;
        line-height: 1.5;
    }
    
    .delete-form-container {
        text-align: center;
    }
    
    .delete-btn-detail {
        background: linear-gradient(45deg, #c01c28, #ff003c);
        color: white;
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.4);
        border: none;
        padding: 1rem 3rem;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .delete-btn-detail::before {
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
    
    .delete-btn-detail:hover::before {
        left: 100%;
    }
    
    .delete-btn-detail:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.7);
        filter: brightness(1.2);
    }
    
    .floating-elements {
        position: fixed;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
        top: 0;
        left: 0;
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
    
    @media (max-width: 768px) {
        .gaming-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .match-game-detail {
            font-size: 2rem;
        }
        
        .teams-container-detail {
            flex-direction: column;
            gap: 2rem;
        }
        
        .vs-detail {
            margin: 1rem 0;
            width: 80px;
            height: 80px;
            font-size: 2rem;
        }
        
        .team-score-detail {
            font-size: 3rem;
        }
        
        .match-info-grid {
            grid-template-columns: 1fr;
        }
        
        .actions-container-detail {
            flex-direction: column;
            align-items: center;
        }
        
        .action-btn-detail {
            width: 100%;
            max-width: 300px;
        }
        
        .delete-section {
            padding: 1.5rem;
        }
        
        .delete-title {
            font-size: 1.5rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"gaming-container\">
    
    <!-- Éléments flottants -->
    <div class=\"floating-elements\">
        {% set icons = ['🎮', '⚡', '🔥', '👑', '🕹️', '🎯', '🏆', '💥', '🚀', '⭐'] %}
        {% for i in 1..10 %}
            {% set iconIndex = (i % icons|length) %}
            {% set leftPosition = 5 + ((i * 10) % 90) %}
            {% set delay = (i * 1.5) % 21 %}
            {% set duration = 15 + ((i * 2) % 11) %}
            <div class=\"floating-element\" style=\"
                left: {{ leftPosition }}%;
                animation-delay: {{ delay }}s;
                animation-duration: {{ duration }}s;
            \">
                {{ icons[iconIndex] }}
            </div>
        {% endfor %}
    </div>
    
    <!-- En-tête -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">DÉTAILS DU MATCH</h1>
        <div class=\"match-id-badge\">MATCH #{{ matchy.id }}</div>
        <p class=\"text-light\" style=\"font-size: 1.1rem; opacity: 0.9;\">
            ARENA E-SPORT • CONFIGURATION DU COMBAT
        </p>
    </div>
    
    <!-- Carte principale du match -->
    <div class=\"match-card-detail\">
        <div class=\"match-header-detail\">
            <div class=\"match-game-detail\">{{ matchy.game|upper }}</div>
            <div class=\"match-date-detail\">
                {{ matchy.matchDate ? matchy.matchDate|date('d/m/Y • H:i') : 'DATE NON DÉFINIE' }}
            </div>
        </div>
        
        <!-- Scores des équipes -->
        <div class=\"teams-container-detail\">
            <div class=\"team-card {% if matchy.winnerTeam and matchy.winnerTeam.id == matchy.team1.id %}winner{% endif %}\">
                <div class=\"team-name-detail\">
                    {{ matchy.team1.name|default('ÉQUIPE 1') }}
                    {% if matchy.team1 and matchy.team1.game %}
                        <div style=\"font-size: 0.9rem; color: var(--neon-blue); margin-top: 0.3rem;\">
                            Jeu: {{ matchy.team1.game }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"team-score-detail\">{{ matchy.scoreTeam1 ?? '0' }}</div>
                {% if matchy.winnerTeam and matchy.winnerTeam.id == matchy.team1.id %}
                    <div style=\"color: var(--neon-green); font-family: 'Orbitron'; font-size: 0.9rem; margin-top: 0.5rem;\">
                        🏆 GAGNANT
                    </div>
                {% endif %}
            </div>
            
            <div class=\"vs-detail\">VS</div>
            
            <div class=\"team-card {% if matchy.winnerTeam and matchy.winnerTeam.id == matchy.team2.id %}winner{% endif %}\">
                <div class=\"team-name-detail\">
                    {{ matchy.team2.name|default('ÉQUIPE 2') }}
                    {% if matchy.team2 and matchy.team2.game %}
                        <div style=\"font-size: 0.9rem; color: var(--neon-blue); margin-top: 0.3rem;\">
                            Jeu: {{ matchy.team2.game }}
                        </div>
                    {% endif %}
                </div>
                <div class=\"team-score-detail\">{{ matchy.scoreTeam2 ?? '0' }}</div>
                {% if matchy.winnerTeam and matchy.winnerTeam.id == matchy.team2.id %}
                    <div style=\"color: var(--neon-green); font-family: 'Orbitron'; font-size: 0.9rem; margin-top: 0.5rem;\">
                        🏆 GAGNANT
                    </div>
                {% endif %}
            </div>
        </div>
        
        <!-- Informations détaillées -->
        <div class=\"match-info-grid\">
            <div class=\"info-card\">
                <div class=\"info-label\">🎮 JEU</div>
                <div class=\"info-value\">{{ matchy.game }}</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📅 DATE & HEURE</div>
                <div class=\"info-value\">{{ matchy.matchDate ? matchy.matchDate|date('d/m/Y • H:i:s') : 'Non définie' }}</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📊 STATUT</div>
                <div class=\"info-value\">
                    {% if matchy.status == 'planned' %}
                        <span class=\"status-badge-detail status-planned\">PLANIFIÉ</span>
                    {% elseif matchy.status == 'ongoing' %}
                        <span class=\"status-badge-detail status-ongoing\">EN COURS</span>
                    {% elseif matchy.status == 'finished' %}
                        <span class=\"status-badge-detail status-finished\">TERMINÉ</span>
                    {% elseif matchy.status == 'cancelled' %}
                        <span class=\"status-badge-detail status-cancelled\">ANNULÉ</span>
                    {% else %}
                        <span class=\"status-badge-detail status-planned\">{{ matchy.status|upper }}</span>
                    {% endif %}
                </div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📈 SCORE ÉQUIPE 1</div>
                <div class=\"info-value\">{{ matchy.scoreTeam1 ?? '0' }}</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">📉 SCORE ÉQUIPE 2</div>
                <div class=\"info-value\">{{ matchy.scoreTeam2 ?? '0' }}</div>
            </div>
            
            <div class=\"info-card\">
                <div class=\"info-label\">🏆 GAGNANT</div>
                <div class=\"info-value\">
                    {% if matchy.winnerTeam %}
                        {{ matchy.winnerTeam.name }}
                        <div style=\"font-size: 0.9rem; color: var(--neon-green); margin-top: 0.3rem;\">
                            Score gagnant: {{ matchy.winnerTeam.id == matchy.team1.id ? matchy.scoreTeam1 : matchy.scoreTeam2 }}
                        </div>
                    {% else %}
                        <span style=\"color: #ff9999;\">Aucun gagnant désigné</span>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <!-- Bannière du gagnant -->
        {% if matchy.winnerTeam %}
            <div class=\"winner-banner\">
                <div class=\"winner-text\">🏆 VICTOIRE 🏆</div>
                <div class=\"winner-team\">{{ matchy.winnerTeam.name }}</div>
                <div style=\"margin-top: 1rem; color: rgba(255, 255, 255, 0.7); font-size: 1.2rem;\">
                    Score final : {{ matchy.scoreTeam1 ?? '0' }} - {{ matchy.scoreTeam2 ?? '0' }}
                </div>
            </div>
        {% endif %}
        
        <!-- Actions principales -->
        <div class=\"actions-container-detail\">
            <a href=\"{{ path('app_matchy_index') }}\" class=\"action-btn-detail back-btn\">
                ← RETOUR À LA LISTE
            </a>
            
            <a href=\"{{ path('app_matchy_edit', {'id': matchy.id}) }}\" class=\"action-btn-detail edit-btn-detail\">
                ✏️ MODIFIER LE MATCH
            </a>
        </div>
        
        <!-- Section de suppression (nouvelle section) -->
        <div class=\"delete-section\">
            <div class=\"delete-header\">
                <div class=\"delete-title\">⚠️ ZONE DE SUPPRESSION</div>
                <div class=\"delete-warning\">
                    Cette action est irréversible. Une fois supprimé, le match et toutes ses données associées seront définitivement effacés.
                </div>
            </div>
            
            <div class=\"delete-form-container\">
                <form method=\"post\" action=\"{{ path('app_matchy_delete', {'id': matchy.id}) }}\" 
                      onsubmit=\"return confirmDelete();\" class=\"delete-form\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ matchy.id) }}\">
                    <button type=\"submit\" class=\"delete-btn-detail\">
                        🗑️ SUPPRIMER DÉFINITIVEMENT
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Animation des éléments
    document.addEventListener('DOMContentLoaded', function() {
        // Animation des cartes au chargement
        const cards = document.querySelectorAll('.info-card, .team-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 * index);
        });
        
        // Effet de survol amélioré pour la carte principale
        const mainCard = document.querySelector('.match-card-detail');
        if (mainCard) {
            mainCard.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                this.style.transform = `rotateX(\${(y - rect.height/2)/50}deg) rotateY(\${(x - rect.width/2)/50}deg) scale(1.01)`;
            });
            
            mainCard.addEventListener('mouseleave', function() {
                this.style.transform = 'rotateX(0) rotateY(0) scale(1)';
            });
        }
        
        // Animation pour la section de suppression
        const deleteSection = document.querySelector('.delete-section');
        if (deleteSection) {
            deleteSection.style.opacity = '0';
            deleteSection.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                deleteSection.style.transition = 'all 0.8s ease';
                deleteSection.style.opacity = '1';
                deleteSection.style.transform = 'translateY(0)';
            }, 500);
        }
    });
    
    // Fonction de confirmation pour suppression
    function confirmDelete() {
        const gameName = '{{ matchy.game|escape('js') }}';
        const team1Name = '{{ matchy.team1 ? matchy.team1.name|escape('js') : \"Équipe 1\" }}';
        const team2Name = '{{ matchy.team2 ? matchy.team2.name|escape('js') : \"Équipe 2\" }}';
        
        const message = `⚠️ CONFIRMATION DE SUPPRESSION ⚠️\\n\\n` +
                       `Vous êtes sur le point de supprimer définitivement :\\n` +
                       `• Match: \${gameName}\\n` +
                       `• \${team1Name} VS \${team2Name}\\n` +
                       `• Date: {{ matchy.matchDate ? matchy.matchDate|date('d/m/Y H:i') : 'N/A' }}\\n\\n` +
                       `Cette action est IRRÉVERSIBLE !\\n\\n` +
                       `Êtes-vous ABSOLUMENT SÛR de vouloir continuer ?`;
        
        return confirm(message);
    }
</script>
{% endblock %}", "matchy/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\matchy\\show.html.twig");
    }
}
