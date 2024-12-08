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

/* @MauticLead/Import/progress.html.twig */
class __TwigTemplate_7f66a274be6c229ae6bf2be3e14f4506 extends Template
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
        // line 13
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/progress.html.twig", 13);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadImport";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.leads", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 18, $this->source); })()))]), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        $context["object"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["object", "contacts"], "method", false, false, false, 22);
        // line 23
        yield "  ";
        $context["objectName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 23, $this->source); })()));
        // line 24
        yield "  ";
        $context["percent"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 24, $this->source); })()), "toPercent", [], "any", false, false, false, 24);
        // line 25
        yield "  ";
        $context["id"] = (((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 25, $this->source); })())) ? ("leadImportProgressComplete") : ("leadImportProgress"));
        // line 26
        yield "  ";
        $context["header"] = (((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 26, $this->source); })())) ? ("mautic.lead.import.success") : ("mautic.lead.import.donotleave"));
        // line 27
        yield "
<div class=\"row ma-lg\" id=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">
    <div class=\"col-sm-offset-3 col-sm-6 text-center\">
        <div class=\"panel panel-";
        // line 30
        if ((isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 30, $this->source); })())) {
            yield "success";
        } else {
            yield "danger";
        }
        yield "\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 32, $this->source); })()), ["object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 32, $this->source); })())]), "html", null, true);
        yield "</h4>
            </div>
            <div class=\"panel-body\">
                ";
        // line 35
        if ( !(isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 35, $this->source); })())) {
            // line 36
            yield "                    <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.inprogress"), "html", null, true);
            yield "</h4>
                ";
        } else {
            // line 38
            yield "                    <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.stats", ["%merged%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 38, $this->source); })()), "updatedCount", [], "any", false, false, false, 38), "%created%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 38, $this->source); })()), "insertedCount", [], "any", false, false, false, 38), "%ignored%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 38, $this->source); })()), "ignoredCount", [], "any", false, false, false, 38)]), "html", null, true);
            yield "</h4>
                ";
        }
        // line 40
        yield "                <div class=\"progress mt-md\" style=\"height:50px;\">
                    <div class=\"progress-bar-import progress-bar progress-bar-striped ";
        // line 41
        if ( !(isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 41, $this->source); })())) {
            yield "active";
        }
        yield "\"
                         role=\"progressbar\"
                         aria-valuenow=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 43, $this->source); })()), "done", [], "any", false, false, false, 43), "html", null, true);
        yield "\"
                         aria-valuemin=\"0\"
                         aria-valuemax=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 45, $this->source); })()), "total", [], "any", false, false, false, 45), "html", null, true);
        yield "\"
                         style=\"width: ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "%; height: 50px;\"><span class=\"sr-only\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "%</span>
                    </div>
                </div>
            </div>
            ";
        // line 50
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "                <ul class=\"list-group\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 53
                yield "                        ";
                $context["lineNumber"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 53), "line", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 53), "line", [], "any", false, false, false, 53), "N/A")) : ("N/A"));
                // line 54
                yield "                        ";
                $context["failure"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 54), "error", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 54), "error", [], "any", false, false, false, 54), "N/A")) : ("N/A"));
                // line 55
                yield "                        <li class=\"list-group-item text-left\">
                            <a target=\"_new\" class=\"text-danger\">(#";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lineNumber"]) || array_key_exists("lineNumber", $context) ? $context["lineNumber"] : (function () { throw new RuntimeError('Variable "lineNumber" does not exist.', 56, $this->source); })()), "html", null, true);
                yield ") ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["failure"]) || array_key_exists("failure", $context) ? $context["failure"] : (function () { throw new RuntimeError('Variable "failure" does not exist.', 56, $this->source); })()), "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                </ul>
            ";
        }
        // line 61
        yield "            <div class=\"panel-footer\">
                <p class=\"small\"><span class=\"imported-count\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 62, $this->source); })()), "done", [], "any", false, false, false, 62), "html", null, true);
        yield "</span> / <span class=\"total-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 62, $this->source); })()), "total", [], "any", false, false, false, 62), "html", null, true);
        yield "</span></p>
                ";
        // line 63
        if ( !(isset($context["complete"]) || array_key_exists("complete", $context) ? $context["complete"] : (function () { throw new RuntimeError('Variable "complete" does not exist.', 63, $this->source); })())) {
            // line 64
            yield "                    <div>
                        ";
            // line 65
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Import/progress.html.twig", 65)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.form.cancel", "variant" => "danger", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["objectAction" => "cancel", "object" =>             // line 70
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 70, $this->source); })())]), "attributes" => ["data-toggle" => "ajax"]], ["label" => "mautic.lead.import.queue.btn", "variant" => "primary", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["objectAction" => "queue", "object" =>             // line 78
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 78, $this->source); })())]), "attributes" => ["data-toggle" => "ajax"]]]]));
            // line 85
            yield "                    </div>
                ";
        } else {
            // line 87
            yield "                    <div>
                        ";
            // line 88
            $context["indexRouteParams"] = Twig\Extension\CoreExtension::merge((isset($context["indexRouteParams"]) || array_key_exists("indexRouteParams", $context) ? $context["indexRouteParams"] : (function () { throw new RuntimeError('Variable "indexRouteParams" does not exist.', 88, $this->source); })()), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.import_id") . ":") . CoreExtension::getAttribute($this->env, $this->source,             // line 89
(isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89))]);
            // line 91
            yield "                        ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Import/progress.html.twig", 91)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.view", ["%objects%" =>             // line 94
(isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 94, $this->source); })())]), "variant" => "secondary", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 96
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 96, $this->source); })()), (isset($context["indexRouteParams"]) || array_key_exists("indexRouteParams", $context) ? $context["indexRouteParams"] : (function () { throw new RuntimeError('Variable "indexRouteParams" does not exist.', 96, $this->source); })())), "attributes" => ["data-toggle" => "ajax"]], ["label" => "mautic.lead.view.imports", "variant" => "secondary", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" =>             // line 104
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 104, $this->source); })())]), "attributes" => ["data-toggle" => "ajax"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.result.info", ["%import%" => CoreExtension::getAttribute($this->env, $this->source,             // line 110
(isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 110, $this->source); })()), "name", [], "method", false, false, false, 110)]), "variant" => "secondary", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 112
(isset($context["import"]) || array_key_exists("import", $context) ? $context["import"] : (function () { throw new RuntimeError('Variable "import" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 112, $this->source); })())]), "attributes" => ["data-toggle" => "ajax"]]]]));
            // line 119
            yield "                    </div>
                ";
        }
        // line 121
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Import/progress.html.twig";
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
        return array (  239 => 121,  235 => 119,  233 => 112,  232 => 110,  231 => 104,  230 => 96,  229 => 94,  227 => 91,  225 => 89,  224 => 88,  221 => 87,  217 => 85,  215 => 78,  214 => 70,  213 => 65,  210 => 64,  208 => 63,  202 => 62,  199 => 61,  195 => 59,  184 => 56,  181 => 55,  178 => 54,  175 => 53,  171 => 52,  168 => 51,  166 => 50,  157 => 46,  153 => 45,  148 => 43,  141 => 41,  138 => 40,  132 => 38,  126 => 36,  124 => 35,  118 => 32,  109 => 30,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  79 => 21,  71 => 18,  64 => 17,  53 => 15,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/progress.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/progress.html.twig");
    }
}
