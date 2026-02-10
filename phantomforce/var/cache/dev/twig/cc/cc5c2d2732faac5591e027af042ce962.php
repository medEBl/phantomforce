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

/* shop_item/edit.html.twig */
class __TwigTemplate_8219344b44a9c0cc08e47749cbc10592 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_item/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop_item/edit.html.twig"));

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

        yield "PHANTOM SHOP - ÉDITION ITEM";
        
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
        yield "<div class=\"aggressive-edit-container\">
    <!-- HEADER ÉDITION -->
    <div class=\"edit-header\">
        <div class=\"back-nav\">
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"back-btn\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR AU DASHBOARD
            </a>
        </div>
        
        <h1 class=\"edit-title\">
            <i class=\"fas fa-edit\"></i>
            <span class=\"neon-edit\">ÉDITION ITEM</span>
            <span class=\"item-id\">#";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
        </h1>
        
        <div class=\"item-preview\">
            <div class=\"preview-badge ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
                ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23)), "html", null, true);
        yield "
            </div>
            <div class=\"preview-name\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 25, $this->source); })()), "itemName", [], "any", false, false, false, 25), "html", null, true);
        yield "</div>
        </div>
    </div>

    <!-- CONTENU PRINCIPAL -->
    <div class=\"edit-content\">
        <!-- CARTE DE FORMULAIRE -->
        <div class=\"form-card\">
            <div class=\"form-header\">
                <h2><i class=\"fas fa-sliders-h\"></i> MODIFIER L'ITEM</h2>
                <div class=\"form-indicator\">
                    <div class=\"indicator-dot active\"></div>
                    <div class=\"indicator-dot\"></div>
                    <div class=\"indicator-dot\"></div>
                </div>
            </div>

            ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "neon-form"]]);
        yield "
            
            <!-- SECTION INFORMATIONS DE BASE -->
            <div class=\"form-section\">
                <div class=\"section-header\">
                    <i class=\"fas fa-info-circle\"></i>
                    <h3>INFORMATIONS DE BASE</h3>
                    <div class=\"section-line\"></div>
                </div>
                
                <div class=\"form-grid\">
                    <div class=\"form-group full-width\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "itemName", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "itemName", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "NOM DE L'ITEM..."]]);
        // line 58
        yield "
                        <div class=\"input-icon\">
                            <i class=\"fas fa-tag\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le nom de l'article est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Ne peut pas dépasser 255 caractères</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group full-width\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "itemDescription", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "itemDescription", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "neon-textarea", "rows" => 3, "placeholder" => "DESCRIPTION DÉTAILLÉE..."]]);
        // line 81
        yield "
                        <div class=\"textarea-icon\">
                            <i class=\"fas fa-align-left\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La description est obligatoire</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "itemCategory", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <div class=\"select-wrapper\">
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "itemCategory", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "neon-select"]]);
        yield "
                            <div class=\"select-arrow\">
                                <i class=\"fas fa-chevron-down\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La catégorie est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Ne peut pas dépasser 100 caractères</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "status", [], "any", false, false, false, 116), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <div class=\"select-wrapper\">
                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "status", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "neon-select"]]);
        yield "
                            <div class=\"select-arrow\">
                                <i class=\"fas fa-chevron-down\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le statut est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être: pending, processing, shipped, delivered ou cancelled</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION FINANCIÈRE -->
            <div class=\"form-section\">
                <div class=\"section-header\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                    <h3>INFORMATIONS FINANCIÈRES</h3>
                    <div class=\"section-line\"></div>
                </div>
                
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "price", [], "any", false, false, false, 148), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <div class=\"input-with-icon\">
                            ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "price", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "0.00"]]);
        // line 153
        yield "
                            <span class=\"input-suffix\">€</span>
                            <div class=\"input-icon\">
                                <i class=\"fas fa-euro-sign\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le prix est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positif (supérieur à 0)</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "quantity", [], "any", false, false, false, 173), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "quantity", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "1"]]);
        // line 177
        yield "
                        <div class=\"input-icon\">
                            <i class=\"fas fa-cubes\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La quantité est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positive (supérieure à 0)</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "totalPrice", [], "any", false, false, false, 195), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                        <div class=\"input-with-icon\">
                            ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "totalPrice", [], "any", false, false, false, 197), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "0.00", "readonly" => "readonly"]]);
        // line 201
        yield "
                            <span class=\"input-suffix\">€</span>
                            <div class=\"input-icon\">
                                <i class=\"fas fa-calculator\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le prix total est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positif (supérieur à 0)</span>
                            </div>
                        </div>
                    </div>

                    ";
        // line 220
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "purchaseDate", [], "any", true, true, false, 220)) {
            // line 221
            yield "                    <div class=\"form-group\">
                        ";
            // line 222
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "purchaseDate", [], "any", false, false, false, 222), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
                        ";
            // line 223
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "purchaseDate", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "neon-input datetime-input"]]);
            // line 225
            yield "
                        <div class=\"input-icon\">
                            <i class=\"far fa-calendar\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La date d'achat est obligatoire</span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 238
        yield "
                    ";
        // line 239
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "buyerId", [], "any", true, true, false, 239)) {
            // line 240
            yield "                    <div class=\"form-group\">
                        ";
            // line 241
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "buyerId", [], "any", false, false, false, 241), 'label', ["label_attr" => ["class" => "form-label"]]);
            yield "
                        ";
            // line 242
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "buyerId", [], "any", false, false, false, 242), 'widget', ["attr" => ["class" => "neon-input", "placeholder" => "ID de l'acheteur"]]);
            // line 245
            yield "
                        <div class=\"input-icon\">
                            <i class=\"fas fa-user\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positif si renseigné</span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 258
        yield "                </div>
            </div>

            <!-- BOUTONS D'ACTION -->
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"neon-btn success-btn\">
                    <i class=\"fas fa-save\"></i>
                    <span>MISE À JOUR</span>
                    <div class=\"btn-glow\"></div>
                </button>

                <a href=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_shop_item_index");
        yield "\" class=\"neon-btn cancel-btn\">
                    <i class=\"fas fa-times\"></i>
                    ANNULER
                </a>

                <button type=\"button\" class=\"neon-btn danger-btn\" id=\"deleteTrigger\">
                    <i class=\"fas fa-trash\"></i>
                    SUPPRIMER
                </button>
            </div>

            ";
        // line 280
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), 'form_end');
        yield "
        </div>

        <!-- CARTE DE PRÉVISUALISATION -->
        <div class=\"preview-card\">
            <div class=\"preview-header\">
                <h2><i class=\"fas fa-eye\"></i> PRÉVISUALISATION</h2>
                <div class=\"live-badge\">
                    <span class=\"live-dot\"></span>
                    LIVE
                </div>
            </div>

            <div class=\"preview-content\">
                <div class=\"preview-item\">
                    <div class=\"preview-status ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 295, $this->source); })()), "status", [], "any", false, false, false, 295), "html", null, true);
        yield "\">
                        ";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 296, $this->source); })()), "status", [], "any", false, false, false, 296)), "html", null, true);
        yield "
                    </div>
                    
                    <div class=\"preview-category ";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 299, $this->source); })()), "itemCategory", [], "any", false, false, false, 299), "html", null, true);
        yield "\">
                        <i class=\"fas fa-";
        // line 300
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 301
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 301, $this->source); })()), "itemCategory", [], "any", false, false, false, 301) == "skin")) ? ("gamepad") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 302
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 302, $this->source); })()), "itemCategory", [], "any", false, false, false, 302) == "abonnement")) ? ("crown") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 303
(isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 303, $this->source); })()), "itemCategory", [], "any", false, false, false, 303) == "coaching")) ? ("chalkboard-teacher") : ("tshirt"))))));
        // line 305
        yield "\"></i>
                        ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 306, $this->source); })()), "itemCategory", [], "any", false, false, false, 306)), "html", null, true);
        yield "
                    </div>

                    <h3 class=\"preview-name\" id=\"previewName\">
                        ";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 310, $this->source); })()), "itemName", [], "any", false, false, false, 310), "html", null, true);
        yield "
                    </h3>
                    
                    <p class=\"preview-description\" id=\"previewDescription\">
                        ";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 314, $this->source); })()), "itemDescription", [], "any", false, false, false, 314), "html", null, true);
        yield "
                    </p>

                    <div class=\"preview-stats\">
                        <div class=\"preview-stat\">
                            <span class=\"stat-label\">PRIX UNITAIRE</span>
                            <span class=\"stat-value neon-text red\" id=\"previewPrice\">
                                ";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 321, $this->source); })()), "price", [], "any", false, false, false, 321), 2, ",", " "), "html", null, true);
        yield " €
                            </span>
                        </div>
                        
                        <div class=\"preview-stat\">
                            <span class=\"stat-label\">QUANTITÉ</span>
                            <span class=\"stat-value neon-text blue\" id=\"previewQuantity\">
                                ";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 328, $this->source); })()), "quantity", [], "any", false, false, false, 328), "html", null, true);
        yield "
                            </span>
                        </div>
                        
                        <div class=\"preview-stat\">
                            <span class=\"stat-label\">TOTAL</span>
                            <span class=\"stat-value neon-text green\" id=\"previewTotal\">
                                ";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 335, $this->source); })()), "price", [], "any", false, false, false, 335) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 335, $this->source); })()), "quantity", [], "any", false, false, false, 335)), 2, ",", " "), "html", null, true);
        yield " €
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- STATISTIQUES RAPIDES -->
            <div class=\"preview-stats-grid\">
                <div class=\"mini-stat\">
                    <div class=\"mini-stat-icon\">
                        <i class=\"fas fa-history\"></i>
                    </div>
                    <div class=\"mini-stat-info\">
                        <div class=\"mini-stat-value\">
                            ";
        // line 350
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["shop_item"] ?? null), "purchaseDate", [], "any", true, true, false, 350)) {
            // line 351
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 351, $this->source); })()), "purchaseDate", [], "any", false, false, false, 351), "d/m/Y"), "html", null, true);
            yield "
                            ";
        } else {
            // line 353
            yield "                                N/A
                            ";
        }
        // line 355
        yield "                        </div>
                        <div class=\"mini-stat-label\">DATE</div>
                    </div>
                </div>

                <div class=\"mini-stat\">
                    <div class=\"mini-stat-icon\">
                        <i class=\"fas fa-id-card\"></i>
                    </div>
                    <div class=\"mini-stat-info\">
                        <div class=\"mini-stat-value\">#";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 365, $this->source); })()), "id", [], "any", false, false, false, 365), "html", null, true);
        yield "</div>
                        <div class=\"mini-stat-label\">ID ITEM</div>
                    </div>
                </div>

                ";
        // line 370
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 370, $this->source); })()), "buyerId", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 371
            yield "                <div class=\"mini-stat\">
                    <div class=\"mini-stat-icon\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <div class=\"mini-stat-info\">
                        <div class=\"mini-stat-value\">#";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 376, $this->source); })()), "buyerId", [], "any", false, false, false, 376), "html", null, true);
            yield "</div>
                        <div class=\"mini-stat-label\">ACHETEUR</div>
                    </div>
                </div>
                ";
        }
        // line 381
        yield "            </div>
        </div>
    </div>

    <!-- MODAL DE SUPPRESSION -->
    <div class=\"modal-overlay\" id=\"deleteModal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3><i class=\"fas fa-exclamation-triangle\"></i> CONFIRMATION SUPPRESSION</h3>
                <button class=\"modal-close\">&times;</button>
            </div>
            
            <div class=\"modal-body\">
                <div class=\"warning-icon\">
                    <i class=\"fas fa-trash fa-3x\"></i>
                </div>
                <p class=\"warning-text\">
                    Êtes-vous sûr de vouloir supprimer cet item ?
                </p>
                <p class=\"warning-details\">
                    Cette action est irréversible et supprimera définitivement l'item<br>
                    <strong>\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop_item"]) || array_key_exists("shop_item", $context) ? $context["shop_item"] : (function () { throw new RuntimeError('Variable "shop_item" does not exist.', 402, $this->source); })()), "itemName", [], "any", false, false, false, 402), "html", null, true);
        yield "\"</strong>
                </p>
            </div>
            
            <div class=\"modal-actions\">
                ";
        // line 407
        yield Twig\Extension\CoreExtension::include($this->env, $context, "shop_item/_delete_form.html.twig");
        yield "
                <button class=\"neon-btn cancel-btn modal-cancel\">
                    ANNULER
                </button>
            </div>
        </div>
    </div>
