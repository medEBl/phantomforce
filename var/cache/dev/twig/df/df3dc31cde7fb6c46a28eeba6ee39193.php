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

/* back/team/new.html.twig */
class __TwigTemplate_76bc80cf72276ad2a652f98c91a50a63 extends Template
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
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/new.html.twig"));

        $this->parent = $this->load("base_back.html.twig", 1);
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

        yield "🎮 Admin - Nouvelle équipe";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Créer une nouvelle équipe</h1>
            <p class=\"mb-0 text-muted\">Ajoutez une équipe à l'arène e-sport</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour
        </a>
    </div>
</div>

<div class=\"admin-card\">
    ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
    
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: BLOOD WARRIORS", "maxlength" => 50]]);
        // line 28
        yield "
            <small class=\"text-muted\">Minimum 2 caractères, maximum 50</small>
            <div class=\"invalid-feedback\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "game", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "game", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: League of Legends, Valorant..."]]);
        // line 38
        yield "
            <small class=\"text-muted\">Jeu principal de l'équipe</small>
            <div class=\"invalid-feedback\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "game", [], "any", false, false, false, 40), 'errors');
        yield "</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "creation_date", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "creation_date", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "JJ/MM/AAAA"]]);
        // line 48
        yield "
            <small class=\"text-muted\">Date de création de l'équipe</small>
            <div class=\"invalid-feedback\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "creation_date", [], "any", false, false, false, 50), 'errors');
        yield "</div>
        </div>
        
        <!-- CHAMP COACH CORRIGÉ (remplace coach_id) -->
        <div class=\"col-md-6 mb-3\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "coach", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Coach de l'équipe"]);
        yield "
            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "coach", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-select", "placeholder" => "Sélectionnez un coach"]]);
        // line 59
        yield "
            <small class=\"text-muted\">Sélectionnez le coach (utilisateur avec rôle COACH)</small>
            <div class=\"invalid-feedback\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "coach", [], "any", false, false, false, 61), 'errors');
        yield "</div>
        </div>
        
        <!-- CHAMP MEMBRES (agents) -->
        <div class=\"col-12 mb-3\">
            <label class=\"form-label\">
                <i class=\"fas fa-users me-1\"></i> Membres de l'équipe
            </label>
            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "members", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-select", "size" => 8, "multiple" => "multiple"]]);
        // line 73
        yield "
            <small class=\"text-muted\">
                <i class=\"fas fa-info-circle\"></i> 
                Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>⌘</kbd> (Mac) pour sélectionner plusieurs membres
            </small>
            <div class=\"invalid-feedback\">";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "members", [], "any", false, false, false, 78), 'errors');
        yield "</div>
        </div>
    </div>
    
    <!-- Conseils et informations -->
    <div class=\"row mt-3\">
        <div class=\"col-12\">
            <div class=\"alert\" style=\"background: rgba(255, 102, 0, 0.1); border: 1px solid var(--blood-orange); border-radius: 8px;\">
                <h6 class=\"mb-2\" style=\"color: var(--fire-yellow);\">
                    <i class=\"fas fa-lightbulb me-1\"></i> Conseils :
                </h6>
                <ul class=\"mb-0 small\" style=\"color: var(--text-muted);\">
                    <li>Le coach doit être un utilisateur existant avec le rôle COACH</li>
                    <li>Vous pouvez sélectionner plusieurs agents comme membres de l'équipe</li>
                    <li>Les membres peuvent être ajoutés/modifiés ultérieurement</li>
                    <li>Le nom de l'équipe doit être unique</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer l'équipe
        </button>
        
        <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_end');
        yield "
</div>

<script>
// Validation du formulaire
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            // Récupérer les champs
            const nameInput = document.querySelector('[name*=\"name\"]');
            const gameInput = document.querySelector('[name*=\"game\"]');
            const coachSelect = document.querySelector('[name*=\"coach\"]');
            
            // Validation simple
            if (nameInput && nameInput.value.trim().length < 2) {
                e.preventDefault();
                alert('⚠️ Le nom de l\\'équipe doit contenir au moins 2 caractères');
                nameInput.focus();
                return false;
            }
            
            if (gameInput && gameInput.value.trim() === '') {
                e.preventDefault();
                alert('⚠️ Veuillez spécifier un jeu principal');
                gameInput.focus();
                return false;
            }
            
            // Animation du bouton de soumission
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Création en cours...';
                submitBtn.disabled = true;
            }
        });
    }
    
    // Animation des champs au focus
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = 'var(--blood-red)';
            this.style.boxShadow = '0 0 0 3px rgba(255, 0, 60, 0.2)';
        });
        
        input.addEventListener('blur', function() {
            this.style.borderColor = '';
            this.style.boxShadow = '';
        });
    });
    
    // Mettre en évidence les champs avec erreurs
    const errorElements = document.querySelectorAll('.invalid-feedback');
    errorElements.forEach(error => {
        if (error.textContent.trim() !== '') {
            const input = error.closest('.mb-3')?.querySelector('.form-control, .form-select');
            if (input) {
                input.classList.add('is-invalid');
            }
        }
    });
});
</script>

