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

/* back/entrainement/show.html.twig */
class __TwigTemplate_7c3d88bfd0a44b1cadd6b08a5f79f390 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/show.html.twig"));

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

        yield "Détails du Plan d'Entraînement";
        
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
    <h1><i class=\"fas fa-dumbbell\"></i> Détails du Plan d'Entraînement</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_manage");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
    </div>
</div>

<div class=\"admin-card\">
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
        <div>
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">ID</label>
                <div class=\"info-value\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        yield "</div>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Titre</label>
                <div class=\"info-value\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        yield "</div>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Coach ID</label>
                <div class=\"info-value\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 33, $this->source); })()), "coachId", [], "any", false, false, false, 33), "html", null, true);
        yield "</div>
            </div>
        </div>
        
        <div>
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Zone de Focus</label>
                <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: var(--admin-accent);\">
                    ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 41, $this->source); })()), "focusArea", [], "any", false, false, false, 41), "html", null, true);
        yield "
                </span>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Niveau de Difficulté</label>
                ";
        // line 47
        $context["difficultyColors"] = ["Débutant" => "#4CAF50", "Intermédiaire" => "#2196F3", "Avancé" => "#FF9800", "Expert" => "#F44336", "Professionnel" => "#9C27B0"];
        // line 54
        yield "                <span class=\"badge-admin\" style=\"background: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 54, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
        yield "20; color: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 54, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
        yield ";\">
                    ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 55, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 55), "html", null, true);
        yield "
                </span>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Date de Création</label>
                <div class=\"info-value\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 61, $this->source); })()), "createdAt", [], "any", false, false, false, 61), "d/m/Y à H:i"), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>
    
    <div style=\"margin-top: 20px; margin-bottom: 20px;\">
        <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Description</label>
        <div class=\"info-value\" style=\"background: rgba(255, 255, 255, 0.05); padding: 15px; border-radius: 6px; border-left: 3px solid var(--admin-accent);\">
            ";
        // line 69
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true));
        yield "
        </div>
    </div>
