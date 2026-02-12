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

/* payment/new.html.twig */
class __TwigTemplate_ff7d2b4bba4f94fa00aa1d2c57333c29 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/new.html.twig"));

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

        yield "🔥 NOUVEAU PAIEMENT - PHANTOM SHOP";
        
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
        yield "<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🔥 <span>NOUVEAU PAIEMENT</span> 🔥</h1>
        <p class=\"shop-subtitle\">CRÉATION • TRANSACTION • ENREGISTREMENT</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_index");
        yield "\" class=\"neon-btn red\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR LISTE
            </a>
            <button type=\"submit\" form=\"payment-form\" class=\"neon-btn green\">
                <i class=\"fas fa-plus-circle\"></i> CRÉER PAIEMENT
            </button>
        </div>
    </div>

    <!-- DEUX COLONNES CÔTE À CÔTE -->
    <div class=\"dual-columns\">
        <!-- COLONNE GAUCHE : FORMULAIRE -->
        <div class=\"column left-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-plus-circle\"></i> NOUVEAU PAIEMENT</h2>
                <span class=\"badge-count\">NOUVEAU</span>
            </div>
            
            <div class=\"form-container\">
                ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "neon-form", "id" => "payment-form"]]);
        yield "
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        ARTICLE À PAYER
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group full-width\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-cube\"></i>
                                Article *
                            </label>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "shopItem", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "neon-select", "required" => "required"]]);
        // line 50
        yield "
                            <div class=\"form-error\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "shopItem", [], "any", false, false, false, 51), 'errors');
        yield "</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-info-circle\"></i>
                                Sélectionnez l'article associé à ce paiement
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-money-bill-wave\"></i>
                        INFORMATIONS FINANCIÈRES
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-euro-sign\"></i>
                                Montant (€) *
                            </label>
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "amount", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "Ex: 99.99", "required" => "required", "min" => "0.01", "step" => "0.01"]]);
        // line 78
        yield "
                            <div class=\"form-error\">";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "amount", [], "any", false, false, false, 79), 'errors');
        yield "</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-exclamation-triangle\"></i>
                                Doit être un nombre positif (ex: 99.99)
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-hashtag\"></i>
                                Référence *
                            </label>
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "transactionRef", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => ("Ex: TRX" . Twig\Extension\CoreExtension::random($this->env->getCharset(), 100000, 999999)), "required" => "required", "minlength" => "3", "maxlength" => "255"]]);
        // line 97
        yield "
                            <div class=\"form-error\">";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "transactionRef", [], "any", false, false, false, 98), 'errors');
        yield "</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-ruler\"></i>
                                Entre 3 et 255 caractères
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-credit-card\"></i>
                        MÉTHODE & STATUT
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-credit-card\"></i>
                                Méthode de paiement *
                            </label>
                            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "paymentMethod", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "neon-select", "required" => "required"]]);
        // line 122
        yield "
                            <div class=\"form-error\">";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "paymentMethod", [], "any", false, false, false, 123), 'errors');
        yield "</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-list\"></i>
                                Sélectionnez la méthode utilisée
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-check-circle\"></i>
                                Statut *
                            </label>
                            ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "paymentStatus", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "neon-select", "required" => "required"]]);
        // line 138
        yield "
                            <div class=\"form-error\">";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "paymentStatus", [], "any", false, false, false, 139), 'errors');
        yield "</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-exchange-alt\"></i>
                                Sélectionnez le statut de la transaction
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"far fa-calendar\"></i>
                        DATE & HEURE
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group full-width\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-clock\"></i>
                                Date du paiement *
                            </label>
                            ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "paymentDate", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "neon-input datetime-picker", "required" => "required"]]);
        // line 163
        yield "
                            <div class=\"form-error\">";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "paymentDate", [], "any", false, false, false, 164), 'errors');
        yield "</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-calendar-alt\"></i>
                                Sélectionnez la date et l'heure du paiement
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- RÈGLES DE VALIDATION -->
                <div class=\"form-section validation-rules\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-clipboard-check\"></i>
                        RÈGLES DE SAISIE
                    </h3>
                    
                    <div class=\"rules-list\">
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\">*</span>
                            <span class=\"rule-text\">Champs obligatoires</span>
                        </div>
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\"><i class=\"fas fa-euro-sign\"></i></span>
                            <span class=\"rule-text\">Montant : nombre positif (ex: 99.99)</span>
                        </div>
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\"><i class=\"fas fa-hashtag\"></i></span>
                            <span class=\"rule-text\">Référence : 3-255 caractères</span>
                        </div>
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\"><i class=\"fas fa-calendar-alt\"></i></span>
                            <span class=\"rule-text\">Date : format datetime valide</span>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"form-btn save-btn\">
                        <i class=\"fas fa-plus-circle\"></i>
                        CRÉER LE PAIEMENT
                    </button>
                    <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_index");
        yield "\" class=\"form-btn cancel-btn\">
                        <i class=\"fas fa-times\"></i>
                        ANNULER
                    </a>
                </div>
                
                ";
        // line 211
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <!-- COLONNE DROITE : PRÉVISUALISATION -->
        <div class=\"column right-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-eye\"></i> PRÉVISUALISATION</h2>
                <span class=\"badge-count\" id=\"live-status\">EN ATTENTE</span>
            </div>
            
            <div class=\"preview-container\">
                <div class=\"preview-card pending\" id=\"payment-preview\">
                    <div class=\"preview-header\">
                        <div class=\"preview-id\">
                            <i class=\"fas fa-hashtag\"></i>
                            <span id=\"preview-ref\">TRX";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 100000, 999999), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"preview-status pending\" id=\"preview-status\">
                            EN ATTENTE
                        </div>
                    </div>
                    
                    <div class=\"preview-body\">
                        <div class=\"preview-amount\" id=\"preview-amount\">
                            0,00 €
                        </div>
                        
                        <div class=\"preview-details\">
                            <div class=\"detail\">
                                <span class=\"label\">ARTICLE:</span>
                                <span class=\"value\" id=\"preview-item\">
                                    <i class=\"fas fa-cube\"></i> Aucun
                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">MÉTHODE:</span>
                                <span class=\"value\" id=\"preview-method\">
                                    <i class=\"fas fa-credit-card\"></i> CARTE
                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">DATE:</span>
                                <span class=\"value\" id=\"preview-date\">
                                    ";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"preview-footer\">
                        <div class=\"info-note\">
                            <i class=\"fas fa-info-circle\"></i>
                            Le paiement sera créé après validation du formulaire
                        </div>
                    </div>
                </div>
                
                <!-- GUIDE RAPIDE -->
                <div class=\"danger-zone\" style=\"border-color: var(--neon-blue);\">
                    <h3 class=\"danger-title\" style=\"color: var(--neon-blue);\">
                        <i class=\"fas fa-lightbulb\"></i>
                        GUIDE RAPIDE
                    </h3>
                    
                    <div class=\"danger-actions\">
                        <button type=\"button\" class=\"danger-btn duplicate-btn\" onclick=\"fillExampleData()\" style=\"border-color: var(--neon-blue); color: var(--neon-blue);\">
                            <i class=\"fas fa-magic\"></i>
                            REMPLIR EXEMPLE
                        </button>
                        
                        <button type=\"button\" class=\"danger-btn duplicate-btn\" onclick=\"clearForm()\" style=\"border-color: #777; color: #777;\">
                            <i class=\"fas fa-broom\"></i>
                            EFFACER TOUT
                        </button>
                    </div>
                    
                    <div class=\"danger-warning\" style=\"background: rgba(0, 243, 255, 0.1); color: var(--neon-blue);\">
                        <i class=\"fas fa-info-circle\"></i>
                        <span>Tous les champs marqués d'une étoile (*) sont obligatoires</span>
                    </div>
                </div>
                
                <!-- STATISTIQUES -->
                <div class=\"stats-preview\">
                    <h3 class=\"stats-title\">
                        <i class=\"fas fa-chart-line\"></i>
                        INFORMATIONS
                    </h3>
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-preview\">
                            <div class=\"stat-icon\">
                                <i class=\"far fa-calendar\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-label\">DATE DE CRÉATION</div>
                                <div class=\"stat-value\">";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-preview\">
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-bolt\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-label\">TEMPS RÉEL</div>
                                <div class=\"stat-value\" id=\"real-time\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À LA CRÉATION -->
