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

/* shop_item/new.html.twig */
class __TwigTemplate_da4383c6ca404bf50bf4278d487db8e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_item/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_item/new.html.twig"));

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

        yield "PHANTOM SHOP - NOUVEL ITEM";
        
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
        <h1 class=\"shop-title\">🚀 <span>CRÉER UN NOUVEL ITEM</span> 🚀</h1>
        <p class=\"shop-subtitle\">AJOUTEZ UN ITEM AU SHOP • REMPLISSEZ LES DÉTAILS</p>
        
        <!-- NAVIGATION -->
        <div class=\"quick-actions\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"neon-btn purple\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR AU DASHBOARD
            </a>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"neon-btn red\">
                <i class=\"fas fa-list\"></i> VOIR TOUS LES ITEMS
            </a>
        </div>
    </div>

    <!-- FORM CONTAINER -->
    <div class=\"form-container\">
        <div class=\"form-header\">
            <div class=\"form-title\">
                <i class=\"fas fa-plus-circle fa-2x\"></i>
                <h2>FORMULAIRE DE CRÉATION</h2>
            </div>
            <div class=\"form-steps\">
                <div class=\"step active\">1</div>
                <div class=\"step\">2</div>
                <div class=\"step\">3</div>
            </div>
        </div>

        <!-- FORM -->
        ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["class" => "aggressive-form"]]);
        yield "
        
        <div class=\"form-grid\">
            <!-- COLONNE GAUCHE -->
            <div class=\"form-column\">
                <!-- ITEM NAME -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-tag\"></i>
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "itemName", [], "any", false, false, false, 47), 'label');
        yield "
                        <span class=\"required\">*</span>
                    </div>
                    <div class=\"form-input\">
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "itemName", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control neon-input", "placeholder" => "Ex: Skin Édition Limitée, Abonnement Premium..."]]);
        // line 54
        yield "
                        <div class=\"input-helper\">
                            <i class=\"fas fa-info-circle\"></i> Nom unique de l'item
                        </div>
                    </div>
                    <div class=\"form-error\">
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "itemName", [], "any", false, false, false, 60), 'errors');
        yield "
                    </div>
                </div>

                <!-- ITEM CATEGORY -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-layer-group\"></i>
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "itemCategory", [], "any", false, false, false, 68), 'label');
        yield "
                        <span class=\"required\">*</span>
                    </div>
                    <div class=\"form-input\">
                        <div class=\"form-options\">
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "itemCategory", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            yield "                            <label class=\"option-card ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74), "html", null, true);
            yield "\">
                                ";
            // line 75
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "category-radio"]]);
            yield "
                                <div class=\"option-content\">
                                    <div class=\"option-icon\">
                                        ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78) == "skin")) {
                // line 79
                yield "                                            <i class=\"fas fa-gamepad\"></i>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["child"], "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80) == "abonnement")) {
                // line 81
                yield "                                            <i class=\"fas fa-crown\"></i>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 82
$context["child"], "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82) == "coaching")) {
                // line 83
                yield "                                            <i class=\"fas fa-chalkboard-teacher\"></i>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 84
$context["child"], "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) == "merch")) {
                // line 85
                yield "                                            <i class=\"fas fa-tshirt\"></i>
                                        ";
            } else {
                // line 87
                yield "                                            <i class=\"fas fa-question\"></i>
                                        ";
            }
            // line 89
            yield "                                    </div>
                                    <div class=\"option-text\">
                                        <span class=\"option-title\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 91), "label", [], "any", false, false, false, 91)), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                            </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                        </div>
                    </div>
                    <div class=\"form-error\">
                        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "itemCategory", [], "any", false, false, false, 99), 'errors');
        yield "
                    </div>
                </div>

                <!-- DESCRIPTION -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-align-left\"></i>
                        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "itemDescription", [], "any", false, false, false, 107), 'label');
        yield "
                    </div>
                    <div class=\"form-input\">
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "itemDescription", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control neon-input", "rows" => 4, "placeholder" => "Description détaillée de l'item..."]]);
        // line 114
        yield "
                        <div class=\"char-counter\">
                            <span id=\"charCount\">0</span> / 500 caractères
                        </div>
                    </div>
                    <div class=\"form-error\">
                        ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "itemDescription", [], "any", false, false, false, 120), 'errors');
        yield "
                    </div>
                </div>
            </div>

            <!-- COLONNE DROITE -->
            <div class=\"form-column\">
                <!-- PRICE -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-euro-sign\"></i>
                        ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "price", [], "any", false, false, false, 131), 'label');
        yield "
                        <span class=\"required\">*</span>
                    </div>
                    <div class=\"form-input price-input\">
                        <div class=\"input-group\">
                            <span class=\"input-icon\">€</span>
                            ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "price", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control neon-input", "placeholder" => "0.00", "step" => "0.01"]]);
        // line 141
        yield "
                        </div>
                        <div class=\"price-preview\">
                            <span class=\"preview-label\">TOTAL:</span>
                            <span class=\"preview-value neon-text green\">
                                <span id=\"pricePreview\">0.00</span> €
                            </span>
                        </div>
                    </div>
                    <div class=\"form-error\">
                        ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "price", [], "any", false, false, false, 151), 'errors');
        yield "
                    </div>
                </div>

                <!-- QUANTITY -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-boxes\"></i>
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "quantity", [], "any", false, false, false, 159), 'label');
        yield "
                    </div>
                    <div class=\"form-input\">
                        <div class=\"quantity-control\">
                            <button type=\"button\" class=\"qty-btn minus\" onclick=\"changeQuantity(-1)\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "quantity", [], "any", false, false, false, 166), 'widget', ["attr" => ["class" => "form-control neon-input qty-input", "min" => "1", "value" => "1"]]);
        // line 170
        yield "
                            <button type=\"button\" class=\"qty-btn plus\" onclick=\"changeQuantity(1)\">
                                <i class=\"fas fa-plus\"></i>
                            </button>
                        </div>
                        <div class=\"input-helper\">
                            <i class=\"fas fa-info-circle\"></i> Quantité en stock
                        </div>
                    </div>
                    <div class=\"form-error\">
                        ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "quantity", [], "any", false, false, false, 180), 'errors');
        yield "
                    </div>
                </div>

                <!-- STATUS -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-circle\"></i>
                        ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "status", [], "any", false, false, false, 188), 'label');
        yield "
                    </div>
                    <div class=\"form-input\">
                        <div class=\"form-options status-options\">
                            ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "status", [], "any", false, false, false, 192));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 193
            yield "                            <label class=\"status-option ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "html", null, true);
            yield "\">
                                ";
            // line 194
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "status-radio"]]);
            yield "
                                <span class=\"status-badge\">
                                    <i class=\"fas fa-";
            // line 196
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 197
$context["child"], "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197) == "pending")) ? ("clock") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 198
$context["child"], "vars", [], "any", false, false, false, 198), "value", [], "any", false, false, false, 198) == "paid")) ? ("check-circle") : ("times-circle"))));
            // line 200
            yield "\"></i>
                                    ";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 201), "label", [], "any", false, false, false, 201)), "html", null, true);
            yield "
                                </span>
                            </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "                        </div>
                    </div>
                    <div class=\"form-error\">
                        ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "status", [], "any", false, false, false, 208), 'errors');
        yield "
                    </div>
                </div>

                <!-- SECTION OPTIONNELLE -->
                ";
        // line 213
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchaseDate", [], "any", true, true, false, 213)) {
            // line 214
            yield "                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-calendar\"></i>
                        ";
            // line 217
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "purchaseDate", [], "any", false, false, false, 217), 'label');
            yield "
                    </div>
                    <div class=\"form-input\">
                        ";
            // line 220
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "purchaseDate", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control neon-input"]]);
            // line 222
            yield "
                    </div>
                    <div class=\"form-error\">
                        ";
            // line 225
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "purchaseDate", [], "any", false, false, false, 225), 'errors');
            yield "
                    </div>
                </div>
                ";
        }
        // line 229
        yield "            </div>
        </div>

        <!-- FORM ACTIONS -->
        <div class=\"form-actions\">
            <button type=\"reset\" class=\"btn-reset\">
                <i class=\"fas fa-redo\"></i> RÉINITIALISER
            </button>
            <div class=\"action-buttons\">
                <a href=\"";
        // line 238
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"btn-cancel\">
                    <i class=\"fas fa-times\"></i> ANNULER
                </a>
                <button type=\"submit\" class=\"btn-submit\">
                    <i class=\"fas fa-rocket\"></i> CRÉER L'ITEM
                </button>
            </div>
        </div>
        
        ";
        // line 247
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), 'form_end');
        yield "
    </div>

    <!-- PREVIEW SECTION -->
    <div class=\"preview-section\">
        <h3 class=\"preview-title\">
            <i class=\"fas fa-eye\"></i> APERÇU DE L'ITEM
        </h3>
        <div class=\"preview-card\">
            <div class=\"preview-header\">
                <div class=\"preview-category skin\">
                    <i class=\"fas fa-gamepad\"></i> SKIN
                </div>
                <div class=\"preview-status pending\">
                    PENDING
                </div>
            </div>
            <div class=\"preview-body\">
                <h4 id=\"previewName\">NOM DE L'ITEM</h4>
                <p id=\"previewDescription\">Description de l'item apparaîtra ici...</p>
                <div class=\"preview-details\">
                    <div class=\"preview-detail\">
                        <span>PRIX:</span>
                        <span id=\"previewPrice\" class=\"neon-text red\">0.00 €</span>
                    </div>
                    <div class=\"preview-detail\">
                        <span>QUANTITÉ:</span>
                        <span id=\"previewQuantity\" class=\"neon-text blue\">1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* STYLES AGGRESSIFS - CONSERVEZ LES VARIABLES CSS DE INDEX */
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

