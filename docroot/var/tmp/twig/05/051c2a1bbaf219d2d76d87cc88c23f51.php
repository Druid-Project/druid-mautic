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

/* @themes/blank/html/email.html.twig */
class __TwigTemplate_1ab919d6f7c23135f064c3c71eb58b56 extends Template
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
      <mj-attributes>
      </mj-attributes>
      <!-- CSS-STYLE -->
      <mj-style inline=\"inline\"> p, li {margin:0 !important; padding:0; line-height:1.4em; font-family:'Open Sans', Helvetica, Arial, sans-serif;}
      </mj-style>
    </mj-head>
    <!-- BODY -->
    <mj-body>
      <mj-section background-color=\"#ffffff\">
        <mj-column width=\"550px\">
            <mj-spacer>
            </mj-spacer>
            <mj-spacer>
            </mj-spacer>
          <mj-text font-size=\"28px\" font-weight=\"700\">
            <p>Hello World!
            </p>
          </mj-text>
          <mj-text font-size=\"14px\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid officia consequatur placeat reprehenderit excepturi, tempore, id quos quaerat ab fuga.
            </p>
            <p>
              <br data-cke-filler=\"true\">
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, voluptate.
            </p>
            <p>
              <br data-cke-filler=\"true\">
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos alias rerum nemo ducimus modi perspiciatis.
            </p>
          </mj-text>
          <mj-spacer></mj-spacer>
          <mj-text font-size=\"11px\" color=\"#6d6d6d\">
            <p>{unsubscribe_text} | {webview_text}</p>
          </mj-text>
        <mj-spacer></mj-spacer>
        <mj-spacer></mj-spacer>
        </mj-column>
      </mj-section>
    </mj-body>
  </mjml>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/blank/html/email.html.twig";
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
        return new Source("", "@themes/blank/html/email.html.twig", "/app/docroot/themes/blank/html/email.html.twig");
    }
}
