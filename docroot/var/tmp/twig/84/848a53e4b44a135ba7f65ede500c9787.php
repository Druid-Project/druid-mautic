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

/* @bundles/PageBundle/Assets/builder/builder.less */
class __TwigTemplate_c073ae9d9ea26957306ae74a6a037867 extends Template
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
        yield "@import \"../../../CoreBundle/Assets/builder/builder.less\";

.dropdown.slideshow-options {
  position: absolute;
  top: 0;
  left: 0;
}

#slideshow-options {
  opacity: 0.7;
}

#filemanager_iframe {
  width: 100%;
  height: 500px;
}

.file-manager-toggle {
  margin-top: 24px;
}

.stroked, .stroked:hover, .stroked:focus {
  text-decoration: line-through;
}

.ui-placeholder-highlight {
  border: 2px dashed #999;
  background: #ccc;
}
.ui-placeholder-highlight .fa-arrow-right {
  position: relative;
  left: -30px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PageBundle/Assets/builder/builder.less";
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
        return new Source("", "@bundles/PageBundle/Assets/builder/builder.less", "/app/docroot/app/bundles/PageBundle/Assets/builder/builder.less");
    }
}
