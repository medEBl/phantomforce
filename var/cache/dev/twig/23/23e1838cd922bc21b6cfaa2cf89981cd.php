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

/* team/new.html.twig */
class __TwigTemplate_9e43c568b77bba33b469c31edb53f2c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/new.html.twig"));

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

        yield "⚔️ BLOOD ARENA - Nouvelle Équipe";
        
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
    
    .creation-container {
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
    
    /* Styles pour la sélection multiple améliorée */
    .members-select {
        min-height: 200px;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
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
    
    .members-select option:checked::before {
        content: '✓ ';
        color: var(--fire-yellow);
    }
    
    .members-select option:checked:hover {
        background: linear-gradient(45deg, var(--blood-orange), var(--fire-yellow));
    }
    
    .members-select option:disabled {
        opacity: 0.5;
        font-style: italic;
    }
    
    .members-select option:first-child {
        color: var(--text-muted);
        font-style: italic;
    }
    
    .members-select:focus {
        outline: none;
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
    }
    
    .members-select option:active,
    .members-select option:focus {
        background: var(--blood-red);
    }
    
    /* Sélecteur de membres avec tags */
    .members-tag-container {
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        padding: 0.8rem;
        min-height: 120px;
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .members-tag-container:focus-within {
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
    }
    
    .member-tag {
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        border-radius: 20px;
        padding: 0.4rem 1rem 0.4rem 1.2rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: white;
        box-shadow: 0 2px 8px rgba(255, 0, 60, 0.3);
        animation: tagAppear 0.3s ease;
    }
    
    @keyframes tagAppear {
        from { transform: scale(0); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    
    .member-tag .member-role {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        padding: 0.2rem 0.6rem;
        font-size: 0.8rem;
        text-transform: uppercase;
    }
    
    .member-tag .remove-tag {
        background: none;
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        padding: 0 0.2rem;
        line-height: 1;
        opacity: 0.7;
        transition: all 0.2s ease;
    }
    
    .member-tag .remove-tag:hover {
        opacity: 1;
        transform: scale(1.2);
    }
    
    .members-search {
        flex: 1;
        min-width: 200px;
        background: none;
        border: none;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        padding: 0.5rem;
    }
    
    .members-search:focus {
        outline: none;
    }
    
    .members-search::placeholder {
        color: var(--text-muted);
        font-style: italic;
    }
    
    .members-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(34, 34, 34, 0.98);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        margin-top: 0.5rem;
        max-height: 300px;
        overflow-y: auto;
        z-index: 1000;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        display: none;
    }
    
    .members-dropdown.active {
        display: block;
        animation: dropdownFade 0.3s ease;
    }
    
    @keyframes dropdownFade {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .member-item {
        padding: 1rem 1.5rem;
        cursor: pointer;
        transition: all 0.2s ease;
        border-bottom: 1px solid rgba(255, 102, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .member-item:hover {
        background: rgba(255, 102, 0, 0.2);
        transform: translateX(5px);
    }
    
    .member-item.selected {
        background: rgba(255, 0, 60, 0.3);
        border-left: 4px solid var(--fire-yellow);
    }
    
    .member-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        text-transform: uppercase;
    }
    
    .member-info {
        flex: 1;
    }
    
    .member-name {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--fire-yellow);
    }
    
    .member-details {
        display: flex;
        gap: 1rem;
        font-size: 0.9rem;
        color: var(--text-muted);
    }
    
    .member-rank {
        color: var(--blood-orange);
    }
    
    .member-game {
        color: var(--neon-blue);
    }
    
    .no-members {
        padding: 2rem;
        text-align: center;
        color: var(--text-muted);
        font-style: italic;
    }
    
    /* Style pour le compteur de membres sélectionnés */
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
    
    .members-stats span {
        color: var(--fire-yellow);
        font-weight: bold;
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
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.6);
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
        box-shadow: 0 0 50px rgba(255, 0, 60, 0.9);
        background: linear-gradient(45deg, var(--blood-orange), var(--blood-red));
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
    
    /* Styles pour les erreurs de validation */
    .form-error {
        color: var(--blood-red);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 8px;
        border-left: 3px solid var(--blood-red);
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    /* Style pour les champs avec erreur */
    .form-input.error,
    .form-select.error {
        border-color: var(--blood-red) !important;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.3) !important;
        background: rgba(255, 0, 60, 0.05) !important;
    }
    
    /* Style pour les messages d'erreur globaux */
    .form-global-error {
        background: rgba(255, 0, 60, 0.1);
        border: 2px solid var(--blood-red);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--fire-yellow);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
    }
    
    .form-global-error ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    
    .form-global-error li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }
    
    .form-global-error li::before {
        content: '❌';
        position: absolute;
        left: 0;
        top: 0;
    }
    
    @media (max-width: 768px) {
        .creation-container {
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
        
        .submit-btn, .back-btn {
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

    // line 814
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

        // line 815
        yield "<div class=\"creation-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 819
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 820
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 821
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 821, $this->source); })())));
            // line 822
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 823
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 824
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 825
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 826
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 826, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 827, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 828
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 828, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 830
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 830, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 830, $this->source); })()), [], "array", false, false, false, 830), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 833
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">FORGER UNE LÉGENDE</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            CRÉEZ VOTRE ÉQUIPE POUR DOMINER L'ARÈNE
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        ";
        // line 845
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 845, $this->source); })()), 'form_start');
        yield "
        
        ";
        // line 848
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 848, $this->source); })()), "vars", [], "any", false, false, false, 848), "errors", [], "any", false, false, false, 848)) > 0)) {
            // line 849
            yield "        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            ";
            // line 851
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 851, $this->source); })()), 'errors');
            yield "
        </div>
        ";
        }
        // line 854
        yield "        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>⚡ NOM DE L'ÉQUIPE</span>
            </label>
            ";
        // line 859
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 859, $this->source); })()), "name", [], "any", false, false, false, 859), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "EX: BLOOD WARRIORS", "maxlength" => 50]]);
        // line 865
        yield "
            <div class=\"input-icon\">🏆</div>
            
            ";
        // line 869
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 869, $this->source); })()), "name", [], "any", false, false, false, 869), 'errors', ["attr" => ["class" => "form-error"]]);
        // line 871
        yield "
            
            <div class=\"character-counter\" id=\"nameCounter\">0/50</div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU PRINCIPAL</span>
            </label>
            ";
        // line 880
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 880, $this->source); })()), "game", [], "any", false, false, false, 880), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN JEU"]]);
        // line 885
        yield "
            <div class=\"input-icon\">🕹️</div>
            
            ";
        // line 889
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 889, $this->source); })()), "game", [], "any", false, false, false, 889), 'errors', ["attr" => ["class" => "form-error"]]);
        // line 891
        yield "
            
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
        // line 934
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 934, $this->source); })()), "creation_date", [], "any", false, false, false, 934), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "JJ/MM/AAAA"]]);
        // line 939
        yield "
            <div class=\"input-icon\">📅</div>
            
            ";
        // line 943
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 943, $this->source); })()), "creation_date", [], "any", false, false, false, 943), 'errors', ["attr" => ["class" => "form-error"]]);
        // line 945
        yield "
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👑 COACH DE L'ÉQUIPE</span>
            </label>
            ";
        // line 952
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 952, $this->source); })()), "coach", [], "any", false, false, false, 952), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Sélectionnez un coach"]]);
        // line 957
        yield "
            <div class=\"input-icon\">👑</div>
            
            ";
        // line 961
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 961, $this->source); })()), "coach", [], "any", false, false, false, 961), 'errors', ["attr" => ["class" => "form-error"]]);
        // line 963
        yield "
        </div>
        
        <!-- SECTION MEMBRES AMÉLIORÉE -->
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👥 MEMBRES DE L'ÉQUIPE</span>
                <span class=\"selected-counter\" id=\"selectedCount\">0 sélectionné(s)</span>
            </label>
            
            ";
        // line 973
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 973, $this->source); })()), "members", [], "any", false, false, false, 973), 'widget', ["attr" => ["class" => "members-select", "size" => 8, "multiple" => "multiple", "data-placeholder" => "Sélectionnez les membres"]]);
        // line 980
        yield "
            
            <div class=\"members-stats\">
                <div>
                    <span id=\"totalMembers\">";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 984, $this->source); })()), "members", [], "any", false, false, false, 984), "vars", [], "any", false, false, false, 984), "choices", [], "any", false, false, false, 984)), "html", null, true);
        yield "</span> agents disponibles
                </div>
                <div>
                    <span>💡</span> Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>⌘</kbd> (Mac) pour sélection multiple
                </div>
            </div>
            
            <div class=\"input-icon\">👥</div>
            
            ";
        // line 994
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 994, $this->source); })()), "members", [], "any", false, false, false, 994), 'errors', ["attr" => ["class" => "form-error"]]);
        // line 996
        yield "
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                ⚔️ CRÉER L'ÉQUIPE
            </button>
            <a href=\"";
        // line 1003
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        yield "\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        ";
        // line 1008
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1008, $this->source); })()), 'form_end');
        yield "
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEIL :</strong> Choisissez un nom mémorable et un jeu où votre équipe excelle !</p>
    </div>
