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

/* @MauticCore/Helper/pagination.html.twig */
class __TwigTemplate_8016f6ff75fce157a1e2900e1d700c88 extends Template
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
        $context["target"] = ((array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 1, $this->source); })()), ".page-list")) : (".page-list"));
        // line 2
        $context["tmpl"] = ((array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()), "list")) : ("list"));
        // line 3
        yield "
";
        // line 4
        if (( !array_key_exists("fixedPages", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["fixedPages"]) || array_key_exists("fixedPages", $context) ? $context["fixedPages"] : (function () { throw new RuntimeError('Variable "fixedPages" does not exist.', 4, $this->source); })())))) {
            // line 5
            yield "    ";
            $context["limit"] = (( !array_key_exists("limit", $context)) ? (30) : ($this->env->getFilter('int')->getCallable()((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 5, $this->source); })()))));
            // line 6
            yield "    ";
            $context["totalPages"] = (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 6, $this->source); })())) ? (Twig\Extension\CoreExtension::round(((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 6, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 6, $this->source); })())), 0, "ceil")) : (1));
            // line 7
            yield "    ";
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 7, $this->source); })()) == 0)) {
                // line 8
                yield "      ";
                $context["totalPages"] = 1;
                // line 9
                yield "    ";
            }
        } else {
            // line 11
            yield "    ";
            // line 12
            yield "    ";
            $context["limit"] = 1;
            // line 13
            yield "    ";
            $context["totalPages"] = (isset($context["fixedPages"]) || array_key_exists("fixedPages", $context) ? $context["fixedPages"] : (function () { throw new RuntimeError('Variable "fixedPages" does not exist.', 13, $this->source); })());
        }
        // line 15
        yield "
