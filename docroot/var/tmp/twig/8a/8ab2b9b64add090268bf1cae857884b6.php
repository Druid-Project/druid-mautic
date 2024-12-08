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

/* @themes/blank/html/page.html.twig */
class __TwigTemplate_071aaa7e9bd6cfe9ab33fdaa42c76589 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/blank/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"width: 600;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td>
                        <div data-slot-container=\"1\" style=\"min-height: 30px\">
                            <div data-slot=\"text\">
                                <br>
                                <h2>Hello there!</h2>
                                <br>
                                We haven't heard from you for a while...
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/blank/html/page.html.twig";
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
        return array (  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@themes/blank/html/page.html.twig", "/app/docroot/themes/blank/html/page.html.twig");
    }
}
