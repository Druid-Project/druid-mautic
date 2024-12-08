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

/* @themes/trulypersonal/html/base.html.twig */
class __TwigTemplate_4e05f6456321b64a5adca163137c91eb extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 5
        if (array_key_exists("page", $context)) {
            // line 6
            yield "        <title>{pagetitle}</title>
            <meta name=\"description\" content=\"{pagemetadescription}\">
            ";
        }
        // line 9
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "            ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputHeadDeclarations();
        yield "
    </head>
    <body>
        ";
        // line 13
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        yield "
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 15
        yield "        ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        yield "
    </body>
</html>
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 14
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
        return "@themes/trulypersonal/html/base.html.twig";
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
        return array (  93 => 14,  83 => 9,  73 => 15,  71 => 14,  67 => 13,  60 => 10,  57 => 9,  52 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/trulypersonal/html/base.html.twig", "/app/docroot/themes/trulypersonal/html/base.html.twig");
    }
}
