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

/* front/show.html.twig */
class __TwigTemplate_baa058992c996e8755023d6ceae6c3dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/show.html.twig"));

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

        yield "Agent — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 4, $this->source); })()), "pseudo", [], "any", false, false, false, 4), "html", null, true);
        
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
  .page-wrap { max-width: 1200px; margin: 0 auto; }

  /* HERO matches your index style (glass + subtle borders) */
  .page-hero {
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }

  .hero-title {
    margin: 0 0 6px;
    font-size: 30px;
    font-weight: 800;
    color: var(--text-light);
  }
  .hero-sub {
    margin: 0;
    color: var(--text-muted);
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    align-items:center;
  }

  .content-grid {
    margin-top: 16px;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 14px;
  }
  @media (max-width: 992px) {
    .content-grid { grid-template-columns: 1fr; }
  }

  /* CARD matches your index style */
  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }

  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }
  .muted{ color: var(--text-muted); }
  .row{ display:flex; align-items:center; gap:10px; flex-wrap:wrap; }
  a.btn{ text-decoration:none; }

  /* Pills like your index */
  .pill{
    display:inline-flex;
    align-items:center;
    padding: 6px 12px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 600;
    gap: 8px;
  }

  /* Status like your index (text colored) */
  .status{
    display:inline-flex;
    align-items:center;
    padding: 6px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 800;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    gap: 8px;
  }
  .status.active{ color: var(--green); }
  .status.inactive{ color: var(--yellow); }
  .status.banned{ color: var(--red); }

  /* Info tiles same family */
  .info-grid {
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px 14px;
  }
  @media (max-width: 768px) {
    .info-grid { grid-template-columns: 1fr; }
  }

  .info-item{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .info-item:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }
  .info-label{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: .6px;
    margin-bottom: 6px;
  }
  .info-value{
    font-size: 15px;
    font-weight: 700;
    color: var(--text-light);
  }

  /* Questionnaire tiles */
  .qa-container { display:grid; gap: 12px; }
  .qa-item{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .qa-item:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }
  .qa-question{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 6px;
  }
  .qa-answer{
    font-size: 15px;
    font-weight: 700;
    color: var(--text-light);
    line-height: 1.35;
  }

  /* Alert matches your dark palette (no blue) */
  .alert-soft {
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    color: var(--text-light);
    padding: 14px 16px;
    border-radius: var(--radius);
    display:flex;
    gap:10px;
    align-items:flex-start;
  }
  .alert-soft i { color: var(--text-muted); margin-top: 2px; }

  /* Buttons: keep same danger colors as your index */
  .btn-danger{
    background: rgba(255,45,45,0.12);
    border: 1px solid rgba(255,45,45,0.35);
    color: #ff6b6b;
  }
  .btn-danger:hover{
    background: rgba(255,45,45,0.18);
    transform: translateY(-2px);
  }

  .actions-row {
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    justify-content:flex-end;
    margin-top: 12px;
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 188
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

        // line 189
        yield "<div class=\"page-wrap\">

  ";
        // line 192
        yield "  <section class=\"page-hero\">
    <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
      <div>
        <h1 class=\"hero-title\">";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 195, $this->source); })()), "pseudo", [], "any", false, false, false, 195), "html", null, true);
        yield "</h1>
        <p class=\"hero-sub\">
          <span class=\"pill\"><i class=\"fa-solid fa-gamepad\"></i> ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 197, $this->source); })()), "game", [], "any", false, false, false, 197), "html", null, true);
        yield "</span>
          <span class=\"pill\"><i class=\"fa-solid fa-ranking-star\"></i> Rang : ";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 198, $this->source); })()), "rank", [], "any", false, false, false, 198), "html", null, true);
        yield "</span>
          <span class=\"status ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 199, $this->source); })()), "status", [], "any", false, false, false, 199), "html", null, true);
        yield "\">
            <i class=\"fa-solid fa-circle\" style=\"font-size:8px;\"></i>
            ";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 201, $this->source); })()), "status", [], "any", false, false, false, 201)), "html", null, true);
        yield "
          </span>
        </p>
      </div>

      <div class=\"row\" style=\"justify-content:flex-end;\">
        <a class=\"btn btn-secondary\" href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_index");
        yield "\">
          <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </a>
        <a class=\"btn btn-primary\" href=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210)]), "html", null, true);
        yield "\">
          <i class=\"fa-solid fa-pen\"></i> Modifier l'Agent
        </a>
      </div>
    </div>
  </section>

  <div class=\"content-grid\">

    ";
        // line 220
        yield "    <section class=\"card\">
      <h2 style=\"margin:0 0 10px;\">
        <i class=\"fa-solid fa-id-card\" style=\"color:var(--text-muted); margin-right:8px;\"></i>
        Détails de l'Agent
      </h2>

      <div class=\"info-grid\">
        <div class=\"info-item\">
          <span class=\"info-label\">Pseudo</span>
          <div class=\"info-value\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 229, $this->source); })()), "pseudo", [], "any", false, false, false, 229), "html", null, true);
        yield "</div>
        </div>

        <div class=\"info-item\">
          <span class=\"info-label\">Jeu</span>
          <div class=\"info-value\">";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 234, $this->source); })()), "game", [], "any", false, false, false, 234), "html", null, true);
        yield "</div>
        </div>

        <div class=\"info-item\">
          <span class=\"info-label\">Rang</span>
          <div class=\"info-value\">";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 239, $this->source); })()), "rank", [], "any", false, false, false, 239), "html", null, true);
        yield "</div>
        </div>

        <div class=\"info-item\">
          <span class=\"info-label\">Statut</span>
          <div class=\"info-value\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 244, $this->source); })()), "status", [], "any", false, false, false, 244)), "html", null, true);
        yield "</div>
        </div>

        <div class=\"info-item\" style=\"grid-column: 1 / -1;\">
          <span class=\"info-label\">Créé le</span>
          <div class=\"info-value\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 249, $this->source); })()), "dateOfCreation", [], "any", false, false, false, 249), "d M Y"), "html", null, true);
        yield "</div>
        </div>

        <div class=\"info-item\" style=\"grid-column: 1 / -1;\">
          <span class=\"info-label\">Lien Social</span>
          <div class=\"info-value\" style=\"display:flex; gap:10px; flex-wrap:wrap; align-items:center;\">
            ";
        // line 255
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 255, $this->source); })()), "socialsLink", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 256
            yield "              <a class=\"btn btn-secondary\" style=\"padding:6px 10px;\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 256, $this->source); })()), "socialsLink", [], "any", false, false, false, 256), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\">
                <i class=\"fa-solid fa-link\"></i> Ouvrir
              </a>
              <span class=\"muted\" style=\"font-size:12px;\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 259, $this->source); })()), "socialsLink", [], "any", false, false, false, 259), "html", null, true);
            yield "</span>
            ";
        } else {
            // line 261
            yield "              <span class=\"muted\">—</span>
            ";
        }
        // line 263
        yield "          </div>
        </div>
      </div>

      <div class=\"hr\"></div>

      <div class=\"actions-row\">
        <form method=\"post\"
              action=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271)]), "html", null, true);
        yield "\"
              style=\"display:inline\"
              onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet agent ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_agent_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274))), "html", null, true);
        yield "\">
          <button class=\"btn btn-danger\" type=\"submit\">
            <i class=\"fa-solid fa-trash\"></i> Supprimer
          </button>
        </form>
      </div>
    </section>

    ";
        // line 283
        yield "    <section class=\"card\" id=\"qa-section\">
      <h2 style=\"margin:0 0 10px;\">
        <i class=\"fa-solid fa-clipboard-question\" style=\"color:var(--text-muted); margin-right:8px;\"></i>
        Questionnaire
      </h2>

      ";
        // line 289
        if ((($tmp = (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 289, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "        <div class=\"qa-container\">
          <div class=\"qa-item\">
            <span class=\"qa-question\">";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 292, $this->source); })()), "questionnaire", [], "any", false, false, false, 292), "ques1", [], "any", false, false, false, 292), "html", null, true);
            yield "</span>
            <span class=\"qa-answer\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 293, $this->source); })()), "rep1", [], "any", false, false, false, 293), "html", null, true);
            yield "</span>
          </div>

          <div class=\"qa-item\">
            <span class=\"qa-question\">";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 297, $this->source); })()), "questionnaire", [], "any", false, false, false, 297), "ques2", [], "any", false, false, false, 297), "html", null, true);
            yield "</span>
            <span class=\"qa-answer\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 298, $this->source); })()), "rep2", [], "any", false, false, false, 298), "html", null, true);
            yield "</span>
          </div>

          ";
            // line 301
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 301, $this->source); })()), "questionnaire", [], "any", false, false, false, 301), "ques3", [], "any", false, false, false, 301) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 301, $this->source); })()), "rep3", [], "any", false, false, false, 301))) {
                // line 302
                yield "            <div class=\"qa-item\">
              <span class=\"qa-question\">";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 303, $this->source); })()), "questionnaire", [], "any", false, false, false, 303), "ques3", [], "any", false, false, false, 303), "html", null, true);
                yield "</span>
              <span class=\"qa-answer\">";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 304, $this->source); })()), "rep3", [], "any", false, false, false, 304), "html", null, true);
                yield "</span>
            </div>
          ";
            }
            // line 307
            yield "
          ";
            // line 308
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 308, $this->source); })()), "questionnaire", [], "any", false, false, false, 308), "ques4", [], "any", false, false, false, 308) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 308, $this->source); })()), "rep4", [], "any", false, false, false, 308))) {
                // line 309
                yield "            <div class=\"qa-item\">
              <span class=\"qa-question\">";
                // line 310
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 310, $this->source); })()), "questionnaire", [], "any", false, false, false, 310), "ques4", [], "any", false, false, false, 310), "html", null, true);
                yield "</span>
              <span class=\"qa-answer\">";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 311, $this->source); })()), "rep4", [], "any", false, false, false, 311), "html", null, true);
                yield "</span>
            </div>
          ";
            }
            // line 314
            yield "        </div>

        <div class=\"hr\"></div>

        <div class=\"row\" style=\"justify-content:flex-end;\">
          ";
            // line 320
            yield "          <a class=\"btn btn-secondary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_questionnaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 320, $this->source); })()), "id", [], "any", false, false, false, 320)]), "html", null, true);
            yield "\">
            <i class=\"fa-solid fa-pen-to-square\"></i> Modifier les réponses
          </a>
        </div>
      ";
        } else {
            // line 325
            yield "        <div class=\"alert-soft\">
          <i class=\"fa-solid fa-circle-info\"></i>
          <div>
            <div style=\"font-weight:800; margin-bottom:4px;\">Pas encore de réponses</div>
            <div class=\"muted\" style=\"font-size:13px;\">Cet agent n'a pas encore rempli le questionnaire.</div>
          </div>
        </div>

        <div class=\"hr\"></div>

        <div class=\"row\" style=\"justify-content:flex-end;\">
          ";
            // line 337
            yield "          <a class=\"btn btn-danger\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_questionnaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 337, $this->source); })()), "id", [], "any", false, false, false, 337)]), "html", null, true);
            yield "\">
            <i class=\"fa-solid fa-pen-to-square\"></i> Remplir le Questionnaire
          </a>
        </div>
      ";
        }
        // line 342
        yield "    </section>

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
        return "front/show.html.twig";
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
        return array (  562 => 342,  553 => 337,  540 => 325,  531 => 320,  524 => 314,  518 => 311,  514 => 310,  511 => 309,  509 => 308,  506 => 307,  500 => 304,  496 => 303,  493 => 302,  491 => 301,  485 => 298,  481 => 297,  474 => 293,  470 => 292,  466 => 290,  464 => 289,  456 => 283,  445 => 274,  439 => 271,  429 => 263,  425 => 261,  420 => 259,  413 => 256,  411 => 255,  402 => 249,  394 => 244,  386 => 239,  378 => 234,  370 => 229,  359 => 220,  347 => 210,  341 => 207,  332 => 201,  327 => 199,  323 => 198,  319 => 197,  314 => 195,  309 => 192,  305 => 189,  292 => 188,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Agent — {{ agent.pseudo }}{% endblock %}

{% block inline_styles %}
<style>
  .page-wrap { max-width: 1200px; margin: 0 auto; }

  /* HERO matches your index style (glass + subtle borders) */
  .page-hero {
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }

  .hero-title {
    margin: 0 0 6px;
    font-size: 30px;
    font-weight: 800;
    color: var(--text-light);
  }
  .hero-sub {
    margin: 0;
    color: var(--text-muted);
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    align-items:center;
  }

  .content-grid {
    margin-top: 16px;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 14px;
  }
  @media (max-width: 992px) {
    .content-grid { grid-template-columns: 1fr; }
  }

  /* CARD matches your index style */
  .card{
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }

  .hr{ height:1px; background: var(--border-light); margin: 16px 0; }
  .muted{ color: var(--text-muted); }
  .row{ display:flex; align-items:center; gap:10px; flex-wrap:wrap; }
  a.btn{ text-decoration:none; }

  /* Pills like your index */
  .pill{
    display:inline-flex;
    align-items:center;
    padding: 6px 12px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 600;
    gap: 8px;
  }

  /* Status like your index (text colored) */
  .status{
    display:inline-flex;
    align-items:center;
    padding: 6px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 800;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    gap: 8px;
  }
  .status.active{ color: var(--green); }
  .status.inactive{ color: var(--yellow); }
  .status.banned{ color: var(--red); }

  /* Info tiles same family */
  .info-grid {
    display:grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px 14px;
  }
  @media (max-width: 768px) {
    .info-grid { grid-template-columns: 1fr; }
  }

  .info-item{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .info-item:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }
  .info-label{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: .6px;
    margin-bottom: 6px;
  }
  .info-value{
    font-size: 15px;
    font-weight: 700;
    color: var(--text-light);
  }

  /* Questionnaire tiles */
  .qa-container { display:grid; gap: 12px; }
  .qa-item{
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    border-radius: var(--radius);
    padding: 14px 16px;
    transition: var(--transition);
  }
  .qa-item:hover{
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }
  .qa-question{
    display:block;
    font-size: 12px;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 6px;
  }
  .qa-answer{
    font-size: 15px;
    font-weight: 700;
    color: var(--text-light);
    line-height: 1.35;
  }

  /* Alert matches your dark palette (no blue) */
  .alert-soft {
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--border-light);
    color: var(--text-light);
    padding: 14px 16px;
    border-radius: var(--radius);
    display:flex;
    gap:10px;
    align-items:flex-start;
  }
  .alert-soft i { color: var(--text-muted); margin-top: 2px; }

  /* Buttons: keep same danger colors as your index */
  .btn-danger{
    background: rgba(255,45,45,0.12);
    border: 1px solid rgba(255,45,45,0.35);
    color: #ff6b6b;
  }
  .btn-danger:hover{
    background: rgba(255,45,45,0.18);
    transform: translateY(-2px);
  }

  .actions-row {
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    justify-content:flex-end;
    margin-top: 12px;
  }
