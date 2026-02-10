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

/* payment/show.html.twig */
class __TwigTemplate_fc17c0c58e1453e483800228e8688391 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/show.html.twig"));

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

        yield "🔥 DÉTAILS PAIEMENT - PHANTOM SHOP";
        
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
        <h1 class=\"shop-title\">🔥 <span>DÉTAILS PAIEMENT</span> 🔥</h1>
        <p class=\"shop-subtitle\">TRANSACTION #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 10, $this->source); })()), "paymentDate", [], "any", false, false, false, 10), "d/m/Y H:i"), "html", null, true);
        yield "</p>
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"neon-btn blue\">
                <i class=\"fas fa-edit\"></i> MODIFIER
            </a>
            <button type=\"button\" class=\"neon-btn purple\" onclick=\"window.print()\">
                <i class=\"fas fa-print\"></i> IMPRIMER
            </button>
            <button type=\"button\" class=\"neon-btn green\" onclick=\"copyToClipboard()\">
                <i class=\"fas fa-copy\"></i> COPIER REF
            </button>
        </div>
    </div>

    <!-- DEUX COLONNES CÔTE À CÔTE -->
    <div class=\"dual-columns\">
        <!-- COLONNE GAUCHE : INFORMATIONS DÉTAILLÉES -->
        <div class=\"column left-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-info-circle\"></i> INFORMATIONS DE LA TRANSACTION</h2>
                <span class=\"badge-count\">ID: ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "</span>
            </div>
            
            <div class=\"details-container\">
                <!-- CARTE STATUT -->
                <div class=\"detail-card status-card ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 40, $this->source); })()), "paymentStatus", [], "any", false, false, false, 40), "html", null, true);
        yield "\">
                    <div class=\"detail-card-header\">
                        <h3>
                            <i class=\"fas fa-";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 43, $this->source); })()), "paymentStatus", [], "any", false, false, false, 43) == "success")) ? ("check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 43, $this->source); })()), "paymentStatus", [], "any", false, false, false, 43) == "pending")) ? ("clock") : ("times-circle"))));
        yield "\"></i>
                            STATUT DU PAIEMENT
                        </h3>
                        <span class=\"detail-status ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 46, $this->source); })()), "paymentStatus", [], "any", false, false, false, 46), "html", null, true);
        yield "\">
                            ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 47, $this->source); })()), "paymentStatus", [], "any", false, false, false, 47)), "html", null, true);
        yield "
                        </span>
                    </div>
                    <div class=\"detail-card-body\">
                        <div class=\"status-message\">
                            ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 52, $this->source); })()), "paymentStatus", [], "any", false, false, false, 52) == "success")) {
            // line 53
            yield "                                <i class=\"fas fa-check-circle fa-3x\"></i>
                                <h4>PAIEMENT RÉUSSI</h4>
                                <p>Le paiement a été traité avec succès</p>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 56
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 56, $this->source); })()), "paymentStatus", [], "any", false, false, false, 56) == "pending")) {
            // line 57
            yield "                                <i class=\"fas fa-clock fa-3x\"></i>
                                <h4>PAIEMENT EN ATTENTE</h4>
                                <p>En attente de confirmation</p>
                            ";
        } else {
            // line 61
            yield "                                <i class=\"fas fa-times-circle fa-3x\"></i>
                                <h4>PAIEMENT ÉCHOUÉ</h4>
                                <p>Le paiement n'a pas abouti</p>
                            ";
        }
        // line 65
        yield "                        </div>
                    </div>
                </div>
                
                <!-- INFORMATIONS FINANCIÈRES -->
                <div class=\"detail-card\">
                    <div class=\"detail-card-header\">
                        <h3><i class=\"fas fa-money-bill-wave\"></i> INFORMATIONS FINANCIÈRES</h3>
                    </div>
                    <div class=\"detail-card-body\">
                        <div class=\"detail-grid\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-hashtag\"></i>
                                    Référence Transaction
                                </span>
                                <span class=\"detail-value\" id=\"transaction-ref\">
                                    ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 82, $this->source); })()), "transactionRef", [], "any", false, false, false, 82), "html", null, true);
        yield "
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-euro-sign\"></i>
                                    Montant
                                </span>
                                <span class=\"detail-value amount-value\">
                                    ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 91, $this->source); })()), "amount", [], "any", false, false, false, 91), 2, ",", " "), "html", null, true);
        yield " €
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-credit-card\"></i>
                                    Méthode de Paiement
                                </span>
                                <span class=\"detail-value method-value\">
                                    ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 100, $this->source); })()), "paymentMethod", [], "any", false, false, false, 100) == "card")) {
            // line 101
            yield "                                        <i class=\"fas fa-credit-card\"></i> CARTE BANCAIRE
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 102, $this->source); })()), "paymentMethod", [], "any", false, false, false, 102) == "paypal")) {
            // line 103
            yield "                                        <i class=\"fab fa-paypal\"></i> PAYPAL
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 104
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 104, $this->source); })()), "paymentMethod", [], "any", false, false, false, 104) == "wallet")) {
            // line 105
            yield "                                        <i class=\"fas fa-wallet\"></i> PORTE-MONNAIE
                                    ";
        } else {
            // line 107
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 107, $this->source); })()), "paymentMethod", [], "any", false, false, false, 107)), "html", null, true);
            yield "
                                    ";
        }
        // line 109
        yield "                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DATE ET HEURE -->
                <div class=\"detail-card\">
                    <div class=\"detail-card-header\">
                        <h3><i class=\"far fa-calendar\"></i> DATE ET HEURE</h3>
                    </div>
                    <div class=\"detail-card-body\">
                        <div class=\"detail-grid\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-calendar-day\"></i>
                                    Date
                                </span>
                                <span class=\"detail-value\">
                                    ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 128, $this->source); })()), "paymentDate", [], "any", false, false, false, 128), "d/m/Y"), "html", null, true);
        yield "
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-clock\"></i>
                                    Heure
                                </span>
                                <span class=\"detail-value\">
                                    ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 137, $this->source); })()), "paymentDate", [], "any", false, false, false, 137), "H:i:s"), "html", null, true);
        yield "
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-history\"></i>
                                    Durée
                                </span>
                                <span class=\"detail-value\" id=\"time-ago\">
                                    <!-- Calculé en JavaScript -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ACTIONS -->
                <div class=\"action-buttons\">
                    <a href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)]), "html", null, true);
        yield "\" class=\"action-btn edit-btn\">
                        <i class=\"fas fa-edit\"></i>
                        MODIFIER CE PAIEMENT
                    </a>
                    <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_new");
        yield "\" class=\"action-btn duplicate-btn\">
                        <i class=\"fas fa-copy\"></i>
                        DUPLIQUER
                    </a>
                    <button type=\"button\" class=\"action-btn delete-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <i class=\"fas fa-trash\"></i>
                        SUPPRIMER
                    </button>
                </div>
            </div>
        </div>

        <!-- COLONNE DROITE : STATISTIQUES ET RÉSUMÉ -->
        <div class=\"column right-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-chart-bar\"></i> RÉSUMÉ & ANALYSE</h2>
                <span class=\"badge-count\">RÉCAP</span>
            </div>
            
            <div class=\"preview-container\">
                <!-- CARTE RÉSUMÉ -->
                <div class=\"summary-card ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 180, $this->source); })()), "paymentStatus", [], "any", false, false, false, 180), "html", null, true);
        yield "\">
                    <div class=\"summary-header\">
                        <div class=\"summary-title\">
                            <i class=\"fas fa-receipt\"></i>
                            RÉSUMÉ DE LA TRANSACTION
                        </div>
                        <div class=\"summary-status ";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 186, $this->source); })()), "paymentStatus", [], "any", false, false, false, 186), "html", null, true);
        yield "\">
                            ";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 187, $this->source); })()), "paymentStatus", [], "any", false, false, false, 187)), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    <div class=\"summary-body\">
                        <div class=\"summary-amount\">
                            ";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 193, $this->source); })()), "amount", [], "any", false, false, false, 193), 2, ",", " "), "html", null, true);
        yield " €
                        </div>
                        
                        <div class=\"summary-details\">
                            <div class=\"summary-item\">
                                <span class=\"item-label\">ID:</span>
                                <span class=\"item-value\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"summary-item\">
                                <span class=\"item-label\">RÉFÉRENCE:</span>
                                <span class=\"item-value\">";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 203, $this->source); })()), "transactionRef", [], "any", false, false, false, 203), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"summary-item\">
                                <span class=\"item-label\">MÉTHODE:</span>
                                <span class=\"item-value\">
                                    ";
        // line 208
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 208, $this->source); })()), "paymentMethod", [], "any", false, false, false, 208) == "card")) {
            // line 209
            yield "                                        CARTE
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 210
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 210, $this->source); })()), "paymentMethod", [], "any", false, false, false, 210) == "paypal")) {
            // line 211
            yield "                                        PAYPAL
                                    ";
        } else {
            // line 213
            yield "                                        WALLET
                                    ";
        }
        // line 215
        yield "                                </span>
                            </div>
                            <div class=\"summary-item\">
                                <span class=\"item-label\">DATE:</span>
                                <span class=\"item-value\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 219, $this->source); })()), "paymentDate", [], "any", false, false, false, 219), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"summary-footer\">
                        <div class=\"verification-badge\">
                            <i class=\"fas fa-shield-alt\"></i>
                            <span>TRANSACTION VERIFIÉE</span>
                        </div>
                    </div>
                </div>
                
                <!-- CODE QR POUR PARTAGE -->
                <div class=\"qr-section\">
                    <h3 class=\"qr-title\">
                        <i class=\"fas fa-qrcode\"></i>
                        CODE QR DE LA TRANSACTION
                    </h3>
                    <div class=\"qr-container\">
                        <div class=\"qr-code\" id=\"qr-code\">
                            <!-- QR Code généré en JS -->
                            <div class=\"qr-placeholder\">
                                <i class=\"fas fa-qrcode fa-4x\"></i>
                                <p>Génération du QR Code...</p>
                            </div>
                        </div>
                        <div class=\"qr-info\">
                            <p>Scannez ce code pour accéder rapidement aux détails de cette transaction</p>
                            <button class=\"qr-btn\" onclick=\"downloadQRCode()\">
                                <i class=\"fas fa-download\"></i>
                                TÉLÉCHARGER
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- TIMELINE DE LA TRANSACTION -->
                <div class=\"timeline-section\">
                    <h3 class=\"timeline-title\">
                        <i class=\"fas fa-stream\"></i>
                        TIMELINE DE LA TRANSACTION
                    </h3>
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-marker\">
                                <i class=\"fas fa-check\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <h4>Transaction Créée</h4>
                                <p>";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 269, $this->source); })()), "paymentDate", [], "any", false, false, false, 269), "d/m/Y H:i:s"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"timeline-item ";
        // line 272
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 272, $this->source); })()), "paymentStatus", [], "any", false, false, false, 272) == "success")) ? ("completed") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 272, $this->source); })()), "paymentStatus", [], "any", false, false, false, 272) == "failed")) ? ("failed") : ("active"))));
        yield "\">
                            <div class=\"timeline-marker\">
                                <i class=\"fas fa-";
        // line 274
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 274, $this->source); })()), "paymentStatus", [], "any", false, false, false, 274) == "success")) ? ("check") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 274, $this->source); })()), "paymentStatus", [], "any", false, false, false, 274) == "failed")) ? ("times") : ("clock"))));
        yield "\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <h4>Statut Final</h4>
                                <p>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 278, $this->source); })()), "paymentStatus", [], "any", false, false, false, 278)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"timeline-item future\">
                            <div class=\"timeline-marker\">
                                <i class=\"fas fa-ellipsis-h\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <h4>Prochaine Action</h4>
                                <p>En attente de traitement</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- MÉTADONNÉES -->
                <div class=\"metadata-section\">
                    <h3 class=\"metadata-title\">
                        <i class=\"fas fa-database\"></i>
                        MÉTADONNÉES
                    </h3>
                    <div class=\"metadata-grid\">
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">ID Technique:</span>
                            <span class=\"metadata-value\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 302, $this->source); })()), "id", [], "any", false, false, false, 302), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Type d'Entity:</span>
                            <span class=\"metadata-value\">Payment</span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Dernière Mise à Jour:</span>
                            <span class=\"metadata-value\" id=\"last-updated\">
                                <!-- Calculé en JS -->
                            </span>
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
                    <p>Vous êtes sur le point de supprimer définitivement cette transaction.</p>
                </div>
                
                <div class=\"payment-details-modal\">
                    <div class=\"detail-modal\">
                        <span class=\"label\">Référence:</span>
                        <span class=\"value\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 342, $this->source); })()), "transactionRef", [], "any", false, false, false, 342), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Montant:</span>
                        <span class=\"value\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 346, $this->source); })()), "amount", [], "any", false, false, false, 346), 2, ",", " "), "html", null, true);
        yield " €</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Date:</span>
                        <span class=\"value\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 350, $this->source); })()), "paymentDate", [], "any", false, false, false, 350), "d/m/Y H:i:s"), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Statut:</span>
                        <span class=\"value ";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 354, $this->source); })()), "paymentStatus", [], "any", false, false, false, 354), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 354, $this->source); })()), "paymentStatus", [], "any", false, false, false, 354)), "html", null, true);
        yield "</span>
                    </div>
                </div>
                
                <div class=\"confirmation-text\">
                    <i class=\"fas fa-question-circle\"></i>
                    <strong>Cette action ne peut pas être annulée. Êtes-vous absolument sûr ?</strong>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-modal btn-cancel\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times\"></i> ANNULER
                </button>
                ";
        // line 367
        yield Twig\Extension\CoreExtension::include($this->env, $context, "payment/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À L'AFFICHAGE -->
<style>
/* DÉTAILS */
.details-container {
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.detail-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    transition: all 0.3s;
    animation: fadeIn 0.6s ease-out;
}

.detail-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 243, 255, 0.2);
}

