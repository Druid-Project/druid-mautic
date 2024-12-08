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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-legacy-all/html/email.html.twig */
class __TwigTemplate_113f8f376ce07fe27eed2791c1306cd7 extends Template
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
        yield "<!DOCTYPE html>
<html>
    <head>
        <title>{subject}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
            /* Mobile styles */
            @media only screen and (max-width: 480px) {

                [class=\"w320\"] {
                    width: 320px !important;
                }

                [class=\"mobile-block\"] {
                    width: 100% !important;
                    display: block !important;
                }
            }
        </style>
    </head>
    <body style=\"font-family: Helvetica, Arial, sans-serif;color: #676767;width: 100%;margin: 0;\">
    </body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-legacy-all/html/email.html.twig";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-legacy-all/html/email.html.twig", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/themes/theme-legacy-all/html/email.html.twig");
    }
}
