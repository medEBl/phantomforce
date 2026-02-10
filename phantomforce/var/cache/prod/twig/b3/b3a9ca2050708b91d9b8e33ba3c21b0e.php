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

/* matchy/_delete_form.html.twig */
class __TwigTemplate_ee372c2820a94ee9543e5096d11d5d82 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\" 
      onsubmit=\"return confirm('⚠️ Êtes-vous sûr de vouloir supprimer ce match ? Cette action est irréversible.');\"
      style=\"display: inline;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 4))), "html", null, true);
        yield "\">
    <button type=\"submit\" class=\"form-btn delete-btn-form\">
        🗑️ SUPPRIMER DÉFINITIVEMENT
    </button>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "matchy/_delete_form.html.twig";
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
        return array (  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "matchy/_delete_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\matchy\\_delete_form.html.twig");
    }
}
