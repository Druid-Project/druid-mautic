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

/* @themes/_educate/html/email.html.twig */
class __TwigTemplate_57a455414f297fa40525216ef1a1b07d extends Template
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
\t<mj-style inline=\"inline\"> p, li {margin:0 !important; padding:0; line-height:1.4em;}
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
\t<mj-section background-color=\"#ffffff\" padding-top=\"0px\">
\t  <mj-column width=\"550px\">
\t\t<mj-text font-size=\"24px\" align=\"center\" font-weight=\"700\">
\t\t  <p>Maximize your experience
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"16px\" align=\"center\">
\t\t  <p>Help users understand how to make the most of your products or services. Explain how to participate with your organization and provide useful tips.
\t\t  </p>
\t\t  <p>
\t\t\t<br data-cke-filler=\"true\"/>
\t\t  </p>
\t\t  <p>Start by replacing the logo and modifying the full-width banner to a new color or a high-quality image.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer align=\"center\">
\t\t</mj-spacer>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">
\t\t  <p>Call to action
\t\t  </p>
\t\t</mj-button>
\t\t<mj-spacer align=\"center\" height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 45
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>Pick your strategy
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"16px\">
\t\t  <p>Emphasize your product's benefits, provide care instructions, or demonstrate real-world usage examples.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer align=\"center\" height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 57
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>Break it down
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"16px\">
\t\t  <p>Segment your content into brief paragraphs for easy scanning, particularly on smaller screens.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer align=\"center\" height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 69
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>One more thing
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"16px\">
\t\t  <p>This is an ideal spot to offer extra resources like downloadable materials, available apps, or a product registration link.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer align=\"center\" height=\"40px\">
\t\t</mj-spacer>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"30px\" padding-bottom=\"30px\" background-color=\"#f4f4f4\">
\t  <mj-column width=\"275px\">
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>Close with support
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t  <mj-column width=\"275px\">
\t\t<mj-text font-size=\"16px\">
\t\t  <p>Inform readers how to contact you with questions or where to find help when needed.
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#000000\">
\t  <mj-column>
\t\t<mj-spacer height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 103
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
        return "@themes/_educate/html/email.html.twig";
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
        return array (  158 => 103,  121 => 69,  106 => 57,  91 => 45,  61 => 18,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/_educate/html/email.html.twig", "/app/docroot/themes/_educate/html/email.html.twig");
    }
}
