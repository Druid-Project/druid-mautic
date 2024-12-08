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

/* @bundles/CoreBundle/Assets/css/app/less/components/alerts.less */
class __TwigTemplate_fb35a7ffdb4c4aa7dc8d01ca2cfb405d extends Template
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
// Alerts
// --------------------------------------------------

// Dismissible alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissible, // The misspelled .alert-dismissible was deprecated in 3.2.0.
.alert-dismissible {
  // Adjust close link position
  .close {
    top: -1px;
  }
}

.alert {
  border-width: 0;
  color: var(--text-primary);
  display: flex;
  flex-wrap: nowrap;
  gap: 3px;
  background-color: var(--layer);
  border-radius: var(--border-radius-sm);
  position: relative;
  overflow: hidden;

  &:after {
    display: flex;
    content: \"\";
    width: 5px;
    height: 100%;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
  }

  &[class*=\"col-\"] {
    padding-left: 25px;
  }

  &.alert-success,
  &.alert-info,
  &.alert-warning,
  &.alert-danger {
    &:not([class*=\"col-\"]):before {
      font-family: 'remixicon';
      display: inline-flex;
      position: relative;
      font-size: 22px;
      padding: 0px 3px;
      margin-right: 10px;
      line-height: .5em;
      top: .15em;
    }

    &.notification {
      position: relative;
      border-radius: 0;
      &:before {
        position: absolute;
        top: 20px;
        left: 10px;
        font-size: 18px;
      }
      .close {
        position: absolute;
        top: 10px;
        right: 5px;
      }
    }
  }

  .close {
    font-size: 13px;
    position: absolute;
    right: 12px;
    top: 18px;
  }

  &:has(.btn) { align-items: center; }
}

.alert-success {
  background-color: var(--notification-background-success);
  &:after { background-color: var(--support-success); }

  &:not([class*=\"col-\"]):before {
    content: '\\EB80';
    color: var(--support-success);
  }
}

.alert-info {
  background-color: var(--notification-background-info);
  &:after { background-color: var(--support-info); }

  &:not([class*=\"col-\"]):before {
    content: '\\F448';
    color: var(--support-info);
  }
}

.alert-warning {
  background-color: var(--notification-background-warning);
  &:after { background-color: var(--support-warning); }

  &:not([class*=\"col-\"]):before {
    content: '\\ECA0';
    color: var(--support-warning);
  }
}

.alert-danger {
  background-color: var(--notification-background-error);
  &:after { background-color: var(--support-error); }

  &:not([class*=\"col-\"]):before {
    content: '\\ED94';
    color: var(--support-error);
  }
}

.alert-primary {
  background: lighten(@mautic-primary, 30%);
}

.alert-secondary {
  background: lighten(@mautic-secondary, 30%);
}

.alert-tertiary {
  background: lighten(@mautic-tertiary, 30%);
}

.alert-growl {
  background: var(--layer-translucent-inverse);
  color: var(--text-inverse);
  border-radius: 0;
  border-left: 4px solid var(--border-interactive);
  border-top: none;
  border-right: none;
  border-bottom: none;
  backdrop-filter: blur(4px);

  a {
    font-weight: 700;
    &,
    &:hover {
      color: var(--text-inverse);
    }
  }

  &--warning {
    border-left-color: @brand-warning;

    a {
      color: @brand-warning;
      &:hover {
        color: lighten(@brand-warning, 20%);
      }
    }
  }

  &--error {
    border-left-color: @brand-danger;

    a {
      color: @brand-danger;
      &:hover {
        color: lighten(@brand-danger, 20%);
      }
    }
  }
}

.alert-growl-container {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 100000;

  &.alert-offset {
    top: 50px;
  }

  .alert-growl {
    margin-bottom: 5px;
  }
}

.alert-growl-buttons {
  .btn + .btn {
    margin-left: 5px;
  }
}

.alert-growl .close {
  font-size: (@font-size-base);
  color: var(--text-inverse);
  margin-left: 10px;
  font-weight: normal;
  position: relative;
  order: 2;
  top: unset;
  right: unset;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/alerts.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/alerts.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/alerts.less");
    }
}
