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

/* @MauticPage/Result/_list.html.twig */
class __TwigTemplate_4d1679ea75a3b1d9f33f141ae92e67fc extends Template
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
        // line 6
        $context["pageId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6);
        // line 7
        yield "<div class=\"table-responsive table-responsive-force\">
    <table class=\"table table-hover pageresult-list\" id=\"pageResultsTable\">
        <thead>
            <tr>
                ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 12
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 12, $this->source); })())), "orderBy" => "s.id", "text" => "mautic.form.report.submission.id", "class" => "col-pageresult-id", "filterBy" => "s.id"]);
        // line 17
        yield "

                ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 20
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 20, $this->source); })())), "orderBy" => "s.lead_id", "text" => "mautic.lead.report.contact_id", "class" => "col-pageresult-lead-id", "filterBy" => "s.lead_id"]);
        // line 25
        yield "

                ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 28
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 28, $this->source); })())), "orderBy" => "s.form_id", "text" => "mautic.form.report.form_id", "class" => "col-pageresult-form-id", "filterBy" => "s.form_id"]);
        // line 33
        yield "

                ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 36
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 36, $this->source); })())), "orderBy" => "s.date_submitted", "text" => "mautic.form.result.thead.date", "class" => "col-pageresult-date", "default" => true, "filterBy" => "s.date_submitted", "dataToggle" => "date"]);
        // line 43
        yield "

                ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("pageresult." .         // line 46
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 46, $this->source); })())), "orderBy" => "i.ip_address", "text" => "mautic.core.ipaddress", "class" => "col-pageresult-ip", "filterBy" => "i.ip_address"]);
        // line 51
        yield "
            </tr>
        </thead>
        <tbody>
        ";
        // line 55
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 55, $this->source); })())) > 0)) {
            // line 56
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                yield "              <tr>
                  <td>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 58));
                yield "</td>
                  <td>
                      ";
                // line 60
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", true, true, false, 60)) {
                    // line 61
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 61)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "leadId", [], "any", false, false, false, 62));
                    // line 63
                    yield "</a>
                      ";
                }
                // line 65
                yield "                  </td>
                  <td>
                      ";
                // line 67
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "formId", [], "any", true, true, false, 67)) {
                    // line 68
                    yield "                      <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "formId", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">";
                    // line 69
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "formId", [], "any", false, false, false, 69));
                    // line 70
                    yield "</a>
                      ";
                }
                // line 72
                yield "                  </td>
                  <td>";
                // line 73
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dateSubmitted", [], "any", false, false, false, 73), "UTC");
                yield "</td>
                  <td>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "ipAddress", [], "any", false, false, false, 74));
                yield "</td>
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "        ";
        } else {
            // line 78
            yield "            <tr>
                <td colspan=\"4\">
                    ";
            // line 80
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
                </td>
            </tr>
        ";
        }
        // line 84
        yield "        </tbody>
    </table>
</div>
<div class=\"panel-footer\">
    ";
        // line 88
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>         // line 89
(isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 89, $this->source); })()), "page" =>         // line 90
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()), "limit" =>         // line 91
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 91, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_page_results", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 92
(isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new RuntimeError('Variable "activePage" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "sessionVar" => ("pageresult." .         // line 93
(isset($context["pageId"]) || array_key_exists("pageId", $context) ? $context["pageId"] : (function () { throw new RuntimeError('Variable "pageId" does not exist.', 93, $this->source); })()))]);
        // line 94
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
        return "@MauticPage/Result/_list.html.twig";
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
        return array (  173 => 94,  171 => 93,  170 => 92,  169 => 91,  168 => 90,  167 => 89,  166 => 88,  160 => 84,  153 => 80,  149 => 78,  146 => 77,  137 => 74,  133 => 73,  130 => 72,  126 => 70,  124 => 69,  120 => 68,  118 => 67,  114 => 65,  110 => 63,  108 => 62,  104 => 61,  102 => 60,  97 => 58,  94 => 57,  89 => 56,  87 => 55,  81 => 51,  79 => 46,  78 => 45,  74 => 43,  72 => 36,  71 => 35,  67 => 33,  65 => 28,  64 => 27,  60 => 25,  58 => 20,  57 => 19,  53 => 17,  51 => 12,  50 => 11,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Result/_list.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Result/_list.html.twig");
    }
}
