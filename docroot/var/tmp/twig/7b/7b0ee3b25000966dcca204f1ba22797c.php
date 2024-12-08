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

/* @bundles/CoreBundle/Assets/css/app/less/components/timeline.less */
class __TwigTemplate_9cf637ae43b34305234ff70cf6bbe486 extends Template
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
// Timeline
// --------------------------------------------------
.timeline {
  overflow: hidden;
  height: auto;
  position: relative;
  padding: 0px;
  list-style-type: none;

  // center line
  &:after {
    position: absolute;
    width: 1px;
    left: 50%;
    margin-left: -1px;
    top: 20px;
    bottom: 0px;
    content: \"\";
    .lh-background-image(linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(229,229,229,1) 10%, rgba(229,229,229,1) 90%, rgba(229,229,229,0) 100%));
  }

  // panel
  .panel {
    position: relative;
    z-index: 1;
  }

  // header
  .header {
    position: relative;
    z-index: 10;
    clear: both;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 20px;
    margin-left: auto;
    background-color: inherit;
    font-size: 14px;
    font-weight: 600;
    max-width: 120px;
    padding-top: 2px;
    padding-bottom: 2px;
    text-align: center;
    color: @brand-primary;
  }

  // Events
  .events {
    padding-left: 0px;
    overflow: auto;

    .figure {
      position: absolute;
      z-index: 5;
      left: 50%;
      margin-top: 10px;
      margin-left: -10px;
      width: 20px;
      height: 20px;
      line-height: 18px;
      text-align: center;
      border-radius: 50%;
      background-color: #fff;
      border: 1px solid var(--border-strong);
      font-size: 12px;
      color: var(--border-strong);
    }

    > .featured {
      list-style: none;
      width: 45%;
      clear: both;
      float: none !important;
      margin-bottom: 50px;
      margin-top: 50px;
      margin-left: auto;
      margin-right: auto;

      // panel
      > .panel {
        &:after,
        &:before {
          display: none;
        }
      }

      // feature figure
      .figure {
        margin-top: -30px;
      }
    }

    // wrapper
    > .wrapper {
      list-style: none;
      width: 46%;
      clear: both;

      &:first-child {
        margin-top: 0 !important;
      }

      &:nth-of-type(odd) {
        float: left;
        margin-top: -30px;

        // wrapper - panel
        > .panel {
          z-index: 5;

          // panel - arrow
          // -----------------------------------
          &:after,
          &:before {
            content: \"\";
            position: absolute;
            width: 0px;
            height: 0px;
            border-style: solid;
          }
          &:after {
            right: -10px;
            top: 10px;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent var(--layer);
          }
          &:before {
            right: -11px;
            top: 10px;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent @panel-default-border;
          }
        }
      }

      &:nth-of-type(even) {
        float: right;
        margin-top: -30px;

        // wrapper - panel
        // -----------------------------------
        > .panel {
          z-index: 5;

          // panel - arrow
          // -----------------------------------
          &:after,
          &:before {
            content: \"\";
            position: absolute;
            width: 0px;
            height: 0px;
            border-style: solid;
          }
          &:after {
            left: -10px;
            top: 10px;
            border-width: 10px 10px 10px 0;
            border-color: transparent #fff transparent transparent;
          }
          &:before {
            left: -11px;
            top: 10px;
            border-width: 10px 10px 10px 0;
            border-color: transparent @panel-default-border transparent transparent;
          }
        }
      }
    }
  }
}

@media (max-width: @screen-xs-max) {
  .timeline {
    // Events
    .events {
      padding-left: 0px;

      // wrapper
      > .wrapper {
        width: auto;

        &:nth-of-type(odd),
        &:nth-of-type(even) {
          float: none;
          clear: both;
          margin-top: 48px;

          // wrapper - panel
          > .panel {
            &:after,
            &:before {
              display: none;
            }
          }
        }

        // wrapper - figure
        > .figure {
          margin-top: -41px;
        }
      }
    }
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/timeline.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/timeline.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/timeline.less");
    }
}
