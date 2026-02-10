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

/* admin/user/edit.html.twig */
class __TwigTemplate_ac788ac5d32ed2fa6f9c3ec04856ae17 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/edit.html.twig"));

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

        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit") : ("New"));
        yield " User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .form-container {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #aaa;
            font-size: 0.9em;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 6px;
            font-size: 1em;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px rgba(0, 243, 255, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
            background: rgba(220, 53, 69, 0.1);
        }
        
        .form-control.is-valid {
            border-color: #28a745;
            background: rgba(40, 167, 69, 0.1);
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
        
        .valid-feedback {
            color: #28a745;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .form-check-input {
            width: 20px;
            height: 20px;
        }
        
        .form-check-label {
            color: #aaa;
        }
        
        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .help-text {
            color: #666;
            font-size: 0.8em;
            margin-top: 5px;
            display: block;
        }
        
        .password-requirements {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            padding: 15px;
            margin-top: 10px;
            font-size: 0.85em;
        }
        
        .password-requirements ul {
            margin: 0;
            padding-left: 20px;
            color: #aaa;
        }
        
        .password-requirements li {
            margin-bottom: 5px;
        }
        
        .field-hint {
            color: #6c757d;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

        // line 127
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 style=\"color: var(--admin-accent);\">";
        // line 130
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Edit User") : ("Create New User"));
        yield "</h1>
            <p class=\"mb-0\">";
        // line 131
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update user information") : ("Add a new user to the system"));
        yield "</p>
        </div>
        <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Back to list
        </a>
    </div>
</div>

<div class=\"form-container\">
    ";
        // line 140
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;\">
            <div>
                <div class=\"form-group\">
                    ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "email", [], "any", false, false, false, 144), 'label');
        yield "
                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "valid", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "errors", [], "any", false, false, false, 145))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "email", [], "any", false, false, false, 146), 'errors');
        yield "
                    <div class=\"field-hint\">Ex: user@example.com</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "username", [], "any", false, false, false, 151), 'label');
        yield "
                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "username", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "username", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "valid", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "username", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "errors", [], "any", false, false, false, 152))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "username", [], "any", false, false, false, 153), 'errors');
        yield "
                    <div class=\"field-hint\">3-50 caractères, lettres, chiffres, tirets et underscores uniquement</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "plainPassword", [], "any", false, false, false, 158), 'label');
        yield "
                    ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "plainPassword", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "plainPassword", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "valid", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "plainPassword", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "errors", [], "any", false, false, false, 159))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "autocomplete" => "new-password"]]);
        yield "
                    ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "plainPassword", [], "any", false, false, false, 160), 'errors');
        yield "
                    <small class=\"help-text\">
                        ";
        // line 162
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                            Leave blank to keep current password
                        ";
        } else {
            // line 165
            yield "                            Password is required for new users
                        ";
        }
        // line 167
        yield "                    </small>
                    
                    ";
        // line 169
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "                    <div class=\"password-requirements\">
                        <strong>Exigences du mot de passe:</strong>
                        <ul>
                            <li>Minimum 8 caractères</li>
                            <li>Maximum 50 caractères</li>
                            <li>Au moins une majuscule</li>
                            <li>Au moins une minuscule</li>
                            <li>Au moins un chiffre</li>
                            <li>Au moins un caractère spécial (@\$!%*?&)</li>
                        </ul>
                    </div>
                    ";
        }
        // line 182
        yield "                </div>
                
                <div class=\"form-group\">
                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "fullName", [], "any", false, false, false, 185), 'label');
        yield "
                    ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "fullName", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "fullName", [], "any", false, false, false, 186), "vars", [], "any", false, false, false, 186), "valid", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "fullName", [], "any", false, false, false, 186), "vars", [], "any", false, false, false, 186), "errors", [], "any", false, false, false, 186))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "fullName", [], "any", false, false, false, 187), 'errors');
        yield "
                    <div class=\"field-hint\">2-100 caractères, lettres, espaces, tirets et apostrophes uniquement</div>
                </div>
            </div>
            
            <div>
                <div class=\"form-group\">
                    ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "country", [], "any", false, false, false, 194), 'label');
        yield "
                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "country", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "country", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "valid", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "country", [], "any", false, false, false, 195), "vars", [], "any", false, false, false, 195), "errors", [], "any", false, false, false, 195))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "country", [], "any", false, false, false, 196), 'errors');
        yield "
                    <div class=\"field-hint\">Lettres, espaces et tirets uniquement</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "birthDate", [], "any", false, false, false, 201), 'label');
        yield "
                    ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "birthDate", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "birthDate", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "valid", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "birthDate", [], "any", false, false, false, 202), "vars", [], "any", false, false, false, 202), "errors", [], "any", false, false, false, 202))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "birthDate", [], "any", false, false, false, 203), 'errors');
        yield "
                    <div class=\"field-hint\">L'utilisateur doit avoir au moins 13 ans</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "role", [], "any", false, false, false, 208), 'label');
        yield "
                    ";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "role", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "role", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "valid", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "role", [], "any", false, false, false, 209), "vars", [], "any", false, false, false, 209), "errors", [], "any", false, false, false, 209))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "role", [], "any", false, false, false, 210), 'errors');
        yield "
                    <div class=\"field-hint\">Choix: user, admin, moderator, editor</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "achievementPoints", [], "any", false, false, false, 215), 'label');
        yield "
                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "achievementPoints", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => (("form-control" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "achievementPoints", [], "any", false, false, false, 216), "vars", [], "any", false, false, false, 216), "valid", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-valid") : (""))) . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "achievementPoints", [], "any", false, false, false, 216), "vars", [], "any", false, false, false, 216), "errors", [], "any", false, false, false, 216))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "achievementPoints", [], "any", false, false, false, 217), 'errors');
        yield "
                    <div class=\"field-hint\">0 à 999,999 points</div>
                </div>
                
                <div class=\"form-check\">
                    ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "isActive", [], "any", false, false, false, 222), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                    ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "isActive", [], "any", false, false, false, 223), 'label', ["label_attr" => ["class" => "form-check-label"]]);
        yield "
                </div>
            </div>
        </div>
        
        ";
        // line 228
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "vars", [], "any", false, false, false, 228), "errors", [], "any", false, false, false, 228))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 229
            yield "        <div class=\"alert alert-danger mt-3\">
            <strong>Veuillez corriger les erreurs suivantes:</strong>
            ";
            // line 231
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), 'errors');
            yield "
        </div>
        ";
        }
        // line 234
        yield "        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-save\"></i> ";
        // line 237
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update") : ("Create"));
        yield "
            </button>
            <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-times\"></i> Cancel
            </a>
        </div>
    ";
        // line 243
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        yield "
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
        return "admin/user/edit.html.twig";
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
        return array (  480 => 243,  473 => 239,  468 => 237,  463 => 234,  457 => 231,  453 => 229,  451 => 228,  443 => 223,  439 => 222,  431 => 217,  427 => 216,  423 => 215,  415 => 210,  411 => 209,  407 => 208,  399 => 203,  395 => 202,  391 => 201,  383 => 196,  379 => 195,  375 => 194,  365 => 187,  361 => 186,  357 => 185,  352 => 182,  338 => 170,  336 => 169,  332 => 167,  328 => 165,  324 => 163,  322 => 162,  317 => 160,  313 => 159,  309 => 158,  301 => 153,  297 => 152,  293 => 151,  285 => 146,  281 => 145,  277 => 144,  270 => 140,  260 => 133,  255 => 131,  251 => 130,  246 => 127,  233 => 126,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}{{ user.id ? 'Edit' : 'New' }} User{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .form-container {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #aaa;
            font-size: 0.9em;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 6px;
            font-size: 1em;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--admin-accent);
            box-shadow: 0 0 0 3px rgba(0, 243, 255, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
            background: rgba(220, 53, 69, 0.1);
        }
        
        .form-control.is-valid {
            border-color: #28a745;
            background: rgba(40, 167, 69, 0.1);
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
        
        .valid-feedback {
            color: #28a745;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .form-check-input {
            width: 20px;
            height: 20px;
        }
        
        .form-check-label {
            color: #aaa;
        }
        
        .form-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .help-text {
            color: #666;
            font-size: 0.8em;
            margin-top: 5px;
            display: block;
        }
        
        .password-requirements {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            padding: 15px;
            margin-top: 10px;
            font-size: 0.85em;
        }
        
        .password-requirements ul {
            margin: 0;
            padding-left: 20px;
            color: #aaa;
        }
        
        .password-requirements li {
            margin-bottom: 5px;
        }
        
        .field-hint {
            color: #6c757d;
            font-size: 0.85em;
            margin-top: 5px;
            display: block;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 style=\"color: var(--admin-accent);\">{{ user.id ? 'Edit User' : 'Create New User' }}</h1>
            <p class=\"mb-0\">{{ user.id ? 'Update user information' : 'Add a new user to the system' }}</p>
        </div>
        <a href=\"{{ path('admin_user_index') }}\" class=\"btn-admin btn-admin-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Back to list
        </a>
    </div>
</div>

<div class=\"form-container\">
    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;\">
            <div>
                <div class=\"form-group\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control' ~ (form.email.vars.valid ? ' is-valid' : '') ~ (form.email.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.email) }}
                    <div class=\"field-hint\">Ex: user@example.com</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.username) }}
                    {{ form_widget(form.username, {'attr': {'class': 'form-control' ~ (form.username.vars.valid ? ' is-valid' : '') ~ (form.username.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.username) }}
                    <div class=\"field-hint\">3-50 caractères, lettres, chiffres, tirets et underscores uniquement</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.plainPassword) }}
                    {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control' ~ (form.plainPassword.vars.valid ? ' is-valid' : '') ~ (form.plainPassword.vars.errors|length ? ' is-invalid' : ''), 'autocomplete': 'new-password'}}) }}
                    {{ form_errors(form.plainPassword) }}
                    <small class=\"help-text\">
                        {% if user.id %}
                            Leave blank to keep current password
                        {% else %}
                            Password is required for new users
                        {% endif %}
                    </small>
                    
                    {% if not user.id %}
                    <div class=\"password-requirements\">
                        <strong>Exigences du mot de passe:</strong>
                        <ul>
                            <li>Minimum 8 caractères</li>
                            <li>Maximum 50 caractères</li>
                            <li>Au moins une majuscule</li>
                            <li>Au moins une minuscule</li>
                            <li>Au moins un chiffre</li>
                            <li>Au moins un caractère spécial (@\$!%*?&)</li>
                        </ul>
                    </div>
                    {% endif %}
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.fullName) }}
                    {{ form_widget(form.fullName, {'attr': {'class': 'form-control' ~ (form.fullName.vars.valid ? ' is-valid' : '') ~ (form.fullName.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.fullName) }}
                    <div class=\"field-hint\">2-100 caractères, lettres, espaces, tirets et apostrophes uniquement</div>
                </div>
            </div>
            
            <div>
                <div class=\"form-group\">
                    {{ form_label(form.country) }}
                    {{ form_widget(form.country, {'attr': {'class': 'form-control' ~ (form.country.vars.valid ? ' is-valid' : '') ~ (form.country.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.country) }}
                    <div class=\"field-hint\">Lettres, espaces et tirets uniquement</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.birthDate) }}
                    {{ form_widget(form.birthDate, {'attr': {'class': 'form-control' ~ (form.birthDate.vars.valid ? ' is-valid' : '') ~ (form.birthDate.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.birthDate) }}
                    <div class=\"field-hint\">L'utilisateur doit avoir au moins 13 ans</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.role) }}
                    {{ form_widget(form.role, {'attr': {'class': 'form-control' ~ (form.role.vars.valid ? ' is-valid' : '') ~ (form.role.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.role) }}
                    <div class=\"field-hint\">Choix: user, admin, moderator, editor</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.achievementPoints) }}
                    {{ form_widget(form.achievementPoints, {'attr': {'class': 'form-control' ~ (form.achievementPoints.vars.valid ? ' is-valid' : '') ~ (form.achievementPoints.vars.errors|length ? ' is-invalid' : '')}}) }}
                    {{ form_errors(form.achievementPoints) }}
                    <div class=\"field-hint\">0 à 999,999 points</div>
                </div>
                
                <div class=\"form-check\">
                    {{ form_widget(form.isActive, {'attr': {'class': 'form-check-input'}}) }}
                    {{ form_label(form.isActive, null, {'label_attr': {'class': 'form-check-label'}}) }}
                </div>
            </div>
        </div>
        
        {% if form.vars.errors|length %}
        <div class=\"alert alert-danger mt-3\">
            <strong>Veuillez corriger les erreurs suivantes:</strong>
            {{ form_errors(form) }}
        </div>
        {% endif %}
        
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn-admin btn-admin-primary\">
                <i class=\"fas fa-save\"></i> {{ user.id ? 'Update' : 'Create' }}
            </button>
            <a href=\"{{ path('admin_user_index') }}\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-times\"></i> Cancel
            </a>
        </div>
    {{ form_end(form) }}
</div>
{% endblock %}", "admin/user/edit.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\user\\edit.html.twig");
    }
}
