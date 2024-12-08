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

/* @MauticAsset/Asset/preview.html.twig */
class __TwigTemplate_64ec432e279d01fb7d406ede2e88f274 extends Template
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
        yield "<h5 class=\"fw-sb mb-xs\">";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.preview", [], "messages");
        yield "</h5>
<div class=\"text-center\">
    ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 3, $this->source); })()), "isImage", [], "method", false, false, false, 3)) {
            // line 4
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 4, $this->source); })()) . "?stream=1"), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 4, $this->source); })()), "getTitle", [], "method", false, false, false, 4));
            yield "\" class=\"img-thumbnail\" />
    ";
        } elseif (("pdf" == Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 5, $this->source); })()), "getFileType", [], "method", false, false, false, 5)))) {
            // line 6
            yield "        <iframe src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 6, $this->source); })()) . "?stream=1"), "html", null, true);
            yield "#view=FitH\" class=\"col-sm-12\"></iframe>
    ";
        } elseif (((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source,         // line 7
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 7, $this->source); })()), "getMime", [], "method", false, false, false, 7)) && is_string($__internal_compile_1 = "video") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 7, $this->source); })()), "getExtension", [], "method", false, false, false, 7), ["mpg", "mpeg", "mp4", "webm"]))) {
            // line 8
            yield "        <video src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 8, $this->source); })()) . "?stream=1"), "html", null, true);
            yield "\" controls>
            ";
            // line 9
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.no_video_support", [], "messages");
            // line 10
            yield "        </video>
    ";
        } elseif (((is_string($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source,         // line 11
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 11, $this->source); })()), "getMime", [], "method", false, false, false, 11)) && is_string($__internal_compile_3 = "audio") && str_starts_with($__internal_compile_2, $__internal_compile_3)) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 11, $this->source); })()), "getExtension", [], "method", false, false, false, 11), ["mp3", "ogg", "wav"]))) {
            // line 12
            yield "        <audio controls>
            <source src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 13, $this->source); })()) . "?stream=1"), "html", null, true);
            yield "\" type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 13, $this->source); })()), "getMime", [], "method", false, false, false, 13), "html", null, true);
            yield "\">
            ";
            // line 14
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.no_audio_support", [], "messages");
            // line 15
            yield "        </audio>
    ";
        } else {
            // line 17
            yield "        <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 17, $this->source); })()), "getIconClass", [], "method", false, false, false, 17), "html", null, true);
            yield " ri-5x\"></i>
    ";
        }
        // line 19
        yield "</div>
<div class=\"clearfix\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Asset/preview.html.twig";
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
        return array (  99 => 19,  93 => 17,  89 => 15,  87 => 14,  81 => 13,  78 => 12,  76 => 11,  73 => 10,  71 => 9,  66 => 8,  64 => 7,  59 => 6,  57 => 5,  50 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Asset/preview.html.twig", "/app/docroot/app/bundles/AssetBundle/Resources/views/Asset/preview.html.twig");
    }
}
