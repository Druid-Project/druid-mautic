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

/* @MauticCore/Standard/list.html.twig */
class __TwigTemplate_efacf194bf4771e2d662633c552ea790 extends Template
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
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticCore/Standard/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["ignoreStandardColumns"] = ((array_key_exists("ignoreStandardColumns", $context)) ? ((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 1, $this->source); })())) : ([]));
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 17
        if ( !$this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("headerTitle")) {
            // line 18
            if ( !array_key_exists("headerTitle", $context)) {
                // line 19
                $context["headerTitle"] = "Mautic";
            }
            // line 21
            $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 21, $this->source); })()));
        } else {
            // line 23
            $context["headerTitle"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("headerTitle");
        }
        // line 5
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if ( !$this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("mauticContent")) {
            // line 9
            yield "        ";
            if (array_key_exists("mauticContent", $context)) {
                // line 10
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "
        ";
            }
            // line 12
            yield "    ";
        } else {
            // line 13
            yield "        ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\SlotExtension']->getSlot("mauticContent");
            yield "
    ";
        }
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 26, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 29, $this->source); })())) {
            // line 30
            yield "        <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 31
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 32
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 32, $this->source); })()), "action" =>             // line 33
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 33, $this->source); })()), "actionRoute" =>             // line 34
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 34, $this->source); })()), "indexRoute" =>             // line 35
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 35, $this->source); })()), "translationBase" =>             // line 36
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 36, $this->source); })()), "preCustomButtons" => ((            // line 37
array_key_exists("toolBarButtons", $context)) ? ((isset($context["toolBarButtons"]) || array_key_exists("toolBarButtons", $context) ? $context["toolBarButtons"] : (function () { throw new RuntimeError('Variable "toolBarButtons" does not exist.', 37, $this->source); })())) : (null)), "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 39
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 39, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 39, $this->source); })()) . ":delete"), [], "array", false, false, false, 39)], "filters" => ((            // line 41
array_key_exists("filters", $context)) ? ((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 41, $this->source); })())) : ([])), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 44, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 44, $this->source); })()) . ":create"), [], "array", false, false, false, 44)], "actionRoute" =>             // line 46
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 46, $this->source); })()), "indexRoute" =>             // line 47
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 47, $this->source); })()), "translationBase" =>             // line 48
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 48, $this->source); })())])]);
            // line 52
            yield "<div class=\"page-list\">
                ";
            // line 53
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.above", $context);
            yield "
                ";
            // line 54
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
                ";
            // line 55
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("content.below", $context);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 59
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 64
        yield "    ";
        if ( !array_key_exists("templateVariables", $context)) {
            // line 65
            yield "        ";
            $context["templateVariables"] = [];
            // line 66
            yield "    ";
        }
        // line 67
        yield "
    ";
        // line 68
        if ( !array_key_exists("sessionVar", $context)) {
            // line 69
            yield "        ";
            $context["sessionVar"] = "entity";
            // line 70
            yield "    ";
        }
        // line 71
        yield "
    ";
        // line 72
        if ( !array_key_exists("nameAction", $context)) {
            // line 73
            yield "        ";
            $context["nameAction"] = "view";
            // line 74
            yield "    ";
        }
        // line 75
        yield "
    ";
        // line 76
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 76, $this->source); })()))) {
            // line 77
            yield "        ";
            if ($this->env->getTest('instanceof')->getCallable()((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 77, $this->source); })()), "DoctrineORMToolsPaginationPaginator")) {
                // line 78
                yield "            ";
                $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 78, $this->source); })()), "getIterator", [], "method", false, false, false, 78), "getArrayCopy", [], "method", false, false, false, 78);
                // line 79
                yield "        ";
            }
            // line 80
            yield "
        ";
            // line 81
            $context["firstItem"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 81, $this->source); })()));
            // line 82
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-hover ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "-list\">
                <thead>
                <tr>
                    ";
            // line 86
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 86, $this->source); })()))) {
                // line 87
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "actionRoute" =>                 // line 90
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 90, $this->source); })()), "indexRoute" =>                 // line 91
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 91, $this->source); })()), "templateButtons" => ["delete" => (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 93, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 93)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 93, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 93))) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 93, $this->source); })()) . ":delete"), [], "array", false, false, false, 93)))]]);
                // line 96
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 99
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 99, $this->source); })()), "orderBy" => (                // line 100
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 100, $this->source); })()) . ".name"), "text" => "mautic.core.name", "class" => "col-name", "default" => true]);
                // line 107
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["firstItem"] ?? null), "getCategory", [], "any", true, true, false, 107)) {
                    // line 108
                    yield "                            ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                     // line 110
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 110, $this->source); })()), "orderBy" => (((                    // line 111
array_key_exists("categoryTablePrefix", $context)) ? ((isset($context["categoryTablePrefix"]) || array_key_exists("categoryTablePrefix", $context) ? $context["categoryTablePrefix"] : (function () { throw new RuntimeError('Variable "categoryTablePrefix" does not exist.', 111, $this->source); })())) : ("cat")) . ".title"), "text" => "mautic.core.category", "class" => "visible-md visible-lg col-focus-category"]);
                    // line 114
                    yield "
                        ";
                }
                // line 116
                yield "                    ";
            }
            // line 117
            yield "
                        ";
            // line 118
            if (array_key_exists("listHeaders", $context)) {
                // line 119
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listHeaders"]) || array_key_exists("listHeaders", $context) ? $context["listHeaders"] : (function () { throw new RuntimeError('Variable "listHeaders" does not exist.', 119, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 120
                    yield "                                ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["header"], "sessionVar", [], "any", true, true, false, 120)) {
                        // line 121
                        yield "                                    ";
                        $context["header"] = Twig\Extension\CoreExtension::merge($context["header"], ["sessionVar" => (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 121, $this->source); })())]);
                        // line 122
                        yield "                                ";
                    }
                    // line 123
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", $context["header"]);
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                yield "                        ";
            }
            // line 126
            yield "
                        ";
            // line 127
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 127, $this->source); })()))) {
                // line 128
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>                 // line 130
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 130, $this->source); })()), "orderBy" => (                // line 131
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 131, $this->source); })()) . ".id"), "text" => "mautic.core.id", "class" => "visible-md visible-lg col-id"]);
            }
            // line 136
            yield "
                        ";
            // line 137
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.headers", $context);
            yield "
                </tr>
                </thead>
                <tbody>
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 141, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 142
                yield "                    <tr>
                        ";
                // line 143
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 143, $this->source); })()))) {
                    // line 144
                    yield "                            <td>";
                    // line 145
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                     // line 147
$context["item"], "templateButtons" => ["edit" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 149
$context["item"], "getCreatedBy", [], "any", true, true, false, 149)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                     // line 152
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 152, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 152, $this->source); })()) . ":editown"), [], "array", false, false, false, 152), CoreExtension::getAttribute($this->env, $this->source,                     // line 153
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 153, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 153, $this->source); })()) . ":editother"), [], "array", false, false, false, 153), CoreExtension::getAttribute($this->env, $this->source,                     // line 154
$context["item"], "getCreatedBy", [], "method", false, false, false, 154))) : (CoreExtension::getAttribute($this->env, $this->source,                     // line 157
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 157, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 157, $this->source); })()) . ":edit"), [], "array", false, false, false, 157))), "clone" => ((                    // line 158
array_key_exists("enableCloneButton", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 158, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 158, $this->source); })()) . ":create"), [], "array", false, false, false, 158)) : (false)), "delete" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 159
$context["item"], "getCreatedBy", [], "any", true, true, false, 159)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,                     // line 162
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 162, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 162, $this->source); })()) . ":deleteown"), [], "array", false, false, false, 162), CoreExtension::getAttribute($this->env, $this->source,                     // line 163
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 163, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 163, $this->source); })()) . ":deleteother"), [], "array", false, false, false, 163), CoreExtension::getAttribute($this->env, $this->source,                     // line 164
$context["item"], "getCreatedBy", [], "method", false, false, false, 164))) : (CoreExtension::getAttribute($this->env, $this->source,                     // line 167
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 167, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 167, $this->source); })()) . ":delete"), [], "array", false, false, false, 167))), "abtest" => ((                    // line 168
array_key_exists("enableAbTestButton", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 168, $this->source); })()), ((isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 168, $this->source); })()) . ":create"), [], "array", false, false, false, 168)) : (false))], "actionRoute" =>                     // line 170
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 170, $this->source); })()), "indexRoute" =>                     // line 171
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 171, $this->source); })()), "translationBase" =>                     // line 172
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 172, $this->source); })()), "customButtons" => ((                    // line 173
array_key_exists("customButtons", $context)) ? ((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 173, $this->source); })())) : ([]))]);
                    // line 175
                    yield "</td>
                            <td>
                                <div>
                                    ";
                    // line 178
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isPublished", [], "any", true, true, false, 178)) {
                        // line 179
                        yield "                                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                         // line 181
