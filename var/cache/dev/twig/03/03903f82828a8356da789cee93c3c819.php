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

/* map/simple_map.html.twig */
class __TwigTemplate_975db7fc98e000a95fc3a6873afb0294 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/simple_map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/simple_map.html.twig"));

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

        yield "🗺️ PHANTOM FORCE - CARTE DES ARÈNES";
        
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
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
        
        :root {
            --blood-red: #ff0000;
            --fire-red: #ff3300;
            --dark-red: #cc0000;
            --neon-red: #ff003c;
            --red-glow: rgba(255, 0, 0, 0.7);
            --map-green: #00ff88;
            --map-blue: #0066ff;
            --map-purple: #aa00ff;
        }
        
        body {
            background: linear-gradient(135deg, #000000 0%, #1a0000 50%, #330000 100%);
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
            position: relative;
            color: white;
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
                radial-gradient(circle at 20% 30%, rgba(255, 0, 0, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(204, 0, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 90%, rgba(255, 51, 51, 0.1) 0%, transparent 50%);
            z-index: -1;
        }
        
        .arena-container {
            position: relative;
            padding: 2rem;
            animation: fadeIn 1s ease-out;
            max-width: 1400px;
            margin: 0 auto;
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
            font-size: 3rem;
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
            margin-bottom: 0.5rem;
        }
        
        @keyframes textGlow {
            from { text-shadow: 0 0 20px rgba(255, 0, 0, 0.7); }
            to { text-shadow: 0 0 30px rgba(255, 51, 0, 0.9), 
                             0 0 40px rgba(255, 0, 0, 0.5); }
        }
        
        .map-description {
            color: #ff9999;
            font-size: 1.2rem;
            margin-top: 1rem;
            text-align: center;
            opacity: 0.9;
        }
        
        .map-wrapper {
            position: relative;
            margin: 2rem 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 
                0 0 40px rgba(255, 0, 0, 0.4),
                0 20px 50px rgba(0, 0, 0, 0.7);
            border: 2px solid var(--blood-red);
        }
        
        #map {
            height: 600px;
            width: 100%;
            background: #000;
        }
        
        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1000;
            background: linear-gradient(0deg, rgba(0,0,0,0.3) 0%, transparent 30%);
        }
        
        .controls-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }
        
        .control-btn {
            position: relative;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border: none;
            padding: 0.8rem 1.5rem;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: white;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
            z-index: 1;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .control-btn::before {
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
        
        .control-btn:hover::before {
            left: 100%;
        }
        
        .control-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
        }
        
        .arenas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .arena-card {
            background: rgba(26, 0, 0, 0.9);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 0, 0, 0.3);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }
        
        .arena-card:hover {
            transform: translateY(-5px);
            border-color: var(--blood-red);
            box-shadow: 0 10px 25px rgba(255, 0, 0, 0.3);
        }
        
        .arena-card::before {
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
        
        .arena-name {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.4rem;
            color: var(--fire-red);
            margin-bottom: 0.5rem;
            text-shadow: 0 0 10px rgba(255, 51, 0, 0.5);
        }
        
        .arena-location {
            color: #cc9999;
            font-size: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .arena-details {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #cc9999;
            font-size: 0.9rem;
        }
        
        .detail-item strong {
            color: var(--fire-red);
            min-width: 100px;
            flex-shrink: 0;
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
        
        .back-btn {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border: none;
            padding: 0.8rem 1.5rem;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
            z-index: 100;
        }
        
        .back-btn:hover {
            transform: translateX(-5px);
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
        }
        
        .map-stats {
            display: flex;
            justify-content: space-around;
            margin: 2rem 0;
            background: rgba(26, 0, 0, 0.8);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 0, 0, 0.3);
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-family: 'Orbitron', sans-serif;
            font-size: 2rem;
            color: var(--fire-red);
            text-shadow: 0 0 10px rgba(255, 51, 0, 0.7);
        }
        
        .stat-label {
            color: #cc9999;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Personnalisation des marqueurs Leaflet */
        .arena-marker {
            filter: drop-shadow(0 0 5px rgba(255, 0, 0, 0.7));
            transition: all 0.3s ease;
        }
        
        .arena-marker:hover {
            filter: drop-shadow(0 0 10px rgba(255, 51, 0, 0.9));
            transform: scale(1.1);
        }
        
        .marker-pulse {
            animation: markerPulse 2s infinite;
        }
        
        @keyframes markerPulse {
            0% { filter: drop-shadow(0 0 5px rgba(255, 0, 0, 0.7)); }
            50% { filter: drop-shadow(0 0 15px rgba(255, 51, 0, 0.9)); }
            100% { filter: drop-shadow(0 0 5px rgba(255, 0, 0, 0.7)); }
        }
        
        /* Popup personnalisé */
        .arena-popup .leaflet-popup-content-wrapper {
            background: rgba(26, 0, 0, 0.95);
            border: 2px solid var(--blood-red);
            border-radius: 10px;
            color: white;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
        
        .arena-popup .leaflet-popup-content {
            font-family: 'Rajdhani', sans-serif;
            margin: 15px;
            font-size: 1rem;
        }
        
        .arena-popup .leaflet-popup-tip {
            background: var(--blood-red);
        }
        
        @media (max-width: 768px) {
            .arena-container {
                padding: 1rem;
            }
            
            .main-title {
                font-size: 2rem;
            }
            
            .map-wrapper {
                margin: 1rem 0;
            }
            
            #map {
                height: 400px;
            }
            
            .controls-container {
                flex-direction: column;
                align-items: center;
            }
            
            .arenas-grid {
                grid-template-columns: 1fr;
            }
            
            .back-btn {
                position: relative;
                top: auto;
                left: auto;
                margin-bottom: 1rem;
                justify-content: center;
            }
            
            .map-stats {
                flex-direction: column;
                gap: 1.5rem;
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
        yield "<div class=\"arena-container\">
    
    <!-- Bouton retour -->
    <a href=\"";
        // line 468
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"back-btn\">
        ← RETOUR AUX MATCHS
    </a>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 474
        $context["icons"] = ["🗺️", "📍", "🎯", "🏆", "⚔️", "🔥", "💀", "👑", "🛡️"];
        // line 475
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 476
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 476, $this->source); })())));
            // line 477
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 8) % 90));
            // line 478
            yield "            ";
            $context["delay"] = (($context["i"] * 1.2) % 18);
            // line 479
            yield "            ";
            $context["duration"] = (18 + (($context["i"] * 1.5) % 10));
            // line 480
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 481, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 482, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 483, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 485, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 485, $this->source); })()), [], "array", false, false, false, 485), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        yield "    </div>
    
    <!-- En-tête -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">🗺️ CARTE DES ARÈNES</h1>
        <p class=\"map-description\">
            Visualisez géographiquement les arènes et lieux de compétition • 
            Localisez les prochains matchs • Planifiez vos déplacements
        </p>
    </div>
    
    <!-- Statistiques -->
    <div class=\"map-stats\">
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"arenaCount\">0</div>
            <div class=\"stat-label\">Arènes actives</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"matchCount\">0</div>
            <div class=\"stat-label\">Matchs programmés</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"cityCount\">0</div>
            <div class=\"stat-label\">Villes couvertes</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"liveCount\">0</div>
            <div class=\"stat-label\">Matchs en direct</div>
        </div>
    </div>
    
    <!-- Contrôles de la carte -->
    <div class=\"controls-container\">
        <button class=\"control-btn\" id=\"zoomInBtn\">
            🔍 ZOOM +
        </button>
        <button class=\"control-btn\" id=\"zoomOutBtn\">
            🔍 ZOOM -
        </button>
        <button class=\"control-btn\" id=\"locateBtn\">
            📍 MA POSITION
        </button>
        <button class=\"control-btn\" id=\"resetViewBtn\">
            🗺️ VUE GLOBALE
        </button>
    </div>
    
    <!-- Carte -->
    <div class=\"map-wrapper\">
        <div id=\"map\"></div>
        <div class=\"map-overlay\"></div>
    </div>
    
    <!-- Légende -->
    <div class=\"controls-container\" style=\"margin-top: 1rem;\">
        <div style=\"display: flex; align-items: center; gap: 1rem; color: #cc9999; font-size: 0.9rem;\">
            <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                <div style=\"width: 20px; height: 20px; background: var(--blood-red); border-radius: 50%; box-shadow: 0 0 10px var(--red-glow);\"></div>
                <span>Match en cours</span>
            </div>
            <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                <div style=\"width: 20px; height: 20px; background: var(--map-green); border-radius: 50%; box-shadow: 0 0 10px rgba(0, 255, 136, 0.7);\"></div>
                <span>Arène disponible</span>
            </div>
            <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                <div style=\"width: 20px; height: 20px; background: var(--map-blue); border-radius: 50%; box-shadow: 0 0 10px rgba(0, 102, 255, 0.7);\"></div>
                <span>Match à venir</span>
            </div>
        </div>
    </div>
    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 562
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 563
        yield "    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
            integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
            crossorigin=\"\"></script>
    <script>
        // Configuration des icônes personnalisées
        const arenaIcon = L.divIcon({
            html: '⚔️',
            className: 'arena-marker',
            iconSize: [40, 40],
            iconAnchor: [20, 40]
        });
        
        const liveIcon = L.divIcon({
            html: '🔥',
            className: 'arena-marker marker-pulse',
            iconSize: [45, 45],
            iconAnchor: [22.5, 45]
        });
        
        const upcomingIcon = L.divIcon({
            html: '🎯',
            className: 'arena-marker',
            iconSize: [40, 40],
            iconAnchor: [20, 40]
        });
        
        // Données des arènes (simulation - à remplacer par vos données réelles)
        const arenasData = [
            {
                id: 1,
                name: \"ARÈNE DE LYON\",
                lat: 45.7534031,
                lng: 4.8295061,
                status: \"active\",
                capacity: 5000,
                nextMatch: \"2024-03-20 20:00\",
                description: \"Arène principale de compétition\"
            },
            {
                id: 2,
                name: \"STADE E-SPORT PARIS\",
                lat: 48.856614,
                lng: 2.3522219,
                status: \"live\",
                capacity: 8000,
                nextMatch: \"EN COURS\",
                description: \"Match en direct - Ligue des Champions\"
            },
            {
                id: 3,
                name: \"ARENA MARSEILLE\",
                lat: 43.296482,
                lng: 5.36978,
                status: \"upcoming\",
                capacity: 3000,
                nextMatch: \"2024-03-22 18:30\",
                description: \"Qualificatifs régionaux\"
            },
            {
                id: 4,
                name: \"GAMING CENTER LILLE\",
                lat: 50.62925,
                lng: 3.057256,
                status: \"active\",
                capacity: 2000,
                nextMatch: \"2024-03-21 19:00\",
                description: \"Tournoi amateur\"
            },
            {
                id: 5,
                name: \"STADE DE BORDEAUX\",
                lat: 44.837789,
                lng: -0.57918,
                status: \"active\",
                capacity: 4000,
                nextMatch: \"2024-03-25 20:00\",
                description: \"Finale régionale\"
            }
        ];
        
        // Initialiser la carte
        const map = L.map('map').setView([46.603354, 1.888334], 6);
        
        // Ajouter la couche de tuiles avec style sombre
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            attribution: '© <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, © <a href=\"https://carto.com/attributions\">CARTO</a>'
        }).addTo(map);
        
        // Ajouter une couche de contours rouges
        L.tileLayer('https://tiles.stadiamaps.com/tiles/stamen_toner_lines/{z}/{x}/{y}.png', {
            maxZoom: 19,
            opacity: 0.3
        }).addTo(map);
        
        // Créer un groupe pour les marqueurs
        const markersGroup = L.layerGroup().addTo(map);
        
        // Fonction pour créer un popup d'arène
        function createArenaPopup(arena) {
            const statusIcon = arena.status === 'live' ? '🔥' : 
                             arena.status === 'upcoming' ? '🎯' : '⚔️';
            const statusClass = arena.status === 'live' ? 'live' : 
                              arena.status === 'upcoming' ? 'upcoming' : 'active';
            
            return `
                <div class=\"arena-popup-content\" style=\"font-family: 'Rajdhani', sans-serif;\">
                    <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 10px;\">
                        <span style=\"font-size: 1.5rem;\">\${statusIcon}</span>
                        <div>
                            <h3 style=\"margin: 0; color: var(--blood-red); font-family: 'Orbitron', sans-serif;\">
                                \${arena.name}
                            </h3>
                            <div style=\"font-size: 0.9rem; color: #cc9999;\">
                                \${arena.description}
                            </div>
                        </div>
                    </div>
                    
                    <div style=\"display: grid; gap: 8px; font-size: 0.9rem;\">
                        <div style=\"display: flex; justify-content: space-between;\">
                            <span style=\"color: #cc9999;\">Capacité :</span>
                            <span style=\"color: var(--fire-red); font-weight: bold;\">\${arena.capacity.toLocaleString()} places</span>
                        </div>
                        
                        <div style=\"display: flex; justify-content: space-between;\">
                            <span style=\"color: #cc9999;\">Prochain match :</span>
                            <span style=\"color: var(--map-green); font-weight: bold;\">\${arena.nextMatch}</span>
                        </div>
                        
                        <div style=\"display: flex; justify-content: space-between;\">
                            <span style=\"color: #cc9999;\">Statut :</span>
                            <span style=\"color: \${arena.status === 'live' ? 'var(--fire-red)' : 
                                               arena.status === 'upcoming' ? 'var(--map-blue)' : 
                                               'var(--map-green)'}; 
                                 font-weight: bold; text-transform: uppercase;\">
                                \${arena.status}
                            </span>
                        </div>
                    </div>
                    
                    <div style=\"margin-top: 15px; padding-top: 10px; border-top: 1px solid rgba(255, 0, 0, 0.3);\">
                        <a href=\"/matchy\" 
                           style=\"display: block; text-align: center; 
                                  background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
                                  color: white; padding: 8px; border-radius: 5px; 
                                  text-decoration: none; font-family: 'Orbitron', sans-serif;
                                  font-size: 0.9rem; transition: all 0.3s;\">
                            📅 Voir les matchs
                        </a>
                    </div>
                </div>
            `;
        }
        
        // Ajouter les marqueurs
        let activeArenas = 0;
        let liveMatches = 0;
        let cities = new Set();
        
        arenasData.forEach(arena => {
            let icon;
            if (arena.status === 'live') {
                icon = liveIcon;
                liveMatches++;
            } else if (arena.status === 'upcoming') {
                icon = upcomingIcon;
            } else {
                icon = arenaIcon;
                activeArenas++;
            }
            
            // Extraire la ville du nom
            const city = arena.name.split(' ').pop();
            cities.add(city);
            
            const marker = L.marker([arena.lat, arena.lng], { icon: icon })
                .addTo(markersGroup)
                .bindPopup(createArenaPopup(arena));
            
            // Effet au survol
            marker.on('mouseover', function() {
                this.openPopup();
            });
            
            // Effet sonore au clic (simulation)
            marker.on('click', function() {
                const clickSound = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-unlock-game-notification-253.mp3');
                clickSound.volume = 0.3;
                clickSound.play().catch(e => console.log(\"Audio error:\", e));
            });
        });
        
        // Mettre à jour les statistiques
        document.getElementById('arenaCount').textContent = activeArenas;
        document.getElementById('matchCount').textContent = arenasData.length;
        document.getElementById('cityCount').textContent = cities.size;
        document.getElementById('liveCount').textContent = liveMatches;
        
        // Contrôles de la carte
        document.getElementById('zoomInBtn').addEventListener('click', () => {
            map.zoomIn();
            animateButton('zoomInBtn');
        });
        
        document.getElementById('zoomOutBtn').addEventListener('click', () => {
            map.zoomOut();
            animateButton('zoomOutBtn');
        });
        
        document.getElementById('locateBtn').addEventListener('click', () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    const { latitude, longitude } = position.coords;
                    map.setView([latitude, longitude], 13);
                    
                    // Ajouter un marqueur de position
                    L.marker([latitude, longitude], {
                        icon: L.divIcon({
                            html: '📍',
                            className: 'arena-marker marker-pulse',
                            iconSize: [30, 30],
                            iconAnchor: [15, 30]
                        })
                    })
                    .addTo(map)
                    .bindPopup(\"<b>Votre position</b><br>Vous êtes ici !\")
                    .openPopup();
                    
                    animateButton('locateBtn');
                });
            }
        });
        
        document.getElementById('resetViewBtn').addEventListener('click', () => {
            map.setView([46.603354, 1.888334], 6);
            animateButton('resetViewBtn');
        });
        
        // Fonction d'animation des boutons
        function animateButton(buttonId) {
            const button = document.getElementById(buttonId);
            button.style.transform = 'scale(0.95)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 150);
        }
        
        // Ajouter une couche de chaleur (optionnel)
        const heatData = arenasData.map(arena => [arena.lat, arena.lng, 1]);
        L.heatLayer(heatData, {
            radius: 25,
            blur: 15,
            maxZoom: 17,
            gradient: {
                0.4: 'blue',
                0.6: 'lime',
                0.7: 'red',
                1.0: '#ff0000'
            }
        }).addTo(map);
        
        // Animation de la carte au chargement
        setTimeout(() => {
            map.setView([46.603354, 1.888334], 6);
            map.eachLayer(layer => {
                if (layer instanceof L.Marker) {
                    layer.setOpacity(0);
                    layer.openPopup();
                    
                    setTimeout(() => {
                        layer.setOpacity(1);
                    }, 500);
                }
            });
        }, 1000);
        
        // Effet de particules sur la carte
        function createMapParticle(x, y) {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.left = x + 'px';
            particle.style.top = y + 'px';
            particle.style.width = '4px';
            particle.style.height = '4px';
            particle.style.background = 'radial-gradient(circle, var(--blood-red) 0%, transparent 70%)';
            particle.style.borderRadius = '50%';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '1000';
            particle.style.boxShadow = '0 0 8px var(--blood-red)';
            particle.style.animation = 'particleFade 1s forwards';
            
            document.querySelector('.map-wrapper').appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 1000);
        }
        
        // Ajouter un style pour l'animation des particules
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            @keyframes particleFade {
                0% { transform: scale(1); opacity: 1; }
                100% { transform: scale(3); opacity: 0; }
            }
        `;
        document.head.appendChild(particleStyle);
        
        // Effet au clic sur la carte
        map.on('click', function(e) {
            createMapParticle(e.containerPoint.x, e.containerPoint.y);
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
        return "map/simple_map.html.twig";
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
        return array (  738 => 563,  725 => 562,  642 => 488,  633 => 485,  628 => 483,  624 => 482,  620 => 481,  617 => 480,  614 => 479,  611 => 478,  608 => 477,  605 => 476,  600 => 475,  598 => 474,  589 => 468,  584 => 465,  571 => 464,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🗺️ PHANTOM FORCE - CARTE DES ARÈNES{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
        
        :root {
            --blood-red: #ff0000;
            --fire-red: #ff3300;
            --dark-red: #cc0000;
            --neon-red: #ff003c;
            --red-glow: rgba(255, 0, 0, 0.7);
            --map-green: #00ff88;
            --map-blue: #0066ff;
            --map-purple: #aa00ff;
        }
        
        body {
            background: linear-gradient(135deg, #000000 0%, #1a0000 50%, #330000 100%);
            font-family: 'Rajdhani', sans-serif;
            overflow-x: hidden;
            position: relative;
            color: white;
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
                radial-gradient(circle at 20% 30%, rgba(255, 0, 0, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(204, 0, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 90%, rgba(255, 51, 51, 0.1) 0%, transparent 50%);
            z-index: -1;
        }
        
        .arena-container {
            position: relative;
            padding: 2rem;
            animation: fadeIn 1s ease-out;
            max-width: 1400px;
            margin: 0 auto;
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
            font-size: 3rem;
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
            margin-bottom: 0.5rem;
        }
        
        @keyframes textGlow {
            from { text-shadow: 0 0 20px rgba(255, 0, 0, 0.7); }
            to { text-shadow: 0 0 30px rgba(255, 51, 0, 0.9), 
                             0 0 40px rgba(255, 0, 0, 0.5); }
        }
        
        .map-description {
            color: #ff9999;
            font-size: 1.2rem;
            margin-top: 1rem;
            text-align: center;
            opacity: 0.9;
        }
        
        .map-wrapper {
            position: relative;
            margin: 2rem 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 
                0 0 40px rgba(255, 0, 0, 0.4),
                0 20px 50px rgba(0, 0, 0, 0.7);
            border: 2px solid var(--blood-red);
        }
        
        #map {
            height: 600px;
            width: 100%;
            background: #000;
        }
        
        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1000;
            background: linear-gradient(0deg, rgba(0,0,0,0.3) 0%, transparent 30%);
        }
        
        .controls-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
            flex-wrap: wrap;
        }
        
        .control-btn {
            position: relative;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border: none;
            padding: 0.8rem 1.5rem;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: white;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
            z-index: 1;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .control-btn::before {
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
        
        .control-btn:hover::before {
            left: 100%;
        }
        
        .control-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
        }
        
        .arenas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .arena-card {
            background: rgba(26, 0, 0, 0.9);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 0, 0, 0.3);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }
        
        .arena-card:hover {
            transform: translateY(-5px);
            border-color: var(--blood-red);
            box-shadow: 0 10px 25px rgba(255, 0, 0, 0.3);
        }
        
        .arena-card::before {
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
        
        .arena-name {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.4rem;
            color: var(--fire-red);
            margin-bottom: 0.5rem;
            text-shadow: 0 0 10px rgba(255, 51, 0, 0.5);
        }
        
        .arena-location {
            color: #cc9999;
            font-size: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .arena-details {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }
        
        .detail-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #cc9999;
            font-size: 0.9rem;
        }
        
        .detail-item strong {
            color: var(--fire-red);
            min-width: 100px;
            flex-shrink: 0;
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
        
        .back-btn {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            border: none;
            padding: 0.8rem 1.5rem;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
            z-index: 100;
        }
        
        .back-btn:hover {
            transform: translateX(-5px);
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
        }
        
        .map-stats {
            display: flex;
            justify-content: space-around;
            margin: 2rem 0;
            background: rgba(26, 0, 0, 0.8);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 0, 0, 0.3);
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-family: 'Orbitron', sans-serif;
            font-size: 2rem;
            color: var(--fire-red);
            text-shadow: 0 0 10px rgba(255, 51, 0, 0.7);
        }
        
        .stat-label {
            color: #cc9999;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Personnalisation des marqueurs Leaflet */
        .arena-marker {
            filter: drop-shadow(0 0 5px rgba(255, 0, 0, 0.7));
            transition: all 0.3s ease;
        }
        
        .arena-marker:hover {
            filter: drop-shadow(0 0 10px rgba(255, 51, 0, 0.9));
            transform: scale(1.1);
        }
        
        .marker-pulse {
            animation: markerPulse 2s infinite;
        }
        
        @keyframes markerPulse {
            0% { filter: drop-shadow(0 0 5px rgba(255, 0, 0, 0.7)); }
            50% { filter: drop-shadow(0 0 15px rgba(255, 51, 0, 0.9)); }
            100% { filter: drop-shadow(0 0 5px rgba(255, 0, 0, 0.7)); }
        }
        
        /* Popup personnalisé */
        .arena-popup .leaflet-popup-content-wrapper {
            background: rgba(26, 0, 0, 0.95);
            border: 2px solid var(--blood-red);
            border-radius: 10px;
            color: white;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
        
        .arena-popup .leaflet-popup-content {
            font-family: 'Rajdhani', sans-serif;
            margin: 15px;
            font-size: 1rem;
        }
        
        .arena-popup .leaflet-popup-tip {
            background: var(--blood-red);
        }
        
        @media (max-width: 768px) {
            .arena-container {
                padding: 1rem;
            }
            
            .main-title {
                font-size: 2rem;
            }
            
            .map-wrapper {
                margin: 1rem 0;
            }
            
            #map {
                height: 400px;
            }
            
            .controls-container {
                flex-direction: column;
                align-items: center;
            }
            
            .arenas-grid {
                grid-template-columns: 1fr;
            }
            
            .back-btn {
                position: relative;
                top: auto;
                left: auto;
                margin-bottom: 1rem;
                justify-content: center;
            }
            
            .map-stats {
                flex-direction: column;
                gap: 1.5rem;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"arena-container\">
    
    <!-- Bouton retour -->
    <a href=\"{{ path('app_matchy_index') }}\" class=\"back-btn\">
        ← RETOUR AUX MATCHS
    </a>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        {% set icons = ['🗺️', '📍', '🎯', '🏆', '⚔️', '🔥', '💀', '👑', '🛡️'] %}
        {% for i in 1..12 %}
            {% set iconIndex = (i % icons|length) %}
            {% set leftPosition = 5 + ((i * 8) % 90) %}
            {% set delay = (i * 1.2) % 18 %}
            {% set duration = 18 + ((i * 1.5) % 10) %}
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
        <h1 class=\"main-title\">🗺️ CARTE DES ARÈNES</h1>
        <p class=\"map-description\">
            Visualisez géographiquement les arènes et lieux de compétition • 
            Localisez les prochains matchs • Planifiez vos déplacements
        </p>
    </div>
    
    <!-- Statistiques -->
    <div class=\"map-stats\">
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"arenaCount\">0</div>
            <div class=\"stat-label\">Arènes actives</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"matchCount\">0</div>
            <div class=\"stat-label\">Matchs programmés</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"cityCount\">0</div>
            <div class=\"stat-label\">Villes couvertes</div>
        </div>
        <div class=\"stat-item\">
            <div class=\"stat-value\" id=\"liveCount\">0</div>
            <div class=\"stat-label\">Matchs en direct</div>
        </div>
    </div>
    
    <!-- Contrôles de la carte -->
    <div class=\"controls-container\">
        <button class=\"control-btn\" id=\"zoomInBtn\">
            🔍 ZOOM +
        </button>
        <button class=\"control-btn\" id=\"zoomOutBtn\">
            🔍 ZOOM -
        </button>
        <button class=\"control-btn\" id=\"locateBtn\">
            📍 MA POSITION
        </button>
        <button class=\"control-btn\" id=\"resetViewBtn\">
            🗺️ VUE GLOBALE
        </button>
    </div>
    
    <!-- Carte -->
    <div class=\"map-wrapper\">
        <div id=\"map\"></div>
        <div class=\"map-overlay\"></div>
    </div>
    
    <!-- Légende -->
    <div class=\"controls-container\" style=\"margin-top: 1rem;\">
        <div style=\"display: flex; align-items: center; gap: 1rem; color: #cc9999; font-size: 0.9rem;\">
            <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                <div style=\"width: 20px; height: 20px; background: var(--blood-red); border-radius: 50%; box-shadow: 0 0 10px var(--red-glow);\"></div>
                <span>Match en cours</span>
            </div>
            <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                <div style=\"width: 20px; height: 20px; background: var(--map-green); border-radius: 50%; box-shadow: 0 0 10px rgba(0, 255, 136, 0.7);\"></div>
                <span>Arène disponible</span>
            </div>
            <div style=\"display: flex; align-items: center; gap: 0.5rem;\">
                <div style=\"width: 20px; height: 20px; background: var(--map-blue); border-radius: 50%; box-shadow: 0 0 10px rgba(0, 102, 255, 0.7);\"></div>
                <span>Match à venir</span>
            </div>
        </div>
    </div>
    
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
            integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
            crossorigin=\"\"></script>
    <script>
        // Configuration des icônes personnalisées
        const arenaIcon = L.divIcon({
            html: '⚔️',
            className: 'arena-marker',
            iconSize: [40, 40],
            iconAnchor: [20, 40]
        });
        
        const liveIcon = L.divIcon({
            html: '🔥',
            className: 'arena-marker marker-pulse',
            iconSize: [45, 45],
            iconAnchor: [22.5, 45]
        });
        
        const upcomingIcon = L.divIcon({
            html: '🎯',
            className: 'arena-marker',
            iconSize: [40, 40],
            iconAnchor: [20, 40]
        });
        
        // Données des arènes (simulation - à remplacer par vos données réelles)
        const arenasData = [
            {
                id: 1,
                name: \"ARÈNE DE LYON\",
                lat: 45.7534031,
                lng: 4.8295061,
                status: \"active\",
                capacity: 5000,
                nextMatch: \"2024-03-20 20:00\",
                description: \"Arène principale de compétition\"
            },
            {
                id: 2,
                name: \"STADE E-SPORT PARIS\",
                lat: 48.856614,
                lng: 2.3522219,
                status: \"live\",
                capacity: 8000,
                nextMatch: \"EN COURS\",
                description: \"Match en direct - Ligue des Champions\"
            },
            {
                id: 3,
                name: \"ARENA MARSEILLE\",
                lat: 43.296482,
                lng: 5.36978,
                status: \"upcoming\",
                capacity: 3000,
                nextMatch: \"2024-03-22 18:30\",
                description: \"Qualificatifs régionaux\"
            },
            {
                id: 4,
                name: \"GAMING CENTER LILLE\",
                lat: 50.62925,
                lng: 3.057256,
                status: \"active\",
                capacity: 2000,
                nextMatch: \"2024-03-21 19:00\",
                description: \"Tournoi amateur\"
            },
            {
                id: 5,
                name: \"STADE DE BORDEAUX\",
                lat: 44.837789,
                lng: -0.57918,
                status: \"active\",
                capacity: 4000,
                nextMatch: \"2024-03-25 20:00\",
                description: \"Finale régionale\"
            }
        ];
        
        // Initialiser la carte
        const map = L.map('map').setView([46.603354, 1.888334], 6);
        
        // Ajouter la couche de tuiles avec style sombre
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            attribution: '© <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, © <a href=\"https://carto.com/attributions\">CARTO</a>'
        }).addTo(map);
        
        // Ajouter une couche de contours rouges
        L.tileLayer('https://tiles.stadiamaps.com/tiles/stamen_toner_lines/{z}/{x}/{y}.png', {
            maxZoom: 19,
            opacity: 0.3
        }).addTo(map);
        
        // Créer un groupe pour les marqueurs
        const markersGroup = L.layerGroup().addTo(map);
        
        // Fonction pour créer un popup d'arène
        function createArenaPopup(arena) {
            const statusIcon = arena.status === 'live' ? '🔥' : 
                             arena.status === 'upcoming' ? '🎯' : '⚔️';
            const statusClass = arena.status === 'live' ? 'live' : 
                              arena.status === 'upcoming' ? 'upcoming' : 'active';
            
            return `
                <div class=\"arena-popup-content\" style=\"font-family: 'Rajdhani', sans-serif;\">
                    <div style=\"display: flex; align-items: center; gap: 10px; margin-bottom: 10px;\">
                        <span style=\"font-size: 1.5rem;\">\${statusIcon}</span>
                        <div>
                            <h3 style=\"margin: 0; color: var(--blood-red); font-family: 'Orbitron', sans-serif;\">
                                \${arena.name}
                            </h3>
                            <div style=\"font-size: 0.9rem; color: #cc9999;\">
                                \${arena.description}
                            </div>
                        </div>
                    </div>
                    
                    <div style=\"display: grid; gap: 8px; font-size: 0.9rem;\">
                        <div style=\"display: flex; justify-content: space-between;\">
                            <span style=\"color: #cc9999;\">Capacité :</span>
                            <span style=\"color: var(--fire-red); font-weight: bold;\">\${arena.capacity.toLocaleString()} places</span>
                        </div>
                        
                        <div style=\"display: flex; justify-content: space-between;\">
                            <span style=\"color: #cc9999;\">Prochain match :</span>
                            <span style=\"color: var(--map-green); font-weight: bold;\">\${arena.nextMatch}</span>
                        </div>
                        
                        <div style=\"display: flex; justify-content: space-between;\">
                            <span style=\"color: #cc9999;\">Statut :</span>
                            <span style=\"color: \${arena.status === 'live' ? 'var(--fire-red)' : 
                                               arena.status === 'upcoming' ? 'var(--map-blue)' : 
                                               'var(--map-green)'}; 
                                 font-weight: bold; text-transform: uppercase;\">
                                \${arena.status}
                            </span>
                        </div>
                    </div>
                    
                    <div style=\"margin-top: 15px; padding-top: 10px; border-top: 1px solid rgba(255, 0, 0, 0.3);\">
                        <a href=\"/matchy\" 
                           style=\"display: block; text-align: center; 
                                  background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
                                  color: white; padding: 8px; border-radius: 5px; 
                                  text-decoration: none; font-family: 'Orbitron', sans-serif;
                                  font-size: 0.9rem; transition: all 0.3s;\">
                            📅 Voir les matchs
                        </a>
                    </div>
                </div>
            `;
        }
        
        // Ajouter les marqueurs
        let activeArenas = 0;
        let liveMatches = 0;
        let cities = new Set();
        
        arenasData.forEach(arena => {
            let icon;
            if (arena.status === 'live') {
                icon = liveIcon;
                liveMatches++;
            } else if (arena.status === 'upcoming') {
                icon = upcomingIcon;
            } else {
                icon = arenaIcon;
                activeArenas++;
            }
            
            // Extraire la ville du nom
            const city = arena.name.split(' ').pop();
            cities.add(city);
            
            const marker = L.marker([arena.lat, arena.lng], { icon: icon })
                .addTo(markersGroup)
                .bindPopup(createArenaPopup(arena));
            
            // Effet au survol
            marker.on('mouseover', function() {
                this.openPopup();
            });
            
            // Effet sonore au clic (simulation)
            marker.on('click', function() {
                const clickSound = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-unlock-game-notification-253.mp3');
                clickSound.volume = 0.3;
                clickSound.play().catch(e => console.log(\"Audio error:\", e));
            });
        });
        
        // Mettre à jour les statistiques
        document.getElementById('arenaCount').textContent = activeArenas;
        document.getElementById('matchCount').textContent = arenasData.length;
        document.getElementById('cityCount').textContent = cities.size;
        document.getElementById('liveCount').textContent = liveMatches;
        
        // Contrôles de la carte
        document.getElementById('zoomInBtn').addEventListener('click', () => {
            map.zoomIn();
            animateButton('zoomInBtn');
        });
        
        document.getElementById('zoomOutBtn').addEventListener('click', () => {
            map.zoomOut();
            animateButton('zoomOutBtn');
        });
        
        document.getElementById('locateBtn').addEventListener('click', () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    const { latitude, longitude } = position.coords;
                    map.setView([latitude, longitude], 13);
                    
                    // Ajouter un marqueur de position
                    L.marker([latitude, longitude], {
                        icon: L.divIcon({
                            html: '📍',
                            className: 'arena-marker marker-pulse',
                            iconSize: [30, 30],
                            iconAnchor: [15, 30]
                        })
                    })
                    .addTo(map)
                    .bindPopup(\"<b>Votre position</b><br>Vous êtes ici !\")
                    .openPopup();
                    
                    animateButton('locateBtn');
                });
            }
        });
        
        document.getElementById('resetViewBtn').addEventListener('click', () => {
            map.setView([46.603354, 1.888334], 6);
            animateButton('resetViewBtn');
        });
        
        // Fonction d'animation des boutons
        function animateButton(buttonId) {
            const button = document.getElementById(buttonId);
            button.style.transform = 'scale(0.95)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 150);
        }
        
        // Ajouter une couche de chaleur (optionnel)
        const heatData = arenasData.map(arena => [arena.lat, arena.lng, 1]);
        L.heatLayer(heatData, {
            radius: 25,
            blur: 15,
            maxZoom: 17,
            gradient: {
                0.4: 'blue',
                0.6: 'lime',
                0.7: 'red',
                1.0: '#ff0000'
            }
        }).addTo(map);
        
        // Animation de la carte au chargement
        setTimeout(() => {
            map.setView([46.603354, 1.888334], 6);
            map.eachLayer(layer => {
                if (layer instanceof L.Marker) {
                    layer.setOpacity(0);
                    layer.openPopup();
                    
                    setTimeout(() => {
                        layer.setOpacity(1);
                    }, 500);
                }
            });
        }, 1000);
        
        // Effet de particules sur la carte
        function createMapParticle(x, y) {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.left = x + 'px';
            particle.style.top = y + 'px';
            particle.style.width = '4px';
            particle.style.height = '4px';
            particle.style.background = 'radial-gradient(circle, var(--blood-red) 0%, transparent 70%)';
            particle.style.borderRadius = '50%';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '1000';
            particle.style.boxShadow = '0 0 8px var(--blood-red)';
            particle.style.animation = 'particleFade 1s forwards';
            
            document.querySelector('.map-wrapper').appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 1000);
        }
        
        // Ajouter un style pour l'animation des particules
        const particleStyle = document.createElement('style');
        particleStyle.textContent = `
            @keyframes particleFade {
                0% { transform: scale(1); opacity: 1; }
                100% { transform: scale(3); opacity: 0; }
            }
        `;
        document.head.appendChild(particleStyle);
        
        // Effet au clic sur la carte
        map.on('click', function(e) {
            createMapParticle(e.containerPoint.x, e.containerPoint.y);
        });
    </script>
{% endblock %}", "map/simple_map.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\map\\simple_map.html.twig");
    }
}
