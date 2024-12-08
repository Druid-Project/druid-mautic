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

/* @bundles/CoreBundle/Assets/css/app/less/components/switch.less */
class __TwigTemplate_4dff0c36f3046f635b57c5d58e06a21e extends Template
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
// IOS7 styled switch
// --------------------------------------------------

.switch {
  vertical-align: middle;
  margin-bottom: 0;
  line-height: 0;
  cursor: pointer;
  .user-select(none);
  -webkit-tap-highlight-color: transparent;
  tap-highlight-color: transparent;

  input {
    position: absolute;
    opacity: 0;

    ~ .text {
      display: inline-block;
      font-weight: 400;
      line-height: 24px;
      vertical-align: middle;
    }

    ~ .switch {
      font-size: 24px;
      position: relative;
      display: inline-block;
      vertical-align: middle;
      background-color: darken(#fff, 2%);
      box-shadow: inset 0 0 0 1px #e5e5e5;
      cursor: pointer;
      height: 24px;
      width: (24px * 1.6);
      border-radius: 28px;
      transition: border .25s .15s, box-shadow .25s .3s, padding .25s;
      
      &:after {
        position: absolute;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        border-radius: 24px;
        box-shadow: 0 1px 4px hsla(0,0%,0%,.01), 0 2px 4px hsla(0,0%,0%,.05);
        content: '';
        display: block;
        height: 24px;
        width: 24px;
        left: 0;
        top: 0;
        transition: border .25s .15s, left .25s .1s, right .15s .175s;
      }
    }

    &:checked {
      + .switch {
        border-color: @brand-success;
        box-shadow: inset 0 0 0 0.6em @brand-success;
        transition: border .25s, box-shadow .25s, padding .25s .15s;
      
        &:after {
          border-color: @brand-success;
          left: 0.6em;
          right: 0;
          transition: border .25s, left .15s .25s, right .25s .175s;
        }
      }
    }
  }

  // color variation
  &.switch-primary {
    .switch-color(@brand-primary);
  }
  &.switch-info {
    .switch-color(@brand-info);
  }
  &.switch-success {
    .switch-color(@brand-success);
  }
  &.switch-warning {
    .switch-color(@brand-warning);
  }
  &.switch-danger {
    .switch-color(@brand-danger);
  }

  // sizing
  &.switch-lg {
    .switch-size(28px);
  }
  &.switch-sm {
    .switch-size(20px);
  }
  &.switch-xs {
    .switch-size(16px);
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/switch.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/switch.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/switch.less");
    }
}
