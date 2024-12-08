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

/* @themes/_survey/html/email.html.twig */
class __TwigTemplate_fc3f81f9c1de689b5232bdccb18f1ec8 extends Template
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
  <mj-body background-color=\"#f4f4f4\">
\t<mj-section background-color=\"#ffffff\">
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
        yield "\" width=\"70px\">
\t\t</mj-image>
\t  </mj-column>
\t</mj-section>
\t<mj-section background-color=\"#ffffff\">
\t  <mj-column width=\"550px\">
\t\t<mj-text font-size=\"26px\" align=\"center\" font-weight=\"700\">
\t\t  <p>Start customizing your email
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"16px\" align=\"center\">
\t\t  <p>This is where you add your primary message. Keep it concise and engaging. Explain the purpose of your email and what action you want the reader to take.
\t\t  </p>
\t\t</mj-text>
\t\t<mj-button href=\"https://\" background-color=\"#000000\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">
\t\t  <p>Take survey
\t\t  </p>
\t\t</mj-button>
\t  </mj-column>
\t</mj-section>
\t<mj-section padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#ffffff\">
\t  <mj-column>
\t\t<mj-social font-size=\"12px\" icon-size=\"30px\" border-radius=\"12px\" mode=\"horizontal\">
\t\t  <mj-social-element name=\"facebook\" background-color=\"#000000\" border-radius=\"14px 14px 14px 14px\" padding-right=\"10px\">
\t\t  </mj-social-element>
\t\t  <mj-social-element name=\"instagram\" background-color=\"#000000\" border-radius=\"14px 14px 14px 14px\" padding-right=\"10px\" padding-left=\"10px\">
\t\t  </mj-social-element>
\t\t  <mj-social-element name=\"youtube\" background-color=\"#000000\" border-radius=\"14px 14px 14px 14px\" padding-left=\"10px\">
\t\t  </mj-social-element>
\t\t</mj-social>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" line-height=\"1.5\" align=\"center\" padding-top=\"0px\" padding-bottom=\"0px\" font-size=\"12px\">
\t\t  <p>Amazing Company
\t\t\t<br/>11111 Beautiful City, 1212 Nice Street
\t\t\t<br/>Brazil
\t\t\t<br/>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer>
\t\t</mj-spacer>
\t\t<mj-text font-size=\"11px\" align=\"center\" color=\"#6d6d6d\">
\t\t  <p>Fancy seeing you down here. You’re getting this email because you gave us your email address.
\t\t  </p>
\t\t  <p>Want to change how you receive these emails?
\t\t  </p>
\t\t</mj-text>
\t\t<mj-text font-size=\"11px\" align=\"center\" color=\"#6d6d6d\">
\t\t  <p>
\t\t\t<span data-fr-verified=\"true\"><span data-fr-verified=\"true\" class=\"atwho-inserted\">{unsubscribe_text}</span>⁠⁠⁠⁠⁠⁠⁠</span>
\t\t  </p>
\t\t</mj-text>
\t\t<mj-spacer height=\"60px\">
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
        return "@themes/_survey/html/email.html.twig";
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
        return array (  61 => 18,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/_survey/html/email.html.twig", "/app/docroot/themes/_survey/html/email.html.twig");
    }
}
