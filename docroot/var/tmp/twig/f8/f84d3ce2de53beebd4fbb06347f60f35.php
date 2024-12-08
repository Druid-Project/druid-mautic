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

/* @themes/creative/html/email.html.twig */
class __TwigTemplate_72239dd02916997055fa5760789e8f28 extends Template
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
  <mj-head>
    <mj-style inline=\"inline\">
      p, li {margin:0 !important; padding:0; line-height:1.4em;}
    </mj-style>
  </mj-head>
  <mj-body background-color=\"#F5F5F5\">
    <!-- Header -->
    <mj-section background-color=\"#ffffff\" padding=\"20px 0\">
      <mj-column>
        <mj-image src=\"";
        // line 11
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\" />
      </mj-column>
    </mj-section>
    <!-- Hero Section -->
    <mj-section background-url=\"";
        // line 15
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 15, $this->source); })())) . "/assets/hero-background.png"), null, null, true);
        yield "\" background-size=\"cover\" background-repeat=\"no-repeat\" background-position=\"center\" padding-top=\"60px\" padding-bottom=\"60px\">
      <mj-column width=\"400px\">
        <mj-text color=\"#ffffff\" font-size=\"42px\" font-weight=\"bold\" align=\"center\" padding-bottom=\"0px\">
          <p>{subject}</p>
        </mj-text>
        <mj-text color=\"#ffffff\" align=\"center\" padding-top=\"0px\">
          <p>Discover the latest updates and enhancements to your Cloud Creative experience.</p>
        </mj-text>
        <mj-button href=\"#\" background-color=\"#1473E6\" color=\"#ffffff\" font-size=\"14px\" font-weight=\"bold\" border-radius=\"24px\" padding=\"12px 24px\">
          <p>Explore now</p>
        </mj-button>
      </mj-column>
    </mj-section>

    <!-- What's New Section -->
    <mj-section background-color=\"#ffffff\">
      <mj-column>
        <mj-spacer></mj-spacer>
        <mj-text font-size=\"24px\" font-weight=\"bold\" padding-bottom=\"10px\">
          <p>What's new in Cloud Creative</p>
        </mj-text>
        <mj-text font-size=\"16px\">
          <p>We're constantly improving our tools to help you create at your best. Check out these exciting updates:</p>
        </mj-text>
      </mj-column>
    </mj-section>

    <!-- New Features Cards -->
    <mj-section background-color=\"#ffffff\">
      <mj-column width=\"50%\">
        <mj-image src=\"";
        // line 45
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 45, $this->source); })())) . "/assets/brush-line.png"), null, null, true);
        yield "\" width=\"36px\" padding-bottom=\"0px\" align=\"left\" alt=\"Designer Icon\" />
        <mj-text font-weight=\"bold\" font-size=\"18px\">
          <p>Cloud Designer</p>
        </mj-text>
        <mj-text>
          <p>New AI-powered selection tools and enhanced neural filters.</p>
        </mj-text>
        <mj-button href=\"#\" background-color=\"transparent\" border=\"3px solid #1473E6\" inner-padding=\"6px 18px\" border-radius=\"20px\" color=\"#1473E6\" font-weight=\"bold\" align=\"left\">
          <p>Learn more</p>
        </mj-button>
        <mj-spacer></mj-spacer>
      </mj-column>
      <mj-column width=\"50%\">
        <mj-image src=\"";
        // line 58
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 58, $this->source); })())) . "/assets/compasses-2-line.png"), null, null, true);
        yield "\" width=\"36px\" padding-bottom=\"0px\" align=\"left\" alt=\"Illustrator Icon\" />
        <mj-text font-weight=\"bold\" font-size=\"18px\">
          <p>Cloud Illustrator</p>
        </mj-text>
        <mj-text>
          <p>Improved 3D effects and new pattern creation tools.</p>
        </mj-text>
        <mj-button href=\"#\" background-color=\"transparent\" border=\"3px solid #1473E6\" inner-padding=\"6px 18px\" border-radius=\"20px\" color=\"#1473E6\" font-weight=\"bold\" align=\"left\">
          <p>Learn more</p>
        </mj-button>
        <mj-spacer></mj-spacer>
      </mj-column>
    </mj-section>

    <!-- Tutorial Section -->
    <mj-section background-color=\"#FAFAFA\">
      <mj-column>
        <mj-spacer></mj-spacer>
        <mj-text font-size=\"24px\" font-weight=\"bold\" padding-bottom=\"10px\" align=\"center\">
          <p>Master new skills</p>
        </mj-text>
        <mj-text font-size=\"16px\" align=\"center\">
          <p>Enhance your creativity with our latest tutorials:</p>
        </mj-text>
      </mj-column>
    </mj-section>

    <mj-section background-color=\"#FAFAFA\">
      <mj-column>
        <mj-image src=\"";
        // line 87
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 87, $this->source); })())) . "/assets/tutorial.png"), null, null, true);
        yield "\" alt=\"Tutorial Thumbnail\" />
        <mj-text font-weight=\"bold\" align=\"center\">
          <p>Create stunning visual effects in Cloud After Effects</p>
        </mj-text>
        <mj-button href=\"#\" background-color=\"transparent\" border=\"3px solid #1473E6\" inner-padding=\"6px 18px\" border-radius=\"20px\" color=\"#1473E6\" font-weight=\"bold\">
          <p>Watch tutorial</p>
        </mj-button>
        <mj-spacer></mj-spacer>
      </mj-column>
    </mj-section>

    <!-- Cloud Creative Plan Section -->
    <mj-section background-color=\"#ffffff\">
      <mj-column>
        <mj-spacer></mj-spacer>
        <mj-text font-size=\"24px\" font-weight=\"bold\" padding-bottom=\"10px\" align=\"center\">
          <p>Upgrade your Cloud Creative plan</p>
        </mj-text>
        <mj-text font-size=\"16px\" align=\"center\">
          <p>Get access to over 20+ creative desktop and mobile apps, including:</p>
        </mj-text>
      </mj-column>
    </mj-section>

    <mj-section background-color=\"#ffffff\">
      <mj-column width=\"33.33%\">
        <mj-image src=\"";
        // line 113
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 113, $this->source); })())) . "/assets/brush-line.png"), null, null, true);
        yield "\" width=\"48px\" alt=\"Cloud Designer\" padding-bottom=\"10px\" />
        <mj-text align=\"center\">
          <p>Cloud Designer</p>
        </mj-text>
      </mj-column>
      <mj-column width=\"33.33%\">
        <mj-image src=\"";
        // line 119
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 119, $this->source); })())) . "/assets/compasses-2-line.png"), null, null, true);
        yield "\" width=\"48px\" alt=\"Cloud Illustrator\" padding-bottom=\"10px\" />
        <mj-text align=\"center\">
          <p>Cloud Illustrator</p>
        </mj-text>
      </mj-column>
      <mj-column width=\"33.33%\">
        <mj-image src=\"";
        // line 125
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 125, $this->source); })())) . "/assets/layout-line.png"), null, null, true);
        yield "\" width=\"48px\" alt=\"Cloud Publisher\" padding-bottom=\"10px\" />
        <mj-text align=\"center\">
          <p>Cloud Publisher</p>
        </mj-text>
      </mj-column>
    </mj-section>

    <mj-section background-color=\"#ffffff\">
      <mj-column>
        <mj-button href=\"#\" background-color=\"#1473E6\" color=\"#ffffff\" font-size=\"16px\" font-weight=\"bold\" border-radius=\"24px\" padding=\"12px 24px\">
          <p>Upgrade now</p>
        </mj-button>
      </mj-column>
    </mj-section>

    <!-- Community Spotlight -->
    <mj-section background-color=\"#FAFAFA\">
      <mj-column>
        <mj-spacer></mj-spacer>
        <mj-text font-size=\"24px\" font-weight=\"bold\" padding-bottom=\"10px\">
          <p>Community spotlight</p>
        </mj-text>
        <mj-text font-size=\"16px\">
          <p>Check out this amazing work from our Cloud Creative community:</p>
        </mj-text>
      </mj-column>
    </mj-section>

    <mj-section background-color=\"#FAFAFA\">
      <mj-column width=\"50%\">
        <mj-image src=\"";
        // line 155
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 155, $this->source); })())) . "/assets/community-work-1.png"), null, null, true);
        yield "\" border-radius=\"12px\" alt=\"Community Work 1\" />
        <mj-text font-weight=\"bold\">
          <p>\"Neon dreams\" by Jane Doe</p>
        </mj-text>
        <mj-spacer></mj-spacer>
      </mj-column>
      <mj-column width=\"50%\">
        <mj-image src=\"";
        // line 162
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 162, $this->source); })())) . "/assets/community-work-2.png"), null, null, true);
        yield "\" border-radius=\"12px\" alt=\"Community Work 2\" />
        <mj-text font-weight=\"bold\">
          <p>\"Abstract harmony\" by John Smith</p>
        </mj-text>
        <mj-spacer></mj-spacer>
      </mj-column>
    </mj-section>

    <!-- Footer -->
