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

/* back/entrainement/index.html.twig */
class __TwigTemplate_dcd9111e03dec251e8603a16c80fef73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/entrainement/index.html.twig"));

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

        yield "Gestion des Plans d'Entraînement";
        
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
    <h1><i class=\"fas fa-dumbbell\"></i> Plans d'Entraînement</h1>
    <p>Gérez les plans d'entraînement de l'application</p>
</div>

<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
        <h3>Liste des Plans</h3>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouveau Plan
        </a>
    </div>

    ";
        // line 19
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            yield "    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Zone de Focus</th>
                    <th>Difficulté</th>
                    <th>Coach ID</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_plans"]) || array_key_exists("training_plans", $context) ? $context["training_plans"] : (function () { throw new RuntimeError('Variable "training_plans" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
                // line 35
                yield "                <tr>
                    <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                    <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "title", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: var(--admin-accent);\">
                            ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "focusArea", [], "any", false, false, false, 40), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>
                        ";
                // line 44
                $context["difficultyColors"] = ["Débutant" => "#4CAF50", "Intermédiaire" => "#2196F3", "Avancé" => "#FF9800", "Expert" => "#F44336", "Professionnel" => "#9C27B0"];
                // line 51
                yield "                        <span class=\"badge-admin\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
                yield "20; color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["difficultyColors"]) || array_key_exists("difficultyColors", $context) ? $context["difficultyColors"] : (function () { throw new RuntimeError('Variable "difficultyColors" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "html", null, true);
                yield ";\">
                            ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "difficultyLevel", [], "any", false, false, false, 52), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "coachId", [], "any", false, false, false, 55), "html", null, true);
                yield "</td>
                    <td>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "createdAt", [], "any", false, false, false, 56), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_training_plan_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirm('Supprimer ce plan d\\'entraînement ?');\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 69))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "            </tbody>
        </table>
    </div>
    ";
        } else {
            // line 82
            yield "    <div style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
        <i class=\"fas fa-dumbbell\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucun plan d'entraînement trouvé.</p>
    </div>
    ";
        }
        // line 87
        yield "</div>
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
        return "back/entrainement/index.html.twig";
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
        return array (  232 => 87,  225 => 82,  219 => 78,  204 => 69,  199 => 67,  192 => 63,  185 => 59,  179 => 56,  175 => 55,  169 => 52,  162 => 51,  160 => 44,  153 => 40,  147 => 37,  143 => 36,  140 => 35,  136 => 34,  120 => 20,  118 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Plans d'Entraînement{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-dumbbell\"></i> Plans d'Entraînement</h1>
    <p>Gérez les plans d'entraînement de l'application</p>
</div>

<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
        <h3>Liste des Plans</h3>
        <a href=\"{{ path('app_back_training_plan_new') }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouveau Plan
        </a>
    </div>

    {% if training_plans|length > 0 %}
    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Zone de Focus</th>
                    <th>Difficulté</th>
                    <th>Coach ID</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for plan in training_plans %}
                <tr>
                    <td>{{ plan.id }}</td>
                    <td>{{ plan.title }}</td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.2); color: var(--admin-accent);\">
                            {{ plan.focusArea }}
                        </span>
                    </td>
                    <td>
                        {% set difficultyColors = {
                            'Débutant': '#4CAF50',
                            'Intermédiaire': '#2196F3',
                            'Avancé': '#FF9800',
                            'Expert': '#F44336',
                            'Professionnel': '#9C27B0'
                        } %}
                        <span class=\"badge-admin\" style=\"background: {{ difficultyColors[plan.difficultyLevel] }}20; color: {{ difficultyColors[plan.difficultyLevel] }};\">
                            {{ plan.difficultyLevel }}
                        </span>
                    </td>
                    <td>{{ plan.coachId }}</td>
                    <td>{{ plan.createdAt|date('d/m/Y H:i') }}</td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"{{ path('app_back_training_plan_show', {'id': plan.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_back_training_plan_edit', {'id': plan.id}) }}\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_back_training_plan_delete', {'id': plan.id}) }}\" 
                                  onsubmit=\"return confirm('Supprimer ce plan d\\'entraînement ?');\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ plan.id) }}\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    {% else %}
    <div style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
        <i class=\"fas fa-dumbbell\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucun plan d'entraînement trouvé.</p>
    </div>
    {% endif %}
</div>
{% endblock %}", "back/entrainement/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\entrainement\\index.html.twig");
    }
}
