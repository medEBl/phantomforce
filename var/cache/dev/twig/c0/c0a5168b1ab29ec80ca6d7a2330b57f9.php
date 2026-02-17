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

/* back/team/index.html.twig */
class __TwigTemplate_94b4b84ae510afecc1e2fecc7f866d77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/team/index.html.twig"));

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

        yield "🎮 Admin - Gestion des équipes";
        
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
        yield "<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">👥 Gestion des équipes</h1>
            <p class=\"mb-0 text-muted\">Administrez les équipes de l'arène e-sport</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouvelle équipe
        </a>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-users fa-2x\" style=\"color: var(--admin-accent);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 27, $this->source); })())), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Équipes total</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-user-tie fa-2x\" style=\"color: #ffc107;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 41, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 41, $this->source); })()), "coach", [], "any", false, false, false, 41)); })), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Avec coach</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-gamepad fa-2x\" style=\"color: var(--admin-success);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 55, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 55, $this->source); })()), "game", [], "any", false, false, false, 55); }), function ($__g__) use ($context, $macros) { $context["g"] = $__g__; return  !Twig\Extension\CoreExtension::testEmpty((isset($context["g"]) || array_key_exists("g", $context) ? $context["g"] : (function () { throw new RuntimeError('Variable "g" does not exist.', 55, $this->source); })())); }), function ($__unique__, $__game__) use ($context, $macros) { $context["unique"] = $__unique__; $context["game"] = $__game__; return ((!CoreExtension::inFilter((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 55, $this->source); })()), (isset($context["unique"]) || array_key_exists("unique", $context) ? $context["unique"] : (function () { throw new RuntimeError('Variable "unique" does not exist.', 55, $this->source); })()))) ? (Twig\Extension\CoreExtension::merge((isset($context["unique"]) || array_key_exists("unique", $context) ? $context["unique"] : (function () { throw new RuntimeError('Variable "unique" does not exist.', 55, $this->source); })()), [(isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 55, $this->source); })())])) : ((isset($context["unique"]) || array_key_exists("unique", $context) ? $context["unique"] : (function () { throw new RuntimeError('Variable "unique" does not exist.', 55, $this->source); })()))); }, [])), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Jeux distincts</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-user-check fa-2x\" style=\"color: #9d00ff;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 69, $this->source); })()), function ($__total__, $__t__) use ($context, $macros) { $context["total"] = $__total__; $context["t"] = $__t__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 69, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 69, $this->source); })()), "members", [], "any", false, false, false, 69))); }, 0), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Membres total</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filtres rapides -->
<div class=\"row mb-3\">
    <div class=\"col-12\">
        <div class=\"admin-card p-2\">
            <div class=\"d-flex gap-2 flex-wrap align-items-center\">
                <span class=\"text-muted me-2\"><i class=\"fas fa-filter\"></i> Filtres :</span>
                <button class=\"btn-admin btn-admin-secondary btn-sm\" onclick=\"filterTeams('all')\">
                    Tous (";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 84, $this->source); })())), "html", null, true);
        yield ")
                </button>
                <button class=\"btn-admin btn-admin-primary btn-sm\" onclick=\"filterTeams('with-coach')\">
                    <i class=\"fas fa-user-tie\"></i> Avec coach (";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 87, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 87, $this->source); })()), "coach", [], "any", false, false, false, 87)); })), "html", null, true);
        yield ")
                </button>
                <button class=\"btn-admin btn-admin-warning btn-sm\" onclick=\"filterTeams('without-coach')\">
                    <i class=\"fas fa-user-slash\"></i> Sans coach (";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 90, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 90, $this->source); })()), "coach", [], "any", false, false, false, 90)); })), "html", null, true);
        yield ")
                </button>
                <button class=\"btn-admin btn-admin-info btn-sm\" onclick=\"filterTeams('with-members')\">
                    <i class=\"fas fa-users\"></i> Avec membres (";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 93, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 93, $this->source); })()), "members", [], "any", false, false, false, 93)) > 0); })), "html", null, true);
        yield ")
                </button>
                <button class=\"btn-admin btn-admin-secondary btn-sm\" onclick=\"filterTeams('empty')\">
                    <i class=\"fas fa-empty\"></i> Sans membres (";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 96, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 96, $this->source); })()), "members", [], "any", false, false, false, 96)) == 0); })), "html", null, true);
        yield ")
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Barre de recherche -->
<div class=\"row mb-3\">
    <div class=\"col-md-6 col-lg-4\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control form-admin\" id=\"searchInput\" placeholder=\"Rechercher une équipe...\">
            <button class=\"btn-admin btn-admin-secondary\" type=\"button\" onclick=\"searchTeams()\">
                <i class=\"fas fa-search\"></i>
            </button>
            <button class=\"btn-admin btn-admin-danger\" type=\"button\" onclick=\"clearSearch()\" title=\"Effacer la recherche\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
