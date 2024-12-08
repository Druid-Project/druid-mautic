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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less */
class __TwigTemplate_f7c64bb6f8476e022f6be73ed01182e8 extends Template
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
        yield "// List Icons
// -------------------------

.@{fa-css-prefix}-ul {
  padding-left: 0;
  margin-left: @fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.@{fa-css-prefix}-li {
  position: absolute;
  left: -@fa-li-width;
  width: @fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.@{fa-css-prefix}-lg {
    left: (-@fa-li-width + (4em / 14));
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
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/font-awesome/less/list.less");
    }
}
