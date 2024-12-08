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

/* @themes/attract/html/email.html.twig */
class __TwigTemplate_4fb463309c1681ab76b6db78278df249 extends Template
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
\t<mj-head>
\t  <mj-style inline=\"inline\">
\t\tp, li {margin:0 !important; padding:0; line-height:1.4em;}
\t  </mj-style>
\t</mj-head>
\t<mj-body background-color=\"#f4f4f4\">
\t  <!-- Header Part Start -->
\t  <mj-section background-color=\"#FFFFFF\" padding=\"25px 0\">
\t\t<mj-column width=\"50%\">
\t\t  <mj-image src=\"";
        // line 11
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\" align=\"left\">
\t\t  </mj-image>
\t\t</mj-column>
\t\t<mj-column width=\"50%\">
\t\t  <mj-text align=\"right\"><p>{webview_text}</p></mj-text>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Header Part End -->

\t  <!-- Banner Part Start -->
\t  <mj-section padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\">
\t\t<mj-column width=\"100%\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\">
\t\t  <mj-image src=\"";
        // line 23
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 23, $this->source); })())) . "/assets/banner.jpg"), null, null, true);
        yield "\" width=\"600px\" height=\"400px\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\">
\t\t  </mj-image>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Banner Part End -->

\t  <!-- Introduction Part Start -->
\t  <mj-section background-color=\"#002b5c\" padding=\"60px 0\">
\t\t<mj-column width=\"500px\">
\t\t\t<mj-spacer></mj-spacer>
\t\t  <mj-text align=\"center\" font-size=\"16px\" line-height=\"16px\" color=\"#fff\" font-weight=\"normal\" padding-bottom=\"0px\">
\t\t\t<p>Find your dream home today with</p>
\t\t  </mj-text>
\t\t  <mj-text align=\"center\" font-size=\"40px\" line-height=\"60px\" color=\"#fff\" font-weight=\"bold\" padding-top=\"0px\">
\t\t\t<p>HomeFinder</p>
\t\t  </mj-text>
\t\t  <mj-button background-color=\"#004080\" font-size=\"14px\" font-weight=\"bold\" border-radius=\"50px\" inner-padding=\"12px 30px\" href=\"#\">
\t\t\t<p>Explore our listings</p>
\t\t  </mj-button>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Introduction Part End -->

\t  <!-- Featured Listings Part Start -->
\t  <mj-section background-color=\"#FFFFFF\" padding=\"50px 0\">
\t\t<mj-column width=\"500px\">
\t\t\t<mj-spacer></mj-spacer>
\t\t  <mj-text font-size=\"48px\" line-height=\"48px\" color=\"#000000\" font-weight=\"bold\" padding-top=\"0px\">
\t\t\t<p>Featured Listings</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"30px\" line-height=\"30px\" color=\"#000000\">
\t\t\t<p>Explore our premium properties available now</p>
\t\t  </mj-text>
\t\t</mj-column>
\t\t<!-- Example of a featured listing -->
\t\t<mj-column width=\"250px\">
\t\t  <!-- Replace with an image of the property -->
\t\t  <mj-image src=\"";
        // line 61
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 61, $this->source); })())) . "/assets/listing1.jpg"), null, null, true);
        yield "\" width=\"215px\" height=\"180px\" border-radius=\"12px\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#000000\"><p>Sunset Villa</p></mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"16px\" color=\"#004080\"><p>View Listing</p></mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"250px\">
\t\t  <mj-image src=\"";
        // line 67
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 67, $this->source); })())) . "/assets/listing2.jpg"), null, null, true);
        yield "\" width=\"215px\" height=\"180px\" border-radius=\"12px\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#000000\"><p>City Apartment</p></mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"16px\" color=\"#004080\"><p>View Listing</p></mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"500px\">
\t\t  <mj-image src=\"";
        // line 73
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 73, $this->source); })())) . "/assets/listing3.jpg"), null, null, true);
        yield "\" width=\"450px\" height=\"220px\" border-radius=\"12px\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"34px\" color=\"#000000\">
\t\t\t<p>Beachside Bungalow: Perfect for Coastal Living</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"16px\" color=\"#004080\"><p>View Listing</p></mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Featured Listings Part End -->