</div>

<div class=\"admin-card\">
    <div class=\"table-responsive\">
        <table class=\"admin-table\" id=\"teamsTable\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Jeu</th>
                    <th>Date création</th>
                    <th>Coach</th>
                    <th>Membres</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 133, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 134
            yield "                <tr class=\"team-row\" 
                    data-has-coach=\"";
            // line 135
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"));
            yield "\"
                    data-members-count=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 136)), "html", null, true);
            yield "\">
                    <td><strong>#";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 137), "html", null, true);
            yield "</strong></td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-users me-2\" style=\"color: var(--blood-red);\"></i>
                            ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 141), "html", null, true);
            yield "
                        </div>
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: var(--blood-orange);\">
                            ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "game", [], "any", false, false, false, 146), "N/A")) : ("N/A")), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td>
                        ";
            // line 150
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
                yield "
                            <small class=\"text-muted d-block\">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "creationDate", [], "any", false, false, false, 152), "H:i"), "html", null, true);
                yield "</small>
                        ";
            } else {
                // line 154
                yield "                            <span class=\"text-muted\">N/A</span>
                        ";
            }
            // line 156
            yield "                    </td>
                    <td>
                        ";
            // line 158
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 159
                yield "                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-crown me-1\" style=\"color: #ffc107;\"></i>
                                ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 161), "username", [], "any", false, false, false, 161), "html", null, true);
                yield "
                                <small class=\"text-muted ms-1\">(";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["team"], "coach", [], "any", false, false, false, 162), "email", [], "any", false, false, false, 162), "html", null, true);
                yield ")</small>
                            </div>
                        ";
            } else {
                // line 165
                yield "                            <span class=\"text-muted\">
                                <i class=\"fas fa-user-slash\"></i> Non assigné
                            </span>
                        ";
            }
            // line 169
            yield "                    </td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-user-friends me-1\" style=\"color: var(--neon-green);\"></i>
                            <span class=\"badge-admin\" style=\"background: var(--neon-green); color: black;\">
                                ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 174)), "html", null, true);
            yield "
                            </span>
                            ";
            // line 176
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 176)) > 0)) {
                // line 177
                yield "                                <small class=\"text-muted ms-1\" title=\"";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "members", [], "any", false, false, false, 178));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["member"], "pseudo", [], "any", false, false, false, 179), "html", null, true);
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield ", ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                yield "\">
                                    <i class=\"fas fa-info-circle\"></i>
                                </small>
                            ";
            }
            // line 184
            yield "                        </div>
                    </td>
                    <td>
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 188)]), "html", null, true);
            yield "\" 
                               class=\"btn-admin btn-admin-secondary btn-sm\"
                               title=\"Voir les détails\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            yield "\" 
                               class=\"btn-admin btn-admin-primary btn-sm\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 198)]), "html", null, true);
            yield "\" 
                                  onsubmit=\"return confirm('⚠️ Supprimer cette équipe ?\\n\\nCette action supprimera l\\'équipe mais conservera les agents.');\"
                                  class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 201))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger btn-sm\"
                                        title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 210
        if (!$context['_iterated']) {
            // line 211
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center py-4\">
                        <div class=\"py-4\">
                            <i class=\"fas fa-users fa-3x mb-3\" style=\"color: rgba(255,255,255,0.1);\"></i>
                            <h5 class=\"text-muted\">Aucune équipe trouvée</h5>
                            <p class=\"text-muted\">Commencez par créer une nouvelle équipe</p>
                            <a href=\"";
            // line 217
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_new");
            yield "\" class=\"btn-admin btn-admin-primary\">
                                <i class=\"fas fa-plus\"></i> Créer la première équipe
                            </a>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "            </tbody>
        </table>
    </div>
    
    <!-- Pagination (optionnelle) -->
    ";
        // line 229
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 229, $this->source); })())) > 10)) {
            // line 230
            yield "    <nav class=\"mt-3\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    ";
        }
        // line 248
        yield "</div>

