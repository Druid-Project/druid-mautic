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

/* @bundles/CoreBundle/Assets/css/app/less/components/table.less */
class __TwigTemplate_43f0940d38239f5f61bc8e40d1776b5c extends Template
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
// Table
// --------------------------------------------------

// Baseline styles

.table {
  // Cells
  >thead,
  >tbody,
  >tfoot {
    >tr {
      >th,
      >td {vertical-align: middle;}
    }
  }

  // Bottom align for column headings
  >thead>tr>th {
    vertical-align: middle;
    border-bottom: 1px solid @table-border-color;
    background-color: var(--layer-accent);
  }
}

.table-sort {
  height: 48px;
  border-radius: unset;
  border-color: transparent;
  &, &:hover, i {color: var(--text-primary);}
  .table-sort__icon-unsorted { visibility: hidden; }
  &:hover {
    background-color: var(--layer-selected-hover);
    border-color: transparent;
    .table-sort__icon-unsorted {
      visibility: visible;
    }
    i { color: var(--text-primary); }
  }
}

// Force table responsiveness
.table-responsive-force {
  width: 100%;
  margin-bottom: (@line-height-computed * 0.75);
  overflow-y: hidden;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  border: 1px solid @table-border-color;
  -webkit-overflow-scrolling: touch;

  // Tighten up spacing
  >.table {
    margin-bottom: 0;

    // Ensure the content doesn't wrap
    >thead,
    >tbody,
    >tfoot {
      >tr {
        background-color: var(--background);
        >th,
        >td {
          white-space: nowrap;
        }
      }
    }
  }

  // Special overrides for the bordered tables
  >.table-bordered {
    border: 0;

    // Nuke the appropriate borders so that the parent can handle them
    >thead,
    >tbody,
    >tfoot {
      >tr {

        >th:first-child,
        >td:first-child {
          border-left: 0;
        }

        >th:last-child,
        >td:last-child {
          border-right: 0;
        }
      }
    }

    // Only nuke the last row's bottom-border in `tbody` and `tfoot` since
    // chances are there will be only one `tr` in a `thead` and that would
    // remove the border altogether.
    >tbody,
    >tfoot {
      >tr:last-child {

        >th,
        >td {
          border-bottom: 0;
        }
      }
    }

  }
}

// Exact selectors below required to override `.table-striped` and prevent
// inheritance to nested tables.
.table > thead > tr,
.table > tbody > tr,
.table > tfoot > tr {
  > td.active,
  > th.active,
  &.active > td,
  &.active > th {
    background-color: var(--background);
  }
}

.table-hover {
  >tbody>tr {
    &:hover,
    >td.active:hover,
    >th.active:hover,
    &.active:hover>td,
    &:hover>.active,
    &.active:hover>th {
      transition: var(--transition-all-productive);
      background-color: var(--background-hover);
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
        return "@bundles/CoreBundle/Assets/css/app/less/components/table.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/table.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/table.less");
    }
}