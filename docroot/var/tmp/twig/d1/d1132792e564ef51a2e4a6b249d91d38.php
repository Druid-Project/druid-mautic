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

/* @bundles/CoreBundle/Assets/css/app/less/components/toggle.less */
class __TwigTemplate_c7b494772ff9abc2cff6f28c84e6533b extends Template
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
        yield ".toggle {
    display: inline-block;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.toggle__appearance {
    display: inline-grid;
    align-items: center;
    -webkit-column-gap: .5em;
    -moz-column-gap: .5em;
    column-gap: .5em;
    cursor: pointer;
    grid-template-columns: -webkit-max-content -webkit-max-content;
    grid-template-columns: max-content max-content
}

.toggle__switch {
    --switch-size: 40px;
    position: relative;
    border-radius: var(--switch-size);
    background-color: var(--toggle-off, #8d8d8d);
    block-size: calc(var(--switch-size) - 17px);
    min-block-size: 10px;
    inline-size: var(--switch-size);
    transition: var(--transition-all-productive);
}

.toggle__switch::before {
    position: absolute;
    border-radius: 50%;
    background-color: var(--icon-on-color, #ffffff);
    block-size: calc(var(--switch-size) - 21px);
    content: \"\";
    inline-size: calc(var(--switch-size) - 21px);
    inset-block-start: 2px;
    inset-inline-start: 2px;
    transition: -webkit-transform var(--duration-expressive) cubic-bezier(.54, 1.85, .5, 1);
    transition: transform var(--duration-expressive) cubic-bezier(.54, 1.85, .5, 1);
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}

.toggle__label:focus .toggle__switch,
.toggle:not(.toggle--disabled):not(:has(.disabled)):active .toggle__switch {
    box-shadow: 0 0 0 1px var(--focus-inset, #ffffff), 0 0 0 3px var(--focus, #0f62fe)
}

.toggle__switch--checked {
    background-color: var(--support-success, #24a148);
}

.toggle__switch--checked::before {
    -webkit-transform: translateX(17px);
    transform: translateX(17px)
}

.toggle__text {
    font-size: var(--body-01-font-size, 0.875em);
    font-weight: var(--body-01-font-weight, 400);
    line-height: var(--body-01-line-height, 1.42857);
    letter-spacing: var(--body-01-letter-spacing, 0.16px);
    color: var(--text-primary, #161616)
}

.toggle__appearance[size=\"sm\"] .toggle__switch {
    --switch-size: 33px;
    &:before {box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);}
}

.toggle__check {
    position: absolute;
    block-size: .4125em;
    fill: var(--support-success, #24a148);
    inline-size: .475em;
    inset-block-start: .375em;
    inset-inline-end: .3125em;
    visibility: hidden
}

.toggle__appearance[size=\"sm\"] .toggle__switch--checked .toggle__check {
    visibility: visible
}

.toggle--disabled, .toggle:has(.disabled)
{
    cursor: not-allowed;

    .toggle__label {
        pointer-events: none;
    }

    .toggle__label-text,
    .toggle__text {
        color: var(--text-disabled, rgba(22, 22, 22, 0.25));
    }

    .toggle__switch {
        background-color: var(--button-disabled, #c6c6c6);
    }

    .toggle__switch::before {
        background-color: var(--icon-on-color-disabled, #8d8d8d);
        box-shadow: none;
    }

    .toggle__check {
        fill: var(--button-disabled, #c6c6c6);
    }
}

.toggle--readonly .toggle__appearance {
    cursor: default
}

.toggle--readonly .toggle__switch {
    border: 1px solid var(--icon-disabled, rgba(22, 22, 22, 0.25));
    background-color: transparent
}

.toggle--readonly .toggle__switch::before {
    background-color: var(--text-primary, #161616);
    inset-block-start: 1px;
    inset-inline-start: 1px;
}

.toggle--readonly .toggle__check {
    fill: var(--background, #ffffff);
    inset-block-start: .3125em;
    inset-inline-end: .25em
}

.toggle--readonly .toggle__text {
    cursor: text;
    -webkit-user-select: text;
    -ms-user-select: text;
    user-select: text
}

@media screen and (-ms-high-contrast:active),
(forced-colors:active) {

    .toggle__switch,
    .toggle__switch::before {
        outline: 1px solid transparent
    }
}

@media screen and (-ms-high-contrast:active),
(forced-colors:active) {

    .toggle__label:focus .toggle__switch,
    .toggle:not(.toggle--disabled):not(:has(.disabled)):active .toggle__switch {
        color: Highlight;
        outline: 1px solid Highlight
    }
}

[dir=rtl] .toggle__switch--checked::before {
    -webkit-transform: translateX(-17px);
    transform: translateX(-17px)
}

[dir=rtl] .toggle__appearance--sm .toggle__switch--checked::before {
    -webkit-transform: translateX(-1em);
    transform: translateX(-1em)
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/toggle.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/toggle.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/toggle.less");
    }
}