<style>
/* Style pour le champ multiple */
select[multiple] {
    min-height: 200px;
    padding: 0.5rem;
}

select[multiple] option {
    padding: 0.5rem 1rem;
    border-bottom: 1px solid rgba(255, 102, 0, 0.2);
}

select[multiple] option:hover {
    background: rgba(255, 102, 0, 0.3);
}

select[multiple] option:checked {
    background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
    color: white;
}

/* Style pour les champs invalides */
.is-invalid {
    border-color: var(--blood-red) !important;
    box-shadow: 0 0 0 3px rgba(255, 0, 60, 0.2) !important;
}

.invalid-feedback {
    display: block;
    color: var(--blood-red);
    font-size: 0.85rem;
    margin-top: 0.25rem;
}

/* Animation du bouton de soumission */
.btn-admin-primary i.fa-spinner {
    animation: spin 1s linear infinite;
}

@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Style pour les badges d'aide */
kbd {
    background: rgba(0, 0, 0, 0.8);
    color: var(--fire-yellow);
    border: 1px solid var(--blood-orange);
    padding: 0.1rem 0.3rem;
    border-radius: 4px;
    font-size: 0.85rem;
}
</style>
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
        return "back/team/new.html.twig";
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
        return array (  244 => 109,  236 => 104,  207 => 78,  200 => 73,  198 => 69,  187 => 61,  183 => 59,  181 => 56,  177 => 55,  169 => 50,  165 => 48,  163 => 45,  159 => 44,  152 => 40,  148 => 38,  146 => 35,  142 => 34,  135 => 30,  131 => 28,  129 => 24,  125 => 23,  118 => 19,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Nouvelle équipe{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Créer une nouvelle équipe</h1>
            <p class=\"mb-0 text-muted\">Ajoutez une équipe à l'arène e-sport</p>
        </div>
        <a href=\"{{ path('app_back_team_index') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour
        </a>
    </div>
</div>

<div class=\"admin-card\">
    {{ form_start(form, {'attr': {'class': 'form-admin'}}) }}
    
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.name, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.name, {'attr': {
                'class': 'form-control',
                'placeholder': 'Ex: BLOOD WARRIORS',
                'maxlength': 50
            }}) }}
            <small class=\"text-muted\">Minimum 2 caractères, maximum 50</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.name) }}</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.game, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.game, {'attr': {
                'class': 'form-control',
                'placeholder': 'Ex: League of Legends, Valorant...'
            }}) }}
            <small class=\"text-muted\">Jeu principal de l'équipe</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.game) }}</div>
        </div>
        
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.creation_date, null, {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.creation_date, {'attr': {
                'class': 'form-control',
                'placeholder': 'JJ/MM/AAAA'
            }}) }}
            <small class=\"text-muted\">Date de création de l'équipe</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.creation_date) }}</div>
        </div>
        
        <!-- CHAMP COACH CORRIGÉ (remplace coach_id) -->
        <div class=\"col-md-6 mb-3\">
            {{ form_label(form.coach, 'Coach de l\\'équipe', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.coach, {'attr': {
                'class': 'form-select',
                'placeholder': 'Sélectionnez un coach'
            }}) }}
            <small class=\"text-muted\">Sélectionnez le coach (utilisateur avec rôle COACH)</small>
            <div class=\"invalid-feedback\">{{ form_errors(form.coach) }}</div>
        </div>
        
        <!-- CHAMP MEMBRES (agents) -->
        <div class=\"col-12 mb-3\">
            <label class=\"form-label\">
                <i class=\"fas fa-users me-1\"></i> Membres de l'équipe
            </label>
            {{ form_widget(form.members, {'attr': {
                'class': 'form-select',
                'size': 8,
                'multiple': 'multiple'
            }}) }}
            <small class=\"text-muted\">
                <i class=\"fas fa-info-circle\"></i> 
                Maintenez <kbd>Ctrl</kbd> (Windows) ou <kbd>⌘</kbd> (Mac) pour sélectionner plusieurs membres
            </small>
            <div class=\"invalid-feedback\">{{ form_errors(form.members) }}</div>
        </div>
    </div>
    
    <!-- Conseils et informations -->
    <div class=\"row mt-3\">
        <div class=\"col-12\">
            <div class=\"alert\" style=\"background: rgba(255, 102, 0, 0.1); border: 1px solid var(--blood-orange); border-radius: 8px;\">
                <h6 class=\"mb-2\" style=\"color: var(--fire-yellow);\">
                    <i class=\"fas fa-lightbulb me-1\"></i> Conseils :
                </h6>
                <ul class=\"mb-0 small\" style=\"color: var(--text-muted);\">
                    <li>Le coach doit être un utilisateur existant avec le rôle COACH</li>
                    <li>Vous pouvez sélectionner plusieurs agents comme membres de l'équipe</li>
                    <li>Les membres peuvent être ajoutés/modifiés ultérieurement</li>
                    <li>Le nom de l'équipe doit être unique</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class=\"mt-4\">
        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-save\"></i> Créer l'équipe
        </button>
        
        <a href=\"{{ path('app_back_team_index') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-times\"></i> Annuler
        </a>
    </div>
    
    {{ form_end(form) }}
