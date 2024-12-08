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

/* @bundles/CoreBundle/Assets/css/app/less/components/image.less */
class __TwigTemplate_8cc208de57f91379af5de2bef5321bd5 extends Template
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
// Image
// --------------------------------------------------

// Image wrapper
// ------------------------
.img-wrapper {
  display: inline-block;
  position: relative;
  //overflow: hidden;

  +.img-wrapper {
    margin-left: 3px;
  }

  &.pull-right {
    +.img-wrapper {
      margin-right: 3px;
      margin-left: 0;
    }
  }

  // inset shadow
  &:after {
    position: absolute;
    content: \"\";
    z-index: 1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: inherit;
  }

  img {
    border-radius: inherit;
    .img-responsive();
  }

  // label & badge
  > .label,
  > .badge {
    position: absolute;
    z-index: 5;
    top: -10px;
    right: -10px;
  }
}

// Image rounded
// ------------------------
.img-rounded {
  border-radius: @border-radius-base;
}

// Contact avatar
.contact-avatar {
  width: 100%;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/image.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/image.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/image.less");
    }
}