</div>

<!-- STYLE AGGRESSIF -->
<style>
:root {
    --neon-red: #ff0033;
    --neon-blue: #00f3ff;
    --neon-green: #00ff41;
    --neon-purple: #9d00ff;
    --neon-yellow: #ffcc00;
    --dark-bg: #0a0a0f;
    --darker-bg: #050508;
    --card-bg: rgba(15, 15, 25, 0.95);
}

.aggressive-edit-container {
    background: var(--dark-bg);
    min-height: 100vh;
    padding: 20px;
    position: relative;
}

/* HEADER */
.edit-header {
    text-align: center;
    padding: 30px 0;
    margin-bottom: 40px;
    position: relative;
}

.back-nav {
    position: absolute;
    left: 0;
    top: 30px;
}

.back-btn {
    color: var(--neon-blue);
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s;
    padding: 10px 20px;
    border: 1px solid rgba(0, 243, 255, 0.3);
    border-radius: 8px;
}

.back-btn:hover {
    background: rgba(0, 243, 255, 0.1);
    border-color: var(--neon-blue);
    transform: translateX(-5px);
}

.edit-title {
    font-size: 2.5rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.neon-edit {
    background: linear-gradient(45deg, var(--neon-red), var(--neon-blue));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: textGlow 2s infinite alternate;
}

.item-id {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 1.5rem;
    font-family: monospace;
    border: 1px solid var(--neon-red);
}

.item-preview {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.preview-badge {
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.9rem;
}

.preview-badge.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid var(--neon-yellow);
}

.preview-badge.processing {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
    border: 1px solid var(--neon-blue);
}

.preview-badge.shipped {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    border: 1px solid var(--neon-purple);
}

.preview-badge.delivered {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 1px solid var(--neon-green);
}

.preview-badge.cancelled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid var(--neon-red);
}

