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

/* @MauticCampaign/Campaign/form.html.twig */
class __TwigTemplate_68984b2bd7c203cf857e3a0a8d9cf1f9 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCampaign/Campaign/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.menu.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6))]), "html", null, true);
            // line 7
            yield "
    ";
        } else {
            // line 9
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.menu.new"), "html", null, true);
            yield "
    ";
        }
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-r\">
        <div class=\"pa-md\">
            ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "isPublished", [], "any", false, false, false, 20))) {
            // line 21
            yield "                <div class=\"alert alert-danger\"><p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.modify.warning"), "html", null, true);
            yield "</p></div>
            ";
        }
        // line 23
        yield "
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'row');
        yield "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'row');
        yield "
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "category", [], "any", false, false, false, 38), 'row');
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "allowRestart", [], "any", false, false, false, 39), 'row');
        yield "
            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "isPublished", [], "any", false, false, false, 40), 'row');
        yield "
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "publishUp", [], "any", false, false, false, 41), 'row');
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "publishDown", [], "any", false, false, false, 42), 'row');
        yield "
        </div>
    </div>
</div>

";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        // line 48
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_builder.html.twig", ["campaignId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "sessionId", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "data", [], "array", false, false, false, 49), "campaignEvents" =>         // line 50
(isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 50, $this->source); })()), "campaignSources" =>         // line 51
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 51, $this->source); })()), "eventSettings" =>         // line 52
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 52, $this->source); })()), "canvasSettings" => CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "canvasSettings", [], "any", false, false, false, 53)]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/form.html.twig";
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
        return array (  157 => 53,  156 => 52,  155 => 51,  154 => 50,  153 => 49,  152 => 48,  150 => 47,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  116 => 31,  108 => 26,  103 => 23,  97 => 21,  95 => 20,  86 => 14,  79 => 13,  70 => 9,  66 => 7,  64 => 6,  62 => 5,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/form.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/form.html.twig");
    }
}
