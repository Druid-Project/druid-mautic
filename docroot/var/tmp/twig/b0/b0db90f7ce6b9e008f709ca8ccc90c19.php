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

/* @themes/fresh-wide/assets/icon_twitter.svg */
class __TwigTemplate_d3f7c6dabaeb298d464b6f448ece57be extends Template
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
\t<path class=\"st0\" d=\"M100,0C44.8,0,0,44.8,0,100c0,55.2,44.8,100,100,100s100-44.8,100-100C200,44.8,155.2,0,100,0z M135.5,81.8
\t\tc0,0.8,0.1,1.6,0.1,2.4c0,24.2-18.4,52.1-52.1,52.1c-10.4,0-20-3-28.1-8.2c1.4,0.2,2.9,0.3,4.4,0.3c8.6,0,16.5-2.9,22.8-7.8
\t\tc-8-0.1-14.8-5.4-17.1-12.7c1.1,0.2,2.3,0.3,3.4,0.3c1.7,0,3.3-0.2,4.8-0.6c-8.4-1.7-14.7-9.1-14.7-18c0-0.1,0-0.2,0-0.2
\t\tc2.5,1.4,5.3,2.2,8.3,2.3c-4.9-3.3-8.2-8.9-8.2-15.3c0-3.4,0.9-6.5,2.5-9.2c9,11.1,22.5,18.4,37.8,19.1c-0.3-1.3-0.5-2.7-0.5-4.2
\t\tc0-10.1,8.2-18.3,18.3-18.3c5.3,0,10,2.2,13.4,5.8c4.2-0.8,8.1-2.3,11.6-4.4c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.2-1.4,10.5-2.9
\t\tC142.2,76,139.1,79.2,135.5,81.8z\"/>
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
        return "@themes/fresh-wide/assets/icon_twitter.svg";
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
        return new Source("", "@themes/fresh-wide/assets/icon_twitter.svg", "/app/docroot/themes/fresh-wide/assets/icon_twitter.svg");
    }
}
