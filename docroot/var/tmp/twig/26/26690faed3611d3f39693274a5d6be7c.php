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

/* @bundles/CoreBundle/Assets/css/libraries/libraries.less */
class __TwigTemplate_50b759379984416a4700670ab1c634eb extends Template
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
        yield "//Bootstrap
@import \"bootstrap/bootstrap\";
@import \"bootstrap/bootstrap-vertical-tabs\";
@import \"bootstrap/bootstrap-stacked-modals\";

//Remix
@import \"remixicon/fonts/remixicon\";

//Font-awesome
//@fa-font-path:        \"font-awesome/fonts\";
@import \"font-awesome/font-awesome\";

//Chosen
@import \"chosen/bootstrap-chosen\";

//Multi-Select
@import \"multiselect/multi-select\";

//Colorpicker
@import (less) \"../../../../../../node_modules/@claviska/jquery-minicolors/jquery.minicolors.css\";
// Adding the minicolor background image as base64 to avoid issues with path to node_modules which does not exist in prod.
.minicolors-sprite {
    background-image: data-uri('../../../../../../node_modules/@claviska/jquery-minicolors/jquery.minicolors.png');
}

//Emoji
@import \"emoji/emoji\";

//Other
@import \"other/typeahead\";
@import (less) \"../../../../../../node_modules/jquery-datetimepicker/jquery.datetimepicker.css\";
@import (less) \"../../../../../../node_modules/jvectormap-next/jquery-jvectormap.css\";
@import \"other/at\";
@import \"other/codemirror\";

//Froala
@import \"froala/froala_editor\";
//@import \"froala/froala_style\";
@import \"froala/plugins/char_counter\";
@import \"froala/plugins/draggable\";
@import \"froala/plugins/fullscreen\";
@import \"froala/plugins/line_breaker\";
@import \"froala/plugins/video\";
@import \"froala/plugins/code_view\";
@import \"froala/plugins/emoticons\";
@import \"froala/plugins/image\";
@import \"froala/plugins/quick_insert\";
@import \"froala/plugins/image_manager\";
@import \"froala/plugins/colors\";
@import \"froala/plugins/file\";
@import \"froala/plugins/table\";
@import \"froala/plugins/gated_video\";
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/libraries.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/libraries.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/libraries.less");
    }
}
