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

/* @MauticPage/Trackable/click_counts.html.twig */
class __TwigTemplate_f0cb16dab3411c9ef090e59ee4a3257e extends Template
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
        $context["showConversionRate"] = ((array_key_exists("showConversionRate", $context)) ? ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 1, $this->source); })())) : (false));
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover click-list\"
                ";
            // line 5
            if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 5, $this->source); })())) {
                yield " data-conversion-rate-table data-entity-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
                yield "\"";
            }
            yield ">
            <thead>
            <tr>
                <td>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_url"), "html", null, true);
            yield "</td>
                <td>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_count"), "html", null, true);
            yield "</td>
                <td>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_unique_count"), "html", null, true);
            yield "</td>
                ";
            // line 11
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("click_counts_headers", $context);
            yield "
                ";
            // line 12
            if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 12, $this->source); })())) {
                // line 13
                yield "                    <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_conversion_rate"), "html", null, true);
                yield "</td>
                ";
            }
            // line 15
            yield "                <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_track_id"), "html", null, true);
            yield "</td>
            </tr>
            </thead>
            <tbody>
                    ";
            // line 19
            $context["totalClicks"] = 0;
            // line 20
            yield "                    ";
            $context["totalUniqueClicks"] = 0;
            // line 21
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 22
                yield "                        ";
                $context["totalClicks"] = ((isset($context["totalClicks"]) || array_key_exists("totalClicks", $context) ? $context["totalClicks"] : (function () { throw new RuntimeError('Variable "totalClicks" does not exist.', 22, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["link"], "hits", [], "any", false, false, false, 22));
                // line 23
                yield "                        ";
                $context["totalUniqueClicks"] = ((isset($context["totalUniqueClicks"]) || array_key_exists("totalUniqueClicks", $context) ? $context["totalUniqueClicks"] : (function () { throw new RuntimeError('Variable "totalUniqueClicks" does not exist.', 23, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 23));
                // line 24
                yield "                        <tr>
                            <td class=\"long-text\"><a href=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 25), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 25), "html", null, true);
                yield "</a></td>
                            <td class=\"text-center\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "hits", [], "any", false, false, false, 26), "html", null, true);
                yield "</td>
                            <td class=\"text-center\">
                                <span class=\"mt-xs label label-primary\">
                        ";
                // line 29
                if ((array_key_exists("channel", $context) && array_key_exists("entity", $context))) {
                    // line 30
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (((((((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source") . ":") . (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 30, $this->source); })())) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source_id")) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "getId", [], "method", false, false, false, 30)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_id")) . ":") . CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 30))]), "html", null, true);
                    yield "\"
                                data-toggle=\"tooltip\"
                                title=\"";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.simple.tooltip"), "html", null, true);
                    yield "\">
                                ";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 33), "html", null, true);
                    yield "
                            </a>
                        ";
                } else {
                    // line 36
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 36), "html", null, true);
                    yield "
                        ";
                }
                // line 38
                yield "                        </span>
                            </td>
                            ";
                // line 40
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("click_counts", Twig\Extension\CoreExtension::merge($context, ["redirect_id" => CoreExtension::getAttribute($this->env, $this->source, $context["link"], "redirect_id", [], "any", false, false, false, 40)]));
                yield "
                            ";
                // line 41
                if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 41, $this->source); })())) {
                    // line 42
                    yield "                                <td data-conversion-rate-cell data-unique-hits=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "unique_hits", [], "any", false, false, false, 42), "html", null, true);
                    yield "\"><div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div></td>
                            ";
                }
                // line 44
                yield "                            <td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "redirect_id", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                        </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "
                <tr>
                    <td class=\"long-text\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.total_clicks"), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalClicks"]) || array_key_exists("totalClicks", $context) ? $context["totalClicks"] : (function () { throw new RuntimeError('Variable "totalClicks" does not exist.', 50, $this->source); })()), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">
                        <span class=\"mt-xs label label-primary\">
                        ";
            // line 53
            if ((array_key_exists("channel", $context) && array_key_exists("entity", $context))) {
                // line 54
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source") . ":") .                 // line 55
(isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 55, $this->source); })())) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.page_source_id")) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "getId", [], "method", false, false, false, 55))]), "html", null, true);
                yield "\"
                                data-toggle=\"tooltip\"
                                title=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.simple.tooltip"), "html", null, true);
                yield "\">
                                ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUniqueClicks"]) || array_key_exists("totalUniqueClicks", $context) ? $context["totalUniqueClicks"] : (function () { throw new RuntimeError('Variable "totalUniqueClicks" does not exist.', 58, $this->source); })()), "html", null, true);
                yield "
                            </a>
                        ";
            } else {
                // line 61
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUniqueClicks"]) || array_key_exists("totalUniqueClicks", $context) ? $context["totalUniqueClicks"] : (function () { throw new RuntimeError('Variable "totalUniqueClicks" does not exist.', 61, $this->source); })()), "html", null, true);
                yield "
                        ";
            }
            // line 63
            yield "                        </span>
                    </td>
                    ";
            // line 65
            if ((isset($context["showConversionRate"]) || array_key_exists("showConversionRate", $context) ? $context["showConversionRate"] : (function () { throw new RuntimeError('Variable "showConversionRate" does not exist.', 65, $this->source); })())) {
                // line 66
                yield "                        <td data-conversion-rate-total-cell>
                            <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
                            <i class=\"ri-question-line\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" data-original-title=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.total_conversion_rate_tooltip"), "html", null, true);
                yield "\"></i>
                        </td>
                    ";
            }
            // line 71
            yield "                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
";
        } else {
            // line 77
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["header" => "mautic.trackable.click_counts.header_none", "message" => "mautic.trackable.click_counts.none"]);
            // line 78
            yield "<div class=\"clearfix\"></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/Trackable/click_counts.html.twig";
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
        return array (  238 => 78,  236 => 77,  228 => 71,  222 => 68,  218 => 66,  216 => 65,  212 => 63,  206 => 61,  200 => 58,  196 => 57,  191 => 55,  189 => 54,  187 => 53,  181 => 50,  177 => 49,  173 => 47,  163 => 44,  157 => 42,  155 => 41,  151 => 40,  147 => 38,  141 => 36,  135 => 33,  131 => 32,  125 => 30,  123 => 29,  117 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  97 => 21,  94 => 20,  92 => 19,  84 => 15,  78 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  50 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Trackable/click_counts.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Trackable/click_counts.html.twig");
    }
}
