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

/* front/edit.html.twig */
class __TwigTemplate_e6069c3aeb09ec61cc00b22bdff7d24f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/edit.html.twig"));

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

        yield "Modifier le Profil Agent";
        
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
  /* ===== Base helpers (consistent with index/show) ===== */
  section.card{
    max-width: 820px;
    margin: 0 auto;
  }

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

  a.btn{ text-decoration: none; }

  /* ===== Info / note box ===== */
  .note{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
  }

  /* ===== Symfony form_row() theming ===== */
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

  /* Labels look like your Q/A question style */
  form label{
    display:block;
    margin-bottom: 8px;
    font-size: 12px;
    font-weight: 800;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: .6px;
  }

  /* Inputs / selects / textareas */
  form input[type=\"text\"],
  form input[type=\"email\"],
  form input[type=\"url\"],
  form input[type=\"number\"],
  form input[type=\"password\"],
  form input[type=\"date\"],
  form textarea,
  form select{
    width: 100%;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    transition: var(--transition);
    outline: none;
  }

  form textarea{ min-height: 110px; resize: vertical; }

  /* Keep select consistent */
  form select{
    color-scheme: dark;
  }
  
  /* ✅ FIX: Force Dropdown Options to be Dark (If status is a dropdown) */
  form select option {
    background-color: #1a1a1a;
    color: white;
  }

  form input:focus,
  form select:focus,
  form textarea:focus{
    border-color: rgba(255,45,45,0.35);
    box-shadow: 0 0 0 2px rgba(255,45,45,0.12);
  }

  /* Help text (if your form has it) */
  form small,
  form .form-text,
  form .help-text{
    display:block;
    margin-top: 8px;
    font-size: 12px;
    color: var(--text-muted);
  }

  /* Errors (Symfony often outputs <ul><li>..) */
  .grid ul,
  .grid .invalid-feedback,
  .grid .form-error-message{
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 143
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

        // line 144
        yield "
<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Modifier le Profil Agent</h2>
      <p class=\"muted\" style=\"margin:0;\">
        ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 150, $this->source); })()), "pseudo", [], "any", false, false, false, 150), "html", null, true);
        yield " • <span class=\"kbd\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 150, $this->source); })()), "game", [], "any", false, false, false, 150), "html", null, true);
        yield "</span>
      </p>
    </div>

    <a class=\"btn btn-secondary\" href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\">
      <i class=\"fa-solid fa-arrow-left\"></i> Retour
    </a>
  </div>

  <div class=\"hr\"></div>

  <div class=\"note\">
    <p class=\"small muted\" style=\"line-height:1.6; margin:0;\">
      <i class=\"fa-solid fa-circle-info\"></i>
      Vous ne pouvez modifier que :
      <b>pseudo</b>, <b>rang</b>, <b>statut</b>, <b>lien social</b>.
      <br>
      Le jeu et les autres champs sont verrouillés pour éviter les doublons.
    </p>
  </div>

  <div class=\"hr\"></div>

  ";
        // line 174
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"grid\">
      ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 178
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
            yield "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "    </div>

    <div class=\"hr\"></div>

    <div class=\"row\" style=\"justify-content:flex-end; gap:10px;\">
      <button class=\"btn btn-primary\" type=\"submit\">
        <i class=\"fa-solid fa-floppy-disk\"></i> Enregistrer
      </button>

      <a class=\"btn btn-secondary\" href=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\">
        Annuler
      </a>
    </div>

  ";
        // line 194
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), 'form_end');
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
        return "front/edit.html.twig";
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
        return array (  337 => 194,  329 => 189,  318 => 180,  309 => 178,  305 => 177,  298 => 174,  276 => 154,  267 => 150,  259 => 144,  246 => 143,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier le Profil Agent{% endblock %}

{% block inline_styles %}
<style>
  /* ===== Base helpers (consistent with index/show) ===== */
  section.card{
    max-width: 820px;
    margin: 0 auto;
  }

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

  a.btn{ text-decoration: none; }

  /* ===== Info / note box ===== */
  .note{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
  }

  /* ===== Symfony form_row() theming ===== */
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

  /* Labels look like your Q/A question style */
  form label{
    display:block;
    margin-bottom: 8px;
    font-size: 12px;
    font-weight: 800;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: .6px;
  }

  /* Inputs / selects / textareas */
  form input[type=\"text\"],
  form input[type=\"email\"],
  form input[type=\"url\"],
  form input[type=\"number\"],
  form input[type=\"password\"],
  form input[type=\"date\"],
  form textarea,
  form select{
    width: 100%;
    padding: 12px 14px;
    border-radius: 10px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    transition: var(--transition);
    outline: none;
  }

  form textarea{ min-height: 110px; resize: vertical; }

  /* Keep select consistent */
  form select{
    color-scheme: dark;
  }
  
  /* ✅ FIX: Force Dropdown Options to be Dark (If status is a dropdown) */
  form select option {
    background-color: #1a1a1a;
    color: white;
  }

  form input:focus,
  form select:focus,
  form textarea:focus{
    border-color: rgba(255,45,45,0.35);
    box-shadow: 0 0 0 2px rgba(255,45,45,0.12);
  }

  /* Help text (if your form has it) */
  form small,
  form .form-text,
  form .help-text{
    display:block;
    margin-top: 8px;
    font-size: 12px;
    color: var(--text-muted);
  }

  /* Errors (Symfony often outputs <ul><li>..) */
  .grid ul,
  .grid .invalid-feedback,
  .grid .form-error-message{
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
</style>
{% endblock %}

{% block body %}

<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Modifier le Profil Agent</h2>
      <p class=\"muted\" style=\"margin:0;\">
        {{ agent.pseudo }} • <span class=\"kbd\">{{ agent.game }}</span>
      </p>
    </div>

    <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_index') }}\">
      <i class=\"fa-solid fa-arrow-left\"></i> Retour
    </a>
  </div>

  <div class=\"hr\"></div>

  <div class=\"note\">
    <p class=\"small muted\" style=\"line-height:1.6; margin:0;\">
      <i class=\"fa-solid fa-circle-info\"></i>
      Vous ne pouvez modifier que :
      <b>pseudo</b>, <b>rang</b>, <b>statut</b>, <b>lien social</b>.
      <br>
      Le jeu et les autres champs sont verrouillés pour éviter les doublons.
    </p>
  </div>

  <div class=\"hr\"></div>

  {# ✅ FIX: Added 'novalidate' to disable browser popups #}
  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"grid\">
      {% for field in form %}
        {{ form_row(field) }}
      {% endfor %}
    </div>

    <div class=\"hr\"></div>

    <div class=\"row\" style=\"justify-content:flex-end; gap:10px;\">
      <button class=\"btn btn-primary\" type=\"submit\">
        <i class=\"fa-solid fa-floppy-disk\"></i> Enregistrer
      </button>

      <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_index') }}\">
        Annuler
      </a>
    </div>

  {{ form_end(form) }}

</section>

{% endblock %}", "front/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\edit.html.twig");
    }
}
