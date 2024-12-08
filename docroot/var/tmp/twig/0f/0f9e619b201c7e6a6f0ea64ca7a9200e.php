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

/* @bundles/CoreBundle/Assets/css/app/less/components/box.less */
class __TwigTemplate_f4a253ead4b052916aeb62852c9933df extends Template
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
// Box Layout
// --------------------------------------------------

.box-layout {
  display: table !important;
  width: 100%;
  //height: 100%;
  table-layout: fixed;
  border-spacing: 0;

  > [class*=\" col-\"],
  > [class^=\"col-\"] {
    position: static;
    padding: 0;

    > .panel-body {
      white-space: nowrap;
      overflow: hidden;
    }

    &.bdr-l {
      &.height-auto {
        &:before {
          margin-left: -1px;
        }
      }
    }
    &.bdr-r {
      &.height-auto {
        &:before {
          margin-right: -1px;
        }
      }
    }
  }

  > .col-xs-1,
  > .col-xs-2,
  > .col-xs-3,
  > .col-xs-4,
  > .col-xs-5,
  > .col-xs-6,
  > .col-xs-7,
  > .col-xs-8,
  > .col-xs-9,
  > .col-xs-10,
  > .col-xs-11,
  > .cell {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
  > .cell {
    width: 100%;
  }

  @media (min-width: @screen-sm-min) {
    > .col-sm-1,
    > .col-sm-2,
    > .col-sm-3,
    > .col-sm-4,
    > .col-sm-5,
    > .col-sm-6,
    > .col-sm-7,
    > .col-sm-8,
    > .col-sm-9,
    > .col-sm-10,
    > .col-sm-11 {
      display: table-cell;
      vertical-align: top;
      height: 100%;
      float: none;
    }
  }

  @media (min-width: @screen-md-min) {
    > .col-md-1,
    > .col-md-2,
    > .col-md-3,
    > .col-md-4,
    > .col-md-5,
    > .col-md-6,
    > .col-md-7,
    > .col-md-8,
    > .col-md-9,
    > .col-md-10,
    > .col-md-11 {
      display: table-cell;
      vertical-align: top;
      height: 100%;
      float: none;
    }
  }

  @media (min-width: @screen-lg-min) {
    > .col-lg-1,
    > .col-lg-2,
    > .col-lg-3,
    > .col-lg-4,
    > .col-lg-5,
    > .col-lg-6,
    > .col-lg-7,
    > .col-lg-8,
    > .col-lg-9,
    > .col-lg-10,
    > .col-lg-11 {
      display: table-cell;
      vertical-align: top;
      height: 100%;
      float: none;
    }
  }
}

.tab-pane .box-layout {
  > [class*=\" col-\"],
  > [class^=\"col-\"] {
    &.height-auto {
      &:before {
        top: auto;
      }
    }
  }
}

.modal .box-layout {
  > [class*=\" col-\"],
  > [class^=\"col-\"] {
    &.height-auto {
      &:before {
        width: auto;
      }
    }
  }

  .bg-auto {
    background-color: @body-bg !important;
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/box.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/box.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/box.less");
    }
}
