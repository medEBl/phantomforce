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
                
                <!-- NOUVEAU : Localisation badge -->
                ";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 60, $this->source); })()), "location", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Localisation</label>
                    <p>
                        <span class=\"badge-admin\" style=\"background: #ffc107; color: #000;\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i> Localisé
                        </span>
                    </p>
                </div>
                ";
        }
        // line 70
        yield "            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-chart-bar me-2\"></i>Scores</h5>
            
            <div class=\"row text-center\">
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 80), "name", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 80, $this->source); })()), "team1", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "Équipe 1")) : ("Équipe 1")), "html", null, true);
        yield "</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            ";
        // line 82
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 82, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 82)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 82, $this->source); })()), "scoreTeam1", [], "any", false, false, false, 82), "html", null, true)) : ("0"));
        yield "
                        </div>
                        ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 84, $this->source); })()), "winnerTeam", [], "any", false, false, false, 84) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 84, $this->source); })()), "winnerTeam", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 84, $this->source); })()), "team1", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)))) {
            // line 85
            yield "                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        ";
        }
        // line 91
        yield "                    </div>
                </div>
                
                <div class=\"col-md-2 d-flex align-items-center justify-content-center\">
                    <div class=\"display-5\">VS</div>
                </div>
                
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 100), "name", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 100, $this->source); })()), "team2", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "Équipe 2")) : ("Équipe 2")), "html", null, true);
        yield "</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            ";
        // line 102
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", true, true, false, 102) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 102, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 102)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 102, $this->source); })()), "scoreTeam2", [], "any", false, false, false, 102), "html", null, true)) : ("0"));
        yield "
                        </div>
                        ";
        // line 104
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 104, $this->source); })()), "winnerTeam", [], "any", false, false, false, 104) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 104, $this->source); })()), "winnerTeam", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 104, $this->source); })()), "team2", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)))) {
            // line 105
            yield "                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        ";
        }
        // line 111
        yield "                    </div>
                </div>
            </div>
        </div>
        
        <!-- NOUVEAU : Section Localisation détaillée -->
        ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 117, $this->source); })()), "location", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "        <div class=\"admin-card\" style=\"border-left: 4px solid #ffc107;\">
            <h5 class=\"mb-3\" style=\"color: #ffc107;\">
                <i class=\"fas fa-map-marker-alt me-2\"></i>Localisation de l'arène
            </h5>
            
            <div class=\"row\">
                <div class=\"col-md-12 mb-3\">
                    <label class=\"text-muted\">Adresse</label>
                    <p class=\"h6\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 126, $this->source); })()), "location", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>
                </div>
                
                ";
            // line 129
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 129, $this->source); })()), "latitude", [], "any", false, false, false, 129) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 129, $this->source); })()), "longitude", [], "any", false, false, false, 129))) {
                // line 130
                yield "                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Latitude</label>
                    <p class=\"h6\">";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 132, $this->source); })()), "latitude", [], "any", false, false, false, 132), 6), "html", null, true);
                yield "</p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Longitude</label>
                    <p class=\"h6\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 137, $this->source); })()), "longitude", [], "any", false, false, false, 137), 6), "html", null, true);
                yield "</p>
                </div>
                
                <div class=\"col-md-12\">
                    <a href=\"https://www.google.com/maps/search/?api=1&query=";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 141, $this->source); })()), "latitude", [], "any", false, false, false, 141), "html", null, true);
                yield ",";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 141, $this->source); })()), "longitude", [], "any", false, false, false, 141), "html", null, true);
                yield "\" 
                       target=\"_blank\" 
                       class=\"btn-admin\" 
                       style=\"background: #ffc107; color: #000; border: none;\">
                        <i class=\"fas fa-map-marked-alt\"></i> Ouvrir dans Google Maps
                    </a>
                </div>
                ";
            }
            // line 149
            yield "            </div>
        </div>
        ";
        }
        // line 152
        yield "    </div>
    
    <!-- Actions -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-cogs me-2\"></i>Actions</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)]), "html", null, true);
        yield "\" 
                   class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier ce match
                </a>
                
                <a href=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165)]), "html", null, true);
        yield "\" 
                   class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir sur le site
                </a>
                
                <hr class=\"my-2\">
                
                <form method=\"post\" action=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Supprimer définitivement ce match ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174))), "html", null, true);
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
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 189), "name", [], "any", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 189, $this->source); })()), "team1", [], "any", false, false, false, 189), "name", [], "any", false, false, false, 189), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong>
                </p>
                ";
        // line 191
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 191, $this->source); })()), "team1", [], "any", false, false, false, 191) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 191, $this->source); })()), "team1", [], "any", false, false, false, 191), "game", [], "any", false, false, false, 191))) {
            // line 192
            yield "                    <small class=\"text-muted\">Jeu: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 192, $this->source); })()), "team1", [], "any", false, false, false, 192), "game", [], "any", false, false, false, 192), "html", null, true);
            yield "</small>
                ";
        }
        // line 194
        yield "            </div>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 2</label>
                <p class=\"mb-1\">
                    <strong>";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 199), "name", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 199, $this->source); })()), "team2", [], "any", false, false, false, 199), "name", [], "any", false, false, false, 199), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong>
                </p>
                ";
        // line 201
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 201, $this->source); })()), "team2", [], "any", false, false, false, 201) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 201, $this->source); })()), "team2", [], "any", false, false, false, 201), "game", [], "any", false, false, false, 201))) {
            // line 202
            yield "                    <small class=\"text-muted\">Jeu: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 202, $this->source); })()), "team2", [], "any", false, false, false, 202), "game", [], "any", false, false, false, 202), "html", null, true);
            yield "</small>
                ";
        }
        // line 204
        yield "            </div>
            
            ";
        // line 206
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 206, $this->source); })()), "winnerTeam", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
            yield "                <div class=\"alert\" style=\"background: rgba(0, 255, 136, 0.1); border-color: var(--admin-success);\">
                    <i class=\"fas fa-crown me-2\"></i>
                    <strong>Gagnant:</strong> ";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 209, $this->source); })()), "winnerTeam", [], "any", false, false, false, 209), "name", [], "any", false, false, false, 209), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 212
        yield "        </div>
        
        <!-- NOUVEAU : Mini carte de localisation -->
        ";
        // line 215
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 215, $this->source); })()), "location", [], "any", false, false, false, 215) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 215, $this->source); })()), "latitude", [], "any", false, false, false, 215)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 215, $this->source); })()), "longitude", [], "any", false, false, false, 215))) {
            // line 216
            yield "        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-map-pin me-2\" style=\"color: #ffc107;\"></i>Aperçu</h5>
            
            <div style=\"height: 150px; background: rgba(0,0,0,0.3); border-radius: 8px; overflow: hidden; position: relative;\">
                <div style=\"position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; align-items: center; justify-content: center; background: linear-gradient(45deg, #1a1a2e, #16213e);\">
                    <div style=\"text-align: center;\">
                        <i class=\"fas fa-map-marked-alt fa-3x mb-2\" style=\"color: #ffc107;\"></i>
                        <p class=\"mb-0 small\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 223, $this->source); })()), "location", [], "any", false, false, false, 223), 0, 30), "html", null, true);
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 223, $this->source); })()), "location", [], "any", false, false, false, 223)) > 30)) ? ("...") : (""));
            yield "</p>
                        <p class=\"mb-0 small text-muted\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 224, $this->source); })()), "latitude", [], "any", false, false, false, 224), 4), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 224, $this->source); })()), "longitude", [], "any", false, false, false, 224), 4), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
            
            <div class=\"mt-2 text-center\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle\"></i> Cliquez sur \"Ouvrir dans Google Maps\" pour voir la carte
                </small>
            </div>
        </div>
        ";
        }
        // line 236
        yield "    </div>
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
        return array (  469 => 236,  452 => 224,  447 => 223,  438 => 216,  436 => 215,  431 => 212,  425 => 209,  421 => 207,  419 => 206,  415 => 204,  409 => 202,  407 => 201,  402 => 199,  395 => 194,  389 => 192,  387 => 191,  382 => 189,  364 => 174,  359 => 172,  349 => 165,  341 => 160,  331 => 152,  326 => 149,  313 => 141,  306 => 137,  298 => 132,  294 => 130,  292 => 129,  286 => 126,  276 => 118,  274 => 117,  266 => 111,  258 => 105,  256 => 104,  251 => 102,  246 => 100,  235 => 91,  227 => 85,  225 => 84,  220 => 82,  215 => 80,  203 => 70,  192 => 61,  190 => 60,  184 => 56,  180 => 54,  178 => 53,  175 => 52,  173 => 51,  170 => 50,  168 => 49,  165 => 48,  163 => 47,  155 => 41,  151 => 39,  145 => 37,  143 => 36,  134 => 30,  115 => 14,  107 => 11,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
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
                
                <!-- NOUVEAU : Localisation badge -->
                {% if matchy.location %}
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Localisation</label>
                    <p>
                        <span class=\"badge-admin\" style=\"background: #ffc107; color: #000;\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i> Localisé
                        </span>
                    </p>
                </div>
                {% endif %}
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
        
        <!-- NOUVEAU : Section Localisation détaillée -->
        {% if matchy.location %}
        <div class=\"admin-card\" style=\"border-left: 4px solid #ffc107;\">
            <h5 class=\"mb-3\" style=\"color: #ffc107;\">
                <i class=\"fas fa-map-marker-alt me-2\"></i>Localisation de l'arène
            </h5>
            
            <div class=\"row\">
                <div class=\"col-md-12 mb-3\">
                    <label class=\"text-muted\">Adresse</label>
                    <p class=\"h6\">{{ matchy.location }}</p>
                </div>
                
                {% if matchy.latitude and matchy.longitude %}
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Latitude</label>
                    <p class=\"h6\">{{ matchy.latitude|number_format(6) }}</p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Longitude</label>
                    <p class=\"h6\">{{ matchy.longitude|number_format(6) }}</p>
                </div>
                
                <div class=\"col-md-12\">
                    <a href=\"https://www.google.com/maps/search/?api=1&query={{ matchy.latitude }},{{ matchy.longitude }}\" 
                       target=\"_blank\" 
                       class=\"btn-admin\" 
                       style=\"background: #ffc107; color: #000; border: none;\">
                        <i class=\"fas fa-map-marked-alt\"></i> Ouvrir dans Google Maps
                    </a>
                </div>
                {% endif %}
            </div>
        </div>
        {% endif %}
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
        
        <!-- NOUVEAU : Mini carte de localisation -->
        {% if matchy.location and matchy.latitude and matchy.longitude %}
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-map-pin me-2\" style=\"color: #ffc107;\"></i>Aperçu</h5>
            
            <div style=\"height: 150px; background: rgba(0,0,0,0.3); border-radius: 8px; overflow: hidden; position: relative;\">
                <div style=\"position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; align-items: center; justify-content: center; background: linear-gradient(45deg, #1a1a2e, #16213e);\">
                    <div style=\"text-align: center;\">
                        <i class=\"fas fa-map-marked-alt fa-3x mb-2\" style=\"color: #ffc107;\"></i>
                        <p class=\"mb-0 small\">{{ matchy.location|slice(0, 30) }}{{ matchy.location|length > 30 ? '...' : '' }}</p>
                        <p class=\"mb-0 small text-muted\">{{ matchy.latitude|number_format(4) }}, {{ matchy.longitude|number_format(4) }}</p>
                    </div>
                </div>
            </div>
            
            <div class=\"mt-2 text-center\">
                <small class=\"text-muted\">
                    <i class=\"fas fa-info-circle\"></i> Cliquez sur \"Ouvrir dans Google Maps\" pour voir la carte
                </small>
            </div>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "back/matchy/show.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\matchy\\show.html.twig");
    }
}
