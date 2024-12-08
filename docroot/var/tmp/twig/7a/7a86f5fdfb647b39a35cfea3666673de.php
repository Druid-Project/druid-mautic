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

/* @bundles/CoreBundle/Assets/css/app/less/components/panels.less */
class __TwigTemplate_b47bd3c3ee040480265bc253db28fd77 extends Template
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
// Panels
// --------------------------------------------------

.panel, .panel2 {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex-grow: 1;
  border: 1px solid @panel-default-border;
  background-color: var(--background);
  transition: var(--transition-all-productive);
  //background-clip: padding-box;

  &:hover { border-color: var(--border-subtle-02); }
}

// Panel heading
// ------------------------
.panel-heading {
  padding: 0 15px;
  .clearfix();

  // Panel title
  .panel-title {
    padding: ((33 - @font-size-base) / 2) 0;
    display: table-cell;
    vertical-align: middle;
    //font-size: inherit;
    font-weight: 600;
  }

  // Panel toolbar
  .panel-toolbar {
    display: table-cell;
    width: 1%;
    vertical-align: middle;
  }
}

// Panel body
.panel-body {
  flex-grow: 1;
}

// Panel group
// ------------------------
.panel-group {
  .panel {
    .box-shadow(none);
  }
}

.panel-toolbar-wrapper {
  display: block;
  background-color: var(--layer);
  border-bottom: 1px solid var(--border-subtle);
  padding: 0px 15px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/panels.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/panels.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/panels.less");
    }
}