\t  <!-- Statistics Part Start -->
\t  <mj-section background-color=\"#e0e0e0\" padding=\"75px 0\">
\t\t<mj-column width=\"500px\">
\t\t\t<mj-spacer></mj-spacer>
\t\t  <mj-text font-size=\"30px\" line-height=\"40px\" color=\"#000000\">
\t\t\t<p>Our achievements highlight our commitment to excellence.</p>
\t\t  </mj-text>
\t\t</mj-column>
\t\t<!-- Replace with relevant statistics -->
\t\t<mj-column width=\"166px\">
\t\t  <mj-text font-size=\"30px\" line-height=\"33px\" color=\"#000000\" font-weight=\"bold\"><p>150+</p></mj-text>
\t\t  <mj-text font-size=\"18px\" line-height=\"18px\" color=\"#000000\" padding-top=\"0px\">
\t\t\t<p>Listings</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"166px\">
\t\t  <mj-text font-size=\"30px\" line-height=\"33px\" color=\"#000000\" font-weight=\"bold\"><p>50+</p></mj-text>
\t\t  <mj-text font-size=\"18px\" line-height=\"18px\" color=\"#000000\" padding-top=\"0px\">
\t\t\t<p>Agents</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"166px\">
\t\t  <mj-text font-size=\"30px\" line-height=\"33px\" color=\"#000000\" font-weight=\"bold\"><p>300+</p></mj-text>
\t\t  <mj-text font-size=\"18px\" line-height=\"18px\" color=\"#000000\" padding-top=\"0px\">
\t\t\t<p>Sold Properties</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Statistics Part End -->

\t\t<!-- Gallery Part Start -->
\t\t<mj-section padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\">
\t\t<mj-column width=\"280px\" padding=\"0\">
\t\t\t<!-- Replace with images showcasing your properties or team -->
\t\t\t<mj-image src=\"";
        // line 120
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 120, $this->source); })())) . "/assets/gallery1.jpg"), null, null, true);
        yield "\" width=\"280px\" height=\"400px\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\"></mj-image>
\t\t</mj-column>
\t\t<mj-column width=\"320px\" padding=\"0\">
\t\t\t<mj-image src=\"";
        // line 123
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 123, $this->source); })())) . "/assets/gallery2.jpg"), null, null, true);
        yield "\" width=\"320px\" height=\"200px\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\"></mj-image>
\t\t\t<mj-image src=\"";
        // line 124
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 124, $this->source); })())) . "/assets/gallery3.jpg"), null, null, true);
        yield "\" width=\"320px\" height=\"200px\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\"></mj-image>
\t\t</mj-column>
\t\t</mj-section>
\t\t<!-- Gallery Part End -->

\t\t\t  <!-- Latest Updates Part Start -->
\t  <mj-section background-color=\"#FFFFFF\" padding=\"50px 0\">
\t\t<mj-column width=\"500px\">
\t\t  <!-- Section heading for updates -->
\t\t  <mj-spacer></mj-spacer>
\t\t  <mj-text font-size=\"14px\" line-height=\"24px\" color=\"#000000\" text-transform=\"uppercase\" padding-bottom=\"0px\">
\t\t\t<p>What's new?</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"48px\" line-height=\"48px\" color=\"#000000\" font-weight=\"bold\" padding-top=\"0px\">
\t\t\t<p>Updates</p>
\t\t  </mj-text>
\t\t</mj-column>
\t\t<!-- Example update -->
\t\t<mj-column width=\"250px\">
\t\t  <mj-text font-size=\"16px\" line-height=\"16px\" color=\"#004080\" padding-bottom=\"0px\">
\t\t\t<p>15 September 2024</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"20px\" color=\"#000\"><p>New Neighborhood Open Houses</p></mj-text>
\t\t  <mj-text font-size=\"14px\" color=\"#6f6f6f\" padding-top=\"0px\">
\t\t\t<p>Join us for exclusive open house events in the newly developed Riverside area.</p>
\t\t  </mj-text>
\t\t  <!-- Button to read more about the update -->
\t\t  <mj-button background-color=\"#004080\" font-size=\"12px\" font-weight=\"bold\" border-radius=\"50px\" inner-padding=\"10px 20px\" align=\"left\" href=\"#\">
\t\t\t<p>Read more</p>
\t\t  </mj-button>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<!-- Example image related to the update -->
\t\t<mj-column width=\"250px\">
\t\t  <mj-image src=\"";
        // line 158
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 158, $this->source); })())) . "/assets/update1.jpg"), null, null, true);
        yield "\" width=\"240px\" height=\"165px\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\" border-radius=\"12px\"></mj-image>
