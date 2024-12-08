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

/* @MauticEmail/Lead/preference_options.html.twig */
class __TwigTemplate_6c97d69cedebd7ffefa63babb76ac11a extends Template
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
        $context["leadId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 1, $this->source); })()), "getId", [], "method", false, false, false, 1);
        // line 2
        $context["leadName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 2, $this->source); })()), "getPrimaryIdentifier", [], "method", false, false, false, 2);
        // line 3
        $context["channelNumber"] = 0;
        // line 4
        yield "
<script>
    function togglePreferredChannel(channel){
        const status = document.getElementById(channel).checked;

        const fields = [
            'lead_contact_frequency_rules_lead_channels_frequency_number_' + channel,
            'lead_contact_frequency_rules_lead_channels_frequency_time_' + channel,
            'lead_contact_frequency_rules_lead_channels_contact_pause_start_date_' + channel,
            'lead_contact_frequency_rules_lead_channels_contact_pause_end_date_' + channel
        ];

        // disable the input fields if the main checkbox is disabled
        for (let index = 0; index < fields.length; index++) {
            const field = document.getElementById(fields[index]);
            if (field) {
                field.disabled = !status;
            }
        }
    }
</script>
<div class=\"row text-left\">
    ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["render_rest" => false]);
        yield "
    <div class=\"col-xs-12 col-md-8 col-md-offset-2\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h1 class=\"panel-title\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.message.preferences"), "html", null, true);
        yield "</h1>
            </div>
            <div class=\"panel-body\">
                <div class=\"the-price\">
                    <h4>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</h4>
                    <small>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.message.preferences.descr"), "html", null, true);
        yield "</small>
                </div>
                <table class=\"table table-hover\">
                    ";
        // line 38
        if ((isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 38, $this->source); })())) {
            // line 39
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "lead_channels", [], "any", false, false, false, 39), "subscribed_channels", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "choices", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["key"] => $context["channel"]) {
                // line 40
                yield "                            ";
                $context["contactMe"] = CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 40), [], "array", true, true, false, 40);
                // line 41
                yield "                            ";
                $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 41, $this->source); })())) ? ("checked") : (""));
                // line 42
                yield "                            ";
                $context["channelName"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 42)));
                // line 43
                yield "                            <tr>
                                <td>
                                    <div class=\"text-left\">
                                        <input type=\"hidden\" id=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 46), "html", null, true);
                yield "-hidden\"
                                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "]\"
                                               value=\"\">
                                        <input type=\"checkbox\" id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49), "html", null, true);
                yield "\"
                                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "]\"
                                               onclick=\"togglePreferredChannel(this.value);\"
                                               value=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52));
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 52, $this->source); })()), "html", null, true);
                yield ">
                                        <label for=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53), "html", null, true);
                yield "\" id=\"is-contactable-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53), "html", null, true);
                yield "\">
                                            ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.me.label", ["%channel%" => (isset($context["channelName"]) || array_key_exists("channelName", $context) ? $context["channelName"] : (function () { throw new RuntimeError('Variable "channelName" does not exist.', 54, $this->source); })())]), "html", null, true);
                yield "
                                        </label>
                                    </div>
                                </td>
                            </tr>";
                // line 59
                CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "lead_channels", [], "any", false, false, false, 59), "subscribed_channels", [], "any", false, false, false, 59), "setRendered", [true], "method", false, false, false, 59);
                // line 60
                yield "                            <tr>
                                <td>
                                    <div id=\"frequency_<?php echo \$channel->value; ?>\" class=\"text-left row\">
                                        ";
                // line 63
                if ((isset($context["showContactFrequency"]) || array_key_exists("showContactFrequency", $context) ? $context["showContactFrequency"] : (function () { throw new RuntimeError('Variable "showContactFrequency" does not exist.', 63, $this->source); })())) {
                    // line 64
                    yield "                                            <div class=\"col-md-6\" data-contact-frequency=\"1\">
                                                <label class=\"text-muted\">";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "lead_channels", [], "any", false, false, false, 65), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 65)), [], "array", false, false, false, 65), "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65)), "html", null, true);
                    yield "</label>
                                                ";
                    // line 66
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "lead_channels", [], "any", false, false, false, 66), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 66)), [], "array", false, false, false, 66), 'widget');
                    yield "
                                                ";
                    // line 67
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "lead_channels", [], "any", false, false, false, 67), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 67)), [], "array", false, false, false, 67), 'label');
                    yield "
                                                ";
                    // line 68
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "lead_channels", [], "any", false, false, false, 68), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 68)), [], "array", false, false, false, 68), 'widget');
                    yield "
                                            </div>
                                        ";
                }
                // line 71
                yield "                                        ";
                if ((isset($context["showContactPauseDates"]) || array_key_exists("showContactPauseDates", $context) ? $context["showContactPauseDates"] : (function () { throw new RuntimeError('Variable "showContactPauseDates" does not exist.', 71, $this->source); })())) {
                    // line 72
                    yield "                                            <div class=\"col-md-6\" data-contact-pause-dates=\"1\">
                                                <label class=\"text-muted\">";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
                    yield "</label>
                                                ";
                    // line 74
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "lead_channels", [], "any", false, false, false, 74), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 74)), [], "array", false, false, false, 74), 'widget');
                    yield "
                                                ";
                    // line 75
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "lead_channels", [], "any", false, false, false, 75), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 75)), [], "array", false, false, false, 75), 'label');
                    yield "
                                                ";
                    // line 76
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "lead_channels", [], "any", false, false, false, 76), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 76)), [], "array", false, false, false, 76), 'widget');
                    yield "
                                            </div>
                                        ";
                }
                // line 79
                yield "                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['channel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                    ";
        }
        // line 84
        yield "                </table>
                ";
        // line 85
        if ((isset($context["showContactPreferredChannels"]) || array_key_exists("showContactPreferredChannels", $context) ? $context["showContactPreferredChannels"] : (function () { throw new RuntimeError('Variable "showContactPreferredChannels" does not exist.', 85, $this->source); })())) {
            // line 86
            yield "                    <hr />
                    <div id=\"preferred_channel\" class=\"text-left\">";
            // line 87
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "lead_channels", [], "any", false, false, false, 87), "preferred_channel", [], "any", false, false, false, 87), 'row');
            yield "</div>
                ";
        }
        // line 89
        yield "                ";
        $context["segmentCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lead_lists", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "lead_lists", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "choices", [], "any", false, false, false, 89))) : (0));
        // line 90
        yield "                ";
        if (((isset($context["showContactSegments"]) || array_key_exists("showContactSegments", $context) ? $context["showContactSegments"] : (function () { throw new RuntimeError('Variable "showContactSegments" does not exist.', 90, $this->source); })()) && ((isset($context["segmentCount"]) || array_key_exists("segmentCount", $context) ? $context["segmentCount"] : (function () { throw new RuntimeError('Variable "segmentCount" does not exist.', 90, $this->source); })()) > 0))) {
            // line 91
            yield "                    <hr />
                    <div id=\"contact-segments\">
                        <div class=\"text-left\">";
            // line 93
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "lead_lists", [], "any", false, false, false, 93), 'label');
            yield "</div>
                        ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "lead_lists", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["key"] => $context["leadList"]) {
                // line 95
                yield "                            <div id=\"segment-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" class=\"text-left\">
                                ";
                // line 96
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'widget');
                yield "
                                ";
                // line 97
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'label');
                yield "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['leadList'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "                    </div>
                ";
        }
        // line 102
        yield "                ";
        $context["categoryCount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "global_categories", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "global_categories", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "choices", [], "any", false, false, false, 102))) : (0));
        // line 103
        yield "                ";
        if (((isset($context["showContactCategories"]) || array_key_exists("showContactCategories", $context) ? $context["showContactCategories"] : (function () { throw new RuntimeError('Variable "showContactCategories" does not exist.', 103, $this->source); })()) && ((isset($context["categoryCount"]) || array_key_exists("categoryCount", $context) ? $context["categoryCount"] : (function () { throw new RuntimeError('Variable "categoryCount" does not exist.', 103, $this->source); })()) > 0))) {
            // line 104
            yield "                    <hr />
                    <div id=\"global-categories\" class=\"text-left\">
                        <div>";
            // line 106
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "global_categories", [], "any", false, false, false, 106), 'label');
            yield "</div>
                        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "global_categories", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 108
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'widget');
                yield "
                            ";
                // line 109
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'label');
                yield "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                    </div>
                ";
        }
        // line 113
        yield "
                ";
        // line 114
        if (array_key_exists("successMessage", $context)) {
            // line 115
            yield "                    <hr />
                    <div id=\"success-message-text\">
                        ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 117, $this->source); })()), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 120
        yield "                <hr />
                <div id=\"do-not-contact-text\">
                    ";
        // line 122
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.unsubscribe_all.text", ["%link%" => (isset($context["dncUrl"]) || array_key_exists("dncUrl", $context) ? $context["dncUrl"] : (function () { throw new RuntimeError('Variable "dncUrl" does not exist.', 122, $this->source); })())]));
        yield "
                </div>
            </div>
            <div class=\"panel-footer text-left\">
                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "buttons", [], "any", false, false, false, 126), "save", [], "any", false, false, false, 126), 'row');
        yield "
            </div>
        </div>
    </div>
    <div class=\"hidden\">
        ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'rest');
        yield "
    </div>
    ";
        // line 133
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
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
        return "@MauticEmail/Lead/preference_options.html.twig";
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
        return array (  347 => 133,  342 => 131,  334 => 126,  327 => 122,  323 => 120,  317 => 117,  313 => 115,  311 => 114,  308 => 113,  304 => 111,  296 => 109,  291 => 108,  287 => 107,  283 => 106,  279 => 104,  276 => 103,  273 => 102,  269 => 100,  260 => 97,  256 => 96,  251 => 95,  247 => 94,  243 => 93,  239 => 91,  236 => 90,  233 => 89,  228 => 87,  225 => 86,  223 => 85,  220 => 84,  217 => 83,  208 => 79,  202 => 76,  198 => 75,  194 => 74,  190 => 73,  187 => 72,  184 => 71,  178 => 68,  174 => 67,  170 => 66,  166 => 65,  163 => 64,  161 => 63,  156 => 60,  154 => 59,  147 => 54,  141 => 53,  135 => 52,  130 => 50,  126 => 49,  121 => 47,  117 => 46,  112 => 43,  109 => 42,  106 => 41,  103 => 40,  98 => 39,  96 => 38,  90 => 35,  86 => 34,  79 => 30,  72 => 26,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Lead/preference_options.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Lead/preference_options.html.twig");
    }
}
