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

/* @bundles/CoreBundle/Assets/css/app/less/components/loading-bar.less */
class __TwigTemplate_7cce6f9f4aa1aa764a94ef9945bcac1b extends Template
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
        yield "// loading bar
// -------------------------

.lh-keyframes(~'after-anim, 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }');

.lh-keyframes(~'before-anim, 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }');

.loading-bar, .canvas-loading-bar, .modal-loading-bar {
  //display: none;
  opacity: 0;
  position: absolute;
  bottom: -1px;
  z-index: 1;
  left: 0;
  right: 0;
  height: 2px;
  background-color: lighten(@brand-primary, 30%);
  overflow: hidden;
  .lh-transition(opacity 0.3s ease);

  // the bar itself
  &:after,
  &:before {
    content: '';
    position: absolute;
    height: 2px;
    background-color: @brand-primary;
  }
  // active state
  &.active {
    opacity: 1;
    .lh-transition(opacity 0.3s ease);

    &:after {
      left: 50%;
      width: 10%;
      .lh-animation(after-anim 2.5s infinite linear);
    }
    &:before {
      left: 0%;
      width: 0%;
      .lh-animation(before-anim 2.5s infinite linear);
    }
  }
}

.modal-loading-bar {
  bottom: auto;
  top: 0;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/loading-bar.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/loading-bar.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/loading-bar.less");
    }
}