/* HEADER (identique à index) */
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

.neon-btn.purple:hover {
    background: var(--neon-purple);
    color: white;
}

@keyframes btnPulse {
    0%, 100% { box-shadow: 0 0 10px; }
    50% { box-shadow: 0 0 20px; }
}

/* FORM CONTAINER */
.form-container {
    background: rgba(10, 10, 15, 0.9);
    border: 2px solid var(--neon-green);
    border-radius: 15px;
    padding: 30px;
    margin: 40px auto;
    max-width: 1200px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(0, 255, 65, 0.2);
    animation: formGlow 4s infinite alternate;
}

@keyframes formGlow {
    0% { box-shadow: 0 0 20px rgba(0, 255, 65, 0.2); }
    100% { box-shadow: 0 0 40px rgba(0, 255, 65, 0.4); }
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid var(--neon-green);
}

.form-title {
    display: flex;
    align-items: center;
    gap: 15px;
    color: white;
}

.form-title h2 {
    font-size: 1.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.form-title i {
    color: var(--neon-green);
    animation: spin 10s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.form-steps {
    display: flex;
    gap: 10px;
}

.step {
    width: 40px;
    height: 40px;
    border: 2px solid var(--neon-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    color: var(--neon-blue);
    background: rgba(0, 243, 255, 0.1);
}

.step.active {
    background: var(--neon-blue);
    color: black;
    animation: stepPulse 1.5s infinite;
}

@keyframes stepPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

/* FORM GRID */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

.form-column {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

/* FORM GROUPS */
.form-group {
    background: rgba(20, 20, 30, 0.8);
    border: 1px solid rgba(0, 255, 65, 0.2);
    border-radius: 10px;
    padding: 20px;
    transition: all 0.3s;
}

.form-group:focus-within {
    border-color: var(--neon-green);
    box-shadow: 0 0 20px rgba(0, 255, 65, 0.3);
}

.form-label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    font-weight: 700;
    color: var(--neon-blue);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.form-label i {
    font-size: 1.2rem;
}

.required {
    color: var(--neon-red);
    margin-left: 5px;
}

/* INPUT STYLES */
.neon-input {
    background: rgba(0, 0, 0, 0.6);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 8px;
    padding: 12px 15px;
    color: white;
    font-size: 1rem;
    width: 100%;
    transition: all 0.3s;
    font-family: inherit;
}

.neon-input:focus {
    outline: none;
    border-color: var(--neon-blue);
    box-shadow: 0 0 15px rgba(0, 243, 255, 0.5);
}

textarea.neon-input {
    min-height: 100px;
    resize: vertical;
}

.input-helper {
    font-size: 0.8rem;
    color: #777;
    margin-top: 8px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.char-counter {
    text-align: right;
    font-size: 0.8rem;
    color: var(--neon-blue);
    margin-top: 5px;
    font-weight: 600;
}

/* FORM OPTIONS RADIO */
.form-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 15px;
    margin-top: 10px;
}

.option-card {
    cursor: pointer;
    position: relative;
}

.category-radio {
    display: none;
    position: absolute;
    opacity: 0;
}

.option-content {
    background: rgba(0, 0, 0, 0.6);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    transition: all 0.3s;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.category-radio:checked + .option-content {
    border-color: var(--neon-green);
    background: rgba(0, 255, 65, 0.1);
    box-shadow: 0 0 20px rgba(0, 255, 65, 0.3);
    transform: translateY(-5px);
}

.option-icon {
    font-size: 2rem;
    margin-bottom: 10px;
    transition: all 0.3s;
}

.option-card.skin .option-icon { color: var(--neon-red); }
.option-card.abonnement .option-icon { color: var(--neon-blue); }
.option-card.coaching .option-icon { color: var(--neon-purple); }
.option-card.merch .option-icon { color: var(--neon-yellow); }

.category-radio:checked + .option-content .option-icon {
    transform: scale(1.2);
    filter: drop-shadow(0 0 5px currentColor);
}

.option-title {
    font-weight: 700;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
}

/* PRICE INPUT */
.price-input {
    position: relative;
}

.input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 15px;
    color: var(--neon-green);
    font-weight: 900;
    font-size: 1.2rem;
    z-index: 2;
}

.input-group .neon-input {
    padding-left: 40px;
}

.price-preview {
    margin-top: 15px;
    padding: 10px;
    background: rgba(0, 255, 65, 0.1);
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: 1px solid rgba(0, 255, 65, 0.3);
}

.preview-label {
    font-size: 0.9rem;
    color: #aaa;
    text-transform: uppercase;
    font-weight: 600;
}

.preview-value {
    font-size: 1.3rem;
    font-weight: 900;
}

.neon-text.green {
    color: var(--neon-green);
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.5);
}

/* QUANTITY CONTROL */
.quantity-control {
    display: flex;
    gap: 10px;
    align-items: center;
}

.qty-btn {
    width: 40px;
    height: 40px;
    border: 2px solid var(--neon-blue);
    background: transparent;
    color: var(--neon-blue);
    border-radius: 8px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.qty-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: scale(1.1);
}

.qty-input {
    text-align: center;
    max-width: 100px;
    font-weight: 900;
    font-size: 1.3rem;
}

/* STATUS OPTIONS */
.status-options {
    display: flex;
    gap: 15px;
    margin-top: 10px;
}

.status-option {
    flex: 1;
    cursor: pointer;
    position: relative;
}

.status-radio {
    display: none;
    position: absolute;
    opacity: 0;
}

.status-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #aaa;
    transition: all 0.3s;
    height: 100%;
}

.status-radio:checked + .status-badge {
    transform: translateY(-3px);
}

.status-option.pending .status-badge {
    border-color: rgba(255, 204, 0, 0.3);
    color: var(--neon-yellow);
}

.status-option.paid .status-badge {
    border-color: rgba(0, 255, 65, 0.3);
    color: var(--neon-green);
}

.status-option.canceled .status-badge {
    border-color: rgba(255, 0, 51, 0.3);
    color: var(--neon-red);
}

.status-option.pending .status-radio:checked + .status-badge {
    background: rgba(255, 204, 0, 0.1);
    border-color: var(--neon-yellow);
    box-shadow: 0 0 15px rgba(255, 204, 0, 0.3);
    color: var(--neon-yellow);
}

.status-option.paid .status-radio:checked + .status-badge {
    background: rgba(0, 255, 65, 0.1);
    border-color: var(--neon-green);
    box-shadow: 0 0 15px rgba(0, 255, 65, 0.3);
    color: var(--neon-green);
}

.status-option.canceled .status-radio:checked + .status-badge {
    background: rgba(255, 0, 51, 0.1);
    border-color: var(--neon-red);
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.3);
    color: var(--neon-red);
}

/* FORM ACTIONS */
.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 2px solid rgba(255, 255, 255, 0.1);
}