.preview-name {
    font-size: 1.5rem;
    color: white;
    font-weight: 600;
}

/* CONTENU PRINCIPAL */
.edit-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 1400px;
    margin: 0 auto;
}

@media (max-width: 1200px) {
    .edit-content {
        grid-template-columns: 1fr;
    }
}

/* CARTE FORMULAIRE */
.form-card {
    background: var(--card-bg);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    padding: 30px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(255, 0, 51, 0.2);
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(255, 0, 51, 0.3);
}

.form-header h2 {
    font-size: 1.8rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-indicator {
    display: flex;
    gap: 8px;
}

.indicator-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    transition: all 0.3s;
}

.indicator-dot.active {
    background: var(--neon-red);
    box-shadow: 0 0 10px var(--neon-red);
}

/* CONTRAINTES */
.constraints {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.constraint-item {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 3px;
    font-size: 0.75rem;
    color: #888;
}

.constraint-item i {
    color: var(--neon-yellow);
    font-size: 0.7rem;
}

.constraint-item:last-child {
    margin-bottom: 0;
}

/* FORMULAIRE */
.form-section {
    margin-bottom: 40px;
}

.section-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.section-header h3 {
    font-size: 1.3rem;
    color: var(--neon-blue);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section-line {
    flex-grow: 1;
    height: 2px;
    background: linear-gradient(90deg, var(--neon-blue), transparent);
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

.full-width {
    grid-column: 1 / -1;
}

.form-group {
    position: relative;
}

.form-label {
    display: block;
    color: var(--neon-blue);
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
    font-weight: 600;
}

.neon-input, .neon-textarea, .neon-select {
    width: 100%;
    padding: 12px 15px;
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 0, 51, 0.3);
    border-radius: 8px;
    color: white;
    font-size: 1rem;
    transition: all 0.3s;
}

.neon-input:focus, .neon-textarea:focus, .neon-select:focus {
    outline: none;
    border-color: var(--neon-red);
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.5);
}

.neon-textarea {
    resize: vertical;
    min-height: 100px;
}

.select-wrapper {
    position: relative;
}

.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-red);
    pointer-events: none;
}

.input-with-icon {
    position: relative;
}

.input-suffix {
    position: absolute;
    right: 40px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-red);
    font-weight: 600;
}

.input-icon, .textarea-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-red);
}

.textarea-icon {
    top: 25px;
}

/* BOUTONS FORMULAIRE */
.form-actions {
    display: flex;
    gap: 15px;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 0, 51, 0.3);
}

.neon-btn {
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    flex: 1;
    position: relative;
    overflow: hidden;
}

.success-btn {
    background: rgba(0, 255, 65, 0.1);
    color: var(--neon-green);
    border: 1px solid var(--neon-green);
}

.success-btn:hover {
    background: var(--neon-green);
    color: black;
    box-shadow: 0 0 20px var(--neon-green);
}

.cancel-btn {
    background: rgba(0, 243, 255, 0.1);
    color: var(--neon-blue);
    border: 1px solid var(--neon-blue);
}

.cancel-btn:hover {
    background: var(--neon-blue);
    color: black;
    box-shadow: 0 0 20px var(--neon-blue);
}

.danger-btn {
    background: rgba(255, 0, 51, 0.1);
    color: var(--neon-red);
    border: 1px solid var(--neon-red);
}

.danger-btn:hover {
    background: var(--neon-red);
    color: white;
    box-shadow: 0 0 20px var(--neon-red);
}

.btn-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        45deg,
        transparent,
        rgba(0, 255, 65, 0.3),
        transparent
    );
    transform: rotate(45deg);
    animation: btnGlow 3s infinite linear;
}

@keyframes btnGlow {
    0% { transform: translateX(-100%) rotate(45deg); }
    100% { transform: translateX(100%) rotate(45deg); }
}

/* CARTE PRÉVISUALISATION */
.preview-card {
    background: var(--card-bg);
    border: 2px solid var(--neon-blue);
    border-radius: 15px;
    padding: 30px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(0, 243, 255, 0.2);
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.3);
}

.preview-header h2 {
    font-size: 1.8rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
}

.live-badge {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 8px;
    border: 1px solid var(--neon-green);
}

.live-dot {
    width: 8px;
    height: 8px;
    background: var(--neon-green);
    border-radius: 50%;
    animation: livePulse 1s infinite;
}

@keyframes livePulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

/* CONTENU PRÉVISUALISATION */
.preview-content {
    margin-bottom: 30px;
}

.preview-item {
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 25px;
    position: relative;
}

