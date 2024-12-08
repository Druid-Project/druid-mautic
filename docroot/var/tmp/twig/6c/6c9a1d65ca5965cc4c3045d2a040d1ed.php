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

/* @bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less */
class __TwigTemplate_a07139265e5fe237071681cc42d47d27 extends Template
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
// Scrollbar
// --------------------------------------------------

// Scrollbar on devices with touch support
.touchevents {
  .scroll-content {
    height: 100%;
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    -webkit-overflow-scrolling: touch;
  }
}

// Scrollbar on devices with no touch support
.no-touchevents {
  .scroll-wrapper,
  .scroll-wrapper > .scroll-content {
    height: 100%;
  }

  .scroll-wrapper {
    // scroll-rail
    > .scroll-rail {
      display: none !important;
    }

    // scrollbar
    > .scroll-bar {
      //opacity: 0.8 !important;
      background-color: gray !important;
      right: 3px !important;
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
        return "@bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/scrollbar.less");
    }
}
