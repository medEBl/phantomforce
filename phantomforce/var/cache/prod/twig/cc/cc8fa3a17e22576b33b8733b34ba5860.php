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

/* matchy/index.html.twig */
class __TwigTemplate_d10bf8b16ccb9b8cb97873e717932d08 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "🎮 ARENA - Matchs E-sport";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        font-size: 3.5rem;
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
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(0, 243, 255, 0.5); }
        to { text-shadow: 0 0 30px rgba(157, 0, 255, 0.7), 
                         0 0 40px rgba(157, 0, 255, 0.4); }
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
        background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
        border: none;
        padding: 1rem 2.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.5);
        z-index: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 300px;
        justify-content: center;
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
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.8);
    }
    
    .matches-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(420px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
    }
    
    .match-card {
        background: rgba(20, 20, 35, 0.8);
        border-radius: 15px;
        padding: 1.8rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 243, 255, 0.2);
        backdrop-filter: blur(10px);
        min-height: 320px;
        display: flex;
        flex-direction: column;
    }
    
    .match-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.5),
            0 0 30px rgba(0, 243, 255, 0.3);
        border-color: var(--neon-blue);
    }
    
    .match-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
        background-size: 200% 100%;
        animation: slide 3s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .match-id {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(0, 0, 0, 0.5);
        color: var(--neon-green);
        font-family: 'Orbitron', monospace;
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        border: 1px solid var(--neon-green);
    }
    
    .match-header {
        text-align: center;
        margin-bottom: 1.5rem;
        flex-shrink: 0;
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
    }
    
    .match-date {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        letter-spacing: 1px;
    }
    
    .teams-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.5rem;
        padding: 1.2rem;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        flex-shrink: 0;
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
    }
    
    .team-score {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 900;
        color: var(--neon-blue);
        text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
        min-width: 40px;
        text-align: center;
    }
    
    .vs-container {
        padding: 0 1.2rem;
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.3rem;
        text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
        flex-shrink: 0;
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
        color: #a0a0c0;
        font-size: 0.95rem;
        min-height: 24px;
    }
    
    .detail-item strong {
        color: var(--neon-blue);
        min-width: 80px;
        flex-shrink: 0;
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
    }
    
    .status-planned {
        background: rgba(0, 243, 255, 0.1);
        color: var(--neon-blue);
        border: 1px solid var(--neon-blue);
    }
    
    .status-ongoing {
        background: rgba(255, 204, 0, 0.1);
        color: #ffcc00;
        border: 1px solid #ffcc00;
        animation: pulse 1.5s infinite;
    }
    
    .status-finished {
        background: rgba(0, 255, 136, 0.1);
        color: var(--neon-green);
        border: 1px solid var(--neon-green);
    }
    
    .status-cancelled {
        background: rgba(255, 0, 60, 0.1);
        color: var(--neon-red);
        border: 1px solid var(--neon-red);
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    
    .winner-info {
        background: rgba(0, 255, 136, 0.15);
        color: var(--neon-green);
        padding: 0.8rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        text-align: center;
        margin-top: auto;
        border: 1px solid rgba(0, 255, 136, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }
    
    .no-winner {
        background: rgba(255, 0, 60, 0.1);
        color: var(--neon-red);
        padding: 0.8rem;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        text-align: center;
        margin-top: auto;
        border: 1px solid rgba(255, 0, 60, 0.3);
    }
    
    .actions-container {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
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
    }
    
    .view-btn {
        background: linear-gradient(45deg, #1a5fb4, #26a269);
        color: white;
    }
    
    .edit-btn {
        background: linear-gradient(45deg, #cd9309, #f5c211);
        color: white;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        filter: brightness(1.2);
    }
    
    .no-matches {
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem;
        background: rgba(255, 0, 60, 0.1);
        border: 2px dashed var(--neon-red);
        border-radius: 20px;
        animation: alertPulse 2s infinite;
    }
    
    @keyframes alertPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }
    
    .no-matches h2 {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    
    .no-matches p {
        color: #ff99aa;
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
        background: rgba(20, 20, 35, 0.8);
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        border: 1px solid rgba(0, 243, 255, 0.3);
        backdrop-filter: blur(10px);
    }
    
    .search-box {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .search-input {
        width: 100%;
        padding: 1rem 3rem 1rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-purple);
        border-radius: 10px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: var(--neon-blue);
        box-shadow: 0 0 20px rgba(0, 243, 255, 0.3);
    }
    
    .search-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }
    
    .clear-search {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--neon-red);
        font-size: 1.2rem;
        cursor: pointer;
        opacity: 0.7;
        transition: opacity 0.3s;
    }
    
    .clear-search:hover {
        opacity: 1;
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
        color: var(--neon-green);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 1px;
    }
    
    .filter-select {
        padding: 0.8rem 1rem;
        background: rgba(10, 10, 20, 0.9);
        border: 1px solid var(--neon-blue);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .filter-select:hover, .filter-select:focus {
        border-color: var(--neon-purple);
        box-shadow: 0 0 15px rgba(157, 0, 255, 0.3);
        outline: none;
    }
    
    .reset-btn {
        grid-column: span 1;
        padding: 0.8rem 1.5rem;
        background: linear-gradient(45deg, #666666, #999999);
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
        background: linear-gradient(45deg, #888888, #aaaaaa);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    
    .results-counter {
        text-align: center;
        padding: 0.8rem;
        background: rgba(0, 243, 255, 0.1);
        border-radius: 8px;
        border: 1px solid var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        color: var(--neon-blue);
        font-size: 1.1rem;
    }
    
    .results-counter span {
        font-size: 1.5rem;
        text-shadow: 0 0 10px var(--neon-blue);
    }
    
    .match-card.hidden {
        display: none;
    }
    
    .match-card.filtered-out {
        opacity: 0.3;
        transform: scale(0.95);
        transition: all 0.3s ease;
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
        yield from [];
    }

    // line 734
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 735
        yield "<div class=\"gaming-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 739
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 740
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 741
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icons"] ?? null)));
            // line 742
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 743
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 744
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 745
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["leftPosition"] ?? null), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delay"] ?? null), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["duration"] ?? null), "html", null, true);
            yield "s;
            \">
                ";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["iconIndex"] ?? null)] ?? null) : null), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">ARENA MATCHS</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            TOUS LES COMBATS E-SPORT • ";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matchies"] ?? null)), "html", null, true);
        yield " MATCHS PROGRAMMÉS
        </p>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        <a href=\"";
        // line 765
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_new");
        yield "\" class=\"add-match-btn\">
            ⚡ PROGRAMMER UN MATCH
        </a>
    </div>
    
    <!-- Barre de recherche et filtres -->
    <div class=\"filters-container\">
        <div class=\"search-box\">
            <input type=\"text\" id=\"searchInput\" placeholder=\"🔍 Rechercher un match...\" class=\"search-input\">
            <button class=\"clear-search\" id=\"clearSearch\">✖</button>
        </div>
        
        <div class=\"filter-controls\">
            <div class=\"filter-group\">
                <label class=\"filter-label\">🎮 FILTRER PAR JEU :</label>
                <select id=\"gameFilter\" class=\"filter-select\">
                    <option value=\"\">Tous les jeux</option>
                    ";
        // line 782
        $context["games"] = [];
        // line 783
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["matchies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 784
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 784), ($context["games"] ?? null))) {
                // line 785
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge(($context["games"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 785)]);
                // line 786
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 786), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 786), "html", null, true);
                yield "</option>
                        ";
            }
            // line 788
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
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
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matchies"] ?? null)), "html", null, true);
        yield "</span> MATCHS TROUVÉS
        </div>
    </div>
    
    ";
        // line 820
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matchies"] ?? null)) > 0)) {
            // line 821
            yield "        <!-- Grille des matchs -->
        <div class=\"matches-grid\" id=\"matchesGrid\">
            ";
            // line 823
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["matchies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 824
                yield "                <div class=\"match-card\" 
                     data-id=\"";
                // line 825
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 825), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 826
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 826)), "html", null, true);
                yield "\" 
                     data-status=\"";
                // line 827
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 827)), "html", null, true);
                yield "\"
                     data-date=\"";
                // line 828
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 828)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 828), "U"), "html", null, true)) : (0));
                yield "\"
                     data-winner=\"";
                // line 829
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 829)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\">
                    <div class=\"match-id\">#";
                // line 830
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 830), "html", null, true);
                yield "</div>
                    
                    <div class=\"match-header\">
                        <div class=\"match-game\">";
                // line 833
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 833)), "html", null, true);
                yield "</div>
                        <div class=\"match-date\">
                            ";
                // line 835
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 835)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 835), "d/m/Y H:i"), "html", null, true)) : ("Date non définie"));
                yield "
                        </div>
                    </div>
                    
                    <div class=\"teams-container\">
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"";
                // line 841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 841), "name", [], "any", true, true, false, 841)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 841), "name", [], "any", false, false, false, 841), "Équipe 1")) : ("Équipe 1")), "html", null, true);
                yield "\">
                                ";
                // line 842
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 842), "name", [], "any", true, true, false, 842)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 842), "name", [], "any", false, false, false, 842), "Équipe 1")) : ("Équipe 1")), 0, 15), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 842), "name", [], "any", true, true, false, 842)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 842), "name", [], "any", false, false, false, 842), "")) : (""))) > 15)) ? ("...") : (""));
                yield "
                            </div>
                            <div class=\"team-score\">";
                // line 844
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 844) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 844)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 844), "html", null, true)) : ("0"));
                yield "</div>
                        </div>
                        
                        <div class=\"vs-container\">VS</div>
                        
                        <div class=\"team-info\">
                            <div class=\"team-name\" title=\"";
                // line 850
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 850), "name", [], "any", true, true, false, 850)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 850), "name", [], "any", false, false, false, 850), "Équipe 2")) : ("Équipe 2")), "html", null, true);
                yield "\">
                                ";
                // line 851
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 851), "name", [], "any", true, true, false, 851)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 851), "name", [], "any", false, false, false, 851), "Équipe 2")) : ("Équipe 2")), 0, 15), "html", null, true);
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 851), "name", [], "any", true, true, false, 851)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 851), "name", [], "any", false, false, false, 851), "")) : (""))) > 15)) ? ("...") : (""));
                yield "
                            </div>
                            <div class=\"team-score\">";
                // line 853
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 853) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 853)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 853), "html", null, true)) : ("0"));
                yield "</div>
                        </div>
                    </div>
                    
                    <div class=\"match-details\">
                        <div class=\"detail-item\">
                            <strong>🎮 JEU :</strong>
                            <span>";
                // line 860
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 860), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📅 DATE :</strong>
                            <span>";
                // line 865
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 865)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 865), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📊 STATUT :</strong>
                            ";
                // line 870
                $context["statusClass"] = "";
                // line 871
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 871) == "planned")) {
                    // line 872
                    yield "                                ";
                    $context["statusClass"] = "status-planned";
                    // line 873
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 873) == "ongoing")) {
                    // line 874
                    yield "                                ";
                    $context["statusClass"] = "status-ongoing";
                    // line 875
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 875) == "finished")) {
                    // line 876
                    yield "                                ";
                    $context["statusClass"] = "status-finished";
                    // line 877
                    yield "                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 877) == "cancelled")) {
                    // line 878
                    yield "                                ";
                    $context["statusClass"] = "status-cancelled";
                    // line 879
                    yield "                            ";
                }
                // line 880
                yield "                            <span class=\"status-badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusClass"] ?? null), "html", null, true);
                yield "\">
                                ";
                // line 881
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 881)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    
                    ";
                // line 886
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 886)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 887
                    yield "                        <div class=\"winner-info\">
                            🏆 GAGNANT : ";
                    // line 888
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 888), "name", [], "any", false, false, false, 888), "html", null, true);
                    yield "
                        </div>
                    ";
                } else {
                    // line 891
                    yield "                        <div class=\"no-winner\">
                            ⏳ Pas encore de gagnant
                        </div>
                    ";
                }
                // line 895
                yield "                    
                    <div class=\"actions-container\">
                        <a href=\"";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 897)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails du match\">
                            👁️ VOIR
                        </a>
                        
                        <a href=\"";
                // line 903
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["match"], "id", [], "any", false, false, false, 903)]), "html", null, true);
                yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier le match\">
                            ✏️ MODIFIER
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 911
            yield "        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚡ <span id=\"activeMatches\">";
            // line 916
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matchies"] ?? null)), "html", null, true);
            yield "</span> MATCHS PROGRAMMÉS • DERNIÈRE MISE À JOUR : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 921
            yield "        <!-- Message quand aucun match n'existe -->
        <div class=\"no-matches\">
            <h2>⚠️ ARÈNE CALME ⚠️</h2>
            <p>Aucun match n'a encore été programmé. Soyez le premier à organiser un combat !</p>
            <a href=\"";
            // line 925
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_new");
            yield "\" class=\"add-match-btn\" style=\"display: inline-block; width: auto;\">
                🏆 PROGRAMMER LE PREMIER MATCH
            </a>
        </div>
    ";
        }
        // line 930
        yield "</div>

