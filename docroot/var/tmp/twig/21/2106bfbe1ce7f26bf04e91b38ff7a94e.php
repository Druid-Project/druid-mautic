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

/* @themes/brienz/html/email.html.twig */
class __TwigTemplate_8da4cd98099e6f0f4940c38e6c46136b extends Template
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
        yield "<mjml>
  <!-- MJML Template Brienz v2.0 / last update 25.07.2022 tested with Litmus -->
  <mj-head>
\t<mj-title>{subject}
\t</mj-title>
\t<mj-preview>Preview Text goes here
\t</mj-preview>
\t<mj-attributes>
\t  <mj-all margin=\"0\">
\t  </mj-all>
\t</mj-attributes>
\t<!-- CSS-STYLE -->
\t<mj-style inline=\"inline\"> p, li {margin:0; padding:0;}
\t</mj-style>
  </mj-head>
  <!-- BODY -->
  <mj-body background-color=\"#d6dde5\">
\t<!-- LOGO HEADER -->
\t<mj-section padding-top=\"10px\" padding-bottom=\"10px\">
\t  <mj-column css-class=\"column\">
\t\t<mj-image padding=\"20px\" width=\"200px\" src=\"";
        // line 21
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 21, $this->source); })())) . "/assets/your-logo-purple.png"), null, null, true);
        yield "\" href=\"#\" alt=\"Link to Company Website\" title=\"Link to Company Website\"/>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION HEADER -->
\t<mj-section padding-bottom=\"20px\" padding-top=\"5px\">
\t  <mj-column width=\"60%\" vertical-align=\"middle\">
\t\t<mj-text color=\"#6d6d6d\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"11px\" padding-top=\"5px\" padding-bottom=\"5px\">
\t\t  <p>{subject}
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t  <mj-column width=\"40%\" vertical-align=\"middle\">
\t\t<mj-text color=\"#6d6d6d\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"11px\" padding-top=\"5px\" padding-bottom=\"5px\">
\t\t  <p><a style=\"color:#6d6d6d !important;\" href=\"{webview_url}\">View this mail in your browser</a>
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION HERO -->
\t<mj-hero  mode=\"fixed-height\" background-height=\"500px\" background-width=\"600px\" background-color=\"#486AE2\" background-url=\"";
        // line 40
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 40, $this->source); })())) . "/assets/brienzlake.jpeg"), null, null, true);
        yield "\" padding-bottom=\"80px\" padding-top=\"80px\">
\t  <mj-text align=\"center\" color=\"#ffffff\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"24px\" font-weight=\"500\" padding-top=\"20px\" padding-bottom=\"0px\">
\t\t<p>Check out our blog:
\t\t</p>
\t  </mj-text>
\t  <mj-text align=\"center\" color=\"#ffffff\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"36px\" font-weight=\"700\" padding-top=\"20px\" padding-bottom=\"0px\">
\t\t<p>We are half way there!
\t\t</p>
\t  </mj-text>
\t  <mj-text align=\"center\" color=\"#ffffff\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"24px\" font-weight=\"500\" padding-top=\"20px\" padding-bottom=\"0px\">
\t\t<p>See our progress!
\t\t</p>
\t  </mj-text>
\t  <mj-button background-color=\"#9E094E\" color=\"#FFFFFF\" font-size=\"15px\" href=\"#\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-top=\"80px\" padding-bottom=\"0px\">MORE UPDATES 
\t  </mj-button>
\t</mj-hero>
\t<!-- SECTION TEXT + BUTTON -->
\t<mj-section background-color=\"#ffffff\" padding-top=\"25px\" padding-bottom=\"0\">
\t  <mj-column>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"20px\" line-height=\"1.5\" font-weight=\"500\" padding-bottom=\"0px\">
\t\t  <p>This is an eyecatching headline
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\" align=\"justify\">
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum enim eget magna efficitur, eu semper augue semper. Aliquam erat volutpat. Cras id dui lectus. Vestibulum sed finibus lectus, sit amet suscipit nibh. Proin nec commodo purus. Sed eget nulla elit. Nulla aliquet mollis faucibus.</p>
\t\t</mj-text>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\">
\t\t  <p>Call us from monday to friday: 
\t\t\t<a title=\"phone\" href=\"tel:+41 600 00 00\">+41 600 00 00</a>
\t\t\t<br> Or write a mail: 
\t\t\t<a title=\"mail\" href=\"mailto:info@company.com\">info@company.com</a>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button background-color=\"#486AE2\" color=\"#FFFFFF\" href=\"#\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-top=\"20px\" padding-bottom=\"40px\">READ MORE
\t\t</mj-button>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION SPACER -->
\t<mj-section padding-top=\"0px\" padding-bottom=\"0px\">
\t  <mj-column>
\t\t<mj-spacer height=\"15px\"/>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION IMAGE + TEXT + BUTTON -->
\t<mj-section background-color=\"#ffffff\" padding-top=\"25px\" padding-bottom=\"0\">
\t  <mj-column width=\"100%\">
\t\t<mj-image src=\"";
        // line 86
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 86, $this->source); })())) . "/assets/brienz.jpeg"), null, null, true);
        yield "\" alt=\"Lake of Brienz - Switzerland\" padding-top=\"0\" padding-bottom=\"20px\"/>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"20px\" line-height=\"1.5\" font-weight=\"500\" padding-bottom=\"0px\">
