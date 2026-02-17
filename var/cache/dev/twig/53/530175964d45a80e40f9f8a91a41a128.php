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

/* back/matchy/edit.html.twig */
class __TwigTemplate_d3e15755ac639137fa6678a168547372 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/matchy/edit.html.twig"));

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

        yield "🎮 Admin - Modifier le match #";
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
            <h1 class=\"h3 mb-2\">Modifier le match #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
            <p class=\"mb-0 text-muted\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 11, $this->source); })()), "game", [], "any", false, false, false, 11), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 11), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 11, $this->source); })()), "team1", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "Équipe 1")) : ("Équipe 1")), "html", null, true);
        yield " vs ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 11), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 11, $this->source); })()), "team2", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "Équipe 2")) : ("Équipe 2")), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "score_team1", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "score_team2", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
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

        <!-- Boutons de test rapide -->
        <div class=\"col-12 mb-3\">
            <div class=\"d-flex gap-2\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillTunisCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Tunis (Centre)
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
            </div>
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
        </button>
        
        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 140
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_end');
        yield "
</div>

<!-- Section de suppression -->
<div class=\"admin-card mt-3\" style=\"border-color: var(--admin-danger); background: rgba(255, 0, 60, 0.05);\">
    <h5 class=\"mb-3\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Zone de suppression</h5>
    <p class=\"text-muted mb-3\">
        Cette action supprimera définitivement le match et toutes ses données associées.
    </p>
    
    <form method=\"post\" action=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150)]), "html", null, true);
        yield "\" 
          onsubmit=\"return confirm('Êtes-vous ABSOLUMENT SÛR de vouloir supprimer ce match ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["matchy"]) || array_key_exists("matchy", $context) ? $context["matchy"] : (function () { throw new RuntimeError('Variable "matchy" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152))), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
            <i class=\"fas fa-trash\"></i> Supprimer définitivement ce match
        </button>
    </form>
</div>

<script>
// Fonctions pour remplir automatiquement les coordonnées des villes tunisiennes
function fillTunisCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Tunis';
    document.querySelector('[name*=\"latitude\"]').value = '36.8008';
    document.querySelector('[name*=\"longitude\"]').value = '10.1800';
    showToast('Coordonnées de Tunis ajoutées');
}

function fillSousseCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Boulevard du 14 Janvier, Sousse';
    document.querySelector('[name*=\"latitude\"]').value = '35.8256';
    document.querySelector('[name*=\"longitude\"]').value = '10.6361';
    showToast('Coordonnées de Sousse ajoutées');
}

function fillSfaxCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Sfax';
    document.querySelector('[name*=\"latitude\"]').value = '34.7400';
    document.querySelector('[name*=\"longitude\"]').value = '10.7600';
    showToast('Coordonnées de Sfax ajoutées');
}

function fillDjerbaCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Place de la République, Houmt Souk, Djerba';
    document.querySelector('[name*=\"latitude\"]').value = '33.8750';
    document.querySelector('[name*=\"longitude\"]').value = '10.8600';
    showToast('Coordonnées de Djerba ajoutées');
}

