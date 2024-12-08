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

/* @MauticPage/Result/list.html.twig */
class __TwigTemplate_6c71ecc482c086e18e352cb055113ad3 extends Template
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
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 8, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPage/Result/list.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 6, $this->source); })()))) ? (true) : (false));
        // line 7
        $context["tmpl"] = "list";
        // line 8
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "pageresult";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.result.header.index", ["%name%" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 14, $this->source); })()), "getName", [], "method", false, false, false, 14)]), "html", null, true);
        // line 15
        yield "
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "  ";
        $context["buttons"] = [["attr" => ["target" => "_new", "data-toggle" => "", "class" => "btn btn-ghost btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "format" => "html"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.html"), "iconClass" => "ri-file-code-line", "primary" => true], ["attr" => ["data-toggle" => "", "class" => "btn btn-ghost btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "format" => "csv"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.csv"), "iconClass" => "ri-file-text-line", "primary" => true]];
        // line 42
        yield "
  ";
        // line 43
        if ($this->env->getTest('class')->getCallable()("\\PhpOffice\\PhpSpreadsheet\\Spreadsheet")) {
            // line 44
            yield "    ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 44, $this->source); })()), [["attr" => ["data-toggle" => "", "class" => "btn btn-ghost btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 48
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "format" => "xlsx"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.xlsx"), "iconClass" => "ri-file-excel-2-fill", "primary" => true]]);
            // line 54
            yield "  ";
        }
        // line 55
        yield "
  ";
        // line 56
        $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 56, $this->source); })()), [["attr" => ["class" => "btn btn-ghost", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 59
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "data-toggle" => "ajax"], "iconClass" => "ri-close-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.close")]]);
        // line 65
        yield "
  ";
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 66, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 70, $this->source); })())) {
            // line 71
            yield "    <div class=\"page-list\">
  ";
        }
        // line 73
        yield "
  ";
        // line 74
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Result/_list.html.twig");
        yield "

  ";
        // line 76
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 76, $this->source); })())) {
            // line 77
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/Result/list.html.twig";
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
        return array (  150 => 77,  148 => 76,  143 => 74,  140 => 73,  136 => 71,  133 => 70,  126 => 69,  119 => 66,  116 => 65,  114 => 59,  113 => 56,  110 => 55,  107 => 54,  105 => 48,  103 => 44,  101 => 43,  98 => 42,  96 => 35,  95 => 25,  93 => 19,  86 => 18,  80 => 15,  78 => 14,  76 => 13,  69 => 12,  58 => 10,  54 => 8,  52 => 7,  50 => 6,  43 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Result/list.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Result/list.html.twig");
    }
}
