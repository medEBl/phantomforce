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

/* front/matchy/edit.html.twig */
class __TwigTemplate_36eae0c1fa2e60aa530adbfb6c0b3396 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/edit.html.twig"));

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

        yield "🎮 ARENA - Modifier le Match";
        
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
    
    .creation-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
        max-width: 800px;
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
        font-size: 2.8rem;
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
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(0, 243, 255, 0.5); }
        to { text-shadow: 0 0 30px rgba(157, 0, 255, 0.7), 
                         0 0 40px rgba(157, 0, 255, 0.4); }
    }
    
    .form-card {
        background: rgba(20, 20, 35, 0.8);
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 243, 255, 0.2);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        margin-bottom: 2rem;
    }
    
    .form-card:hover {
        border-color: var(--neon-blue);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.9),
            0 0 50px rgba(0, 243, 255, 0.4);
    }
    
    .form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
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
        color: var(--neon-green);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(0, 255, 136, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
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
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }
    
    .form-select {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        cursor: pointer;
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2300f3ff' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1rem;
    }
    
    .form-select:focus {
        outline: none;
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background-color: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 2rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .vs-container {
        text-align: center;
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        padding: 1rem;
    }
    
    .team-select-container {
        background: rgba(0, 0, 0, 0.4);
        border-radius: 12px;
        padding: 1.5rem;
        border: 2px solid var(--neon-purple);
        transition: all 0.3s ease;
    }
    
    .team-select-container:hover {
        border-color: var(--neon-blue);
        box-shadow: 0 0 20px rgba(0, 243, 255, 0.2);
    }
    
    .team-select-label {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 1rem;
        text-align: center;
        display: block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .score-inputs {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 1.5rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .score-input {
        width: 100%;
        padding: 1.2rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-green);
        border-radius: 12px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .score-input:focus {
        outline: none;
        border-color: var(--neon-blue);
        box-shadow: 0 0 25px rgba(0, 243, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .score-separator {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.8rem;
        text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
    }
    
    .form-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(0, 243, 255, 0.3);
    }
    
    .submit-btn {
        position: relative;
        background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
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
        background: linear-gradient(45deg, var(--neon-purple), var(--neon-red));
    }
    
    .back-btn {
        position: relative;
        background: linear-gradient(45deg, #333344, #444455);
        border: 2px solid var(--neon-blue);
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
        box-shadow: 0 0 30px rgba(0, 243, 255, 0.5);
        background: linear-gradient(45deg, #444455, #333344);
        border-color: var(--neon-purple);
    }
    
    .input-icon {
        position: absolute;
        right: 1.5rem;
        top: 3.8rem;
        color: var(--neon-blue);
        font-size: 1.3rem;
        pointer-events: none;
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
    
    .game-suggestions {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .game-option {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid #333344;
        border-radius: 10px;
        padding: 1.2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: #a0a0c0;
    }
    
    .game-option:hover {
        border-color: var(--neon-blue);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 243, 255, 0.2);
    }
    
    .game-option.selected {
        border-color: var(--neon-green);
        background: rgba(0, 255, 136, 0.1);
        color: var(--neon-green);
        box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
        transform: translateY(-3px);
    }
    
    .game-option-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    /* Section de suppression */
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
    
    .delete-btn-form {
        background: linear-gradient(45deg, #c01c28, #ff003c);
        color: white;
        border: none;
        padding: 1.2rem 3rem;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        text-decoration: none;
        justify-content: center;
        position: relative;
        overflow: hidden;
        z-index: 1;
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.4);
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
    
    .delete-btn-form::before {
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
    
    .delete-btn-form:hover::before {
        left: 100%;
    }
    
    .delete-btn-form:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.7);
        filter: brightness(1.2);
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
        
        .teams-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .vs-container {
            order: 2;
            padding: 0;
        }
        
        .score-inputs {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .score-separator {
            order: 2;
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
        
        .game-suggestions {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .delete-section {
            padding: 1.5rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 650
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

        // line 651
        yield "<div class=\"creation-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 655
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 656
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 657
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 657, $this->source); })())));
            // line 658
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 659
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 660
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 661
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 662
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 662, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 663, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 664, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 666
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 666, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 666, $this->source); })()), [], "array", false, false, false, 666), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 669
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">MODIFIER LE COMBAT</h1>
        <div class=\"match-id-badge\" style=\"display: inline-block; background: rgba(0, 0, 0, 0.5); color: var(--neon-green); font-family: 'Orbitron', monospace; font-size: 1rem; padding: 0.5rem 1.5rem; border-radius: 25px; border: 2px solid var(--neon-green); margin-bottom: 1rem; box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);\">
            MATCH #";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 675, $this->source); })()), "id", [], "any", false, false, false, 675), "html", null, true);
        yield "
        </div>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            ÉDITION DU MATCH DANS L'ARÈNE E-SPORT
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        ";
        // line 684
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 684, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            ";
        // line 690
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 690, $this->source); })()), "game", [], "any", false, false, false, 690), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN JEU"]]);
        // line 695
        yield "
            <div class=\"input-icon\">🕹️</div>
            
            <!-- Suggestions de jeux populaires -->
            <div class=\"game-suggestions\" id=\"gameSuggestions\">
                <div class=\"game-option\" data-game=\"VALORANT\">
                    <span class=\"game-option-icon\">🔫</span>
                    VALORANT
                </div>
                <div class=\"game-option\" data-game=\"LEAGUE OF LEGENDS\">
                    <span class=\"game-option-icon\">⚔️</span>
                    LEAGUE OF LEGENDS
                </div>
                <div class=\"game-option\" data-game=\"COUNTER-STRIKE 2\">
                    <span class=\"game-option-icon\">🎯</span>
                    COUNTER-STRIKE 2
                </div>
                <div class=\"game-option\" data-game=\"DOTA 2\">
                    <span class=\"game-option-icon\">🛡️</span>
                    DOTA 2
                </div>
                <div class=\"game-option\" data-game=\"OVERWATCH 2\">
                    <span class=\"game-option-icon\">✨</span>
                    OVERWATCH 2
                </div>
                <div class=\"game-option\" data-game=\"RAINBOW SIX SIEGE\">
                    <span class=\"game-option-icon\">🔍</span>
                    RAINBOW SIX SIEGE
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📅 DATE DU MATCH</span>
            </label>
            ";
        // line 731
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 731, $this->source); })()), "match_date", [], "any", false, false, false, 731), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "JJ/MM/AAAA HH:MM"]]);
        // line 736
        yield "
            <div class=\"input-icon\">📅</div>
        </div>
        
        <!-- Sélection des équipes -->
        <div class=\"teams-grid\">
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 1</label>
                ";
        // line 744
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 744, $this->source); })()), "team1", [], "any", false, false, false, 744), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 748
        yield "
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                ";
        // line 755
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 755, $this->source); })()), "team2", [], "any", false, false, false, 755), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 759
        yield "
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                ";
        // line 766
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 766, $this->source); })()), "score_team1", [], "any", false, false, false, 766), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0"]]);
        // line 771
        yield "
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                ";
        // line 777
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 777, $this->source); })()), "score_team2", [], "any", false, false, false, 777), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0"]]);
        // line 782
        yield "
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📊 STATUT DU MATCH</span>
            </label>
            ";
        // line 790
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 790, $this->source); })()), "status", [], "any", false, false, false, 790), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 794
        yield "
            <div class=\"input-icon\">📈</div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🏆 GAGNANT (FACULTATIF)</span>
            </label>
            ";
        // line 802
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 802, $this->source); })()), "winner_team", [], "any", false, false, false, 802), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN GAGNANT"]]);
        // line 807
        yield "
            <div class=\"input-icon\">👑</div>
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                💾 SAUVEGARDER
            </button>
            <a href=\"";
        // line 815
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"back-btn\">
                ↩ ANNULER
            </a>
        </div>
        
        ";
        // line 820
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 820, $this->source); })()), 'form_end');
        yield "
    </div>
    
    <!-- Section de suppression -->
    <div class=\"delete-section\">
        <div class=\"delete-header\">
            <div class=\"delete-title\">⚠️ SUPPRIMER CE MATCH</div>
            <div class=\"delete-warning\">
                Cette action supprimera définitivement le match et toutes ses données associées.
                Cette action est irréversible !
            </div>
        </div>
        
        <form method=\"post\" action=\"";
        // line 833
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 833, $this->source); })()), "id", [], "any", false, false, false, 833)]), "html", null, true);
        yield "\" 
              onsubmit=\"return confirmDelete();\" style=\"text-align: center;\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 835, $this->source); })()), "id", [], "any", false, false, false, 835))), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"delete-btn-form\">
                🗑️ SUPPRIMER DÉFINITIVEMENT
            </button>
        </form>
    </div>
