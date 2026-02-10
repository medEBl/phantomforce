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

/* questionnaire_agent/index.html.twig */
class __TwigTemplate_6090656cbcf032e3005716d44659e5e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/index.html.twig"));

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

        yield "Gestion des Questionnaires";
        
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

        /* --- Questionnaire Card --- */
        .quest-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-left: 4px solid var(--admin-accent); /* Cyan accent */
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

        .quest-card:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* --- Preview Box --- */
        .preview-box {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 0.8rem 1rem;
            margin-top: 0.8rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            border: 1px dashed rgba(255, 255, 255, 0.1);
        }
        
        .preview-box i { color: var(--admin-accent); }

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
            background: var(--admin-accent);
            color: black;
            border-color: var(--admin-accent);
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
            <h1 class=\"h3 fw-bold mb-1\">Questionnaires</h1>
            <p class=\"text-muted mb-0\">Gestion des questions par jeu</p>
        </div>
        <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_new");
        yield "\" class=\"btn btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus me-2\"></i> Nouveau
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
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher...\" value=\"";
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
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_index");
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
                <a href=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_index", ["q" => (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 137, $this->source); })()), "sort" => "game", "dir" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 137, $this->source); })()) == "game") && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 137, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        yield "\" 
                   class=\"btn-sort ";
        // line 138
        yield ((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 138, $this->source); })()) == "game")) ? ("active") : (""));
        yield "\">
                   Jeu ";
        // line 139
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 139, $this->source); })()) == "game")) {
            yield "<i class=\"fas fa-caret-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentDir"]) || array_key_exists("currentDir", $context) ? $context["currentDir"] : (function () { throw new RuntimeError('Variable "currentDir" does not exist.', 139, $this->source); })()), "html", null, true);
            yield "\"></i>";
        }
        // line 140
        yield "                </a>
            </div>
        </div>
    </div>

    ";
        // line 146
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "flashes", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 147
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 148
                yield "            <div class=\"alert alert-";
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " mb-4\" style=\"background: rgba(255,255,255,0.1); border:none; color:white;\">
                <i class=\"fas fa-info-circle me-2\"></i> ";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "
    ";
        // line 155
        yield "    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["questionnaire_agents"]) || array_key_exists("questionnaire_agents", $context) ? $context["questionnaire_agents"] : (function () { throw new RuntimeError('Variable "questionnaire_agents" does not exist.', 155, $this->source); })()))) {
            // line 156
            yield "        <div class=\"text-center py-5 text-muted\">
            <i class=\"fas fa-folder-open fa-3x mb-3\"></i>
            <h4>Aucun questionnaire trouvé.</h4>
            <p>Essayez de modifier votre recherche.</p>
        </div>
    ";
        } else {
            // line 162
            yield "        <div class=\"quest-list\">
            ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["questionnaire_agents"]) || array_key_exists("questionnaire_agents", $context) ? $context["questionnaire_agents"] : (function () { throw new RuntimeError('Variable "questionnaire_agents" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["qa"]) {
                // line 164
                yield "                <div class=\"quest-card\">
                    
                    ";
                // line 167
                yield "                    <div style=\"flex: 1; min-width: 280px;\">
                        <div class=\"d-flex align-items-center gap-2 mb-2\">
                            <h5 class=\"mb-0 fw-bold text-white\">";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "game", [], "any", false, false, false, 169), "html", null, true);
                yield "</h5>
                            <span class=\"badge\" style=\"background: rgba(255,255,255,0.1);\">#";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "id", [], "any", false, false, false, 170), "html", null, true);
                yield "</span>
                        </div>
                        
                        <div class=\"preview-box\">
                            <div class=\"text-truncate\"><i class=\"fas fa-question-circle me-2\"></i> ";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "ques1", [], "any", false, false, false, 174), "html", null, true);
                yield "</div>
                            <div class=\"text-truncate\"><i class=\"fas fa-question-circle me-2\"></i> ";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "ques2", [], "any", false, false, false, 175), "html", null, true);
                yield "</div>
                        </div>
                    </div>

                    ";
                // line 180
                yield "                    <div class=\"d-flex gap-2\">
                        <a href=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "id", [], "any", false, false, false, 181)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-light\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                            <i class=\"fas fa-pen\"></i>
                        </a>
                        
                        <form method=\"post\" action=\"";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questionnaire_agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "id", [], "any", false, false, false, 188)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Supprimer ?');\" style=\"margin:0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["qa"], "id", [], "any", false, false, false, 189))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['qa'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            yield "        </div>
    ";
        }
        // line 200
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
        return "questionnaire_agent/index.html.twig";
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
        return array (  424 => 200,  420 => 198,  405 => 189,  401 => 188,  394 => 184,  388 => 181,  385 => 180,  378 => 175,  374 => 174,  367 => 170,  363 => 169,  359 => 167,  355 => 164,  351 => 163,  348 => 162,  340 => 156,  337 => 155,  334 => 153,  328 => 152,  319 => 149,  314 => 148,  309 => 147,  304 => 146,  297 => 140,  291 => 139,  287 => 138,  283 => 137,  280 => 136,  278 => 135,  273 => 132,  268 => 128,  260 => 124,  258 => 123,  251 => 119,  244 => 115,  240 => 114,  236 => 112,  231 => 108,  223 => 102,  216 => 97,  212 => 94,  199 => 93,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Questionnaires{% endblock %}

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

        /* --- Questionnaire Card --- */
        .quest-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-left: 4px solid var(--admin-accent); /* Cyan accent */
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

        .quest-card:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* --- Preview Box --- */
        .preview-box {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 0.8rem 1rem;
            margin-top: 0.8rem;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            border: 1px dashed rgba(255, 255, 255, 0.1);
        }
        
        .preview-box i { color: var(--admin-accent); }

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
            background: var(--admin-accent);
            color: black;
            border-color: var(--admin-accent);
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">

    {# 1. HEADER #}
    <div class=\"page-header\">
        <div>
            <h1 class=\"h3 fw-bold mb-1\">Questionnaires</h1>
            <p class=\"text-muted mb-0\">Gestion des questions par jeu</p>
        </div>
        <a href=\"{{ path('app_questionnaire_agent_new') }}\" class=\"btn btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus me-2\"></i> Nouveau
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
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher...\" value=\"{{ q }}\">
                        <button class=\"btn btn-outline-light\" type=\"submit\">Go</button>
                    </div>

                    {% if q %}
                        <a href=\"{{ path('app_questionnaire_agent_index') }}\" class=\"btn btn-outline-secondary\" title=\"Reset\">
                            <i class=\"fas fa-times\"></i>
                        </a>
                    {% endif %}
                </form>
            </div>

            {# Sort #}
            <div class=\"col-md-6 text-md-end\">
                <span class=\"text-muted small fw-bold me-2 text-uppercase\">Trier :</span>
                
                {% set currentDir = (dir == 'ASC') ? 'up' : 'down' %}
                
                <a href=\"{{ path('app_questionnaire_agent_index', { q: q, sort: 'game', dir: (sort == 'game' and dir == 'ASC') ? 'DESC' : 'ASC' }) }}\" 
                   class=\"btn-sort {{ sort == 'game' ? 'active' : '' }}\">
                   Jeu {% if sort == 'game' %}<i class=\"fas fa-caret-{{ currentDir }}\"></i>{% endif %}
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
    {% if questionnaire_agents is empty %}
        <div class=\"text-center py-5 text-muted\">
            <i class=\"fas fa-folder-open fa-3x mb-3\"></i>
            <h4>Aucun questionnaire trouvé.</h4>
            <p>Essayez de modifier votre recherche.</p>
        </div>
    {% else %}
        <div class=\"quest-list\">
            {% for qa in questionnaire_agents %}
                <div class=\"quest-card\">
                    
                    {# INFO #}
                    <div style=\"flex: 1; min-width: 280px;\">
                        <div class=\"d-flex align-items-center gap-2 mb-2\">
                            <h5 class=\"mb-0 fw-bold text-white\">{{ qa.game }}</h5>
                            <span class=\"badge\" style=\"background: rgba(255,255,255,0.1);\">#{{ qa.id }}</span>
                        </div>
                        
                        <div class=\"preview-box\">
                            <div class=\"text-truncate\"><i class=\"fas fa-question-circle me-2\"></i> {{ qa.ques1 }}</div>
                            <div class=\"text-truncate\"><i class=\"fas fa-question-circle me-2\"></i> {{ qa.ques2 }}</div>
                        </div>
                    </div>

                    {# ACTIONS #}
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('app_questionnaire_agent_show', {'id': qa.id}) }}\" class=\"btn btn-sm btn-outline-light\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_questionnaire_agent_edit', {'id': qa.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\">
                            <i class=\"fas fa-pen\"></i>
                        </a>
                        
                        <form method=\"post\" action=\"{{ path('app_questionnaire_agent_delete', {'id': qa.id}) }}\" onsubmit=\"return confirm('Supprimer ?');\" style=\"margin:0;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ qa.id) }}\">
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
{% endblock %}", "questionnaire_agent/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\questionnaire_agent\\index.html.twig");
    }
}