.preview-status {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
}

.preview-category {
    display: inline-block;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.preview-category.skin {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
}

.preview-category.abonnement {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
}

.preview-category.coaching {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
}

.preview-category.merch {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
}

.preview-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 15px;
}

.preview-description {
    color: #aaa;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 25px;
}

.preview-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    background: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
}

.preview-stat {
    text-align: center;
}

.stat-label {
    display: block;
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 1.3rem;
    font-weight: 700;
}

.neon-text.red { color: var(--neon-red); }
.neon-text.blue { color: var(--neon-blue); }
.neon-text.green { color: var(--neon-green); }

/* STATISTIQUES RAPIDES */
.preview-stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.mini-stat {
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s;
}

.mini-stat:hover {
    border-color: var(--neon-purple);
    transform: translateY(-3px);
}

.mini-stat-icon {
    width: 40px;
    height: 40px;
    background: rgba(157, 0, 255, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--neon-purple);
    font-size: 1.2rem;
}

.mini-stat-info {
    flex: 1;
}

.mini-stat-value {
    font-size: 1.2rem;
    font-weight: 700;
    color: white;
    margin-bottom: 5px;
}

.mini-stat-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
}

/* MODAL SUPPRESSION */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(10px);
    z-index: 1000;
    align-items: center;
    justify-content: center;
}

.modal-overlay.active {
    display: flex;
}

.modal-content {
    background: var(--darker-bg);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    padding: 30px;
    max-width: 500px;
    width: 90%;
    animation: modalSlideIn 0.3s ease-out;
}

@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: translateY(-50px) scale(0.9);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(255, 0, 51, 0.3);
}

