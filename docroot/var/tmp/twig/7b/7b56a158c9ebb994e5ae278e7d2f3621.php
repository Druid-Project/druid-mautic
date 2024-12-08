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

/* @themes/fresh-center/html/base.html.twig */
class __TwigTemplate_7aade6375efba4c5904b6345e18b8aa1 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        if (array_key_exists("page", $context)) {
            // line 5
            yield "        <title>{pagetitle}</title>
        <meta name=\"description\" content=\"{pagemetadescription}\">
        <meta charset=\"UTF-8\">
        ";
        }
        // line 9
        yield "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 10, $this->source); })())) . "/css/style.css"));
        yield "\" type=\"text/css\">
        <script type=\"text/javascript\" src=\"";
        // line 11
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 11, $this->source); })())) . "/js/jquery.min.js"));
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 12, $this->source); })())) . "/js/parallax-element.js"));
        yield "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })())) . "/js/extras.js"));
        yield "\"></script>
        ";
        // line 14
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        yield "
    </head>
    <body id=\"bodyTag\">
        ";
        // line 17
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        yield "
        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 19
        yield "        ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        yield "
    </body>
    <script type=\"text/javascript\">
        if ( \$( \".background-image\" ).length ) {
          \$('.background-image').parallaxElement({
            disableMobile: true,
            defaultSpeed:  -0.2,
          });
        }
    </script>
</html>
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-center/html/base.html.twig";
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
        return array (  105 => 18,  87 => 19,  85 => 18,  81 => 17,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  56 => 9,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/fresh-center/html/base.html.twig", "/app/docroot/themes/fresh-center/html/base.html.twig");
    }
}
