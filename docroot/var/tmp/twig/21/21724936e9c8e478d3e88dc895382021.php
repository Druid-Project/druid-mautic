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

/* @MauticCore/Slots/socialfollow.html.twig */
class __TwigTemplate_1ad1e889c468d4b4b333bf6516d082cb extends Template
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
        yield "<div class=\"socialfollow\">
    <a id=\"flink\" href=\"http://www.facebook.com\" target=\"_blank\"><img
            src=\"";
        // line 3
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/neopolitan/img/facebook.gif", null, null, true);
        yield "\"
            alt=\"facebook\"
            class=\"fr-view fr-dii fr-draggable\"></a>
    <a id=\"tlink\" href=\"http://www.twitter.com\" target=\"_blank\"><img
            src=\"";
        // line 7
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/neopolitan/img/twitter.gif", null, null, true);
        yield "\"
            alt=\"twitter\"
            class=\"fr-view fr-dii fr-draggable\"></a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Slots/socialfollow.html.twig";
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
        return array (  53 => 7,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/socialfollow.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/socialfollow.html.twig");
    }
}