</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-calendar-check\"></i> Sessions de Coaching Associées (";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 75, $this->source); })()), "coachingSessions", [], "any", false, false, false, 75)), "html", null, true);
        yield ")</h3>
    
    ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 77, $this->source); })()), "coachingSessions", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            yield "        <div class=\"table-responsive\" style=\"margin-top: 15px;\">
            <table class=\"admin-table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Coach ID</th>
                        <th>Équipe ID</th>
                        <th>Durée</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_plan"]) || array_key_exists("training_plan", $context) ? $context["training_plan"] : (function () { throw new RuntimeError('Variable "training_plan" does not exist.', 92, $this->source); })()), "coachingSessions", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 93
                yield "                    <tr>
                        <td>";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 94), "html", null, true);
                yield "</td>
                        <td>";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 95), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                        <td>";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 96), "html", null, true);
                yield "</td>
                        <td>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "teamId", [], "any", false, false, false, 97), "html", null, true);
                yield "</td>
                        <td>";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "duration", [], "any", false, false, false, 98), "html", null, true);
                yield " min</td>
                        <td>
                            ";
                // line 100
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 100) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 101
                    yield "                                <span class=\"badge-admin badge-planned\">Planifiée</span>
                            ";
                } else {
                    // line 103
                    yield "                                <span class=\"badge-admin badge-finished\">Terminée</span>
                            ";
                }
                // line 105
                yield "                        </td>
                        <td>
                            <a href=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 118
            yield "        <div style=\"text-align: center; padding: 20px; color: rgba(255, 255, 255, 0.5);\">
            <i class=\"fas fa-calendar-times\" style=\"font-size: 2rem; margin-bottom: 10px;\"></i>
            <p>Aucune session de coaching associée à ce plan.</p>
        </div>
    ";
        }
        // line 123
        yield "</div>

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
        return "back/entrainement/show.html.twig";
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
        return array (  290 => 123,  283 => 118,  277 => 114,  264 => 107,  260 => 105,  256 => 103,  252 => 101,  250 => 100,  245 => 98,  241 => 97,  237 => 96,  233 => 95,  229 => 94,  226 => 93,  222 => 92,  206 => 78,  204 => 77,  199 => 75,  190 => 69,  179 => 61,  170 => 55,  163 => 54,  161 => 47,  152 => 41,  141 => 33,  133 => 28,  125 => 23,  111 => 12,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Détails du Plan d'Entraînement{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-dumbbell\"></i> Détails du Plan d'Entraînement</h1>
    <div style=\"display: flex; gap: 10px;\">
        <a href=\"{{ path('app_back_training_plan_manage') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"{{ path('app_back_training_plan_edit', {'id': training_plan.id}) }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
    </div>
</div>

<div class=\"admin-card\">
    <div style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 20px;\">
        <div>
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">ID</label>
                <div class=\"info-value\">{{ training_plan.id }}</div>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Titre</label>
                <div class=\"info-value\">{{ training_plan.title }}</div>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Coach ID</label>
                <div class=\"info-value\">{{ training_plan.coachId }}</div>
            </div>
        </div>
        
        <div>
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Zone de Focus</label>
                <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: var(--admin-accent);\">
                    {{ training_plan.focusArea }}
                </span>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Niveau de Difficulté</label>
                {% set difficultyColors = {
                    'Débutant': '#4CAF50',
                    'Intermédiaire': '#2196F3',
                    'Avancé': '#FF9800',
                    'Expert': '#F44336',
                    'Professionnel': '#9C27B0'
                } %}
                <span class=\"badge-admin\" style=\"background: {{ difficultyColors[training_plan.difficultyLevel] }}20; color: {{ difficultyColors[training_plan.difficultyLevel] }};\">
                    {{ training_plan.difficultyLevel }}
                </span>
            </div>
            
            <div style=\"margin-bottom: 20px;\">
                <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Date de Création</label>
                <div class=\"info-value\">{{ training_plan.createdAt|date('d/m/Y à H:i') }}</div>
            </div>
        </div>
    </div>
    
    <div style=\"margin-top: 20px; margin-bottom: 20px;\">
        <label style=\"color: var(--admin-accent); font-weight: 600; display: block; margin-bottom: 5px;\">Description</label>
        <div class=\"info-value\" style=\"background: rgba(255, 255, 255, 0.05); padding: 15px; border-radius: 6px; border-left: 3px solid var(--admin-accent);\">
            {{ training_plan.description|nl2br }}
        </div>
    </div>
</div>

<div class=\"admin-card\">
    <h3><i class=\"fas fa-calendar-check\"></i> Sessions de Coaching Associées ({{ training_plan.coachingSessions|length }})</h3>
    
    {% if training_plan.coachingSessions|length > 0 %}
        <div class=\"table-responsive\" style=\"margin-top: 15px;\">
            <table class=\"admin-table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Coach ID</th>
                        <th>Équipe ID</th>
                        <th>Durée</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for session in training_plan.coachingSessions %}
                    <tr>
                        <td>{{ session.id }}</td>
                        <td>{{ session.sessionDate|date('d/m/Y H:i') }}</td>
                        <td>{{ session.coachId }}</td>
                        <td>{{ session.teamId }}</td>
                        <td>{{ session.duration }} min</td>
                        <td>
                            {% if session.sessionDate > date() %}
                                <span class=\"badge-admin badge-planned\">Planifiée</span>
                            {% else %}
                                <span class=\"badge-admin badge-finished\">Terminée</span>
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('app_back_coaching_session_show', {'id': session.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <div style=\"text-align: center; padding: 20px; color: rgba(255, 255, 255, 0.5);\">
            <i class=\"fas fa-calendar-times\" style=\"font-size: 2rem; margin-bottom: 10px;\"></i>
            <p>Aucune session de coaching associée à ce plan.</p>
        </div>
    {% endif %}
</div>

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
{% endblock %}", "back/entrainement/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\entrainement\\show.html.twig");
    }
}
