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

/* @MauticPlugin/Auth/auth.html.twig */
class __TwigTemplate_1c9e1c111002f2f405741e208be674e9 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["contentOnly"] = true;
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPlugin/Auth/auth.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScriptDeclaration((((((((((((("Mautic.handleIntegrationCallback(\"" . (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["csrfToken"]) || array_key_exists("csrfToken", $context) ? $context["csrfToken"] : (function () { throw new RuntimeError('Variable "csrfToken" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new RuntimeError('Variable "code" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["clientIdKey"]) || array_key_exists("clientIdKey", $context) ? $context["clientIdKey"] : (function () { throw new RuntimeError('Variable "clientIdKey" does not exist.', 7, $this->source); })())) . "\", \"") . (isset($context["clientSecretKey"]) || array_key_exists("clientSecretKey", $context) ? $context["clientSecretKey"] : (function () { throw new RuntimeError('Variable "clientSecretKey" does not exist.', 7, $this->source); })())) . "\");"), "bodyClose"), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPlugin/Auth/auth.html.twig";
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
        return array (  73 => 7,  66 => 6,  55 => 4,  50 => 2,  48 => 1,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/Auth/auth.html.twig", "/app/docroot/app/bundles/PluginBundle/Resources/views/Auth/auth.html.twig");
    }
}
