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

/* matchy/edit.html.twig */
class __TwigTemplate_70762ea911940fd7b7d7d458585837ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matchy/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "matchy/edit.html.twig"));

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
    
    /* Styles pour les erreurs de validation */
    .form-error {
        color: var(--neon-red);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 8px;
        border-left: 3px solid var(--neon-red);
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    /* Style pour les champs avec erreur */
    .form-input.error,
    .form-select.error,
    .score-input.error {
        border-color: var(--neon-red) !important;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.3) !important;
        background: rgba(255, 0, 60, 0.05) !important;
    }
    
    /* Style pour les messages d'erreur globaux */
    .form-global-error {
        background: rgba(255, 0, 60, 0.1);
        border: 2px solid var(--neon-red);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--neon-green);
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

    // line 710
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

        // line 711
        yield "<div class=\"creation-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 715
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 716
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 717
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 717, $this->source); })())));
            // line 718
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 719
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 720
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 721
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 722
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftPosition"]) || array_key_exists("leftPosition", $context) ? $context["leftPosition"] : (function () { throw new RuntimeError('Variable "leftPosition" does not exist.', 722, $this->source); })()), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 723
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["delay"]) || array_key_exists("delay", $context) ? $context["delay"] : (function () { throw new RuntimeError('Variable "delay" does not exist.', 723, $this->source); })()), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 724
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 724, $this->source); })()), "html", null, true);
            yield "s;
            \">
                ";
            // line 726
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 726, $this->source); })()), (isset($context["iconIndex"]) || array_key_exists("iconIndex", $context) ? $context["iconIndex"] : (function () { throw new RuntimeError('Variable "iconIndex" does not exist.', 726, $this->source); })()), [], "array", false, false, false, 726), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 729
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">MODIFIER LE COMBAT</h1>
        <div class=\"match-id-badge\" style=\"display: inline-block; background: rgba(0, 0, 0, 0.5); color: var(--neon-green); font-family: 'Orbitron', monospace; font-size: 1rem; padding: 0.5rem 1.5rem; border-radius: 25px; border: 2px solid var(--neon-green); margin-bottom: 1rem; box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);\">
            MATCH #";
        // line 735
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 735, $this->source); })()), "id", [], "any", false, false, false, 735), "html", null, true);
        yield "
        </div>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            ÉDITION DU MATCH DANS L'ARÈNE E-SPORT
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        ";
        // line 744
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 744, $this->source); })()), 'form_start');
        yield "
        
        ";
        // line 747
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 747, $this->source); })()), "vars", [], "any", false, false, false, 747), "errors", [], "any", false, false, false, 747)) > 0)) {
            // line 748
            yield "        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            ";
            // line 750
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 750, $this->source); })()), 'errors');
            yield "
        </div>
        ";
        }
        // line 753
        yield "        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            ";
        // line 758
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 758, $this->source); })()), "game", [], "any", false, false, false, 758), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "Sélectionnez ou entrez le nom du jeu"]]);
        // line 763
        yield "
            <div class=\"input-icon\">🕹️</div>
            
            ";
        // line 767
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 767, $this->source); })()), "game", [], "any", false, false, false, 767), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            
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
        // line 802
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 802, $this->source); })()), "match_date", [], "any", false, false, false, 802), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "JJ/MM/AAAA HH:MM"]]);
        // line 807
        yield "
            <div class=\"input-icon\">📅</div>
            
            ";
        // line 811
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 811, $this->source); })()), "match_date", [], "any", false, false, false, 811), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <!-- Sélection des équipes -->
        <div class=\"teams-grid\">
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 1</label>
                ";
        // line 818
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 818, $this->source); })()), "team1", [], "any", false, false, false, 818), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 822
        yield "
                
                ";
        // line 825
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 825, $this->source); })()), "team1", [], "any", false, false, false, 825), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                ";
        // line 832
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 832, $this->source); })()), "team2", [], "any", false, false, false, 832), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 836
        yield "
                
                ";
        // line 839
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 839, $this->source); })()), "team2", [], "any", false, false, false, 839), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                ";
        // line 846
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 846, $this->source); })()), "score_team1", [], "any", false, false, false, 846), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0", "min" => "0", "max" => "999"]]);
        // line 853
        yield "
                ";
        // line 855
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 855, $this->source); })()), "score_team1", [], "any", false, false, false, 855), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                ";
        // line 861
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 861, $this->source); })()), "score_team2", [], "any", false, false, false, 861), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0", "min" => "0", "max" => "999"]]);
        // line 868
        yield "
                ";
        // line 870
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 870, $this->source); })()), "score_team2", [], "any", false, false, false, 870), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📊 STATUT DU MATCH</span>
            </label>
            ";
        // line 878
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 878, $this->source); })()), "status", [], "any", false, false, false, 878), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 882
        yield "
            <div class=\"input-icon\">📈</div>
            
            ";
        // line 886
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 886, $this->source); })()), "status", [], "any", false, false, false, 886), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🏆 GAGNANT (FACULTATIF)</span>
            </label>
            ";
        // line 893
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 893, $this->source); })()), "winner_team", [], "any", false, false, false, 893), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN GAGNANT"]]);
        // line 898
        yield "
            <div class=\"input-icon\">👑</div>
            
            ";
        // line 902
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 902, $this->source); })()), "winner_team", [], "any", false, false, false, 902), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                💾 SAUVEGARDER
            </button>
            <a href=\"";
        // line 909
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"back-btn\">
                ↩ ANNULER
            </a>
        </div>
        
        ";
        // line 914
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 914, $this->source); })()), 'form_end');
        yield "
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: #a0a0c0; font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEILS :</strong></p>
        <ul style=\"list-style: none; padding: 0; margin: 0.5rem 0;\">
            <li>• Les deux équipes doivent être différentes</li>
            <li>• Les scores doivent être des nombres entiers positifs (0-999)</li>
            <li>• Si le statut est \"finished\", un gagnant doit être sélectionné</li>
            <li>• Les matchs \"planned\" ne peuvent pas avoir une date dans le passé</li>
            <li>• Le gagnant doit avoir un score supérieur à l'adversaire</li>
        </ul>
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
        // line 939
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 939, $this->source); })()), "id", [], "any", false, false, false, 939)]), "html", null, true);
        yield "\" 
              onsubmit=\"return confirmDelete();\" style=\"text-align: center;\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 941
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 941, $this->source); })()), "id", [], "any", false, false, false, 941))), "html", null, true);
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
    const gameInput = document.querySelector('input[name*=\"game\"]');
    
    gameOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Retirer la sélection précédente
            gameOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Sélectionner cette option
            this.classList.add('selected');
            
            // Mettre à jour l'input
            if (gameInput) {
                const gameValue = this.getAttribute('data-game');
                gameInput.value = gameValue;
                
                // Déclencher l'événement change
                gameInput.dispatchEvent(new Event('change'));
            }
        });
    });
    
    // Pré-sélectionner l'option si elle correspond au select
    if (gameInput && gameInput.value) {
        const currentGame = gameInput.value.toUpperCase();
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
    const statusSelect = document.querySelector('select[name*=\"status\"]');
    
    // Fonction pour déterminer automatiquement le gagnant basé sur les scores
    function updateWinnerFromScores() {
        if (!scoreTeam1Input || !scoreTeam2Input || !winnerSelect || !team1Select || !team2Select) return;
        
        const score1 = parseInt(scoreTeam1Input.value) || 0;
        const score2 = parseInt(scoreTeam2Input.value) || 0;
        const team1Id = team1Select.value;
        const team2Id = team2Select.value;
        
        if (!team1Id || !team2Id) return;
        
        if (score1 > score2) {
            winnerSelect.value = team1Id;
        } else if (score2 > score1) {
            winnerSelect.value = team2Id;
        } else {
            // Égalité
            winnerSelect.value = '';
        }
    }
    
    // Fonction pour valider les scores et le gagnant
    function validateScoresAndWinner() {
        if (!scoreTeam1Input || !scoreTeam2Input || !winnerSelect || !team1Select || !team2Select || !statusSelect) return true;
        
        const score1 = parseInt(scoreTeam1Input.value) || 0;
        const score2 = parseInt(scoreTeam2Input.value) || 0;
        const winnerId = winnerSelect.value;
        const team1Id = team1Select.value;
        const team2Id = team2Select.value;
        const status = statusSelect.value;
        
        // Validation 1: Si le match est terminé, un vainqueur doit être défini
        if (status === 'finished' && !winnerId) {
            alert('⚠️ Pour un match terminé (finished), un gagnant doit être sélectionné !');
            return false;
        }
        
        // Validation 2: Si un vainqueur est défini, les scores doivent être définis
        if (winnerId && (score1 === 0 && score2 === 0)) {
            alert('⚠️ Si un gagnant est sélectionné, les scores doivent être renseignés !');
            return false;
        }
        
        // Validation 3: Le vainqueur doit avoir un score supérieur
        if (winnerId && team1Id && team2Id) {
            if (winnerId === team1Id && score1 <= score2) {
                alert('⚠️ L\\'équipe 1 est désignée gagnante mais son score n\\'est pas supérieur à celui de l\\'équipe 2 !');
                return false;
            }
            if (winnerId === team2Id && score2 <= score1) {
                alert('⚠️ L\\'équipe 2 est désignée gagnante mais son score n\\'est pas supérieur à celui de l\\'équipe 1 !');
                return false;
            }
        }
        
        return true;
    }
    
    // Écouteurs d'événements
    if (scoreTeam1Input && scoreTeam2Input) {
        scoreTeam1Input.addEventListener('change', updateWinnerFromScores);
        scoreTeam2Input.addEventListener('change', updateWinnerFromScores);
    }
    
    if (winnerSelect && scoreTeam1Input && scoreTeam2Input) {
        winnerSelect.addEventListener('change', function() {
            const winnerId = this.value;
            const team1Id = team1Select ? team1Select.value : null;
            const team2Id = team2Select ? team2Select.value : null;
            
            if (winnerId && team1Id && team2Id) {
                if (winnerId === team1Id && (!scoreTeam1Input.value || scoreTeam1Input.value === '0')) {
                    scoreTeam1Input.value = '3';
                    scoreTeam2Input.value = '0';
                } else if (winnerId === team2Id && (!scoreTeam2Input.value || scoreTeam2Input.value === '0')) {
                    scoreTeam1Input.value = '0';
                    scoreTeam2Input.value = '3';
                }
            }
        });
    }
    
    // Validation des équipes différentes et autres règles
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Validation 1: Équipes différentes
            const team1Value = team1Select ? team1Select.value : null;
            const team2Value = team2Select ? team2Select.value : null;
            
            if (team1Value && team2Value && team1Value === team2Value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
                team1Select.focus();
                return false;
            }
            
            // Validation 2: Vérification de la date pour les matchs programmés
            const dateInput = document.querySelector('input[name*=\"match_date\"]');
            if (dateInput && dateInput.value && statusSelect && statusSelect.value === 'planned') {
                const matchDate = new Date(dateInput.value);
                const now = new Date();
                now.setSeconds(0, 0); // Ignorer les secondes et millisecondes pour la comparaison
                
                if (matchDate < now) {
                    e.preventDefault();
                    alert('⚠️ Un match programmé (planned) ne peut pas avoir une date dans le passé !');
                    dateInput.focus();
                    return false;
                }
            }
            
            // Validation 3: Vérification des scores et du gagnant
            if (!validateScoresAndWinner()) {
                e.preventDefault();
                return false;
            }
            
            // Validation 4: Scores valides (entiers, non négatifs, max 999)
            const score1 = parseInt(scoreTeam1Input.value) || 0;
            const score2 = parseInt(scoreTeam2Input.value) || 0;
            
            if (score1 < 0 || score2 < 0) {
                e.preventDefault();
                alert('⚠️ Les scores ne peuvent pas être négatifs !');
                scoreTeam1Input.focus();
                return false;
            }
            
            if (score1 > 999 || score2 > 999) {
                e.preventDefault();
                alert('⚠️ Les scores ne peuvent pas dépasser 999 !');
                scoreTeam1Input.focus();
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
    
    // Date picker amélioré avec validation
    const dateInput = document.querySelector('input[name*=\"match_date\"]');
    if (dateInput && dateInput.type === 'text') {
        // Formater la date existante
        if (dateInput.value) {
            try {
                const date = new Date(dateInput.value);
                if (!isNaN(date.getTime())) {
                    const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                    date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                    dateInput.value = formatted;
                }
            } catch (e) {
                console.log('Erreur de formatage de date:', e);
            }
        }
        
        dateInput.addEventListener('focus', function() {
            // Changer le type en datetime-local pour les navigateurs modernes
            if (this.type === 'text') {
                this.type = 'datetime-local';
            }
        });
        
        dateInput.addEventListener('blur', function() {
            if (this.value) {
                try {
                    const date = new Date(this.value);
                    if (!isNaN(date.getTime())) {
                        const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                        date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                        this.value = formatted;
                    }
                } catch (e) {
                    console.log('Erreur de formatage de date:', e);
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
        
        // Mettre en évidence les champs avec erreurs
        const errorElements = document.querySelectorAll('.form-error');
        
        errorElements.forEach(errorElement => {
            // Trouver le champ correspondant
            const formGroup = errorElement.closest('.form-group') || 
                            errorElement.closest('.team-select-container') ||
                            errorElement.closest('div'); // Pour les scores
            
            if (formGroup) {
                const inputElement = formGroup.querySelector('.form-input, .form-select, .score-input');
                if (inputElement && errorElement.textContent.trim() !== '') {
                    inputElement.classList.add('error');
                    
                    // Ajouter un écouteur pour retirer la classe d'erreur quand l'utilisateur commence à taper
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
        
        // Pour les erreurs globales, cacher après 10 secondes
        const globalError = document.querySelector('.form-global-error');
        if (globalError) {
            setTimeout(() => {
                globalError.style.opacity = '0';
                globalError.style.transition = 'opacity 1s';
                setTimeout(() => globalError.style.display = 'none', 1000);
            }, 10000);
        }
        
        // Mettre à jour le gagnant au chargement basé sur les scores existants
        updateWinnerFromScores();
    });
    
    // Fonction de confirmation pour suppression
    function confirmDelete() {
        const gameName = '";
        // line 1258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1258, $this->source); })()), "game", [], "any", false, false, false, 1258), "js"), "html", null, true);
        yield "';
        const team1Name = '";
        // line 1259
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1259, $this->source); })()), "team1", [], "any", false, false, false, 1259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1259, $this->source); })()), "team1", [], "any", false, false, false, 1259), "name", [], "any", false, false, false, 1259), "js"), "html", null, true)) : ("Équipe 1"));
        yield "';
        const team2Name = '";
        // line 1260
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1260, $this->source); })()), "team2", [], "any", false, false, false, 1260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1260, $this->source); })()), "team2", [], "any", false, false, false, 1260), "name", [], "any", false, false, false, 1260), "js"), "html", null, true)) : ("Équipe 2"));
        yield "';
        const matchDate = '";
        // line 1261
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1261, $this->source); })()), "matchDate", [], "any", false, false, false, 1261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 1261, $this->source); })()), "matchDate", [], "any", false, false, false, 1261), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "';
        
        const message = `⚠️ CONFIRMATION DE SUPPRESSION ⚠️\\n\\n` +
                       `Vous êtes sur le point de supprimer définitivement :\\n` +
                       `• Match: \${gameName}\\n` +
                       `• \${team1Name} VS \${team2Name}\\n` +
                       `• Date: \${matchDate}\\n\\n` +
                       `Cette action est IRRÉVERSIBLE !\\n\\n` +
                       `Êtes-vous ABSOLUMENT SÛR de vouloir continuer ?`;
        
        return confirm(message);
    }
    
    // Validation en temps réel des scores
    if (scoreTeam1Input && scoreTeam2Input) {
        [scoreTeam1Input, scoreTeam2Input].forEach(input => {
            input.addEventListener('input', function() {
                // Supprimer les caractères non numériques
                this.value = this.value.replace(/[^0-9]/g, '');
                
                // Limiter à 3 chiffres
                if (this.value.length > 3) {
                    this.value = this.value.slice(0, 3);
                }
                
                // S'assurer que la valeur est entre 0 et 999
                let value = parseInt(this.value) || 0;
                if (value < 0) value = 0;
                if (value > 999) value = 999;
                this.value = value;
            });
        });
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
        return "matchy/edit.html.twig";
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
        return array (  1462 => 1261,  1458 => 1260,  1454 => 1259,  1450 => 1258,  1130 => 941,  1125 => 939,  1097 => 914,  1089 => 909,  1078 => 902,  1073 => 898,  1071 => 893,  1060 => 886,  1055 => 882,  1053 => 878,  1041 => 870,  1038 => 868,  1036 => 861,  1026 => 855,  1023 => 853,  1021 => 846,  1010 => 839,  1006 => 836,  1004 => 832,  993 => 825,  989 => 822,  987 => 818,  976 => 811,  971 => 807,  969 => 802,  930 => 767,  925 => 763,  923 => 758,  916 => 753,  910 => 750,  906 => 748,  903 => 747,  898 => 744,  886 => 735,  878 => 729,  869 => 726,  864 => 724,  860 => 723,  856 => 722,  853 => 721,  850 => 720,  847 => 719,  844 => 718,  841 => 717,  836 => 716,  834 => 715,  828 => 711,  815 => 710,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
    
    /* Styles pour les erreurs de validation */
    .form-error {
        color: var(--neon-red);
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(255, 0, 60, 0.1);
        border-radius: 8px;
        border-left: 3px solid var(--neon-red);
        animation: shake 0.5s ease-in-out;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    /* Style pour les champs avec erreur */
    .form-input.error,
    .form-select.error,
    .score-input.error {
        border-color: var(--neon-red) !important;
        box-shadow: 0 0 20px rgba(255, 0, 60, 0.3) !important;
        background: rgba(255, 0, 60, 0.05) !important;
    }
    
    /* Style pour les messages d'erreur globaux */
    .form-global-error {
        background: rgba(255, 0, 60, 0.1);
        border: 2px solid var(--neon-red);
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--neon-green);
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
        
        {# Afficher les erreurs globales #}
        {% if form.vars.errors|length > 0 %}
        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            {{ form_errors(form) }}
        </div>
        {% endif %}
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            {{ form_widget(form.game, {
                'attr': {
                    'class': 'form-input',
                    'placeholder': 'Sélectionnez ou entrez le nom du jeu'
                }
            }) }}
            <div class=\"input-icon\">🕹️</div>
            
            {# Afficher les erreurs pour le jeu #}
            {{ form_errors(form.game, {'attr': {'class': 'form-error'}}) }}
            
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
            
            {# Afficher les erreurs pour la date #}
            {{ form_errors(form.match_date, {'attr': {'class': 'form-error'}}) }}
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
                
                {# Afficher les erreurs pour l'équipe 1 #}
                {{ form_errors(form.team1, {'attr': {'class': 'form-error'}}) }}
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                {{ form_widget(form.team2, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
                
                {# Afficher les erreurs pour l'équipe 2 #}
                {{ form_errors(form.team2, {'attr': {'class': 'form-error'}}) }}
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                {{ form_widget(form.score_team1, {
                    'attr': {
                        'class': 'score-input',
                        'placeholder': '0',
                        'min': '0',
                        'max': '999'
                    }
                }) }}
                {# Afficher les erreurs pour le score team 1 #}
                {{ form_errors(form.score_team1, {'attr': {'class': 'form-error'}}) }}
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                {{ form_widget(form.score_team2, {
                    'attr': {
                        'class': 'score-input',
                        'placeholder': '0',
                        'min': '0',
                        'max': '999'
                    }
                }) }}
                {# Afficher les erreurs pour le score team 2 #}
                {{ form_errors(form.score_team2, {'attr': {'class': 'form-error'}}) }}
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
            
            {# Afficher les erreurs pour le statut #}
            {{ form_errors(form.status, {'attr': {'class': 'form-error'}}) }}
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
            
            {# Afficher les erreurs pour le gagnant #}
            {{ form_errors(form.winner_team, {'attr': {'class': 'form-error'}}) }}
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
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: #a0a0c0; font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEILS :</strong></p>
        <ul style=\"list-style: none; padding: 0; margin: 0.5rem 0;\">
            <li>• Les deux équipes doivent être différentes</li>
            <li>• Les scores doivent être des nombres entiers positifs (0-999)</li>
            <li>• Si le statut est \"finished\", un gagnant doit être sélectionné</li>
            <li>• Les matchs \"planned\" ne peuvent pas avoir une date dans le passé</li>
            <li>• Le gagnant doit avoir un score supérieur à l'adversaire</li>
        </ul>
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
    const gameInput = document.querySelector('input[name*=\"game\"]');
    
    gameOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Retirer la sélection précédente
            gameOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Sélectionner cette option
            this.classList.add('selected');
            
            // Mettre à jour l'input
            if (gameInput) {
                const gameValue = this.getAttribute('data-game');
                gameInput.value = gameValue;
                
                // Déclencher l'événement change
                gameInput.dispatchEvent(new Event('change'));
            }
        });
    });
    
    // Pré-sélectionner l'option si elle correspond au select
    if (gameInput && gameInput.value) {
        const currentGame = gameInput.value.toUpperCase();
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
    const statusSelect = document.querySelector('select[name*=\"status\"]');
    
    // Fonction pour déterminer automatiquement le gagnant basé sur les scores
    function updateWinnerFromScores() {
        if (!scoreTeam1Input || !scoreTeam2Input || !winnerSelect || !team1Select || !team2Select) return;
        
        const score1 = parseInt(scoreTeam1Input.value) || 0;
        const score2 = parseInt(scoreTeam2Input.value) || 0;
        const team1Id = team1Select.value;
        const team2Id = team2Select.value;
        
        if (!team1Id || !team2Id) return;
        
        if (score1 > score2) {
            winnerSelect.value = team1Id;
        } else if (score2 > score1) {
            winnerSelect.value = team2Id;
        } else {
            // Égalité
            winnerSelect.value = '';
        }
    }
    
    // Fonction pour valider les scores et le gagnant
    function validateScoresAndWinner() {
        if (!scoreTeam1Input || !scoreTeam2Input || !winnerSelect || !team1Select || !team2Select || !statusSelect) return true;
        
        const score1 = parseInt(scoreTeam1Input.value) || 0;
        const score2 = parseInt(scoreTeam2Input.value) || 0;
        const winnerId = winnerSelect.value;
        const team1Id = team1Select.value;
        const team2Id = team2Select.value;
        const status = statusSelect.value;
        
        // Validation 1: Si le match est terminé, un vainqueur doit être défini
        if (status === 'finished' && !winnerId) {
            alert('⚠️ Pour un match terminé (finished), un gagnant doit être sélectionné !');
            return false;
        }
        
        // Validation 2: Si un vainqueur est défini, les scores doivent être définis
        if (winnerId && (score1 === 0 && score2 === 0)) {
            alert('⚠️ Si un gagnant est sélectionné, les scores doivent être renseignés !');
            return false;
        }
        
        // Validation 3: Le vainqueur doit avoir un score supérieur
        if (winnerId && team1Id && team2Id) {
            if (winnerId === team1Id && score1 <= score2) {
                alert('⚠️ L\\'équipe 1 est désignée gagnante mais son score n\\'est pas supérieur à celui de l\\'équipe 2 !');
                return false;
            }
            if (winnerId === team2Id && score2 <= score1) {
                alert('⚠️ L\\'équipe 2 est désignée gagnante mais son score n\\'est pas supérieur à celui de l\\'équipe 1 !');
                return false;
            }
        }
        
        return true;
    }
    
    // Écouteurs d'événements
    if (scoreTeam1Input && scoreTeam2Input) {
        scoreTeam1Input.addEventListener('change', updateWinnerFromScores);
        scoreTeam2Input.addEventListener('change', updateWinnerFromScores);
    }
    
    if (winnerSelect && scoreTeam1Input && scoreTeam2Input) {
        winnerSelect.addEventListener('change', function() {
            const winnerId = this.value;
            const team1Id = team1Select ? team1Select.value : null;
            const team2Id = team2Select ? team2Select.value : null;
            
            if (winnerId && team1Id && team2Id) {
                if (winnerId === team1Id && (!scoreTeam1Input.value || scoreTeam1Input.value === '0')) {
                    scoreTeam1Input.value = '3';
                    scoreTeam2Input.value = '0';
                } else if (winnerId === team2Id && (!scoreTeam2Input.value || scoreTeam2Input.value === '0')) {
                    scoreTeam1Input.value = '0';
                    scoreTeam2Input.value = '3';
                }
            }
        });
    }
    
    // Validation des équipes différentes et autres règles
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Validation 1: Équipes différentes
            const team1Value = team1Select ? team1Select.value : null;
            const team2Value = team2Select ? team2Select.value : null;
            
            if (team1Value && team2Value && team1Value === team2Value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
                team1Select.focus();
                return false;
            }
            
            // Validation 2: Vérification de la date pour les matchs programmés
            const dateInput = document.querySelector('input[name*=\"match_date\"]');
            if (dateInput && dateInput.value && statusSelect && statusSelect.value === 'planned') {
                const matchDate = new Date(dateInput.value);
                const now = new Date();
                now.setSeconds(0, 0); // Ignorer les secondes et millisecondes pour la comparaison
                
                if (matchDate < now) {
                    e.preventDefault();
                    alert('⚠️ Un match programmé (planned) ne peut pas avoir une date dans le passé !');
                    dateInput.focus();
                    return false;
                }
            }
            
            // Validation 3: Vérification des scores et du gagnant
            if (!validateScoresAndWinner()) {
                e.preventDefault();
                return false;
            }
            
            // Validation 4: Scores valides (entiers, non négatifs, max 999)
            const score1 = parseInt(scoreTeam1Input.value) || 0;
            const score2 = parseInt(scoreTeam2Input.value) || 0;
            
            if (score1 < 0 || score2 < 0) {
                e.preventDefault();
                alert('⚠️ Les scores ne peuvent pas être négatifs !');
                scoreTeam1Input.focus();
                return false;
            }
            
            if (score1 > 999 || score2 > 999) {
                e.preventDefault();
                alert('⚠️ Les scores ne peuvent pas dépasser 999 !');
                scoreTeam1Input.focus();
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
    
    // Date picker amélioré avec validation
    const dateInput = document.querySelector('input[name*=\"match_date\"]');
    if (dateInput && dateInput.type === 'text') {
        // Formater la date existante
        if (dateInput.value) {
            try {
                const date = new Date(dateInput.value);
                if (!isNaN(date.getTime())) {
                    const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                    date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                    dateInput.value = formatted;
                }
            } catch (e) {
                console.log('Erreur de formatage de date:', e);
            }
        }
        
        dateInput.addEventListener('focus', function() {
            // Changer le type en datetime-local pour les navigateurs modernes
            if (this.type === 'text') {
                this.type = 'datetime-local';
            }
        });
        
        dateInput.addEventListener('blur', function() {
            if (this.value) {
                try {
                    const date = new Date(this.value);
                    if (!isNaN(date.getTime())) {
                        const formatted = date.toLocaleDateString('fr-FR') + ' ' + 
                                        date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute:'2-digit'});
                        this.value = formatted;
                    }
                } catch (e) {
                    console.log('Erreur de formatage de date:', e);
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
        
        // Mettre en évidence les champs avec erreurs
        const errorElements = document.querySelectorAll('.form-error');
        
        errorElements.forEach(errorElement => {
            // Trouver le champ correspondant
            const formGroup = errorElement.closest('.form-group') || 
                            errorElement.closest('.team-select-container') ||
                            errorElement.closest('div'); // Pour les scores
            
            if (formGroup) {
                const inputElement = formGroup.querySelector('.form-input, .form-select, .score-input');
                if (inputElement && errorElement.textContent.trim() !== '') {
                    inputElement.classList.add('error');
                    
                    // Ajouter un écouteur pour retirer la classe d'erreur quand l'utilisateur commence à taper
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
        
        // Pour les erreurs globales, cacher après 10 secondes
        const globalError = document.querySelector('.form-global-error');
        if (globalError) {
            setTimeout(() => {
                globalError.style.opacity = '0';
                globalError.style.transition = 'opacity 1s';
                setTimeout(() => globalError.style.display = 'none', 1000);
            }, 10000);
        }
        
        // Mettre à jour le gagnant au chargement basé sur les scores existants
        updateWinnerFromScores();
    });
    
    // Fonction de confirmation pour suppression
    function confirmDelete() {
        const gameName = '{{ matchy.game|escape('js') }}';
        const team1Name = '{{ matchy.team1 ? matchy.team1.name|escape('js') : \"Équipe 1\" }}';
        const team2Name = '{{ matchy.team2 ? matchy.team2.name|escape('js') : \"Équipe 2\" }}';
        const matchDate = '{{ matchy.matchDate ? matchy.matchDate|date('d/m/Y H:i') : 'N/A' }}';
        
        const message = `⚠️ CONFIRMATION DE SUPPRESSION ⚠️\\n\\n` +
                       `Vous êtes sur le point de supprimer définitivement :\\n` +
                       `• Match: \${gameName}\\n` +
                       `• \${team1Name} VS \${team2Name}\\n` +
                       `• Date: \${matchDate}\\n\\n` +
                       `Cette action est IRRÉVERSIBLE !\\n\\n` +
                       `Êtes-vous ABSOLUMENT SÛR de vouloir continuer ?`;
        
        return confirm(message);
    }
    
    // Validation en temps réel des scores
    if (scoreTeam1Input && scoreTeam2Input) {
        [scoreTeam1Input, scoreTeam2Input].forEach(input => {
            input.addEventListener('input', function() {
                // Supprimer les caractères non numériques
                this.value = this.value.replace(/[^0-9]/g, '');
                
                // Limiter à 3 chiffres
                if (this.value.length > 3) {
                    this.value = this.value.slice(0, 3);
                }
                
                // S'assurer que la valeur est entre 0 et 999
                let value = parseInt(this.value) || 0;
                if (value < 0) value = 0;
                if (value > 999) value = 999;
                this.value = value;
            });
        });
    }
</script>
{% endblock %}", "matchy/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\matchy\\edit.html.twig");
    }
}
