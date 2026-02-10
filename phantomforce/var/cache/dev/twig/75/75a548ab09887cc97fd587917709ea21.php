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

/* back/payment/new.html.twig */
class __TwigTemplate_bac43ac9cda5066322341110af166505 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/new.html.twig"));

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

        yield "🎮 Nouveau Paiement - Admin Panel";
        
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
                    <i class=\"fas fa-plus-circle\"></i>
                    Nouveau Paiement
                </h1>
                <p class=\"text-muted mb-0\">Créez une nouvelle transaction</p>
            </div>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-arrow-left\"></i>
                Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-edit me-2\"></i>
                    Formulaire de création
                </h2>
                
                ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "shopItem", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "shopItem", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "shopItem", [], "any", false, false, false, 39), 'errors');
        yield "</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Article obligatoire associé au paiement
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "amount", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "amount", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0.00", "required" => "required", "min" => "0.01", "step" => "0.01"]]);
        // line 56
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "amount", [], "any", false, false, false, 57), 'errors');
        yield "</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                Doit être un nombre positif (ex: 99.99)
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "paymentMethod", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "paymentMethod", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "paymentMethod", [], "any", false, false, false, 72), 'errors');
        yield "</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-list me-1\"></i>
                                Sélectionnez la méthode de paiement utilisée
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "paymentStatus", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "paymentStatus", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "paymentStatus", [], "any", false, false, false, 84), 'errors');
        yield "</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-exchange-alt me-1\"></i>
                                Sélectionnez le statut de la transaction
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "transactionRef", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "transactionRef", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "TRX", "required" => "required", "minlength" => "3", "maxlength" => "255"]]);
        // line 104
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "transactionRef", [], "any", false, false, false, 105), 'errors');
        yield "</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-ruler me-1\"></i>
                                Doit contenir entre 3 et 255 caractères
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "paymentDate", [], "any", false, false, false, 114), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "paymentDate", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "paymentDate", [], "any", false, false, false, 117), 'errors');
        yield "</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                Date et heure du paiement
                            </small>
                        </div>
                    </div>
                </div>
                
                <!-- Règles de validation -->
                <div class=\"admin-card mt-4\">
                    <h5 class=\"mb-3\">
                        <i class=\"fas fa-clipboard-check me-2\"></i>
                        Règles de validation
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-danger me-2\">*</span>
                                    <small>Champs obligatoires</small>
                                </li>
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-dark me-2\">
                                        <i class=\"fas fa-euro-sign\"></i>
                                    </span>
                                    <small>Montant : nombre positif</small>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-dark me-2\">
                                        <i class=\"fas fa-hashtag\"></i>
                                    </span>
                                    <small>Référence : 3-255 caractères</small>
                                </li>
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-dark me-2\">
                                        <i class=\"fas fa-check-circle\"></i>
                                    </span>
                                    <small>Statut et méthode : sélection obligatoire</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                        <i class=\"fas fa-times\"></i>
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                        <i class=\"fas fa-save\"></i>
                        Créer le paiement
                    </button>
                </div>
                
                ";
        // line 177
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Informations
                </h2>
                
                <div class=\"alert alert-dark\" role=\"alert\">
                    <h6 class=\"alert-heading\">
                        <i class=\"fas fa-lightbulb me-2\"></i>
                        Conseils
                    </h6>
                    <ul class=\"mb-0 ps-3\">
                        <li>Tous les champs sont obligatoires</li>
                        <li>La référence doit être unique</li>
                        <li>Vérifiez le montant avant validation</li>
                        <li>Associez un article pour le suivi</li>
                    </ul>
                </div>
            </div>
            
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Contrôles de saisie
                </h2>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-sm table-borderless mb-0\">
                        <tbody>
                            <tr>
                                <td width=\"40\">
                                    <span class=\"badge bg-danger\">*</span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Champ obligatoire</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"badge bg-dark\">
                                        <i class=\"fas fa-euro-sign\"></i>
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Montant > 0</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"badge bg-dark\">
                                        <i class=\"fas fa-hashtag\"></i>
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Référence unique</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"badge bg-dark\">
                                        <i class=\"fas fa-calendar\"></i>
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Date valide</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-cube me-2\"></i>
                    Articles disponibles
                </h2>
                
                ";
        // line 260
        if ((($tmp = (isset($context["shop_items_available"]) || array_key_exists("shop_items_available", $context) ? $context["shop_items_available"] : (function () { throw new RuntimeError('Variable "shop_items_available" does not exist.', 260, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 261
            yield "                <div class=\"list-group\">
                    ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["shop_items_available"]) || array_key_exists("shop_items_available", $context) ? $context["shop_items_available"] : (function () { throw new RuntimeError('Variable "shop_items_available" does not exist.', 262, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 263
                yield "                    <div class=\"list-group-item bg-transparent border-secondary\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <h6 class=\"mb-1\">";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemName", [], "any", false, false, false, 266), "html", null, true);
                yield "</h6>
                                <small class=\"text-muted\">";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "itemCategory", [], "any", false, false, false, 267), "html", null, true);
                yield "</small>
                            </div>
                            <span class=\"badge bg-dark\">";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 269), 2, ",", " "), "html", null, true);
                yield " €</span>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            yield "                </div>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">
                        ";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["shop_items_available"]) || array_key_exists("shop_items_available", $context) ? $context["shop_items_available"] : (function () { throw new RuntimeError('Variable "shop_items_available" does not exist.', 276, $this->source); })())), "html", null, true);
            yield " articles disponibles
                    </small>
                </div>
                ";
        } else {
            // line 280
            yield "                <div class=\"text-center py-3\">
                    <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                    <p class=\"text-muted mb-0\">Aucun article disponible</p>
                </div>
                ";
        }
        // line 285
        yield "            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Générer une référence automatique
    const refInput = document.querySelector('#";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "transactionRef", [], "any", false, false, false, 293), "vars", [], "any", false, false, false, 293), "id", [], "any", false, false, false, 293), "html", null, true);
        yield "');
    const generateRefBtn = document.createElement('button');
    
    if (refInput && !refInput.value) {
        generateRefBtn.type = 'button';
        generateRefBtn.className = 'btn btn-sm btn-outline-secondary mt-1';
        generateRefBtn.innerHTML = '<i class=\"fas fa-random me-1\"></i>Générer une référence';
        
        generateRefBtn.addEventListener('click', function() {
            const random = Math.floor(Math.random() * 1000000);
            refInput.value = 'TRX' + random.toString().padStart(6, '0');
        });
        
        refInput.parentNode.appendChild(generateRefBtn);
    }
    
    // Préremplir la date actuelle
    const dateInput = document.querySelector('#";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "paymentDate", [], "any", false, false, false, 310), "vars", [], "any", false, false, false, 310), "id", [], "any", false, false, false, 310), "html", null, true);
        yield "');
    if (dateInput && !dateInput.value) {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        
        dateInput.value = `\${year}-\${month}-\${day}T\${hours}:\${minutes}`;
    }
    
    // Validation en temps réel
    const amountInput = document.querySelector('#";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "amount", [], "any", false, false, false, 323), "vars", [], "any", false, false, false, 323), "id", [], "any", false, false, false, 323), "html", null, true);
        yield "');
    if (amountInput) {
        amountInput.addEventListener('input', function() {
            const value = parseFloat(this.value);
            if (isNaN(value) || value <= 0) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
    }
    
    const transactionRefInput = document.querySelector('#";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), "transactionRef", [], "any", false, false, false, 337), "vars", [], "any", false, false, false, 337), "id", [], "any", false, false, false, 337), "html", null, true);
        yield "');
    if (transactionRefInput) {
        transactionRefInput.addEventListener('input', function() {
            const value = this.value;
            if (value.length < 3 || value.length > 255) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
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
        return "back/payment/new.html.twig";
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
        return array (  527 => 337,  510 => 323,  494 => 310,  474 => 293,  464 => 285,  457 => 280,  450 => 276,  445 => 273,  435 => 269,  430 => 267,  426 => 266,  421 => 263,  417 => 262,  414 => 261,  412 => 260,  326 => 177,  313 => 167,  260 => 117,  256 => 116,  251 => 114,  239 => 105,  236 => 104,  234 => 98,  229 => 96,  214 => 84,  210 => 83,  205 => 81,  193 => 72,  189 => 71,  184 => 69,  169 => 57,  166 => 56,  164 => 50,  159 => 48,  147 => 39,  143 => 38,  138 => 36,  130 => 31,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}🎮 Nouveau Paiement - Admin Panel{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"admin-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1 class=\"h3 mb-0\">
                    <i class=\"fas fa-plus-circle\"></i>
                    Nouveau Paiement
                </h1>
                <p class=\"text-muted mb-0\">Créez une nouvelle transaction</p>
            </div>
            <a href=\"{{ path('app_back_payment_index') }}\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-arrow-left\"></i>
                Retour à la liste
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-edit me-2\"></i>
                    Formulaire de création
                </h2>
                
                {{ form_start(form, {'attr': {'class': 'form-admin'}}) }}
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.shopItem, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <span class=\"text-danger ms-1\">*</span>
                            {{ form_widget(form.shopItem, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.shopItem) }}</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Article obligatoire associé au paiement
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.amount, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <span class=\"text-danger ms-1\">*</span>
                            {{ form_widget(form.amount, {'attr': {
                                'class': 'form-control',
                                'placeholder': '0.00',
                                'required': 'required',
                                'min': '0.01',
                                'step': '0.01'
                            }}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.amount) }}</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                Doit être un nombre positif (ex: 99.99)
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.paymentMethod, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <span class=\"text-danger ms-1\">*</span>
                            {{ form_widget(form.paymentMethod, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.paymentMethod) }}</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-list me-1\"></i>
                                Sélectionnez la méthode de paiement utilisée
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.paymentStatus, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <span class=\"text-danger ms-1\">*</span>
                            {{ form_widget(form.paymentStatus, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.paymentStatus) }}</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-exchange-alt me-1\"></i>
                                Sélectionnez le statut de la transaction
                            </small>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.transactionRef, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <span class=\"text-danger ms-1\">*</span>
                            {{ form_widget(form.transactionRef, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'TRX',
                                'required': 'required',
                                'minlength': '3',
                                'maxlength': '255'
                            }}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.transactionRef) }}</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-ruler me-1\"></i>
                                Doit contenir entre 3 et 255 caractères
                            </small>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.paymentDate, null, {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <span class=\"text-danger ms-1\">*</span>
                            {{ form_widget(form.paymentDate, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.paymentDate) }}</div>
                            <small class=\"form-text text-muted mt-1\">
                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                Date et heure du paiement
                            </small>
                        </div>
                    </div>
                </div>
                
                <!-- Règles de validation -->
                <div class=\"admin-card mt-4\">
                    <h5 class=\"mb-3\">
                        <i class=\"fas fa-clipboard-check me-2\"></i>
                        Règles de validation
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-danger me-2\">*</span>
                                    <small>Champs obligatoires</small>
                                </li>
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-dark me-2\">
                                        <i class=\"fas fa-euro-sign\"></i>
                                    </span>
                                    <small>Montant : nombre positif</small>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-6\">
                            <ul class=\"list-unstyled mb-0\">
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-dark me-2\">
                                        <i class=\"fas fa-hashtag\"></i>
                                    </span>
                                    <small>Référence : 3-255 caractères</small>
                                </li>
                                <li class=\"mb-2\">
                                    <span class=\"badge bg-dark me-2\">
                                        <i class=\"fas fa-check-circle\"></i>
                                    </span>
                                    <small>Statut et méthode : sélection obligatoire</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <a href=\"{{ path('app_back_payment_index') }}\" class=\"btn-admin btn-admin-secondary\">
                        <i class=\"fas fa-times\"></i>
                        Annuler
                    </a>
                    <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                        <i class=\"fas fa-save\"></i>
                        Créer le paiement
                    </button>
                </div>
                
                {{ form_end(form) }}
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Informations
                </h2>
                
                <div class=\"alert alert-dark\" role=\"alert\">
                    <h6 class=\"alert-heading\">
                        <i class=\"fas fa-lightbulb me-2\"></i>
                        Conseils
                    </h6>
                    <ul class=\"mb-0 ps-3\">
                        <li>Tous les champs sont obligatoires</li>
                        <li>La référence doit être unique</li>
                        <li>Vérifiez le montant avant validation</li>
                        <li>Associez un article pour le suivi</li>
                    </ul>
                </div>
            </div>
            
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Contrôles de saisie
                </h2>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-sm table-borderless mb-0\">
                        <tbody>
                            <tr>
                                <td width=\"40\">
                                    <span class=\"badge bg-danger\">*</span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Champ obligatoire</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"badge bg-dark\">
                                        <i class=\"fas fa-euro-sign\"></i>
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Montant > 0</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"badge bg-dark\">
                                        <i class=\"fas fa-hashtag\"></i>
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Référence unique</small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"badge bg-dark\">
                                        <i class=\"fas fa-calendar\"></i>
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">Date valide</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-cube me-2\"></i>
                    Articles disponibles
                </h2>
                
                {% if shop_items_available %}
                <div class=\"list-group\">
                    {% for item in shop_items_available|slice(0, 3) %}
                    <div class=\"list-group-item bg-transparent border-secondary\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <h6 class=\"mb-1\">{{ item.itemName }}</h6>
                                <small class=\"text-muted\">{{ item.itemCategory }}</small>
                            </div>
                            <span class=\"badge bg-dark\">{{ item.totalPrice|number_format(2, ',', ' ') }} €</span>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">
                        {{ shop_items_available|length }} articles disponibles
                    </small>
                </div>
                {% else %}
                <div class=\"text-center py-3\">
                    <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                    <p class=\"text-muted mb-0\">Aucun article disponible</p>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Générer une référence automatique
    const refInput = document.querySelector('#{{ form.transactionRef.vars.id }}');
    const generateRefBtn = document.createElement('button');
    
    if (refInput && !refInput.value) {
        generateRefBtn.type = 'button';
        generateRefBtn.className = 'btn btn-sm btn-outline-secondary mt-1';
        generateRefBtn.innerHTML = '<i class=\"fas fa-random me-1\"></i>Générer une référence';
        
        generateRefBtn.addEventListener('click', function() {
            const random = Math.floor(Math.random() * 1000000);
            refInput.value = 'TRX' + random.toString().padStart(6, '0');
        });
        
        refInput.parentNode.appendChild(generateRefBtn);
    }
    
    // Préremplir la date actuelle
    const dateInput = document.querySelector('#{{ form.paymentDate.vars.id }}');
    if (dateInput && !dateInput.value) {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        
        dateInput.value = `\${year}-\${month}-\${day}T\${hours}:\${minutes}`;
    }
    
    // Validation en temps réel
    const amountInput = document.querySelector('#{{ form.amount.vars.id }}');
    if (amountInput) {
        amountInput.addEventListener('input', function() {
            const value = parseFloat(this.value);
            if (isNaN(value) || value <= 0) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
    }
    
    const transactionRefInput = document.querySelector('#{{ form.transactionRef.vars.id }}');
    if (transactionRefInput) {
        transactionRefInput.addEventListener('input', function() {
            const value = this.value;
            if (value.length < 3 || value.length > 255) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
    }
});
</script>
{% endblock %}", "back/payment/new.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\payment\\new.html.twig");
    }
}
