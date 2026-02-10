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

/* front/agent_form.html.twig */
class __TwigTemplate_5b6f3e8dd2d69beb21a891f8c4efba77 extends Template
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
            'inline_styles' => [$this, 'block_inline_styles'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/agent_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/agent_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Créer un Profil Agent";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inline_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inline_styles"));

        // line 7
        yield "<style>
  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }
  .muted{ color: var(--text-muted); }
  .small{ font-size: 13px; }
  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }

  .row{ display:flex; align-items:center; gap:10px; flex-wrap:wrap; }
  .grid{ display:grid; gap:12px; }

  a.btn{ text-decoration: none; }

  form label{
    display:block;
    font-weight: 600;
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 6px;
  }

  form input,
  form select,
  form textarea{
    width: 100%;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-main);
    transition: var(--transition);
    outline: none;
  }

  form input:focus,
  form select:focus,
  form textarea:focus{
    border-color: var(--red);
    box-shadow: 0 0 0 2px rgba(255,45,45,0.2);
  }

  /* ✅ FIX: Force Dropdown Options to be Dark */
  form select option {
    background-color: #1a1a1a; /* Dark background */
    color: white; /* Light text */
  }

  section.card{
    max-width: 820px;
    margin: 0 auto;
  }
  
  form select{
    color-scheme: dark; /* Helps on modern browsers */
    background-color: rgba(255,255,255,0.04);
    color: var(--text-main);
  }

  /* Errors styling */
  .grid ul,
  .grid .invalid-feedback {
    margin: 5px 0 0;
    padding: 8px 12px;
    border-radius: 8px;
    background: rgba(255,45,45,0.10);
    border: 1px solid rgba(255,45,45,0.30);
    color: #ff6b6b;
    font-size: 12px;
    font-weight: 600;
    list-style: none;
  }
  .grid li { margin: 0; }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "
<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Créer un Profil Agent</h2>
      <p class=\"muted\" style=\"margin:0;\">
        Choisissez un jeu et configurez votre profil.
      </p>
    </div>

    <a class=\"btn btn-secondary\" href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\">
      <i class=\"fa-solid fa-arrow-left\"></i> Retour
    </a>
  </div>

  <div class=\"hr\"></div>

  ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 106
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 107
                yield "      <div class=\"card\" style=\"margin-bottom:12px; background: rgba(255,255,255,0.03); border-color: var(--border-light);\">
        <span class=\"muted\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "
  <div class=\"card\" style=\"background: rgba(255,204,102,0.06); border-color: rgba(255,204,102,0.25);\">
    <p class=\"small muted\" style=\"margin:0; line-height:1.6;\">
      <i class=\"fa-solid fa-triangle-exclamation\"></i>
      Après la création, vous ne pourrez modifier que :
      <b>pseudo</b>, <b>rang</b>, <b>statut</b> et <b>lien social</b>.
    </p>
  </div>

  <div class=\"hr\"></div>

  ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"grid\">
      ";
        // line 127
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 128
            yield "          ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "    </div>

    <div class=\"hr\"></div>

    <div class=\"row\" style=\"justify-content:flex-end; gap:10px;\">
      <button class=\"btn btn-primary\" type=\"submit\">
        <i class=\"fa-solid fa-plus\"></i> Créer
      </button>

      <a class=\"btn btn-secondary\" href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\">
        Annuler
      </a>
    </div>

  ";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end');
        yield "

</section>

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
        return "front/agent_form.html.twig";
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
        return array (  304 => 144,  296 => 139,  285 => 130,  276 => 128,  271 => 127,  265 => 123,  252 => 112,  246 => 111,  237 => 108,  234 => 107,  229 => 106,  225 => 105,  215 => 98,  203 => 88,  190 => 87,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/agent_form.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Créer un Profil Agent{% endblock %}

{% block inline_styles %}
<style>
  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }
  .muted{ color: var(--text-muted); }
  .small{ font-size: 13px; }
  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }

  .row{ display:flex; align-items:center; gap:10px; flex-wrap:wrap; }
  .grid{ display:grid; gap:12px; }

  a.btn{ text-decoration: none; }

  form label{
    display:block;
    font-weight: 600;
    font-size: 14px;
    color: var(--text-light);
    margin-bottom: 6px;
  }

  form input,
  form select,
  form textarea{
    width: 100%;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-main);
    transition: var(--transition);
    outline: none;
  }

  form input:focus,
  form select:focus,
  form textarea:focus{
    border-color: var(--red);
    box-shadow: 0 0 0 2px rgba(255,45,45,0.2);
  }

  /* ✅ FIX: Force Dropdown Options to be Dark */
  form select option {
    background-color: #1a1a1a; /* Dark background */
    color: white; /* Light text */
  }

  section.card{
    max-width: 820px;
    margin: 0 auto;
  }
  
  form select{
    color-scheme: dark; /* Helps on modern browsers */
    background-color: rgba(255,255,255,0.04);
    color: var(--text-main);
  }

  /* Errors styling */
  .grid ul,
  .grid .invalid-feedback {
    margin: 5px 0 0;
    padding: 8px 12px;
    border-radius: 8px;
    background: rgba(255,45,45,0.10);
    border: 1px solid rgba(255,45,45,0.30);
    color: #ff6b6b;
    font-size: 12px;
    font-weight: 600;
    list-style: none;
  }
  .grid li { margin: 0; }

</style>
{% endblock %}

{% block body %}

<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Créer un Profil Agent</h2>
      <p class=\"muted\" style=\"margin:0;\">
        Choisissez un jeu et configurez votre profil.
      </p>
    </div>

    <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_index') }}\">
      <i class=\"fa-solid fa-arrow-left\"></i> Retour
    </a>
  </div>

  <div class=\"hr\"></div>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"card\" style=\"margin-bottom:12px; background: rgba(255,255,255,0.03); border-color: var(--border-light);\">
        <span class=\"muted\">{{ message }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  <div class=\"card\" style=\"background: rgba(255,204,102,0.06); border-color: rgba(255,204,102,0.25);\">
    <p class=\"small muted\" style=\"margin:0; line-height:1.6;\">
      <i class=\"fa-solid fa-triangle-exclamation\"></i>
      Après la création, vous ne pourrez modifier que :
      <b>pseudo</b>, <b>rang</b>, <b>statut</b> et <b>lien social</b>.
    </p>
  </div>

  <div class=\"hr\"></div>

  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"grid\">
      {# Render the fields #}
      {% for field in form %}
          {{ form_row(field) }}
      {% endfor %}
    </div>

    <div class=\"hr\"></div>

    <div class=\"row\" style=\"justify-content:flex-end; gap:10px;\">
      <button class=\"btn btn-primary\" type=\"submit\">
        <i class=\"fa-solid fa-plus\"></i> Créer
      </button>

      <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_index') }}\">
        Annuler
      </a>
    </div>

  {{ form_end(form) }}

</section>

{% endblock %}", "front/agent_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\agent_form.html.twig");
    }
}
