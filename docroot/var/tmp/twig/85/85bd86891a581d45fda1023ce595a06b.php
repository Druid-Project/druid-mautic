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

/* @bundles/CoreBundle/Assets/css/app/less/components/list-group.less */
class __TwigTemplate_004bae4db6c67932a70bf4f8025f4f9c extends Template
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
// List groups
// --------------------------------------------------

.list-group {
  border: 1px solid var(--border-inverse);
  border-radius: clamp(4px, var(--border-radius-md), 12px);
  overflow: hidden;
}

.nav-justified {
  .list-group-item.btn {
    border: 1px solid transparent;
    .outline();

    &:first-child {
      border-top-left-radius: clamp(4px, var(--border-radius-md), 12px);
      border-bottom-left-radius: clamp(4px, var(--border-radius-md), 12px);
    }

    &:last-child {
      border-top-right-radius: clamp(4px, var(--border-radius-md), 12px);
      border-bottom-right-radius: clamp(4px, var(--border-radius-md), 12px);
    }
  }
}

.list-group-item {
  transition: var(--transition-all-productive);
  border: 0;
  padding: 0;
  vertical-align: middle;

  &:first-child > a {
    border-top-left-radius: clamp(4px, var(--border-radius-md), 12px);
    border-top-right-radius: clamp(4px, var(--border-radius-md), 12px);
  }

  &:last-child > a {
    border-bottom-left-radius: clamp(4px, var(--border-radius-md), 12px);
    border-bottom-right-radius: clamp(4px, var(--border-radius-md), 12px);
  }



  > a, > label, .list-group-item-text {
    position: relative;
    z-index: 1;
    display: block;
    padding: 10px 15px;
    cursor: pointer;
    color: @list-group-link-color;
    .outline();

    input {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      margin: 0;
      padding: 0;
      border: none;
      cursor: pointer;
    }
  }

  &:hover {
    background-color: @list-group-hover-bg;

    > a {
      color: @list-group-link-hover-color;
    }
  }
}

// Linked list items
//
// Use anchor elements instead of `li`s or `div`s to create linked list items.
// Includes an extra `.active` modifier class for showing selected items.

a.list-group-item {
  // Hover state
  &:hover,
  &:focus {
    z-index: 2;
  }
}

label.list-group-item {
  color: @list-group-link-color;

  .list-group-item-heading {
    color: @list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    color: @list-group-link-hover-color;
    background-color: @list-group-hover-bg;
  }
}

.ds-list-group {
  counter-reset: item;
  list-style-type: none;
  padding-inline-start: 35px;

  > li {
    @list-padding: 10px;
    counter-increment: item;
    position: relative;
    padding: @list-padding 0px;

    &:not(:first-child) {
      border-top: 1px solid var(--border-subtle);
    }

    &:before {
      @marker-size: 16px;
      position: absolute;
      background: var(--layer);
      border-radius: 50%;
      left: -35px;
      width: @marker-size;
      height: @marker-size;
      text-align: center;
      line-height: @marker-size;
      font-size: calc(@marker-size - 5px);
      color: var(--icon-secondary);
      transition: var(--transition-all-productive);
      top: 11.8px;
      vertical-align: middle;
    }

    &:hover:before {
      transform: scale(1.2);
    }
  }
}

.ds-list-alphabet {
  > li:before {
    content: counter(item, upper-alpha);
  }
}

.ds-list-check {
  > li:before {
    content: \"\\EB7B\";
    font-family: 'remixicon';
  }
}

.ds-list-none {
  padding-inline-start: 0;
}

.ds-list-bullet {
  list-style-type: disc;
  padding-inline-start: 18px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/list-group.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/list-group.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/list-group.less");
    }
}
