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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom.less */
class __TwigTemplate_12249684fadb5cda62fcac02c8fc2961 extends Template
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
        yield ".alert-mautic {
  a {
    color: @alert-mautic-text;
    text-decoration: underline;
  }

  .alert-variant(@alert-mautic-bg; @alert-mautic-border; @alert-mautic-text);
}

.alert-mautic {
  .alert-styles(@alert-mautic-bg);
}

.transition (@value1,@value2:X,...)
{
  @value: ~`\"@{arguments}\".replace(/[\\[\\]]|\\,\\sX/g, '')`;

  -webkit-transition: @value;
  -moz-transition: @value;
  -ms-transition: @value;
  -o-transition: @value;
  transition: @value;
}

.btn {
  display: inline-block;
  margin-bottom: 0; // For input.btn
  font-weight: @btn-font-weight;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid transparent;
  white-space: nowrap;
  .button-size(@padding-base-vertical; @padding-base-horizontal; @font-size-base; @line-height-base; @btn-border-radius-base);
  .user-select(none);

  &,
  &:active,
  &.active {
    &:focus,
    &.focus {
      .tab-focus();
    }
  }

  &:hover,
  &:focus,
  &.focus {
    color: @btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    background-image: none;
    .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: @cursor-disabled;
    .opacity(.65);
    .box-shadow(none);
  }

  a& {
    &.disabled,
    fieldset[disabled] & {
      pointer-events: none; // Future-proof disabling of clicks on `<a>` elements
    }
  }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-mautic-custom.less");
    }
}
