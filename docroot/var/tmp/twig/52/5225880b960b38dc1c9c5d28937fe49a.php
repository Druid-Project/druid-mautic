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

/* @MauticForm/Result/_list.html.twig */
class __TwigTemplate_706e05ffbeb403092a9f479a410b9d24 extends Template
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
        // line 13
        $context["formId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13);
        // line 14
        yield "<div class=\"table-responsive table-responsive-force\">
    <table class=\"table table-hover formresult-list\" id=\"formResultTable\">
        <thead>
            <tr>
                ";
        // line 18
        if ((isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#formResultTable", "routeBase" => "form_results", "query" => ["formId" =>             // line 23
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 23, $this->source); })())], "templateButtons" => ["delete" =>             // line 24
(isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 24, $this->source); })())]]);
            // line 25
            yield "
                ";
        }
        // line 27
        yield "
                ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 29
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 29, $this->source); })())), "orderBy" => "s.id", "text" => "mautic.form.report.submission.id", "class" => "col-formresult-id", "filterBy" => "s.id"]);
        // line 34
        yield "

                ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 37
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 37, $this->source); })())), "orderBy" => "s.lead_id", "text" => "mautic.lead.report.contact_id", "class" => "col-formresult-lead-id", "filterBy" => "s.lead_id"]);
        // line 42
        yield "

                ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 45
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 45, $this->source); })())), "orderBy" => "s.date_submitted", "text" => "mautic.form.result.thead.date", "class" => "col-formresult-date", "default" => true, "filterBy" => "s.date_submitted", "dataToggle" => "date"]);
        // line 52
        yield "

                ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .         // line 55
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 55, $this->source); })())), "orderBy" => "i.ip_address", "text" => "mautic.core.ipaddress", "class" => "col-formresult-ip", "filterBy" => "i.ip_address"]);
        // line 60
        yield "

                ";
        // line 62
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "fields", [], "any", false, false, false, 62);
        // line 63
        yield "                ";
        $context["fieldCount"] = (((isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 63, $this->source); })())) ? (4) : (3));
        // line 64
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 64, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 65
            yield "                    ";
            if ((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 65), (isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 65, $this->source); })())) && (true == CoreExtension::getAttribute($this->env, $this->source, $context["f"], "saveResult", [], "any", false, false, false, 65)))) {
                // line 66
                yield "                      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("formresult." .                 // line 67
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 67, $this->source); })())), "orderBy" => ("r." . CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["f"], "alias", [], "any", false, false, false, 68)), "text" => CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["f"], "label", [], "any", false, false, false, 69), "class" => ("col-formresult-field col-formresult-field" . CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["f"], "id", [], "any", false, false, false, 70)), "filterBy" => ("r." . CoreExtension::getAttribute($this->env, $this->source,                 // line 71
$context["f"], "alias", [], "any", false, false, false, 71))]);
                // line 72
                yield "
                      ";
                // line 73
                $context["fieldCount"] = ((isset($context["fieldCount"]) || array_key_exists("fieldCount", $context) ? $context["fieldCount"] : (function () { throw new RuntimeError('Variable "fieldCount" does not exist.', 73, $this->source); })()) + 1);
                // line 74
                yield "                    ";
            }
            // line 75
            yield "                ";
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
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "            </tr>
        </thead>
        <tbody>
        ";
        // line 79
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 79, $this->source); })())) > 0)) {
            // line 80
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 80, $this->source); })()));
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
                // line 81
                yield "              ";
                $context["item"] = Twig\Extension\CoreExtension::merge($context["item"], ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.results.name", ["%id%" => CoreExtension::getAttribute($this->env, $this->source,                 // line 82
$context["item"], "id", [], "any", false, false, false, 82)])]);
                // line 84
                yield "              <tr>
                  ";
                // line 85
                if ((isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 85, $this->source); })())) {
                    // line 86
                    yield "                  <td>
                      ";
                    // line 87
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                     // line 88
$context["item"], "templateButtons" => ["delete" =>                     // line 89
(isset($context["canDelete"]) || array_key_exists("canDelete", $context) ? $context["canDelete"] : (function () { throw new RuntimeError('Variable "canDelete" does not exist.', 89, $this->source); })())], "route" => "mautic_form_results_action", "langVar" => "form.results", "query" => ["formId" =>                     // line 92
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 92, $this->source); })()), "objectAction" => "delete"]]);
                    // line 93
                    yield "
                  </td>
                  ";
                }
                // line 96
                yield "
                  <td>";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 97));
                yield "</td>
                  <td>
                      ";
                // line 99
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", true, true, false, 99) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 99)))) {
                    // line 100
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 100)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                            ";
                    // line 101
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 101));
                    yield "
                        </a>
                      ";
                }
                // line 104
                yield "                  </td>
                  <td>";
                // line 105
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateSubmitted", [], "array", false, false, false, 105), "UTC");
                yield "</td>
                  <td>";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "ipAddress", [], "array", false, false, false, 106));
                yield "</td>
                  ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "results", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["key"] => $context["r"]) {
                    // line 108
                    yield "                      ";
                    $context["isTextarea"] = ("textarea" == CoreExtension::getAttribute($this->env, $this->source, $context["r"], "type", [], "any", false, false, false, 108));
                    // line 109
                    yield "                      <td ";
                    if ((isset($context["isTextarea"]) || array_key_exists("isTextarea", $context) ? $context["isTextarea"] : (function () { throw new RuntimeError('Variable "isTextarea" does not exist.', 109, $this->source); })())) {
                        yield "class=\"long-text\"";
                    }
                    yield ">
                          ";
                    // line 110
                    if ((isset($context["isTextarea"]) || array_key_exists("isTextarea", $context) ? $context["isTextarea"] : (function () { throw new RuntimeError('Variable "isTextarea" does not exist.', 110, $this->source); })())) {
                        // line 111
                        yield "                              ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "value", [], "any", false, false, false, 111), "html", null, true)));
                        yield "
                          ";
                    } elseif (("file" == CoreExtension::getAttribute($this->env, $this->source,                     // line 112
$context["r"], "type", [], "any", false, false, false, 112))) {
                        // line 113
                        yield "                              <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_file_download", ["submissionId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "array", false, false, false, 113), "field" => $context["key"]]), "html", null, true);
                        yield "\">
                                  ";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "value", [], "any", false, false, false, 114));
                        yield "
                              </a>
                          ";
                    } else {
                        // line 117
                        yield "                              ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "value", [], "any", false, false, false, 117));
                        yield "
                          ";
                    }
                    // line 119
                    yield "                      </td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['r'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                yield "              </tr>
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
            // line 123
            yield "        ";
        } else {
            // line 124
            yield "            <tr>
                <td colspan=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldCount"]) || array_key_exists("fieldCount", $context) ? $context["fieldCount"] : (function () { throw new RuntimeError('Variable "fieldCount" does not exist.', 125, $this->source); })()), "html", null, true);
            yield "\">
                    ";
            // line 126
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
                </td>
            </tr>
        ";
        }
        // line 130
        yield "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">
    ";
        // line 134
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>         // line 135
(isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 135, $this->source); })()), "page" =>         // line 136
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 136, $this->source); })()), "limit" =>         // line 137
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_results", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 138
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "sessionVar" => ("formresult." .         // line 139
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 139, $this->source); })()))]);
        // line 140
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
        return "@MauticForm/Result/_list.html.twig";
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
        return array (  319 => 140,  317 => 139,  316 => 138,  315 => 137,  314 => 136,  313 => 135,  312 => 134,  306 => 130,  299 => 126,  295 => 125,  292 => 124,  289 => 123,  274 => 121,  267 => 119,  261 => 117,  255 => 114,  250 => 113,  248 => 112,  243 => 111,  241 => 110,  234 => 109,  231 => 108,  227 => 107,  223 => 106,  219 => 105,  216 => 104,  210 => 101,  205 => 100,  203 => 99,  198 => 97,  195 => 96,  190 => 93,  188 => 92,  187 => 89,  186 => 88,  185 => 87,  182 => 86,  180 => 85,  177 => 84,  175 => 82,  173 => 81,  155 => 80,  153 => 79,  148 => 76,  134 => 75,  131 => 74,  129 => 73,  126 => 72,  124 => 71,  123 => 70,  122 => 69,  121 => 68,  120 => 67,  118 => 66,  115 => 65,  97 => 64,  94 => 63,  92 => 62,  88 => 60,  86 => 55,  85 => 54,  81 => 52,  79 => 45,  78 => 44,  74 => 42,  72 => 37,  71 => 36,  67 => 34,  65 => 29,  64 => 28,  61 => 27,  57 => 25,  55 => 24,  54 => 23,  52 => 19,  50 => 18,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Result/_list.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Result/_list.html.twig");
    }
}
