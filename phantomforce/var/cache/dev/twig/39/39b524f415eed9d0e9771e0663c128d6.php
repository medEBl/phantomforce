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

/* back/matchy/show.html.twig */
class __TwigTemplate_5f4c8c2568d7f94ec60f58ca695fa386 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/show.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "🎮 Admin - Match #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Détails du match</h1>
            <p class=\"mb-0 text-muted\">Match #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 11, $this->source); })()), "game", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        </div>
        <div>
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Informations principales -->
    <div class=\"col-md-8\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Informations du match</h5>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Jeu</label>
                    <p class=\"h5\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 30, $this->source); })()), "game", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Date du match</label>
                    <p class=\"h5\">
                        ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 36, $this->source); })()), "matchDate", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 37, $this->source); })()), "matchDate", [], "any", false, false, false, 37), "d/m/Y à H:i"), "html", null, true);
            yield "
                        ";
        } else {
            // line 39
            yield "                            <span class=\"text-muted\">Non définie</span>
                        ";
        }
        // line 41
        yield "                    </p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Statut</label>
                    <p>
                        ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47) == "planned")) {
            // line 48
            yield "                            <span class=\"badge-admin badge-planned\">Planifié</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49) == "ongoing")) {
            // line 50
            yield "                            <span class=\"badge-admin badge-ongoing\">En cours</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 51, $this->source); })()), "status", [], "any", false, false, false, 51) == "finished")) {
            // line 52
            yield "                            <span class=\"badge-admin badge-finished\">Terminé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53) == "cancelled")) {
            // line 54
            yield "                            <span class=\"badge-admin badge-cancelled\">Annulé</span>
                        ";
        }
        // line 56
        yield "                    </p>
                </div>
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-chart-bar me-2\"></i>Scores</h5>
            
            <div class=\"row text-center\">
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 68), "name", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 68, $this->source); })()), "team1", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "Équipe 1")) : ("Équipe 1")), "html", null, true);
        yield "</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 70, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 70, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 70), "html", null, true)) : ("0"));
        yield "
                        </div>
                        ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 72, $this->source); })()), "winnerTeam", [], "any", false, false, false, 72) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 72, $this->source); })()), "winnerTeam", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 72, $this->source); })()), "team1", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)))) {
            // line 73
            yield "                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        ";
        }
        // line 79
        yield "                    </div>
                </div>
                
                <div class=\"col-md-2 d-flex align-items-center justify-content-center\">
                    <div class=\"display-5\">VS</div>
                </div>
                
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 88), "name", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 88, $this->source); })()), "team2", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "Équipe 2")) : ("Équipe 2")), "html", null, true);
        yield "</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            ";
        // line 90
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 90, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 90)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 90, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 90), "html", null, true)) : ("0"));
        yield "
                        </div>
                        ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 92, $this->source); })()), "winnerTeam", [], "any", false, false, false, 92) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 92, $this->source); })()), "winnerTeam", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 92, $this->source); })()), "team2", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)))) {
            // line 93
            yield "                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        ";
        }
        // line 99
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-cogs me-2\"></i>Actions</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
        yield "\" 
                   class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier ce match
                </a>
                
                <a href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
        yield "\" 
                   class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir sur le site
                </a>
                
                <hr class=\"my-2\">
                
                <form method=\"post\" action=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 123, $this->source); })()), "id", [], "any", false, false, false, 123)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Supprimer définitivement ce match ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn-admin btn-admin-danger w-100\">
                        <i class=\"fas fa-trash\"></i> Supprimer ce match
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Équipes -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-users me-2\"></i>Équipes</h5>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 1</label>
                <p class=\"mb-1\">
                    <strong>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 140), "name", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 140, $this->source); })()), "team1", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong>
                </p>
                ";
        // line 142
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 142, $this->source); })()), "team1", [], "any", false, false, false, 142) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 142, $this->source); })()), "team1", [], "any", false, false, false, 142), "game", [], "any", false, false, false, 142))) {
            // line 143
            yield "                    <small class=\"text-muted\">Jeu: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 143, $this->source); })()), "team1", [], "any", false, false, false, 143), "game", [], "any", false, false, false, 143), "html", null, true);
            yield "</small>
                ";
        }
        // line 145
        yield "            </div>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 2</label>
                <p class=\"mb-1\">
                    <strong>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 150), "name", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 150, $this->source); })()), "team2", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong>
                </p>
                ";
        // line 152
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 152, $this->source); })()), "team2", [], "any", false, false, false, 152) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 152, $this->source); })()), "team2", [], "any", false, false, false, 152), "game", [], "any", false, false, false, 152))) {
            // line 153
            yield "                    <small class=\"text-muted\">Jeu: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 153, $this->source); })()), "team2", [], "any", false, false, false, 153), "game", [], "any", false, false, false, 153), "html", null, true);
            yield "</small>
                ";
        }
        // line 155
        yield "            </div>
            
            ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 157, $this->source); })()), "winnerTeam", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                <div class=\"alert\" style=\"background: rgba(0, 255, 136, 0.1); border-color: var(--admin-success);\">
                    <i class=\"fas fa-crown me-2\"></i>
                    <strong>Gagnant:</strong> ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 160, $this->source); })()), "winnerTeam", [], "any", false, false, false, 160), "name", [], "any", false, false, false, 160), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 163
        yield "        </div>
    </div>
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
        return "back/matchy/show.html.twig";
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
        return array (  353 => 163,  347 => 160,  343 => 158,  341 => 157,  337 => 155,  331 => 153,  329 => 152,  324 => 150,  317 => 145,  311 => 143,  309 => 142,  304 => 140,  286 => 125,  281 => 123,  271 => 116,  263 => 111,  249 => 99,  241 => 93,  239 => 92,  234 => 90,  229 => 88,  218 => 79,  210 => 73,  208 => 72,  203 => 70,  198 => 68,  184 => 56,  180 => 54,  178 => 53,  175 => 52,  173 => 51,  170 => 50,  168 => 49,  165 => 48,  163 => 47,  155 => 41,  151 => 39,  145 => 37,  143 => 36,  134 => 30,  115 => 14,  107 => 11,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/matchy/show.html.twig #}
{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Match #{{ matchy.id }}{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Détails du match</h1>
            <p class=\"mb-0 text-muted\">Match #{{ matchy.id }} - {{ matchy.game }}</p>
        </div>
        <div>
            <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Informations principales -->
    <div class=\"col-md-8\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Informations du match</h5>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Jeu</label>
                    <p class=\"h5\">{{ matchy.game }}</p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Date du match</label>
                    <p class=\"h5\">
                        {% if matchy.matchDate %}
                            {{ matchy.matchDate|date('d/m/Y à H:i') }}
                        {% else %}
                            <span class=\"text-muted\">Non définie</span>
                        {% endif %}
                    </p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Statut</label>
                    <p>
                        {% if matchy.status == 'planned' %}
                            <span class=\"badge-admin badge-planned\">Planifié</span>
                        {% elseif matchy.status == 'ongoing' %}
                            <span class=\"badge-admin badge-ongoing\">En cours</span>
                        {% elseif matchy.status == 'finished' %}
                            <span class=\"badge-admin badge-finished\">Terminé</span>
                        {% elseif matchy.status == 'cancelled' %}
                            <span class=\"badge-admin badge-cancelled\">Annulé</span>
                        {% endif %}
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-chart-bar me-2\"></i>Scores</h5>
            
            <div class=\"row text-center\">
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">{{ matchy.team1.name|default('Équipe 1') }}</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            {{ matchy.scoreTeam1 ?? '0' }}
                        </div>
                        {% if matchy.winnerTeam and matchy.winnerTeam.id == matchy.team1.id %}
                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"col-md-2 d-flex align-items-center justify-content-center\">
                    <div class=\"display-5\">VS</div>
                </div>
                
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">{{ matchy.team2.name|default('Équipe 2') }}</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            {{ matchy.scoreTeam2 ?? '0' }}
                        </div>
                        {% if matchy.winnerTeam and matchy.winnerTeam.id == matchy.team2.id %}
                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-cogs me-2\"></i>Actions</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"{{ path('app_back_matchy_edit', {'id': matchy.id}) }}\" 
                   class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier ce match
                </a>
                
                <a href=\"{{ path('app_matchy_show', {'id': matchy.id}) }}\" 
                   class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir sur le site
                </a>
                
                <hr class=\"my-2\">
                
                <form method=\"post\" action=\"{{ path('app_back_matchy_delete', {'id': matchy.id}) }}\" 
                      onsubmit=\"return confirm('Supprimer définitivement ce match ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ matchy.id) }}\">
                    <button type=\"submit\" class=\"btn-admin btn-admin-danger w-100\">
                        <i class=\"fas fa-trash\"></i> Supprimer ce match
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Équipes -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-users me-2\"></i>Équipes</h5>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 1</label>
                <p class=\"mb-1\">
                    <strong>{{ matchy.team1.name|default('N/A') }}</strong>
                </p>
                {% if matchy.team1 and matchy.team1.game %}
                    <small class=\"text-muted\">Jeu: {{ matchy.team1.game }}</small>
                {% endif %}
            </div>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 2</label>
                <p class=\"mb-1\">
                    <strong>{{ matchy.team2.name|default('N/A') }}</strong>
                </p>
                {% if matchy.team2 and matchy.team2.game %}
                    <small class=\"text-muted\">Jeu: {{ matchy.team2.game }}</small>
                {% endif %}
            </div>
            
            {% if matchy.winnerTeam %}
                <div class=\"alert\" style=\"background: rgba(0, 255, 136, 0.1); border-color: var(--admin-success);\">
                    <i class=\"fas fa-crown me-2\"></i>
                    <strong>Gagnant:</strong> {{ matchy.winnerTeam.name }}
                </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "back/matchy/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\matchy\\show.html.twig");
    }
}
