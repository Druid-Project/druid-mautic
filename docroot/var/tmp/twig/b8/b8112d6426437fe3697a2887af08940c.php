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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/font-awesome.less */
class __TwigTemplate_a82dadf289b14c910eced27f865ad424 extends Template
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
        yield "/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */

@import \"less/variables.less\";
@import \"less/mixins.less\";
@import \"less/path.less\";
@import \"less/core.less\";
@import \"less/larger.less\";
@import \"less/fixed-width.less\";
@import \"less/list.less\";
@import \"less/bordered-pulled.less\";
@import \"less/animated.less\";
@import \"less/rotated-flipped.less\";
@import \"less/stacked.less\";
@import \"less/icons.less\";
@import \"less/screen-reader.less\";
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/font-awesome.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/font-awesome.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/font-awesome.less");
    }
}
