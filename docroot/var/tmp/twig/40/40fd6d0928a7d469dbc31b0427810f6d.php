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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig */
class __TwigTemplate_3fedbc24ca03d2f312854f0539d4ae96 extends Template
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
        yield "<!DOCTYPE html>
<html>
<head>
    <link href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 4, $this->source); })()) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/smoothness/jquery-ui.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 5, $this->source); })()) . "/../../media/bundles/fmelfinder/css/elfinder.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 6, $this->source); })()) . "/../../media/bundles/fmelfinder/css/theme.css")), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
    <script src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 9, $this->source); })()) . "/../../media/js/libraries.js")), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 10, $this->source); })()) . "/../../media/bundles/fmelfinder/js/elfinder.min.js")), "html", null, true);
        yield "\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
    var editor = null;

    ";
        // line 15
        yield "    ";
        if (!CoreExtension::inFilter((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 15, $this->source); })()), ["ar", "bg", "ca", "cs", "de", "en", "es", "fr", "hu", "jp", "nl", "pl", "pt_BR", "ru", "sk", "zh_CN"])) {
            // line 16
            yield "    ";
            $context["locale"] = "en";
            // line 17
            yield "    ";
        }
        // line 18
        yield "    jQuery().ready(function() {
        var \$f = jQuery('.elfinder').elfinder({
            url : '";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 20, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 20, $this->source); })())]), "html", null, true);
        yield "',
            lang : '";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "',
            i18nBaseUrl : '";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 22, $this->source); })()) . "/../../media/bundles/fmelfinder/js/i18n/")), "html", null, true);
        yield "',
            onlyMimes: ";
        // line 23
        yield (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new RuntimeError('Variable "onlyMimes" does not exist.', 23, $this->source); })());
        yield ",
            getFileCallback : function(file, fm) {
                let fileUrl = file.url;
                if (file.baseUrl == '' && typeof window.opener.mauticImagesPath !== 'undefined') {
                    fileUrl = window.opener.mauticImagesPath+'/'+file.name;
                } else if (file.baseUrl != '') {
                    fileUrl = file.baseUrl + '' + (file.path).replace('//', '');
                }

                const editorParam = new RegExp('(?:[\\?&]|&amp;)editor=([^&]+)', 'i');
                const editorMatch = window.location.search.match(editorParam);
                if (editorMatch && editorMatch.length > 1 && editorMatch[1] == 'ckeditor') {
                    window.opener.document.ckEditorInsertImages(editor, fileUrl);
                } else {
                    window.opener.document.fileManagerInsertImageCallback('textarea.editor', fileUrl);
                }

                window.close();
            }
        });

        ";
        // line 44
        if ((isset($context["fullscreen"]) || array_key_exists("fullscreen", $context) ? $context["fullscreen"] : (function () { throw new RuntimeError('Variable "fullscreen" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "        var \$window = jQuery(window);
        \$window.resize(function(){
            var \$win_height = \$window.height();
            if( \$f.height() != \$win_height ){
                \$f.height(\$win_height).resize();
            }
        });
        \$window.resize();
        ";
        }
        // line 54
        yield "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig";
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
        return array (  134 => 54,  123 => 45,  121 => 44,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  65 => 10,  61 => 9,  55 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig");
    }
}
