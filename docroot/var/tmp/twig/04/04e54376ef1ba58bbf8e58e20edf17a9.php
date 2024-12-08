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

/* @themes/sparse/html/email.html.twig */
class __TwigTemplate_c112a57e7dac91b3057c87d7ce3c93aa extends Template
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
        yield "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"robots\" content=\"noindex, nofollow\">
        <title>{subject}</title>
        <style type=\"text/css\">
            body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
            table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;}
            img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
            table{border-collapse: collapse !important;}
            body{font-family: 'Open Sans', Verdana, Arial, sans-serif; height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; -webkit-font-smoothing: antialiased !important; font-smoothing: antialiased !important;}
            div[style*=\"margin: 16px 0;\"] { margin:0 !important; }
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
            @media only screen and (min-width: 660px) {
                .shrinker {
                    padding: 0 55px !important;
                }
                .header-split {
                    display: block;
                    width: 50%;
                    float: left;
                }
                .header-split.right p, .header-split.right td, .header-split.right {
                    text-align: right !important;
                    float: right !important;
                }
                .large-circle {
                    width: 16% !important;
                    float: left !important;
                    display: block !important;
                }
                .large-circle-text {
                    width: 75% !important;
                    padding-left: 9% !important;
                    float: left !important;
                    display: block !important;
                }
                .small-circle {
                    width: 12% !important;
                    float: left !important;
                    display: block !important;
                }
                .small-circle-text {
                    width: 79% !important;
                    padding-left: 9% !important;
                    float: left !important;
                    display: block !important;
                }
            }
            @media only screen and (max-width: 660px) {
                * {
                    text-align: center !important;
                }
                .shrinker {
                    width: 100% !important;
                    padding: 0 15px !important;
                }
                .header-split td {
                    padding: 5px 0 !important;
                    width: 100% !important;
                    text-align: center !important;
                }

                .header-split a, .header-split p {
                    text-align: center !important;
                }
                .large-circle-text {
                    margin-bottom: 15px;
                    float: left;
                    width: 100%;
                }
                .large-circle-text td {
                    float: left;
                    width: 100%;
                }
                .c1,.c2,.c3,.c4,.c5,.c6,.c7,.c8,.c10,.c11,.c12 {
                    width: 100% !important;
                    float: left !important;
                    display: block;
                    padding: 0 !important;
                    margin: 10px 0;
                }
            }
        </style>
        <!--[if !mso]><!-->
        <style type=\"text/css\">
            /* Opens sans font */
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 100
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 100, $this->source); })())) . "/assets/open-sans/OpenSans-Regular.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 101
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 101, $this->source); })())) . "/assets/open-sans/OpenSans-Regular.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 300;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 106
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 106, $this->source); })())) . "/assets/open-sans/OpenSans-Italic.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 107
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 107, $this->source); })())) . "/assets/open-sans/OpenSans-Italic.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 300;
              font-style: italic;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 113
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 113, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBold.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 114
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 114, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBold.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 700;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 119
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 119, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBoldItalic.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 120
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 120, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBoldItalic.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 700;
              font-style: italic;
            }
        </style>
        <!--<![endif]-->
    </head>
    <body style=\"margin:0; padding:0; background: #f0f0f0\">
    <!--[if mso]>
    <style type=\"text/css\">
    body, table, td {font-family: 'Open Sans', Verdana, Arial, sans-serif; !important;}
    </style>
    <![endif]-->
    <table width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
        <tr>
            <td width=\"100%\" valign=\"top\" align=\"center\">
                <center>
                    
                    <!-- END HEADER LINKS -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; color:#b2b2b2; text-transform: uppercase; padding:0;\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a>  
                                  
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a> 
                                                
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><unsubscribe style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none\">External Link</unsubscribe></a> 

                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a>  
                                  
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</singleline></a> 
                                                
                                                <a href=\"#\" target=\"_blank\" style=\"padding: 0 10px; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\"><unsubscribe style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#b2b2b2; text-transform: uppercase; text-decoration:none;\">External Link</unsubscribe></a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>                                  
                    <!-- START HEADER LINKS -->

                    <!-- START HEADER -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%; max-width:550px; background: #ffffff\" class=\"shrinker\">
                                                    <tr>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#ffffff; color:#212121; padding: 0 60px;\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background: #ffffff\">
                                                                <tr>
                                                                    <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                                </tr>
                                                                <tr class=\"header-split left\">
                                                                    <td align=\"left\" valign=\"center\" style=\"text-align: left;\">
                                                                        <a href=\"#\" target=\"_blank\" style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">
                                                                            <img src=\"";
        // line 205
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 205, $this->source); })())) . "/assets/logo_black.png"), null, null, true);
        yield "\" width=\"120\" height=\"31\" style=\"margin:0; padding:0; border:none; display:inline-block; line-height: 30px;\" border=\"0\" alt=\"Logo\">
                                                                        </a> 
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"header-split right\">
                                                                    <td align=\"right\" valign=\"center\" style=\"text-align: left\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">Vol 2.11 • Oct 27, 2017</p>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px; text-align: left;\">
                                                            <h1 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:36px; line-height:44px; font-weight:400; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H1 Email Header
                                                                </singleline>
                                                            </h1>
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; line-height:36px; font-weight:400; color:#b2b2b2; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Subheader
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END HEADER-->

                    <!-- START SECTION 1 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0; text-align: center;\">
                                                            <img src=\"";
        // line 278
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 278, $this->source); })())) . "/assets/placeholder_venice.jpg"), null, null, true);
        yield "\" width=\"550\" height=\"267\" style=\"width: 100%; height: auto;\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px; text-align: left;\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; line-height:36px; font-weight:400; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                            <h3 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:22px; line-height:30px; font-weight:400; color:#b2b2b2; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H3 Section Subheader
                                                                </singleline>
                                                            </h3>
                                                            <br style=\"line-height: 14px; height: 14px; font-size: 14px; display: inline-block;\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <span style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; line-height:0; font-weight:400; color:#b2b2b2; padding: 0; line-height: 24px;\">__</span>
                                                            <br>
                                                            <br>
                                                            <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                <singleline>
                                                                    Call To Action Link
                                                                </singleline>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                                <tr>
                                                                    <td height=\"0\" style=\"font-size: 0px; line-height: 0px; border-bottom: 1px solid #e8e8e8\">&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 1-->

                   <!-- START SECTION 2 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px; text-align: left;\">
                                                            <img src=\"";
        // line 359
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 359, $this->source); })())) . "/assets/placeholder_boat.jpg"), null, null, true);
        yield "\" width=\"440\" height=\"243\" style=\"width: 100%; height: auto;\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px; text-align: left;\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; line-height:36px; font-weight:400; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                            <h3 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:22px; line-height:30px; font-weight:400; color:#b2b2b2; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H3 Section Subheader
                                                                </singleline>
                                                            </h3>
                                                            <br style=\"line-height: 14px; height: 14px; font-size: 14px; display: inline-block;\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <span style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; line-height: 24px; font-weight:400; color:#b2b2b2; padding: 0; margin: 0;\">__</span>
                                                            <br>
                                                            <br>
                                                            <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                <singleline>
                                                                    Call To Action Link
                                                                </singleline>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                                <tr>
                                                                    <td height=\"0\" style=\"font-size: 0px; line-height: 0px; border-bottom: 1px solid #e8e8e8\">&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 2-->
                    
                    <!-- START SECTION 3 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff;\">
                                                                <tr class=\"large-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 443
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 443, $this->source); })())) . "/assets/circle_placeholder_wind.png"), null, null, true);
        yield "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"large-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left; padding-top: 18px;\">
                                                                        <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:20x; line-height:28px; font-weight:400; color:#212121; padding:0; margin:0;\">
                                                                            <singleline>
                                                                                H2 Section Header
                                                                            </singleline>
                                                                        </h2>
                                                                        <h3 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:24px; font-weight:400; color:#b2b2b2; padding:0; margin:0;\">
                                                                            <singleline>
                                                                                H3 Section Subheader
                                                                            </singleline>
                                                                        </h3>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"center\" valign=\"top\" style=\"padding: 0; text-align: left;\">
                                                                        <br style=\"line-height: 14px; height: 14px; font-size: 14px; display: inline-block;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; font-style:italic; color:#4b4b4b; padding: 0; margin: 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui.
                                                                            </multiline>
                                                                        </p>
                                                                        <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                                        <span style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px;  font-weight:400; color:#b2b2b2; padding: 0; line-height: 24px;\">__</span>
                                                                        <br>
                                                                        <br>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                                <tr>
                                                                    <td height=\"0\" style=\"font-size: 0px; line-height: 0px; border-bottom: 1px solid #e8e8e8\">&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 3 -->

                    <!-- START SECTION 4 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px; text-align: left;\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; line-height:36px; font-weight:400; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                            <h3 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:22px; line-height:30px; font-weight:400; color:#b2b2b2; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H3 Section Subheader
                                                                </singleline>
                                                            </h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff;\">
                                                                <tr class=\"large-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 548
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 548, $this->source); })())) . "/assets/circle_placeholder_turntable.png"), null, null, true);
        yield "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"large-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing. Elit aenean gravida mauris.
                                                                            </multiline>
                                                                        </p>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff;\">
                                                                <tr class=\"large-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 576
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 576, $this->source); })())) . "/assets/circle_placeholder_look.png"), null, null, true);
        yield "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"large-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing. Elit aenean gravida mauris.
                                                                            </multiline>
                                                                        </p>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 60px 30px 60px\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff;\">
                                                                <tr class=\"large-circle\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 604
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 604, $this->source); })())) . "/assets/circle_placeholder_neon.png"), null, null, true);
        yield "\" width=\"80\" height=\"80\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"large-circle-text\">
                                                                    <td align=\"center\" style=\"vertical-align: middle; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0 0 15px 0;\">
                                                                            <multiline>
                                                                                Lorem ipsum dolor sit amet, consectetur adipiscing. Elit aenean gravida mauris.
                                                                            </multiline>
                                                                        </p>
                                                                        <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                            <singleline>
                                                                                Call To Action Link
                                                                            </singleline>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 60px\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                                <tr>
                                                                    <td height=\"0\" style=\"font-size: 0px; line-height: 0px; border-bottom: 1px solid #e8e8e8\">&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 4 -->

                    <!-- START SECTION 5 -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background:#f0f0f0; color:#212121; padding: 0 15px;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                    <tr>
                                                        <td height=\"50\" style=\"font-size: 50px; line-height: 50px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 60px\" class=\"shrinker\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"10\" style=\"font-size: 10px; line-height: 10px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: left;\">
                                                            <img src=\"";
        // line 683
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 683, $this->source); })())) . "/assets/placeholder_coffee.jpg"), null, null, true);
        yield "\" width=\"298\" height=\"246\" style=\"width:100%; max-width:298px; height: auto !important; margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" class=\"shrinker\" style=\"padding: 0 60px; text-align: left\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0 0 0 0; margin:0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <span style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:28px; font-weight:400; color:#b2b2b2; padding: 0; line-height: 24px;\">__</span>
                                                            <br>
                                                            <br>
                                                            <a href=\"#\" style=\"text-decoration: none; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:16px; font-weight:700; color:#212121; padding: 0; margin: 0;\">
                                                                <singleline>
                                                                    Call To Action Link
                                                                </singleline>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SECTION 5 -->

                    <!-- START COMPANY INFO -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; color:#212121; text-transform: uppercase;\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                    <a href=\"mailto:#\" target=\"_blank\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\">Contact Link</singleline></a>  
                                                    <span style=\"font-family:arial, sans-serif; font-size:10px; line-height:20px; color:#dddddd;\">&nbsp;|&nbsp;</span>                                      
                                                    <a href=\"mailto:#\" target=\"_blank\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\"><singleline style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\">Contact Link</singleline></a> 
                                                    <span style=\"font-family:arial, sans-serif; font-size:10px; line-height:20px; color:#dddddd;\">&nbsp;|&nbsp;</span>
                                                    
                                                    <a href=\"{unsubscribe_url}\" target=\"_blank\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\"><unsubscribe style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:10px; line-height:20px; color:#212121; text-transform: uppercase; text-decoration:underline;\">Unsubscribe</unsubscribe></a> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END COMPANY INFO -->

                    <!-- START COPYRIGHT -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; color:#212121; text-transform: uppercase;\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <p style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:12px; line-height:18px; color:#212121; text-transform: uppercase; padding:0; margin:0;\">
                                                    <multiline><span style=\"font-size:9px;\">&copy; 2017 Mautic - All Rights Reserved.</span><br/><span style=\"font-size:9px;\">10 Cabot Road | Medford, MA | 02155</span></multiline>
                                                </p>
                                                <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END COPYRIGHT -->

                    <!-- START SOCIAL -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#f0f0f0\">
                                    <tr>
                                        <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"150\" style=\"width: 100%; max-width:150px;\">
                                                    <tr>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 812
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 812, $this->source); })())) . "/assets/icon_social.png"), null, null, true);
        yield "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 817
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 817, $this->source); })())) . "/assets/icon_social.png"), null, null, true);
        yield "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 822
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 822, $this->source); })())) . "/assets/icon_social.png"), null, null, true);
        yield "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height=\"40\" style=\"font-size: 40px; line-height: 40px;\">&nbsp;</td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </td>
                        </tr>
                    </table>
                    <!-- END SOCIAL -->
                    
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </center>
            </td>
        </tr>
    </table>              
    <div style=\"display:none; white-space:nowrap; font:15px courier; line-height:0;\">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </div>
  </body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/sparse/html/email.html.twig";
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
        return array (  919 => 822,  911 => 817,  903 => 812,  771 => 683,  689 => 604,  658 => 576,  627 => 548,  519 => 443,  432 => 359,  348 => 278,  272 => 205,  184 => 120,  180 => 119,  172 => 114,  168 => 113,  159 => 107,  155 => 106,  147 => 101,  143 => 100,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/sparse/html/email.html.twig", "/app/docroot/themes/sparse/html/email.html.twig");
    }
}