</div>

<script>
    // Gestion du compteur de caractères pour le nom
    const nameInput = document.querySelector('input[name*=\"name\"]');
    const nameCounter = document.getElementById('nameCounter');
    
    if (nameInput && nameCounter) {
        nameInput.addEventListener('input', function() {
            const length = this.value.length;
            nameCounter.textContent = `\${length}/50`;
            
            nameCounter.classList.remove('warning', 'danger');
            if (length > 40) {
                nameCounter.classList.add('warning');
            }
            if (length >= 50) {
                nameCounter.classList.add('danger');
            }
        });
        nameInput.dispatchEvent(new Event('input'));
    }
    
    // Gestion des suggestions de jeux
    const gameOptions = document.querySelectorAll('.game-option');
    const gameSelect = document.querySelector('select[name*=\"game\"]');
    
    gameOptions.forEach(option => {
        option.addEventListener('click', function() {
            gameOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            
            if (gameSelect) {
                const gameValue = this.getAttribute('data-game');
                gameSelect.value = gameValue;
                gameSelect.dispatchEvent(new Event('change'));
            }
        });
    });
    
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
        updateSelectedCount(); // Initialisation
        
        // Amélioration visuelle des options sélectionnées
        membersSelect.addEventListener('mousedown', function(e) {
            const option = e.target;
            if (option.tagName === 'OPTION') {
                // Permettre la sélection multiple sans Ctrl (optionnel)
                // e.ctrlKey = true;
            }
        });
    }
    
    // Animation des inputs au focus
    const formInputs = document.querySelectorAll('.form-input, .form-select, .members-select');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
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
            const selectedMembers = membersSelect ? membersSelect.selectedOptions.length : 0;
            
            submitBtn.innerHTML = '⚔️ CRÉATION EN COURS...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.8';
            
            setTimeout(() => {
                submitBtn.innerHTML = '⚔️ ÉQUIPE CRÉÉE !';
                submitBtn.style.background = 'linear-gradient(45deg, var(--success-green), var(--fire-yellow))';
            }, 100);
        });
    }
    
    // Date picker amélioré - VERSION CORRIGÉE
