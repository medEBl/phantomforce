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

/* back/team/edit.html.twig */
class __TwigTemplate_13725350765d9580474f547978db74a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/edit.html.twig"));

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

        yield "⚔️ BLOOD ARENA - Modifier ";
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
    
    .edit-container {
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
    
    .form-card {
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
    
    .form-card:hover {
        border-color: var(--blood-red);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.9),
            0 0 50px rgba(255, 0, 60, 0.4);
    }
    
    .form-card::before {
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
    
    .form-group {
        margin-bottom: 2rem;
        position: relative;
    }
    
    .form-label {
        display: block;
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(255, 204, 0, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
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
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
        background: rgba(0, 0, 0, 0.9);
        transform: translateY(-2px);
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }
    
    .form-input:focus::placeholder {
        color: rgba(255, 255, 255, 0.3);
    }
    
    .form-select {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        cursor: pointer;
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ffcc00' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1rem;
    }
    
    .form-select:focus {
        outline: none;
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
        background-color: rgba(0, 0, 0, 0.9);
        transform: translateY(-2px);
    }
    
    .input-icon {
        position: absolute;
        right: 1.5rem;
        top: 3.8rem;
        color: var(--blood-orange);
        font-size: 1.3rem;
        pointer-events: none;
    }
    
    .form-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(255, 0, 60, 0.3);
    }
    
    .submit-btn {
        position: relative;
        background: linear-gradient(45deg, var(--warning-orange), var(--fire-yellow));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: black;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 204, 0, 0.6);
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
        box-shadow: 0 0 50px rgba(255, 204, 0, 0.9);
        background: linear-gradient(45deg, var(--fire-yellow), var(--warning-orange));
    }
    
    .back-btn {
        position: relative;
        background: linear-gradient(45deg, var(--medium-gray), var(--light-gray));
        border: 2px solid var(--blood-red);
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
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.5);
        background: linear-gradient(45deg, var(--light-gray), var(--medium-gray));
        border-color: var(--fire-yellow);
    }
    
    .cancel-btn {
        position: relative;
        background: linear-gradient(45deg, var(--light-red), var(--blood-red));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.5);
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
    
    .cancel-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.7);
        background: linear-gradient(45deg, var(--blood-red), var(--light-red));
    }
    
    .game-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .game-option {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid var(--medium-gray);
        border-radius: 10px;
        padding: 1.2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--text-muted);
    }
    
    .game-option:hover {
        border-color: var(--blood-orange);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 102, 0, 0.2);
    }
    
    .game-option.selected {
        border-color: var(--fire-yellow);
        background: rgba(255, 204, 0, 0.1);
        color: var(--fire-yellow);
        box-shadow: 0 0 20px rgba(255, 204, 0, 0.3);
        transform: translateY(-3px);
    }
    
    .game-option-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    .character-counter {
        text-align: right;
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-top: 0.5rem;
        font-family: 'Orbitron', monospace;
    }
    
    .character-counter.warning {
        color: var(--warning-orange);
    }
    
    .character-counter.danger {
        color: var(--blood-red);
    }
    
    /* Styles pour la sélection multiple */
    .members-select {
        min-height: 150px;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .members-select option {
        padding: 0.8rem 1rem;
        background: rgba(34, 34, 34, 0.9);
        border-bottom: 1px solid rgba(255, 102, 0, 0.2);
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .members-select option:hover {
        background: rgba(255, 102, 0, 0.3);
    }
    
    .members-select option:checked {
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        color: white;
        font-weight: bold;
    }
    
    .members-select:focus {
        outline: none;
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
    }
    
    .selected-counter {
        display: inline-block;
        background: var(--blood-red);
        color: white;
        border-radius: 20px;
        padding: 0.2rem 1rem;
        font-size: 0.9rem;
        margin-left: 1rem;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 5px var(--blood-red); }
        50% { box-shadow: 0 0 15px var(--blood-red); }
    }
    
    .members-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.5rem;
        font-size: 0.9rem;
        color: var(--text-muted);
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
        .edit-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .form-card {
            padding: 1.5rem;
        }
        
        .form-actions {
            flex-direction: column;
            gap: 1rem;
        }
        
        .submit-btn, .back-btn, .cancel-btn {
            min-width: 100%;
            font-size: 1.1rem;
            padding: 1rem 2rem;
        }
        
        .game-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .members-stats {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 592
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

        // line 593
        yield "<div class=\"edit-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 597
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 598
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 599
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 599, $this->source); })())));
            // line 600
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 601
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 602
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 603
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 604, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 605
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 605, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 606, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 608, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 608, $this->source); })()), [], "array", false, false, false, 608), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">
            MODIFIER L'ÉQUIPE
            <span class=\"team-id\">ID: #";
        // line 617
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 617, $this->source); })()), "id", [], "any", false, false, false, 617), "html", null, true);
        yield "</span>
        </h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            METTRE À JOUR LES INFORMATIONS DE L'ÉQUIPE
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        ";
        // line 626
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>⚡ NOM DE L'ÉQUIPE</span>
            </label>
            ";
        // line 632
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 632, $this->source); })()), "name", [], "any", false, false, false, 632), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "EX: BLOOD WARRIORS", "maxlength" => 50]]);
        // line 638
        yield "
            <div class=\"input-icon\">🏆</div>
            <div class=\"character-counter\" id=\"nameCounter\">";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 640, $this->source); })()), "name", [], "any", false, false, false, 640)), "html", null, true);
        yield "/50</div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU PRINCIPAL</span>
            </label>
            ";
        // line 647
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 647, $this->source); })()), "game", [], "any", false, false, false, 647), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN JEU"]]);
        // line 652
        yield "
            <div class=\"input-icon\">🕹️</div>
            
            <!-- Suggestions de jeux populaires -->
            <div class=\"game-grid\" id=\"gameSuggestions\">
                <div class=\"game-option\" data-game=\"VALORANT\">
                    <span class=\"game-option-icon\">🔫</span>
                    VALORANT
                </div>
                <div class=\"game-option\" data-game=\"LEAGUE OF LEGENDS\">
                    <span class=\"game-option-icon\">⚔️</span>
                    LOL
                </div>
                <div class=\"game-option\" data-game=\"COUNTER-STRIKE 2\">
                    <span class=\"game-option-icon\">🎯</span>
                    CS2
                </div>
                <div class=\"game-option\" data-game=\"DOTA 2\">
                    <span class=\"game-option-icon\">🛡️</span>
                    DOTA 2
                </div>
                <div class=\"game-option\" data-game=\"OVERWATCH 2\">
                    <span class=\"game-option-icon\">✨</span>
                    OVERWATCH
                </div>
                <div class=\"game-option\" data-game=\"RAINBOW SIX SIEGE\">
                    <span class=\"game-option-icon\">🔍</span>
                    R6 SIEGE
                </div>
                <div class=\"game-option\" data-game=\"ROCKET LEAGUE\">
                    <span class=\"game-option-icon\">🚗</span>
                    ROCKET LEAGUE
                </div>
                <div class=\"game-option\" data-game=\"FORTNITE\">
                    <span class=\"game-option-icon\">🏹</span>
                    FORTNITE
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📅 DATE DE CRÉATION</span>
            </label>
            ";
        // line 696
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 696, $this->source); })()), "creation_date", [], "any", false, false, false, 696), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "JJ/MM/AAAA"]]);
        // line 701
        yield "
            <div class=\"input-icon\">📅</div>
        </div>
        
        <!-- CHAMP COACH CORRIGÉ (remplace coach_id) -->
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👑 COACH DE L'ÉQUIPE</span>
            </label>
            ";
        // line 710
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 710, $this->source); })()), "coach", [], "any", false, false, false, 710), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Sélectionnez un coach"]]);
        // line 715
        yield "
            <div class=\"input-icon\">👑</div>
        </div>
        
        <!-- CHAMP MEMBRES (agents) -->
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👥 MEMBRES DE L'ÉQUIPE</span>
                <span class=\"selected-counter\" id=\"selectedCount\">";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 723, $this->source); })()), "members", [], "any", false, false, false, 723)), "html", null, true);
        yield " sélectionné(s)</span>
            </label>
            
            ";
        // line 726
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 726, $this->source); })()), "members", [], "any", false, false, false, 726), 'widget', ["attr" => ["class" => "members-select", "size" => 6, "multiple" => "multiple"]]);
        // line 732
        yield "
            
            <div class=\"members-stats\">
                <div>
                    <span id=\"totalMembers\">";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 736, $this->source); })()), "members", [], "any", false, false, false, 736), "vars", [], "any", false, false, false, 736), "choices", [], "any", false, false, false, 736)), "html", null, true);
        yield "</span> agents disponibles
                </div>
                <div>
                    <span>💡</span> Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>⌘</kbd> (Mac) pour sélection multiple
                </div>
            </div>
            
            <div class=\"input-icon\">👥</div>
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                💾 SAUVEGARDER
            </button>
            <a href=\"";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 750, $this->source); })()), "id", [], "any", false, false, false, 750)]), "html", null, true);
        yield "\" class=\"cancel-btn\">
                ❌ ANNULER
            </a>
            <a href=\"";
        // line 753
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        yield "\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        ";
        // line 758
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 758, $this->source); })()), 'form_end');
        yield "
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;\">
        <p>⚠️ <strong>ATTENTION :</strong> Les modifications sont immédiates et affectent tous les membres de l'équipe.</p>
    </div>
