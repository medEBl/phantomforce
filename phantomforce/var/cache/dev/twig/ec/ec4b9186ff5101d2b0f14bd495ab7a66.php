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

/* back/session_coaching/show.html.twig */
class __TwigTemplate_65e8ed56cd85c1bd227704056d8ec47a extends Template
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
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/show.html.twig"));

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

        yield "Détails de la Session de Coaching";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"admin-header\">
    <h1><i class=\"fas fa-calendar-check\"></i> Détails de la Session de Coaching</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
    </div>
</div>

<div class=\"admin-card\">
    <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">ID</label>
            <div class=\"info-value\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        yield "</div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Coach ID</label>
            <div class=\"info-value\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 27, $this->source); })()), "coachId", [], "any", false, false, false, 27), "html", null, true);
        yield "</div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Équipe ID</label>
            <div class=\"info-value\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 32, $this->source); })()), "teamId", [], "any", false, false, false, 32), "html", null, true);
        yield "</div>
        </div>
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Plan d'Entraînement</label>
            <div class=\"info-value\" style=\"display: flex; align-items: center; gap: 10px;\">
                <i class=\"fas fa-dumbbell\" style=\"color: var(--admin-accent);\"></i>
                ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 41, $this->source); })()), "trainingPlan", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
        yield "
            </div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Statut</label>
            ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 47, $this->source); })()), "sessionDate", [], "any", false, false, false, 47) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
            // line 48
            yield "                <span class=\"badge-admin badge-planned\">Planifiée</span>
            ";
        } else {
            // line 50
            yield "                <span class=\"badge-admin badge-finished\">Terminée</span>
            ";
        }
        // line 52
        yield "        </div>
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Date et Heure</label>
            <div class=\"info-value\">
                <i class=\"fas fa-calendar-alt\" style=\"margin-right: 8px;\"></i>
                ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 60, $this->source); })()), "sessionDate", [], "any", false, false, false, 60), "d/m/Y à H:i"), "html", null, true);
        yield "
            </div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Durée</label>
            <div class=\"info-value\">
                <i class=\"fas fa-clock\" style=\"margin-right: 8px;\"></i>
                ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 68, $this->source); })()), "duration", [], "any", false, false, false, 68), "html", null, true);
        yield " minutes
                (";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 69, $this->source); })()), "duration", [], "any", false, false, false, 69) / 60), 1), "html", null, true);
        yield " heures)
            </div>
        </div>
    </div>
    
    ";
        // line 74
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 74, $this->source); })()), "notes", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "    <div style=\"margin-top: 20px; margin-bottom: 20px;\">
        <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Notes</label>
        <div class=\"info-value\" style=\"background: rgba(255, 255, 255, 0.05); padding: 15px; border-radius: 6px; border-left: 3px solid var(--admin-accent);\">
            ";
            // line 78
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 78, $this->source); })()), "notes", [], "any", false, false, false, 78), "html", null, true));
            yield "
        </div>
    </div>
    ";
        }
        // line 82
        yield "</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-dumbbell\"></i> Détails du Plan d'Entraînement Associé</h3>
    
    <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 15px;\">
        <div>
            <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Titre</label>
            <div>";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 90, $this->source); })()), "trainingPlan", [], "any", false, false, false, 90), "title", [], "any", false, false, false, 90), "html", null, true);
        yield "</div>
        </div>
        
        <div>
            <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Zone de Focus</label>
            <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: var(--admin-accent); padding: 3px 8px; font-size: 0.8rem;\">
                ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 96, $this->source); })()), "trainingPlan", [], "any", false, false, false, 96), "focusArea", [], "any", false, false, false, 96), "html", null, true);
        yield "
            </span>
        </div>
        
        <div>
            <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Difficulté</label>
            ";
        // line 102
        $context["difficultyColors"] = ["Débutant" => "#4CAF50", "Intermédiaire" => "#2196F3", "Avancé" => "#FF9800", "Expert" => "#F44336", "Professionnel" => "#9C27B0"];
        // line 109
        yield "            <span class=\"badge-admin\" style=\"background: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 109, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 109, $this->source); })()), "trainingPlan", [], "any", false, false, false, 109), "difficultyLevel", [], "any", false, false, false, 109), [], "array", false, false, false, 109), "html", null, true);
        yield "20; 
                  color: ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 110, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 110, $this->source); })()), "trainingPlan", [], "any", false, false, false, 110), "difficultyLevel", [], "any", false, false, false, 110), [], "array", false, false, false, 110), "html", null, true);
        yield ";
                  padding: 3px 8px; font-size: 0.8rem;\">
                ";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 112, $this->source); })()), "trainingPlan", [], "any", false, false, false, 112), "difficultyLevel", [], "any", false, false, false, 112), "html", null, true);
        yield "
            </span>
        </div>
    </div>
    
    <div style=\"margin-top: 15px;\">
        <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Description</label>
        <div style=\"background: rgba(255, 255, 255, 0.03); padding: 10px; border-radius: 6px; font-size: 0.9rem; line-height: 1.5;\">
            ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 120, $this->source); })()), "trainingPlan", [], "any", false, false, false, 120), "description", [], "any", false, false, false, 120), 0, 200), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 120, $this->source); })()), "trainingPlan", [], "any", false, false, false, 120), "description", [], "any", false, false, false, 120)) > 200)) {
            yield "...";
        }
        // line 121
        yield "        </div>
    </div>
    
    <div style=\"margin-top: 15px; text-align: right;\">
        <a href=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 125, $this->source); })()), "trainingPlan", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]), "html", null, true);
        yield "\" 
           class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 15px; font-size: 0.9rem;\">
            <i class=\"fas fa-external-link-alt\"></i> Voir le plan complet
        </a>
    </div>