\t\t</mj-column>
\t  </mj-section>
\t  <mj-section background-color=\"#e0e0e0\" padding=\"50px 0\">
\t\t<mj-column width=\"250px\">
\t\t  <mj-image src=\"";
        // line 163
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 163, $this->source); })())) . "/assets/update2.jpg"), null, null, true);
        yield "\" width=\"240px\" height=\"165px\" padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\" border-radius=\"12px\"></mj-image>
\t\t</mj-column>
\t\t<mj-column width=\"250px\">
\t\t  <mj-text font-size=\"16px\" line-height=\"16px\" color=\"#004080\" padding-bottom=\"0px\">
\t\t\t<p>16 September 2024</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"20px\" color=\"#000\"><p>Webinar on Real Estate Investing</p></mj-text>
\t\t  <mj-text font-size=\"14px\" color=\"#6f6f6f\" padding-top=\"0px\">
\t\t\t<p>Join our experts for insights on maximizing your real estate investments.</p>
\t\t  </mj-text>
\t\t  <mj-button background-color=\"#004080\" font-size=\"12px\" font-weight=\"bold\" border-radius=\"50px\" inner-padding=\"10px 20px\" align=\"left\" href=\"#\">
\t\t\t<p>Reserve your spot</p>
\t\t  </mj-button>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Latest Updates Part End -->

\t  <!-- Services Part Start -->
\t  <mj-section background-color=\"#FFFFFF\" padding=\"95px 0\">
\t\t<mj-column width=\"500px\">
\t\t\t<mj-spacer></mj-spacer>
\t\t  <mj-text font-size=\"14px\" line-height=\"24px\" color=\"#000000\" text-transform=\"uppercase\" padding-bottom=\"0px\">
\t\t\t<p>Our Expertise</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"48px\" line-height=\"48px\" color=\"#000000\" font-weight=\"bold\" padding-top=\"0px\">
\t\t\t<p>Services We Offer</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<!-- Highlight different real estate services -->
\t\t<mj-column width=\"250px\" padding-top=\"20px\">
\t\t  <mj-image src=\"";
        // line 195
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 195, $this->source); })())) . "/assets/icon1.png"), null, null, true);
        yield "\" width=\"32px\" height=\"32px\" align=\"left\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#000000\"><p>Residential Sales</p></mj-text>
\t\t  <mj-text font-size=\"15px\" color=\"#6f6f6f\" line-height=\"24px\" padding-top=\"0px\">
\t\t\t<p>Helping you find your dream home with personalized service.</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"250px\" padding-top=\"20px\">
\t\t  <mj-image src=\"";
        // line 203
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 203, $this->source); })())) . "/assets/icon2.png"), null, null, true);
        yield "\" width=\"32px\" height=\"32px\" align=\"left\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#000000\"><p>Commercial Leasing</p></mj-text>
\t\t  <mj-text font-size=\"15px\" color=\"#6f6f6f\" line-height=\"24px\" padding-top=\"0px\">
\t\t\t<p>Providing top-tier commercial spaces to boost your business.</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"250px\" padding-top=\"20px\">
\t\t  <mj-image src=\"";
        // line 211
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 211, $this->source); })())) . "/assets/icon3.png"), null, null, true);
        yield "\" width=\"32px\" height=\"32px\" align=\"left\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#000000\"><p>Property Management</p></mj-text>
\t\t  <mj-text font-size=\"15px\" color=\"#6f6f6f\" line-height=\"24px\" padding-top=\"0px\">
\t\t\t<p>Comprehensive management services to maintain and enhance your property value.</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"250px\" padding-top=\"20px\">
\t\t  <mj-image src=\"";
        // line 219
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 219, $this->source); })())) . "/assets/icon4.png"), null, null, true);
        yield "\" width=\"32px\" height=\"32px\" align=\"left\"></mj-image>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#000000\"><p>Real Estate Consulting</p></mj-text>
\t\t  <mj-text font-size=\"15px\" color=\"#6f6f6f\" line-height=\"24px\" padding-top=\"0px\">
\t\t\t<p>Expert advice to navigate the real estate market effectively.</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Services Part End -->