.detail-card.status-card {
    border-width: 3px;
    animation: statusGlow 2s infinite alternate;
}

.detail-card.status-card.success {
    border-color: rgba(0, 255, 65, 0.4);
    background: rgba(0, 255, 65, 0.05);
}

.detail-card.status-card.pending {
    border-color: rgba(255, 204, 0, 0.4);
    background: rgba(255, 204, 0, 0.05);
}

.detail-card.status-card.failed {
    border-color: rgba(255, 0, 51, 0.4);
    background: rgba(255, 0, 51, 0.05);
}

@keyframes statusGlow {
    0% { box-shadow: 0 0 20px rgba(0, 243, 255, 0.1); }
    100% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.3); }
}

.detail-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.2);
}

.detail-card-header h3 {
    color: var(--neon-blue);
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
}

.detail-status {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.detail-status.success {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 2px solid var(--neon-green);
}

.detail-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.detail-status.failed {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

.status-message {
    text-align: center;
    padding: 20px;
}

.status-message i {
    margin-bottom: 15px;
}

.status-message h4 {
    color: white;
    font-size: 1.3rem;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.status-message p {
    color: #aaa;
    margin: 0;
}

.detail-grid {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.detail-label {
    color: #777;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.detail-value {
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    text-align: right;
}

.detail-value.amount-value {
    color: var(--neon-green);
    font-size: 1.3rem;
    font-weight: 900;
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.3);
}

.detail-value.method-value {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1rem;
}

/* ACTIONS */
.action-buttons {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.action-btn {
    flex: 1;
    padding: 15px 20px;
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
    text-align: center;
}

.edit-btn {
    background: rgba(0, 243, 255, 0.2);
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.edit-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 243, 255, 0.4);
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

/* SUMMARY CARD */
.summary-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    animation: summaryGlow 3s infinite alternate;
}

@keyframes summaryGlow {
    0% { box-shadow: 0 0 20px rgba(0, 243, 255, 0.2); }
    100% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.4); }
}

.summary-card.success {
    border-color: rgba(0, 255, 65, 0.4);
}

.summary-card.pending {
    border-color: rgba(255, 204, 0, 0.4);
}

.summary-card.failed {
    border-color: rgba(255, 0, 51, 0.4);
}

.summary-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.2);
}

