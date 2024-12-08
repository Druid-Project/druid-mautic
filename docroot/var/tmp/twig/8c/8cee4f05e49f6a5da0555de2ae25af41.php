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

/* @bundles/CoreBundle/Assets/css/app/less/components/button-groups.less */
class __TwigTemplate_32cc8c40515216aafaaffe38f9203480 extends Template
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
// Button groups
// --------------------------------------------------

// Prevent double borders when buttons are next to each other
.btn-group {
  .btn ~ .btn,
  .btn ~ .btn-group,
  .btn-group ~ .btn,
  .btn-group ~ .btn-group {
    margin-left: 0px;
  }
  > .btn-primary + .dropdown-toggle { margin-left: 1px; }
}

// The clickable button for toggling the menu
// Remove the gradient and set the same inset shadow as the :active state
.btn-group.open .dropdown-toggle {
  .box-shadow(none);
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/button-groups.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/button-groups.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/button-groups.less");
    }
}