\t  <!-- Why Choose Us Part Start -->
\t  <mj-section padding-top=\"0px\" padding-bottom=\"0px\" padding-right=\"0px\" padding-left=\"0px\">
\t\t<!-- Left Column -->
\t\t<mj-column width=\"50%\" background-color=\"#002b5c\" padding=\"30px\">
\t\t  <!-- Explain why customers should choose your real estate services -->
\t\t  <mj-text font-size=\"15px\" line-height=\"15px\" color=\"#fff\" align=\"center\">
\t\t\t<p>Why choose us</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#fff\" font-weight=\"bold\" align=\"center\">
\t\t\t<p>HomeFinder Advantage</p>
\t\t  </mj-text>
\t\t  <!-- Button to learn more about your services -->
\t\t  <mj-button background-color=\"#004080\" font-size=\"12px\" font-weight=\"bold\" border-radius=\"50px\" inner-padding=\"10px 20px\" href=\"#\">
\t\t\t<p>Learn more</p>
\t\t  </mj-button>
\t\t</mj-column>
\t\t<!-- Right Column -->
\t\t<mj-column width=\"50%\" background-color=\"#004080\" padding=\"30px\">
\t\t  <!-- Highlight additional benefits or features -->
\t\t  <mj-text font-size=\"15px\" line-height=\"15px\" color=\"#fff\" align=\"center\">
\t\t\t<p>Your trusted partner</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"24px\" line-height=\"24px\" color=\"#fff\" font-weight=\"bold\" align=\"center\">
\t\t\t<p>24/7 customer support</p>
\t\t  </mj-text>
\t\t  <!-- Button to contact your support team -->
\t\t  <mj-button background-color=\"#002b5c\" font-size=\"12px\" font-weight=\"bold\" border-radius=\"50px\" inner-padding=\"10px 20px\" href=\"#\">
\t\t\t<p>Contact us</p>
\t\t  </mj-button>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Why Choose Us Part End -->

<!-- Clients Part Start -->
<mj-section background-color=\"#FFFFFF\" padding=\"50px 0\">
\t<mj-column width=\"500px\">
\t  <!-- Section heading for clients -->
\t  <mj-spacer></mj-spacer>
\t  <mj-text align=\"center\" font-size=\"14px\" line-height=\"18px\" color=\"#000000\" text-transform=\"uppercase\" padding-bottom=\"0px\">
\t\t<p>Our Valued Clients</p>
\t  </mj-text>
\t</mj-column>
\t<!-- Replace with logos of your partner companies or satisfied clients -->
\t<mj-column width=\"166px\">
\t  <mj-image src=\"";
        // line 273
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\"></mj-image>
\t</mj-column>
\t<mj-column width=\"166px\">
\t  <mj-image src=\"";
        // line 276
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\"></mj-image>
\t</mj-column>
\t<mj-column width=\"166px\">
\t  <mj-image src=\"";
        // line 279
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/@defaults/placeholder-logo.png", null, null, true);
        yield "\" width=\"70px\"></mj-image>
\t</mj-column>
  </mj-section>
  <!-- Clients Part End -->

\t  <!-- Testimonial Part Start -->
\t  <mj-section background-color=\"#FFFFFF\" padding=\"50px 0\">
\t\t<mj-column width=\"500px\">
\t\t\t<mj-spacer></mj-spacer>
\t\t  <mj-text font-size=\"14px\" line-height=\"24px\" color=\"#000000\" text-transform=\"uppercase\" padding-bottom=\"0px\">
\t\t\t<p>What our clients think</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"48px\" line-height=\"48px\" color=\"#000000\" font-weight=\"bold\">
\t\t\t<p>Testimonials</p>
\t\t  </mj-text>
\t\t  <mj-divider border-width=\"1px\" padding=\"45px 0\"></mj-divider>
\t\t</mj-column>
\t\t<!-- Example testimonial -->
\t\t<mj-column width=\"500px\">
\t\t  <mj-text font-size=\"18px\" line-height=\"26px\" color=\"#000000\">
\t\t\t<p>Their expertise helped us find the perfect home quickly!</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"18px\" line-height=\"18px\" color=\"#000000\" font-weight=\"bold\">
\t\t\t<p>Sarah L.</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"16px\" line-height=\"16px\" color=\"#000000\">
\t\t\t<p>Homeowner</p>
\t\t  </mj-text>
\t\t</mj-column>
\t\t<mj-column width=\"250px\" padding-top=\"20px\">
\t\t  <mj-image src=\"";
        // line 309
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 309, $this->source); })())) . "/assets/quote1.png"), null, null, true);
        yield "\" width=\"30px\" height=\"22px\" align=\"left\"></mj-image>
