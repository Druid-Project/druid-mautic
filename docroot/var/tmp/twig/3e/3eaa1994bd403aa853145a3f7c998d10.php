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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-stacked-modals.less */
class __TwigTemplate_8e3afad187bfc6113c0493b527343277 extends Template
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
        yield "@import \"../../app/less/lesshat\";

@distance:40px; /* distance between stacked modals*/

@modal-translate-z: -340px; /* The first modal translateZ value*/

.transform(@translateZ) {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(@translateZ);
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(@translateZ);
  -o-transform: scale(0.8) rotateY(45deg) translateZ(@translateZ);
  transform: scale(0.8) rotateY(45deg) translateZ(@translateZ);
}

.preserve-3d(){
  -webkit-transform-style:preserve-3d;
  -ms-transform-style:preserve-3d;
  -o-transform-style:preserve-3d;
  transform-style:preserve-3d;
}

.perspective(@perspective){
  -webkit-perspective:@perspective;
  -moz-perspective:@perspective;
  -ms-perspective:@perspective;
  -o-perspective:@perspective;
  perspective:@perspective;
}
.container{
  margin:5em auto;
}

.modal.in{
  .perspective(2000px);

  .modal-dialog{
    &.aside{
      .transform(@modal-translate-z);
      .preserve-3d();

      &.aside-1{
        .transform(calc(@modal-translate-z + @distance));
      }
      &.aside-2{
        .transform(calc(@modal-translate-z + (@distance * 2)));
      }
      &.aside-3{
        .transform(calc(@modal-translate-z + (@distance * 3)));
      }
      &.aside-4{
        .transform(calc(@modal-translate-z + (@distance * 4)));
      }
      &.aside-5{
        .transform(calc(@modal-translate-z + (@distance * 5)));
      }
    }
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
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-stacked-modals.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-stacked-modals.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap-stacked-modals.less");
    }
}
