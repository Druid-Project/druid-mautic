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

/* @themes/_simple-text/html/email.html.twig */
class __TwigTemplate_78a4d7e9041b45a2fe4e68eeefcc75af extends Template
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
      <!-- CSS-STYLE -->
      <mj-style inline=\"inline\"> p, li {margin:0 !important; padding:0; line-height:1.4em;}
      </mj-style>
    </mj-head>
    <!-- BODY -->
    <mj-body background-color=\"#f4f4f4\">
      <mj-section background-color=\"#ffffff\">
        <mj-column>
          <mj-text font-size=\"11px\" align=\"center\">
            <p>
              <span data-fr-verified=\"true\"><span data-fr-verified=\"true\" class=\"atwho-inserted\">{webview_text}</span>⁠⁠⁠⁠⁠⁠⁠</span>
            </p>
          </mj-text>
          <mj-spacer>
          </mj-spacer>
          <mj-image src=\"";
        // line 18
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/\\@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\">
          </mj-image>
        </mj-column>
      </mj-section>
      <mj-section background-color=\"#ffffff\">
        <mj-column width=\"550px\">
          <mj-text font-size=\"24px\" font-weight=\"700\">
            <p>Start customizing your email
            </p>
          </mj-text>
          <mj-text font-size=\"16px\">
            <p>This is where you add your primary message. Keep it concise and engaging. Explain the purpose of your email and what action you want the reader to take.
            </p>
          </mj-text>
          <mj-button href=\"https://\" background-color=\"#000000\" align=\"left\" inner-padding=\"16px 32px\" border-radius=\"0px 0px 0px 0px\" font-size=\"16px\">Button
          </mj-button>
        </mj-column>
      </mj-section>
      <mj-section padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#ffffff\">
        <mj-column>
          <mj-spacer>
          </mj-spacer>
          <mj-text font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" line-height=\"1.5\" align=\"center\" padding-top=\"0px\" padding-bottom=\"0px\" font-size=\"12px\">
            <p>Amazing Company
              <br/>11111 Beautiful City, 1212 Nice Street
              <br/>Brazil
              <br/>
            </p>
          </mj-text>
          <mj-spacer>
          </mj-spacer>
          <mj-text font-size=\"11px\" align=\"center\" color=\"#6d6d6d\">
            <p>Fancy seeing you down here. You’re getting this email because you gave us your email address.
            </p>
            <p>Want to change how you receive these emails?
            </p>
          </mj-text>
          <mj-text font-size=\"11px\" align=\"center\" color=\"#6d6d6d\">
            <p>
              <span data-fr-verified=\"true\"><span data-fr-verified=\"true\" class=\"atwho-inserted\">{unsubscribe_text}</span>⁠⁠⁠⁠⁠⁠⁠</span>
            </p>
          </mj-text>
          <mj-spacer height=\"60px\">
          </mj-spacer>
        </mj-column>
      </mj-section>
      <!-- SECTION POLICY -->
    </mj-body>
  </mjml>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/_simple-text/html/email.html.twig";
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
        return new Source("", "@themes/_simple-text/html/email.html.twig", "/app/docroot/themes/_simple-text/html/email.html.twig");
    }
}