\t\t  <mj-text font-size=\"16px\" color=\"#000000\">
\t\t\t<p>Exceptional service and support throughout our home buying journey!</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"14px\" color=\"#000000\" font-weight=\"bold\">
\t\t\t<p>John D.</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"18px\" color=\"#000000\">
\t\t\t<p>Investor</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t\t<mj-column width=\"250px\" padding-top=\"20px\">
\t\t  <mj-image src=\"";
        // line 322
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 322, $this->source); })())) . "/assets/quote1.png"), null, null, true);
        yield "\" width=\"30px\" height=\"22px\" align=\"left\"></mj-image>
\t\t  <mj-text font-size=\"16px\" color=\"#000000\">
\t\t\t<p>A seamless experience from start to finish. Highly recommend!</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"14px\" color=\"#000000\" font-weight=\"bold\">
\t\t\t<p>Linda K.</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"14px\" line-height=\"18px\" color=\"#000000\">
\t\t\t<p>First-time Buyer</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Testimonial Part End -->

\t  <!-- Greeting Part Start -->
\t  <mj-section background-color=\"#002b5c\" padding=\"50px 0\">
\t\t<mj-column width=\"500px\">
\t\t\t<mj-spacer></mj-spacer>
\t\t  <mj-text font-size=\"24px\" line-height=\"28px\" color=\"#fff\">
\t\t\t<p>We're glad you're here!</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"16px\" color=\"#fff\">
\t\t\t<p>Thank you for choosing HomeFinder. We are committed to helping you navigate the real estate market with ease and confidence.</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"13px\" color=\"#fff\" font-weight=\"600\">
\t\t\t<p>Mark T. Johnson, Client Relations Manager</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Greeting Part End -->

\t  <!-- Footer Part Start -->
\t  <mj-section padding=\"0\" padding-top=\"0\" padding-bottom=\"20px\" background-color=\"#ffffff\">
\t\t<mj-column>
\t\t  <mj-spacer></mj-spacer>
\t\t  <!-- Social media links: Replace href attributes with your social media URLs -->
\t\t  <mj-social font-size=\"12px\" icon-size=\"30px\" border-radius=\"12px\" mode=\"horizontal\">
\t\t\t<mj-social-element name=\"facebook\" background-color=\"#000000\" border-radius=\"14px\" padding-right=\"10px\">
\t\t\t</mj-social-element>
\t\t\t<mj-social-element name=\"instagram\" background-color=\"#000000\" border-radius=\"14px\" padding=\"0 10px\">
\t\t\t</mj-social-element>
\t\t\t<mj-social-element name=\"youtube\" background-color=\"#000000\" border-radius=\"14px\" padding-left=\"10px\">
\t\t\t</mj-social-element>
\t\t  </mj-social>
\t\t  <mj-spacer></mj-spacer>
\t\t  <!-- Replace with your company's address and contact information -->
\t\t  <mj-text font-family=\"Ubuntu, Helvetica, Arial, sans-serif\" line-height=\"1.5\" align=\"center\" padding=\"0\" font-size=\"12px\">
\t\t\t<p>HomeFinder</p>
\t\t\t<p>123 Realty Lane, Suite 100</p>
\t\t\t<p>Metropolis, 54321</p>
\t\t\t<p>Country</p>
\t\t  </mj-text>
\t\t  <mj-spacer></mj-spacer>
\t\t  <!-- Unsubscribe information: Customize the unsubscribe text as needed -->
\t\t  <mj-text font-size=\"11px\" align=\"center\" color=\"#6d6d6d\">
\t\t\t<p>You’re receiving this email because you opted in via our website.</p>
\t\t\t<p>Want to change how you receive these emails?</p>
\t\t  </mj-text>
\t\t  <mj-text font-size=\"11px\" align=\"center\" color=\"#6d6d6d\">
\t\t\t<p>
\t\t\t  <span data-fr-verified=\"true\"><span data-fr-verified=\"true\" class=\"atwho-inserted\">{unsubscribe_text}</span></span>
\t\t\t</p>
\t\t  </mj-text>
\t\t  <mj-spacer height=\"60px\"></mj-spacer>
\t\t</mj-column>
\t  </mj-section>
\t  <!-- Footer Part End -->
\t</mj-body>
  </mjml>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/attract/html/email.html.twig";
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
        return array (  419 => 322,  403 => 309,  370 => 279,  364 => 276,  358 => 273,  301 => 219,  290 => 211,  279 => 203,  268 => 195,  233 => 163,  225 => 158,  188 => 124,  184 => 123,  178 => 120,  128 => 73,  119 => 67,  110 => 61,  69 => 23,  54 => 11,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/attract/html/email.html.twig", "/app/docroot/themes/attract/html/email.html.twig");
    }
}