.btn-reset {
    background: transparent;
    border: 2px solid var(--neon-red);
    color: var(--neon-red);
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 10px;
    font-family: inherit;
}

.btn-reset:hover {
    background: var(--neon-red);
    color: black;
    transform: translateX(-5px);
    box-shadow: 0 0 20px rgba(255, 0, 51, 0.5);
}

.action-buttons {
    display: flex;
    gap: 20px;
}

.btn-cancel {
    padding: 12px 24px;
    border: 2px solid #777;
    border-radius: 8px;
    color: #777;
    text-decoration: none;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s;
}

.btn-cancel:hover {
    border-color: white;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
}

.btn-submit {
    padding: 12px 24px;
    background: linear-gradient(45deg, var(--neon-green), var(--neon-blue));
    border: none;
    border-radius: 8px;
    color: black;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: submitPulse 2s infinite;
    font-family: inherit;
}

@keyframes submitPulse {
    0%, 100% { 
        box-shadow: 0 0 20px rgba(0, 255, 65, 0.5); 
    }
    50% { 
        box-shadow: 0 0 40px rgba(0, 255, 65, 0.8); 
    }
}

.btn-submit:hover {
    transform: translateY(-5px) scale(1.05);
    background: linear-gradient(45deg, var(--neon-blue), var(--neon-green));
}

/* PREVIEW SECTION */
.preview-section {
    max-width: 1200px;
    margin: 40px auto;
    padding: 30px;
    background: rgba(10, 10, 15, 0.9);
    border: 2px solid var(--neon-purple);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 30px rgba(157, 0, 255, 0.2);
}

.preview-title {
    display: flex;
    align-items: center;
    gap: 15px;
    color: var(--neon-purple);
    font-size: 1.5rem;
    margin-bottom: 25px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.preview-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(157, 0, 255, 0.3);
    border-radius: 12px;
    padding: 25px;
    animation: previewFloat 3s ease-in-out infinite;
}

@keyframes previewFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.preview-category {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.preview-category.skin {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid rgba(255, 0, 51, 0.3);
}

.preview-category.abonnement {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
    border: 1px solid rgba(0, 243, 255, 0.3);
}

.preview-category.coaching {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    border: 1px solid rgba(157, 0, 255, 0.3);
}

.preview-category.merch {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid rgba(255, 204, 0, 0.3);
}

.preview-status {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
}

.preview-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid rgba(255, 204, 0, 0.3);
}

.preview-status.paid {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 1px solid rgba(0, 255, 65, 0.3);
}

.preview-status.canceled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid rgba(255, 0, 51, 0.3);
}

.preview-body h4 {
    font-size: 1.8rem;
    font-weight: 700;
    color: white;
    margin-bottom: 15px;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
}

.preview-body p {
    color: #aaa;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 1rem;
}

