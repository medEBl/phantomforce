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

/* admin/tournament/index.html.twig */
class __TwigTemplate_7a726517d0a5f204630ec8349d605e87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tournament/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tournament/index.html.twig"));

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

        yield "Gestion des Tournois - ARENA Admin";
        
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
        <h1 class=\"h3 mb-1\">Gestion des Tournois</h1>
        <p class=\"text-muted small mb-0\">Visualisez, recherchez et gérez tous les tournois de la plateforme.</p>
    </div>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
        <i class=\"fas fa-plus\"></i> Nouveau Tournoi
    </a>
</div>

<div class=\"admin-card mb-4\">
    <form action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" method=\"get\" class=\"row g-3\">
        <div class=\"col-md-5\">
            <input type=\"text\" name=\"q\" class=\"form-control\" style=\"background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white;\" placeholder=\"Rechercher par nom ou jeu...\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-3\">
            <select name=\"sort\" class=\"form-select\" style=\"background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white;\">
                <option value=\"startDate\" ";
        // line 23
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 23, $this->source); })()) == "startDate")) {
            yield "selected";
        }
        yield ">Date de début</option>
                <option value=\"name\" ";
        // line 24
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 24, $this->source); })()) == "name")) {
            yield "selected";
        }
        yield ">Nom</option>
                <option value=\"game\" ";
        // line 25
        if (((isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 25, $this->source); })()) == "game")) {
            yield "selected";
        }
        yield ">Jeu</option>
            </select>
        </div>
        <div class=\"col-md-2\">
            <select name=\"order\" class=\"form-select\" style=\"background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white;\">
                <option value=\"DESC\" ";
        // line 30
        if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 30, $this->source); })()) == "DESC")) {
            yield "selected";
        }
        yield ">Décroissant</option>
                <option value=\"ASC\" ";
        // line 31
        if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 31, $this->source); })()) == "ASC")) {
            yield "selected";
        }
        yield ">Croissant</option>
            </select>
        </div>
        <div class=\"col-md-2 d-flex gap-2\">
            <button type=\"submit\" class=\"btn-admin btn-admin-primary flex-grow-1\">Filtrer</button>
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\"><i class=\"fas fa-sync-alt\"></i></a>
        </div>
    </form>
</div>