";
        // line 16
        $context["range"] = ((array_key_exists("range", $context)) ? ((isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 16, $this->source); })())) : (5));
        // line 17
        $context["page"] = ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()) <= 0)) ? (1) : ($this->env->getFilter('int')->getCallable()((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()))));
        // line 18
        $context["linkType"] = (((array_key_exists("inModal", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["inModal"]) || array_key_exists("inModal", $context) ? $context["inModal"] : (function () { throw new RuntimeError('Variable "inModal" does not exist.', 18, $this->source); })())))) ? ("ajaxmodal") : ("ajax"));
        // line 19
        $context["pageClass"] = ((array_key_exists("paginationClass", $context)) ? ((" pagination-" . (isset($context["paginationClass"]) || array_key_exists("paginationClass", $context) ? $context["paginationClass"] : (function () { throw new RuntimeError('Variable "paginationClass" does not exist.', 19, $this->source); })()))) : (""));
        // line 20
        $context["menuLink"] = (((array_key_exists("menuLinkId", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["menuLinkId"]) || array_key_exists("menuLinkId", $context) ? $context["menuLinkId"] : (function () { throw new RuntimeError('Variable "menuLinkId" does not exist.', 20, $this->source); })())))) ? (((" data-menu-link=\"" . (isset($context["menuLinkId"]) || array_key_exists("menuLinkId", $context) ? $context["menuLinkId"] : (function () { throw new RuntimeError('Variable "menuLinkId" does not exist.', 20, $this->source); })())) . "\"")) : (""));
        // line 21
        $context["paginationWrapper"] = ((array_key_exists("paginationWrapper", $context)) ? ((isset($context["paginationWrapper"]) || array_key_exists("paginationWrapper", $context) ? $context["paginationWrapper"] : (function () { throw new RuntimeError('Variable "paginationWrapper" does not exist.', 21, $this->source); })())) : ("pagination-wrapper ml-md mr-md"));
        // line 22
        $context["queryString"] = (("?tmpl=" . (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 22, $this->source); })())) . ((array_key_exists("queryString", $context)) ? ((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 22, $this->source); })())) : ("")));
        // line 23
        $context["formExit"] = (((array_key_exists("ignoreFormExit", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreFormExit"]) || array_key_exists("ignoreFormExit", $context) ? $context["ignoreFormExit"] : (function () { throw new RuntimeError('Variable "ignoreFormExit" does not exist.', 23, $this->source); })())))) ? (" data-ignore-formexit=\"true\"") : (""));
        // line 24
        $context["responsiveViewports"] = ["desktop", "mobile"];
        // line 25
        $context["limitOptions"] = [5 => "5", 10 => "10", 15 => "15", 20 => "20", 25 => "25", 30 => "30", 50 => "50", 100 => "100"];
        // line 35
        $context["jsCallback"] = ((array_key_exists("jsCallback", $context)) ? ((isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 35, $this->source); })())) : (""));
        // line 36
        $context["jsArguments"] = ((array_key_exists("jsArguments", $context)) ? ($this->env->getFilter('array')->getCallable()((isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 36, $this->source); })()))) : ([]));
        // line 37
        $context["baseUrl"] = ((array_key_exists("baseUrl", $context)) ? ((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 37, $this->source); })())) : (null));
        // line 38
        yield "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["responsiveViewports"]) || array_key_exists("responsiveViewports", $context) ? $context["responsiveViewports"] : (function () { throw new RuntimeError('Variable "responsiveViewports" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["viewport"]) {
            // line 40
            yield "    ";
            if (($context["viewport"] == "mobile")) {
                // line 41
                yield "        ";
                $context["paginationClass"] = "sm";
                // line 42
                yield "        ";
                $context["pageClass"] = "pagination-sm";
                // line 43
                yield "        ";
                $context["responsiveClass"] = "visible-xs hidden-sm hidden-md hidden-lg";
                // line 44
                yield "        ";
                $context["paginationWrapper"] = "pagination-wrapper pull-left nm";
                // line 45
                yield "    ";
            } else {
                // line 46
                yield "        ";
                $context["responsiveClass"] = "hidden-xs visible-sm visible-md visible-lg";
                // line 47
                yield "    ";
            }
            // line 48
            yield "
    <div class=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["responsiveClass"]) || array_key_exists("responsiveClass", $context) ? $context["responsiveClass"] : (function () { throw new RuntimeError('Variable "responsiveClass" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 50
            if (( !array_key_exists("fixedLimit", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["fixedLimit"]) || array_key_exists("fixedLimit", $context) ? $context["fixedLimit"] : (function () { throw new RuntimeError('Variable "fixedLimit" does not exist.', 50, $this->source); })())))) {
                // line 51
                yield "            <div class=\"pull-right\">
                <select
                    autocomplete=\"false\"
                    class=\"form-control not-chosen pagination-limit";
                // line 54
                if ((array_key_exists("paginationClass", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["paginationClass"]) || array_key_exists("paginationClass", $context) ? $context["paginationClass"] : (function () { throw new RuntimeError('Variable "paginationClass" does not exist.', 54, $this->source); })())))) {
                    yield " input-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["paginationClass"]) || array_key_exists("paginationClass", $context) ? $context["paginationClass"] : (function () { throw new RuntimeError('Variable "paginationClass" does not exist.', 54, $this->source); })()), "html", null, true);
                }
                yield "\"
                    onchange=\"Mautic.limitTableData('";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 55, $this->source); })()), "html", null, true);
                yield "',this.value,'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 55, $this->source); })()), "html", null, true);
                yield "','";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 55, $this->source); })()), "html", null, true);
                yield "'";
                if ((array_key_exists("baseUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 55, $this->source); })())))) {
                    yield ", '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 55, $this->source); })()) . (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 55, $this->source); })())), "html", null, true);
                    yield "'";
                }
                yield ");\"
                >
                    ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["limitOptions"]) || array_key_exists("limitOptions", $context) ? $context["limitOptions"] : (function () { throw new RuntimeError('Variable "limitOptions" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                    // line 58
                    yield "                        <option";
                    if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()) == $context["value"])) {
                        yield " selected=\"selected\"";
                    }
                    yield " value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr");
                    yield "\">
                            ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.pagination." . $context["label"])), "html", null, true);
                    yield "
                        </option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "                </select>
            </div>
        ";
            }
            // line 65
            yield "
        <div class=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["paginationWrapper"]) || array_key_exists("paginationWrapper", $context) ? $context["paginationWrapper"] : (function () { throw new RuntimeError('Variable "paginationWrapper" does not exist.', 66, $this->source); })()), "html", null, true);
            yield " text-center\">
            <ul class=\"pagination np nm ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageClass"]) || array_key_exists("pageClass", $context) ? $context["pageClass"] : (function () { throw new RuntimeError('Variable "pageClass" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 68
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction(1, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 68, $this->source); })()) > 1), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 68, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 68, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 68, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 68, $this->source); })()));
            // line 69
            yield "                ";
            $context["data"] = ((CoreExtension::inFilter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 69, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 69, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 69, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 69, $this->source); })()))));
            // line 70
            yield "                <li";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 70, $this->source); })()) <= 1)) {
                yield " class=\"disabled\"";
            }
            yield ">
                    <a ";
            // line 71
            yield (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 71, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 71, $this->source); })()));
            yield ">
                        <i class=\"ri-arrow-left-double-line\"></i>
                    </a>
                </li>

                ";
            // line 76
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()) - 1), (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 76, $this->source); })()) - 1) >= 1), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 76, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 76, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 76, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 76, $this->source); })()));
            // line 77
            yield "                ";
            $context["data"] = ((CoreExtension::inFilter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 77, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 77, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 77, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 77, $this->source); })()))));
            // line 78
            yield "                <li";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 78, $this->source); })()) - 1) <= 0)) {
                yield " class=\"disabled\"";
            }
            yield ">
                    <a ";
            // line 79
            yield (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 79, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 79, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 79, $this->source); })()));
            yield ">
                        <i class=\"ri-arrow-left-s-line\"></i>
                    </a>
                </li>

                ";
            // line 84
            $context["startPage"] = (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 84, $this->source); })()) - Twig\Extension\CoreExtension::round(((isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 84, $this->source); })()) / 2), 0, "ceil")) + 1);
            // line 85
            yield "                ";
            $context["startPage"] = ((((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 85, $this->source); })()) <= 0)) ? (1) : ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 85, $this->source); })())));
            // line 86
            yield "                ";
            $context["lastPage"] = (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 86, $this->source); })()) + (isset($context["range"]) || array_key_exists("range", $context) ? $context["range"] : (function () { throw new RuntimeError('Variable "range" does not exist.', 86, $this->source); })())) - 1);
            // line 87
            yield "                ";
            $context["lastPage"] = ((((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 87, $this->source); })()) > (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 87, $this->source); })()))) ? ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 87, $this->source); })())) : ((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 87, $this->source); })())));
            // line 88
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 88, $this->source); })()), (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 88, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                yield "                    ";
                $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction($context["i"], ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 89, $this->source); })()) != $this->env->getFilter('int')->getCallable()($context["i"])), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 89, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 89, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 89, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 89, $this->source); })()));
                // line 90
                yield "                    ";
                $context["data"] = ((CoreExtension::inFilter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 90, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 90, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 90, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 90, $this->source); })()))));
                // line 91
                yield "
                    <li";
                // line 92
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()) == $this->env->getFilter('int')->getCallable()($context["i"]))) {
                    yield " class=\"active\"";
                }
                yield ">
                        <a ";
                // line 93
                yield (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 93, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 93, $this->source); })()));
                yield ">
                            <span>";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "
                ";
            // line 99
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction(((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()) + 1), (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()) + 1) <= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 99, $this->source); })())), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 99, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 99, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 99, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 99, $this->source); })()));
            // line 100
            yield "                ";
            $context["data"] = ((CoreExtension::inFilter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 100, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 100, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 100, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 100, $this->source); })()))));
            // line 101
            yield "                <li";
            if ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 101, $this->source); })()) + 1) > (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 101, $this->source); })()))) {
                yield " class=\"disabled\"";
            }
            yield ">
                    <a ";
            // line 102
            yield (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 102, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 102, $this->source); })()));
            yield ">
                        <i class=\"ri-arrow-right-s-line\"></i>
                    </a>
                </li>

                ";
            // line 107
            $context["action"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->getPaginationAction((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 107, $this->source); })()), ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 107, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 107, $this->source); })())), (isset($context["jsCallback"]) || array_key_exists("jsCallback", $context) ? $context["jsCallback"] : (function () { throw new RuntimeError('Variable "jsCallback" does not exist.', 107, $this->source); })()), (isset($context["jsArguments"]) || array_key_exists("jsArguments", $context) ? $context["jsArguments"] : (function () { throw new RuntimeError('Variable "jsArguments" does not exist.', 107, $this->source); })()), (isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 107, $this->source); })()), (isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 107, $this->source); })()));
            // line 108
            yield "                ";
            $context["data"] = ((CoreExtension::inFilter("javascript:void(0);", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 108, $this->source); })()))) ? ("") : ((((((" data-toggle=\"" . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 108, $this->source); })())) . "\" data-target=\"") . (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 108, $this->source); })())) . "\"") . (isset($context["menuLink"]) || array_key_exists("menuLink", $context) ? $context["menuLink"] : (function () { throw new RuntimeError('Variable "menuLink" does not exist.', 108, $this->source); })()))));
            // line 109
            yield "
                <li";
            // line 110
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 110, $this->source); })()))) {
                yield " class=\"disabled\"";
            }
            yield ">
                    <a ";
            // line 111
            yield (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 111, $this->source); })()) . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })())) . (isset($context["formExit"]) || array_key_exists("formExit", $context) ? $context["formExit"] : (function () { throw new RuntimeError('Variable "formExit" does not exist.', 111, $this->source); })()));
            yield ">
                        <i class=\"ri-arrow-right-double-line\"></i>
                    </a>
                </li>
            </ul>
            <div class=\"clearfix\"></div>
            <small class=\"text-muted\">
                ";
            // line 118
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.pagination.items", ["%count%" => (isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 118, $this->source); })())], "messages");
            yield ",
                ";
            // line 119
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.pagination.pages", ["%count%" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 119, $this->source); })())], "messages");
            // line 120
            yield "                ";
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.pagination.total", [], "messages");
            // line 121
            yield "            </small>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['viewport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/pagination.html.twig";
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
        return array (  351 => 121,  348 => 120,  346 => 119,  342 => 118,  332 => 111,  326 => 110,  323 => 109,  320 => 108,  318 => 107,  310 => 102,  303 => 101,  300 => 100,  298 => 99,  295 => 98,  285 => 94,  281 => 93,  275 => 92,  272 => 91,  269 => 90,  266 => 89,  261 => 88,  258 => 87,  255 => 86,  252 => 85,  250 => 84,  242 => 79,  235 => 78,  232 => 77,  230 => 76,  222 => 71,  215 => 70,  212 => 69,  210 => 68,  206 => 67,  202 => 66,  199 => 65,  194 => 62,  185 => 59,  176 => 58,  172 => 57,  157 => 55,  150 => 54,  145 => 51,  143 => 50,  139 => 49,  136 => 48,  133 => 47,  130 => 46,  127 => 45,  124 => 44,  121 => 43,  118 => 42,  115 => 41,  112 => 40,  108 => 39,  105 => 38,  103 => 37,  101 => 36,  99 => 35,  97 => 25,  95 => 24,  93 => 23,  91 => 22,  89 => 21,  87 => 20,  85 => 19,  83 => 18,  81 => 17,  79 => 16,  76 => 15,  72 => 13,  69 => 12,  67 => 11,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/pagination.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/pagination.html.twig");
    }
}
