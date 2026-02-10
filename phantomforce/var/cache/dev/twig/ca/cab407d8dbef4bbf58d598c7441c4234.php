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

/* shop_item/show.html.twig */
class __TwigTemplate_557a693305284c5d94f2250776845116 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_item/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_item/show.html.twig"));

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

        yield "PHANTOM SHOP - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 3, $this->source); })()), "itemName", [], "any", false, false, false, 3)), "html", null, true);
        
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
        <h1 class=\"shop-title\">🔍 <span>DÉTAILS DE L'ITEM</span> 🔍</h1>
        <p class=\"shop-subtitle\">INFORMATIONS COMPLÈTES • STATUT • ACTIONS</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"neon-btn purple\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR AU DASHBOARD
            </a>
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" class=\"neon-btn blue\">
                <i class=\"fas fa-edit\"></i> MODIFIER L'ITEM
            </a>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_new");
        yield "\" class=\"neon-btn red\">
                <i class=\"fas fa-plus\"></i> NOUVEL ITEM
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class=\"show-container\">
        <!-- ITEM HEADER -->
        <div class=\"item-show-header\">
            <div class=\"item-title-section\">
                <div class=\"item-category-badge ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 31, $this->source); })()), "itemCategory", [], "any", false, false, false, 31), "html", null, true);
        yield "\">
                    <i class=\"fas fa-";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 33, $this->source); })()), "itemCategory", [], "any", false, false, false, 33) == "skin")) ? ("gamepad") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 34, $this->source); })()), "itemCategory", [], "any", false, false, false, 34) == "abonnement")) ? ("crown") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 35, $this->source); })()), "itemCategory", [], "any", false, false, false, 35) == "coaching")) ? ("chalkboard-teacher") : ("tshirt"))))));
        // line 37
        yield "\"></i>
                    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 38, $this->source); })()), "itemCategory", [], "any", false, false, false, 38)), "html", null, true);
        yield "
                </div>
                <h2>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 40, $this->source); })()), "itemName", [], "any", false, false, false, 40), "html", null, true);
        yield "</h2>
                <div class=\"item-status-badge ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41), "html", null, true);
        yield "\">
                    <i class=\"fas fa-";
        // line 42
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43) == "pending")) ? ("clock") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 44
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44) == "paid")) ? ("check-circle") : ("times-circle"))));
        // line 46
        yield "\"></i>
                    ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47)), "html", null, true);
        yield "
                </div>
            </div>
            
            <div class=\"item-price-display\">
                <div class=\"price-label\">PRIX TOTAL</div>
                <div class=\"price-value neon-text green\">
                    ";
        // line 54
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "totalPrice", [], "any", true, true, false, 54) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 54, $this->source); })()), "totalPrice", [], "any", false, false, false, 54))) {
            // line 55
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 55, $this->source); })()), "totalPrice", [], "any", false, false, false, 55), 2, ",", " "), "html", null, true);
            yield " €
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["shop_item"] ?? null), "price", [], "any", true, true, false, 56) && CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "quantity", [], "any", true, true, false, 56))) {
            // line 57
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 57, $this->source); })()), "price", [], "any", false, false, false, 57) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 57, $this->source); })()), "quantity", [], "any", false, false, false, 57)), 2, ",", " "), "html", null, true);
            yield " €
                    ";
        } else {
            // line 59
            yield "                        0,00 €
                    ";
        }
        // line 61
        yield "                </div>
            </div>
        </div>

        <!-- DEUX COLONNES -->
        <div class=\"dual-columns-show\">
            <!-- COLONNE GAUCHE : INFORMATIONS DÉTAILLÉES -->
            <div class=\"column left-column-show\">
                <div class=\"column-header\">
                    <h3><i class=\"fas fa-info-circle\"></i> INFORMATIONS DÉTAILLÉES</h3>
                    <span class=\"badge-id\">ID: ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"details-grid\">
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-tag\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">NOM DE L'ITEM</div>
                            <div class=\"detail-value\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 81, $this->source); })()), "itemName", [], "any", false, false, false, 81), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-align-left\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">DESCRIPTION</div>
                            <div class=\"detail-value\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 91, $this->source); })()), "itemDescription", [], "any", false, false, false, 91), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-layer-group\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">CATÉGORIE</div>
                            <div class=\"detail-value category-value ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 101, $this->source); })()), "itemCategory", [], "any", false, false, false, 101), "html", null, true);
        yield "\">
                                <i class=\"fas fa-";
        // line 102
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 103
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 103, $this->source); })()), "itemCategory", [], "any", false, false, false, 103) == "skin")) ? ("gamepad") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 104
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 104, $this->source); })()), "itemCategory", [], "any", false, false, false, 104) == "abonnement")) ? ("crown") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 105, $this->source); })()), "itemCategory", [], "any", false, false, false, 105) == "coaching")) ? ("chalkboard-teacher") : ("tshirt"))))));
        // line 107
        yield "\"></i>
                                ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 108, $this->source); })()), "itemCategory", [], "any", false, false, false, 108)), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-circle\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">STATUT</div>
                            <div class=\"detail-value status-value ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 119, $this->source); })()), "status", [], "any", false, false, false, 119), "html", null, true);
        yield "\">
                                <i class=\"fas fa-";
        // line 120
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 121, $this->source); })()), "status", [], "any", false, false, false, 121) == "pending")) ? ("clock") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 122
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 122, $this->source); })()), "status", [], "any", false, false, false, 122) == "paid")) ? ("check-circle") : ("times-circle"))));
        // line 124
        yield "\"></i>
                                ";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 125, $this->source); })()), "status", [], "any", false, false, false, 125)), "html", null, true);
        yield "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-calendar-alt\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">DATE D'ACHAT</div>
                            <div class=\"detail-value\">
                                ";
        // line 137
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 137, $this->source); })()), "purchaseDate", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 138, $this->source); })()), "purchaseDate", [], "any", false, false, false, 138), "d/m/Y H:i"), "html", null, true);
            yield "
                                ";
        } else {
            // line 140
            yield "                                    <span class=\"no-date\">NON DÉFINIE</span>
                                ";
        }
        // line 142
        yield "                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-hashtag\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">ID UNIQUE</div>
                            <div class=\"detail-value id-value\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLONNE DROITE : STATISTIQUES & ACTIONS -->
            <div class=\"column right-column-show\">
                <div class=\"column-header\">
                    <h3><i class=\"fas fa-chart-bar\"></i> STATISTIQUES FINANCIÈRES</h3>
                </div>
                
                <div class=\"stats-cards\">
                    <div class=\"stat-card-show\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-euro-sign\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">PRIX UNITAIRE</div>
                            <div class=\"stat-value neon-text red\">
                                ";
        // line 172
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "price", [], "any", true, true, false, 172)) {
            // line 173
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 173, $this->source); })()), "price", [], "any", false, false, false, 173), 2, ",", " "), "html", null, true);
            yield " €
                                ";
        } else {
            // line 175
            yield "                                    0,00 €
                                ";
        }
        // line 177
        yield "                            </div>
                        </div>
                    </div>
                    
                    <div class=\"stat-card-show\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-boxes\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">QUANTITÉ</div>
                            <div class=\"stat-value neon-text blue\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 187, $this->source); })()), "quantity", [], "any", false, false, false, 187), "html", null, true);
        yield "</div>
                        </div>
                    </div>
                    
                    <div class=\"stat-card-show highlight\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-calculator\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">PRIX TOTAL</div>
                            <div class=\"stat-value neon-text green\">
                                ";
        // line 198
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "totalPrice", [], "any", true, true, false, 198) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 198, $this->source); })()), "totalPrice", [], "any", false, false, false, 198))) {
            // line 199
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 199, $this->source); })()), "totalPrice", [], "any", false, false, false, 199), 2, ",", " "), "html", null, true);
            yield " €
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 200
($context["shop_item"] ?? null), "price", [], "any", true, true, false, 200) && CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "quantity", [], "any", true, true, false, 200))) {
            // line 201
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 201, $this->source); })()), "price", [], "any", false, false, false, 201) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 201, $this->source); })()), "quantity", [], "any", false, false, false, 201)), 2, ",", " "), "html", null, true);
            yield " €
                                ";
        } else {
            // line 203
            yield "                                    0,00 €
                                ";
        }
        // line 205
        yield "                            </div>
                        </div>
                    </div>
                    
                    <div class=\"stat-card-show\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-percentage\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">VALEUR STOCK</div>
                            <div class=\"stat-value neon-text purple\">
                                ";
        // line 216
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "price", [], "any", true, true, false, 216) && CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "quantity", [], "any", true, true, false, 216))) {
            // line 217
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 217, $this->source); })()), "price", [], "any", false, false, false, 217) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 217, $this->source); })()), "quantity", [], "any", false, false, false, 217)), 2, ",", " "), "html", null, true);
            yield " €
                                ";
        } else {
            // line 219
            yield "                                    0,00 €
                                ";
        }
        // line 221
        yield "                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ACTIONS -->
                <div class=\"actions-section\">
                    <div class=\"column-header\">
                        <h3><i class=\"fas fa-bolt\"></i> ACTIONS RAPIDES</h3>
                    </div>
                    
                    <div class=\"action-buttons-show\">
                        <a href=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 233, $this->source); })()), "id", [], "any", false, false, false, 233)]), "html", null, true);
        yield "\" class=\"action-btn edit\">
                            <i class=\"fas fa-edit\"></i>
                            <span>MODIFIER</span>
                        </a>
                        
                        <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"action-btn list\">
                            <i class=\"fas fa-list\"></i>
                            <span>RETOUR LISTE</span>
                        </a>
                        
                        <button type=\"button\" class=\"action-btn delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <i class=\"fas fa-trash\"></i>
                            <span>SUPPRIMER</span>
                        </button>
                        
                        <a href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_new");
        yield "\" class=\"action-btn new\">
                            <i class=\"fas fa-plus\"></i>
                            <span>NOUVEL ITEM</span>
                        </a>
                    </div>
                </div>
                
                <!-- METADONNÉES -->
                <div class=\"metadata-section\">
                    <div class=\"column-header\">
                        <h3><i class=\"fas fa-database\"></i> MÉTADONNÉES</h3>
                    </div>
                    
                    <div class=\"metadata-grid\">
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Créé le:</span>
                            <span class=\"metadata-value\">
                                ";
        // line 265
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 265, $this->source); })()), "purchaseDate", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 266
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 266, $this->source); })()), "purchaseDate", [], "any", false, false, false, 266), "d/m/Y"), "html", null, true);
            yield "
                                ";
        } else {
            // line 268
            yield "                                    N/A
                                ";
        }
        // line 270
        yield "                            </span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">ID:</span>
                            <span class=\"metadata-value id-highlight\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 274, $this->source); })()), "id", [], "any", false, false, false, 274), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Statut:</span>
                            <span class=\"metadata-value status-badge-mini ";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 278, $this->source); })()), "status", [], "any", false, false, false, 278), "html", null, true);
        yield "\">
                                ";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 279, $this->source); })()), "status", [], "any", false, false, false, 279)), "html", null, true);
        yield "
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- DELETE MODAL -->
        <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle\"></i> CONFIRMER LA SUPPRESSION</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sûr de vouloir supprimer l'item <strong>\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 296, $this->source); })()), "itemName", [], "any", false, false, false, 296), "html", null, true);
        yield "\"</strong> ?</p>
                        <p class=\"text-danger\">Cette action est irréversible !</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        ";
        // line 301
        yield Twig\Extension\CoreExtension::include($this->env, $context, "shop_item/_delete_form.html.twig");
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* STYLES AGGRESSIFS - IDENTIQUES À INDEX */
:root {
    --neon-red: #ff0033;
    --neon-blue: #00f3ff;
    --neon-green: #00ff41;
    --neon-purple: #9d00ff;
    --neon-yellow: #ffcc00;
    --dark-bg: #0a0a0f;
    --darker-bg: #050508;
}

