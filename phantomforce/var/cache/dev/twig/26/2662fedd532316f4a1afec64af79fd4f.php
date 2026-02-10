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

/* team/show.html.twig */
class __TwigTemplate_e4b4656cde4a2583c366626b96251b38 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "🎮 BLOOD ARENA - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --blood-red: #ff003c;
        --dark-red: #cc0030;
        --light-red: #ff335c;
        --blood-orange: #ff6600;
        --fire-yellow: #ffcc00;
        --dark-bg: #000000;
        --dark-gray: #111111;
        --medium-gray: #222222;
        --light-gray: #333333;
        --text-color: #ffffff;
        --text-muted: #aaaaaa;
    }
    
    body {
        background: linear-gradient(135deg, #000000 0%, #111111 50%, #220000 100%);
        font-family: 'Rajdhani', sans-serif;
        color: var(--text-color);
        min-height: 100vh;
        padding: 2rem;
    }
    
    .show-container {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .info-card {
        background: linear-gradient(145deg, rgba(34, 34, 34, 0.95), rgba(17, 17, 17, 0.95));
        border-radius: 20px;
        border: 2px solid var(--blood-red);
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
    }
    
    .card-header {
        border-bottom: 2px solid var(--blood-red);
        padding-bottom: 1.5rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .card-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--fire-yellow);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .card-title::before {
        content: '⚡';
        margin-right: 0.5rem;
    }
    
    .info-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
    }
    
    .info-row {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .info-label {
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        padding: 1rem;
        text-transform: uppercase;
        width: 30%;
        border-right: 2px solid rgba(255, 0, 60, 0.2);
    }
    
    .info-value {
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        padding: 1rem;
    }
    
    .actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        padding-top: 2rem;
        border-top: 1px solid rgba(255, 0, 60, 0.3);
    }
    
    .btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .btn-edit {
        background: var(--blood-orange);
        color: black;
        border: none;
    }
    
    .btn-edit:hover {
        background: var(--fire-yellow);
        transform: translateY(-2px);
    }
    
    .btn-back {
        background: transparent;
        color: white;
        border: 2px solid var(--blood-red);
    }
    
    .btn-back:hover {
        background: var(--blood-red);
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        body {
            padding: 1rem;
        }
        
        .info-card {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 1.8rem;
        }
        
        .info-label, .info-value {
            padding: 0.8rem;
            font-size: 1rem;
        }
        
        .actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 166
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

        // line 167
        yield "
<div class=\"show-container\">
    <div class=\"info-card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 171, $this->source); })()), "name", [], "any", false, false, false, 171), "html", null, true);
        yield "</h1>
        </div>
        
        <table class=\"info-table\">
            <tbody>
                <tr class=\"info-row\">
                    <th class=\"info-label\">ID</th>
                    <td class=\"info-value\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 178, $this->source); })()), "id", [], "any", false, false, false, 178), "html", null, true);
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Nom</th>
                    <td class=\"info-value\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 182, $this->source); })()), "name", [], "any", false, false, false, 182), "html", null, true);
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Jeu</th>
                    <td class=\"info-value\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 186, $this->source); })()), "game", [], "any", false, false, false, 186), "html", null, true);
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Date de création</th>
                    <td class=\"info-value\">";
        // line 190
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 190, $this->source); })()), "creationDate", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 190, $this->source); })()), "creationDate", [], "any", false, false, false, 190), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Coach ID</th>
                    <td class=\"info-value\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 194, $this->source); })()), "coachId", [], "any", false, false, false, 194), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"actions\">
            <a href=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">
                ✏️ Modifier
            </a>
            <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        yield "\" class=\"btn btn-back\">
                🔙 Retour à la liste
            </a>
        </div>
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
        return "team/show.html.twig";
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
        return array (  344 => 203,  338 => 200,  329 => 194,  322 => 190,  315 => 186,  308 => 182,  301 => 178,  291 => 171,  285 => 167,  272 => 166,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎮 BLOOD ARENA - {{ team.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;500;700&display=swap');
    
    :root {
        --blood-red: #ff003c;
        --dark-red: #cc0030;
        --light-red: #ff335c;
        --blood-orange: #ff6600;
        --fire-yellow: #ffcc00;
        --dark-bg: #000000;
        --dark-gray: #111111;
        --medium-gray: #222222;
        --light-gray: #333333;
        --text-color: #ffffff;
        --text-muted: #aaaaaa;
    }
    
    body {
        background: linear-gradient(135deg, #000000 0%, #111111 50%, #220000 100%);
        font-family: 'Rajdhani', sans-serif;
        color: var(--text-color);
        min-height: 100vh;
        padding: 2rem;
    }
    
    .show-container {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .info-card {
        background: linear-gradient(145deg, rgba(34, 34, 34, 0.95), rgba(17, 17, 17, 0.95));
        border-radius: 20px;
        border: 2px solid var(--blood-red);
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
    }
    
    .card-header {
        border-bottom: 2px solid var(--blood-red);
        padding-bottom: 1.5rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    
    .card-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--fire-yellow);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .card-title::before {
        content: '⚡';
        margin-right: 0.5rem;
    }
    
    .info-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 2rem;
    }
    
    .info-row {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .info-label {
        color: var(--fire-yellow);
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        padding: 1rem;
        text-transform: uppercase;
        width: 30%;
        border-right: 2px solid rgba(255, 0, 60, 0.2);
    }
    
    .info-value {
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.1rem;
        padding: 1rem;
    }
    
    .actions {
        display: flex;
        gap: 1rem;
        justify-content: center;
        padding-top: 2rem;
        border-top: 1px solid rgba(255, 0, 60, 0.3);
    }
    
    .btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        font-family: 'Orbitron', sans-serif;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .btn-edit {
        background: var(--blood-orange);
        color: black;
        border: none;
    }
    
    .btn-edit:hover {
        background: var(--fire-yellow);
        transform: translateY(-2px);
    }
    
    .btn-back {
        background: transparent;
        color: white;
        border: 2px solid var(--blood-red);
    }
    
    .btn-back:hover {
        background: var(--blood-red);
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        body {
            padding: 1rem;
        }
        
        .info-card {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 1.8rem;
        }
        
        .info-label, .info-value {
            padding: 0.8rem;
            font-size: 1rem;
        }
        
        .actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block body %}

<div class=\"show-container\">
    <div class=\"info-card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">{{ team.name }}</h1>
        </div>
        
        <table class=\"info-table\">
            <tbody>
                <tr class=\"info-row\">
                    <th class=\"info-label\">ID</th>
                    <td class=\"info-value\">{{ team.id }}</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Nom</th>
                    <td class=\"info-value\">{{ team.name }}</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Jeu</th>
                    <td class=\"info-value\">{{ team.game }}</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Date de création</th>
                    <td class=\"info-value\">{{ team.creationDate ? team.creationDate|date('d/m/Y H:i') : '' }}</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Coach ID</th>
                    <td class=\"info-value\">{{ team.coachId }}</td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"actions\">
            <a href=\"{{ path('app_team_edit', {'id': team.id}) }}\" class=\"btn btn-edit\">
                ✏️ Modifier
            </a>
            <a href=\"{{ path('app_team_index') }}\" class=\"btn btn-back\">
                🔙 Retour à la liste
            </a>
        </div>
    </div>
</div>
{% endblock %}", "team/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\team\\show.html.twig");
    }
}