<style>
/* STYLES EXISTANTS (identique à edit.html.twig) */
.form-container {
    padding: 20px;
}

.neon-form {
    animation: fadeIn 0.8s ease-out;
}

.form-section {
    margin-bottom: 30px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 10px;
    border: 1px solid rgba(255, 0, 51, 0.1);
}

.form-section-title {
    font-size: 1.2rem;
    color: var(--neon-blue);
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(0, 243, 255, 0.3);
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}

.form-group {
    margin-bottom: 20px;
}

.form-group.full-width {
    grid-column: 1 / -1;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    color: var(--neon-blue);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.neon-input, .neon-select {
    width: 100%;
    padding: 12px 15px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 0, 51, 0.2);
    border-radius: 8px;
    color: white;
    font-size: 1rem;
    transition: all 0.3s;
    font-family: 'Inter', sans-serif;
}

.neon-input:focus, .neon-select:focus {
    outline: none;
    border-color: var(--neon-red);
    box-shadow: 0 0 20px rgba(255, 0, 51, 0.3);
    background: rgba(255, 255, 255, 0.08);
}

.neon-select {
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ff0033' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 12px;
}

.neon-select option {
    background: #1a1a2e;
    color: white;
    padding: 10px;
}

.datetime-picker {
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 0, 51, 0.2);
    color: white;
}

.form-error {
    color: var(--neon-red);
    font-size: 0.8rem;
    margin-top: 5px;
    min-height: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* HINTS DE VALIDATION */
.validation-hint {
    color: var(--neon-yellow);
    font-size: 0.75rem;
    margin-top: 5px;
    padding: 5px 10px;
    background: rgba(255, 204, 0, 0.1);
    border-radius: 5px;
    border-left: 3px solid var(--neon-yellow);
    display: flex;
    align-items: center;
    gap: 8px;
}

.validation-hint i {
    font-size: 0.7rem;
}

/* RÈGLES DE VALIDATION */
.validation-rules {
    background: rgba(157, 0, 255, 0.1);
    border-color: var(--neon-purple);
}

.rules-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.rule-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    border: 1px solid rgba(157, 0, 255, 0.2);
}

.rule-icon {
    width: 25px;
    height: 25px;
    background: rgba(157, 0, 255, 0.2);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--neon-purple);
    font-weight: bold;
    font-size: 0.9rem;
    flex-shrink: 0;
}

.rule-text {
    color: #aaa;
    font-size: 0.85rem;
    line-height: 1.4;
}

/* FORM ACTIONS */
.form-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 2px solid rgba(255, 0, 51, 0.3);
}

.form-btn {
    padding: 15px 30px;
    border: 2px solid;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 1rem;
    font-family: 'Inter', sans-serif;
}

.save-btn {
    background: var(--neon-green);
    border-color: var(--neon-green);
    color: black;
}

.save-btn:hover {
    background: transparent;
    color: var(--neon-green);
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(0, 255, 65, 0.4);
}

.cancel-btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: #777;
    color: #777;
}

.cancel-btn:hover {
    background: #777;
    color: black;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(119, 119, 119, 0.3);
}

/* PREVIEW */
.preview-container {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.preview-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    transition: all 0.3s;
    animation: previewGlow 2s infinite alternate;
}

@keyframes previewGlow {
    0% { box-shadow: 0 0 20px rgba(0, 243, 255, 0.2); }
    100% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.4); }
}

.preview-card.success {
    border-color: rgba(0, 255, 65, 0.3);
}

.preview-card.pending {
    border-color: rgba(255, 204, 0, 0.3);
}

.preview-card.failed {
    border-color: rgba(255, 0, 51, 0.3);
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.2);
}

.preview-id {
    font-family: 'Courier New', monospace;
    font-size: 1.1rem;
    color: var(--neon-blue);
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
}