</div>

";
        // line 132
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 132, $this->source); })()), "sessionDate", [], "any", false, false, false, 132) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
            // line 133
            yield "<div class=\"admin-card\" style=\"border: 2px solid var(--admin-accent);\">
    <div style=\"display: flex; align-items: center; gap: 15px;\">
        <div style=\"font-size: 2rem; color: var(--admin-accent);\">
            <i class=\"fas fa-hourglass-half\"></i>
        </div>
        <div>
            <h4 style=\"margin: 0; color: var(--admin-accent);\">Session à venir</h4>
            <p style=\"margin: 5px 0 0 0; color: rgba(255, 255, 255, 0.8);\">
                Cette session est programmée pour le ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 141, $this->source); })()), "sessionDate", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 141, $this->source); })()), "sessionDate", [], "any", false, false, false, 141), "H:i"), "html", null, true);
            yield "
            </p>
        </div>
    </div>
</div>
";
        }
        // line 147
        yield "
<style>
.info-value {
    background: rgba(255, 255, 255, 0.05);
    padding: 10px 15px;
    border-radius: 6px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    min-height: 40px;
    display: flex;
    align-items: center;
}
</style>
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
        return "back/session_coaching/show.html.twig";
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
        return array (  313 => 147,  302 => 141,  292 => 133,  290 => 132,  280 => 125,  274 => 121,  269 => 120,  258 => 112,  253 => 110,  248 => 109,  246 => 102,  237 => 96,  228 => 90,  218 => 82,  211 => 78,  206 => 75,  204 => 74,  196 => 69,  192 => 68,  181 => 60,  171 => 52,  167 => 50,  163 => 48,  161 => 47,  152 => 41,  140 => 32,  132 => 27,  124 => 22,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails de la Session de Coaching{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-calendar-check\"></i> Détails de la Session de Coaching</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"{{ path('app_back_coaching_session_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"{{ path('app_back_coaching_session_edit', {'id': coaching_session.id}) }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
    </div>
</div>

<div class=\"admin-card\">
    <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">ID</label>
            <div class=\"info-value\">{{ coaching_session.id }}</div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Coach ID</label>
            <div class=\"info-value\">{{ coaching_session.coachId }}</div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Équipe ID</label>
            <div class=\"info-value\">{{ coaching_session.teamId }}</div>
        </div>
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Plan d'Entraînement</label>
            <div class=\"info-value\" style=\"display: flex; align-items: center; gap: 10px;\">
                <i class=\"fas fa-dumbbell\" style=\"color: var(--admin-accent);\"></i>
                {{ coaching_session.trainingPlan.title }}
            </div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Statut</label>
            {% if coaching_session.sessionDate > date() %}
                <span class=\"badge-admin badge-planned\">Planifiée</span>
            {% else %}
                <span class=\"badge-admin badge-finished\">Terminée</span>
            {% endif %}
        </div>
    </div>
    
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;\">
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Date et Heure</label>
            <div class=\"info-value\">
                <i class=\"fas fa-calendar-alt\" style=\"margin-right: 8px;\"></i>
                {{ coaching_session.sessionDate|date('d/m/Y à H:i') }}
            </div>
        </div>
        
        <div>
            <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Durée</label>
            <div class=\"info-value\">
                <i class=\"fas fa-clock\" style=\"margin-right: 8px;\"></i>
                {{ coaching_session.duration }} minutes
                ({{ (coaching_session.duration / 60)|number_format(1) }} heures)
            </div>
        </div>
    </div>
    
    {% if coaching_session.notes %}
    <div style=\"margin-top: 20px; margin-bottom: 20px;\">
        <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Notes</label>
        <div class=\"info-value\" style=\"background: rgba(255, 255, 255, 0.05); padding: 15px; border-radius: 6px; border-left: 3px solid var(--admin-accent);\">
            {{ coaching_session.notes|nl2br }}
        </div>
    </div>
    {% endif %}
</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-dumbbell\"></i> Détails du Plan d'Entraînement Associé</h3>
    
    <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 15px;\">
        <div>
            <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Titre</label>
            <div>{{ coaching_session.trainingPlan.title }}</div>
        </div>
        
        <div>
            <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Zone de Focus</label>
            <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: var(--admin-accent); padding: 3px 8px; font-size: 0.8rem;\">
                {{ coaching_session.trainingPlan.focusArea }}
            </span>
        </div>
        
        <div>
            <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Difficulté</label>
            {% set difficultyColors = {
                'Débutant': '#4CAF50',
                'Intermédiaire': '#2196F3',
                'Avancé': '#FF9800',
                'Expert': '#F44336',
                'Professionnel': '#9C27B0'
            } %}
            <span class=\"badge-admin\" style=\"background: {{ difficultyColors[coaching_session.trainingPlan.difficultyLevel] }}20; 
                  color: {{ difficultyColors[coaching_session.trainingPlan.difficultyLevel] }};
                  padding: 3px 8px; font-size: 0.8rem;\">
                {{ coaching_session.trainingPlan.difficultyLevel }}
            </span>
        </div>
    </div>
    
    <div style=\"margin-top: 15px;\">
        <label style=\"color: rgba(255, 255, 255, 0.7); font-weight: 600; display: block; margin-bottom: 5px; font-size: 0.9rem;\">Description</label>
        <div style=\"background: rgba(255, 255, 255, 0.03); padding: 10px; border-radius: 6px; font-size: 0.9rem; line-height: 1.5;\">
            {{ coaching_session.trainingPlan.description|slice(0, 200) }}{% if coaching_session.trainingPlan.description|length > 200 %}...{% endif %}
        </div>
    </div>
    
    <div style=\"margin-top: 15px; text-align: right;\">
        <a href=\"{{ path('app_back_training_plan_show', {'id': coaching_session.trainingPlan.id}) }}\" 
           class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 15px; font-size: 0.9rem;\">
            <i class=\"fas fa-external-link-alt\"></i> Voir le plan complet
        </a>
    </div>
</div>

{% if coaching_session.sessionDate > date() %}
<div class=\"admin-card\" style=\"border: 2px solid var(--admin-accent);\">
    <div style=\"display: flex; align-items: center; gap: 15px;\">
        <div style=\"font-size: 2rem; color: var(--admin-accent);\">
            <i class=\"fas fa-hourglass-half\"></i>
        </div>
        <div>
            <h4 style=\"margin: 0; color: var(--admin-accent);\">Session à venir</h4>
            <p style=\"margin: 5px 0 0 0; color: rgba(255, 255, 255, 0.8);\">
                Cette session est programmée pour le {{ coaching_session.sessionDate|date('d/m/Y') }} à {{ coaching_session.sessionDate|date('H:i') }}
            </p>
        </div>
    </div>
</div>
{% endif %}

<style>
.info-value {
    background: rgba(255, 255, 255, 0.05);
    padding: 10px 15px;
    border-radius: 6px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    min-height: 40px;
    display: flex;
    align-items: center;
}
</style>
{% endblock %}", "back/session_coaching/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\session_coaching\\show.html.twig");
    }
}
