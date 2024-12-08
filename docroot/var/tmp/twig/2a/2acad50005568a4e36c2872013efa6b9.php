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

/* @MauticForm/Result/list.html.twig */
class __TwigTemplate_d57770c7e0fbc8db697c6f2b8847430c extends Template
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
        // line 15
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 15, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticForm/Result/list.html.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 13, $this->source); })()))) ? (true) : (false));
        // line 14
        $context["tmpl"] = "list";
        // line 15
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "formresult";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.header.index", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20)]), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "  ";
        $context["buttons"] = [];
        // line 25
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 26, $this->source); })()), [["attr" => ["target" => "_new", "data-toggle" => "", "class" => "btn btn-ghost btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "format" => "html"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.html"), "iconClass" => "ri-file-code-line", "primary" => true]]);
            // line 37
            yield "
        ";
            // line 38
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 38, $this->source); })()), [["attr" => ["data-toggle" => "", "class" => "btn btn-ghost btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "format" => "csv"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.csv"), "iconClass" => "ri-file-text-line", "primary" => true]]);
            // line 48
            yield "
        ";
            // line 50
            yield "        ";
            if (Twig\Extension\CoreExtension::constant("\\PhpOffice\\PhpSpreadsheet\\Spreadsheet::VISIBILITY_VISIBLE", null, true)) {
                // line 51
                yield "            ";
                $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 51, $this->source); })()), [["attr" => ["data-toggle" => "", "class" => "btn btn-ghost btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_export", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "format" => "xlsx"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.export.xlsx"), "iconClass" => "ri-file-excel-line", "primary" => true]]);
                // line 61
                yield "        ";
            }
            // line 62
            yield "    ";
        }
        // line 63
        yield "
  ";
        // line 64
        $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 64, $this->source); })()), [["attr" => ["class" => "btn btn-ghost", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "data-toggle" => "ajax"], "iconClass" => "ri-close-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.close")]]);
        // line 73
        yield "
  ";
        // line 74
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["customButtons" => (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 74, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 78
        yield "  <div class=\"page-list\">
    ";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Result/_list.html.twig");
        yield "
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Result/list.html.twig";
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
        return array (  149 => 79,  146 => 78,  139 => 77,  132 => 74,  129 => 73,  127 => 67,  126 => 64,  123 => 63,  120 => 62,  117 => 61,  115 => 55,  113 => 51,  110 => 50,  107 => 48,  105 => 42,  104 => 38,  101 => 37,  99 => 31,  97 => 26,  94 => 25,  91 => 24,  84 => 23,  76 => 20,  69 => 19,  58 => 17,  54 => 15,  52 => 14,  50 => 13,  43 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Result/list.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Result/list.html.twig");
    }
}
