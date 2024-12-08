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

/* @MauticForm/Form/list.html.twig */
class __TwigTemplate_3ce80a5465d1f2f10855f4bf18403f0e extends Template
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
        // line 14
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 14, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticForm/Form/list.html.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 12, $this->source); })()))) ? (true) : (false));
        // line 13
        $context["tmpl"] = "list";
        // line 14
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "form";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.forms"), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 23, $this->source); })())) {
            // line 24
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 25
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 26
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 26, $this->source); })()), "searchId" => "list-search", "action" =>             // line 28
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 28, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "form:forms:create", [], "array", false, false, false, 31)], "routeBase" => "form", "langVar" => "form.form"]), "quickFilters" => [["search" => "mautic.core.searchcommand.ispublished", "label" => "mautic.core.form.available", "tooltip" => "mautic.core.searchcommand.ispublished.description", "icon" => "ri-check-line"], ["search" => "mautic.core.searchcommand.isunpublished", "label" => "mautic.core.form.unavailable", "tooltip" => "mautic.core.searchcommand.isunpublished.description", "icon" => "ri-close-line"], ["search" => "mautic.core.searchcommand.isuncategorized", "label" => "mautic.core.form.uncategorized", "tooltip" => "mautic.core.searchcommand.isuncategorized.description", "icon" => "ri-folder-unknow-line"], ["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"], ["search" => "mautic.form.form.searchcommand.isexpired", "label" => "mautic.core.form.no_longer_available", "tooltip" => "mautic.form.form.searchcommand.isexpired.description", "icon" => "ri-time-line"], ["search" => "mautic.form.form.searchcommand.ispending", "label" => "mautic.core.form.not_yet_available", "tooltip" => "mautic.form.form.searchcommand.ispending.description", "icon" => "ri-timer-line"], ["search" => "has:results", "label" => "mautic.core.search.quickfilter.form_results", "tooltip" => "mautic.core.search.quickfilter.form_results.tooltip", "icon" => "ri-file-list-2-line"]]]);
            // line 82
            yield "<div class=\"page-list\">
          ";
            // line 83
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Form/_list.html.twig");
            yield "
        </div>
    </div>
    ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.forms.redirect", "mautic.protip.forms.minimize", "mautic.protip.forms.language", "mautic.protip.forms.multistep"])]);
            // line 88
            yield "
  ";
        } else {
            // line 90
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Form/_list.html.twig");
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
        return "@MauticForm/Form/list.html.twig";
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
        return array (  115 => 90,  111 => 88,  109 => 86,  103 => 83,  100 => 82,  98 => 31,  97 => 28,  96 => 26,  95 => 25,  93 => 24,  90 => 23,  83 => 22,  75 => 19,  68 => 18,  57 => 16,  53 => 14,  51 => 13,  49 => 12,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Form/list.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Form/list.html.twig");
    }
}
