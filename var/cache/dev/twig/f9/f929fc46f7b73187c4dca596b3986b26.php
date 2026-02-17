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

        yield "⚔️ ARENA - Équipes E-sport";
        
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
        --team-win: #00ff88;
        --team-loss: #ff335c;
        --match-pending: #ffcc00;
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
    /* Styles pour les modales - DESIGN GAMING */
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
            animation: slideInModal 0.3s ease;
        }

        @keyframes slideInModal {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal-content::before {
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
            filter: blur(15px);
            animation: borderGlow 4s linear infinite;
            background-size: 400% 400%;
            opacity: 0.5;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(255, 0, 0, 0.3);
        }

        .modal-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            color: var(--fire-red);
            text-shadow: 0 0 10px rgba(255, 51, 0, 0.5);
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            color: var(--blood-red);
            font-size: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            line-height: 1;
            padding: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-modal:hover {
            transform: scale(1.2);
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
            color: var(--fire-red);
        }

        .modal-body {
            margin-bottom: 2rem;
            color: #cc9999;
        }

        .modal-body p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: var(--fire-red);
            font-family: 'Orbitron', sans-serif;
        }

        .modal-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .modal-option {
            background: rgba(0, 0, 0, 0.5);
            border: 2px solid rgba(255, 0, 0, 0.3);
            border-radius: 10px;
            padding: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .modal-option::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: 0.5s;
        }

        .modal-option:hover::before {
            left: 100%;
        }

        .modal-option:hover {
            border-color: var(--blood-red);
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(255, 0, 0, 0.3);
            background: rgba(255, 0, 0, 0.1);
        }

        .modal-option.selected {
            border-color: var(--fire-red);
            background: rgba(255, 204, 0, 0.15);
            box-shadow: 0 0 20px rgba(255, 204, 0, 0.3);
            transform: translateY(-3px);
        }

        .modal-option small {
            display: block;
            color: #cc9999;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        .modal-option.selected small {
            color: var(--fire-yellow);
        }

        .modal-option .option-icon {
            font-size: 1.5rem;
            margin-right: 0.8rem;
            display: inline-block;
        }

        .modal-option .option-title {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 2px solid rgba(255, 0, 0, 0.3);
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
            font-size: 0.9rem;
        }

        .modal-btn.confirm {
            background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
            color: white;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.4);
        }

        .modal-btn.cancel {
            background: linear-gradient(45deg, #333333, #666666);
            color: white;
        }

        .modal-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(255, 0, 0, 0.4);
        }

        .modal-btn.confirm:hover {
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.6);
        }

        .modal-btn.cancel:hover {
            background: linear-gradient(45deg, #444444, #777777);
            box-shadow: 0 5px 20px rgba(255, 255, 255, 0.1);
        }

        /* Style pour les checkbox dans la modale */
        .modal-body label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #cc9999;
            margin: 0.5rem 0;
            cursor: pointer;
        }

        .modal-body input[type=\"checkbox\"] {
            width: 18px;
            height: 18px;
            accent-color: var(--blood-red);
            cursor: pointer;
        }

        #selectedCount {
            background: rgba(0, 255, 255, 0.1);
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid var(--electric-blue);
            color: var(--electric-blue);
            font-family: 'Orbitron', sans-serif;
            margin-top: 1rem;
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
    
    .map-btn {
        background: linear-gradient(45deg, #0066cc, #003399) !important;
    }
    
    .map-btn:hover {
        background: linear-gradient(45deg, #003399, #0066cc) !important;
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
    
    .teams-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
        position: relative;
    }
    
    .team-card {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.8rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        min-height: 500px;
        display: flex;
        flex-direction: column;
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
    
    .team-header {
        text-align: center;
        margin-bottom: 1.5rem;
        flex-shrink: 0;
        position: relative;
    }
    
    .team-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .team-game {
        color: var(--fire-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .team-stats {
        display: flex;
        justify-content: space-around;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-value {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 900;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 51, 0, 0.7);
    }
    
    .stat-label {
        color: #cc9999;
        font-size: 0.8rem;
        text-transform: uppercase;
    }
    
    .team-details {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
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
    
    .member-badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-family: 'Orbitron', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: rgba(255, 0, 0, 0.15);
        color: var(--blood-red);
        border: 1px solid var(--blood-red);
        margin-left: 0.5rem;
    }
    
    .member-tooltip {
        cursor: help;
        border-bottom: 1px dotted var(--fire-red);
    }
    
    /* Styles pour la section des matchs */
    .matches-section {
        margin: 1rem 0;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        border-left: 3px solid var(--blood-red);
        flex-grow: 1;
        overflow: hidden;
    }
    
    .matches-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        color: var(--fire-red);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .matches-list {
        max-height: 200px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--blood-red) rgba(0, 0, 0, 0.3);
        padding-right: 5px;
    }
    
    .matches-list::-webkit-scrollbar {
        width: 6px;
    }
    
    .matches-list::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.3);
        border-radius: 3px;
    }
    
    .matches-list::-webkit-scrollbar-thumb {
        background: var(--blood-red);
        border-radius: 3px;
    }
    
    .match-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.6rem;
        margin-bottom: 0.5rem;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }
    
    .match-item:hover {
        background: rgba(255, 0, 0, 0.2);
        transform: translateX(3px);
    }
    
    .match-opponent {
        color: #cc9999;
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .match-result {
        font-weight: 700;
        padding: 0.2rem 0.8rem;
        border-radius: 12px;
        font-size: 0.8rem;
        margin-left: 0.5rem;
        min-width: 45px;
        text-align: center;
    }
    
    .match-win {
        background: rgba(0, 255, 136, 0.2);
        color: var(--team-win);
        border: 1px solid var(--team-win);
    }
    
    .match-loss {
        background: rgba(255, 51, 92, 0.2);
        color: var(--team-loss);
        border: 1px solid var(--team-loss);
    }
    
    .match-pending {
        background: rgba(255, 204, 0, 0.2);
        color: var(--match-pending);
        border: 1px solid var(--match-pending);
    }
    
    .match-score {
        font-family: 'Orbitron', monospace;
        color: white;
        margin-right: 0.5rem;
        min-width: 50px;
        text-align: center;
    }
    
    .match-status-icon {
        margin-right: 0.3rem;
    }
    
    .no-matches {
        color: #cc9999;
        font-style: italic;
        font-size: 0.9rem;
        text-align: center;
        padding: 1rem;
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
    
    /* Team highlight */
    .team-card.highlighted {
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
        
        .add-team-btn {
            min-width: 250px;
            font-size: 1rem;
        }
        
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
        
        .team-stats {
            flex-direction: column;
            gap: 1rem;
        }
        
        .team-card {
            min-height: 550px;
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
        
        .team-card {
            padding: 1.5rem;
        }
        
        .team-name {
            font-size: 1.5rem;
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

    // line 1335
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

        // line 1336
        yield "<div class=\"gaming-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 1340
        $context["icons"] = ["⚔️", "🔥", "💀", "👑", "🛡️", "🎯", "🏆", "💥", "⚡", "⭐"];
        // line 1341
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 1342
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1342, $this->source); })())));
            // line 1343
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 1344
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 1345
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 1346
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 1347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 1347, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 1348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 1348, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 1349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 1349, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 1351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 1351, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 1351, $this->source); })()), [], "array", false, false, false, 1351), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1354
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
            <span>Équipes totales:</span>
            <span class=\"stats-value\" id=\"statTotal\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Avec coach:</span>
            <span class=\"stats-value\" id=\"statWithCoach\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Sans coach:</span>
            <span class=\"stats-value\" id=\"statWithoutCoach\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Total membres:</span>
            <span class=\"stats-value\" id=\"statMembers\">0</span>
        </div>
    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PHANTOM FORCE - ÉQUIPES</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            COMMANDEZ VOS LÉGIONS • ";
        // line 1402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1402, $this->source); })())), "html", null, true);
        yield " ÉQUIPES EN COMBAT
        </p>
        <div class=\"live-counter\" id=\"liveCounter\">⚡ ÉLITE</div>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        ";
        // line 1409
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
            // line 1410
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
            yield "\" class=\"add-team-btn\">
            ⚔️ CRÉER UNE NOUVELLE ÉQUIPE
        </a>
        <a href=\"";
            // line 1413
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
            yield "\" class=\"add-team-btn map-btn\">
            🗺️ CARTE DES ARÈNES
        </a>
        ";
        }
        // line 1417
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
            ⭐ Équipes en vedette
        </button>
        <button class=\"advanced-btn\" id=\"refreshBtn\">
            🔄 Actualiser
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
        // line 1447
        $context["games"] = [];
        // line 1448
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1448, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 1449
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1449), (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1449, $this->source); })()))) {
                // line 1450
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 1450, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1450)]);
                // line 1451
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1451), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1451), "html", null, true);
                yield "</option>
                        ";
            }
            // line 1453
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1454
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">👑 AVEC COACH :</label>
                <select id=\"coachFilter\" class=\"filter-select\">
                    <option value=\"\">Toutes</option>
                    <option value=\"with\">Avec coach</option>
                    <option value=\"without\">Sans coach</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">👥 AVEC MEMBRES :</label>
                <select id=\"membersFilter\" class=\"filter-select\">
                    <option value=\"\">Toutes</option>
                    <option value=\"with\">Avec membres</option>
                    <option value=\"without\">Sans membres</option>
                </select>
            </div>
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"teamCount\">";
        // line 1479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1479, $this->source); })())), "html", null, true);
        yield "</span> ÉQUIPES ENREGISTRÉES
        </div>
    </div>
    
    ";
        // line 1483
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1483, $this->source); })())) > 0)) {
            // line 1484
            yield "        <!-- Grille des équipes -->
        <div class=\"teams-grid\" id=\"teamsGrid\">
            ";
            // line 1486
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1486, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 1487
                yield "                ";
                // line 1488
                yield "                ";
                $context["teamMatches"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "matchesAsTeam1", [], "any", false, false, false, 1488), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "matchesAsTeam2", [], "any", false, false, false, 1488));
                // line 1489
                yield "                ";
                $context["wins"] = 0;
                // line 1490
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teamMatches"]) || array_key_exists("teamMatches", $context) ? $context["teamMatches"] : (function () { throw new RuntimeError('Variable "teamMatches" does not exist.', 1490, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                    // line 1491
                    yield "                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1491) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1491), "id", [], "any", false, false, false, 1491) == CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1491)))) {
                        // line 1492
                        yield "                        ";
                        $context["wins"] = ((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 1492, $this->source); })()) + 1);
                        // line 1493
                        yield "                    ";
                    }
                    // line 1494
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1495
                yield "                ";
                $context["losses"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teamMatches"]) || array_key_exists("teamMatches", $context) ? $context["teamMatches"] : (function () { throw new RuntimeError('Variable "teamMatches" does not exist.', 1495, $this->source); })())) - (isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 1495, $this->source); })()));
                // line 1496
                yield "                
                <div class=\"team-card\" 
                     data-id=\"";
                // line 1498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1498), "html", null, true);
                yield "\" 
                     data-name=\"";
                // line 1499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 1499)), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 1500
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1500)), "html", null, true);
                yield "\" 
                     data-coach=\"";
                // line 1501
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 1501)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\"
                     data-members=\"";
                // line 1502
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 1502)), "html", null, true);
                yield "\">
                    
                    <div class=\"team-id\">#";
                // line 1504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1504), "html", null, true);
                yield "</div>
                    
                    <div class=\"team-header\">
                        <div class=\"team-name\">";
                // line 1507
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 1507)), "html", null, true);
                yield "</div>
                        <div class=\"team-game\">";
                // line 1508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 1508), "html", null, true);
                yield "</div>
                    </div>
                    
                    <div class=\"team-stats\">
                        <div class=\"stat-item\">
                            <div class=\"stat-value\">";
                // line 1513
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teamMatches"]) || array_key_exists("teamMatches", $context) ? $context["teamMatches"] : (function () { throw new RuntimeError('Variable "teamMatches" does not exist.', 1513, $this->source); })())), "html", null, true);
                yield "</div>
                            <div class=\"stat-label\">MATCHS</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-value\">";
                // line 1517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 1517, $this->source); })()), "html", null, true);
                yield "</div>
                            <div class=\"stat-label\">VICTOIRES</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-value\">";
                // line 1521
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["losses"]) || array_key_exists("losses", $context) ? $context["losses"] : (function () { throw new RuntimeError('Variable "losses" does not exist.', 1521, $this->source); })()), "html", null, true);
                yield "</div>
                            <div class=\"stat-label\">DÉFAITES</div>
                        </div>
                    </div>
                    
                    <div class=\"team-details\">
                        <div class=\"detail-item\">
                            <strong>👑 COACH :</strong>
                            <span style=\"color: ";
                // line 1529
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 1529)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "var(--fire-red)";
                } else {
                    yield "var(--blood-red)";
                }
                yield ";\">
                                ";
                // line 1530
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 1530)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 1530), "username", [], "any", false, false, false, 1530), "html", null, true)) : ("EN ATTENTE"));
                yield "
                            </span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>👥 MEMBRES :</strong>
                            <span>
                                ";
                // line 1537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 1537)), "html", null, true);
                yield " membre(s)
                                ";
                // line 1538
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 1538)) > 0)) {
                    // line 1539
                    yield "                                    <span class=\"member-badge member-tooltip\" title=\"";
                    // line 1540
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 1540));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                        // line 1541
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 1541), "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "rank", [], "any", false, false, false, 1541), "html", null, true);
                        yield ")";
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 1541)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield ", ";
                        }
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1542
                    yield "\">
                                        👥
                                    </span>
                                ";
                }
                // line 1546
                yield "                            </span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📅 CRÉATION :</strong>
                            <span>";
                // line 1551
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 1551)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 1551), "d/m/Y"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📊 WIN RATE :</strong>
                            <span style=\"color: var(--fire-red); font-weight: bold;\">
                                ";
                // line 1557
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teamMatches"]) || array_key_exists("teamMatches", $context) ? $context["teamMatches"] : (function () { throw new RuntimeError('Variable "teamMatches" does not exist.', 1557, $this->source); })())) > 0)) {
                    // line 1558
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 1558, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teamMatches"]) || array_key_exists("teamMatches", $context) ? $context["teamMatches"] : (function () { throw new RuntimeError('Variable "teamMatches" does not exist.', 1558, $this->source); })()))) * 100), 1), "html", null, true);
                    yield "%
                                ";
                } else {
                    // line 1560
                    yield "                                    0%
                                ";
                }
                // line 1562
                yield "                            </span>
                        </div>
                    </div>
                    
                    <!-- Section des matchs -->
                    <!-- Section des matchs de l'équipe -->
