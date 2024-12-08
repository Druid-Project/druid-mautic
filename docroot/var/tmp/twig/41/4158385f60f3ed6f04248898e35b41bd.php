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

/* @bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less */
class __TwigTemplate_62a1fc74eb542747c4e0d9b9c6ec85ee extends Template
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
        yield "//
// bootstrap-chosen-variables.less
//
// An alternate stylesheet for Chosen (http://harvesthq.github.com/chosen/).
// This one is supposed to integrate better with Bootstrap.
//
// Submit bugfixes to: http://github.com/alxlit/bootstrap-chosen
//
@chosen-background: var(--field);
@chosen-border: none;
@chosen-border-radius: var(--border-radius-sm);
@chosen-multi-border-radius: @chosen-border-radius;
@chosen-box-shadow: ~\"none\";
@chosen-drop-border: transparent;
@chosen-drop-box-shadow: ~\"0 8px 8px rgba(0, 0, 0, .25)\";
@chosen-drop-zindex: 1060;
@chosen-focus-border: none;
@chosen-focus-box-shadow: ~\"none\";
@chosen-focus-transition: ~\"border linear .2s, box-shadow linear .2s\";
@chosen-height: @input-height-base;
@chosen-multi-height: @input-height-base + 6px;
@chosen-sprite-path: \"chosen/chosen-sprite.png\";
@chosen-sprite-retina-path: \"chosen/chosen-sprite@2x.png\";
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen-variables.less");
    }
}
