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

/* back/team/show.html.twig */
class __TwigTemplate_892a78cd113bbcec6580b6a23866c1fb extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/show.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 1);
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

        yield "⚔️ BLOOD ARENA - Équipe ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        --blood-red: #ff003c;
        --dark-red: #cc0030;
        --light-red: #ff335c;
        --blood-orange: #ff6600;
        --fire-yellow: #ffcc00;
        --dark-bg: #000000;
        --dark-gray: #111111;
        --medium-gray: #222222;
        --light-gray: #333333;
        --text-color: #ffffff;
        --text-muted: #aaaaaa;
        --success-green: #00ff88;
        --warning-orange: #ff9900;
        --info-blue: #0099ff;
    }
    
    body {
        background: linear-gradient(135deg, #000000 0%, #111111 50%, #220000 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
        color: var(--text-color);
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
            radial-gradient(circle at 20% 30%, rgba(255, 0, 60, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(204, 0, 48, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(255, 102, 0, 0.15) 0%, transparent 50%);
        z-index: -1;
    }
    
    .show-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
        max-width: 1000px;
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
        background: rgba(17, 17, 17, 0.9);
        border-radius: 20px;
        border: 2px solid var(--blood-red);
        box-shadow: 
            0 0 40px rgba(255, 0, 60, 0.4),
            inset 0 0 20px rgba(255, 0, 60, 0.2);
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
            var(--dark-red),
            var(--blood-orange),
            var(--fire-yellow));
        border-radius: 22px;
        z-index: -1;
        filter: blur(15px);
        animation: borderGlow 3s linear infinite;
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
            var(--fire-yellow), 
            var(--blood-orange),
            var(--blood-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 25px rgba(255, 0, 60, 0.7);
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        animation: textGlow 2s ease-in-out infinite alternate;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 25px rgba(255, 0, 60, 0.7); }
        to { text-shadow: 0 0 40px rgba(255, 102, 0, 0.9), 
                         0 0 50px rgba(255, 204, 0, 0.4); }
    }
    
    .team-id {
        display: inline-block;
        background: rgba(255, 0, 60, 0.2);
        border: 1px solid var(--blood-red);
        border-radius: 10px;
        padding: 0.5rem 1rem;
        font-family: 'Orbitron', monospace;
        font-size: 1.2rem;
        margin-left: 1rem;
    }
    
    .show-card {
        background: linear-gradient(145deg, rgba(34, 34, 34, 0.95), rgba(17, 17, 17, 0.95));
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 2px solid rgba(255, 0, 60, 0.4);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        margin-bottom: 3rem;
    }
    
    .show-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--blood-red), 
            var(--blood-orange),
            var(--fire-yellow));
        background-size: 200% 100%;
        animation: slide 2.5s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .team-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }
    
    .info-card {
        background: rgba(0, 0, 0, 0.6);
        border-radius: 15px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 0, 60, 0.3);
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        border-color: var(--blood-red);
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(255, 0, 60, 0.2);
    }
    
    .info-label {
        display: block;
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 0.5rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(255, 204, 0, 0.3);
    }
    
    .info-value {
        font-size: 1.3rem;
        color: white;
        font-weight: 500;
        padding: 0.8rem 0;
        min-height: 2.5rem;
    }
    
    .game-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: rgba(0, 153, 255, 0.2);
        border: 1px solid var(--info-blue);
        border-radius: 20px;
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .date-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: rgba(255, 204, 0, 0.2);
        border: 1px solid var(--fire-yellow);
        border-radius: 20px;
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .coach-card {
        background: linear-gradient(135deg, rgba(255, 204, 0, 0.1), rgba(255, 102, 0, 0.1));
        border: 2px solid var(--fire-yellow);
        grid-column: 1 / -1;
    }
    
    .coach-avatar {
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, var(--blood-orange), var(--blood-red));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-right: 1rem;
        float: left;
    }
    
    .coach-info {
        overflow: hidden;
    }
    
    .coach-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.4rem;
        color: var(--fire-yellow);
        margin-bottom: 0.5rem;
    }
    
    /* Styles pour la section membres */
    .members-section {
        margin: 2rem 0;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 15px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 102, 0, 0.3);
    }
    
    .members-title {
        font-family: 'Orbitron', sans-serif;
        color: var(--fire-yellow);
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .members-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .member-card {
        background: rgba(34, 34, 34, 0.8);
        border: 1px solid rgba(255, 102, 0, 0.3);
        border-radius: 10px;
        padding: 1rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .member-card:hover {
        border-color: var(--blood-red);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 60, 0.2);
    }
    
    .member-avatar {
        width: 50px;
        height: 50px;
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
    }
    
    .member-info {
        flex: 1;
    }
    
    .member-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--fire-yellow);
        margin-bottom: 0.3rem;
    }
    
    .member-details {
        display: flex;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: var(--text-muted);
        flex-wrap: wrap;
    }
    
    .member-rank {
        color: var(--blood-orange);
    }
    
    .member-game {
        color: var(--info-blue);
    }
    
    .no-members {
        text-align: center;
        padding: 2rem;
        color: var(--text-muted);
        font-style: italic;
        border: 2px dashed rgba(255, 102, 0, 0.3);
        border-radius: 10px;
    }
    
    .statistics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin: 2rem 0;
    }
    
    .stat-card {
        background: rgba(0, 0, 0, 0.7);
        border-radius: 15px;
        padding: 1.5rem;
        text-align: center;
        border: 1px solid rgba(255, 0, 60, 0.3);
    }
    
    .stat-value {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 900;
        background: linear-gradient(to bottom, var(--fire-yellow), var(--blood-orange));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        color: var(--text-muted);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .actions-bar {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(255, 0, 60, 0.3);
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 2rem;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        min-width: 180px;
        justify-content: center;
    }
    
    .btn-back {
        background: linear-gradient(45deg, var(--medium-gray), var(--light-gray));
        border: 2px solid var(--blood-red);
        color: white;
    }
    
    .btn-edit {
        background: linear-gradient(45deg, var(--warning-orange), #ffcc00);
        color: black;
    }
    
    .btn-delete {
        background: linear-gradient(45deg, var(--blood-red), var(--light-red));
        color: white;
    }
    
    .btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
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
        opacity: 0.05;
        font-size: 2rem;
        animation: float 20s infinite linear;
        filter: drop-shadow(0 0 5px var(--blood-red));
    }
    
    @keyframes float {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 0.05;
        }
        90% {
            opacity: 0.05;
        }
        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 0;
        }
    }
    
    @media (max-width: 768px) {
        .show-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .show-card {
            padding: 1.5rem;
        }
        
        .team-info-grid {
            grid-template-columns: 1fr;
        }
        
        .members-grid {
            grid-template-columns: 1fr;
        }
        
        .actions-bar {
            flex-direction: column;
        }
        
        .btn {
            min-width: 100%;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 503
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

        // line 504
        yield "<div class=\"show-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 508
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 509
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 510
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 510, $this->source); })())));
            // line 511
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 512
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 513
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 514
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 515
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 515, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 516
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 516, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 517
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 517, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 519
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 519, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 519, $this->source); })()), [], "array", false, false, false, 519), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">
            ÉQUIPE: ";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 527, $this->source); })()), "name", [], "any", false, false, false, 527), "html", null, true);
        yield "
            <span class=\"team-id\">ID: #";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 528, $this->source); })()), "id", [], "any", false, false, false, 528), "html", null, true);
        yield "</span>
        </h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            FICHE DE L'ÉQUIPE - ADMINISTRATION
        </p>
    </div>
    
    <!-- Carte de détail -->
    <div class=\"show-card\">
        
        <!-- Informations principales -->
        <div class=\"team-info-grid\">
            <div class=\"info-card\">
                <span class=\"info-label\">🏆 NOM DE L'ÉQUIPE</span>
                <div class=\"info-value\" style=\"font-size: 1.8rem; color: var(--fire-yellow);\">
                    ";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 543, $this->source); })()), "name", [], "any", false, false, false, 543), "html", null, true);
        yield "
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">🎮 JEU PRINCIPAL</span>
                <div class=\"info-value\">
                    <span class=\"game-badge\">";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 550, $this->source); })()), "game", [], "any", false, false, false, 550), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">📅 DATE DE CRÉATION</span>
                <div class=\"info-value\">
                    <span class=\"date-badge\">";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 557, $this->source); })()), "creationDate", [], "any", false, false, false, 557), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">🆔 IDENTIFIANT</span>
                <div class=\"info-value\" style=\"font-family: 'Orbitron', monospace;\">
                    #";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 564, $this->source); })()), "id", [], "any", false, false, false, 564), "html", null, true);
        yield "
                </div>
            </div>
        </div>
        
        <!-- Coach -->
        ";
        // line 570
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 570, $this->source); })()), "coach", [], "any", false, false, false, 570)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 571
            yield "            <div class=\"info-card coach-card\">
                <span class=\"info-label\">👑 COACH DE L'ÉQUIPE</span>
                <div style=\"display: flex; align-items: center; margin-top: 1rem;\">
                    <div class=\"coach-avatar\">
                        👑
                    </div>
                    <div class=\"coach-info\">
                        <div class=\"coach-name\">";
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 578, $this->source); })()), "coach", [], "any", false, false, false, 578), "username", [], "any", false, false, false, 578), "html", null, true);
            yield "</div>
                        <div style=\"color: var(--text-muted);\">
                            <i class=\"fas fa-envelope\"></i> ";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 580, $this->source); })()), "coach", [], "any", false, false, false, 580), "email", [], "any", false, false, false, 580), "html", null, true);
            yield "
                        </div>
                        <div style=\"color: var(--text-muted); margin-top: 0.5rem;\">
                            <i class=\"fas fa-calendar\"></i> Coach depuis le ";
            // line 583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 583, $this->source); })()), "creationDate", [], "any", false, false, false, 583), "d/m/Y"), "html", null, true);
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 589
            yield "            <div class=\"info-card\" style=\"grid-column: 1 / -1; text-align: center;\">
                <span class=\"info-label\">👑 COACH</span>
                <div class=\"info-value\" style=\"color: var(--text-muted);\">
                    <em>Aucun coach assigné à cette équipe</em>
                </div>
            </div>
        ";
        }
        // line 596
        yield "        
        <!-- Section Membres de l'équipe -->
        <div class=\"members-section\">
            <h3 class=\"members-title\">
                <i class=\"fas fa-users\"></i> MEMBRES DE L'ÉQUIPE (";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 600, $this->source); })()), "members", [], "any", false, false, false, 600)), "html", null, true);
        yield ")
            </h3>
            
            ";
        // line 603
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 603, $this->source); })()), "members", [], "any", false, false, false, 603)) > 0)) {
            // line 604
            yield "                <div class=\"members-grid\">
                    ";
            // line 605
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 605, $this->source); })()), "members", [], "any", false, false, false, 605));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 606
                yield "                        <div class=\"member-card\">
                            <div class=\"member-avatar\">
                                ";
                // line 608
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 608))), "html", null, true);
                yield "
                            </div>
                            <div class=\"member-info\">
                                <div class=\"member-name\">";
                // line 611
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 611), "html", null, true);
                yield "</div>
                                <div class=\"member-details\">
                                    <span class=\"member-rank\"><i class=\"fas fa-star\"></i> ";
                // line 613
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "rank", [], "any", false, false, false, 613), "html", null, true);
                yield "</span>
                                    ";
                // line 614
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "game", [], "any", false, false, false, 614)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 615
                    yield "                                        <span class=\"member-game\"><i class=\"fas fa-gamepad\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "game", [], "any", false, false, false, 615), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 617
                yield "                                </div>
                                <div class=\"member-details\" style=\"margin-top: 0.3rem;\">
                                    <small><i class=\"fas fa-calendar-alt\"></i> ";
                // line 619
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "dateOfCreation", [], "any", false, false, false, 619), "d/m/Y"), "html", null, true);
                yield "</small>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 624
            yield "                </div>
            ";
        } else {
            // line 626
            yield "                <div class=\"no-members\">
                    <i class=\"fas fa-user-slash fa-2x mb-2\"></i>
                    <p>Aucun membre dans cette équipe pour le moment</p>
                </div>
            ";
        }
        // line 631
        yield "        </div>
        
        <!-- Statistiques -->
        <div class=\"statistics-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 636
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 636, $this->source); })()), "members", [], "any", false, false, false, 636)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">MEMBRES</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 640, $this->source); })()), "matchesAsTeam1", [], "any", false, false, false, 640)) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 640, $this->source); })()), "matchesAsTeam2", [], "any", false, false, false, 640))), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">MATCHS</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 644, $this->source); })()), "matchesWon", [], "any", false, false, false, 644)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">VICTOIRES</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 648
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 648, $this->source); })()), "members", [], "any", false, false, false, 648), function ($__m__) use ($context, $macros) { $context["m"] = $__m__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 648, $this->source); })()), "rank", [], "any", false, false, false, 648) == "Diamant") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 648, $this->source); })()), "rank", [], "any", false, false, false, 648) == "Champion")); })), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">TOP JOUEURS</div>
            </div>
        </div>
        
        <!-- Barre d'actions -->
        <div class=\"actions-bar\">
            <a href=\"";
        // line 655
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        yield "\" class=\"btn btn-back\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR
            </a>
            <a href=\"";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 658, $this->source); })()), "id", [], "any", false, false, false, 658)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">
                <i class=\"fas fa-edit\"></i> MODIFIER
            </a>
            <form method=\"post\" action=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 661, $this->source); })()), "id", [], "any", false, false, false, 661)]), "html", null, true);
        yield "\" 
                  onsubmit=\"return confirm('⚠️ Êtes-vous sûr de vouloir supprimer cette équipe ? Cette action conservera les agents mais les désassociera de l\\'équipe.');\"
                  style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 664, $this->source); })()), "id", [], "any", false, false, false, 664))), "html", null, true);
        yield "\">
                <button type=\"submit\" class=\"btn btn-delete\">
                    <i class=\"fas fa-trash\"></i> SUPPRIMER
                </button>
            </form>
        </div>
        
    </div>
    
