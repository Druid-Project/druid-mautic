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

/* @MauticForm/Builder/_script.html.twig */
class __TwigTemplate_94253c9d7116143f9091129d2692fc1e extends Template
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
        // line 1
        $context["src"] = ((("dev" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "environment", [], "any", false, false, false, 1))) ? ("app/assets/js/mautic-form-src.js") : ("media/js/mautic-form.js"));
        // line 2
        $context["scriptSrc"] = Twig\Extension\CoreExtension::replace($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 2, $this->source); })()), null, null, true), ["/index.php" => ""]);
        // line 5
        yield "
<script type=\"text/javascript\">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = '";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scriptSrc"]) || array_key_exists("scriptSrc", $context) ? $context["scriptSrc"] : (function () { throw new RuntimeError('Variable "scriptSrc" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = '";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getBaseUrl(), ["/index.php" => ""]), "html", null, true);
        yield "';
        var MauticLang   = {
            'submittingMessage': \"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.submission.pleasewait", [], "messages", CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "getLanguage", [], "method", false, false, false, 20)), "html", null, true);
        yield "\"
        }
    }else if (typeof MauticSDK != 'undefined') {
        MauticSDK.onLoad();
    }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/_script.html.twig";
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
        return array (  69 => 20,  64 => 18,  56 => 13,  46 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/_script.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/_script.html.twig");
    }
}
