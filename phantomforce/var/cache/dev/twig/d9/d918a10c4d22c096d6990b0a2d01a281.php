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

/* agent/_delete_form.html.twig */
class __TwigTemplate_e1073a306eb42f8eb6c1362e8349b908 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent/_delete_form.html.twig"));

        // line 1
        yield "<form method=\"post\"
      action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\"
      onsubmit=\"return confirm('Are you sure you want to delete this agent?');\"
      style=\"display:inline;\">

  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6))), "html", null, true);
        yield "\">

  <button type=\"submit\"
          style=\"
            padding:10px 18px;
            border-radius:12px;
            border:none;
            background: linear-gradient(135deg,#ff2d2d,#ff5e5e);
            color:black;
            font-weight:900;
            font-size:14px;
            cursor:pointer;
            display:flex;
            align-items:center;
            gap:8px;
            box-shadow: 0 8px 20px rgba(255,45,45,0.35);
          \">
    <i class=\"fa-solid fa-trash\"></i>
    Delete
  </button>

</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agent/_delete_form.html.twig";
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
        return array (  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\"
      action=\"{{ path('app_agent_delete', { id: agent.id }) }}\"
      onsubmit=\"return confirm('Are you sure you want to delete this agent?');\"
      style=\"display:inline;\">

  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ agent.id) }}\">

  <button type=\"submit\"
          style=\"
            padding:10px 18px;
            border-radius:12px;
            border:none;
            background: linear-gradient(135deg,#ff2d2d,#ff5e5e);
            color:black;
            font-weight:900;
            font-size:14px;
            cursor:pointer;
            display:flex;
            align-items:center;
            gap:8px;
            box-shadow: 0 8px 20px rgba(255,45,45,0.35);
          \">
    <i class=\"fa-solid fa-trash\"></i>
    Delete
  </button>

</form>
", "agent/_delete_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\agent\\_delete_form.html.twig");
    }
}