.summary-title {
    color: var(--neon-blue);
    font-size: 1.1rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}

.summary-status {
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.7rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.summary-status.success {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 1px solid var(--neon-green);
}

.summary-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid var(--neon-yellow);
}

.summary-status.failed {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid var(--neon-red);
}

.summary-body {
    text-align: center;
}

.summary-amount {
    font-size: 2.2rem;
    font-weight: 900;
    color: var(--neon-green);
    margin-bottom: 20px;
    text-shadow: 0 0 15px rgba(0, 255, 65, 0.5);
}

.summary-details {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.summary-item:last-child {
    border-bottom: none;
}

.item-label {
    color: #777;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.item-value {
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
}

.summary-footer {
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid rgba(0, 243, 255, 0.2);
    text-align: center;
}

.verification-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: rgba(0, 243, 255, 0.1);
    border-radius: 20px;
    color: var(--neon-blue);
    font-size: 0.8rem;
    font-weight: 600;
}

/* QR SECTION */
.qr-section {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(157, 0, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
}

.qr-title {
    color: var(--neon-purple);
    font-size: 1.1rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.qr-container {
    display: flex;
    align-items: center;
    gap: 20px;
}

.qr-code {
    width: 150px;
    height: 150px;
    background: white;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border: 3px solid var(--neon-purple);
}

.qr-placeholder {
    text-align: center;
    color: #666;
}

.qr-placeholder i {
    margin-bottom: 10px;
}

.qr-placeholder p {
    font-size: 0.8rem;
    margin: 0;
}

.qr-info {
    flex: 1;
}

.qr-info p {
    color: #aaa;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.qr-btn {
    padding: 10px 20px;
    background: rgba(157, 0, 255, 0.2);
    border: 2px solid var(--neon-purple);
    border-radius: 8px;
    color: var(--neon-purple);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.qr-btn:hover {
    background: var(--neon-purple);
    color: white;
    transform: translateY(-2px);
}

/* TIMELINE */
.timeline-section {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(255, 204, 0, 0.3);
    border-radius: 15px;
    padding: 25px;
}

.timeline-title {
    color: var(--neon-yellow);
    font-size: 1.1rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline:before {
    content: '';
    position: absolute;
    left: 10px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: rgba(255, 204, 0, 0.3);
}

.timeline-item {
    position: relative;
    margin-bottom: 25px;
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    position: absolute;
    left: -30px;
    top: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.7rem;
}

.timeline-item.completed .timeline-marker {
    background: var(--neon-green);
    color: black;
}

.timeline-item.active .timeline-marker {
    background: var(--neon-yellow);
    color: black;
    animation: pulse 2s infinite;
}

.timeline-item.failed .timeline-marker {
    background: var(--neon-red);
    color: white;
}

.timeline-item.future .timeline-marker {
    background: #777;
    color: black;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.timeline-content {
    flex: 1;
}

.timeline-content h4 {
    color: white;
    font-size: 1rem;
    margin: 0 0 5px 0;
    font-weight: 600;
}

.timeline-content p {
    color: #aaa;
    font-size: 0.9rem;
    margin: 0;
}

/* METADATA */
.metadata-section {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 25px;
}

.metadata-title {
    color: #aaa;
    font-size: 1.1rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.metadata-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.metadata-item {
    padding: 12px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.metadata-label {
    display: block;
    color: #777;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}

.metadata-value {
    display: block;
    color: white;
    font-size: 0.9rem;
    font-weight: 600;
    word-break: break-all;
}

/* MODAL (identique aux autres) */
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

@media (max-width: 768px) {
    .action-buttons {
        flex-direction: column;
    }
    
    .qr-container {
        flex-direction: column;
        text-align: center;
    }
    
    .timeline {
        padding-left: 20px;
    }
    
    .timeline:before {
        left: 0;
    }
    
    .timeline-marker {
        left: -20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calculer le temps écoulé depuis la création
    function calculateTimeAgo() {
        const paymentDate = new Date('";
        // line 1205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1205, $this->source); })()), "paymentDate", [], "any", false, false, false, 1205), "Y-m-d H:i:s"), "html", null, true);
        yield "');
        const now = new Date();
        const diff = now - paymentDate;
        
        const seconds = Math.floor(diff / 1000);
        const minutes = Math.floor(seconds / 60);
        const hours = Math.floor(minutes / 60);
        const days = Math.floor(hours / 24);
        
        let timeAgo = '';
        if (days > 0) {
            timeAgo = `Il y a \${days} jour\${days > 1 ? 's' : ''}`;
        } else if (hours > 0) {
            timeAgo = `Il y a \${hours} heure\${hours > 1 ? 's' : ''}`;
        } else if (minutes > 0) {
            timeAgo = `Il y a \${minutes} minute\${minutes > 1 ? 's' : ''}`;
        } else {
            timeAgo = `À l'instant`;
        }
        
        document.getElementById('time-ago').textContent = timeAgo;
    }
    
    // Mettre à jour la dernière mise à jour
    function updateLastUpdated() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('fr-FR', { 
            hour: '2-digit', 
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('last-updated').textContent = `Aujourd'hui à \${timeString}`;
    }
    
    // Copier la référence dans le presse-papier
    window.copyToClipboard = function() {
        const ref = '";
        // line 1241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1241, $this->source); })()), "transactionRef", [], "any", false, false, false, 1241), "html", null, true);
        yield "';
        navigator.clipboard.writeText(ref).then(() => {
            // Animation de confirmation
            const btn = document.querySelector('.neon-btn.green');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<i class=\"fas fa-check\"></i> COPIÉ !';
            btn.style.background = 'var(--neon-green)';
            btn.style.color = 'black';
            
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.style.background = '';
                btn.style.color = '';
            }, 2000);
        });
    };
    
    // Générer un QR Code (simulation)
    function generateQRCode() {
        const qrContainer = document.getElementById('qr-code');
        const data = {
            id: ";
        // line 1262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1262, $this->source); })()), "id", [], "any", false, false, false, 1262), "html", null, true);
        yield ",
            ref: '";
        // line 1263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1263, $this->source); })()), "transactionRef", [], "any", false, false, false, 1263), "html", null, true);
        yield "',
            amount: ";
        // line 1264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1264, $this->source); })()), "amount", [], "any", false, false, false, 1264), "html", null, true);
        yield ",
            date: '";
        // line 1265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1265, $this->source); })()), "paymentDate", [], "any", false, false, false, 1265), "Y-m-d H:i:s"), "html", null, true);
        yield "',
            status: '";
        // line 1266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1266, $this->source); })()), "paymentStatus", [], "any", false, false, false, 1266), "html", null, true);
        yield "'
        };
        
        // En production, utiliser une vraie librairie QR Code
        // Ici on simule avec un SVG simple
        const qrSVG = `
            <svg width=\"150\" height=\"150\" viewBox=\"0 0 150 150\" xmlns=\"http://www.w3.org/2000/svg\">
                <rect width=\"150\" height=\"150\" fill=\"white\"/>
                <rect x=\"20\" y=\"20\" width=\"110\" height=\"110\" fill=\"black\" opacity=\"0.9\"/>
                <!-- Pattern simplifié pour l'exemple -->
                <rect x=\"40\" y=\"40\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"60\" y=\"40\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"80\" y=\"40\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"40\" y=\"60\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"80\" y=\"60\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"40\" y=\"80\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"60\" y=\"80\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"80\" y=\"80\" width=\"10\" height=\"10\" fill=\"white\"/>
                <!-- Logo Phantom Shop -->
                <circle cx=\"75\" cy=\"75\" r=\"15\" fill=\"var(--neon-red)\"/>
                <text x=\"75\" y=\"80\" text-anchor=\"middle\" fill=\"white\" font-size=\"8\" font-weight=\"bold\">P</text>
            </svg>
        `;
        
        qrContainer.innerHTML = qrSVG;
    }
    
    // Télécharger le QR Code
    window.downloadQRCode = function() {
        const qrContainer = document.getElementById('qr-code');
        const svg = qrContainer.querySelector('svg');
        
        if (!svg) return;
        
        const serializer = new XMLSerializer();
        const source = serializer.serializeToString(svg);
        const blob = new Blob([source], { type: 'image/svg+xml' });
        const url = URL.createObjectURL(blob);
        
        const link = document.createElement('a');
        link.href = url;
        link.download = `payment-";
        // line 1307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 1307, $this->source); })()), "transactionRef", [], "any", false, false, false, 1307), "html", null, true);
        yield "-qr.svg`;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    };
    
    // Initialiser les calculs
    calculateTimeAgo();
    updateLastUpdated();
    generateQRCode();
    
    // Mettre à jour le temps écoulé toutes les minutes
    setInterval(calculateTimeAgo, 60000);
    setInterval(updateLastUpdated, 60000);
    
    // Animations d'entrée
    const detailCards = document.querySelectorAll('.detail-card, .summary-card, .qr-section, .timeline-section, .metadata-section');
    detailCards.forEach((card, index) => {
        card.style.animationDelay = `\${index * 0.1}s`;
        card.style.animation = 'fadeInUp 0.5s ease-out forwards';
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
        
        .detail-card, .summary-card, .qr-section, .timeline-section, .metadata-section {
            opacity: 0;
        }
        
        /* Animation pour le header */
        @keyframes headerGlow {
            0%, 100% { text-shadow: 0 0 10px rgba(255, 0, 51, 0.5); }
            50% { text-shadow: 0 0 20px rgba(255, 0, 51, 0.8); }
        }
        
        .shop-title {
            animation: headerGlow 3s infinite;
        }
    `;
    document.head.appendChild(style);
    
    // Confirmation avant impression
    const printBtn = document.querySelector('.neon-btn.purple');
    if (printBtn) {
        printBtn.addEventListener('click', function(e) {
            if (!confirm('Voulez-vous imprimer les détails de cette transaction ?')) {
                e.preventDefault();
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
        return "payment/show.html.twig";
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
        return array (  1556 => 1307,  1512 => 1266,  1508 => 1265,  1504 => 1264,  1500 => 1263,  1496 => 1262,  1472 => 1241,  1433 => 1205,  592 => 367,  574 => 354,  567 => 350,  560 => 346,  553 => 342,  510 => 302,  483 => 278,  476 => 274,  471 => 272,  465 => 269,  412 => 219,  406 => 215,  402 => 213,  398 => 211,  396 => 210,  393 => 209,  391 => 208,  383 => 203,  376 => 199,  367 => 193,  358 => 187,  354 => 186,  345 => 180,  321 => 159,  314 => 155,  293 => 137,  281 => 128,  260 => 109,  254 => 107,  250 => 105,  248 => 104,  245 => 103,  243 => 102,  240 => 101,  238 => 100,  226 => 91,  214 => 82,  195 => 65,  189 => 61,  183 => 57,  181 => 56,  176 => 53,  174 => 52,  166 => 47,  162 => 46,  156 => 43,  150 => 40,  142 => 35,  121 => 17,  115 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🔥 DÉTAILS PAIEMENT - PHANTOM SHOP{% endblock %}

{% block body %}
<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🔥 <span>DÉTAILS PAIEMENT</span> 🔥</h1>
        <p class=\"shop-subtitle\">TRANSACTION #{{ payment.id }} • {{ payment.paymentDate|date('d/m/Y H:i') }}</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"{{ path('app_payment_index') }}\" class=\"neon-btn red\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR LISTE
            </a>
            <a href=\"{{ path('app_payment_edit', {'id': payment.id}) }}\" class=\"neon-btn blue\">
                <i class=\"fas fa-edit\"></i> MODIFIER
            </a>
            <button type=\"button\" class=\"neon-btn purple\" onclick=\"window.print()\">
                <i class=\"fas fa-print\"></i> IMPRIMER
            </button>
            <button type=\"button\" class=\"neon-btn green\" onclick=\"copyToClipboard()\">
                <i class=\"fas fa-copy\"></i> COPIER REF
            </button>
        </div>
    </div>

    <!-- DEUX COLONNES CÔTE À CÔTE -->
    <div class=\"dual-columns\">
        <!-- COLONNE GAUCHE : INFORMATIONS DÉTAILLÉES -->
        <div class=\"column left-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-info-circle\"></i> INFORMATIONS DE LA TRANSACTION</h2>
                <span class=\"badge-count\">ID: {{ payment.id }}</span>
            </div>
            
            <div class=\"details-container\">
                <!-- CARTE STATUT -->
                <div class=\"detail-card status-card {{ payment.paymentStatus }}\">
                    <div class=\"detail-card-header\">
                        <h3>
                            <i class=\"fas fa-{{ payment.paymentStatus == 'success' ? 'check-circle' : (payment.paymentStatus == 'pending' ? 'clock' : 'times-circle') }}\"></i>
                            STATUT DU PAIEMENT
                        </h3>
                        <span class=\"detail-status {{ payment.paymentStatus }}\">
                            {{ payment.paymentStatus|upper }}
                        </span>
                    </div>
                    <div class=\"detail-card-body\">
                        <div class=\"status-message\">
                            {% if payment.paymentStatus == 'success' %}
                                <i class=\"fas fa-check-circle fa-3x\"></i>
                                <h4>PAIEMENT RÉUSSI</h4>
                                <p>Le paiement a été traité avec succès</p>
                            {% elseif payment.paymentStatus == 'pending' %}
                                <i class=\"fas fa-clock fa-3x\"></i>
                                <h4>PAIEMENT EN ATTENTE</h4>
                                <p>En attente de confirmation</p>
                            {% else %}
                                <i class=\"fas fa-times-circle fa-3x\"></i>
                                <h4>PAIEMENT ÉCHOUÉ</h4>
                                <p>Le paiement n'a pas abouti</p>
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                <!-- INFORMATIONS FINANCIÈRES -->
                <div class=\"detail-card\">
                    <div class=\"detail-card-header\">
                        <h3><i class=\"fas fa-money-bill-wave\"></i> INFORMATIONS FINANCIÈRES</h3>
                    </div>
                    <div class=\"detail-card-body\">
                        <div class=\"detail-grid\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-hashtag\"></i>
                                    Référence Transaction
                                </span>
                                <span class=\"detail-value\" id=\"transaction-ref\">
                                    {{ payment.transactionRef }}
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-euro-sign\"></i>
                                    Montant
                                </span>
                                <span class=\"detail-value amount-value\">
                                    {{ payment.amount|number_format(2, ',', ' ') }} €
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-credit-card\"></i>
                                    Méthode de Paiement
                                </span>
                                <span class=\"detail-value method-value\">
                                    {% if payment.paymentMethod == 'card' %}
                                        <i class=\"fas fa-credit-card\"></i> CARTE BANCAIRE
                                    {% elseif payment.paymentMethod == 'paypal' %}
                                        <i class=\"fab fa-paypal\"></i> PAYPAL
                                    {% elseif payment.paymentMethod == 'wallet' %}
                                        <i class=\"fas fa-wallet\"></i> PORTE-MONNAIE
                                    {% else %}
                                        {{ payment.paymentMethod|upper }}
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DATE ET HEURE -->
                <div class=\"detail-card\">
                    <div class=\"detail-card-header\">
                        <h3><i class=\"far fa-calendar\"></i> DATE ET HEURE</h3>
                    </div>
                    <div class=\"detail-card-body\">
                        <div class=\"detail-grid\">
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-calendar-day\"></i>
                                    Date
                                </span>
                                <span class=\"detail-value\">
                                    {{ payment.paymentDate|date('d/m/Y') }}
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-clock\"></i>
                                    Heure
                                </span>
                                <span class=\"detail-value\">
                                    {{ payment.paymentDate|date('H:i:s') }}
                                </span>
                            </div>
                            <div class=\"detail-item\">
                                <span class=\"detail-label\">
                                    <i class=\"fas fa-history\"></i>
                                    Durée
                                </span>
                                <span class=\"detail-value\" id=\"time-ago\">
                                    <!-- Calculé en JavaScript -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ACTIONS -->
                <div class=\"action-buttons\">
                    <a href=\"{{ path('app_payment_edit', {'id': payment.id}) }}\" class=\"action-btn edit-btn\">
                        <i class=\"fas fa-edit\"></i>
                        MODIFIER CE PAIEMENT
                    </a>
                    <a href=\"{{ path('app_payment_new') }}\" class=\"action-btn duplicate-btn\">
                        <i class=\"fas fa-copy\"></i>
                        DUPLIQUER
                    </a>
                    <button type=\"button\" class=\"action-btn delete-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <i class=\"fas fa-trash\"></i>
                        SUPPRIMER
                    </button>
                </div>
            </div>
        </div>

        <!-- COLONNE DROITE : STATISTIQUES ET RÉSUMÉ -->
        <div class=\"column right-column\">
            <div class=\"column-header\">
                <h2><i class=\"fas fa-chart-bar\"></i> RÉSUMÉ & ANALYSE</h2>
                <span class=\"badge-count\">RÉCAP</span>
            </div>
            
            <div class=\"preview-container\">
                <!-- CARTE RÉSUMÉ -->
                <div class=\"summary-card {{ payment.paymentStatus }}\">
                    <div class=\"summary-header\">
                        <div class=\"summary-title\">
                            <i class=\"fas fa-receipt\"></i>
                            RÉSUMÉ DE LA TRANSACTION
                        </div>
                        <div class=\"summary-status {{ payment.paymentStatus }}\">
                            {{ payment.paymentStatus|upper }}
                        </div>
                    </div>
                    
                    <div class=\"summary-body\">
                        <div class=\"summary-amount\">
                            {{ payment.amount|number_format(2, ',', ' ') }} €
                        </div>
                        
                        <div class=\"summary-details\">
                            <div class=\"summary-item\">
                                <span class=\"item-label\">ID:</span>
                                <span class=\"item-value\">{{ payment.id }}</span>
                            </div>
                            <div class=\"summary-item\">
                                <span class=\"item-label\">RÉFÉRENCE:</span>
                                <span class=\"item-value\">{{ payment.transactionRef }}</span>
                            </div>
                            <div class=\"summary-item\">
                                <span class=\"item-label\">MÉTHODE:</span>
                                <span class=\"item-value\">
                                    {% if payment.paymentMethod == 'card' %}
                                        CARTE
                                    {% elseif payment.paymentMethod == 'paypal' %}
                                        PAYPAL
                                    {% else %}
                                        WALLET
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"summary-item\">
                                <span class=\"item-label\">DATE:</span>
                                <span class=\"item-value\">{{ payment.paymentDate|date('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"summary-footer\">
                        <div class=\"verification-badge\">
                            <i class=\"fas fa-shield-alt\"></i>
                            <span>TRANSACTION VERIFIÉE</span>
                        </div>
                    </div>
                </div>
                
                <!-- CODE QR POUR PARTAGE -->
                <div class=\"qr-section\">
                    <h3 class=\"qr-title\">
                        <i class=\"fas fa-qrcode\"></i>
                        CODE QR DE LA TRANSACTION
                    </h3>
                    <div class=\"qr-container\">
                        <div class=\"qr-code\" id=\"qr-code\">
                            <!-- QR Code généré en JS -->
                            <div class=\"qr-placeholder\">
                                <i class=\"fas fa-qrcode fa-4x\"></i>
                                <p>Génération du QR Code...</p>
                            </div>
                        </div>
                        <div class=\"qr-info\">
                            <p>Scannez ce code pour accéder rapidement aux détails de cette transaction</p>
                            <button class=\"qr-btn\" onclick=\"downloadQRCode()\">
                                <i class=\"fas fa-download\"></i>
                                TÉLÉCHARGER
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- TIMELINE DE LA TRANSACTION -->
                <div class=\"timeline-section\">
                    <h3 class=\"timeline-title\">
                        <i class=\"fas fa-stream\"></i>
                        TIMELINE DE LA TRANSACTION
                    </h3>
                    <div class=\"timeline\">
                        <div class=\"timeline-item completed\">
                            <div class=\"timeline-marker\">
                                <i class=\"fas fa-check\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <h4>Transaction Créée</h4>
                                <p>{{ payment.paymentDate|date('d/m/Y H:i:s') }}</p>
                            </div>
                        </div>
                        <div class=\"timeline-item {{ payment.paymentStatus == 'success' ? 'completed' : (payment.paymentStatus == 'failed' ? 'failed' : 'active') }}\">
                            <div class=\"timeline-marker\">
                                <i class=\"fas fa-{{ payment.paymentStatus == 'success' ? 'check' : (payment.paymentStatus == 'failed' ? 'times' : 'clock') }}\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <h4>Statut Final</h4>
                                <p>{{ payment.paymentStatus|upper }}</p>
                            </div>
                        </div>
                        <div class=\"timeline-item future\">
                            <div class=\"timeline-marker\">
                                <i class=\"fas fa-ellipsis-h\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <h4>Prochaine Action</h4>
                                <p>En attente de traitement</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- MÉTADONNÉES -->
                <div class=\"metadata-section\">
                    <h3 class=\"metadata-title\">
                        <i class=\"fas fa-database\"></i>
                        MÉTADONNÉES
                    </h3>
                    <div class=\"metadata-grid\">
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">ID Technique:</span>
                            <span class=\"metadata-value\">{{ payment.id }}</span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Type d'Entity:</span>
                            <span class=\"metadata-value\">Payment</span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Dernière Mise à Jour:</span>
                            <span class=\"metadata-value\" id=\"last-updated\">
                                <!-- Calculé en JS -->
                            </span>
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
                    <p>Vous êtes sur le point de supprimer définitivement cette transaction.</p>
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
                        <span class=\"value\">{{ payment.paymentDate|date('d/m/Y H:i:s') }}</span>
                    </div>
                    <div class=\"detail-modal\">
                        <span class=\"label\">Statut:</span>
                        <span class=\"value {{ payment.paymentStatus }}\">{{ payment.paymentStatus|upper }}</span>
                    </div>
                </div>
                
                <div class=\"confirmation-text\">
                    <i class=\"fas fa-question-circle\"></i>
                    <strong>Cette action ne peut pas être annulée. Êtes-vous absolument sûr ?</strong>
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

<!-- STYLES SPÉCIFIQUES À L'AFFICHAGE -->
<style>
/* DÉTAILS */
.details-container {
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.detail-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    transition: all 0.3s;
    animation: fadeIn 0.6s ease-out;
}

.detail-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 243, 255, 0.2);
}

.detail-card.status-card {
    border-width: 3px;
    animation: statusGlow 2s infinite alternate;
}

.detail-card.status-card.success {
    border-color: rgba(0, 255, 65, 0.4);
    background: rgba(0, 255, 65, 0.05);
}

.detail-card.status-card.pending {
    border-color: rgba(255, 204, 0, 0.4);
    background: rgba(255, 204, 0, 0.05);
}

.detail-card.status-card.failed {
    border-color: rgba(255, 0, 51, 0.4);
    background: rgba(255, 0, 51, 0.05);
}

@keyframes statusGlow {
    0% { box-shadow: 0 0 20px rgba(0, 243, 255, 0.1); }
    100% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.3); }
}

.detail-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.2);
}

.detail-card-header h3 {
    color: var(--neon-blue);
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
}

.detail-status {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.detail-status.success {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 2px solid var(--neon-green);
}

.detail-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.detail-status.failed {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

.status-message {
    text-align: center;
    padding: 20px;
}

.status-message i {
    margin-bottom: 15px;
}

.status-message h4 {
    color: white;
    font-size: 1.3rem;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.status-message p {
    color: #aaa;
    margin: 0;
}

.detail-grid {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.detail-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.detail-label {
    color: #777;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.detail-value {
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    text-align: right;
}

.detail-value.amount-value {
    color: var(--neon-green);
    font-size: 1.3rem;
    font-weight: 900;
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.3);
}

.detail-value.method-value {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 1rem;
}

/* ACTIONS */
.action-buttons {
    display: flex;
    gap: 15px;
    margin-top: 20px;
}

.action-btn {
    flex: 1;
    padding: 15px 20px;
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
    text-align: center;
}

.edit-btn {
    background: rgba(0, 243, 255, 0.2);
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.edit-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 243, 255, 0.4);
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

/* SUMMARY CARD */
.summary-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
    animation: summaryGlow 3s infinite alternate;
}

@keyframes summaryGlow {
    0% { box-shadow: 0 0 20px rgba(0, 243, 255, 0.2); }
    100% { box-shadow: 0 0 40px rgba(0, 243, 255, 0.4); }
}

.summary-card.success {
    border-color: rgba(0, 255, 65, 0.4);
}

.summary-card.pending {
    border-color: rgba(255, 204, 0, 0.4);
}

.summary-card.failed {
    border-color: rgba(255, 0, 51, 0.4);
}

.summary-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.2);
}

.summary-title {
    color: var(--neon-blue);
    font-size: 1.1rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}

.summary-status {
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 0.7rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.summary-status.success {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 1px solid var(--neon-green);
}

.summary-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid var(--neon-yellow);
}

.summary-status.failed {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid var(--neon-red);
}

.summary-body {
    text-align: center;
}

.summary-amount {
    font-size: 2.2rem;
    font-weight: 900;
    color: var(--neon-green);
    margin-bottom: 20px;
    text-shadow: 0 0 15px rgba(0, 255, 65, 0.5);
}

.summary-details {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.summary-item:last-child {
    border-bottom: none;
}

.item-label {
    color: #777;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.item-value {
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
}

.summary-footer {
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid rgba(0, 243, 255, 0.2);
    text-align: center;
}

.verification-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: rgba(0, 243, 255, 0.1);
    border-radius: 20px;
    color: var(--neon-blue);
    font-size: 0.8rem;
    font-weight: 600;
}

/* QR SECTION */
.qr-section {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(157, 0, 255, 0.3);
    border-radius: 15px;
    padding: 25px;
}

.qr-title {
    color: var(--neon-purple);
    font-size: 1.1rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.qr-container {
    display: flex;
    align-items: center;
    gap: 20px;
}

.qr-code {
    width: 150px;
    height: 150px;
    background: white;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border: 3px solid var(--neon-purple);
}

.qr-placeholder {
    text-align: center;
    color: #666;
}

.qr-placeholder i {
    margin-bottom: 10px;
}

.qr-placeholder p {
    font-size: 0.8rem;
    margin: 0;
}

.qr-info {
    flex: 1;
}

.qr-info p {
    color: #aaa;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.qr-btn {
    padding: 10px 20px;
    background: rgba(157, 0, 255, 0.2);
    border: 2px solid var(--neon-purple);
    border-radius: 8px;
    color: var(--neon-purple);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.qr-btn:hover {
    background: var(--neon-purple);
    color: white;
    transform: translateY(-2px);
}

/* TIMELINE */
.timeline-section {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(255, 204, 0, 0.3);
    border-radius: 15px;
    padding: 25px;
}

.timeline-title {
    color: var(--neon-yellow);
    font-size: 1.1rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline:before {
    content: '';
    position: absolute;
    left: 10px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: rgba(255, 204, 0, 0.3);
}

.timeline-item {
    position: relative;
    margin-bottom: 25px;
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    position: absolute;
    left: -30px;
    top: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.7rem;
}

.timeline-item.completed .timeline-marker {
    background: var(--neon-green);
    color: black;
}

.timeline-item.active .timeline-marker {
    background: var(--neon-yellow);
    color: black;
    animation: pulse 2s infinite;
}

.timeline-item.failed .timeline-marker {
    background: var(--neon-red);
    color: white;
}

.timeline-item.future .timeline-marker {
    background: #777;
    color: black;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.timeline-content {
    flex: 1;
}

.timeline-content h4 {
    color: white;
    font-size: 1rem;
    margin: 0 0 5px 0;
    font-weight: 600;
}

.timeline-content p {
    color: #aaa;
    font-size: 0.9rem;
    margin: 0;
}

/* METADATA */
.metadata-section {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 25px;
}

.metadata-title {
    color: #aaa;
    font-size: 1.1rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.metadata-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.metadata-item {
    padding: 12px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.metadata-label {
    display: block;
    color: #777;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}

.metadata-value {
    display: block;
    color: white;
    font-size: 0.9rem;
    font-weight: 600;
    word-break: break-all;
}

/* MODAL (identique aux autres) */
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

@media (max-width: 768px) {
    .action-buttons {
        flex-direction: column;
    }
    
    .qr-container {
        flex-direction: column;
        text-align: center;
    }
    
    .timeline {
        padding-left: 20px;
    }
    
    .timeline:before {
        left: 0;
    }
    
    .timeline-marker {
        left: -20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calculer le temps écoulé depuis la création
    function calculateTimeAgo() {
        const paymentDate = new Date('{{ payment.paymentDate|date(\"Y-m-d H:i:s\") }}');
        const now = new Date();
        const diff = now - paymentDate;
        
        const seconds = Math.floor(diff / 1000);
        const minutes = Math.floor(seconds / 60);
        const hours = Math.floor(minutes / 60);
        const days = Math.floor(hours / 24);
        
        let timeAgo = '';
        if (days > 0) {
            timeAgo = `Il y a \${days} jour\${days > 1 ? 's' : ''}`;
        } else if (hours > 0) {
            timeAgo = `Il y a \${hours} heure\${hours > 1 ? 's' : ''}`;
        } else if (minutes > 0) {
            timeAgo = `Il y a \${minutes} minute\${minutes > 1 ? 's' : ''}`;
        } else {
            timeAgo = `À l'instant`;
        }
        
        document.getElementById('time-ago').textContent = timeAgo;
    }
    
    // Mettre à jour la dernière mise à jour
    function updateLastUpdated() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('fr-FR', { 
            hour: '2-digit', 
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('last-updated').textContent = `Aujourd'hui à \${timeString}`;
    }
    
    // Copier la référence dans le presse-papier
    window.copyToClipboard = function() {
        const ref = '{{ payment.transactionRef }}';
        navigator.clipboard.writeText(ref).then(() => {
            // Animation de confirmation
            const btn = document.querySelector('.neon-btn.green');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<i class=\"fas fa-check\"></i> COPIÉ !';
            btn.style.background = 'var(--neon-green)';
            btn.style.color = 'black';
            
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                btn.style.background = '';
                btn.style.color = '';
            }, 2000);
        });
    };
    
    // Générer un QR Code (simulation)
    function generateQRCode() {
        const qrContainer = document.getElementById('qr-code');
        const data = {
            id: {{ payment.id }},
            ref: '{{ payment.transactionRef }}',
            amount: {{ payment.amount }},
            date: '{{ payment.paymentDate|date(\"Y-m-d H:i:s\") }}',
            status: '{{ payment.paymentStatus }}'
        };
        
        // En production, utiliser une vraie librairie QR Code
        // Ici on simule avec un SVG simple
        const qrSVG = `
            <svg width=\"150\" height=\"150\" viewBox=\"0 0 150 150\" xmlns=\"http://www.w3.org/2000/svg\">
                <rect width=\"150\" height=\"150\" fill=\"white\"/>
                <rect x=\"20\" y=\"20\" width=\"110\" height=\"110\" fill=\"black\" opacity=\"0.9\"/>
                <!-- Pattern simplifié pour l'exemple -->
                <rect x=\"40\" y=\"40\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"60\" y=\"40\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"80\" y=\"40\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"40\" y=\"60\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"80\" y=\"60\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"40\" y=\"80\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"60\" y=\"80\" width=\"10\" height=\"10\" fill=\"white\"/>
                <rect x=\"80\" y=\"80\" width=\"10\" height=\"10\" fill=\"white\"/>
                <!-- Logo Phantom Shop -->
                <circle cx=\"75\" cy=\"75\" r=\"15\" fill=\"var(--neon-red)\"/>
                <text x=\"75\" y=\"80\" text-anchor=\"middle\" fill=\"white\" font-size=\"8\" font-weight=\"bold\">P</text>
            </svg>
        `;
        
        qrContainer.innerHTML = qrSVG;
    }
    
    // Télécharger le QR Code
    window.downloadQRCode = function() {
        const qrContainer = document.getElementById('qr-code');
        const svg = qrContainer.querySelector('svg');
        
        if (!svg) return;
        
        const serializer = new XMLSerializer();
        const source = serializer.serializeToString(svg);
        const blob = new Blob([source], { type: 'image/svg+xml' });
        const url = URL.createObjectURL(blob);
        
        const link = document.createElement('a');
        link.href = url;
        link.download = `payment-{{ payment.transactionRef }}-qr.svg`;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        URL.revokeObjectURL(url);
    };
    
    // Initialiser les calculs
    calculateTimeAgo();
    updateLastUpdated();
    generateQRCode();
    
    // Mettre à jour le temps écoulé toutes les minutes
    setInterval(calculateTimeAgo, 60000);
    setInterval(updateLastUpdated, 60000);
    
    // Animations d'entrée
    const detailCards = document.querySelectorAll('.detail-card, .summary-card, .qr-section, .timeline-section, .metadata-section');
    detailCards.forEach((card, index) => {
        card.style.animationDelay = `\${index * 0.1}s`;
        card.style.animation = 'fadeInUp 0.5s ease-out forwards';
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
        
        .detail-card, .summary-card, .qr-section, .timeline-section, .metadata-section {
            opacity: 0;
        }
        
        /* Animation pour le header */
        @keyframes headerGlow {
            0%, 100% { text-shadow: 0 0 10px rgba(255, 0, 51, 0.5); }
            50% { text-shadow: 0 0 20px rgba(255, 0, 51, 0.8); }
        }
        
        .shop-title {
            animation: headerGlow 3s infinite;
        }
    `;
    document.head.appendChild(style);
    
    // Confirmation avant impression
    const printBtn = document.querySelector('.neon-btn.purple');
    if (printBtn) {
        printBtn.addEventListener('click', function(e) {
            if (!confirm('Voulez-vous imprimer les détails de cette transaction ?')) {
                e.preventDefault();
            }
        });
    }
});
</script>
{% endblock %}", "payment/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\payment\\show.html.twig");
    }
}