</div>

<script>
// Validation du formulaire
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            // Récupérer les champs
            const nameInput = document.querySelector('[name*=\"name\"]');
            const gameInput = document.querySelector('[name*=\"game\"]');
            const coachSelect = document.querySelector('[name*=\"coach\"]');
            
            // Validation simple
            if (nameInput && nameInput.value.trim().length < 2) {
                e.preventDefault();
                alert('⚠️ Le nom de l\\'équipe doit contenir au moins 2 caractères');
                nameInput.focus();
                return false;
            }
            
            if (gameInput && gameInput.value.trim() === '') {
                e.preventDefault();
                alert('⚠️ Veuillez spécifier un jeu principal');
                gameInput.focus();
                return false;
            }
            
            // Animation du bouton de soumission
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> Création en cours...';
                submitBtn.disabled = true;
            }
        });
    }
    
    // Animation des champs au focus
    const inputs = document.querySelectorAll('.form-control, .form-select');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = 'var(--blood-red)';
            this.style.boxShadow = '0 0 0 3px rgba(255, 0, 60, 0.2)';
        });
        
        input.addEventListener('blur', function() {
            this.style.borderColor = '';
            this.style.boxShadow = '';
        });
    });
    
    // Mettre en évidence les champs avec erreurs
    const errorElements = document.querySelectorAll('.invalid-feedback');
    errorElements.forEach(error => {
        if (error.textContent.trim() !== '') {
            const input = error.closest('.mb-3')?.querySelector('.form-control, .form-select');
            if (input) {
                input.classList.add('is-invalid');
            }
        }
    });
});
</script>

<style>
/* Style pour le champ multiple */
select[multiple] {
    min-height: 200px;
    padding: 0.5rem;
}

select[multiple] option {
    padding: 0.5rem 1rem;
    border-bottom: 1px solid rgba(255, 102, 0, 0.2);
}

select[multiple] option:hover {
    background: rgba(255, 102, 0, 0.3);
}

select[multiple] option:checked {
    background: linear-gradient(45deg, var(--blood-red), var(--blood-orange));
    color: white;
}

/* Style pour les champs invalides */
.is-invalid {
    border-color: var(--blood-red) !important;
    box-shadow: 0 0 0 3px rgba(255, 0, 60, 0.2) !important;
}

.invalid-feedback {
    display: block;
    color: var(--blood-red);
    font-size: 0.85rem;
    margin-top: 0.25rem;
}

/* Animation du bouton de soumission */
.btn-admin-primary i.fa-spinner {
    animation: spin 1s linear infinite;
}

@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Style pour les badges d'aide */
kbd {
    background: rgba(0, 0, 0, 0.8);
    color: var(--fire-yellow);
    border: 1px solid var(--blood-orange);
    padding: 0.1rem 0.3rem;
    border-radius: 4px;
    font-size: 0.85rem;
}
</style>
{% endblock %}", "back/team/new.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\team\\new.html.twig");
    }
}
