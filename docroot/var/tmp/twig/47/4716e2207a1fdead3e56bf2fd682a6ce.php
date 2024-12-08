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

/* @MauticLead/Lead/frequency.html.twig */
class __TwigTemplate_ceb6584929daeafe856e80303b5dc377 extends Template
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
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        yield "
<ul class=\"nav nav-tabs nav-tabs-contained\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#channels\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.channels"), "html", null, true);
        yield "</a></li>
    <li><a data-toggle=\"tab\" href=\"#categories\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.categories"), "html", null, true);
        yield "</a></li>
    <li><a data-toggle=\"tab\" href=\"#segments\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.segments"), "html", null, true);
        yield "</a></li>
</ul>
<div class=\"tab-content\">
    <div id=\"channels\" class=\"tab-pane fade in active\">
        <table class=\"table\" width=\"100%\">
            <thead>
            <tr>
                <th>
                    <input type=\"checkbox\" id=\"lead_contact_frequency_rules_subscribed_channels_0\" name=\"check_all\" onclick=\"Mautic.togglePreferredChannel('all');\" value=\"all\">
                </th>
                <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.channels"), "html", null, true);
        yield "</th>
                <th>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.frequency"), "html", null, true);
        yield "</th>
                <th>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.channels"), "html", null, true);
        yield "</th>
            </tr>
            </thead>
            <tbody >

            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "lead_channels", [], "any", false, false, false, 26), "subscribed_channels", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "choices", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 27
            yield "                ";
            $context["isContactable"] =  !CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 27), [], "array", true, true, false, 27);
            // line 28
            yield "                ";
            $context["isHidden"] =  !CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 28), [], "array", true, true, false, 28);
            // line 29
            yield "                ";
            $context["isChecked"] = CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 29), [], "array", true, true, false, 29);
            // line 30
            yield "                ";
            $context["isDisabled"] =  !CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 30), [], "array", true, true, false, 30);
            // line 31
            yield "                <tr>
                    <th style=\"vertical-align: top\" class=\"col-md-1\">
                        <input type=\"checkbox\"
                               id=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 34), "html", null, true);
            yield "\"
                               name=\"lead_contact_frequency_rules[lead_channels][subscribed_channels][]\"
                               class=\"control-label\"
                               onclick=\"Mautic.togglePreferredChannel(this.value);\"
                               value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 38));
            yield "\"
                               ";
            // line 39
            if ((isset($context["isChecked"]) || array_key_exists("isChecked", $context) ? $context["isChecked"] : (function () { throw new RuntimeError('Variable "isChecked" does not exist.', 39, $this->source); })())) {
                yield "checked";
            }
            yield ">
                    </th>
                    <td class=\"col-md-1\" style=\"vertical-align: top\">
                        <div id=\"is-contactable-";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 42), "html", null, true);
            yield "\" class=\"";
            if ( !(isset($context["isContactable"]) || array_key_exists("isContactable", $context) ? $context["isContactable"] : (function () { throw new RuntimeError('Variable "isContactable" does not exist.', 42, $this->source); })())) {
                yield "text-muted";
            }
            yield " fw-sb\">
                            ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 43)), "html", null, true);
            yield "
                        </div>
                    </td>
                    <td class=\"col-md-9\" style=\"vertical-align: top\">
                            <div>
                                <div class=\"pull-left\">
                                    ";
            // line 49
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "lead_channels", [], "any", false, false, false, 49), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 49)), [], "array", false, false, false, 49), "vars", [], "any", false, false, false, 49), "attr", [], "any", false, false, false, 49);
            // line 50
            yield "                                    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })()), ["class" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })()), "class", [], "any", false, false, false, 50) . " pull-left")]);
            // line 51
            yield "                                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "lead_channels", [], "any", false, false, false, 51), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 51)), [], "array", false, false, false, 51), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 51, $this->source); })())]);
            yield "
                                    ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "lead_channels", [], "any", false, false, false, 52), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52)), [], "array", false, false, false, 52), 'label');
            yield "
                                    <div class=\"frequency-select\">";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lead_channels", [], "any", false, false, false, 53), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 53)), [], "array", false, false, false, 53), 'widget');
            yield "</div>
                                </div>
                            </div>
                    </td>
                <td class=\"col-md-1\" style=\"vertical-align: top;\" align=\"center\">
                        <input type=\"radio\"
                               id=\"preferred_";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 59), "html", null, true);
            yield "\"
                               name=\"lead_contact_frequency_rules[lead_channels][preferred_channel]\"
                               class=\"contact\"
                               value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 62));
            yield "\"
                               ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lead_channels", [], "array", false, false, false, 63), "preferred_channel", [], "array", false, false, false, 63), "vars", [], "any", false, false, false, 63), "value", [], "array", false, false, false, 63) == CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 63))) {
                yield "checked";
            }
            // line 64
            yield "                               ";
            if ((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 64, $this->source); })())) {
                yield "disabled";
            }
            yield ">
                </td>
                </tr>
                <tr style=\"border-top:none\"><th style=\"border-top:none\"></th>
                    <td  style=\"border-top:none\"></td>
                    <td colspan=\"2\" style=\"border-top:none\">
                        <div id=\"frequency_";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 70), "html", null, true);
            yield "\"
                             class=\"";
            // line 71
            if ((isset($context["isHidden"]) || array_key_exists("isHidden", $context) ? $context["isHidden"] : (function () { throw new RuntimeError('Variable "isHidden" does not exist.', 71, $this->source); })())) {
                yield "hide";
            }
            yield "\">
                            <div>
                                <label class=\"text-muted fw-n\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
            yield "</label>
                            </div>
                            <div>
                                ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "lead_channels", [], "array", false, false, false, 76), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 76)), [], "array", false, false, false, 76), 'widget');
            yield "
                                <div style=\"float:left;\">
                                    ";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "lead_channels", [], "array", false, false, false, 78), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 78)), [], "array", false, false, false, 78), 'label');
            yield "
                                </div>
                                ";
            // line 80
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "lead_channels", [], "array", false, false, false, 80), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 80)), [], "array", false, false, false, 80), 'widget');
            yield "
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </td>
                </tr>
                ";
            // line 86
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "lead_channels", [], "any", false, false, false, 86), "setRendered", [], "method", false, false, false, 86);
            // line 87
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "            </tbody>
        </table>
    </div>
    <div id=\"categories\" class=\"tab-pane fade\">
        <table class=\"table\" width=\"100%\">
            <thead>
            <tr>
                <th>";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "global_categories", [], "any", false, false, false, 95), 'row');
        yield "</th>
            </tr>
            </thead>
        </table>
    </div>
    <div id=\"segments\" class=\"tab-pane fade\">
        <table class=\"table\" width=\"100%\">
            <thead>
              <tr>
                  <th>";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "lead_lists", [], "any", false, false, false, 104), 'row');
        yield "</th>
              </tr>
            </thead>
        </table>
    </div>
</div>
";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/frequency.html.twig";
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
        return array (  264 => 110,  255 => 104,  243 => 95,  234 => 88,  228 => 87,  226 => 86,  217 => 80,  212 => 78,  207 => 76,  201 => 73,  194 => 71,  190 => 70,  178 => 64,  174 => 63,  170 => 62,  164 => 59,  155 => 53,  151 => 52,  146 => 51,  143 => 50,  141 => 49,  132 => 43,  124 => 42,  116 => 39,  112 => 38,  105 => 34,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  84 => 26,  76 => 21,  72 => 20,  68 => 19,  55 => 9,  51 => 8,  47 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/frequency.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/frequency.html.twig");
    }
}
