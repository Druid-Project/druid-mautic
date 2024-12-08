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

/* @bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less */
class __TwigTemplate_2b9ca683885148dbe4a085629c658883 extends Template
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
        yield "// Scaffolding
// --------------------------------------------------

body {
  color: var(--text-primary);
}

// Horizontal rules

hr,
.hr-expand {
  margin-top:    15px;
  margin-bottom: 15px;
  border: 0;
  border-top: 0;
  width: auto;

  &.hr-w-2 {
    border-width: 2px;
  }
  &.hr-w-3 {
    border-width: 3px;
  }
}
.hr-expand {
  a.arrow {
    display: inline-block;
    position: relative;
    top: -1px;
    z-index: 1;
    background-color: var(--layer);
    padding: 0 15px;
    margin: 0 15px;
    border-top-width: 0;
    border-bottom-left-radius: @border-radius-base;
    border-bottom-right-radius: @border-radius-base;
    font-size: 9px;
    line-height: 22px;
    text-transform: uppercase;

    > .caret {
      margin-left: 0;
      border-top: 0px;
      border-bottom: 4px solid;
    }
  }

  a.collapsed {
    > .caret {
        border-top: 4px solid;
        border-bottom: 0px;
      }
  }

  &.hr-w-2 {
    a.arrow {
      top: -2px;
    }
  }
  &.hr-w-3 {
    a.arrow {
      top: -3px;
    }
  }
}


// Links

a {
  transition: var(--transition-all-productive);
  color: var(--link-primary);
  outline: 2px solid transparent;

  &:hover {
    color: var(--link-primary-hover);
    cursor: pointer;
  }
  &:hover,
  &:focus {
    text-decoration: none;
    outline: 2px solid transparent;
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/scaffolding.less");
    }
}
