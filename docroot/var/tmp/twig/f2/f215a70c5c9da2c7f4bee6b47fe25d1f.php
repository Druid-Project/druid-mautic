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

/* @themes/fresh-left/assets/icon_linkedin.svg */
class __TwigTemplate_e508d6b7f98c1056aa4efe9b233e4c5e extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 200 200\" style=\"enable-background:new 0 0 200 200;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#FFFFFF;}
</style>
<g>
\t<path class=\"st0\" d=\"M100,0C44.8,0,0,44.8,0,100c0,55.2,44.8,100,100,100s100-44.8,100-100C200,44.8,155.2,0,100,0z M78.1,132.6
\t\tH61.6V79.7h16.5V132.6z M69.8,72.5c-5.3,0-9.5-4.3-9.5-9.5c0-5.3,4.3-9.5,9.5-9.5c5.3,0,9.5,4.3,9.5,9.5
\t\tC79.4,68.2,75.1,72.5,69.8,72.5z M139.7,132.6h-16.4v-25.7c0-6.1-0.1-14-8.6-14c-8.6,0-9.9,6.7-9.9,13.6v26.2H88.4V79.7h15.8v7.2
\t\th0.2c2.2-4.2,7.6-8.6,15.6-8.6c16.7,0,19.7,11,19.7,25.2V132.6z\"/>
</g>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-left/assets/icon_linkedin.svg";
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
        return new Source("", "@themes/fresh-left/assets/icon_linkedin.svg", "/app/docroot/themes/fresh-left/assets/icon_linkedin.svg");
    }
}
