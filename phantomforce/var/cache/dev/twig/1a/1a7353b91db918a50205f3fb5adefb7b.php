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

/* front/matchy/ai_generate.html.twig */
class __TwigTemplate_db07f7bbb65ba57bbc44a11bd29dac01 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/ai_generate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/matchy/ai_generate.html.twig"));

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

        yield "🎨 Génération d'Image IA - Matchs E-sport";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .ai-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    .ai-header {
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem;
        background: linear-gradient(135deg, rgba(255,0,0,0.2), rgba(0,0,0,0.8));
        border-radius: 20px;
        border: 2px solid var(--blood-red);
    }
    
    .ai-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        background: linear-gradient(45deg, #00dcff, #ff00ff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1rem;
    }
    
    .generator-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }
    
    @media (max-width: 992px) {
        .generator-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .prompt-section {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 2rem;
        border: 1px solid rgba(0, 220, 255, 0.3);
    }
    
    .preview-section {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 2rem;
        border: 1px solid rgba(255, 0, 255, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 500px;
    }
    
    .ai-form .form-group {
        margin-bottom: 1.5rem;
    }
    
    .ai-form label {
        display: block;
        color: var(--fire-red);
        margin-bottom: 0.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
    }
    
    .ai-form textarea,
    .ai-form input,
    .ai-form select {
        width: 100%;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
    }
    
    .ai-form textarea {
        min-height: 150px;
        resize: vertical;
    }
    
    .generate-btn {
        background: linear-gradient(45deg, #00dcff, #ff00ff);
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 10px;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 1rem;
    }
    
    .generate-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 220, 255, 0.4);
    }
    
    .generate-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .image-preview {
        max-width: 100%;
        max-height: 400px;
        border-radius: 10px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        display: none;
    }
    
    .loading-animation {
        display: none;
        text-align: center;
    }
    
    .loading-spinner {
        width: 50px;
        height: 50px;
        border: 5px solid rgba(0, 220, 255, 0.3);
        border-top: 5px solid #00dcff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 1rem;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .result-info {
        margin-top: 1rem;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
    }
    
    .prompt-examples {
        background: rgba(0, 0, 0, 0.5);
        padding: 1rem;
        border-radius: 8px;
        margin-top: 2rem;
        border-left: 3px solid #ff00ff;
    }
    
    .example-item {
        padding: 0.5rem;
        margin-bottom: 0.5rem;
        cursor: pointer;
        border-radius: 5px;
        transition: background 0.3s;
    }
    
    .example-item:hover {
        background: rgba(255, 0, 255, 0.1);
    }
    
    .example-category {
        color: #00dcff;
        font-size: 0.9rem;
        margin-bottom: 0.2rem;
    }
    
    .example-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
    }
    
    .actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        justify-content: center;
    }
    
    .action-btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        border: none;
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
    
    .download-btn {
        background: linear-gradient(45deg, #28a745, #20c997);
        color: white;
    }
    
    .new-btn {
        background: linear-gradient(45deg, #ff00ff, #00dcff);
        color: white;
    }
    
    .back-btn {
        background: linear-gradient(45deg, #6c757d, #495057);
        color: white;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 222
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

        // line 223
        yield "<div class=\"ai-container\">
    <div class=\"ai-header\">
        <h1 class=\"ai-title\">🎨 GÉNÉRATEUR D'IMAGE IA</h1>
        <p style=\"color: rgba(255, 255, 255, 0.8);\">
            Créez des images épiques pour vos matchs avec l'IA Stable Diffusion
        </p>
    </div>
    
    <div class=\"generator-grid\">
        <!-- Section de prompt -->
        <div class=\"prompt-section\">
            <h2 style=\"color: #00dcff; margin-bottom: 1.5rem;\">📝 PROMPT DE GÉNÉRATION</h2>
            
            <form class=\"ai-form\" id=\"aiGeneratorForm\">
                <div class=\"form-group\">
                    <label for=\"prompt\">Description détaillée :</label>
                    <textarea id=\"prompt\" name=\"prompt\" placeholder=\"Décrivez l'image que vous voulez générer... Ex: 'epic e-sports battle, dynamic action, cinematic lighting, professional gamers, tournament atmosphere'\"></textarea>
                </div>
                
                <div class=\"form-group\">
                    <label for=\"negative_prompt\">À éviter :</label>
                    <input type=\"text\" id=\"negative_prompt\" name=\"negative_prompt\" value=\"blurry, ugly, bad anatomy, text, watermark, signature\">
                </div>
                
                <div class=\"form-grid\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;\">
                    <div class=\"form-group\">
                        <label for=\"width\">Largeur :</label>
                        <select id=\"width\" name=\"width\">
                            <option value=\"512\">512px</option>
                            <option value=\"768\" selected>768px</option>
                            <option value=\"1024\">1024px</option>
                        </select>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"height\">Hauteur :</label>
                        <select id=\"height\" name=\"height\">
                            <option value=\"512\">512px</option>
                            <option value=\"768\" selected>768px</option>
                            <option value=\"1024\">1024px</option>
                        </select>
                    </div>
                </div>
                
                <div class=\"form-grid\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;\">
                    <div class=\"form-group\">
                        <label for=\"steps\">Étapes :</label>
                        <select id=\"steps\" name=\"steps\">
                            <option value=\"20\">20 (rapide)</option>
                            <option value=\"30\" selected>30 (standard)</option>
                            <option value=\"50\">50 (qualité)</option>
                        </select>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"guidance_scale\">Créativité :</label>
                        <select id=\"guidance_scale\" name=\"guidance_scale\">
                            <option value=\"5\">5 (libre)</option>
                            <option value=\"7.5\" selected>7.5 (standard)</option>
                            <option value=\"10\">10 (précis)</option>
                        </select>
                    </div>
                </div>
                
                <button type=\"submit\" class=\"generate-btn\" id=\"generateBtn\">
                    ⚡ GÉNÉRER L'IMAGE
                </button>
            </form>
            
            <div class=\"prompt-examples\">
                <h4 style=\"color: #ff00ff; margin-bottom: 1rem;\">💡 Exemples de prompts</h4>
                <div class=\"example-item\" onclick=\"document.getElementById('prompt').value = 'epic e-sports final match, intense battle between two teams, dramatic lighting, stadium audience cheering, cinematic shot, hyperrealistic, 8K resolution'\">
                    <div class=\"example-category\">🏆 Finale E-sport</div>
                    <div class=\"example-text\">Finale épique, public en liesse, éclairage dramatique</div>
                </div>
                <div class=\"example-item\" onclick=\"document.getElementById('prompt').value = 'cyberpunk gaming tournament, neon lights, holographic displays, futuristic arena, rain effects, blade runner aesthetic, digital art'\">
                    <div class=\"example-category\">🌃 Cyberpunk</div>
                    <div class=\"example-text\">Tournoi cyberpunk, néons, ambiance futuriste</div>
                </div>
                <div class=\"example-item\" onclick=\"document.getElementById('prompt').value = 'fantasy MOBA battle, magical spells, epic teamfight, vibrant colors, dynamic composition, digital painting, concept art style'\">
                    <div class=\"example-category\">✨ Fantasy</div>
                    <div class=\"example-text\">Combat MOBA fantasy, sorts magiques, couleurs vives</div>
                </div>
            </div>
        </div>
        
        <!-- Section de prévisualisation -->
        <div class=\"preview-section\">
            <h2 style=\"color: #ff00ff; margin-bottom: 1.5rem;\">🖼️ PRÉVISUALISATION</h2>
            
            <div class=\"loading-animation\" id=\"loadingAnimation\">
                <div class=\"loading-spinner\"></div>
                <p style=\"color: #00dcff;\">Génération en cours...</p>
                <p style=\"color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;\">
                    Cela peut prendre 30 à 60 secondes
                </p>
            </div>
            
            <img id=\"generatedImage\" class=\"image-preview\" alt=\"Image générée par IA\">
            
            <div id=\"defaultMessage\" style=\"text-align: center; color: rgba(255, 255, 255, 0.5);\">
                <p style=\"font-size: 5rem; margin-bottom: 1rem;\">🎨</p>
                <p>Votre image apparaîtra ici</p>
                <p style=\"font-size: 0.9rem; margin-top: 0.5rem;\">
                    Entrez un prompt et cliquez sur \"Générer\"
                </p>
            </div>
            
            <div class=\"result-info\" id=\"resultInfo\" style=\"display: none;\">
                <p id=\"generatedPrompt\" style=\"color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;\"></p>
                <p id=\"generationTime\" style=\"color: #00dcff; font-size: 0.8rem;\"></p>
            </div>
            
            <div class=\"actions\" id=\"actionButtons\" style=\"display: none;\">
                <a href=\"#\" id=\"downloadLink\" class=\"action-btn download-btn\" download>
                    💾 Télécharger
                </a>
                <button onclick=\"resetGenerator()\" class=\"action-btn new-btn\">
                    🔄 Nouvelle Génération
                </button>
            </div>
        </div>
    </div>
    
    <div class=\"actions\" style=\"margin-top: 3rem;\">
        <a href=\"";
        // line 348
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_index");
        yield "\" class=\"action-btn back-btn\">
            ← Retour aux Matchs
        </a>
        <a href=\"";
        // line 351
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_ai_prompts");
        yield "\" class=\"action-btn\" style=\"background: linear-gradient(45deg, #6f42c1, #5a32a3); color: white;\">
            💡 Voir plus de prompts
        </a>
        <a href=\"";
        // line 354
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_matchy_ai_settings");
        yield "\" class=\"action-btn\" style=\"background: linear-gradient(45deg, #17a2b8, #138496); color: white;\">
            ⚙️ Paramètres IA
        </a>
    </div>
</div>

<script>
    const form = document.getElementById('aiGeneratorForm');
    const generateBtn = document.getElementById('generateBtn');
    const loadingAnimation = document.getElementById('loadingAnimation');
    const generatedImage = document.getElementById('generatedImage');
    const defaultMessage = document.getElementById('defaultMessage');
    const resultInfo = document.getElementById('resultInfo');
    const actionButtons = document.getElementById('actionButtons');
    const generatedPrompt = document.getElementById('generatedPrompt');
    const generationTime = document.getElementById('generatedTime');
    const downloadLink = document.getElementById('downloadLink');
    
    let generationStartTime;
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        
        // Afficher l'animation de chargement
        loadingAnimation.style.display = 'block';
        generatedImage.style.display = 'none';
        defaultMessage.style.display = 'none';
        resultInfo.style.display = 'none';
        actionButtons.style.display = 'none';
        generateBtn.disabled = true;
        generateBtn.textContent = 'GÉNÉRATION EN COURS...';
        
        generationStartTime = Date.now();
        
        try {
            const response = await fetch('";
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ai_generate_image");
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });
            
            const result = await response.json();
            
            if (result.success) {
                // Afficher l'image générée
                generatedImage.src = result.image_url;
                generatedImage.style.display = 'block';
                
                // Mettre à jour les infos
                generatedPrompt.textContent = `Prompt: \${result.prompt}`;
                const timeTaken = ((Date.now() - generationStartTime) / 1000).toFixed(1);
                generationTime.textContent = `Généré en \${timeTaken} secondes`;
                
                // Configurer le lien de téléchargement
                downloadLink.href = result.image_url;
                
                // Afficher les éléments
                resultInfo.style.display = 'block';
                actionButtons.style.display = 'flex';
                defaultMessage.style.display = 'none';
                
                // Notification de succès
                showNotification('✅ Image générée avec succès!', 'success');
            } else {
                // Afficher l'erreur
                defaultMessage.innerHTML = `
                    <p style=\"font-size: 3rem; margin-bottom: 1rem;\">❌</p>
                    <p style=\"color: var(--fire-red);\">Erreur de génération</p>
                    <p style=\"font-size: 0.9rem; color: rgba(255, 255, 255, 0.6);\">
                        \${result.error || 'Une erreur est survenue'}
                    </p>
                `;
                defaultMessage.style.display = 'block';
                
                if (result.error && result.error.includes('Token')) {
                    showNotification('⚠️ Configurez votre token Hugging Face', 'error');
                }
            }
        } catch (error) {
            console.error('Error:', error);
            defaultMessage.innerHTML = `
                <p style=\"font-size: 3rem; margin-bottom: 1rem;\">⚠️</p>
                <p style=\"color: var(--fire-red);\">Erreur réseau</p>
                <p style=\"font-size: 0.9rem; color: rgba(255, 255, 255, 0.6);\">
                    Vérifiez votre connexion internet
                </p>
            `;
            defaultMessage.style.display = 'block';
            showNotification('❌ Erreur de connexion', 'error');
        } finally {
            // Masquer l'animation de chargement
            loadingAnimation.style.display = 'none';
            generateBtn.disabled = false;
            generateBtn.textContent = '⚡ GÉNÉRER L\\'IMAGE';
        }
    });
    
    function resetGenerator() {
        form.reset();
        generatedImage.style.display = 'none';
        defaultMessage.style.display = 'block';
        resultInfo.style.display = 'none';
        actionButtons.style.display = 'none';
    }
    
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.style.position = 'fixed';
        notification.style.top = '20px';
        notification.style.right = '20px';
        notification.style.padding = '1rem 1.5rem';
        notification.style.borderRadius = '8px';
        notification.style.color = 'white';
        notification.style.fontFamily = \"'Rajdhani', sans-serif\";
        notification.style.fontWeight = '600';
        notification.style.zIndex = '9999';
        notification.style.boxShadow = '0 5px 15px rgba(0,0,0,0.3)';
        notification.style.transition = 'transform 0.3s, opacity 0.3s';
        
        if (type === 'success') {
            notification.style.background = 'linear-gradient(45deg, #28a745, #20c997)';
        } else {
            notification.style.background = 'linear-gradient(45deg, #dc3545, #c82333)';
        }
        
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 10);
        
        // Supprimer après 3 secondes
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
    
    // Exemple de prompt pour les matchs
    document.addEventListener('DOMContentLoaded', function() {
        // Remplir avec un exemple intéressant
        const examplePrompt = \"epic e-sports tournament final, professional gamers in intense battle, dramatic cinematic lighting, stadium filled with cheering audience, victory moment, hyperrealistic, 8K resolution, Unreal Engine 5, trending on ArtStation\";
        document.getElementById('prompt').value = examplePrompt;
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
        return "front/matchy/ai_generate.html.twig";
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
        return array (  520 => 392,  479 => 354,  473 => 351,  467 => 348,  340 => 223,  327 => 222,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}🎨 Génération d'Image IA - Matchs E-sport{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .ai-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    .ai-header {
        text-align: center;
        margin-bottom: 3rem;
        padding: 2rem;
        background: linear-gradient(135deg, rgba(255,0,0,0.2), rgba(0,0,0,0.8));
        border-radius: 20px;
        border: 2px solid var(--blood-red);
    }
    
    .ai-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        background: linear-gradient(45deg, #00dcff, #ff00ff);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1rem;
    }
    
    .generator-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }
    
    @media (max-width: 992px) {
        .generator-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .prompt-section {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 2rem;
        border: 1px solid rgba(0, 220, 255, 0.3);
    }
    
    .preview-section {
        background: rgba(26, 0, 0, 0.9);
        border-radius: 15px;
        padding: 2rem;
        border: 1px solid rgba(255, 0, 255, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 500px;
    }
    
    .ai-form .form-group {
        margin-bottom: 1.5rem;
    }
    
    .ai-form label {
        display: block;
        color: var(--fire-red);
        margin-bottom: 0.5rem;
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
    }
    
    .ai-form textarea,
    .ai-form input,
    .ai-form select {
        width: 100%;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid var(--blood-red);
        border-radius: 8px;
        color: white;
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
    }
    
    .ai-form textarea {
        min-height: 150px;
        resize: vertical;
    }
    
    .generate-btn {
        background: linear-gradient(45deg, #00dcff, #ff00ff);
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 10px;
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 1rem;
    }
    
    .generate-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 220, 255, 0.4);
    }
    
    .generate-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .image-preview {
        max-width: 100%;
        max-height: 400px;
        border-radius: 10px;
        border: 2px solid rgba(255, 255, 255, 0.1);
        display: none;
    }
    
    .loading-animation {
        display: none;
        text-align: center;
    }
    
    .loading-spinner {
        width: 50px;
        height: 50px;
        border: 5px solid rgba(0, 220, 255, 0.3);
        border-top: 5px solid #00dcff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 1rem;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .result-info {
        margin-top: 1rem;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
    }
    
    .prompt-examples {
        background: rgba(0, 0, 0, 0.5);
        padding: 1rem;
        border-radius: 8px;
        margin-top: 2rem;
        border-left: 3px solid #ff00ff;
    }
    
    .example-item {
        padding: 0.5rem;
        margin-bottom: 0.5rem;
        cursor: pointer;
        border-radius: 5px;
        transition: background 0.3s;
    }
    
    .example-item:hover {
        background: rgba(255, 0, 255, 0.1);
    }
    
    .example-category {
        color: #00dcff;
        font-size: 0.9rem;
        margin-bottom: 0.2rem;
    }
    
    .example-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.9rem;
    }
    
    .actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        justify-content: center;
    }
    
    .action-btn {
        padding: 0.8rem 1.5rem;
        border-radius: 8px;
        border: none;
        font-family: 'Orbitron', sans-serif;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
    
    .download-btn {
        background: linear-gradient(45deg, #28a745, #20c997);
        color: white;
    }
    
    .new-btn {
        background: linear-gradient(45deg, #ff00ff, #00dcff);
        color: white;
    }
    
    .back-btn {
        background: linear-gradient(45deg, #6c757d, #495057);
        color: white;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"ai-container\">
    <div class=\"ai-header\">
        <h1 class=\"ai-title\">🎨 GÉNÉRATEUR D'IMAGE IA</h1>
        <p style=\"color: rgba(255, 255, 255, 0.8);\">
            Créez des images épiques pour vos matchs avec l'IA Stable Diffusion
        </p>
    </div>
    
    <div class=\"generator-grid\">
        <!-- Section de prompt -->
        <div class=\"prompt-section\">
            <h2 style=\"color: #00dcff; margin-bottom: 1.5rem;\">📝 PROMPT DE GÉNÉRATION</h2>
            
            <form class=\"ai-form\" id=\"aiGeneratorForm\">
                <div class=\"form-group\">
                    <label for=\"prompt\">Description détaillée :</label>
                    <textarea id=\"prompt\" name=\"prompt\" placeholder=\"Décrivez l'image que vous voulez générer... Ex: 'epic e-sports battle, dynamic action, cinematic lighting, professional gamers, tournament atmosphere'\"></textarea>
                </div>
                
                <div class=\"form-group\">
                    <label for=\"negative_prompt\">À éviter :</label>
                    <input type=\"text\" id=\"negative_prompt\" name=\"negative_prompt\" value=\"blurry, ugly, bad anatomy, text, watermark, signature\">
                </div>
                
                <div class=\"form-grid\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;\">
                    <div class=\"form-group\">
                        <label for=\"width\">Largeur :</label>
                        <select id=\"width\" name=\"width\">
                            <option value=\"512\">512px</option>
                            <option value=\"768\" selected>768px</option>
                            <option value=\"1024\">1024px</option>
                        </select>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"height\">Hauteur :</label>
                        <select id=\"height\" name=\"height\">
                            <option value=\"512\">512px</option>
                            <option value=\"768\" selected>768px</option>
                            <option value=\"1024\">1024px</option>
                        </select>
                    </div>
                </div>
                
                <div class=\"form-grid\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;\">
                    <div class=\"form-group\">
                        <label for=\"steps\">Étapes :</label>
                        <select id=\"steps\" name=\"steps\">
                            <option value=\"20\">20 (rapide)</option>
                            <option value=\"30\" selected>30 (standard)</option>
                            <option value=\"50\">50 (qualité)</option>
                        </select>
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"guidance_scale\">Créativité :</label>
                        <select id=\"guidance_scale\" name=\"guidance_scale\">
                            <option value=\"5\">5 (libre)</option>
                            <option value=\"7.5\" selected>7.5 (standard)</option>
                            <option value=\"10\">10 (précis)</option>
                        </select>
                    </div>
                </div>
                
                <button type=\"submit\" class=\"generate-btn\" id=\"generateBtn\">
                    ⚡ GÉNÉRER L'IMAGE
                </button>
            </form>
            
            <div class=\"prompt-examples\">
                <h4 style=\"color: #ff00ff; margin-bottom: 1rem;\">💡 Exemples de prompts</h4>
                <div class=\"example-item\" onclick=\"document.getElementById('prompt').value = 'epic e-sports final match, intense battle between two teams, dramatic lighting, stadium audience cheering, cinematic shot, hyperrealistic, 8K resolution'\">
                    <div class=\"example-category\">🏆 Finale E-sport</div>
                    <div class=\"example-text\">Finale épique, public en liesse, éclairage dramatique</div>
                </div>
                <div class=\"example-item\" onclick=\"document.getElementById('prompt').value = 'cyberpunk gaming tournament, neon lights, holographic displays, futuristic arena, rain effects, blade runner aesthetic, digital art'\">
                    <div class=\"example-category\">🌃 Cyberpunk</div>
                    <div class=\"example-text\">Tournoi cyberpunk, néons, ambiance futuriste</div>
                </div>
                <div class=\"example-item\" onclick=\"document.getElementById('prompt').value = 'fantasy MOBA battle, magical spells, epic teamfight, vibrant colors, dynamic composition, digital painting, concept art style'\">
                    <div class=\"example-category\">✨ Fantasy</div>
                    <div class=\"example-text\">Combat MOBA fantasy, sorts magiques, couleurs vives</div>
                </div>
            </div>
        </div>
        
        <!-- Section de prévisualisation -->
        <div class=\"preview-section\">
            <h2 style=\"color: #ff00ff; margin-bottom: 1.5rem;\">🖼️ PRÉVISUALISATION</h2>
            
            <div class=\"loading-animation\" id=\"loadingAnimation\">
                <div class=\"loading-spinner\"></div>
                <p style=\"color: #00dcff;\">Génération en cours...</p>
                <p style=\"color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;\">
                    Cela peut prendre 30 à 60 secondes
                </p>
            </div>
            
            <img id=\"generatedImage\" class=\"image-preview\" alt=\"Image générée par IA\">
            
            <div id=\"defaultMessage\" style=\"text-align: center; color: rgba(255, 255, 255, 0.5);\">
                <p style=\"font-size: 5rem; margin-bottom: 1rem;\">🎨</p>
                <p>Votre image apparaîtra ici</p>
                <p style=\"font-size: 0.9rem; margin-top: 0.5rem;\">
                    Entrez un prompt et cliquez sur \"Générer\"
                </p>
            </div>
            
            <div class=\"result-info\" id=\"resultInfo\" style=\"display: none;\">
                <p id=\"generatedPrompt\" style=\"color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;\"></p>
                <p id=\"generationTime\" style=\"color: #00dcff; font-size: 0.8rem;\"></p>
            </div>
            
            <div class=\"actions\" id=\"actionButtons\" style=\"display: none;\">
                <a href=\"#\" id=\"downloadLink\" class=\"action-btn download-btn\" download>
                    💾 Télécharger
                </a>
                <button onclick=\"resetGenerator()\" class=\"action-btn new-btn\">
                    🔄 Nouvelle Génération
                </button>
            </div>
        </div>
    </div>
    
    <div class=\"actions\" style=\"margin-top: 3rem;\">
        <a href=\"{{ path('app_matchy_index') }}\" class=\"action-btn back-btn\">
            ← Retour aux Matchs
        </a>
        <a href=\"{{ path('app_matchy_ai_prompts') }}\" class=\"action-btn\" style=\"background: linear-gradient(45deg, #6f42c1, #5a32a3); color: white;\">
            💡 Voir plus de prompts
        </a>
        <a href=\"{{ path('app_matchy_ai_settings') }}\" class=\"action-btn\" style=\"background: linear-gradient(45deg, #17a2b8, #138496); color: white;\">
            ⚙️ Paramètres IA
        </a>
    </div>
</div>

<script>
    const form = document.getElementById('aiGeneratorForm');
    const generateBtn = document.getElementById('generateBtn');
    const loadingAnimation = document.getElementById('loadingAnimation');
    const generatedImage = document.getElementById('generatedImage');
    const defaultMessage = document.getElementById('defaultMessage');
    const resultInfo = document.getElementById('resultInfo');
    const actionButtons = document.getElementById('actionButtons');
    const generatedPrompt = document.getElementById('generatedPrompt');
    const generationTime = document.getElementById('generatedTime');
    const downloadLink = document.getElementById('downloadLink');
    
    let generationStartTime;
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        
        // Afficher l'animation de chargement
        loadingAnimation.style.display = 'block';
        generatedImage.style.display = 'none';
        defaultMessage.style.display = 'none';
        resultInfo.style.display = 'none';
        actionButtons.style.display = 'none';
        generateBtn.disabled = true;
        generateBtn.textContent = 'GÉNÉRATION EN COURS...';
        
        generationStartTime = Date.now();
        
        try {
            const response = await fetch('{{ path('app_ai_generate_image') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });
            
            const result = await response.json();
            
            if (result.success) {
                // Afficher l'image générée
                generatedImage.src = result.image_url;
                generatedImage.style.display = 'block';
                
                // Mettre à jour les infos
                generatedPrompt.textContent = `Prompt: \${result.prompt}`;
                const timeTaken = ((Date.now() - generationStartTime) / 1000).toFixed(1);
                generationTime.textContent = `Généré en \${timeTaken} secondes`;
                
                // Configurer le lien de téléchargement
                downloadLink.href = result.image_url;
                
                // Afficher les éléments
                resultInfo.style.display = 'block';
                actionButtons.style.display = 'flex';
                defaultMessage.style.display = 'none';
                
                // Notification de succès
                showNotification('✅ Image générée avec succès!', 'success');
            } else {
                // Afficher l'erreur
                defaultMessage.innerHTML = `
                    <p style=\"font-size: 3rem; margin-bottom: 1rem;\">❌</p>
                    <p style=\"color: var(--fire-red);\">Erreur de génération</p>
                    <p style=\"font-size: 0.9rem; color: rgba(255, 255, 255, 0.6);\">
                        \${result.error || 'Une erreur est survenue'}
                    </p>
                `;
                defaultMessage.style.display = 'block';
                
                if (result.error && result.error.includes('Token')) {
                    showNotification('⚠️ Configurez votre token Hugging Face', 'error');
                }
            }
        } catch (error) {
            console.error('Error:', error);
            defaultMessage.innerHTML = `
                <p style=\"font-size: 3rem; margin-bottom: 1rem;\">⚠️</p>
                <p style=\"color: var(--fire-red);\">Erreur réseau</p>
                <p style=\"font-size: 0.9rem; color: rgba(255, 255, 255, 0.6);\">
                    Vérifiez votre connexion internet
                </p>
            `;
            defaultMessage.style.display = 'block';
            showNotification('❌ Erreur de connexion', 'error');
        } finally {
            // Masquer l'animation de chargement
            loadingAnimation.style.display = 'none';
            generateBtn.disabled = false;
            generateBtn.textContent = '⚡ GÉNÉRER L\\'IMAGE';
        }
    });
    
    function resetGenerator() {
        form.reset();
        generatedImage.style.display = 'none';
        defaultMessage.style.display = 'block';
        resultInfo.style.display = 'none';
        actionButtons.style.display = 'none';
    }
    
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.style.position = 'fixed';
        notification.style.top = '20px';
        notification.style.right = '20px';
        notification.style.padding = '1rem 1.5rem';
        notification.style.borderRadius = '8px';
        notification.style.color = 'white';
        notification.style.fontFamily = \"'Rajdhani', sans-serif\";
        notification.style.fontWeight = '600';
        notification.style.zIndex = '9999';
        notification.style.boxShadow = '0 5px 15px rgba(0,0,0,0.3)';
        notification.style.transition = 'transform 0.3s, opacity 0.3s';
        
        if (type === 'success') {
            notification.style.background = 'linear-gradient(45deg, #28a745, #20c997)';
        } else {
            notification.style.background = 'linear-gradient(45deg, #dc3545, #c82333)';
        }
        
        notification.textContent = message;
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 10);
        
        // Supprimer après 3 secondes
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
    
    // Exemple de prompt pour les matchs
    document.addEventListener('DOMContentLoaded', function() {
        // Remplir avec un exemple intéressant
        const examplePrompt = \"epic e-sports tournament final, professional gamers in intense battle, dramatic cinematic lighting, stadium filled with cheering audience, victory moment, hyperrealistic, 8K resolution, Unreal Engine 5, trending on ArtStation\";
        document.getElementById('prompt').value = examplePrompt;
    });
</script>
{% endblock %}", "front/matchy/ai_generate.html.twig", "C:\\xampp\\htdocs\\esport\\templates\\front\\matchy\\ai_generate.html.twig");
    }
}
