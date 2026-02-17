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

/* team/show.html.twig */
class __TwigTemplate_e4b4656cde4a2583c366626b96251b38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

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

        yield "🎮 BLOOD ARENA - ";
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
        --neon-blue: #00ffff;
        --neon-purple: #9900ff;
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
        font-size: 3rem;
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
    
    .info-card {
        background: linear-gradient(145deg, rgba(34, 34, 34, 0.95), rgba(17, 17, 17, 0.95));
        border-radius: 20px;
        border: 2px solid rgba(255, 0, 60, 0.4);
        padding: 2.5rem;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
        margin-bottom: 3rem;
    }
    
    .info-card:hover {
        border-color: var(--blood-red);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9);
    }
    
    .card-header {
        border-bottom: 2px solid rgba(255, 0, 60, 0.3);
        padding-bottom: 1.5rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .card-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.8rem;
        font-weight: 900;
        color: var(--fire-yellow);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 15px rgba(255, 204, 0, 0.5);
    }
    
    .card-title::before {
        content: '⚔️';
        margin-right: 1rem;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }
    
    .info-item {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 102, 0, 0.2);
        border-radius: 12px;
        padding: 1.2rem;
        transition: all 0.3s ease;
    }
    
    .info-item:hover {
        border-color: var(--blood-orange);
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(255, 102, 0, 0.2);
    }
    
    .info-label {
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .info-value {
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.3rem;
        font-weight: 600;
        word-break: break-word;
    }
    
    .coach-value {
        color: var(--blood-orange);
        font-weight: 700;
    }
    
    .members-section {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 102, 0, 0.2);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .members-section h3 {
        font-family: 'Orbitron', sans-serif;
        color: var(--fire-yellow);
        font-size: 1.3rem;
        margin-bottom: 1rem;
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
        color: var(--neon-blue);
    }
    
    .no-members {
        text-align: center;
        padding: 2rem;
        color: var(--text-muted);
        font-style: italic;
        border: 2px dashed rgba(255, 102, 0, 0.3);
        border-radius: 10px;
    }
    
    .actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        padding-top: 2rem;
        border-top: 2px solid rgba(255, 0, 60, 0.3);
    }
    
    .btn {
        position: relative;
        padding: 1rem 2.5rem;
        border: none;
        border-radius: 10px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        overflow: hidden;
    }
    
    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.6s;
        z-index: 1;
    }
    
    .btn:hover::before {
        left: 100%;
    }
    
    .btn-edit {
        background: linear-gradient(45deg, var(--blood-orange), var(--fire-yellow));
        color: black;
        box-shadow: 0 0 20px rgba(255, 102, 0, 0.5);
    }
    
    .btn-edit:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(255, 204, 0, 0.8);
        background: linear-gradient(45deg, var(--fire-yellow), var(--blood-orange));
    }
    
    .btn-back {
        background: linear-gradient(45deg, var(--medium-gray), var(--light-gray));
        color: white;
        border: 2px solid var(--blood-red);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }
    
    .btn-back:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.5);
        background: linear-gradient(45deg, var(--light-gray), var(--medium-gray));
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
        body {
            padding: 1rem;
        }
        
        .show-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .card-title {
            font-size: 2rem;
        }
        
        .info-card {
            padding: 1.5rem;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .members-grid {
            grid-template-columns: 1fr;
        }
        
        .actions {
            flex-direction: column;
            gap: 1rem;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 464
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

        // line 465
        yield "<div class=\"show-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 469
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 470
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 471
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 471, $this->source); })())));
            // line 472
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 473
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 474
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 475
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 476, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 477, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 478, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 480, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 480, $this->source); })()), [], "array", false, false, false, 480), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">
            DÉTAILS DE L'ÉQUIPE
            <span class=\"team-id\">#";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 489, $this->source); })()), "id", [], "any", false, false, false, 489), "html", null, true);
        yield "</span>
        </h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            ";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 492, $this->source); })()), "name", [], "any", false, false, false, 492)), "html", null, true);
        yield "
        </p>
    </div>
    
    <!-- Carte d'information -->
    <div class=\"info-card\">
        <div class=\"card-header\">
            <h2 class=\"card-title\">";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 499, $this->source); })()), "name", [], "any", false, false, false, 499), "html", null, true);
        yield "</h2>
        </div>
        
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>🎮</span> JEU PRINCIPAL
                </div>
                <div class=\"info-value\">";
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 507, $this->source); })()), "game", [], "any", false, false, false, 507), "html", null, true);
        yield "</div>
            </div>
            
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>📅</span> DATE DE CRÉATION
                </div>
                <div class=\"info-value\">";
        // line 514
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 514, $this->source); })()), "creationDate", [], "any", false, false, false, 514)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 514, $this->source); })()), "creationDate", [], "any", false, false, false, 514), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "</div>
            </div>
            
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>👑</span> COACH
                </div>
                <div class=\"info-value coach-value\">
                    ";
        // line 522
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 522, $this->source); })()), "coach", [], "any", false, false, false, 522)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 523
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 523, $this->source); })()), "coach", [], "any", false, false, false, 523), "username", [], "any", false, false, false, 523), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 523, $this->source); })()), "coach", [], "any", false, false, false, 523), "email", [], "any", false, false, false, 523), "html", null, true);
            yield ")
                    ";
        } else {
            // line 525
            yield "                        <span style=\"color: var(--blood-red);\">Aucun coach assigné</span>
                    ";
        }
        // line 527
        yield "                </div>
            </div>
            
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>👥</span> NOMBRE DE MEMBRES
                </div>
                <div class=\"info-value\">";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 534, $this->source); })()), "members", [], "any", false, false, false, 534)), "html", null, true);
        yield "</div>
            </div>
        </div>
        
        <!-- Section des membres -->
        <div class=\"members-section\">
            <h3>
                <span>👥</span> MEMBRES DE L'ÉQUIPE (";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 541, $this->source); })()), "members", [], "any", false, false, false, 541)), "html", null, true);
        yield ")
            </h3>
            
            ";
        // line 544
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 544, $this->source); })()), "members", [], "any", false, false, false, 544)) > 0)) {
            // line 545
            yield "                <div class=\"members-grid\">
                    ";
            // line 546
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 546, $this->source); })()), "members", [], "any", false, false, false, 546));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 547
                yield "                        <div class=\"member-card\">
                            <div class=\"member-avatar\">
                                ";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 549))), "html", null, true);
                yield "
                            </div>
                            <div class=\"member-info\">
                                <div class=\"member-name\">";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 552), "html", null, true);
                yield "</div>
                                <div class=\"member-details\">
                                    <span class=\"member-rank\">Rang: ";
                // line 554
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "rank", [], "any", false, false, false, 554), "html", null, true);
                yield "</span>
                                    ";
                // line 555
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["member"], "game", [], "any", false, false, false, 555)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 556
                    yield "                                        <span class=\"member-game\">• ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "game", [], "any", false, false, false, 556), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 558
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['member'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 562
            yield "                </div>
            ";
        } else {
            // line 564
            yield "                <div class=\"no-members\">
                    Aucun membre dans cette équipe pour le moment
                </div>
            ";
        }
        // line 568
        yield "        </div>
        
        <!-- Actions -->
        <div class=\"actions\">
            <a href=\"";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 572, $this->source); })()), "id", [], "any", false, false, false, 572)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">
                ✏️ MODIFIER L'ÉQUIPE
            </a>
            <a href=\"";
        // line 575
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        yield "\" class=\"btn btn-back\">
                🔙 RETOUR À LA LISTE
            </a>
        </div>
    </div>
