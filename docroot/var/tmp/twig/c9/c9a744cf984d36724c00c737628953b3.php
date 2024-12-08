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

/* @MauticPoint/Trigger/list.html.twig */
class __TwigTemplate_f49ea1e346ccc87c4f9fadfeaaca84a2 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 3, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticPoint/Trigger/list.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "pointTrigger";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.header.index"), "html", null, true);
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">
        ";
            // line 12
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 13
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 13, $this->source); })()), "action" =>             // line 14
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 14, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 17, $this->source); })()), "point:triggers:create", [], "array", false, false, false, 17)], "routeBase" => "pointtrigger", "langVar" => "point.trigger"]), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.active", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.inactive", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"]]]);
            // line 48
            yield "
        <div class=\"page-list\">
  ";
        }
        // line 51
        yield "
  ";
        // line 52
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPoint/Trigger/_list.html.twig");
        yield "

  ";
        // line 54
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 54, $this->source); })())) {
            // line 55
            yield "        </div>
    </div>

    ";
            // line 58
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.triggers.behavioral"])]);
            // line 60
            yield "
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Trigger/list.html.twig";
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
        return array (  119 => 60,  117 => 58,  112 => 55,  110 => 54,  105 => 52,  102 => 51,  97 => 48,  95 => 17,  94 => 14,  93 => 13,  92 => 12,  89 => 11,  86 => 10,  79 => 9,  68 => 7,  57 => 5,  53 => 3,  51 => 2,  49 => 1,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Trigger/list.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/Trigger/list.html.twig");
    }
}
