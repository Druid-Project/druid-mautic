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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/font_size.min.js */
class __TwigTemplate_77fe6497c1afbface75ace52002b36a6 extends Template
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

!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\"],a):\"object\"==typeof module&&module.exports?module.exports=function(b,c){return void 0===c&&(c=\"undefined\"!=typeof window?require(\"jquery\"):require(\"jquery\")(b)),a(c),c}:a(jQuery)}(function(a){a.extend(a.FE.DEFAULTS,{fontSize:[\"8\",\"9\",\"10\",\"11\",\"12\",\"14\",\"18\",\"24\",\"30\",\"36\",\"48\",\"60\",\"72\",\"96\"],fontSizeSelection:!1,fontSizeDefaultSelection:\"12\"}),a.FE.PLUGINS.fontSize=function(b){function c(a){b.format.applyStyle(\"font-size\",a)}function d(c,d){var e=a(b.selection.element()).css(\"font-size\");d.find(\".fr-command.fr-active\").removeClass(\"fr-active\").attr(\"aria-selected\",!1),d.find('.fr-command[data-param1=\"'+e+'\"]').addClass(\"fr-active\").attr(\"aria-selected\",!0);var f=d.find(\".fr-dropdown-list\"),g=d.find(\".fr-active\").parent();g.length?f.parent().scrollTop(g.offset().top-f.offset().top-(f.parent().outerHeight()/2-g.outerHeight()/2)):f.parent().scrollTop(0)}function e(c){if(b.opts.fontSizeSelection){var d=b.helpers.getPX(a(b.selection.element()).css(\"font-size\"));c.find(\"> span\").text(d)}}return{apply:c,refreshOnShow:d,refresh:e}},a.FE.RegisterCommand(\"fontSize\",{type:\"dropdown\",title:\"Font Size\",displaySelection:function(a){return a.opts.fontSizeSelection},displaySelectionWidth:30,defaultSelection:function(a){return a.opts.fontSizeDefaultSelection},html:function(){for(var a='<ul class=\"fr-dropdown-list\" role=\"presentation\">',b=this.opts.fontSize,c=0;c<b.length;c++){var d=b[c];a+='<li role=\"presentation\"><a class=\"fr-command\" tabIndex=\"-1\" role=\"option\" data-cmd=\"fontSize\" data-param1=\"'+d+'px\" title=\"'+d+'\">'+d+\"</a></li>\"}return a+=\"</ul>\"},callback:function(a,b){this.fontSize.apply(b)},refresh:function(a){this.fontSize.refresh(a)},refreshOnShow:function(a,b){this.fontSize.refreshOnShow(a,b)},plugin:\"fontSize\"}),a.FE.DefineIcon(\"fontSize\",{NAME:\"text-height\"})});";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/font_size.min.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/font_size.min.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/font_size.min.js");
    }
}