</div>

<script>
    // Animation d'entrée
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.show-container').style.opacity = '1';
        }, 100);
        
        // Animation des cartes au survol
        const memberCards = document.querySelectorAll('.member-card');
        memberCards.forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                this.style.transform = `translateY(-5px) scale(1.02) rotateX(\${(y - rect.height/2)/25}deg) rotateY(\${(x - rect.width/2)/25}deg)`;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
            });
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
        return "team/show.html.twig";
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
        return array (  795 => 575,  789 => 572,  783 => 568,  777 => 564,  773 => 562,  764 => 558,  758 => 556,  756 => 555,  752 => 554,  747 => 552,  741 => 549,  737 => 547,  733 => 546,  730 => 545,  728 => 544,  722 => 541,  712 => 534,  703 => 527,  699 => 525,  691 => 523,  689 => 522,  678 => 514,  668 => 507,  657 => 499,  647 => 492,  641 => 489,  633 => 483,  624 => 480,  619 => 478,  615 => 477,  611 => 476,  608 => 475,  605 => 474,  602 => 473,  599 => 472,  596 => 471,  591 => 470,  589 => 469,  583 => 465,  570 => 464,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎮 BLOOD ARENA - {{ team.name }}{% endblock %}

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
        --neon-blue: #00ffff;
        --neon-purple: #9900ff;
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
        font-size: 3rem;
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
    
    .info-card {
        background: linear-gradient(145deg, rgba(34, 34, 34, 0.95), rgba(17, 17, 17, 0.95));
        border-radius: 20px;
        border: 2px solid rgba(255, 0, 60, 0.4);
        padding: 2.5rem;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
        margin-bottom: 3rem;
    }
    
    .info-card:hover {
        border-color: var(--blood-red);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9);
    }
    
    .card-header {
        border-bottom: 2px solid rgba(255, 0, 60, 0.3);
        padding-bottom: 1.5rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .card-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.8rem;
        font-weight: 900;
        color: var(--fire-yellow);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 0 15px rgba(255, 204, 0, 0.5);
    }
    
    .card-title::before {
        content: '⚔️';
        margin-right: 1rem;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }
    
    .info-item {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 102, 0, 0.2);
        border-radius: 12px;
        padding: 1.2rem;
        transition: all 0.3s ease;
    }
    
    .info-item:hover {
        border-color: var(--blood-orange);
        transform: translateY(-3px);
        box-shadow: 0 5px 20px rgba(255, 102, 0, 0.2);
    }
    
    .info-label {
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .info-value {
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.3rem;
        font-weight: 600;
        word-break: break-word;
    }
    
    .coach-value {
        color: var(--blood-orange);
        font-weight: 700;
    }
    
    .members-section {
        background: rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 102, 0, 0.2);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .members-section h3 {
        font-family: 'Orbitron', sans-serif;
        color: var(--fire-yellow);
        font-size: 1.3rem;
        margin-bottom: 1rem;
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
        color: var(--neon-blue);
    }
    
    .no-members {
        text-align: center;
        padding: 2rem;
        color: var(--text-muted);
        font-style: italic;
        border: 2px dashed rgba(255, 102, 0, 0.3);
        border-radius: 10px;
    }
    
    .actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        padding-top: 2rem;
        border-top: 2px solid rgba(255, 0, 60, 0.3);
    }
    
    .btn {
        position: relative;
        padding: 1rem 2.5rem;
        border: none;
        border-radius: 10px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        overflow: hidden;
    }
    
    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.6s;
        z-index: 1;
    }
    
    .btn:hover::before {
        left: 100%;
    }
    
    .btn-edit {
        background: linear-gradient(45deg, var(--blood-orange), var(--fire-yellow));
        color: black;
        box-shadow: 0 0 20px rgba(255, 102, 0, 0.5);
    }
    
    .btn-edit:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(255, 204, 0, 0.8);
        background: linear-gradient(45deg, var(--fire-yellow), var(--blood-orange));
    }
    
    .btn-back {
        background: linear-gradient(45deg, var(--medium-gray), var(--light-gray));
        color: white;
        border: 2px solid var(--blood-red);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }
    
    .btn-back:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.5);
        background: linear-gradient(45deg, var(--light-gray), var(--medium-gray));
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
        body {
            padding: 1rem;
        }
        
        .show-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .card-title {
            font-size: 2rem;
        }
        
        .info-card {
            padding: 1.5rem;
        }
        
        .info-grid {
            grid-template-columns: 1fr;
        }
        
        .members-grid {
            grid-template-columns: 1fr;
        }
        
        .actions {
            flex-direction: column;
            gap: 1rem;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
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
            DÉTAILS DE L'ÉQUIPE
            <span class=\"team-id\">#{{ team.id }}</span>
        </h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            {{ team.name|upper }}
        </p>
    </div>
    
    <!-- Carte d'information -->
    <div class=\"info-card\">
        <div class=\"card-header\">
            <h2 class=\"card-title\">{{ team.name }}</h2>
        </div>
        
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>🎮</span> JEU PRINCIPAL
                </div>
                <div class=\"info-value\">{{ team.game }}</div>
            </div>
            
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>📅</span> DATE DE CRÉATION
                </div>
                <div class=\"info-value\">{{ team.creationDate ? team.creationDate|date('d/m/Y H:i') : 'Non définie' }}</div>
            </div>
            
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>👑</span> COACH
                </div>
                <div class=\"info-value coach-value\">
                    {% if team.coach %}
                        {{ team.coach.username }} ({{ team.coach.email }})
                    {% else %}
                        <span style=\"color: var(--blood-red);\">Aucun coach assigné</span>
                    {% endif %}
                </div>
            </div>
            
            <div class=\"info-item\">
                <div class=\"info-label\">
                    <span>👥</span> NOMBRE DE MEMBRES
                </div>
                <div class=\"info-value\">{{ team.members|length }}</div>
            </div>
        </div>
        
        <!-- Section des membres -->
        <div class=\"members-section\">
            <h3>
                <span>👥</span> MEMBRES DE L'ÉQUIPE ({{ team.members|length }})
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
                                    <span class=\"member-rank\">Rang: {{ member.rank }}</span>
                                    {% if member.game %}
                                        <span class=\"member-game\">• {{ member.game }}</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"no-members\">
                    Aucun membre dans cette équipe pour le moment
                </div>
            {% endif %}
        </div>
        
        <!-- Actions -->
        <div class=\"actions\">
            <a href=\"{{ path('app_team_edit', {'id': team.id}) }}\" class=\"btn btn-edit\">
                ✏️ MODIFIER L'ÉQUIPE
            </a>
            <a href=\"{{ path('app_team_index') }}\" class=\"btn btn-back\">
                🔙 RETOUR À LA LISTE
            </a>
        </div>
    </div>
</div>

<script>
    // Animation d'entrée
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.show-container').style.opacity = '1';
        }, 100);
        
        // Animation des cartes au survol
        const memberCards = document.querySelectorAll('.member-card');
        memberCards.forEach(card => {
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                this.style.transform = `translateY(-5px) scale(1.02) rotateX(\${(y - rect.height/2)/25}deg) rotateY(\${(x - rect.width/2)/25}deg)`;
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
            });
        });
    });
</script>
{% endblock %}", "team/show.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\team\\show.html.twig");
    }
}
