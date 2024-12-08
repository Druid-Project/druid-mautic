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

/* @MauticNotification/Notification/form.html.twig */
class __TwigTemplate_c68a8c6802ffafc7bfbf1ec9427cdf64 extends Template
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
        // line 8
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticNotification/Notification/form.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "notification";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) {
            // line 14
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14)]), "html", null, true);
            yield "
  ";
        } else {
            // line 16
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.header.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        yield "
    <div class=\"box-layout\">
        <div class=\"col-md-9 height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"tab-content pa-md\">
                        <div class=\"tab-pane fade in active bdr-w-0\" id=\"notification-container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), 'row');
        yield "
                                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "heading", [], "any", false, false, false, 31), 'row');
        yield "
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "message", [], "any", false, false, false, 32), 'row');
        yield "
                                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "url", [], "any", false, false, false, 33), 'row');
        yield "
                                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "button", [], "any", false, false, false, 34), 'row');
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 37
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticNotification/Notification/preview.html.twig", ["notification" =>         // line 38
(isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 38, $this->source); })())], false);
        // line 39
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto bdr-l\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'row');
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "language", [], "any", false, false, false, 50), 'row');
        yield "
                <hr />
                ";
        // line 52
        yield from         $this->loadTemplate("@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig", "@MauticNotification/Notification/form.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "                <div class=\"hide\">
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "isPublished", [], "any", false, false, false, 54), 'row');
        yield "
                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "publishUp", [], "any", false, false, false, 55), 'row');
        yield "
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "publishDown", [], "any", false, false, false, 56), 'row');
        yield "
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'rest');
        yield "
                </div>
            </div>
        </div>
    </div>
  ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticNotification/Notification/form.html.twig";
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
        return array (  180 => 62,  172 => 57,  168 => 56,  164 => 55,  160 => 54,  157 => 53,  155 => 52,  150 => 50,  146 => 49,  134 => 39,  132 => 38,  131 => 37,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  96 => 21,  89 => 20,  80 => 16,  74 => 14,  71 => 13,  64 => 12,  53 => 10,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticNotification/Notification/form.html.twig", "/app/docroot/app/bundles/NotificationBundle/Resources/views/Notification/form.html.twig");
    }
}