.preview-status {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    animation: statusPulse 2s infinite;
}

.preview-status.success {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 2px solid var(--neon-green);
}

.preview-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.preview-status.failed {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

@keyframes statusPulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}

.preview-body {
    text-align: center;
}

.preview-amount {
    font-size: 2.5rem;
    font-weight: 900;
    color: var(--neon-green);
    margin-bottom: 25px;
    text-shadow: 0 0 15px rgba(0, 255, 65, 0.5);
    animation: amountGlow 2s infinite alternate;
}

@keyframes amountGlow {
    0% { text-shadow: 0 0 10px rgba(0, 255, 65, 0.3); }
    100% { text-shadow: 0 0 20px rgba(0, 255, 65, 0.7); }
}

.preview-details {
    display: grid;
    grid-template-columns: 1fr;
    gap: 15px;
    margin-top: 20px;
}

.preview-footer {
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid rgba(0, 243, 255, 0.2);
}

.info-note {
    background: rgba(0, 243, 255, 0.1);
    border: 1px solid rgba(0, 243, 255, 0.3);
    border-radius: 8px;
    padding: 12px;
    color: var(--neon-blue);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* GUIDE RAPIDE */
.danger-zone {
    background: rgba(255, 0, 51, 0.1);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    padding: 25px;
    animation: dangerPulse 2s infinite alternate;
}

@keyframes dangerPulse {
    0% { box-shadow: 0 0 10px rgba(255, 0, 51, 0.2); }
    100% { box-shadow: 0 0 20px rgba(255, 0, 51, 0.4); }
}

.danger-title {
    color: var(--neon-red);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.danger-actions {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.danger-btn {
    padding: 15px;
    border: 2px solid;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.delete-btn {
    background: rgba(255, 0, 51, 0.2);
    border-color: var(--neon-red);
    color: var(--neon-red);
}

.delete-btn:hover {
    background: var(--neon-red);
    color: black;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 0, 51, 0.4);
}

.duplicate-btn {
    background: rgba(157, 0, 255, 0.2);
    border-color: var(--neon-purple);
    color: var(--neon-purple);
}

.duplicate-btn:hover {
    background: var(--neon-purple);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(157, 0, 255, 0.4);
}

.danger-warning {
    margin-top: 20px;
    padding: 15px;
    background: rgba(255, 0, 51, 0.15);
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--neon-red);
    font-weight: 600;
}

/* STATS PREVIEW */
.stats-preview {
    background: rgba(157, 0, 255, 0.1);
    border: 2px solid var(--neon-purple);
    border-radius: 15px;
    padding: 25px;
}

.stats-title {
    color: var(--neon-purple);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.stat-preview {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    border: 1px solid rgba(157, 0, 255, 0.2);
    transition: all 0.3s;
}

.stat-preview:hover {
    transform: translateY(-5px);
    border-color: var(--neon-purple);
    background: rgba(157, 0, 255, 0.1);
}

.stat-icon {
    width: 45px;
    height: 45px;
    background: rgba(157, 0, 255, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--neon-purple);
    font-size: 1.2rem;
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.8rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 1.1rem;
    font-weight: 700;
    color: white;
}

/* VARIABLES */
:root {
    --neon-red: #ff0033;
    --neon-blue: #00f3ff;
    --neon-green: #00ff41;
    --neon-purple: #9d00ff;
    --neon-yellow: #ffcc00;
}

@media (max-width: 1200px) {
    .dual-columns {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// LIVE PREVIEW UPDATES
document.addEventListener('DOMContentLoaded', function() {
    // Éléments du formulaire
    const amountInput = document.querySelector('#payment_amount');
    const methodSelect = document.querySelector('#payment_paymentMethod');
    const statusSelect = document.querySelector('#payment_paymentStatus');
    const refInput = document.querySelector('#payment_transactionRef');
    const dateInput = document.querySelector('#payment_paymentDate');
    const shopItemSelect = document.querySelector('#payment_shopItem');
    
    // Éléments de prévisualisation
    const previewAmount = document.getElementById('preview-amount');
    const previewMethod = document.getElementById('preview-method');
    const previewStatus = document.getElementById('preview-status');
    const liveStatus = document.getElementById('live-status');
    const previewRef = document.getElementById('preview-ref');
    const previewDate = document.getElementById('preview-date');
    const previewItem = document.getElementById('preview-item');
    const realTime = document.getElementById('real-time');
    
    // Fonction pour formater le montant
    function formatAmount(value) {
        const num = parseFloat(value) || 0;
        return num.toFixed(2).replace('.', ',').replace(/\\B(?=(\\d{3})+(?!\\d))/g, ' ') + ' €';
    }
    
    // Fonction pour obtenir l'icône de méthode
    function getMethodIcon(method) {
        switch(method) {
            case 'card': return '<i class=\"fas fa-credit-card\"></i> CARTE';
            case 'paypal': return '<i class=\"fab fa-paypal\"></i> PAYPAL';
            default: return '<i class=\"fas fa-wallet\"></i> WALLET';
        }
    }
    
    // Fonction pour obtenir les détails de l'article
    function getItemDetails(option) {
        if (!option) return { name: 'Aucun', price: '0,00 €' };
        
        const text = option.textContent || '';
        // Extraire le nom et le prix du texte de l'option
        const parts = text.split(' - ');
        if (parts.length >= 2) {
            return {
                name: parts[0],
                price: parts[1]
            };
        }
        return {
            name: text,
            price: '0,00 €'
        };
    }
    
    // Fonction pour générer une référence aléatoire
    function generateReference() {
        return 'TRX' + Math.floor(100000 + Math.random() * 900000);
    }
    
    // Fonction pour mettre à jour la prévisualisation
    function updatePreview() {
        // Montant
        if (amountInput) {
            previewAmount.textContent = formatAmount(amountInput.value);
        }
        
        // Méthode
        if (methodSelect) {
            previewMethod.innerHTML = getMethodIcon(methodSelect.value);
        }
        
        // Statut
        if (statusSelect) {
            const status = statusSelect.value;
            previewStatus.textContent = status.toUpperCase();
            liveStatus.textContent = status.toUpperCase();
            
            // Mettre à jour les classes
            previewStatus.className = 'preview-status ' + status;
            liveStatus.className = 'badge-count ' + status;
            
            // Mettre à jour la carte de prévisualisation
            const previewCard = document.getElementById('payment-preview');
            previewCard.className = 'preview-card ' + status;
        }
        
        // Référence
        if (refInput) {
            previewRef.textContent = refInput.value || generateReference();
        }
        
        // Date
        if (dateInput && dateInput.value) {
            const date = new Date(dateInput.value);
            previewDate.textContent = date.toLocaleDateString('fr-FR') + ' ' + 
                                     date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute: '2-digit'});
        }
        
        // Article
        if (shopItemSelect && shopItemSelect.selectedIndex > 0) {
            const selectedOption = shopItemSelect.options[shopItemSelect.selectedIndex];
            const item = getItemDetails(selectedOption);
            previewItem.innerHTML = `<i class=\"fas fa-cube\"></i> \${item.name} - \${item.price}`;
        } else {
            previewItem.innerHTML = '<i class=\"fas fa-cube\"></i> Aucun';
        }
    }
    
    // Écouter les changements
    if (amountInput) amountInput.addEventListener('input', updatePreview);
    if (methodSelect) methodSelect.addEventListener('change', updatePreview);
    if (statusSelect) statusSelect.addEventListener('change', updatePreview);
    if (refInput) refInput.addEventListener('input', updatePreview);
    if (dateInput) dateInput.addEventListener('change', updatePreview);
    if (shopItemSelect) shopItemSelect.addEventListener('change', updatePreview);
    
    // Initialiser la prévisualisation
    updatePreview();
    
    // Animation pour le formulaire
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `\${index * 0.1}s`;
        group.style.animation = 'fadeInUp 0.5s ease-out forwards';
    });
    
    // Mettre à jour l'heure en temps réel
    function updateRealTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('fr-FR');
        if (realTime) {
            realTime.textContent = timeString;
        }
    }
    
    setInterval(updateRealTime, 1000);
    
    // Ajouter l'animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-group {
            opacity: 0;
        }
        
        /* Animation spéciale pour nouveau paiement */
        @keyframes newPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }
        
        .shop-title {
            animation: newPulse 2s infinite;
        }
    `;
    document.head.appendChild(style);
    
    // Remplir avec des données d'exemple
    window.fillExampleData = function() {
        if (amountInput) amountInput.value = '149.99';
        if (refInput) refInput.value = generateReference();
        if (methodSelect) methodSelect.value = 'card';
        if (statusSelect) statusSelect.value = 'success';
        
        // Date actuelle
        const now = new Date();
        const dateString = now.toISOString().slice(0, 16);
        if (dateInput) dateInput.value = dateString;
        
        // Sélectionner le premier article s'il existe
        if (shopItemSelect && shopItemSelect.options.length > 1) {
            shopItemSelect.selectedIndex = 1;
        }
        
        updatePreview();
        
        // Animation de confirmation
        const btn = event.target.closest('button');
        if (btn) {
            btn.innerHTML = '<i class=\"fas fa-check\"></i> EXEMPLE APPLIQUÉ';
            btn.style.background = 'var(--neon-green)';
            btn.style.color = 'black';
            btn.style.borderColor = 'var(--neon-green)';
            
            setTimeout(() => {
                btn.innerHTML = '<i class=\"fas fa-magic\"></i> REMPLIR EXEMPLE';
                btn.style.background = '';
                btn.style.color = '';
                btn.style.borderColor = '';
            }, 2000);
        }
    };
    
    // Effacer le formulaire
    window.clearForm = function() {
        if (confirm('⚠️ Voulez-vous vraiment effacer tous les champs ?')) {
            if (amountInput) amountInput.value = '';
            if (refInput) refInput.value = '';
            if (methodSelect) methodSelect.value = '';
            if (statusSelect) statusSelect.value = '';
            if (dateInput) dateInput.value = '';
            if (shopItemSelect) shopItemSelect.selectedIndex = 0;
            
            updatePreview();
            
            // Animation de confirmation
            const btn = event.target.closest('button');
            if (btn) {
                btn.innerHTML = '<i class=\"fas fa-check\"></i> FORMULAIRE VIDÉ';
                btn.style.background = '#777';
                btn.style.color = 'black';
                btn.style.borderColor = '#777';
                
                setTimeout(() => {
                    btn.innerHTML = '<i class=\"fas fa-broom\"></i> EFFACER TOUT';
                    btn.style.background = '';
                    btn.style.color = '';
                    btn.style.borderColor = '';
                }, 2000);
            }
        }
    };
    
    // Confirmation avant envoi
    const form = document.getElementById('payment-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Validation basique
            if (!amountInput.value || !refInput.value || !shopItemSelect.value) {
                alert('⚠️ Veuillez remplir tous les champs obligatoires !');
                e.preventDefault();
                return false;
            }
            
            const amount = parseFloat(amountInput.value);
            if (isNaN(amount) || amount <= 0) {
                alert('⚠️ Le montant doit être un nombre positif !');
                e.preventDefault();
                return false;
            }
            
            const status = statusSelect ? statusSelect.value : '';
            if (status === 'failed') {
                if (!confirm('⚠️ Vous êtes sur le point de créer un paiement ÉCHOUÉ. Voulez-vous continuer ?')) {
                    e.preventDefault();
                    return false;
                }
            }
            
            // Animation de chargement
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> CRÉATION EN COURS...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 3000);
        });
    }
});
</script>
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
        return "payment/new.html.twig";
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
        return array (  453 => 318,  440 => 308,  384 => 255,  353 => 227,  334 => 211,  325 => 205,  281 => 164,  278 => 163,  276 => 160,  252 => 139,  249 => 138,  247 => 135,  232 => 123,  229 => 122,  227 => 119,  203 => 98,  200 => 97,  198 => 91,  183 => 79,  180 => 78,  178 => 72,  154 => 51,  151 => 50,  149 => 47,  132 => 33,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🔥 NOUVEAU PAIEMENT - PHANTOM SHOP{% endblock %}

{% block body %}
<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🔥 <span>NOUVEAU PAIEMENT</span> 🔥</h1>
        <p class=\"shop-subtitle\">CRÉATION • TRANSACTION • ENREGISTREMENT</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"{{ path('app_payment_index') }}\" class=\"neon-btn red\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR LISTE
            </a>
            <button type=\"submit\" form=\"payment-form\" class=\"neon-btn green\">
                <i class=\"fas fa-plus-circle\"></i> CRÉER PAIEMENT
            </button>
        </div>
    </div>

    <!-- DEUX COLONNES CÔTE À CÔTE -->
    <div class=\"dual-columns\">
        <!-- COLONNE GAUCHE : FORMULAIRE -->
        <div class=\"column left-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-plus-circle\"></i> NOUVEAU PAIEMENT</h2>
                <span class=\"badge-count\">NOUVEAU</span>
            </div>
            
            <div class=\"form-container\">
                {{ form_start(form, {'attr': {'class': 'neon-form', 'id': 'payment-form'}}) }}
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-shopping-cart\"></i>
                        ARTICLE À PAYER
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group full-width\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-cube\"></i>
                                Article *
                            </label>
                            {{ form_widget(form.shopItem, {'attr': {
                                'class': 'neon-select',
                                'required': 'required'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.shopItem) }}</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-info-circle\"></i>
                                Sélectionnez l'article associé à ce paiement
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-money-bill-wave\"></i>
                        INFORMATIONS FINANCIÈRES
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-euro-sign\"></i>
                                Montant (€) *
                            </label>
                            {{ form_widget(form.amount, {'attr': {
                                'class': 'neon-input',
                                'placeholder': 'Ex: 99.99',
                                'required': 'required',
                                'min': '0.01',
                                'step': '0.01'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.amount) }}</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-exclamation-triangle\"></i>
                                Doit être un nombre positif (ex: 99.99)
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-hashtag\"></i>
                                Référence *
                            </label>
                            {{ form_widget(form.transactionRef, {'attr': {
                                'class': 'neon-input',
                                'placeholder': 'Ex: TRX' ~ random(100000, 999999),
                                'required': 'required',
                                'minlength': '3',
                                'maxlength': '255'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.transactionRef) }}</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-ruler\"></i>
                                Entre 3 et 255 caractères
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-credit-card\"></i>
                        MÉTHODE & STATUT
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-credit-card\"></i>
                                Méthode de paiement *
                            </label>
                            {{ form_widget(form.paymentMethod, {'attr': {
                                'class': 'neon-select',
                                'required': 'required'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.paymentMethod) }}</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-list\"></i>
                                Sélectionnez la méthode utilisée
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-check-circle\"></i>
                                Statut *
                            </label>
                            {{ form_widget(form.paymentStatus, {'attr': {
                                'class': 'neon-select',
                                'required': 'required'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.paymentStatus) }}</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-exchange-alt\"></i>
                                Sélectionnez le statut de la transaction
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-section\">
                    <h3 class=\"form-section-title\">
                        <i class=\"far fa-calendar\"></i>
                        DATE & HEURE
                    </h3>
                    
                    <div class=\"form-row\">
                        <div class=\"form-group full-width\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-clock\"></i>
                                Date du paiement *
                            </label>
                            {{ form_widget(form.paymentDate, {'attr': {
                                'class': 'neon-input datetime-picker',
                                'required': 'required'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.paymentDate) }}</div>
                            <div class=\"validation-hint\">
                                <i class=\"fas fa-calendar-alt\"></i>
                                Sélectionnez la date et l'heure du paiement
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- RÈGLES DE VALIDATION -->
                <div class=\"form-section validation-rules\">
                    <h3 class=\"form-section-title\">
                        <i class=\"fas fa-clipboard-check\"></i>
                        RÈGLES DE SAISIE
                    </h3>
                    
                    <div class=\"rules-list\">
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\">*</span>
                            <span class=\"rule-text\">Champs obligatoires</span>
                        </div>
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\"><i class=\"fas fa-euro-sign\"></i></span>
                            <span class=\"rule-text\">Montant : nombre positif (ex: 99.99)</span>
                        </div>
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\"><i class=\"fas fa-hashtag\"></i></span>
                            <span class=\"rule-text\">Référence : 3-255 caractères</span>
                        </div>
                        <div class=\"rule-item\">
                            <span class=\"rule-icon\"><i class=\"fas fa-calendar-alt\"></i></span>
                            <span class=\"rule-text\">Date : format datetime valide</span>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"form-btn save-btn\">
                        <i class=\"fas fa-plus-circle\"></i>
                        CRÉER LE PAIEMENT
                    </button>
                    <a href=\"{{ path('app_payment_index') }}\" class=\"form-btn cancel-btn\">
                        <i class=\"fas fa-times\"></i>
                        ANNULER
                    </a>
                </div>
                
                {{ form_end(form) }}
            </div>
        </div>

        <!-- COLONNE DROITE : PRÉVISUALISATION -->
        <div class=\"column right-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-eye\"></i> PRÉVISUALISATION</h2>
                <span class=\"badge-count\" id=\"live-status\">EN ATTENTE</span>
            </div>
            
            <div class=\"preview-container\">
                <div class=\"preview-card pending\" id=\"payment-preview\">
                    <div class=\"preview-header\">
                        <div class=\"preview-id\">
                            <i class=\"fas fa-hashtag\"></i>
                            <span id=\"preview-ref\">TRX{{ random(100000, 999999) }}</span>
                        </div>
                        <div class=\"preview-status pending\" id=\"preview-status\">
                            EN ATTENTE
                        </div>
                    </div>
                    
                    <div class=\"preview-body\">
                        <div class=\"preview-amount\" id=\"preview-amount\">
                            0,00 €
                        </div>
                        
                        <div class=\"preview-details\">
                            <div class=\"detail\">
                                <span class=\"label\">ARTICLE:</span>
                                <span class=\"value\" id=\"preview-item\">
                                    <i class=\"fas fa-cube\"></i> Aucun
                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">MÉTHODE:</span>
                                <span class=\"value\" id=\"preview-method\">
                                    <i class=\"fas fa-credit-card\"></i> CARTE
                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">DATE:</span>
                                <span class=\"value\" id=\"preview-date\">
                                    {{ \"now\"|date('d/m/Y H:i') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"preview-footer\">
                        <div class=\"info-note\">
                            <i class=\"fas fa-info-circle\"></i>
                            Le paiement sera créé après validation du formulaire
                        </div>
                    </div>
                </div>
                
                <!-- GUIDE RAPIDE -->
                <div class=\"danger-zone\" style=\"border-color: var(--neon-blue);\">
                    <h3 class=\"danger-title\" style=\"color: var(--neon-blue);\">
                        <i class=\"fas fa-lightbulb\"></i>
                        GUIDE RAPIDE
                    </h3>
                    
                    <div class=\"danger-actions\">
                        <button type=\"button\" class=\"danger-btn duplicate-btn\" onclick=\"fillExampleData()\" style=\"border-color: var(--neon-blue); color: var(--neon-blue);\">
                            <i class=\"fas fa-magic\"></i>
                            REMPLIR EXEMPLE
                        </button>
                        
                        <button type=\"button\" class=\"danger-btn duplicate-btn\" onclick=\"clearForm()\" style=\"border-color: #777; color: #777;\">
                            <i class=\"fas fa-broom\"></i>
                            EFFACER TOUT
                        </button>
                    </div>
                    
                    <div class=\"danger-warning\" style=\"background: rgba(0, 243, 255, 0.1); color: var(--neon-blue);\">
                        <i class=\"fas fa-info-circle\"></i>
                        <span>Tous les champs marqués d'une étoile (*) sont obligatoires</span>
                    </div>
                </div>
                
                <!-- STATISTIQUES -->
                <div class=\"stats-preview\">
                    <h3 class=\"stats-title\">
                        <i class=\"fas fa-chart-line\"></i>
                        INFORMATIONS
                    </h3>
                    
                    <div class=\"stats-grid\">
                        <div class=\"stat-preview\">
                            <div class=\"stat-icon\">
                                <i class=\"far fa-calendar\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-label\">DATE DE CRÉATION</div>
                                <div class=\"stat-value\">{{ \"now\"|date('d/m/Y') }}</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-preview\">
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-bolt\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-label\">TEMPS RÉEL</div>
                                <div class=\"stat-value\" id=\"real-time\">{{ \"now\"|date('H:i:s') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À LA CRÉATION -->
<style>
/* STYLES EXISTANTS (identique à edit.html.twig) */
.form-container {
    padding: 20px;
}

.neon-form {
    animation: fadeIn 0.8s ease-out;
}

.form-section {
    margin-bottom: 30px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 10px;
    border: 1px solid rgba(255, 0, 51, 0.1);
}

.form-section-title {
    font-size: 1.2rem;
    color: var(--neon-blue);
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid rgba(0, 243, 255, 0.3);
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}

.form-group {
    margin-bottom: 20px;
}

.form-group.full-width {
    grid-column: 1 / -1;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    color: var(--neon-blue);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.neon-input, .neon-select {
    width: 100%;
    padding: 12px 15px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 0, 51, 0.2);
    border-radius: 8px;
    color: white;
    font-size: 1rem;
    transition: all 0.3s;
    font-family: 'Inter', sans-serif;
}

.neon-input:focus, .neon-select:focus {
    outline: none;
    border-color: var(--neon-red);
    box-shadow: 0 0 20px rgba(255, 0, 51, 0.3);
    background: rgba(255, 255, 255, 0.08);
}

.neon-select {
    appearance: none;
    background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23ff0033' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E\");
    background-repeat: no-repeat;
    background-position: right 15px center;
    background-size: 12px;
}

.neon-select option {
    background: #1a1a2e;
    color: white;
    padding: 10px;
}

.datetime-picker {
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 0, 51, 0.2);
    color: white;
}

.form-error {
    color: var(--neon-red);
    font-size: 0.8rem;
    margin-top: 5px;
    min-height: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* HINTS DE VALIDATION */
.validation-hint {
    color: var(--neon-yellow);
    font-size: 0.75rem;
    margin-top: 5px;
    padding: 5px 10px;
    background: rgba(255, 204, 0, 0.1);
    border-radius: 5px;
    border-left: 3px solid var(--neon-yellow);
    display: flex;
    align-items: center;
    gap: 8px;
}

.validation-hint i {
    font-size: 0.7rem;
}

/* RÈGLES DE VALIDATION */
.validation-rules {
    background: rgba(157, 0, 255, 0.1);
    border-color: var(--neon-purple);
}

.rules-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.rule-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    border: 1px solid rgba(157, 0, 255, 0.2);
}

.rule-icon {
    width: 25px;
    height: 25px;
    background: rgba(157, 0, 255, 0.2);
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--neon-purple);
    font-weight: bold;
    font-size: 0.9rem;
    flex-shrink: 0;
}

.rule-text {
    color: #aaa;
    font-size: 0.85rem;
    line-height: 1.4;
}

/* FORM ACTIONS */
.form-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
    padding-top: 30px;
    border-top: 2px solid rgba(255, 0, 51, 0.3);
}

.form-btn {
    padding: 15px 30px;
    border: 2px solid;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 1rem;
    font-family: 'Inter', sans-serif;
}

.save-btn {
    background: var(--neon-green);
    border-color: var(--neon-green);
    color: black;
}

.save-btn:hover {
    background: transparent;
    color: var(--neon-green);
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(0, 255, 65, 0.4);
}

.cancel-btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: #777;
    color: #777;
}

.cancel-btn:hover {
    background: #777;
    color: black;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(119, 119, 119, 0.3);
}

/* PREVIEW */
.preview-container {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.preview-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    transition: all 0.3s;
    animation: previewGlow 2s infinite alternate;
}

@keyframes previewGlow {
    0% { box-shadow: 0 0 20px rgba(0, 243, 255, 0.2); }
    100% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.4); }
}

.preview-card.success {
    border-color: rgba(0, 255, 65, 0.3);
}

.preview-card.pending {
    border-color: rgba(255, 204, 0, 0.3);
}

.preview-card.failed {
    border-color: rgba(255, 0, 51, 0.3);
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.2);
}

.preview-id {
    font-family: 'Courier New', monospace;
    font-size: 1.1rem;
    color: var(--neon-blue);
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 700;
}

.preview-status {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    animation: statusPulse 2s infinite;
}

.preview-status.success {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 2px solid var(--neon-green);
}

.preview-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.preview-status.failed {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

@keyframes statusPulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.7; }
}

.preview-body {
    text-align: center;
}

.preview-amount {
    font-size: 2.5rem;
    font-weight: 900;
    color: var(--neon-green);
    margin-bottom: 25px;
    text-shadow: 0 0 15px rgba(0, 255, 65, 0.5);
    animation: amountGlow 2s infinite alternate;
}

@keyframes amountGlow {
    0% { text-shadow: 0 0 10px rgba(0, 255, 65, 0.3); }
    100% { text-shadow: 0 0 20px rgba(0, 255, 65, 0.7); }
}

.preview-details {
    display: grid;
    grid-template-columns: 1fr;
    gap: 15px;
    margin-top: 20px;
}

.preview-footer {
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid rgba(0, 243, 255, 0.2);
}

.info-note {
    background: rgba(0, 243, 255, 0.1);
    border: 1px solid rgba(0, 243, 255, 0.3);
    border-radius: 8px;
    padding: 12px;
    color: var(--neon-blue);
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* GUIDE RAPIDE */
.danger-zone {
    background: rgba(255, 0, 51, 0.1);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    padding: 25px;
    animation: dangerPulse 2s infinite alternate;
}

@keyframes dangerPulse {
    0% { box-shadow: 0 0 10px rgba(255, 0, 51, 0.2); }
    100% { box-shadow: 0 0 20px rgba(255, 0, 51, 0.4); }
}

.danger-title {
    color: var(--neon-red);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.danger-actions {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.danger-btn {
    padding: 15px;
    border: 2px solid;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.delete-btn {
    background: rgba(255, 0, 51, 0.2);
    border-color: var(--neon-red);
    color: var(--neon-red);
}

.delete-btn:hover {
    background: var(--neon-red);
    color: black;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 0, 51, 0.4);
}

.duplicate-btn {
    background: rgba(157, 0, 255, 0.2);
    border-color: var(--neon-purple);
    color: var(--neon-purple);
}

.duplicate-btn:hover {
    background: var(--neon-purple);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(157, 0, 255, 0.4);
}

.danger-warning {
    margin-top: 20px;
    padding: 15px;
    background: rgba(255, 0, 51, 0.15);
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--neon-red);
    font-weight: 600;
}

/* STATS PREVIEW */
.stats-preview {
    background: rgba(157, 0, 255, 0.1);
    border: 2px solid var(--neon-purple);
    border-radius: 15px;
    padding: 25px;
}

.stats-title {
    color: var(--neon-purple);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.stat-preview {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    border: 1px solid rgba(157, 0, 255, 0.2);
    transition: all 0.3s;
}

.stat-preview:hover {
    transform: translateY(-5px);
    border-color: var(--neon-purple);
    background: rgba(157, 0, 255, 0.1);
}

.stat-icon {
    width: 45px;
    height: 45px;
    background: rgba(157, 0, 255, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--neon-purple);
    font-size: 1.2rem;
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.8rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 1.1rem;
    font-weight: 700;
    color: white;
}

/* VARIABLES */
:root {
    --neon-red: #ff0033;
    --neon-blue: #00f3ff;
    --neon-green: #00ff41;
    --neon-purple: #9d00ff;
    --neon-yellow: #ffcc00;
}

@media (max-width: 1200px) {
    .dual-columns {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// LIVE PREVIEW UPDATES
document.addEventListener('DOMContentLoaded', function() {
    // Éléments du formulaire
    const amountInput = document.querySelector('#payment_amount');
    const methodSelect = document.querySelector('#payment_paymentMethod');
    const statusSelect = document.querySelector('#payment_paymentStatus');
    const refInput = document.querySelector('#payment_transactionRef');
    const dateInput = document.querySelector('#payment_paymentDate');
    const shopItemSelect = document.querySelector('#payment_shopItem');
    
    // Éléments de prévisualisation
    const previewAmount = document.getElementById('preview-amount');
    const previewMethod = document.getElementById('preview-method');
    const previewStatus = document.getElementById('preview-status');
    const liveStatus = document.getElementById('live-status');
    const previewRef = document.getElementById('preview-ref');
    const previewDate = document.getElementById('preview-date');
    const previewItem = document.getElementById('preview-item');
    const realTime = document.getElementById('real-time');
    
    // Fonction pour formater le montant
    function formatAmount(value) {
        const num = parseFloat(value) || 0;
        return num.toFixed(2).replace('.', ',').replace(/\\B(?=(\\d{3})+(?!\\d))/g, ' ') + ' €';
    }
    
    // Fonction pour obtenir l'icône de méthode
    function getMethodIcon(method) {
        switch(method) {
            case 'card': return '<i class=\"fas fa-credit-card\"></i> CARTE';
            case 'paypal': return '<i class=\"fab fa-paypal\"></i> PAYPAL';
            default: return '<i class=\"fas fa-wallet\"></i> WALLET';
        }
    }
    
    // Fonction pour obtenir les détails de l'article
    function getItemDetails(option) {
        if (!option) return { name: 'Aucun', price: '0,00 €' };
        
        const text = option.textContent || '';
        // Extraire le nom et le prix du texte de l'option
        const parts = text.split(' - ');
        if (parts.length >= 2) {
            return {
                name: parts[0],
                price: parts[1]
            };
        }
        return {
            name: text,
            price: '0,00 €'
        };
    }
    
    // Fonction pour générer une référence aléatoire
    function generateReference() {
        return 'TRX' + Math.floor(100000 + Math.random() * 900000);
    }
    
    // Fonction pour mettre à jour la prévisualisation
    function updatePreview() {
        // Montant
        if (amountInput) {
            previewAmount.textContent = formatAmount(amountInput.value);
        }
        
        // Méthode
        if (methodSelect) {
            previewMethod.innerHTML = getMethodIcon(methodSelect.value);
        }
        
        // Statut
        if (statusSelect) {
            const status = statusSelect.value;
            previewStatus.textContent = status.toUpperCase();
            liveStatus.textContent = status.toUpperCase();
            
            // Mettre à jour les classes
            previewStatus.className = 'preview-status ' + status;
            liveStatus.className = 'badge-count ' + status;
            
            // Mettre à jour la carte de prévisualisation
            const previewCard = document.getElementById('payment-preview');
            previewCard.className = 'preview-card ' + status;
        }
        
        // Référence
        if (refInput) {
            previewRef.textContent = refInput.value || generateReference();
        }
        
        // Date
        if (dateInput && dateInput.value) {
            const date = new Date(dateInput.value);
            previewDate.textContent = date.toLocaleDateString('fr-FR') + ' ' + 
                                     date.toLocaleTimeString('fr-FR', {hour: '2-digit', minute: '2-digit'});
        }
        
        // Article
        if (shopItemSelect && shopItemSelect.selectedIndex > 0) {
            const selectedOption = shopItemSelect.options[shopItemSelect.selectedIndex];
            const item = getItemDetails(selectedOption);
            previewItem.innerHTML = `<i class=\"fas fa-cube\"></i> \${item.name} - \${item.price}`;
        } else {
            previewItem.innerHTML = '<i class=\"fas fa-cube\"></i> Aucun';
        }
    }
    
    // Écouter les changements
    if (amountInput) amountInput.addEventListener('input', updatePreview);
    if (methodSelect) methodSelect.addEventListener('change', updatePreview);
    if (statusSelect) statusSelect.addEventListener('change', updatePreview);
    if (refInput) refInput.addEventListener('input', updatePreview);
    if (dateInput) dateInput.addEventListener('change', updatePreview);
    if (shopItemSelect) shopItemSelect.addEventListener('change', updatePreview);
    
    // Initialiser la prévisualisation
    updatePreview();
    
    // Animation pour le formulaire
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.animationDelay = `\${index * 0.1}s`;
        group.style.animation = 'fadeInUp 0.5s ease-out forwards';
    });
    
    // Mettre à jour l'heure en temps réel
    function updateRealTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('fr-FR');
        if (realTime) {
            realTime.textContent = timeString;
        }
    }
    
    setInterval(updateRealTime, 1000);
    
    // Ajouter l'animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-group {
            opacity: 0;
        }
        
        /* Animation spéciale pour nouveau paiement */
        @keyframes newPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }
        
        .shop-title {
            animation: newPulse 2s infinite;
        }
    `;
    document.head.appendChild(style);
    
    // Remplir avec des données d'exemple
    window.fillExampleData = function() {
        if (amountInput) amountInput.value = '149.99';
        if (refInput) refInput.value = generateReference();
        if (methodSelect) methodSelect.value = 'card';
        if (statusSelect) statusSelect.value = 'success';
        
        // Date actuelle
        const now = new Date();
        const dateString = now.toISOString().slice(0, 16);
        if (dateInput) dateInput.value = dateString;
        
        // Sélectionner le premier article s'il existe
        if (shopItemSelect && shopItemSelect.options.length > 1) {
            shopItemSelect.selectedIndex = 1;
        }
        
        updatePreview();
        
        // Animation de confirmation
        const btn = event.target.closest('button');
        if (btn) {
            btn.innerHTML = '<i class=\"fas fa-check\"></i> EXEMPLE APPLIQUÉ';
            btn.style.background = 'var(--neon-green)';
            btn.style.color = 'black';
            btn.style.borderColor = 'var(--neon-green)';
            
            setTimeout(() => {
                btn.innerHTML = '<i class=\"fas fa-magic\"></i> REMPLIR EXEMPLE';
                btn.style.background = '';
                btn.style.color = '';
                btn.style.borderColor = '';
            }, 2000);
        }
    };
    
    // Effacer le formulaire
    window.clearForm = function() {
        if (confirm('⚠️ Voulez-vous vraiment effacer tous les champs ?')) {
            if (amountInput) amountInput.value = '';
            if (refInput) refInput.value = '';
            if (methodSelect) methodSelect.value = '';
            if (statusSelect) statusSelect.value = '';
            if (dateInput) dateInput.value = '';
            if (shopItemSelect) shopItemSelect.selectedIndex = 0;
            
            updatePreview();
            
            // Animation de confirmation
            const btn = event.target.closest('button');
            if (btn) {
                btn.innerHTML = '<i class=\"fas fa-check\"></i> FORMULAIRE VIDÉ';
                btn.style.background = '#777';
                btn.style.color = 'black';
                btn.style.borderColor = '#777';
                
                setTimeout(() => {
                    btn.innerHTML = '<i class=\"fas fa-broom\"></i> EFFACER TOUT';
                    btn.style.background = '';
                    btn.style.color = '';
                    btn.style.borderColor = '';
                }, 2000);
            }
        }
    };
    
    // Confirmation avant envoi
    const form = document.getElementById('payment-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            // Validation basique
            if (!amountInput.value || !refInput.value || !shopItemSelect.value) {
                alert('⚠️ Veuillez remplir tous les champs obligatoires !');
                e.preventDefault();
                return false;
            }
            
            const amount = parseFloat(amountInput.value);
            if (isNaN(amount) || amount <= 0) {
                alert('⚠️ Le montant doit être un nombre positif !');
                e.preventDefault();
                return false;
            }
            
            const status = statusSelect ? statusSelect.value : '';
            if (status === 'failed') {
                if (!confirm('⚠️ Vous êtes sur le point de créer un paiement ÉCHOUÉ. Voulez-vous continuer ?')) {
                    e.preventDefault();
                    return false;
                }
            }
            
            // Animation de chargement
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> CRÉATION EN COURS...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 3000);
        });
    }
});
</script>
{% endblock %}", "payment/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\payment\\new.html.twig");
    }
}
