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

/* payment/index.html.twig */
class __TwigTemplate_6371e6e8a389e28ff4dc5652bc7fa2ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

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

        yield "🔥 LISTE DES PAIEMENTS - PHANTOM SHOP";
        
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
        <h1 class=\"shop-title\">🔥 <span>LISTE DES PAIEMENTS</span> 🔥</h1>
        <p class=\"shop-subtitle\">GESTION • TRANSACTIONS • SURVEILLANCE</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_new");
        yield "\" class=\"neon-btn green\">
                <i class=\"fas fa-plus-circle\"></i> NOUVEAU PAIEMENT
            </a>
            <button class=\"neon-btn purple\" onclick=\"refreshData()\">
                <i class=\"fas fa-sync-alt\"></i> ACTUALISER
            </button>
        </div>
    </div>

    <!-- STATISTIQUES RAPIDES -->
    <div class=\"stats-grid\">
        <div class=\"stat-card total\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-money-bill-wave\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">TOTAL DES PAIEMENTS</div>
                <div class=\"stat-value\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "</div>
            </div>
        </div>
        
        <div class=\"stat-card success\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">PAIEMENTS RÉUSSIS</div>
                <div class=\"stat-value\">
                    ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 42, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 42, $this->source); })()), "paymentStatus", [], "any", false, false, false, 42) == "success"); })), "html", null, true);
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"stat-card pending\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">EN ATTENTE</div>
                <div class=\"stat-value\">
                    ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 54, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 54, $this->source); })()), "paymentStatus", [], "any", false, false, false, 54) == "pending"); })), "html", null, true);
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"stat-card failed\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-times-circle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">ÉCHOUÉS</div>
                <div class=\"stat-value\">
                    ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 66, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 66, $this->source); })()), "paymentStatus", [], "any", false, false, false, 66) == "failed"); })), "html", null, true);
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- TABLEAU DES PAIEMENTS -->
    <div class=\"aggressive-table-container\">
        <div class=\"table-header\">
            <h2><i class=\"fas fa-list\"></i> TOUS LES PAIEMENTS</h2>
            <div class=\"table-controls\">
                <div class=\"search-box\">
                    <i class=\"fas fa-search\"></i>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un paiement...\">
                </div>
                <button class=\"table-btn export-btn\" onclick=\"exportData()\">
                    <i class=\"fas fa-download\"></i> EXPORTER
                </button>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"aggressive-table\" id=\"paymentsTable\">
                <thead>
                    <tr>
                        <th class=\"sortable\" onclick=\"sortTable(0)\">
                            <i class=\"fas fa-hashtag\"></i> ID
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(1)\">
                            <i class=\"fas fa-cube\"></i> ARTICLE
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(2)\">
                            <i class=\"fas fa-calendar\"></i> DATE
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(3)\">
                            <i class=\"fas fa-euro-sign\"></i> MONTANT
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(4)\">
                            <i class=\"fas fa-credit-card\"></i> MÉTHODE
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(5)\">
                            <i class=\"fas fa-check-circle\"></i> STATUT
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(6)\">
                            <i class=\"fas fa-hashtag\"></i> RÉFÉRENCE
                        </th>
                        <th>
                            <i class=\"fas fa-cogs\"></i> ACTIONS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 119
            yield "                    <tr class=\"payment-row status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentStatus", [], "any", false, false, false, 119), "html", null, true);
            yield "\">
                        <td class=\"payment-id\">
                            <span class=\"id-badge\">#";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
                        </td>
                        <td class=\"payment-item\">
                            ";
            // line 124
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "shopItem", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                                <div class=\"item-info\">
                                    <i class=\"fas fa-cube\"></i>
                                    <div class=\"item-details\">
                                        <strong>";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "shopItem", [], "any", false, false, false, 128), "itemName", [], "any", false, false, false, 128), "html", null, true);
                yield "</strong>
                                        <small>";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "shopItem", [], "any", false, false, false, 129), "itemCategory", [], "any", false, false, false, 129), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                            ";
            } else {
                // line 133
                yield "                                <div class=\"item-info\">
                                    <i class=\"fas fa-ban\"></i>
                                    <div class=\"item-details\">
                                        <strong>Aucun article</strong>
                                        <small>Non associé</small>
                                    </div>
                                </div>
                            ";
            }
            // line 141
            yield "                        </td>
                        <td class=\"payment-date\">
                            <div class=\"date-time\">
                                <div class=\"date\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 144), "d/m/Y"), "html", null, true);
            yield "</div>
                                <div class=\"time\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 145), "H:i"), "html", null, true);
            yield "</div>
                            </div>
                        </td>
                        <td class=\"payment-amount\">
                            <span class=\"amount-value\">
                                ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 150), 2, ",", " "), "html", null, true);
            yield " €
                            </span>
                        </td>
                        <td class=\"payment-method\">
                            <span class=\"method-badge method-";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 154), "html", null, true);
            yield "\">
                                ";
            // line 155
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 155) == "card")) {
                // line 156
                yield "                                    <i class=\"fas fa-credit-card\"></i> CARTE
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 157
$context["payment"], "paymentMethod", [], "any", false, false, false, 157) == "paypal")) {
                // line 158
                yield "                                    <i class=\"fab fa-paypal\"></i> PAYPAL
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 159
$context["payment"], "paymentMethod", [], "any", false, false, false, 159) == "transfer")) {
                // line 160
                yield "                                    <i class=\"fas fa-exchange-alt\"></i> VIREMENT
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 161
$context["payment"], "paymentMethod", [], "any", false, false, false, 161) == "cash")) {
                // line 162
                yield "                                    <i class=\"fas fa-money-bill\"></i> ESPÈCES
                                ";
            } else {
                // line 164
                yield "                                    <i class=\"fas fa-wallet\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 164)), "html", null, true);
                yield "
                                ";
            }
            // line 166
            yield "                            </span>
                        </td>
                        <td class=\"payment-status\">
                            <span class=\"status-badge status-";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentStatus", [], "any", false, false, false, 169), "html", null, true);
            yield "\">
                                ";
            // line 170
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentStatus", [], "any", false, false, false, 170) == "success")) {
                // line 171
                yield "                                    <i class=\"fas fa-check\"></i> PAYÉ
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 172
$context["payment"], "paymentStatus", [], "any", false, false, false, 172) == "pending")) {
                // line 173
                yield "                                    <i class=\"fas fa-clock\"></i> EN ATTENTE
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 174
$context["payment"], "paymentStatus", [], "any", false, false, false, 174) == "failed")) {
                // line 175
                yield "                                    <i class=\"fas fa-times\"></i> ÉCHOUÉ
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 176
$context["payment"], "paymentStatus", [], "any", false, false, false, 176) == "cancelled")) {
                // line 177
                yield "                                    <i class=\"fas fa-ban\"></i> ANNULÉ
                                ";
            } else {
                // line 179
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentStatus", [], "any", false, false, false, 179)), "html", null, true);
                yield "
                                ";
            }
            // line 181
            yield "                            </span>
                        </td>
                        <td class=\"payment-ref\">
                            <code class=\"ref-code\">";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionRef", [], "any", false, false, false, 184), "html", null, true);
            yield "</code>
                        </td>
                        <td class=\"payment-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 188)]), "html", null, true);
            yield "\" 
                                   class=\"action-btn view-btn\" 
                                   title=\"Voir détails\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\" 
                                   class=\"action-btn edit-btn\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <button class=\"action-btn delete-btn\" 
                                        onclick=\"confirmDelete(";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 199), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionRef", [], "any", false, false, false, 199), "html", null, true);
            yield "')\"
                                        title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 206
        if (!$context['_iterated']) {
            // line 207
            yield "                    <tr class=\"no-data-row\">
                        <td colspan=\"8\">
                            <div class=\"no-data-message\">
                                <i class=\"fas fa-database fa-2x\"></i>
                                <h3>AUCUN PAIEMENT TROUVÉ</h3>
                                <p>Créez votre premier paiement pour commencer</p>
                                <a href=\"";
            // line 213
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_new");
            yield "\" class=\"neon-btn blue\">
                                    <i class=\"fas fa-plus-circle\"></i> CRÉER UN PAIEMENT
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        ";
        // line 225
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 225, $this->source); })())) > 10)) {
            // line 226
            yield "        <div class=\"table-footer\">
            <div class=\"pagination-info\">
                Affichage de 1 à ";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 228, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 228, $this->source); })())), "html", null, true);
            yield " paiements
            </div>
            <div class=\"pagination-controls\">
                <button class=\"pagination-btn\" disabled>
                    <i class=\"fas fa-chevron-left\"></i>
                </button>
                <span class=\"pagination-current\">Page 1</span>
                <button class=\"pagination-btn\">
                    <i class=\"fas fa-chevron-right\"></i>
                </button>
            </div>
        </div>
        ";
        }
        // line 241
        yield "    </div>

    <!-- FILTRES -->
    <div class=\"filters-section\">
        <h3><i class=\"fas fa-filter\"></i> FILTRES</h3>
        <div class=\"filter-buttons\">
            <button class=\"filter-btn active\" onclick=\"filterTable('all')\">
                <i class=\"fas fa-globe\"></i> TOUS (";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 248, $this->source); })())), "html", null, true);
        yield ")
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('success')\">
                <i class=\"fas fa-check-circle\"></i> PAYÉS (";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 251, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 251, $this->source); })()), "paymentStatus", [], "any", false, false, false, 251) == "success"); })), "html", null, true);
        yield ")
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('pending')\">
                <i class=\"fas fa-clock\"></i> EN ATTENTE (";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 254, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 254, $this->source); })()), "paymentStatus", [], "any", false, false, false, 254) == "pending"); })), "html", null, true);
        yield ")
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('failed')\">
                <i class=\"fas fa-times-circle\"></i> ÉCHOUÉS (";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 257, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 257, $this->source); })()), "paymentStatus", [], "any", false, false, false, 257) == "failed"); })), "html", null, true);
        yield ")
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('cancelled')\">
                <i class=\"fas fa-ban\"></i> ANNULÉS (";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 260, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 260, $this->source); })()), "paymentStatus", [], "any", false, false, false, 260) == "cancelled"); })), "html", null, true);
        yield ")
            </button>
        </div>
    </div>
