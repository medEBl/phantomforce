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

/* back/matchy/new.html.twig */
class __TwigTemplate_31eddfd8a6b4541f6b4a56be7ff522f3 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_back.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "🎮 Admin - Nouveau match";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Créer un nouveau match</h1>
            <p class=\"mb-0 text-muted\">Ajoutez un match à l'arène e-sport</p>
        </div>
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour
        </a>
    </div>
</div>

<div class=\"admin-card\">
    ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
    
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "game", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "game", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "match_date", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "match_date", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team1", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team1", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team2", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "team2", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team1", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team1", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0"]]);
        yield "
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team2", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team2", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0"]]);
        yield "
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "winner_team", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "winner_team", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer le match
        </button>
        
        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 74
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/matchy/new.html.twig";
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
        return array (  196 => 74,  188 => 69,  176 => 60,  172 => 59,  165 => 55,  161 => 54,  154 => 50,  150 => 49,  143 => 45,  139 => 44,  132 => 40,  128 => 39,  121 => 35,  117 => 34,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  88 => 20,  78 => 13,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/matchy/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\matchy\\new.html.twig");
    }
}
