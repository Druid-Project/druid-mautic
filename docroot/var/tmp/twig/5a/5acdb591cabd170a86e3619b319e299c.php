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

/* @bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less */
class __TwigTemplate_4db3150b5ba7f4942c9d940bd0472c3e extends Template
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
// Progress bars
// --------------------------------------------------

// Progress Itself
// -------------------------
.progress {
  background-color: var(--border-subtle);
  .box-shadow(none);

  // Sizing
  &.progress-md {
    height: (@line-height-computed - 6); // 12px
    border-radius: @border-radius-small;
  }
  &.progress-sm {
    height: (@line-height-computed - 10); // 8px
    border-radius: @border-radius-small;
    margin-top: 2px;
  }
  &.progress-xs {
    height: (@line-height-computed - 14); // 4px
    border-radius: @border-radius-small;
  }
}
.progress-bar {
  .box-shadow(none);
  .transition(width 4.0s ease);
}

// Variations
// -------------------------
.progress-bar-success {
  .progress-bar-variant(@progress-bar-success-bg);
}
.progress-bar-info {
  .progress-bar-variant(@progress-bar-info-bg);
}
.progress-bar-warning {
  .progress-bar-variant(@progress-bar-warning-bg);
}
.progress-bar-danger {
  .progress-bar-variant(@progress-bar-danger-bg);
}

// Progress inside sidebar
// -------------------------
.app-sidebar {
  .progress {
    background-color: lighten(@sidebar-left-bg, 3%);
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/progress-bars.less");
    }
}
