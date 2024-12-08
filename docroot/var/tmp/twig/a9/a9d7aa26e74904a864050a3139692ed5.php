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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/email/email-no-minify.html */
class __TwigTemplate_9029af444eeca8f0e978c1845f915717 extends Template
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
        yield "<!doctype html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <title>test minify</title>
    <!--[if !mso]><!-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a { padding:0; }
        body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
        table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
        img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
        p { display:block;margin:13px 0; }
    </style>
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type=\"text/css\">
        .mj-outlook-group-fix { width:100% !important; }
    </style>
    <![endif]-->


    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 { width:100% !important; max-width: 100%; }
        }
    </style>
    <style media=\"screen and (min-width:480px)\">
        .moz-text-html .mj-column-per-100 { width:100% !important; max-width: 100%; }
    </style>
    <style type=\"text/css\">
        [owa] .mj-column-per-100 { width:100% !important; max-width: 100%; }
    </style>

    <style type=\"text/css\">


    </style>
    <style type=\"text/css\">.mj-text a {color: #4299E1; text-decoration: none;}</style>

</head>
<body style=\"word-spacing:normal;background-color:#FFFFFF;\">


<div
        style=\"background-color:#FFFFFF;\"
>


    <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:600px;\" width=\"600\" bgcolor=\"#FFFFFF\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->


    <div  style=\"background:#FFFFFF;background-color:#FFFFFF;margin:0px auto;max-width:600px;\">

        <table
                align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"background:#FFFFFF;background-color:#FFFFFF;width:100%;\"
        >
            <tbody>
            <tr>
                <td
                        style=\"direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;\"
                >
                    <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]-->

                    <div
                            class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\"
                    >

                        <table
                                border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\"
                        >
                            <tbody>

                            <tr>
                                <td
                                        align=\"left\" class=\"mj-text\" style=\"font-size:0px;padding:10px 25px 10px 25px;padding-top:40px;padding-bottom:0px;word-break:break-word;\"
                                >

                                    <div
                                            style=\"font-family:Arial, Helvetica,' Sans serif';font-size:13px;font-weight:normal;letter-spacing:0;line-height:19px;text-align:left;color:#000000;\"
                                    ><p style=\"margin: 0;\">Hi {contactfield=firstname},<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis in ante eu ultricies. Curabitur efficitur velit eu interdum dignissim. Mauris porttitor eget nisi in hendrerit. Aliquam ornare porta vestibulum. Nullam ornare eros vel lacus feugiat posuere. Vivamus auctor eleifend ex eleifend semper.</p></div>

                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>

                    <!--[if mso | IE]></td></tr></table><![endif]-->
                </td>
            </tr>
            </tbody>
        </table>

    </div>


    <!--[if mso | IE]></td></tr></table><![endif]-->
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/email/email-no-minify.html";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/email/email-no-minify.html", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/email/email-no-minify.html");
    }
}
