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

/* front/index.html.twig */
class __TwigTemplate_b511cdb0d768e87bdd10eadc64f1c9fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

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

        yield "Mes Agents";
        
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
  .card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }
  .muted { color: var(--text-muted); }
  .small { font-size: 13px; }
  .hr { height:1px; background: var(--border-light); margin: 16px 0; }

  .list { display:flex; flex-direction:column; gap:14px; margin-top: 14px; }
  .row { display:flex; align-items:center; gap:10px; flex-wrap:wrap; }

  .agent {
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 16px;
    padding: 16px;
    border-radius: var(--radius);
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.03);
    transition: var(--transition);
  }
  .agent:hover {
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }

  /* Standard Pill */
  .pill {
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 600;
  }

  /* Status Dot (Online/Offline) */
  .status {
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 800;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
  }
  .status.active { color: var(--green); }
  .status.inactive { color: var(--yellow); }
  .status.banned { color: var(--red); }

  /* ✅ PRETTY BADGE: \"Questionnaire Validé\" (Appears on Left) */
  .badge-complete {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 4px 10px;
    border-radius: 999px;
    background: rgba(45, 255, 100, 0.1);
    border: 1px solid rgba(45, 255, 100, 0.25);
    color: #5eff8b;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: default;
  }

  /* Action Button (Red) - Only appears if NOT done */
  .btn-danger {
    background: rgba(255,45,45,0.12);
    border: 1px solid rgba(255,45,45,0.35);
    color: #ff6b6b;
  }
  .btn-danger:hover {
    background: rgba(255,45,45,0.18);
    transform: translateY(-2px);
  }

  a.btn { text-decoration:none; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Mes Profils d'Agent</h2>
      <p class=\"muted\" style=\"margin:0;\">Un agent par jeu.</p>
    </div>
    ";
        // line 107
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")))) {
            // line 108
            yield "    <a class=\"btn btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_new");
            yield "\">
      <i class=\"fa-solid fa-plus\"></i> Créer un Agent
    </a>
    ";
        }
        // line 112
        yield "  </div>

  <div class=\"hr\"></div>

  ";
        // line 117
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "flashes", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 118
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 119
                yield "      <div class=\"card\" style=\"margin-bottom:12px; padding:14px; border-color:var(--border-light); background: rgba(255,255,255,0.03);\">
        <span class=\"muted\">";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "
  ";
        // line 125
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 125, $this->source); })()))) {
            // line 126
            yield "    <div class=\"card\" style=\"text-align:center; padding:18px; background: rgba(255,255,255,0.03); border-color: var(--border-light);\">
      <p class=\"muted\" style=\"margin:0;\">Aucun agent pour le moment.</p>
    </div>
  ";
        } else {
            // line 130
            yield "    <div class=\"list\">
      ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 131, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 132
                yield "        <div class=\"agent\">
          
          ";
                // line 135
                yield "          <div>
            <div class=\"row\" style=\"gap:8px; margin-bottom:6px;\">
              <strong style=\"font-size:16px;\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "pseudo", [], "any", false, false, false, 137), "html", null, true);
                yield "</strong>
              
              ";
                // line 140
                yield "              <span class=\"status ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "status", [], "any", false, false, false, 140), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "status", [], "any", false, false, false, 140)), "html", null, true);
                yield "</span>
              
              ";
                // line 143
                yield "              <span class=\"pill\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "game", [], "any", false, false, false, 143), "html", null, true);
                yield "</span>
              <span class=\"pill\">";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "rank", [], "any", false, false, false, 144), "html", null, true);
                yield "</span>

              ";
                // line 147
                yield "              ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 147), (isset($context["answeredIds"]) || array_key_exists("answeredIds", $context) ? $context["answeredIds"] : (function () { throw new RuntimeError('Variable "answeredIds" does not exist.', 147, $this->source); })()))) {
                    // line 148
                    yield "                <span class=\"badge-complete\" title=\"Vous avez répondu au questionnaire\">
                    <i class=\"fa-solid fa-check\"></i> Questionnaire Validé
                </span>
              ";
                }
                // line 152
                yield "            </div>

            <div class=\"small muted\">
              ";
                // line 155
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "socialsLink", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 156
                    yield "                Lien :
                <a class=\"btn btn-secondary\" style=\"padding:4px 8px; font-size:11px;\"
                   href=\"";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "socialsLink", [], "any", false, false, false, 158), "html", null, true);
                    yield "\" target=\"_blank\" rel=\"noreferrer\">
                  Ouvrir
                </a>
              ";
                } else {
                    // line 162
                    yield "                Social : <span class=\"muted\">—</span>
              ";
                }
                // line 164
                yield "            </div>
          </div>

          ";
                // line 168
                yield "          <div class=\"row\" style=\"justify-content:flex-end;\">
            
            <a class=\"btn btn-secondary\" href=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 170)]), "html", null, true);
                yield "\">
              <i class=\"fa-solid fa-eye\"></i> Voir
            </a>

            ";
                // line 175
                yield "            ";
                // line 176
                yield "            ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")))) {
                    // line 177
                    yield "            ";
                    if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 177), (isset($context["answeredIds"]) || array_key_exists("answeredIds", $context) ? $context["answeredIds"] : (function () { throw new RuntimeError('Variable "answeredIds" does not exist.', 177, $this->source); })()))) {
                        // line 178
                        yield "                <a class=\"btn btn-danger\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_questionnaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                        yield "\">
                    <i class=\"fa-solid fa-pen-to-square\"></i> Remplir
                </a>
            ";
                    }
                    // line 182
                    yield "            ";
                }
                // line 183
                yield "            ";
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")))) {
                    // line 184
                    yield "            <a class=\"btn btn-secondary\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                    yield "\">
              <i class=\"fa-solid fa-pen\"></i> Modifier
            </a>
            ";
                }
                // line 188
                yield "
            <form method=\"post\"
                  action=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_agent_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 190)]), "html", null, true);
                yield "\"
                  style=\"display:inline\"
                  onsubmit=\"return confirm('Supprimer cet agent ?');\">

              <input type=\"hidden\" name=\"_token\" value=\"";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_agent_" . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 194))), "html", null, true);
                yield "\">
              ";
                // line 195
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PLAYER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COACH")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")))) {
                    // line 196
                    yield "              <button class=\"btn btn-danger\" type=\"submit\" title=\"Supprimer\">
                <i class=\"fa-solid fa-trash\"></i>
              </button>
              ";
                }
                // line 200
                yield "            </form>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "    </div>
  ";
        }
        // line 206
        yield "</section>
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
        return "front/index.html.twig";
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
        return array (  430 => 206,  426 => 204,  417 => 200,  411 => 196,  409 => 195,  405 => 194,  398 => 190,  394 => 188,  386 => 184,  383 => 183,  380 => 182,  372 => 178,  369 => 177,  366 => 176,  364 => 175,  357 => 170,  353 => 168,  348 => 164,  344 => 162,  337 => 158,  333 => 156,  331 => 155,  326 => 152,  320 => 148,  317 => 147,  312 => 144,  307 => 143,  299 => 140,  294 => 137,  290 => 135,  286 => 132,  282 => 131,  279 => 130,  273 => 126,  271 => 125,  268 => 124,  262 => 123,  253 => 120,  250 => 119,  245 => 118,  240 => 117,  234 => 112,  226 => 108,  224 => 107,  216 => 101,  203 => 100,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front/agent/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Mes Agents{% endblock %}

{% block inline_styles %}
<style>
  .card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 22px;
    box-shadow: var(--shadow);
  }
  .muted { color: var(--text-muted); }
  .small { font-size: 13px; }
  .hr { height:1px; background: var(--border-light); margin: 16px 0; }

  .list { display:flex; flex-direction:column; gap:14px; margin-top: 14px; }
  .row { display:flex; align-items:center; gap:10px; flex-wrap:wrap; }

  .agent {
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 16px;
    padding: 16px;
    border-radius: var(--radius);
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.03);
    transition: var(--transition);
  }
  .agent:hover {
    transform: translateY(-2px);
    border-color: var(--border);
    box-shadow: var(--shadow);
  }

  /* Standard Pill */
  .pill {
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
    font-size: 12px;
    font-weight: 600;
  }

  /* Status Dot (Online/Offline) */
  .status {
    display:inline-flex;
    align-items:center;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 800;
    border: 1px solid var(--border-light);
    background: rgba(255,255,255,0.04);
    color: var(--text-light);
  }
  .status.active { color: var(--green); }
  .status.inactive { color: var(--yellow); }
  .status.banned { color: var(--red); }

  /* ✅ PRETTY BADGE: \"Questionnaire Validé\" (Appears on Left) */
  .badge-complete {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 4px 10px;
    border-radius: 999px;
    background: rgba(45, 255, 100, 0.1);
    border: 1px solid rgba(45, 255, 100, 0.25);
    color: #5eff8b;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: default;
  }

  /* Action Button (Red) - Only appears if NOT done */
  .btn-danger {
    background: rgba(255,45,45,0.12);
    border: 1px solid rgba(255,45,45,0.35);
    color: #ff6b6b;
  }
  .btn-danger:hover {
    background: rgba(255,45,45,0.18);
    transform: translateY(-2px);
  }

  a.btn { text-decoration:none; }