<script>
// Fonction de recherche
function searchTeams() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll('.team-row');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        if (text.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Effacer la recherche
function clearSearch() {
    document.getElementById('searchInput').value = '';
    document.querySelectorAll('.team-row').forEach(row => {
        row.style.display = '';
    });
}

// Filtrer les équipes
function filterTeams(type) {
    const rows = document.querySelectorAll('.team-row');
    
    rows.forEach(row => {
        const hasCoach = row.dataset.hasCoach;
        const membersCount = parseInt(row.dataset.membersCount);
        
        switch(type) {
            case 'all':
                row.style.display = '';
                break;
            case 'with-coach':
                row.style.display = hasCoach === 'yes' ? '' : 'none';
                break;
            case 'without-coach':
                row.style.display = hasCoach === 'no' ? '' : 'none';
                break;
            case 'with-members':
                row.style.display = membersCount > 0 ? '' : 'none';
                break;
            case 'empty':
                row.style.display = membersCount === 0 ? '' : 'none';
                break;
        }
    });
}

// Recherche en temps réel
document.getElementById('searchInput')?.addEventListener('keyup', function(e) {
    searchTeams();
});

// Raccourci Ctrl+F pour focus recherche
document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && e.key === 'f') {
        e.preventDefault();
        document.getElementById('searchInput')?.focus();
    }
});

// Animation des cartes au chargement
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.admin-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>

<style>
.admin-card {
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
}

.admin-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

/* Style pour les badges de filtre */
.btn-admin-sm {
    padding: 0.25rem 0.75rem;
    font-size: 0.85rem;
}

/* Animation pour les lignes du tableau */
.team-row {
    transition: all 0.2s;
}

.team-row:hover {
    background: rgba(255, 255, 255, 0.05);
}

/* Style pour la recherche */
#searchInput:focus {
    border-color: var(--blood-red);
    box-shadow: 0 0 0 3px rgba(255, 0, 60, 0.2);
}

/* Badges personnalisés */
.badge-admin {
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.85rem;
    font-weight: 600;
}

/* Style pour les boutons de filtre */
.btn-admin-info {
    background: linear-gradient(45deg, #17a2b8, #138496);
    color: white;
    border: none;
}

.btn-admin-info:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
}

.btn-admin-warning {
    background: linear-gradient(45deg, #ffc107, #e0a800);
    color: black;
    border: none;
}

.btn-admin-warning:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
}
</style>
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
        return "back/team/index.html.twig";
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
        return array (  489 => 248,  469 => 230,  467 => 229,  460 => 224,  447 => 217,  439 => 211,  437 => 210,  423 => 201,  417 => 198,  409 => 193,  401 => 188,  395 => 184,  389 => 180,  372 => 179,  355 => 178,  353 => 177,  351 => 176,  346 => 174,  339 => 169,  333 => 165,  327 => 162,  323 => 161,  319 => 159,  317 => 158,  313 => 156,  309 => 154,  304 => 152,  299 => 151,  297 => 150,  290 => 146,  282 => 141,  275 => 137,  271 => 136,  267 => 135,  264 => 134,  259 => 133,  219 => 96,  213 => 93,  207 => 90,  201 => 87,  195 => 84,  177 => 69,  160 => 55,  143 => 41,  126 => 27,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}🎮 Admin - Gestion des équipes{% endblock %}

{% block body %}
<div class=\"admin-header\">
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">👥 Gestion des équipes</h1>
            <p class=\"mb-0 text-muted\">Administrez les équipes de l'arène e-sport</p>
        </div>
        <a href=\"{{ path('app_back_team_new') }}\" class=\"btn-admin btn-admin-primary\">
            <i class=\"fas fa-plus\"></i> Nouvelle équipe
        </a>
    </div>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-users fa-2x\" style=\"color: var(--admin-accent);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ teams|length }}</h3>
                    <small class=\"text-muted\">Équipes total</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-user-tie fa-2x\" style=\"color: #ffc107;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ teams|filter(t => t.coach is not empty)|length }}</h3>
                    <small class=\"text-muted\">Avec coach</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-gamepad fa-2x\" style=\"color: var(--admin-success);\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ teams|map(t => t.game)|filter(g => g is not empty)|reduce((unique, game) => game not in unique ? unique|merge([game]) : unique, [])|length }}</h3>
                    <small class=\"text-muted\">Jeux distincts</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <i class=\"fas fa-user-check fa-2x\" style=\"color: #9d00ff;\"></i>
                </div>
                <div>
                    <h3 class=\"mb-0\">{{ teams|reduce((total, t) => total + t.members|length, 0) }}</h3>
                    <small class=\"text-muted\">Membres total</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filtres rapides -->
