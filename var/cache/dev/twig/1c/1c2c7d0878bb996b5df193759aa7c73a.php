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

/* user/show.html.twig */
class __TwigTemplate_c46d5d76c0565a905ffb509c08cb35a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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

        yield "User Profile - Phantom Force";
        
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
        yield "<div class=\"hero\">
    <h1>User Profile</h1>
    <p>View and manage your profile information</p>
</div>

<div class=\"container\" style=\"max-width: 800px; margin: 0 auto;\">
    <div class=\"module-card\" style=\"margin-top: 40px;\">
        <div class=\"module-icon\" style=\"background: var(--red-gradient);\">
            <i class=\"fas fa-user\"></i>
        </div>
        <h2 class=\"module-title\">Profile Details</h2>
        
        <div class=\"profile-details\" style=\"margin-top: 20px;\">
            <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;\">
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">ID</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Email</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Username</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Full Name</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "fullName", [], "any", false, false, false, 34), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Country</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "country", [], "any", false, false, false, 38), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Birth Date</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 42
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "birthDate", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "birthDate", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true)) : ("Not specified"));
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Role</div>
                    <div style=\"font-size: 16px; font-weight: 600; color: var(--red);\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "role", [], "any", false, false, false, 46), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Achievement Points</div>
                    <div style=\"font-size: 16px; font-weight: 600; color: var(--green);\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "achievementPoints", [], "any", false, false, false, 50), "html", null, true);
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Account Status</div>
                    <div style=\"font-size: 16px; font-weight: 600; color: ";
        // line 54
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "isActive", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("var(--green)") : ("var(--red)"));
        yield ";\">
                        ";
        // line 55
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "isActive", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                    </div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Member Since</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 60
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "createdAt", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "createdAt", [], "any", false, false, false, 60), "F j, Y"), "html", null, true)) : ("Unknown"));
        yield "</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Last Login</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">";
        // line 64
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "lastLoginAt", [], "any", false, false, false, 64), "F j, Y H:i"), "html", null, true)) : ("Never"));
        yield "</div>
                </div>
            </div>
        </div>

        <div class=\"module-stats\" style=\"margin-top: 30px; border-top: 1px solid var(--border-light); padding-top: 20px;\">
            <div class=\"module-stat\">
                <div class=\"module-stat-value\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "achievementPoints", [], "any", false, false, false, 71), "html", null, true);
        yield "</div>
                <div class=\"module-stat-label\">Points</div>
            </div>
            <div class=\"module-stat\">
                <div class=\"module-stat-value\" style=\"color: ";
        // line 75
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("var(--green)") : ("var(--red)"));
        yield ";\">
                    ";
        // line 76
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "isActive", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
        yield "
                </div>
                <div class=\"module-stat-label\">Status</div>
            </div>
            <div class=\"module-stat\">
                <div class=\"module-stat-value\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "role", [], "any", false, false, false, 81), "html", null, true);
        yield "</div>
                <div class=\"module-stat-label\">Role</div>
            </div>
        </div>
    </div>

    <div style=\"display: flex; gap: 15px; margin-top: 30px; justify-content: center;\">
       
        
        ";
        // line 91
        yield "        ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)))) {
            // line 92
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-edit\"></i> Edit Profile
            </a>
        ";
        }
        // line 96
        yield "        
        ";
        // line 98
        yield "        ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100))), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn\" style=\"background: var(--red-gradient); color: white;\">
                    <i class=\"fas fa-trash\"></i> Delete User
                </button>
            </form>
        ";
        }
        // line 106
        yield "    </div>
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
        return "user/show.html.twig";
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
        return array (  265 => 106,  256 => 100,  251 => 99,  248 => 98,  245 => 96,  237 => 92,  234 => 91,  222 => 81,  214 => 76,  210 => 75,  203 => 71,  193 => 64,  186 => 60,  178 => 55,  174 => 54,  167 => 50,  160 => 46,  153 => 42,  146 => 38,  139 => 34,  132 => 30,  125 => 26,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User Profile - Phantom Force{% endblock %}

{% block body %}
<div class=\"hero\">
    <h1>User Profile</h1>
    <p>View and manage your profile information</p>
</div>

<div class=\"container\" style=\"max-width: 800px; margin: 0 auto;\">
    <div class=\"module-card\" style=\"margin-top: 40px;\">
        <div class=\"module-icon\" style=\"background: var(--red-gradient);\">
            <i class=\"fas fa-user\"></i>
        </div>
        <h2 class=\"module-title\">Profile Details</h2>
        
        <div class=\"profile-details\" style=\"margin-top: 20px;\">
            <div style=\"display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;\">
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">ID</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.id }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Email</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.email }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Username</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.username }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Full Name</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.fullName }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Country</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.country }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Birth Date</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.birthDate ? user.birthDate|date('Y-m-d') : 'Not specified' }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Role</div>
                    <div style=\"font-size: 16px; font-weight: 600; color: var(--red);\">{{ user.role }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Achievement Points</div>
                    <div style=\"font-size: 16px; font-weight: 600; color: var(--green);\">{{ user.achievementPoints }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Account Status</div>
                    <div style=\"font-size: 16px; font-weight: 600; color: {{ user.isActive ? 'var(--green)' : 'var(--red)' }};\">
                        {{ user.isActive ? 'Active' : 'Inactive' }}
                    </div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Member Since</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.createdAt ? user.createdAt|date('F j, Y') : 'Unknown' }}</div>
                </div>
                <div class=\"profile-field\">
                    <div style=\"color: var(--text-muted); font-size: 14px; margin-bottom: 5px;\">Last Login</div>
                    <div style=\"font-size: 16px; font-weight: 600;\">{{ user.lastLoginAt ? user.lastLoginAt|date('F j, Y H:i') : 'Never' }}</div>
                </div>
            </div>
        </div>

        <div class=\"module-stats\" style=\"margin-top: 30px; border-top: 1px solid var(--border-light); padding-top: 20px;\">
            <div class=\"module-stat\">
                <div class=\"module-stat-value\">{{ user.achievementPoints }}</div>
                <div class=\"module-stat-label\">Points</div>
            </div>
            <div class=\"module-stat\">
                <div class=\"module-stat-value\" style=\"color: {{ user.isActive ? 'var(--green)' : 'var(--red)' }};\">
                    {{ user.isActive ? 'Active' : 'Inactive' }}
                </div>
                <div class=\"module-stat-label\">Status</div>
            </div>
            <div class=\"module-stat\">
                <div class=\"module-stat-value\">{{ user.role }}</div>
                <div class=\"module-stat-label\">Role</div>
            </div>
        </div>
    </div>

    <div style=\"display: flex; gap: 15px; margin-top: 30px; justify-content: center;\">
       
        
        {# Show edit link only if user is admin OR viewing own profile #}
        {% if is_granted('ROLE_ADMIN') or app.user.id == user.id %}
            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-edit\"></i> Edit Profile
            </a>
        {% endif %}
        
        {# Only show delete button for admins #}
        {% if is_granted('ROLE_ADMIN') %}
            <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                <button type=\"submit\" class=\"btn\" style=\"background: var(--red-gradient); color: white;\">
                    <i class=\"fas fa-trash\"></i> Delete User
                </button>
            </form>
        {% endif %}
    </div>
</div>
{% endblock %}", "user/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\user\\show.html.twig");
    }
}
