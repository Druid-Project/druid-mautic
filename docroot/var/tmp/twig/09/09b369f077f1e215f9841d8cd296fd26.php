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

/* @MauticNotification/MobileNotification/form.html.twig */
class __TwigTemplate_8ae5b20e6e1c7915eeeef0d5e0567d54 extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 11
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), ["@MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticNotification/MobileNotification/form.html.twig", 11);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "mobile_notification";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)) {
            // line 17
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.mobile.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)]), "html", null, true);
            yield "
  ";
        } else {
            // line 19
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.mobile.header.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "  ";
        $context["integrationSettings"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 24, $this->source); })()), "integrationSettings", [], "any", false, false, false, 24), "featureSettings", [], "any", false, false, false, 24);
        // line 25
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
  <div class=\"box-layout\">
      <div class=\"col-md-9 height-auto\">
          <div class=\"row\">
              <div class=\"col-xs-12\">

                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs nav-tabs-contained\">
                      <li class=\"active\"><a href=\"#notification-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a></li>
                      <li><a href=\"#data-notification-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.tab.data"), "html", null, true);
        yield "</a></li>
                      ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["integrationSettings"] ?? null), "platforms", [], "any", true, true, false, 35) && CoreExtension::inFilter("ios", CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 35, $this->source); })()), "platforms", [], "any", false, false, false, 35)))) {
            // line 36
            yield "                          <li><a href=\"#ios-notification-container\" role=\"tab\" data-toggle=\"tab\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.tab.ios"), "html", null, true);
            yield "</a></li>
                      ";
        }
        // line 38
        yield "                      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["integrationSettings"] ?? null), "platforms", [], "any", true, true, false, 38) && CoreExtension::inFilter("android", CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 38, $this->source); })()), "platforms", [], "any", false, false, false, 38)))) {
            // line 39
            yield "                          <li><a href=\"#android-notification-container\" role=\"tab\" data-toggle=\"tab\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.tab.android"), "html", null, true);
            yield "</a></li>
                      ";
        }
        // line 41
        yield "                  </ul>
                  <!--/ tabs controls -->

                  <!-- tabs content -->
                  <div class=\"tab-content pa-md\">
                      <div class=\"tab-pane fade in active bdr-w-0\" id=\"notification-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), 'row');
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "heading", [], "any", false, false, false, 50), 'row');
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "url", [], "any", false, false, false, 51), 'row');
        // line 52
        yield "</div>
                              <div class=\"col-md-6\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "message", [], "any", false, false, false, 53), 'row');
        yield "</div>
                          </div>
                      </div>
                      <div class=\"tab-pane fade in bdr-w-0\" id=\"data-notification-container\">
                          <div class=\"row\">
                              <div class=\"col-md-6\">";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "mobileSettings", [], "any", false, false, false, 58), "additional_data", [], "any", false, false, false, 58), 'row');
        yield "</div>
                          </div>
                      </div>
                      ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mobileSettings", [], "any", false, true, false, 61), "ios_sound", [], "any", true, true, false, 61) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mobileSettings", [], "any", false, true, false, 61), "android_sound", [], "any", true, true, false, 61))) {
            // line 62
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "mobileSettings", [], "any", false, false, false, 62), 'widget', ["integrationSettings" => (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 62, $this->source); })())]);
            yield "
                      ";
        }
        // line 64
        yield "                  </div>
                  <!--/ tabs content -->

              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto bdr-l\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "category", [], "any", false, false, false, 72), 'row');
        yield "
              ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "language", [], "any", false, false, false, 73), 'row');
        yield "
              <hr />
              ";
        // line 75
        yield from         $this->loadTemplate("@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig", "@MauticNotification/MobileNotification/form.html.twig", 75)->unwrap()->yield($context);
        // line 76
        yield "              <div class=\"hide\">
                  ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "isPublished", [], "any", false, false, false, 77), 'row');
        yield "
                  ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "publishUp", [], "any", false, false, false, 78), 'row');
        yield "
                  ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "publishDown", [], "any", false, false, false, 79), 'row');
        yield "
                  ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'rest');
        yield "
              </div>
          </div>
      </div>
  </div>
  ";
        // line 85
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticNotification/MobileNotification/form.html.twig";
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
        return array (  223 => 85,  215 => 80,  211 => 79,  207 => 78,  203 => 77,  200 => 76,  198 => 75,  193 => 73,  189 => 72,  179 => 64,  173 => 62,  171 => 61,  165 => 58,  157 => 53,  154 => 52,  152 => 51,  150 => 50,  148 => 49,  139 => 41,  133 => 39,  130 => 38,  124 => 36,  122 => 35,  118 => 34,  114 => 33,  102 => 25,  99 => 24,  92 => 23,  83 => 19,  77 => 17,  74 => 16,  67 => 15,  56 => 13,  51 => 11,  49 => 9,  42 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/MobileNotification/form.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/MobileNotification/form.html.twig");
    }
}
