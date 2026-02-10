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
class __TwigTemplate_d7f5a1d40aee24699ecfef6d749adb44 extends Template
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
        yield "🎮 ARENA - Équipes E-sport";
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
    
    .add-team-btn {
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
        box-shadow: 0 0 40px rgba(255, 0, 60, 0.8);
    }
    
    .music-control-btn {
        position: relative;
        background: linear-gradient(45deg, var(--neon-blue), var(--neon-green));
        border: none;
        padding: 1rem 2.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 0 25px rgba(0, 243, 255, 0.5);
        z-index: 1;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        min-width: 300px;
        justify-content: center;
    }
    
    .music-control-btn::before {
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
    
    .music-control-btn:hover::before {
        left: 100%;
    }
    
    .music-control-btn:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 0 40px rgba(0, 243, 255, 0.8);
    }
    
    .music-control-btn.muted {
        background: linear-gradient(45deg, #666666, #999999);
        box-shadow: 0 0 25px rgba(102, 102, 102, 0.5);
    }
    
    .music-control-btn.muted:hover {
        box-shadow: 0 0 40px rgba(102, 102, 102, 0.8);
    }
    
    .music-control-btn.playing {
        animation: pulseMusic 1.5s infinite;
    }
    
    @keyframes pulseMusic {
        0%, 100% { box-shadow: 0 0 25px rgba(0, 243, 255, 0.5); }
        50% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.9); }
    }
    
    .teams-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
    }
    
    .team-card {
        background: rgba(20, 20, 35, 0.8);
        border-radius: 15px;
        padding: 1.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0, 243, 255, 0.2);
        backdrop-filter: blur(10px);
    }
    
    .team-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.5),
            0 0 30px rgba(0, 243, 255, 0.3);
        border-color: var(--neon-blue);
    }
    
    .team-card::before {
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
    
    .team-id {
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
    
    .team-name {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .team-name::before {
        content: '⚡';
        color: var(--neon-blue);
        animation: pulse 1s infinite;
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.2); }
    }
    
    .team-info {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
        margin-bottom: 1.5rem;
    }
    
    .info-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #a0a0c0;
        font-size: 1.1rem;
    }
    
    .info-item strong {
        color: var(--neon-blue);
        min-width: 120px;
    }
    
    .actions-container {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .action-btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 8px;
        font-family: 'Rajdhani', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }
    
    .view-btn {
        background: linear-gradient(45deg, #1a5fb4, #26a269);
        color: white;
    }
    
    .edit-btn {
        background: linear-gradient(45deg, #cd9309, #f5c211);
        color: white;
    }
    
    .delete-btn {
        background: linear-gradient(45deg, #c01c28, #e01b24);
        color: white;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        filter: brightness(1.2);
    }
    
    .no-teams {
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
    
    .no-teams h2 {
        color: var(--neon-red);
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    
    .no-teams p {
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
    
    .game-icon {
        display: inline-block;
        background: var(--neon-purple);
        color: white;
        padding: 0.2rem 0.8rem;
        border-radius: 5px;
        font-size: 0.9rem;
        margin-left: 0.5rem;
    }
    
    .volume-controls {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 1000;
    }
    
    .volume-slider {
        background: rgba(0, 0, 0, 0.7);
        padding: 10px;
        border-radius: 10px;
        border: 1px solid var(--neon-blue);
        display: none;
    }
    
    .volume-slider.active {
        display: block;
        animation: slideUp 0.3s ease;
    }
    
    @keyframes slideUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    
    .volume-slider input {
        width: 100%;
        margin: 5px 0;
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
        
        .add-team-btn, .music-control-btn {
            min-width: 250px;
            font-size: 1rem;
        }
    }
</style>
";
        yield from [];
    }

    // line 498
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 499
        yield "<div class=\"gaming-container\">
    
    <!-- Audio pour la musique (caché pour l'instant) -->
    <audio id=\"esportMusic\" loop style=\"display: none;\">
        <source src=\"";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("music/music.mp3"), "html", null, true);
        yield "\" type=\"audio/mpeg\">
        Votre navigateur ne supporte pas l'audio.
    </audio>
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 509
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 510
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 511
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icons"] ?? null)));
            // line 512
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 7) % 90));
            // line 513
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 514
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 515
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 516
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["leftPosition"] ?? null), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 517
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delay"] ?? null), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["duration"] ?? null), "html", null, true);
            yield "s;
            \">
                ";
            // line 520
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["iconIndex"] ?? null)] ?? null) : null), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">ARENA ESPORT</h1>
        <p class=\"text-light mb-4\" style=\"font-size: 1.2rem; opacity: 0.9;\">
            GÉREZ VOS LÉGENDES DU JEU VIDÉO • ";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["teams"] ?? null)), "html", null, true);
        yield " ÉQUIPES EN ARÈNE
        </p>
    </div>
    
    <!-- Contrôles principaux -->
    <div class=\"controls-container\">
        <a href=\"";
        // line 535
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
        yield "\" class=\"add-team-btn\">
            ⚡ CRÉER UNE NOUVELLE LÉGENDE
        </a>
        
        <button id=\"musicBtn\" class=\"music-control-btn\">
            🔊 MUSIQUE ESPORT
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
        // line 556
        $context["games"] = [];
        // line 557
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 558
            yield "                        ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 558), ($context["games"] ?? null))) {
                // line 559
                yield "                            ";
                $context["games"] = Twig\Extension\CoreExtension::merge(($context["games"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 559)]);
                // line 560
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 560), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 560), "html", null, true);
                yield "</option>
                        ";
            }
            // line 562
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        yield "                </select>
            </div>
            
            <div class=\"filter-group\">
                <label class=\"filter-label\">📅 TRIER PAR :</label>
                <select id=\"sortBy\" class=\"filter-select\">
                    <option value=\"id-asc\">ID ↑</option>
                    <option value=\"id-desc\">ID ↓</option>
                    <option value=\"name-asc\">Nom (A-Z)</option>
                    <option value=\"name-desc\">Nom (Z-A)</option>
                    <option value=\"date-asc\">Date (ancien)</option>
                    <option value=\"date-desc\">Date (récent)</option>
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
            
            <button id=\"resetFilters\" class=\"reset-btn\">🔄 Réinitialiser</button>
        </div>
        
        <div class=\"results-counter\">
            <span id=\"teamCount\">";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["teams"] ?? null)), "html", null, true);
        yield "</span> ÉQUIPES TROUVÉES
        </div>
    </div>
    
    ";
        // line 595
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["teams"] ?? null)) > 0)) {
            // line 596
            yield "        <!-- Grille des équipes -->
        <div class=\"teams-grid\" id=\"teamsGrid\">
            ";
            // line 598
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["teams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 599
                yield "                <div class=\"team-card\" 
                     data-id=\"";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 600), "html", null, true);
                yield "\" 
                     data-name=\"";
                // line 601
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 601)), "html", null, true);
                yield "\" 
                     data-game=\"";
                // line 602
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 602)), "html", null, true);
                yield "\" 
                     data-date=\"";
                // line 603
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 603)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 603), "U"), "html", null, true)) : (0));
                yield "\"
                     data-coach=\"";
                // line 604
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 604)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
                yield "\">
                    <div class=\"team-id\">#";
                // line 605
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 605), "html", null, true);
                yield "</div>
                    
                    <h2 class=\"team-name\">
                        ";
                // line 608
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 608)), "html", null, true);
                yield "
                    </h2>
                    
                    <div class=\"team-info\">
                        <div class=\"info-item\">
                            <strong>🎮 JEU :</strong>
                            <span class=\"game-value\">";
                // line 614
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 614), "html", null, true);
                yield "</span>
                            <span class=\"game-icon\">";
                // line 615
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 615), 0, 3)), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>📅 CRÉATION :</strong>
                            <span class=\"date-value\">";
                // line 620
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 620)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 620), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "</span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>👑 COACH :</strong>
                            <span style=\"color: ";
                // line 625
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 625)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "var(--neon-green)";
                } else {
                    yield "var(--neon-red)";
                }
                yield ";\">
                                ";
                // line 626
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 626)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coachId", [], "any", false, false, false, 626), "html", null, true)) : ("EN ATTENTE"));
                yield "
                            </span>
                        </div>
                        
                        <div class=\"info-item\">
                            <strong>🏆 STATUT :</strong>
                            <span style=\"color: var(--neon-blue);\">ACTIVE</span>
                        </div>
                    </div>
                    
                    <div class=\"actions-container\">
                        <a href=\"";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 637)]), "html", null, true);
                yield "\" 
                           class=\"action-btn view-btn\"
                           title=\"Voir les détails de l'équipe\">
                            👁️ ANALYSER
                        </a>
                        
                        <a href=\"";
                // line 643
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 643)]), "html", null, true);
                yield "\" 
                           class=\"action-btn edit-btn\"
                           title=\"Modifier l'équipe\">
                            ⚙️ MODIFIER
                        </a>
                        
                        <form method=\"post\" 
                              action=\"";
                // line 650
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 650)]), "html", null, true);
                yield "\"
                              onsubmit=\"return confirm('⚡ Êtes-vous sûr de vouloir dissoudre cette équipe ? Cette action est irréversible !');\"
                              style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 653
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 653))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"action-btn delete-btn\" title=\"Supprimer l'équipe\">
                                💥 DISSOUDRE
                            </button>
                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 661
            yield "        </div>
        
        <!-- Statistiques -->
        <div class=\"mt-5 text-center text-light\" style=\"opacity: 0.8;\">
            <p style=\"font-family: 'Orbitron', sans-serif; font-size: 0.9rem;\">
                ⚡ <span id=\"activeTeams\">";
            // line 666
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["teams"] ?? null)), "html", null, true);
            yield "</span> ÉQUIPES ACTIVES • DERNIÈRE MISE À JOUR : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
            yield "
            </p>
        </div>
        
    ";
        } else {
            // line 671
            yield "        <!-- Message quand aucune équipe n'existe -->
        <div class=\"no-teams\">
            <h2>⚠️ ARÈNE VIDE ⚠️</h2>
            <p>Aucune équipe n'a encore été créée. Soyez le premier à forger une légende !</p>
            <a href=\"";
            // line 675
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_new");
            yield "\" class=\"add-team-btn\" style=\"display: inline-block; width: auto;\">
                🏆 FORGER LA PREMIÈRE LÉGENDE
            </a>
        </div>
    ";
        }
        // line 680
        yield "</div>

