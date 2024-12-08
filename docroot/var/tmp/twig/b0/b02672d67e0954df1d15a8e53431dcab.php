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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/table.less */
class __TwigTemplate_3686cfbab752144b72424d89616aee41 extends Template
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

.clearfix::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element table td.fr-selected-cell,
.fr-element table th.fr-selected-cell {
  border: 1px double #1e88e5;
}
.fr-element table tr {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element table td,
.fr-element table th {
  user-select: text;
  -o-user-select: text;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
}
.fr-element .fr-no-selection table td,
.fr-element .fr-no-selection table th {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-table-resizer {
  cursor: col-resize;
  position: fixed;
  z-index: 3;
  display: none;
}
.fr-table-resizer.fr-moving {
  z-index: 2;
}
.fr-table-resizer div {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  border-right: 1px solid #1e88e5;
}
.fr-no-selection {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-popup .fr-table-size .fr-table-size-info {
  text-align: center;
  font-size: 14px;
  padding: 8px;
}
.fr-popup .fr-table-size .fr-select-table-size {
  line-height: 0;
  padding: 0 5px 5px;
  white-space: nowrap;
}
.fr-popup .fr-table-size .fr-select-table-size > span {
  display: inline-block;
  padding: 0px 4px 4px 0;
  background: transparent;
}
.fr-popup .fr-table-size .fr-select-table-size > span > span {
  display: inline-block;
  width: 18px;
  height: 18px;
  border: 1px solid #dddddd;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover {
  background: transparent;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover > span {
  background: rgba(30, 136, 229, 0.3);
  border: solid 1px #1e88e5;
}
.fr-popup .fr-table-size .fr-select-table-size .new-line::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-popup.fr-above .fr-table-size .fr-select-table-size > span {
  display: inline-block !important;
}
.fr-popup .fr-table-colors-buttons {
  margin-bottom: 5px;
}
.fr-popup .fr-table-colors {
  line-height: 0;
  display: block;
}
.fr-popup .fr-table-colors > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-table-colors > span > i {
  text-align: center;
  line-height: 32px;
  height: 32px;
  width: 32px;
  font-size: 13px;
  position: absolute;
  bottom: 0;
  cursor: default;
  left: 0;
}
.fr-popup .fr-table-colors > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-popup.fr-desktop .fr-table-size .fr-select-table-size > span > span {
  width: 12px;
  height: 12px;
}
.fr-insert-helper {
  position: fixed;
  z-index: 9999;
  white-space: nowrap;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/table.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/table.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/table.less");
    }
}