const dateInput = document.querySelector('input[name*=\"creation_date\"]');
if (dateInput) {
    // Initialiser le type et la valeur correctement
    if (dateInput.type === 'text') {
        // Convertir la date existante si présente
        if (dateInput.value) {
            try {
                // Essayer de parser la date existante
                const date = new Date(dateInput.value);
                if (!isNaN(date.getTime())) {
                    // Formater pour l'affichage
                    const day = date.getDate().toString().padStart(2, '0');
                    const month = (date.getMonth() + 1).toString().padStart(2, '0');
                    const year = date.getFullYear();
                    dateInput.value = `\${day}/\${month}/\${year}`;
                }
            } catch (e) {
                console.log('Date invalide');
            }
        }
    }

    // Au focus : changer le type en date pour afficher le calendrier
    dateInput.addEventListener('focus', function() {
        // Sauvegarder la valeur actuelle
        const currentValue = this.value;
        
        // Changer le type
        if (this.type === 'text') {
            this.type = 'date';
            
            // Restaurer la valeur si elle existe
            if (currentValue) {
                try {
                    // Convertir JJ/MM/AAAA en AAAA-MM-JJ
                    const parts = currentValue.split('/');
                    if (parts.length === 3) {
                        this.value = `\${parts[2]}-\${parts[1]}-\${parts[0]}`;
                    }
                } catch (e) {
                    console.log('Conversion impossible');
                }
            }
        }
    });
    
    // À la perte de focus : convertir en format JJ/MM/AAAA
    dateInput.addEventListener('blur', function() {
        if (this.value && this.type === 'date') {
            // Garder la valeur sélectionnée
            const selectedDate = this.value;
            if (selectedDate) {
                // Changer le type avant de modifier la valeur
                this.type = 'text';
                // Formater la date
                const [year, month, day] = selectedDate.split('-');
                if (year && month && day) {
                    this.value = `\${day}/\${month}/\${year}`;
                }
            }
        } else if (!this.value && this.type === 'date') {
            // Si aucune date n'est sélectionnée, revenir au type text
            this.type = 'text';
            this.value = '';
        }
    });
    
    // Empêcher la perte de la date lors du clic sur le calendrier
    dateInput.addEventListener('mousedown', function(e) {
        // Ne pas changer le type si on clique sur le calendrier
        if (this.type === 'date') {
            e.stopPropagation();
        }
    });
}
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.creation-container').style.opacity = '1';
        }, 100);
        
        // Mettre en évidence les champs avec erreurs
        const errorElements = document.querySelectorAll('.form-error');
        
        errorElements.forEach(errorElement => {
            const formGroup = errorElement.closest('.form-group');
            if (formGroup) {
                const inputElement = formGroup.querySelector('.form-input, .form-select, .members-select');
                if (inputElement && errorElement.textContent.trim() !== '') {
                    inputElement.classList.add('error');
                    
                    inputElement.addEventListener('input', function() {
                        if (errorElement.textContent.trim() !== '') {
                            errorElement.textContent = '';
                            errorElement.style.display = 'none';
                            this.classList.remove('error');
                        }
                    });
                }
            }
        });
        
        // Pour les erreurs globales
        const globalError = document.querySelector('.form-global-error');
        if (globalError) {
            setTimeout(() => {
                globalError.style.opacity = '0';
                globalError.style.transition = 'opacity 1s';
                setTimeout(() => globalError.style.display = 'none', 1000);
            }, 10000);
        }
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
        return "team/new.html.twig";
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
        return array (  1178 => 1008,  1170 => 1003,  1161 => 996,  1158 => 994,  1146 => 984,  1140 => 980,  1138 => 973,  1126 => 963,  1123 => 961,  1118 => 957,  1116 => 952,  1107 => 945,  1104 => 943,  1099 => 939,  1097 => 934,  1052 => 891,  1049 => 889,  1044 => 885,  1042 => 880,  1031 => 871,  1028 => 869,  1023 => 865,  1021 => 859,  1014 => 854,  1008 => 851,  1004 => 849,  1001 => 848,  996 => 845,  982 => 833,  973 => 830,  968 => 828,  964 => 827,  960 => 826,  957 => 825,  954 => 824,  951 => 823,  948 => 822,  945 => 821,  940 => 820,  938 => 819,  932 => 815,  919 => 814,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}⚔️ BLOOD ARENA - Nouvelle Équipe{% endblock %}

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
    
    .creation-container {
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
    
    /* Styles pour la sélection multiple améliorée */
    .members-select {
        min-height: 200px;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        transition: all 0.3s ease;
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
    
    .members-select option:checked::before {
        content: '✓ ';
        color: var(--fire-yellow);
    }
    
    .members-select option:checked:hover {
        background: linear-gradient(45deg, var(--blood-orange), var(--fire-yellow));
    }
    
    .members-select option:disabled {
        opacity: 0.5;
        font-style: italic;
    }
    
    .members-select option:first-child {
        color: var(--text-muted);
        font-style: italic;
    }
    
    .members-select:focus {
        outline: none;
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
    }
    
    .members-select option:active,
    .members-select option:focus {
        background: var(--blood-red);
    }
    
    /* Sélecteur de membres avec tags */
    .members-tag-container {
        background: rgba(0, 0, 0, 0.8);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        padding: 0.8rem;
        min-height: 120px;
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .members-tag-container:focus-within {
        border-color: var(--fire-yellow);
        box-shadow: 0 0 25px rgba(255, 204, 0, 0.3);
    }
    
    .member-tag {
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        border-radius: 20px;
        padding: 0.4rem 1rem 0.4rem 1.2rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        color: white;
        box-shadow: 0 2px 8px rgba(255, 0, 60, 0.3);
        animation: tagAppear 0.3s ease;
    }
    
    @keyframes tagAppear {
        from { transform: scale(0); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    
    .member-tag .member-role {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        padding: 0.2rem 0.6rem;
        font-size: 0.8rem;
        text-transform: uppercase;
    }
    
    .member-tag .remove-tag {
        background: none;
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        padding: 0 0.2rem;
        line-height: 1;
        opacity: 0.7;
        transition: all 0.2s ease;
    }
    
    .member-tag .remove-tag:hover {
        opacity: 1;
        transform: scale(1.2);
    }
    
    .members-search {
        flex: 1;
        min-width: 200px;
        background: none;
        border: none;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        padding: 0.5rem;
    }
    
    .members-search:focus {
        outline: none;
    }
    
    .members-search::placeholder {
        color: var(--text-muted);
        font-style: italic;
    }
    
    .members-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(34, 34, 34, 0.98);
        border: 2px solid var(--blood-orange);
        border-radius: 12px;
        margin-top: 0.5rem;
        max-height: 300px;
        overflow-y: auto;
        z-index: 1000;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        display: none;
    }
    
    .members-dropdown.active {
        display: block;
        animation: dropdownFade 0.3s ease;
    }
    
    @keyframes dropdownFade {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .member-item {
        padding: 1rem 1.5rem;
        cursor: pointer;
        transition: all 0.2s ease;
        border-bottom: 1px solid rgba(255, 102, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    
    .member-item:hover {
        background: rgba(255, 102, 0, 0.2);
        transform: translateX(5px);
    }
    
    .member-item.selected {
        background: rgba(255, 0, 60, 0.3);
        border-left: 4px solid var(--fire-yellow);
    }
    
    .member-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        text-transform: uppercase;
    }
    
    .member-info {
        flex: 1;
    }
    
    .member-name {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--fire-yellow);
    }
    
    .member-details {
        display: flex;
        gap: 1rem;
        font-size: 0.9rem;
        color: var(--text-muted);
    }
    
    .member-rank {
        color: var(--blood-orange);
    }
    
    .member-game {
        color: var(--neon-blue);
    }
    
    .no-members {
        padding: 2rem;
        text-align: center;
        color: var(--text-muted);
        font-style: italic;
    }
    
    /* Style pour le compteur de membres sélectionnés */
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
    
    .members-stats span {
        color: var(--fire-yellow);
        font-weight: bold;
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
        background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
        border: none;
        padding: 1.2rem 3rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 30px rgba(255, 0, 60, 0.6);
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
        box-shadow: 0 0 50px rgba(255, 0, 60, 0.9);
        background: linear-gradient(45deg, var(--blood-orange), var(--blood-red));
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
    
    /* Styles pour les erreurs de validation */
    .form-error {
        color: var(--blood-red);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 8px;
        border-left: 3px solid var(--blood-red);
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    /* Style pour les champs avec erreur */
    .form-input.error,
    .form-select.error {
        border-color: var(--blood-red) !important;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.3) !important;
        background: rgba(255, 0, 60, 0.05) !important;
    }
    
    /* Style pour les messages d'erreur globaux */
    .form-global-error {
        background: rgba(255, 0, 60, 0.1);
        border: 2px solid var(--blood-red);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--fire-yellow);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
    }
    
    .form-global-error ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    
    .form-global-error li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }
    
    .form-global-error li::before {
        content: '❌';
        position: absolute;
        left: 0;
        top: 0;
    }
    
    @media (max-width: 768px) {
        .creation-container {
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
        
        .submit-btn, .back-btn {
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
<div class=\"creation-container\">
    
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
        <h1 class=\"main-title\">FORGER UNE LÉGENDE</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            CRÉEZ VOTRE ÉQUIPE POUR DOMINER L'ARÈNE
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        {{ form_start(form) }}
        
        {# Afficher les erreurs globales du formulaire #}
        {% if form.vars.errors|length > 0 %}
        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            {{ form_errors(form) }}
        </div>
        {% endif %}
        
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
            
            {# Afficher les erreurs de validation pour le champ 'name' #}
            {{ form_errors(form.name, {
                'attr': {'class': 'form-error'}
            }) }}
            
            <div class=\"character-counter\" id=\"nameCounter\">0/50</div>
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
            
            {# Afficher les erreurs de validation pour le champ 'game' #}
            {{ form_errors(form.game, {
                'attr': {'class': 'form-error'}
            }) }}
            
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
            
            {# Afficher les erreurs de validation pour le champ 'creation_date' #}
            {{ form_errors(form.creation_date, {
                'attr': {'class': 'form-error'}
            }) }}
        </div>
        
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
            
            {# Afficher les erreurs de validation pour le champ 'coach' #}
            {{ form_errors(form.coach, {
                'attr': {'class': 'form-error'}
            }) }}
        </div>
        
        <!-- SECTION MEMBRES AMÉLIORÉE -->
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>👥 MEMBRES DE L'ÉQUIPE</span>
                <span class=\"selected-counter\" id=\"selectedCount\">0 sélectionné(s)</span>
            </label>
            
            {{ form_widget(form.members, {
                'attr': {
                    'class': 'members-select',
                    'size': 8,
                    'multiple': 'multiple',
                    'data-placeholder': 'Sélectionnez les membres'
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
            
            {# Afficher les erreurs de validation pour le champ 'members' #}
            {{ form_errors(form.members, {
                'attr': {'class': 'form-error'}
            }) }}
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                ⚔️ CRÉER L'ÉQUIPE
            </button>
            <a href=\"{{ path('app_team_index') }}\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        {{ form_end(form) }}
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEIL :</strong> Choisissez un nom mémorable et un jeu où votre équipe excelle !</p>
    </div>
</div>

<script>
    // Gestion du compteur de caractères pour le nom
    const nameInput = document.querySelector('input[name*=\"name\"]');
    const nameCounter = document.getElementById('nameCounter');
    
    if (nameInput && nameCounter) {
        nameInput.addEventListener('input', function() {
            const length = this.value.length;
            nameCounter.textContent = `\${length}/50`;
            
            nameCounter.classList.remove('warning', 'danger');
            if (length > 40) {
                nameCounter.classList.add('warning');
            }
            if (length >= 50) {
                nameCounter.classList.add('danger');
            }
        });
        nameInput.dispatchEvent(new Event('input'));
    }
    
    // Gestion des suggestions de jeux
    const gameOptions = document.querySelectorAll('.game-option');
    const gameSelect = document.querySelector('select[name*=\"game\"]');
    
    gameOptions.forEach(option => {
        option.addEventListener('click', function() {
            gameOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            
            if (gameSelect) {
                const gameValue = this.getAttribute('data-game');
                gameSelect.value = gameValue;
                gameSelect.dispatchEvent(new Event('change'));
            }
        });
    });
    
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
        updateSelectedCount(); // Initialisation
        
        // Amélioration visuelle des options sélectionnées
        membersSelect.addEventListener('mousedown', function(e) {
            const option = e.target;
            if (option.tagName === 'OPTION') {
                // Permettre la sélection multiple sans Ctrl (optionnel)
                // e.ctrlKey = true;
            }
        });
    }
    
    // Animation des inputs au focus
    const formInputs = document.querySelectorAll('.form-input, .form-select, .members-select');
    
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
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
            const selectedMembers = membersSelect ? membersSelect.selectedOptions.length : 0;
            
            submitBtn.innerHTML = '⚔️ CRÉATION EN COURS...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.8';
            
            setTimeout(() => {
                submitBtn.innerHTML = '⚔️ ÉQUIPE CRÉÉE !';
                submitBtn.style.background = 'linear-gradient(45deg, var(--success-green), var(--fire-yellow))';
            }, 100);
        });
    }
    
    // Date picker amélioré - VERSION CORRIGÉE
const dateInput = document.querySelector('input[name*=\"creation_date\"]');
if (dateInput) {
    // Initialiser le type et la valeur correctement
    if (dateInput.type === 'text') {
        // Convertir la date existante si présente
        if (dateInput.value) {
            try {
                // Essayer de parser la date existante
                const date = new Date(dateInput.value);
                if (!isNaN(date.getTime())) {
                    // Formater pour l'affichage
                    const day = date.getDate().toString().padStart(2, '0');
                    const month = (date.getMonth() + 1).toString().padStart(2, '0');
                    const year = date.getFullYear();
                    dateInput.value = `\${day}/\${month}/\${year}`;
                }
            } catch (e) {
                console.log('Date invalide');
            }
        }
    }

    // Au focus : changer le type en date pour afficher le calendrier
    dateInput.addEventListener('focus', function() {
        // Sauvegarder la valeur actuelle
        const currentValue = this.value;
        
        // Changer le type
        if (this.type === 'text') {
            this.type = 'date';
            
            // Restaurer la valeur si elle existe
            if (currentValue) {
                try {
                    // Convertir JJ/MM/AAAA en AAAA-MM-JJ
                    const parts = currentValue.split('/');
                    if (parts.length === 3) {
                        this.value = `\${parts[2]}-\${parts[1]}-\${parts[0]}`;
                    }
                } catch (e) {
                    console.log('Conversion impossible');
                }
            }
        }
    });
    
    // À la perte de focus : convertir en format JJ/MM/AAAA
    dateInput.addEventListener('blur', function() {
        if (this.value && this.type === 'date') {
            // Garder la valeur sélectionnée
            const selectedDate = this.value;
            if (selectedDate) {
                // Changer le type avant de modifier la valeur
                this.type = 'text';
                // Formater la date
                const [year, month, day] = selectedDate.split('-');
                if (year && month && day) {
                    this.value = `\${day}/\${month}/\${year}`;
                }
            }
        } else if (!this.value && this.type === 'date') {
            // Si aucune date n'est sélectionnée, revenir au type text
            this.type = 'text';
            this.value = '';
        }
    });
    
    // Empêcher la perte de la date lors du clic sur le calendrier
    dateInput.addEventListener('mousedown', function(e) {
        // Ne pas changer le type si on clique sur le calendrier
        if (this.type === 'date') {
            e.stopPropagation();
        }
    });
}
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.creation-container').style.opacity = '1';
        }, 100);
        
        // Mettre en évidence les champs avec erreurs
        const errorElements = document.querySelectorAll('.form-error');
        
        errorElements.forEach(errorElement => {
            const formGroup = errorElement.closest('.form-group');
            if (formGroup) {
                const inputElement = formGroup.querySelector('.form-input, .form-select, .members-select');
                if (inputElement && errorElement.textContent.trim() !== '') {
                    inputElement.classList.add('error');
                    
                    inputElement.addEventListener('input', function() {
                        if (errorElement.textContent.trim() !== '') {
                            errorElement.textContent = '';
                            errorElement.style.display = 'none';
                            this.classList.remove('error');
                        }
                    });
                }
            }
        });
        
        // Pour les erreurs globales
        const globalError = document.querySelector('.form-global-error');
        if (globalError) {
            setTimeout(() => {
                globalError.style.opacity = '0';
                globalError.style.transition = 'opacity 1s';
                setTimeout(() => globalError.style.display = 'none', 1000);
            }, 10000);
        }
    });
</script>
{% endblock %}", "team/new.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\team\\new.html.twig");
    }
}