<style>
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
    
    /* Styles pour l'effet de filtrage */
    .team-card.hidden {
        display: none;
    }
    
    .team-card.filtered-out {
        opacity: 0.3;
        transform: scale(0.95);
        transition: all 0.3s ease;
    }
    
    @media (max-width: 768px) {
        .filter-controls {
            grid-template-columns: 1fr;
        }
        
        .reset-btn {
            margin-top: 0;
        }
    }
</style>

<script>
    // Initialisation des variables
    let allTeams = Array.from(document.querySelectorAll('.team-card'));
    let currentTeams = [...allTeams];
    
    // Éléments DOM
    const searchInput = document.getElementById('searchInput');
    const clearSearch = document.getElementById('clearSearch');
    const gameFilter = document.getElementById('gameFilter');
    const sortBy = document.getElementById('sortBy');
    const coachFilter = document.getElementById('coachFilter');
    const resetFiltersBtn = document.getElementById('resetFilters');
    const teamCount = document.getElementById('teamCount');
    const activeTeams = document.getElementById('activeTeams');
    
    // Fonction pour mettre à jour le compteur
    function updateCounter(visibleCount) {
        teamCount.textContent = visibleCount;
        if (activeTeams) {
            activeTeams.textContent = visibleCount;
        }
        
        // Animation du compteur
        teamCount.style.transform = 'scale(1.2)';
        setTimeout(() => {
            teamCount.style.transform = 'scale(1)';
        }, 200);
    }
    
    // Fonction de recherche
    function searchTeams() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        currentTeams.forEach(team => {
            const teamName = team.dataset.name;
            const gameName = team.querySelector('.game-value').textContent.toLowerCase();
            
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
    
    // Fonction pour appliquer tous les filtres
    function applyFilters() {
        let visibleTeams = [];
        
        currentTeams.forEach(team => {
            let isVisible = !team.classList.contains('filtered-out');
            
            // Filtre par jeu
            const selectedGame = gameFilter.value.toLowerCase();
            if (selectedGame && team.dataset.game !== selectedGame) {
                isVisible = false;
            }
            
            // Filtre par coach
            const coachStatus = coachFilter.value;
            if (coachStatus === 'with' && team.dataset.coach === 'no') {
                isVisible = false;
            }
            if (coachStatus === 'without' && team.dataset.coach === 'yes') {
                isVisible = false;
            }
            
            if (isVisible) {
                team.classList.remove('hidden');
                visibleTeams.push(team);
            } else {
                team.classList.add('hidden');
            }
        });
        
        // Appliquer le tri
        sortTeams(visibleTeams);
        
        // Mettre à jour le compteur
        updateCounter(visibleTeams.length);
    }
    
    // Fonction de tri
    function sortTeams(teams) {
        const sortValue = sortBy.value;
        const [criteria, order] = sortValue.split('-');
        
        teams.sort((a, b) => {
            let aValue, bValue;
            
            switch(criteria) {
                case 'id':
                    aValue = parseInt(a.dataset.id);
                    bValue = parseInt(b.dataset.id);
                    break;
                case 'name':
                    aValue = a.dataset.name;
                    bValue = b.dataset.name;
                    break;
                case 'date':
                    aValue = parseInt(a.dataset.date);
                    bValue = parseInt(b.dataset.date);
                    break;
                default:
                    return 0;
            }
            
            // Comparaison
            if (typeof aValue === 'string') {
                return order === 'asc' ? 
                    aValue.localeCompare(bValue) : 
                    bValue.localeCompare(aValue);
            } else {
                return order === 'asc' ? 
                    aValue - bValue : 
                    bValue - aValue;
            }
        });
        
        // Réorganiser le DOM
        const grid = document.getElementById('teamsGrid');
        if (grid) {
            teams.forEach(team => {
                grid.appendChild(team);
            });
        }
    }
    
    // Événements
    searchInput.addEventListener('input', searchTeams);
    
    clearSearch.addEventListener('click', () => {
        searchInput.value = '';
        searchTeams();
    });
    
    gameFilter.addEventListener('change', applyFilters);
    sortBy.addEventListener('change', applyFilters);
    coachFilter.addEventListener('change', applyFilters);
    
    resetFiltersBtn.addEventListener('click', () => {
        searchInput.value = '';
        gameFilter.value = '';
        sortBy.value = 'id-asc';
        coachFilter.value = '';
        
        currentTeams.forEach(team => {
            team.classList.remove('hidden', 'filtered-out');
        });
        
        applyFilters();
    });
    
    // Initialisation
    document.addEventListener('DOMContentLoaded', () => {
        applyFilters();
    });
    
    // Gestion de la musique (version simple)
    const musicBtn = document.getElementById('musicBtn');
    const music = document.getElementById('esportMusic');
    let isPlaying = false;
    
    musicBtn.addEventListener('click', function() {
        if (!isPlaying) {
            music.play().then(() => {
                isPlaying = true;
                musicBtn.innerHTML = '🔊 MUSIQUE ON';
                musicBtn.style.background = 'linear-gradient(45deg, var(--neon-green), var(--neon-blue))';
            }).catch(error => {
                console.log(\"Audio error:\", error);
                alert(\"Cliquez d'abord sur la page pour autoriser l'audio.\");
            });
        } else {
            music.pause();
            isPlaying = false;
            musicBtn.innerHTML = '🔇 MUSIQUE OFF';
            musicBtn.style.background = 'linear-gradient(45deg, var(--neon-blue), var(--neon-green))';
        }
    });
    
    // Effet de survol amélioré pour les cartes
    const cards = document.querySelectorAll('.team-card');
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
        return array (  898 => 680,  890 => 675,  884 => 671,  874 => 666,  867 => 661,  853 => 653,  847 => 650,  837 => 643,  828 => 637,  814 => 626,  806 => 625,  798 => 620,  790 => 615,  786 => 614,  777 => 608,  771 => 605,  767 => 604,  763 => 603,  759 => 602,  755 => 601,  751 => 600,  748 => 599,  744 => 598,  740 => 596,  738 => 595,  731 => 591,  701 => 563,  695 => 562,  687 => 560,  684 => 559,  681 => 558,  676 => 557,  674 => 556,  650 => 535,  641 => 529,  633 => 523,  624 => 520,  619 => 518,  615 => 517,  611 => 516,  608 => 515,  605 => 514,  602 => 513,  599 => 512,  596 => 511,  591 => 510,  589 => 509,  580 => 503,  574 => 499,  567 => 498,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "team/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\team\\index.html.twig");
    }
}
