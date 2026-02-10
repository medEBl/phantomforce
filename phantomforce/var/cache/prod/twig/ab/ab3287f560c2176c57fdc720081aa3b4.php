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
class __TwigTemplate_35f63b39c958b8922c0188174e885fa6 extends Template
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
        yield "⚔️ BLOOD ARENA - Équipe ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
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
    
    .statistics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
        
        .actions-bar {
            flex-direction: column;
        }
        
        .btn {
            min-width: 100%;
        }
    }
</style>
";
        yield from [];
    }

    // line 405
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 406
        yield "<div class=\"show-container\">
    
    <!-- Éléments flottants pour l'ambiance gaming -->
    <div class=\"floating-elements\">
        ";
        // line 410
        $context["icons"] = ["🎮", "⚡", "🔥", "👑", "🕹️", "🎯", "🏆", "💥", "🚀", "⭐"];
        // line 411
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 412
            yield "            ";
            $context["iconIndex"] = ($context["i"] % Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icons"] ?? null)));
            // line 413
            yield "            ";
            $context["leftPosition"] = (5 + (($context["i"] * 9) % 90));
            // line 414
            yield "            ";
            $context["delay"] = (($context["i"] * 1.3) % 21);
            // line 415
            yield "            ";
            $context["duration"] = (15 + (($context["i"] * 1.7) % 11));
            // line 416
            yield "            <div class=\"floating-element\" style=\"
                left: ";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["leftPosition"] ?? null), "html", null, true);
            yield "%;
                animation-delay: ";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["delay"] ?? null), "html", null, true);
            yield "s;
                animation-duration: ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["duration"] ?? null), "html", null, true);
            yield "s;
            \">
                ";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["iconIndex"] ?? null)] ?? null) : null), "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        yield "    </div>
    
    <!-- En-tête avec effet néon -->
    <div class=\"header-glow\">
        <h1 class=\"main-title\">
            ÉQUIPE: ";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 429), "html", null, true);
        yield "
            <span class=\"team-id\">ID: #";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "id", [], "any", false, false, false, 430), "html", null, true);
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
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 445), "html", null, true);
        yield "
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">🎮 JEU PRINCIPAL</span>
                <div class=\"info-value\">
                    <span class=\"game-badge\">";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "game", [], "any", false, false, false, 452), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">📅 DATE DE CRÉATION</span>
                <div class=\"info-value\">
                    <span class=\"date-badge\">";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "creationDate", [], "any", false, false, false, 459), "d/m/Y"), "html", null, true);
        yield "</span>
                </div>
            </div>
            
            <div class=\"info-card\">
                <span class=\"info-label\">🆔 IDENTIFIANT</span>
                <div class=\"info-value\" style=\"font-family: 'Orbitron', monospace;\">
                    #";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "id", [], "any", false, false, false, 466), "html", null, true);
        yield "
                </div>
            </div>
        </div>
        
                <!-- Coach -->
        ";
        // line 472
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "coachId", [], "any", false, false, false, 472)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 473
            yield "            <div class=\"info-card coach-card\" style=\"grid-column: 1 / -1;\">
                <span class=\"info-label\">👑 COACH</span>
                <div style=\"display: flex; align-items: center; margin-top: 1rem;\">
                    <div class=\"coach-avatar\">
                        👑
                    </div>
                    <div class=\"coach-info\">
                        <div class=\"coach-name\">Coach ID: ";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "coachId", [], "any", false, false, false, 480), "html", null, true);
            yield "</div>
                        <div style=\"color: var(--text-muted);\">
                            Identifiant du coach : #";
            // line 482
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "coachId", [], "any", false, false, false, 482), "html", null, true);
            yield "
                        </div>
                        <div style=\"color: var(--text-muted); margin-top: 0.5rem;\">
                            Équipe coachée depuis le ";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "creationDate", [], "any", false, false, false, 485), "d/m/Y"), "html", null, true);
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 491
            yield "            <div class=\"info-card\" style=\"grid-column: 1 / -1; text-align: center;\">
                <span class=\"info-label\">👑 COACH</span>
                <div class=\"info-value\" style=\"color: var(--text-muted);\">
                    <em>Aucun coach assigné à cette équipe</em>
                </div>
            </div>
        ";
        }
        // line 498
        yield "        
        <!-- Statistiques (exemple) -->
        <div class=\"statistics-grid\">
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "players", [], "any", true, true, false, 502)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "players", [], "any", false, false, false, 502), 5)) : (5)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">JOUEURS</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "wins", [], "any", true, true, false, 506)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "wins", [], "any", false, false, false, 506), 12)) : (12)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">VICTOIRES</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "losses", [], "any", true, true, false, 510)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "losses", [], "any", false, false, false, 510), 3)) : (3)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">DÉFAITES</div>
            </div>
            <div class=\"stat-card\">
                <div class=\"stat-value\">";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "tournaments", [], "any", true, true, false, 514)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "tournaments", [], "any", false, false, false, 514), 8)) : (8)), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">TOURNOIS</div>
            </div>
        </div>
        
        <!-- Barre d'actions -->
        <div class=\"actions-bar\">
            <a href=\"";
        // line 521
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        yield "\" class=\"btn btn-back\">
                🔙 RETOUR À LA LISTE
            </a>
            <a href=\"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "id", [], "any", false, false, false, 524)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">
                ✏️ MODIFIER
            </a>
        </div>
        
    </div>
    
</div>

<script>
    // Animation au chargement
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            document.querySelector('.show-container').style.opacity = '1';
        }, 100);
        
        // Confirmation de suppression
        const deleteBtn = document.querySelector('.btn-delete');
        if (deleteBtn) {
            deleteBtn.addEventListener('click', function(e) {
                if (!confirm('⚠️ Êtes-vous sûr de vouloir supprimer cette équipe ? Cette action est irréversible.')) {
                    e.preventDefault();
                }
            });
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
        return array (  683 => 524,  677 => 521,  667 => 514,  660 => 510,  653 => 506,  646 => 502,  640 => 498,  631 => 491,  622 => 485,  616 => 482,  611 => 480,  602 => 473,  600 => 472,  591 => 466,  581 => 459,  571 => 452,  561 => 445,  543 => 430,  539 => 429,  532 => 424,  523 => 421,  518 => 419,  514 => 418,  510 => 417,  507 => 416,  504 => 415,  501 => 414,  498 => 413,  495 => 412,  490 => 411,  488 => 410,  482 => 406,  475 => 405,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/team/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\team\\show.html.twig");
    }
}
