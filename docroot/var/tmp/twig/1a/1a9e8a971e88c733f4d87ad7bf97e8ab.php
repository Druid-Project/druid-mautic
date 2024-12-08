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

/* @bundles/CoreBundle/Assets/css/app/less/components/input-groups.less */
class __TwigTemplate_e7c8f2cc48938443f7714454a697e7d7 extends Template
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
// Input groups
// --------------------------------------------------

// Base styles
// -------------------------
.input-group {
  .input-group-btn {
    + .form-control {
      margin-left: -1px;
    }
  }
}

.input-group-addon {
  border-width: var(--border-bottom);
  border-radius: var(--border-radius-sm);
  background-color: var(--field-hover);
  color: var(--text-secondary);
  border-color: var(--border-strong);
}

.table .input-group-sm {
  & > .input-group-addon {
    line-height: 1em;
    background-color: transparent;
    border: 0;
    padding: 0;
  }

  .dropdown-toggle {
    border: 0;
    background-color: transparent;
    padding: 5px 8px;
  }
}

.input-group {
  .input-group-btn {
    .btn.btn-ghost {
      height: 32px;
      width: 100%;
      background-color: var(--field);

      &:hover {
        background-color: var(--field-hover);
      }
    }

    &:last-child, &:only-of-type {
      .btn {border-radius: 0 var(--border-radius-sm) var(--border-radius-sm) 0;}
    }
    &:first-child {
      .btn {border-radius: var(--border-radius-sm) 0 0 var(--border-radius-sm);}
    }

    &:last-child {
      .btn {border-radius: 0 var(--border-radius-sm) var(--border-radius-sm) 0;}
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
        return "@bundles/CoreBundle/Assets/css/app/less/components/input-groups.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/input-groups.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/input-groups.less");
    }
}