</div>

<!-- DELETE CONFIRMATION MODAL -->
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
                        <span class=\"value\" id=\"delete-ref\"></span>
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
                <form id=\"delete-form\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"\">
                    <button type=\"submit\" class=\"btn-modal btn-delete\">
                        <i class=\"fas fa-trash\"></i> SUPPRIMER
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À L'INDEX -->
<style>
/* STATISTIQUES */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.stat-card {
    background: rgba(20, 20, 30, 0.9);
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    border: 2px solid;
    transition: all 0.3s;
    animation: statPulse 3s infinite alternate;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card.total {
    border-color: var(--neon-blue);
    animation-name: statPulseBlue;
}

.stat-card.success {
    border-color: var(--neon-green);
    animation-name: statPulseGreen;
}

.stat-card.pending {
    border-color: var(--neon-yellow);
    animation-name: statPulseYellow;
}

.stat-card.failed {
    border-color: var(--neon-red);
    animation-name: statPulseRed;
}

@keyframes statPulseBlue {
    0% { box-shadow: 0 0 10px rgba(0, 243, 255, 0.2); }
    100% { box-shadow: 0 0 30px rgba(0, 243, 255, 0.4); }
}

@keyframes statPulseGreen {
    0% { box-shadow: 0 0 10px rgba(0, 255, 65, 0.2); }
    100% { box-shadow: 0 0 30px rgba(0, 255, 65, 0.4); }
}

@keyframes statPulseYellow {
    0% { box-shadow: 0 0 10px rgba(255, 204, 0, 0.2); }
    100% { box-shadow: 0 0 30px rgba(255, 204, 0, 0.4); }
}

@keyframes statPulseRed {
    0% { box-shadow: 0 0 10px rgba(255, 0, 51, 0.2); }
    100% { box-shadow: 0 0 30px rgba(255, 0, 51, 0.4); }
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
}

.stat-card.total .stat-icon {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
}

.stat-card.success .stat-icon {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
}

.stat-card.pending .stat-icon {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
}

.stat-card.failed .stat-icon {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.9rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 2rem;
    font-weight: 900;
    color: white;
}

/* TABLE */
.aggressive-table-container {
    background: rgba(20, 20, 30, 0.9);
    border-radius: 15px;
    border: 2px solid var(--neon-purple);
    overflow: hidden;
    margin: 30px 0;
    box-shadow: 0 0 40px rgba(157, 0, 255, 0.2);
}

.table-header {
    padding: 20px 30px;
    border-bottom: 2px solid rgba(157, 0, 255, 0.3);
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(157, 0, 255, 0.1);
}

.table-header h2 {
    color: var(--neon-purple);
    font-size: 1.5rem;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.table-controls {
    display: flex;
    align-items: center;
    gap: 15px;
}

.search-box {
    position: relative;
    width: 300px;
}

.search-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-blue);
}

