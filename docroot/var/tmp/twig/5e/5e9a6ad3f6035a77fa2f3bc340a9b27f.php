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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/char_counter.less */
class __TwigTemplate_61532c85768d83eb7f15ce6b3d0f685c extends Template
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
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/char_counter.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/char_counter.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/char_counter.less");
    }
}
