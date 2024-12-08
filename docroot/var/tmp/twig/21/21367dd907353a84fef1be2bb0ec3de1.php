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

/* @bundles/CoreBundle/Assets/css/app.less */
class __TwigTemplate_853a4edf0ba5c19495b894e59f358fd8 extends Template
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
// Application
// --------------------------------------------------
// load font
@font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 300;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-300.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: italic;
    font-weight: 300;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-300italic.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 400;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-regular.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: italic;
    font-weight: 400;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-italic.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 600;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-600.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: italic;
    font-weight: 600;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-600italic.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: normal;
    font-weight: 700;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-700.woff2') format('woff2');
  }
  @font-face {
    font-display: swap;
    font-family: 'Source Sans 3';
    font-style: italic;
    font-weight: 700;
    src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-700italic.woff2') format('woff2');
  }

// Core variables and mixins
@import \"app/less/variables\";
@import \"app/less/mixins\";
@import \"app/less/lesshat\";
@import \"app/less/spinning\";
@import \"../../../../../node_modules/bootstrap/less/mixins\";
// Layouts
@import \"app/less/layouts/base\";
@import \"app/less/layouts/header\";
@import \"app/less/layouts/sidebar\";
@import \"app/less/layouts/content\";
@import \"app/less/layouts/footer\";
// Components
@import \"app/less/components/scaffolding\";
@import \"app/less/components/type\";
@import \"app/less/components/scrollbar\";
@import \"app/less/components/buttons\";
@import \"app/less/components/button-groups\";
@import \"app/less/components/alerts\";
@import \"app/less/components/calendar\";
@import \"app/less/components/editor\";
@import \"app/less/components/media\";
@import \"app/less/components/menu\";
@import \"app/less/components/grid\";
@import \"app/less/components/list-group\";
@import \"app/less/components/dropdowns\";
@import \"app/less/components/navs\";
@import \"app/less/components/notes\";
@import \"app/less/components/bullet\";
@import \"app/less/components/labels\";
@import \"app/less/components/badges\";
@import \"app/less/components/brand\";
@import \"app/less/components/forms\";
@import \"app/less/components/graphs\";
@import \"app/less/components/input-groups\";
@import \"app/less/components/image\";
@import \"app/less/components/table\";
@import \"app/less/components/progress-bars\";
@import \"app/less/components/panels\";
@import \"app/less/components/box\";
@import \"app/less/components/switch\";
@import \"app/less/components/steps\";
@import \"app/less/components/colors\";
@import \"app/less/components/pagination\";
@import \"app/less/components/loading-bar\";
@import \"app/less/components/offcanvas\";
@import \"app/less/components/timeline\";
@import \"app/less/components/utilities\";
@import \"app/less/components/builder\";
@import \"app/less/components/maps\";
@import \"app/less/components/modals\";
@import \"app/less/components/accordions\";
@import \"app/less/components/tiles\";
@import \"app/less/custom\";
@import \"app/less/components/toggle\";";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app.less");
    }
}
