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

/* @FMElfinder/Elfinder/helper/_tinymce.html.twig */
class __TwigTemplate_f4cc0fcb9c5e15663d1ede5053414a4f extends Template
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
        yield "<script type=\"text/javascript\">
    //<![CDATA[
    function elFinderBrowser (field_name, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: \"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elfinder", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 5, $this->source); })())]), "html", null, true);
        yield "\",
            title: \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\",
            width: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 7, $this->source); })()), "html", null, true);
        yield ",
            height: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 8, $this->source); })()), "html", null, true);
        yield ",
            resizable: 'yes',
            inline: 'yes',    // This parameter only has an effect if you use the inlinepopups plugin!
            popup_css: false, // Disable TinyMCE's default popup CSS
            close_previous: 'no'
        }, {
            window: win,
            input: field_name
        });
        return false;
    }
    //]]>
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@FMElfinder/Elfinder/helper/_tinymce.html.twig";
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
        return array (  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@FMElfinder/Elfinder/helper/_tinymce.html.twig", "/app/vendor/helios-ag/fm-elfinder-bundle/src/Resources/views/Elfinder/helper/_tinymce.html.twig");
    }
}
