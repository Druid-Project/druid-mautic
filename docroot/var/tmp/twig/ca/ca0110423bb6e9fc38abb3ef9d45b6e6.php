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

/* @bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen.less */
class __TwigTemplate_1d560a56f178724720b9293f12a6d9cc extends Template
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
// bootstrap-chosen.less
//
// An alternate stylesheet for Chosen (http://harvesthq.github.com/chosen/).
// This one is supposed to integrate better with Bootstrap.
//
// Submit bugfixes to: http://github.com/alxlit/bootstrap-chosen
//

@import \"bootstrap-chosen-variables.less\";

.chosen-select { width: 100%; }
.chosen-select-deselect { width: 100%; }

.chosen-container {
  display: inline-block;
  font-size: @font-size-base;
  position: relative;
  vertical-align: middle;

  .group-name {
    margin-right: 2px;
  }

  .chosen-drop {
    background: @chosen-background;
    border: 1px solid @chosen-drop-border;
    .border-bottom-radius(@chosen-border-radius);
    .box-shadow(@chosen-drop-box-shadow);
    position: absolute;
    top: 100%;
    left: -9000px;
    z-index: @chosen-drop-zindex;
  }

  &.chosen-with-drop .chosen-drop {
    left: 0;
    right: 0;
  }

  .chosen-results {
    color: var(--text-secondary);
    margin: 0 4px 4px 0;
    max-height: 240px;
    padding: 0 0 0 4px;
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;

    li {
      display: none;
      line-height: 1.4em;
      min-height: var(--spacing-07);
      list-style: none;
      margin: 0;
      padding: .6em var(--spacing-05) 5px;
      transition: var(--transition-all-productive);

      em {
        background: var(--layer-accent);
        font-style: normal;
      }

      &.group-result {
        display: list-item;
        cursor: default;
        color: var(--text-primary);
        font-weight: bold;
      }

      &.group-option {
        padding-left: 15px;
      }

      &.active-result {
        cursor: pointer;
        display: list-item;
      }

      &.highlighted {
        background-color: var(--layer-hover);
        background-image: none;
        color: var(--text-primary);

        em {
          background: transparent;
        }
      }

      &.disabled-result {
        display: list-item;
        color: var(--text-disabled);
      }
    }

    .no-results {
      background: var(--layer);
      display: list-item;
    }
  }

  .chosen-results-scroll {
    background: var(--layer);
    margin: 0 4px;
    position: absolute;
    text-align: center;
    width: 321px;
    z-index: 1;

    span {
      display: inline-block;
      height: @line-height-base; // 17px;
      text-indent: -5000px;
      width: 9px;
    }
  }

  .chosen-results-scroll-down {
    bottom: 0;

    span {
      background: url(\"@{chosen-sprite-path}\") no-repeat -4px -3px;
    }
  }

  .chosen-results-scroll-up {
    span {
      background: url(\"@{chosen-sprite-path}\") no-repeat -22px -3px;
    }
  }
}

.chosen-container-single {
  .chosen-single {
    background-color: @chosen-background;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    border: @chosen-border;
    border-width: var(--border-bottom);
    border-style: solid;
    border-color: var(--border-strong);
    .border-top-radius(@chosen-border-radius);
    .border-bottom-radius(@chosen-border-radius);
    .box-shadow(@chosen-box-shadow);
    display: block;
    height: @chosen-height;
    overflow: hidden;
    line-height: @chosen-height;
    padding: 0 0 0 var(--spacing-05);
    position: relative;
    text-decoration: none;
    white-space: nowrap;
    color: var(--text-secondary);

    span {
      display: block;
      margin-right: 26px;
      .text-overflow();
    }

    abbr {
      background: url(\"@{chosen-sprite-path}\") right top no-repeat;
      display: block;
      font-size: 1px;
      height: 10px;
      position: absolute;
      right: 26px;
      top: ((@chosen-height - 10px) / 2);
      width: 12px;

      &:hover {
        background-position: right -11px;
      }
    }

    &.chosen-disabled .chosen-single abbr:hover {
      background-position: right 2px;
    }

    div {
      display: block;
      height: 100%;
      position: absolute;
      top: 0;
      right: 0;
      width: 18px;

      b {
        background: url(\"@{chosen-sprite-path}\") no-repeat 0 7px;
        display: block;
        height: 100%;
        width: 100%;
      }
    }
  }

  .chosen-search {
    margin: 0;
    padding: 3px 4px;
    position: relative;
    white-space: nowrap;
    z-index: @zindex-dropdown;

    input[type=\"text\"] {
      background: url(\"@{chosen-sprite-path}\") no-repeat 100% -20px, @chosen-background;
      border: @chosen-border;
      .border-top-radius(@chosen-border-radius);
      .border-bottom-radius(@chosen-border-radius);
      .box-shadow(@chosen-box-shadow);
      margin: 1px 0;
      padding: 4px 20px 4px var(--spacing-05);
      height: var(--spacing-07);
      width: 100%;
      max-width: 100%;
      transition: var(--transition-all-productive);
      outline: 2px var(--outline-style) transparent;
      outline-offset: -2px;
      &:hover { outline: 2px var(--outline-style) transparent; }
      &:active, &.active,
      &:focus, &.focus { outline: 2px var(--outline-style) var(--focus); }

    }
  }

  .chosen-drop {
    margin-top: -1px;
    .border-bottom-radius(@chosen-border-radius);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
  }
}

.chosen-container-single-nosearch {
  .chosen-search {
    input {
      position: absolute;
      left: -9000px;
    }
  }
}

.chosen-container-multi {
  .chosen-choices {
    background-color: @chosen-background;
    color: var(--text-secondary);
    border: @chosen-border;
    border-width: var(--border-bottom);
    border-style: solid;
    border-color: var(--border-strong);
    padding: 0 var(--spacing-04);
    .border-top-radius(@chosen-multi-border-radius);
    .border-bottom-radius(@chosen-multi-border-radius);
    .box-shadow(@chosen-box-shadow);
    cursor: text;
    height: auto !important;
    height: 1%;
    min-height: 32px;
    margin: 0;
    overflow: hidden;
    position: relative;
    transition: var(--transition-all-productive);
    outline: 2px solid transparent;
    outline-offset: -2px;

    &:hover {
      background-color: var(--field-hover);
    }

    &:active, &:focus-within {
      outline: 2px solid var(--focus);
    }

    li {
      float: left;
      list-style: none;
    }

    .search-field {
      margin: 0;
      padding: 0;
      white-space: nowrap;

      input[type=\"text\"] {
        background: transparent !important;
        border: 0 !important;
        .box-shadow(none);
        color: var(--text-secondary);
        height: @chosen-multi-height - 8px;
        margin: 0;
        padding: 4px;
        outline: 0;
        .transition(var(--transition-all-productive));

        &:hover, &:active, &:focus {
          color: var(--text-primary);
        }
      }

      .default {
        //color: #999;
      }
    }

    .search-choice {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      -webkit-background-clip: padding-box;
      -moz-background-clip: padding;
      background-clip: padding-box;
      background-color: transparent;
      outline: 1px solid var(--background-inverse);
      .border-top-radius(100px);
      .border-bottom-radius(100px);
      color: var(--text-primary);
      cursor: default;
      line-height: 16px;
      margin: 6px 0 3px 5px;
      padding: 3px 9px 3px 9px;
      position: relative;
      max-width: 100%;
      > span {.text-overflow();}

      .search-choice-close {
        display: block;
        font-size: 1px;
        height: 10px;
        width: 12px;
        cursor: pointer;
        line-height: 10px;
        color: var(--text-primary);

        &::before {
          content: \"\\eb98\";
          font-family: 'remixicon' !important;
          font-size: 14px;
          color: var(--tag-color-warm-gray);
        }

        &:hover {
          background-position: right -11px;
        }
      }
    }

    .search-choice-focus {
      background: #d4d4d4;

      .search-choice-close {
        background-position: right -11px;
      }
    }
  }

  .chosen-results {
    margin: 0 0 0 0;
    padding: 0;
  }

  .chosen-drop {
    .result-selected {
      display: none;
    }
  }
}

.chosen-container.chosen-container-single.chosen-container-active .chosen-single {
  outline: 2px var(--outline-style) var(--focus);
}

.chosen-container-active {
  .chosen-single {
    .transition(@chosen-focus-transition);
  }

  &.chosen-with-drop .chosen-single {
    background-color: var(--field-hover);
    border: @chosen-focus-border;
    .border-bottom-radius(0);
    .box-shadow(@chosen-focus-box-shadow);
    .transition(@chosen-focus-transition);

    div {
      background: transparent;
      border-left: none;

      b {
        background-position: -18px 7px;
      }
    }
  }

  .chosen-choices {
    border: @chosen-focus-border;
    .border-bottom-radius(0);
    .box-shadow(@chosen-focus-box-shadow);
    .transition(@chosen-focus-transition);

    .search-field input[type=\"text\"] {
      color: var(--text-primary) !important;
    }
  }

  &.chosen-with-drop .chosen-choices {
    .border-bottom-radius(0);
  }
}

.chosen-disabled {
  cursor: default;
  opacity: 0.5 !important;
  pointer-events: none;

  .chosen-single {
    cursor: default;
  }

  .chosen-choices .search-choice .search-choice-close {
    cursor: default;
  }
}

.chosen-rtl {
  text-align: right;

  .chosen-single {
    padding: 0 8px 0 0;
    overflow: visible;

    span {
      margin-left: 26px;
      margin-right: 0;
      direction: rtl;
    }

    div {
      left: 7px;
      right: auto;
    }

    abbr {
      left: 26px;
      right: auto;
    }
  }

  .chosen-choices {
    .search-field input[type=\"text\"] {
      direction: rtl;
    }

    li {
      float: right;
    }

    .search-choice {
      margin: 6px 5px 3px 0;
      padding: 3px 5px 3px 19px;

      .search-choice-close {
        background-position: right top;
        left: 4px;
        right: auto;
      }
    }
  }

  &.chosen-container-single .chosen-results {
    margin: 0 0 4px 4px;
    padding: 0 4px 0 0;
  }

  .chosen-results .group-option {
    padding-left: 0;
    padding-right: 15px;
  }

  &.chosen-container-active.chosen-with-drop .chosen-single div {
    border-right: none;
  }

  .chosen-search input[type=\"text\"] {
    background: url(\"@{chosen-sprite-path}\") no-repeat -28px -20px, @chosen-background;
    direction: rtl;
    padding: 4px 5px 4px 20px;
  }
}

.input-group {
  .chosen-container:last-child {
    .chosen-single, .chosen-default, .chosen-choices {
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px;
    }
  }
  .chosen-container:not(:last-child) {
    .chosen-single, .chosen-default, .chosen-choices {
      border-top-right-radius: 0px;
      border-bottom-right-radius: 0px;
    }
  }
}

.form-inline {
  .chosen-container {
    display: inline-table;
    vertical-align: middle;
    min-width: 200px;
  }
}

.chosen-container {
  .default, .chosen-default {
    color: var(--text-secondary);
  }
}

@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 2dppx) {
  .chosen-rtl .chosen-search input[type=\"text\"],
  .chosen-container-single .chosen-single abbr,
  .chosen-container-single .chosen-single div b,
  .chosen-container-single .chosen-search input[type=\"text\"],
  .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
  .chosen-container .chosen-results-scroll-down span,
  .chosen-container .chosen-results-scroll-up span {
    background-image: url(\"@{chosen-sprite-retina-path}\") !important;
    background-size: 52px 37px !important;
    background-repeat: no-repeat !important;
  }
}

.has-error select.form-control + .chosen-container.chosen-container-single .chosen-single,
.has-error select.form-control + .chosen-container-multi .chosen-choices {
  border-color: @state-danger-text;
}

.has-error select.form-control + .chosen-container.chosen-container-single .chosen-single,
.has-error select.form-control + .chosen-container-multi .chosen-choices {
  border-color: @state-danger-text;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/chosen/bootstrap-chosen.less");
    }
}
