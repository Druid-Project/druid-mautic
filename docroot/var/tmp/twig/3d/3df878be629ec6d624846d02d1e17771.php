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

/* @bundles/CoreBundle/Assets/css/app/less/components/graphs.less */
class __TwigTemplate_71a67a01a689ae02fb5628db296b456b extends Template
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
        yield ".legend-container {
  position: relative;
}
.bar-legend, .line-legend {
  list-style: none;
  position: absolute;
  top: 0;
  li {
    display: block;
    position: relative;
    margin-bottom: 4px;
    border-radius: 5px;
    padding: 0px 8px 2px 18px;
    font-size: 11px;
    cursor: default;
    -webkit-transition: background-color 200ms ease-in-out;
    -moz-transition: background-color 200ms ease-in-out;
    -o-transition: background-color 200ms ease-in-out;
    transition: background-color 200ms ease-in-out;
    &:hover {
      background-color: #fafafa;
    }
    span {
      display: block;
      position: absolute;
      left: 0;
      top: 0;
      width: 15px;
      height: 15px;
      border-radius: 5px;
    }
  }
}
ul.line-legend {
  margin: 0;
  padding: 0;
  position: relative;
  li {
    display: inline;
  }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/graphs.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/graphs.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/graphs.less");
    }
}
