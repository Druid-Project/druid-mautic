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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.min.js */
class __TwigTemplate_7379357cbc55954d9137cdd473dfead4 extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{saveInterval:1e4,saveURL:null,saveParams:{},saveParam:\"body\",saveMethod:\"POST\"}),a.FE.PLUGINS.save=function(b){function c(a,c){b.events.trigger(\"save.error\",[{code:a,message:n[a]},c])}function d(d){if(\"undefined\"==typeof d&&(d=b.html.get()),b.events.trigger(\"save.before\")===!1)return!1;if(b.opts.saveURL){var e={};for(var f in b.opts.saveParams)if(b.opts.saveParams.hasOwnProperty(f)){var g=b.opts.saveParams[f];\"function\"==typeof g?e[f]=g.call(this):e[f]=g}var h={};h[b.opts.saveParam]=d,a.ajax({type:b.opts.saveMethod,url:b.opts.saveURL,data:a.extend(h,e),crossDomain:b.opts.requestWithCORS,xhrFields:{withCredentials:b.opts.requestWithCredentials},headers:b.opts.requestHeaders}).done(function(a){j=d,b.events.trigger(\"save.after\",[a])}).fail(function(a){c(m,a.response||a.responseText)})}else c(l)}function e(){clearTimeout(i),i=setTimeout(function(){var a=b.html.get();(j!=a||k)&&(j=a,k=!1,d(a))},b.opts.saveInterval)}function f(){e(),k=!1}function g(){k=!0}function h(){b.opts.saveInterval&&(j=b.html.get(),b.events.on(\"contentChanged\",e),b.events.on(\"keydown destroy\",function(){clearTimeout(i)}))}var i=null,j=null,k=!1,l=1,m=2,n={};return n[l]=\"Missing saveURL option.\",n[m]=\"Something went wrong during save.\",{_init:h,save:d,reset:f,force:g}},a.FE.DefineIcon(\"save\",{NAME:\"floppy-o\"}),a.FE.RegisterCommand(\"save\",{title:\"Save\",undo:!1,focus:!1,refreshAfterCallback:!1,callback:function(){this.save.save()},plugin:\"save\"})});";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.min.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.min.js");
    }
}