.aggressive-shop {
    background: var(--dark-bg);
    min-height: 100vh;
    padding: 20px;
    position: relative;
    overflow-x: hidden;
    font-family: 'Segoe UI', Arial, sans-serif;
}

/* HEADER */
.shop-header {
    text-align: center;
    padding: 40px 0;
    margin-bottom: 40px;
    border-bottom: 3px solid var(--neon-red);
    position: relative;
}

.shop-header::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, 
        var(--neon-red), 
        var(--neon-blue), 
        var(--neon-green), 
        var(--neon-purple));
    animation: borderFlow 3s linear infinite;
}

@keyframes borderFlow {
    0% { background-position: 0% 50%; }
    100% { background-position: 100% 50%; }
}

.shop-title {
    font-size: 3rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 4px;
    margin-bottom: 20px;
    background: linear-gradient(45deg, var(--neon-green), var(--neon-blue), var(--neon-purple));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: textGlow 2s infinite alternate;
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.5);
}

@keyframes textGlow {
    0% { filter: drop-shadow(0 0 5px var(--neon-green)); }
    100% { filter: drop-shadow(0 0 20px var(--neon-blue)); }
}

.shop-subtitle {
    font-size: 1.2rem;
    color: var(--neon-blue);
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 30px;
}

.quick-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 30px;
}

