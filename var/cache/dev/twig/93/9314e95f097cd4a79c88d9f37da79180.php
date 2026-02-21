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

/* back/matchy/new.html.twig */
class __TwigTemplate_3c41f605899dd7b4748b3c7f4647a683 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/new.html.twig"));

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

        yield "🎮 Admin - Nouveau match";
        
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
            <h1 class=\"h3 mb-2\">Créer un nouveau match</h1>
            <p class=\"mb-0 text-muted\">Ajoutez un match à l'arène e-sport</p>
        </div>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour
        </a>
    </div>
</div>

<div class=\"admin-card\">
    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
    
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "game", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "game", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "game", [], "any", false, false, false, 26), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "match_date", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "match_date", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "match_date", [], "any", false, false, false, 32), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "team1", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "team1", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "team1", [], "any", false, false, false, 38), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "team2", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "team2", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "team2", [], "any", false, false, false, 44), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "score_team1", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "score_team1", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "score_team1", [], "any", false, false, false, 50), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "score_team2", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "score_team2", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "score_team2", [], "any", false, false, false, 56), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "winner_team", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "winner_team", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
            <div class=\"invalid-feedback\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "winner_team", [], "any", false, false, false, 68), 'errors');
        yield "</div>
        </div>

        <!-- SECTION LOCALISATION -->
        <div class=\"col-12 mt-4 mb-3\">
            <hr>
            <h4 class=\"mb-3\" style=\"color: var(--admin-warning);\">
                <i class=\"fas fa-map-marker-alt me-2\"></i>Localisation de l'arène
            </h4>
        </div>

        <div class=\"col-md-12 mb-3\">
            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "location", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse / Lieu"]);
        yield "
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "location", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Avenue Habib Bourguiba, Tunis"]]);
        // line 84
        yield "
            <small class=\"text-muted\">Adresse complète du match</small>
            <div class=\"invalid-feedback\">";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "location", [], "any", false, false, false, 86), 'errors');
        yield "</div>
        </div>

        <div class=\"col-md-6 mb-3\">
            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "latitude", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Latitude"]);
        yield "
            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "latitude", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 36.8008", "step" => "any"]]);
        // line 95
        yield "
            <small class=\"text-muted\">Latitude GPS (ex: 36.8008 pour Tunis)</small>
            <div class=\"invalid-feedback\">";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "latitude", [], "any", false, false, false, 97), 'errors');
        yield "</div>
        </div>

        <div class=\"col-md-6 mb-3\">
            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "longitude", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Longitude"]);
        yield "
            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "longitude", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 10.1800", "step" => "any"]]);
        // line 106
        yield "
            <small class=\"text-muted\">Longitude GPS (ex: 10.1800 pour Tunis)</small>
            <div class=\"invalid-feedback\">";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "longitude", [], "any", false, false, false, 108), 'errors');
        yield "</div>
        </div>

        <!-- Boutons de test rapide pour les villes tunisiennes -->
        <div class=\"col-12 mb-3\">
            <div class=\"d-flex gap-2 flex-wrap\">
                <span class=\"text-muted me-2\"><i class=\"fas fa-magic\"></i> Remplissage rapide :</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillTunisCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Tunis
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillSousseCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Sousse
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillSfaxCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Sfax
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillDjerbaCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Djerba
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillHammametCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Hammamet
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillBizerteCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Bizerte
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillMonastirCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Monastir
                </button>
            </div>
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer le match
        </button>
        
        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 150
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        yield "
</div>

<script>
// Fonctions pour remplir automatiquement les coordonnées des villes tunisiennes
function fillTunisCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Tunis';
    document.querySelector('[name*=\"latitude\"]').value = '36.8008';
    document.querySelector('[name*=\"longitude\"]').value = '10.1800';
    showToast('📍 Coordonnées de Tunis ajoutées');
}

function fillSousseCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Boulevard du 14 Janvier, Sousse';
    document.querySelector('[name*=\"latitude\"]').value = '35.8256';
    document.querySelector('[name*=\"longitude\"]').value = '10.6361';
    showToast('📍 Coordonnées de Sousse ajoutées');
}

function fillSfaxCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Sfax';
    document.querySelector('[name*=\"latitude\"]').value = '34.7400';
    document.querySelector('[name*=\"longitude\"]').value = '10.7600';
    showToast('📍 Coordonnées de Sfax ajoutées');
}

function fillDjerbaCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Place de la République, Houmt Souk, Djerba';
    document.querySelector('[name*=\"latitude\"]').value = '33.8750';
    document.querySelector('[name*=\"longitude\"]').value = '10.8600';
    showToast('📍 Coordonnées de Djerba ajoutées');
}

function fillHammametCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue des Nations Unies, Hammamet';
    document.querySelector('[name*=\"latitude\"]').value = '36.4000';
    document.querySelector('[name*=\"longitude\"]').value = '10.6167';
    showToast('📍 Coordonnées de Hammamet ajoutées');
}

function fillBizerteCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Vieux Port de Bizerte, Rue d\\'Alger, Bizerte';
    document.querySelector('[name*=\"latitude\"]').value = '37.2746';
    document.querySelector('[name*=\"longitude\"]').value = '9.8739';
    showToast('📍 Coordonnées de Bizerte ajoutées');
}

function fillMonastirCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Marina de Monastir, Route de la Corniche, Monastir';
    document.querySelector('[name*=\"latitude\"]').value = '35.7800';
    document.querySelector('[name*=\"longitude\"]').value = '10.8300';
    showToast('📍 Coordonnées de Monastir ajoutées');
}

function showToast(message) {
    // Créer un toast simple
    const toast = document.createElement('div');
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.right = '20px';
    toast.style.background = 'var(--admin-success)';
    toast.style.color = 'white';
    toast.style.padding = '12px 24px';
    toast.style.borderRadius = '8px';
    toast.style.zIndex = '9999';
    toast.style.boxShadow = '0 4px 15px rgba(0,0,0,0.3)';
    toast.style.fontFamily = 'Rajdhani, sans-serif';
    toast.style.fontWeight = '600';
    toast.style.letterSpacing = '0.5px';
    toast.style.animation = 'slideIn 0.3s ease';
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}

// Animation CSS pour les toasts
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from { transform: translateX(100px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100px); opacity: 0; }
    }
