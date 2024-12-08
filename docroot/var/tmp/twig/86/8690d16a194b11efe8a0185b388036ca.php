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

/* @themes/confirmme/html/email.html.twig */
class __TwigTemplate_26798586c59eedbca860d04a1db75e79 extends Template
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
  <!-- MJML Template ConfirmMe v2.0 / last update 25.07.2022 / tested with Litmus -->
  <mj-head>
    <mj-title>{subject}</mj-title>
    <!-- FONT IMPORT -->
    <mj-font name=\"Open Sans\" href=\"https://fonts.googleapis.com/css2family=Open+Sans:wght@300;400;600;700&display=swap\" />
    <mj-attributes>
      <mj-all font-family=\"Open Sans, Arial, Helvetica, sans-serif\">
      </mj-all>
      <mj-all margin=\"0\">
      </mj-all>
    </mj-attributes>
    <!-- CSS-STYLE -->
    <mj-style inline=\"inline\"> p, li {margin:0; padding:0;} </mj-style>
  </mj-head>
  <!-- BODY -->
  <mj-body css-class=\"graylink\">
    <!-- SECTION HEADER -->
    <mj-section background-color=\"#f0f0f0\">
      <mj-column width=\"400px\">
        <mj-text align=\"center\" font-size=\"24px\" line-height=\"1.5\" color=\"#6f6f6f\" font-weight=\"700\" font-family=\"Open Sans, Arial\">
          <p>My Company</p>
        </mj-text>
      </mj-column>
    </mj-section>
    <!-- SECTION TEXT + BUTTON -->
    <mj-section background-color=\"#fafafa\" padding-top=\"40px\" padding-bottom=\"40px\">
      <mj-column width=\"400px\">
        <mj-text align=\"center\" font-size=\"20px\" line-height=\"1.5\" color=\"#6f6f6f\" font-weight=\"700\" font-family=\"Open Sans, Arial\">
          <p>Please confirm your subscription!</p>
        </mj-text>
        <mj-button background-color=\"#F45E43\" align=\"center\" font-size=\"15px\" line-height=\"1.5\" color=\"#ffffff\" font-weight=\"500\" font-family=\"Open Sans, Arial\" href=\"#\">Yes, subscribe me to the list </mj-button>
        <mj-text align=\"center\" font-size=\"16px\" line-height=\"1.5\" color=\"#6f6f6f\" font-weight=\"500\" font-family=\"Open Sans, Arial\">
          <p><br><br>If you received this email by mistake, simply delete it. You won't be subscribed if you don't click the confirmation link above.</p>
          <br>
          <p>For questions about this list, please contact: <a style=\"color:#6f6f6f !important; text-decoration:underline;\" title=\"our e-mail\" href=\"email@email.com\">email@email.com</a></p>
        </mj-text>
      </mj-column>
    </mj-section>
    <mj-raw>
      <!-- SECTION FOOTER -->
    </mj-raw>
    <mj-section background-color=\"#f0f0f0\">
      <mj-column width=\"400px\">
        <mj-text align=\"center\" font-size=\"14px\" line-height=\"1.5\" color=\"#6f6f6f\" font-weight=\"300\" font-family=\"Open Sans, Arial\">
          <p>Amazing Company <br>11111 Beautiful City<br> 1212 Nice Street <br>Switzerland <br></p>
        </mj-text>
      </mj-column>
    </mj-section>
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
        return "@themes/confirmme/html/email.html.twig";
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
        return new Source("", "@themes/confirmme/html/email.html.twig", "/app/docroot/themes/confirmme/html/email.html.twig");
    }
}