$context["item"], "model" => (isset($context["modelName"]) || array_key_exists("modelName", $context) ? $context["modelName"] : (function () { throw new RuntimeError('Variable "modelName" does not exist.', 181, $this->source); })())]);
                        // line 182
                        yield "
                                    ";
                    }
                    // line 184
                    yield "                                    <a data-toggle=\"ajax\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                    // line 185
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 185, $this->source); })()), ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 186
$context["item"], "getId", [], "method", false, false, false, 186), "objectAction" => (isset($context["nameAction"]) || array_key_exists("nameAction", $context) ? $context["nameAction"] : (function () { throw new RuntimeError('Variable "nameAction" does not exist.', 186, $this->source); })())]), "html", null, true);
                    // line 187
                    yield "\">
                                        ";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 188), "html", null, true);
                    yield "
                                        ";
                    // line 189
                    yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.name", $context);
                    yield "
                                    </a>
                                </div>
                                ";
                    // line 192
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "any", true, true, false, 192) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 192))) {
                        // line 193
                        yield "                                    <div class=\"text-muted mt-4\">
                                        <small>";
                        // line 194
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 194));
                        yield "</small>
                                    </div>
                                ";
                    }
                    // line 197
                    yield "                            </td>
                            ";
                    // line 198
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "any", true, true, false, 198)) {
                        // line 199
                        yield "                                <td class=\"visible-md visible-lg\">
                                    ";
                        // line 200
                        $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getCategory", [], "method", false, false, false, 200);
                        // line 201
                        yield "                                    ";
                        [$context["catName"], $context["color"]] =                         [(((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 201, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source,                         // line 202
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 202, $this->source); })()), "getTitle", [], "method", false, false, false, 202)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), ((                        // line 203
(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 203, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 203, $this->source); })()), "getColor", [], "method", false, false, false, 203))) : (""))];
                        // line 204
                        yield "                                    <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 204, $this->source); })()), "html", null, true);
                        yield ";\"> </span> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 204, $this->source); })()), "html", null, true);
                        yield "</div>
                                </td>
                            ";
                    }
                    // line 207
                    yield "                        ";
                }
                // line 208
                yield "                        ";
                if (array_key_exists("listItemTemplate", $context)) {
                    // line 209
                    yield "                            ";
                    $context["templateVariables"] = Twig\Extension\CoreExtension::merge((isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 209, $this->source); })()), ["item" => $context["item"]]);
                    // line 210
                    yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["listItemTemplate"]) || array_key_exists("listItemTemplate", $context) ? $context["listItemTemplate"] : (function () { throw new RuntimeError('Variable "listItemTemplate" does not exist.', 210, $this->source); })()), (isset($context["templateVariables"]) || array_key_exists("templateVariables", $context) ? $context["templateVariables"] : (function () { throw new RuntimeError('Variable "templateVariables" does not exist.', 210, $this->source); })()));
                }
                // line 212
                yield "                        ";
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreStandardColumns"]) || array_key_exists("ignoreStandardColumns", $context) ? $context["ignoreStandardColumns"] : (function () { throw new RuntimeError('Variable "ignoreStandardColumns" does not exist.', 212, $this->source); })()))) {
                    // line 213
                    yield "                            <td class=\"visible-md visible-lg\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 213), "html", null, true);
                    yield "</td>
                        ";
                }
                // line 215
                yield "
                        ";
                // line 216
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("list.columns", $context);
                yield "
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "                </tbody>
            </table>
        </div>
        <div class=\"panel-footer\">";
            // line 223
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 225
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 225, $this->source); })()), "page" =>             // line 226
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 226, $this->source); })()), "limit" =>             // line 227
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 227, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 228
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 228, $this->source); })())), "sessionVar" =>             // line 229
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 229, $this->source); })())]);
            // line 231
            yield "</div>
    ";
        } else {
            // line 233
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
        }
        // line 235
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Standard/list.html.twig";
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
        return array (  499 => 235,  496 => 233,  492 => 231,  490 => 229,  489 => 228,  488 => 227,  487 => 226,  486 => 225,  485 => 223,  480 => 219,  463 => 216,  460 => 215,  454 => 213,  451 => 212,  448 => 210,  445 => 209,  442 => 208,  439 => 207,  430 => 204,  428 => 203,  427 => 202,  425 => 201,  423 => 200,  420 => 199,  418 => 198,  415 => 197,  409 => 194,  406 => 193,  404 => 192,  398 => 189,  394 => 188,  391 => 187,  389 => 186,  388 => 185,  386 => 184,  382 => 182,  380 => 181,  378 => 179,  376 => 178,  371 => 175,  369 => 173,  368 => 172,  367 => 171,  366 => 170,  365 => 168,  364 => 167,  363 => 164,  362 => 163,  361 => 162,  360 => 159,  359 => 158,  358 => 157,  357 => 154,  356 => 153,  355 => 152,  354 => 149,  353 => 147,  352 => 145,  350 => 144,  348 => 143,  345 => 142,  328 => 141,  321 => 137,  318 => 136,  315 => 131,  314 => 130,  313 => 128,  311 => 127,  308 => 126,  305 => 125,  291 => 123,  288 => 122,  285 => 121,  282 => 120,  264 => 119,  262 => 118,  259 => 117,  256 => 116,  252 => 114,  250 => 111,  249 => 110,  247 => 108,  245 => 107,  243 => 100,  242 => 99,  241 => 96,  239 => 93,  238 => 91,  237 => 90,  236 => 87,  234 => 86,  228 => 83,  225 => 82,  223 => 81,  220 => 80,  217 => 79,  214 => 78,  211 => 77,  209 => 76,  206 => 75,  203 => 74,  200 => 73,  198 => 72,  195 => 71,  192 => 70,  189 => 69,  187 => 68,  184 => 67,  181 => 66,  178 => 65,  175 => 64,  168 => 63,  159 => 59,  152 => 55,  148 => 54,  144 => 53,  141 => 52,  139 => 48,  138 => 47,  137 => 46,  136 => 44,  135 => 41,  134 => 39,  133 => 37,  132 => 36,  131 => 35,  130 => 34,  129 => 33,  128 => 32,  127 => 31,  125 => 30,  122 => 29,  115 => 28,  104 => 26,  95 => 13,  92 => 12,  86 => 10,  83 => 9,  80 => 8,  73 => 7,  69 => 5,  66 => 23,  63 => 21,  60 => 19,  58 => 18,  56 => 17,  54 => 3,  52 => 2,  50 => 1,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Standard/list.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Standard/list.html.twig");
    }
}