`;
document.head.appendChild(style);

// Validation que team1 et team2 sont différentes
document.addEventListener('DOMContentLoaded', function() {
    const team1Select = document.querySelector('[name*=\"team1\"]');
    const team2Select = document.querySelector('[name*=\"team2\"]');
    const form = document.querySelector('form');
    
    if (form && team1Select && team2Select) {
        form.addEventListener('submit', function(e) {
            if (team1Select.value === team2Select.value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
            }
            
            // Vérification optionnelle : si une adresse est fournie, les coordonnées devraient l'être aussi
            const locationInput = document.querySelector('[name*=\"location\"]');
            const latInput = document.querySelector('[name*=\"latitude\"]');
            const lngInput = document.querySelector('[name*=\"longitude\"]');
            
            if (locationInput && locationInput.value.trim() !== '') {
                if (!latInput.value || !lngInput.value) {
                    if (!confirm('⚠️ Vous avez spécifié une adresse mais pas les coordonnées GPS. Le match n\\'apparaîtra pas sur la carte. Continuer ?')) {
                        e.preventDefault();
                    }
                }
            }
        });
    }
    
    // Animation des champs au focus
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = 'var(--admin-accent)';
            this.style.boxShadow = '0 0 0 3px rgba(157, 0, 255, 0.2)';
        });
        
        input.addEventListener('blur', function() {
            this.style.borderColor = '';
            this.style.boxShadow = '';
        });
    });
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
        return "back/matchy/new.html.twig";
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
        return array (  345 => 150,  337 => 145,  297 => 108,  293 => 106,  291 => 102,  287 => 101,  280 => 97,  276 => 95,  274 => 91,  270 => 90,  263 => 86,  259 => 84,  257 => 81,  253 => 80,  238 => 68,  234 => 67,  230 => 66,  223 => 62,  219 => 61,  215 => 60,  208 => 56,  204 => 55,  200 => 54,  193 => 50,  189 => 49,  185 => 48,  178 => 44,  174 => 43,  170 => 42,  163 => 38,  159 => 37,  155 => 36,  148 => 32,  144 => 31,  140 => 30,  133 => 26,  129 => 25,  125 => 24,  118 => 20,  108 => 13,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/matchy/new.html.twig #}
{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Nouveau match{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Créer un nouveau match</h1>
            <p class=\"mb-0 text-muted\">Ajoutez un match à l'arène e-sport</p>
        </div>
        <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour
        </a>
    </div>
</div>

<div class=\"admin-card\">
    {{ form_start(form, {'attr': {'class': 'form-admin'}}) }}
    
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.game, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.game, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.game) }}</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.match_date, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.match_date, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.match_date) }}</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.team1, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.team1, {'attr': {'class': 'form-select'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.team1) }}</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.team2, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.team2, {'attr': {'class': 'form-select'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.team2) }}</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            {{ form_label(form.score_team1, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.score_team1, {'attr': {'class': 'form-control', 'placeholder': '0'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.score_team1) }}</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            {{ form_label(form.score_team2, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.score_team2, {'attr': {'class': 'form-control', 'placeholder': '0'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.score_team2) }}</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            {{ form_label(form.status, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.status, {'attr': {'class': 'form-select'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.status) }}</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            {{ form_label(form.winner_team, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.winner_team, {'attr': {'class': 'form-select'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.winner_team) }}</div>
        </div>

        <!-- SECTION LOCALISATION -->
        <div class=\"col-12 mt-4 mb-3\">
            <hr>
            <h4 class=\"mb-3\" style=\"color: var(--admin-warning);\">
                <i class=\"fas fa-map-marker-alt me-2\"></i>Localisation de l'arène
            </h4>
        </div>

        <div class=\"col-md-12 mb-3\">
            {{ form_label(form.location, 'Adresse / Lieu', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.location, {'attr': {
                'class': 'form-control',
                'placeholder': 'Ex: Avenue Habib Bourguiba, Tunis'
            }}) }}
            <small class=\"text-muted\">Adresse complète du match</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.location) }}</div>
        </div>

        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.latitude, 'Latitude', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.latitude, {'attr': {
                'class': 'form-control',
                'placeholder': 'Ex: 36.8008',
                'step': 'any'
            }}) }}
            <small class=\"text-muted\">Latitude GPS (ex: 36.8008 pour Tunis)</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.latitude) }}</div>
        </div>

        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.longitude, 'Longitude', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.longitude, {'attr': {
                'class': 'form-control',
                'placeholder': 'Ex: 10.1800',
                'step': 'any'
            }}) }}
            <small class=\"text-muted\">Longitude GPS (ex: 10.1800 pour Tunis)</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.longitude) }}</div>
        </div>

        <!-- Boutons de test rapide pour les villes tunisiennes -->
        <div class=\"col-12 mb-3\">
            <div class=\"d-flex gap-2 flex-wrap\">
                <span class=\"text-muted me-2\"><i class=\"fas fa-magic\"></i> Remplissage rapide :</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillTunisCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Tunis
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillSousseCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Sousse
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillSfaxCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Sfax
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillDjerbaCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Djerba
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillHammametCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Hammamet
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillBizerteCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Bizerte
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillMonastirCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Monastir
                </button>
            </div>
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer le match
        </button>
        
        <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    {{ form_end(form) }}
</div>

<script>
// Fonctions pour remplir automatiquement les coordonnées des villes tunisiennes
function fillTunisCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Tunis';
    document.querySelector('[name*=\"latitude\"]').value = '36.8008';
    document.querySelector('[name*=\"longitude\"]').value = '10.1800';
    showToast('📍 Coordonnées de Tunis ajoutées');
}

function fillSousseCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Boulevard du 14 Janvier, Sousse';
    document.querySelector('[name*=\"latitude\"]').value = '35.8256';
    document.querySelector('[name*=\"longitude\"]').value = '10.6361';
    showToast('📍 Coordonnées de Sousse ajoutées');
}

function fillSfaxCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Sfax';
    document.querySelector('[name*=\"latitude\"]').value = '34.7400';
    document.querySelector('[name*=\"longitude\"]').value = '10.7600';
    showToast('📍 Coordonnées de Sfax ajoutées');
}

function fillDjerbaCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Place de la République, Houmt Souk, Djerba';
    document.querySelector('[name*=\"latitude\"]').value = '33.8750';
    document.querySelector('[name*=\"longitude\"]').value = '10.8600';
    showToast('📍 Coordonnées de Djerba ajoutées');
}

function fillHammametCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue des Nations Unies, Hammamet';
    document.querySelector('[name*=\"latitude\"]').value = '36.4000';
    document.querySelector('[name*=\"longitude\"]').value = '10.6167';
    showToast('📍 Coordonnées de Hammamet ajoutées');
}

function fillBizerteCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Vieux Port de Bizerte, Rue d\\'Alger, Bizerte';
    document.querySelector('[name*=\"latitude\"]').value = '37.2746';
    document.querySelector('[name*=\"longitude\"]').value = '9.8739';
    showToast('📍 Coordonnées de Bizerte ajoutées');
}

function fillMonastirCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Marina de Monastir, Route de la Corniche, Monastir';
    document.querySelector('[name*=\"latitude\"]').value = '35.7800';
    document.querySelector('[name*=\"longitude\"]').value = '10.8300';
    showToast('📍 Coordonnées de Monastir ajoutées');
}

function showToast(message) {
    // Créer un toast simple
    const toast = document.createElement('div');
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.right = '20px';
    toast.style.background = 'var(--admin-success)';
    toast.style.color = 'white';
    toast.style.padding = '12px 24px';
    toast.style.borderRadius = '8px';
    toast.style.zIndex = '9999';
    toast.style.boxShadow = '0 4px 15px rgba(0,0,0,0.3)';
    toast.style.fontFamily = 'Rajdhani, sans-serif';
    toast.style.fontWeight = '600';
    toast.style.letterSpacing = '0.5px';
    toast.style.animation = 'slideIn 0.3s ease';
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => {
            toast.remove();
        }, 300);
    }, 3000);
}

// Animation CSS pour les toasts
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from { transform: translateX(100px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100px); opacity: 0; }
    }
`;
document.head.appendChild(style);

