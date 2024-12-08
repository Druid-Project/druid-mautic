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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/fullscreen.less */
class __TwigTemplate_2659bfc1b2aa9bf0ec7c3419b34e1f42 extends Template
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
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/fullscreen.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/fullscreen.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/froala/plugins/fullscreen.less");
    }
}
