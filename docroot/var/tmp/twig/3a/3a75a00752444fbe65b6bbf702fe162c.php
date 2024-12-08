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

/* @themes/sunday/html/page.html.twig */
class __TwigTemplate_be7f985dfe1362f08f37e42fafde0fb4 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/sunday/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div data-section-wrapper=\"1\" align=\"center\" valign=\"top\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
        <center>
            <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\">
                <tr>
                    <td data-slot-container=\"1\" style=\"text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\">
                        <div data-slot=\"image\">
                            <img class=\"w320\" width=\"311\" height=\"83\" src=\"";
        // line 10
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 10, $this->source); })())) . "/img/logo.gif"), null, null, true);
        yield "\" alt=\"company logo\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;border: none;\">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" style=\"background-color: #3bcdb0;border-collapse: collapse !important;\">
                <tr>
                    <td style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">

                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse: collapse !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"font-size: 40px;font-weight: 600;color: #ffffff;text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\" class=\"mobile-spacing\">
                                    <div data-slot=\"text\">
                                        <div class=\"mobile-br\">&nbsp;</div>
                                        Welcome to Awesome Co
                                    </div>
                                <br>
                                </td>
                            </tr>
                            <tr>
                                <td data-slot-container=\"1\" style=\"font-size: 24px;text-align: center;padding: 0 75px;color: #6f6f6f;font-family: Arial, sans-serif;border-collapse: collapse;\" class=\"w320 mobile-spacing\">
                                    <div data-slot=\"text\">
                                        We are happy to meet you and hope you have an amazing time with us.
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse: collapse !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <div data-slot=\"image\">
                                        <img src=\"";
        // line 46
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 46, $this->source); })())) . "/img/workplace.gif"), null, null, true);
        yield "\" style=\"max-width: 100%;display: block;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" bgcolor=\"#ffffff\" style=\"border-collapse: collapse !important;background-color: #ffffff;\">
                <tr>
                    <td style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">

                        <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                            <tr>
                                <td width=\"230\" class=\"mobile-hide\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                                        <tr>
                                            <td background=\"";
        // line 68
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 68, $this->source); })())) . "/img/robbonwide.gif"), null, null, true);
        yield "\" width=\"230\" height=\"113\" valign=\"top\" style=\"background-repeat: no-repeat;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                                <!--[if gte mso 9]>
                                                <v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"true\" stroke=\"false\" style=\"width:230px;height:113px;\">
                                                    <v:fill type=\"frame\" src=\"";
        // line 71
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 71, $this->source); })())) . "/img/robbonwide.gif"), null, null, true);
        yield "\" color=\"#ffffff\" />
                                                    <v:textbox inset=\"0,0,0,0\">
                                                <![endif]-->
                                                <div>
                                                    <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                                                        <tr>
                                                            <td data-slot-container=\"1\" style=\"font-size: 45px;font-weight: 900;color: #ffffff;text-align: right;padding-top: 10px;padding-right: 40px;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                                                <div data-slot=\"text\">
                                                                    50%
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--[if gte mso 9]>
                                                    </v:textbox>
                                                </v:rect>
                                                <![endif]-->
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width=\"360\" class=\"w320\" style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <table cellspacing=\"0\" cellpadding=\"0\" class=\"w280 w100p\" style=\"border-collapse: collapse !important;\">
                                        <tr>
                                            <td data-slot-container=\"1\" class=\"mobile-center activate-now\" style=\"color: #27aa90;font-size: 30px;font-weight: 600;line-height: 30px;text-align: left;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                                <div data-slot=\"text\">
                                                    Activate account now and receive a 50% discount
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" style=\"border-collapse: collapse !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"text-align: left;font-family: Arial, sans-serif;border-collapse: collapse;padding: 0 75px;\" class=\"mobile-center body-padding w320\">
                                    <div data-slot=\"text\">
                                        <br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Sed do eiusmod tempor ullamco laboris.
                                        Quis nostrud exercitation nisi ut aliquip ex ea commodo!
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table style=\"margin: 0 auto;border-collapse: collapse !important;\" cellspacing=\"0\" cellpadding=\"10\" width=\"100%\">
                            <tr>
                                <td style=\"text-align: center;margin: 0 auto;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                <br>
                                    <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"2\" data-param-link-text=\"Activate account\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#f5774e\" data-param-color=\"ffffff\">
                                        <a href=\"#\" target=\"_blank\" style=\"font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; padding: 12px 18px; background-color: #f5774e; display: inline-block;\">
                                            Activate account
                                        </a>
                                        <div style=\"clear:both\"></div>
                                    </div>
                                    <br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\" class=\"w320\" bgcolor=\"#363636\" style=\"border-collapse: collapse !important;background-color: #363636;\">
                <tr>
                    <td style=\"font-family: Arial, sans-serif;border-collapse: collapse;\">
                        <table cellspacing=\"0\" cellpadding=\"0\" class=\"force-full-width\" style=\"border-collapse: collapse !important;width: 100% !important;\">
                            <tr>
                                <td data-slot-container=\"1\" style=\"text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                <div data-slot=\"text\">
                                    <br>
                                    <br>
                                    <img width=\"62\" height=\"56\" img src=\"";
        // line 149
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 149, $this->source); })())) . "/img/gplus.gif"), null, null, true);
        yield "\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    <img width=\"68\" height=\"56\" src=\"";
        // line 150
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 150, $this->source); })())) . "/img/facebook.gif"), null, null, true);
        yield "\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    <img width=\"61\" height=\"56\" src=\"";
        // line 151
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 151, $this->source); })())) . "/img/twitter.gif"), null, null, true);
        yield "\" style=\"max-width: 600px;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;\">
                                    <br>
                                    <br>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-slot-container=\"1\" style=\"color: #f0f0f0;font-size: 14px;text-align: center;padding-bottom: 4px;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <div data-slot=\"text\">
                                        © 2014 All Rights Reserved
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-slot-container=\"1\" style=\"color: #27aa90;font-size: 14px;text-align: center;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    <div data-slot=\"text\">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size: 12px;font-family: Arial, sans-serif;border-collapse: collapse;\">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/sunday/html/page.html.twig";
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
        return array (  224 => 151,  220 => 150,  216 => 149,  135 => 71,  129 => 68,  104 => 46,  65 => 10,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/sunday/html/page.html.twig", "/app/docroot/themes/sunday/html/page.html.twig");
    }
}