</style>
{% endblock %}

{% block body %}
<section class=\"card\">
  <div style=\"display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;\">
    <div>
      <h2 style=\"margin:0 0 6px;\">Mes Profils d'Agent</h2>
      <p class=\"muted\" style=\"margin:0;\">Un agent par jeu.</p>
    </div>
    {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_PLAYER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER')) %}
    <a class=\"btn btn-primary\" href=\"{{ path('front_agent_new') }}\">
      <i class=\"fa-solid fa-plus\"></i> Créer un Agent
    </a>
    {% endif %}
  </div>

  <div class=\"hr\"></div>

  {# Flash messages #}
  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"card\" style=\"margin-bottom:12px; padding:14px; border-color:var(--border-light); background: rgba(255,255,255,0.03);\">
        <span class=\"muted\">{{ message }}</span>
      </div>
    {% endfor %}
  {% endfor %}

  {% if agents is empty %}
    <div class=\"card\" style=\"text-align:center; padding:18px; background: rgba(255,255,255,0.03); border-color: var(--border-light);\">
      <p class=\"muted\" style=\"margin:0;\">Aucun agent pour le moment.</p>
    </div>
  {% else %}
    <div class=\"list\">
      {% for agent in agents %}
        <div class=\"agent\">
          
          {# ========== LEFT SIDE: INFO & STATUS ========== #}
          <div>
            <div class=\"row\" style=\"gap:8px; margin-bottom:6px;\">
              <strong style=\"font-size:16px;\">{{ agent.pseudo }}</strong>
              
              {# Status: Online/Offline #}
              <span class=\"status {{ agent.status }}\">{{ agent.status|capitalize }}</span>
              
              {# Game & Rank #}
              <span class=\"pill\">{{ agent.game }}</span>
              <span class=\"pill\">{{ agent.rank }}</span>

              {# ✅ BADGE: If Completed, show French text #}
              {% if agent.id in answeredIds %}
                <span class=\"badge-complete\" title=\"Vous avez répondu au questionnaire\">
                    <i class=\"fa-solid fa-check\"></i> Questionnaire Validé
                </span>
              {% endif %}
            </div>

            <div class=\"small muted\">
              {% if agent.socialsLink %}
                Lien :
                <a class=\"btn btn-secondary\" style=\"padding:4px 8px; font-size:11px;\"
                   href=\"{{ agent.socialsLink }}\" target=\"_blank\" rel=\"noreferrer\">
                  Ouvrir
                </a>
              {% else %}
                Social : <span class=\"muted\">—</span>
              {% endif %}
            </div>
          </div>

          {# ========== RIGHT SIDE: ACTION BUTTONS ========== #}
          <div class=\"row\" style=\"justify-content:flex-end;\">
            
            <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_show', { id: agent.id }) }}\">
              <i class=\"fa-solid fa-eye\"></i> Voir
            </a>

            {# ✅ LOGIC: If NOT answered, show \"Remplir\" button here. #}
            {# If answered, show nothing (because badge is on the left) #}
            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_PLAYER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER')) %}
            {% if agent.id not in answeredIds %}
                <a class=\"btn btn-danger\" href=\"{{ path('front_agent_questionnaire_edit', { id: agent.id }) }}\">
                    <i class=\"fa-solid fa-pen-to-square\"></i> Remplir
                </a>
            {% endif %}
            {% endif %}
            {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_PLAYER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER')) %}
            <a class=\"btn btn-secondary\" href=\"{{ path('front_agent_edit', { id: agent.id }) }}\">
              <i class=\"fa-solid fa-pen\"></i> Modifier
            </a>
            {% endif %}

            <form method=\"post\"
                  action=\"{{ path('front_agent_delete', { id: agent.id }) }}\"
                  style=\"display:inline\"
                  onsubmit=\"return confirm('Supprimer cet agent ?');\">

              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_agent_' ~ agent.id) }}\">
              {% if is_granted('ROLE_ADMIN') or (is_granted('ROLE_PLAYER') and not is_granted('ROLE_COACH') and not is_granted('ROLE_ORGANIZER')) %}
              <button class=\"btn btn-danger\" type=\"submit\" title=\"Supprimer\">
                <i class=\"fa-solid fa-trash\"></i>
              </button>
              {% endif %}
            </form>
          </div>
        </div>
      {% endfor %}
    </div>
  {% endif %}
</section>
{% endblock %}", "front/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\index.html.twig");
    }
}