.neon-btn {
    padding: 12px 24px;
    border: 2px solid;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    animation: btnPulse 2s infinite;
}

.neon-btn.red {
    border-color: var(--neon-red);
    color: var(--neon-red);
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.3);
}

.neon-btn.blue {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
    box-shadow: 0 0 10px rgba(0, 243, 255, 0.3);
}

.neon-btn.purple {
    border-color: var(--neon-purple);
    color: var(--neon-purple);
    box-shadow: 0 0 10px rgba(157, 0, 255, 0.3);
}

.neon-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 20px;
}

.neon-btn.red:hover {
    background: var(--neon-red);
    color: black;
}

.neon-btn.blue:hover {
    background: var(--neon-blue);
    color: black;
}

.neon-btn.purple:hover {
    background: var(--neon-purple);
    color: white;
}

@keyframes btnPulse {
    0%, 100% { box-shadow: 0 0 10px; }
    50% { box-shadow: 0 0 20px; }
}

/* SHOW CONTAINER */
.show-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
}

/* ITEM HEADER */
.item-show-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid var(--neon-blue);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 30px rgba(0, 243, 255, 0.2);
    animation: headerFloat 4s ease-in-out infinite;
}

@keyframes headerFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.item-title-section {
    flex: 1;
}

.item-title-section h2 {
    font-size: 2.5rem;
    font-weight: 900;
    color: white;
    margin: 15px 0;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
}

.item-category-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    margin-bottom: 10px;
}

.item-category-badge.skin {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

.item-category-badge.abonnement {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
    border: 2px solid var(--neon-blue);
}

.item-category-badge.coaching {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    border: 2px solid var(--neon-purple);
}

.item-category-badge.merch {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.item-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    margin-top: 10px;
}

.item-status-badge.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.item-status-badge.paid {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 2px solid var(--neon-green);
}

.item-status-badge.canceled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

.item-price-display {
    text-align: center;
    padding: 20px;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 12px;
    border: 2px solid var(--neon-green);
    min-width: 250px;
}

.price-label {
    font-size: 0.9rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.price-value {
    font-size: 2.5rem;
    font-weight: 900;
}

.neon-text.green {
    color: var(--neon-green);
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.5);
    animation: neonGlow 1.5s infinite alternate;
}

@keyframes neonGlow {
    from { text-shadow: 0 0 10px rgba(0, 255, 65, 0.5); }
    to { text-shadow: 0 0 20px rgba(0, 255, 65, 0.8), 0 0 30px rgba(0, 255, 65, 0.6); }
}

/* DEUX COLONNES */
.dual-columns-show {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    margin-bottom: 40px;
}

@media (max-width: 1200px) {
    .dual-columns-show {
        grid-template-columns: 1fr;
    }
}

.column {
    background: rgba(10, 10, 15, 0.9);
    border: 2px solid;
    border-radius: 15px;
    padding: 25px;
    backdrop-filter: blur(10px);
}

.left-column-show {
    border-color: var(--neon-red);
    box-shadow: 0 0 30px rgba(255, 0, 51, 0.2);
}

.right-column-show {
    border-color: var(--neon-blue);
    box-shadow: 0 0 30px rgba(0, 243, 255, 0.2);
}

.column-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid;
}

.left-column-show .column-header {
    border-bottom-color: var(--neon-red);
}

.right-column-show .column-header {
    border-bottom-color: var(--neon-blue);
}

.column-header h3 {
    font-size: 1.5rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
}

.badge-id, .badge-count {
    background: var(--neon-red);
    color: black;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: 900;
    font-size: 1rem;
    animation: countPulse 2s infinite;
}

@keyframes countPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* DETAILS GRID */
.details-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.detail-card {
    background: rgba(20, 20, 30, 0.8);
    border: 1px solid rgba(255, 0, 51, 0.3);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    gap: 15px;
    align-items: flex-start;
    transition: all 0.3s;
}

.detail-card:hover {
    transform: translateY(-5px);
    border-color: var(--neon-red);
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.3);
}

.detail-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 0, 51, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--neon-red);
    flex-shrink: 0;
}

.detail-content {
    flex: 1;
}

.detail-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.detail-value {
    font-size: 1.1rem;
    font-weight: 600;
    color: white;
    line-height: 1.5;
}

.category-value {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
}

.category-value.skin {
    background: rgba(255, 0, 51, 0.1);
    color: var(--neon-red);
}

.category-value.abonnement {
    background: rgba(0, 243, 255, 0.1);
    color: var(--neon-blue);
}

.category-value.coaching {
    background: rgba(157, 0, 255, 0.1);
    color: var(--neon-purple);
}

.category-value.merch {
    background: rgba(255, 204, 0, 0.1);
    color: var(--neon-yellow);
}

.status-value {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
}

.status-value.pending {
    background: rgba(255, 204, 0, 0.1);
    color: var(--neon-yellow);
}

.status-value.paid {
    background: rgba(0, 255, 65, 0.1);
    color: var(--neon-green);
}

.status-value.canceled {
    background: rgba(255, 0, 51, 0.1);
    color: var(--neon-red);
}

.id-value {
    font-family: monospace;
    font-size: 1.2rem;
    color: var(--neon-purple);
    font-weight: 900;
}

.no-date {
    color: #777;
    font-style: italic;
}

/* STATS CARDS */
.stats-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stat-card-show {
    background: rgba(20, 20, 30, 0.8);
    border: 1px solid rgba(0, 243, 255, 0.3);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    gap: 15px;
    align-items: center;
    transition: all 0.3s;
}

