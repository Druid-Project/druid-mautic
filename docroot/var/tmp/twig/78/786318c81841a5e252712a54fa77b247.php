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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/special_characters.less */
class __TwigTemplate_67277527b6051e62b7f407895a0a3788 extends Template
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
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-special-characters-modal {
  text-align: left;
  padding: 20px 20px 10px;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-special-characters-modal .fr-special-characters-list {
  margin-bottom: 20px;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-special-characters-modal .fr-special-characters-title {
  font-weight: bold;
  font-size: 14px;
  padding: 6px 0 4px;
  margin: 0 0 5px;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-special-characters-modal .fr-special-character {
  display: inline-block;
  font-size: 16px;
  width: 20px;
  height: 20px;
  padding: 5px;
  line-height: 20px;
  cursor: default;
  font-weight: normal;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  text-align: center;
  border: 1px solid #cccccc;
  margin: -1px 0 0 -1px;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/special_characters.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/special_characters.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/special_characters.less");
    }
}
