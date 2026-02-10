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

/* admin/reward/index.html.twig */
class __TwigTemplate_bf0fda4f7993e8635cc85bca5e9e8557 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reward/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reward/index.html.twig"));

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

        yield "Récompenses - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - Admin";
        
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
        yield "<div class=\"admin-header d-flex justify-content-between align-items-center\">
    <div>
        <h1 class=\"h3 mb-1\">Récompenses : ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
        <p class=\"text-muted small mb-0\">Définissez les récompenses par rang pour cette compétition.</p>
    </div>
    <div class=\"d-flex gap-2\">
        <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reward_new", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Ajouter
        </a>
        <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour au Tournoi
        </a>
    </div>
</div>

<div class=\"admin-card p-0 overflow-hidden\">
    <table class=\"admin-table mb-0\">
        <thead>
            <tr>
                <th>Rang</th>
                <th>Type</th>
                <th>Valeur</th>
                <th class=\"text-end\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rewards"]) || array_key_exists("rewards", $context) ? $context["rewards"] : (function () { throw new RuntimeError('Variable "rewards" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
            // line 33
            yield "                <tr>
                    <td>
                        <span class=\"badge-admin ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rank", [], "any", false, false, false, 35) == 1)) {
                yield "badge-ongoing";
            } else {
                yield "badge-planned";
            }
            yield "\">
                            RANK #";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rank", [], "any", false, false, false, 36), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rewardType", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                    <td class=\"fw-bold text-info\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "rewardValue", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                    <td class=\"text-end\">
                        <div class=\"d-flex justify-content-end gap-2\">
                            <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reward_edit", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn-admin btn-admin-secondary p-2\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_reward_delete", ["tournamentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tournament"]) || array_key_exists("tournament", $context) ? $context["tournament"] : (function () { throw new RuntimeError('Variable "tournament" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Supprimer cette récompense ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "id", [], "any", false, false, false, 47))), "html", null, true);
            yield "\">
                                <button class=\"btn-admin btn-admin-danger p-2\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 55
        if (!$context['_iterated']) {
            // line 56
            yield "                <tr>
                    <td colspan=\"4\" class=\"text-center py-5\">
                        <span class=\"text-muted italic\">Aucune récompense définie pour ce tournoi.</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reward'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </tbody>
    </table>
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
        return "admin/reward/index.html.twig";
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
        return array (  208 => 62,  197 => 56,  195 => 55,  182 => 47,  178 => 46,  172 => 43,  166 => 40,  162 => 39,  156 => 36,  148 => 35,  144 => 33,  139 => 32,  119 => 15,  113 => 12,  106 => 8,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Récompenses - {{ tournament.name }} - Admin{% endblock %}

{% block body %}
<div class=\"admin-header d-flex justify-content-between align-items-center\">
    <div>
        <h1 class=\"h3 mb-1\">Récompenses : {{ tournament.name }}</h1>
        <p class=\"text-muted small mb-0\">Définissez les récompenses par rang pour cette compétition.</p>
    </div>
    <div class=\"d-flex gap-2\">
        <a href=\"{{ path('app_admin_reward_new', {'tournamentId': tournament.id}) }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Ajouter
        </a>
        <a href=\"{{ path('app_back_matchy_edit', {'id': tournament.id}) }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour au Tournoi
        </a>
    </div>
</div>

<div class=\"admin-card p-0 overflow-hidden\">
    <table class=\"admin-table mb-0\">
        <thead>
            <tr>
                <th>Rang</th>
                <th>Type</th>
                <th>Valeur</th>
                <th class=\"text-end\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for reward in rewards %}
                <tr>
                    <td>
                        <span class=\"badge-admin {% if reward.rank == 1 %}badge-ongoing{% else %}badge-planned{% endif %}\">
                            RANK #{{ reward.rank }}
                        </span>
                    </td>
                    <td>{{ reward.rewardType }}</td>
                    <td class=\"fw-bold text-info\">{{ reward.rewardValue }}</td>
                    <td class=\"text-end\">
                        <div class=\"d-flex justify-content-end gap-2\">
                            <a href=\"{{ path('app_admin_reward_edit', {'tournamentId': tournament.id, 'id': reward.id}) }}\" class=\"btn-admin btn-admin-secondary p-2\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"{{ path('app_admin_reward_delete', {'tournamentId': tournament.id, 'id': reward.id}) }}\" method=\"post\" onsubmit=\"return confirm('Supprimer cette récompense ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reward.id) }}\">
                                <button class=\"btn-admin btn-admin-danger p-2\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-center py-5\">
                        <span class=\"text-muted italic\">Aucune récompense définie pour ce tournoi.</span>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/reward/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\reward\\index.html.twig");
    }
}
