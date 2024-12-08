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

/* @themes/skyline/css/skyline.css */
class __TwigTemplate_f7c3e587be89d07d30e16d9b3d07fc0e extends Template
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
        yield "@import url(https://fonts.googleapis.com/css?family=Lato:400);

/* Take care of image borders and formatting */

img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
}

a {
    text-decoration: none;
    border: 0;
    outline: none;
}

a img {
    border: none;
}

/* General styling */

td, h1, h2, h3  {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: 400;
}

body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #37302d;
    background: #ffffff;
}

h1, h2, h3 {
    padding: 0;
    margin: 0;
    color: #37302d;
    font-weight: 400;
}

h3 {
    color: #21c5ba;
    font-size: 24px;
}

.well {
    margin: 30px auto;
    width: 800px;
}

.text-center {
    text-align: center;
}

@media screen {
     /* Thanks Outlook 2013! http://goo.gl/XLxpyl*/
    td, h1, h2, h3 {
        font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
    }
}

/* Mobile styles */
@media only screen and (max-width: 480px) {

    table[class=\"w320\"] {
        width: 320px !important;
    }

    table[class=\"w300\"] {
        width: 300px !important;
    }

    table[class=\"w290\"] {
        width: 290px !important;
    }

    td[class=\"w320\"] {
        width: 320px !important;
    }

    td[class=\"mobile-center\"] {
        text-align: center !important;
    }

    td[class=\"mobile-padding\"] {
        padding-left: 20px !important;
        padding-right: 20px !important;
        padding-bottom: 20px !important;
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
        return "@themes/skyline/css/skyline.css";
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
        return new Source("", "@themes/skyline/css/skyline.css", "/app/docroot/themes/skyline/css/skyline.css");
    }
}
