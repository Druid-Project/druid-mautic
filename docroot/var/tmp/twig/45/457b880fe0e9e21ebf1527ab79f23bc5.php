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

/* @bundles/CoreBundle/Assets/css/app/less/components/colors.less */
class __TwigTemplate_c2e6904b847480d87d57c55c18912069 extends Template
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
// Colors
// --------------------------------------------------

.bg-white {
  .bg-color(#fff, @text-color);
}
.bg-auto {
  .bg-color(@body-bg, @text-color);
}
.bg-transparent {
  background-color: transparent !important;
  color: @text-color;
}

// Brand primary
.bg-primary {
  .bg-color(@brand-primary, #fff);
}

// Brand success
.bg-success {
  .bg-color(var(--support-success), var(--text-inverse));
}

// Brand info
.bg-info {
  .bg-color(var(--support-info), var(--text-inverse));
}

// Brand warning
.bg-warning {
  .bg-color(var(--support-warning), var(--text-inverse));
}

// Brand danger
.bg-danger {
  .bg-color(var(--support-error), var(--text-inverse));
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/colors.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/colors.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/colors.less");
    }
}