.stat-card-show:hover {
    transform: translateY(-5px);
    border-color: var(--neon-blue);
    box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
}

.stat-card-show.highlight {
    border: 2px solid var(--neon-green);
    background: rgba(0, 255, 65, 0.05);
}

.stat-icon-show {
    width: 50px;
    height: 50px;
    background: rgba(0, 243, 255, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--neon-blue);
    flex-shrink: 0;
}

.stat-card-show.highlight .stat-icon-show {
    background: rgba(0, 255, 65, 0.1);
    color: var(--neon-green);
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 1.5rem;
    font-weight: 900;
}

.neon-text.red {
    color: var(--neon-red);
    text-shadow: 0 0 10px rgba(255, 0, 51, 0.5);
}

.neon-text.blue {
    color: var(--neon-blue);
    text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
}

.neon-text.purple {
    color: var(--neon-purple);
    text-shadow: 0 0 10px rgba(157, 0, 255, 0.5);
}

/* ACTIONS SECTION */
.actions-section {
    margin-top: 30px;
}

.action-buttons-show {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
}

.action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s;
    border: 2px solid;
    background: rgba(0, 0, 0, 0.3);
    cursor: pointer;
}

.action-btn span {
    margin-top: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.action-btn.edit {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.action-btn.list {
    border-color: var(--neon-purple);
    color: var(--neon-purple);
}

.action-btn.delete {
    border-color: var(--neon-red);
    color: var(--neon-red);
    background: none;
}

.action-btn.new {
    border-color: var(--neon-green);
    color: var(--neon-green);
}

.action-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 20px;
}

.action-btn.edit:hover {
    background: var(--neon-blue);
    color: black;
}

.action-btn.list:hover {
    background: var(--neon-purple);
    color: white;
}

.action-btn.delete:hover {
    background: var(--neon-red);
    color: black;
}

.action-btn.new:hover {
    background: var(--neon-green);
    color: black;
}

/* METADATA SECTION */
.metadata-section {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 2px solid rgba(255, 255, 255, 0.1);
}

.metadata-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.metadata-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.metadata-value {
    font-size: 0.9rem;
    font-weight: 600;
    color: white;
}

.id-highlight {
    color: var(--neon-purple);
    font-weight: 900;
    font-family: monospace;
}

.status-badge-mini {
    padding: 3px 8px;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.status-badge-mini.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
}

.status-badge-mini.paid {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
}

.status-badge-mini.canceled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
}

/* MODAL STYLING */
.modal-content {
    background: var(--darker-bg);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    color: white;
}

.modal-header {
    border-bottom: 1px solid rgba(255, 0, 51, 0.3);
    padding: 20px;
}

.modal-title {
    color: var(--neon-red);
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}

.modal-body {
    padding: 20px;
    font-size: 1.1rem;
}

.modal-footer {
    border-top: 1px solid rgba(255, 0, 51, 0.3);
    padding: 20px;
    display: flex;
    gap: 10px;
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid #777;
    color: #aaa;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: white;
    color: white;
}

/* ANIMATIONS */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.detail-card, .stat-card-show, .action-btn {
    animation: fadeInUp 0.5s ease-out forwards;
    opacity: 0;
}

.detail-card:nth-child(1) { animation-delay: 0.1s; }
.detail-card:nth-child(2) { animation-delay: 0.2s; }
.detail-card:nth-child(3) { animation-delay: 0.3s; }
.detail-card:nth-child(4) { animation-delay: 0.4s; }
.detail-card:nth-child(5) { animation-delay: 0.5s; }
.detail-card:nth-child(6) { animation-delay: 0.6s; }

.stat-card-show:nth-child(1) { animation-delay: 0.2s; }
.stat-card-show:nth-child(2) { animation-delay: 0.3s; }
.stat-card-show:nth-child(3) { animation-delay: 0.4s; }
.stat-card-show:nth-child(4) { animation-delay: 0.5s; }

.action-btn:nth-child(1) { animation-delay: 0.3s; }
.action-btn:nth-child(2) { animation-delay: 0.4s; }
.action-btn:nth-child(3) { animation-delay: 0.5s; }
.action-btn:nth-child(4) { animation-delay: 0.6s; }

