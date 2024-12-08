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

/* @bundles/CoreBundle/Assets/css/app/less/components/maps.less */
class __TwigTemplate_fdf7d833aa8dfff704e7f79660ee46f6 extends Template
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
        yield ".map-options {
  margin-left: 10px;
  margin-bottom: 10px;

  h5 {
    color: @text-color;
    font-size: 13px;
  }

  &__cointainer {
    display: flex;
    flex-direction: row;
  }
  &__item.active,
  &__item.active:hover {
    color: #fff;
    background-color: #3a7e6f;
  }
  &__item:focus,
  &__item.focus,
  &__item:active,
  &__item.active.focus {
    color: #fff;
    background-color: #3a7e6f;
  }
}

.jvectormap-zoomin, .jvectormap-zoomout {
  width:  30px;
  height: 30px;
  line-height: 30px;
  left: 10px;
  padding: 0;
  background-color: var(--button-primary);
  border-radius: 4px;
  box-shadow: 0 -2px 4px 0 rgba(0,0,0,0.04), 0 2px 4px 0 rgba(0,0,0,0.04), 0 6px 12px 0 rgba(0,0,0,0.16);
  font-size: 20px;
  transition: var(--transition-all-productive);
}

.jvectormap-zoomin:hover, .jvectormap-zoomout:hover {
  background-color: var(--button-primary-hover);
}

.jvectormap-zoomin {
  top: 16px;
}

.jvectormap-zoomout {
  top: 52px;
}

.jvectormap-tip {
  padding: 8px;
  font-size: 14px;
  border-radius: 4px;
  pointer-events: none;
}

.jvectormap-legend-cnt {
  right: auto;
  left: 0;
}

.jvectormap-legend-cnt-h .jvectormap-legend {
  margin: 0 0 16px 10px;
  padding: 8px;
  &-title {
    font-weight: normal;
  }
}

.jvectormap-legend .jvectormap-legend-inner {
  display: none;
}

.map-options__item.btn {
  &,
  &:active,
  &.focus,
  &:focus,
  &.active,
  &:active:focus,
  &.active:focus {
    outline: 0 !important;
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/maps.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/maps.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/maps.less");
    }
}
