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

/* front/matchy/new.html.twig */
class __TwigTemplate_b2c5009f39efd104b890dff02b7cde49 extends Template
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
        yield "🎮 ARENA - Nouveau Match";
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
    }
</style>
";
        yield from [];
    }

    // line 610
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 611
        yield "<div class=\"creation-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 615
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 616
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 617
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icons"] ?? null)));
            // line 618
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 619
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 620
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 621
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 622
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["leftPosition"] ?? null), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 623
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delay"] ?? null), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 624
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["duration"] ?? null), "html", null, true);
            yield "s;
            \">
                ";
            // line 626
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["iconIndex"] ?? null)] ?? null) : null), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">PROGRAMMER UN COMBAT</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.3rem; opacity: 0.9; font-family: 'Orbitron', sans-serif;\">
            CRÉEZ UN NOUVEAU MATCH POUR L'ARÈNE E-SPORT
        </p>
    </div>
    
    <!-- Carte du formulaire -->
    <div class=\"form-card\">
        ";
        // line 641
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        
        ";
        // line 644
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 644), "errors", [], "any", false, false, false, 644)) > 0)) {
            // line 645
            yield "        <div class=\"form-global-error\">
            <strong style=\"display: block; margin-bottom: 0.5rem;\">⚠️ ERREURS DANS LE FORMULAIRE :</strong>
            ";
            // line 647
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            yield "
        </div>
        ";
        }
        // line 650
        yield "        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🎮 JEU DU MATCH</span>
            </label>
            ";
        // line 655
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "game", [], "any", false, false, false, 655), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN JEU"]]);
        // line 660
        yield "
            <div class=\"input-icon\">🕹️</div>
            
            ";
        // line 664
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "game", [], "any", false, false, false, 664), 'errors', ["attr" => ["class" => "form-error"]]);
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
        // line 699
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "match_date", [], "any", false, false, false, 699), 'widget', ["attr" => ["class" => "form-input", "placeholder" => "JJ/MM/AAAA HH:MM"]]);
        // line 704
        yield "
            <div class=\"input-icon\">📅</div>
            
            ";
        // line 708
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "match_date", [], "any", false, false, false, 708), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <!-- Sélection des équipes -->
        <div class=\"teams-grid\">
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 1</label>
                ";
        // line 715
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team1", [], "any", false, false, false, 715), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 719
        yield "
                
                ";
        // line 722
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team1", [], "any", false, false, false, 722), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"vs-container\">VS</div>
            
            <div class=\"team-select-container\">
                <label class=\"team-select-label\">🏆 ÉQUIPE 2</label>
                ";
        // line 729
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team2", [], "any", false, false, false, 729), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 733
        yield "
                
                ";
        // line 736
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team2", [], "any", false, false, false, 736), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"score-inputs\">
            <div>
                ";
        // line 743
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team1", [], "any", false, false, false, 743), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0"]]);
        // line 748
        yield "
                ";
        // line 750
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team1", [], "any", false, false, false, 750), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
            
            <div class=\"score-separator\">:</div>
            
            <div>
                ";
        // line 756
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team2", [], "any", false, false, false, 756), 'widget', ["attr" => ["class" => "score-input", "placeholder" => "0"]]);
        // line 761
        yield "
                ";
        // line 763
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team2", [], "any", false, false, false, 763), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
            </div>
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>📊 STATUT DU MATCH</span>
            </label>
            ";
        // line 771
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 771), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 775
        yield "
            <div class=\"input-icon\">📈</div>
            
            ";
        // line 779
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 779), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <div class=\"form-group\">
            <label class=\"form-label\">
                <span>🏆 GAGNANT (FACULTATIF)</span>
            </label>
            ";
        // line 786
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "winner_team", [], "any", false, false, false, 786), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "SÉLECTIONNEZ UN GAGNANT"]]);
        // line 791
        yield "
            <div class=\"input-icon\">👑</div>
            
            ";
        // line 795
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "winner_team", [], "any", false, false, false, 795), 'errors', ["attr" => ["class" => "form-error"]]);
        yield "
        </div>
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"submit-btn\">
                ⚡ CRÉER LE MATCH
            </button>
            <a href=\"";
        // line 802
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"back-btn\">
                🔙 RETOUR
            </a>
        </div>
        
        ";
        // line 807
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    </div>
    
    <!-- Conseils -->
    <div style=\"text-align: center; color: #a0a0c0; font-size: 0.9rem; margin-top: 2rem;\">
        <p>💡 <strong>CONSEIL :</strong> Assurez-vous que les deux équipes sont différentes et que les scores sont corrects !</p>
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
        gameOptions.forEach(option => {
            if (option.getAttribute('data-game') === gameSelect.value.toUpperCase()) {
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
                submitBtn.innerHTML = '⚡ CRÉATION EN COURS...';
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.8';
                
                // Petite animation avant la soumission réelle
                setTimeout(() => {
                    submitBtn.innerHTML = '⚡ MATCH CRÉÉ !';
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
        return "front/matchy/new.html.twig";
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
        return array (  949 => 807,  941 => 802,  930 => 795,  925 => 791,  923 => 786,  912 => 779,  907 => 775,  905 => 771,  893 => 763,  890 => 761,  888 => 756,  878 => 750,  875 => 748,  873 => 743,  862 => 736,  858 => 733,  856 => 729,  845 => 722,  841 => 719,  839 => 715,  828 => 708,  823 => 704,  821 => 699,  782 => 664,  777 => 660,  775 => 655,  768 => 650,  762 => 647,  758 => 645,  755 => 644,  750 => 641,  736 => 629,  727 => 626,  722 => 624,  718 => 623,  714 => 622,  711 => 621,  708 => 620,  705 => 619,  702 => 618,  699 => 617,  694 => 616,  692 => 615,  686 => 611,  679 => 610,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/matchy/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\matchy\\new.html.twig");
    }
}
