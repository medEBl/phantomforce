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

/* back/payment/edit.html.twig */
class __TwigTemplate_88e23660108db7183d249908eb3ff765 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/payment/edit.html.twig"));

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

        yield "🎮 Modifier le Paiement #";
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
                    <i class=\"fas fa-edit\"></i>
                    Modifier le Paiement
                </h1>
                <p class=\"text-muted mb-0\">ID: #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield " | Référence: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 14, $this->source); })()), "transactionRef", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-eye\"></i>
                    Voir détails
                </a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-pencil-alt me-2\"></i>
                    Formulaire de modification
                </h2>
                
                ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["class" => "form-admin"]]);
        yield "
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "shopItem", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "shopItem", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "shopItem", [], "any", false, false, false, 45), 'errors');
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
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "amount", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "amount", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "min" => "0.01", "step" => "0.01"]]);
        // line 61
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "amount", [], "any", false, false, false, 62), 'errors');
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
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "paymentMethod", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "paymentMethod", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "paymentMethod", [], "any", false, false, false, 77), 'errors');
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
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "paymentStatus", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "paymentStatus", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "paymentStatus", [], "any", false, false, false, 89), 'errors');
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
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "transactionRef", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "transactionRef", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "required" => "required", "minlength" => "3", "maxlength" => "255"]]);
        // line 108
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "transactionRef", [], "any", false, false, false, 109), 'errors');
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
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "paymentDate", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "form-label fw-bold"]]);
        yield "
                            <span class=\"text-danger ms-1\">*</span>
                            ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "paymentDate", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "paymentDate", [], "any", false, false, false, 121), 'errors');
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
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                        <i class=\"fas fa-times\"></i>
                        Annuler
                    </a>
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_new");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                            <i class=\"fas fa-copy\"></i>
                            Dupliquer
                        </a>
                        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                            <i class=\"fas fa-save\"></i>
                            Enregistrer les modifications
                        </button>
                    </div>
                </div>
                
                ";
        // line 187
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-eye me-2\"></i>
                    Prévisualisation
                </h2>
                
                <div class=\"bg-dark rounded p-3\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h6 class=\"mb-0\">Paiement #";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200), "html", null, true);
        yield "</h6>
                        <span id=\"preview-status\" class=\"badge-admin\">
                            ";
        // line 202
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 202, $this->source); })()), "paymentStatus", [], "any", false, false, false, 202) == "success")) {
            // line 203
            yield "                                <i class=\"fas fa-check me-1\"></i> Payé
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 204
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 204, $this->source); })()), "paymentStatus", [], "any", false, false, false, 204) == "pending")) {
            // line 205
            yield "                                <i class=\"fas fa-clock me-1\"></i> En attente
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 206
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 206, $this->source); })()), "paymentStatus", [], "any", false, false, false, 206) == "failed")) {
            // line 207
            yield "                                <i class=\"fas fa-times me-1\"></i> Échoué
                            ";
        } else {
            // line 209
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 209, $this->source); })()), "paymentStatus", [], "any", false, false, false, 209), "html", null, true);
            yield "
                            ";
        }
        // line 211
        yield "                        </span>
                    </div>
                    
                    <div class=\"mb-3\">
                        <small class=\"text-muted d-block\">Montant</small>
                        <h4 id=\"preview-amount\" class=\"h5 mb-0\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 216, $this->source); })()), "amount", [], "any", false, false, false, 216), 2, ",", " "), "html", null, true);
        yield " €</h4>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Méthode</small>
                            <span id=\"preview-method\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 222, $this->source); })()), "paymentMethod", [], "any", false, false, false, 222)), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Date</small>
                            <span id=\"preview-date\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 226, $this->source); })()), "paymentDate", [], "any", false, false, false, 226), "d/m/Y"), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <small class=\"text-muted d-block\">Référence</small>
                        <code id=\"preview-ref\">";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 232, $this->source); })()), "transactionRef", [], "any", false, false, false, 232), "html", null, true);
        yield "</code>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top border-secondary\">
                        <small class=\"text-muted d-block\">Article associé</small>
                        ";
        // line 237
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 237, $this->source); })()), "shopItem", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "                            <div class=\"d-flex align-items-center mt-1\">
                                <i class=\"fas fa-cube me-2\" style=\"color: var(--admin-accent);\"></i>
                                <span>";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 240, $this->source); })()), "shopItem", [], "any", false, false, false, 240), "itemName", [], "any", false, false, false, 240), "html", null, true);
            yield "</span>
                            </div>
                        ";
        } else {
            // line 243
            yield "                            <span class=\"text-muted\">Aucun</span>
                        ";
        }
        // line 245
        yield "                    </div>
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
                    <i class=\"fas fa-trash-alt me-2\"></i>
                    Zone de danger
                </h2>
                
                <div class=\"alert alert-dark border-danger\" role=\"alert\">
                    <h6 class=\"alert-heading\">
                        <i class=\"fas fa-exclamation-triangle me-2 text-danger\"></i>
                        Attention
                    </h6>
                    <p class=\"mb-2\">La suppression d'un paiement est irréversible.</p>
                    <hr class=\"bg-secondary\">
                    <button type=\"button\" class=\"btn-admin btn-admin-danger w-100\"
                            onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')) { document.getElementById('delete-form').submit(); }\">
                        <i class=\"fas fa-trash me-2\"></i>
                        Supprimer ce paiement
                    </button>
                    <form id=\"delete-form\" method=\"post\" action=\"";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 319, $this->source); })()), "id", [], "any", false, false, false, 319)]), "html", null, true);
        yield "\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 320, $this->source); })()), "id", [], "any", false, false, false, 320))), "html", null, true);
        yield "\">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mise à jour en temps réel de la prévisualisation
    const amountInput = document.querySelector('#";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "amount", [], "any", false, false, false, 331), "vars", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331), "html", null, true);
        yield "');
    const methodSelect = document.querySelector('#";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), "paymentMethod", [], "any", false, false, false, 332), "vars", [], "any", false, false, false, 332), "id", [], "any", false, false, false, 332), "html", null, true);
        yield "');
    const statusSelect = document.querySelector('#";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "paymentStatus", [], "any", false, false, false, 333), "vars", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333), "html", null, true);
        yield "');
    const refInput = document.querySelector('#";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "transactionRef", [], "any", false, false, false, 334), "vars", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334), "html", null, true);
        yield "');
    const dateInput = document.querySelector('#";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "paymentDate", [], "any", false, false, false, 335), "vars", [], "any", false, false, false, 335), "id", [], "any", false, false, false, 335), "html", null, true);
        yield "');
    
    const previewAmount = document.getElementById('preview-amount');
    const previewMethod = document.getElementById('preview-method');
    const previewStatus = document.getElementById('preview-status');
    const previewRef = document.getElementById('preview-ref');
    const previewDate = document.getElementById('preview-date');
    
    function updatePreview() {
        if (amountInput && previewAmount) {
            previewAmount.textContent = parseFloat(amountInput.value || 0).toLocaleString('fr-FR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }) + ' €';
        }
        
        if (methodSelect && previewMethod) {
            previewMethod.textContent = methodSelect.options[methodSelect.selectedIndex].text;
        }
        
        if (statusSelect && previewStatus) {
            const status = statusSelect.value;
            previewStatus.className = 'badge-admin';
            
            if (status === 'success') {
                previewStatus.style.background = 'rgba(0, 255, 136, 0.1)';
                previewStatus.style.color = 'var(--admin-success)';
                previewStatus.innerHTML = '<i class=\"fas fa-check me-1\"></i> Payé';
            } else if (status === 'pending') {
                previewStatus.style.background = 'rgba(255, 193, 7, 0.1)';
                previewStatus.style.color = '#ffc107';
                previewStatus.innerHTML = '<i class=\"fas fa-clock me-1\"></i> En attente';
            } else if (status === 'failed') {
                previewStatus.style.background = 'rgba(255, 0, 60, 0.1)';
                previewStatus.style.color = 'var(--admin-danger)';
                previewStatus.innerHTML = '<i class=\"fas fa-times me-1\"></i> Échoué';
            } else if (status === 'cancelled') {
                previewStatus.style.background = 'rgba(119, 119, 119, 0.1)';
                previewStatus.style.color = '#777';
                previewStatus.innerHTML = '<i class=\"fas fa-ban me-1\"></i> Annulé';
            }
        }
        
        if (refInput && previewRef) {
            previewRef.textContent = refInput.value;
        }
        
        if (dateInput && previewDate && dateInput.value) {
            const date = new Date(dateInput.value);
            previewDate.textContent = date.toLocaleDateString('fr-FR');
        }
    }
    
    // Écouter les changements
    if (amountInput) amountInput.addEventListener('input', updatePreview);
    if (methodSelect) methodSelect.addEventListener('change', updatePreview);
    if (statusSelect) statusSelect.addEventListener('change', updatePreview);
    if (refInput) refInput.addEventListener('input', updatePreview);
    if (dateInput) dateInput.addEventListener('change', updatePreview);
    
    updatePreview();
    
    // Validation en temps réel
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
    
    if (refInput) {
        refInput.addEventListener('input', function() {
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
    
    if (methodSelect) {
        methodSelect.addEventListener('change', function() {
            if (!this.value) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
    }
    
    if (statusSelect) {
        statusSelect.addEventListener('change', function() {
            if (!this.value) {
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
        return "back/payment/edit.html.twig";
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
        return array (  560 => 335,  556 => 334,  552 => 333,  548 => 332,  544 => 331,  530 => 320,  526 => 319,  450 => 245,  446 => 243,  440 => 240,  436 => 238,  434 => 237,  426 => 232,  417 => 226,  410 => 222,  401 => 216,  394 => 211,  388 => 209,  384 => 207,  382 => 206,  379 => 205,  377 => 204,  374 => 203,  372 => 202,  367 => 200,  351 => 187,  337 => 176,  329 => 171,  276 => 121,  272 => 120,  267 => 118,  255 => 109,  252 => 108,  250 => 103,  245 => 101,  230 => 89,  226 => 88,  221 => 86,  209 => 77,  205 => 76,  200 => 74,  185 => 62,  182 => 61,  180 => 56,  175 => 54,  163 => 45,  159 => 44,  154 => 42,  146 => 37,  127 => 21,  120 => 17,  112 => 14,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}🎮 Modifier le Paiement #{{ payment.id }} - Admin Panel{% endblock %}

{% block body %}
<div class=\"admin-content\">
    <div class=\"admin-header\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <h1 class=\"h3 mb-0\">
                    <i class=\"fas fa-edit\"></i>
                    Modifier le Paiement
                </h1>
                <p class=\"text-muted mb-0\">ID: #{{ payment.id }} | Référence: {{ payment.transactionRef }}</p>
            </div>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_back_payment_index') }}\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-arrow-left\"></i>
                    Retour à la liste
                </a>
                <a href=\"{{ path('app_back_payment_show', {'id': payment.id}) }}\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-eye\"></i>
                    Voir détails
                </a>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"admin-card\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-pencil-alt me-2\"></i>
                    Formulaire de modification
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
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('app_back_payment_new') }}\" class=\"btn-admin btn-admin-secondary\">
                            <i class=\"fas fa-copy\"></i>
                            Dupliquer
                        </a>
                        <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                            <i class=\"fas fa-save\"></i>
                            Enregistrer les modifications
                        </button>
                    </div>
                </div>
                
                {{ form_end(form) }}
            </div>
        </div>
        
        <div class=\"col-md-4\">
            <div class=\"admin-card mb-3\">
                <h2 class=\"h5 mb-4\">
                    <i class=\"fas fa-eye me-2\"></i>
                    Prévisualisation
                </h2>
                
                <div class=\"bg-dark rounded p-3\">
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <h6 class=\"mb-0\">Paiement #{{ payment.id }}</h6>
                        <span id=\"preview-status\" class=\"badge-admin\">
                            {% if payment.paymentStatus == 'success' %}
                                <i class=\"fas fa-check me-1\"></i> Payé
                            {% elseif payment.paymentStatus == 'pending' %}
                                <i class=\"fas fa-clock me-1\"></i> En attente
                            {% elseif payment.paymentStatus == 'failed' %}
                                <i class=\"fas fa-times me-1\"></i> Échoué
                            {% else %}
                                {{ payment.paymentStatus }}
                            {% endif %}
                        </span>
                    </div>
                    
                    <div class=\"mb-3\">
                        <small class=\"text-muted d-block\">Montant</small>
                        <h4 id=\"preview-amount\" class=\"h5 mb-0\">{{ payment.amount|number_format(2, ',', ' ') }} €</h4>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Méthode</small>
                            <span id=\"preview-method\">{{ payment.paymentMethod|capitalize }}</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Date</small>
                            <span id=\"preview-date\">{{ payment.paymentDate|date('d/m/Y') }}</span>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <small class=\"text-muted d-block\">Référence</small>
                        <code id=\"preview-ref\">{{ payment.transactionRef }}</code>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top border-secondary\">
                        <small class=\"text-muted d-block\">Article associé</small>
                        {% if payment.shopItem %}
                            <div class=\"d-flex align-items-center mt-1\">
                                <i class=\"fas fa-cube me-2\" style=\"color: var(--admin-accent);\"></i>
                                <span>{{ payment.shopItem.itemName }}</span>
                            </div>
                        {% else %}
                            <span class=\"text-muted\">Aucun</span>
                        {% endif %}
                    </div>
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
                    <i class=\"fas fa-trash-alt me-2\"></i>
                    Zone de danger
                </h2>
                
                <div class=\"alert alert-dark border-danger\" role=\"alert\">
                    <h6 class=\"alert-heading\">
                        <i class=\"fas fa-exclamation-triangle me-2 text-danger\"></i>
                        Attention
                    </h6>
                    <p class=\"mb-2\">La suppression d'un paiement est irréversible.</p>
                    <hr class=\"bg-secondary\">
                    <button type=\"button\" class=\"btn-admin btn-admin-danger w-100\"
                            onclick=\"if(confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?')) { document.getElementById('delete-form').submit(); }\">
                        <i class=\"fas fa-trash me-2\"></i>
                        Supprimer ce paiement
                    </button>
                    <form id=\"delete-form\" method=\"post\" action=\"{{ path('app_back_payment_delete', {'id': payment.id}) }}\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ payment.id) }}\">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mise à jour en temps réel de la prévisualisation
    const amountInput = document.querySelector('#{{ form.amount.vars.id }}');
    const methodSelect = document.querySelector('#{{ form.paymentMethod.vars.id }}');
    const statusSelect = document.querySelector('#{{ form.paymentStatus.vars.id }}');
    const refInput = document.querySelector('#{{ form.transactionRef.vars.id }}');
    const dateInput = document.querySelector('#{{ form.paymentDate.vars.id }}');
    
    const previewAmount = document.getElementById('preview-amount');
    const previewMethod = document.getElementById('preview-method');
    const previewStatus = document.getElementById('preview-status');
    const previewRef = document.getElementById('preview-ref');
    const previewDate = document.getElementById('preview-date');
    
    function updatePreview() {
        if (amountInput && previewAmount) {
            previewAmount.textContent = parseFloat(amountInput.value || 0).toLocaleString('fr-FR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }) + ' €';
        }
        
        if (methodSelect && previewMethod) {
            previewMethod.textContent = methodSelect.options[methodSelect.selectedIndex].text;
        }
        
        if (statusSelect && previewStatus) {
            const status = statusSelect.value;
            previewStatus.className = 'badge-admin';
            
            if (status === 'success') {
                previewStatus.style.background = 'rgba(0, 255, 136, 0.1)';
                previewStatus.style.color = 'var(--admin-success)';
                previewStatus.innerHTML = '<i class=\"fas fa-check me-1\"></i> Payé';
            } else if (status === 'pending') {
                previewStatus.style.background = 'rgba(255, 193, 7, 0.1)';
                previewStatus.style.color = '#ffc107';
                previewStatus.innerHTML = '<i class=\"fas fa-clock me-1\"></i> En attente';
            } else if (status === 'failed') {
                previewStatus.style.background = 'rgba(255, 0, 60, 0.1)';
                previewStatus.style.color = 'var(--admin-danger)';
                previewStatus.innerHTML = '<i class=\"fas fa-times me-1\"></i> Échoué';
            } else if (status === 'cancelled') {
                previewStatus.style.background = 'rgba(119, 119, 119, 0.1)';
                previewStatus.style.color = '#777';
                previewStatus.innerHTML = '<i class=\"fas fa-ban me-1\"></i> Annulé';
            }
        }
        
        if (refInput && previewRef) {
            previewRef.textContent = refInput.value;
        }
        
        if (dateInput && previewDate && dateInput.value) {
            const date = new Date(dateInput.value);
            previewDate.textContent = date.toLocaleDateString('fr-FR');
        }
    }
    
    // Écouter les changements
    if (amountInput) amountInput.addEventListener('input', updatePreview);
    if (methodSelect) methodSelect.addEventListener('change', updatePreview);
    if (statusSelect) statusSelect.addEventListener('change', updatePreview);
    if (refInput) refInput.addEventListener('input', updatePreview);
    if (dateInput) dateInput.addEventListener('change', updatePreview);
    
    updatePreview();
    
    // Validation en temps réel
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
    
    if (refInput) {
        refInput.addEventListener('input', function() {
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
    
    if (methodSelect) {
        methodSelect.addEventListener('change', function() {
            if (!this.value) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
    }
    
    if (statusSelect) {
        statusSelect.addEventListener('change', function() {
            if (!this.value) {
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
{% endblock %}", "back/payment/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\payment\\edit.html.twig");
    }
}
