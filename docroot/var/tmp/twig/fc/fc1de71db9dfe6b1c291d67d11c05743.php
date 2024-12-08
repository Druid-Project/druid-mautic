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

/* @MauticPage/SubscribedEvents/PageToken/sharebtn_css.html.twig */
class __TwigTemplate_2bf96f8cce12562657ec6616ffa3b8b7 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScriptDeclaration(".share-buttons { display: block; }
.share-button { float: left; margin-right: 5px; }
.share-button.facebook-share-button.layout-box_count.action-like  iframe { width: 50px !important; }
.share-button.facebook-share-button.layout-box_count { margin-right: 10px !important; }
.share-button.twitter-share-button.layout-horizontal { width: 75px !important; }"), "html", null, true);
        // line 5
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/SubscribedEvents/PageToken/sharebtn_css.html.twig";
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
        return array (  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/SubscribedEvents/PageToken/sharebtn_css.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/SubscribedEvents/PageToken/sharebtn_css.html.twig");
    }
}
