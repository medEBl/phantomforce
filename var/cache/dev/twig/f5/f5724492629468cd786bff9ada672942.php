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

/* back/payment/show.html.twig */
class __TwigTemplate_1dfc5577014b3560251533e7b5af1cb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/show.html.twig"));

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

        yield "🎮 Détails du Paiement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - Admin Panel";
        
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
        yield "<div class=\"admin-content\">
    <div class=\"admin-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1 class=\"h3 mb-0\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                    Détails du Paiement
                </h1>
                <p class=\"text-muted mb-0\">Informations complètes sur la transaction</p>
            </div>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-arrow-left\"></i>
                    Retour à la liste
                </a>
                <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-edit\"></i>
                    Modifier
                </a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Informations principales -->
        <div class=\"col-md-8\">
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Informations de la transaction
                </h2>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">ID</label>
                            <div class=\"fw-bold\">#";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Référence</label>
                            <div>
                                <code class=\"bg-dark px-2 py-1 rounded\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 49, $this->source); })()), "transactionRef", [], "any", false, false, false, 49), "html", null, true);
        yield "</code>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Montant</label>
                            <div class=\"h4 fw-bold\" style=\"color: var(--admin-success);\">
                                ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 60, $this->source); })()), "amount", [], "any", false, false, false, 60), 2, ",", " "), "html", null, true);
        yield " €
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Date</label>
                            <div class=\"fw-bold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 67, $this->source); })()), "paymentDate", [], "any", false, false, false, 67), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Méthode de paiement</label>
                            <div>
                                <span class=\"badge-admin\" style=\"background: rgba(255, 255, 255, 0.1); padding: 8px 12px;\">
                                    ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 78, $this->source); })()), "paymentMethod", [], "any", false, false, false, 78) == "card")) {
            // line 79
            yield "                                        <i class=\"fas fa-credit-card me-2\"></i> Carte bancaire
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 80
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 80, $this->source); })()), "paymentMethod", [], "any", false, false, false, 80) == "paypal")) {
            // line 81
            yield "                                        <i class=\"fab fa-paypal me-2\"></i> PayPal
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 82, $this->source); })()), "paymentMethod", [], "any", false, false, false, 82) == "transfer")) {
            // line 83
            yield "                                        <i class=\"fas fa-exchange-alt me-2\"></i> Virement
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 84, $this->source); })()), "paymentMethod", [], "any", false, false, false, 84) == "cash")) {
            // line 85
            yield "                                        <i class=\"fas fa-money-bill me-2\"></i> Espèces
                                    ";
        } else {
            // line 87
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 87, $this->source); })()), "paymentMethod", [], "any", false, false, false, 87), "html", null, true);
            yield "
                                    ";
        }
        // line 89
        yield "                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Statut</label>
                            <div>
                                ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 97, $this->source); })()), "paymentStatus", [], "any", false, false, false, 97) == "success")) {
            // line 98
            yield "                                    <span class=\"badge-admin\" style=\"background: rgba(0, 255, 136, 0.1); color: var(--admin-success); padding: 8px 12px;\">
                                        <i class=\"fas fa-check me-2\"></i> Payé
                                    </span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 101
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 101, $this->source); })()), "paymentStatus", [], "any", false, false, false, 101) == "pending")) {
            // line 102
            yield "                                    <span class=\"badge-admin\" style=\"background: rgba(255, 193, 7, 0.1); color: #ffc107; padding: 8px 12px;\">
                                        <i class=\"fas fa-clock me-2\"></i> En attente
                                    </span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 105, $this->source); })()), "paymentStatus", [], "any", false, false, false, 105) == "failed")) {
            // line 106
            yield "                                    <span class=\"badge-admin\" style=\"background: rgba(255, 0, 60, 0.1); color: var(--admin-danger); padding: 8px 12px;\">
                                        <i class=\"fas fa-times me-2\"></i> Échoué
                                    </span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 109
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 109, $this->source); })()), "paymentStatus", [], "any", false, false, false, 109) == "cancelled")) {
            // line 110
            yield "                                    <span class=\"badge-admin\" style=\"background: rgba(119, 119, 119, 0.1); color: #777; padding: 8px 12px;\">
                                        <i class=\"fas fa-ban me-2\"></i> Annulé
                                    </span>
                                ";
        } else {
            // line 114
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 114, $this->source); })()), "paymentStatus", [], "any", false, false, false, 114), "html", null, true);
            yield "
                                ";
        }
        // line 116
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Article associé -->
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-cube me-2\"></i>
                    Article associé
                </h2>
                
                ";
        // line 129
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 129, $this->source); })()), "shopItem", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"bg-dark rounded p-3\">
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <div class=\"text-center mb-3\">
                                        <i class=\"fas fa-box fa-3x\" style=\"color: var(--admin-accent);\"></i>
                                    </div>
                                </div>
                                <div class=\"col-md-9\">
                                    <h4 class=\"h6 fw-bold\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 140, $this->source); })()), "shopItem", [], "any", false, false, false, 140), "itemName", [], "any", false, false, false, 140), "html", null, true);
            yield "</h4>
                                    <p class=\"text-muted mb-2\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 141, $this->source); })()), "shopItem", [], "any", false, false, false, 141), "itemDescription", [], "any", false, false, false, 141), 0, 100), "html", null, true);
            yield "...</p>
                                    
                                    <div class=\"row mt-3\">
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Catégorie</small>
                                                <div class=\"fw-bold\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 147, $this->source); })()), "shopItem", [], "any", false, false, false, 147), "itemCategory", [], "any", false, false, false, 147), "html", null, true);
            yield "</div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Quantité</small>
                                                <div class=\"fw-bold\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 153, $this->source); })()), "shopItem", [], "any", false, false, false, 153), "quantity", [], "any", false, false, false, 153), "html", null, true);
            yield "</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Prix unitaire</small>
                                                <div class=\"fw-bold\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 162, $this->source); })()), "shopItem", [], "any", false, false, false, 162), "price", [], "any", false, false, false, 162), 2, ",", " "), "html", null, true);
            yield " €</div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Prix total</small>
                                                <div class=\"fw-bold\" style=\"color: var(--admin-success);\">
                                                    ";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 169, $this->source); })()), "shopItem", [], "any", false, false, false, 169), "totalPrice", [], "any", false, false, false, 169), 2, ",", " "), "html", null, true);
            yield " €
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        } else {
            // line 180
            yield "                <div class=\"text-center py-4\">
                    <i class=\"fas fa-ban fa-2x text-muted mb-3\"></i>
                    <p class=\"text-muted\">Aucun article associé à ce paiement</p>
                </div>
                ";
        }
        // line 185
        yield "            </div>
        </div>
        
        <!-- Actions et informations secondaires -->
        <div class=\"col-md-4\">
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-cogs me-2\"></i>
                    Actions
                </h2>
                
                <div class=\"d-grid gap-2\">
                    <a href=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197)]), "html", null, true);
        yield "\" 
                       class=\"btn-admin btn-admin-primary\">
                        <i class=\"fas fa-edit me-2\"></i>
                        Modifier ce paiement
                    </a>
                    
                    <button type=\"button\" class=\"btn-admin btn-admin-danger\" 
                            onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')) { document.getElementById('delete-form').submit(); }\">
                        <i class=\"fas fa-trash me-2\"></i>
                        Supprimer ce paiement
                    </button>
                    
                    <form id=\"delete-form\" method=\"post\" action=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209)]), "html", null, true);
        yield "\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210))), "html", null, true);
        yield "\">
                    </form>
                </div>
            </div>
            
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-history me-2\"></i>
                    Historique
                </h2>
                
                <ul class=\"list-unstyled mb-0\">
                    <li class=\"mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted\">Créé le</span>
                            <span class=\"fw-bold\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 225, $this->source); })()), "paymentDate", [], "any", false, false, false, 225), "d/m/Y"), "html", null, true);
        yield "</span>
                        </div>
                    </li>
                    <li class=\"mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted\">Dernière modification</span>
                            <span class=\"fw-bold\">Aujourd'hui</span>
                        </div>
                    </li>
                    ";
        // line 234
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 234, $this->source); })()), "shopItem", [], "any", false, false, false, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "                    <li class=\"mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted\">Article acheté</span>
                            <span class=\"fw-bold\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 238, $this->source); })()), "shopItem", [], "any", false, false, false, 238), "purchaseDate", [], "any", false, false, false, 238), "d/m/Y"), "html", null, true);
            yield "</span>
                        </div>
                    </li>
                    ";
        }
        // line 242
        yield "                </ul>
            </div>
        </div>
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
        return "back/payment/show.html.twig";
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
        return array (  437 => 242,  430 => 238,  425 => 235,  423 => 234,  411 => 225,  393 => 210,  389 => 209,  374 => 197,  360 => 185,  353 => 180,  339 => 169,  329 => 162,  317 => 153,  308 => 147,  299 => 141,  295 => 140,  283 => 130,  281 => 129,  266 => 116,  260 => 114,  254 => 110,  252 => 109,  247 => 106,  245 => 105,  240 => 102,  238 => 101,  233 => 98,  231 => 97,  221 => 89,  215 => 87,  211 => 85,  209 => 84,  206 => 83,  204 => 82,  201 => 81,  199 => 80,  196 => 79,  194 => 78,  180 => 67,  170 => 60,  156 => 49,  146 => 42,  122 => 21,  115 => 17,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}🎮 Détails du Paiement #{{ payment.id }} - Admin Panel{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"admin-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1 class=\"h3 mb-0\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                    Détails du Paiement
                </h1>
                <p class=\"text-muted mb-0\">Informations complètes sur la transaction</p>
            </div>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_back_payment_index') }}\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-arrow-left\"></i>
                    Retour à la liste
                </a>
                <a href=\"{{ path('app_back_payment_edit', {'id': payment.id}) }}\" class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-edit\"></i>
                    Modifier
                </a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Informations principales -->
        <div class=\"col-md-8\">
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Informations de la transaction
                </h2>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">ID</label>
                            <div class=\"fw-bold\">#{{ payment.id }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Référence</label>
                            <div>
                                <code class=\"bg-dark px-2 py-1 rounded\">{{ payment.transactionRef }}</code>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Montant</label>
                            <div class=\"h4 fw-bold\" style=\"color: var(--admin-success);\">
                                {{ payment.amount|number_format(2, ',', ' ') }} €
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Date</label>
                            <div class=\"fw-bold\">{{ payment.paymentDate|date('d/m/Y H:i') }}</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Méthode de paiement</label>
                            <div>
                                <span class=\"badge-admin\" style=\"background: rgba(255, 255, 255, 0.1); padding: 8px 12px;\">
                                    {% if payment.paymentMethod == 'card' %}
                                        <i class=\"fas fa-credit-card me-2\"></i> Carte bancaire
                                    {% elseif payment.paymentMethod == 'paypal' %}
                                        <i class=\"fab fa-paypal me-2\"></i> PayPal
                                    {% elseif payment.paymentMethod == 'transfer' %}
                                        <i class=\"fas fa-exchange-alt me-2\"></i> Virement
                                    {% elseif payment.paymentMethod == 'cash' %}
                                        <i class=\"fas fa-money-bill me-2\"></i> Espèces
                                    {% else %}
                                        {{ payment.paymentMethod }}
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            <label class=\"form-label text-muted\">Statut</label>
                            <div>
                                {% if payment.paymentStatus == 'success' %}
                                    <span class=\"badge-admin\" style=\"background: rgba(0, 255, 136, 0.1); color: var(--admin-success); padding: 8px 12px;\">
                                        <i class=\"fas fa-check me-2\"></i> Payé
                                    </span>
                                {% elseif payment.paymentStatus == 'pending' %}
                                    <span class=\"badge-admin\" style=\"background: rgba(255, 193, 7, 0.1); color: #ffc107; padding: 8px 12px;\">
                                        <i class=\"fas fa-clock me-2\"></i> En attente
                                    </span>
                                {% elseif payment.paymentStatus == 'failed' %}
                                    <span class=\"badge-admin\" style=\"background: rgba(255, 0, 60, 0.1); color: var(--admin-danger); padding: 8px 12px;\">
                                        <i class=\"fas fa-times me-2\"></i> Échoué
                                    </span>
                                {% elseif payment.paymentStatus == 'cancelled' %}
                                    <span class=\"badge-admin\" style=\"background: rgba(119, 119, 119, 0.1); color: #777; padding: 8px 12px;\">
                                        <i class=\"fas fa-ban me-2\"></i> Annulé
                                    </span>
                                {% else %}
                                    {{ payment.paymentStatus }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Article associé -->
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-cube me-2\"></i>
                    Article associé
                </h2>
                
                {% if payment.shopItem %}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"bg-dark rounded p-3\">
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <div class=\"text-center mb-3\">
                                        <i class=\"fas fa-box fa-3x\" style=\"color: var(--admin-accent);\"></i>
                                    </div>
                                </div>
                                <div class=\"col-md-9\">
                                    <h4 class=\"h6 fw-bold\">{{ payment.shopItem.itemName }}</h4>
                                    <p class=\"text-muted mb-2\">{{ payment.shopItem.itemDescription|slice(0, 100) }}...</p>
                                    
                                    <div class=\"row mt-3\">
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Catégorie</small>
                                                <div class=\"fw-bold\">{{ payment.shopItem.itemCategory }}</div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Quantité</small>
                                                <div class=\"fw-bold\">{{ payment.shopItem.quantity }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Prix unitaire</small>
                                                <div class=\"fw-bold\">{{ payment.shopItem.price|number_format(2, ',', ' ') }} €</div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"mb-2\">
                                                <small class=\"text-muted\">Prix total</small>
                                                <div class=\"fw-bold\" style=\"color: var(--admin-success);\">
                                                    {{ payment.shopItem.totalPrice|number_format(2, ',', ' ') }} €
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% else %}
                <div class=\"text-center py-4\">
                    <i class=\"fas fa-ban fa-2x text-muted mb-3\"></i>
                    <p class=\"text-muted\">Aucun article associé à ce paiement</p>
                </div>
                {% endif %}
            </div>
        </div>
        
        <!-- Actions et informations secondaires -->
        <div class=\"col-md-4\">
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-cogs me-2\"></i>
                    Actions
                </h2>
                
                <div class=\"d-grid gap-2\">
                    <a href=\"{{ path('app_back_payment_edit', {'id': payment.id}) }}\" 
                       class=\"btn-admin btn-admin-primary\">
                        <i class=\"fas fa-edit me-2\"></i>
                        Modifier ce paiement
                    </a>
                    
                    <button type=\"button\" class=\"btn-admin btn-admin-danger\" 
                            onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')) { document.getElementById('delete-form').submit(); }\">
                        <i class=\"fas fa-trash me-2\"></i>
                        Supprimer ce paiement
                    </button>
                    
                    <form id=\"delete-form\" method=\"post\" action=\"{{ path('app_back_payment_delete', {'id': payment.id}) }}\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ payment.id) }}\">
                    </form>
                </div>
            </div>
            
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-history me-2\"></i>
                    Historique
                </h2>
                
                <ul class=\"list-unstyled mb-0\">
                    <li class=\"mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted\">Créé le</span>
                            <span class=\"fw-bold\">{{ payment.paymentDate|date('d/m/Y') }}</span>
                        </div>
                    </li>
                    <li class=\"mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted\">Dernière modification</span>
                            <span class=\"fw-bold\">Aujourd'hui</span>
                        </div>
                    </li>
                    {% if payment.shopItem %}
                    <li class=\"mb-3\">
                        <div class=\"d-flex justify-content-between\">
                            <span class=\"text-muted\">Article acheté</span>
                            <span class=\"fw-bold\">{{ payment.shopItem.purchaseDate|date('d/m/Y') }}</span>
                        </div>
                    </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "back/payment/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\payment\\show.html.twig");
    }
}