/* RESPONSIVE */
@media (max-width: 768px) {
    .shop-title {
        font-size: 2rem;
    }
    
    .shop-subtitle {
        font-size: 1rem;
    }
    
    .quick-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .neon-btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .item-show-header {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .item-title-section h2 {
        font-size: 1.8rem;
    }
    
    .item-price-display {
        width: 100%;
    }
    
    .details-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-cards {
        grid-template-columns: 1fr;
    }
    
    .action-buttons-show {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .metadata-grid {
        grid-template-columns: 1fr;
    }
    
    .modal-footer {
        flex-direction: column;
    }
    
    .modal-footer button,
    .modal-footer form {
        width: 100%;
    }
}

/* SCROLLBAR */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.3);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, var(--neon-purple), var(--neon-red));
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des cartes au chargement
    const cards = document.querySelectorAll('.detail-card, .stat-card-show, .action-btn');
    cards.forEach((card, index) => {
        card.style.animationDelay = `\${index * 0.1}s`;
    });

    // Effet hover amélioré
    const hoverElements = document.querySelectorAll('.detail-card, .stat-card-show');
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            this.style.zIndex = '100';
        });
        el.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Animation du prix
    const priceValue = document.querySelector('.price-value');
    if (priceValue) {
        let hue = 120; // Vert
        setInterval(() => {
            hue = (hue + 1) % 360;
            priceValue.style.filter = `hue-rotate(\${hue}deg)`;
        }, 100);
    }

    // Confirmation de suppression
    const deleteBtn = document.querySelector('.action-btn.delete');
    if (deleteBtn) {
        deleteBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        });
    }

    // Animation des icônes
    const icons = document.querySelectorAll('.detail-icon, .stat-icon-show');
    icons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
        });
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Effet de copie pour l'ID
    const idValue = document.querySelector('.id-value');
    if (idValue) {
        idValue.style.cursor = 'pointer';
        idValue.title = 'Cliquer pour copier';
        idValue.addEventListener('click', function() {
            navigator.clipboard.writeText(this.textContent);
            
            // Animation de feedback
            const originalText = this.textContent;
            this.textContent = 'COPIÉ !';
            this.style.color = 'var(--neon-green)';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.color = 'var(--neon-purple)';
            }, 1500);
        });
    }

    // Animation des boutons d'action
    const actionButtons = document.querySelectorAll('.action-btn');
    actionButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'scale(1.2)';
            }
        });
        
        btn.addEventListener('mouseleave', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'scale(1)';
            }
        });
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
        return "shop_item/show.html.twig";
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
        return array (  542 => 301,  534 => 296,  514 => 279,  510 => 278,  503 => 274,  497 => 270,  493 => 268,  487 => 266,  485 => 265,  465 => 248,  452 => 238,  444 => 233,  430 => 221,  426 => 219,  420 => 217,  418 => 216,  405 => 205,  401 => 203,  395 => 201,  393 => 200,  388 => 199,  386 => 198,  372 => 187,  360 => 177,  356 => 175,  350 => 173,  348 => 172,  325 => 152,  313 => 142,  309 => 140,  303 => 138,  301 => 137,  286 => 125,  283 => 124,  281 => 122,  280 => 121,  279 => 120,  275 => 119,  261 => 108,  258 => 107,  256 => 105,  255 => 104,  254 => 103,  253 => 102,  249 => 101,  236 => 91,  223 => 81,  210 => 71,  198 => 61,  194 => 59,  188 => 57,  186 => 56,  181 => 55,  179 => 54,  169 => 47,  166 => 46,  164 => 44,  163 => 43,  162 => 42,  158 => 41,  154 => 40,  149 => 38,  146 => 37,  144 => 35,  143 => 34,  142 => 33,  141 => 32,  137 => 31,  123 => 20,  117 => 17,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PHANTOM SHOP - {{ shop_item.itemName|upper }}{% endblock %}

{% block body %}
<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🔍 <span>DÉTAILS DE L'ITEM</span> 🔍</h1>
        <p class=\"shop-subtitle\">INFORMATIONS COMPLÈTES • STATUT • ACTIONS</p>
        
        <!-- QUICK ACTIONS -->
        <div class=\"quick-actions\">
            <a href=\"{{ path('app_shop_item_index') }}\" class=\"neon-btn purple\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR AU DASHBOARD
            </a>
            <a href=\"{{ path('app_shop_item_edit', {'id': shop_item.id}) }}\" class=\"neon-btn blue\">
                <i class=\"fas fa-edit\"></i> MODIFIER L'ITEM
            </a>
            <a href=\"{{ path('app_shop_item_new') }}\" class=\"neon-btn red\">
                <i class=\"fas fa-plus\"></i> NOUVEL ITEM
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class=\"show-container\">
        <!-- ITEM HEADER -->
        <div class=\"item-show-header\">
            <div class=\"item-title-section\">
                <div class=\"item-category-badge {{ shop_item.itemCategory }}\">
                    <i class=\"fas fa-{{ 
                        shop_item.itemCategory == 'skin' ? 'gamepad' : 
                        shop_item.itemCategory == 'abonnement' ? 'crown' : 
                        shop_item.itemCategory == 'coaching' ? 'chalkboard-teacher' : 
                        'tshirt' 
                    }}\"></i>
                    {{ shop_item.itemCategory|upper }}
                </div>
                <h2>{{ shop_item.itemName }}</h2>
                <div class=\"item-status-badge {{ shop_item.status }}\">
                    <i class=\"fas fa-{{ 
                        shop_item.status == 'pending' ? 'clock' : 
                        shop_item.status == 'paid' ? 'check-circle' : 
                        'times-circle' 
                    }}\"></i>
                    {{ shop_item.status|upper }}
                </div>
            </div>
            
            <div class=\"item-price-display\">
                <div class=\"price-label\">PRIX TOTAL</div>
                <div class=\"price-value neon-text green\">
                    {% if shop_item.totalPrice is defined and shop_item.totalPrice %}
                        {{ shop_item.totalPrice|number_format(2, ',', ' ') }} €
                    {% elseif shop_item.price is defined and shop_item.quantity is defined %}
                        {{ (shop_item.price * shop_item.quantity)|number_format(2, ',', ' ') }} €
                    {% else %}
                        0,00 €
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- DEUX COLONNES -->
        <div class=\"dual-columns-show\">
            <!-- COLONNE GAUCHE : INFORMATIONS DÉTAILLÉES -->
            <div class=\"column left-column-show\">
                <div class=\"column-header\">
                    <h3><i class=\"fas fa-info-circle\"></i> INFORMATIONS DÉTAILLÉES</h3>
                    <span class=\"badge-id\">ID: {{ shop_item.id }}</span>
                </div>
                
                <div class=\"details-grid\">
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-tag\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">NOM DE L'ITEM</div>
                            <div class=\"detail-value\">{{ shop_item.itemName }}</div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-align-left\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">DESCRIPTION</div>
                            <div class=\"detail-value\">{{ shop_item.itemDescription }}</div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-layer-group\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">CATÉGORIE</div>
                            <div class=\"detail-value category-value {{ shop_item.itemCategory }}\">
                                <i class=\"fas fa-{{ 
                                    shop_item.itemCategory == 'skin' ? 'gamepad' : 
                                    shop_item.itemCategory == 'abonnement' ? 'crown' : 
                                    shop_item.itemCategory == 'coaching' ? 'chalkboard-teacher' : 
                                    'tshirt' 
                                }}\"></i>
                                {{ shop_item.itemCategory|upper }}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-circle\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">STATUT</div>
                            <div class=\"detail-value status-value {{ shop_item.status }}\">
                                <i class=\"fas fa-{{ 
                                    shop_item.status == 'pending' ? 'clock' : 
                                    shop_item.status == 'paid' ? 'check-circle' : 
                                    'times-circle' 
                                }}\"></i>
                                {{ shop_item.status|upper }}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-calendar-alt\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">DATE D'ACHAT</div>
                            <div class=\"detail-value\">
                                {% if shop_item.purchaseDate %}
                                    {{ shop_item.purchaseDate|date('d/m/Y H:i') }}
                                {% else %}
                                    <span class=\"no-date\">NON DÉFINIE</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"detail-card\">
                        <div class=\"detail-icon\">
                            <i class=\"fas fa-hashtag\"></i>
                        </div>
                        <div class=\"detail-content\">
                            <div class=\"detail-label\">ID UNIQUE</div>
                            <div class=\"detail-value id-value\">{{ shop_item.id }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLONNE DROITE : STATISTIQUES & ACTIONS -->
            <div class=\"column right-column-show\">
                <div class=\"column-header\">
                    <h3><i class=\"fas fa-chart-bar\"></i> STATISTIQUES FINANCIÈRES</h3>
                </div>
                
                <div class=\"stats-cards\">
                    <div class=\"stat-card-show\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-euro-sign\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">PRIX UNITAIRE</div>
                            <div class=\"stat-value neon-text red\">
                                {% if shop_item.price is defined %}
                                    {{ shop_item.price|number_format(2, ',', ' ') }} €
                                {% else %}
                                    0,00 €
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"stat-card-show\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-boxes\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">QUANTITÉ</div>
                            <div class=\"stat-value neon-text blue\">{{ shop_item.quantity }}</div>
                        </div>
                    </div>
                    
                    <div class=\"stat-card-show highlight\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-calculator\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">PRIX TOTAL</div>
                            <div class=\"stat-value neon-text green\">
                                {% if shop_item.totalPrice is defined and shop_item.totalPrice %}
                                    {{ shop_item.totalPrice|number_format(2, ',', ' ') }} €
                                {% elseif shop_item.price is defined and shop_item.quantity is defined %}
                                    {{ (shop_item.price * shop_item.quantity)|number_format(2, ',', ' ') }} €
                                {% else %}
                                    0,00 €
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"stat-card-show\">
                        <div class=\"stat-icon-show\">
                            <i class=\"fas fa-percentage\"></i>
                        </div>
                        <div class=\"stat-content\">
                            <div class=\"stat-label\">VALEUR STOCK</div>
                            <div class=\"stat-value neon-text purple\">
                                {% if shop_item.price is defined and shop_item.quantity is defined %}
                                    {{ (shop_item.price * shop_item.quantity)|number_format(2, ',', ' ') }} €
                                {% else %}
                                    0,00 €
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ACTIONS -->
                <div class=\"actions-section\">
                    <div class=\"column-header\">
                        <h3><i class=\"fas fa-bolt\"></i> ACTIONS RAPIDES</h3>
                    </div>
                    
                    <div class=\"action-buttons-show\">
                        <a href=\"{{ path('app_shop_item_edit', {'id': shop_item.id}) }}\" class=\"action-btn edit\">
                            <i class=\"fas fa-edit\"></i>
                            <span>MODIFIER</span>
                        </a>
                        
                        <a href=\"{{ path('app_shop_item_index') }}\" class=\"action-btn list\">
                            <i class=\"fas fa-list\"></i>
                            <span>RETOUR LISTE</span>
                        </a>
                        
                        <button type=\"button\" class=\"action-btn delete\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                            <i class=\"fas fa-trash\"></i>
                            <span>SUPPRIMER</span>
                        </button>
                        
                        <a href=\"{{ path('app_shop_item_new') }}\" class=\"action-btn new\">
                            <i class=\"fas fa-plus\"></i>
                            <span>NOUVEL ITEM</span>
                        </a>
                    </div>
                </div>
                
                <!-- METADONNÉES -->
                <div class=\"metadata-section\">
                    <div class=\"column-header\">
                        <h3><i class=\"fas fa-database\"></i> MÉTADONNÉES</h3>
                    </div>
                    
                    <div class=\"metadata-grid\">
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Créé le:</span>
                            <span class=\"metadata-value\">
                                {% if shop_item.purchaseDate %}
                                    {{ shop_item.purchaseDate|date('d/m/Y') }}
                                {% else %}
                                    N/A
                                {% endif %}
                            </span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">ID:</span>
                            <span class=\"metadata-value id-highlight\">{{ shop_item.id }}</span>
                        </div>
                        <div class=\"metadata-item\">
                            <span class=\"metadata-label\">Statut:</span>
                            <span class=\"metadata-value status-badge-mini {{ shop_item.status }}\">
                                {{ shop_item.status|upper }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- DELETE MODAL -->
        <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle\"></i> CONFIRMER LA SUPPRESSION</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Êtes-vous sûr de vouloir supprimer l'item <strong>\"{{ shop_item.itemName }}\"</strong> ?</p>
                        <p class=\"text-danger\">Cette action est irréversible !</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                        {{ include('shop_item/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* STYLES AGGRESSIFS - IDENTIQUES À INDEX */
:root {
    --neon-red: #ff0033;
    --neon-blue: #00f3ff;
    --neon-green: #00ff41;
    --neon-purple: #9d00ff;
    --neon-yellow: #ffcc00;
    --dark-bg: #0a0a0f;
    --darker-bg: #050508;
}

.aggressive-shop {
    background: var(--dark-bg);
    min-height: 100vh;
    padding: 20px;
    position: relative;
    overflow-x: hidden;
    font-family: 'Segoe UI', Arial, sans-serif;
}

/* HEADER */
.shop-header {
    text-align: center;
    padding: 40px 0;
    margin-bottom: 40px;
    border-bottom: 3px solid var(--neon-red);
    position: relative;
}

.shop-header::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, 
        var(--neon-red), 
        var(--neon-blue), 
        var(--neon-green), 
        var(--neon-purple));
    animation: borderFlow 3s linear infinite;
}

