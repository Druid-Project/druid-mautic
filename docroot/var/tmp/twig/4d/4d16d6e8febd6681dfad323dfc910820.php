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

/* @bundles/CoreBundle/Assets/css/app/less/components/editor.less */
class __TwigTemplate_8dc583e4363e33f0769aaae6858eb4ec extends Template
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
        yield "//
// Editor
// -------------------

.content-body .cke_chrome {
\tbackground: #f8f8f8;
\tborder: 1px solid #f0f0f0;
}

.content-body .cke_bottom, .content-body .cke_top {
\tbackground: #f8f8f8;
}

.ck-mentions span.custom-item{
\tcolor: #000000;
}
.ck-mentions span.custom-item.ck-on, .ck-mentions span.custom-item.ck-on span.custom-item-id{
\tcolor: #ffffff;
}

.ck-mentions span.custom-item span.custom-item-id{
\tmargin-left: 10px;
\tfont-size: smaller;
\tcolor: #cccccc;
}
.ck.ck-dropdown__panel {
\tmax-height: 180px;
\toverflow-y: auto;
}
.ck-editor__editable:not(.ck-editor__nested-editable) {
\tmin-height: 200px;
}
.ck.ck-balloon-panel.ck-balloon-panel_caret_se.ck-balloon-panel_visible {
\tz-index: 99999 !important;
}
.ck-body-wrapper{
\tposition: fixed;
\tz-index: 99999;
}

.ck.ck-content.ck-editor__editable a {
\ttext-decoration: underline;
\tcolor: var(--link-primary);
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/editor.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/editor.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/editor.less");
    }
}