</style>
{% endblock %}

{% block body %}
<div class=\"page-wrap\">

  {# ===== HERO ===== #}
  <section class=\"page-hero\">
    <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
      <div>
        <h1 class=\"hero-title\">{{ agent.pseudo }}</h1>
        <p class=\"hero-sub\">
          <span class=\"pill\"><i class=\"fa-solid fa-gamepad\"></i> {{ agent.game }}</span>
          <span class=\"pill\"><i class=\"fa-solid fa-ranking-star\"></i> Rang : {{ agent.rank }}</span>
          <span class=\"status {{ agent.status }}\">
            <i class=\"fa-solid fa-circle\" style=\"font-size:8px;\"></i>
            {{ agent.status|capitalize }}
          </span>
        </p>
      </div>

      <div class=\"row\" style=\"justify-content:flex-end;\">
        <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_index') }}\">
          <i class=\"fa-solid fa-arrow-left\"></i> Retour
        </a>
        <a class=\"btn btn-primary\" href=\"{{ path('front_agent_edit', { id: agent.id }) }}\">
          <i class=\"fa-solid fa-pen\"></i> Modifier l'Agent
        </a>
      </div>
    </div>
  </section>

  <div class=\"content-grid\">

    {# ===== LEFT: Agent Info ===== #}
    <section class=\"card\">
      <h2 style=\"margin:0 0 10px;\">
        <i class=\"fa-solid fa-id-card\" style=\"color:var(--text-muted); margin-right:8px;\"></i>
        Détails de l'Agent
      </h2>

      <div class=\"info-grid\">
        <div class=\"info-item\">
          <span class=\"info-label\">Pseudo</span>
          <div class=\"info-value\">{{ agent.pseudo }}</div>
        </div>

        <div class=\"info-item\">
          <span class=\"info-label\">Jeu</span>
          <div class=\"info-value\">{{ agent.game }}</div>
        </div>

        <div class=\"info-item\">
          <span class=\"info-label\">Rang</span>
          <div class=\"info-value\">{{ agent.rank }}</div>
        </div>

        <div class=\"info-item\">
          <span class=\"info-label\">Statut</span>
          <div class=\"info-value\">{{ agent.status|capitalize }}</div>
        </div>

        <div class=\"info-item\" style=\"grid-column: 1 / -1;\">
          <span class=\"info-label\">Créé le</span>
          <div class=\"info-value\">{{ agent.dateOfCreation|date('d M Y') }}</div>
        </div>

        <div class=\"info-item\" style=\"grid-column: 1 / -1;\">
          <span class=\"info-label\">Lien Social</span>
          <div class=\"info-value\" style=\"display:flex; gap:10px; flex-wrap:wrap; align-items:center;\">
            {% if agent.socialsLink %}
              <a class=\"btn btn-secondary\" style=\"padding:6px 10px;\" href=\"{{ agent.socialsLink }}\" target=\"_blank\" rel=\"noreferrer\">
                <i class=\"fa-solid fa-link\"></i> Ouvrir
              </a>
              <span class=\"muted\" style=\"font-size:12px;\">{{ agent.socialsLink }}</span>
            {% else %}
              <span class=\"muted\">—</span>
            {% endif %}
          </div>
        </div>
      </div>

      <div class=\"hr\"></div>

      <div class=\"actions-row\">
        <form method=\"post\"
              action=\"{{ path('front_agent_delete', { id: agent.id }) }}\"
              style=\"display:inline\"
              onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet agent ?');\">
          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_agent_' ~ agent.id) }}\">
          <button class=\"btn btn-danger\" type=\"submit\">
            <i class=\"fa-solid fa-trash\"></i> Supprimer
          </button>
        </form>
      </div>
    </section>

    {# ===== RIGHT: Questionnaire ===== #}
    <section class=\"card\" id=\"qa-section\">
      <h2 style=\"margin:0 0 10px;\">
        <i class=\"fa-solid fa-clipboard-question\" style=\"color:var(--text-muted); margin-right:8px;\"></i>
        Questionnaire
      </h2>

      {% if reponse %}
        <div class=\"qa-container\">
          <div class=\"qa-item\">
            <span class=\"qa-question\">{{ reponse.questionnaire.ques1 }}</span>
            <span class=\"qa-answer\">{{ reponse.rep1 }}</span>
          </div>

          <div class=\"qa-item\">
            <span class=\"qa-question\">{{ reponse.questionnaire.ques2 }}</span>
            <span class=\"qa-answer\">{{ reponse.rep2 }}</span>
          </div>

          {% if reponse.questionnaire.ques3 and reponse.rep3 %}
            <div class=\"qa-item\">
              <span class=\"qa-question\">{{ reponse.questionnaire.ques3 }}</span>
              <span class=\"qa-answer\">{{ reponse.rep3 }}</span>
            </div>
          {% endif %}

          {% if reponse.questionnaire.ques4 and reponse.rep4 %}
            <div class=\"qa-item\">
              <span class=\"qa-question\">{{ reponse.questionnaire.ques4 }}</span>
              <span class=\"qa-answer\">{{ reponse.rep4 }}</span>
            </div>
          {% endif %}
        </div>

        <div class=\"hr\"></div>

        <div class=\"row\" style=\"justify-content:flex-end;\">
          {# ✅ FIX: Link to EDIT route #}
          <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_questionnaire_edit', { id: agent.id }) }}\">
            <i class=\"fa-solid fa-pen-to-square\"></i> Modifier les réponses
          </a>
        </div>
      {% else %}
        <div class=\"alert-soft\">
          <i class=\"fa-solid fa-circle-info\"></i>
          <div>
            <div style=\"font-weight:800; margin-bottom:4px;\">Pas encore de réponses</div>
            <div class=\"muted\" style=\"font-size:13px;\">Cet agent n'a pas encore rempli le questionnaire.</div>
          </div>
        </div>

        <div class=\"hr\"></div>

        <div class=\"row\" style=\"justify-content:flex-end;\">
          {# ✅ FIX: Link to EDIT route #}
          <a class=\"btn btn-danger\" href=\"{{ path('front_agent_questionnaire_edit', { id: agent.id }) }}\">
            <i class=\"fa-solid fa-pen-to-square\"></i> Remplir le Questionnaire
          </a>
        </div>
      {% endif %}
    </section>

  </div>
</div>
{% endblock %}", "front/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\show.html.twig");
    }
}