function showToast(message) {
    // Créer un toast simple si pas de système de notification existant
    const toast = document.createElement('div');
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.right = '20px';
    toast.style.background = 'var(--admin-success)';
    toast.style.color = 'white';
    toast.style.padding = '10px 20px';
    toast.style.borderRadius = '5px';
    toast.style.zIndex = '9999';
    toast.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

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
        });
    }
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
        return "back/matchy/edit.html.twig";
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
        return array (  364 => 152,  359 => 150,  346 => 140,  338 => 135,  308 => 108,  304 => 106,  302 => 102,  298 => 101,  291 => 97,  287 => 95,  285 => 91,  281 => 90,  274 => 86,  270 => 84,  268 => 81,  264 => 80,  249 => 68,  245 => 67,  241 => 66,  234 => 62,  230 => 61,  226 => 60,  219 => 56,  215 => 55,  211 => 54,  204 => 50,  200 => 49,  196 => 48,  189 => 44,  185 => 43,  181 => 42,  174 => 38,  170 => 37,  166 => 36,  159 => 32,  155 => 31,  151 => 30,  144 => 26,  140 => 25,  136 => 24,  129 => 20,  119 => 13,  110 => 11,  106 => 10,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/back/matchy/edit.html.twig #}
{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Modifier le match #{{ matchy.id }}{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Modifier le match #{{ matchy.id }}</h1>
            <p class=\"mb-0 text-muted\">{{ matchy.game }} - {{ matchy.team1.name|default('Équipe 1') }} vs {{ matchy.team2.name|default('Équipe 2') }}</p>
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
            {{ form_widget(form.score_team1, {'attr': {'class': 'form-control'}}) }}
            <div class=\"invalid-feedback\">{{ form_errors(form.score_team1) }}</div>
        </div>
        
        <div class=\"col-md-3 mb-3\">
            {{ form_label(form.score_team2, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.score_team2, {'attr': {'class': 'form-control'}}) }}
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

        <!-- Boutons de test rapide -->
        <div class=\"col-12 mb-3\">
            <div class=\"d-flex gap-2\">
                <button type=\"button\" class=\"btn btn-sm btn-outline-warning\" onclick=\"fillTunisCoords()\">
                    <i class=\"fas fa-map-pin\"></i> Tunis (Centre)
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
            </div>
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
        </button>
        
        <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    {{ form_end(form) }}
</div>

<!-- Section de suppression -->
<div class=\"admin-card mt-3\" style=\"border-color: var(--admin-danger); background: rgba(255, 0, 60, 0.05);\">
    <h5 class=\"mb-3\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Zone de suppression</h5>
    <p class=\"text-muted mb-3\">
        Cette action supprimera définitivement le match et toutes ses données associées.
    </p>
    
    <form method=\"post\" action=\"{{ path('app_back_matchy_delete', {'id': matchy.id}) }}\" 
          onsubmit=\"return confirm('Êtes-vous ABSOLUMENT SÛR de vouloir supprimer ce match ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ matchy.id) }}\">
        <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
            <i class=\"fas fa-trash\"></i> Supprimer définitivement ce match
        </button>
    </form>
</div>

<script>
// Fonctions pour remplir automatiquement les coordonnées des villes tunisiennes
function fillTunisCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Tunis';
    document.querySelector('[name*=\"latitude\"]').value = '36.8008';
    document.querySelector('[name*=\"longitude\"]').value = '10.1800';
    showToast('Coordonnées de Tunis ajoutées');
}

function fillSousseCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Boulevard du 14 Janvier, Sousse';
    document.querySelector('[name*=\"latitude\"]').value = '35.8256';
    document.querySelector('[name*=\"longitude\"]').value = '10.6361';
    showToast('Coordonnées de Sousse ajoutées');
}

function fillSfaxCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Avenue Habib Bourguiba, Sfax';
    document.querySelector('[name*=\"latitude\"]').value = '34.7400';
    document.querySelector('[name*=\"longitude\"]').value = '10.7600';
    showToast('Coordonnées de Sfax ajoutées');
}

function fillDjerbaCoords() {
    document.querySelector('[name*=\"location\"]').value = 'Place de la République, Houmt Souk, Djerba';
    document.querySelector('[name*=\"latitude\"]').value = '33.8750';
    document.querySelector('[name*=\"longitude\"]').value = '10.8600';
    showToast('Coordonnées de Djerba ajoutées');
}

function showToast(message) {
    // Créer un toast simple si pas de système de notification existant
    const toast = document.createElement('div');
    toast.style.position = 'fixed';
    toast.style.bottom = '20px';
    toast.style.right = '20px';
    toast.style.background = 'var(--admin-success)';
    toast.style.color = 'white';
    toast.style.padding = '10px 20px';
    toast.style.borderRadius = '5px';
    toast.style.zIndex = '9999';
    toast.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

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
        });
    }
});
</script>
{% endblock %}", "back/matchy/edit.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\matchy\\edit.html.twig");
    }
}
