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

/* @themes/fresh-wide/assets/icon_check_white.svg */
class __TwigTemplate_3a0bb0109bb8e642e1c74df088d2abef extends Template
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
<!-- Generator: Adobe Illustrator 21.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 155.5 134.4\" style=\"enable-background:new 0 0 155.5 134.4;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#FFFFFF;}
</style>
<g>
\t<polygon class=\"st0\" points=\"63.2,134.4 0,84.6 18.5,61.1 58.3,92.4 132,0 155.5,18.7 \t\"/>
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
        return "@themes/fresh-wide/assets/icon_check_white.svg";
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
        return new Source("", "@themes/fresh-wide/assets/icon_check_white.svg", "/app/docroot/themes/fresh-wide/assets/icon_check_white.svg");
    }
}
