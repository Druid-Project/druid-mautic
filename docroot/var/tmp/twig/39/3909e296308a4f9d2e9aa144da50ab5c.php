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

/* @themes/paprika/html/email.mjml.twig */
class __TwigTemplate_fa77d5f2936bc00f31a442fa706c25e1 extends Template
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
  <mj-body background-color=\"#d6dde5\">
    <mj-section padding-bottom=\"20px\" padding-top=\"20\">
      <mj-column width=\"66.66666666666666%\" vertical-align=\"middle\">
        <mj-text align=\"left\" color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"11px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\" padding-top=\"0\"><span style=\"font-size: 11px\">{subject}</span></mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\" vertical-align=\"middle\">
        <mj-text align=\"right\" color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"11px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\" padding-top=\"0\"><span style=\"font-size: 11px\"><a href=\"https://mjml.io\" style=\"text-decoration: none; color: inherit;\">{webview_text}</a></span></mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#ffffff\" padding-bottom=\"20px\" padding-top=\"20\">
      <mj-column width=\"100%\" vertical-align=\"top\">
        <mj-image href=\"https://mjml.io\" src=\"";
        // line 13
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })())) . "/assets/logo.jpg"), null, null, true);
        yield "\" alt=\"Paprika logo\" align=\"center\" border=\"none\" width=\"400px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
      </mj-column>
      <mj-column width=\"33.33333333333333%\" vertical-align=\"top\">
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">YELLOW PEPPER
           </mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\" vertical-align=\"top\">
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">RED PEPPER
           </mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\" vertical-align=\"top\">
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">GREEN PEPPER
           </mj-text>
      </mj-column>
    </mj-section>
    <mj-section background-color=\"#ffffff\" padding-bottom=\"10px\" padding-top=\"10\">
      <mj-column width=\"100%\" vertical-align=\"top\">
      <mj-image src=\"";
        // line 30
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 30, $this->source); })())) . "/assets/amazing_paprika.jpg"), null, null, true);
        yield "\" alt=\"Amazing Paprikas\" align=\"center\" border=\"none\" width=\"600px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
        <mj-text align=\"left\" color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\" padding-top=\"20\">
          <p><span style=\"color: green;font-weight: bold;font-size: 24px;\">LOREM IPSUM DOLOR</span></p>
          <p><span style=\"color: green;font-size: 16px;line-height: 1.5;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<br/><br/>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies</span></p>
        </mj-text>
      </mj-column>
            <mj-section>
      <mj-column>
        <mj-divider border-width=\"3px\" border-style=\"solid\" border-color=\"red\" />
      </mj-column>
    </mj-section>
      <mj-section>
        <mj-column width=\"33.33333333333333%\" vertical-align=\"top\">
          <mj-image src=\"";
        // line 43
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 43, $this->source); })())) . "/assets/p_red.png"), null, null, true);
        yield "\" alt=\"Red Pepper\" align=\"center\" border=\"none\" width=\"180px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">Lorem impsum dolor
           </mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\" vertical-align=\"top\">
        <mj-image src=\"";
        // line 48
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 48, $this->source); })())) . "/assets/p_yellow.png"), null, null, true);
        yield "\" alt=\"Yellow Pepper\" align=\"center\" border=\"none\" width=\"180px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"14px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">Lorem impsum dolor
           </mj-text>
      </mj-column>
      <mj-column width=\"33.33333333333333%\" vertical-align=\"top\">
        <mj-image src=\"";
        // line 53
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 53, $this->source); })())) . "/assets/p_green.png"), null, null, true);
        yield "\" alt=\"Green Pepper\" align=\"center\" border=\"none\" width=\"180px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">Lorem impsum dolor
           </mj-text>
      </mj-column>
      </mj-section>
      <mj-section>
        <mj-column width=\"50%\" vertical-align=\"top\">
        <mj-image src=\"";
        // line 60
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 60, $this->source); })())) . "/assets/paprikas.jpg"), null, null, true);
        yield "\" alt=\"Paprikas\" align=\"center\" border=\"none\" width=\"290px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
          </mj-column>
        <mj-column width=\"50%\" vertical-align=\"top\">
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"22px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">Lorem impsum dolor
           </mj-text>
           <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"14px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
           </mj-text>
          <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"14px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\"><a href=\"#\">Lorem impsum dolor</a>
           </mj-text>
        </mj-column>
      </mj-section>
          <mj-section>
        <mj-column width=\"50%\" vertical-align=\"top\">
        <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"22px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\" font-weight=\"bold\">Lorem impsum dolor
           </mj-text>
                  <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"14px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
           </mj-text>
          <mj-text align=\"center\" color=\"green\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"14px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\"><a href=\"#\">Lorem impsum dolor</a>
           </mj-text>
            </mj-column>mj-column>
          <mj-column width=\"50%\" vertical-align=\"top\">
          <mj-image src=\"";
        // line 81
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 81, $this->source); })())) . "/assets/paprikas.jpg"), null, null, true);
        yield "\" alt=\"More Paprikas\" align=\"center\" border=\"none\" width=\"290px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\">
            </mj-image>
        </mj-column>
      </mj-section>
      <mj-section>
      <mj-column>
        <mj-divider border-width=\"3px\" border-style=\"solid\" border-color=\"red\" />
      </mj-column>
    </mj-section>
      <mj-section background-color=\"#ffffff\" padding-bottom=\"10px\" padding-top=\"10\">
      <mj-column width=\"100%\" vertical-align=\"top\">

        <mj-text align=\"left\" color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"13px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\" padding-top=\"20\">
          <p><span style=\"color: green;font-weight: bold;font-size: 24px;\">LOREM IPSUM DOLOR</span></p>
          <p><span style=\"color: green;font-size: 16px;line-height: 1.5;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span></p>
        </mj-text>
                <mj-button background-color=\"green\" color=\"#FFFFFF\" font-size=\"13px\" align=\"center\" vertical-align=\"middle\" border=\"none\" padding=\"15px 30px\" border-radius=\"3px\" href=\"https://mjml.io\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\"
          padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"10px\" padding-top=\"10\">LEARN MORE</mj-button>
      </mj-column>
      </mj-section>
    <mj-section background-color=\"#ffffff\" padding-bottom=\"10px\" padding-top=\"10\">
      <mj-column width=\"100%\" vertical-align=\"top\">
      <mj-image src=\"";
        // line 103
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 103, $this->source); })())) . "/assets/green_paprikas.png"), null, null, true);
        yield "\" alt=\"More Green Paprikas\" align=\"center\" border=\"none\" width=\"600px\" padding-left=\"0px\" padding-right=\"0px\" padding-bottom=\"0px\" padding-top=\"0\"></mj-image>
    <mj-section background-color=\"#ffffff\" padding-bottom=\"0px\" padding-top=\"0\">
      <mj-column width=\"100%\" vertical-align=\"top\">
        <mj-social padding-top=\"20px\">
          <mj-social-element name=\"facebook\" href=\"[[SHORT_PERMALINK]]\"> </mj-social-element>
          <mj-social-element name=\"twitter\" href=\"[[SHORT_PERMALINK]]\"> </mj-social-element>
          <mj-social-element name=\"google\" href=\"[[SHORT_PERMALINK]]\"> </mj-social-element>
        </mj-social>
      </mj-column>
    </mj-section>
    <mj-section padding-bottom=\"20px\" padding-top=\"20\">
      <mj-column width=\"100%\" vertical-align=\"middle\">
        <mj-text align=\"center\" color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"11px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\" padding-top=\"0\">
          <p style=\"font-size:11px\">Spicy Company 11111 EU Planet Earth</p>
        </mj-text>
        <mj-text align=\"center\" color=\"#000000\" font-family=\"Ubuntu, Helvetica, Arial, sans-serif, Helvetica, Arial, sans-serif\" font-size=\"11px\" padding-left=\"25px\" padding-right=\"25px\" padding-bottom=\"0px\" padding-top=\"0\">
          <p style=\"font-size:11px\">{unsubscribe_text}</p>
        </mj-text>
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
        return "@themes/paprika/html/email.mjml.twig";
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
        return array (  167 => 103,  142 => 81,  118 => 60,  108 => 53,  100 => 48,  92 => 43,  76 => 30,  56 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/paprika/html/email.mjml.twig", "/app/docroot/themes/paprika/html/email.mjml.twig");
    }
}
