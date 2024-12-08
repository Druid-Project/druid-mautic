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

/* @themes/fresh-fixed/assets/logo_green.svg */
class __TwigTemplate_d64f026720425dce26ec19e1b8a08eff extends Template
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
\t viewBox=\"0 0 258.6 67\" style=\"enable-background:new 0 0 258.6 67;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#00BF9A;}
</style>
<g>
\t<g>
\t\t<circle class=\"st0\" cx=\"33.5\" cy=\"33.5\" r=\"33.5\"/>
\t</g>
\t<g>
\t\t<path class=\"st0\" d=\"M97.4,53.8V16.6c0-1.8,1.5-3.3,3.3-3.3l0,0c1.8,0,3.3,1.5,3.3,3.3v31.5h14.3c1.6,0,2.8,1.3,2.8,2.8v0
\t\t\tc0,1.6-1.3,2.8-2.8,2.8H97.4z\"/>
\t\t<path class=\"st0\" d=\"M167,33.5c0,6.6-1.6,11.7-4.9,15.4c-3.3,3.7-8,5.5-14,5.5c-6.1,0-10.8-1.8-14.1-5.4
\t\t\tc-3.3-3.6-4.9-8.8-4.9-15.5c0-6.7,1.6-11.8,4.9-15.4s8-5.4,14.1-5.4c6,0,10.7,1.8,14,5.5C165.3,21.7,167,26.9,167,33.5z M136,33.5
\t\t\tc0,5,1,8.8,3,11.4c2,2.6,5,3.9,9,3.9c3.9,0,6.9-1.3,8.9-3.8c2-2.6,3-6.4,3-11.4c0-5-1-8.7-3-11.3c-2-2.6-4.9-3.9-8.9-3.9
\t\t\tc-4,0-7,1.3-9,3.9C137,24.7,136,28.5,136,33.5z\"/>
\t\t<path class=\"st0\" d=\"M197.9,31.8H210v20.4c-2.4,0.8-4.8,1.4-7,1.7c-2.2,0.3-4.7,0.5-7.3,0.5c-6.1,0-10.9-1.8-14.2-5.4
\t\t\tc-3.3-3.6-5-8.8-5-15.4c0-6.5,1.9-11.6,5.6-15.3c3.8-3.7,8.9-5.5,15.5-5.5c3.1,0,6.1,0.4,8.9,1.3c1.7,0.5,2.6,2.4,1.9,4v0
\t\t\tc-0.6,1.4-2.2,2.2-3.6,1.7c-2.5-0.8-4.9-1.3-7.4-1.3c-4.3,0-7.7,1.4-10.3,4.1c-2.5,2.7-3.8,6.4-3.8,11.1c0,5,1.1,8.7,3.4,11.3
\t\t\tc2.3,2.6,5.5,3.9,9.8,3.9c2.1,0,4.4-0.3,6.9-0.8V37.5h-5.6c-1.6,0-2.8-1.3-2.8-2.8v0C195.1,33.1,196.4,31.8,197.9,31.8z\"/>
\t\t<path class=\"st0\" d=\"M258.6,33.5c0,6.6-1.6,11.7-4.9,15.4c-3.3,3.7-8,5.5-14,5.5c-6.1,0-10.8-1.8-14.1-5.4
\t\t\tc-3.3-3.6-4.9-8.8-4.9-15.5c0-6.7,1.6-11.8,4.9-15.4s8-5.4,14.1-5.4c6,0,10.7,1.8,14,5.5C256.9,21.7,258.6,26.9,258.6,33.5z
\t\t\t M227.6,33.5c0,5,1,8.8,3,11.4c2,2.6,5,3.9,9,3.9c3.9,0,6.9-1.3,8.9-3.8c2-2.6,3-6.4,3-11.4c0-5-1-8.7-3-11.3
\t\t\tc-2-2.6-4.9-3.9-8.9-3.9c-4,0-7,1.3-9,3.9C228.6,24.7,227.6,28.5,227.6,33.5z\"/>
\t</g>
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
        return "@themes/fresh-fixed/assets/logo_green.svg";
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
        return new Source("", "@themes/fresh-fixed/assets/logo_green.svg", "/app/docroot/themes/fresh-fixed/assets/logo_green.svg");
    }
}