.modal-header h3 {
    color: var(--neon-red);
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.modal-close {
    background: none;
    border: none;
    color: var(--neon-red);
    font-size: 2rem;
    cursor: pointer;
    line-height: 1;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-body {
    text-align: center;
    padding: 20px 0;
}

.warning-icon {
    color: var(--neon-red);
    margin-bottom: 20px;
    animation: warningPulse 2s infinite;
}

@keyframes warningPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.warning-text {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.warning-details {
    color: #aaa;
    font-size: 0.9rem;
    line-height: 1.6;
}

.modal-actions {
    display: flex;
    gap: 15px;
    margin-top: 30px;
}

/* ANIMATIONS */
@keyframes textGlow {
    0% { filter: drop-shadow(0 0 5px var(--neon-red)); }
    100% { filter: drop-shadow(0 0 20px var(--neon-blue)); }
}

/* FORM ERRORS */
.form-error {
    color: var(--neon-red);
    font-size: 0.8rem;
    margin-top: 5px;
    min-height: 20px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la prévisualisation en direct
    const formInputs = document.querySelectorAll('.neon-input, .neon-textarea, .neon-select');
    const previewName = document.getElementById('previewName');
    const previewDescription = document.getElementById('previewDescription');
    const previewPrice = document.getElementById('previewPrice');
    const previewQuantity = document.getElementById('previewQuantity');
    const previewTotal = document.getElementById('previewTotal');

    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            updatePreview();
        });
    });

    function updatePreview() {
        // Mise à jour du nom
        const nameInput = document.querySelector('[name*=\"[itemName]\"]');
        if (nameInput && previewName) {
            previewName.textContent = nameInput.value || 'Nom de l\\'item';
        }

        // Mise à jour de la description
        const descInput = document.querySelector('[name*=\"[itemDescription]\"]');
        if (descInput && previewDescription) {
            previewDescription.textContent = descInput.value || 'Description de l\\'item';
        }

        // Mise à jour du prix
        const priceInput = document.querySelector('[name*=\"[price]\"]');
        if (priceInput && previewPrice) {
            const price = parseFloat(priceInput.value) || 0;
            previewPrice.textContent = price.toFixed(2).replace('.', ',') + ' €';
        }

        // Mise à jour de la quantité
        const quantityInput = document.querySelector('[name*=\"[quantity]\"]');
        if (quantityInput && previewQuantity) {
            previewQuantity.textContent = quantityInput.value || '0';
        }

        // Mise à jour du total
        if (priceInput && quantityInput && previewTotal) {
            const price = parseFloat(priceInput.value) || 0;
            const quantity = parseFloat(quantityInput.value) || 0;
            const total = price * quantity;
            previewTotal.textContent = total.toFixed(2).replace('.', ',') + ' €';
            
            // Mettre à jour le champ totalPrice
            const totalPriceInput = document.querySelector('[name*=\"[totalPrice]\"]');
            if (totalPriceInput) {
                totalPriceInput.value = total.toFixed(2);
            }
        }
    }

    // Initialiser la prévisualisation
    updatePreview();

    // Gestion de la modal de suppression
    const deleteTrigger = document.getElementById('deleteTrigger');
    const deleteModal = document.getElementById('deleteModal');
    const modalClose = document.querySelector('.modal-close');
    const modalCancel = document.querySelector('.modal-cancel');

    if (deleteTrigger) {
        deleteTrigger.addEventListener('click', function(e) {
            e.preventDefault();
            deleteModal.style.display = 'flex';
            setTimeout(() => deleteModal.classList.add('active'), 10);
        });
    }

    if (modalClose) {
        modalClose.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            setTimeout(() => deleteModal.style.display = 'none', 300);
        });
    }

    if (modalCancel) {
        modalCancel.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            setTimeout(() => deleteModal.style.display = 'none', 300);
        });
    }

    // Fermer la modal en cliquant à l'extérieur
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) {
            deleteModal.classList.remove('active');
            setTimeout(() => deleteModal.style.display = 'none', 300);
        }
    });

    // Animation des champs du formulaire
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.opacity = '0';
        group.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            group.style.transition = 'all 0.5s ease-out';
            group.style.opacity = '1';
            group.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Validation en temps réel
    const form = document.querySelector('.neon-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> MISE À JOUR...';
                submitBtn.disabled = true;
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
        return "shop_item/edit.html.twig";
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
        return array (  628 => 407,  620 => 402,  597 => 381,  589 => 376,  582 => 371,  580 => 370,  572 => 365,  560 => 355,  556 => 353,  550 => 351,  548 => 350,  530 => 335,  520 => 328,  510 => 321,  500 => 314,  493 => 310,  486 => 306,  483 => 305,  481 => 303,  480 => 302,  479 => 301,  478 => 300,  474 => 299,  468 => 296,  464 => 295,  446 => 280,  432 => 269,  419 => 258,  404 => 245,  402 => 242,  398 => 241,  395 => 240,  393 => 239,  390 => 238,  375 => 225,  373 => 223,  369 => 222,  366 => 221,  364 => 220,  343 => 201,  341 => 197,  336 => 195,  316 => 177,  314 => 174,  310 => 173,  288 => 153,  286 => 150,  281 => 148,  248 => 118,  243 => 116,  221 => 97,  216 => 95,  200 => 81,  198 => 77,  194 => 76,  174 => 58,  172 => 55,  168 => 54,  153 => 42,  133 => 25,  128 => 23,  124 => 22,  117 => 18,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PHANTOM SHOP - ÉDITION ITEM{% endblock %}

{% block body %}
<div class=\"aggressive-edit-container\">
    <!-- HEADER ÉDITION -->
    <div class=\"edit-header\">
        <div class=\"back-nav\">
            <a href=\"{{ path('app_shop_item_index') }}\" class=\"back-btn\">
                <i class=\"fas fa-arrow-left\"></i> RETOUR AU DASHBOARD
            </a>
        </div>
        
        <h1 class=\"edit-title\">
            <i class=\"fas fa-edit\"></i>
            <span class=\"neon-edit\">ÉDITION ITEM</span>
            <span class=\"item-id\">#{{ shop_item.id }}</span>
        </h1>
        
        <div class=\"item-preview\">
            <div class=\"preview-badge {{ shop_item.status }}\">
                {{ shop_item.status|upper }}
            </div>
            <div class=\"preview-name\">{{ shop_item.itemName }}</div>
        </div>
    </div>

    <!-- CONTENU PRINCIPAL -->
    <div class=\"edit-content\">
        <!-- CARTE DE FORMULAIRE -->
        <div class=\"form-card\">
            <div class=\"form-header\">
                <h2><i class=\"fas fa-sliders-h\"></i> MODIFIER L'ITEM</h2>
                <div class=\"form-indicator\">
                    <div class=\"indicator-dot active\"></div>
                    <div class=\"indicator-dot\"></div>
                    <div class=\"indicator-dot\"></div>
                </div>
            </div>

            {{ form_start(form, {'attr': {'class': 'neon-form'}}) }}
            
            <!-- SECTION INFORMATIONS DE BASE -->
            <div class=\"form-section\">
                <div class=\"section-header\">
                    <i class=\"fas fa-info-circle\"></i>
                    <h3>INFORMATIONS DE BASE</h3>
                    <div class=\"section-line\"></div>
                </div>
                
                <div class=\"form-grid\">
                    <div class=\"form-group full-width\">
                        {{ form_label(form.itemName, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.itemName, {'attr': {
                            'class': 'neon-input',
                            'placeholder': 'NOM DE L\\'ITEM...'
                        }}) }}
                        <div class=\"input-icon\">
                            <i class=\"fas fa-tag\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le nom de l'article est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Ne peut pas dépasser 255 caractères</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group full-width\">
                        {{ form_label(form.itemDescription, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.itemDescription, {'attr': {
                            'class': 'neon-textarea',
                            'rows': 3,
                            'placeholder': 'DESCRIPTION DÉTAILLÉE...'
                        }}) }}
                        <div class=\"textarea-icon\">
                            <i class=\"fas fa-align-left\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La description est obligatoire</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.itemCategory, null, {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"select-wrapper\">
                            {{ form_widget(form.itemCategory, {'attr': {'class': 'neon-select'}}) }}
                            <div class=\"select-arrow\">
                                <i class=\"fas fa-chevron-down\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La catégorie est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Ne peut pas dépasser 100 caractères</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.status, null, {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"select-wrapper\">
                            {{ form_widget(form.status, {'attr': {'class': 'neon-select'}}) }}
                            <div class=\"select-arrow\">
                                <i class=\"fas fa-chevron-down\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le statut est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être: pending, processing, shipped, delivered ou cancelled</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION FINANCIÈRE -->
            <div class=\"form-section\">
                <div class=\"section-header\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                    <h3>INFORMATIONS FINANCIÈRES</h3>
                    <div class=\"section-line\"></div>
                </div>
                
                <div class=\"form-grid\">
                    <div class=\"form-group\">
                        {{ form_label(form.price, null, {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-with-icon\">
                            {{ form_widget(form.price, {'attr': {
                                'class': 'neon-input',
                                'placeholder': '0.00'
                            }}) }}
                            <span class=\"input-suffix\">€</span>
                            <div class=\"input-icon\">
                                <i class=\"fas fa-euro-sign\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le prix est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positif (supérieur à 0)</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.quantity, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.quantity, {'attr': {
                            'class': 'neon-input',
                            'placeholder': '1'
                        }}) }}
                        <div class=\"input-icon\">
                            <i class=\"fas fa-cubes\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La quantité est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positive (supérieure à 0)</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.totalPrice, null, {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"input-with-icon\">
                            {{ form_widget(form.totalPrice, {'attr': {
                                'class': 'neon-input',
                                'placeholder': '0.00',
                                'readonly': 'readonly'
                            }}) }}
                            <span class=\"input-suffix\">€</span>
                            <div class=\"input-icon\">
                                <i class=\"fas fa-calculator\"></i>
                            </div>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Le prix total est obligatoire</span>
                            </div>
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positif (supérieur à 0)</span>
                            </div>
                        </div>
                    </div>

                    {% if form.purchaseDate is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.purchaseDate, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.purchaseDate, {'attr': {
                            'class': 'neon-input datetime-input'
                        }}) }}
                        <div class=\"input-icon\">
                            <i class=\"far fa-calendar\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>La date d'achat est obligatoire</span>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                    {% if form.buyerId is defined %}
                    <div class=\"form-group\">
                        {{ form_label(form.buyerId, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.buyerId, {'attr': {
                            'class': 'neon-input',
                            'placeholder': 'ID de l\\'acheteur'
                        }}) }}
                        <div class=\"input-icon\">
                            <i class=\"fas fa-user\"></i>
                        </div>
                        <!-- Contraintes -->
                        <div class=\"constraints\">
                            <div class=\"constraint-item\">
                                <i class=\"fas fa-exclamation-circle\"></i>
                                <span>Doit être positif si renseigné</span>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>

            <!-- BOUTONS D'ACTION -->
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"neon-btn success-btn\">
                    <i class=\"fas fa-save\"></i>
                    <span>MISE À JOUR</span>
                    <div class=\"btn-glow\"></div>
                </button>

                <a href=\"{{ path('app_shop_item_index') }}\" class=\"neon-btn cancel-btn\">
                    <i class=\"fas fa-times\"></i>
                    ANNULER
                </a>

                <button type=\"button\" class=\"neon-btn danger-btn\" id=\"deleteTrigger\">
                    <i class=\"fas fa-trash\"></i>
                    SUPPRIMER
                </button>
            </div>

            {{ form_end(form) }}
        </div>

        <!-- CARTE DE PRÉVISUALISATION -->
        <div class=\"preview-card\">
            <div class=\"preview-header\">
                <h2><i class=\"fas fa-eye\"></i> PRÉVISUALISATION</h2>
                <div class=\"live-badge\">
                    <span class=\"live-dot\"></span>
                    LIVE
                </div>
            </div>

            <div class=\"preview-content\">
                <div class=\"preview-item\">
                    <div class=\"preview-status {{ shop_item.status }}\">
                        {{ shop_item.status|upper }}
                    </div>
                    
                    <div class=\"preview-category {{ shop_item.itemCategory }}\">
                        <i class=\"fas fa-{{ 
                            shop_item.itemCategory == 'skin' ? 'gamepad' : 
                            shop_item.itemCategory == 'abonnement' ? 'crown' : 
                            shop_item.itemCategory == 'coaching' ? 'chalkboard-teacher' : 
                            'tshirt' 
                        }}\"></i>
                        {{ shop_item.itemCategory|upper }}
                    </div>

                    <h3 class=\"preview-name\" id=\"previewName\">
                        {{ shop_item.itemName }}
                    </h3>
                    
                    <p class=\"preview-description\" id=\"previewDescription\">
                        {{ shop_item.itemDescription }}
                    </p>

                    <div class=\"preview-stats\">
                        <div class=\"preview-stat\">
                            <span class=\"stat-label\">PRIX UNITAIRE</span>
                            <span class=\"stat-value neon-text red\" id=\"previewPrice\">
                                {{ shop_item.price|number_format(2, ',', ' ') }} €
                            </span>
                        </div>
                        
                        <div class=\"preview-stat\">
                            <span class=\"stat-label\">QUANTITÉ</span>
                            <span class=\"stat-value neon-text blue\" id=\"previewQuantity\">
                                {{ shop_item.quantity }}
                            </span>
                        </div>
                        
                        <div class=\"preview-stat\">
                            <span class=\"stat-label\">TOTAL</span>
                            <span class=\"stat-value neon-text green\" id=\"previewTotal\">
                                {{ (shop_item.price * shop_item.quantity)|number_format(2, ',', ' ') }} €
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- STATISTIQUES RAPIDES -->
            <div class=\"preview-stats-grid\">
                <div class=\"mini-stat\">
                    <div class=\"mini-stat-icon\">
                        <i class=\"fas fa-history\"></i>
                    </div>
                    <div class=\"mini-stat-info\">
                        <div class=\"mini-stat-value\">
                            {% if shop_item.purchaseDate is defined %}
                                {{ shop_item.purchaseDate|date('d/m/Y') }}
                            {% else %}
                                N/A
                            {% endif %}
                        </div>
                        <div class=\"mini-stat-label\">DATE</div>
                    </div>
                </div>

                <div class=\"mini-stat\">
                    <div class=\"mini-stat-icon\">
                        <i class=\"fas fa-id-card\"></i>
                    </div>
                    <div class=\"mini-stat-info\">
                        <div class=\"mini-stat-value\">#{{ shop_item.id }}</div>
                        <div class=\"mini-stat-label\">ID ITEM</div>
                    </div>
                </div>

                {% if shop_item.buyerId %}
                <div class=\"mini-stat\">
                    <div class=\"mini-stat-icon\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <div class=\"mini-stat-info\">
                        <div class=\"mini-stat-value\">#{{ shop_item.buyerId }}</div>
                        <div class=\"mini-stat-label\">ACHETEUR</div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </div>

    <!-- MODAL DE SUPPRESSION -->
    <div class=\"modal-overlay\" id=\"deleteModal\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h3><i class=\"fas fa-exclamation-triangle\"></i> CONFIRMATION SUPPRESSION</h3>
                <button class=\"modal-close\">&times;</button>
            </div>
            
            <div class=\"modal-body\">
                <div class=\"warning-icon\">
                    <i class=\"fas fa-trash fa-3x\"></i>
                </div>
                <p class=\"warning-text\">
                    Êtes-vous sûr de vouloir supprimer cet item ?
                </p>
                <p class=\"warning-details\">
                    Cette action est irréversible et supprimera définitivement l'item<br>
                    <strong>\"{{ shop_item.itemName }}\"</strong>
                </p>
            </div>
            
            <div class=\"modal-actions\">
                {{ include('shop_item/_delete_form.html.twig') }}
                <button class=\"neon-btn cancel-btn modal-cancel\">
                    ANNULER
                </button>
            </div>
        </div>
    </div>
