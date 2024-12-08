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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/video.less */
class __TwigTemplate_3b93209731fa193775ceaaa480952aa6 extends Template
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
.fr-element .fr-video {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element .fr-video::after {
  position: absolute;
  content: '';
  z-index: 1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  cursor: pointer;
  display: block;
  background: rgba(0, 0, 0, 0);
}
.fr-element .fr-video.fr-active > * {
  z-index: 2;
  position: relative;
}
.fr-element .fr-video > * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  max-width: 100%;
  border: none;
}
.fr-box .fr-video-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box .fr-video-resizer.fr-active {
  display: block;
}
.fr-box .fr-video-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-box .fr-video-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
.fr-box .fr-video-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  .fr-box .fr-video-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
.fr-video-size-layer .fr-video-group .fr-input-line {
  width: calc(50% - 5px);
  display: inline-block;
}
.fr-video-size-layer .fr-video-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
.fr-video-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  text-align: center;
}
.fr-video-upload-layer:hover {
  background: #ebebeb;
}
.fr-video-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-video-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-video-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-video-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-video-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-video-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-video-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-video-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-video-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-video-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
.fr-video-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/video.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/video.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/video.less");
    }
}