.search-box input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 10px;
    color: white;
    font-size: 1rem;
    transition: all 0.3s;
}

.search-box input:focus {
    outline: none;
    border-color: var(--neon-blue);
    box-shadow: 0 0 20px rgba(0, 243, 255, 0.3);
    background: rgba(255, 255, 255, 0.08);
}

.table-btn {
    padding: 10px 20px;
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
    font-size: 0.9rem;
}

.export-btn {
    background: rgba(0, 243, 255, 0.1);
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.export-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 243, 255, 0.4);
}

.table-responsive {
    overflow-x: auto;
}

.aggressive-table {
    width: 100%;
    border-collapse: collapse;
}

.aggressive-table thead {
    background: rgba(157, 0, 255, 0.1);
}

.aggressive-table th {
    padding: 20px 15px;
    text-align: left;
    color: var(--neon-purple);
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    border-bottom: 2px solid rgba(157, 0, 255, 0.3);
    cursor: pointer;
    user-select: none;
    transition: all 0.3s;
}

.aggressive-table th.sortable:hover {
    background: rgba(157, 0, 255, 0.2);
    color: white;
}

.aggressive-table th i {
    margin-right: 8px;
}

.aggressive-table tbody tr {
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s;
}

.aggressive-table tbody tr:hover {
    background: rgba(255, 255, 255, 0.03);
}

.aggressive-table td {
    padding: 15px;
    vertical-align: middle;
}

/* LIGNES PAR STATUT */
.status-success {
    border-left: 4px solid var(--neon-green);
}

.status-pending {
    border-left: 4px solid var(--neon-yellow);
}

.status-failed {
    border-left: 4px solid var(--neon-red);
}

.status-cancelled {
    border-left: 4px solid #777;
}

/* CELLULES SPÉCIFIQUES */
.payment-id .id-badge {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    padding: 5px 10px;
    border-radius: 20px;
    font-family: 'Courier New', monospace;
    font-weight: 700;
    font-size: 0.9rem;
}

.payment-item .item-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.payment-item i {
    font-size: 1.2rem;
    color: var(--neon-blue);
    width: 30px;
}

.payment-item .item-details {
    display: flex;
    flex-direction: column;
}

.payment-item strong {
    color: white;
    font-size: 0.95rem;
}

.payment-item small {
    color: #aaa;
    font-size: 0.8rem;
}

.payment-date .date-time {
    display: flex;
    flex-direction: column;
}

.payment-date .date {
    color: white;
    font-weight: 600;
}

.payment-date .time {
    color: #aaa;
    font-size: 0.9rem;
}

.payment-amount .amount-value {
    color: var(--neon-green);
    font-weight: 900;
    font-size: 1.1rem;
}

.payment-method .method-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.method-card {
    background: rgba(0, 243, 255, 0.1);
    border: 1px solid var(--neon-blue);
    color: var(--neon-blue);
}

.method-paypal {
    background: rgba(0, 97, 242, 0.1);
    border: 1px solid #0061f2;
    color: #0061f2;
}

.method-transfer {
    background: rgba(157, 0, 255, 0.1);
    border: 1px solid var(--neon-purple);
    color: var(--neon-purple);
}

.method-cash {
    background: rgba(255, 204, 0, 0.1);
    border: 1px solid var(--neon-yellow);
    color: var(--neon-yellow);
}

.payment-status .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.status-success {
    background: rgba(0, 255, 65, 0.1);
    border: 1px solid var(--neon-green);
    color: var(--neon-green);
}

.status-pending {
    background: rgba(255, 204, 0, 0.1);
    border: 1px solid var(--neon-yellow);
    color: var(--neon-yellow);
}

.status-failed {
    background: rgba(255, 0, 51, 0.1);
    border: 1px solid var(--neon-red);
    color: var(--neon-red);
}

.status-cancelled {
    background: rgba(119, 119, 119, 0.1);
    border: 1px solid #777;
    color: #777;
}