</div>

<script>
    // Gestion du compteur de caractères
    const nameInput = document.querySelector('input[name*=\"name\"]');
    const nameCounter = document.getElementById('nameCounter');
    
    if (nameInput && nameCounter) {
        nameInput.addEventListener('input', function() {
            const length = this.value.length;
            nameCounter.textContent = `\${length}/50`;
            
            // Changer la couleur selon le nombre de caractères
            nameCounter.classList.remove('warning', 'danger');
            if (length > 40) {
                nameCounter.classList.add('warning');
            }
            if (length >= 50) {
                nameCounter.classList.add('danger');
            }
        });
        
        // Initialiser le compteur avec la valeur actuelle
        nameInput.dispatchEvent(new Event('input'));
    }
    
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
            if (option.getAttribute('data-game') === gameSelect.value) {
                option.classList.add('selected');
            }
        });
    }
    
    // Gestion du compteur de membres sélectionnés
    const membersSelect = document.querySelector('select[name*=\"members\"]');
    const selectedCount = document.getElementById('selectedCount');
    
    if (membersSelect && selectedCount) {
        function updateSelectedCount() {
            const selected = Array.from(membersSelect.selectedOptions).length;
            selectedCount.textContent = selected + ' sélectionné(s)';
            
            // Animation du compteur
            selectedCount.style.transform = 'scale(1.2)';
            setTimeout(() => {
                selectedCount.style.transform = 'scale(1)';
            }, 200);
        }
        
        membersSelect.addEventListener('change', updateSelectedCount);
        updateSelectedCount();
    }
    
    // Animation des inputs au focus
    const formInputs = document.querySelectorAll('.form-input, .form-select, .members-select');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-5px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
    
    // Effet de validation au submit
    const form = document.querySelector('form');
    const submitBtn = document.querySelector('.submit-btn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Animation du bouton
            submitBtn.innerHTML = '💾 SAUVEGARDE...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.8';
            
            // Petite animation avant la soumission réelle
            setTimeout(() => {
                submitBtn.innerHTML = '💾 MIS À JOUR !';
                submitBtn.style.background = 'linear-gradient(45deg, var(--success-green), var(--fire-yellow))';
            }, 100);
        });
    }
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.edit-container').style.opacity = '1';
        }, 100);
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
        return "back/team/edit.html.twig";
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
        return array (  924 => 758,  916 => 753,  910 => 750,  893 => 736,  887 => 732,  885 => 726,  879 => 723,  869 => 715,  867 => 710,  856 => 701,  854 => 696,  808 => 652,  806 => 647,  796 => 640,  792 => 638,  790 => 632,  781 => 626,  769 => 617,  761 => 611,  752 => 608,  747 => 606,  743 => 605,  739 => 604,  736 => 603,  733 => 602,  730 => 601,  727 => 600,  724 => 599,  719 => 598,  717 => 597,  711 => 593,  698 => 592,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}⚔️ BLOOD ARENA - Modifier {{ team.name }}{% endblock %}

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
    
    .edit-container {
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
    
    .form-card {
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
    
    .form-card:hover {
        border-color: var(--blood-red);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.9),
            0 0 50px rgba(255, 0, 60, 0.4);
    }
    
    .form-card::before {
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
    
    .form-group {
        margin-bottom: 2rem;
        position: relative;
    }
    
    .form-label {
        display: block;
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(255, 204, 0, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
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
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
        background: rgba(0, 0, 0, 0.9);
        transform: translateY(-2px);
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }
    
    .form-input:focus::placeholder {
        color: rgba(255, 255, 255, 0.3);
    }
    
    .form-select {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        cursor: pointer;
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ffcc00' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1rem;
    }
    
    .form-select:focus {
        outline: none;
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
        background-color: rgba(0, 0, 0, 0.9);
        transform: translateY(-2px);
    }
    
    .input-icon {
        position: absolute;
        right: 1.5rem;
        top: 3.8rem;
        color: var(--blood-orange);
        font-size: 1.3rem;
        pointer-events: none;
    }
    
    .form-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(255, 0, 60, 0.3);
    }
    
    .submit-btn {
        position: relative;
        background: linear-gradient(45deg, var(--warning-orange), var(--fire-yellow));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: black;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 204, 0, 0.6);
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
        box-shadow: 0 0 50px rgba(255, 204, 0, 0.9);
        background: linear-gradient(45deg, var(--fire-yellow), var(--warning-orange));
    }
    
    .back-btn {
        position: relative;
        background: linear-gradient(45deg, var(--medium-gray), var(--light-gray));
        border: 2px solid var(--blood-red);
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
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.5);
        background: linear-gradient(45deg, var(--light-gray), var(--medium-gray));
        border-color: var(--fire-yellow);
    }
    
    .cancel-btn {
        position: relative;
        background: linear-gradient(45deg, var(--light-red), var(--blood-red));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.5);
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
    
    .cancel-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.7);
        background: linear-gradient(45deg, var(--blood-red), var(--light-red));
    }
    
    .game-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .game-option {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid var(--medium-gray);
        border-radius: 10px;
        padding: 1.2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: var(--text-muted);
    }
    
    .game-option:hover {
        border-color: var(--blood-orange);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(255, 102, 0, 0.2);
    }
    
    .game-option.selected {
        border-color: var(--fire-yellow);
        background: rgba(255, 204, 0, 0.1);
        color: var(--fire-yellow);
        box-shadow: 0 0 20px rgba(255, 204, 0, 0.3);
        transform: translateY(-3px);
    }
    
    .game-option-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    .character-counter {
        text-align: right;
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-top: 0.5rem;
        font-family: 'Orbitron', monospace;
    }
    
    .character-counter.warning {
        color: var(--warning-orange);
    }
    
    .character-counter.danger {
        color: var(--blood-red);
    }
    
    /* Styles pour la sélection multiple */
    .members-select {
        min-height: 150px;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .members-select option {
        padding: 0.8rem 1rem;
        background: rgba(34, 34, 34, 0.9);
        border-bottom: 1px solid rgba(255, 102, 0, 0.2);
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .members-select option:hover {
        background: rgba(255, 102, 0, 0.3);
    }
    
    .members-select option:checked {
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        color: white;
        font-weight: bold;
    }
    
    .members-select:focus {
        outline: none;
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
    }
    
    .selected-counter {
        display: inline-block;
        background: var(--blood-red);
        color: white;
        border-radius: 20px;
        padding: 0.2rem 1rem;
        font-size: 0.9rem;
        margin-left: 1rem;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% { box-shadow: 0 0 5px var(--blood-red); }
        50% { box-shadow: 0 0 15px var(--blood-red); }
    }
    
    .members-stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 0.5rem;
        font-size: 0.9rem;
        color: var(--text-muted);
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
        .edit-container {
            padding: 1rem;
        }
        
        .main-title {
            font-size: 2rem;
        }
        
        .form-card {
            padding: 1.5rem;
        }
        
        .form-actions {
            flex-direction: column;
            gap: 1rem;
        }
        
        .submit-btn, .back-btn, .cancel-btn {
            min-width: 100%;
            font-size: 1.1rem;
            padding: 1rem 2rem;
        }
        
        .game-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .members-stats {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"edit-container\">
    
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
            MODIFIER L'ÉQUIPE
            <span class=\"team-id\">ID: #{{ team.id }}</span>
        </h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            METTRE À JOUR LES INFORMATIONS DE L'ÉQUIPE
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        {{ form_start(form) }}
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>⚡ NOM DE L'ÉQUIPE</span>
            </label>
            {{ form_widget(form.name, {
                'attr': {
                    'class': 'form-input',
                    'placeholder': 'EX: BLOOD WARRIORS',
                    'maxlength': 50
                }
            }) }}
            <div class=\"input-icon\">🏆</div>
            <div class=\"character-counter\" id=\"nameCounter\">{{ team.name|length }}/50</div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU PRINCIPAL</span>
            </label>
            {{ form_widget(form.game, {
                'attr': {
                    'class': 'form-select',
                    'placeholder': 'SÉLECTIONNEZ UN JEU'
                }
            }) }}
            <div class=\"input-icon\">🕹️</div>
            
            <!-- Suggestions de jeux populaires -->
            <div class=\"game-grid\" id=\"gameSuggestions\">
                <div class=\"game-option\" data-game=\"VALORANT\">
                    <span class=\"game-option-icon\">🔫</span>
                    VALORANT
                </div>
                <div class=\"game-option\" data-game=\"LEAGUE OF LEGENDS\">
                    <span class=\"game-option-icon\">⚔️</span>
                    LOL
                </div>
                <div class=\"game-option\" data-game=\"COUNTER-STRIKE 2\">
                    <span class=\"game-option-icon\">🎯</span>
                    CS2
                </div>
                <div class=\"game-option\" data-game=\"DOTA 2\">
                    <span class=\"game-option-icon\">🛡️</span>
                    DOTA 2
                </div>
                <div class=\"game-option\" data-game=\"OVERWATCH 2\">
                    <span class=\"game-option-icon\">✨</span>
                    OVERWATCH
                </div>
                <div class=\"game-option\" data-game=\"RAINBOW SIX SIEGE\">
                    <span class=\"game-option-icon\">🔍</span>
                    R6 SIEGE
                </div>
                <div class=\"game-option\" data-game=\"ROCKET LEAGUE\">
                    <span class=\"game-option-icon\">🚗</span>
                    ROCKET LEAGUE
                </div>
                <div class=\"game-option\" data-game=\"FORTNITE\">
                    <span class=\"game-option-icon\">🏹</span>
                    FORTNITE
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📅 DATE DE CRÉATION</span>
            </label>
            {{ form_widget(form.creation_date, {
                'attr': {
                    'class': 'form-input',
                    'placeholder': 'JJ/MM/AAAA'
                }
            }) }}
            <div class=\"input-icon\">📅</div>
        </div>
        
        <!-- CHAMP COACH CORRIGÉ (remplace coach_id) -->
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👑 COACH DE L'ÉQUIPE</span>
            </label>
            {{ form_widget(form.coach, {
                'attr': {
                    'class': 'form-select',
                    'placeholder': 'Sélectionnez un coach'
                }
            }) }}
            <div class=\"input-icon\">👑</div>
        </div>
        
        <!-- CHAMP MEMBRES (agents) -->
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👥 MEMBRES DE L'ÉQUIPE</span>
                <span class=\"selected-counter\" id=\"selectedCount\">{{ team.members|length }} sélectionné(s)</span>
            </label>
            
            {{ form_widget(form.members, {
                'attr': {
                    'class': 'members-select',
                    'size': 6,
                    'multiple': 'multiple'
                }
            }) }}
            
            <div class=\"members-stats\">
                <div>
                    <span id=\"totalMembers\">{{ form.members.vars.choices|length }}</span> agents disponibles
                </div>
                <div>
                    <span>💡</span> Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>⌘</kbd> (Mac) pour sélection multiple
                </div>
            </div>
            
            <div class=\"input-icon\">👥</div>
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                💾 SAUVEGARDER
            </button>
            <a href=\"{{ path('app_back_team_show', {'id': team.id}) }}\" class=\"cancel-btn\">
                ❌ ANNULER
            </a>
            <a href=\"{{ path('app_back_team_index') }}\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        {{ form_end(form) }}
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;\">
        <p>⚠️ <strong>ATTENTION :</strong> Les modifications sont immédiates et affectent tous les membres de l'équipe.</p>
    </div>
</div>

<script>
    // Gestion du compteur de caractères
    const nameInput = document.querySelector('input[name*=\"name\"]');
    const nameCounter = document.getElementById('nameCounter');
    
    if (nameInput && nameCounter) {
        nameInput.addEventListener('input', function() {
            const length = this.value.length;
            nameCounter.textContent = `\${length}/50`;
            
            // Changer la couleur selon le nombre de caractères
            nameCounter.classList.remove('warning', 'danger');
            if (length > 40) {
                nameCounter.classList.add('warning');
            }
            if (length >= 50) {
                nameCounter.classList.add('danger');
            }
        });
        
        // Initialiser le compteur avec la valeur actuelle
        nameInput.dispatchEvent(new Event('input'));
    }
    
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
            if (option.getAttribute('data-game') === gameSelect.value) {
                option.classList.add('selected');
            }
        });
    }
    
    // Gestion du compteur de membres sélectionnés
    const membersSelect = document.querySelector('select[name*=\"members\"]');
    const selectedCount = document.getElementById('selectedCount');
    
    if (membersSelect && selectedCount) {
        function updateSelectedCount() {
            const selected = Array.from(membersSelect.selectedOptions).length;
            selectedCount.textContent = selected + ' sélectionné(s)';
            
            // Animation du compteur
            selectedCount.style.transform = 'scale(1.2)';
            setTimeout(() => {
                selectedCount.style.transform = 'scale(1)';
            }, 200);
        }
        
        membersSelect.addEventListener('change', updateSelectedCount);
        updateSelectedCount();
    }
    
    // Animation des inputs au focus
    const formInputs = document.querySelectorAll('.form-input, .form-select, .members-select');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-5px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
    
    // Effet de validation au submit
    const form = document.querySelector('form');
    const submitBtn = document.querySelector('.submit-btn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            // Animation du bouton
            submitBtn.innerHTML = '💾 SAUVEGARDE...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.8';
            
            // Petite animation avant la soumission réelle
            setTimeout(() => {
                submitBtn.innerHTML = '💾 MIS À JOUR !';
                submitBtn.style.background = 'linear-gradient(45deg, var(--success-green), var(--fire-yellow))';
            }, 100);
        });
    }
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.edit-container').style.opacity = '1';
        }, 100);
    });
</script>
{% endblock %}", "back/team/edit.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\team\\edit.html.twig");
    }
}
