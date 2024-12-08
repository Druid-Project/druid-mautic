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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/help.less */
class __TwigTemplate_7881da09f90b1ac23a96677ce9330de8 extends Template
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
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal {
  text-align: left;
  padding: 20px 20px 10px;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table {
  border-collapse: collapse;
  font-size: 14px;
  line-height: 1.5;
  width: 100%;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table + table {
  margin-top: 20px;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table tr {
  border: 0;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table th,
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table td {
  padding: 6px 0 4px;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table tbody tr {
  border-bottom: solid 1px #ebebeb;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table tbody td:first-child {
  width: 60%;
  color: #646464;
}
.fr-modal .fr-modal-wrapper .fr-modal-body .fr-help-modal table tbody td:nth-child(n+2) {
  letter-spacing: 0.5px;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/help.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/help.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/help.less");
    }
}
