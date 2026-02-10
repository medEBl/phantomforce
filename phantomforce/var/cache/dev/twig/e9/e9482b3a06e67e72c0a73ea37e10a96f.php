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

/* user/_form.html.twig */
class __TwigTemplate_e100f3122872064970a6d376502e3c3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "user-form"]]);
        yield "
    <div style=\"display: grid; gap: 20px; margin-top: 20px;\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 4
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4) != "_token")) {
                // line 5
                yield "                <div class=\"form-field\">
                    <div style=\"color: var(--text-light); font-size: 14px; margin-bottom: 8px; font-weight: 500;\">
                        ";
                // line 7
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
                yield "
                    </div>
                    <div style=\"position: relative;\">
                        ";
                // line 10
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-input", "style" => "width: 100%; padding: 12px 16px; background: rgba(255,255,255,0.05); border: 1px solid var(--border-light); border-radius: 8px; color: var(--text-light); font-size: 14px; transition: var(--transition);"]]);
                // line 13
                yield "
                        ";
                // line 14
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14)) > 0)) {
                    // line 15
                    yield "                            <div style=\"color: var(--red); font-size: 12px; margin-top: 5px;\">
                                ";
                    // line 16
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
                    yield "
                            </div>
                        ";
                }
                // line 19
                yield "                    </div>
                </div>
            ";
            }
            // line 22
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </div>
    
    <div style=\"margin-top: 30px; display: flex; justify-content: center;\">
        <button type=\"submit\" class=\"btn btn-primary\" style=\"min-width: 200px;\">
            <i class=\"fas fa-save\"></i> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 27, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
        </button>
    </div>
";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        yield "

<style>
.form-input:focus {
    outline: none;
    border-color: var(--red) !important;
    box-shadow: 0 0 0 2px rgba(255,45,45,0.2) !important;
}

.form-input::placeholder {
    color: var(--text-muted);
}
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/_form.html.twig";
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
        return array (  109 => 30,  103 => 27,  97 => 23,  91 => 22,  86 => 19,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  70 => 10,  64 => 7,  60 => 5,  57 => 4,  53 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'user-form'}}) }}
    <div style=\"display: grid; gap: 20px; margin-top: 20px;\">
        {% for field in form %}
            {% if field.vars.name != '_token' %}
                <div class=\"form-field\">
                    <div style=\"color: var(--text-light); font-size: 14px; margin-bottom: 8px; font-weight: 500;\">
                        {{ form_label(field) }}
                    </div>
                    <div style=\"position: relative;\">
                        {{ form_widget(field, {'attr': {
                            'class': 'form-input',
                            'style': 'width: 100%; padding: 12px 16px; background: rgba(255,255,255,0.05); border: 1px solid var(--border-light); border-radius: 8px; color: var(--text-light); font-size: 14px; transition: var(--transition);'
                        }}) }}
                        {% if field.vars.errors|length > 0 %}
                            <div style=\"color: var(--red); font-size: 12px; margin-top: 5px;\">
                                {{ form_errors(field) }}
                            </div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    </div>
    
    <div style=\"margin-top: 30px; display: flex; justify-content: center;\">
        <button type=\"submit\" class=\"btn btn-primary\" style=\"min-width: 200px;\">
            <i class=\"fas fa-save\"></i> {{ button_label|default('Save') }}
        </button>
    </div>
{{ form_end(form) }}

<style>
.form-input:focus {
    outline: none;
    border-color: var(--red) !important;
    box-shadow: 0 0 0 2px rgba(255,45,45,0.2) !important;
}

.form-input::placeholder {
    color: var(--text-muted);
}
</style>", "user/_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\user\\_form.html.twig");
    }
}
