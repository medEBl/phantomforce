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
class __TwigTemplate_c8a04fddc249f3024faf839453ea09e8 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "🎮 BLOOD ARENA - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "<div class=\"show-container\">
    <div class=\"info-card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 170), "html", null, true);
        yield "</h1>
        </div>
        
        <table class=\"info-table\">
            <tbody>
                <tr class=\"info-row\">
                    <th class=\"info-label\">ID</th>
                    <td class=\"info-value\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "id", [], "any", false, false, false, 177), "html", null, true);
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Nom</th>
                    <td class=\"info-value\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 181), "html", null, true);
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Jeu</th>
                    <td class=\"info-value\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "game", [], "any", false, false, false, 185), "html", null, true);
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Date de création</th>
                    <td class=\"info-value\">";
        // line 189
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "creationDate", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "creationDate", [], "any", false, false, false, 189), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "</td>
                </tr>
                <tr class=\"info-row\">
                    <th class=\"info-label\">Coach ID</th>
                    <td class=\"info-value\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "coachId", [], "any", false, false, false, 193), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>
        
        <div class=\"actions\">
            <a href=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["team"] ?? null), "id", [], "any", false, false, false, 199)]), "html", null, true);
        yield "\" class=\"btn btn-edit\">
                ✏️ Modifier
            </a>
            <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        yield "\" class=\"btn btn-back\">
                🔙 Retour à la liste
            </a>
        </div>
    </div>
</div>
";
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
        return array (  301 => 202,  295 => 199,  286 => 193,  279 => 189,  272 => 185,  265 => 181,  258 => 177,  248 => 170,  243 => 167,  236 => 166,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "team/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\team\\show.html.twig");
    }
}
