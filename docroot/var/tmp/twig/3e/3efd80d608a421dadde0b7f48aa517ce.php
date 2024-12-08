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

/* @bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less */
class __TwigTemplate_5be1396b3e676570dd6428840d927b16 extends Template
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
// Dropdown menus
// --------------------------------------------------

// Dropdown arrow/caret
.caret {
  margin-top: -1px;
}

// The dropdown menu (ul)
.dropdown-menu {
  padding: 0;
  overflow: hidden;
  border-radius: var(--border-radius-md);
  .background-blur();
  .box-shadow(0 3px 6px rgba(0,0,0,.06));

  // Dividers (basically an hr) within the dropdown
  .divider {
    margin: 5px 0;
  }

  // reset panel style
  .panel {
    .box-shadow(none);
    border-radius: 0;
    border-width: 0;
    margin-bottom: 0;
    margin-top: -5px;
    margin-bottom: -5px;

    .panel-heading {
      border-radius: 0;
    }
  }

  // Links within the dropdown menu
  > li {

    &:first-child > a {
      border-top-left-radius: var(--border-radius-md);
      border-top-right-radius: var(--border-radius-md);
    }

    &:last-child > a {
      border-bottom-left-radius: var(--border-radius-md);
      border-bottom-right-radius: var(--border-radius-md);
    }

    > a {
      display: inline-flex;
      inline-size: 100%;
      align-items: center;
      height: var(--spacing-08);
      position: relative;
      z-index: 1;
      padding: 0 var(--spacing-05);
      outline: 2px solid transparent;
      outline-offset: -2px;
      justify-content: space-between;

      span {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: space-between;
        gap: var(--spacing-07);
      }


      .fa, i {
        min-width: var(--spacing-05);
        order: 2;
        text-align: center;
      }

      [class^=\"ri-\"], [class*=\" ri-\"] {
        font-size: 1.25em;
        vertical-align: -.05em;
        line-height: 0;
        padding-left: var(--spacing-01);
      }

      &:focus {
        outline: 2px solid var(--focus);
      }
    }
  }
}

// Hover/Focus state
.dropdown-menu > li > a {
  &:hover,
  &:focus {
    z-index: 2;
  }

  &:focus {
    outline: 2px solid var(--focus);
  }

  &:active {
    background-color: var(--layer-active);
  }
}

// Active state
.dropdown-menu > .active > a {
  &,
  &:hover,
  &:focus {
    color: @nav-tabs-active-link-hover-color;
    background-color: @nav-link-hover-bg;
  }
}

// Danger item
.dropdown-menu > li a.danger {
  &:hover,
  &:focus {
    background-color: var(--support-error);
    color: var(--text-on-color);
  }
}

.scrollable-menu {
  height: auto;
  max-height: 200px;
  overflow-x: hidden;
}

ul.dropdown-menu-form {
  padding: 0 5px 0 30px;
  max-height: 300px;
  overflow-y: auto;
}

.dropdown-toggle {
  aspect-ratio: 1 / 1;
  justify-content: center;
  align-items: center;
  .outline();
}

.dropdown-header {
  margin: 32px 16px 8px 16px;
  border-bottom: 1px solid var(--border-strong);
  padding: 0 0 4px;
  color: var(--text-secondary);
  font-size: var(--typography-utility-productive);
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/dropdowns.less");
    }
}