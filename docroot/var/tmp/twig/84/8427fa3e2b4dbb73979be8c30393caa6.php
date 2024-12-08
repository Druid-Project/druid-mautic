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

/* @MauticLead/Import/list.html.twig */
class __TwigTemplate_4913c0f8d2679f2933c9b3c3590a7639 extends Template
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
        // line 7
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 7, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Import/list.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 5, $this->source); })()))) ? (true) : (false));
        // line 6
        $context["tmpl"] = "list";
        // line 7
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 9, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.list"), "html", null, true);
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 16, $this->source); })()) . ":create"), [], "array", false, false, false, 16)], "routeBase" => "import", "query" => ["object" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", ["object", "contacts"], "method", false, false, false, 19)]]);
        // line 20
        yield "
";
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">
      <div class=\"page-list\">
  ";
        }
        // line 28
        yield "
  ";
        // line 29
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Import/_list.html.twig");
        yield "

  ";
        // line 31
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 31, $this->source); })())) {
            // line 32
            yield "        </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Import/list.html.twig";
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
        return array (  123 => 32,  121 => 31,  116 => 29,  113 => 28,  108 => 25,  105 => 24,  98 => 23,  92 => 20,  90 => 19,  89 => 16,  87 => 14,  80 => 13,  69 => 11,  58 => 9,  54 => 7,  52 => 6,  50 => 5,  43 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/list.html.twig");
    }
}
