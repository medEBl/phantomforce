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

/* back/matchy/show.html.twig */
class __TwigTemplate_1f31c693d594e0d647c8671ca6626f2f extends Template
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
        yield "🎮 Admin - Match #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 4), "html", null, true);
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
    <div class=\"d-flex justify-content-between align-items-center\">
        <div>
            <h1 class=\"h3 mb-2\">Détails du match</h1>
            <p class=\"mb-0 text-muted\">Match #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "game", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        </div>
        <div>
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_index");
        yield "\" class=\"btn-admin btn-admin-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour
            </a>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Informations principales -->
    <div class=\"col-md-8\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-info-circle me-2\"></i>Informations du match</h5>
            
            <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Jeu</label>
                    <p class=\"h5\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "game", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Date du match</label>
                    <p class=\"h5\">
                        ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "matchDate", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "matchDate", [], "any", false, false, false, 37), "d/m/Y à H:i"), "html", null, true);
            yield "
                        ";
        } else {
            // line 39
            yield "                            <span class=\"text-muted\">Non définie</span>
                        ";
        }
        // line 41
        yield "                    </p>
                </div>
                
                <div class=\"col-md-6 mb-3\">
                    <label class=\"text-muted\">Statut</label>
                    <p>
                        ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "status", [], "any", false, false, false, 47) == "planned")) {
            // line 48
            yield "                            <span class=\"badge-admin badge-planned\">Planifié</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["matchy"] ?? null), "status", [], "any", false, false, false, 49) == "ongoing")) {
            // line 50
            yield "                            <span class=\"badge-admin badge-ongoing\">En cours</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["matchy"] ?? null), "status", [], "any", false, false, false, 51) == "finished")) {
            // line 52
            yield "                            <span class=\"badge-admin badge-finished\">Terminé</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["matchy"] ?? null), "status", [], "any", false, false, false, 53) == "cancelled")) {
            // line 54
            yield "                            <span class=\"badge-admin badge-cancelled\">Annulé</span>
                        ";
        }
        // line 56
        yield "                    </p>
                </div>
            </div>
        </div>
        
        <!-- Scores -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-chart-bar me-2\"></i>Scores</h5>
            
            <div class=\"row text-center\">
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 68), "name", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "Équipe 1")) : ("Équipe 1")), "html", null, true);
        yield "</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            ";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam1", [], "any", false, false, false, 70), "html", null, true)) : ("0"));
        yield "
                        </div>
                        ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "winnerTeam", [], "any", false, false, false, 72) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "winnerTeam", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)))) {
            // line 73
            yield "                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        ";
        }
        // line 79
        yield "                    </div>
                </div>
                
                <div class=\"col-md-2 d-flex align-items-center justify-content-center\">
                    <div class=\"display-5\">VS</div>
                </div>
                
                <div class=\"col-md-5\">
                    <div class=\"py-3\">
                        <h3 class=\"mb-2\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 88), "name", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "Équipe 2")) : ("Équipe 2")), "html", null, true);
        yield "</h3>
                        <div class=\"display-4\" style=\"color: var(--admin-accent);\">
                            ";
        // line 90
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", true, true, false, 90) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", false, false, false, 90)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "scoreTeam2", [], "any", false, false, false, 90), "html", null, true)) : ("0"));
        yield "
                        </div>
                        ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "winnerTeam", [], "any", false, false, false, 92) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "winnerTeam", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)))) {
            // line 93
            yield "                            <div class=\"mt-2\">
                                <span class=\"badge-admin badge-finished\">
                                    <i class=\"fas fa-crown\"></i> GAGNANT
                                </span>
                            </div>
                        ";
        }
        // line 99
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class=\"col-md-4\">
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-cogs me-2\"></i>Actions</h5>
            
            <div class=\"d-grid gap-2\">
                <a href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 111)]), "html", null, true);
        yield "\" 
                   class=\"btn-admin btn-admin-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier ce match
                </a>
                
                <a href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 116)]), "html", null, true);
        yield "\" 
                   class=\"btn-admin btn-admin-secondary\" target=\"_blank\">
                    <i class=\"fas fa-external-link-alt\"></i> Voir sur le site
                </a>
                
                <hr class=\"my-2\">
                
                <form method=\"post\" action=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_matchy_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 123)]), "html", null, true);
        yield "\" 
                      onsubmit=\"return confirm('Supprimer définitivement ce match ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "id", [], "any", false, false, false, 125))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn-admin btn-admin-danger w-100\">
                        <i class=\"fas fa-trash\"></i> Supprimer ce match
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Équipes -->
        <div class=\"admin-card\">
            <h5 class=\"mb-3\"><i class=\"fas fa-users me-2\"></i>Équipes</h5>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 1</label>
                <p class=\"mb-1\">
                    <strong>";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, true, false, 140), "name", [], "any", true, true, false, 140)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong>
                </p>
                ";
        // line 142
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 142) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 142), "game", [], "any", false, false, false, 142))) {
            // line 143
            yield "                    <small class=\"text-muted\">Jeu: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team1", [], "any", false, false, false, 143), "game", [], "any", false, false, false, 143), "html", null, true);
            yield "</small>
                ";
        }
        // line 145
        yield "            </div>
            
            <div class=\"mb-3\">
                <label class=\"text-muted\">Équipe 2</label>
                <p class=\"mb-1\">
                    <strong>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, true, false, 150), "name", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150), "N/A")) : ("N/A")), "html", null, true);
        yield "</strong>
                </p>
                ";
        // line 152
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 152) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 152), "game", [], "any", false, false, false, 152))) {
            // line 153
            yield "                    <small class=\"text-muted\">Jeu: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "team2", [], "any", false, false, false, 153), "game", [], "any", false, false, false, 153), "html", null, true);
            yield "</small>
                ";
        }
        // line 155
        yield "            </div>
            
            ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "winnerTeam", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "                <div class=\"alert\" style=\"background: rgba(0, 255, 136, 0.1); border-color: var(--admin-success);\">
                    <i class=\"fas fa-crown me-2\"></i>
                    <strong>Gagnant:</strong> ";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["matchy"] ?? null), "winnerTeam", [], "any", false, false, false, 160), "name", [], "any", false, false, false, 160), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 163
        yield "        </div>
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
        return "back/matchy/show.html.twig";
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
        return array (  323 => 163,  317 => 160,  313 => 158,  311 => 157,  307 => 155,  301 => 153,  299 => 152,  294 => 150,  287 => 145,  281 => 143,  279 => 142,  274 => 140,  256 => 125,  251 => 123,  241 => 116,  233 => 111,  219 => 99,  211 => 93,  209 => 92,  204 => 90,  199 => 88,  188 => 79,  180 => 73,  178 => 72,  173 => 70,  168 => 68,  154 => 56,  150 => 54,  148 => 53,  145 => 52,  143 => 51,  140 => 50,  138 => 49,  135 => 48,  133 => 47,  125 => 41,  121 => 39,  115 => 37,  113 => 36,  104 => 30,  85 => 14,  77 => 11,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/matchy/show.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\back\\matchy\\show.html.twig");
    }
}
