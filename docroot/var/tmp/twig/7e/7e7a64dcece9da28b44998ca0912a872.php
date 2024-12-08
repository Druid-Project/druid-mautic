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

/* @bundles/FormBundle/Assets/css/form.css */
class __TwigTemplate_04618360e97eabdd27fc2c30e4cc932b extends Template
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
        yield "/* FormBundle */

/* Panel Styles */
.panel2 {
    border: 1px solid #ebedf0;
    -webkit-box-shadow: 0px 1px 1px #f3f3f3;
    box-shadow: 0px 1px 1px #f3f3f3;
    margin: 0 25px 25px 25px;
    zoom: 0.9;
}
.panel2 label {
    font-size: 1em;
}

/* Form Submit Action Group Header */
.form-submitaction-group-header {
    font-size: 1.1em;
    font-weight: bold;
}

/* Form Field Wrapper */
.form-field-wrapper {
    position: relative;
}
.form-field-wrapper img {
    max-width: 100%;
}

/* Mautic Forms Fields and Actions */
#mauticforms_actions .mauticform-row .action-label {
    font-size: 1.1em;
    font-weight: bold;
    display: block;
}
#mauticforms_actions .mauticform-row .action-descr {
    font-size: 0.9em;
    display: block;
}
@media (min-width: 768px) { .form-buttons { top: 8px; }}
.form-buttons {
    position: absolute;
    right: 8px;
    bottom: 10px;
    z-index: 1;
}
#mauticforms_fields .chosen-container-single .chosen-search input[type=\"text\"] {
    width: 100%;
}
#mauticforms_fields .panel-footer {
    padding: 3px 15px;
}
#mauticforms_fields input[type=\"date\"],
#mauticforms_fields input[type=\"time\"],
#mauticforms_fields input[type=\"datetime-local\"],
#mauticforms_fields input[type=\"month\"] {
    line-height: inherit;
}

/* Textarea Form HTML */
textarea.form-html {
    height: 200px;
}

/* Column Widths */
.col-form-id, .col-formresult-id {
    width: 75px;
}
.col-form-submissions {
    width: 100px;
}

/* Form Result List */
.formresult-list th .input-group {
    margin-top: 10px;
}
.formresult-list th:not(.col-formresult-id):not(.col-actions) {
    min-width: 125px;
}
.formresult-list th.col-formresult-id {
    min-width: 125px;
}

/* Inline Spacer */
.inline-spacer {
    padding-right: 20px;
}

/* Mautic Form Wrapper */
.mauticform_wrapper {
    max-width: 600px;
    margin: 10px auto;
}
.mauticform-innerform {}
.mauticform-post-success {}
.mauticform-name {
    font-weight: bold;
    font-size: 1.5em;
    margin-bottom: 3px;
}
.mauticform-description {
    margin-top: 2px;
    margin-bottom: 10px;
}
.mauticform-error {
    margin-bottom: 10px;
    color: red;
}
.mauticform-message {
    margin-bottom: 10px;
    color: green;
}
.mauticform-row {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: relative;
    min-height: 60px;
    padding: 10px;
}
.mauticform-label {
    font-size: 1.1em;
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
.mauticform-row.mauticform-required .mauticform-label:after {
    color: #e32;
    content: \" *\";
    display: inline;
}
.mauticform-helpmessage {
    display: block;
    font-size: 0.9em;
    margin-bottom: 3px;
}
.mauticform-errormsg {
    display: block;
    color: red;
    margin-top: 2px;
}
.mauticform-selectbox,
.mauticform-input,
.mauticform-textarea {
    width: 75%;
    max-width: 500px;
    padding: 0.5em 0.5em;
    border: 1px solid #CCC;
    border-radius: 4px;
    box-sizing: border-box;
}
.mauticform-checkboxgrp-row {
    display: flex;
    align-items: flex-start;
    gap: 5px;
}

.mauticform-checkboxgrp-row input[type=\"radio\"],
.mauticform-checkboxgrp-row input[type=\"checkbox\"] {
    margin: 0;
}
.mauticform-checkboxgrp-label {
    font-weight: normal;
    line-height: 1em;
}
.mauticform-checkboxgrp-checkbox {}
.mauticform-radiogrp-row {}
.mauticform-radiogrp-label {
    font-weight: normal;
}
input[type=\"radio\"].mauticform-radiogrp-radio {
    width: 16px;
    height: 16px;
    vertical-align: -3px;
    margin-right: 4px;
}

/* Mautic Form Button Styles */
.mauticform-button-wrapper .mauticform-button,
.mauticform-pagebreak-wrapper .mauticform-pagebreak {
    margin-bottom: 0;
    font-weight: 600;
    cursor: pointer;
    white-space: nowrap;
    font-size: 13px;
    line-height: 1.3856;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.mauticform-button-wrapper .mauticform-button.btn-ghost[disabled],
.mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-ghost[disabled] {
    cursor: not-allowed;
}
.mauticform-pagebreak-wrapper .mauticform-button-wrapper {
    display: inline;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Assets/css/form.css";
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
        return new Source("", "@bundles/FormBundle/Assets/css/form.css", "/app/docroot/app/bundles/FormBundle/Assets/css/form.css");
    }
}