</div>

<script>
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
        const currentGame = gameSelect.value.toUpperCase();
        gameOptions.forEach(option => {
            if (option.getAttribute('data-game') === currentGame) {
                option.classList.add('selected');
            }
        });
    }
    
    // Mise à jour automatique des scores basée sur le gagnant
    const team1Select = document.querySelector('select[name*=\"team1\"]');
    const team2Select = document.querySelector('select[name*=\"team2\"]');
    const winnerSelect = document.querySelector('select[name*=\"winner_team\"]');
    const scoreTeam1Input = document.querySelector('input[name*=\"score_team1\"]');
    const scoreTeam2Input = document.querySelector('input[name*=\"score_team2\"]');
    
    if (winnerSelect && scoreTeam1Input && scoreTeam2Input) {
        winnerSelect.addEventListener('change', function() {
            const winnerId = this.value;
            const team1Id = team1Select ? team1Select.value : null;
            const team2Id = team2Select ? team2Select.value : null;
            
            if (winnerId && team1Id && team2Id) {
                if (winnerId === team1Id) {
                    // Équipe 1 gagnante
                    scoreTeam1Input.value = '3';
                    scoreTeam2Input.value = '0';
                } else if (winnerId === team2Id) {
                    // Équipe 2 gagnante
                    scoreTeam1Input.value = '0';
                    scoreTeam2Input.value = '3';
                }
            }
        });
    }
    
    // Validation des équipes différentes
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const team1Value = team1Select ? team1Select.value : null;
            const team2Value = team2Select ? team2Select.value : null;
            
            if (team1Value && team2Value && team1Value === team2Value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
                return false;
            }
            
            // Animation du bouton de soumission
            const submitBtn = this.querySelector('.submit-btn');
            if (submitBtn) {
                submitBtn.innerHTML = '💾 SAUVEGARDE EN COURS...';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.8';
                
                // Petite animation avant la soumission réelle
                setTimeout(() => {
                    submitBtn.innerHTML = '💾 MODIFICATIONS ENREGISTRÉES !';
                    submitBtn.style.background = 'linear-gradient(45deg, var(--neon-green), var(--neon-blue))';
                }, 100);
            }
        });
    }
    
    // Date picker amélioré
    const dateInput = document.querySelector('input[name*=\"match_date\"]');
    if (dateInput && dateInput.type === 'text') {
        dateInput.addEventListener('focus', function() {
            // Changer le type en datetime-local pour les navigateurs modernes
            if (this.type === 'text') {
                this.type = 'datetime-local';
            }
        });
        
        // Formatage de la date
        dateInput.addEventListener('blur', function() {
            if (this.value) {
                const date = new Date(this.value);
                if (!isNaN(date.getTime())) {
                    const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                    date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                    this.value = formatted;
                }
            }
        });
    }
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.creation-container').style.opacity = '1';
        }, 100);
        
        // Animation des inputs au focus
        const formInputs = document.querySelectorAll('.form-input, .form-select, .score-input');
        
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
        
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
        // line 991
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 991, $this->source); })()), "game", [], "any", false, false, false, 991), "js"), "html", null, true);
        yield "';
        const team1Name = '";
        // line 992
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 992, $this->source); })()), "team1", [], "any", false, false, false, 992)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 992, $this->source); })()), "team1", [], "any", false, false, false, 992), "name", [], "any", false, false, false, 992), "js"), "html", null, true)) : ("Équipe 1"));
        yield "';
        const team2Name = '";
        // line 993
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 993, $this->source); })()), "team2", [], "any", false, false, false, 993)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 993, $this->source); })()), "team2", [], "any", false, false, false, 993), "name", [], "any", false, false, false, 993), "js"), "html", null, true)) : ("Équipe 2"));
        yield "';
        
        const message = `⚠️ CONFIRMATION DE SUPPRESSION ⚠️\\n\\n` +
                       `Vous êtes sur le point de supprimer définitivement :\\n` +
                       `• Match: \${gameName}\\n` +
                       `• \${team1Name} VS \${team2Name}\\n` +
                       `• Date: ";
        // line 999
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 999, $this->source); })()), "matchDate", [], "any", false, false, false, 999)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 999, $this->source); })()), "matchDate", [], "any", false, false, false, 999), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
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
        return "front/matchy/edit.html.twig";
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
        return array (  1172 => 999,  1163 => 993,  1159 => 992,  1155 => 991,  996 => 835,  991 => 833,  975 => 820,  967 => 815,  957 => 807,  955 => 802,  945 => 794,  943 => 790,  933 => 782,  931 => 777,  923 => 771,  921 => 766,  912 => 759,  910 => 755,  901 => 748,  899 => 744,  889 => 736,  887 => 731,  849 => 695,  847 => 690,  838 => 684,  826 => 675,  818 => 669,  809 => 666,  804 => 664,  800 => 663,  796 => 662,  793 => 661,  790 => 660,  787 => 659,  784 => 658,  781 => 657,  776 => 656,  774 => 655,  768 => 651,  755 => 650,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎮 ARENA - Modifier le Match{% endblock %}

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
    
    .creation-container {
        position: relative;
        padding: 2rem;
        animation: fadeIn 1s ease-out;
        max-width: 800px;
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
        font-size: 2.8rem;
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
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }
    
    @keyframes textGlow {
        from { text-shadow: 0 0 20px rgba(0, 243, 255, 0.5); }
        to { text-shadow: 0 0 30px rgba(157, 0, 255, 0.7), 
                         0 0 40px rgba(157, 0, 255, 0.4); }
    }
    
    .form-card {
        background: rgba(20, 20, 35, 0.8);
        border-radius: 20px;
        padding: 2.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 243, 255, 0.2);
        backdrop-filter: blur(10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8);
        margin-bottom: 2rem;
    }
    
    .form-card:hover {
        border-color: var(--neon-blue);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.9),
            0 0 50px rgba(0, 243, 255, 0.4);
    }
    
    .form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, 
            var(--neon-blue), 
            var(--neon-purple),
            var(--neon-red));
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
        color: var(--neon-green);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-shadow: 0 0 8px rgba(0, 255, 136, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
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
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }
    
    .form-select {
        width: 100%;
        padding: 1.2rem 1.5rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-blue);
        border-radius: 12px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
        cursor: pointer;
        appearance: none;
        background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2300f3ff' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
        background-repeat: no-repeat;
        background-position: right 1.5rem center;
        background-size: 1rem;
    }
    
    .form-select:focus {
        outline: none;
        border-color: var(--neon-purple);
        box-shadow: 0 0 25px rgba(157, 0, 255, 0.3);
        background-color: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 2rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .vs-container {
        text-align: center;
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        text-shadow: 0 0 15px rgba(255, 0, 60, 0.5);
        padding: 1rem;
    }
    
    .team-select-container {
        background: rgba(0, 0, 0, 0.4);
        border-radius: 12px;
        padding: 1.5rem;
        border: 2px solid var(--neon-purple);
        transition: all 0.3s ease;
    }
    
    .team-select-container:hover {
        border-color: var(--neon-blue);
        box-shadow: 0 0 20px rgba(0, 243, 255, 0.2);
    }
    
    .team-select-label {
        color: var(--neon-blue);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 1rem;
        text-align: center;
        display: block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .score-inputs {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 1.5rem;
        align-items: center;
        margin: 2rem 0;
    }
    
    .score-input {
        width: 100%;
        padding: 1.2rem;
        background: rgba(10, 10, 20, 0.9);
        border: 2px solid var(--neon-green);
        border-radius: 12px;
        color: white;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .score-input:focus {
        outline: none;
        border-color: var(--neon-blue);
        box-shadow: 0 0 25px rgba(0, 243, 255, 0.3);
        background: rgba(10, 10, 20, 0.95);
        transform: translateY(-2px);
    }
    
    .score-separator {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-weight: 900;
        font-size: 1.8rem;
        text-shadow: 0 0 10px rgba(255, 0, 60, 0.5);
    }
    
    .form-actions {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 2px solid rgba(0, 243, 255, 0.3);
    }
    
    .submit-btn {
        position: relative;
        background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
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
        background: linear-gradient(45deg, var(--neon-purple), var(--neon-red));
    }
    
    .back-btn {
        position: relative;
        background: linear-gradient(45deg, #333344, #444455);
        border: 2px solid var(--neon-blue);
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
        box-shadow: 0 0 30px rgba(0, 243, 255, 0.5);
        background: linear-gradient(45deg, #444455, #333344);
        border-color: var(--neon-purple);
    }
    
    .input-icon {
        position: absolute;
        right: 1.5rem;
        top: 3.8rem;
        color: var(--neon-blue);
        font-size: 1.3rem;
        pointer-events: none;
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
    
    .game-suggestions {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 1rem;
        margin-top: 1rem;
    }
    
    .game-option {
        position: relative;
        background: rgba(0, 0, 0, 0.6);
        border: 2px solid #333344;
        border-radius: 10px;
        padding: 1.2rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: #a0a0c0;
    }
    
    .game-option:hover {
        border-color: var(--neon-blue);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 243, 255, 0.2);
    }
    
    .game-option.selected {
        border-color: var(--neon-green);
        background: rgba(0, 255, 136, 0.1);
        color: var(--neon-green);
        box-shadow: 0 0 20px rgba(0, 255, 136, 0.3);
        transform: translateY(-3px);
    }
    
    .game-option-icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    /* Section de suppression */
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
    
    .delete-btn-form {
        background: linear-gradient(45deg, #c01c28, #ff003c);
        color: white;
        border: none;
        padding: 1.2rem 3rem;
        border-radius: 12px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.8rem;
        text-decoration: none;
        justify-content: center;
        position: relative;
        overflow: hidden;
        z-index: 1;
        box-shadow: 0 0 25px rgba(255, 0, 60, 0.4);
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
    
    .delete-btn-form::before {
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
    
    .delete-btn-form:hover::before {
        left: 100%;
    }
    
    .delete-btn-form:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.7);
        filter: brightness(1.2);
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
        
        .teams-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .vs-container {
            order: 2;
            padding: 0;
        }
        
        .score-inputs {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .score-separator {
            order: 2;
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
        
        .game-suggestions {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .delete-section {
            padding: 1.5rem;
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
        <h1 class=\"main-title\">MODIFIER LE COMBAT</h1>
        <div class=\"match-id-badge\" style=\"display: inline-block; background: rgba(0, 0, 0, 0.5); color: var(--neon-green); font-family: 'Orbitron', monospace; font-size: 1rem; padding: 0.5rem 1.5rem; border-radius: 25px; border: 2px solid var(--neon-green); margin-bottom: 1rem; box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);\">
            MATCH #{{ matchy.id }}
        </div>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            ÉDITION DU MATCH DANS L'ARÈNE E-SPORT
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        {{ form_start(form) }}
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            {{ form_widget(form.game, {
                'attr': {
                    'class': 'form-select',
                    'placeholder': 'SÉLECTIONNEZ UN JEU'
                }
            }) }}
            <div class=\"input-icon\">🕹️</div>
            
            <!-- Suggestions de jeux populaires -->
            <div class=\"game-suggestions\" id=\"gameSuggestions\">
                <div class=\"game-option\" data-game=\"VALORANT\">
                    <span class=\"game-option-icon\">🔫</span>
                    VALORANT
                </div>
                <div class=\"game-option\" data-game=\"LEAGUE OF LEGENDS\">
                    <span class=\"game-option-icon\">⚔️</span>
                    LEAGUE OF LEGENDS
                </div>
                <div class=\"game-option\" data-game=\"COUNTER-STRIKE 2\">
                    <span class=\"game-option-icon\">🎯</span>
                    COUNTER-STRIKE 2
                </div>
                <div class=\"game-option\" data-game=\"DOTA 2\">
                    <span class=\"game-option-icon\">🛡️</span>
                    DOTA 2
                </div>
                <div class=\"game-option\" data-game=\"OVERWATCH 2\">
                    <span class=\"game-option-icon\">✨</span>
                    OVERWATCH 2
                </div>
                <div class=\"game-option\" data-game=\"RAINBOW SIX SIEGE\">
                    <span class=\"game-option-icon\">🔍</span>
                    RAINBOW SIX SIEGE
                </div>
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📅 DATE DU MATCH</span>
            </label>
            {{ form_widget(form.match_date, {
                'attr': {
                    'class': 'form-input',
                    'placeholder': 'JJ/MM/AAAA HH:MM'
                }
            }) }}
            <div class=\"input-icon\">📅</div>
        </div>
        
        <!-- Sélection des équipes -->
        <div class=\"teams-grid\">
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 1</label>
                {{ form_widget(form.team1, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                {{ form_widget(form.team2, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                {{ form_widget(form.score_team1, {
                    'attr': {
                        'class': 'score-input',
                        'placeholder': '0'
                    }
                }) }}
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                {{ form_widget(form.score_team2, {
                    'attr': {
                        'class': 'score-input',
                        'placeholder': '0'
                    }
                }) }}
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📊 STATUT DU MATCH</span>
            </label>
            {{ form_widget(form.status, {
                'attr': {
                    'class': 'form-select'
                }
            }) }}
            <div class=\"input-icon\">📈</div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🏆 GAGNANT (FACULTATIF)</span>
            </label>
            {{ form_widget(form.winner_team, {
                'attr': {
                    'class': 'form-select',
                    'placeholder': 'SÉLECTIONNEZ UN GAGNANT'
                }
            }) }}
            <div class=\"input-icon\">👑</div>
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                💾 SAUVEGARDER
            </button>
            <a href=\"{{ path('app_matchy_index') }}\" class=\"back-btn\">
                ↩ ANNULER
            </a>
        </div>
        
        {{ form_end(form) }}
    </div>
    
    <!-- Section de suppression -->
    <div class=\"delete-section\">
        <div class=\"delete-header\">
            <div class=\"delete-title\">⚠️ SUPPRIMER CE MATCH</div>
            <div class=\"delete-warning\">
                Cette action supprimera définitivement le match et toutes ses données associées.
                Cette action est irréversible !
            </div>
        </div>
        
        <form method=\"post\" action=\"{{ path('app_matchy_delete', {'id': matchy.id}) }}\" 
              onsubmit=\"return confirmDelete();\" style=\"text-align: center;\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ matchy.id) }}\">
            <button type=\"submit\" class=\"delete-btn-form\">
                🗑️ SUPPRIMER DÉFINITIVEMENT
            </button>
        </form>
    </div>
</div>

<script>
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
        const currentGame = gameSelect.value.toUpperCase();
        gameOptions.forEach(option => {
            if (option.getAttribute('data-game') === currentGame) {
                option.classList.add('selected');
            }
        });
    }
    
    // Mise à jour automatique des scores basée sur le gagnant
    const team1Select = document.querySelector('select[name*=\"team1\"]');
    const team2Select = document.querySelector('select[name*=\"team2\"]');
    const winnerSelect = document.querySelector('select[name*=\"winner_team\"]');
    const scoreTeam1Input = document.querySelector('input[name*=\"score_team1\"]');
    const scoreTeam2Input = document.querySelector('input[name*=\"score_team2\"]');
    
    if (winnerSelect && scoreTeam1Input && scoreTeam2Input) {
        winnerSelect.addEventListener('change', function() {
            const winnerId = this.value;
            const team1Id = team1Select ? team1Select.value : null;
            const team2Id = team2Select ? team2Select.value : null;
            
            if (winnerId && team1Id && team2Id) {
                if (winnerId === team1Id) {
                    // Équipe 1 gagnante
                    scoreTeam1Input.value = '3';
                    scoreTeam2Input.value = '0';
                } else if (winnerId === team2Id) {
                    // Équipe 2 gagnante
                    scoreTeam1Input.value = '0';
                    scoreTeam2Input.value = '3';
                }
            }
        });
    }
    
    // Validation des équipes différentes
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const team1Value = team1Select ? team1Select.value : null;
            const team2Value = team2Select ? team2Select.value : null;
            
            if (team1Value && team2Value && team1Value === team2Value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
                return false;
            }
            
            // Animation du bouton de soumission
            const submitBtn = this.querySelector('.submit-btn');
            if (submitBtn) {
                submitBtn.innerHTML = '💾 SAUVEGARDE EN COURS...';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.8';
                
                // Petite animation avant la soumission réelle
                setTimeout(() => {
                    submitBtn.innerHTML = '💾 MODIFICATIONS ENREGISTRÉES !';
                    submitBtn.style.background = 'linear-gradient(45deg, var(--neon-green), var(--neon-blue))';
                }, 100);
            }
        });
    }
    
    // Date picker amélioré
    const dateInput = document.querySelector('input[name*=\"match_date\"]');
    if (dateInput && dateInput.type === 'text') {
        dateInput.addEventListener('focus', function() {
            // Changer le type en datetime-local pour les navigateurs modernes
            if (this.type === 'text') {
                this.type = 'datetime-local';
            }
        });
        
        // Formatage de la date
        dateInput.addEventListener('blur', function() {
            if (this.value) {
                const date = new Date(this.value);
                if (!isNaN(date.getTime())) {
                    const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                    date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                    this.value = formatted;
                }
            }
        });
    }
    
    // Effet au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.creation-container').style.opacity = '1';
        }, 100);
        
        // Animation des inputs au focus
        const formInputs = document.querySelectorAll('.form-input, .form-select, .score-input');
        
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
        
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
{% endblock %}", "front/matchy/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\matchy\\edit.html.twig");
    }
}
