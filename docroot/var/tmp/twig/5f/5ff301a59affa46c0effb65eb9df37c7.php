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

/* @themes/paprika/html/message.html.twig */
class __TwigTemplate_2f22c7fb8e9c85a3d9bcd1c91f798e0a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/paprika/html/message.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" />
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div>
        ";
        // line 7
        yield (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 7, $this->source); })());
        yield "
        ";
        // line 8
        if (array_key_exists("content", $context)) {
            // line 9
            yield "        <div>";
            yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 9, $this->source); })());
            yield "</div>
        ";
        }
        // line 11
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/paprika/html/message.html.twig";
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
        return array (  86 => 11,  80 => 9,  78 => 8,  74 => 7,  71 => 6,  64 => 5,  58 => 3,  51 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/paprika/html/message.html.twig", "/app/docroot/themes/paprika/html/message.html.twig");
    }
}
