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

/* back/session_coaching/index.html.twig */
class __TwigTemplate_a92b717263773191eaa87569bceab509 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/session_coaching/index.html.twig"));

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

        yield "Gestion des Sessions de Coaching";
        
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
    <h1><i class=\"fas fa-calendar-check\"></i> Sessions de Coaching</h1>
    <p>Gérez les sessions de coaching programmées</p>
</div>

<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
        <h3>Liste des Sessions</h3>
        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouvelle Session
        </a>
    </div>

    ";
        // line 19
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            yield "    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Coach ID</th>
                    <th>Équipe ID</th>
                    <th>Plan d'Entraînement</th>
                    <th>Durée</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["coaching_sessions"]) || array_key_exists("coaching_sessions", $context) ? $context["coaching_sessions"] : (function () { throw new RuntimeError('Variable "coaching_sessions" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 36
                yield "                <tr>
                    <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                    <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                    <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "coachId", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                    <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "teamId", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                    <td>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["session"], "trainingPlan", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
                    <td>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "duration", [], "any", false, false, false, 42), "html", null, true);
                yield " min</td>
                    <td>
                        ";
                // line 44
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionDate", [], "any", false, false, false, 44) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 45
                    yield "                            <span class=\"badge-admin badge-planned\">Planifiée</span>
                        ";
                } else {
                    // line 47
                    yield "                            <span class=\"badge-admin badge-finished\">Terminée</span>
                        ";
                }
                // line 49
                yield "                    </td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_coaching_session_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirm('Supprimer cette session de coaching ?');\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 62))), "html", null, true);
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
            unset($context['_seq'], $context['_key'], $context['session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "            </tbody>
        </table>
    </div>
    ";
        } else {
            // line 75
            yield "    <div style=\"text-align: center; padding: 40px; color: rgba(255, 255, 255, 0.5);\">
        <i class=\"fas fa-calendar-check\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucune session de coaching trouvée.</p>
    </div>
    ";
        }
        // line 80
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
        return "back/session_coaching/index.html.twig";
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
        return array (  231 => 80,  224 => 75,  218 => 71,  203 => 62,  198 => 60,  191 => 56,  184 => 52,  179 => 49,  175 => 47,  171 => 45,  169 => 44,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  144 => 37,  141 => 36,  137 => 35,  120 => 20,  118 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Sessions de Coaching{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <h1><i class=\"fas fa-calendar-check\"></i> Sessions de Coaching</h1>
    <p>Gérez les sessions de coaching programmées</p>
</div>

<div class=\"admin-card\">
    <div style=\"display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;\">
        <h3>Liste des Sessions</h3>
        <a href=\"{{ path('app_back_coaching_session_new') }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouvelle Session
        </a>
    </div>

    {% if coaching_sessions|length > 0 %}
    <div class=\"table-responsive\">
        <table class=\"admin-table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Coach ID</th>
                    <th>Équipe ID</th>
                    <th>Plan d'Entraînement</th>
                    <th>Durée</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for session in coaching_sessions %}
                <tr>
                    <td>{{ session.id }}</td>
                    <td>{{ session.sessionDate|date('d/m/Y H:i') }}</td>
                    <td>{{ session.coachId }}</td>
                    <td>{{ session.teamId }}</td>
                    <td>{{ session.trainingPlan.title }}</td>
                    <td>{{ session.duration }} min</td>
                    <td>
                        {% if session.sessionDate > date() %}
                            <span class=\"badge-admin badge-planned\">Planifiée</span>
                        {% else %}
                            <span class=\"badge-admin badge-finished\">Terminée</span>
                        {% endif %}
                    </td>
                    <td>
                        <div style=\"display: flex; gap: 10px;\">
                            <a href=\"{{ path('app_back_coaching_session_show', {'id': session.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_back_coaching_session_edit', {'id': session.id}) }}\" 
                               class=\"btn-admin btn-admin-primary\" style=\"padding: 5px 10px; font-size: 0.9rem;\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_back_coaching_session_delete', {'id': session.id}) }}\" 
                                  onsubmit=\"return confirm('Supprimer cette session de coaching ?');\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ session.id) }}\">
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
        <i class=\"fas fa-calendar-check\" style=\"font-size: 3rem; margin-bottom: 20px;\"></i>
        <p>Aucune session de coaching trouvée.</p>
    </div>
    {% endif %}
</div>
{% endblock %}", "back/session_coaching/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\session_coaching\\index.html.twig");
    }
}
