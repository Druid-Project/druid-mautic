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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/char_counter.min.js */
class __TwigTemplate_bf87c45cbc3a152168aba3135e4c7731 extends Template
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
        yield "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{charCounterMax:-1,charCounterCount:!0}),a.FE.PLUGINS.charCounter=function(b){function c(){return b.el.textContent.length}function d(a){if(b.opts.charCounterMax<0)return!0;if(c()<b.opts.charCounterMax)return!0;var d=a.which;return!(!b.keys.ctrlKey(a)&&b.keys.isCharacter(d))||(a.preventDefault(),a.stopPropagation(),b.events.trigger(\"charCounter.exceeded\"),!1)}function e(d){if(b.opts.charCounterMax<0)return d;var e=a(\"<div>\").html(d).text().length;return e+c()<=b.opts.charCounterMax?d:(b.events.trigger(\"charCounter.exceeded\"),\"\")}function f(){if(b.opts.charCounterCount){var a=c()+(b.opts.charCounterMax>0?\"/\"+b.opts.charCounterMax:\"\");h.text(a),b.opts.toolbarBottom&&h.css(\"margin-bottom\",b.\$tb.outerHeight(!0));var d=b.\$wp.get(0).offsetWidth-b.\$wp.get(0).clientWidth;d>=0&&(\"rtl\"==b.opts.direction?h.css(\"margin-left\",d):h.css(\"margin-right\",d))}}function g(){return!!b.\$wp&&(!!b.opts.charCounterCount&&(h=a('<span class=\"fr-counter\"></span>'),h.css(\"bottom\",b.\$wp.css(\"border-bottom-width\")),b.\$box.append(h),b.events.on(\"keydown\",d,!0),b.events.on(\"paste.afterCleanup\",e),b.events.on(\"keyup contentChanged input\",function(){b.events.trigger(\"charCounter.update\")}),b.events.on(\"charCounter.update\",f),b.events.trigger(\"charCounter.update\"),void b.events.on(\"destroy\",function(){a(b.o_win).off(\"resize.char\"+b.id),h.removeData().remove(),h=null})))}var h;return{_init:g,count:c}}});";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/char_counter.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/char_counter.min.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/char_counter.min.js");
    }
}