.preview-details {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.preview-detail {
    padding: 15px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.preview-detail span:first-child {
    display: block;
    font-size: 0.9rem;
    color: #777;
    text-transform: uppercase;
    margin-bottom: 5px;
    font-weight: 600;
}

.neon-text.red {
    color: var(--neon-red);
    text-shadow: 0 0 10px rgba(255, 0, 51, 0.5);
    font-weight: 900;
}

.neon-text.blue {
    color: var(--neon-blue);
    text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
    font-weight: 900;
}

/* FORM ERRORS */
.form-error {
    color: var(--neon-red);
    font-size: 0.8rem;
    margin-top: 5px;
    min-height: 20px;
}

/* ANIMATIONS */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.form-group {
    animation: fadeIn 0.5s ease-out forwards;
}

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
    
    .form-header {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .form-options {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .status-options {
        flex-direction: column;
    }
    
    .status-option {
        width: 100%;
    }
    
    .action-buttons {
        flex-direction: column;
        width: 100%;
    }
    
    .btn-cancel, .btn-submit {
        width: 100%;
        justify-content: center;
    }
    
    .form-actions {
        flex-direction: column;
        gap: 20px;
    }
    
    .btn-reset {
        width: 100%;
        justify-content: center;
    }
    
    .preview-details {
        grid-template-columns: 1fr;
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
    // Mettre à jour le compteur de caractères
    const descriptionField = document.querySelector('textarea[name*=\"itemDescription\"]');
    const charCount = document.getElementById('charCount');
    
    if (descriptionField && charCount) {
        descriptionField.addEventListener('input', function() {
            charCount.textContent = this.value.length;
            if (this.value.length > 450) {
                charCount.style.color = 'var(--neon-red)';
            } else if (this.value.length > 400) {
                charCount.style.color = 'var(--neon-yellow)';
            } else {
                charCount.style.color = 'var(--neon-blue)';
            }
        });
        
        // Initialiser le compteur
        charCount.textContent = descriptionField.value.length;
    }
    
    // Mettre à jour l'aperçu du prix
    const priceField = document.querySelector('input[name*=\"price\"]');
    const quantityField = document.querySelector('input[name*=\"quantity\"]');
    const pricePreview = document.getElementById('pricePreview');
    
    function updatePricePreview() {
        const price = parseFloat(priceField?.value) || 0;
        const quantity = parseInt(quantityField?.value) || 1;
        const total = price * quantity;
        if (pricePreview) {
            pricePreview.textContent = total.toFixed(2);
        }
    }
    
    if (priceField) {
        priceField.addEventListener('input', updatePricePreview);
        // Initialiser l'aperçu
        updatePricePreview();
    }
    
    if (quantityField) {
        quantityField.addEventListener('input', updatePricePreview);
    }
    
    // Fonction pour changer la quantité
    window.changeQuantity = function(change) {
        if (quantityField) {
            let current = parseInt(quantityField.value) || 1;
            current = Math.max(1, current + change);
            quantityField.value = current;
            quantityField.dispatchEvent(new Event('input'));
        }
    };
    
    // Mettre à jour l'aperçu en temps réel
    const nameField = document.querySelector('input[name*=\"itemName\"]');
    const previewName = document.getElementById('previewName');
    const previewDescription = document.getElementById('previewDescription');
    const previewPrice = document.getElementById('previewPrice');
    const previewQuantity = document.getElementById('previewQuantity');
    
    if (nameField && previewName) {
        nameField.addEventListener('input', function() {
            previewName.textContent = this.value || 'NOM DE L\\'ITEM';
        });
        // Initialiser le nom
        previewName.textContent = nameField.value || 'NOM DE L\\'ITEM';
    }
    
    if (descriptionField && previewDescription) {
        descriptionField.addEventListener('input', function() {
            previewDescription.textContent = this.value || 'Description de l\\'item apparaîtra ici...';
        });
        // Initialiser la description
        previewDescription.textContent = descriptionField.value || 'Description de l\\'item apparaîtra ici...';
    }
    
    if (priceField && previewPrice) {
        priceField.addEventListener('input', function() {
            const price = parseFloat(this.value) || 0;
            previewPrice.textContent = price.toFixed(2) + ' €';
        });
        // Initialiser le prix
        const initialPrice = parseFloat(priceField.value) || 0;
        previewPrice.textContent = initialPrice.toFixed(2) + ' €';
    }
    
    if (quantityField && previewQuantity) {
        quantityField.addEventListener('input', function() {
            previewQuantity.textContent = this.value || '1';
        });
        // Initialiser la quantité
        previewQuantity.textContent = quantityField.value || '1';
    }
    
    // Mettre à jour la catégorie dans l'aperçu
    const categoryRadios = document.querySelectorAll('.category-radio');
    const previewCategory = document.querySelector('.preview-category');
    
    categoryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked && previewCategory) {
                const category = this.value;
                previewCategory.className = 'preview-category ' + category;
                previewCategory.innerHTML = `<i class=\"fas fa-\${ 
                    category == 'skin' ? 'gamepad' : 
                    category == 'abonnement' ? 'crown' : 
                    category == 'coaching' ? 'chalkboard-teacher' : 
                    'tshirt' 
                }\"></i> \${category.toUpperCase()}`;
            }
        });
    });
    
    // Mettre à jour le statut dans l'aperçu
    const statusRadios = document.querySelectorAll('.status-radio');
    const previewStatus = document.querySelector('.preview-status');
    
    statusRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked && previewStatus) {
                const status = this.value;
                previewStatus.className = 'preview-status ' + status;
                previewStatus.textContent = status.toUpperCase();
            }
        });
    });
    
    // Animation des boutons radio
    const radioButtons = document.querySelectorAll('input[type=\"radio\"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            const label = this.closest('label');
            if (label) {
                label.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    label.style.transform = 'scale(1)';
                }, 100);
            }
        });
    });
    
    // Effet d'onde sur les boutons
    const buttons = document.querySelectorAll('.qty-btn, .btn-reset, .btn-submit, .btn-cancel');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Ajouter le style pour l'effet ripple
    const rippleStyle = document.createElement('style');
    rippleStyle.textContent = `
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .qty-btn, .btn-reset, .btn-submit, .btn-cancel {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(rippleStyle);
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
        return "shop_item/new.html.twig";
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
        return array (  459 => 247,  447 => 238,  436 => 229,  429 => 225,  424 => 222,  422 => 220,  416 => 217,  411 => 214,  409 => 213,  401 => 208,  396 => 205,  386 => 201,  383 => 200,  381 => 198,  380 => 197,  379 => 196,  374 => 194,  369 => 193,  365 => 192,  358 => 188,  347 => 180,  335 => 170,  333 => 166,  323 => 159,  312 => 151,  300 => 141,  298 => 137,  289 => 131,  275 => 120,  267 => 114,  265 => 110,  259 => 107,  248 => 99,  243 => 96,  232 => 91,  228 => 89,  224 => 87,  220 => 85,  218 => 84,  215 => 83,  213 => 82,  210 => 81,  208 => 80,  205 => 79,  203 => 78,  197 => 75,  192 => 74,  188 => 73,  180 => 68,  169 => 60,  161 => 54,  159 => 51,  152 => 47,  140 => 38,  116 => 17,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PHANTOM SHOP - NOUVEL ITEM{% endblock %}

{% block body %}
<div class=\"aggressive-shop\">
    <!-- HEADER AGGRESSIF -->
    <div class=\"shop-header\">
        <h1 class=\"shop-title\">🚀 <span>CRÉER UN NOUVEL ITEM</span> 🚀</h1>
        <p class=\"shop-subtitle\">AJOUTEZ UN ITEM AU SHOP • REMPLISSEZ LES DÉTAILS</p>
        
        <!-- NAVIGATION -->
        <div class=\"quick-actions\">
            <a href=\"{{ path('app_shop_item_index') }}\" class=\"neon-btn purple\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR AU DASHBOARD
            </a>
            <a href=\"{{ path('app_shop_item_index') }}\" class=\"neon-btn red\">
                <i class=\"fas fa-list\"></i> VOIR TOUS LES ITEMS
            </a>
        </div>
    </div>

    <!-- FORM CONTAINER -->
    <div class=\"form-container\">
        <div class=\"form-header\">
            <div class=\"form-title\">
                <i class=\"fas fa-plus-circle fa-2x\"></i>
                <h2>FORMULAIRE DE CRÉATION</h2>
            </div>
            <div class=\"form-steps\">
                <div class=\"step active\">1</div>
                <div class=\"step\">2</div>
                <div class=\"step\">3</div>
            </div>
        </div>

        <!-- FORM -->
        {{ form_start(form, {'attr': {'class': 'aggressive-form'}}) }}
        
        <div class=\"form-grid\">
            <!-- COLONNE GAUCHE -->
            <div class=\"form-column\">
                <!-- ITEM NAME -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-tag\"></i>
                        {{ form_label(form.itemName) }}
                        <span class=\"required\">*</span>
                    </div>
                    <div class=\"form-input\">
                        {{ form_widget(form.itemName, {'attr': {
                            'class': 'form-control neon-input',
                            'placeholder': 'Ex: Skin Édition Limitée, Abonnement Premium...'
                        }}) }}
                        <div class=\"input-helper\">
                            <i class=\"fas fa-info-circle\"></i> Nom unique de l'item
                        </div>
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.itemName) }}
                    </div>
                </div>

                <!-- ITEM CATEGORY -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-layer-group\"></i>
                        {{ form_label(form.itemCategory) }}
                        <span class=\"required\">*</span>
                    </div>
                    <div class=\"form-input\">
                        <div class=\"form-options\">
                            {% for child in form.itemCategory %}
                            <label class=\"option-card {{ child.vars.value }}\">
                                {{ form_widget(child, {'attr': {'class': 'category-radio'}}) }}
                                <div class=\"option-content\">
                                    <div class=\"option-icon\">
                                        {% if child.vars.value == 'skin' %}
                                            <i class=\"fas fa-gamepad\"></i>
                                        {% elseif child.vars.value == 'abonnement' %}
                                            <i class=\"fas fa-crown\"></i>
                                        {% elseif child.vars.value == 'coaching' %}
                                            <i class=\"fas fa-chalkboard-teacher\"></i>
                                        {% elseif child.vars.value == 'merch' %}
                                            <i class=\"fas fa-tshirt\"></i>
                                        {% else %}
                                            <i class=\"fas fa-question\"></i>
                                        {% endif %}
                                    </div>
                                    <div class=\"option-text\">
                                        <span class=\"option-title\">{{ child.vars.label|upper }}</span>
                                    </div>
                                </div>
                            </label>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.itemCategory) }}
                    </div>
                </div>

                <!-- DESCRIPTION -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-align-left\"></i>
                        {{ form_label(form.itemDescription) }}
                    </div>
                    <div class=\"form-input\">
                        {{ form_widget(form.itemDescription, {'attr': {
                            'class': 'form-control neon-input',
                            'rows': 4,
                            'placeholder': 'Description détaillée de l\\'item...'
                        }}) }}
                        <div class=\"char-counter\">
                            <span id=\"charCount\">0</span> / 500 caractères
                        </div>
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.itemDescription) }}
                    </div>
                </div>
            </div>

            <!-- COLONNE DROITE -->
            <div class=\"form-column\">
                <!-- PRICE -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-euro-sign\"></i>
                        {{ form_label(form.price) }}
                        <span class=\"required\">*</span>
                    </div>
                    <div class=\"form-input price-input\">
                        <div class=\"input-group\">
                            <span class=\"input-icon\">€</span>
                            {{ form_widget(form.price, {'attr': {
                                'class': 'form-control neon-input',
                                'placeholder': '0.00',
                                'step': '0.01'
                            }}) }}
                        </div>
                        <div class=\"price-preview\">
                            <span class=\"preview-label\">TOTAL:</span>
                            <span class=\"preview-value neon-text green\">
                                <span id=\"pricePreview\">0.00</span> €
                            </span>
                        </div>
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.price) }}
                    </div>
                </div>

                <!-- QUANTITY -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-boxes\"></i>
                        {{ form_label(form.quantity) }}
                    </div>
                    <div class=\"form-input\">
                        <div class=\"quantity-control\">
                            <button type=\"button\" class=\"qty-btn minus\" onclick=\"changeQuantity(-1)\">
                                <i class=\"fas fa-minus\"></i>
                            </button>
                            {{ form_widget(form.quantity, {'attr': {
                                'class': 'form-control neon-input qty-input',
                                'min': '1',
                                'value': '1'
                            }}) }}
                            <button type=\"button\" class=\"qty-btn plus\" onclick=\"changeQuantity(1)\">
                                <i class=\"fas fa-plus\"></i>
                            </button>
                        </div>
                        <div class=\"input-helper\">
                            <i class=\"fas fa-info-circle\"></i> Quantité en stock
                        </div>
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.quantity) }}
                    </div>
                </div>

                <!-- STATUS -->
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-circle\"></i>
                        {{ form_label(form.status) }}
                    </div>
                    <div class=\"form-input\">
                        <div class=\"form-options status-options\">
                            {% for child in form.status %}
                            <label class=\"status-option {{ child.vars.value }}\">
                                {{ form_widget(child, {'attr': {'class': 'status-radio'}}) }}
                                <span class=\"status-badge\">
                                    <i class=\"fas fa-{{ 
                                        child.vars.value == 'pending' ? 'clock' : 
                                        child.vars.value == 'paid' ? 'check-circle' : 
                                        'times-circle' 
                                    }}\"></i>
                                    {{ child.vars.label|upper }}
                                </span>
                            </label>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.status) }}
                    </div>
                </div>

                <!-- SECTION OPTIONNELLE -->
                {% if form.purchaseDate is defined %}
                <div class=\"form-group\">
                    <div class=\"form-label\">
                        <i class=\"fas fa-calendar\"></i>
                        {{ form_label(form.purchaseDate) }}
                    </div>
                    <div class=\"form-input\">
                        {{ form_widget(form.purchaseDate, {'attr': {
                            'class': 'form-control neon-input'
                        }}) }}
                    </div>
                    <div class=\"form-error\">
                        {{ form_errors(form.purchaseDate) }}
                    </div>
                </div>
                {% endif %}
            </div>
        </div>

        <!-- FORM ACTIONS -->
        <div class=\"form-actions\">
            <button type=\"reset\" class=\"btn-reset\">
                <i class=\"fas fa-redo\"></i> RÉINITIALISER
            </button>
            <div class=\"action-buttons\">
                <a href=\"{{ path('app_shop_item_index') }}\" class=\"btn-cancel\">
                    <i class=\"fas fa-times\"></i> ANNULER
                </a>
                <button type=\"submit\" class=\"btn-submit\">
                    <i class=\"fas fa-rocket\"></i> CRÉER L'ITEM
                </button>
            </div>
        </div>
        
        {{ form_end(form) }}
    </div>

    <!-- PREVIEW SECTION -->
    <div class=\"preview-section\">
        <h3 class=\"preview-title\">
            <i class=\"fas fa-eye\"></i> APERÇU DE L'ITEM
        </h3>
        <div class=\"preview-card\">
            <div class=\"preview-header\">
                <div class=\"preview-category skin\">
                    <i class=\"fas fa-gamepad\"></i> SKIN
                </div>
                <div class=\"preview-status pending\">
                    PENDING
                </div>
            </div>
            <div class=\"preview-body\">
                <h4 id=\"previewName\">NOM DE L'ITEM</h4>
                <p id=\"previewDescription\">Description de l'item apparaîtra ici...</p>
                <div class=\"preview-details\">
                    <div class=\"preview-detail\">
                        <span>PRIX:</span>
                        <span id=\"previewPrice\" class=\"neon-text red\">0.00 €</span>
                    </div>
                    <div class=\"preview-detail\">
                        <span>QUANTITÉ:</span>
                        <span id=\"previewQuantity\" class=\"neon-text blue\">1</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* STYLES AGGRESSIFS - CONSERVEZ LES VARIABLES CSS DE INDEX */
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

/* HEADER (identique à index) */
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

.neon-btn.purple:hover {
    background: var(--neon-purple);
    color: white;
}

@keyframes btnPulse {
    0%, 100% { box-shadow: 0 0 10px; }
    50% { box-shadow: 0 0 20px; }
}

/* FORM CONTAINER */
.form-container {
    background: rgba(10, 10, 15, 0.9);
    border: 2px solid var(--neon-green);
    border-radius: 15px;
    padding: 30px;
    margin: 40px auto;
    max-width: 1200px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(0, 255, 65, 0.2);
    animation: formGlow 4s infinite alternate;
}

@keyframes formGlow {
    0% { box-shadow: 0 0 20px rgba(0, 255, 65, 0.2); }
    100% { box-shadow: 0 0 40px rgba(0, 255, 65, 0.4); }
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid var(--neon-green);
}

.form-title {
    display: flex;
    align-items: center;
    gap: 15px;
    color: white;
}

.form-title h2 {
    font-size: 1.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.form-title i {
    color: var(--neon-green);
    animation: spin 10s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.form-steps {
    display: flex;
    gap: 10px;
}

.step {
    width: 40px;
    height: 40px;
    border: 2px solid var(--neon-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    color: var(--neon-blue);
    background: rgba(0, 243, 255, 0.1);
}

.step.active {
    background: var(--neon-blue);
    color: black;
    animation: stepPulse 1.5s infinite;
}

@keyframes stepPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

/* FORM GRID */
.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

.form-column {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

/* FORM GROUPS */
.form-group {
    background: rgba(20, 20, 30, 0.8);
    border: 1px solid rgba(0, 255, 65, 0.2);
    border-radius: 10px;
    padding: 20px;
    transition: all 0.3s;
}

.form-group:focus-within {
    border-color: var(--neon-green);
    box-shadow: 0 0 20px rgba(0, 255, 65, 0.3);
}

.form-label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    font-weight: 700;
    color: var(--neon-blue);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.form-label i {
    font-size: 1.2rem;
}

.required {
    color: var(--neon-red);
    margin-left: 5px;
}

/* INPUT STYLES */
.neon-input {
    background: rgba(0, 0, 0, 0.6);
    border: 2px solid rgba(0, 243, 255, 0.3);
    border-radius: 8px;
    padding: 12px 15px;
    color: white;
    font-size: 1rem;
    width: 100%;
    transition: all 0.3s;
    font-family: inherit;
}

.neon-input:focus {
    outline: none;
    border-color: var(--neon-blue);
    box-shadow: 0 0 15px rgba(0, 243, 255, 0.5);
}

textarea.neon-input {
    min-height: 100px;
    resize: vertical;
}

.input-helper {
    font-size: 0.8rem;
    color: #777;
    margin-top: 8px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.char-counter {
    text-align: right;
    font-size: 0.8rem;
    color: var(--neon-blue);
    margin-top: 5px;
    font-weight: 600;
}

/* FORM OPTIONS RADIO */
.form-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 15px;
    margin-top: 10px;
}

.option-card {
    cursor: pointer;
    position: relative;
}

.category-radio {
    display: none;
    position: absolute;
    opacity: 0;
}

.option-content {
    background: rgba(0, 0, 0, 0.6);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    transition: all 0.3s;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.category-radio:checked + .option-content {
    border-color: var(--neon-green);
    background: rgba(0, 255, 65, 0.1);
    box-shadow: 0 0 20px rgba(0, 255, 65, 0.3);
    transform: translateY(-5px);
}

.option-icon {
    font-size: 2rem;
    margin-bottom: 10px;
    transition: all 0.3s;
}

.option-card.skin .option-icon { color: var(--neon-red); }
.option-card.abonnement .option-icon { color: var(--neon-blue); }
.option-card.coaching .option-icon { color: var(--neon-purple); }
.option-card.merch .option-icon { color: var(--neon-yellow); }

.category-radio:checked + .option-content .option-icon {
    transform: scale(1.2);
    filter: drop-shadow(0 0 5px currentColor);
}

.option-title {
    font-weight: 700;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
}

/* PRICE INPUT */
.price-input {
    position: relative;
}

.input-group {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 15px;
    color: var(--neon-green);
    font-weight: 900;
    font-size: 1.2rem;
    z-index: 2;
}

.input-group .neon-input {
    padding-left: 40px;
}

.price-preview {
    margin-top: 15px;
    padding: 10px;
    background: rgba(0, 255, 65, 0.1);
    border-radius: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border: 1px solid rgba(0, 255, 65, 0.3);
}

.preview-label {
    font-size: 0.9rem;
    color: #aaa;
    text-transform: uppercase;
    font-weight: 600;
}

.preview-value {
    font-size: 1.3rem;
    font-weight: 900;
}

.neon-text.green {
    color: var(--neon-green);
    text-shadow: 0 0 10px rgba(0, 255, 65, 0.5);
}

/* QUANTITY CONTROL */
.quantity-control {
    display: flex;
    gap: 10px;
    align-items: center;
}

.qty-btn {
    width: 40px;
    height: 40px;
    border: 2px solid var(--neon-blue);
    background: transparent;
    color: var(--neon-blue);
    border-radius: 8px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.qty-btn:hover {
    background: var(--neon-blue);
    color: black;
    transform: scale(1.1);
}

.qty-input {
    text-align: center;
    max-width: 100px;
    font-weight: 900;
    font-size: 1.3rem;
}

/* STATUS OPTIONS */
.status-options {
    display: flex;
    gap: 15px;
    margin-top: 10px;
}

.status-option {
    flex: 1;
    cursor: pointer;
    position: relative;
}

.status-radio {
    display: none;
    position: absolute;
    opacity: 0;
}

.status-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #aaa;
    transition: all 0.3s;
    height: 100%;
}

.status-radio:checked + .status-badge {
    transform: translateY(-3px);
}

.status-option.pending .status-badge {
    border-color: rgba(255, 204, 0, 0.3);
    color: var(--neon-yellow);
}

.status-option.paid .status-badge {
    border-color: rgba(0, 255, 65, 0.3);
    color: var(--neon-green);
}

.status-option.canceled .status-badge {
    border-color: rgba(255, 0, 51, 0.3);
    color: var(--neon-red);
}

.status-option.pending .status-radio:checked + .status-badge {
    background: rgba(255, 204, 0, 0.1);
    border-color: var(--neon-yellow);
    box-shadow: 0 0 15px rgba(255, 204, 0, 0.3);
    color: var(--neon-yellow);
}

.status-option.paid .status-radio:checked + .status-badge {
    background: rgba(0, 255, 65, 0.1);
    border-color: var(--neon-green);
    box-shadow: 0 0 15px rgba(0, 255, 65, 0.3);
    color: var(--neon-green);
}

.status-option.canceled .status-radio:checked + .status-badge {
    background: rgba(255, 0, 51, 0.1);
    border-color: var(--neon-red);
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.3);
    color: var(--neon-red);
}

/* FORM ACTIONS */
.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 2px solid rgba(255, 255, 255, 0.1);
}

.btn-reset {
    background: transparent;
    border: 2px solid var(--neon-red);
    color: var(--neon-red);
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 10px;
    font-family: inherit;
}

.btn-reset:hover {
    background: var(--neon-red);
    color: black;
    transform: translateX(-5px);
    box-shadow: 0 0 20px rgba(255, 0, 51, 0.5);
}

.action-buttons {
    display: flex;
    gap: 20px;
}

.btn-cancel {
    padding: 12px 24px;
    border: 2px solid #777;
    border-radius: 8px;
    color: #777;
    text-decoration: none;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s;
}

.btn-cancel:hover {
    border-color: white;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
}

.btn-submit {
    padding: 12px 24px;
    background: linear-gradient(45deg, var(--neon-green), var(--neon-blue));
    border: none;
    border-radius: 8px;
    color: black;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 10px;
    animation: submitPulse 2s infinite;
    font-family: inherit;
}

@keyframes submitPulse {
    0%, 100% { 
        box-shadow: 0 0 20px rgba(0, 255, 65, 0.5); 
    }
    50% { 
        box-shadow: 0 0 40px rgba(0, 255, 65, 0.8); 
    }
}

.btn-submit:hover {
    transform: translateY(-5px) scale(1.05);
    background: linear-gradient(45deg, var(--neon-blue), var(--neon-green));
}

/* PREVIEW SECTION */
.preview-section {
    max-width: 1200px;
    margin: 40px auto;
    padding: 30px;
    background: rgba(10, 10, 15, 0.9);
    border: 2px solid var(--neon-purple);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 30px rgba(157, 0, 255, 0.2);
}

.preview-title {
    display: flex;
    align-items: center;
    gap: 15px;
    color: var(--neon-purple);
    font-size: 1.5rem;
    margin-bottom: 25px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.preview-card {
    background: rgba(20, 20, 30, 0.9);
    border: 2px solid rgba(157, 0, 255, 0.3);
    border-radius: 12px;
    padding: 25px;
    animation: previewFloat 3s ease-in-out infinite;
}

@keyframes previewFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.preview-category {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.preview-category.skin {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid rgba(255, 0, 51, 0.3);
}

.preview-category.abonnement {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
    border: 1px solid rgba(0, 243, 255, 0.3);
}

.preview-category.coaching {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    border: 1px solid rgba(157, 0, 255, 0.3);
}

.preview-category.merch {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid rgba(255, 204, 0, 0.3);
}

.preview-status {
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
}

.preview-status.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid rgba(255, 204, 0, 0.3);
}

.preview-status.paid {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 1px solid rgba(0, 255, 65, 0.3);
}

.preview-status.canceled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid rgba(255, 0, 51, 0.3);
}

.preview-body h4 {
    font-size: 1.8rem;
    font-weight: 700;
    color: white;
    margin-bottom: 15px;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
}

.preview-body p {
    color: #aaa;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 1rem;
}

.preview-details {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.preview-detail {
    padding: 15px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.preview-detail span:first-child {
    display: block;
    font-size: 0.9rem;
    color: #777;
    text-transform: uppercase;
    margin-bottom: 5px;
    font-weight: 600;
}

.neon-text.red {
    color: var(--neon-red);
    text-shadow: 0 0 10px rgba(255, 0, 51, 0.5);
    font-weight: 900;
}

.neon-text.blue {
    color: var(--neon-blue);
    text-shadow: 0 0 10px rgba(0, 243, 255, 0.5);
    font-weight: 900;
}

/* FORM ERRORS */
.form-error {
    color: var(--neon-red);
    font-size: 0.8rem;
    margin-top: 5px;
    min-height: 20px;
}

/* ANIMATIONS */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.form-group {
    animation: fadeIn 0.5s ease-out forwards;
}

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
    
    .form-header {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .form-options {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .status-options {
        flex-direction: column;
    }
    
    .status-option {
        width: 100%;
    }
    
    .action-buttons {
        flex-direction: column;
        width: 100%;
    }
    
    .btn-cancel, .btn-submit {
        width: 100%;
        justify-content: center;
    }
    
    .form-actions {
        flex-direction: column;
        gap: 20px;
    }
    
    .btn-reset {
        width: 100%;
        justify-content: center;
    }
    
    .preview-details {
        grid-template-columns: 1fr;
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
    // Mettre à jour le compteur de caractères
    const descriptionField = document.querySelector('textarea[name*=\"itemDescription\"]');
    const charCount = document.getElementById('charCount');
    
    if (descriptionField && charCount) {
        descriptionField.addEventListener('input', function() {
            charCount.textContent = this.value.length;
            if (this.value.length > 450) {
                charCount.style.color = 'var(--neon-red)';
            } else if (this.value.length > 400) {
                charCount.style.color = 'var(--neon-yellow)';
            } else {
                charCount.style.color = 'var(--neon-blue)';
            }
        });
        
        // Initialiser le compteur
        charCount.textContent = descriptionField.value.length;
    }
    
    // Mettre à jour l'aperçu du prix
    const priceField = document.querySelector('input[name*=\"price\"]');
    const quantityField = document.querySelector('input[name*=\"quantity\"]');
    const pricePreview = document.getElementById('pricePreview');
    
    function updatePricePreview() {
        const price = parseFloat(priceField?.value) || 0;
        const quantity = parseInt(quantityField?.value) || 1;
        const total = price * quantity;
        if (pricePreview) {
            pricePreview.textContent = total.toFixed(2);
        }
    }
    
    if (priceField) {
        priceField.addEventListener('input', updatePricePreview);
        // Initialiser l'aperçu
        updatePricePreview();
    }
    
    if (quantityField) {
        quantityField.addEventListener('input', updatePricePreview);
    }
    
    // Fonction pour changer la quantité
    window.changeQuantity = function(change) {
        if (quantityField) {
            let current = parseInt(quantityField.value) || 1;
            current = Math.max(1, current + change);
            quantityField.value = current;
            quantityField.dispatchEvent(new Event('input'));
        }
    };
    
    // Mettre à jour l'aperçu en temps réel
    const nameField = document.querySelector('input[name*=\"itemName\"]');
    const previewName = document.getElementById('previewName');
    const previewDescription = document.getElementById('previewDescription');
    const previewPrice = document.getElementById('previewPrice');
    const previewQuantity = document.getElementById('previewQuantity');
    
    if (nameField && previewName) {
        nameField.addEventListener('input', function() {
            previewName.textContent = this.value || 'NOM DE L\\'ITEM';
        });
        // Initialiser le nom
        previewName.textContent = nameField.value || 'NOM DE L\\'ITEM';
    }
    
    if (descriptionField && previewDescription) {
        descriptionField.addEventListener('input', function() {
            previewDescription.textContent = this.value || 'Description de l\\'item apparaîtra ici...';
        });
        // Initialiser la description
        previewDescription.textContent = descriptionField.value || 'Description de l\\'item apparaîtra ici...';
    }
    
    if (priceField && previewPrice) {
        priceField.addEventListener('input', function() {
            const price = parseFloat(this.value) || 0;
            previewPrice.textContent = price.toFixed(2) + ' €';
        });
        // Initialiser le prix
        const initialPrice = parseFloat(priceField.value) || 0;
        previewPrice.textContent = initialPrice.toFixed(2) + ' €';
    }
    
    if (quantityField && previewQuantity) {
        quantityField.addEventListener('input', function() {
            previewQuantity.textContent = this.value || '1';
        });
        // Initialiser la quantité
        previewQuantity.textContent = quantityField.value || '1';
    }
    
    // Mettre à jour la catégorie dans l'aperçu
    const categoryRadios = document.querySelectorAll('.category-radio');
    const previewCategory = document.querySelector('.preview-category');
    
    categoryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked && previewCategory) {
                const category = this.value;
                previewCategory.className = 'preview-category ' + category;
                previewCategory.innerHTML = `<i class=\"fas fa-\${ 
                    category == 'skin' ? 'gamepad' : 
                    category == 'abonnement' ? 'crown' : 
                    category == 'coaching' ? 'chalkboard-teacher' : 
                    'tshirt' 
                }\"></i> \${category.toUpperCase()}`;
            }
        });
    });
    
    // Mettre à jour le statut dans l'aperçu
    const statusRadios = document.querySelectorAll('.status-radio');
    const previewStatus = document.querySelector('.preview-status');
    
    statusRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked && previewStatus) {
                const status = this.value;
                previewStatus.className = 'preview-status ' + status;
                previewStatus.textContent = status.toUpperCase();
            }
        });
    });
    
    // Animation des boutons radio
    const radioButtons = document.querySelectorAll('input[type=\"radio\"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            const label = this.closest('label');
            if (label) {
                label.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    label.style.transform = 'scale(1)';
                }, 100);
            }
        });
    });
    
    // Effet d'onde sur les boutons
    const buttons = document.querySelectorAll('.qty-btn, .btn-reset, .btn-submit, .btn-cancel');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Ajouter le style pour l'effet ripple
    const rippleStyle = document.createElement('style');
    rippleStyle.textContent = `
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .qty-btn, .btn-reset, .btn-submit, .btn-cancel {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(rippleStyle);
});
</script>
{% endblock %}", "shop_item/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\shop_item\\new.html.twig");
    }
}
