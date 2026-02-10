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

/* admin/user/export_pdf.html.twig */
class __TwigTemplate_f9b4b67182f9013f94c783854ed6bfdb extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Users Report - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["export_date"]) || array_key_exists("export_date", $context) ? $context["export_date"] : (function () { throw new RuntimeError('Variable "export_date" does not exist.', 5, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #007bff;
            margin: 0 0 10px 0;
        }
        
        .header .subtitle {
            color: #666;
            font-size: 14px;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: #666;
            font-size: 12px;
            text-transform: uppercase;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        th {
            background: #007bff;
            color: white;
            padding: 12px 8px;
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
        }
        
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #dee2e6;
            font-size: 12px;
        }
        
        tr:nth-child(even) {
            background: #f8f9fa;
        }
        
        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: bold;
        }
        
        .badge-active {
            background: #d4edda;
            color: #155724;
        }
        
        .badge-inactive {
            background: #f8d7da;
            color: #721c24;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            color: #666;
            font-size: 11px;
        }
        
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Users Management Report</h1>
        <div class=\"subtitle\">
            Generated on ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["export_date"]) || array_key_exists("export_date", $context) ? $context["export_date"] : (function () { throw new RuntimeError('Variable "export_date" does not exist.', 120, $this->source); })()), "Y-m-d H:i"), "html", null, true);
        yield " | Total Users: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 120, $this->source); })())), "html", null, true);
        yield "
        </div>
    </div>
    
    <div class=\"stats\">
        <div class=\"stat-card\">
            <div class=\"stat-value\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 126, $this->source); })())), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Total Users</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-value\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 130, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 130, $this->source); })()), "isActive", [], "any", false, false, false, 130); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Active Users</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-value\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 134, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 134, $this->source); })()), "isActive", [], "any", false, false, false, 134); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Inactive Users</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-value\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 138, $this->source); })()), function ($__u__) use ($context, $macros) { $context["u"] = $__u__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["u"]) || array_key_exists("u", $context) ? $context["u"] : (function () { throw new RuntimeError('Variable "u" does not exist.', 138, $this->source); })()), "role", [], "any", false, false, false, 138) == "admin"); })), "html", null, true);
        yield "</div>
            <div class=\"stat-label\">Admin Users</div>
        </div>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Country</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 159
            yield "            <tr>
                <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 162), "html", null, true);
            yield "</td>
                <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 163), "html", null, true);
            yield "</td>
                <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                <td>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 165), "html", null, true);
            yield "</td>
                <td>
                    <span class=\"badge badge-";
            // line 167
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
            yield "\">
                        ";
            // line 168
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                    </span>
                </td>
                <td>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 171), "Y-m-d H:i"), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 173
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLoginAt", [], "any", false, false, false, 173)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 174
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastLoginAt", [], "any", false, false, false, 174), "Y-m-d H:i"), "html", null, true);
                yield "
                    ";
            } else {
                // line 176
                yield "                        Never
                    ";
            }
            // line 178
            yield "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "        </tbody>
    </table>
    
    <div class=\"footer\">
        <p>Phantom Force Esports - Users Management System</p>
        <p>Report generated automatically by the system</p>
        <p>Page 1 of 1</p> <!-- Correction : remplacé loop.index par une valeur fixe -->
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/user/export_pdf.html.twig";
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
        return array (  294 => 181,  286 => 178,  282 => 176,  276 => 174,  274 => 173,  269 => 171,  263 => 168,  259 => 167,  254 => 165,  250 => 164,  246 => 163,  242 => 162,  238 => 161,  234 => 160,  231 => 159,  227 => 158,  204 => 138,  197 => 134,  190 => 130,  183 => 126,  172 => 120,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Users Report - {{ export_date|date('Y-m-d H:i') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 20px;
        }
        
        .header h1 {
            color: #007bff;
            margin: 0 0 10px 0;
        }
        
        .header .subtitle {
            color: #666;
            font-size: 14px;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: #666;
            font-size: 12px;
            text-transform: uppercase;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        
        th {
            background: #007bff;
            color: white;
            padding: 12px 8px;
            text-align: left;
            font-size: 12px;
            text-transform: uppercase;
        }
        
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #dee2e6;
            font-size: 12px;
        }
        
        tr:nth-child(even) {
            background: #f8f9fa;
        }
        
        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: bold;
        }
        
        .badge-active {
            background: #d4edda;
            color: #155724;
        }
        
        .badge-inactive {
            background: #f8d7da;
            color: #721c24;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #dee2e6;
            color: #666;
            font-size: 11px;
        }
        
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Users Management Report</h1>
        <div class=\"subtitle\">
            Generated on {{ export_date|date('Y-m-d H:i') }} | Total Users: {{ users|length }}
        </div>
    </div>
    
    <div class=\"stats\">
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ users|length }}</div>
            <div class=\"stat-label\">Total Users</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ users|filter(u => u.isActive)|length }}</div>
            <div class=\"stat-label\">Active Users</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ users|filter(u => not u.isActive)|length }}</div>
            <div class=\"stat-label\">Inactive Users</div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-value\">{{ users|filter(u => u.role == 'admin')|length }}</div>
            <div class=\"stat-label\">Admin Users</div>
        </div>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Country</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.username }}</td>
                <td>{{ user.fullName }}</td>
                <td>{{ user.role }}</td>
                <td>{{ user.country }}</td>
                <td>
                    <span class=\"badge badge-{{ user.isActive ? 'active' : 'inactive' }}\">
                        {{ user.isActive ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td>{{ user.createdAt|date('Y-m-d H:i') }}</td>
                <td>
                    {% if user.lastLoginAt %}
                        {{ user.lastLoginAt|date('Y-m-d H:i') }}
                    {% else %}
                        Never
                    {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    
    <div class=\"footer\">
        <p>Phantom Force Esports - Users Management System</p>
        <p>Report generated automatically by the system</p>
        <p>Page 1 of 1</p> <!-- Correction : remplacé loop.index par une valeur fixe -->
    </div>
</body>
</html>", "admin/user/export_pdf.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\admin\\user\\export_pdf.html.twig");
    }
}
