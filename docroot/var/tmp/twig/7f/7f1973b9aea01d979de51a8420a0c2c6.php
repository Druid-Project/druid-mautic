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

/* @bundles/CoreBundle/Assets/css/app/less/components/accordions.less */
class __TwigTemplate_c7470c8e8fc92711ba2a55b6e1d49c0d extends Template
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
        yield ".accordion {
    --layout-density-padding-inline-local: 16px;
    padding: 0;
    border: 0;
    margin: 0;
    margin-bottom: -1px;
    font-family: inherit;
    font-size: 100%;
    vertical-align: baseline;
    inline-size: 100%;
    list-style: none;

    .panel {
        display: list-item;
        border: none;
        border-radius: 0;
        margin: 0;
        overflow: visible;
        border-block-start: 1px solid var(--border-subtle);
        transition: border-color cubic-bezier(.2,0,.38,.9) 110ms;
        background-color: transparent;
        box-shadow: none;
    }

    .panel:last-child {border-block-end:1px solid var(--border-subtle);}
    .panel:not(.panel--active):last-child:hover { border-block-end-color: var(--layer-hover) }
}

.accordion-heading {
    padding: 0;
    border: 0;
    margin: 0;
    font-family: inherit;
    font-size: 100%;
    vertical-align: baseline;
    display: inline-block;
    padding: 0;
    border: 0;
    -webkit-appearance: none;
    appearance: none;
    background: 0 0;
    cursor: pointer;
    text-align: start;
    inline-size: 100%;
    position: relative;
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: flex-start;
    margin: 0;
    color: var(--text-primary,#161616);
    cursor: pointer;
    inline-size: 100%;
    min-block-size: 40px;
    padding-inline-end:var(--layout-density-padding-inline-local);
    transition: background-color cubic-bezier(.2,0,.38,.9) 110ms
}

.accordion-heading::-moz-focus-inner { border: 0; }

.accordion-heading:hover {
    background-color: var(--layer-hover);
    outline: none
}

.accordion-heading:focus {
    position: relative;
    z-index: 2;
    box-shadow: 0 -1px 0 0 var(--focus,#4e5e9e),inset 0 1px 0 0 var(--focus,#4e5e9e),inset 2px 0 0 0 var(--focus,#4e5e9e),0 1px 0 0 var(--focus,#4e5e9e),inset 0 -1px 0 0 var(--focus,#4e5e9e),inset -2px 0 0 0 var(--focus,#4e5e9e);
    outline: none
}

.accordion-heading[disabled] {
    color: var(--text-disabled,rgba(22,22,22,0.25));
    cursor: not-allowed
}

.accordion-heading[disabled] .accordion-arrow { fill: var(--icon-disabled,#16161640); }
.accordion-heading[disabled]:hover::before { background-color: transparent; }

.accordion-arrow {
    outline: 2px solid transparent;
    outline-offset: -2px;
    flex: 0 0 1rem;
    fill: var(--icon-primary,#161616);
    inline-size: 1rem;
    transform: scaleY(-1);
    transition: var(--transition-all-productive);
}

.accordion-heading.collapsed .accordion-arrow {
    fill: var(--icon-primary,#161616);
    transform: scaleY(1);
}

.accordion-title {
    font-weight: 400;
    line-height: 1.42857;
    color: var(--text-primary);
    z-index: 1;
    inline-size: 100%;
    padding-inline-start: var(--layout-density-padding-inline-local);
    text-align: start;
}

.accordion-content {
    display: flex;
    flex-direction: column;
    padding-inline: var(--layout-density-padding-inline-local);
    margin-block: 20px;
    margin-block-end: 25px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/accordions.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/accordions.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/accordions.less");
    }
}
