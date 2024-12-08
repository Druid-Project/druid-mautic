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

/* @MauticForm/Builder/_style.html.twig */
class __TwigTemplate_0c3b0826f33e9a0c202a7cec936761c0 extends Template
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
        yield "<style type=\"text/css\" scoped>
    .mauticform_wrapper { max-width: 600px; margin: 10px auto; }
    .mauticform-innerform {}
    .mauticform-post-success {}
    .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
    .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
    .mauticform-error { margin-bottom: 10px; color: red; }
    .mauticform-message { margin-bottom: 10px; color: green; }
    .mauticform-row { display: block; margin-bottom: 20px; }
    .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
    .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: \" *\"; display: inline; }
    .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
    .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
    .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
    .mauticform-checkboxgrp-row {}
    .mauticform-checkboxgrp-label { font-weight: normal; }
    .mauticform-checkboxgrp-checkbox {}
    .mauticform-radiogrp-row {}
    .mauticform-radiogrp-label { font-weight: normal; }
    .mauticform-radiogrp-radio {}
    .mauticform-button-wrapper .mauticform-button.btn-ghost, .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-ghost { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
    .mauticform-button-wrapper .mauticform-button, .mauticform-pagebreak-wrapper .mauticform-pagebreak { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
    .mauticform-button-wrapper .mauticform-button.btn-ghost[disabled], .mauticform-pagebreak-wrapper .mauticform-pagebreak.btn-ghost[disabled] { background-color: #ffffff; border-color: #dddddd; opacity: 0.75; cursor: not-allowed; }
    .mauticform-pagebreak-wrapper .mauticform-button-wrapper {  display: inline; }

    /**
    * @see https://github.com/TarekRaafat/autoComplete.js/blob/master/dist/css/autoComplete.02.css.
    */
    .autoComplete_wrapper {position: relative;}
    .autoComplete_wrapper > input::placeholder {transition: all 0.3s ease;}
    .autoComplete_wrapper > ul {position: absolute;max-height: 226px;overflow-y: scroll;top: 100%;left: 0;right: 0;padding: 0;margin: 0.5rem 0 0 0;border-radius: 4px;background-color: #fff;border: 1px solid rgba(33, 33, 33, 0.1);z-index: 1000;outline: none;}
    .autoComplete_wrapper > ul > li {padding: 10px 20px;list-style: none;text-align: left;font-size: 16px;color: #212121;transition: all 0.1s ease-in-out;border-radius: 3px;background-color: rgba(255, 255, 255, 1);white-space: nowrap;overflow: hidden;text-overflow: ellipsis;transition: all 0.2s ease;}
    .autoComplete_wrapper > ul > li > span {float: right;}
    .autoComplete_wrapper > ul > li::selection {color: rgba(#ffffff, 0);background-color: rgba(#ffffff, 0);}
    .autoComplete_wrapper > ul > li:hover {cursor: pointer;background-color: rgba(123, 123, 123, 0.1);}
    .autoComplete_wrapper > ul > li mark {background-color: transparent;font-weight: bold;}
    .autoComplete_wrapper > ul > li mark::selection {background-color: rgba(#ffffff, 0);}
    .autoComplete_wrapper > ul > li[aria-selected=\"true\"] {background-color: rgba(123, 123, 123, 0.1);}
    @media only screen and (max-width: 600px) {
      .autoComplete_wrapper > input {width: 18rem;}
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/_style.html.twig";
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
        return new Source("", "@MauticForm/Builder/_style.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/_style.html.twig");
    }
}