<div class=\"matches-section\">
    <div class=\"matches-title\">
        <span>⚔️ DERNIERS MATCHS</span>
        <span style=\"color: var(--fire-red);\">(";
                // line 1571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "matchesAsTeam1", [], "any", false, false, false, 1571)) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "matchesAsTeam2", [], "any", false, false, false, 1571))), "html", null, true);
                yield ")</span>
    </div>
    
    <div class=\"matches-list\">
        ";
                // line 1575
                $context["allMatches"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "matchesAsTeam1", [], "any", false, false, false, 1575), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "matchesAsTeam2", [], "any", false, false, false, 1575));
                // line 1576
                yield "        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["allMatches"]) || array_key_exists("allMatches", $context) ? $context["allMatches"] : (function () { throw new RuntimeError('Variable "allMatches" does not exist.', 1576, $this->source); })())) > 0)) {
                    // line 1577
                    yield "            ";
                    // line 1578
                    yield "            ";
                    $context["sortedMatches"] = Twig\Extension\CoreExtension::sort($this->env, (isset($context["allMatches"]) || array_key_exists("allMatches", $context) ? $context["allMatches"] : (function () { throw new RuntimeError('Variable "allMatches" does not exist.', 1578, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 1578, $this->source); })()), "matchDate", [], "any", false, false, false, 1578) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 1578, $this->source); })()), "matchDate", [], "any", false, false, false, 1578)); });
                    // line 1579
                    yield "            
            ";
                    // line 1580
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["sortedMatches"]) || array_key_exists("sortedMatches", $context) ? $context["sortedMatches"] : (function () { throw new RuntimeError('Variable "sortedMatches" does not exist.', 1580, $this->source); })()), 0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                        // line 1581
                        yield "                ";
                        // line 1582
                        yield "                ";
                        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1582)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1582)))) {
                            // line 1583
                            yield "                    ";
                            // line 1584
                            yield "                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1584), "id", [], "any", false, false, false, 1584) == CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1584))) {
                                // line 1585
                                yield "                        ";
                                $context["opponent"] = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1585);
                                // line 1586
                                yield "                        ";
                                $context["teamScore"] = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1586);
                                // line 1587
                                yield "                        ";
                                $context["opponentScore"] = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1587);
                                // line 1588
                                yield "                    ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 1588), "id", [], "any", false, false, false, 1588) == CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1588))) {
                                // line 1589
                                yield "                        ";
                                $context["opponent"] = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 1589);
                                // line 1590
                                yield "                        ";
                                $context["teamScore"] = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 1590);
                                // line 1591
                                yield "                        ";
                                $context["opponentScore"] = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 1591);
                                // line 1592
                                yield "                    ";
                            } else {
                                // line 1593
                                yield "                        ";
                                // line 1594
                                yield "                        ";
                                $context["opponent"] = null;
                                // line 1595
                                yield "                        ";
                                $context["teamScore"] = "?";
                                // line 1596
                                yield "                        ";
                                $context["opponentScore"] = "?";
                                // line 1597
                                yield "                    ";
                            }
                            // line 1598
                            yield "                    
                    ";
                            // line 1600
                            yield "                    ";
                            $context["isWinner"] = ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1600)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "winnerTeam", [], "any", false, false, false, 1600), "id", [], "any", false, false, false, 1600) == CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1600)));
                            // line 1601
                            yield "                    
                    ";
                            // line 1603
                            yield "                    ";
                            $context["statusIcon"] = "";
                            // line 1604
                            yield "                    ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1604) == "ongoing")) {
                                // line 1605
                                yield "                        ";
                                $context["statusIcon"] = "🔥";
                                // line 1606
                                yield "                    ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1606) == "planned")) {
                                // line 1607
                                yield "                        ";
                                $context["statusIcon"] = "📅";
                                // line 1608
                                yield "                    ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1608) == "finished")) {
                                // line 1609
                                yield "                        ";
                                $context["statusIcon"] = "✓";
                                // line 1610
                                yield "                    ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1610) == "cancelled")) {
                                // line 1611
                                yield "                        ";
                                $context["statusIcon"] = "✗";
                                // line 1612
                                yield "                    ";
                            }
                            // line 1613
                            yield "                    
                    <div class=\"match-item\">
                        <span class=\"match-opponent\" title=\"VS ";
                            // line 1615
                            yield (((($tmp = (isset($context["opponent"]) || array_key_exists("opponent", $context) ? $context["opponent"] : (function () { throw new RuntimeError('Variable "opponent" does not exist.', 1615, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["opponent"]) || array_key_exists("opponent", $context) ? $context["opponent"] : (function () { throw new RuntimeError('Variable "opponent" does not exist.', 1615, $this->source); })()), "name", [], "any", false, false, false, 1615), "html", null, true)) : ("Équipe inconnue"));
                            yield "\">
                            <span class=\"match-status-icon\">";
                            // line 1616
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusIcon"]) || array_key_exists("statusIcon", $context) ? $context["statusIcon"] : (function () { throw new RuntimeError('Variable "statusIcon" does not exist.', 1616, $this->source); })()), "html", null, true);
                            yield "</span>
                            ";
                            // line 1617
                            if ((($tmp = (isset($context["opponent"]) || array_key_exists("opponent", $context) ? $context["opponent"] : (function () { throw new RuntimeError('Variable "opponent" does not exist.', 1617, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1618
                                yield "                                ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["opponent"]) || array_key_exists("opponent", $context) ? $context["opponent"] : (function () { throw new RuntimeError('Variable "opponent" does not exist.', 1618, $this->source); })()), "name", [], "any", false, false, false, 1618), 0, 15), "html", null, true);
                                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["opponent"]) || array_key_exists("opponent", $context) ? $context["opponent"] : (function () { throw new RuntimeError('Variable "opponent" does not exist.', 1618, $this->source); })()), "name", [], "any", false, false, false, 1618)) > 15)) ? ("...") : (""));
                                yield "
                            ";
                            } else {
                                // line 1620
                                yield "                                Équipe ?
                            ";
                            }
                            // line 1622
                            yield "                        </span>
                        <div style=\"display: flex; align-items: center;\">
                            <span class=\"match-score\">";
                            // line 1624
                            yield (((array_key_exists("teamScore", $context) &&  !(null === $context["teamScore"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["teamScore"], "html", null, true)) : ("?"));
                            yield " - ";
                            yield (((array_key_exists("opponentScore", $context) &&  !(null === $context["opponentScore"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["opponentScore"], "html", null, true)) : ("?"));
                            yield "</span>
                            ";
                            // line 1625
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 1625) == "finished")) {
                                // line 1626
                                yield "                                <span class=\"match-result ";
                                if ((($tmp = (isset($context["isWinner"]) || array_key_exists("isWinner", $context) ? $context["isWinner"] : (function () { throw new RuntimeError('Variable "isWinner" does not exist.', 1626, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "match-win";
                                } else {
                                    yield "match-loss";
                                }
                                yield "\">
                                    ";
                                // line 1627
                                if ((($tmp = (isset($context["isWinner"]) || array_key_exists("isWinner", $context) ? $context["isWinner"] : (function () { throw new RuntimeError('Variable "isWinner" does not exist.', 1627, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "V";
                                } else {
                                    yield "D";
                                }
                                // line 1628
                                yield "                                </span>
                            ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 1629
$context["match"], "status", [], "any", false, false, false, 1629) == "ongoing")) {
                                // line 1630
                                yield "                                <span class=\"match-result match-pending\">EN COURS</span>
                            ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 1631
$context["match"], "status", [], "any", false, false, false, 1631) == "planned")) {
                                // line 1632
                                yield "                                <span class=\"match-result match-pending\">À VENIR</span>
                            ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 1633
$context["match"], "status", [], "any", false, false, false, 1633) == "cancelled")) {
                                // line 1634
                                yield "                                <span class=\"match-result match-loss\">ANNULÉ</span>
                            ";
                            }
                            // line 1636
                            yield "                        </div>
                    </div>
                ";
                        } else {
                            // line 1639
                            yield "                    ";
                            // line 1640
                            yield "                    <div class=\"match-item\">
                        <span class=\"match-opponent\" style=\"color: var(--blood-red);\">
                            <span class=\"match-status-icon\">⚠️</span>
                            Match incomplet (équipe manquante)
                        </span>
                        <span class=\"match-score\">?-?</span>
                    </div>
                ";
                        }
                        // line 1648
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['match'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1649
                    yield "            
            ";
                    // line 1650
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["allMatches"]) || array_key_exists("allMatches", $context) ? $context["allMatches"] : (function () { throw new RuntimeError('Variable "allMatches" does not exist.', 1650, $this->source); })())) > 5)) {
                        // line 1651
                        yield "                <div style=\"text-align: center; margin-top: 0.8rem;\">
                    <a href=\"";
                        // line 1652
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1652)]), "html", null, true);
                        yield "\" style=\"color: var(--fire-red); text-decoration: none; font-size: 0.9rem;\">
                        Voir les ";
                        // line 1653
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["allMatches"]) || array_key_exists("allMatches", $context) ? $context["allMatches"] : (function () { throw new RuntimeError('Variable "allMatches" does not exist.', 1653, $this->source); })())), "html", null, true);
                        yield " matchs →
                    </a>
                </div>
            ";
                    }
                    // line 1657
                    yield "        ";
                } else {
                    // line 1658
                    yield "            <div class=\"no-matches\">
                <span>Aucun match enregistré pour cette équipe</span>
            </div>
        ";
                }
                // line 1662
                yield "    </div>
