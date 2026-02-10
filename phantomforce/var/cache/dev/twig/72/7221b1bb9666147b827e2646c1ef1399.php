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

/* coaching_session/meet.html.twig */
class __TwigTemplate_97def2eb0c349b665de67d36cb6d849a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/meet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching_session/meet.html.twig"));

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

        yield "Réunion Coaching - Session #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"meet-container\" style=\"max-width: 1200px; margin: 0 auto; padding: 20px;\">
    <div class=\"meet-header\" style=\"background: linear-gradient(135deg, #ff0000, #ff2d2d); color: white; padding: 20px; border-radius: 10px 10px 0 0; margin-bottom: -1px;\">
        <h1 style=\"margin: 0; font-size: 24px;\">
            <i class=\"fas fa-video\"></i> RÉUNION DE COACHING
        </h1>
        <div style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 10px;\">
            <div>
                <strong>Session #";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</strong> • 
                Coach #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 14, $this->source); })()), "coachId", [], "any", false, false, false, 14), "html", null, true);
        yield " • 
                Équipe #";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 15, $this->source); })()), "teamId", [], "any", false, false, false, 15), "html", null, true);
        yield "
            </div>
            <div>
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" 
                   class=\"btn\" 
                   style=\"background: rgba(255,255,255,0.2); color: white; border: 1px solid rgba(255,255,255,0.3);\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </div>
    </div>
    
    <div id=\"jitsi-container\" style=\"height: 600px; border: 3px solid #ff0000; border-radius: 0 0 10px 10px;\"></div>
    
    <div class=\"session-info\" style=\"background: #f8f9fa; padding: 15px; border-radius: 10px; margin-top: 20px;\">
        <h3 style=\"color: #ff0000; margin-top: 0;\">
            <i class=\"fas fa-info-circle\"></i> Informations de la session
        </h3>
        <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;\">
            <div>
                <strong>Date :</strong><br>
                ";
        // line 36
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 36, $this->source); })()), "sessionDate", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 36, $this->source); })()), "sessionDate", [], "any", false, false, false, 36), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
        yield "
            </div>
            <div>
                <strong>Durée :</strong><br>
                ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 40, $this->source); })()), "duration", [], "any", false, false, false, 40), "html", null, true);
        yield " minutes
            </div>
            <div>
                <strong>Plan d'entraînement :</strong><br>
                ";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 44, $this->source); })()), "trainingPlan", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["coaching_session"]) || array_key_exists("coaching_session", $context) ? $context["coaching_session"] : (function () { throw new RuntimeError('Variable "coaching_session" does not exist.', 45, $this->source); })()), "trainingPlan", [], "any", false, false, false, 45), "title", [], "any", false, false, false, 45), "html", null, true);
            yield "
                ";
        } else {
            // line 47
            yield "                    Aucun plan assigné
                ";
        }
        // line 49
        yield "            </div>
        </div>
    </div>
</div>

