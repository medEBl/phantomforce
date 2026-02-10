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

/* back/dashboard/index.html.twig */
class __TwigTemplate_27c8d524d24a604e8fe1b50fcb2c193b extends Template
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
        // line 2
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_back.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "🎮 Admin - Tableau de bord";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"admin-header\">
    <h1 class=\"h3 mb-2\">Tableau de bord</h1>
    <p class=\"mb-0 text-muted\">Bienvenue dans l'administration de l'arène e-sport</p>
</div>

<!-- Statistiques -->
<div class=\"row mb-4\">
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(0, 243, 255, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-trophy\" style=\"color: var(--admin-accent); font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_matches", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Matchs total</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(255, 193, 7, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-play-circle\" style=\"color: #ffc107; font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "ongoing_matches", [], "any", false, false, false, 41), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">En cours</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(0, 255, 136, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-flag-checkered\" style=\"color: var(--admin-success); font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "finished_matches", [], "any", false, false, false, 58), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Terminés</small>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"col-md-3\">
        <div class=\"admin-card\">
            <div class=\"d-flex align-items-center\">
                <div class=\"me-3\">
                    <div style=\"width: 50px; height: 50px; background: rgba(157, 0, 255, 0.2); 
                          border-radius: 10px; display: flex; align-items: center; justify-content: center;\">
                        <i class=\"fas fa-users\" style=\"color: #9d00ff; font-size: 1.5rem;\"></i>
                    </div>
                </div>
                <div>
                    <h3 class=\"mb-0\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "teams_count", [], "any", false, false, false, 75), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Équipes</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Matchs récents -->
    <div class=\"col-md-8\">
        <div class=\"admin-card\">
            <div class=\"d-flex justify-content-between align-items-center mb-3\">
                <h5 class=\"mb-0\">Matchs récents</h5>
                <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary btn-sm\">
                    Voir tous
                </a>
            </div>
            
            <div class=\"table-responsive\">
                <table class=\"admin-table\">
                    <thead>
                        <tr>
                            <th>Match</th>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recent_matches"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 106
            yield "                        <tr>
                            <td>
                                <div>
                                    <strong>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "game", [], "any", false, false, false, 109), "html", null, true);
            yield "</strong>
                                    <div class=\"text-muted\" style=\"font-size: 0.85rem;\">
                                        ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, true, false, 111), "name", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team1", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "Éq1")) : ("Éq1")), "html", null, true);
            yield " vs ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, true, false, 111), "name", [], "any", true, true, false, 111)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["match"], "team2", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "Éq2")) : ("Éq2")), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </td>
                            <td>
                                ";
            // line 116
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 117
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "matchDate", [], "any", false, false, false, 117), "d/m H:i"), "html", null, true);
                yield "
                                ";
            } else {
                // line 119
                yield "                                    <span class=\"text-muted\">-</span>
                                ";
            }
            // line 121
            yield "                            </td>
                            <td>
                                ";
            // line 123
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam1", [], "any", false, false, false, 123), "html", null, true)) : (0));
            yield " - ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["match"], "scoreTeam2", [], "any", false, false, false, 123), "html", null, true)) : (0));
            yield "
                            </td>
                            <td>
                                ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["match"], "status", [], "any", false, false, false, 126) == "planned")) {
                // line 127
                yield "                                    <span class=\"badge-admin badge-planned\">Planifié</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 128
$context["match"], "status", [], "any", false, false, false, 128) == "ongoing")) {
                // line 129
                yield "                                    <span class=\"badge-admin badge-ongoing\">En cours</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 130
$context["match"], "status", [], "any", false, false, false, 130) == "finished")) {
                // line 131
                yield "                                    <span class=\"badge-admin badge-finished\">Terminé</span>
                                ";
            }
            // line 133
            yield "                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 135
        if (!$context['_iterated']) {
            // line 136
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center py-3\">
                                <span class=\"text-muted\">Aucun match récent</span>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Actions rapides -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\">Actions rapides</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_new");
        yield "\" class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-plus\"></i> Nouveau match
                </a>
                
                <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_new");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                    <i class=\"fas fa-user-plus\"></i> Nouvelle équipe
                </a>
                
                <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir le site
                </a>
            </div>
        </div>
        
        <!-- Statut système -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\">Statut du système</h5>
            
            <div class=\"mb-3\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Performance</span>
                    <span>98%</span>
                </div>
                <div style=\"height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px;\">
                    <div style=\"width: 98%; height: 100%; background: var(--admin-success); border-radius: 3px;\"></div>
                </div>
            </div>
            
            <div class=\"mb-3\">
                <div class=\"d-flex justify-content-between mb-1\">
                    <span>Stockage</span>
                    <span>65%</span>
                </div>
                <div style=\"height: 5px; background: rgba(255,255,255,0.1); border-radius: 3px;\">
                    <div style=\"width: 65%; height: 100%; background: var(--admin-accent); border-radius: 3px;\"></div>
                </div>
            </div>
            
            <div>
                <div class=\"d-flex align-items-center\">
                    <i class=\"fas fa-circle text-success me-2\" style=\"font-size: 0.7rem;\"></i>
                    <span>Système en ligne</span>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/dashboard/index.html.twig";
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
        return array (  297 => 162,  290 => 158,  283 => 154,  269 => 142,  258 => 136,  256 => 135,  250 => 133,  246 => 131,  244 => 130,  241 => 129,  239 => 128,  236 => 127,  234 => 126,  226 => 123,  222 => 121,  218 => 119,  212 => 117,  210 => 116,  200 => 111,  195 => 109,  190 => 106,  185 => 105,  166 => 89,  149 => 75,  129 => 58,  109 => 41,  89 => 24,  70 => 7,  63 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/dashboard/index.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\dashboard\\index.html.twig");
    }
}
