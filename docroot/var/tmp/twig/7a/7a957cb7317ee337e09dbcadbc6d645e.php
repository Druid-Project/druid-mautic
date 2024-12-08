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

/* @bundles/CoreBundle/Assets/css/app/less/components/tiles.less */
class __TwigTemplate_369d57a80656348dbaa67875006d718a extends Template
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
        yield ".tile {
    --layout-density-padding-inline-local: 16px;
    position: relative;
    display: flex;
    flex-grow: 1;
    flex-direction: column;
    padding: var(--layout-density-padding-inline-local);
    background-color: var(--layer);
    min-block-size: 4rem;
    min-inline-size: 8rem;
    border-radius: var(--border-radius-md);
    outline: 2px solid transparent;
    outline-offset: -2px;

    &.tile-clickable,
    &.tile-selectable {
        box-sizing: border-box;
        padding: 0;
        border: 1px solid transparent;
        margin: 0;
        font-family: inherit;
        font-size: 100%;
        vertical-align: baseline;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1.28572;
        padding: var(--layout-density-padding-inline-local);
        cursor: pointer;
        transition: var(--transition-all-productive);
        outline-color: transparent;

        &:hover { background: var(--layer-hover); }
        &:focus {
            outline-color: var(--focus, #4e5e9e);
            outline-offset: -2px;
            text-decoration: none;
        }

        .tile-icon { inset-block-end: var(--layout-density-padding-inline-local); }
    }

    &.tile-clickable {
        color: var(--text-primary, #161616);
        text-decoration: none;
    }

    .tile-icon {
        position: absolute;
        inset-block-start: var(--layout-density-padding-inline-local);
        inset-inline-end: var(--layout-density-padding-inline-local);
        fill: var(--icon-interactive, #4e5e9e);

        &.tile-disabled,
        &:disabled { fill: var(--icon-disabled,rgba(22,22,22,0.25)); }
    }

    * { box-sizing: inherit; }
    hr {
        margin-inline: calc(-1 * var(--layout-density-padding-inline-local) );
        width: auto;
    }
}

.nav-tabs-contained + .tab-content {
    .tile {
        background-color: var(--layer-02);

        &.tile-clickable,
        &.tile-selectable {
            &:hover { background: var(--layer-hover-02); }
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
        return "@bundles/CoreBundle/Assets/css/app/less/components/tiles.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/tiles.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/tiles.less");
    }
}