<div class=\"row mb-3\">
    <div class=\"col-12\">
        <div class=\"admin-card p-2\">
            <div class=\"d-flex gap-2 flex-wrap align-items-center\">
                <span class=\"text-muted me-2\"><i class=\"fas fa-filter\"></i> Filtres :</span>
                <button class=\"btn-admin btn-admin-secondary btn-sm\" onclick=\"filterTeams('all')\">
                    Tous ({{ teams|length }})
                </button>
                <button class=\"btn-admin btn-admin-primary btn-sm\" onclick=\"filterTeams('with-coach')\">
                    <i class=\"fas fa-user-tie\"></i> Avec coach ({{ teams|filter(t => t.coach is not empty)|length }})
                </button>
                <button class=\"btn-admin btn-admin-warning btn-sm\" onclick=\"filterTeams('without-coach')\">
                    <i class=\"fas fa-user-slash\"></i> Sans coach ({{ teams|filter(t => t.coach is empty)|length }})
                </button>
                <button class=\"btn-admin btn-admin-info btn-sm\" onclick=\"filterTeams('with-members')\">
                    <i class=\"fas fa-users\"></i> Avec membres ({{ teams|filter(t => t.members|length > 0)|length }})
                </button>
                <button class=\"btn-admin btn-admin-secondary btn-sm\" onclick=\"filterTeams('empty')\">
                    <i class=\"fas fa-empty\"></i> Sans membres ({{ teams|filter(t => t.members|length == 0)|length }})
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Barre de recherche -->
<div class=\"row mb-3\">
    <div class=\"col-md-6 col-lg-4\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control form-admin\" id=\"searchInput\" placeholder=\"Rechercher une équipe...\">
            <button class=\"btn-admin btn-admin-secondary\" type=\"button\" onclick=\"searchTeams()\">
                <i class=\"fas fa-search\"></i>
            </button>
            <button class=\"btn-admin btn-admin-danger\" type=\"button\" onclick=\"clearSearch()\" title=\"Effacer la recherche\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
</div>

<div class=\"admin-card\">
    <div class=\"table-responsive\">
        <table class=\"admin-table\" id=\"teamsTable\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Jeu</th>
                    <th>Date création</th>
                    <th>Coach</th>
                    <th>Membres</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for team in teams %}
                <tr class=\"team-row\" 
                    data-has-coach=\"{{ team.coach ? 'yes' : 'no' }}\"
                    data-members-count=\"{{ team.members|length }}\">
                    <td><strong>#{{ team.id }}</strong></td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-users me-2\" style=\"color: var(--blood-red);\"></i>
                            {{ team.name }}
                        </div>
                    </td>
                    <td>
                        <span class=\"badge-admin\" style=\"background: var(--blood-orange);\">
                            {{ team.game|default('N/A') }}
                        </span>
                    </td>
                    <td>
                        {% if team.creationDate %}
                            {{ team.creationDate|date('d/m/Y') }}
                            <small class=\"text-muted d-block\">{{ team.creationDate|date('H:i') }}</small>
                        {% else %}
                            <span class=\"text-muted\">N/A</span>
                        {% endif %}
                    </td>
                    <td>
                        {% if team.coach %}
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-crown me-1\" style=\"color: #ffc107;\"></i>
                                {{ team.coach.username }}
                                <small class=\"text-muted ms-1\">({{ team.coach.email }})</small>
                            </div>
                        {% else %}
                            <span class=\"text-muted\">
                                <i class=\"fas fa-user-slash\"></i> Non assigné
                            </span>
                        {% endif %}
                    </td>
                    <td>
                        <div class=\"d-flex align-items-center\">
                            <i class=\"fas fa-user-friends me-1\" style=\"color: var(--neon-green);\"></i>
                            <span class=\"badge-admin\" style=\"background: var(--neon-green); color: black;\">
                                {{ team.members|length }}
                            </span>
                            {% if team.members|length > 0 %}
                                <small class=\"text-muted ms-1\" title=\"
                                    {%- for member in team.members -%}
                                        {{ member.pseudo }}{% if not loop.last %}, {% endif %}
                                    {%- endfor -%}\">
                                    <i class=\"fas fa-info-circle\"></i>
                                </small>
                            {% endif %}
                        </div>
                    </td>
                    <td>
                        <div class=\"btn-group\" role=\"group\">
                            <a href=\"{{ path('app_back_team_show', {'id': team.id}) }}\" 
                               class=\"btn-admin btn-admin-secondary btn-sm\"
                               title=\"Voir les détails\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a href=\"{{ path('app_back_team_edit', {'id': team.id}) }}\" 
                               class=\"btn-admin btn-admin-primary btn-sm\"
                               title=\"Modifier\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                            <form method=\"post\" action=\"{{ path('app_back_team_delete', {'id': team.id}) }}\" 
                                  onsubmit=\"return confirm('⚠️ Supprimer cette équipe ?\\n\\nCette action supprimera l\\'équipe mais conservera les agents.');\"
                                  class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ team.id) }}\">
                                <button type=\"submit\" class=\"btn-admin btn-admin-danger btn-sm\"
                                        title=\"Supprimer\">
                                    <i class=\"fas fa-trash\"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-center py-4\">
                        <div class=\"py-4\">
                            <i class=\"fas fa-users fa-3x mb-3\" style=\"color: rgba(255,255,255,0.1);\"></i>
                            <h5 class=\"text-muted\">Aucune équipe trouvée</h5>
                            <p class=\"text-muted\">Commencez par créer une nouvelle équipe</p>
                            <a href=\"{{ path('app_back_team_new') }}\" class=\"btn-admin btn-admin-primary\">
                                <i class=\"fas fa-plus\"></i> Créer la première équipe
                            </a>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    
    <!-- Pagination (optionnelle) -->
    {% if teams|length > 10 %}
    <nav class=\"mt-3\">
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Précédent\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Suivant\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    {% endif %}
</div>

