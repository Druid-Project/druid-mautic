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

/* @themes/fresh-fixed/js/extras.js */
class __TwigTemplate_23802a5c6816dce9778391eeefca9271 extends Template
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
        yield "/*-- Adding Fixed Header --*/

function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 1,
  headerEl = document.getElementById('top');
  
  if (distanceY > shrinkOn) {
    headerEl.classList.add(\"scroll\");
  } else {
    headerEl.classList.remove(\"scroll\");
  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-fixed/js/extras.js";
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
        return new Source("", "@themes/fresh-fixed/js/extras.js", "/app/docroot/themes/fresh-fixed/js/extras.js");
    }
}