</div>

<!-- STYLE AGGRESSIF -->
<style>
:root {
    --neon-red: #ff0033;
    --neon-blue: #00f3ff;
    --neon-green: #00ff41;
    --neon-purple: #9d00ff;
    --neon-yellow: #ffcc00;
    --dark-bg: #0a0a0f;
    --darker-bg: #050508;
    --card-bg: rgba(15, 15, 25, 0.95);
}

.aggressive-edit-container {
    background: var(--dark-bg);
    min-height: 100vh;
    padding: 20px;
    position: relative;
}

/* HEADER */
.edit-header {
    text-align: center;
    padding: 30px 0;
    margin-bottom: 40px;
    position: relative;
}

.back-nav {
    position: absolute;
    left: 0;
    top: 30px;
}

.back-btn {
    color: var(--neon-blue);
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s;
    padding: 10px 20px;
    border: 1px solid rgba(0, 243, 255, 0.3);
    border-radius: 8px;
}

.back-btn:hover {
    background: rgba(0, 243, 255, 0.1);
    border-color: var(--neon-blue);
    transform: translateX(-5px);
}

.edit-title {
    font-size: 2.5rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.neon-edit {
    background: linear-gradient(45deg, var(--neon-red), var(--neon-blue));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: textGlow 2s infinite alternate;
}

.item-id {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 1.5rem;
    font-family: monospace;
    border: 1px solid var(--neon-red);
}

.item-preview {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.preview-badge {
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 0.9rem;
}

.preview-badge.pending {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
    border: 1px solid var(--neon-yellow);
}

.preview-badge.processing {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
    border: 1px solid var(--neon-blue);
}

.preview-badge.shipped {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
    border: 1px solid var(--neon-purple);
}

.preview-badge.delivered {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    border: 1px solid var(--neon-green);
}

.preview-badge.cancelled {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
    border: 1px solid var(--neon-red);
}

.preview-name {
    font-size: 1.5rem;
    color: white;
    font-weight: 600;
}

/* CONTENU PRINCIPAL */
.edit-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    max-width: 1400px;
    margin: 0 auto;
}

@media (max-width: 1200px) {
    .edit-content {
        grid-template-columns: 1fr;
    }
}

/* CARTE FORMULAIRE */
.form-card {
    background: var(--card-bg);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    padding: 30px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(255, 0, 51, 0.2);
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(255, 0, 51, 0.3);
}

.form-header h2 {
    font-size: 1.8rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-indicator {
    display: flex;
    gap: 8px;
}

.indicator-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    transition: all 0.3s;
}

.indicator-dot.active {
    background: var(--neon-red);
    box-shadow: 0 0 10px var(--neon-red);
}

/* CONTRAINTES */
.constraints {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.constraint-item {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 3px;
    font-size: 0.75rem;
    color: #888;
}

.constraint-item i {
    color: var(--neon-yellow);
    font-size: 0.7rem;
}

.constraint-item:last-child {
    margin-bottom: 0;
}

/* FORMULAIRE */
.form-section {
    margin-bottom: 40px;
}

.section-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.section-header h3 {
    font-size: 1.3rem;
    color: var(--neon-blue);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section-line {
    flex-grow: 1;
    height: 2px;
    background: linear-gradient(90deg, var(--neon-blue), transparent);
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }
}

.full-width {
    grid-column: 1 / -1;
}

.form-group {
    position: relative;
}

.form-label {
    display: block;
    color: var(--neon-blue);
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
    font-weight: 600;
}

.neon-input, .neon-textarea, .neon-select {
    width: 100%;
    padding: 12px 15px;
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 0, 51, 0.3);
    border-radius: 8px;
    color: white;
    font-size: 1rem;
    transition: all 0.3s;
}

.neon-input:focus, .neon-textarea:focus, .neon-select:focus {
    outline: none;
    border-color: var(--neon-red);
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.5);
}