<script>
// Fonction de recherche
function searchTeams() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll('.team-row');
    
    rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        if (text.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}

// Effacer la recherche
function clearSearch() {
    document.getElementById('searchInput').value = '';
    document.querySelectorAll('.team-row').forEach(row => {
        row.style.display = '';
    });
}

// Filtrer les équipes
function filterTeams(type) {
    const rows = document.querySelectorAll('.team-row');
    
    rows.forEach(row => {
        const hasCoach = row.dataset.hasCoach;
        const membersCount = parseInt(row.dataset.membersCount);
        
        switch(type) {
            case 'all':
                row.style.display = '';
                break;
            case 'with-coach':
                row.style.display = hasCoach === 'yes' ? '' : 'none';
                break;
            case 'without-coach':
                row.style.display = hasCoach === 'no' ? '' : 'none';
                break;
            case 'with-members':
                row.style.display = membersCount > 0 ? '' : 'none';
                break;
            case 'empty':
                row.style.display = membersCount === 0 ? '' : 'none';
                break;
        }
    });
}

// Recherche en temps réel
document.getElementById('searchInput')?.addEventListener('keyup', function(e) {
    searchTeams();
});

// Raccourci Ctrl+F pour focus recherche
document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && e.key === 'f') {
        e.preventDefault();
        document.getElementById('searchInput')?.focus();
    }
});

// Animation des cartes au chargement
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.admin-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>

<style>
.admin-card {
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
}

.admin-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

/* Style pour les badges de filtre */
.btn-admin-sm {
    padding: 0.25rem 0.75rem;
    font-size: 0.85rem;
}

/* Animation pour les lignes du tableau */
.team-row {
    transition: all 0.2s;
}

.team-row:hover {
    background: rgba(255, 255, 255, 0.05);
}

/* Style pour la recherche */
#searchInput:focus {
    border-color: var(--blood-red);
    box-shadow: 0 0 0 3px rgba(255, 0, 60, 0.2);
}

/* Badges personnalisés */
.badge-admin {
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-size: 0.85rem;
    font-weight: 600;
}

/* Style pour les boutons de filtre */
.btn-admin-info {
    background: linear-gradient(45deg, #17a2b8, #138496);
    color: white;
    border: none;
}

.btn-admin-info:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
}

.btn-admin-warning {
    background: linear-gradient(45deg, #ffc107, #e0a800);
    color: black;
    border: none;
}

.btn-admin-warning:hover {
    filter: brightness(1.1);
    transform: translateY(-2px);
}
</style>
{% endblock %}", "back/team/index.html.twig", "C:\\xampp\\htdocs\\esport (3)\\esport\\templates\\back\\team\\index.html.twig");
    }
}
