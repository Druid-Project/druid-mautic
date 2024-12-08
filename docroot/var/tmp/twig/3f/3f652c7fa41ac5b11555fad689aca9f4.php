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

/* @MauticAsset/Asset/form.html.twig */
class __TwigTemplate_9c8d3baf599bfbaa8db80a4efeda4f7e extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
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
        // line 2
        $context["header"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 2, $this->source); })()), "getId", [], "method", false, false, false, 2)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.menu.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 2, $this->source); })()), "getTitle", [], "method", false, false, false, 2)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.menu.new")));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticAsset/Asset/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 4, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<script>
\tmauticAssetUploadEndpoint = \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uploadEndpoint"]) || array_key_exists("uploadEndpoint", $context) ? $context["uploadEndpoint"] : (function () { throw new RuntimeError('Variable "uploadEndpoint" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\";
\tmauticAssetUploadMaxSize = ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxSize"]) || array_key_exists("maxSize", $context) ? $context["maxSize"] : (function () { throw new RuntimeError('Variable "maxSize" does not exist.', 9, $this->source); })()), "html", null, true);
        yield ";
\tmauticAssetUploadMaxSizeError = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxSizeError"]) || array_key_exists("maxSizeError", $context) ? $context["maxSizeError"] : (function () { throw new RuntimeError('Variable "maxSizeError" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\";
\tmauticAssetUploadExtensions = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\";
\tmauticAssetUploadExtensionError = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extensionError"]) || array_key_exists("extensionError", $context) ? $context["extensionError"] : (function () { throw new RuntimeError('Variable "extensionError" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\";
</script>
";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-r\">
        <div class=\"pa-md\">
\t        <div class=\"row\">
\t\t        <div class=\"col-md-6\">
\t\t\t\t\t<div class=\"col-md-7 pl-0\">
\t\t\t\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "storageLocation", [], "any", false, false, false, 23), 'row');
        yield "
\t\t\t\t\t</div>
\t\t\t        <div class=\"text-left mt-lg mb-lg";
        // line 25
        if ((isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 25, $this->source); })())) {
            yield "  hide ";
        }
        yield "\" id=\"remote-button\">
\t\t\t\t\t\t";
        // line 26
        if ((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 26, $this->source); })())) {
            // line 27
            yield "\t\t\t\t\t\t\t";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticAsset/Asset/form.html.twig", 27)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_remote") . "?tmpl=modal"), "icon" => "ri-file-search-line", "label" => "mautic.asset.remote.file.browse", "size" => "sm", "spin" => true, "variant" => "tertiary", "attributes" => ["data-toggle" => "ajaxmodal", "data-target" => "#RemoteFileModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.remote.file.browse"), "role" => "button"]]]]));
            // line 45
            yield "\t\t\t\t\t\t";
        }
        // line 46
        yield "\t\t\t\t\t</div>
\t\t\t        <div id=\"storage-local\"";
        // line 47
        if ( !(isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 47, $this->source); })())) {
            yield " class=\"hide\"";
        }
        yield ">
\t\t\t\t        <div class=\"row\">
\t\t\t\t\t        <div class=\"form-group col-xs-12 \">
\t\t\t\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "tempName", [], "any", false, false, false, 50), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "tempName", [], "any", false, false, false, 51), 'widget');
        yield "
\t\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "tempName", [], "any", false, false, false, 52), 'errors');
        yield "
\t\t\t\t\t\t        <div class=\"help-block mdropzone-error\"></div>
\t\t\t\t\t\t        <div class=\"mdropzone text-center\" id=\"dropzone\">
\t\t\t\t\t\t        \t<div class=\"dz-message\">
\t\t\t\t\t\t        \t\t";
        // line 56
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.drop.file.here", [], "messages");
        yield "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t        </div>
\t\t\t        <div id=\"storage-remote\"";
        // line 62
        if ((isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 62, $this->source); })())) {
            yield " class=\"hide\"";
        }
        yield ">
\t\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "remotePath", [], "any", false, false, false, 63), 'row');
        yield "
\t\t\t        </div>
\t\t    \t</div>
\t\t    \t<div class=\"col-md-6\">
\t\t    \t\t<div class=\"row\">
\t\t\t\t    \t<div class=\"form-group col-xs-12 preview\">";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" =>         // line 70
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 70, $this->source); })()), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 72
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 72, $this->source); })()), "getId", [], "method", false, false, false, 72)])]);
        // line 74
        yield "</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "title", [], "any", false, false, false, 80), 'row');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "alias", [], "any", false, false, false, 83), 'row');
        yield "
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
\t\t\t\t\t";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'row');
        yield "
                </div>
            </div>
\t\t</div>
\t</div>
 \t<div class=\"col-md-3 height-auto\">
\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "category", [], "any", false, false, false, 95), 'row');
        yield "
\t\t\t";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "language", [], "any", false, false, false, 96), 'row');
        yield "
\t\t\t";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "isPublished", [], "any", false, false, false, 97), 'row', ["attr" => ["data-none" => "mautic.core.form.unavailable_regardless_of_scheduling", "data-start" => "mautic.core.form.available_on_scheduled_date", "data-both" => "mautic.core.form.available_during_scheduled_period", "data-end" => "mautic.core.form.available_until_scheduled_end"]]);
        // line 104
        yield "
\t\t\t";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "publishUp", [], "any", false, false, false, 105), 'row', ["label" => "mautic.core.form.available.available_from"]);
        yield "
    \t\t";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "publishDown", [], "any", false, false, false, 106), 'row', ["label" => "mautic.core.form.available.unavailable_from"]);
        yield "
\t\t\t";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "disallow", [], "any", false, false, false, 107), 'row');
        yield "
\t\t</div>
\t</div>
</div>
";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        yield "

";
        // line 113
        if ((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 113, $this->source); })())) {
            // line 114
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "RemoteFileModal", "size" => "lg", "footerButtons" => true]);
        }
        // line 120
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Asset/form.html.twig";
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
        return array (  263 => 120,  260 => 114,  258 => 113,  253 => 111,  246 => 107,  242 => 106,  238 => 105,  235 => 104,  233 => 97,  229 => 96,  225 => 95,  215 => 88,  207 => 83,  201 => 80,  193 => 74,  191 => 72,  190 => 70,  189 => 69,  181 => 63,  175 => 62,  166 => 56,  159 => 52,  155 => 51,  151 => 50,  143 => 47,  140 => 46,  137 => 45,  134 => 27,  132 => 26,  126 => 25,  121 => 23,  109 => 14,  104 => 12,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  85 => 7,  78 => 6,  67 => 5,  56 => 4,  51 => 1,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Asset/form.html.twig", "/app/docroot/app/bundles/AssetBundle/Resources/views/Asset/form.html.twig");
    }
}