@keyframes borderFlow {
    0% { background-position: 0% 50%; }
    100% { background-position: 100% 50%; }
}

.shop-title {
    font-size: 3rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 4px;
    margin-bottom: 20px;
    background: linear-gradient(45deg, var(--neon-green), var(--neon-blue), var(--neon-purple));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: textGlow 2s infinite alternate;
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.5);
}

@keyframes textGlow {
    0% { filter: drop-shadow(0 0 5px var(--neon-green)); }
    100% { filter: drop-shadow(0 0 20px var(--neon-blue)); }
}

.shop-subtitle {
    font-size: 1.2rem;
    color: var(--neon-blue);
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 30px;
}

.quick-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 30px;
}

.neon-btn {
    padding: 12px 24px;
    border: 2px solid;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    animation: btnPulse 2s infinite;
}

.neon-btn.red {
    border-color: var(--neon-red);
    color: var(--neon-red);
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.3);
}

.neon-btn.blue {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
    box-shadow: 0 0 10px rgba(0, 243, 255, 0.3);
}

.neon-btn.purple {
    border-color: var(--neon-purple);
    color: var(--neon-purple);
    box-shadow: 0 0 10px rgba(157, 0, 255, 0.3);
}

.neon-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 20px;
}

.neon-btn.red:hover {
    background: var(--neon-red);
    color: black;
}

