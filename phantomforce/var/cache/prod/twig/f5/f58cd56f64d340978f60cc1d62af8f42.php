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

/* back/matchy/edit.html.twig */
class __TwigTemplate_8cd8df914d0edbdfdf2e64fbd961811d extends Template
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
        yield "🎮 Admin - Modifier le match #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
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
            <h1 class=\"h3 mb-2\">Modifier le match #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
            <p class=\"mb-0 text-muted\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "game", [], "any", false, false, false, 11), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 11), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "Équipe 1")) : ("Équipe 1")), "html", null, true);
        yield " vs ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 11), "name", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "Équipe 2")) : ("Équipe 2")), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team1", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        
        <div class=\"col-md-3 mb-3\">
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team2", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "score_team2", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
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
            <i class=\"fas fa-save\"></i> Enregistrer les modifications
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

<!-- Section de suppression -->
<div class=\"admin-card mt-3\" style=\"border-color: var(--admin-danger); background: rgba(255, 0, 60, 0.05);\">
    <h5 class=\"mb-3\"><i class=\"fas fa-exclamation-triangle me-2\"></i>Zone de suppression</h5>
    <p class=\"text-muted mb-3\">
        Cette action supprimera définitivement le match et toutes ses données associées.
    </p>
    
    <form method=\"post\" action=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 84)]), "html", null, true);
        yield "\" 
          onsubmit=\"return confirm('Êtes-vous ABSOLUMENT SÛR de vouloir supprimer ce match ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 86))), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn-admin btn-admin-danger\">
            <i class=\"fas fa-trash\"></i> Supprimer définitivement ce match
        </button>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/matchy/edit.html.twig";
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
        return array (  225 => 86,  220 => 84,  207 => 74,  199 => 69,  187 => 60,  183 => 59,  176 => 55,  172 => 54,  165 => 50,  161 => 49,  154 => 45,  150 => 44,  143 => 40,  139 => 39,  132 => 35,  128 => 34,  121 => 30,  117 => 29,  110 => 25,  106 => 24,  99 => 20,  89 => 13,  80 => 11,  76 => 10,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/matchy/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\matchy\\edit.html.twig");
    }
}
