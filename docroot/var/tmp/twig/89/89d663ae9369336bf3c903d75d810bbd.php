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

/* @MauticCore/Helper/tableheader.html.twig */
class __TwigTemplate_c680a58822404023f1e35bd0724ade95 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["target"] = ((array_key_exists("target", $context)) ? ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 1, $this->source); })())) : (".page-list"));
        // line 2
        yield "
";
        // line 3
        if ((array_key_exists("checkall", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["checkall"]) || array_key_exists("checkall", $context) ? $context["checkall"] : (function () { throw new RuntimeError('Variable "checkall" does not exist.', 3, $this->source); })())))) {
            // line 4
            yield "    ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_BULK_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"));
            // line 9
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
            // line 11
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
            yield "

    ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 13) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 13, $this->source); })()), "delete", [], "any", false, false, false, 13)))) {
                // line 14
                yield "        ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["message" => (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId((                // line 16
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 16, $this->source); })()) . ".form.confirmbatchdelete"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((                // line 17
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".form.confirmbatchdelete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.confirmbatchdelete"))), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(                // line 19
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 19, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), ["objectAction" => "batchDelete"])), "template" => "batchdelete"], "priority" =>  -1]);
                // line 23
                yield "
    ";
            }
            // line 25
            yield "<th class=\"col-actions\" ";
            if ((array_key_exists("tooltip", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 25, $this->source); })())))) {
                yield " data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 25, $this->source); })())), "html", null, true);
                yield "\"";
            }
            yield ">
    <div class=\"input-group input-group-sm\">
        <span class=\"input-group-addon\">
            <input type=\"checkbox\" id=\"customcheckbox-one0\" value=\"1\" data-toggle=\"checkall\" data-target=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 28, $this->source); })()), "html", null, true);
            yield "\">
        </span>

        <div class=\"ml-xs\">
            ";
            // line 32
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/tableheader.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.options", "size" => "sm", "variant" => "ghost", "icon" => "ri-more-2-line", "icon_only" => true, "spin" => false, "attributes" => ["class" => "dropdown-toggle", "data-toggle" => "dropdown", "type" => "button", "disabled" => ""]]]]));
            // line 50
            yield "            <ul class=\"pull-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 50, $this->source); })()), "html", null, true);
            yield " page-list-actions dropdown-menu\" role=\"menu\">
                ";
            // line 51
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
            yield "
            </ul>
        </div>
    </div>
</th>
";
        } elseif (( !        // line 56
array_key_exists("sessionVar", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 56, $this->source); })())))) {
            // line 57
            yield "<th";
            if ((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 57, $this->source); })())))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ">
    <span>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 58, $this->source); })())), "html", null, true);
            yield "</span>
