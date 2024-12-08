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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less */
class __TwigTemplate_e46b2cc41333d0df71c34a943152eaba extends Template
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
        yield "// Bordered & Pulled
// -------------------------

.@{fa-css-prefix}-border {
  padding: .2em .25em .15em;
  border: solid .08em @fa-border-color;
  border-radius: .1em;
}

.@{fa-css-prefix}-pull-left { float: left; }
.@{fa-css-prefix}-pull-right { float: right; }

.@{fa-css-prefix} {
  &.@{fa-css-prefix}-pull-left { margin-right: .3em; }
  &.@{fa-css-prefix}-pull-right { margin-left: .3em; }
}

/* Deprecated as of 4.4.0 */
.pull-right { float: right; }
.pull-left { float: left; }

.@{fa-css-prefix} {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/bordered-pulled.less");
    }
}
