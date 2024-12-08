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

/* @themes/_connect-through-content/html/email.html.twig */
class __TwigTemplate_9db1d4f15e09ea157bddb0747abf6a96 extends Template
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
\t<mj-section background-color=\"#ffffff\">
\t  <mj-column width=\"550px\">
\t\t<mj-text font-size=\"24px\" align=\"center\" font-weight=\"700\">
\t\t  <p>Connect through content
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer align=\"center\">
\t\t</mj-spacer>
\t\t<mj-text font-size=\"16px\" align=\"center\">
\t\t  <p>Build brand loyalty with engaging newsletters. Highlight blog posts, showcase products, or announce upcoming events.
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#ffffff\">
\t  <mj-column>
\t\t<mj-image src=\"";
        // line 38
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\" padding-right=\"0px\" padding-left=\"0px\" padding-bottom=\"0px\">
\t\t</mj-image>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#ffffff\">
\t  <mj-column width=\"275px\">
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>Spotlight your main attraction
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"16px\">
\t\t  <p>Lead with a standout feature to make your email scannable. Whether it's a fresh article or a new product launch, make it pop.
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t  <mj-column width=\"275px\">
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-size=\"16px\">
\t\t  <p>Customize with your visuals or choose a bold background color.
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#ffffff\" padding-top=\"0px\">
\t  <mj-column padding-top=\"0px\">
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\" padding-top=\"0px\">
\t\t  <p>Discover more
\t\t  </p>
\t\t</mj-button>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"40px\" padding-bottom=\"40px\" background-color=\"#f4f4f4\">
\t  <mj-column width=\"275px\">
\t\t<mj-image src=\"";
        // line 80
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t  </mj-column>
\t  <mj-column width=\"275px\">
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>Showcase your expertise
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"14px\">
\t\t  <p>Feature an image of your latest offering or a recent successful project.
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"40px\" padding-bottom=\"40px\" background-color=\"#ffffff\">
\t  <mj-column width=\"275px\">
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>Enhance your articles
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"14px\">
\t\t  <p>Pair eye-catching visuals with compelling text to boost click-through rates.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"14px\">
\t\t  <p>
\t\t\t<u>Explore further
\t\t\t</u>
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t  <mj-column width=\"275px\">
\t\t<mj-image src=\"";
        // line 112
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"40px\" padding-bottom=\"40px\" background-color=\"#f4f4f4\">
\t  <mj-column width=\"275px\">
\t\t<mj-image src=\"";
        // line 118
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-image.png", null, null, true);
        yield "\">
\t\t</mj-image>
\t  </mj-column>
\t  <mj-column width=\"275px\">
\t\t<mj-text font-size=\"22px\" font-weight=\"700\">
\t\t  <p>What's on the horizon
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"14px\">
\t\t  <p>Tease upcoming events or give a preview of soon-to-launch collections.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"14px\">
\t\t  <p>
\t\t\t<u>Save your spot
\t\t\t</u>
\t\t  </p>
\t\t</mj-text>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#000000\">
\t  <mj-column>
\t\t<mj-spacer height=\"40px\">
\t\t</mj-spacer>
\t\t<mj-image src=\"";
        // line 142
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
        return "@themes/_connect-through-content/html/email.html.twig";
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
        return array (  200 => 142,  173 => 118,  164 => 112,  129 => 80,  84 => 38,  61 => 18,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/_connect-through-content/html/email.html.twig", "/app/docroot/themes/_connect-through-content/html/email.html.twig");
    }
}