</th>
";
        } else {
            // line 61
            $context["defaultOrder"] = (((array_key_exists("default", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 61, $this->source); })())))) ? ((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 61, $this->source); })())) : (""));
            // line 62
            $context["order"] = ((array_key_exists("order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 62, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 62, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 62, $this->source); })())], "method", false, false, false, 62))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 62, $this->source); })())) . ".orderby"), (isset($context["defaultOrder"]) || array_key_exists("defaultOrder", $context) ? $context["defaultOrder"] : (function () { throw new RuntimeError('Variable "defaultOrder" does not exist.', 62, $this->source); })())], "method", false, false, false, 62)));
            // line 63
            $context["dir"] = ((array_key_exists("dir", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 63, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 63, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 63))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 63, $this->source); })())) . ".orderbydir"), "ASC"], "method", false, false, false, 63)));
            // line 64
            $context["filters"] = ((array_key_exists("filters", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 64, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 64, $this->source); })())) . ".filters"), []], "method", false, false, false, 64))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "get", [(("mautic." . (isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 64, $this->source); })())) . ".filters"), []], "method", false, false, false, 64)));
            // line 65
            $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 65, $this->source); })()), "list")) : ("list"));
            // line 66
            yield "<th";
            if ((array_key_exists("class", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 66, $this->source); })())))) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 66, $this->source); })()), "html", null, true);
                yield " pa-0\"";
            }
            // line 67
            yield "    scope=\"col\"
    aria-sort=\"";
            // line 68
            if (((array_key_exists("orderBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 68, $this->source); })()))) && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 68, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 68, $this->source); })())))) {
                if (((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 68, $this->source); })()) == "ASC")) {
                    yield "ascending";
                } else {
                    yield "descending";
                }
            } else {
                yield "none";
            }
            yield "\">
    ";
            // line 69
            if ((array_key_exists("orderBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 69, $this->source); })())))) {
                // line 70
                yield "    <a aria-label=\"";
                if ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 70, $this->source); })())) && ((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 70, $this->source); })()) == "ASC"))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.sort.descending.description", ["%header%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 70, $this->source); })()))]), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.sort.ascending.description", ["%header%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 70, $this->source); })()))]), "html", null, true);
                }
                yield "\" class=\"btn btn-ghost btn-block jc-space-between table-sort\" href=\"javascript: void(0);\" onclick=\"Mautic.reorderTableData('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 70, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 70, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 70, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 70, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 70, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\">
        <span class=\"fw-b\">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 71, $this->source); })())), "html", null, true);
                yield "</span>
        ";
                // line 72
                if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 72, $this->source); })()) == (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 72, $this->source); })()))) {
                    // line 73
                    yield "            ";
                    if (((isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 73, $this->source); })()) == "ASC")) {
                        // line 74
                        yield "                <i class=\"ri-arrow-up-line ri-lg fw-n\" aria-hidden=\"true\" focusable=\"false\"></i>
            ";
                    } else {
                        // line 76
                        yield "                <i class=\"ri-arrow-down-line ri-lg fw-n\" aria-hidden=\"true\" focusable=\"false\"></i>
            ";
                    }
                    // line 78
                    yield "        ";
                } else {
                    // line 79
                    yield "        <i class=\"ri-arrow-up-down-line ri-lg fw-n table-sort__icon-unsorted\" aria-hidden=\"true\" focusable=\"false\"></i>
        ";
                }
                // line 81
                yield "    </a>
    ";
            } else {
                // line 83
                yield "    <span class=\"pa-md\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 83, $this->source); })())), "html", null, true);
                yield "</span>
    ";
            }
            // line 85
            yield "
    <div class=\"thead-filter\">
        ";
            // line 87
            if ((array_key_exists("filterBy", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 87, $this->source); })())))) {
                // line 88
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 88, $this->source); })()), [], "array", true, true, false, 88)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 88, $this->source); })()), (isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 88, $this->source); })()), [], "array", false, false, false, 88), "value", [], "any", false, false, false, 88)) : (""));
                // line 89
                yield "        <div class=\"input-group input-group-sm\">
            <input
                type=\"text\"
                placeholder=\"";
                // line 92
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.form.thead.filter", [], "messages");
                yield "\"
                autocomplete=\"false\"
                class=\"form-control input-sm\"
                value=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 95, $this->source); })()));
                yield "\"
                ";
                // line 96
                if ((array_key_exists("dataToggle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 96, $this->source); })())))) {
                    yield " data-toggle=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataToggle"]) || array_key_exists("dataToggle", $context) ? $context["dataToggle"] : (function () { throw new RuntimeError('Variable "dataToggle" does not exist.', 96, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                // line 97
                yield "                onchange=\"Mautic.filterTableData('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "',this.value,'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 97, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 97, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\"
            />
            <span class=\"input-group-btn\">
                <button
                    class=\"btn btn-ghost btn-icon btn-xs\"
                    onclick=\"Mautic.filterTableData('";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 102, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterBy"]) || array_key_exists("filterBy", $context) ? $context["filterBy"] : (function () { throw new RuntimeError('Variable "filterBy" does not exist.', 102, $this->source); })()), "html", null, true);
                yield "',";
                yield (((array_key_exists("value", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 102, $this->source); })())))) ? ("'',") : ("mQuery(this).parent().prev().val(),"));
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 102, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 102, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 102, $this->source); })())))) {
                    yield ",'";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 102, $this->source); })()), "html", null, true);
                    yield "'";
                }
                yield ");\"                >
                    <i class=\"ri-fw ri-lg ";
                // line 103
                yield (((array_key_exists("value", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })())))) ? ("ri-close-line") : ("ri-filter-2-fill"));
                yield "\"></i>
                </button>
            </span>
        </div>
        ";
            }
            // line 108
            yield "    </div>
</th>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/tableheader.html.twig";
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
        return array (  290 => 108,  282 => 103,  264 => 102,  243 => 97,  237 => 96,  233 => 95,  227 => 92,  222 => 89,  219 => 88,  217 => 87,  213 => 85,  207 => 83,  203 => 81,  199 => 79,  196 => 78,  192 => 76,  188 => 74,  185 => 73,  183 => 72,  179 => 71,  156 => 70,  154 => 69,  142 => 68,  139 => 67,  132 => 66,  130 => 65,  128 => 64,  126 => 63,  124 => 62,  122 => 61,  116 => 58,  107 => 57,  105 => 56,  97 => 51,  92 => 50,  90 => 32,  83 => 28,  72 => 25,  68 => 23,  66 => 19,  65 => 17,  64 => 16,  62 => 14,  60 => 13,  54 => 11,  52 => 9,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/tableheader.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/tableheader.html.twig");
    }
}
