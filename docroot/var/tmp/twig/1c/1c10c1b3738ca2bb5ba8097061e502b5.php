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

/* @themes/fresh-center/html/page.html.twig */
class __TwigTemplate_b9f4dfa64e36a962d889c79eed78611c extends Template
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
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/fresh-center/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<header data-section-wrapper=\"1\" id=\"top\">
  <div data-section=\"1\">
    <div data-slot-container=\"1\">
      <div data-slot=\"text\">
        <img class=\"logo\" src=\"";
        // line 7
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 7, $this->source); })())) . "/assets/logo_white.svg"));
        yield "\">
      </div>
    </div>
  </div>
</header>
<section data-section-wrapper=\"1\" class=\"hero\" style=\"background-color: #00bf9a;\">
  <div data-section=\"1\">
    <div class=\"background\">
      <div data-slot-container=\"1\">
        <div data-slot=\"text\">
          <img class=\"background-image\" src=\"";
        // line 17
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 17, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        yield "\">
        </div>
      </div>
    </div>
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"c6 s3 form-container\">
          <h1 class=\"txtCenter\">H1 Header</h1>
          <div class=\"form white\">
            <img src=\"";
        // line 26
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 26, $this->source); })())) . "/assets/img_form-demo.jpg"));
        yield "\" style=\"margin: 0 auto;\">
            <!-- PLACE FORM HERE -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"customers\" style=\"background-color: #ffffff;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Customers</h2>
        <div class=\"logos\">
          <div class=\"logo-container\">
            <img class=\"logo\" src=\"";
        // line 41
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 41, $this->source); })())) . "/assets/logo_demo-company-i.svg"));
        yield "\">
          </div>
          <div class=\"logo-container\">
            <img class=\"logo\" src=\"";
        // line 44
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 44, $this->source); })())) . "/assets/logo_demo-company-ii.svg"));
        yield "\">
          </div>
          <div class=\"logo-container\">
            <img class=\"logo\" src=\"";
        // line 47
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 47, $this->source); })())) . "/assets/logo_demo-company-iii.svg"));
        yield "\">
          </div>
          <div class=\"logo-container\">
            <img class=\"logo\" src=\"";
        // line 50
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 50, $this->source); })())) . "/assets/logo_demo-company-iv.svg"));
        yield "\">
          </div>
          <div class=\"logo-container\">
            <img class=\"logo\" src=\"";
        // line 53
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 53, $this->source); })())) . "/assets/logo_demo-company-v.svg"));
        yield "\">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"details\" style=\"background-color: #ffffff;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Details</h2>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
        <div class=\"c3 detail\">
          <p><strong>Detail:</strong> Lorem Ipsum</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"speakers\" style=\"background-color: #ffffff;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Speakers</h2>
        <div class=\"speakers-container\">
          <div class=\"speaker\">
            <div class=\"speaker-image\">
              <img src=\"";
        // line 101
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 101, $this->source); })())) . "/assets/photo_man.jpg"));
        yield "\">
            </div>
            <div class=\"speaker-details\">
              <h3>H3 Name</h3>
              <p>Details about speaker</p>
              <p>More details about speaker</p>
            </div>
          </div>
          <div class=\"speaker\">
            <div class=\"speaker-image\">
              <img src=\"";
        // line 111
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 111, $this->source); })())) . "/assets/photo_man.jpg"));
        yield "\">
            </div>
            <div class=\"speaker-details\">
              <h3>H3 Name</h3>
              <p>Details about speaker</p>
              <p>More details about speaker</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"grid\" style=\"background-color: #00bf9a;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Grid</h2>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 131
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 131, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        yield "\">
            <img class=\"icon\" src=\"";
        // line 132
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 132, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 137
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 137, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 144
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 144, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 149
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 149, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 154
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 154, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        yield "\">
            <img class=\"icon\" src=\"";
        // line 155
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 155, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 160
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 160, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        yield "\">
            <img class=\"icon\" src=\"";
        // line 161
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 161, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
        <div class=\"grid-container\">
          <div class=\"grid-item\">
            <img class=\"grid-background-image\" src=\"";
        // line 168
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 168, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        yield "\">
            <img class=\"icon\" src=\"";
        // line 169
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 169, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 174
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 174, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
          <div class=\"grid-item\">
            <img class=\"icon\" src=\"";
        // line 179
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 179, $this->source); })())) . "/assets/icon_grid.svg"));
        yield "\">
            <h3>H3 Grid Item</h3>
            <p>Grid item details</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" style=\"background-color: #3f3f45;\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2 class=\"green\">H2 About Company</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"testimonials\" style=\"background-color: #3f3f45;\">
  <div data-slot=\"text\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"testimonials-container\">
          <div class=\"testimonial\">
            <div class=\"c12 testimonial-quote\">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula.”</p>
            </div>
            <div class=\"testimonial-details\">
              <div class=\"c5\">
                  <div class=\"speaker-image\">
                      <img src=\"";
        // line 210
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 210, $this->source); })())) . "/assets/photo_man.jpg"));
        yield "\">
                  </div>
              </div>
              <div class=\"c7 details\">
                <h3>H3 Name</h3>
                <p>Details about speaker</p>
                <p>More details about speaker</p>
              </div>
            </div>
          </div>
          <div class=\"testimonial\">
            <div class=\"c12 testimonial-quote\">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula.”</p>
            </div>
            <div class=\"testimonial-details\">
              <div class=\"c5\">
                  <div class=\"speaker-image\">
                      <img src=\"";
        // line 227
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 227, $this->source); })())) . "/assets/photo_man.jpg"));
        yield "\">
                  </div>
              </div>
              <div class=\"c7 details\">
                <h3>H3 Name</h3>
                <p>Details about speaker</p>
                <p>More details about speaker</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" style=\"background-color: #00bf9a;\" class=\"thank-you\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h1>H1 Thank You</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
        <a class=\"button\">Get Your Asset</a>
      </div>
    </div>
  </div>
</section>
<footer data-section-wrapper=\"1\" id=\"bottom\">
  <div data-section=\"1\">
    <div class=\"container\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <div class=\"c6 logo-container\">
          <img class=\"logo\" src=\"";
        // line 258
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 258, $this->source); })())) . "/assets/logo_white.svg"));
        yield "\">
        </div>
        <div class=\"c6\">
          <p class=\"copyright\">&copy; Mautic 2017</p>
        </div>
      </div>
    </div>
  </div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-center/html/page.html.twig";
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
        return array (  389 => 258,  355 => 227,  335 => 210,  301 => 179,  293 => 174,  285 => 169,  281 => 168,  271 => 161,  267 => 160,  259 => 155,  255 => 154,  247 => 149,  239 => 144,  229 => 137,  221 => 132,  217 => 131,  194 => 111,  181 => 101,  130 => 53,  124 => 50,  118 => 47,  112 => 44,  106 => 41,  88 => 26,  76 => 17,  63 => 7,  57 => 3,  50 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/fresh-center/html/page.html.twig", "/app/docroot/themes/fresh-center/html/page.html.twig");
    }
}
