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

/* @MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig */
class __TwigTemplate_b9deb6c57b2fdbf4b546a15a28f30a6e extends Template
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
            '_mobile_notification_mobileSettings_widget' => [$this, 'block__mobile_notification_mobileSettings_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_mobile_notification_mobileSettings_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__mobile_notification_mobileSettings_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  ";
        if (CoreExtension::inFilter("ios", CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 2, $this->source); })()), "platforms", [], "any", false, false, false, 2))) {
            // line 3
            yield "      <div class=\"tab-pane fade in bdr-w-0\" id=\"ios-notification-container\">
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 6
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "ios_subtitle", [], "any", false, false, false, 6), 'row');
            yield "
                  ";
            // line 7
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "ios_media", [], "any", false, false, false, 7), 'row');
            yield "
              </div>
              <div class=\"col-md-6\">
                  <div class=\"well\">
                      <h4>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced Settings"), "html", null, true);
            yield "</h4>
                      <hr />
                      ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "ios_badges", [], "any", false, false, false, 13), 'row');
            yield "
                      ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "ios_badgeCount", [], "any", false, false, false, 14), 'row');
            yield "
                      ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "ios_sound", [], "any", false, false, false, 15), 'row');
            yield "
                      ";
            // line 16
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "ios_contentAvailable", [], "any", false, false, false, 16), 'label');
            yield "
                      ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "ios_contentAvailable", [], "any", false, false, false, 17), 'row');
            yield "
                      ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "ios_mutableContent", [], "any", false, false, false, 18), 'label');
            yield "
                      ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "ios_mutableContent", [], "any", false, false, false, 19), 'row');
            yield "
                  </div>
              </div>
          </div>
      </div>
  ";
        }
        // line 25
        yield "  ";
        if (CoreExtension::inFilter("android", CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationSettings"]) || array_key_exists("integrationSettings", $context) ? $context["integrationSettings"] : (function () { throw new RuntimeError('Variable "integrationSettings" does not exist.', 25, $this->source); })()), "platforms", [], "any", false, false, false, 25))) {
            // line 26
            yield "      <div class=\"tab-pane fade in bdr-w-0\" id=\"android-notification-container\">
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "android_small_icon", [], "any", false, false, false, 29), 'row');
            yield "
                  ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "android_large_icon", [], "any", false, false, false, 30), 'row');
            yield "
                  ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "android_big_picture", [], "any", false, false, false, 31), 'row');
            yield "
              </div>
              <div class=\"col-md-6\">
                  <div class=\"well\">
                      <h4>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced Settings"), "html", null, true);
            yield "</h4>
                      <hr />
                      ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "android_sound", [], "any", false, false, false, 37), 'row');
            yield "
                      ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "android_group_key", [], "any", false, false, false, 38), 'row');
            yield "
                      ";
            // line 39
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "android_led_color", [], "any", false, false, false, 39), 'row');
            yield "
                      ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "android_accent_color", [], "any", false, false, false, 40), 'row');
            yield "
                      ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "android_lockscreen_visibility", [], "any", false, false, false, 41), 'row');
            yield "
                  </div>
              </div>
          </div>
      </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  134 => 35,  127 => 31,  123 => 30,  119 => 29,  114 => 26,  111 => 25,  102 => 19,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  73 => 11,  66 => 7,  62 => 6,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/FormTheme/MobileNotification/_mobile_notification_mobileSettings_widget.html.twig");
    }
}
