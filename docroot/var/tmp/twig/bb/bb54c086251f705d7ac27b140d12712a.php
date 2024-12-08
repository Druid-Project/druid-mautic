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

/* @themes/aurora/html/email.html.twig */
class __TwigTemplate_21b48b9636bf82705d7ae31100fef542 extends Template
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
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
                .c4 {
                    width: 35% !important;
                    float: left !important;
                    display: block !important;
                }
                .c8 {
                    width: 60% !important;
                    padding-left: 5% !important;
                    float: left !important;
                    display: block !important;
                }
            }
            @media only screen and (max-width: 660px) {
                .shrinker {
                    width: 100% !important;
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
        // line 58
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 58, $this->source); })())) . "/assets/open-sans/OpenSans-Regular.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 59
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 59, $this->source); })())) . "/assets/open-sans/OpenSans-Regular.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 300;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 64
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 64, $this->source); })())) . "/assets/open-sans/OpenSans-Italic.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 65
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 65, $this->source); })())) . "/assets/open-sans/OpenSans-Italic.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 300;
              font-style: italic;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 71
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 71, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBold.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 72
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 72, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBold.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 700;
            }
            @font-face {
              font-family: 'Open Sans';
              src: url('";
        // line 77
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 77, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBoldItalic.WOFF"), null, null, true);
        yield "') format('woff'),
                   url('";
        // line 78
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 78, $this->source); })())) . "/assets/open-sans/OpenSans-SemiBoldItalic.ttf"), null, null, true);
        yield "')  format('truetype'); 
              font-weight: 700;
              font-style: italic;
            }
        </style>
        <!--<![endif]-->
    </head>
    <body style=\"margin:0; padding:0;\">
    <!--[if mso]>
    <style type=\"text/css\">
    body, table, td {font-family: 'Open Sans', Verdana, Arial, sans-serif; !important;}
    </style>
    <![endif]-->
    <table width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">
        <tr>
            <td width=\"100%\" valign=\"top\" align=\"center\">
                <center>
                    <!-- START HERO -->
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <div data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px;\" bgcolor=\"#00bf9a\">
                                            <tr>  
                                                <td align=\"center\" valign=\"top\" style=\"background-repeat: no-repeat; background-size: 100%; background-color: #00bf9a; max-width:660px\" background=\"";
        // line 108
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })())) . "/assets/background_aurora-header.jpg"), null, null, true);
        yield "\" bgcolor=\"#00bf9a\" height=\"124\" valign=\"top\" class=\"shrinker\">
                                                    <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%; max-width:550px;\" class=\"shrinker\">
                                                        <tr>
                                                            <td height=\"60\" style=\"font-size: 60px; line-height: 60px;\">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"center\" valign=\"top\">
                                                                <a href=\"#\" target=\"_blank\">
                                                                <img src=\"";
        // line 116
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 116, $this->source); })())) . "/assets/logo_white.png"), null, null, true);
        yield "\" width=\"150\" height=\"40\" style=\"margin:0; padding:0; border:none; display:block;\" border=\"0\" alt=\"Logo\">
                                                            </a> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" data-section-wrapper=\"1\">
                        <tr data-section=\"1\">
                            <td align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\">
                                <!--[if (gte mso 9)|(IE)]>
                                <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"660\">
                                <tr>
                                <td align=\"center\" valign=\"top\" width=\"660\">
                                <![endif]-->
                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                    <tr>
                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif;\" class=\"shrinker\" data-slot-container=\"1\">
                                            <div data-slot=\"text\">
                                                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:660px; background: #00bf9a;\" bgcolor=\"#00bf9a\">
                                                    <tr>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; background: #00bf9a; padding: 0 15px;\" bgcolor=\"#00bf9a\" class=\"shrinker\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff\">
                                                                <tr>
                                                                    <td height=\"40\" style=\"font-size: 40px; line-height: 40px;\">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"center\" valign=\"top\" style=\"padding: 0 15px\">
                                                                        <h1 style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:36px; line-height:36px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                            <singleline>
                                                                                H1 Header
                                                                            </singleline>
                                                                        </h1>
                                                                    </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td height=\"20\" style=\"font-size: 20px; line-height: 20px;\">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align=\"center\" valign=\"top\" style=\"padding: 0 15px\">
                                                                        <p style=\"text-align: center; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:24px; font-weight:400; color:#212121; padding:0; margin:0;\">
                                                                            <singleline>
                                                                                Vol 2.11 • Oct 27, 2017 • <a href=\"#\" style=\"color: #00bf9a\">Twitter</a> / <a href=\"#\" style=\"color: #00bf9a\">Subscribe</a> / <a href=\"#\" style=\"color: #00bf9a\">Archives</a>
                                                                            </singleline>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
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
                    <!-- END HERO -->

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
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: left;\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin: 0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <a href=\"#\" style=\"color: #00bf9a; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; padding: 0; margin: 0;\">Call to Action</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px\">
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
                                                        <td height=\"50\" style=\"font-size: 50px; line-height: 50px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"30\" style=\"font-size: 30px; line-height: 30px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" style=\"padding: 0 15px 30px 30px\">
                                                            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:550px; background: #ffffff;\">
                                                                <tr class=\"c4\">
                                                                    <td align=\"center\" style=\"vertical-align: top; padding-top: 7px; padding-bottom: 12px; text-align: left;\">
                                                                        <img src=\"";
        // line 284
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 284, $this->source); })())) . "/assets/placeholder_turntable.jpg"), null, null, true);
        yield "\" width=\"168\" height=\"113\" style=\"margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\" label='the logo'>
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"c8\">
                                                                    <td align=\"center\" style=\"vertical-align: top; text-align: left;\">
                                                                        <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0; margin:0;\">
                                                                            <multiline>
                                                                            Aliquam nunc neque, fringilla eu ante a, pharetra suscipit felis. Donec quis pretium massa.
                                                                            </multiline>
                                                                        </p>
                                                                        <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                                        <a href=\"#\" style=\"color: #00bf9a; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; padding: 0; margin: 0;\">Call to Action</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px\">
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
                    <!-- END SECTION 2 -->

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
                                                        <td height=\"50\" style=\"font-size: 50px; line-height: 50px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: left;\">
                                                            <img src=\"";
        // line 347
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 347, $this->source); })())) . "/assets/placeholder_turntable_wide.jpg"), null, null, true);
        yield "\" width=\"490\" height=\"150\" style=\"margin:0; padding:0; border:none; display: inline-block; width: 100%; height: auto;\" border=\"0\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"35\" style=\"font-size: 35px; line-height: 35px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px\">
                                                            <h2 style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:24px; line-height:24px; font-weight:700; color:#212121; padding:0; margin:0;\">
                                                                <singleline>
                                                                    H2 Section Header
                                                                </singleline>
                                                            </h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"15\" style=\"font-size: 15px; line-height: 15px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: left;\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0 0 10px 0; margin:0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <a href=\"#\" style=\"color: #00bf9a; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; padding: 0; margin: 0;\">Call to Action</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px\">
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
                                                        <td height=\"50\" style=\"font-size: 50px; line-height: 50px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px\">
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
        // line 434
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 434, $this->source); })())) . "/assets/placeholder_coffee.jpg"), null, null, true);
        yield "\" width=\"298\" height=\"246\" style=\"width:100%; max-width:298px; height: auto !important; margin:0; padding:0; border:none; display: inline-block;\" border=\"0\" alt=\"Placeholder\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 30px; text-align: left\">
                                                            <p style=\"text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; color:#212121; padding: 0 0 10px 0; margin:0;\">
                                                                <multiline>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida mauris lectus, vitae semper ante rhoncus id. Duis vel accumsan lacus, et rutrum dui. Nunc rutrum ante justo, at lobortis enim faucibus cursus. Sed varius et odio in semper. 
                                                                </multiline>
                                                            </p>
                                                            <br style=\"line-height: 18px; height: 18px; font-size: 18px;\">
                                                            <a href=\"#\" style=\"color: #00bf9a; text-align: left; font-family: 'Open Sans', Verdana, Arial, sans-serif; font-size:16px; line-height:30px; font-weight:400; padding: 0; margin: 0;\">Call to Action</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height=\"45\" style=\"font-size: 45px; line-height: 45px;\">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align=\"center\" valign=\"top\" style=\"padding: 0 15px\">
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
        // line 565
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 565, $this->source); })())) . "/assets/icon_social.png"), null, null, true);
        yield "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 570
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 570, $this->source); })())) . "/assets/icon_social.png"), null, null, true);
        yield "\" width=\"40\" height=\"40\" style=\"margin:0; padding:0; border:none; display: inline-block; cursor: pointer;\" border=\"0\" alt=\"Social\">
                                                            </a>
                                                        </td>
                                                        <td align=\"center\" style=\"font-family: 'Open Sans', Verdana, Arial, sans-serif; width: 33.333%; color:#212121; text-transform: uppercase;\">
                                                            <a href=\"#\" target=\"_blank\" style=\"border: none; text-decoration: none; margin: 0; padding: 0; display: inline-block; cursor: pointer;\">
                                                                <img src=\"";
        // line 575
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 575, $this->source); })())) . "/assets/icon_social.png"), null, null, true);
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
        return "@themes/aurora/html/email.html.twig";
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
        return array (  663 => 575,  655 => 570,  647 => 565,  513 => 434,  423 => 347,  357 => 284,  186 => 116,  175 => 108,  142 => 78,  138 => 77,  130 => 72,  126 => 71,  117 => 65,  113 => 64,  105 => 59,  101 => 58,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/aurora/html/email.html.twig", "/app/docroot/themes/aurora/html/email.html.twig");
    }
}