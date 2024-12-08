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

/* @bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv */
class __TwigTemplate_5978d80454589248492ddc5d4e2bfab2 extends Template
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
        yield "\"name\",\"emailType\",\"subject\",\"template\",\"language\",\"content\",\"plainText\",\"publishUp\",\"publishDown\",\"readCount\",\"sentCount\",\"revision\",\"variantSettings\",\"variantStartDate\",\"variantSentCount\",\"variantReadCount\",\"customHtml\"
\"Kaleidoscope Conf List\",\"list\",\"Join us at the 2014  Kaleidoscope Conference!\",\"blank\",\"en\",\"a:2:{s:4:\\\"body\\\";s:113:\\\"<div>Dear {contactfield=firstname},</div><div>&nbsp;</div><div>Join us at the 2014 Kaleidoscope Conference!</div>\\\";s:6:\\\"footer\\\";s:71:\\\"<div>{webview_text}</div><div>&nbsp;</div><div>{unsubscribe_text}</div>\\\";}\",\"Join us at the 2014  Kaleidoscope Conference!\",NULL,NULL,0,0,1,\"a:0:{}\",NULL,0,0,\"<!DOCTYPE html><html><head><title>{subject}</title><meta http-equiv=\"\"X-UA-Compatible\"\" content=\"\"IE=edge\"\">    <meta http-equiv=\"\"Content-Type\"\" content=\"\"text/html; charset=UTF-8\"\">    <meta name=\"\"viewport\"\" content=\"\"width=device-width, initial-scale=1\"\"><link href=\"\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700\"\" rel=\"\"stylesheet\"\" type=\"\"text/css\"\"><style type=\"\"text/css\"\">#outlook a {padding: 0;}.ReadMsgBody {width: 100%;}.ExternalClass {width: 100%;}.ExternalClass * {line-height: 100%;}body {margin: 0;padding: 0;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;}table,td {border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;}img {border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;}p {display: block;margin: 13px 0;}@media only screen and (max-width:480px) {@-ms-viewport {width: 320px;}@viewport {width: 320px;}}body {font-family: \"\"Open Sans\"\", Helvetica, Arial, sans-serif !important;font-size:14px;line-height:1.6;text-align:left;color:#414141;}div[data-slot=\"\"text\"\"] {font-size:14px !important;line-height:1.6 !important;text-align:left !important;color:#414141 !important;margin-bottom: 10px !important;}div[style=\"\"clear:both\"\"] {margin-bottom: 20px !important;}.imagecard {background: #eeeeee !important;}.imagecard-caption {font-size:12px !important;line-height:1.6 !important;text-align:center !important;color:#414141 !important;background: #eeeeee !important;padding: 10px !important;}h1, h2, h3, h4, h5, h6 {margin: 0 !important;margin-bottom: 10px !important;}.outlook-group-fix { width:100% !important; }@media only screen and (min-width:480px) {.mj-column-per-100 {width: 100% !important;}}</style></head><body id=\"\"i6gb\"\"><div data-section-wrapper=\"\"1\"\" id=\"\"iveh\"\"><div data-section=\"\"1\"\" id=\"\"idbj\"\"><table align=\"\"center\"\" border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" id=\"\"io7x\"\"><tbody><tr><td id=\"\"ixft\"\"><div data-slot-container=\"\"1\"\" class=\"\"mj-column-per-100 outlook-group-fix\"\" id=\"\"ibtf\"\"><table background=\"\"#FFFFFF\"\" border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" width=\"\"100%\"\"><tbody><tr><td id=\"\"iqneq\"\"><table border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" width=\"\"100%\"\"><tbody><tr><td align=\"\"left\"\" id=\"\"ig9zz\"\"><div data-slot=\"\"text\"\" id=\"\"it3wc\"\"><p>Dear <span class=\"\"atwho-inserted\"\" data-fr-verified=\"\"true\"\">{contactfield=firstname}</span>,</p><p><br data-cke-filler=\"\"true\"\"></p><p>Join us at the 2014 Kaleidoscope Conference!</p></div></td></tr></tbody></table></td></tr></tbody></table></div><div data-slot-container=\"\"1\"\" class=\"\"mj-column-per-100 outlook-group-fix\"\" id=\"\"il9b3\"\"><table border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" width=\"\"100%\"\" id=\"\"id2w5\"\"><tbody><tr><td align=\"\"left\"\" id=\"\"imf1o\"\"><div data-slot=\"\"text\"\" id=\"\"ifpnn\"\">{unsubscribe_text} | {webview_text}</div></td></tr></tbody></table></div></td></tr></tbody></table></div></div><style>#iveh{background-color:#ffffff;}#idbj{Margin:0px auto;border-radius:4px;max-width:600px;}#io7x{width:100%;border-radius:4px;}#ixft{direction:ltr;padding:20px 0;text-align:center;vertical-align:top;}#ibtf{font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;}#iqneq{background-color:#FFFFFF;vertical-align:top;padding:20px 20px;}#ig9zz{padding:0;word-break:break-word;}#it3wc{font-family:'Open Sans', Helvetica, Arial, sans-serif;font-size:14px;line-height:1.6;text-align:left;color:#414141;}#il9b3{font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;}#id2w5{vertical-align:top;}#imf1o{padding:20px 20px;word-break:break-word;}#ifpnn{font-family:'Open Sans', Helvetica, Arial, sans-serif!important;font-size:12px!important;line-height:1.4!important;text-align:left!important;color:#999999!important;}</style></body></html>\"
\"Kaleidoscope Conf Campaign\",\"template\",\"Join us at the 2014  Kaleidoscope Conference!\",\"blank\",\"en\",\"a:2:{s:4:\\\"body\\\";s:113:\\\"<div>Dear {contactfield=firstname},</div><div>&nbsp;</div><div>Join us at the 2014 Kaleidoscope Conference!</div>\\\";s:6:\\\"footer\\\";s:71:\\\"<div>{webview_text}</div><div>&nbsp;</div><div>{unsubscribe_text}</div>\\\";}\",\"Join us at the 2014  Kaleidoscope Conference!\",NULL,NULL,0,0,1,\"a:0:{}\",NULL,0,0,\"<!DOCTYPE html><html><head><title>{subject}</title><meta http-equiv=\"\"X-UA-Compatible\"\" content=\"\"IE=edge\"\">    <meta http-equiv=\"\"Content-Type\"\" content=\"\"text/html; charset=UTF-8\"\">    <meta name=\"\"viewport\"\" content=\"\"width=device-width, initial-scale=1\"\"><link href=\"\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700\"\" rel=\"\"stylesheet\"\" type=\"\"text/css\"\"><style type=\"\"text/css\"\">#outlook a {padding: 0;}.ReadMsgBody {width: 100%;}.ExternalClass {width: 100%;}.ExternalClass * {line-height: 100%;}body {margin: 0;padding: 0;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;}table,td {border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;}img {border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;}p {display: block;margin: 13px 0;}@media only screen and (max-width:480px) {@-ms-viewport {width: 320px;}@viewport {width: 320px;}}body {font-family: \"\"Open Sans\"\", Helvetica, Arial, sans-serif !important;font-size:14px;line-height:1.6;text-align:left;color:#414141;}div[data-slot=\"\"text\"\"] {font-size:14px !important;line-height:1.6 !important;text-align:left !important;color:#414141 !important;margin-bottom: 10px !important;}div[style=\"\"clear:both\"\"] {margin-bottom: 20px !important;}.imagecard {background: #eeeeee !important;}.imagecard-caption {font-size:12px !important;line-height:1.6 !important;text-align:center !important;color:#414141 !important;background: #eeeeee !important;padding: 10px !important;}h1, h2, h3, h4, h5, h6 {margin: 0 !important;margin-bottom: 10px !important;}.outlook-group-fix { width:100% !important; }@media only screen and (min-width:480px) {.mj-column-per-100 {width: 100% !important;}}</style></head><body id=\"\"i6gb\"\"><div data-section-wrapper=\"\"1\"\" id=\"\"iveh\"\"><div data-section=\"\"1\"\" id=\"\"idbj\"\"><table align=\"\"center\"\" border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" id=\"\"io7x\"\"><tbody><tr><td id=\"\"ixft\"\"><div data-slot-container=\"\"1\"\" class=\"\"mj-column-per-100 outlook-group-fix\"\" id=\"\"ibtf\"\"><table background=\"\"#FFFFFF\"\" border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" width=\"\"100%\"\"><tbody><tr><td id=\"\"iqneq\"\"><table border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" width=\"\"100%\"\"><tbody><tr><td align=\"\"left\"\" id=\"\"ig9zz\"\"><div data-slot=\"\"text\"\" id=\"\"it3wc\"\"><p>Dear <span class=\"\"atwho-inserted\"\" data-fr-verified=\"\"true\"\">{contactfield=firstname}</span>,</p><p><br data-cke-filler=\"\"true\"\"></p><p>Join us at the 2014 Kaleidoscope Conference!</p></div></td></tr></tbody></table></td></tr></tbody></table></div><div data-slot-container=\"\"1\"\" class=\"\"mj-column-per-100 outlook-group-fix\"\" id=\"\"il9b3\"\"><table border=\"\"0\"\" cellpadding=\"\"0\"\" cellspacing=\"\"0\"\" role=\"\"presentation\"\" width=\"\"100%\"\" id=\"\"id2w5\"\"><tbody><tr><td align=\"\"left\"\" id=\"\"imf1o\"\"><div data-slot=\"\"text\"\" id=\"\"ifpnn\"\">{unsubscribe_text} | {webview_text}</div></td></tr></tbody></table></div></td></tr></tbody></table></div></div><style>#iveh{background-color:#ffffff;}#idbj{Margin:0px auto;border-radius:4px;max-width:600px;}#io7x{width:100%;border-radius:4px;}#ixft{direction:ltr;padding:20px 0;text-align:center;vertical-align:top;}#ibtf{font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;}#iqneq{background-color:#FFFFFF;vertical-align:top;padding:20px 20px;}#ig9zz{padding:0;word-break:break-word;}#it3wc{font-family:'Open Sans', Helvetica, Arial, sans-serif;font-size:14px;line-height:1.6;text-align:left;color:#414141;}#il9b3{font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;}#id2w5{vertical-align:top;}#imf1o{padding:20px 20px;word-break:break-word;}#ifpnn{font-family:'Open Sans', Helvetica, Arial, sans-serif!important;font-size:12px!important;line-height:1.4!important;text-align:left!important;color:#999999!important;}</style></body></html>\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv";
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
        return new Source("", "@bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv", "/app/docroot/app/bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv");
    }
}
