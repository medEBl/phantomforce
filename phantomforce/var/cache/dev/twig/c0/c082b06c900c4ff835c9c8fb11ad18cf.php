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

/* agent/index.html.twig */
class __TwigTemplate_a416812b56fd398ab390804f34c8886f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/index.html.twig"));

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

        yield "Gestion des Agents";
        
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
    <style>
        /* --- Page Layout --- */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        /* --- Control Panel (Search/Sort) --- */
        .control-panel {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        /* --- Agent Card (Dark Mode) --- */
        .agent-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-left: 4px solid #ff2d2d; /* RED Accent for Agents */
            border-radius: 10px;
            margin-bottom: 1rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .agent-card:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 45, 45, 0.3);
        }

        /* --- Badges & Status --- */
        .badge-custom {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
        }
        
        /* Specific Status Colors */
        .status-active { border-left-color: #2dff8b !important; }
        .status-inactive { border-left-color: #ffb800 !important; }
        .status-banned { border-left-color: #ff2d2d !important; }

        /* --- Inputs & Buttons Overrides --- */
        .form-control, .input-group-text {
            background: rgba(0, 0, 0, 0.2) !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
            color: white !important;
        }

        .btn-sort {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-sort:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        .btn-sort.active {
            background: #ff2d2d; /* Red active state */
            color: white;
            border-color: #ff2d2d;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        // line 94
        yield "<div class=\"container-fluid\">

    ";
        // line 97
        yield "    <div class=\"page-header\">
        <div>
            <h1 class=\"h3 fw-bold mb-1\">Agents</h1>
            <p class=\"text-muted mb-0\">Gestion des agents du back-office</p>
        </div>
        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_new");
        yield "\" class=\"btn btn-admin btn-admin-primary\" style=\"background: #ff2d2d; color: white;\">
            <i class=\"fas fa-plus me-2\"></i> Créer un Agent
        </a>
    </div>

    ";
        // line 108
        yield "    <div class=\"control-panel\">
        <div class=\"row g-3 align-items-center\">
            
            ";
        // line 112
        yield "            <div class=\"col-md-6\">
                <form method=\"get\" class=\"d-flex gap-2\">
                    <input type=\"hidden\" name=\"sort\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"dir\" value=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 115, $this->source); })()), "html", null, true);
        yield "\">

                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher (Pseudo, Jeu...)\" value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "\">
                        <button class=\"btn btn-outline-light\" type=\"submit\">Go</button>
                    </div>

                    ";
        // line 123
        if ((($tmp = (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 123, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index");
            yield "\" class=\"btn btn-outline-secondary\" title=\"Reset\">
                            <i class=\"fas fa-times\"></i>
                        </a>
                    ";
        }
        // line 128
        yield "                </form>
            </div>

            ";
        // line 132
        yield "            <div class=\"col-md-6 text-md-end\">
                <span class=\"text-muted small fw-bold me-2 text-uppercase\">Trier :</span>
                
                ";
        // line 135
        $context["currentDir"] = ((((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 135, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        // line 136
        yield "                
                ";
        // line 138
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index", ["q" => (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 138, $this->source); })()), "sort" => "pseudo", "dir" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 138, $this->source); })()) == "pseudo") && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 138, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" 
                   class=\"btn-sort ";
        // line 139
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 139, $this->source); })()) == "pseudo")) ? ("active") : (""));
        yield "\">
                   Pseudo ";
        // line 140
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 140, $this->source); })()) == "pseudo")) {
            yield "<i class=\"fas fa-caret-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentDir"]) || array_key_exists("currentDir", $context) ? $context["currentDir"] : (function () { throw new RuntimeError('Variable "currentDir" does not exist.', 140, $this->source); })()), "html", null, true);
            yield "\"></i>";
        }
        // line 141
        yield "                </a>

                ";
        // line 144
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index", ["q" => (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 144, $this->source); })()), "sort" => "game", "dir" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 144, $this->source); })()) == "game") && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 144, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" 
                   class=\"btn-sort ";
        // line 145
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 145, $this->source); })()) == "game")) ? ("active") : (""));
        yield "\">
                   Jeu ";
        // line 146
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 146, $this->source); })()) == "game")) {
            yield "<i class=\"fas fa-caret-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentDir"]) || array_key_exists("currentDir", $context) ? $context["currentDir"] : (function () { throw new RuntimeError('Variable "currentDir" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "\"></i>";
        }
        // line 147
        yield "                </a>

                ";
        // line 150
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_index", ["q" => (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 150, $this->source); })()), "sort" => "status", "dir" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 150, $this->source); })()) == "status") && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 150, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" 
                   class=\"btn-sort ";
        // line 151
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 151, $this->source); })()) == "status")) ? ("active") : (""));
        yield "\">
                   Statut ";
        // line 152
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 152, $this->source); })()) == "status")) {
            yield "<i class=\"fas fa-caret-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentDir"]) || array_key_exists("currentDir", $context) ? $context["currentDir"] : (function () { throw new RuntimeError('Variable "currentDir" does not exist.', 152, $this->source); })()), "html", null, true);
            yield "\"></i>";
        }
        // line 153
        yield "                </a>
            </div>
        </div>
    </div>

    ";
        // line 159
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "flashes", [], "any", false, false, false, 159));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 160
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 161
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " mb-4\" style=\"background: rgba(255,255,255,0.1); border:none; color:white;\">
                <i class=\"fas fa-info-circle me-2\"></i> ";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "
    ";
        // line 168
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 168, $this->source); })()))) {
            // line 169
            yield "        <div class=\"text-center py-5 text-muted\">
            <i class=\"fas fa-folder-open fa-3x mb-3\"></i>
            <h4>Aucun agent trouvé.</h4>
            <p>Essayez de modifier votre recherche.</p>
        </div>
    ";
        } else {
            // line 175
            yield "        <div class=\"agent-list\">
            ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 176, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 177
                yield "                
                ";
                // line 179
                yield "                ";
                $context["statusClass"] = "status-banned";
                // line 180
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "status", [], "any", false, false, false, 180) == "active")) {
                    $context["statusClass"] = "status-active";
                    // line 181
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "status", [], "any", false, false, false, 181) == "inactive")) {
                    $context["statusClass"] = "status-inactive";
                    // line 182
                    yield "                ";
                }
                // line 183
                yield "
                <div class=\"agent-card ";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 184, $this->source); })()), "html", null, true);
                yield "\">
                    
                    ";
                // line 187
                yield "                    <div style=\"flex: 1; min-width: 280px;\">
                        <div class=\"d-flex align-items-center gap-2 mb-2\">
                            <h5 class=\"mb-0 fw-bold text-white\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "pseudo", [], "any", false, false, false, 189), "html", null, true);
                yield "</h5>
                            <span class=\"badge\" style=\"background: rgba(255,255,255,0.1);\">";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "game", [], "any", false, false, false, 190), "html", null, true);
                yield "</span>
                        </div>

                        <div class=\"d-flex align-items-center gap-2 mb-2\">
                            ";
                // line 195
                yield "                            <span class=\"badge badge-custom 
                                ";
                // line 196
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "status", [], "any", false, false, false, 196) == "active")) {
                    yield " bg-success text-white
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 197
$context["agent"], "status", [], "any", false, false, false, 197) == "inactive")) {
                    yield " bg-warning text-dark
                                ";
                } else {
                    // line 198
                    yield " bg-danger text-white
                                ";
                }
                // line 199
                yield "\">
                                ";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "status", [], "any", false, false, false, 200)), "html", null, true);
                yield "
                            </span>

                            <small class=\"text-muted\">
                                <i class=\"fas fa-ranking-star\"></i> ";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "rank", [], "any", false, false, false, 204), "html", null, true);
                yield "
                            </small>
                        </div>
                        
                        <div class=\"small text-muted\">
                            ";
                // line 209
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "socialsLink", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 210
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "socialsLink", [], "any", false, false, false, 210), "html", null, true);
                    yield "\" target=\"_blank\" class=\"text-decoration-none\" style=\"color: #4d7cff;\">
                                    <i class=\"fab fa-discord\"></i> Lien Social
                                </a>
                            ";
                } else {
                    // line 214
                    yield "                                <span><i class=\"fas fa-ban\"></i> Pas de lien</span>
                            ";
                }
                // line 216
                yield "                        </div>
                    </div>

                    ";
                // line 220
                yield "                    <div class=\"d-flex gap-2\">
                        <a href=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 221)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-light\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 224)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                            <i class=\"fas fa-pen\"></i>
                        </a>
                        
                        <form method=\"post\" action=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 228)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Supprimer cet agent ?');\" style=\"margin:0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 229))), "html", null, true);
                yield "\">
                            <button class=\"btn btn-sm btn-outline-danger\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            yield "        </div>
    ";
        }
        // line 240
        yield "