.payment-ref .ref-code {
    background: rgba(255, 255, 255, 0.05);
    padding: 6px 10px;
    border-radius: 6px;
    font-family: 'Courier New', monospace;
    color: white;
    font-size: 0.9rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.payment-actions .action-buttons {
    display: flex;
    gap: 8px;
    justify-content: center;
}

.action-btn {
    width: 35px;
    height: 35px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    border: 2px solid;
    background: transparent;
    color: white;
    text-decoration: none;
}

.view-btn {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.view-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: translateY(-2px);
}

.edit-btn {
    border-color: var(--neon-green);
    color: var(--neon-green);
}

.edit-btn:hover {
    background: var(--neon-green);
    color: black;
    transform: translateY(-2px);
}

.delete-btn {
    border-color: var(--neon-red);
    color: var(--neon-red);
}

.delete-btn:hover {
    background: var(--neon-red);
    color: black;
    transform: translateY(-2px);
}

/* NO DATA */
.no-data-row td {
    padding: 50px 20px;
}

.no-data-message {
    text-align: center;
    color: #777;
}

.no-data-message i {
    margin-bottom: 20px;
    opacity: 0.5;
}

.no-data-message h3 {
    color: #aaa;
    margin-bottom: 10px;
    font-size: 1.5rem;
}

.no-data-message p {
    margin-bottom: 20px;
    font-size: 1rem;
}

/* TABLE FOOTER */
.table-footer {
    padding: 20px 30px;
    border-top: 2px solid rgba(157, 0, 255, 0.3);
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(157, 0, 255, 0.1);
}

.pagination-info {
    color: #aaa;
    font-size: 0.9rem;
}

.pagination-controls {
    display: flex;
    align-items: center;
    gap: 10px;
}

.pagination-btn {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    border: 2px solid rgba(157, 0, 255, 0.3);
    background: transparent;
    color: var(--neon-purple);
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pagination-btn:hover:not(:disabled) {
    background: var(--neon-purple);
    color: white;
    border-color: var(--neon-purple);
}

.pagination-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

.pagination-current {
    color: white;
    font-weight: 600;
    padding: 0 10px;
}

/* FILTRES */
.filters-section {
    background: rgba(20, 20, 30, 0.9);
    border-radius: 15px;
    border: 2px solid var(--neon-blue);
    padding: 25px;
    margin-top: 30px;
}

.filters-section h3 {
    color: var(--neon-blue);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.filter-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    padding: 10px 20px;
    border: 2px solid;
    border-radius: 10px;
    background: transparent;
    color: #aaa;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
}

.filter-btn.active {
    background: var(--neon-blue);
    border-color: var(--neon-blue);
    color: black;
}

.filter-btn:not(.active):hover {
    border-color: #777;
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

/* RESPONSIVE */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .table-header {
        flex-direction: column;
        gap: 15px;
        align-items: stretch;
    }
    
    .search-box {
        width: 100%;
    }
    
    .table-controls {
        flex-direction: column;
        width: 100%;
    }
    
    .table-btn {
        width: 100%;
        justify-content: center;
    }
    
    .aggressive-table {
        min-width: 800px;
    }
    
    .filter-buttons {
        flex-direction: column;
    }
    
    .filter-btn {
        justify-content: center;
    }
}
</style>

<script>
// FILTRES
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer tous les boutons de filtre
    const filterButtons = document.querySelectorAll('.filter-btn');
    const paymentRows = document.querySelectorAll('.payment-row');
    
    // Fonction pour filtrer le tableau
    window.filterTable = function(status) {
        // Mettre à jour les boutons actifs
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.textContent.includes(status.toUpperCase()) || (status === 'all' && btn.textContent.includes('TOUS'))) {
                btn.classList.add('active');
            }
        });
        
        // Filtrer les lignes
        paymentRows.forEach(row => {
            if (status === 'all') {
                row.style.display = '';
            } else {
                if (row.classList.contains('status-' + status)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
        
        // Animation
        paymentRows.forEach((row, index) => {
            if (row.style.display !== 'none') {
                row.style.animationDelay = `\${index * 0.05}s`;
                row.style.animation = 'fadeIn 0.5s ease-out forwards';
            }
        });
    };
    
    // Recherche
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            paymentRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
    
    // Tri du tableau
    window.sortTable = function(columnIndex) {
        const table = document.getElementById('paymentsTable');
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr:not(.no-data-row)'));
        
        // Trier les lignes
        rows.sort((a, b) => {
            const aValue = a.cells[columnIndex].textContent.trim().toLowerCase();
            const bValue = b.cells[columnIndex].textContent.trim().toLowerCase();
            
            if (columnIndex === 0) { // ID
                return parseInt(aValue.replace('#', '')) - parseInt(bValue.replace('#', ''));
            } else if (columnIndex === 3) { // Montant
                const aAmount = parseFloat(aValue.replace(' €', '').replace(',', '.').replace(/\\s/g, ''));
                const bAmount = parseFloat(bValue.replace(' €', '').replace(',', '.').replace(/\\s/g, ''));
                return aAmount - bAmount;
            } else if (columnIndex === 2) { // Date
                const aDate = new Date(a.cells[2].querySelector('.date').textContent.split('/').reverse().join('-'));
                const bDate = new Date(b.cells[2].querySelector('.date').textContent.split('/').reverse().join('-'));
                return aDate - bDate;
            }
            
            return aValue.localeCompare(bValue);
        });
        
        // Réorganiser le tbody
        rows.forEach(row => tbody.appendChild(row));
        
        // Animation
        rows.forEach((row, index) => {
            row.style.animationDelay = `\${index * 0.03}s`;
            row.style.animation = 'slideIn 0.3s ease-out forwards';
        });
    };
    
    // Confirmation de suppression
    window.confirmDelete = function(id, ref) {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        const deleteRef = document.getElementById('delete-ref');
        const deleteForm = document.getElementById('delete-form');
        
        // Mettre à jour les informations
        deleteRef.textContent = ref;
        deleteForm.action = `/payment/\${id}`;
        
        // Récupérer le token CSRF
        fetch(`/payment/\${id}`)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const token = doc.querySelector('input[name=\"_token\"]')?.value;
                if (token) {
                    deleteForm.querySelector('input[name=\"_token\"]').value = token;
                }
            });
        
        // Afficher le modal
        deleteModal.show();
    };
    
    // Actualisation des données
    window.refreshData = function() {
        const refreshBtn = event?.target || document.querySelector('.neon-btn.purple');
        const originalContent = refreshBtn.innerHTML;
        
        refreshBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> ACTUALISATION...';
        refreshBtn.disabled = true;
        
        setTimeout(() => {
            window.location.reload();
        }, 1000);
    };
    
    // Exportation
    window.exportData = function() {
        const exportBtn = event?.target.closest('button') || document.querySelector('.export-btn');
        const originalContent = exportBtn.innerHTML;
        
        exportBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> EXPORT...';
        exportBtn.disabled = true;
        
        // Simuler l'export
        setTimeout(() => {
            alert('Export terminé ! Les données ont été téléchargées.');
            exportBtn.innerHTML = originalContent;
            exportBtn.disabled = false;
        }, 1500);
    };
    
    // Ajouter l'animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .payment-row {
            opacity: 0;
        }
    `;
    document.head.appendChild(style);
    
    // Animation initiale des lignes
    paymentRows.forEach((row, index) => {
        row.style.animationDelay = `\${index * 0.05}s`;
        row.style.animation = 'fadeIn 0.5s ease-out forwards';
    });
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
        return "payment/index.html.twig";
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
        return array (  495 => 260,  489 => 257,  483 => 254,  477 => 251,  471 => 248,  462 => 241,  444 => 228,  440 => 226,  438 => 225,  431 => 220,  418 => 213,  410 => 207,  408 => 206,  394 => 199,  385 => 193,  377 => 188,  370 => 184,  365 => 181,  359 => 179,  355 => 177,  353 => 176,  350 => 175,  348 => 174,  345 => 173,  343 => 172,  340 => 171,  338 => 170,  334 => 169,  329 => 166,  323 => 164,  319 => 162,  317 => 161,  314 => 160,  312 => 159,  309 => 158,  307 => 157,  304 => 156,  302 => 155,  298 => 154,  291 => 150,  283 => 145,  279 => 144,  274 => 141,  264 => 133,  257 => 129,  253 => 128,  248 => 125,  246 => 124,  240 => 121,  234 => 119,  229 => 118,  174 => 66,  159 => 54,  144 => 42,  130 => 31,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🔥 LISTE DES PAIEMENTS - PHANTOM SHOP{% endblock %}

{% block body %}
<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🔥 <span>LISTE DES PAIEMENTS</span> 🔥</h1>
        <p class=\"shop-subtitle\">GESTION • TRANSACTIONS • SURVEILLANCE</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"{{ path('app_payment_new') }}\" class=\"neon-btn green\">
                <i class=\"fas fa-plus-circle\"></i> NOUVEAU PAIEMENT
            </a>
            <button class=\"neon-btn purple\" onclick=\"refreshData()\">
                <i class=\"fas fa-sync-alt\"></i> ACTUALISER
            </button>
        </div>
    </div>

    <!-- STATISTIQUES RAPIDES -->
    <div class=\"stats-grid\">
        <div class=\"stat-card total\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-money-bill-wave\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">TOTAL DES PAIEMENTS</div>
                <div class=\"stat-value\">{{ payments|length }}</div>
            </div>
        </div>
        
        <div class=\"stat-card success\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-check-circle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">PAIEMENTS RÉUSSIS</div>
                <div class=\"stat-value\">
                    {{ payments|filter(p => p.paymentStatus == 'success')|length }}
                </div>
            </div>
        </div>
        
        <div class=\"stat-card pending\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">EN ATTENTE</div>
                <div class=\"stat-value\">
                    {{ payments|filter(p => p.paymentStatus == 'pending')|length }}
                </div>
            </div>
        </div>
        
        <div class=\"stat-card failed\">
            <div class=\"stat-icon\">
                <i class=\"fas fa-times-circle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-label\">ÉCHOUÉS</div>
                <div class=\"stat-value\">
                    {{ payments|filter(p => p.paymentStatus == 'failed')|length }}
                </div>
            </div>
        </div>
    </div>

    <!-- TABLEAU DES PAIEMENTS -->
    <div class=\"aggressive-table-container\">
        <div class=\"table-header\">
            <h2><i class=\"fas fa-list\"></i> TOUS LES PAIEMENTS</h2>
            <div class=\"table-controls\">
                <div class=\"search-box\">
                    <i class=\"fas fa-search\"></i>
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un paiement...\">
                </div>
                <button class=\"table-btn export-btn\" onclick=\"exportData()\">
                    <i class=\"fas fa-download\"></i> EXPORTER
                </button>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"aggressive-table\" id=\"paymentsTable\">
                <thead>
                    <tr>
                        <th class=\"sortable\" onclick=\"sortTable(0)\">
                            <i class=\"fas fa-hashtag\"></i> ID
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(1)\">
                            <i class=\"fas fa-cube\"></i> ARTICLE
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(2)\">
                            <i class=\"fas fa-calendar\"></i> DATE
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(3)\">
                            <i class=\"fas fa-euro-sign\"></i> MONTANT
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(4)\">
                            <i class=\"fas fa-credit-card\"></i> MÉTHODE
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(5)\">
                            <i class=\"fas fa-check-circle\"></i> STATUT
                        </th>
                        <th class=\"sortable\" onclick=\"sortTable(6)\">
                            <i class=\"fas fa-hashtag\"></i> RÉFÉRENCE
                        </th>
                        <th>
                            <i class=\"fas fa-cogs\"></i> ACTIONS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for payment in payments %}
                    <tr class=\"payment-row status-{{ payment.paymentStatus }}\">
                        <td class=\"payment-id\">
                            <span class=\"id-badge\">#{{ payment.id }}</span>
                        </td>
                        <td class=\"payment-item\">
                            {% if payment.shopItem %}
                                <div class=\"item-info\">
                                    <i class=\"fas fa-cube\"></i>
                                    <div class=\"item-details\">
                                        <strong>{{ payment.shopItem.itemName }}</strong>
                                        <small>{{ payment.shopItem.itemCategory }}</small>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"item-info\">
                                    <i class=\"fas fa-ban\"></i>
                                    <div class=\"item-details\">
                                        <strong>Aucun article</strong>
                                        <small>Non associé</small>
                                    </div>
                                </div>
                            {% endif %}
                        </td>
                        <td class=\"payment-date\">
                            <div class=\"date-time\">
                                <div class=\"date\">{{ payment.paymentDate|date('d/m/Y') }}</div>
                                <div class=\"time\">{{ payment.paymentDate|date('H:i') }}</div>
                            </div>
                        </td>
                        <td class=\"payment-amount\">
                            <span class=\"amount-value\">
                                {{ payment.amount|number_format(2, ',', ' ') }} €
                            </span>
                        </td>
                        <td class=\"payment-method\">
                            <span class=\"method-badge method-{{ payment.paymentMethod }}\">
                                {% if payment.paymentMethod == 'card' %}
                                    <i class=\"fas fa-credit-card\"></i> CARTE
                                {% elseif payment.paymentMethod == 'paypal' %}
                                    <i class=\"fab fa-paypal\"></i> PAYPAL
                                {% elseif payment.paymentMethod == 'transfer' %}
                                    <i class=\"fas fa-exchange-alt\"></i> VIREMENT
                                {% elseif payment.paymentMethod == 'cash' %}
                                    <i class=\"fas fa-money-bill\"></i> ESPÈCES
                                {% else %}
                                    <i class=\"fas fa-wallet\"></i> {{ payment.paymentMethod|upper }}
                                {% endif %}
                            </span>
                        </td>
                        <td class=\"payment-status\">
                            <span class=\"status-badge status-{{ payment.paymentStatus }}\">
                                {% if payment.paymentStatus == 'success' %}
                                    <i class=\"fas fa-check\"></i> PAYÉ
                                {% elseif payment.paymentStatus == 'pending' %}
                                    <i class=\"fas fa-clock\"></i> EN ATTENTE
                                {% elseif payment.paymentStatus == 'failed' %}
                                    <i class=\"fas fa-times\"></i> ÉCHOUÉ
                                {% elseif payment.paymentStatus == 'cancelled' %}
                                    <i class=\"fas fa-ban\"></i> ANNULÉ
                                {% else %}
                                    {{ payment.paymentStatus|upper }}
                                {% endif %}
                            </span>
                        </td>
                        <td class=\"payment-ref\">
                            <code class=\"ref-code\">{{ payment.transactionRef }}</code>
                        </td>
                        <td class=\"payment-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"{{ path('app_payment_show', {'id': payment.id}) }}\" 
                                   class=\"action-btn view-btn\" 
                                   title=\"Voir détails\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('app_payment_edit', {'id': payment.id}) }}\" 
                                   class=\"action-btn edit-btn\" 
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <button class=\"action-btn delete-btn\" 
                                        onclick=\"confirmDelete({{ payment.id }}, '{{ payment.transactionRef }}')\"
                                        title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr class=\"no-data-row\">
                        <td colspan=\"8\">
                            <div class=\"no-data-message\">
                                <i class=\"fas fa-database fa-2x\"></i>
                                <h3>AUCUN PAIEMENT TROUVÉ</h3>
                                <p>Créez votre premier paiement pour commencer</p>
                                <a href=\"{{ path('app_payment_new') }}\" class=\"neon-btn blue\">
                                    <i class=\"fas fa-plus-circle\"></i> CRÉER UN PAIEMENT
                                </a>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- PAGINATION -->
        {% if payments|length > 10 %}
        <div class=\"table-footer\">
            <div class=\"pagination-info\">
                Affichage de 1 à {{ payments|length }} sur {{ payments|length }} paiements
            </div>
            <div class=\"pagination-controls\">
                <button class=\"pagination-btn\" disabled>
                    <i class=\"fas fa-chevron-left\"></i>
                </button>
                <span class=\"pagination-current\">Page 1</span>
                <button class=\"pagination-btn\">
                    <i class=\"fas fa-chevron-right\"></i>
                </button>
            </div>
        </div>
        {% endif %}
    </div>

    <!-- FILTRES -->
    <div class=\"filters-section\">
        <h3><i class=\"fas fa-filter\"></i> FILTRES</h3>
        <div class=\"filter-buttons\">
            <button class=\"filter-btn active\" onclick=\"filterTable('all')\">
                <i class=\"fas fa-globe\"></i> TOUS ({{ payments|length }})
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('success')\">
                <i class=\"fas fa-check-circle\"></i> PAYÉS ({{ payments|filter(p => p.paymentStatus == 'success')|length }})
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('pending')\">
                <i class=\"fas fa-clock\"></i> EN ATTENTE ({{ payments|filter(p => p.paymentStatus == 'pending')|length }})
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('failed')\">
                <i class=\"fas fa-times-circle\"></i> ÉCHOUÉS ({{ payments|filter(p => p.paymentStatus == 'failed')|length }})
            </button>
            <button class=\"filter-btn\" onclick=\"filterTable('cancelled')\">
                <i class=\"fas fa-ban\"></i> ANNULÉS ({{ payments|filter(p => p.paymentStatus == 'cancelled')|length }})
            </button>
        </div>
    </div>
</div>

<!-- DELETE CONFIRMATION MODAL -->
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
                        <span class=\"value\" id=\"delete-ref\"></span>
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
                <form id=\"delete-form\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"\">
                    <button type=\"submit\" class=\"btn-modal btn-delete\">
                        <i class=\"fas fa-trash\"></i> SUPPRIMER
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- STYLES SPÉCIFIQUES À L'INDEX -->
<style>
/* STATISTIQUES */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 30px 0;
}

.stat-card {
    background: rgba(20, 20, 30, 0.9);
    border-radius: 15px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    border: 2px solid;
    transition: all 0.3s;
    animation: statPulse 3s infinite alternate;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card.total {
    border-color: var(--neon-blue);
    animation-name: statPulseBlue;
}

.stat-card.success {
    border-color: var(--neon-green);
    animation-name: statPulseGreen;
}

.stat-card.pending {
    border-color: var(--neon-yellow);
    animation-name: statPulseYellow;
}

.stat-card.failed {
    border-color: var(--neon-red);
    animation-name: statPulseRed;
}

@keyframes statPulseBlue {
    0% { box-shadow: 0 0 10px rgba(0, 243, 255, 0.2); }
    100% { box-shadow: 0 0 30px rgba(0, 243, 255, 0.4); }
}

@keyframes statPulseGreen {
    0% { box-shadow: 0 0 10px rgba(0, 255, 65, 0.2); }
    100% { box-shadow: 0 0 30px rgba(0, 255, 65, 0.4); }
}

@keyframes statPulseYellow {
    0% { box-shadow: 0 0 10px rgba(255, 204, 0, 0.2); }
    100% { box-shadow: 0 0 30px rgba(255, 204, 0, 0.4); }
}

@keyframes statPulseRed {
    0% { box-shadow: 0 0 10px rgba(255, 0, 51, 0.2); }
    100% { box-shadow: 0 0 30px rgba(255, 0, 51, 0.4); }
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
}

.stat-card.total .stat-icon {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
}

.stat-card.success .stat-icon {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
}

.stat-card.pending .stat-icon {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
}

.stat-card.failed .stat-icon {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.9rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 2rem;
    font-weight: 900;
    color: white;
}

/* TABLE */
.aggressive-table-container {
    background: rgba(20, 20, 30, 0.9);
    border-radius: 15px;
    border: 2px solid var(--neon-purple);
    overflow: hidden;
    margin: 30px 0;
    box-shadow: 0 0 40px rgba(157, 0, 255, 0.2);
}

.table-header {
    padding: 20px 30px;
    border-bottom: 2px solid rgba(157, 0, 255, 0.3);
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(157, 0, 255, 0.1);
}

.table-header h2 {
    color: var(--neon-purple);
    font-size: 1.5rem;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.table-controls {
    display: flex;
    align-items: center;
    gap: 15px;
}

.search-box {
    position: relative;
    width: 300px;
}

.search-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-blue);
}

.search-box input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 10px;
    color: white;
    font-size: 1rem;
    transition: all 0.3s;
}

.search-box input:focus {
    outline: none;
    border-color: var(--neon-blue);
    box-shadow: 0 0 20px rgba(0, 243, 255, 0.3);
    background: rgba(255, 255, 255, 0.08);
}

.table-btn {
    padding: 10px 20px;
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
    font-size: 0.9rem;
}

.export-btn {
    background: rgba(0, 243, 255, 0.1);
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.export-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 243, 255, 0.4);
}

.table-responsive {
    overflow-x: auto;
}

.aggressive-table {
    width: 100%;
    border-collapse: collapse;
}

.aggressive-table thead {
    background: rgba(157, 0, 255, 0.1);
}

.aggressive-table th {
    padding: 20px 15px;
    text-align: left;
    color: var(--neon-purple);
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    border-bottom: 2px solid rgba(157, 0, 255, 0.3);
    cursor: pointer;
    user-select: none;
    transition: all 0.3s;
}

.aggressive-table th.sortable:hover {
    background: rgba(157, 0, 255, 0.2);
    color: white;
}

.aggressive-table th i {
    margin-right: 8px;
}

.aggressive-table tbody tr {
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s;
}

.aggressive-table tbody tr:hover {
    background: rgba(255, 255, 255, 0.03);
}

.aggressive-table td {
    padding: 15px;
    vertical-align: middle;
}

/* LIGNES PAR STATUT */
.status-success {
    border-left: 4px solid var(--neon-green);
}

.status-pending {
    border-left: 4px solid var(--neon-yellow);
}

.status-failed {
    border-left: 4px solid var(--neon-red);
}

.status-cancelled {
    border-left: 4px solid #777;
}

/* CELLULES SPÉCIFIQUES */
.payment-id .id-badge {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    padding: 5px 10px;
    border-radius: 20px;
    font-family: 'Courier New', monospace;
    font-weight: 700;
    font-size: 0.9rem;
}

.payment-item .item-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.payment-item i {
    font-size: 1.2rem;
    color: var(--neon-blue);
    width: 30px;
}

.payment-item .item-details {
    display: flex;
    flex-direction: column;
}

.payment-item strong {
    color: white;
    font-size: 0.95rem;
}

.payment-item small {
    color: #aaa;
    font-size: 0.8rem;
}

.payment-date .date-time {
    display: flex;
    flex-direction: column;
}

.payment-date .date {
    color: white;
    font-weight: 600;
}

.payment-date .time {
    color: #aaa;
    font-size: 0.9rem;
}

.payment-amount .amount-value {
    color: var(--neon-green);
    font-weight: 900;
    font-size: 1.1rem;
}

.payment-method .method-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.method-card {
    background: rgba(0, 243, 255, 0.1);
    border: 1px solid var(--neon-blue);
    color: var(--neon-blue);
}

.method-paypal {
    background: rgba(0, 97, 242, 0.1);
    border: 1px solid #0061f2;
    color: #0061f2;
}

.method-transfer {
    background: rgba(157, 0, 255, 0.1);
    border: 1px solid var(--neon-purple);
    color: var(--neon-purple);
}

.method-cash {
    background: rgba(255, 204, 0, 0.1);
    border: 1px solid var(--neon-yellow);
    color: var(--neon-yellow);
}

.payment-status .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.status-success {
    background: rgba(0, 255, 65, 0.1);
    border: 1px solid var(--neon-green);
    color: var(--neon-green);
}

.status-pending {
    background: rgba(255, 204, 0, 0.1);
    border: 1px solid var(--neon-yellow);
    color: var(--neon-yellow);
}

.status-failed {
    background: rgba(255, 0, 51, 0.1);
    border: 1px solid var(--neon-red);
    color: var(--neon-red);
}

.status-cancelled {
    background: rgba(119, 119, 119, 0.1);
    border: 1px solid #777;
    color: #777;
}

.payment-ref .ref-code {
    background: rgba(255, 255, 255, 0.05);
    padding: 6px 10px;
    border-radius: 6px;
    font-family: 'Courier New', monospace;
    color: white;
    font-size: 0.9rem;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.payment-actions .action-buttons {
    display: flex;
    gap: 8px;
    justify-content: center;
}

.action-btn {
    width: 35px;
    height: 35px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s;
    border: 2px solid;
    background: transparent;
    color: white;
    text-decoration: none;
}

.view-btn {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.view-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: translateY(-2px);
}

.edit-btn {
    border-color: var(--neon-green);
    color: var(--neon-green);
}

.edit-btn:hover {
    background: var(--neon-green);
    color: black;
    transform: translateY(-2px);
}

.delete-btn {
    border-color: var(--neon-red);
    color: var(--neon-red);
}

.delete-btn:hover {
    background: var(--neon-red);
    color: black;
    transform: translateY(-2px);
}

/* NO DATA */
.no-data-row td {
    padding: 50px 20px;
}

.no-data-message {
    text-align: center;
    color: #777;
}

.no-data-message i {
    margin-bottom: 20px;
    opacity: 0.5;
}

.no-data-message h3 {
    color: #aaa;
    margin-bottom: 10px;
    font-size: 1.5rem;
}

.no-data-message p {
    margin-bottom: 20px;
    font-size: 1rem;
}

/* TABLE FOOTER */
.table-footer {
    padding: 20px 30px;
    border-top: 2px solid rgba(157, 0, 255, 0.3);
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(157, 0, 255, 0.1);
}

.pagination-info {
    color: #aaa;
    font-size: 0.9rem;
}

.pagination-controls {
    display: flex;
    align-items: center;
    gap: 10px;
}

.pagination-btn {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    border: 2px solid rgba(157, 0, 255, 0.3);
    background: transparent;
    color: var(--neon-purple);
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pagination-btn:hover:not(:disabled) {
    background: var(--neon-purple);
    color: white;
    border-color: var(--neon-purple);
}

.pagination-btn:disabled {
    opacity: 0.3;
    cursor: not-allowed;
}

.pagination-current {
    color: white;
    font-weight: 600;
    padding: 0 10px;
}

/* FILTRES */
.filters-section {
    background: rgba(20, 20, 30, 0.9);
    border-radius: 15px;
    border: 2px solid var(--neon-blue);
    padding: 25px;
    margin-top: 30px;
}

.filters-section h3 {
    color: var(--neon-blue);
    font-size: 1.3rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.filter-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    padding: 10px 20px;
    border: 2px solid;
    border-radius: 10px;
    background: transparent;
    color: #aaa;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
}

.filter-btn.active {
    background: var(--neon-blue);
    border-color: var(--neon-blue);
    color: black;
}

.filter-btn:not(.active):hover {
    border-color: #777;
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

/* RESPONSIVE */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .table-header {
        flex-direction: column;
        gap: 15px;
        align-items: stretch;
    }
    
    .search-box {
        width: 100%;
    }
    
    .table-controls {
        flex-direction: column;
        width: 100%;
    }
    
    .table-btn {
        width: 100%;
        justify-content: center;
    }
    
    .aggressive-table {
        min-width: 800px;
    }
    
    .filter-buttons {
        flex-direction: column;
    }
    
    .filter-btn {
        justify-content: center;
    }
}
</style>

<script>
// FILTRES
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer tous les boutons de filtre
    const filterButtons = document.querySelectorAll('.filter-btn');
    const paymentRows = document.querySelectorAll('.payment-row');
    
    // Fonction pour filtrer le tableau
    window.filterTable = function(status) {
        // Mettre à jour les boutons actifs
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.textContent.includes(status.toUpperCase()) || (status === 'all' && btn.textContent.includes('TOUS'))) {
                btn.classList.add('active');
            }
        });
        
        // Filtrer les lignes
        paymentRows.forEach(row => {
            if (status === 'all') {
                row.style.display = '';
            } else {
                if (row.classList.contains('status-' + status)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
        
        // Animation
        paymentRows.forEach((row, index) => {
            if (row.style.display !== 'none') {
                row.style.animationDelay = `\${index * 0.05}s`;
                row.style.animation = 'fadeIn 0.5s ease-out forwards';
            }
        });
    };
    
    // Recherche
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            paymentRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
    
    // Tri du tableau
    window.sortTable = function(columnIndex) {
        const table = document.getElementById('paymentsTable');
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr:not(.no-data-row)'));
        
        // Trier les lignes
        rows.sort((a, b) => {
            const aValue = a.cells[columnIndex].textContent.trim().toLowerCase();
            const bValue = b.cells[columnIndex].textContent.trim().toLowerCase();
            
            if (columnIndex === 0) { // ID
                return parseInt(aValue.replace('#', '')) - parseInt(bValue.replace('#', ''));
            } else if (columnIndex === 3) { // Montant
                const aAmount = parseFloat(aValue.replace(' €', '').replace(',', '.').replace(/\\s/g, ''));
                const bAmount = parseFloat(bValue.replace(' €', '').replace(',', '.').replace(/\\s/g, ''));
                return aAmount - bAmount;
            } else if (columnIndex === 2) { // Date
                const aDate = new Date(a.cells[2].querySelector('.date').textContent.split('/').reverse().join('-'));
                const bDate = new Date(b.cells[2].querySelector('.date').textContent.split('/').reverse().join('-'));
                return aDate - bDate;
            }
            
            return aValue.localeCompare(bValue);
        });
        
        // Réorganiser le tbody
        rows.forEach(row => tbody.appendChild(row));
        
        // Animation
        rows.forEach((row, index) => {
            row.style.animationDelay = `\${index * 0.03}s`;
            row.style.animation = 'slideIn 0.3s ease-out forwards';
        });
    };
    
    // Confirmation de suppression
    window.confirmDelete = function(id, ref) {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        const deleteRef = document.getElementById('delete-ref');
        const deleteForm = document.getElementById('delete-form');
        
        // Mettre à jour les informations
        deleteRef.textContent = ref;
        deleteForm.action = `/payment/\${id}`;
        
        // Récupérer le token CSRF
        fetch(`/payment/\${id}`)
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const token = doc.querySelector('input[name=\"_token\"]')?.value;
                if (token) {
                    deleteForm.querySelector('input[name=\"_token\"]').value = token;
                }
            });
        
        // Afficher le modal
        deleteModal.show();
    };
    
    // Actualisation des données
    window.refreshData = function() {
        const refreshBtn = event?.target || document.querySelector('.neon-btn.purple');
        const originalContent = refreshBtn.innerHTML;
        
        refreshBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> ACTUALISATION...';
        refreshBtn.disabled = true;
        
        setTimeout(() => {
            window.location.reload();
        }, 1000);
    };
    
    // Exportation
    window.exportData = function() {
        const exportBtn = event?.target.closest('button') || document.querySelector('.export-btn');
        const originalContent = exportBtn.innerHTML;
        
        exportBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> EXPORT...';
        exportBtn.disabled = true;
        
        // Simuler l'export
        setTimeout(() => {
            alert('Export terminé ! Les données ont été téléchargées.');
            exportBtn.innerHTML = originalContent;
            exportBtn.disabled = false;
        }, 1500);
    };
    
    // Ajouter l'animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .payment-row {
            opacity: 0;
        }
    `;
    document.head.appendChild(style);
    
    // Animation initiale des lignes
    paymentRows.forEach((row, index) => {
        row.style.animationDelay = `\${index * 0.05}s`;
        row.style.animation = 'fadeIn 0.5s ease-out forwards';
    });
});
</script>
{% endblock %}", "payment/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\payment\\index.html.twig");
    }
}
