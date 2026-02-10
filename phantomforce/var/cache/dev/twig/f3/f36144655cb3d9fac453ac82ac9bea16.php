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

/* questionnaire_agent/_form.html.twig */
class __TwigTemplate_b287db7e40543b17d0365a83dec70f34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questionnaire_agent/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        yield "
    <div style=\"display: grid; gap: 15px;\">
        
        ";
        // line 6
        yield "        <div>
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "game", [], "any", false, false, false, 7), 'label', ["label_attr" => ["style" => "color:white; display:block; margin-bottom:5px;"], "label" => "Jeu"]);
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "game", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control", "style" => "background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;"]]);
        yield "
            ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "game", [], "any", false, false, false, 9), 'errors');
        yield "
        </div>

        ";
        // line 13
        yield "        <div>
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "ques1", [], "any", false, false, false, 14), 'label', ["label_attr" => ["style" => "color:white; display:block; margin-bottom:5px;"], "label" => "Question 1"]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "ques1", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "style" => "background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;"]]);
        yield "
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "ques1", [], "any", false, false, false, 16), 'errors');
        yield "
        </div>

        ";
        // line 20
        yield "        <div>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "ques2", [], "any", false, false, false, 21), 'label', ["label_attr" => ["style" => "color:white; display:block; margin-bottom:5px;"], "label" => "Question 2"]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "ques2", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "style" => "background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;"]]);
        yield "
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "ques2", [], "any", false, false, false, 23), 'errors');
        yield "
        </div>

        ";
        // line 27
        yield "        <div>
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "ques3", [], "any", false, false, false, 28), 'label', ["label_attr" => ["style" => "color:white; display:block; margin-bottom:5px;"], "label" => "Question 3"]);
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "ques3", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "style" => "background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;"]]);
        yield "
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "ques3", [], "any", false, false, false, 30), 'errors');
        yield "
        </div>

        ";
        // line 34
        yield "        <div>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "ques4", [], "any", false, false, false, 35), 'label', ["label_attr" => ["style" => "color:white; display:block; margin-bottom:5px;"], "label" => "Question 4"]);
        yield "
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "ques4", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "style" => "background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;"]]);
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "ques4", [], "any", false, false, false, 37), 'errors');
        yield "
        </div>

        ";
        // line 41
        yield "        <div style=\"margin-top: 20px;\">
            <button class=\"btn\" style=\"background: var(--admin-accent, #00f3ff); color: black; font-weight: bold; padding: 10px 20px; border-radius: 8px; border:none;\">
                ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
            </button>
        </div>

    </div>
";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "questionnaire_agent/_form.html.twig";
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
        return array (  151 => 48,  143 => 43,  139 => 41,  133 => 37,  129 => 36,  125 => 35,  122 => 34,  116 => 30,  112 => 29,  108 => 28,  105 => 27,  99 => 23,  95 => 22,  91 => 21,  88 => 20,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  65 => 9,  61 => 8,  57 => 7,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/questionnaire_agent/_form.html.twig #}
{{ form_start(form) }}
    <div style=\"display: grid; gap: 15px;\">
        
        {# Game Field #}
        <div>
            {{ form_label(form.game, 'Jeu', {'label_attr': {'style': 'color:white; display:block; margin-bottom:5px;'}}) }}
            {{ form_widget(form.game, {'attr': {'class': 'form-control', 'style': 'background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;'}}) }}
            {{ form_errors(form.game) }}
        </div>

        {# Question 1 #}
        <div>
            {{ form_label(form.ques1, 'Question 1', {'label_attr': {'style': 'color:white; display:block; margin-bottom:5px;'}}) }}
            {{ form_widget(form.ques1, {'attr': {'class': 'form-control', 'style': 'background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;'}}) }}
            {{ form_errors(form.ques1) }}
        </div>

        {# Question 2 #}
        <div>
            {{ form_label(form.ques2, 'Question 2', {'label_attr': {'style': 'color:white; display:block; margin-bottom:5px;'}}) }}
            {{ form_widget(form.ques2, {'attr': {'class': 'form-control', 'style': 'background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;'}}) }}
            {{ form_errors(form.ques2) }}
        </div>

        {# Question 3 #}
        <div>
            {{ form_label(form.ques3, 'Question 3', {'label_attr': {'style': 'color:white; display:block; margin-bottom:5px;'}}) }}
            {{ form_widget(form.ques3, {'attr': {'class': 'form-control', 'style': 'background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;'}}) }}
            {{ form_errors(form.ques3) }}
        </div>

        {# Question 4 #}
        <div>
            {{ form_label(form.ques4, 'Question 4', {'label_attr': {'style': 'color:white; display:block; margin-bottom:5px;'}}) }}
            {{ form_widget(form.ques4, {'attr': {'class': 'form-control', 'style': 'background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:white;'}}) }}
            {{ form_errors(form.ques4) }}
        </div>

        {# Save Button #}
        <div style=\"margin-top: 20px;\">
            <button class=\"btn\" style=\"background: var(--admin-accent, #00f3ff); color: black; font-weight: bold; padding: 10px 20px; border-radius: 8px; border:none;\">
                {{ button_label|default('Enregistrer') }}
            </button>
        </div>

    </div>
{{ form_end(form) }}", "questionnaire_agent/_form.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\questionnaire_agent\\_form.html.twig");
    }
}
