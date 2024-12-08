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

/* @bundles/CoreBundle/Assets/css/app/less/custom.less */
class __TwigTemplate_c20cf8d209f71ddc4fbe7299d9b8a7e6 extends Template
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
        yield "@import \"../../libraries/bootstrap/bootstrap-mautic-custom-variables\";

@media (min-width: @screen-md-min) {
  .modal-xl { width: 1140px; }
}

.label-as-badge {
  border-radius: @badge-border-radius !important;
}

.media-list {
  .media-body {
    width: auto;
  }
}

// Contact image
form[name=\"lead\"] {
  .media-body, .contact-avatar {
    width: 100%;
  }
}

// vertical tabs
.bg-auto {
  .tabs-left>li.active>a,
  .tabs-left>li.active>a:hover,
  .tabs-left>li.active>a:focus {
    border-left-width: 0;
  }

  .tabs-left, .tabs-right {
    -webkit-box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);

    li:last-child {
      margin-bottom: -2px;
    }
  }

  .tabs-right>li.active>a,
  .tabs-right>li.active>a:hover,
  .tabs-right>li.active>a:focus {
    border-right-width: 0;
  }
}

.tab-button {
  border-bottom: 1px solid #ebedf0 !important;
}

.modal-body.np {
  .tabs-horizontal {
    margin-top: -1px;
  }
  .tabs-left, .tabs-right {
    li>a {
      border-radius: 0;
    }
  }
}

//confirmation modal

.confirmation-modal .modal-content {
  width: 400px;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10% auto;
  padding: 8px;
  border-radius: 8px;
  background: #fff;
  text-align: center;
}

.content-overlay {
  position: absolute;
  background: #fbfbfb;
  z-index: 50;
  width: 100%;
  height: 100%;
  padding-left: 15px;
  font-weight: bold;
}

.stat-boxes {
  .panel {
    height: 164px;
  }
}

.has-click-event {
  cursor: pointer;
}

//Mautibot
.mautibot-error {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
}

label.required:after {
  content: \" *\";
  color: @brand-danger;
}

//Nav header
#app-header .nav > li > a {
  padding: 10px 12px;
}

.col-actions {
  width: 100px;
}

/* Shuffle */
.shuffle-item .card{
  height: 150px;
}

.equal, .equal > div[class*='col-'] {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex:1 1 auto;
}

.mautic-pleasewait {
  width: 200px;
  height: 50px;
  position: fixed;
  left: 50%;
  top: 10px;
  margin: 0 0 0 -100px;
  text-align: center;
  font-weight: bold;
  font-size: 2em;
  color: #eee;
  z-index: 9999;
}

body.noscroll {
  overflow: hidden;
}

.form-select-modal .panel-body {
  min-height: 150px;
}

@media (max-width: @screen-sm-min) {
  .form-select-modal .panel-body {
    min-height: 0;
  }
}

.theme-selected {
  outline: 1px solid var(--focus);
  -webkit-box-shadow: 0px 0px 40px var(--focus);
  box-shadow: 0px 0px 40px var(--focus);
}

#app-content.content-only {
  .toolbar-form-buttons.pull-right {
    padding-right:20px;
  }
}

.fr-toolbar {
  border-top: 2px solid #4e5d9d;
}
.modal-body-content iframe.fr-iframe {
  min-height:300px;
}

.CodeMirror {
  border: 1px solid #d5d5d5;
  border-radius: 3px;
}

table.table > tbody > tr > td.long-text {
  max-width: 500px;
  min-width: 300px;
  -ms-word-break: break-all;
  word-break: break-word;
  overflow-wrap: break-word;
  word-wrap: break-word;
  white-space: normal;
}

#dynamicContentContainer .remove-item {
  display:block;
}
#dynamicContentContainer > .tab-pane > .panel > ul {
  white-space: nowrap;
  overflow:auto;
  overflow-y:hidden;
  max-width:100%;
}
#dynamicContentContainer > .tab-pane > .panel > ul li {
  display:inline-block;
  vertical-align: top;
  float:none;
}

div[data-filter-container] .in-group {
  margin-left:20px;
}

div[data-filter-container] .panel {
  margin-bottom:0;
  margin-top:20px;
}