</div>
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
        return "agent/index.html.twig";
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
        return array (  526 => 240,  522 => 238,  507 => 229,  503 => 228,  496 => 224,  490 => 221,  487 => 220,  482 => 216,  478 => 214,  470 => 210,  468 => 209,  460 => 204,  453 => 200,  450 => 199,  446 => 198,  441 => 197,  437 => 196,  434 => 195,  427 => 190,  423 => 189,  419 => 187,  414 => 184,  411 => 183,  408 => 182,  404 => 181,  400 => 180,  397 => 179,  394 => 177,  390 => 176,  387 => 175,  379 => 169,  376 => 168,  373 => 166,  367 => 165,  358 => 162,  353 => 161,  348 => 160,  343 => 159,  336 => 153,  330 => 152,  326 => 151,  321 => 150,  317 => 147,  311 => 146,  307 => 145,  302 => 144,  298 => 141,  292 => 140,  288 => 139,  283 => 138,  280 => 136,  278 => 135,  273 => 132,  268 => 128,  260 => 124,  258 => 123,  251 => 119,  244 => 115,  240 => 114,  236 => 112,  231 => 108,  223 => 102,  216 => 97,  212 => 94,  199 => 93,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Agents{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* --- Page Layout --- */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        /* --- Control Panel (Search/Sort) --- */
        .control-panel {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        /* --- Agent Card (Dark Mode) --- */
        .agent-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-left: 4px solid #ff2d2d; /* RED Accent for Agents */
            border-radius: 10px;
            margin-bottom: 1rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .agent-card:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 45, 45, 0.3);
        }

        /* --- Badges & Status --- */
        .badge-custom {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
        }
        
        /* Specific Status Colors */
        .status-active { border-left-color: #2dff8b !important; }
        .status-inactive { border-left-color: #ffb800 !important; }
        .status-banned { border-left-color: #ff2d2d !important; }

        /* --- Inputs & Buttons Overrides --- */
        .form-control, .input-group-text {
            background: rgba(0, 0, 0, 0.2) !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
            color: white !important;
        }

        .btn-sort {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-sort:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        .btn-sort.active {
            background: #ff2d2d; /* Red active state */
            color: white;
            border-color: #ff2d2d;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">

    {# 1. HEADER #}
    <div class=\"page-header\">
        <div>
            <h1 class=\"h3 fw-bold mb-1\">Agents</h1>
            <p class=\"text-muted mb-0\">Gestion des agents du back-office</p>
        </div>
        <a href=\"{{ path('app_agent_new') }}\" class=\"btn btn-admin btn-admin-primary\" style=\"background: #ff2d2d; color: white;\">
            <i class=\"fas fa-plus me-2\"></i> Créer un Agent
        </a>
    </div>

    {# 2. CONTROL PANEL #}
    <div class=\"control-panel\">
        <div class=\"row g-3 align-items-center\">
            
            {# Search #}
            <div class=\"col-md-6\">
                <form method=\"get\" class=\"d-flex gap-2\">
                    <input type=\"hidden\" name=\"sort\" value=\"{{ sort }}\">
                    <input type=\"hidden\" name=\"dir\" value=\"{{ dir }}\">

                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher (Pseudo, Jeu...)\" value=\"{{ q }}\">
                        <button class=\"btn btn-outline-light\" type=\"submit\">Go</button>
                    </div>

                    {% if q %}
                        <a href=\"{{ path('app_agent_index') }}\" class=\"btn btn-outline-secondary\" title=\"Reset\">
                            <i class=\"fas fa-times\"></i>
                        </a>
                    {% endif %}
                </form>
            </div>

            {# Sort #}
            <div class=\"col-md-6 text-md-end\">
                <span class=\"text-muted small fw-bold me-2 text-uppercase\">Trier :</span>
                
                {% set currentDir = (dir == 'ASC') ? 'up' : 'down' %}
                
                {# Pseudo #}
                <a href=\"{{ path('app_agent_index', { q: q, sort: 'pseudo', dir: (sort == 'pseudo' and dir == 'ASC') ? 'DESC' : 'ASC' }) }}\" 
                   class=\"btn-sort {{ sort == 'pseudo' ? 'active' : '' }}\">
                   Pseudo {% if sort == 'pseudo' %}<i class=\"fas fa-caret-{{ currentDir }}\"></i>{% endif %}
                </a>

                {# Game #}
                <a href=\"{{ path('app_agent_index', { q: q, sort: 'game', dir: (sort == 'game' and dir == 'ASC') ? 'DESC' : 'ASC' }) }}\" 
                   class=\"btn-sort {{ sort == 'game' ? 'active' : '' }}\">
                   Jeu {% if sort == 'game' %}<i class=\"fas fa-caret-{{ currentDir }}\"></i>{% endif %}
                </a>

                {# Status #}
                <a href=\"{{ path('app_agent_index', { q: q, sort: 'status', dir: (sort == 'status' and dir == 'ASC') ? 'DESC' : 'ASC' }) }}\" 
                   class=\"btn-sort {{ sort == 'status' ? 'active' : '' }}\">
                   Statut {% if sort == 'status' %}<i class=\"fas fa-caret-{{ currentDir }}\"></i>{% endif %}
                </a>
            </div>
        </div>
    </div>

    {# 3. ALERTS #}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} mb-4\" style=\"background: rgba(255,255,255,0.1); border:none; color:white;\">
                <i class=\"fas fa-info-circle me-2\"></i> {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    {# 4. LIST #}
    {% if agents is empty %}
        <div class=\"text-center py-5 text-muted\">
            <i class=\"fas fa-folder-open fa-3x mb-3\"></i>
            <h4>Aucun agent trouvé.</h4>
            <p>Essayez de modifier votre recherche.</p>
        </div>
    {% else %}
        <div class=\"agent-list\">
            {% for agent in agents %}
                
                {# Determine status class for the colored border #}
                {% set statusClass = 'status-banned' %}
                {% if agent.status == 'active' %}{% set statusClass = 'status-active' %}
                {% elseif agent.status == 'inactive' %}{% set statusClass = 'status-inactive' %}
                {% endif %}

                <div class=\"agent-card {{ statusClass }}\">
                    
                    {# LEFT: Info #}
                    <div style=\"flex: 1; min-width: 280px;\">
                        <div class=\"d-flex align-items-center gap-2 mb-2\">
                            <h5 class=\"mb-0 fw-bold text-white\">{{ agent.pseudo }}</h5>
                            <span class=\"badge\" style=\"background: rgba(255,255,255,0.1);\">{{ agent.game }}</span>
                        </div>

                        <div class=\"d-flex align-items-center gap-2 mb-2\">
                            {# Status Badge #}
                            <span class=\"badge badge-custom 
                                {% if agent.status == 'active' %} bg-success text-white
                                {% elseif agent.status == 'inactive' %} bg-warning text-dark
                                {% else %} bg-danger text-white
                                {% endif %}\">
                                {{ agent.status|capitalize }}
                            </span>

                            <small class=\"text-muted\">
                                <i class=\"fas fa-ranking-star\"></i> {{ agent.rank }}
                            </small>
                        </div>
                        
                        <div class=\"small text-muted\">
                            {% if agent.socialsLink %}
                                <a href=\"{{ agent.socialsLink }}\" target=\"_blank\" class=\"text-decoration-none\" style=\"color: #4d7cff;\">
                                    <i class=\"fab fa-discord\"></i> Lien Social
                                </a>
                            {% else %}
                                <span><i class=\"fas fa-ban\"></i> Pas de lien</span>
                            {% endif %}
                        </div>
                    </div>

                    {# RIGHT: Actions #}
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('app_agent_show', {'id': agent.id}) }}\" class=\"btn btn-sm btn-outline-light\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_agent_edit', {'id': agent.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                            <i class=\"fas fa-pen\"></i>
                        </a>
                        
                        <form method=\"post\" action=\"{{ path('app_agent_delete', {'id': agent.id}) }}\" onsubmit=\"return confirm('Supprimer cet agent ?');\" style=\"margin:0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ agent.id) }}\">
                            <button class=\"btn btn-sm btn-outline-danger\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </div>

                </div>
            {% endfor %}
        </div>
    {% endif %}

</div>
{% endblock %}", "agent/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\agent\\index.html.twig");
    }
}