// Validation que team1 et team2 sont différentes
document.addEventListener('DOMContentLoaded', function() {
    const team1Select = document.querySelector('[name*=\"team1\"]');
    const team2Select = document.querySelector('[name*=\"team2\"]');
    const form = document.querySelector('form');
    
    if (form && team1Select && team2Select) {
        form.addEventListener('submit', function(e) {
            if (team1Select.value === team2Select.value) {
                e.preventDefault();
                alert('⚠️ Les deux équipes doivent être différentes !');
            }
            
            // Vérification optionnelle : si une adresse est fournie, les coordonnées devraient l'être aussi
            const locationInput = document.querySelector('[name*=\"location\"]');
            const latInput = document.querySelector('[name*=\"latitude\"]');
            const lngInput = document.querySelector('[name*=\"longitude\"]');
            
            if (locationInput && locationInput.value.trim() !== '') {
                if (!latInput.value || !lngInput.value) {
                    if (!confirm('⚠️ Vous avez spécifié une adresse mais pas les coordonnées GPS. Le match n\\'apparaîtra pas sur la carte. Continuer ?')) {
                        e.preventDefault();
                    }
                }
            }
        });
    }
    
    // Animation des champs au focus
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = 'var(--admin-accent)';
            this.style.boxShadow = '0 0 0 3px rgba(157, 0, 255, 0.2)';
        });
        
        input.addEventListener('blur', function() {
            this.style.borderColor = '';
            this.style.boxShadow = '';
        });
    });
});
</script>
{% endblock %}", "back/matchy/new.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\matchy\\new.html.twig");
    }
}