</div>
                    <div class=\"actions-container\">
                        <a href=\"";
                // line 1665
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1665)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails de l'équipe\">
                            👁️ ANALYSER
                        </a>
                        
                        ";
                // line 1671
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER")))) {
                    // line 1672
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1672)]), "html", null, true);
                    yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier l'équipe\">
                            ⚙️ MODIFIER
                        </a>
                        
                        <form method=\"post\" action=\"";
                    // line 1678
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1678)]), "html", null, true);
                    yield "\" 
                              onsubmit=\"return confirm('💀 Êtes-vous sûr de vouloir dissoudre cette légion ? Cette action conservera les agents mais les désassociera de l\\'équipe.');\"
                              style=\"display: inline; margin: 0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 1681
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 1681))), "html", null, true);
                    yield "\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                🗑️ DISSOUDRE
                            </button>
                        </form>
                        ";
                }
                // line 1687
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1690
            yield "        </div>
        
        <!-- Informations -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚔️ <span id=\"activeTeams\">";
            // line 1695
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1695, $this->source); })())), "html", null, true);
            yield "</span> ÉQUIPES ACTIVES • 
                <span id=\"totalMembers\">";
            // line 1696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1696, $this->source); })()), function ($__carry__, $__team__) use ($context, $macros) { $context["carry"] = $__carry__; $context["team"] = $__team__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 1696, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1696, $this->source); })()), "members", [], "any", false, false, false, 1696))); }, 0), "html", null, true);
            yield "</span> AGENTS • 
                <span id=\"totalMatches\">";
            // line 1697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 1697, $this->source); })()), function ($__carry__, $__team__) use ($context, $macros) { $context["carry"] = $__carry__; $context["team"] = $__team__; return (((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 1697, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1697, $this->source); })()), "matchesAsTeam1", [], "any", false, false, false, 1697))) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1697, $this->source); })()), "matchesAsTeam2", [], "any", false, false, false, 1697))); }, 0), "html", null, true);
            yield "</span> MATCHS •
                DERNIÈRE MISE À JOUR : ";
            // line 1698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 1703
            yield "        <!-- Message quand aucune équipe n'existe -->
        <div class=\"no-teams\">
            <h2>⚠️ ARÈNE DÉSERTE ⚠️</h2>
            <p>Aucune équipe n'a encore été créée. Forgez la première !</p>
            <a href=\"";
            // line 1707
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
            yield "\" class=\"add-team-btn\" style=\"display: inline-block; width: auto;\">
                🏆 FORGER LA PREMIÈRE ÉQUIPE
            </a>
        </div>
    ";
        }
        // line 1712
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
    const coachFilter = document.getElementById('coachFilter');
    const membersFilter = document.getElementById('membersFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
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
    const statWithCoach = document.getElementById('statWithCoach');
    const statWithoutCoach = document.getElementById('statWithoutCoach');
    const statMembers = document.getElementById('statMembers');
    
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
        
        if (type === 'alert') {
            playNotificationSound();
        }
        
        showToast(message);
    }
    
    function playNotificationSound() {
        try {
            const audio = new Audio('data:audio/wav;base64,UklGRigAAABXQVZFZm10IBIAAAABAAEAQB8AAEAfAAABAAgAZGF0YQ');
            audio.volume = 0.3;
            audio.play();
        } catch (e) {}
    }
    
    function updateNotificationBadge() {
        const unreadCount = notifications.filter(n => !n.read).length;
        notificationBadge.textContent = unreadCount;
        notificationBadge.style.display = unreadCount > 0 ? 'block' : 'none';
    }
    
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
    
    function clearNotifications() {
        notifications = [];
        updateNotificationBadge();
        renderNotifications();
        saveNotifications();
    }
    
    function saveNotifications() {
        try {
            localStorage.setItem('teamNotifications', JSON.stringify(notifications));
        } catch (e) {}
    }
    
    function loadNotifications() {
        try {
            const saved = localStorage.getItem('teamNotifications');
            if (saved) {
                notifications = JSON.parse(saved);
                updateNotificationBadge();
                renderNotifications();
            }
        } catch (e) {}
    }
    
    function updateCounter(visibleCount) {
        teamCount.textContent = visibleCount;
        if (activeTeams) {
            activeTeams.textContent = visibleCount;
        }
        
        teamCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            teamCount.style.transform = 'scale(1)';
        }, 200);
        
        updateStats();
    }
    
    function updateStats() {
        const visibleTeams = document.querySelectorAll('.team-card:not(.hidden)');
        const withCoach = document.querySelectorAll('.team-card[data-coach=\"yes\"]:not(.hidden)').length;
        const withoutCoach = document.querySelectorAll('.team-card[data-coach=\"no\"]:not(.hidden)').length;
        
        let totalMembers = 0;
        visibleTeams.forEach(team => {
            totalMembers += parseInt(team.dataset.members || 0);
        });
        
        statTotal.textContent = visibleTeams.length;
        statWithCoach.textContent = withCoach;
        statWithoutCoach.textContent = withoutCoach;
        statMembers.textContent = totalMembers;
    }
    
    function exportTeams() {
        const visibleTeams = Array.from(document.querySelectorAll('.team-card:not(.hidden)'));
        
        if (visibleTeams.length === 0) {
            showToast('Aucune équipe à exporter');
            return;
        }
        
        let exportData = 'PHANTOM FORCE - LISTE DES ÉQUIPES\\n';
        exportData += '================================\\n\\n';
        
        visibleTeams.forEach((team, index) => {
            const name = team.querySelector('.team-name').textContent;
            const game = team.querySelector('.team-game').textContent;
            const coach = team.querySelector('.detail-item:first-child span').textContent;
            const members = team.querySelector('.detail-item:nth-child(2) span').textContent;
            const date = team.querySelector('.detail-item:nth-child(3) span').textContent;
            const stats = team.querySelectorAll('.stat-value');
            const matches = stats[0].textContent;
            const wins = stats[1].textContent;
            const losses = stats[2].textContent;
            
            exportData += `\${index + 1}. \${name}\\n`;
            exportData += `   Jeu: \${game}\\n`;
            exportData += `   Coach: \${coach}\\n`;
            exportData += `   Membres: \${members}\\n`;
            exportData += `   Création: \${date}\\n`;
            exportData += `   Stats: \${matches} matchs (\${wins}V - \${losses}D)\\n`;
            exportData += '\\n';
        });
        
        exportData += `\\nTotal: \${visibleTeams.length} équipe(s)\\n`;
        exportData += `Exporté le: \${new Date().toLocaleDateString('fr-FR')}`;
        
        const blob = new Blob([exportData], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `equipes-phantom-force-\${new Date().toISOString().split('T')[0]}.txt`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        
        showToast(`Liste exportée (\${visibleTeams.length} équipes)`);
        addNotification(`Liste de \${visibleTeams.length} équipes exportée`, 'info');
    }
    
    function toggleHighlight() {
        isHighlightActive = !isHighlightActive;
        
        document.querySelectorAll('.team-card').forEach(card => {
            if (isHighlightActive) {
                // Mettre en vedette les équipes avec beaucoup de membres ou sans coach
                const members = parseInt(card.dataset.members || 0);
                const hasCoach = card.dataset.coach === 'yes';
                
                if (members >= 5 || !hasCoach) {
                    card.classList.add('highlighted');
                }
            } else {
                card.classList.remove('highlighted');
            }
        });
        
        if (isHighlightActive) {
            highlightBtn.innerHTML = '⭐ Désactiver vedettes';
            showToast('Équipes en vedette activées');
        } else {
            highlightBtn.innerHTML = '⭐ Équipes en vedette';
            showToast('Équipes en vedette désactivées');
        }
    }
    
    function toggleRefresh() {
        showToast('Page actualisée', 'success');
        location.reload();
    }
    
    function searchTeams() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentTeams.forEach(team => {
            const teamName = team.dataset.name;
            const gameName = team.dataset.game;
            
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
    
    function applyFilters() {
        let visibleTeams = [];
        
        currentTeams.forEach(team => {
            let isVisible = !team.classList.contains('filtered-out');
            
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && team.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            const coachStatus = coachFilter.value;
            if (coachStatus === 'with' && team.dataset.coach === 'no') {
                isVisible = false;
            }
            if (coachStatus === 'without' && team.dataset.coach === 'yes') {
                isVisible = false;
            }
            
            const membersCount = parseInt(team.dataset.members || 0);
            const membersStatus = membersFilter.value;
            if (membersStatus === 'with' && membersCount === 0) {
                isVisible = false;
            }
            if (membersStatus === 'without' && membersCount > 0) {
                isVisible = false;
            }
            
            if (isVisible) {
                team.classList.remove('hidden');
                visibleTeams.push(team);
            } else {
                team.classList.add('hidden');
            }
        });
        
        updateCounter(visibleTeams.length);
    }
    
    // Événements
    searchInput.addEventListener('input', searchTeams);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchTeams();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    coachFilter.addEventListener('change', applyFilters);
    membersFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        coachFilter.value = '';
        membersFilter.value = '';
        
        currentTeams.forEach(team => {
            team.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
        showToast('Filtres réinitialisés');
    });
    
    exportBtn.addEventListener('click', exportTeams);
    statsBtn.addEventListener('click', () => {
        statsOverlay.classList.toggle('active');
        if (statsOverlay.classList.contains('active')) {
            updateStats();
        }
    });
    highlightBtn.addEventListener('click', toggleHighlight);
    refreshBtn.addEventListener('click', toggleRefresh);
    
    notificationBell.addEventListener('click', () => {
        notificationsModal.classList.toggle('active');
        if (notificationsModal.classList.contains('active')) {
            notifications.forEach(n => n.read = true);
            updateNotificationBadge();
            renderNotifications();
            saveNotifications();
        }
    });
    
    document.addEventListener('click', (e) => {
        if (!notificationsModal.contains(e.target) && !notificationBell.contains(e.target)) {
            notificationsModal.classList.remove('active');
        }
        if (!statsOverlay.contains(e.target) && e.target !== statsBtn) {
            statsOverlay.classList.remove('active');
        }
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            notificationsModal.classList.remove('active');
            statsOverlay.classList.remove('active');
        }
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        loadNotifications();
        
        setTimeout(() => {
            if (notifications.length === 0) {
                addNotification('Bienvenue sur Phantom Force Équipes!', 'info');
                addNotification(`Suivez \${allTeams.length} équipes`, 'info');
            }
        }, 1000);
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
        return array (  2212 => 1712,  2204 => 1707,  2198 => 1703,  2190 => 1698,  2186 => 1697,  2182 => 1696,  2178 => 1695,  2171 => 1690,  2163 => 1687,  2154 => 1681,  2148 => 1678,  2138 => 1672,  2136 => 1671,  2127 => 1665,  2122 => 1662,  2116 => 1658,  2113 => 1657,  2106 => 1653,  2102 => 1652,  2099 => 1651,  2097 => 1650,  2094 => 1649,  2088 => 1648,  2078 => 1640,  2076 => 1639,  2071 => 1636,  2067 => 1634,  2065 => 1633,  2062 => 1632,  2060 => 1631,  2057 => 1630,  2055 => 1629,  2052 => 1628,  2046 => 1627,  2037 => 1626,  2035 => 1625,  2029 => 1624,  2025 => 1622,  2021 => 1620,  2014 => 1618,  2012 => 1617,  2008 => 1616,  2004 => 1615,  2000 => 1613,  1997 => 1612,  1994 => 1611,  1991 => 1610,  1988 => 1609,  1985 => 1608,  1982 => 1607,  1979 => 1606,  1976 => 1605,  1973 => 1604,  1970 => 1603,  1967 => 1601,  1964 => 1600,  1961 => 1598,  1958 => 1597,  1955 => 1596,  1952 => 1595,  1949 => 1594,  1947 => 1593,  1944 => 1592,  1941 => 1591,  1938 => 1590,  1935 => 1589,  1932 => 1588,  1929 => 1587,  1926 => 1586,  1923 => 1585,  1920 => 1584,  1918 => 1583,  1915 => 1582,  1913 => 1581,  1909 => 1580,  1906 => 1579,  1903 => 1578,  1901 => 1577,  1898 => 1576,  1896 => 1575,  1889 => 1571,  1878 => 1562,  1874 => 1560,  1868 => 1558,  1866 => 1557,  1857 => 1551,  1850 => 1546,  1844 => 1542,  1824 => 1541,  1807 => 1540,  1805 => 1539,  1803 => 1538,  1799 => 1537,  1789 => 1530,  1781 => 1529,  1770 => 1521,  1763 => 1517,  1756 => 1513,  1748 => 1508,  1744 => 1507,  1738 => 1504,  1733 => 1502,  1729 => 1501,  1725 => 1500,  1721 => 1499,  1717 => 1498,  1713 => 1496,  1710 => 1495,  1704 => 1494,  1701 => 1493,  1698 => 1492,  1695 => 1491,  1690 => 1490,  1687 => 1489,  1684 => 1488,  1682 => 1487,  1678 => 1486,  1674 => 1484,  1672 => 1483,  1665 => 1479,  1638 => 1454,  1632 => 1453,  1624 => 1451,  1621 => 1450,  1618 => 1449,  1613 => 1448,  1611 => 1447,  1579 => 1417,  1572 => 1413,  1565 => 1410,  1563 => 1409,  1553 => 1402,  1503 => 1354,  1494 => 1351,  1489 => 1349,  1485 => 1348,  1481 => 1347,  1478 => 1346,  1475 => 1345,  1472 => 1344,  1469 => 1343,  1466 => 1342,  1461 => 1341,  1459 => 1340,  1453 => 1336,  1440 => 1335,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}⚔️ ARENA - Équipes E-sport{% endblock %}

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
        --team-win: #00ff88;
        --team-loss: #ff335c;
        --match-pending: #ffcc00;
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
    /* Styles pour les modales - DESIGN GAMING */
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
            animation: slideInModal 0.3s ease;
        }

        @keyframes slideInModal {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .modal-content::before {
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
            filter: blur(15px);
            animation: borderGlow 4s linear infinite;
            background-size: 400% 400%;
            opacity: 0.5;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(255, 0, 0, 0.3);
        }

        .modal-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            color: var(--fire-red);
            text-shadow: 0 0 10px rgba(255, 51, 0, 0.5);
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            color: var(--blood-red);
            font-size: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            line-height: 1;
            padding: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-modal:hover {
            transform: scale(1.2);
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
            color: var(--fire-red);
        }

        .modal-body {
            margin-bottom: 2rem;
            color: #cc9999;
        }

        .modal-body p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: var(--fire-red);
            font-family: 'Orbitron', sans-serif;
        }

        .modal-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .modal-option {
            background: rgba(0, 0, 0, 0.5);
            border: 2px solid rgba(255, 0, 0, 0.3);
            border-radius: 10px;
            padding: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .modal-option::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: 0.5s;
        }

        .modal-option:hover::before {
            left: 100%;
        }

        .modal-option:hover {
            border-color: var(--blood-red);
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(255, 0, 0, 0.3);
            background: rgba(255, 0, 0, 0.1);
        }

        .modal-option.selected {
            border-color: var(--fire-red);
            background: rgba(255, 204, 0, 0.15);
            box-shadow: 0 0 20px rgba(255, 204, 0, 0.3);
            transform: translateY(-3px);
        }

        .modal-option small {
            display: block;
            color: #cc9999;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        .modal-option.selected small {
            color: var(--fire-yellow);
        }

        .modal-option .option-icon {
            font-size: 1.5rem;
            margin-right: 0.8rem;
            display: inline-block;
        }

        .modal-option .option-title {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 2px solid rgba(255, 0, 0, 0.3);
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
            font-size: 0.9rem;
        }

        .modal-btn.confirm {
            background: linear-gradient(45deg, var(--blood-red), var(--dark-red));
            color: white;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.4);
        }

        .modal-btn.cancel {
            background: linear-gradient(45deg, #333333, #666666);
            color: white;
        }

        .modal-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(255, 0, 0, 0.4);
        }

        .modal-btn.confirm:hover {
            background: linear-gradient(45deg, var(--dark-red), var(--blood-red));
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.6);
        }

        .modal-btn.cancel:hover {
            background: linear-gradient(45deg, #444444, #777777);
            box-shadow: 0 5px 20px rgba(255, 255, 255, 0.1);
        }

        /* Style pour les checkbox dans la modale */
        .modal-body label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #cc9999;
            margin: 0.5rem 0;
            cursor: pointer;
        }

        .modal-body input[type=\"checkbox\"] {
            width: 18px;
            height: 18px;
            accent-color: var(--blood-red);
            cursor: pointer;
        }

        #selectedCount {
            background: rgba(0, 255, 255, 0.1);
            padding: 0.8rem;
            border-radius: 8px;
            border: 1px solid var(--electric-blue);
            color: var(--electric-blue);
            font-family: 'Orbitron', sans-serif;
            margin-top: 1rem;
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
    
    .map-btn {
        background: linear-gradient(45deg, #0066cc, #003399) !important;
    }
    
    .map-btn:hover {
        background: linear-gradient(45deg, #003399, #0066cc) !important;
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
    
    .teams-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
        position: relative;
    }
    
    .team-card {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 1.8rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(255, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        min-height: 500px;
        display: flex;
        flex-direction: column;
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
    
    .team-header {
        text-align: center;
        margin-bottom: 1.5rem;
        flex-shrink: 0;
        position: relative;
    }
    
    .team-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: white;
        margin-bottom: 0.5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    .team-game {
        color: var(--fire-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        letter-spacing: 1px;
        text-shadow: 0 0 5px rgba(255, 51, 0, 0.5);
    }
    
    .team-stats {
        display: flex;
        justify-content: space-around;
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-value {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 900;
        color: var(--fire-red);
        text-shadow: 0 0 10px rgba(255, 51, 0, 0.7);
    }
    
    .stat-label {
        color: #cc9999;
        font-size: 0.8rem;
        text-transform: uppercase;
    }
    
    .team-details {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
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
    
    .member-badge {
        display: inline-block;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-family: 'Orbitron', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: rgba(255, 0, 0, 0.15);
        color: var(--blood-red);
        border: 1px solid var(--blood-red);
        margin-left: 0.5rem;
    }
    
    .member-tooltip {
        cursor: help;
        border-bottom: 1px dotted var(--fire-red);
    }
    
    /* Styles pour la section des matchs */
    .matches-section {
        margin: 1rem 0;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 10px;
        border-left: 3px solid var(--blood-red);
        flex-grow: 1;
        overflow: hidden;
    }
    
    .matches-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1rem;
        color: var(--fire-red);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .matches-list {
        max-height: 200px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: var(--blood-red) rgba(0, 0, 0, 0.3);
        padding-right: 5px;
    }
    
    .matches-list::-webkit-scrollbar {
        width: 6px;
    }
    
    .matches-list::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.3);
        border-radius: 3px;
    }
    
    .matches-list::-webkit-scrollbar-thumb {
        background: var(--blood-red);
        border-radius: 3px;
    }
    
    .match-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.6rem;
        margin-bottom: 0.5rem;
        background: rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        font-size: 0.9rem;
        transition: all 0.2s ease;
    }
    
    .match-item:hover {
        background: rgba(255, 0, 0, 0.2);
        transform: translateX(3px);
    }
    
    .match-opponent {
        color: #cc9999;
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .match-result {
        font-weight: 700;
        padding: 0.2rem 0.8rem;
        border-radius: 12px;
        font-size: 0.8rem;
        margin-left: 0.5rem;
        min-width: 45px;
        text-align: center;
    }
    
    .match-win {
        background: rgba(0, 255, 136, 0.2);
        color: var(--team-win);
        border: 1px solid var(--team-win);
    }
    
    .match-loss {
        background: rgba(255, 51, 92, 0.2);
        color: var(--team-loss);
        border: 1px solid var(--team-loss);
    }
    
    .match-pending {
        background: rgba(255, 204, 0, 0.2);
        color: var(--match-pending);
        border: 1px solid var(--match-pending);
    }
    
    .match-score {
        font-family: 'Orbitron', monospace;
        color: white;
        margin-right: 0.5rem;
        min-width: 50px;
        text-align: center;
    }
    
    .match-status-icon {
        margin-right: 0.3rem;
    }
    
    .no-matches {
        color: #cc9999;
        font-style: italic;
        font-size: 0.9rem;
        text-align: center;
        padding: 1rem;
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
    
    /* Team highlight */
    .team-card.highlighted {
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
        
        .add-team-btn {
            min-width: 250px;
            font-size: 1rem;
        }
        
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
        
        .team-stats {
            flex-direction: column;
            gap: 1rem;
        }
        
        .team-card {
            min-height: 550px;
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
        
        .team-card {
            padding: 1.5rem;
        }
        
        .team-name {
            font-size: 1.5rem;
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
            <span>Équipes totales:</span>
            <span class=\"stats-value\" id=\"statTotal\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Avec coach:</span>
            <span class=\"stats-value\" id=\"statWithCoach\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Sans coach:</span>
            <span class=\"stats-value\" id=\"statWithoutCoach\">0</span>
        </div>
        <div class=\"stats-item\">
            <span>Total membres:</span>
            <span class=\"stats-value\" id=\"statMembers\">0</span>
        </div>
    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PHANTOM FORCE - ÉQUIPES</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            COMMANDEZ VOS LÉGIONS • {{ teams|length }} ÉQUIPES EN COMBAT
        </p>
        <div class=\"live-counter\" id=\"liveCounter\">⚡ ÉLITE</div>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_ORGANIZER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_PLAYER')) %}
        <a href=\"{{ path('app_team_new') }}\" class=\"add-team-btn\">
            ⚔️ CRÉER UNE NOUVELLE ÉQUIPE
        </a>
        <a href=\"{{ path('app_map') }}\" class=\"add-team-btn map-btn\">
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
            ⭐ Équipes en vedette
        </button>
        <button class=\"advanced-btn\" id=\"refreshBtn\">
            🔄 Actualiser
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
                <label class=\"filter-label\">👑 AVEC COACH :</label>
                <select id=\"coachFilter\" class=\"filter-select\">
                    <option value=\"\">Toutes</option>
                    <option value=\"with\">Avec coach</option>
                    <option value=\"without\">Sans coach</option>
                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">👥 AVEC MEMBRES :</label>
                <select id=\"membersFilter\" class=\"filter-select\">
                    <option value=\"\">Toutes</option>
                    <option value=\"with\">Avec membres</option>
                    <option value=\"without\">Sans membres</option>
                </select>
            </div>
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"teamCount\">{{ teams|length }}</span> ÉQUIPES ENREGISTRÉES
        </div>
    </div>
    
    {% if teams|length > 0 %}
        <!-- Grille des équipes -->
        <div class=\"teams-grid\" id=\"teamsGrid\">
            {% for team in teams %}
                {# Récupérer tous les matchs de l'équipe #}
                {% set teamMatches = team.matchesAsTeam1|merge(team.matchesAsTeam2) %}
                {% set wins = 0 %}
                {% for match in teamMatches %}
                    {% if match.winnerTeam and match.winnerTeam.id == team.id %}
                        {% set wins = wins + 1 %}
                    {% endif %}
                {% endfor %}
                {% set losses = teamMatches|length - wins %}
                
                <div class=\"team-card\" 
                     data-id=\"{{ team.id }}\" 
                     data-name=\"{{ team.name|lower }}\" 
                     data-game=\"{{ team.game|lower }}\" 
                     data-coach=\"{{ team.coach ? 'yes' : 'no' }}\"
                     data-members=\"{{ team.members|length }}\">
                    
                    <div class=\"team-id\">#{{ team.id }}</div>
                    
                    <div class=\"team-header\">
                        <div class=\"team-name\">{{ team.name|upper }}</div>
                        <div class=\"team-game\">{{ team.game }}</div>
                    </div>
                    
                    <div class=\"team-stats\">
                        <div class=\"stat-item\">
                            <div class=\"stat-value\">{{ teamMatches|length }}</div>
                            <div class=\"stat-label\">MATCHS</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-value\">{{ wins }}</div>
                            <div class=\"stat-label\">VICTOIRES</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-value\">{{ losses }}</div>
                            <div class=\"stat-label\">DÉFAITES</div>
                        </div>
                    </div>
                    
                    <div class=\"team-details\">
                        <div class=\"detail-item\">
                            <strong>👑 COACH :</strong>
                            <span style=\"color: {% if team.coach %}var(--fire-red){% else %}var(--blood-red){% endif %};\">
                                {{ team.coach ? team.coach.username : 'EN ATTENTE' }}
                            </span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>👥 MEMBRES :</strong>
                            <span>
                                {{ team.members|length }} membre(s)
                                {% if team.members|length > 0 %}
                                    <span class=\"member-badge member-tooltip\" title=\"
                                        {%- for member in team.members -%}
                                            {{ member.pseudo }} ({{ member.rank }}){% if not loop.last %}, {% endif %}
                                        {%- endfor -%}\">
                                        👥
                                    </span>
                                {% endif %}
                            </span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📅 CRÉATION :</strong>
                            <span>{{ team.creationDate ? team.creationDate|date('d/m/Y') : 'N/A' }}</span>
                        </div>
                        
                        <div class=\"detail-item\">
                            <strong>📊 WIN RATE :</strong>
                            <span style=\"color: var(--fire-red); font-weight: bold;\">
                                {% if teamMatches|length > 0 %}
                                    {{ ((wins / teamMatches|length) * 100)|number_format(1) }}%
                                {% else %}
                                    0%
                                {% endif %}
                            </span>
                        </div>
                    </div>
                    
                    <!-- Section des matchs -->
                    <!-- Section des matchs de l'équipe -->
<div class=\"matches-section\">
    <div class=\"matches-title\">
        <span>⚔️ DERNIERS MATCHS</span>
        <span style=\"color: var(--fire-red);\">({{ team.matchesAsTeam1|length + team.matchesAsTeam2|length }})</span>
    </div>
    
    <div class=\"matches-list\">
        {% set allMatches = team.matchesAsTeam1|merge(team.matchesAsTeam2) %}
        {% if allMatches|length > 0 %}
            {# Trier les matchs par date (du plus récent au plus ancien) #}
            {% set sortedMatches = allMatches|sort((a, b) => b.matchDate <=> a.matchDate) %}
            
            {% for match in sortedMatches|slice(0, 5) %}
                {# Vérifier que team1 et team2 existent avant d'accéder à leurs propriétés #}
                {% if match.team1 is not null and match.team2 is not null %}
                    {# Déterminer l'adversaire #}
                    {% if match.team1.id == team.id %}
                        {% set opponent = match.team2 %}
                        {% set teamScore = match.scoreTeam1 %}
                        {% set opponentScore = match.scoreTeam2 %}
                    {% elseif match.team2.id == team.id %}
                        {% set opponent = match.team1 %}
                        {% set teamScore = match.scoreTeam2 %}
                        {% set opponentScore = match.scoreTeam1 %}
                    {% else %}
                        {# Match sans équipe valide #}
                        {% set opponent = null %}
                        {% set teamScore = '?' %}
                        {% set opponentScore = '?' %}
                    {% endif %}
                    
                    {# Vérifier si l'équipe est gagnante #}
                    {% set isWinner = match.winnerTeam is not null and match.winnerTeam.id == team.id %}
                    
                    {# Icône de statut #}
                    {% set statusIcon = '' %}
                    {% if match.status == 'ongoing' %}
                        {% set statusIcon = '🔥' %}
                    {% elseif match.status == 'planned' %}
                        {% set statusIcon = '📅' %}
                    {% elseif match.status == 'finished' %}
                        {% set statusIcon = '✓' %}
                    {% elseif match.status == 'cancelled' %}
                        {% set statusIcon = '✗' %}
                    {% endif %}
                    
                    <div class=\"match-item\">
                        <span class=\"match-opponent\" title=\"VS {{ opponent ? opponent.name : 'Équipe inconnue' }}\">
                            <span class=\"match-status-icon\">{{ statusIcon }}</span>
                            {% if opponent %}
                                {{ opponent.name|slice(0, 15) }}{{ opponent.name|length > 15 ? '...' : '' }}
                            {% else %}
                                Équipe ?
                            {% endif %}
                        </span>
                        <div style=\"display: flex; align-items: center;\">
                            <span class=\"match-score\">{{ teamScore ?? '?' }} - {{ opponentScore ?? '?' }}</span>
                            {% if match.status == 'finished' %}
                                <span class=\"match-result {% if isWinner %}match-win{% else %}match-loss{% endif %}\">
                                    {% if isWinner %}V{% else %}D{% endif %}
                                </span>
                            {% elseif match.status == 'ongoing' %}
                                <span class=\"match-result match-pending\">EN COURS</span>
                            {% elseif match.status == 'planned' %}
                                <span class=\"match-result match-pending\">À VENIR</span>
                            {% elseif match.status == 'cancelled' %}
                                <span class=\"match-result match-loss\">ANNULÉ</span>
                            {% endif %}
                        </div>
                    </div>
                {% else %}
                    {# Match avec équipes manquantes #}
                    <div class=\"match-item\">
                        <span class=\"match-opponent\" style=\"color: var(--blood-red);\">
                            <span class=\"match-status-icon\">⚠️</span>
                            Match incomplet (équipe manquante)
                        </span>
                        <span class=\"match-score\">?-?</span>
                    </div>
                {% endif %}
            {% endfor %}
            
            {% if allMatches|length > 5 %}
                <div style=\"text-align: center; margin-top: 0.8rem;\">
                    <a href=\"{{ path('app_team_show', {'id': team.id}) }}\" style=\"color: var(--fire-red); text-decoration: none; font-size: 0.9rem;\">
                        Voir les {{ allMatches|length }} matchs →
                    </a>
                </div>
            {% endif %}
        {% else %}
            <div class=\"no-matches\">
                <span>Aucun match enregistré pour cette équipe</span>
            </div>
        {% endif %}
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
                        
                        <form method=\"post\" action=\"{{ path('app_team_delete', {'id': team.id}) }}\" 
                              onsubmit=\"return confirm('💀 Êtes-vous sûr de vouloir dissoudre cette légion ? Cette action conservera les agents mais les désassociera de l\\'équipe.');\"
                              style=\"display: inline; margin: 0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ team.id) }}\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                🗑️ DISSOUDRE
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
                ⚔️ <span id=\"activeTeams\">{{ teams|length }}</span> ÉQUIPES ACTIVES • 
                <span id=\"totalMembers\">{{ teams|reduce((carry, team) => carry + team.members|length, 0) }}</span> AGENTS • 
                <span id=\"totalMatches\">{{ teams|reduce((carry, team) => carry + (team.matchesAsTeam1|length) + (team.matchesAsTeam2|length), 0) }}</span> MATCHS •
                DERNIÈRE MISE À JOUR : {{ \"now\"|date('H:i:s') }}
            </p>
        </div>
        
    {% else %}
        <!-- Message quand aucune équipe n'existe -->
        <div class=\"no-teams\">
            <h2>⚠️ ARÈNE DÉSERTE ⚠️</h2>
            <p>Aucune équipe n'a encore été créée. Forgez la première !</p>
            <a href=\"{{ path('app_team_new') }}\" class=\"add-team-btn\" style=\"display: inline-block; width: auto;\">
                🏆 FORGER LA PREMIÈRE ÉQUIPE
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
    const coachFilter = document.getElementById('coachFilter');
    const membersFilter = document.getElementById('membersFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
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
    const statWithCoach = document.getElementById('statWithCoach');
    const statWithoutCoach = document.getElementById('statWithoutCoach');
    const statMembers = document.getElementById('statMembers');
    
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
        
        if (type === 'alert') {
            playNotificationSound();
        }
        
        showToast(message);
    }
    
    function playNotificationSound() {
        try {
            const audio = new Audio('data:audio/wav;base64,UklGRigAAABXQVZFZm10IBIAAAABAAEAQB8AAEAfAAABAAgAZGF0YQ');
            audio.volume = 0.3;
            audio.play();
        } catch (e) {}
    }
    
    function updateNotificationBadge() {
        const unreadCount = notifications.filter(n => !n.read).length;
        notificationBadge.textContent = unreadCount;
        notificationBadge.style.display = unreadCount > 0 ? 'block' : 'none';
    }
    
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
    
    function clearNotifications() {
        notifications = [];
        updateNotificationBadge();
        renderNotifications();
        saveNotifications();
    }
    
    function saveNotifications() {
        try {
            localStorage.setItem('teamNotifications', JSON.stringify(notifications));
        } catch (e) {}
    }
    
    function loadNotifications() {
        try {
            const saved = localStorage.getItem('teamNotifications');
            if (saved) {
                notifications = JSON.parse(saved);
                updateNotificationBadge();
                renderNotifications();
            }
        } catch (e) {}
    }
    
    function updateCounter(visibleCount) {
        teamCount.textContent = visibleCount;
        if (activeTeams) {
            activeTeams.textContent = visibleCount;
        }
        
        teamCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            teamCount.style.transform = 'scale(1)';
        }, 200);
        
        updateStats();
    }
    
    function updateStats() {
        const visibleTeams = document.querySelectorAll('.team-card:not(.hidden)');
        const withCoach = document.querySelectorAll('.team-card[data-coach=\"yes\"]:not(.hidden)').length;
        const withoutCoach = document.querySelectorAll('.team-card[data-coach=\"no\"]:not(.hidden)').length;
        
        let totalMembers = 0;
        visibleTeams.forEach(team => {
            totalMembers += parseInt(team.dataset.members || 0);
        });
        
        statTotal.textContent = visibleTeams.length;
        statWithCoach.textContent = withCoach;
        statWithoutCoach.textContent = withoutCoach;
        statMembers.textContent = totalMembers;
    }
    
    function exportTeams() {
        const visibleTeams = Array.from(document.querySelectorAll('.team-card:not(.hidden)'));
        
        if (visibleTeams.length === 0) {
            showToast('Aucune équipe à exporter');
            return;
        }
        
        let exportData = 'PHANTOM FORCE - LISTE DES ÉQUIPES\\n';
        exportData += '================================\\n\\n';
        
        visibleTeams.forEach((team, index) => {
            const name = team.querySelector('.team-name').textContent;
            const game = team.querySelector('.team-game').textContent;
            const coach = team.querySelector('.detail-item:first-child span').textContent;
            const members = team.querySelector('.detail-item:nth-child(2) span').textContent;
            const date = team.querySelector('.detail-item:nth-child(3) span').textContent;
            const stats = team.querySelectorAll('.stat-value');
            const matches = stats[0].textContent;
            const wins = stats[1].textContent;
            const losses = stats[2].textContent;
            
            exportData += `\${index + 1}. \${name}\\n`;
            exportData += `   Jeu: \${game}\\n`;
            exportData += `   Coach: \${coach}\\n`;
            exportData += `   Membres: \${members}\\n`;
            exportData += `   Création: \${date}\\n`;
            exportData += `   Stats: \${matches} matchs (\${wins}V - \${losses}D)\\n`;
            exportData += '\\n';
        });
        
        exportData += `\\nTotal: \${visibleTeams.length} équipe(s)\\n`;
        exportData += `Exporté le: \${new Date().toLocaleDateString('fr-FR')}`;
        
        const blob = new Blob([exportData], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `equipes-phantom-force-\${new Date().toISOString().split('T')[0]}.txt`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        
        showToast(`Liste exportée (\${visibleTeams.length} équipes)`);
        addNotification(`Liste de \${visibleTeams.length} équipes exportée`, 'info');
    }
    
    function toggleHighlight() {
        isHighlightActive = !isHighlightActive;
        
        document.querySelectorAll('.team-card').forEach(card => {
            if (isHighlightActive) {
                // Mettre en vedette les équipes avec beaucoup de membres ou sans coach
                const members = parseInt(card.dataset.members || 0);
                const hasCoach = card.dataset.coach === 'yes';
                
                if (members >= 5 || !hasCoach) {
                    card.classList.add('highlighted');
                }
            } else {
                card.classList.remove('highlighted');
            }
        });
        
        if (isHighlightActive) {
            highlightBtn.innerHTML = '⭐ Désactiver vedettes';
            showToast('Équipes en vedette activées');
        } else {
            highlightBtn.innerHTML = '⭐ Équipes en vedette';
            showToast('Équipes en vedette désactivées');
        }
    }
    
    function toggleRefresh() {
        showToast('Page actualisée', 'success');
        location.reload();
    }
    
    function searchTeams() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentTeams.forEach(team => {
            const teamName = team.dataset.name;
            const gameName = team.dataset.game;
            
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
    
    function applyFilters() {
        let visibleTeams = [];
        
        currentTeams.forEach(team => {
            let isVisible = !team.classList.contains('filtered-out');
            
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && team.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            const coachStatus = coachFilter.value;
            if (coachStatus === 'with' && team.dataset.coach === 'no') {
                isVisible = false;
            }
            if (coachStatus === 'without' && team.dataset.coach === 'yes') {
                isVisible = false;
            }
            
            const membersCount = parseInt(team.dataset.members || 0);
            const membersStatus = membersFilter.value;
            if (membersStatus === 'with' && membersCount === 0) {
                isVisible = false;
            }
            if (membersStatus === 'without' && membersCount > 0) {
                isVisible = false;
            }
            
            if (isVisible) {
                team.classList.remove('hidden');
                visibleTeams.push(team);
            } else {
                team.classList.add('hidden');
            }
        });
        
        updateCounter(visibleTeams.length);
    }
    
    // Événements
    searchInput.addEventListener('input', searchTeams);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchTeams();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    coachFilter.addEventListener('change', applyFilters);
    membersFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        coachFilter.value = '';
        membersFilter.value = '';
        
        currentTeams.forEach(team => {
            team.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
        showToast('Filtres réinitialisés');
    });
    
    exportBtn.addEventListener('click', exportTeams);
    statsBtn.addEventListener('click', () => {
        statsOverlay.classList.toggle('active');
        if (statsOverlay.classList.contains('active')) {
            updateStats();
        }
    });
    highlightBtn.addEventListener('click', toggleHighlight);
    refreshBtn.addEventListener('click', toggleRefresh);
    
    notificationBell.addEventListener('click', () => {
        notificationsModal.classList.toggle('active');
        if (notificationsModal.classList.contains('active')) {
            notifications.forEach(n => n.read = true);
            updateNotificationBadge();
            renderNotifications();
            saveNotifications();
        }
    });
    
    document.addEventListener('click', (e) => {
        if (!notificationsModal.contains(e.target) && !notificationBell.contains(e.target)) {
            notificationsModal.classList.remove('active');
        }
        if (!statsOverlay.contains(e.target) && e.target !== statsBtn) {
            statsOverlay.classList.remove('active');
        }
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            notificationsModal.classList.remove('active');
            statsOverlay.classList.remove('active');
        }
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
        loadNotifications();
        
        setTimeout(() => {
            if (notifications.length === 0) {
                addNotification('Bienvenue sur Phantom Force Équipes!', 'info');
                addNotification(`Suivez \${allTeams.length} équipes`, 'info');
            }
        }, 1000);
    });
</script>
{% endblock %}", "team/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\team\\index.html.twig");
    }
}
