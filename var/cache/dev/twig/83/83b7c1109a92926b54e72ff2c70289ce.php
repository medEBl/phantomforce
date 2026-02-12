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
class __TwigTemplate_03760b897a18ede4dceb6d9d9bc0dc27 extends Template
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "shopItem", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "shopItem", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "shopItem", [], "any", false, false, false, 44), 'errors');
        yield "</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "amount", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "amount", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "amount", [], "any", false, false, false, 51), 'errors');
        yield "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "paymentMethod", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "paymentMethod", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "paymentMethod", [], "any", false, false, false, 61), 'errors');
        yield "</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "paymentStatus", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "paymentStatus", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "paymentStatus", [], "any", false, false, false, 68), 'errors');
        yield "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "transactionRef", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "transactionRef", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "transactionRef", [], "any", false, false, false, 78), 'errors');
        yield "</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "paymentDate", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label"]]);
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "paymentDate", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <div class=\"text-danger mt-1\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "paymentDate", [], "any", false, false, false, 85), 'errors');
        yield "</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                        <i class=\"fas fa-times\"></i>
                        Annuler
                    </a>
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 96
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
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
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
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "</h6>
                        <span id=\"preview-status\" class=\"badge-admin\">
                            ";
        // line 122
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 122, $this->source); })()), "paymentStatus", [], "any", false, false, false, 122) == "success")) {
            // line 123
            yield "                                <i class=\"fas fa-check me-1\"></i> Payé
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 124, $this->source); })()), "paymentStatus", [], "any", false, false, false, 124) == "pending")) {
            // line 125
            yield "                                <i class=\"fas fa-clock me-1\"></i> En attente
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 126
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 126, $this->source); })()), "paymentStatus", [], "any", false, false, false, 126) == "failed")) {
            // line 127
            yield "                                <i class=\"fas fa-times me-1\"></i> Échoué
                            ";
        } else {
            // line 129
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 129, $this->source); })()), "paymentStatus", [], "any", false, false, false, 129), "html", null, true);
            yield "
                            ";
        }
        // line 131
        yield "                        </span>
                    </div>
                    
                    <div class=\"mb-3\">
                        <small class=\"text-muted d-block\">Montant</small>
                        <h4 id=\"preview-amount\" class=\"h5 mb-0\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 136, $this->source); })()), "amount", [], "any", false, false, false, 136), 2, ",", " "), "html", null, true);
        yield " €</h4>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Méthode</small>
                            <span id=\"preview-method\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 142, $this->source); })()), "paymentMethod", [], "any", false, false, false, 142)), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Date</small>
                            <span id=\"preview-date\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 146, $this->source); })()), "paymentDate", [], "any", false, false, false, 146), "d/m/Y"), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        <small class=\"text-muted d-block\">Référence</small>
                        <code id=\"preview-ref\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 152, $this->source); })()), "transactionRef", [], "any", false, false, false, 152), "html", null, true);
        yield "</code>
                    </div>
                    
                    <div class=\"mt-3 pt-3 border-top border-secondary\">
                        <small class=\"text-muted d-block\">Article associé</small>
                        ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 157, $this->source); })()), "shopItem", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                            <div class=\"d-flex align-items-center mt-1\">
                                <i class=\"fas fa-cube me-2\" style=\"color: var(--admin-accent);\"></i>
                                <span>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 160, $this->source); })()), "shopItem", [], "any", false, false, false, 160), "itemName", [], "any", false, false, false, 160), "html", null, true);
            yield "</span>
                            </div>
                        ";
        } else {
            // line 163
            yield "                            <span class=\"text-muted\">Aucun</span>
                        ";
        }
        // line 165
        yield "                    </div>
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
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_payment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)]), "html", null, true);
        yield "\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188))), "html", null, true);
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
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "amount", [], "any", false, false, false, 199), "vars", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
        yield "');
    const methodSelect = document.querySelector('#";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "paymentMethod", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "id", [], "any", false, false, false, 200), "html", null, true);
        yield "');
    const statusSelect = document.querySelector('#";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "paymentStatus", [], "any", false, false, false, 201), "vars", [], "any", false, false, false, 201), "id", [], "any", false, false, false, 201), "html", null, true);
        yield "');
    const refInput = document.querySelector('#";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "transactionRef", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "id", [], "any", false, false, false, 202), "html", null, true);
        yield "');
    const dateInput = document.querySelector('#";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "paymentDate", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
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
        return array (  436 => 203,  432 => 202,  428 => 201,  424 => 200,  420 => 199,  406 => 188,  402 => 187,  378 => 165,  374 => 163,  368 => 160,  364 => 158,  362 => 157,  354 => 152,  345 => 146,  338 => 142,  329 => 136,  322 => 131,  316 => 129,  312 => 127,  310 => 126,  307 => 125,  305 => 124,  302 => 123,  300 => 122,  295 => 120,  279 => 107,  265 => 96,  257 => 91,  248 => 85,  244 => 84,  240 => 83,  232 => 78,  228 => 77,  224 => 76,  213 => 68,  209 => 67,  205 => 66,  197 => 61,  193 => 60,  189 => 59,  178 => 51,  174 => 50,  170 => 49,  162 => 44,  158 => 43,  154 => 42,  146 => 37,  127 => 21,  120 => 17,  112 => 14,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
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
                            {{ form_label(form.shopItem, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.shopItem, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.shopItem) }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.amount, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.amount, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.amount) }}</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.paymentMethod, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.paymentMethod, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.paymentMethod) }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.paymentStatus, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.paymentStatus, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.paymentStatus) }}</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"row mb-3\">
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.transactionRef, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.transactionRef, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.transactionRef) }}</div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3\">
                            {{ form_label(form.paymentDate, null, {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.paymentDate, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"text-danger mt-1\">{{ form_errors(form.paymentDate) }}</div>
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
});
</script>
{% endblock %}", "back/payment/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\payment\\edit.html.twig");
    }
}
