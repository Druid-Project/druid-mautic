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

/* @MauticCore/Slots/channelfrequency.html.twig */
class __TwigTemplate_bb843607b7f7164832b0898aab54f70d extends Template
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
        $context["channelNumber"] = 0;
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            yield "<table class=\"table table-hover\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "lead_channels", [], "any", false, false, false, 4), "subscribed_channels", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "choices", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["key"] => $context["channel"]) {
                // line 5
                $context["contactMe"] = CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 5), [], "array", true, true, false, 5);
                // line 6
                $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 6, $this->source); })())) ? ("checked") : (""));
                // line 7
                $context["channelName"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 7)));
                // line 8
                yield "        <tr>
            <td>
                <div class=\"text-left\">
                    <input type=\"hidden\" id=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 11), "html", null, true);
                yield "\"
                           name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "]\"
                           value=\"\">
                    <input type=\"checkbox\" id=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 14), "html", null, true);
                yield "\"
                           name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "]\"
                           onclick=\"togglePreferredChannel(this.value);\"
                           value=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 17));
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 17, $this->source); })()), "html", null, true);
                yield ">
                    <label for=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 18), "html", null, true);
                yield "\" id=\"is-contactable-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 18), "html", null, true);
                yield "\" data-channel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 18, $this->source); })()), "html", null, true);
                yield "\">
                        ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label", ["%channel%" => (isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 19, $this->source); })())]), "html", null, true);
                yield "
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id=\"frequency_";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 26), "html", null, true);
                yield "\" class=\"text-left row\">";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 28
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 28), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 28)), [], "array", true, true, false, 28) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 29
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 29), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 29)), [], "array", true, true, false, 29))) {
                    // line 31
                    if (((                    // line 32
(isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 32, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 33
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lead_channels", [], "any", false, false, false, 33), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 33)), [], "array", false, false, false, 33), "isRendered", [], "any", false, false, false, 33)) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "lead_channels", [], "any", false, false, false, 34), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 34)), [], "array", false, false, false, 34), "isRendered", [], "any", false, false, false, 34))) {
                        // line 36
                        yield "                            <div class=\"col-md-6\" data-contact-frequency=\"1\">
                                <label class=\"text-muted label1\">";
                        // line 37
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lead_channels", [], "any", false, false, false, 37), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 37)), [], "array", false, false, false, 37), "vars", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37)), "html", null, true);
                        yield "</label>
                                ";
                        // line 38
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lead_channels", [], "any", false, false, false, 38), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 38)), [], "array", false, false, false, 38), 'widget');
                        yield "
                                ";
                        // line 39
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lead_channels", [], "any", false, false, false, 39), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 39)), [], "array", false, false, false, 39), 'label');
                        yield "
                                ";
                        // line 40
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "lead_channels", [], "any", false, false, false, 40), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 40)), [], "array", false, false, false, 40), 'widget');
                        yield "
                            </div>";
                    } else {
                        // line 43
                        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "lead_channels", [], "any", false, false, false, 43), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 43)), [], "array", false, false, false, 43), "setRendered", [true], "method", false, false, false, 43);
                        // line 44
                        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lead_channels", [], "any", false, false, false, 44), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 44)), [], "array", false, false, false, 44), "setRendered", [true], "method", false, false, false, 44);
                    }
                }
                // line 48
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 49
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 49), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49)), [], "array", true, true, false, 49) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 50
($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 50), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 50)), [], "array", true, true, false, 50))) {
                    // line 52
                    if (((                    // line 53
(isset($context["showContactPauseDates"]) || array_key_exists("showContactPauseDates", $context) ? $context["showContactPauseDates"] : (function () { throw new RuntimeError('Variable "showContactPauseDates" does not exist.', 53, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 54
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "lead_channels", [], "any", false, false, false, 54), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 54)), [], "array", false, false, false, 54), "isRendered", [], "any", false, false, false, 54)) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "lead_channels", [], "any", false, false, false, 55), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 55)), [], "array", false, false, false, 55), "isRendered", [], "any", false, false, false, 55))) {
                        // line 57
                        yield "                            <div class=\"col-md-6\" data-contact-pause-dates=\"1\">
                                <label class=\"text-muted label3\">";
                        // line 58
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
                        yield "</label>
                                ";
                        // line 59
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lead_channels", [], "any", false, false, false, 59), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 59)), [], "array", false, false, false, 59), 'widget');
                        yield "
                                ";
                        // line 60
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "lead_channels", [], "any", false, false, false, 60), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 60)), [], "array", false, false, false, 60), 'label');
                        yield "
                                ";
                        // line 61
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "lead_channels", [], "any", false, false, false, 61), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 61)), [], "array", false, false, false, 61), 'widget');
                        yield "
                            </div>";
                    } else {
                        // line 64
                        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lead_channels", [], "any", false, false, false, 64), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 64)), [], "array", false, false, false, 64), "setRendered", [true], "method", false, false, false, 64);
                        // line 65
                        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "lead_channels", [], "any", false, false, false, 65), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 65)), [], "array", false, false, false, 65), "setRendered", [true], "method", false, false, false, 65);
                    }
                }
                // line 68
                yield "                </div>
            </td>
        </tr>";
                // line 71
                CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "lead_channels", [], "any", false, false, false, 71), "subscribed_channels", [], "any", false, false, false, 71), "setRendered", [true], "method", false, false, false, 71);
                // line 72
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['channel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "</table>
";
        } else {
            // line 75
            yield "<table class=\"table table-hover\">
    <tbody>
    <tr>
        <td>
            <div class=\"text-left\">
                <input type=\"checkbox\" checked=\"\">
                <label class=\"control-label\">
                    ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label"), "html", null, true);
            yield "</label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div id=\"frequency_email\" class=\"text-left row\">
                <div class=\"col-xs-6\">
                    <label class=\"text-muted label1\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.frequency.number"), "html", null, true);
            yield "</label>
                    <input type=\"text\" class=\"frequency form-control\">
                    <label class=\"text-muted fw-n frequency-label label2\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.frequency.times"), "html", null, true);
            yield "</label>
                    <select class=\"form-control\">
                        <option value=\"\" selected=\"selected\"></option>
                    </select>
                </div>
                <div class=\"col-xs-6\">
                    <label class=\"text-muted label3\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
            yield "</label>
                    <input type=\"date\" class=\"form-control\">
                    <label class=\"frequency-label text-muted fw-n label4\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.contact.end.date"), "html", null, true);
            yield "</label>
                    <input type=\"date\" class=\"form-control\">
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Slots/channelfrequency.html.twig";
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
        return array (  234 => 100,  229 => 98,  220 => 92,  215 => 90,  204 => 82,  195 => 75,  191 => 73,  185 => 72,  183 => 71,  179 => 68,  175 => 65,  173 => 64,  168 => 61,  164 => 60,  160 => 59,  156 => 58,  153 => 57,  151 => 55,  150 => 54,  149 => 53,  148 => 52,  146 => 50,  145 => 49,  144 => 48,  140 => 44,  138 => 43,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  118 => 36,  116 => 34,  115 => 33,  114 => 32,  113 => 31,  111 => 29,  110 => 28,  109 => 27,  106 => 26,  96 => 19,  88 => 18,  82 => 17,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/channelfrequency.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/channelfrequency.html.twig");
    }
}
