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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/mixins.less */
class __TwigTemplate_3eef0ba52b08b4039502265955e0fa6d extends Template
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
        yield "// Mixins
// --------------------------

.fa-icon() {
  display: inline-block;
  font: normal normal normal @fa-font-size-base/@fa-line-height-base FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

.fa-icon-rotate(@degrees, @rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation})\";
  -webkit-transform: rotate(@degrees);
      -ms-transform: rotate(@degrees);
          transform: rotate(@degrees);
}

.fa-icon-flip(@horiz, @vert, @rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation}, mirror=1)\";
  -webkit-transform: scale(@horiz, @vert);
      -ms-transform: scale(@horiz, @vert);
          transform: scale(@horiz, @vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only() {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

// Use in conjunction with .sr-only to only display content when it's focused.
//
// Useful for \"Skip to main content\" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
//
// Credit: HTML5 Boilerplate

.sr-only-focusable() {
  &:active,
  &:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
  }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/mixins.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/mixins.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/mixins.less");
    }
}
