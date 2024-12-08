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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/base.less */
class __TwigTemplate_e6357e2f95831304b1be9fcf1968b281 extends Template
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
// Base layout
// --------------------------------------------------

// html + body
html,
body {
  width: 100%;
  height: 100%;
}
body {
  overflow-y: scroll;
  cursor: default;
  background-color: var(--background);

  // Wrapper
  > #app-wrapper {
    //overflow-x: hidden;
    overflow: hidden;
    // Keep the screen from bouncing with and without scrollbars
    position: relative;
    height: auto;
    min-height: 100%;
    width: 100%;
  }
}

// Sidebar open class
.sidebar-left-open {
  overflow: hidden;

  body {
    > section#app-wrapper {
      overflow-x: hidden;
    }
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  body {
    overflow-x: hidden;
  }
}

@media (min-width: @container-desktop) {
  .modal {
   overflow-y: auto;
  }

  .modal-open {
   overflow: auto;
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/base.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/base.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/layouts/base.less");
    }
}