<div class=\"admin-card p-0 overflow-hidden\">
    <table class=\"admin-table mb-0\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Jeu</th>
                <th>Dates</th>
                <th>Statut</th>
                <th class=\"text-end\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tournaments"]) || array_key_exists("tournaments", $context) ? $context["tournaments"] : (function () { throw new RuntimeError('Variable "tournaments" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 54
            yield "                <tr>
                    <td>
                        <div class=\"fw-bold\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "name", [], "any", false, false, false, 56), "html", null, true);
            yield "</div>
                        <div class=\"text-muted small\">ID: #";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</div>
                    </td>
                    <td><span class=\"badge-admin badge-planned\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "game", [], "any", false, false, false, 59), "html", null, true);
            yield "</span></td>
                    <td>
                        <div><i class=\"far fa-calendar-alt me-2\"></i>Du ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "startDate", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
            yield "</div>
                        <div class=\"text-muted small\">Au ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "endDate", [], "any", false, false, false, 62), "d/m/Y"), "html", null, true);
            yield "</div>
                    </td>
                    <td>
                        ";
            // line 65
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "isActive", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "                            <span class=\"badge-admin badge-finished\">ACTIF</span>
                        ";
            } else {
                // line 68
                yield "                            <span class=\"badge-admin badge-cancelled\">INACTIF</span>
                        ";
            }
            // line 70
            yield "                    </td>
                    <td class=\"text-end\">
                        <div class=\"d-flex justify-content-end gap-2\">
                            <form action=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_toggle", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" method=\"post\">
                                <button class=\"btn-admin btn-admin-secondary p-2\" title=\"Changer le statut\">
                                    <i class=\"fas ";
            // line 75
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "fa-eye-slash";
            } else {
                yield "fa-eye";
            }
            yield "\"></i>
                                </button>
                            </form>
                            <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn-admin btn-admin-secondary p-2\" title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Supprimer ce tournoi ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tournament"], "id", [], "any", false, false, false, 82))), "html", null, true);
            yield "\">
                                <button class=\"btn-admin btn-admin-danger p-2\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center py-5\">
                        <i class=\"fas fa-info-circle mb-2 d-block opacity-25\" style=\"font-size: 2rem;\"></i>
                        <span class=\"text-muted\">Aucun tournoi trouvé.</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tournament'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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
        return "admin/tournament/index.html.twig";
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
        return array (  286 => 98,  274 => 91,  272 => 90,  259 => 82,  255 => 81,  249 => 78,  239 => 75,  234 => 73,  229 => 70,  225 => 68,  221 => 66,  219 => 65,  213 => 62,  209 => 61,  204 => 59,  199 => 57,  195 => 56,  191 => 54,  186 => 53,  166 => 36,  156 => 31,  150 => 30,  140 => 25,  134 => 24,  128 => 23,  121 => 19,  116 => 17,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gestion des Tournois - ARENA Admin{% endblock %}

{% block body %}
<div class=\"admin-header d-flex justify-content-between align-items-center\">
    <div>
        <h1 class=\"h3 mb-1\">Gestion des Tournois</h1>
        <p class=\"text-muted small mb-0\">Visualisez, recherchez et gérez tous les tournois de la plateforme.</p>
    </div>
    <a href=\"{{ path('app_back_matchy_new') }}\" class=\"btn-admin btn-admin-primary\">
        <i class=\"fas fa-plus\"></i> Nouveau Tournoi
    </a>
</div>

<div class=\"admin-card mb-4\">
    <form action=\"{{ path('app_back_matchy_index') }}\" method=\"get\" class=\"row g-3\">
        <div class=\"col-md-5\">
            <input type=\"text\" name=\"q\" class=\"form-control\" style=\"background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white;\" placeholder=\"Rechercher par nom ou jeu...\" value=\"{{ searchQuery }}\">
        </div>
        <div class=\"col-md-3\">
            <select name=\"sort\" class=\"form-select\" style=\"background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white;\">
                <option value=\"startDate\" {% if currentSort == 'startDate' %}selected{% endif %}>Date de début</option>
                <option value=\"name\" {% if currentSort == 'name' %}selected{% endif %}>Nom</option>
                <option value=\"game\" {% if currentSort == 'game' %}selected{% endif %}>Jeu</option>
            </select>
        </div>
        <div class=\"col-md-2\">
            <select name=\"order\" class=\"form-select\" style=\"background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white;\">
                <option value=\"DESC\" {% if currentOrder == 'DESC' %}selected{% endif %}>Décroissant</option>
                <option value=\"ASC\" {% if currentOrder == 'ASC' %}selected{% endif %}>Croissant</option>
            </select>
        </div>
        <div class=\"col-md-2 d-flex gap-2\">
            <button type=\"submit\" class=\"btn-admin btn-admin-primary flex-grow-1\">Filtrer</button>
            <a href=\"{{ path('app_back_matchy_index') }}\" class=\"btn-admin btn-admin-secondary\"><i class=\"fas fa-sync-alt\"></i></a>
        </div>
    </form>
</div>

<div class=\"admin-card p-0 overflow-hidden\">
    <table class=\"admin-table mb-0\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Jeu</th>
                <th>Dates</th>
                <th>Statut</th>
                <th class=\"text-end\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for tournament in tournaments %}
                <tr>
                    <td>
                        <div class=\"fw-bold\">{{ tournament.name }}</div>
                        <div class=\"text-muted small\">ID: #{{ tournament.id }}</div>
                    </td>
                    <td><span class=\"badge-admin badge-planned\">{{ tournament.game }}</span></td>
                    <td>
                        <div><i class=\"far fa-calendar-alt me-2\"></i>Du {{ tournament.startDate|date('d/m/Y') }}</div>
                        <div class=\"text-muted small\">Au {{ tournament.endDate|date('d/m/Y') }}</div>
                    </td>
                    <td>
                        {% if tournament.isActive %}
                            <span class=\"badge-admin badge-finished\">ACTIF</span>
                        {% else %}
                            <span class=\"badge-admin badge-cancelled\">INACTIF</span>
                        {% endif %}
                    </td>
                    <td class=\"text-end\">
                        <div class=\"d-flex justify-content-end gap-2\">
                            <form action=\"{{ path('app_back_matchy_toggle', {id: tournament.id}) }}\" method=\"post\">
                                <button class=\"btn-admin btn-admin-secondary p-2\" title=\"Changer le statut\">
                                    <i class=\"fas {% if tournament.isActive %}fa-eye-slash{% else %}fa-eye{% endif %}\"></i>
                                </button>
                            </form>
                            <a href=\"{{ path('app_back_matchy_edit', {id: tournament.id}) }}\" class=\"btn-admin btn-admin-secondary p-2\" title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form action=\"{{ path('app_back_matchy_delete', {id: tournament.id}) }}\" method=\"post\" onsubmit=\"return confirm('Supprimer ce tournoi ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tournament.id) }}\">
                                <button class=\"btn-admin btn-admin-danger p-2\" title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center py-5\">
                        <i class=\"fas fa-info-circle mb-2 d-block opacity-25\" style=\"font-size: 2rem;\"></i>
                        <span class=\"text-muted\">Aucun tournoi trouvé.</span>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/tournament/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\tournament\\index.html.twig");
    }
}