.neon-btn.blue:hover {
    background: var(--neon-blue);
    color: black;
}

.neon-btn.purple:hover {
    background: var(--neon-purple);
    color: white;
}

@keyframes btnPulse {
    0%, 100% { box-shadow: 0 0 10px; }
    50% { box-shadow: 0 0 20px; }
}

/* SHOW CONTAINER */
.show-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px;
}

/* ITEM HEADER */
.item-show-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid var(--neon-blue);
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 30px rgba(0, 243, 255, 0.2);
    animation: headerFloat 4s ease-in-out infinite;
}

@keyframes headerFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.item-title-section {
    flex: 1;
}

.item-title-section h2 {
    font-size: 2.5rem;
    font-weight: 900;
    color: white;
    margin: 15px 0;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
}

.item-category-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    margin-bottom: 10px;
}

.item-category-badge.skin {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

.item-category-badge.abonnement {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
    border: 2px solid var(--neon-blue);
}

.item-category-badge.coaching {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    border: 2px solid var(--neon-purple);
}

.item-category-badge.merch {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.item-status-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
    margin-top: 10px;
}

.item-status-badge.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 2px solid var(--neon-yellow);
}

.item-status-badge.paid {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 2px solid var(--neon-green);
}

.item-status-badge.canceled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 2px solid var(--neon-red);
}

.item-price-display {
    text-align: center;
    padding: 20px;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 12px;
    border: 2px solid var(--neon-green);
    min-width: 250px;
}

.price-label {
    font-size: 0.9rem;
    color: #aaa;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.price-value {
    font-size: 2.5rem;
    font-weight: 900;
}

.neon-text.green {
    color: var(--neon-green);
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.5);
    animation: neonGlow 1.5s infinite alternate;
}

@keyframes neonGlow {
    from { text-shadow: 0 0 10px rgba(0, 255, 65, 0.5); }
    to { text-shadow: 0 0 20px rgba(0, 255, 65, 0.8), 0 0 30px rgba(0, 255, 65, 0.6); }
}

/* DEUX COLONNES */
.dual-columns-show {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    margin-bottom: 40px;
}

@media (max-width: 1200px) {
    .dual-columns-show {
        grid-template-columns: 1fr;
    }
}

.column {
    background: rgba(10, 10, 15, 0.9);
    border: 2px solid;
    border-radius: 15px;
    padding: 25px;
    backdrop-filter: blur(10px);
}

.left-column-show {
    border-color: var(--neon-red);
    box-shadow: 0 0 30px rgba(255, 0, 51, 0.2);
}

.right-column-show {
    border-color: var(--neon-blue);
    box-shadow: 0 0 30px rgba(0, 243, 255, 0.2);
}

.column-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid;
}

.left-column-show .column-header {
    border-bottom-color: var(--neon-red);
}

.right-column-show .column-header {
    border-bottom-color: var(--neon-blue);
}

.column-header h3 {
    font-size: 1.5rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
}

.badge-id, .badge-count {
    background: var(--neon-red);
    color: black;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: 900;
    font-size: 1rem;
    animation: countPulse 2s infinite;
}

@keyframes countPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* DETAILS GRID */
.details-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.detail-card {
    background: rgba(20, 20, 30, 0.8);
    border: 1px solid rgba(255, 0, 51, 0.3);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    gap: 15px;
    align-items: flex-start;
    transition: all 0.3s;
}

.detail-card:hover {
    transform: translateY(-5px);
    border-color: var(--neon-red);
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.3);
}

.detail-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 0, 51, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--neon-red);
    flex-shrink: 0;
}

.detail-content {
    flex: 1;
}

.detail-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.detail-value {
    font-size: 1.1rem;
    font-weight: 600;
    color: white;
    line-height: 1.5;
}

.category-value {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
}

.category-value.skin {
    background: rgba(255, 0, 51, 0.1);
    color: var(--neon-red);
}

.category-value.abonnement {
    background: rgba(0, 243, 255, 0.1);
    color: var(--neon-blue);
}

.category-value.coaching {
    background: rgba(157, 0, 255, 0.1);
    color: var(--neon-purple);
}

.category-value.merch {
    background: rgba(255, 204, 0, 0.1);
    color: var(--neon-yellow);
}

.status-value {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
}

.status-value.pending {
    background: rgba(255, 204, 0, 0.1);
    color: var(--neon-yellow);
}

.status-value.paid {
    background: rgba(0, 255, 65, 0.1);
    color: var(--neon-green);
}

.status-value.canceled {
    background: rgba(255, 0, 51, 0.1);
    color: var(--neon-red);
}

.id-value {
    font-family: monospace;
    font-size: 1.2rem;
    color: var(--neon-purple);
    font-weight: 900;
}

.no-date {
    color: #777;
    font-style: italic;
}

/* STATS CARDS */
.stats-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stat-card-show {
    background: rgba(20, 20, 30, 0.8);
    border: 1px solid rgba(0, 243, 255, 0.3);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    gap: 15px;
    align-items: center;
    transition: all 0.3s;
}

.stat-card-show:hover {
    transform: translateY(-5px);
    border-color: var(--neon-blue);
    box-shadow: 0 0 15px rgba(0, 243, 255, 0.3);
}

.stat-card-show.highlight {
    border: 2px solid var(--neon-green);
    background: rgba(0, 255, 65, 0.05);
}

.stat-icon-show {
    width: 50px;
    height: 50px;
    background: rgba(0, 243, 255, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--neon-blue);
    flex-shrink: 0;
}

.stat-card-show.highlight .stat-icon-show {
    background: rgba(0, 255, 65, 0.1);
    color: var(--neon-green);
}

.stat-content {
    flex: 1;
}

.stat-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 1.5rem;
    font-weight: 900;
}

.neon-text.red {
    color: var(--neon-red);
    text-shadow: 0 0 10px rgba(255, 0, 51, 0.5);
}