.neon-textarea {
    resize: vertical;
    min-height: 100px;
}

.select-wrapper {
    position: relative;
}

.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-red);
    pointer-events: none;
}

.input-with-icon {
    position: relative;
}

.input-suffix {
    position: absolute;
    right: 40px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-red);
    font-weight: 600;
}

.input-icon, .textarea-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--neon-red);
}

.textarea-icon {
    top: 25px;
}

/* BOUTONS FORMULAIRE */
.form-actions {
    display: flex;
    gap: 15px;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 0, 51, 0.3);
}

.neon-btn {
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    flex: 1;
    position: relative;
    overflow: hidden;
}

.success-btn {
    background: rgba(0, 255, 65, 0.1);
    color: var(--neon-green);
    border: 1px solid var(--neon-green);
}

.success-btn:hover {
    background: var(--neon-green);
    color: black;
    box-shadow: 0 0 20px var(--neon-green);
}

.cancel-btn {
    background: rgba(0, 243, 255, 0.1);
    color: var(--neon-blue);
    border: 1px solid var(--neon-blue);
}

.cancel-btn:hover {
    background: var(--neon-blue);
    color: black;
    box-shadow: 0 0 20px var(--neon-blue);
}

.danger-btn {
    background: rgba(255, 0, 51, 0.1);
    color: var(--neon-red);
    border: 1px solid var(--neon-red);
}

.danger-btn:hover {
    background: var(--neon-red);
    color: white;
    box-shadow: 0 0 20px var(--neon-red);
}

.btn-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        45deg,
        transparent,
        rgba(0, 255, 65, 0.3),
        transparent
    );
    transform: rotate(45deg);
    animation: btnGlow 3s infinite linear;
}

@keyframes btnGlow {
    0% { transform: translateX(-100%) rotate(45deg); }
    100% { transform: translateX(100%) rotate(45deg); }
}

/* CARTE PRÉVISUALISATION */
.preview-card {
    background: var(--card-bg);
    border: 2px solid var(--neon-blue);
    border-radius: 15px;
    padding: 30px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 40px rgba(0, 243, 255, 0.2);
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(0, 243, 255, 0.3);
}

.preview-header h2 {
    font-size: 1.8rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
}

.live-badge {
    background: rgba(0, 255, 65, 0.2);
    color: var(--neon-green);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 8px;
    border: 1px solid var(--neon-green);
}

.live-dot {
    width: 8px;
    height: 8px;
    background: var(--neon-green);
    border-radius: 50%;
    animation: livePulse 1s infinite;
}

@keyframes livePulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.3; }
}

/* CONTENU PRÉVISUALISATION */
.preview-content {
    margin-bottom: 30px;
}

.preview-item {
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 25px;
    position: relative;
}

.preview-status {
    position: absolute;
    top: 15px;
    right: 15px;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
}

.preview-category {
    display: inline-block;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 15px;
}

.preview-category.skin {
    background: rgba(255, 0, 51, 0.2);
    color: var(--neon-red);
}

.preview-category.abonnement {
    background: rgba(0, 243, 255, 0.2);
    color: var(--neon-blue);
}

.preview-category.coaching {
    background: rgba(157, 0, 255, 0.2);
    color: var(--neon-purple);
}

.preview-category.merch {
    background: rgba(255, 204, 0, 0.2);
    color: var(--neon-yellow);
}

.preview-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 15px;
}

.preview-description {
    color: #aaa;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 25px;
}

.preview-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    background: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
}

.preview-stat {
    text-align: center;
}