\t\t  <p>This is an eyecatching headline
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\" align=\"justify\">
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum enim eget magna efficitur, eu semper augue semper. Aliquam erat volutpat. Cras id dui lectus. Vestibulum sed finibus lectus, sit amet suscipit nibh. Proin nec commodo purus. Sed eget nulla elit. Nulla aliquet mollis faucibus.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button background-color=\"#486AE2\" color=\"#FFFFFF\" href=\"#\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-top=\"20px\" padding-bottom=\"40px\">READ MORE
\t\t</mj-button>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION SPACER -->
\t<mj-section padding-top=\"0px\" padding-bottom=\"0px\">
\t  <mj-column>
\t\t<mj-spacer height=\"15px\"/>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION 2-COLUMNS IMAGE + TEXT + BUTTON -->
\t<mj-section background-color=\"#ffffff\" padding-top=\"25px\" padding-bottom=\"0px\">
\t  <mj-column width=\"50%\">
\t\t<mj-image src=\"";
        // line 108
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })())) . "/assets/sign.jpeg"), null, null, true);
        yield "\" alt=\"At the Top Of The Rothorn\" padding-top=\"0\" padding-bottom=\"0px\"/>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\" align=\"justify\" padding-top=\"20px\">
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum enim eget magna efficitur, eu semper augue semper. Aliquam erat volutpat. Cras id dui lectus. Vestibulum sed finibus lectus, sit amet suscipit nibh. Proin nec commodo purus. Sed eget nulla elit. Nulla aliquet mollis faucibus.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button background-color=\"#486AE2\" color=\"#FFFFFF\" href=\"#\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-top=\"20px\" padding-bottom=\"40px\">READ MORE
\t\t</mj-button>
\t  </mj-column>
\t  <mj-column width=\"50%\">
\t\t<mj-image src=\"";
        // line 117
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 117, $this->source); })())) . "/assets/jungfrau.jpeg"), null, null, true);
        yield "\" alt=\"Snow Covered Jungraujoch\" padding-bottom=\"0px\" padding-top=\"0px\"/>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\" align=\"justify\" padding-top=\"20px\">
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum enim eget magna efficitur, eu semper augue semper. Aliquam erat volutpat. Cras id dui lectus. Vestibulum sed finibus lectus, sit amet suscipit nibh. Proin nec commodo purus. Sed eget nulla elit. Nulla aliquet mollis faucibus.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button background-color=\"#486AE2\" color=\"#FFFFFF\" href=\"#\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-top=\"20px\" padding-bottom=\"40px\">READ MORE
\t\t</mj-button>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION SPACER -->
\t<mj-section padding-top=\"0px\" padding-bottom=\"0px\">
\t  <mj-column>
\t\t<mj-spacer height=\"15px\"/>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION FOOTER -->
\t<mj-section background-color=\"#ffffff\" padding-top=\"25px\" padding-bottom=\"0\">
\t  <mj-column>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"20px\" line-height=\"1.5\" font-weight=\"500\" padding-bottom=\"0px\">
\t\t  <p>This is an eyecatching headline
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\" align=\"justify\">
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum enim eget magna efficitur, eu semper augue semper. Aliquam erat volutpat. Cras id dui lectus. Vestibulum sed finibus lectus, sit amet suscipit nibh. Proin nec commodo purus. Sed eget nulla elit. Nulla aliquet mollis faucibus.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" font-size=\"16px\" line-height=\"1.5\" font-weight=\"300\">
\t\t  <p>Call us from monday to friday: 
\t\t\t<a title=\"phone\" href=\"tel:+41 600 00 00\">+41 600 00 00</a>
\t\t\t<br> Or write a mail: 
\t\t\t<a title=\"mail\" href=\"mailto:info@company.com\">info@company.com</a>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button background-color=\"#486AE2\" color=\"#FFFFFF\" href=\"#\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" padding-top=\"20px\" padding-bottom=\"40px\">READ MORE
\t\t</mj-button>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"0px\" padding-bottom=\"0px\">
\t  <mj-column>
\t\t<mj-spacer height=\"15px\"/>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#486AE2\" padding-top=\"20px\" padding-bottom=\"0px\">
\t  <mj-column>
\t\t<mj-social padding-top=\"20px\">
\t\t  <mj-social-element name=\"facebook\" href=\"[[SHORT_PERMALINK]]\">
\t\t  </mj-social-element>
\t\t  <mj-social-element name=\"twitter\" href=\"[[SHORT_PERMALINK]]\">
\t\t  </mj-social-element>
\t\t  <mj-social-element name=\"google\" href=\"[[SHORT_PERMALINK]]\">
\t\t  </mj-social-element>
\t\t</mj-social>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#486AE2\" padding-top=\"0\" padding-bottom=\"20px\">
\t  <mj-column>
\t\t<mj-text color=\"#ffffff\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" line-height=\"1.5\" align=\"center\" padding-top=\"0px\" padding-bottom=\"0px\">
\t\t  <p>Amazing Company
\t\t\t<br>11111 Beautiful City, 1212 Nice Street
\t\t\t<br>Switzerland
\t\t\t<br>
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<!-- SECTION POLICY -->
\t<mj-section css-class=\"graylink\" padding-top=\"20px\" padding-bottom=\"60px\">
\t  <mj-column width=\"100%\" vertical-align=\"middle\">
\t\t<mj-text color=\"#6d6d6d\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" line-height=\"1.5\" align=\"center\" padding-bottom=\"0px\" padding-top=\"0px\">
\t\t  <p style=\"font-size:11px\">{unsubscribe_text} 
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
  </mj-body>
</mjml>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/brienz/html/email.html.twig";
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
        return array (  172 => 117,  160 => 108,  135 => 86,  86 => 40,  64 => 21,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/brienz/html/email.html.twig", "/app/docroot/themes/brienz/html/email.html.twig");
    }
}