<script>
    // Initialisation des variables
    let allMatches = Array.from(document.querySelectorAll('.match-card'));
    let currentMatches = [...allMatches];
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const statusFilter = document.getElementById('statusFilter');
    const winnerFilter = document.getElementById('winnerFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const matchCount = document.getElementById('matchCount');
    const activeMatches = document.getElementById('activeMatches');
    
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
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "matchy/index.html.twig";
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
        return array (  1185 => 930,  1177 => 925,  1171 => 921,  1161 => 916,  1154 => 911,  1140 => 903,  1131 => 897,  1127 => 895,  1121 => 891,  1115 => 888,  1112 => 887,  1110 => 886,  1102 => 881,  1097 => 880,  1094 => 879,  1091 => 878,  1088 => 877,  1085 => 876,  1082 => 875,  1079 => 874,  1076 => 873,  1073 => 872,  1070 => 871,  1068 => 870,  1060 => 865,  1052 => 860,  1042 => 853,  1036 => 851,  1032 => 850,  1023 => 844,  1017 => 842,  1013 => 841,  1004 => 835,  999 => 833,  993 => 830,  989 => 829,  985 => 828,  981 => 827,  977 => 826,  973 => 825,  970 => 824,  966 => 823,  962 => 821,  960 => 820,  953 => 816,  924 => 789,  918 => 788,  910 => 786,  907 => 785,  904 => 784,  899 => 783,  897 => 782,  877 => 765,  868 => 759,  860 => 753,  851 => 750,  846 => 748,  842 => 747,  838 => 746,  835 => 745,  832 => 744,  829 => 743,  826 => 742,  823 => 741,  818 => 740,  816 => 739,  810 => 735,  803 => 734,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "matchy/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\matchy\\index.html.twig");
    }
}
