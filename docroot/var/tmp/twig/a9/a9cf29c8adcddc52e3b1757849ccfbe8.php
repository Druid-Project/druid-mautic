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

/* @themes/_1-3-1-3-column/html/email.html.twig */
class __TwigTemplate_73af2353ee150fcd32c106d5a370f287 extends Template
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
\t<!-- CSS-STYLE -->
\t<mj-style inline=\"inline\"> p, li {margin:0 !important; padding:0; line-height: 1.4em;}
\t</mj-style>
  </mj-head>
  <!-- BODY -->
  <mj-body background-color=\"#d0d0d0\">
\t<mj-section padding-top=\"40px\" background-color=\"#ffffff\">
\t  <mj-column>
\t\t<mj-text font-size=\"11px\" align=\"center\">
\t\t  <p>
\t\t\t<span data-fr-verified=\"true\"><span data-fr-verified=\"true\" class=\"atwho-inserted\">{webview_text}</span>⁠⁠⁠⁠⁠⁠⁠</span>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 18
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\" padding-bottom=\"0px\" padding-top=\"0px\">
\t\t</mj-image>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#ffffff\">
\t  <mj-column>
\t\t<mj-text font-size=\"24px\" align=\"center\" font-weight=\"700\">
\t\t  <p>Start customizing your email
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer align=\"center\">
\t\t</mj-spacer>
\t\t<mj-text font-size=\"16px\" align=\"center\">
\t\t  <p>Design a standout email by strategically placing content blocks in key areas. Test different layouts to maximize reader engagement and conversion.
\t\t  </p>
\t\t  <p>
\t\t\t<br data-cke-filler=\"true\"/>
\t\t  </p>
\t\t  <p>Adjust colors, fonts, and spacing to align with your brand and enhance visual appeal.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#f4f4f4\">
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 45
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"14px\" align=\"center\">
\t\t  <p>Showcase your best sellers here.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
\t\t</mj-button>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 57
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"14px\" align=\"center\">
\t\t  <p>Showcase your best sellers here.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
\t\t</mj-button>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 69
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"14px\" align=\"center\">
\t\t  <p>Showcase your best sellers here.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
\t\t</mj-button>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#ffffff\">
\t  <mj-column>
\t\t<mj-text font-size=\"16px\" align=\"center\">
\t\t  <p>Design a standout email by strategically placing content blocks in key areas. Test different layouts to maximize reader engagement and conversion.
\t\t  </p>
\t\t  <p>
\t\t\t<br data-cke-filler=\"true\"/>
\t\t  </p>
\t\t  <p>Adjust colors, fonts, and spacing to align with your brand and enhance visual appeal.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#f4f4f4\">
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 98
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"14px\" align=\"center\">
\t\t  <p>Showcase your best sellers here.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
\t\t</mj-button>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 110
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"14px\" align=\"center\">
\t\t  <p>Showcase your best sellers here.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
\t\t</mj-button>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 122
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"14px\" align=\"center\">
\t\t  <p>Showcase your best sellers here.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
\t\t</mj-button>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#000000\">
\t  <mj-column>
\t\t<mj-spacer height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 138
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
</mjml>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/_1-3-1-3-column/html/email.html.twig";
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
        return array (  202 => 138,  183 => 122,  168 => 110,  153 => 98,  121 => 69,  106 => 57,  91 => 45,  61 => 18,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/_1-3-1-3-column/html/email.html.twig", "/app/docroot/themes/_1-3-1-3-column/html/email.html.twig");
    }
}
