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

/* front/questionnaire_form.html.twig */
class __TwigTemplate_88ee5559fbaaed71bd15e531ffa975fd extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/questionnaire_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/questionnaire_form.html.twig"));

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

        yield "Questionnaire — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 3, $this->source); })()), "pseudo", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }
  .muted{ color: var(--text-muted); }
  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }
  .row{ display:flex; align-items:center; gap:10px; flex-wrap:wrap; }

  .kbd{
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .2px;
  }

  /* ===== Symfony form theming (form_row output) ===== */
  .grid .form-row,
  .grid .form-group,
  .grid > div{
    /* In case Symfony wraps rows differently depending on config */
  }

  /* Make each field look like a \"tile\" */
  .grid > *{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .grid > *:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }

  /* Labels */
  .grid label{
    display:block;
    margin-bottom: 8px;
    font-size: 12px;
    font-weight: 800;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: .6px;
  }

  /* Inputs */
  .grid input[type=\"text\"],
  .grid input[type=\"email\"],
  .grid input[type=\"number\"],
  .grid input[type=\"password\"],
  .grid input[type=\"url\"],
  .grid input[type=\"date\"],
  .grid textarea,
  .grid select{
    width: 100%;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 12px 14px;
    color: var(--text-light);
    font-size: 14px;
    transition: var(--transition);
    outline: none;
  }

  .grid textarea{ min-height: 110px; resize: vertical; }

  .grid input:focus,
  .grid textarea:focus,
  .grid select:focus{
    border-color: rgba(255,45,45,0.35);
    box-shadow: 0 0 0 2px rgba(255,45,45,0.12);
  }

  /* Help text (if any) */
  .grid .help-text,
  .grid small{
    display:block;
    margin-top: 8px;
    font-size: 12px;
    color: var(--text-muted);
  }

  /* Errors */
  .form-error-message,
  .grid ul,
  .grid .invalid-feedback{
    margin: 10px 0 0;
    padding: 10px 12px;
    border-radius: var(--radius);
    background: rgba(255,45,45,0.10);
    border: 1px solid rgba(255,45,45,0.30);
    color: #ff6b6b;
    font-size: 12px;
    font-weight: 700;
    list-style: none;
  }
  .grid li{ margin: 0; }

  /* Global errors at top */
  form > .form-error-message,
  form > ul{
    margin-bottom: 12px;
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

        // line 126
        yield "<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Questionnaire</h2>
      <p class=\"muted\" style=\"margin:0;\">
        For <b>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 131, $this->source); })()), "pseudo", [], "any", false, false, false, 131), "html", null, true);
        yield "</b>
        ";
        // line 132
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 132, $this->source); })()), "rank", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "          • <span class=\"kbd\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 133, $this->source); })()), "rank", [], "any", false, false, false, 133), "html", null, true);
            yield "</span>
        ";
        }
        // line 135
        yield "      </p>
    </div>

    <a class=\"btn btn-secondary\" href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\">
      <i class=\"fa-solid fa-arrow-left\"></i> Back
    </a>
  </div>

  <div class=\"hr\"></div>

  ";
        // line 146
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    ";
        // line 149
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'errors');
        yield "

    <div class=\"grid\" style=\"display:grid; gap:12px;\">
      ";
        // line 153
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 154
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "    </div>

    <div class=\"hr\"></div>

    <div class=\"row\" style=\"justify-content:flex-end;\">
      <button class=\"btn btn-primary\" type=\"submit\">
        <i class=\"fa-solid fa-floppy-disk\"></i> Save answers
      </button>
    </div>

  ";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_end');
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
        return "front/questionnaire_form.html.twig";
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
        return array (  316 => 166,  304 => 156,  295 => 154,  290 => 153,  283 => 149,  277 => 146,  267 => 138,  262 => 135,  256 => 133,  254 => 132,  250 => 131,  243 => 126,  230 => 125,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Questionnaire — {{ agent.pseudo }}{% endblock %}

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
  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }
  .row{ display:flex; align-items:center; gap:10px; flex-wrap:wrap; }

  .kbd{
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .2px;
  }

  /* ===== Symfony form theming (form_row output) ===== */
  .grid .form-row,
  .grid .form-group,
  .grid > div{
    /* In case Symfony wraps rows differently depending on config */
  }

  /* Make each field look like a \"tile\" */
  .grid > *{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .grid > *:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }

  /* Labels */
  .grid label{
    display:block;
    margin-bottom: 8px;
    font-size: 12px;
    font-weight: 800;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: .6px;
  }

  /* Inputs */
  .grid input[type=\"text\"],
  .grid input[type=\"email\"],
  .grid input[type=\"number\"],
  .grid input[type=\"password\"],
  .grid input[type=\"url\"],
  .grid input[type=\"date\"],
  .grid textarea,
  .grid select{
    width: 100%;
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 12px 14px;
    color: var(--text-light);
    font-size: 14px;
    transition: var(--transition);
    outline: none;
  }

  .grid textarea{ min-height: 110px; resize: vertical; }

  .grid input:focus,
  .grid textarea:focus,
  .grid select:focus{
    border-color: rgba(255,45,45,0.35);
    box-shadow: 0 0 0 2px rgba(255,45,45,0.12);
  }

  /* Help text (if any) */
  .grid .help-text,
  .grid small{
    display:block;
    margin-top: 8px;
    font-size: 12px;
    color: var(--text-muted);
  }

  /* Errors */
  .form-error-message,
  .grid ul,
  .grid .invalid-feedback{
    margin: 10px 0 0;
    padding: 10px 12px;
    border-radius: var(--radius);
    background: rgba(255,45,45,0.10);
    border: 1px solid rgba(255,45,45,0.30);
    color: #ff6b6b;
    font-size: 12px;
    font-weight: 700;
    list-style: none;
  }
  .grid li{ margin: 0; }

  /* Global errors at top */
  form > .form-error-message,
  form > ul{
    margin-bottom: 12px;
  }
</style>
{% endblock %}

{% block body %}
<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Questionnaire</h2>
      <p class=\"muted\" style=\"margin:0;\">
        For <b>{{ agent.pseudo }}</b>
        {% if agent.rank %}
          • <span class=\"kbd\">{{ agent.rank }}</span>
        {% endif %}
      </p>
    </div>

    <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_index') }}\">
      <i class=\"fa-solid fa-arrow-left\"></i> Back
    </a>
  </div>

  <div class=\"hr\"></div>

  {# ✅ HARD disable HTML5 validation #}
  {{ form_start(form, { attr: { 'novalidate': 'novalidate' } }) }}

    {# ✅ global errors #}
    {{ form_errors(form) }}

    <div class=\"grid\" style=\"display:grid; gap:12px;\">
      {# ✅ render each field row with label + widget + errors #}
      {% for field in form %}
        {{ form_row(field) }}
      {% endfor %}
    </div>

    <div class=\"hr\"></div>

    <div class=\"row\" style=\"justify-content:flex-end;\">
      <button class=\"btn btn-primary\" type=\"submit\">
        <i class=\"fa-solid fa-floppy-disk\"></i> Save answers
      </button>
    </div>

  {{ form_end(form) }}
</section>
{% endblock %}
", "front/questionnaire_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\questionnaire_form.html.twig");
    }
}