\t<mj-section padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#000000\">
\t  <mj-column>
\t\t<mj-spacer height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 175
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-logo-inverse.png", null, null, true);
        yield "\" width=\"70px\" padding-bottom=\"0px\">
\t\t</mj-image>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" line-height=\"1.5\" align=\"center\" padding-top=\"0px\" padding-bottom=\"0px\" font-size=\"12px\" color=\"white\">
\t\t  <p>Amazing Company
\t\t\t<br/>11111 Beautiful City, 1212 Nice Street
\t\t\t<br/>Brazil
\t\t\t<br/>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-size=\"11px\" align=\"center\" color=\"#a1a1a1\">
\t\t  <p>Fancy seeing you down here. You’re getting this email because you gave us your email address.
\t\t  </p>
\t\t  <p>Want to change how you receive these emails?
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"11px\" align=\"center\" color=\"#a1a1a1\">
\t\t  <p>
\t\t\t<span data-fr-verified=\"true\"><span data-fr-verified=\"true\" class=\"atwho-inserted\">{unsubscribe_text}</span>⁠⁠⁠⁠⁠⁠⁠</span>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t</mj-section>
  </mj-body>
</mjml>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/creative/html/email.html.twig";
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
        return array (  248 => 175,  232 => 162,  222 => 155,  189 => 125,  180 => 119,  171 => 113,  142 => 87,  110 => 58,  94 => 45,  61 => 15,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/creative/html/email.html.twig", "/app/docroot/themes/creative/html/email.html.twig");
    }
}