</div>

<script>
    // Animation au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.show-container').style.opacity = '1';
        }, 100);
        
        // Animation des cartes
        const cards = document.querySelectorAll('.info-card, .member-card, .stat-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 * index);
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
        return "back/team/show.html.twig";
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
        return array (  910 => 664,  904 => 661,  898 => 658,  892 => 655,  882 => 648,  875 => 644,  868 => 640,  861 => 636,  854 => 631,  847 => 626,  843 => 624,  832 => 619,  828 => 617,  822 => 615,  820 => 614,  816 => 613,  811 => 611,  805 => 608,  801 => 606,  797 => 605,  794 => 604,  792 => 603,  786 => 600,  780 => 596,  771 => 589,  762 => 583,  756 => 580,  751 => 578,  742 => 571,  740 => 570,  731 => 564,  721 => 557,  711 => 550,  701 => 543,  683 => 528,  679 => 527,  672 => 522,  663 => 519,  658 => 517,  654 => 516,  650 => 515,  647 => 514,  644 => 513,  641 => 512,  638 => 511,  635 => 510,  630 => 509,  628 => 508,  622 => 504,  609 => 503,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}⚔️ BLOOD ARENA - Équipe {{ team.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --blood-red: #ff003c;
        --dark-red: #cc0030;
        --light-red: #ff335c;
        --blood-orange: #ff6600;
        --fire-yellow: #ffcc00;
        --dark-bg: #000000;
        --dark-gray: #111111;
        --medium-gray: #222222;
        --light-gray: #333333;
        --text-color: #ffffff;
        --text-muted: #aaaaaa;
        --success-green: #00ff88;
        --warning-orange: #ff9900;
        --info-blue: #0099ff;
    }
    
    body {
        background: linear-gradient(135deg, #000000 0%, #111111 50%, #220000 100%);
        font-family: 'Rajdhani', sans-serif;
        overflow-x: hidden;
        position: relative;
        color: var(--text-color);
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
            radial-gradient(circle at 20% 30%, rgba(255, 0, 60, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(204, 0, 48, 0.15) 0%, transparent 50%),
            radial-gradient(circle at 40% 90%, rgba(255, 102, 0, 0.15) 0%, transparent 50%);
        z-index: -1;
    }
    
    .show-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
        max-width: 1000px;
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
        background: rgba(17, 17, 17, 0.9);
        border-radius: 20px;
        border: 2px solid var(--blood-red);
        box-shadow: 
            0 0 40px rgba(255, 0, 60, 0.4),
            inset 0 0 20px rgba(255, 0, 60, 0.2);
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
            var(--dark-red),
            var(--blood-orange),
            var(--fire-yellow));
        border-radius: 22px;
        z-index: -1;
        filter: blur(15px);
        animation: borderGlow 3s linear infinite;
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
            var(--fire-yellow), 
            var(--blood-orange),
            var(--blood-red));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        text-shadow: 0 0 25px rgba(255, 0, 60, 0.7);
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        animation: textGlow 2s ease-in-out infinite alternate;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 25px rgba(255, 0, 60, 0.7); }
        to { text-shadow: 0 0 40px rgba(255, 102, 0, 0.9), 
                         0 0 50px rgba(255, 204, 0, 0.4); }
    }
    
    .team-id {
        display: inline-block;
        background: rgba(255, 0, 60, 0.2);
        border: 1px solid var(--blood-red);
        border-radius: 10px;
        padding: 0.5rem 1rem;
        font-family: 'Orbitron', monospace;
        font-size: 1.2rem;
        margin-left: 1rem;
    }
    
    .show-card {
        background: linear-gradient(145deg, rgba(34, 34, 34, 0.95), rgba(17, 17, 17, 0.95));
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 2px solid rgba(255, 0, 60, 0.4);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        margin-bottom: 3rem;
    }
    
    .show-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--blood-red), 
            var(--blood-orange),
            var(--fire-yellow));
        background-size: 200% 100%;
        animation: slide 2.5s linear infinite;
    }
    
    @keyframes slide {
        0% { background-position: 0% 0; }
        100% { background-position: 200% 0; }
    }
    
    .team-info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }
    
    .info-card {
        background: rgba(0, 0, 0, 0.6);
        border-radius: 15px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 0, 60, 0.3);
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        border-color: var(--blood-red);
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(255, 0, 60, 0.2);
    }
    
    .info-label {
        display: block;
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 0.5rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(255, 204, 0, 0.3);
    }
    
    .info-value {
        font-size: 1.3rem;
        color: white;
        font-weight: 500;
        padding: 0.8rem 0;
        min-height: 2.5rem;
    }
    
    .game-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: rgba(0, 153, 255, 0.2);
        border: 1px solid var(--info-blue);
        border-radius: 20px;
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .date-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: rgba(255, 204, 0, 0.2);
        border: 1px solid var(--fire-yellow);
        border-radius: 20px;
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .coach-card {
        background: linear-gradient(135deg, rgba(255, 204, 0, 0.1), rgba(255, 102, 0, 0.1));
        border: 2px solid var(--fire-yellow);
        grid-column: 1 / -1;
    }
    
    .coach-avatar {
        width: 80px;
        height: 80px;
        background: linear-gradient(45deg, var(--blood-orange), var(--blood-red));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-right: 1rem;
        float: left;
    }
    
    .coach-info {
        overflow: hidden;
    }
    
    .coach-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.4rem;
        color: var(--fire-yellow);
        margin-bottom: 0.5rem;
    }
    
    /* Styles pour la section membres */
    .members-section {
        margin: 2rem 0;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 15px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 102, 0, 0.3);
    }
    
    .members-title {
        font-family: 'Orbitron', sans-serif;
        color: var(--fire-yellow);
        font-size: 1.3rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .members-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .member-card {
        background: rgba(34, 34, 34, 0.8);
        border: 1px solid rgba(255, 102, 0, 0.3);
        border-radius: 10px;
        padding: 1rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .member-card:hover {
        border-color: var(--blood-red);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 0, 60, 0.2);
    }
    
    .member-avatar {
        width: 50px;
        height: 50px;
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
    }
    
    .member-info {
        flex: 1;
    }
    
    .member-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--fire-yellow);
        margin-bottom: 0.3rem;
    }
    
    .member-details {
        display: flex;
        gap: 0.5rem;
        font-size: 0.9rem;
        color: var(--text-muted);
        flex-wrap: wrap;
    }
    
    .member-rank {
        color: var(--blood-orange);
    }
    
    .member-game {
        color: var(--info-blue);
    }
    
    .no-members {
        text-align: center;
        padding: 2rem;
        color: var(--text-muted);
        font-style: italic;
        border: 2px dashed rgba(255, 102, 0, 0.3);
        border-radius: 10px;
    }
    
    .statistics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin: 2rem 0;
    }
    
    .stat-card {
        background: rgba(0, 0, 0, 0.7);
        border-radius: 15px;
        padding: 1.5rem;
        text-align: center;
        border: 1px solid rgba(255, 0, 60, 0.3);
    }
    
    .stat-value {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 900;
        background: linear-gradient(to bottom, var(--fire-yellow), var(--blood-orange));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .stat-label {
        color: var(--text-muted);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .actions-bar {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(255, 0, 60, 0.3);
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 2rem;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        min-width: 180px;
        justify-content: center;
    }
    
    .btn-back {
        background: linear-gradient(45deg, var(--medium-gray), var(--light-gray));
        border: 2px solid var(--blood-red);
        color: white;
    }
    
    .btn-edit {
        background: linear-gradient(45deg, var(--warning-orange), #ffcc00);
        color: black;
    }
    
    .btn-delete {
        background: linear-gradient(45deg, var(--blood-red), var(--light-red));
        color: white;
    }
    
    .btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
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
        opacity: 0.05;
        font-size: 2rem;
        animation: float 20s infinite linear;
        filter: drop-shadow(0 0 5px var(--blood-red));
    }
    
    @keyframes float {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 0.05;
        }
        90% {
            opacity: 0.05;
        }
        100% {
            transform: translateY(-100px) rotate(360deg);
            opacity: 0;
        }
    }
    
    @media (max-width: 768px) {
        .show-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .show-card {
            padding: 1.5rem;
        }
        
        .team-info-grid {
            grid-template-columns: 1fr;
        }
        
        .members-grid {
            grid-template-columns: 1fr;
        }
        
        .actions-bar {
            flex-direction: column;
        }
        
        .btn {
            min-width: 100%;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"show-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        {% set icons = ['🎮', '⚡', '🔥', '👑', '🕹️', '🎯', '🏆', '💥', '🚀', '⭐'] %}
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
        <h1 class=\"main-title\">
            ÉQUIPE: {{ team.name }}
            <span class=\"team-id\">ID: #{{ team.id }}</span>
        </h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            FICHE DE L'ÉQUIPE - ADMINISTRATION
        </p>
    </div>
    
    <!-- Carte de détail -->
    <div class=\"show-card\">
        
        <!-- Informations principales -->
        <div class=\"team-info-grid\">
            <div class=\"info-card\">
                <span class=\"info-label\">🏆 NOM DE L'ÉQUIPE</span>
                <div class=\"info-value\" style=\"font-size: 1.8rem; color: var(--fire-yellow);\">
                    {{ team.name }}
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">🎮 JEU PRINCIPAL</span>
                <div class=\"info-value\">
                    <span class=\"game-badge\">{{ team.game }}</span>
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">📅 DATE DE CRÉATION</span>
                <div class=\"info-value\">
                    <span class=\"date-badge\">{{ team.creationDate|date('d/m/Y H:i') }}</span>
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">🆔 IDENTIFIANT</span>
                <div class=\"info-value\" style=\"font-family: 'Orbitron', monospace;\">
                    #{{ team.id }}
                </div>
            </div>
        </div>
        
        <!-- Coach -->
        {% if team.coach %}
            <div class=\"info-card coach-card\">
                <span class=\"info-label\">👑 COACH DE L'ÉQUIPE</span>
                <div style=\"display: flex; align-items: center; margin-top: 1rem;\">
                    <div class=\"coach-avatar\">
                        👑
                    </div>
                    <div class=\"coach-info\">
                        <div class=\"coach-name\">{{ team.coach.username }}</div>
                        <div style=\"color: var(--text-muted);\">
                            <i class=\"fas fa-envelope\"></i> {{ team.coach.email }}
                        </div>
                        <div style=\"color: var(--text-muted); margin-top: 0.5rem;\">
                            <i class=\"fas fa-calendar\"></i> Coach depuis le {{ team.creationDate|date('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"info-card\" style=\"grid-column: 1 / -1; text-align: center;\">
                <span class=\"info-label\">👑 COACH</span>
                <div class=\"info-value\" style=\"color: var(--text-muted);\">
                    <em>Aucun coach assigné à cette équipe</em>
                </div>
            </div>
        {% endif %}
        
        <!-- Section Membres de l'équipe -->
        <div class=\"members-section\">
            <h3 class=\"members-title\">
                <i class=\"fas fa-users\"></i> MEMBRES DE L'ÉQUIPE ({{ team.members|length }})
            </h3>
            
            {% if team.members|length > 0 %}
                <div class=\"members-grid\">
                    {% for member in team.members %}
                        <div class=\"member-card\">
                            <div class=\"member-avatar\">
                                {{ member.pseudo|first|upper }}
                            </div>
                            <div class=\"member-info\">
                                <div class=\"member-name\">{{ member.pseudo }}</div>
                                <div class=\"member-details\">
                                    <span class=\"member-rank\"><i class=\"fas fa-star\"></i> {{ member.rank }}</span>
                                    {% if member.game %}
                                        <span class=\"member-game\"><i class=\"fas fa-gamepad\"></i> {{ member.game }}</span>
                                    {% endif %}
                                </div>
                                <div class=\"member-details\" style=\"margin-top: 0.3rem;\">
                                    <small><i class=\"fas fa-calendar-alt\"></i> {{ member.dateOfCreation|date('d/m/Y') }}</small>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"no-members\">
                    <i class=\"fas fa-user-slash fa-2x mb-2\"></i>
                    <p>Aucun membre dans cette équipe pour le moment</p>
                </div>
            {% endif %}
        </div>
        
        <!-- Statistiques -->
        <div class=\"statistics-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ team.members|length }}</div>
                <div class=\"stat-label\">MEMBRES</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ team.matchesAsTeam1|length + team.matchesAsTeam2|length }}</div>
                <div class=\"stat-label\">MATCHS</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ team.matchesWon|length }}</div>
                <div class=\"stat-label\">VICTOIRES</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">{{ team.members|filter(m => m.rank == 'Diamant' or m.rank == 'Champion')|length }}</div>
                <div class=\"stat-label\">TOP JOUEURS</div>
            </div>
        </div>
        
        <!-- Barre d'actions -->
        <div class=\"actions-bar\">
            <a href=\"{{ path('app_back_team_index') }}\" class=\"btn btn-back\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR
            </a>
            <a href=\"{{ path('app_back_team_edit', {'id': team.id}) }}\" class=\"btn btn-edit\">
                <i class=\"fas fa-edit\"></i> MODIFIER
            </a>
            <form method=\"post\" action=\"{{ path('app_back_team_delete', {'id': team.id}) }}\" 
                  onsubmit=\"return confirm('⚠️ Êtes-vous sûr de vouloir supprimer cette équipe ? Cette action conservera les agents mais les désassociera de l\\'équipe.');\"
                  style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ team.id) }}\">
                <button type=\"submit\" class=\"btn btn-delete\">
                    <i class=\"fas fa-trash\"></i> SUPPRIMER
                </button>
            </form>
        </div>
        
    </div>
    
</div>

<script>
    // Animation au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.show-container').style.opacity = '1';
        }, 100);
        
        // Animation des cartes
        const cards = document.querySelectorAll('.info-card, .member-card, .stat-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100 * index);
        });
    });
</script>
{% endblock %}", "back/team/show.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\team\\show.html.twig");
    }
}
