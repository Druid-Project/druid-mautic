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

/* @themes/skyline/html/email.html.twig */
class __TwigTemplate_5fd1e5d7c061c35fb68fd9a2f91e6f4f extends Template
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
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{subject}</title>
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css?family=Lato:400);

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
            color: #ffffff;
            font-weight: 400;
        }

        h3 {
            color: #21c5ba;
            font-size: 24px;
        }
    </style>

    <style type=\"text/css\" media=\"screen\">
        @media screen {
             /* Thanks Outlook 2013! */
            td, h1, h2, h3 {
                font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
            }
        }
    </style>

    <style type=\"text/css\" media=\"only screen and (max-width: 480px)\">
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

            [class=\"mobile-block\"] {
                width: 100% !important;
                display: block !important;
            }
        }
    </style>
</head>
<body class=\"body\" style=\"padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none\" bgcolor=\"#ffffff\">
    <div data-section-wrapper=\"1\" style=\"border-bottom: 3px solid #3bcdc3;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" class=\"w320\">
                <tr>
                    <td valign=\"top\" style=\"text-align:left;\" class=\"mobile-center\" data-slot-container=\"1\">
                        <div data-slot=\"image\">
                            <img width=\"250\" height=\"62\" src=\"";
        // line 111
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 111, $this->source); })())) . "/img/logo.gif"), null, null, true);
        yield "\">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\"  background=\"";
        // line 118
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 118, $this->source); })())) . "/img/bg.gif"), null, null, true);
        yield "\" bgcolor=\"#64594b\" valign=\"top\" style=\"background: url(";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 118, $this->source); })())) . "/img/bg.gif"), null, null, true);
        yield ") no-repeat center; background-color: #64594b; background-position: center;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" height=\"303\" class=\"w320\">
                <tr>
                    <td valign=\"middle\" style=\"vertical-align:middle; padding-right: 15px; padding-left: 15px; text-align:left;\" class=\"mobile-center\" height=\"303\" data-slot-container=\"1\">
                        <div data-slot=\"text\">
                            <h1 style=\"color: #ffffff\">WE REALLY MISS YOU!</h1><br>
                            <h2 style=\"color: #ffffff\">Like.. really, really! Please give us another chance.</h2>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"30\" width=\"530\" class=\"w290\">
                <tr>
                    <td valign=\"top\" data-slot-container=\"1\">
                        <div data-slot=\"text\">
                            <h3 style=\"text-align:center;\">Enjoy 50% off your next purchase!</h3>
                            <br>

                            <table style=\"margin: 0 auto;\" cellspacing=\"0\" cellpadding=\"8\" width=\"250\">
                                <tr>
                                    <td style=\"border: 1px solid #a1a1a1; text-align:center;\">
                                        Coupon Code: <span style=\"font-family: Courier;\">4562789498</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"8\" width=\"530\" class=\"w320\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                            <tr>
                                <td class=\"mobile-padding\" style=\"text-align:left;\" data-slot-container=\"1\">
                                    <div data-slot=\"separator\"><hr/></div>
                                    <div data-slot=\"text\">
                                        <br>
                                        We know it's only been a few months but since you've been gone, we've received a ton of amazing new products that we think you might like.
                                        <br><br>
                                        We hope you will give us another chance and come have look.
                                        <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class=\"mobile-padding\" data-slot-container=\"1\">
                        <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"Come back!\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#3bcdc3\" data-param-color=\"ffffff\">
                            <a href=\"#\" target=\"_blank\" style=\"font-family:'Lato', Helvetica, Arial, sans-serif;font-weight:bold;font-size: 13px; color: #ffffff; text-decoration: none; text-decoration: none; padding: 12px 40px; background-color: #3bcdc3; display: inline-block;\">
                                Come back!
                            </a>
                            <div style=\"clear:both\"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"25\" width=\"100%\">
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\" style=\"background-color:#c2c2c2;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" class=\"w320\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"30\" width=\"100%\">
                            <tr>
                                <td style=\"text-align:center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 206
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 206, $this->source); })())) . "/img/twitter.gif"), null, null, true);
        yield "\" alt=\"twitter\" />
                                        </a>
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 209
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 209, $this->source); })())) . "/img/gplus.gif"), null, null, true);
        yield "\" alt=\"google plus\" />
                                        </a>
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 212
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 212, $this->source); })())) . "/img/facebook.gif"), null, null, true);
        yield "\" alt=\"facebook\" />
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <table style=\"margin:0 auto;\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">
                                <tr>
                                    <td style=\"text-align:center; margin:0 auto;\" width=\"100%\" data-slot-container=\"1\">
                                        <div data-slot=\"image\">
                                            <a href=\"#\" style=\"text-align:center;\">
                                                <img style=\"margin:0 auto;\" width=\"123\" height=\"24\" src=\"";
        // line 228
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 228, $this->source); })())) . "/img/logo-footer.gif"), null, null, true);
        yield "\" alt=\"logo link\" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </div>
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
        return "@themes/skyline/html/email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  288 => 228,  269 => 212,  263 => 209,  257 => 206,  164 => 118,  154 => 111,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/skyline/html/email.html.twig", "/app/docroot/themes/skyline/html/email.html.twig");
    }
}
