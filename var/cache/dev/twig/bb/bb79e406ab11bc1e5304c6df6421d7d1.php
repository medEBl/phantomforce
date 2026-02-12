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

/* back/payment/index.html.twig */
class __TwigTemplate_ad602c8fd5afe255f77a7474308b9dfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/index.html.twig"));

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

        yield "🎮 Gestion des Paiements - Admin Panel";
        
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
                    Gestion des Paiements
                </h1>
                <p class=\"text-muted mb-0\">Liste de tous les paiements du système</p>
            </div>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-plus-circle\"></i>
                Nouveau Paiement
            </a>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-hashtag fa-2x\" style=\"color: var(--admin-accent);\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">Total</h3>
                        <h2 class=\"h4 mb-0\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 33, $this->source); })())), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-check-circle fa-2x\" style=\"color: var(--admin-success);\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">Payés</h3>
                        <h2 class=\"h4 mb-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 46, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 46, $this->source); })()), "paymentStatus", [], "any", false, false, false, 46) == "success"); })), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-clock fa-2x\" style=\"color: #ffc107;\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">En attente</h3>
                        <h2 class=\"h4 mb-0\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 59, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 59, $this->source); })()), "paymentStatus", [], "any", false, false, false, 59) == "pending"); })), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-times-circle fa-2x\" style=\"color: var(--admin-danger);\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">Échoués</h3>
                        <h2 class=\"h4 mb-0\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 72, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 72, $this->source); })()), "paymentStatus", [], "any", false, false, false, 72) == "failed"); })), "html", null, true);
        yield "</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des paiements -->
    <div class=\"admin-card\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h2 class=\"h5 mb-0\">
                <i class=\"fas fa-list\"></i>
                Liste des paiements
            </h2>
            <div class=\"d-flex gap-2\">
                <div class=\"input-group\" style=\"max-width: 300px;\">
                    <span class=\"input-group-text bg-transparent border-end-0\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\" class=\"form-control form-control-sm border-start-0\" 
                           placeholder=\"Rechercher...\" id=\"searchInput\">
                </div>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"admin-table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Article</th>
                        <th>Date</th>
                        <th>Montant</th>
                        <th>Méthode</th>
                        <th>Statut</th>
                        <th>Référence</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 112, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 113
            yield "                    <tr>
                        <td>
                            <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.1); color: var(--admin-accent);\">
                                #";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 116), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            ";
            // line 120
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "shopItem", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "                                <div class=\"d-flex align-items-center gap-2\">
                                    <i class=\"fas fa-cube\" style=\"color: var(--admin-accent);\"></i>
                                    <div>
                                        <div class=\"fw-bold\">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "shopItem", [], "any", false, false, false, 124), "itemName", [], "any", false, false, false, 124), "html", null, true);
                yield "</div>
                                        <small class=\"text-muted\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "shopItem", [], "any", false, false, false, 125), "itemCategory", [], "any", false, false, false, 125), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                            ";
            } else {
                // line 129
                yield "                                <span class=\"text-muted\">Aucun</span>
                            ";
            }
            // line 131
            yield "                        </td>
                        <td>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 132), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td class=\"fw-bold\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 133), 2, ",", " "), "html", null, true);
            yield " €</td>
                        <td>
                            <span class=\"badge-admin\" style=\"background: rgba(255, 255, 255, 0.1);\">
                                ";
            // line 136
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 136) == "card")) {
                // line 137
                yield "                                    <i class=\"fas fa-credit-card me-1\"></i> Carte
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["payment"], "paymentMethod", [], "any", false, false, false, 138) == "paypal")) {
                // line 139
                yield "                                    <i class=\"fab fa-paypal me-1\"></i> PayPal
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["payment"], "paymentMethod", [], "any", false, false, false, 140) == "transfer")) {
                // line 141
                yield "                                    <i class=\"fas fa-exchange-alt me-1\"></i> Virement
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 142
$context["payment"], "paymentMethod", [], "any", false, false, false, 142) == "cash")) {
                // line 143
                yield "                                    <i class=\"fas fa-money-bill me-1\"></i> Espèces
                                ";
            } else {
                // line 145
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 145), "html", null, true);
                yield "
                                ";
            }
            // line 147
            yield "                            </span>
                        </td>
                        <td>
                            ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentStatus", [], "any", false, false, false, 150) == "success")) {
                // line 151
                yield "                                <span class=\"badge-admin\" style=\"background: rgba(0, 255, 136, 0.1); color: var(--admin-success);\">
                                    <i class=\"fas fa-check me-1\"></i> Payé
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 154
$context["payment"], "paymentStatus", [], "any", false, false, false, 154) == "pending")) {
                // line 155
                yield "                                <span class=\"badge-admin\" style=\"background: rgba(255, 193, 7, 0.1); color: #ffc107;\">
                                    <i class=\"fas fa-clock me-1\"></i> En attente
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 158
$context["payment"], "paymentStatus", [], "any", false, false, false, 158) == "failed")) {
                // line 159
                yield "                                <span class=\"badge-admin\" style=\"background: rgba(255, 0, 60, 0.1); color: var(--admin-danger);\">
                                    <i class=\"fas fa-times me-1\"></i> Échoué
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 162
$context["payment"], "paymentStatus", [], "any", false, false, false, 162) == "cancelled")) {
                // line 163
                yield "                                <span class=\"badge-admin\" style=\"background: rgba(119, 119, 119, 0.1); color: #777;\">
                                    <i class=\"fas fa-ban me-1\"></i> Annulé
                                </span>
                            ";
            } else {
                // line 167
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentStatus", [], "any", false, false, false, 167), "html", null, true);
                yield "
                            ";
            }
            // line 169
            yield "                        </td>
                        <td>
                            <code class=\"bg-dark px-2 py-1 rounded\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionRef", [], "any", false, false, false, 171), "html", null, true);
            yield "</code>
                        </td>
                        <td>
                            <div class=\"d-flex gap-2\">
                                <a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" 
                                   class=\"btn-admin btn-admin-secondary btn-sm\"
                                   title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" 
                                   class=\"btn-admin btn-admin-secondary btn-sm\"
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"post\" action=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 185)]), "html", null, true);
            yield "\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?');\"
                                      style=\"display: inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 188))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn-admin btn-admin-danger btn-sm\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 196
        if (!$context['_iterated']) {
            // line 197
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center py-5\">
                            <div class=\"text-muted\">
                                <i class=\"fas fa-database fa-3x mb-3\"></i>
                                <h4>Aucun paiement trouvé</h4>
                                <p>Créez votre premier paiement pour commencer</p>
                                <a href=\"";
            // line 203
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_new");
            yield "\" class=\"btn-admin btn-admin-primary\">
                                    <i class=\"fas fa-plus-circle\"></i>
                                    Créer un paiement
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 216
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 216, $this->source); })())) > 10)) {
            // line 217
            yield "        <nav class=\"d-flex justify-content-between align-items-center mt-3\">
            <div class=\"text-muted\">
                Affichage de 1 à ";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 219, $this->source); })())), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 219, $this->source); })())), "html", null, true);
            yield " paiements
            </div>
            <ul class=\"pagination mb-0\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link bg-transparent border-0\" href=\"#\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>
                <li class=\"page-item active\">
                    <a class=\"page-link bg-transparent border-0\" href=\"#\">1</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link bg-transparent border-0\" href=\"#\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            </ul>
        </nav>
        ";
        }
        // line 238
        yield "    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Recherche en temps réel
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('.admin-table tbody tr');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
    
    // Animation des lignes
    tableRows.forEach((row, index) => {
        if (row.style.display !== 'none') {
            row.style.animationDelay = `\${index * 0.05}s`;
            row.style.opacity = '0';
            row.style.transform = 'translateY(10px)';
            row.style.animation = 'fadeInUp 0.3s ease forwards';
        }
    });
    
    // Ajout de l'animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);
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
        return "back/payment/index.html.twig";
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
        return array (  449 => 238,  425 => 219,  421 => 217,  419 => 216,  412 => 211,  398 => 203,  390 => 197,  388 => 196,  375 => 188,  369 => 185,  361 => 180,  353 => 175,  346 => 171,  342 => 169,  336 => 167,  330 => 163,  328 => 162,  323 => 159,  321 => 158,  316 => 155,  314 => 154,  309 => 151,  307 => 150,  302 => 147,  296 => 145,  292 => 143,  290 => 142,  287 => 141,  285 => 140,  282 => 139,  280 => 138,  277 => 137,  275 => 136,  269 => 133,  265 => 132,  262 => 131,  258 => 129,  251 => 125,  247 => 124,  242 => 121,  240 => 120,  233 => 116,  228 => 113,  223 => 112,  180 => 72,  164 => 59,  148 => 46,  132 => 33,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}🎮 Gestion des Paiements - Admin Panel{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"admin-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1 class=\"h3 mb-0\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                    Gestion des Paiements
                </h1>
                <p class=\"text-muted mb-0\">Liste de tous les paiements du système</p>
            </div>
            <a href=\"{{ path('app_back_payment_new') }}\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-plus-circle\"></i>
                Nouveau Paiement
            </a>
        </div>
    </div>

    <!-- Statistiques rapides -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-hashtag fa-2x\" style=\"color: var(--admin-accent);\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">Total</h3>
                        <h2 class=\"h4 mb-0\">{{ payments|length }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-check-circle fa-2x\" style=\"color: var(--admin-success);\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">Payés</h3>
                        <h2 class=\"h4 mb-0\">{{ payments|filter(p => p.paymentStatus == 'success')|length }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-clock fa-2x\" style=\"color: #ffc107;\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">En attente</h3>
                        <h2 class=\"h4 mb-0\">{{ payments|filter(p => p.paymentStatus == 'pending')|length }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"admin-card\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <i class=\"fas fa-times-circle fa-2x\" style=\"color: var(--admin-danger);\"></i>
                    </div>
                    <div>
                        <h3 class=\"h6 mb-1\">Échoués</h3>
                        <h2 class=\"h4 mb-0\">{{ payments|filter(p => p.paymentStatus == 'failed')|length }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des paiements -->
    <div class=\"admin-card\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h2 class=\"h5 mb-0\">
                <i class=\"fas fa-list\"></i>
                Liste des paiements
            </h2>
            <div class=\"d-flex gap-2\">
                <div class=\"input-group\" style=\"max-width: 300px;\">
                    <span class=\"input-group-text bg-transparent border-end-0\">
                        <i class=\"fas fa-search\"></i>
                    </span>
                    <input type=\"text\" class=\"form-control form-control-sm border-start-0\" 
                           placeholder=\"Rechercher...\" id=\"searchInput\">
                </div>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"admin-table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Article</th>
                        <th>Date</th>
                        <th>Montant</th>
                        <th>Méthode</th>
                        <th>Statut</th>
                        <th>Référence</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for payment in payments %}
                    <tr>
                        <td>
                            <span class=\"badge-admin\" style=\"background: rgba(0, 243, 255, 0.1); color: var(--admin-accent);\">
                                #{{ payment.id }}
                            </span>
                        </td>
                        <td>
                            {% if payment.shopItem %}
                                <div class=\"d-flex align-items-center gap-2\">
                                    <i class=\"fas fa-cube\" style=\"color: var(--admin-accent);\"></i>
                                    <div>
                                        <div class=\"fw-bold\">{{ payment.shopItem.itemName }}</div>
                                        <small class=\"text-muted\">{{ payment.shopItem.itemCategory }}</small>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"text-muted\">Aucun</span>
                            {% endif %}
                        </td>
                        <td>{{ payment.paymentDate|date('d/m/Y H:i') }}</td>
                        <td class=\"fw-bold\">{{ payment.amount|number_format(2, ',', ' ') }} €</td>
                        <td>
                            <span class=\"badge-admin\" style=\"background: rgba(255, 255, 255, 0.1);\">
                                {% if payment.paymentMethod == 'card' %}
                                    <i class=\"fas fa-credit-card me-1\"></i> Carte
                                {% elseif payment.paymentMethod == 'paypal' %}
                                    <i class=\"fab fa-paypal me-1\"></i> PayPal
                                {% elseif payment.paymentMethod == 'transfer' %}
                                    <i class=\"fas fa-exchange-alt me-1\"></i> Virement
                                {% elseif payment.paymentMethod == 'cash' %}
                                    <i class=\"fas fa-money-bill me-1\"></i> Espèces
                                {% else %}
                                    {{ payment.paymentMethod }}
                                {% endif %}
                            </span>
                        </td>
                        <td>
                            {% if payment.paymentStatus == 'success' %}
                                <span class=\"badge-admin\" style=\"background: rgba(0, 255, 136, 0.1); color: var(--admin-success);\">
                                    <i class=\"fas fa-check me-1\"></i> Payé
                                </span>
                            {% elseif payment.paymentStatus == 'pending' %}
                                <span class=\"badge-admin\" style=\"background: rgba(255, 193, 7, 0.1); color: #ffc107;\">
                                    <i class=\"fas fa-clock me-1\"></i> En attente
                                </span>
                            {% elseif payment.paymentStatus == 'failed' %}
                                <span class=\"badge-admin\" style=\"background: rgba(255, 0, 60, 0.1); color: var(--admin-danger);\">
                                    <i class=\"fas fa-times me-1\"></i> Échoué
                                </span>
                            {% elseif payment.paymentStatus == 'cancelled' %}
                                <span class=\"badge-admin\" style=\"background: rgba(119, 119, 119, 0.1); color: #777;\">
                                    <i class=\"fas fa-ban me-1\"></i> Annulé
                                </span>
                            {% else %}
                                {{ payment.paymentStatus }}
                            {% endif %}
                        </td>
                        <td>
                            <code class=\"bg-dark px-2 py-1 rounded\">{{ payment.transactionRef }}</code>
                        </td>
                        <td>
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_back_payment_show', {'id': payment.id}) }}\" 
                                   class=\"btn-admin btn-admin-secondary btn-sm\"
                                   title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"{{ path('app_back_payment_edit', {'id': payment.id}) }}\" 
                                   class=\"btn-admin btn-admin-secondary btn-sm\"
                                   title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"post\" action=\"{{ path('app_back_payment_delete', {'id': payment.id}) }}\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?');\"
                                      style=\"display: inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ payment.id) }}\">
                                    <button type=\"submit\" class=\"btn-admin btn-admin-danger btn-sm\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center py-5\">
                            <div class=\"text-muted\">
                                <i class=\"fas fa-database fa-3x mb-3\"></i>
                                <h4>Aucun paiement trouvé</h4>
                                <p>Créez votre premier paiement pour commencer</p>
                                <a href=\"{{ path('app_back_payment_new') }}\" class=\"btn-admin btn-admin-primary\">
                                    <i class=\"fas fa-plus-circle\"></i>
                                    Créer un paiement
                                </a>
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {% if payments|length > 10 %}
        <nav class=\"d-flex justify-content-between align-items-center mt-3\">
            <div class=\"text-muted\">
                Affichage de 1 à {{ payments|length }} sur {{ payments|length }} paiements
            </div>
            <ul class=\"pagination mb-0\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link bg-transparent border-0\" href=\"#\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>
                <li class=\"page-item active\">
                    <a class=\"page-link bg-transparent border-0\" href=\"#\">1</a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link bg-transparent border-0\" href=\"#\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            </ul>
        </nav>
        {% endif %}
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Recherche en temps réel
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('.admin-table tbody tr');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
    
    // Animation des lignes
    tableRows.forEach((row, index) => {
        if (row.style.display !== 'none') {
            row.style.animationDelay = `\${index * 0.05}s`;
            row.style.opacity = '0';
            row.style.transform = 'translateY(10px)';
            row.style.animation = 'fadeInUp 0.3s ease forwards';
        }
    });
    
    // Ajout de l'animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);
});
</script>
{% endblock %}", "back/payment/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\payment\\index.html.twig");
    }
}