.neon-text.blue {
    color: var(--neon-blue);
    text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
}

.neon-text.purple {
    color: var(--neon-purple);
    text-shadow: 0 0 10px rgba(157, 0, 255, 0.5);
}

/* ACTIONS SECTION */
.actions-section {
    margin-top: 30px;
}

.action-buttons-show {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
}

.action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s;
    border: 2px solid;
    background: rgba(0, 0, 0, 0.3);
    cursor: pointer;
}

.action-btn span {
    margin-top: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.action-btn.edit {
    border-color: var(--neon-blue);
    color: var(--neon-blue);
}

.action-btn.list {
    border-color: var(--neon-purple);
    color: var(--neon-purple);
}

.action-btn.delete {
    border-color: var(--neon-red);
    color: var(--neon-red);
    background: none;
}

.action-btn.new {
    border-color: var(--neon-green);
    color: var(--neon-green);
}

.action-btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 20px;
}

.action-btn.edit:hover {
    background: var(--neon-blue);
    color: black;
}

.action-btn.list:hover {
    background: var(--neon-purple);
    color: white;
}

.action-btn.delete:hover {
    background: var(--neon-red);
    color: black;
}

.action-btn.new:hover {
    background: var(--neon-green);
    color: black;
}

/* METADATA SECTION */
.metadata-section {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 2px solid rgba(255, 255, 255, 0.1);
}

.metadata-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.metadata-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.metadata-value {
    font-size: 0.9rem;
    font-weight: 600;
    color: white;
}

.id-highlight {
    color: var(--neon-purple);
    font-weight: 900;
    font-family: monospace;
}

.status-badge-mini {
    padding: 3px 8px;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.status-badge-mini.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
}

.status-badge-mini.paid {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
}

.status-badge-mini.canceled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
}

/* MODAL STYLING */
.modal-content {
    background: var(--darker-bg);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    color: white;
}

.modal-header {
    border-bottom: 1px solid rgba(255, 0, 51, 0.3);
    padding: 20px;
}

.modal-title {
    color: var(--neon-red);
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}

.modal-body {
    padding: 20px;
    font-size: 1.1rem;
}

.modal-footer {
    border-top: 1px solid rgba(255, 0, 51, 0.3);
    padding: 20px;
    display: flex;
    gap: 10px;
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid #777;
    color: #aaa;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: white;
    color: white;
}

/* ANIMATIONS */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.detail-card, .stat-card-show, .action-btn {
    animation: fadeInUp 0.5s ease-out forwards;
    opacity: 0;
}

.detail-card:nth-child(1) { animation-delay: 0.1s; }
.detail-card:nth-child(2) { animation-delay: 0.2s; }
.detail-card:nth-child(3) { animation-delay: 0.3s; }
.detail-card:nth-child(4) { animation-delay: 0.4s; }
.detail-card:nth-child(5) { animation-delay: 0.5s; }
.detail-card:nth-child(6) { animation-delay: 0.6s; }

.stat-card-show:nth-child(1) { animation-delay: 0.2s; }
.stat-card-show:nth-child(2) { animation-delay: 0.3s; }
.stat-card-show:nth-child(3) { animation-delay: 0.4s; }
.stat-card-show:nth-child(4) { animation-delay: 0.5s; }

.action-btn:nth-child(1) { animation-delay: 0.3s; }
.action-btn:nth-child(2) { animation-delay: 0.4s; }
.action-btn:nth-child(3) { animation-delay: 0.5s; }
.action-btn:nth-child(4) { animation-delay: 0.6s; }

/* RESPONSIVE */
@media (max-width: 768px) {
    .shop-title {
        font-size: 2rem;
    }
    
    .shop-subtitle {
        font-size: 1rem;
    }
    
    .quick-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .neon-btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .item-show-header {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .item-title-section h2 {
        font-size: 1.8rem;
    }
    
    .item-price-display {
        width: 100%;
    }
    
    .details-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-cards {
        grid-template-columns: 1fr;
    }
    
    .action-buttons-show {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .metadata-grid {
        grid-template-columns: 1fr;
    }
    
    .modal-footer {
        flex-direction: column;
    }
    
    .modal-footer button,
    .modal-footer form {
        width: 100%;
    }
}

/* SCROLLBAR */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.3);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, var(--neon-red), var(--neon-purple));
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, var(--neon-purple), var(--neon-red));
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation des cartes au chargement
    const cards = document.querySelectorAll('.detail-card, .stat-card-show, .action-btn');
    cards.forEach((card, index) => {
        card.style.animationDelay = `\${index * 0.1}s`;
    });

    // Effet hover amélioré
    const hoverElements = document.querySelectorAll('.detail-card, .stat-card-show');
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', function() {
            this.style.zIndex = '100';
        });
        el.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Animation du prix
    const priceValue = document.querySelector('.price-value');
    if (priceValue) {
        let hue = 120; // Vert
        setInterval(() => {
            hue = (hue + 1) % 360;
            priceValue.style.filter = `hue-rotate(\${hue}deg)`;
        }, 100);
    }

    // Confirmation de suppression
    const deleteBtn = document.querySelector('.action-btn.delete');
    if (deleteBtn) {
        deleteBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        });
    }

    // Animation des icônes
    const icons = document.querySelectorAll('.detail-icon, .stat-icon-show');
    icons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
        });
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Effet de copie pour l'ID
    const idValue = document.querySelector('.id-value');
    if (idValue) {
        idValue.style.cursor = 'pointer';
        idValue.title = 'Cliquer pour copier';
        idValue.addEventListener('click', function() {
            navigator.clipboard.writeText(this.textContent);
            
            // Animation de feedback
            const originalText = this.textContent;
            this.textContent = 'COPIÉ !';
            this.style.color = 'var(--neon-green)';
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.color = 'var(--neon-purple)';
            }, 1500);
        });
    }

    // Animation des boutons d'action
    const actionButtons = document.querySelectorAll('.action-btn');
    actionButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'scale(1.2)';
            }
        });
        
        btn.addEventListener('mouseleave', function() {
            const icon = this.querySelector('i');
            if (icon) {
                icon.style.transform = 'scale(1)';
            }
        });
    });
});
</script>
{% endblock %}", "shop_item/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\shop_item\\show.html.twig");
    }
}
