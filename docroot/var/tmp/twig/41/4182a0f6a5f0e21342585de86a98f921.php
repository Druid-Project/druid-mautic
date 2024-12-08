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

/* @themes/oxygen/css/oxygen.css */
class __TwigTemplate_88e69944d2298109617225e75ec6a6b9 extends Template
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
        yield "/* Take care of image borders and formatting, client hacks */
img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
a img { border: none; }
table { border-collapse: collapse !important;}
#outlook a { padding:0; }
.ReadMsgBody { width: 100%; }
.ExternalClass { width: 100%; }
.backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
table td { border-collapse: collapse; }
.ExternalClass * { line-height: 115%; }
.container-for-gmail-android { min-width: 600px; }


/* General styling */
body {
    font-family: Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    margin: 0 !important;
    height: 100%;
    color: #676767;
}

td {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #777777;
    text-align: center;
    line-height: 21px;
}

a {
    color: #ff6f6f;
    font-weight: bold;
    text-decoration: none !important;
}

.pull-left {
    text-align: left;
}

.pull-right {
    text-align: right;
}

.header-lg,
.header-md,
.header-sm {
    font-size: 32px;
    font-weight: 700;
    line-height: normal;
    padding: 35px 0 0;
    color: #4d4d4d;
}

.header-md {
    font-size: 24px;
}

.header-sm {
    padding: 5px 0;
    font-size: 18px;
    line-height: 1.3;
}

.content-padding {
    padding: 20px 0 30px;
}

.mobile-header-padding-right {
    width: 290px;
    text-align: right;
    padding-left: 10px;
}

.mobile-header-padding-left {
    width: 290px;
    text-align: left;
    padding-left: 10px;
}

.free-text {
    width: 100% !important;
    padding: 10px 60px 0px;
}

.block-rounded {
    border-radius: 5px;
    border: 1px solid #e5e5e5;
    vertical-align: top;
}

.info-block {
    padding: 0 20px;
    width: 260px;
}

.mini-block-container {
    padding: 30px 50px;
    width: 500px;
}

.mini-block {
    background-color: #ffffff;
    width: 498px;
    border: 1px solid #cccccc;
    border-radius: 5px;
    padding: 45px 75px;
}

.block-rounded {
    width: 260px;
}

.info-img {
    width: 258px;
    border-radius: 5px 5px 0 0;
}

.force-width-img {
    width: 480px;
    height: 1px !important;
}

.force-width-full {
    width: 600px;
    height: 1px !important;
}

.user-img img {
    width: 130px;
    border-radius: 5px;
    border: 1px solid #cccccc;
}

.user-img {
    text-align: center;
    border-radius: 100px;
    color: #ff6f6f;
    font-weight: 700;
}

.user-msg {
    padding: 10px 0;
    font-size: 14px;
    text-align: center;
    font-style: italic;
}

.mini-img {
    padding: 5px;
    width: 140px;
}

.mini-img img {
    border-radius: 5px;
    width: 140px;
}

.force-width-gmail {
    min-width:600px;
    height: 0px !important;
    line-height: 1px !important;
    font-size: 1px !important;
}

.mini-imgs {
    padding: 25px 0 30px;
}

@media screen {
    @import url(https://fonts.googleapis.com/css?family=Oxygen:400,700);

    /* Thanks Outlook 2013! */
    body {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
    }
}

/* Mobile styles */
@media only screen and (max-width: 480px) {

    table[class*=\"container-for-gmail-android\"] {
        min-width: 290px !important;
        width: 100% !important;
    }

    table[class=\"w320\"] {
        width: 320px !important;
    }

    img[class=\"force-width-gmail\"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
    }

    td[class*=\"mobile-header-padding-left\"] {
        width: 160px !important;
        padding-left: 0 !important;
    }

    td[class*=\"mobile-header-padding-right\"] {
        width: 160px !important;
        padding-right: 0 !important;
    }

    td[class=\"mobile-block\"] {
        display: block !important;
    }

    td[class=\"mini-img\"],
    td[class=\"mini-img\"] img{
        width: 150px !important;
    }

    td[class=\"header-lg\"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
    }

    td[class=\"header-md\"] {
        font-size: 18px !important;
        padding-bottom: 5px !important;
    }

    td[class=\"content-padding\"] {
        padding: 5px 0 30px !important;
    }

    td[class*=\"free-text\"] {
        padding: 10px 18px 30px !important;
    }

    img[class=\"force-width-img\"],
    img[class=\"force-width-full\"] {
        display: none !important;
    }

    td[class=\"info-block\"] {
        display: block !important;
        width: 280px !important;
        padding-bottom: 40px !important;
    }

    td[class=\"info-img\"],
    img[class=\"info-img\"] {
        width: 278px !important;
    }

    td[class=\"mini-block-container\"] {
        padding: 8px 20px !important;
        width: 280px !important;
    }

    td[class=\"mini-block\"] {
        padding: 20px !important;
    }

    div[class=\"user-img\"] {
        display: block !important;
        text-align: center !important;
        width: 100% !important;
        padding-bottom: 10px;
    }

    div[class=\"user-msg\"] {
        display: block !important;
        padding-bottom: 20px;
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
        return "@themes/oxygen/css/oxygen.css";
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
        return new Source("", "@themes/oxygen/css/oxygen.css", "/app/docroot/themes/oxygen/css/oxygen.css");
    }
}
