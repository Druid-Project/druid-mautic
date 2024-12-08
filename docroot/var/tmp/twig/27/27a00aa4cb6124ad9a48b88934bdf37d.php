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

/* @themes/skyline/html/page.html.twig */
class __TwigTemplate_ee13fcb1396c33e542d7c2d6ce104e8e extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/skyline/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div data-section-wrapper=\"1\" style=\"border-bottom: 3px solid #3bcdc3;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" class=\"w320\">
                <tr>
                    <td valign=\"top\" style=\"text-align:left;\" class=\"mobile-center\" data-slot-container=\"1\">
                        <div data-slot=\"image\">
                            <img width=\"250\" height=\"62\" src=\"";
        // line 10
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 10, $this->source); })())) . "/img/logo.gif"), null, null, true);
        yield "\">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\"  background=\"";
        // line 17
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 17, $this->source); })())) . "/img/bg.gif"), null, null, true);
        yield "\" bgcolor=\"#64594b\" valign=\"top\" style=\"background: url(";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 17, $this->source); })())) . "/img/bg.gif"), null, null, true);
        yield ") no-repeat center; background-color: #64594b; background-position: center;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" height=\"303\" class=\"w320\">
                <tr>
                    <td valign=\"middle\" style=\"vertical-align:middle; padding-right: 15px; padding-left: 15px; text-align:left;\" class=\"mobile-center\" height=\"303\" data-slot-container=\"1\">
                        <div data-slot=\"text\">
                            <h1 style=\"color: #ffffff\">WE REALLY MISS YOU!</h1><br>
                            <h2 style=\"color: #ffffff\">Like.. really, really! Please give us another chance.</h2>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"30\" width=\"530\" class=\"w290\">
                <tr>
                    <td valign=\"top\" data-slot-container=\"1\">
                        <div data-slot=\"text\">
                            <h3 style=\"text-align:center;\">Enjoy 50% off your next purchase!</h3>
                            <br>

                            <table style=\"margin: 0 auto;\" cellspacing=\"0\" cellpadding=\"8\" width=\"250\">
                                <tr>
                                    <td style=\"border: 1px solid #a1a1a1; text-align:center;\">
                                        Coupon Code: <span style=\"font-family: Courier;\">4562789498</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"8\" width=\"530\" class=\"w320\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                            <tr>
                                <td class=\"mobile-padding\" style=\"text-align:left;\" data-slot-container=\"1\">
                                    <div data-slot=\"separator\"><hr/></div>
                                    <div data-slot=\"text\">
                                        <br>
                                        We know it's only been a few months but since you've been gone, we've received a ton of amazing new products that we think you might like.
                                        <br><br>
                                        We hope you will give us another chance and come have look.
                                        <br>
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class=\"mobile-padding\" data-slot-container=\"1\">
                        <div class=\"button\" data-slot=\"button\" data-param-padding-top=\"5\" data-param-button-size=\"1\" data-param-link-text=\"Come back!\" data-param-href=\"http://\" data-param-float=\"1\" data-param-background-color=\"#3bcdc3\" data-param-color=\"ffffff\">
                            <a href=\"#\" target=\"_blank\" style=\"font-family:'Lato', Helvetica, Arial, sans-serif;font-weight:bold;font-size: 13px; color: #ffffff; text-decoration: none; text-decoration: none; padding: 12px 40px; background-color: #3bcdc3; display: inline-block;\">
                                Come back!
                            </a>
                            <div style=\"clear:both\"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"25\" width=\"100%\">
                            <tr>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div data-section-wrapper=\"1\" style=\"background-color:#c2c2c2;\">
        <center>
            <table data-section=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"530\" class=\"w320\">
                <tr>
                    <td>
                        <table cellspacing=\"0\" cellpadding=\"30\" width=\"100%\">
                            <tr>
                                <td style=\"text-align:center;\" data-slot-container=\"1\">
                                    <div data-slot=\"text\">
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 105
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 105, $this->source); })())) . "/img/twitter.gif"), null, null, true);
        yield "\" alt=\"twitter\" />
                                        </a>
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 108
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 108, $this->source); })())) . "/img/gplus.gif"), null, null, true);
        yield "\" alt=\"google plus\" />
                                        </a>
                                        <a href=\"#\">
                                            <img width=\"61\" height=\"51\" src=\"";
        // line 111
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 111, $this->source); })())) . "/img/facebook.gif"), null, null, true);
        yield "\" alt=\"facebook\" />
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <table style=\"margin:0 auto;\" cellspacing=\"0\" cellpadding=\"5\" width=\"100%\">
                                <tr>
                                    <td style=\"text-align:center; margin:0 auto;\" width=\"100%\" data-slot-container=\"1\">
                                        <div data-slot=\"image\">
                                            <a href=\"#\" style=\"text-align:center;\">
                                                <img style=\"margin:0 auto;\" width=\"123\" height=\"24\" src=\"";
        // line 127
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 127, $this->source); })())) . "/img/logo-footer.gif"), null, null, true);
        yield "\" alt=\"logo link\" />
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/skyline/html/page.html.twig";
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
        return array (  199 => 127,  180 => 111,  174 => 108,  168 => 105,  75 => 17,  65 => 10,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/skyline/html/page.html.twig", "/app/docroot/themes/skyline/html/page.html.twig");
    }
}
