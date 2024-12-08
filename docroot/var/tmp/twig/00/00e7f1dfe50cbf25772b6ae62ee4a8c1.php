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

/* @themes/neopolitan/html/email.html.twig */
class __TwigTemplate_b4f23e4eb7cea89c0486dc0c1519a7cb extends Template
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{subject}</title>
    <!-- Designed by https://github.com/kaytcat -->
    <!-- Robot header image designed by Freepik.com -->

    <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Droid+Sans);

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
        color: #bbbbbb;
    }

    a img {
        border: none;
    }

    /* General styling */

    td, h1, h2, h3  {
        font-family: Helvetica, Arial, sans-serif;
        font-weight: 400;
    }

    td {
        text-align: center;
    }

    body {
        -webkit-font-smoothing:antialiased;
        -webkit-text-size-adjust:none;
        width: 100%;
        height: 100%;
        color: #37302d;
        background: #ffffff;
        font-size: 16px;
    }

     table {
        border-collapse: collapse !important;
    }

    .headline {
        color: #ffffff;
        font-size: 36px;
    }

    .force-width-80 {
        width: 80% !important;
    }

    </style>

    <style type=\"text/css\" media=\"screen\">
            @media screen {
                 /*Thanks Outlook 2013! http://goo.gl/XLxpyl*/
                td, h1, h2, h3 {
                    font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
                }
            }
    </style>

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
<body class=\"body\" style=\"padding: 0;margin: 0;display: block;background: #ffffff;-webkit-text-size-adjust: none;-webkit-font-smoothing: antialiased;width: 100%;height: 100%;color: #37302d;font-size: 16px;\" bgcolor=\"#ffffff\">
<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-size: 30px;text-align: center;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        <br>
                            Awesome Co
                        <br>
                        <br>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>

<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#4dbfbf\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <br>
                    <div data-slot=\"image\">
                        <img src=\"";
        // line 118
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 118, $this->source); })())) . "/img/robomail.gif"), null, null, true);
        yield "\" width=\"224\" height=\"240\" alt=\"robot picture\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"headline\" style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;color: #ffffff;font-size: 36px;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        Good News!
                    </div>
                </td>
            </tr>
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">

                    <center>
                        <table style=\"margin: 0 auto;border-collapse: collapse !important;\" cellpadding=\"0\" cellspacing=\"0\" width=\"60%\">
                            <tr>
                                <td style=\"color: #187272;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                         Your order has shipped! To track your order or make any changes please click the button below.
                                        <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>

                </td>
            </tr>
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"My Order\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#178f8f\" data-param-color=\"ffffff\">
                        <a href=\"#\" target=\"_blank\" style=\"font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; padding: 15px 66px; background-color: #178f8f; display: inline-block;font-family: Helvetica, Arial, sans-serif;font-size: 16px;font-weight: bold;\">
                            My Order
                        </a>
                        <div style=\"clear:both\"></div>
                    </div>
                    <br>
                    <br>
                </td>
            </tr>
        </table>
    </center>
</div>
<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px; background-color: #f5774e;\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#f5774e\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">

                    <center>
                        <table style=\"margin: 0 auto;border-collapse: collapse !important;width: 80% !important;\" cellspacing=\"0\" cellpadding=\"0\" class=\"force-width-80\">
                            <tr>
                                <td style=\"text-align: left;color: #933f24;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <br>
                                        <span style=\"color:#ffffff;\">Bob Erlicious</span> <br>
                                        123 Flower Drive <br>
                                        Victoria, BC <br>
                                        V9P 2E8 <br>
                                        1(250)222-2232
                                    </div>
                                </td>
                                <td style=\"text-align: right;vertical-align: top;color: #933f24;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <br>
                                        <span style=\"color:#ffffff;\">Invoice: 00234</span> <br>
                                        April 3, 2014
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table style=\"margin: 0 auto;border-collapse: collapse !important;width: 80% !important;\" cellspacing=\"0\" cellpadding=\"0\" class=\"force-width-80\">
                            <tr>
                                <td class=\"mobile-block\" style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        <br>

                                        <table cellspacing=\"0\" cellpadding=\"0\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                                            <tr>
                                                <td style=\"color: #ffffff;background-color: #ac4d2f;padding: 10px 0px;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">
                                                    Expected Delivery Date
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"color: #933f24;padding: 10px 0px;background-color: #f7a084;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\">
                                                    Monday, 13th November 2014
                                                </td>
                                            </tr>
                                        </table>

                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table style=\"margin: 0 auto;border-collapse: collapse !important;width: 80% !important;\" cellspacing=\"0\" cellpadding=\"0\" class=\"force-width-80\">
                            <tr>
                                <td style=\"text-align: left;color: #933f24;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <br>
                                        Thank you for your business. Please <a style=\"color: #ffffff;text-decoration: none;border: 0;outline: none;\" href=\"#\">contact us</a> with any questions regarding your order.
                                        <br>
                                        <br>
                                        Awesome Inc
                                        <br>
                                        <br>
                                        <br>
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

<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#414141\" width=\"600\" class=\"w320\">
            <tr>
                <td style=\"font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        <br>
                        <br>
                        <img src=\"";
        // line 252
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 252, $this->source); })())) . "/img/gplus.gif"), null, null, true);
        yield "\" alt=\"google+\">
                        <img src=\"";
        // line 253
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 253, $this->source); })())) . "/img/facebook.gif"), null, null, true);
        yield "\" alt=\"facebook\">
                        <img src=\"";
        // line 254
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 254, $this->source); })())) . "/img/twitter.gif"), null, null, true);
        yield "\" alt=\"twitter\">
                        <br>
                        <br>
                    </div>
                </td>
            </tr>
            <tr>
                <td style=\"color: #bbbbbb;font-size: 12px;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        <a href=\"{webview_url}\" style=\"text-decoration: none;border: 0;outline: none;color: #bbbbbb;\">View in browser</a> | <a href=\"{unsubscribe_url}\" style=\"text-decoration: none;border: 0;outline: none;color: #bbbbbb;\">Unsubscribe</a> | <a href=\"#\" style=\"text-decoration: none;border: 0;outline: none;color: #bbbbbb;\">Contact</a>
                        <br><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td style=\"color: #bbbbbb;font-size: 12px;font-family: 'Droid Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;font-weight: 400;text-align: center;\" data-slot-container=\"1\">
                    <div data-slot=\"text\">
                        © 2014 All Rights Reserved
                        <br>
                        <br>
                    </div>
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
        return "@themes/neopolitan/html/email.html.twig";
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
        return array (  306 => 254,  302 => 253,  298 => 252,  161 => 118,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/neopolitan/html/email.html.twig", "/app/docroot/themes/neopolitan/html/email.html.twig");
    }
}
