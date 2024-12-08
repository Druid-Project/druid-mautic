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

/* @bundles/CoreBundle/Assets/css/app/less/components/offcanvas.less */
class __TwigTemplate_e1350101d4b8935cc92ba7b8fed8886f extends Template
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
// Layout Content
// --------------------------------------------------

.offcanvas-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;

  .offcanvas-wrapper {
    position: absolute;
    z-index: 1;
    left: 0px;
    width: 100%;
    height: 100%;
    .transition(all 0.2s ease);
  }
  .offcanvas-main {
    position: absolute;
    top: 0px;
    width: 100%;
    height: 100%;
  }

  .offcanvas-left {
    position: absolute;
    z-index: 2;
    top: 0px;
    left: -100%;
    width: 100%;
    height: 100%;
  }

  .offcanvas-right {
    position: absolute;
    z-index: 2;
    top: 0px;
    left: 100%;
    width: 100%;
    height: 100%;
  }

  // offcanvas open rtl
  // -----------------------------------
  &.offcanvas-open-rtl {
    .offcanvas-wrapper {
      left: 100%;
      .transition(left 0.2s ease);
    }
  }

  // offcanvas open ltr
  // -----------------------------------
  &.offcanvas-open-ltr {
    .offcanvas-wrapper {
      left: -100%;
      .transition(left 0.2s ease);
    }
  }
}

.csstransforms3d {
  .offcanvas-container {
    // offcanvas open ltr
    // -----------------------------------
    &.offcanvas-open-ltr {
      .offcanvas-wrapper {
        left: auto;
        .translate3d(100%, 0, 0);
        .transition(all 0.2s ease);
      }
    }

    // offcanvas open rtl
    // -----------------------------------
    &.offcanvas-open-rtl {
      .offcanvas-wrapper {
        left: auto;
        .translate3d(-100%, 0, 0);
        .transition(all 0.2s ease);
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
        return "@bundles/CoreBundle/Assets/css/app/less/components/offcanvas.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/offcanvas.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/offcanvas.less");
    }
}
