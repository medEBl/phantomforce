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

/* payment/edit.html.twig */
class __TwigTemplate_0f2bfcc8d8079a77d8a9cd088952acc3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/edit.html.twig"));

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

        yield "🔥 ÉDITION PAIEMENT - PHANTOM SHOP";
        
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
        <h1 class=\"shop-title\">🔥 <span>ÉDITION PAIEMENT</span> 🔥</h1>
        <p class=\"shop-subtitle\">MODIFICATION • TRANSACTION #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield " • MISE À JOUR</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_index");
        yield "\" class=\"neon-btn red\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR LISTE
            </a>
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"neon-btn blue\">
                <i class=\"fas fa-eye\"></i> VOIR DÉTAILS
            </a>
            <button type=\"submit\" form=\"payment-form\" class=\"neon-btn green\">
                <i class=\"fas fa-save\"></i> SAUVEGARDER
            </button>
        </div>
    </div>

    <!-- DEUX COLONNES CÔTE À CÔTE -->
    <div class=\"dual-columns\">
        <!-- COLONNE GAUCHE : FORMULAIRE -->
        <div class=\"column left-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-edit\"></i> MODIFIER LE PAIEMENT</h2>
                <span class=\"badge-count\">ID: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"form-container\">
                ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["class" => "neon-form", "id" => "payment-form"]]);
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
                                Article
                            </label>
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "shopItem", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "neon-select"]]);
        // line 52
        yield "
                            <div class=\"form-error\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "shopItem", [], "any", false, false, false, 53), 'errors');
        yield "</div>
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
                                Montant (€)
                            </label>
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "amount", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "Ex: 99.99"]]);
        // line 73
        yield "
                            <div class=\"form-error\">";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "amount", [], "any", false, false, false, 74), 'errors');
        yield "</div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-hashtag\"></i>
                                Référence
                            </label>
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "transactionRef", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => ("Ex: TRX" . Twig\Extension\CoreExtension::random($this->env->getCharset(), 100000, 999999))]]);
        // line 85
        yield "
                            <div class=\"form-error\">";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "transactionRef", [], "any", false, false, false, 86), 'errors');
        yield "</div>
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
                                Méthode de paiement
                            </label>
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "paymentMethod", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "neon-select"]]);
        // line 105
        yield "
                            <div class=\"form-error\">";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "paymentMethod", [], "any", false, false, false, 106), 'errors');
        yield "</div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-check-circle\"></i>
                                Statut
                            </label>
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "paymentStatus", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "neon-select"]]);
        // line 116
        yield "
                            <div class=\"form-error\">";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "paymentStatus", [], "any", false, false, false, 117), 'errors');
        yield "</div>
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
                                Date du paiement
                            </label>
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "paymentDate", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "neon-input datetime-picker"]]);
        // line 136
        yield "
                            <div class=\"form-error\">";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "paymentDate", [], "any", false, false, false, 137), 'errors');
        yield "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"form-btn save-btn\">
                        <i class=\"fas fa-save\"></i>
                        METTRE À JOUR
                    </button>
                    <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_index");
        yield "\" class=\"form-btn cancel-btn\">
                        <i class=\"fas fa-times\"></i>
                        ANNULER
                    </a>
                </div>
                
                ";
        // line 153
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <!-- COLONNE DROITE : PRÉVISUALISATION -->
        <div class=\"column right-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-eye\"></i> PRÉVISUALISATION</h2>
                <span class=\"badge-count\" id=\"live-status\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 161, $this->source); })()), "paymentStatus", [], "any", false, false, false, 161)), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"preview-container\">
                <div class=\"preview-card ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 165, $this->source); })()), "paymentStatus", [], "any", false, false, false, 165), "html", null, true);
        yield "\" id=\"payment-preview\">
                    <div class=\"preview-header\">
                        <div class=\"preview-id\">
                            <i class=\"fas fa-hashtag\"></i>
                            <span id=\"preview-ref\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 169, $this->source); })()), "transactionRef", [], "any", false, false, false, 169), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"preview-status ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 171, $this->source); })()), "paymentStatus", [], "any", false, false, false, 171), "html", null, true);
        yield "\" id=\"preview-status\">
                            ";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 172, $this->source); })()), "paymentStatus", [], "any", false, false, false, 172)), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    <div class=\"preview-body\">
                        <div class=\"preview-amount\" id=\"preview-amount\">
                            ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 178, $this->source); })()), "amount", [], "any", false, false, false, 178), 2, ",", " "), "html", null, true);
        yield " €
                        </div>
                        
                        <div class=\"preview-details\">
                            <div class=\"detail\">
                                <span class=\"label\">ARTICLE:</span>
                                <span class=\"value\" id=\"preview-item\">
                                    ";
        // line 185
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 185, $this->source); })()), "shopItem", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 186
            yield "                                        <i class=\"fas fa-cube\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 186, $this->source); })()), "shopItem", [], "any", false, false, false, 186), "itemName", [], "any", false, false, false, 186), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 186, $this->source); })()), "shopItem", [], "any", false, false, false, 186), "totalPrice", [], "any", false, false, false, 186), 2, ",", " "), "html", null, true);
            yield " €
                                    ";
        } else {
            // line 188
            yield "                                        <i class=\"fas fa-cube\"></i> Aucun
                                    ";
        }
        // line 190
        yield "                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">MÉTHODE:</span>
                                <span class=\"value\" id=\"preview-method\">
                                    ";
        // line 195
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 195, $this->source); })()), "paymentMethod", [], "any", false, false, false, 195) == "card")) {
            // line 196
            yield "                                        <i class=\"fas fa-credit-card\"></i> CARTE
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 197
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 197, $this->source); })()), "paymentMethod", [], "any", false, false, false, 197) == "paypal")) {
            // line 198
            yield "                                        <i class=\"fab fa-paypal\"></i> PAYPAL
                                    ";
        } else {
            // line 200
            yield "                                        <i class=\"fas fa-wallet\"></i> WALLET
                                    ";
        }
        // line 202
        yield "                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">DATE:</span>
                                <span class=\"value\" id=\"preview-date\">
                                    ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 207, $this->source); })()), "paymentDate", [], "any", false, false, false, 207), "d/m/Y H:i"), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"preview-footer\">
                        <div class=\"info-note\">
                            <i class=\"fas fa-info-circle\"></i>
                            Les modifications seront appliquées après sauvegarde
                        </div>
                    </div>
                </div>
                
                <!-- ACTIONS DANGEREUSES -->
                <div class=\"danger-zone\">
                    <h3 class=\"danger-title\">
                        <i class=\"fas fa-skull-crossbones\"></i>
                        ZONE DE DANGER
                    </h3>
                    
                    <div class=\"danger-actions\">
                        <button type=\"button\" class=\"danger-btn delete-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <i class=\"fas fa-trash\"></i>
                            SUPPRIMER CE PAIEMENT
                        </button>
                        
                        <a href=\"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_new");
        yield "\" class=\"danger-btn duplicate-btn\">
                            <i class=\"fas fa-copy\"></i>
                            DUPLIQUER
                        </a>
                    </div>
                    
                    <div class=\"danger-warning\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <span>La suppression est définitive et irréversible</span>
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
                                <div class=\"stat-label\">CRÉÉ LE</div>
                                <div class=\"stat-value\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 260, $this->source); })()), "paymentDate", [], "any", false, false, false, 260), "d/m/Y"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-preview\">
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-history\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-label\">MODIFIÉ</div>
                                <div class=\"stat-value\">Maintenant</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content aggressive-modal\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle neon-text red\"></i>
                    CONFIRMER LA SUPPRESSION
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"warning-message\">
                    <i class=\"fas fa-radiation fa-2x\"></i>
                    <h4>ATTENTION : ACTION IRRÉVERSIBLE</h4>
                    <p>Vous êtes sur le point de supprimer définitivement ce paiement.</p>
                </div>
                
                <div class=\"payment-details-modal\">
                    <div class=\"detail-modal\">
                        <span class=\"label\">Référence:</span>
                        <span class=\"value\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 301, $this->source); })()), "transactionRef", [], "any", false, false, false, 301), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Montant:</span>
                        <span class=\"value\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 305, $this->source); })()), "amount", [], "any", false, false, false, 305), 2, ",", " "), "html", null, true);
        yield " €</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Date:</span>
                        <span class=\"value\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 309, $this->source); })()), "paymentDate", [], "any", false, false, false, 309), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Article:</span>
                        <span class=\"value\">
                            ";
        // line 314
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 314, $this->source); })()), "shopItem", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 315
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 315, $this->source); })()), "shopItem", [], "any", false, false, false, 315), "itemName", [], "any", false, false, false, 315), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 315, $this->source); })()), "shopItem", [], "any", false, false, false, 315), "totalPrice", [], "any", false, false, false, 315), 2, ",", " "), "html", null, true);
            yield " €)
                            ";
        } else {
            // line 317
            yield "                                Aucun
                            ";
        }
        // line 319
        yield "                        </span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Statut:</span>
                        <span class=\"value ";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 323, $this->source); })()), "paymentStatus", [], "any", false, false, false, 323), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 323, $this->source); })()), "paymentStatus", [], "any", false, false, false, 323)), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <div class=\"confirmation-text\">
                    <i class=\"fas fa-question-circle\"></i>
                    <strong>Êtes-vous absolument sûr de vouloir continuer ?</strong>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-modal btn-cancel\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times\"></i> ANNULER
                </button>
                ";
        // line 336
        yield Twig\Extension\CoreExtension::include($this->env, $context, "payment/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À L'ÉDITION -->
<style>
/* FORMULAIRE */
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

/* DANGER ZONE */
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

/* MODAL */
.aggressive-modal {
    background: rgba(20, 20, 30, 0.95);
    border: 3px solid var(--neon-red);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 50px rgba(255, 0, 51, 0.5);
    animation: modalAppear 0.3s ease-out;
}

@keyframes modalAppear {
    from {
        opacity: 0;
        transform: scale(0.9) translateY(-20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.modal-header {
    border-bottom: 2px solid rgba(255, 0, 51, 0.3);
    padding: 20px 30px;
}

.modal-title {
    color: var(--neon-red);
    font-size: 1.3rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.btn-close {
    filter: invert(1) brightness(2);
    opacity: 0.7;
}

.btn-close:hover {
    opacity: 1;
}

.modal-body {
    padding: 30px;
}

.warning-message {
    text-align: center;
    margin-bottom: 25px;
    padding: 20px;
    background: rgba(255, 0, 51, 0.1);
    border-radius: 10px;
    border: 2px solid rgba(255, 0, 51, 0.3);
}

.warning-message i {
    color: var(--neon-red);
    margin-bottom: 15px;
}

.warning-message h4 {
    color: var(--neon-red);
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.warning-message p {
    color: #aaa;
    margin: 0;
}

.payment-details-modal {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 25px;
    border: 1px solid rgba(255, 0, 51, 0.2);
}

.detail-modal {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-modal:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.detail-modal .label {
    color: #777;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.9rem;
}

.detail-modal .value {
    color: white;
    font-weight: 700;
    font-size: 1rem;
}

.detail-modal .value.success {
    color: var(--neon-green);
}

.detail-modal .value.pending {
    color: var(--neon-yellow);
}

.detail-modal .value.failed {
    color: var(--neon-red);
}

.confirmation-text {
    background: rgba(255, 0, 51, 0.15);
    border-radius: 8px;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    color: var(--neon-red);
    font-weight: 700;
    text-align: center;
    border: 1px solid rgba(255, 0, 51, 0.3);
}

.modal-footer {
    border-top: 2px solid rgba(255, 0, 51, 0.3);
    padding: 20px 30px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn-modal {
    padding: 12px 30px;
    border: 2px solid;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-cancel {
    background: rgba(255, 255, 255, 0.1);
    border-color: #777;
    color: #777;
}

.btn-cancel:hover {
    background: #777;
    color: black;
    transform: translateY(-2px);
}

.delete-form {
    display: inline;
}

.delete-form button {
    background: var(--neon-red);
    border: 2px solid var(--neon-red);
    color: black;
    padding: 12px 30px;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.delete-form button:hover {
    background: transparent;
    color: var(--neon-red);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 0, 51, 0.4);
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
        if (refInput && refInput.value) {
            previewRef.textContent = refInput.value;
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
    `;
    document.head.appendChild(style);
    
    // Confirmation avant envoi
    const form = document.getElementById('payment-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const status = statusSelect ? statusSelect.value : '';
            if (status === 'failed') {
                if (!confirm('⚠️ Vous êtes sur le point de marquer ce paiement comme ÉCHOUÉ. Voulez-vous continuer ?')) {
                    e.preventDefault();
                    return false;
                }
            }
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
        return "payment/edit.html.twig";
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
        return array (  554 => 336,  536 => 323,  530 => 319,  526 => 317,  518 => 315,  516 => 314,  508 => 309,  501 => 305,  494 => 301,  450 => 260,  421 => 234,  391 => 207,  384 => 202,  380 => 200,  376 => 198,  374 => 197,  371 => 196,  369 => 195,  362 => 190,  358 => 188,  350 => 186,  348 => 185,  338 => 178,  329 => 172,  325 => 171,  320 => 169,  313 => 165,  306 => 161,  295 => 153,  286 => 147,  273 => 137,  270 => 136,  268 => 134,  248 => 117,  245 => 116,  243 => 114,  232 => 106,  229 => 105,  227 => 103,  207 => 86,  204 => 85,  202 => 82,  191 => 74,  188 => 73,  186 => 70,  166 => 53,  163 => 52,  161 => 50,  144 => 36,  137 => 32,  119 => 17,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🔥 ÉDITION PAIEMENT - PHANTOM SHOP{% endblock %}

{% block body %}
<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🔥 <span>ÉDITION PAIEMENT</span> 🔥</h1>
        <p class=\"shop-subtitle\">MODIFICATION • TRANSACTION #{{ payment.id }} • MISE À JOUR</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"{{ path('app_payment_index') }}\" class=\"neon-btn red\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR LISTE
            </a>
            <a href=\"{{ path('app_payment_show', {'id': payment.id}) }}\" class=\"neon-btn blue\">
                <i class=\"fas fa-eye\"></i> VOIR DÉTAILS
            </a>
            <button type=\"submit\" form=\"payment-form\" class=\"neon-btn green\">
                <i class=\"fas fa-save\"></i> SAUVEGARDER
            </button>
        </div>
    </div>

    <!-- DEUX COLONNES CÔTE À CÔTE -->
    <div class=\"dual-columns\">
        <!-- COLONNE GAUCHE : FORMULAIRE -->
        <div class=\"column left-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-edit\"></i> MODIFIER LE PAIEMENT</h2>
                <span class=\"badge-count\">ID: {{ payment.id }}</span>
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
                                Article
                            </label>
                            {{ form_widget(form.shopItem, {'attr': {
                                'class': 'neon-select'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.shopItem) }}</div>
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
                                Montant (€)
                            </label>
                            {{ form_widget(form.amount, {'attr': {
                                'class': 'neon-input',
                                'placeholder': 'Ex: 99.99'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.amount) }}</div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-hashtag\"></i>
                                Référence
                            </label>
                            {{ form_widget(form.transactionRef, {'attr': {
                                'class': 'neon-input',
                                'placeholder': 'Ex: TRX' ~ random(100000, 999999)
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.transactionRef) }}</div>
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
                                Méthode de paiement
                            </label>
                            {{ form_widget(form.paymentMethod, {'attr': {
                                'class': 'neon-select'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.paymentMethod) }}</div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"form-label\">
                                <i class=\"fas fa-check-circle\"></i>
                                Statut
                            </label>
                            {{ form_widget(form.paymentStatus, {'attr': {
                                'class': 'neon-select'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.paymentStatus) }}</div>
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
                                Date du paiement
                            </label>
                            {{ form_widget(form.paymentDate, {'attr': {
                                'class': 'neon-input datetime-picker'
                            }}) }}
                            <div class=\"form-error\">{{ form_errors(form.paymentDate) }}</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"form-btn save-btn\">
                        <i class=\"fas fa-save\"></i>
                        METTRE À JOUR
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
                <span class=\"badge-count\" id=\"live-status\">{{ payment.paymentStatus|upper }}</span>
            </div>
            
            <div class=\"preview-container\">
                <div class=\"preview-card {{ payment.paymentStatus }}\" id=\"payment-preview\">
                    <div class=\"preview-header\">
                        <div class=\"preview-id\">
                            <i class=\"fas fa-hashtag\"></i>
                            <span id=\"preview-ref\">{{ payment.transactionRef }}</span>
                        </div>
                        <div class=\"preview-status {{ payment.paymentStatus }}\" id=\"preview-status\">
                            {{ payment.paymentStatus|upper }}
                        </div>
                    </div>
                    
                    <div class=\"preview-body\">
                        <div class=\"preview-amount\" id=\"preview-amount\">
                            {{ payment.amount|number_format(2, ',', ' ') }} €
                        </div>
                        
                        <div class=\"preview-details\">
                            <div class=\"detail\">
                                <span class=\"label\">ARTICLE:</span>
                                <span class=\"value\" id=\"preview-item\">
                                    {% if payment.shopItem %}
                                        <i class=\"fas fa-cube\"></i> {{ payment.shopItem.itemName }} - {{ payment.shopItem.totalPrice|number_format(2, ',', ' ') }} €
                                    {% else %}
                                        <i class=\"fas fa-cube\"></i> Aucun
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">MÉTHODE:</span>
                                <span class=\"value\" id=\"preview-method\">
                                    {% if payment.paymentMethod == 'card' %}
                                        <i class=\"fas fa-credit-card\"></i> CARTE
                                    {% elseif payment.paymentMethod == 'paypal' %}
                                        <i class=\"fab fa-paypal\"></i> PAYPAL
                                    {% else %}
                                        <i class=\"fas fa-wallet\"></i> WALLET
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"detail\">
                                <span class=\"label\">DATE:</span>
                                <span class=\"value\" id=\"preview-date\">
                                    {{ payment.paymentDate|date('d/m/Y H:i') }}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"preview-footer\">
                        <div class=\"info-note\">
                            <i class=\"fas fa-info-circle\"></i>
                            Les modifications seront appliquées après sauvegarde
                        </div>
                    </div>
                </div>
                
                <!-- ACTIONS DANGEREUSES -->
                <div class=\"danger-zone\">
                    <h3 class=\"danger-title\">
                        <i class=\"fas fa-skull-crossbones\"></i>
                        ZONE DE DANGER
                    </h3>
                    
                    <div class=\"danger-actions\">
                        <button type=\"button\" class=\"danger-btn delete-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <i class=\"fas fa-trash\"></i>
                            SUPPRIMER CE PAIEMENT
                        </button>
                        
                        <a href=\"{{ path('app_payment_new') }}\" class=\"danger-btn duplicate-btn\">
                            <i class=\"fas fa-copy\"></i>
                            DUPLIQUER
                        </a>
                    </div>
                    
                    <div class=\"danger-warning\">
                        <i class=\"fas fa-exclamation-triangle\"></i>
                        <span>La suppression est définitive et irréversible</span>
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
                                <div class=\"stat-label\">CRÉÉ LE</div>
                                <div class=\"stat-value\">{{ payment.paymentDate|date('d/m/Y') }}</div>
                            </div>
                        </div>
                        
                        <div class=\"stat-preview\">
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-history\"></i>
                            </div>
                            <div class=\"stat-content\">
                                <div class=\"stat-label\">MODIFIÉ</div>
                                <div class=\"stat-value\">Maintenant</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content aggressive-modal\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle neon-text red\"></i>
                    CONFIRMER LA SUPPRESSION
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"warning-message\">
                    <i class=\"fas fa-radiation fa-2x\"></i>
                    <h4>ATTENTION : ACTION IRRÉVERSIBLE</h4>
                    <p>Vous êtes sur le point de supprimer définitivement ce paiement.</p>
                </div>
                
                <div class=\"payment-details-modal\">
                    <div class=\"detail-modal\">
                        <span class=\"label\">Référence:</span>
                        <span class=\"value\">{{ payment.transactionRef }}</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Montant:</span>
                        <span class=\"value\">{{ payment.amount|number_format(2, ',', ' ') }} €</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Date:</span>
                        <span class=\"value\">{{ payment.paymentDate|date('d/m/Y H:i') }}</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Article:</span>
                        <span class=\"value\">
                            {% if payment.shopItem %}
                                {{ payment.shopItem.itemName }} ({{ payment.shopItem.totalPrice|number_format(2, ',', ' ') }} €)
                            {% else %}
                                Aucun
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Statut:</span>
                        <span class=\"value {{ payment.paymentStatus }}\">{{ payment.paymentStatus|upper }}</span>
                    </div>
                </div>
                
                <div class=\"confirmation-text\">
                    <i class=\"fas fa-question-circle\"></i>
                    <strong>Êtes-vous absolument sûr de vouloir continuer ?</strong>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-modal btn-cancel\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times\"></i> ANNULER
                </button>
                {{ include('payment/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À L'ÉDITION -->
<style>
/* FORMULAIRE */
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

/* DANGER ZONE */
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

/* MODAL */
.aggressive-modal {
    background: rgba(20, 20, 30, 0.95);
    border: 3px solid var(--neon-red);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 50px rgba(255, 0, 51, 0.5);
    animation: modalAppear 0.3s ease-out;
}

@keyframes modalAppear {
    from {
        opacity: 0;
        transform: scale(0.9) translateY(-20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}

.modal-header {
    border-bottom: 2px solid rgba(255, 0, 51, 0.3);
    padding: 20px 30px;
}

.modal-title {
    color: var(--neon-red);
    font-size: 1.3rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.btn-close {
    filter: invert(1) brightness(2);
    opacity: 0.7;
}

.btn-close:hover {
    opacity: 1;
}

.modal-body {
    padding: 30px;
}

.warning-message {
    text-align: center;
    margin-bottom: 25px;
    padding: 20px;
    background: rgba(255, 0, 51, 0.1);
    border-radius: 10px;
    border: 2px solid rgba(255, 0, 51, 0.3);
}

.warning-message i {
    color: var(--neon-red);
    margin-bottom: 15px;
}

.warning-message h4 {
    color: var(--neon-red);
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.warning-message p {
    color: #aaa;
    margin: 0;
}

.payment-details-modal {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 25px;
    border: 1px solid rgba(255, 0, 51, 0.2);
}

.detail-modal {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-modal:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.detail-modal .label {
    color: #777;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.9rem;
}

.detail-modal .value {
    color: white;
    font-weight: 700;
    font-size: 1rem;
}

.detail-modal .value.success {
    color: var(--neon-green);
}

.detail-modal .value.pending {
    color: var(--neon-yellow);
}

.detail-modal .value.failed {
    color: var(--neon-red);
}

.confirmation-text {
    background: rgba(255, 0, 51, 0.15);
    border-radius: 8px;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    color: var(--neon-red);
    font-weight: 700;
    text-align: center;
    border: 1px solid rgba(255, 0, 51, 0.3);
}

.modal-footer {
    border-top: 2px solid rgba(255, 0, 51, 0.3);
    padding: 20px 30px;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn-modal {
    padding: 12px 30px;
    border: 2px solid;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-cancel {
    background: rgba(255, 255, 255, 0.1);
    border-color: #777;
    color: #777;
}

.btn-cancel:hover {
    background: #777;
    color: black;
    transform: translateY(-2px);
}

.delete-form {
    display: inline;
}

.delete-form button {
    background: var(--neon-red);
    border: 2px solid var(--neon-red);
    color: black;
    padding: 12px 30px;
    border-radius: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.delete-form button:hover {
    background: transparent;
    color: var(--neon-red);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 0, 51, 0.4);
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
        if (refInput && refInput.value) {
            previewRef.textContent = refInput.value;
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
    `;
    document.head.appendChild(style);
    
    // Confirmation avant envoi
    const form = document.getElementById('payment-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const status = statusSelect ? statusSelect.value : '';
            if (status === 'failed') {
                if (!confirm('⚠️ Vous êtes sur le point de marquer ce paiement comme ÉCHOUÉ. Voulez-vous continuer ?')) {
                    e.preventDefault();
                    return false;
                }
            }
        });
    }
});
</script>
{% endblock %}", "payment/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\payment\\edit.html.twig");
    }
}