.stat-label {
    display: block;
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.stat-value {
    font-size: 1.3rem;
    font-weight: 700;
}

.neon-text.red { color: var(--neon-red); }
.neon-text.blue { color: var(--neon-blue); }
.neon-text.green { color: var(--neon-green); }

/* STATISTIQUES RAPIDES */
.preview-stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.mini-stat {
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 15px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.3s;
}

.mini-stat:hover {
    border-color: var(--neon-purple);
    transform: translateY(-3px);
}

.mini-stat-icon {
    width: 40px;
    height: 40px;
    background: rgba(157, 0, 255, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--neon-purple);
    font-size: 1.2rem;
}

.mini-stat-info {
    flex: 1;
}

.mini-stat-value {
    font-size: 1.2rem;
    font-weight: 700;
    color: white;
    margin-bottom: 5px;
}

.mini-stat-label {
    font-size: 0.8rem;
    color: #777;
    text-transform: uppercase;
}

/* MODAL SUPPRESSION */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(10px);
    z-index: 1000;
    align-items: center;
    justify-content: center;
}

.modal-overlay.active {
    display: flex;
}

.modal-content {
    background: var(--darker-bg);
    border: 2px solid var(--neon-red);
    border-radius: 15px;
    padding: 30px;
    max-width: 500px;
    width: 90%;
    animation: modalSlideIn 0.3s ease-out;
}

@keyframes modalSlideIn {
    from {
        opacity: 0;
        transform: translateY(-50px) scale(0.9);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 1px solid rgba(255, 0, 51, 0.3);
}

.modal-header h3 {
    color: var(--neon-red);
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.modal-close {
    background: none;
    border: none;
    color: var(--neon-red);
    font-size: 2rem;
    cursor: pointer;
    line-height: 1;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-body {
    text-align: center;
    padding: 20px 0;
}

.warning-icon {
    color: var(--neon-red);
    margin-bottom: 20px;
    animation: warningPulse 2s infinite;
}

@keyframes warningPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.warning-text {
    color: white;
    font-size: 1.2rem;
    margin-bottom: 15px;
}

.warning-details {
    color: #aaa;
    font-size: 0.9rem;
    line-height: 1.6;
}

.modal-actions {
    display: flex;
    gap: 15px;
    margin-top: 30px;
}

/* ANIMATIONS */
@keyframes textGlow {
    0% { filter: drop-shadow(0 0 5px var(--neon-red)); }
    100% { filter: drop-shadow(0 0 20px var(--neon-blue)); }
}

/* FORM ERRORS */
.form-error {
    color: var(--neon-red);
    font-size: 0.8rem;
    margin-top: 5px;
    min-height: 20px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la prévisualisation en direct
    const formInputs = document.querySelectorAll('.neon-input, .neon-textarea, .neon-select');
    const previewName = document.getElementById('previewName');
    const previewDescription = document.getElementById('previewDescription');
    const previewPrice = document.getElementById('previewPrice');
    const previewQuantity = document.getElementById('previewQuantity');
    const previewTotal = document.getElementById('previewTotal');

    formInputs.forEach(input => {
        input.addEventListener('input', function() {
            updatePreview();
        });
    });

    function updatePreview() {
        // Mise à jour du nom
        const nameInput = document.querySelector('[name*=\"[itemName]\"]');
        if (nameInput && previewName) {
            previewName.textContent = nameInput.value || 'Nom de l\\'item';
        }

        // Mise à jour de la description
        const descInput = document.querySelector('[name*=\"[itemDescription]\"]');
        if (descInput && previewDescription) {
            previewDescription.textContent = descInput.value || 'Description de l\\'item';
        }

        // Mise à jour du prix
        const priceInput = document.querySelector('[name*=\"[price]\"]');
        if (priceInput && previewPrice) {
            const price = parseFloat(priceInput.value) || 0;
            previewPrice.textContent = price.toFixed(2).replace('.', ',') + ' €';
        }

        // Mise à jour de la quantité
        const quantityInput = document.querySelector('[name*=\"[quantity]\"]');
        if (quantityInput && previewQuantity) {
            previewQuantity.textContent = quantityInput.value || '0';
        }

        // Mise à jour du total
        if (priceInput && quantityInput && previewTotal) {
            const price = parseFloat(priceInput.value) || 0;
            const quantity = parseFloat(quantityInput.value) || 0;
            const total = price * quantity;
            previewTotal.textContent = total.toFixed(2).replace('.', ',') + ' €';
            
            // Mettre à jour le champ totalPrice
            const totalPriceInput = document.querySelector('[name*=\"[totalPrice]\"]');
            if (totalPriceInput) {
                totalPriceInput.value = total.toFixed(2);
            }
        }
    }

    // Initialiser la prévisualisation
    updatePreview();

    // Gestion de la modal de suppression
    const deleteTrigger = document.getElementById('deleteTrigger');
    const deleteModal = document.getElementById('deleteModal');
    const modalClose = document.querySelector('.modal-close');
    const modalCancel = document.querySelector('.modal-cancel');

    if (deleteTrigger) {
        deleteTrigger.addEventListener('click', function(e) {
            e.preventDefault();
            deleteModal.style.display = 'flex';
            setTimeout(() => deleteModal.classList.add('active'), 10);
        });
    }

    if (modalClose) {
        modalClose.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            setTimeout(() => deleteModal.style.display = 'none', 300);
        });
    }

    if (modalCancel) {
        modalCancel.addEventListener('click', function() {
            deleteModal.classList.remove('active');
            setTimeout(() => deleteModal.style.display = 'none', 300);
        });
    }

    // Fermer la modal en cliquant à l'extérieur
    deleteModal.addEventListener('click', function(e) {
        if (e.target === deleteModal) {
            deleteModal.classList.remove('active');
            setTimeout(() => deleteModal.style.display = 'none', 300);
        }
    });

    // Animation des champs du formulaire
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
        group.style.opacity = '0';
        group.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            group.style.transition = 'all 0.5s ease-out';
            group.style.opacity = '1';
            group.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Validation en temps réel
    const form = document.querySelector('.neon-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                submitBtn.innerHTML = '<i class=\"fas fa-spinner fa-spin\"></i> MISE À JOUR...';
                submitBtn.disabled = true;
            }
        });
    }
});
</script>
{% endblock %}", "shop_item/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\shop_item\\edit.html.twig");
    }
}