<script src=\"https://meet.jit.si/external_api.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const domain = \"meet.jit.si\";
    
    // Configuration pour Jitsi Meet
    const options = {
        roomName: \"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["room_name"]) || array_key_exists("room_name", $context) ? $context["room_name"] : (function () { throw new RuntimeError('Variable "room_name" does not exist.', 61, $this->source); })()), "html", null, true);
        yield "\",
        width: \"100%\",
        height: 600,
        parentNode: document.querySelector('#jitsi-container'),
        userInfo: {
            displayName: \"";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66), "html", null, true);
        } else {
            yield "Invité";
        }
        yield "\",
            email: \"";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "email", [], "any", false, false, false, 67), "html", null, true);
        }
        yield "\"
        },
        interfaceConfigOverwrite: {
            TOOLBAR_BUTTONS: [
                'microphone', 'camera', 'closedcaptions', 'desktop', 'fullscreen',
                'fodeviceselection', 'hangup', 'profile', 'chat', 'recording',
                'livestreaming', 'etherpad', 'sharedvideo', 'settings', 'raisehand',
                'videoquality', 'filmstrip', 'feedback', 'stats', 'shortcuts',
                'tileview', 'videobackgroundblur', 'download', 'help', 'mute-everyone',
                'e2ee'
            ],
            SHOW_JITSI_WATERMARK: false,
            SHOW_WATERMARK_FOR_GUESTS: false,
            DEFAULT_BACKGROUND: '#ff0000',
            DEFAULT_REMOTE_DISPLAY_NAME: 'Participant',
            DEFAULT_LOCAL_DISPLAY_NAME: 'Vous',
            SHOW_CHROME_EXTENSION_BANNER: false
        },
        configOverwrite: {
            disableDeepLinking: true,
            prejoinPageEnabled: false,
            startWithAudioMuted: false,
            startWithVideoMuted: false,
            enableWelcomePage: false,
            enableClosePage: false,
            disableInviteFunctions: true
        }
    };

    try {
        const api = new JitsiMeetExternalAPI(domain, options);
        
        // Événements Jitsi
        api.addEventListener('videoConferenceJoined', () => {
            console.log('Rejoint la conférence');
        });
        
        api.addEventListener('readyToClose', () => {
            window.location.href = \"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\";
        });
        
    } catch (error) {
        console.error('Erreur Jitsi:', error);
        document.getElementById('jitsi-container').innerHTML = `
            <div style=\"text-align: center; padding: 50px; background: #ffebee; border-radius: 10px;\">
                <i class=\"fas fa-exclamation-triangle\" style=\"font-size: 48px; color: #d32f2f;\"></i>
                <h3 style=\"color: #d32f2f;\">Erreur de connexion</h3>
                <p>Impossible de charger la réunion Jitsi. Vérifiez votre connexion internet.</p>
                <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_session_index");
        yield "\" class=\"btn\" style=\"background: #d32f2f; color: white;\">
                    Retour aux sessions
                </a>
            </div>
        `;
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
        return "coaching_session/meet.html.twig";
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
        return array (  257 => 115,  244 => 105,  201 => 67,  193 => 66,  185 => 61,  171 => 49,  167 => 47,  161 => 45,  159 => 44,  152 => 40,  145 => 36,  124 => 18,  118 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réunion Coaching - Session #{{ coaching_session.id }}{% endblock %}

{% block body %}
<div class=\"meet-container\" style=\"max-width: 1200px; margin: 0 auto; padding: 20px;\">
    <div class=\"meet-header\" style=\"background: linear-gradient(135deg, #ff0000, #ff2d2d); color: white; padding: 20px; border-radius: 10px 10px 0 0; margin-bottom: -1px;\">
        <h1 style=\"margin: 0; font-size: 24px;\">
            <i class=\"fas fa-video\"></i> RÉUNION DE COACHING
        </h1>
        <div style=\"display: flex; justify-content: space-between; align-items: center; margin-top: 10px;\">
            <div>
                <strong>Session #{{ coaching_session.id }}</strong> • 
                Coach #{{ coaching_session.coachId }} • 
                Équipe #{{ coaching_session.teamId }}
            </div>
            <div>
                <a href=\"{{ path('app_coaching_session_index') }}\" 
                   class=\"btn\" 
                   style=\"background: rgba(255,255,255,0.2); color: white; border: 1px solid rgba(255,255,255,0.3);\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </div>
    </div>
    
    <div id=\"jitsi-container\" style=\"height: 600px; border: 3px solid #ff0000; border-radius: 0 0 10px 10px;\"></div>
    
    <div class=\"session-info\" style=\"background: #f8f9fa; padding: 15px; border-radius: 10px; margin-top: 20px;\">
        <h3 style=\"color: #ff0000; margin-top: 0;\">
            <i class=\"fas fa-info-circle\"></i> Informations de la session
        </h3>
        <div style=\"display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;\">
            <div>
                <strong>Date :</strong><br>
                {{ coaching_session.sessionDate ? coaching_session.sessionDate|date('d/m/Y H:i') : 'Non définie' }}
            </div>
            <div>
                <strong>Durée :</strong><br>
                {{ coaching_session.duration }} minutes
            </div>
            <div>
                <strong>Plan d'entraînement :</strong><br>
                {% if coaching_session.trainingPlan %}
                    {{ coaching_session.trainingPlan.title }}
                {% else %}
                    Aucun plan assigné
                {% endif %}
            </div>
        </div>
    </div>
</div>

<script src=\"https://meet.jit.si/external_api.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const domain = \"meet.jit.si\";
    
    // Configuration pour Jitsi Meet
    const options = {
        roomName: \"{{ room_name }}\",
        width: \"100%\",
        height: 600,
        parentNode: document.querySelector('#jitsi-container'),
        userInfo: {
            displayName: \"{% if app.user %}{{ app.user.username }}{% else %}Invité{% endif %}\",
            email: \"{% if app.user %}{{ app.user.email }}{% endif %}\"
        },
        interfaceConfigOverwrite: {
            TOOLBAR_BUTTONS: [
                'microphone', 'camera', 'closedcaptions', 'desktop', 'fullscreen',
                'fodeviceselection', 'hangup', 'profile', 'chat', 'recording',
                'livestreaming', 'etherpad', 'sharedvideo', 'settings', 'raisehand',
                'videoquality', 'filmstrip', 'feedback', 'stats', 'shortcuts',
                'tileview', 'videobackgroundblur', 'download', 'help', 'mute-everyone',
                'e2ee'
            ],
            SHOW_JITSI_WATERMARK: false,
            SHOW_WATERMARK_FOR_GUESTS: false,
            DEFAULT_BACKGROUND: '#ff0000',
            DEFAULT_REMOTE_DISPLAY_NAME: 'Participant',
            DEFAULT_LOCAL_DISPLAY_NAME: 'Vous',
            SHOW_CHROME_EXTENSION_BANNER: false
        },
        configOverwrite: {
            disableDeepLinking: true,
            prejoinPageEnabled: false,
            startWithAudioMuted: false,
            startWithVideoMuted: false,
            enableWelcomePage: false,
            enableClosePage: false,
            disableInviteFunctions: true
        }
    };

    try {
        const api = new JitsiMeetExternalAPI(domain, options);
        
        // Événements Jitsi
        api.addEventListener('videoConferenceJoined', () => {
            console.log('Rejoint la conférence');
        });
        
        api.addEventListener('readyToClose', () => {
            window.location.href = \"{{ path('app_coaching_session_index') }}\";
        });
        
    } catch (error) {
        console.error('Erreur Jitsi:', error);
        document.getElementById('jitsi-container').innerHTML = `
            <div style=\"text-align: center; padding: 50px; background: #ffebee; border-radius: 10px;\">
                <i class=\"fas fa-exclamation-triangle\" style=\"font-size: 48px; color: #d32f2f;\"></i>
                <h3 style=\"color: #d32f2f;\">Erreur de connexion</h3>
                <p>Impossible de charger la réunion Jitsi. Vérifiez votre connexion internet.</p>
                <a href=\"{{ path('app_coaching_session_index') }}\" class=\"btn\" style=\"background: #d32f2f; color: white;\">
                    Retour aux sessions
                </a>
            </div>
        `;
    }
});
</script>
{% endblock %}", "coaching_session/meet.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\coaching_session\\meet.html.twig");
    }
}
