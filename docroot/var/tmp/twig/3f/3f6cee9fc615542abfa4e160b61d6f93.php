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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less */
class __TwigTemplate_14285bd1aa20c6c0d290d1b1aeeebad7 extends Template
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
        yield "// Rotated & Flipped Icons
// -------------------------

.@{fa-css-prefix}-rotate-90  { .fa-icon-rotate(90deg, 1);  }
.@{fa-css-prefix}-rotate-180 { .fa-icon-rotate(180deg, 2); }
.@{fa-css-prefix}-rotate-270 { .fa-icon-rotate(270deg, 3); }

.@{fa-css-prefix}-flip-horizontal { .fa-icon-flip(-1, 1, 0); }
.@{fa-css-prefix}-flip-vertical   { .fa-icon-flip(1, -1, 2); }

// Hook for IE8-9
// -------------------------

:root .@{fa-css-prefix}-rotate-90,
:root .@{fa-css-prefix}-rotate-180,
:root .@{fa-css-prefix}-rotate-270,
:root .@{fa-css-prefix}-flip-horizontal,
:root .@{fa-css-prefix}-flip-vertical {
  filter: none;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/rotated-flipped.less");
    }
}