div[data-filter-container] .panel.in-group {
  margin-top:0;
  border-top:0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

td.col-id, th.col-id {
  width: 75px;
}

.badge-wrapper {
  float: right;
  vertical-align: middle;
  margin-right: -10px;
}
span.slot-caption {
  font-size: 12px;
}
.imagecard-caption, figcaption {
  font-size: 16px;
}
.imagecard {
  background-color: #ddd !important;
}
.imagecard .imagecard-caption {
  background-color: #bbb !important;
}

ul.media-list.media-list-feed div.media-body
{
  width:auto;
}

.ico-email:before {
  font-family: \"FontAwesome\";
  content: \"\\f1fa\";
}
.ico-sms:before {
  font-family: \"FontAwesome\";
  content: \"\\f27b\";
}

#globalSearchDropdown .list-group-item>a{
  padding-top: 10px;
}

.characters-count {
  z-index: 100;
  float: right;
  position: relative;
}

.ui-sortable-handle {
  cursor: grab;
}

.ui-sortable-handle:active {
  cursor: grabbing;
}
.notification {
  width: inherit !important;
}
.notification-title {
  display: block !important;
}

.flip-vertically {
  transform: scaleY(-1);
  display: inline-flex;
}

.disabled-row {
  opacity: 0.6;
  pointer-events: none;
  background-color: #f2f2f2;
}

.publishstatus_pulse {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  display: block;

  &:after {
    content: '';
    position: absolute;
    width: 8px;
    height: 8px;
    -webkit-animation: circle-pulse 2s infinite;
    animation: circle-pulse 3s infinite;
    border-radius: 50%;
    background-color: inherit;
  }
}

@keyframes circle-pulse {
  0% {
      -webkit-transform: scale(0.55);
      transform: scale(1);
      opacity: 0.8;
  }

  50% {
      -webkit-transform: scale(1);
      transform: scale(3);
      opacity: 0;
  }

  100% {
      -webkit-transform: scale(0.95);
      transform: scale(1);
      opacity: 0;
  }
}

.copy-icon {
  display: inline-flex;
  opacity: 0;
  transform: translateX(-0.25rem);
  transition: var(--transition-all-productive);
  margin-right: -18px;
  background-color: var(--layer);
  z-index: 2;
  position: relative;
  border-radius: clamp(1px, var(--border-radius-sm), 4px);
  aspect-ratio: 1 / 1;
  color: var(--icon-interactive);
  height: 18px;
  vertical-align: middle;
  justify-content: center;
  align-items: center;
}
code:hover > .copy-icon {
  opacity: 1;
  transform: none;
}

// Logo
// --------------------------------------------------

// mautic-brand
.mautic-brand {
  display: block;
  height: @header-height;
  padding-left: 35px;
  padding-right: 32px;
  width: 100%;
  overflow: hidden;

  &.pull-left {
    width: 75%;
  }

  // mautic logo figure
  > svg.mautic-logo-figure {
    width: @mautic-logo-figure-width;
    height: @header-height;
    .circle {
      fill: @mautic-logo-figure-circle-fill;
    }
    .m,
    .m-arrow {
      fill: @mautic-logo-figure-m-fill;
    }
  }

  // mautic logo text
  > svg.mautic-logo-text {
    height: @header-height;
    width: @mautic-logo-text-width;
    .m,.a,.u,.t,.i,.c {
      fill: @mautic-logo-text-fill
    }
  }
}

@media (max-width: 768px) {
  svg.mautic-logo-text {
    display: none;
  }
}

.list-toolbar {
  .input-group .twitter-typeahead:last-child .tt-input, .input-group .twitter-typeahead:last-child .tt-hint,
  .form-control.search,
  .input-group .input-group-btn button,
  .btn,
  div {
    height: 48px;
    border-radius: unset;
    margin: 0;
  }
  .input-group .twitter-typeahead:last-child .tt-input, .input-group .twitter-typeahead:last-child .tt-hint,
  .form-control.search,
  .input-group .input-group-btn button,
  .btn-ghost {
    &:hover {background-color: var(--field-hover);}
  }

  > .btn {
    &:last-child, &:only-of-type + .input-group > input { border-radius: 0 var(--border-radius-lg) 0 0; }
    &:first-child { border-radius: var(--border-radius-lg) 0 0 0; }
  }
}
.well { box-shadow: none; }

.collapsed .arrow { transform: scaleY(-1); }

.description {
  width: 410px;
  max-width: 410px;
  transition-delay: 2s;
  .transition(var(--transition-all-expressive));
}
.description:has(.collapsed) {
  width: 140px;
  .transition(all 1.5s var(--easing-standard-expressive));
}
.description-content { width: 388px; }
.dropup.quick-help {
  position: fixed;
  z-index: 9999;
  bottom: 15px;
  right: 15px;
}
.dropdown-toggle.quick-help {
    background-color: var(--background);
    border: 1px solid var(--border-subtle);
    box-shadow: rgba(0, 0, 0, 0.07) 0px -1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/custom.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/custom.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/custom.less");
    }
}
