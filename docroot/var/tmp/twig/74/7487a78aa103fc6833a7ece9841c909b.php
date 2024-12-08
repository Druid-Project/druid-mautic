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

/* @bundles/CoreBundle/Assets/css/libraries/builder.css */
class __TwigTemplate_8b12f5079bee371cf4d860582bf28229 extends Template
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
:focus {
  outline: 0;
}
.fr-element,
.fr-element:focus {
  outline: 0px solid transparent;
}
.fr-box.fr-basic .fr-element {
  color: #000000;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  overflow-x: auto;
  min-height: 40px;
}
.fr-element {
  background: transparent;
  position: relative;
  z-index: 2;
  -webkit-user-select: auto;
}
.fr-element a {
  user-select: auto;
  -o-user-select: auto;
  -moz-user-select: auto;
  -khtml-user-select: auto;
  -webkit-user-select: auto;
  -ms-user-select: auto;
}
.fr-element.fr-disabled {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element [contenteditable=\"false\"] {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element [contenteditable=\"true\"] {
  outline: 0px solid transparent;
}
.fr-box a.fr-floating-btn {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 100%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  height: 32px;
  width: 32px;
  background: #ffffff;
  color: #1e88e5;
  -webkit-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  outline: none;
  left: 0;
  top: 0;
  line-height: 32px;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  text-align: center;
  display: block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
}
.fr-box a.fr-floating-btn svg {
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
  fill: #1e88e5;
}
.fr-box a.fr-floating-btn i {
  font-size: 14px;
  line-height: 32px;
}
.fr-box a.fr-floating-btn.fr-btn + .fr-btn {
  margin-left: 10px;
}
.fr-box a.fr-floating-btn:hover {
  background: #ebebeb;
  cursor: pointer;
}
.fr-box a.fr-floating-btn:hover svg {
  fill: #1e88e5;
}
.fr-box .fr-visible a.fr-floating-btn {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
}
iframe.fr-iframe {
  width: 100%;
  border: none;
  position: relative;
  display: block;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-wrapper {
  position: relative;
  z-index: 1;
}
.fr-wrapper::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-wrapper .fr-placeholder {
  position: absolute;
  font-size: 12px;
  color: #aaaaaa;
  z-index: 1;
  display: none;
  top: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}
.fr-wrapper.show-placeholder .fr-placeholder {
  display: block;
}
.fr-wrapper ::selection {
  background: #b5d6fd;
  color: #000000;
}
.fr-wrapper ::-moz-selection {
  background: #b5d6fd;
  color: #000000;
}
.fr-box.fr-basic .fr-wrapper {
  background: #ffffff;
  border: 0px;
  border-top: 0;
  top: 0;
  left: 0;
}
.fr-box.fr-basic.fr-top .fr-wrapper {
  border-top: 0;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-basic.fr-bottom .fr-wrapper {
  border-bottom: 0;
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-tooltip {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0 8px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  background: #222222;
  color: #ffffff;
  font-size: 11px;
  line-height: 22px;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-transition: opacity 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  left: -3000px;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  z-index: 9997;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-tooltip.fr-visible {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-toolbar .fr-command.fr-btn,
.fr-popup .fr-command.fr-btn {
  background: transparent;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  margin: 0px 2px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  float: left;
  padding: 0;
  width: 38px;
  height: 38px;
}
.fr-toolbar .fr-command.fr-btn::-moz-focus-inner,
.fr-popup .fr-command.fr-btn::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.fr-toolbar .fr-command.fr-btn.fr-btn-text,
.fr-popup .fr-command.fr-btn.fr-btn-text {
  width: auto;
}
.fr-toolbar .fr-command.fr-btn i,
.fr-popup .fr-command.fr-btn i {
  display: block;
  font-size: 14px;
  width: 14px;
  margin: 12px 12px;
  text-align: center;
  float: none;
}
.fr-toolbar .fr-command.fr-btn span.fr-sr-only,
.fr-popup .fr-command.fr-btn span.fr-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-toolbar .fr-command.fr-btn span,
.fr-popup .fr-command.fr-btn span {
  font-size: 14px;
  display: block;
  line-height: 17px;
  min-width: 38px;
  float: left;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  height: 17px;
  font-weight: bold;
  padding: 0 2px;
}
.fr-toolbar .fr-command.fr-btn img,
.fr-popup .fr-command.fr-btn img {
  margin: 12px 12px;
  width: 14px;
}
.fr-toolbar .fr-command.fr-btn.fr-active,
.fr-popup .fr-command.fr-btn.fr-active {
  color: #1e88e5;
  background: transparent;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-selection,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-selection {
  width: auto;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-selection span,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-selection span {
  font-weight: normal;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown i,
.fr-popup .fr-command.fr-btn.fr-dropdown i,
.fr-toolbar .fr-command.fr-btn.fr-dropdown span,
.fr-popup .fr-command.fr-btn.fr-dropdown span,
.fr-toolbar .fr-command.fr-btn.fr-dropdown img,
.fr-popup .fr-command.fr-btn.fr-dropdown img {
  margin-left: 8px;
  margin-right: 16px;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active {
  color: #222222;
  background: #d6d6d6;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:hover,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:hover,
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:focus,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:focus {
  background: #d6d6d6 !important;
  color: #222222 !important;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:hover::after,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:hover::after,
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:focus::after,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:focus::after {
  border-top-color: #222222 !important;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown::after,
.fr-popup .fr-command.fr-btn.fr-dropdown::after {
  position: absolute;
  width: 0;
  height: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #222222;
  right: 4px;
  top: 17px;
  content: \"\";
}
.fr-toolbar .fr-command.fr-btn.fr-disabled,
.fr-popup .fr-command.fr-btn.fr-disabled {
  color: #bdbdbd;
  cursor: default;
}
.fr-toolbar .fr-command.fr-btn.fr-disabled::after,
.fr-popup .fr-command.fr-btn.fr-disabled::after {
  border-top-color: #bdbdbd !important;
}
.fr-toolbar .fr-command.fr-btn.fr-hidden,
.fr-popup .fr-command.fr-btn.fr-hidden {
  display: none;
}
.fr-toolbar.fr-disabled .fr-btn,
.fr-popup.fr-disabled .fr-btn,
.fr-toolbar.fr-disabled .fr-btn.fr-active,
.fr-popup.fr-disabled .fr-btn.fr-active {
  color: #bdbdbd;
}
.fr-toolbar.fr-disabled .fr-btn.fr-dropdown::after,
.fr-popup.fr-disabled .fr-btn.fr-dropdown::after,
.fr-toolbar.fr-disabled .fr-btn.fr-active.fr-dropdown::after,
.fr-popup.fr-disabled .fr-btn.fr-active.fr-dropdown::after {
  border-top-color: #bdbdbd;
}
.fr-toolbar.fr-rtl .fr-command.fr-btn,
.fr-popup.fr-rtl .fr-command.fr-btn {
  float: right;
}
.fr-toolbar.fr-inline .fr-command.fr-btn {
  float: none;
}
.fr-desktop .fr-command:hover,
.fr-desktop .fr-command:focus {
  color: #222222;
  background: #ebebeb;
}
.fr-desktop .fr-command:hover::after,
.fr-desktop .fr-command:focus::after {
  border-top-color: #222222 !important;
}
.fr-desktop .fr-command.fr-selected {
  color: #222222;
  background: #d6d6d6;
}
.fr-desktop .fr-command.fr-active:hover,
.fr-desktop .fr-command.fr-active:focus {
  color: #1e88e5;
  background: #ebebeb;
}
.fr-desktop .fr-command.fr-active.fr-selected {
  color: #1e88e5;
  background: #d6d6d6;
}
.fr-desktop .fr-command.fr-disabled:hover,
.fr-desktop .fr-command.fr-disabled:focus,
.fr-desktop .fr-command.fr-disabled.fr-selected {
  background: transparent;
}
.fr-desktop.fr-disabled .fr-command:hover,
.fr-desktop.fr-disabled .fr-command:focus,
.fr-desktop.fr-disabled .fr-command.fr-selected {
  background: transparent;
}
.fr-toolbar.fr-mobile .fr-command.fr-blink,
.fr-popup.fr-mobile .fr-command.fr-blink {
  background: transparent;
}
.fr-command.fr-btn + .fr-dropdown-menu {
  display: inline-block;
  position: absolute;
  right: auto;
  bottom: auto;
  height: auto;
  z-index: 3;
  -webkit-overflow-scrolling: touch;
  overflow: hidden;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper {
  background: #ffffff;
  padding: 0;
  margin: auto;
  display: inline-block;
  text-align: left;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: max-height 0.2s ease 0s;
  -moz-transition: max-height 0.2s ease 0s;
  -ms-transition: max-height 0.2s ease 0s;
  -o-transition: max-height 0.2s ease 0s;
  margin-top: 0;
  float: left;
  max-height: 0;
  height: 0;
  margin-top: 0 !important;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content {
  overflow: auto;
  position: relative;
  max-height: 275px;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li {
  padding: 0;
  margin: 0;
  font-size: 15px;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a {
  padding: 0 24px;
  line-height: 200%;
  display: block;
  cursor: pointer;
  white-space: nowrap;
  color: inherit;
  text-decoration: none;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a.fr-active {
  background: #d6d6d6;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a.fr-disabled {
  color: #bdbdbd;
  cursor: default;
}
.fr-command.fr-btn.fr-active + .fr-dropdown-menu {
  display: inline-block;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
}
.fr-command.fr-btn.fr-active + .fr-dropdown-menu .fr-dropdown-wrapper {
  height: auto;
  max-height: 275px;
}
.fr-bottom > .fr-command.fr-btn + .fr-dropdown-menu {
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-toolbar.fr-rtl .fr-dropdown-wrapper,
.fr-popup.fr-rtl .fr-dropdown-wrapper {
  text-align: right !important;
}
body.prevent-scroll {
  overflow: hidden;
  text-align: center;
}
body.prevent-scroll.fr-mobile {
  position: fixed;
  -webkit-overflow-scrolling: touch;
}
.fr-modal {
  color: #222222;
  font-family: Arial, Helvetica, sans-serif;
  position: fixed;
  overflow-x: auto;
  overflow-y: scroll;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  z-index: 9999;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-modal .fr-modal-wrapper {
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  margin: 20px auto;
  display: inline-block;
  background: #ffffff;
  min-width: 300px;
  -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  border: 0px;
  border-top: 5px solid #222222;
  overflow: hidden;
  width: 90%;
  padding-bottom: 10px;
  position: relative;
}
@media (min-width: 768px) and (max-width: 991px) {
  .fr-modal .fr-modal-wrapper {
    margin: 30px auto;
    width: 70%;
  }
}
@media (min-width: 992px) {
  .fr-modal .fr-modal-wrapper {
    margin: 50px auto;
    width: 600px;
  }
}
.fr-modal .fr-modal-wrapper .fr-modal-head {
  background: #ffffff;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  border-bottom: 0px;
  overflow: hidden;
  position: absolute;
  width: 100%;
  min-height: 42px;
  z-index: 3;
  -webkit-transition: height 0.2s ease 0s;
  -moz-transition: height 0.2s ease 0s;
  -ms-transition: height 0.2s ease 0s;
  -o-transition: height 0.2s ease 0s;
}
.fr-modal .fr-modal-wrapper .fr-modal-head i {
  padding: 12px;
  width: 20px;
  font-size: 16px;
  cursor: pointer;
  line-height: 18px;
  color: #222222;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-modal .fr-modal-wrapper .fr-modal-head i.fr-modal-close {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-transition: color 0.2s ease 0s;
  -moz-transition: color 0.2s ease 0s;
  -ms-transition: color 0.2s ease 0s;
  -o-transition: color 0.2s ease 0s;
}
.fr-modal .fr-modal-wrapper .fr-modal-head h4 {
  font-size: 18px;
  padding: 12px 10px;
  margin: 0;
  font-weight: 400;
  line-height: 18px;
  display: inline-block;
  float: left;
}
.fr-modal .fr-modal-wrapper div.fr-modal-body {
  height: 100%;
  min-height: 150px;
  overflow-y: scroll;
}
.fr-desktop .fr-modal-wrapper .fr-modal-head i:hover {
  background: #ebebeb;
}
.fr-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #000000;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  z-index: 9998;
}
.fr-popup {
  position: absolute;
  display: none;
  color: #222222;
  background: #ffffff;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  margin-top: 10px;
  z-index: 9995;
  text-align: left;
  border: 0px;
  border-top: 5px solid #222222;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-popup .fr-input-focus {
  background: #f5f5f5;
}
.fr-popup.fr-above {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 5px solid #222222;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-popup.fr-active {
  display: block;
}
.fr-popup.fr-hidden {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-popup .fr-hs {
  display: block !important;
}
.fr-popup .fr-hs.fr-hidden {
  display: none !important;
}
.fr-popup .fr-input-line {
  position: relative;
  padding: 8px 0;
}
.fr-popup .fr-input-line input[type=\"text\"],
.fr-popup .fr-input-line textarea {
  width: 100%;
  margin: 0px 0 1px 0;
  border: none;
  border-bottom: solid 1px #bdbdbd;
  color: #222222;
  font-size: 14px;
  padding: 6px 0 2px;
  background: rgba(0, 0, 0, 0);
  position: relative;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-popup .fr-input-line input[type=\"text\"]:focus,
.fr-popup .fr-input-line textarea:focus {
  border-bottom: solid 2px #1e88e5;
  margin-bottom: 0px;
}
.fr-popup .fr-input-line input + label,
.fr-popup .fr-input-line textarea + label {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 12px;
  color: rgba(0, 0, 0, 0);
  -webkit-transition: color 0.2s ease 0s;
  -moz-transition: color 0.2s ease 0s;
  -ms-transition: color 0.2s ease 0s;
  -o-transition: color 0.2s ease 0s;
  z-index: 3;
  width: 100%;
  display: block;
  background: #ffffff;
}
.fr-popup .fr-input-line input.fr-not-empty:focus + label,
.fr-popup .fr-input-line textarea.fr-not-empty:focus + label {
  color: #1e88e5;
}
.fr-popup .fr-input-line input.fr-not-empty + label,
.fr-popup .fr-input-line textarea.fr-not-empty + label {
  color: #808080;
}
.fr-popup input,
.fr-popup textarea {
  user-select: text;
  -o-user-select: text;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  outline: none;
}
.fr-popup textarea {
  resize: none;
}
.fr-popup .fr-buttons {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  padding: 0 2px;
  white-space: nowrap;
  line-height: 0;
  border-bottom: 0px;
}
.fr-popup .fr-buttons::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-popup .fr-buttons .fr-btn {
  display: inline-block;
  float: none;
}
.fr-popup .fr-buttons .fr-btn i {
  float: left;
}
.fr-popup .fr-buttons .fr-separator {
  display: inline-block;
  float: none;
}
.fr-popup .fr-layer {
  width: 225px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 10px;
  display: none;
}
@media (min-width: 768px) {
  .fr-popup .fr-layer {
    width: 300px;
  }
}
.fr-popup .fr-layer.fr-active {
  display: inline-block;
}
.fr-popup .fr-action-buttons {
  z-index: 7;
  height: 36px;
  text-align: right;
}
.fr-popup .fr-action-buttons button.fr-command {
  height: 36px;
  line-height: 1;
  color: #1e88e5;
  padding: 10px;
  cursor: pointer;
  text-decoration: none;
  border: none;
  background: none;
  font-size: 16px;
  outline: none;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
}
.fr-popup .fr-action-buttons button.fr-command + button {
  margin-left: 24px;
}
.fr-popup .fr-action-buttons button.fr-command:hover,
.fr-popup .fr-action-buttons button.fr-command:focus {
  background: #ebebeb;
  color: #1e88e5;
}
.fr-popup .fr-action-buttons button.fr-command:active {
  background: #d6d6d6;
  color: #1e88e5;
}
.fr-popup .fr-action-buttons button::-moz-focus-inner {
  border: 0;
}
.fr-popup .fr-checkbox {
  position: relative;
  display: inline-block;
  width: 16px;
  height: 16px;
  line-height: 1;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  vertical-align: middle;
}
.fr-popup .fr-checkbox svg {
  margin-left: 2px;
  margin-top: 2px;
  display: none;
  width: 10px;
  height: 10px;
}
.fr-popup .fr-checkbox span {
  border: solid 1px #222222;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  width: 16px;
  height: 16px;
  display: inline-block;
  position: relative;
  z-index: 1;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
}
.fr-popup .fr-checkbox input {
  position: absolute;
  z-index: 2;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  border: 0 none;
  cursor: pointer;
  height: 16px;
  margin: 0;
  padding: 0;
  width: 16px;
  top: 1px;
  left: 1px;
}
.fr-popup .fr-checkbox input:checked + span {
  background: #1e88e5;
  border-color: #1e88e5;
}
.fr-popup .fr-checkbox input:checked + span svg {
  display: block;
}
.fr-popup .fr-checkbox input:focus + span {
  border-color: #1e88e5;
}
.fr-popup .fr-checkbox-line {
  font-size: 14px;
  line-height: 1.4px;
  margin-top: 10px;
}
.fr-popup .fr-checkbox-line label {
  cursor: pointer;
  margin: 0 5px;
  vertical-align: middle;
}
.fr-popup.fr-rtl {
  direction: rtl;
  text-align: right;
}
.fr-popup.fr-rtl .fr-action-buttons {
  text-align: left;
}
.fr-popup.fr-rtl .fr-input-line input + label,
.fr-popup.fr-rtl .fr-input-line textarea + label {
  left: auto;
  right: 0;
}
.fr-popup.fr-rtl .fr-buttons .fr-separator.fr-vs {
  float: right;
}
.fr-popup .fr-arrow {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #222222;
  position: absolute;
  top: -9px;
  left: 50%;
  margin-left: -5px;
  display: inline-block;
}
.fr-popup.fr-above .fr-arrow {
  top: auto;
  bottom: -9px;
  border-bottom: 0;
  border-top: 5px solid #222222;
}
.fr-text-edit-layer {
  width: 250px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block !important;
}
.fr-toolbar {
  color: #222222;
  background: #ffffff;
  position: relative;
  z-index: 4;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  padding: 0 2px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  text-align: left;
  border: 0px;
  border-top: 5px solid #222222;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-toolbar::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-toolbar.fr-rtl {
  text-align: right;
}
.fr-toolbar.fr-inline {
  display: none;
  white-space: nowrap;
  position: absolute;
  margin-top: 10px;
}
.fr-toolbar.fr-inline .fr-arrow {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #222222;
  position: absolute;
  top: -9px;
  left: 50%;
  margin-left: -5px;
  display: inline-block;
}
.fr-toolbar.fr-inline.fr-above {
  margin-top: -10px;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  border-bottom: 5px solid #222222;
  border-top: 0;
}
.fr-toolbar.fr-inline.fr-above .fr-arrow {
  top: auto;
  bottom: -9px;
  border-bottom: 0;
  border-top-color: inherit;
  border-top-style: solid;
  border-top-width: 5px;
}
.fr-toolbar.fr-top {
  top: 0;
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-toolbar.fr-bottom {
  bottom: 0;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-separator {
  background: #ebebeb;
  display: block;
  vertical-align: top;
  float: left;
}
.fr-separator + .fr-separator {
  display: none;
}
.fr-separator.fr-vs {
  height: 34px;
  width: 1px;
  margin: 2px;
}
.fr-separator.fr-hs {
  clear: both;
  height: 1px;
  width: calc(100% - (2 * 2px));
  margin: 0 2px;
}
.fr-separator.fr-hidden {
  display: none !important;
}
.fr-rtl .fr-separator {
  float: right;
}
.fr-toolbar.fr-inline .fr-separator.fr-hs {
  float: none;
}
.fr-toolbar.fr-inline .fr-separator.fr-vs {
  float: none;
  display: inline-block;
}
.fr-visibility-helper {
  display: none;
  margin-left: 0px !important;
}
@media (min-width: 768px) {
  .fr-visibility-helper {
    margin-left: 1px !important;
  }
}
@media (min-width: 992px) {
  .fr-visibility-helper {
    margin-left: 2px !important;
  }
}
@media (min-width: 1200px) {
  .fr-visibility-helper {
    margin-left: 3px !important;
  }
}
.fr-opacity-0 {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-box {
  position: relative;
}
/**
 * Postion sticky hacks.
 */
.fr-sticky {
  position: -webkit-sticky;
  position: -moz-sticky;
  position: -ms-sticky;
  position: -o-sticky;
  position: sticky;
}
.fr-sticky-off {
  position: relative;
}
.fr-sticky-on {
  position: fixed;
}
.fr-sticky-on.fr-sticky-ios {
  position: absolute;
  left: 0;
  right: 0;
  width: auto !important;
}
.fr-sticky-dummy {
  display: none;
}
.fr-sticky-on + .fr-sticky-dummy,
.fr-sticky-box > .fr-sticky-dummy {
  display: block;
}
span.fr-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
/*!
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
.fr-box .fr-counter {
  position: absolute;
  bottom: 0px;
  padding: 5px;
  right: 0px;
  color: #cccccc;
  content: attr(data-chars);
  font-size: 15px;
  font-family: \"Times New Roman\", Georgia, Serif;
  z-index: 1;
  background: #ffffff;
  border-top: solid 1px #ebebeb;
  border-left: solid 1px #ebebeb;
  border-radius: 2px 0 0 0;
  -moz-border-radius: 2px 0 0 0;
  -webkit-border-radius: 2px 0 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-box.fr-rtl .fr-counter {
  left: 0px;
  right: auto;
  border-left: none;
  border-right: solid 1px #ebebeb;
  border-radius: 0 2px 0 0;
  -moz-border-radius: 0 2px 0 0;
  -webkit-border-radius: 0 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-box.fr-code-view .fr-counter {
  display: none;
}
/*!
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
.fr-drag-helper {
  background: #1e88e5;
  height: 2px;
  margin-top: -1px;
  -webkit-opacity: 0.2;
  -moz-opacity: 0.2;
  opacity: 0.2;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  z-index: 9999;
  display: none;
}
.fr-drag-helper.fr-visible {
  display: block;
}
.fr-dragging {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
body.fr-fullscreen {
  overflow: hidden;
  height: 100%;
  width: 100%;
  position: fixed;
}
.fr-box.fr-fullscreen {
  margin: 0 !important;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9990 !important;
  width: auto !important;
}
.fr-box.fr-fullscreen .fr-toolbar.fr-top {
  top: 0 !important;
}
.fr-box.fr-fullscreen .fr-toolbar.fr-bottom {
  bottom: 0 !important;
}
/*!
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
.fr-line-breaker {
  cursor: text;
  border-top: 1px solid #1e88e5;
  position: fixed;
  z-index: 2;
  display: none;
}
.fr-line-breaker.fr-visible {
  display: block;
}
.fr-line-breaker a.fr-floating-btn {
  position: absolute;
  left: calc(50% - (32px / 2));
  top: -16px;
}
/*!
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
/*!
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
textarea.fr-code {
  display: none;
  width: 100%;
  resize: none;
  -moz-resize: none;
  -webkit-resize: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
  padding: 10px;
  margin: 0px;
  font-family: \"Courier New\", monospace;
  font-size: 14px;
  background: #ffffff;
  color: #000000;
  outline: none;
}
.fr-box.fr-rtl textarea.fr-code {
  direction: rtl;
}
.fr-box .CodeMirror {
  display: none;
}
.fr-box.fr-code-view textarea.fr-code {
  display: block;
}
.fr-box.fr-code-view.fr-inline {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-code-view .fr-element,
.fr-box.fr-code-view .fr-placeholder,
.fr-box.fr-code-view .fr-iframe {
  display: none;
}
.fr-box.fr-code-view .CodeMirror {
  display: block;
}
.fr-box.fr-inline.fr-code-view .fr-command.fr-btn.html-switch {
  display: block;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  display: none;
  background: #ffffff;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  padding: 12px 12px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch i {
  font-size: 14px;
  width: 14px;
  text-align: center;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch.fr-desktop:hover {
  background: #ebebeb;
}
/*!
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
.fr-popup .fr-emoticon {
  display: inline-block;
  font-size: 20px;
  width: 20px;
  padding: 5px;
  line-height: 1;
  cursor: default;
  font-weight: normal;
  font-family: \"Apple Color Emoji\", \"Segoe UI Emoji\", \"NotoColorEmoji\", \"Segoe UI Symbol\", \"Android Emoji\", \"EmojiSymbols\";
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-popup .fr-emoticon img {
  height: 20px;
}
.fr-popup .fr-link:focus {
  background: #ebebeb;
}
/*!
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
.fr-element img {
  cursor: pointer;
}
.fr-image-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-image-resizer.fr-active {
  display: block;
}
.fr-image-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-image-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
.fr-image-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
.fr-image-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
.fr-image-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
.fr-image-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
.fr-image-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
.fr-image-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
.fr-image-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
.fr-image-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  .fr-image-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  .fr-image-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
.fr-image-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
.fr-image-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  text-align: center;
}
.fr-image-upload-layer:hover {
  background: #ebebeb;
}
.fr-image-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-image-upload-layer .fr-form {
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
.fr-image-upload-layer .fr-form input {
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
.fr-image-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-image-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-image-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-image-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-image-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-image-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-image-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
.fr-image-size-layer .fr-image-group .fr-input-line {
  width: calc(50% - 5px);
  display: inline-block;
}
.fr-image-size-layer .fr-image-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
.fr-uploading {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
@keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-webkit-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-moz-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-o-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
/*!
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
.fr-quick-insert {
  position: absolute;
  z-index: 9998;
  white-space: nowrap;
  padding-right: 5px;
  margin-left: -5px;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-quick-insert.fr-on a.fr-floating-btn svg {
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -o-transform: rotate(135deg);
}
.fr-quick-insert.fr-hidden {
  display: none;
}
.fr-qi-helper {
  position: absolute;
  z-index: 3;
  padding-left: 10px;
  white-space: nowrap;
}
.fr-qi-helper a.fr-btn.fr-floating-btn {
  text-align: center;
  display: inline-block;
  color: #222222;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
}
.fr-qi-helper a.fr-btn.fr-floating-btn.fr-size-1 {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
}
/*!
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
.fr-modal-head .fr-modal-head-line::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-modal-head .fr-modal-head-line i.fr-modal-more {
  float: left;
  opacity: 1;
  -webkit-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -moz-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -ms-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -o-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
}
.fr-modal-head .fr-modal-head-line i.fr-modal-more.fr-not-available {
  opacity: 0;
  width: 0;
  padding: 12px 0;
}
.fr-modal-head .fr-modal-tags {
  display: none;
}
.fr-modal-head .fr-modal-tags a {
  display: inline-block;
  opacity: 0;
  padding: 6px 8px;
  margin: 8px 0 8px 8px;
  text-decoration: none;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  color: #1e88e5;
  -webkit-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  cursor: pointer;
}
.fr-modal-head .fr-modal-tags a:focus {
  outline: none;
}
.fr-modal-head .fr-modal-tags a.fr-selected-tag {
  background: #d6d6d6;
}
div.fr-modal-body .fr-preloader {
  display: block;
  margin: 50px auto;
}
div.fr-modal-body div.fr-image-list {
  text-align: center;
  margin: 0 10px;
  padding: 0;
}
div.fr-modal-body div.fr-image-list::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
div.fr-modal-body div.fr-image-list .fr-list-column {
  float: left;
  width: calc((100% - 10px) / 2);
}
@media (min-width: 768px) and (max-width: 1199px) {
  div.fr-modal-body div.fr-image-list .fr-list-column {
    width: calc((100% - 20px) / 3);
  }
}
@media (min-width: 1200px) {
  div.fr-modal-body div.fr-image-list .fr-list-column {
    width: calc((100% - 30px) / 4);
  }
}
div.fr-modal-body div.fr-image-list .fr-list-column + .fr-list-column {
  margin-left: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container {
  position: relative;
  width: 100%;
  display: block;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  overflow: hidden;
}
div.fr-modal-body div.fr-image-list div.fr-image-container:first-child {
  margin-top: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container + div {
  margin-top: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-image-deleting::after {
  position: absolute;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transition: opacity 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s;
  background: #000000;
  content: \"\";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-image-deleting::before {
  content: attr(data-deleting);
  color: #ffffff;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  position: absolute;
  z-index: 3;
  font-size: 15px;
  height: 20px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-empty {
  height: 95px;
  background: #cccccc;
  z-index: 1;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-empty::after {
  position: absolute;
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: attr(data-loading);
  display: inline-block;
  height: 20px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container img {
  width: 100%;
  vertical-align: middle;
  position: relative;
  z-index: 2;
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected img {
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected .fr-delete-img,
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected .fr-insert-img {
  display: inline-block;
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img,
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img {
  display: none;
  top: 50%;
  border-radius: 100%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  position: absolute;
  cursor: pointer;
  margin: 0;
  width: 36px;
  height: 36px;
  line-height: 36px;
  text-decoration: none;
  z-index: 3;
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img {
  background: #b8312f;
  color: #ffffff;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(25%);
  -moz-transform: translateY(-50%) translateX(25%);
  -ms-transform: translateY(-50%) translateX(25%);
  -o-transform: translateY(-50%) translateX(25%);
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img {
  background: #ffffff;
  color: #1e88e5;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(-125%);
  -moz-transform: translateY(-50%) translateX(-125%);
  -ms-transform: translateY(-50%) translateX(-125%);
  -o-transform: translateY(-50%) translateX(-125%);
}
.fr-desktop .fr-modal-wrapper .fr-modal-head .fr-modal-tags a:hover {
  background: #ebebeb;
}
.fr-desktop .fr-modal-wrapper .fr-modal-head .fr-modal-tags a.fr-selected-tag {
  background: #d6d6d6;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover img {
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover .fr-delete-img,
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover .fr-insert-img {
  display: inline-block;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img:hover {
  background: #bf4644;
  color: #ffffff;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img:hover {
  background: #ebebeb;
}
/*!
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
.fr-popup .fr-colors-tabs {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  margin-bottom: 5px;
  line-height: 16px;
  margin-left: -2px;
  margin-right: -2px;
}
.fr-popup .fr-colors-tabs .fr-colors-tab {
  display: inline-block;
  width: 50%;
  cursor: pointer;
  text-align: center;
  color: #222222;
  font-size: 13px;
  padding: 8px 0;
  position: relative;
}
.fr-popup .fr-colors-tabs .fr-colors-tab:hover,
.fr-popup .fr-colors-tabs .fr-colors-tab:focus {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab[data-param1=\"background\"]::after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #1e88e5;
  content: '';
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
}
.fr-popup .fr-separator + .fr-colors-tabs {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-left: 2px;
  margin-right: 2px;
}
.fr-popup .fr-color-set {
  line-height: 0;
  display: none;
}
.fr-popup .fr-color-set.fr-selected-set {
  display: block;
}
.fr-popup .fr-color-set > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-color-set > span > i {
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
.fr-popup .fr-color-set > span .fr-selected-color {
  color: #ffffff;
  font-family: FontAwesome;
  font-size: 13px;
  font-weight: 400;
  line-height: 32px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  text-align: center;
  cursor: default;
}
.fr-popup .fr-color-set > span:hover,
.fr-popup .fr-color-set > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-rtl .fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
}
/*!
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
.fr-file-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
}
.fr-file-upload-layer:hover {
  background: #ebebeb;
}
.fr-file-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-file-upload-layer .fr-form {
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
.fr-file-upload-layer .fr-form input {
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
.fr-file-progress-bar-layer {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-file-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-file-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-file-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-file-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-file-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-file-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-file-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
@keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-webkit-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-moz-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-o-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
/*!
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
html body .fr-gatedvideo {
  position: relative;
  display: table;
  min-height: 140px;
}
html body .fr-gatedvideo video {
  background-color: rgba(67, 83, 147, 0.5);
}
html body .fr-gatedvideo:after {
  content: \"\";
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: block;
  clear: both;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
/*!
 * froala_editor v2.2.4 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2016 Froala Labs
 */
html body .clearfix::after {
  clear: both;
  display: block;
  content: \"\";
}
html body .fr-element .fr-gatedvideo {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
html body .fr-element .fr-gatedvideo::after {
  content: \"\";
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: block;
  clear: both;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
html body .fr-element .fr-gatedvideo.fr-active > * {
  z-index: 2;
  position: relative;
}
html body .fr-element .fr-gatedvideo > * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  max-width: 100%;
  border: none;
}
html body .fr-box .fr-gatedvideo-resizer {
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
html body .fr-box .fr-gatedvideo-resizer.fr-active {
  display: block;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  html body .fr-box .fr-gatedvideo-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line {
  display: inline-block;
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
html body .fr-gatedvideo-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
a > .fa {
  padding-right: 4px;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: 0.2em 0.25em 0.15em;
  border: solid 0.08em #eee;
  border-radius: 0.1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right {
  margin-left: 0.3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: 0.3em;
}
.fa.pull-right {
  margin-left: 0.3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)\";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)\";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)\";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)\";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)\";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: \"\\f000\";
}
.fa-music:before {
  content: \"\\f001\";
}
.fa-search:before {
  content: \"\\f002\";
}
.fa-envelope-o:before {
  content: \"\\f003\";
}
.fa-heart:before {
  content: \"\\f004\";
}
.fa-star:before {
  content: \"\\f005\";
}
.fa-star-o:before {
  content: \"\\f006\";
}
.fa-user:before {
  content: \"\\f007\";
}
.fa-film:before {
  content: \"\\f008\";
}
.fa-th-large:before {
  content: \"\\f009\";
}
.fa-th:before {
  content: \"\\f00a\";
}
.fa-th-list:before {
  content: \"\\f00b\";
}
.fa-check:before {
  content: \"\\f00c\";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: \"\\f00d\";
}
.fa-search-plus:before {
  content: \"\\f00e\";
}
.fa-search-minus:before {
  content: \"\\f010\";
}
.fa-power-off:before {
  content: \"\\f011\";
}
.fa-signal:before {
  content: \"\\f012\";
}
.fa-gear:before,
.fa-cog:before {
  content: \"\\f013\";
}
.fa-trash-o:before {
  content: \"\\f014\";
}
.fa-home:before {
  content: \"\\f015\";
}
.fa-file-o:before {
  content: \"\\f016\";
}
.fa-clock-o:before {
  content: \"\\f017\";
}
.fa-road:before {
  content: \"\\f018\";
}
.fa-download:before {
  content: \"\\f019\";
}
.fa-arrow-circle-o-down:before {
  content: \"\\f01a\";
}
.fa-arrow-circle-o-up:before {
  content: \"\\f01b\";
}
.fa-inbox:before {
  content: \"\\f01c\";
}
.fa-play-circle-o:before {
  content: \"\\f01d\";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: \"\\f01e\";
}
.fa-refresh:before {
  content: \"\\f021\";
}
.fa-list-alt:before {
  content: \"\\f022\";
}
.fa-lock:before {
  content: \"\\f023\";
}
.fa-flag:before {
  content: \"\\f024\";
}
.fa-headphones:before {
  content: \"\\f025\";
}
.fa-volume-off:before {
  content: \"\\f026\";
}
.fa-volume-down:before {
  content: \"\\f027\";
}
.fa-volume-up:before {
  content: \"\\f028\";
}
.fa-qrcode:before {
  content: \"\\f029\";
}
.fa-barcode:before {
  content: \"\\f02a\";
}
.fa-tag:before {
  content: \"\\f02b\";
}
.fa-tags:before {
  content: \"\\f02c\";
}
.fa-book:before {
  content: \"\\f02d\";
}
.fa-bookmark:before {
  content: \"\\f02e\";
}
.fa-print:before {
  content: \"\\f02f\";
}
.fa-camera:before {
  content: \"\\f030\";
}
.fa-font:before {
  content: \"\\f031\";
}
.fa-bold:before {
  content: \"\\f032\";
}
.fa-italic:before {
  content: \"\\f033\";
}
.fa-text-height:before {
  content: \"\\f034\";
}
.fa-text-width:before {
  content: \"\\f035\";
}
.fa-align-left:before {
  content: \"\\f036\";
}
.fa-align-center:before {
  content: \"\\f037\";
}
.fa-align-right:before {
  content: \"\\f038\";
}
.fa-align-justify:before {
  content: \"\\f039\";
}
.fa-list:before {
  content: \"\\f03a\";
}
.fa-dedent:before,
.fa-outdent:before {
  content: \"\\f03b\";
}
.fa-indent:before {
  content: \"\\f03c\";
}
.fa-video-camera:before {
  content: \"\\f03d\";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: \"\\f03e\";
}
.fa-pencil:before {
  content: \"\\f040\";
}
.fa-map-marker:before {
  content: \"\\f041\";
}
.fa-adjust:before {
  content: \"\\f042\";
}
.fa-tint:before {
  content: \"\\f043\";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: \"\\f044\";
}
.fa-share-square-o:before {
  content: \"\\f045\";
}
.fa-check-square-o:before {
  content: \"\\f046\";
}
.fa-arrows:before {
  content: \"\\f047\";
}
.fa-step-backward:before {
  content: \"\\f048\";
}
.fa-fast-backward:before {
  content: \"\\f049\";
}
.fa-backward:before {
  content: \"\\f04a\";
}
.fa-play:before {
  content: \"\\f04b\";
}
.fa-pause:before {
  content: \"\\f04c\";
}
.fa-stop:before {
  content: \"\\f04d\";
}
.fa-forward:before {
  content: \"\\f04e\";
}
.fa-fast-forward:before {
  content: \"\\f050\";
}
.fa-step-forward:before {
  content: \"\\f051\";
}
.fa-eject:before {
  content: \"\\f052\";
}
.fa-chevron-left:before {
  content: \"\\f053\";
}
.fa-chevron-right:before {
  content: \"\\f054\";
}
.fa-plus-circle:before {
  content: \"\\f055\";
}
.fa-minus-circle:before {
  content: \"\\f056\";
}
.fa-times-circle:before {
  content: \"\\f057\";
}
.fa-check-circle:before {
  content: \"\\f058\";
}
.fa-question-circle:before {
  content: \"\\f059\";
}
.fa-info-circle:before {
  content: \"\\f05a\";
}
.fa-crosshairs:before {
  content: \"\\f05b\";
}
.fa-times-circle-o:before {
  content: \"\\f05c\";
}
.fa-check-circle-o:before {
  content: \"\\f05d\";
}
.fa-ban:before {
  content: \"\\f05e\";
}
.fa-arrow-left:before {
  content: \"\\f060\";
}
.fa-arrow-right:before {
  content: \"\\f061\";
}
.fa-arrow-up:before {
  content: \"\\f062\";
}
.fa-arrow-down:before {
  content: \"\\f063\";
}
.fa-mail-forward:before,
.fa-share:before {
  content: \"\\f064\";
}
.fa-expand:before {
  content: \"\\f065\";
}
.fa-compress:before {
  content: \"\\f066\";
}
.fa-plus:before {
  content: \"\\f067\";
}
.fa-minus:before {
  content: \"\\f068\";
}
.fa-asterisk:before {
  content: \"\\f069\";
}
.fa-exclamation-circle:before {
  content: \"\\f06a\";
}
.fa-gift:before {
  content: \"\\f06b\";
}
.fa-leaf:before {
  content: \"\\f06c\";
}
.fa-fire:before {
  content: \"\\f06d\";
}
.fa-eye:before {
  content: \"\\f06e\";
}
.fa-eye-slash:before {
  content: \"\\f070\";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: \"\\f071\";
}
.fa-plane:before {
  content: \"\\f072\";
}
.fa-calendar:before {
  content: \"\\f073\";
}
.fa-random:before {
  content: \"\\f074\";
}
.fa-comment:before {
  content: \"\\f075\";
}
.fa-magnet:before {
  content: \"\\f076\";
}
.fa-chevron-up:before {
  content: \"\\f077\";
}
.fa-chevron-down:before {
  content: \"\\f078\";
}
.fa-retweet:before {
  content: \"\\f079\";
}
.fa-shopping-cart:before {
  content: \"\\f07a\";
}
.fa-folder:before {
  content: \"\\f07b\";
}
.fa-folder-open:before {
  content: \"\\f07c\";
}
.fa-arrows-v:before {
  content: \"\\f07d\";
}
.fa-arrows-h:before {
  content: \"\\f07e\";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: \"\\f080\";
}
.fa-twitter-square:before {
  content: \"\\f081\";
}
.fa-facebook-square:before {
  content: \"\\f082\";
}
.fa-camera-retro:before {
  content: \"\\f083\";
}
.fa-key:before {
  content: \"\\f084\";
}
.fa-gears:before,
.fa-cogs:before {
  content: \"\\f085\";
}
.fa-comments:before {
  content: \"\\f086\";
}
.fa-thumbs-o-up:before {
  content: \"\\f087\";
}
.fa-thumbs-o-down:before {
  content: \"\\f088\";
}
.fa-star-half:before {
  content: \"\\f089\";
}
.fa-heart-o:before {
  content: \"\\f08a\";
}
.fa-sign-out:before {
  content: \"\\f08b\";
}
.fa-linkedin-square:before {
  content: \"\\f08c\";
}
.fa-thumb-tack:before {
  content: \"\\f08d\";
}
.fa-external-link:before {
  content: \"\\f08e\";
}
.fa-sign-in:before {
  content: \"\\f090\";
}
.fa-trophy:before {
  content: \"\\f091\";
}
.fa-github-square:before {
  content: \"\\f092\";
}
.fa-upload:before {
  content: \"\\f093\";
}
.fa-lemon-o:before {
  content: \"\\f094\";
}
.fa-phone:before {
  content: \"\\f095\";
}
.fa-square-o:before {
  content: \"\\f096\";
}
.fa-bookmark-o:before {
  content: \"\\f097\";
}
.fa-phone-square:before {
  content: \"\\f098\";
}
.fa-twitter:before {
  content: \"\\f099\";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: \"\\f09a\";
}
.fa-github:before {
  content: \"\\f09b\";
}
.fa-unlock:before {
  content: \"\\f09c\";
}
.fa-credit-card:before {
  content: \"\\f09d\";
}
.fa-feed:before,
.fa-rss:before {
  content: \"\\f09e\";
}
.fa-hdd-o:before {
  content: \"\\f0a0\";
}
.fa-bullhorn:before {
  content: \"\\f0a1\";
}
.fa-bell:before {
  content: \"\\f0f3\";
}
.fa-certificate:before {
  content: \"\\f0a3\";
}
.fa-hand-o-right:before {
  content: \"\\f0a4\";
}
.fa-hand-o-left:before {
  content: \"\\f0a5\";
}
.fa-hand-o-up:before {
  content: \"\\f0a6\";
}
.fa-hand-o-down:before {
  content: \"\\f0a7\";
}
.fa-arrow-circle-left:before {
  content: \"\\f0a8\";
}
.fa-arrow-circle-right:before {
  content: \"\\f0a9\";
}
.fa-arrow-circle-up:before {
  content: \"\\f0aa\";
}
.fa-arrow-circle-down:before {
  content: \"\\f0ab\";
}
.fa-globe:before {
  content: \"\\f0ac\";
}
.fa-wrench:before {
  content: \"\\f0ad\";
}
.fa-tasks:before {
  content: \"\\f0ae\";
}
.fa-filter:before {
  content: \"\\f0b0\";
}
.fa-briefcase:before {
  content: \"\\f0b1\";
}
.fa-arrows-alt:before {
  content: \"\\f0b2\";
}
.fa-group:before,
.fa-users:before {
  content: \"\\f0c0\";
}
.fa-chain:before,
.fa-link:before {
  content: \"\\f0c1\";
}
.fa-cloud:before {
  content: \"\\f0c2\";
}
.fa-flask:before {
  content: \"\\f0c3\";
}
.fa-cut:before,
.fa-scissors:before {
  content: \"\\f0c4\";
}
.fa-copy:before,
.fa-files-o:before {
  content: \"\\f0c5\";
}
.fa-paperclip:before {
  content: \"\\f0c6\";
}
.fa-save:before,
.fa-floppy-o:before {
  content: \"\\f0c7\";
}
.fa-square:before {
  content: \"\\f0c8\";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: \"\\f0c9\";
}
.fa-list-ul:before {
  content: \"\\f0ca\";
}
.fa-list-ol:before {
  content: \"\\f0cb\";
}
.fa-strikethrough:before {
  content: \"\\f0cc\";
}
.fa-underline:before {
  content: \"\\f0cd\";
}
.fa-table:before {
  content: \"\\f0ce\";
}
.fa-magic:before {
  content: \"\\f0d0\";
}
.fa-truck:before {
  content: \"\\f0d1\";
}
.fa-pinterest:before {
  content: \"\\f0d2\";
}
.fa-pinterest-square:before {
  content: \"\\f0d3\";
}
.fa-google-plus-square:before {
  content: \"\\f0d4\";
}
.fa-google-plus:before {
  content: \"\\f0d5\";
}
.fa-money:before {
  content: \"\\f0d6\";
}
.fa-caret-down:before {
  content: \"\\f0d7\";
}
.fa-caret-up:before {
  content: \"\\f0d8\";
}
.fa-caret-left:before {
  content: \"\\f0d9\";
}
.fa-caret-right:before {
  content: \"\\f0da\";
}
.fa-columns:before {
  content: \"\\f0db\";
}
.fa-unsorted:before,
.fa-sort:before {
  content: \"\\f0dc\";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: \"\\f0dd\";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: \"\\f0de\";
}
.fa-envelope:before {
  content: \"\\f0e0\";
}
.fa-linkedin:before {
  content: \"\\f0e1\";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: \"\\f0e2\";
}
.fa-legal:before,
.fa-gavel:before {
  content: \"\\f0e3\";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: \"\\f0e4\";
}
.fa-comment-o:before {
  content: \"\\f0e5\";
}
.fa-comments-o:before {
  content: \"\\f0e6\";
}
.fa-flash:before,
.fa-bolt:before {
  content: \"\\f0e7\";
}
.fa-sitemap:before {
  content: \"\\f0e8\";
}
.fa-umbrella:before {
  content: \"\\f0e9\";
}
.fa-paste:before,
.fa-clipboard:before {
  content: \"\\f0ea\";
}
.fa-lightbulb-o:before {
  content: \"\\f0eb\";
}
.fa-exchange:before {
  content: \"\\f0ec\";
}
.fa-cloud-download:before {
  content: \"\\f0ed\";
}
.fa-cloud-upload:before {
  content: \"\\f0ee\";
}
.fa-user-md:before {
  content: \"\\f0f0\";
}
.fa-stethoscope:before {
  content: \"\\f0f1\";
}
.fa-suitcase:before {
  content: \"\\f0f2\";
}
.fa-bell-o:before {
  content: \"\\f0a2\";
}
.fa-coffee:before {
  content: \"\\f0f4\";
}
.fa-cutlery:before {
  content: \"\\f0f5\";
}
.fa-file-text-o:before {
  content: \"\\f0f6\";
}
.fa-building-o:before {
  content: \"\\f0f7\";
}
.fa-hospital-o:before {
  content: \"\\f0f8\";
}
.fa-ambulance:before {
  content: \"\\f0f9\";
}
.fa-medkit:before {
  content: \"\\f0fa\";
}
.fa-fighter-jet:before {
  content: \"\\f0fb\";
}
.fa-beer:before {
  content: \"\\f0fc\";
}
.fa-h-square:before {
  content: \"\\f0fd\";
}
.fa-plus-square:before {
  content: \"\\f0fe\";
}
.fa-angle-double-left:before {
  content: \"\\f100\";
}
.fa-angle-double-right:before {
  content: \"\\f101\";
}
.fa-angle-double-up:before {
  content: \"\\f102\";
}
.fa-angle-double-down:before {
  content: \"\\f103\";
}
.fa-angle-left:before {
  content: \"\\f104\";
}
.fa-angle-right:before {
  content: \"\\f105\";
}
.fa-angle-up:before {
  content: \"\\f106\";
}
.fa-angle-down:before {
  content: \"\\f107\";
}
.fa-desktop:before {
  content: \"\\f108\";
}
.fa-laptop:before {
  content: \"\\f109\";
}
.fa-tablet:before {
  content: \"\\f10a\";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: \"\\f10b\";
}
.fa-circle-o:before {
  content: \"\\f10c\";
}
.fa-quote-left:before {
  content: \"\\f10d\";
}
.fa-quote-right:before {
  content: \"\\f10e\";
}
.fa-spinner:before {
  content: \"\\f110\";
}
.fa-circle:before {
  content: \"\\f111\";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: \"\\f112\";
}
.fa-github-alt:before {
  content: \"\\f113\";
}
.fa-folder-o:before {
  content: \"\\f114\";
}
.fa-folder-open-o:before {
  content: \"\\f115\";
}
.fa-smile-o:before {
  content: \"\\f118\";
}
.fa-frown-o:before {
  content: \"\\f119\";
}
.fa-meh-o:before {
  content: \"\\f11a\";
}
.fa-gamepad:before {
  content: \"\\f11b\";
}
.fa-keyboard-o:before {
  content: \"\\f11c\";
}
.fa-flag-o:before {
  content: \"\\f11d\";
}
.fa-flag-checkered:before {
  content: \"\\f11e\";
}
.fa-terminal:before {
  content: \"\\f120\";
}
.fa-code:before {
  content: \"\\f121\";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: \"\\f122\";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: \"\\f123\";
}
.fa-location-arrow:before {
  content: \"\\f124\";
}
.fa-crop:before {
  content: \"\\f125\";
}
.fa-code-fork:before {
  content: \"\\f126\";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: \"\\f127\";
}
.fa-question:before {
  content: \"\\f128\";
}
.fa-info:before {
  content: \"\\f129\";
}
.fa-exclamation:before {
  content: \"\\f12a\";
}
.fa-superscript:before {
  content: \"\\f12b\";
}
.fa-subscript:before {
  content: \"\\f12c\";
}
.fa-eraser:before {
  content: \"\\f12d\";
}
.fa-puzzle-piece:before {
  content: \"\\f12e\";
}
.fa-microphone:before {
  content: \"\\f130\";
}
.fa-microphone-slash:before {
  content: \"\\f131\";
}
.fa-shield:before {
  content: \"\\f132\";
}
.fa-calendar-o:before {
  content: \"\\f133\";
}
.fa-fire-extinguisher:before {
  content: \"\\f134\";
}
.fa-rocket:before {
  content: \"\\f135\";
}
.fa-maxcdn:before {
  content: \"\\f136\";
}
.fa-chevron-circle-left:before {
  content: \"\\f137\";
}
.fa-chevron-circle-right:before {
  content: \"\\f138\";
}
.fa-chevron-circle-up:before {
  content: \"\\f139\";
}
.fa-chevron-circle-down:before {
  content: \"\\f13a\";
}
.fa-html5:before {
  content: \"\\f13b\";
}
.fa-css3:before {
  content: \"\\f13c\";
}
.fa-anchor:before {
  content: \"\\f13d\";
}
.fa-unlock-alt:before {
  content: \"\\f13e\";
}
.fa-bullseye:before {
  content: \"\\f140\";
}
.fa-ellipsis-h:before {
  content: \"\\f141\";
}
.fa-ellipsis-v:before {
  content: \"\\f142\";
}
.fa-rss-square:before {
  content: \"\\f143\";
}
.fa-play-circle:before {
  content: \"\\f144\";
}
.fa-ticket:before {
  content: \"\\f145\";
}
.fa-minus-square:before {
  content: \"\\f146\";
}
.fa-minus-square-o:before {
  content: \"\\f147\";
}
.fa-level-up:before {
  content: \"\\f148\";
}
.fa-level-down:before {
  content: \"\\f149\";
}
.fa-check-square:before {
  content: \"\\f14a\";
}
.fa-pencil-square:before {
  content: \"\\f14b\";
}
.fa-external-link-square:before {
  content: \"\\f14c\";
}
.fa-share-square:before {
  content: \"\\f14d\";
}
.fa-compass:before {
  content: \"\\f14e\";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: \"\\f150\";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: \"\\f151\";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: \"\\f152\";
}
.fa-euro:before,
.fa-eur:before {
  content: \"\\f153\";
}
.fa-gbp:before {
  content: \"\\f154\";
}
.fa-dollar:before,
.fa-usd:before {
  content: \"\\f155\";
}
.fa-rupee:before,
.fa-inr:before {
  content: \"\\f156\";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: \"\\f157\";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: \"\\f158\";
}
.fa-won:before,
.fa-krw:before {
  content: \"\\f159\";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: \"\\f15a\";
}
.fa-file:before {
  content: \"\\f15b\";
}
.fa-file-text:before {
  content: \"\\f15c\";
}
.fa-sort-alpha-asc:before {
  content: \"\\f15d\";
}
.fa-sort-alpha-desc:before {
  content: \"\\f15e\";
}
.fa-sort-amount-asc:before {
  content: \"\\f160\";
}
.fa-sort-amount-desc:before {
  content: \"\\f161\";
}
.fa-sort-numeric-asc:before {
  content: \"\\f162\";
}
.fa-sort-numeric-desc:before {
  content: \"\\f163\";
}
.fa-thumbs-up:before {
  content: \"\\f164\";
}
.fa-thumbs-down:before {
  content: \"\\f165\";
}
.fa-youtube-square:before {
  content: \"\\f166\";
}
.fa-youtube:before {
  content: \"\\f167\";
}
.fa-xing:before {
  content: \"\\f168\";
}
.fa-xing-square:before {
  content: \"\\f169\";
}
.fa-youtube-play:before {
  content: \"\\f16a\";
}
.fa-dropbox:before {
  content: \"\\f16b\";
}
.fa-stack-overflow:before {
  content: \"\\f16c\";
}
.fa-instagram:before {
  content: \"\\f16d\";
}
.fa-flickr:before {
  content: \"\\f16e\";
}
.fa-adn:before {
  content: \"\\f170\";
}
.fa-bitbucket:before {
  content: \"\\f171\";
}
.fa-bitbucket-square:before {
  content: \"\\f172\";
}
.fa-tumblr:before {
  content: \"\\f173\";
}
.fa-tumblr-square:before {
  content: \"\\f174\";
}
.fa-long-arrow-down:before {
  content: \"\\f175\";
}
.fa-long-arrow-up:before {
  content: \"\\f176\";
}
.fa-long-arrow-left:before {
  content: \"\\f177\";
}
.fa-long-arrow-right:before {
  content: \"\\f178\";
}
.fa-apple:before {
  content: \"\\f179\";
}
.fa-windows:before {
  content: \"\\f17a\";
}
.fa-android:before {
  content: \"\\f17b\";
}
.fa-linux:before {
  content: \"\\f17c\";
}
.fa-dribbble:before {
  content: \"\\f17d\";
}
.fa-skype:before {
  content: \"\\f17e\";
}
.fa-foursquare:before {
  content: \"\\f180\";
}
.fa-trello:before {
  content: \"\\f181\";
}
.fa-female:before {
  content: \"\\f182\";
}
.fa-male:before {
  content: \"\\f183\";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: \"\\f184\";
}
.fa-sun-o:before {
  content: \"\\f185\";
}
.fa-moon-o:before {
  content: \"\\f186\";
}
.fa-archive:before {
  content: \"\\f187\";
}
.fa-bug:before {
  content: \"\\f188\";
}
.fa-vk:before {
  content: \"\\f189\";
}
.fa-weibo:before {
  content: \"\\f18a\";
}
.fa-renren:before {
  content: \"\\f18b\";
}
.fa-pagelines:before {
  content: \"\\f18c\";
}
.fa-stack-exchange:before {
  content: \"\\f18d\";
}
.fa-arrow-circle-o-right:before {
  content: \"\\f18e\";
}
.fa-arrow-circle-o-left:before {
  content: \"\\f190\";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: \"\\f191\";
}
.fa-dot-circle-o:before {
  content: \"\\f192\";
}
.fa-wheelchair:before {
  content: \"\\f193\";
}
.fa-vimeo-square:before {
  content: \"\\f194\";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: \"\\f195\";
}
.fa-plus-square-o:before {
  content: \"\\f196\";
}
.fa-space-shuttle:before {
  content: \"\\f197\";
}
.fa-slack:before {
  content: \"\\f198\";
}
.fa-envelope-square:before {
  content: \"\\f199\";
}
.fa-wordpress:before {
  content: \"\\f19a\";
}
.fa-openid:before {
  content: \"\\f19b\";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: \"\\f19c\";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: \"\\f19d\";
}
.fa-yahoo:before {
  content: \"\\f19e\";
}
.fa-google:before {
  content: \"\\f1a0\";
}
.fa-reddit:before {
  content: \"\\f1a1\";
}
.fa-reddit-square:before {
  content: \"\\f1a2\";
}
.fa-stumbleupon-circle:before {
  content: \"\\f1a3\";
}
.fa-stumbleupon:before {
  content: \"\\f1a4\";
}
.fa-delicious:before {
  content: \"\\f1a5\";
}
.fa-digg:before {
  content: \"\\f1a6\";
}
.fa-pied-piper-pp:before {
  content: \"\\f1a7\";
}
.fa-pied-piper-alt:before {
  content: \"\\f1a8\";
}
.fa-drupal:before {
  content: \"\\f1a9\";
}
.fa-joomla:before {
  content: \"\\f1aa\";
}
.fa-language:before {
  content: \"\\f1ab\";
}
.fa-fax:before {
  content: \"\\f1ac\";
}
.fa-building:before {
  content: \"\\f1ad\";
}
.fa-child:before {
  content: \"\\f1ae\";
}
.fa-paw:before {
  content: \"\\f1b0\";
}
.fa-spoon:before {
  content: \"\\f1b1\";
}
.fa-cube:before {
  content: \"\\f1b2\";
}
.fa-cubes:before {
  content: \"\\f1b3\";
}
.fa-behance:before {
  content: \"\\f1b4\";
}
.fa-behance-square:before {
  content: \"\\f1b5\";
}
.fa-steam:before {
  content: \"\\f1b6\";
}
.fa-steam-square:before {
  content: \"\\f1b7\";
}
.fa-recycle:before {
  content: \"\\f1b8\";
}
.fa-automobile:before,
.fa-car:before {
  content: \"\\f1b9\";
}
.fa-cab:before,
.fa-taxi:before {
  content: \"\\f1ba\";
}
.fa-tree:before {
  content: \"\\f1bb\";
}
.fa-spotify:before {
  content: \"\\f1bc\";
}
.fa-deviantart:before {
  content: \"\\f1bd\";
}
.fa-soundcloud:before {
  content: \"\\f1be\";
}
.fa-database:before {
  content: \"\\f1c0\";
}
.fa-file-pdf-o:before {
  content: \"\\f1c1\";
}
.fa-file-word-o:before {
  content: \"\\f1c2\";
}
.fa-file-excel-o:before {
  content: \"\\f1c3\";
}
.fa-file-powerpoint-o:before {
  content: \"\\f1c4\";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: \"\\f1c5\";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: \"\\f1c6\";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: \"\\f1c7\";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: \"\\f1c8\";
}
.fa-file-code-o:before {
  content: \"\\f1c9\";
}
.fa-vine:before {
  content: \"\\f1ca\";
}
.fa-codepen:before {
  content: \"\\f1cb\";
}
.fa-jsfiddle:before {
  content: \"\\f1cc\";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: \"\\f1cd\";
}
.fa-circle-o-notch:before {
  content: \"\\f1ce\";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: \"\\f1d0\";
}
.fa-ge:before,
.fa-empire:before {
  content: \"\\f1d1\";
}
.fa-git-square:before {
  content: \"\\f1d2\";
}
.fa-git:before {
  content: \"\\f1d3\";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: \"\\f1d4\";
}
.fa-tencent-weibo:before {
  content: \"\\f1d5\";
}
.fa-qq:before {
  content: \"\\f1d6\";
}
.fa-wechat:before,
.fa-weixin:before {
  content: \"\\f1d7\";
}
.fa-send:before,
.fa-paper-plane:before {
  content: \"\\f1d8\";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: \"\\f1d9\";
}
.fa-history:before {
  content: \"\\f1da\";
}
.fa-circle-thin:before {
  content: \"\\f1db\";
}
.fa-header:before {
  content: \"\\f1dc\";
}
.fa-paragraph:before {
  content: \"\\f1dd\";
}
.fa-sliders:before {
  content: \"\\f1de\";
}
.fa-share-alt:before {
  content: \"\\f1e0\";
}
.fa-share-alt-square:before {
  content: \"\\f1e1\";
}
.fa-bomb:before {
  content: \"\\f1e2\";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: \"\\f1e3\";
}
.fa-tty:before {
  content: \"\\f1e4\";
}
.fa-binoculars:before {
  content: \"\\f1e5\";
}
.fa-plug:before {
  content: \"\\f1e6\";
}
.fa-slideshare:before {
  content: \"\\f1e7\";
}
.fa-twitch:before {
  content: \"\\f1e8\";
}
.fa-yelp:before {
  content: \"\\f1e9\";
}
.fa-newspaper-o:before {
  content: \"\\f1ea\";
}
.fa-wifi:before {
  content: \"\\f1eb\";
}
.fa-calculator:before {
  content: \"\\f1ec\";
}
.fa-paypal:before {
  content: \"\\f1ed\";
}
.fa-google-wallet:before {
  content: \"\\f1ee\";
}
.fa-cc-visa:before {
  content: \"\\f1f0\";
}
.fa-cc-mastercard:before {
  content: \"\\f1f1\";
}
.fa-cc-discover:before {
  content: \"\\f1f2\";
}
.fa-cc-amex:before {
  content: \"\\f1f3\";
}
.fa-cc-paypal:before {
  content: \"\\f1f4\";
}
.fa-cc-stripe:before {
  content: \"\\f1f5\";
}
.fa-bell-slash:before {
  content: \"\\f1f6\";
}
.fa-bell-slash-o:before {
  content: \"\\f1f7\";
}
.fa-trash:before {
  content: \"\\f1f8\";
}
.fa-copyright:before {
  content: \"\\f1f9\";
}
.fa-at:before {
  content: \"\\f1fa\";
}
.fa-eyedropper:before {
  content: \"\\f1fb\";
}
.fa-paint-brush:before {
  content: \"\\f1fc\";
}
.fa-birthday-cake:before {
  content: \"\\f1fd\";
}
.fa-area-chart:before {
  content: \"\\f1fe\";
}
.fa-pie-chart:before {
  content: \"\\f200\";
}
.fa-line-chart:before {
  content: \"\\f201\";
}
.fa-lastfm:before {
  content: \"\\f202\";
}
.fa-lastfm-square:before {
  content: \"\\f203\";
}
.fa-toggle-off:before {
  content: \"\\f204\";
}
.fa-toggle-on:before {
  content: \"\\f205\";
}
.fa-bicycle:before {
  content: \"\\f206\";
}
.fa-bus:before {
  content: \"\\f207\";
}
.fa-ioxhost:before {
  content: \"\\f208\";
}
.fa-angellist:before {
  content: \"\\f209\";
}
.fa-cc:before {
  content: \"\\f20a\";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: \"\\f20b\";
}
.fa-meanpath:before {
  content: \"\\f20c\";
}
.fa-buysellads:before {
  content: \"\\f20d\";
}
.fa-connectdevelop:before {
  content: \"\\f20e\";
}
.fa-dashcube:before {
  content: \"\\f210\";
}
.fa-forumbee:before {
  content: \"\\f211\";
}
.fa-leanpub:before {
  content: \"\\f212\";
}
.fa-sellsy:before {
  content: \"\\f213\";
}
.fa-shirtsinbulk:before {
  content: \"\\f214\";
}
.fa-simplybuilt:before {
  content: \"\\f215\";
}
.fa-skyatlas:before {
  content: \"\\f216\";
}
.fa-cart-plus:before {
  content: \"\\f217\";
}
.fa-cart-arrow-down:before {
  content: \"\\f218\";
}
.fa-diamond:before {
  content: \"\\f219\";
}
.fa-ship:before {
  content: \"\\f21a\";
}
.fa-user-secret:before {
  content: \"\\f21b\";
}
.fa-motorcycle:before {
  content: \"\\f21c\";
}
.fa-street-view:before {
  content: \"\\f21d\";
}
.fa-heartbeat:before {
  content: \"\\f21e\";
}
.fa-venus:before {
  content: \"\\f221\";
}
.fa-mars:before {
  content: \"\\f222\";
}
.fa-mercury:before {
  content: \"\\f223\";
}
.fa-intersex:before,
.fa-transgender:before {
  content: \"\\f224\";
}
.fa-transgender-alt:before {
  content: \"\\f225\";
}
.fa-venus-double:before {
  content: \"\\f226\";
}
.fa-mars-double:before {
  content: \"\\f227\";
}
.fa-venus-mars:before {
  content: \"\\f228\";
}
.fa-mars-stroke:before {
  content: \"\\f229\";
}
.fa-mars-stroke-v:before {
  content: \"\\f22a\";
}
.fa-mars-stroke-h:before {
  content: \"\\f22b\";
}
.fa-neuter:before {
  content: \"\\f22c\";
}
.fa-genderless:before {
  content: \"\\f22d\";
}
.fa-facebook-official:before {
  content: \"\\f230\";
}
.fa-pinterest-p:before {
  content: \"\\f231\";
}
.fa-whatsapp:before {
  content: \"\\f232\";
}
.fa-server:before {
  content: \"\\f233\";
}
.fa-user-plus:before {
  content: \"\\f234\";
}
.fa-user-times:before {
  content: \"\\f235\";
}
.fa-hotel:before,
.fa-bed:before {
  content: \"\\f236\";
}
.fa-viacoin:before {
  content: \"\\f237\";
}
.fa-train:before {
  content: \"\\f238\";
}
.fa-subway:before {
  content: \"\\f239\";
}
.fa-medium:before {
  content: \"\\f23a\";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: \"\\f23b\";
}
.fa-optin-monster:before {
  content: \"\\f23c\";
}
.fa-opencart:before {
  content: \"\\f23d\";
}
.fa-expeditedssl:before {
  content: \"\\f23e\";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: \"\\f240\";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: \"\\f241\";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: \"\\f242\";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: \"\\f243\";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: \"\\f244\";
}
.fa-mouse-pointer:before {
  content: \"\\f245\";
}
.fa-i-cursor:before {
  content: \"\\f246\";
}
.fa-object-group:before {
  content: \"\\f247\";
}
.fa-object-ungroup:before {
  content: \"\\f248\";
}
.fa-sticky-note:before {
  content: \"\\f249\";
}
.fa-sticky-note-o:before {
  content: \"\\f24a\";
}
.fa-cc-jcb:before {
  content: \"\\f24b\";
}
.fa-cc-diners-club:before {
  content: \"\\f24c\";
}
.fa-clone:before {
  content: \"\\f24d\";
}
.fa-balance-scale:before {
  content: \"\\f24e\";
}
.fa-hourglass-o:before {
  content: \"\\f250\";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: \"\\f251\";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: \"\\f252\";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: \"\\f253\";
}
.fa-hourglass:before {
  content: \"\\f254\";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: \"\\f255\";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: \"\\f256\";
}
.fa-hand-scissors-o:before {
  content: \"\\f257\";
}
.fa-hand-lizard-o:before {
  content: \"\\f258\";
}
.fa-hand-spock-o:before {
  content: \"\\f259\";
}
.fa-hand-pointer-o:before {
  content: \"\\f25a\";
}
.fa-hand-peace-o:before {
  content: \"\\f25b\";
}
.fa-trademark:before {
  content: \"\\f25c\";
}
.fa-registered:before {
  content: \"\\f25d\";
}
.fa-creative-commons:before {
  content: \"\\f25e\";
}
.fa-gg:before {
  content: \"\\f260\";
}
.fa-gg-circle:before {
  content: \"\\f261\";
}
.fa-tripadvisor:before {
  content: \"\\f262\";
}
.fa-odnoklassniki:before {
  content: \"\\f263\";
}
.fa-odnoklassniki-square:before {
  content: \"\\f264\";
}
.fa-get-pocket:before {
  content: \"\\f265\";
}
.fa-wikipedia-w:before {
  content: \"\\f266\";
}
.fa-safari:before {
  content: \"\\f267\";
}
.fa-chrome:before {
  content: \"\\f268\";
}
.fa-firefox:before {
  content: \"\\f269\";
}
.fa-opera:before {
  content: \"\\f26a\";
}
.fa-internet-explorer:before {
  content: \"\\f26b\";
}
.fa-tv:before,
.fa-television:before {
  content: \"\\f26c\";
}
.fa-contao:before {
  content: \"\\f26d\";
}
.fa-500px:before {
  content: \"\\f26e\";
}
.fa-amazon:before {
  content: \"\\f270\";
}
.fa-calendar-plus-o:before {
  content: \"\\f271\";
}
.fa-calendar-minus-o:before {
  content: \"\\f272\";
}
.fa-calendar-times-o:before {
  content: \"\\f273\";
}
.fa-calendar-check-o:before {
  content: \"\\f274\";
}
.fa-industry:before {
  content: \"\\f275\";
}
.fa-map-pin:before {
  content: \"\\f276\";
}
.fa-map-signs:before {
  content: \"\\f277\";
}
.fa-map-o:before {
  content: \"\\f278\";
}
.fa-map:before {
  content: \"\\f279\";
}
.fa-commenting:before {
  content: \"\\f27a\";
}
.fa-commenting-o:before {
  content: \"\\f27b\";
}
.fa-houzz:before {
  content: \"\\f27c\";
}
.fa-vimeo:before {
  content: \"\\f27d\";
}
.fa-black-tie:before {
  content: \"\\f27e\";
}
.fa-fonticons:before {
  content: \"\\f280\";
}
.fa-reddit-alien:before {
  content: \"\\f281\";
}
.fa-edge:before {
  content: \"\\f282\";
}
.fa-credit-card-alt:before {
  content: \"\\f283\";
}
.fa-codiepie:before {
  content: \"\\f284\";
}
.fa-modx:before {
  content: \"\\f285\";
}
.fa-fort-awesome:before {
  content: \"\\f286\";
}
.fa-usb:before {
  content: \"\\f287\";
}
.fa-product-hunt:before {
  content: \"\\f288\";
}
.fa-mixcloud:before {
  content: \"\\f289\";
}
.fa-scribd:before {
  content: \"\\f28a\";
}
.fa-pause-circle:before {
  content: \"\\f28b\";
}
.fa-pause-circle-o:before {
  content: \"\\f28c\";
}
.fa-stop-circle:before {
  content: \"\\f28d\";
}
.fa-stop-circle-o:before {
  content: \"\\f28e\";
}
.fa-shopping-bag:before {
  content: \"\\f290\";
}
.fa-shopping-basket:before {
  content: \"\\f291\";
}
.fa-hashtag:before {
  content: \"\\f292\";
}
.fa-bluetooth:before {
  content: \"\\f293\";
}
.fa-bluetooth-b:before {
  content: \"\\f294\";
}
.fa-percent:before {
  content: \"\\f295\";
}
.fa-gitlab:before {
  content: \"\\f296\";
}
.fa-wpbeginner:before {
  content: \"\\f297\";
}
.fa-wpforms:before {
  content: \"\\f298\";
}
.fa-envira:before {
  content: \"\\f299\";
}
.fa-universal-access:before {
  content: \"\\f29a\";
}
.fa-wheelchair-alt:before {
  content: \"\\f29b\";
}
.fa-question-circle-o:before {
  content: \"\\f29c\";
}
.fa-blind:before {
  content: \"\\f29d\";
}
.fa-audio-description:before {
  content: \"\\f29e\";
}
.fa-volume-control-phone:before {
  content: \"\\f2a0\";
}
.fa-braille:before {
  content: \"\\f2a1\";
}
.fa-assistive-listening-systems:before {
  content: \"\\f2a2\";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: \"\\f2a3\";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: \"\\f2a4\";
}
.fa-glide:before {
  content: \"\\f2a5\";
}
.fa-glide-g:before {
  content: \"\\f2a6\";
}
.fa-signing:before,
.fa-sign-language:before {
  content: \"\\f2a7\";
}
.fa-low-vision:before {
  content: \"\\f2a8\";
}
.fa-viadeo:before {
  content: \"\\f2a9\";
}
.fa-viadeo-square:before {
  content: \"\\f2aa\";
}
.fa-snapchat:before {
  content: \"\\f2ab\";
}
.fa-snapchat-ghost:before {
  content: \"\\f2ac\";
}
.fa-snapchat-square:before {
  content: \"\\f2ad\";
}
.fa-pied-piper:before {
  content: \"\\f2ae\";
}
.fa-first-order:before {
  content: \"\\f2b0\";
}
.fa-yoast:before {
  content: \"\\f2b1\";
}
.fa-themeisle:before {
  content: \"\\f2b2\";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: \"\\f2b3\";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: \"\\f2b4\";
}
.fa-handshake-o:before {
  content: \"\\f2b5\";
}
.fa-envelope-open:before {
  content: \"\\f2b6\";
}
.fa-envelope-open-o:before {
  content: \"\\f2b7\";
}
.fa-linode:before {
  content: \"\\f2b8\";
}
.fa-address-book:before {
  content: \"\\f2b9\";
}
.fa-address-book-o:before {
  content: \"\\f2ba\";
}
.fa-vcard:before,
.fa-address-card:before {
  content: \"\\f2bb\";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: \"\\f2bc\";
}
.fa-user-circle:before {
  content: \"\\f2bd\";
}
.fa-user-circle-o:before {
  content: \"\\f2be\";
}
.fa-user-o:before {
  content: \"\\f2c0\";
}
.fa-id-badge:before {
  content: \"\\f2c1\";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: \"\\f2c2\";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: \"\\f2c3\";
}
.fa-quora:before {
  content: \"\\f2c4\";
}
.fa-free-code-camp:before {
  content: \"\\f2c5\";
}
.fa-telegram:before {
  content: \"\\f2c6\";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: \"\\f2c7\";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: \"\\f2c8\";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: \"\\f2c9\";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: \"\\f2ca\";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: \"\\f2cb\";
}
.fa-shower:before {
  content: \"\\f2cc\";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: \"\\f2cd\";
}
.fa-podcast:before {
  content: \"\\f2ce\";
}
.fa-window-maximize:before {
  content: \"\\f2d0\";
}
.fa-window-minimize:before {
  content: \"\\f2d1\";
}
.fa-window-restore:before {
  content: \"\\f2d2\";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: \"\\f2d3\";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: \"\\f2d4\";
}
.fa-bandcamp:before {
  content: \"\\f2d5\";
}
.fa-grav:before {
  content: \"\\f2d6\";
}
.fa-etsy:before {
  content: \"\\f2d7\";
}
.fa-imdb:before {
  content: \"\\f2d8\";
}
.fa-ravelry:before {
  content: \"\\f2d9\";
}
.fa-eercast:before {
  content: \"\\f2da\";
}
.fa-microchip:before {
  content: \"\\f2db\";
}
.fa-snowflake-o:before {
  content: \"\\f2dc\";
}
.fa-superpowers:before {
  content: \"\\f2dd\";
}
.fa-wpexplorer:before {
  content: \"\\f2de\";
}
.fa-meetup:before {
  content: \"\\f2e0\";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.atwho-view {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  margin-top: 18px;
  background: white;
  color: black;
  border: 1px solid #DDD;
  border-radius: 3px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  min-width: 120px;
  z-index: 11110 !important;
}
.atwho-view .atwho-header {
  padding: 5px;
  margin: 5px;
  cursor: pointer;
  border-bottom: solid 1px #eaeff1;
  color: #6f8092;
  font-size: 11px;
  font-weight: bold;
}
.atwho-view .atwho-header .small {
  color: #6f8092;
  float: right;
  padding-top: 2px;
  margin-right: -5px;
  font-size: 12px;
  font-weight: normal;
}
.atwho-view .atwho-header:hover {
  cursor: default;
}
.atwho-view .cur {
  background: #3366FF;
  color: white;
}
.atwho-view .cur small {
  color: white;
}
.atwho-view strong {
  color: #3366FF;
}
.atwho-view .cur strong {
  color: white;
  font: bold;
}
.atwho-view ul {
  /* width: 100px; */
  list-style: none;
  padding: 0;
  margin: auto;
  max-height: 200px;
  overflow-y: auto;
}
.atwho-view ul li {
  display: block;
  padding: 5px 10px;
  border-bottom: 1px solid #DDD;
  cursor: pointer;
}
.atwho-view small {
  font-size: smaller;
  color: #777;
  font-weight: normal;
}
.fr-popup {
  z-index: 9999 !important;
}
/* BUILDER CSS */
div[data-slot-focus] {
  top: -1px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  content: '';
  margin: 0;
  padding: 0;
  position: absolute;
  border: 1px solid var(--primary-60);
  z-index: 1;
}
div[data-section-focus] {
  content: '';
  position: absolute;
  border: 1px solid var(--primary-60);
}
div[data-section-focus=\"top\"] {
  left: 0px;
  right: 0px;
  top: 0px;
}
div[data-section-focus=\"right\"] {
  bottom: 0px;
  right: 0px;
  top: 0px;
}
div[data-section-focus=\"bottom\"] {
  bottom: 0px;
  right: 0px;
  left: 0px;
}
div[data-section-focus=\"left\"] {
  bottom: 0px;
  top: 0px;
  left: 0px;
}
div[data-section-focus=\"clone\"] {
  width: 25px;
  height: 25px;
  bottom: 62px;
  left: 10px;
  background: #4e5e9e;
  color: #fff;
  text-align: center;
  border: 0;
  line-height: 25px;
}
div[data-section-focus=\"handle\"] {
  width: 25px;
  height: 25px;
  bottom: 10px;
  left: 10px;
  background: #4e5e9e;
  color: #fff;
  text-align: center;
  border: 0;
  line-height: 25px;
}
div[data-section-focus=\"delete\"] {
  width: 25px;
  height: 25px;
  bottom: 36px;
  left: 10px;
  background: #4e5e9e;
  color: #fff;
  text-align: center;
  border: 0;
  line-height: 25px;
}
div[data-section-focus=\"handle\"],
div[data-section-focus=\"clone\"],
div[data-section-focus=\"delete\"] {
  z-index: 1000;
}
div[data-slot-toolbar] {
  position: absolute;
  top: -24px;
  left: -1px;
  right: -1px;
  height: 25px;
  width: 100%;
  z-index: 10;
  cursor: pointer;
  cursor: move;
  background-color: var(--primary-60);
  border-left: 1px solid var(--primary-60);
  border-right: 1px solid var(--primary-60);
  padding-top: 2px;
}
div[data-slot-toolbar] .btn {
  width: 20px;
  height: 20px;
  padding: 0;
  display: inline-block;
  margin-bottom: 0;
  font-weight: 600;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  white-space: nowrap;
  line-height: 1.3856;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 11px;
  line-height: 1.456;
  float: right;
  margin-right: 2px;
  color: #fff;
}
div[data-slot-toolbar] .btn .fa {
  padding-top: 4px;
}
div[data-slot],
[data-section-wrapper] {
  position: relative;
  font-size: initial;
  line-height: initial;
}
div[data-slot^=\"image\"] {
  padding-top: 1px;
  padding-bottom: 1px;
}
div[data-slot^=\"image\"] img {
  z-index: 2;
  position: relative;
}
div[data-slot].ui-sortable-helper {
  border: 1px solid var(--primary-60);
}
.slot-placeholder {
  border: 2px dotted var(--primary-60);
}
[data-slot=\"text\"].fr-box {
  padding: initial;
}
[data-slot=\"text\"].fr-box .fr-toolbar {
  border-top: 2px solid var(--primary-60);
  position: absolute;
  left: -15px;
  bottom: initial !important;
  min-width: 385px;
}
[data-slot=\"text\"].fr-box .fr-toolbar.fr-top {
  top: -78px !important;
  bottom: initial !important;
}
[data-slot=\"text\"].fr-box .fr-toolbar.fr-bottom {
  bottom: -78px !important;
  top: initial !important;
}
[data-slot=\"text\"].fr-box .fr-wrapper {
  border-radius: 0 0 0px 0px;
  -moz-border-radius: 0 0 0px 0px;
  -webkit-border-radius: 0 0 0px 0px;
  -webkit-box-shadow: none  !important;
  -moz-box-shadow: none  !important;
  box-shadow: none  !important;
  background: transparent !important;
}
[data-slot=\"text\"].fr-box .fr-wrapper .fr-element {
  text-align: inherit !important;
  padding: 0 !important;
  overflow-x: initial !important;
  color: inherit !important;
  min-height: inherit !important;
}
.slot-type-handle.btn,
.section-type-handle.btn {
  float: left;
  width: 111px;
  margin: 2px;
  height: 75px;
  padding-left: 5px;
  padding-right: 5px;
  text-align: center;
  word-wrap: break-word;
}
.slot-type-handle.ui-draggable-dragging,
.section-type-handle.ui-draggable-dragging {
  color: #5d6c7c;
  background-color: #f5f5f5;
  border-color: #d3d3d3;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
  margin: 2px;
  text-align: center;
}
.theme-list .panel-body {
  height: 350px;
}
.theme-list .select-theme-link {
  margin-top: 5px;
}
.theme-list .select-theme-selected {
  margin-top: 5px;
}
[data-slot=\"dynamicContent\"] {
  z-index: 50;
}
.chosen-container .chosen-results li {
  font-family: \"Source Sans 3\", Helvetica, Arial, sans-serif;
}
.chosen-container .chosen-results li:before {
  font: normal normal normal 14px/1 FontAwesome;
  padding-right: 6px;
}
div:empty[data-slot],
div.empty[data-slot] {
  padding: 1em 0 0em 0;
  display: block;
  position: relative;
  margin-bottom: 2px;
}
div:empty[data-slot]:before,
div.empty[data-slot]:before {
  content: \"\\f044\";
  font: normal normal normal 14px/1 FontAwesome;
  position: absolute;
  left: 2px;
  top: 2px;
  color: gray;
  font-size: small;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/builder.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/builder.css", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/builder.css");
    }
}
