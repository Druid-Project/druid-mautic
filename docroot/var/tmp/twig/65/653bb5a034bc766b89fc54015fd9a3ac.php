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

/* @MauticLead/Batch/channel.html.twig */
class __TwigTemplate_2ea36cf06b1f412437d1d6c586d2765c extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["data-submit-callback" => "leadBatchSubmit"]]);
        // line 10
        yield "
<table class=\"table\" width=\"100%\">
    <thead >
    <tr >
        <th>
            <input type=\"checkbox\" id=\"contact_channels_subscribed_channels_0\" name=\"check_all\" onclick=\"Mautic.togglePreferredChannel('all');\" value=\"all\">
        </th>
        <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.channels"), "html", null, true);
        yield "</th>
        <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.frequency"), "html", null, true);
        yield "</th>
        <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.preferred.channels"), "html", null, true);
        yield "</th>
    </tr>
    </thead>
    <tbody>

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "subscribed_channels", [], "array", false, false, false, 24), "vars", [], "any", false, false, false, 24), "choices", [], "array", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 25
            yield "        ";
            $context["contactMe"] = CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 25), [], "array", true, true, false, 25);
            // line 26
            yield "        ";
            $context["isContactable"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 26, $this->source); })())) ? ("") : ("text-muted"));
            // line 27
            yield "        ";
            $context["hidden"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 27, $this->source); })())) ? ("") : ("hide"));
            // line 28
            yield "        ";
            $context["checked"] = (((isset($context["contactMe"]) || array_key_exists("contactMe", $context) ? $context["contactMe"] : (function () { throw new RuntimeError('Variable "contactMe" does not exist.', 28, $this->source); })())) ? ("checked") : (""));
            // line 29
            yield "        ";
            $context["disabled"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["leadChannels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 29), [], "array", true, true, false, 29)) ? ("") : ("disabled"));
            // line 30
            yield "        <tr>
            <th style=\"vertical-align: top\" class=\"col-md-1\">
                <input type=\"checkbox\" id=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 32), "html", null, true);
            yield "\"
                       name=\"contact_channels[subscribed_channels][]\" class=\"control-label\" onclick=\"Mautic.togglePreferredChannel(this.value);\"
                       value=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 34));
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 34, $this->source); })()), "html", null, true);
            yield ">
            </th>
            <td class=\"col-md-1\" style=\"vertical-align: top\">
                <div id=\"is-contactable-";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 37), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["isContactable"]) || array_key_exists("isContactable", $context) ? $context["isContactable"] : (function () { throw new RuntimeError('Variable "isContactable" does not exist.', 37, $this->source); })()), "html", null, true);
            yield " fw-sb\">
                    ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 38)), "html", null, true);
            yield "
                </div>
            </td>
            <td class=\"col-md-9\" style=\"vertical-align: top\">
                <div>
                    <div class=\"pull-left\">
                        ";
            // line 44
            $context["existingFieldClass"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 44)), [], "array", false, false, false, 44), "vars", [], "any", false, false, false, 44), "attr", [], "array", false, false, false, 44), "class", [], "array", false, false, false, 44);
            // line 45
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), ("frequency_number_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 45)), [], "array", false, false, false, 45), 'widget', ["attr" => ["class" => (            // line 47
(isset($context["existingFieldClass"]) || array_key_exists("existingFieldClass", $context) ? $context["existingFieldClass"] : (function () { throw new RuntimeError('Variable "existingFieldClass" does not exist.', 47, $this->source); })()) . " pull-left")]]);
            // line 49
            yield "
                        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 50)), [], "array", false, false, false, 50), 'label');
            yield "
                        <div class=\"frequency-select\">
                          ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), ("frequency_time_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 52)), [], "array", false, false, false, 52), 'widget');
            yield "
                        </div>
                    </div>
                </div>
            </td>
            <td class=\"col-md-1\" style=\"vertical-align: top;\" align=\"center\">
                <input type=\"radio\" id=\"preferred_";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 58), "html", null, true);
            yield "\"
                       name=\"contact_channels[preferred_channel]\" class=\"contact\"
                       value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 60));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "preferred_channel", [], "array", false, false, false, 60), "vars", [], "any", false, false, false, 60), "value", [], "array", false, false, false, 60) == CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 60))) {
                yield "checked";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 60, $this->source); })()), "html", null, true);
            yield ">

            </td>
        </tr>
        <tr style=\"border-top:none\"><th style=\"border-top:none\"></th>
            <td  style=\"border-top:none\"></td>
            <td colspan=\"2\" style=\"border-top:none\">
                <div id=\"frequency_";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 67), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "\">
                    <div>
                        <label class=\"text-muted fw-n\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.frequency.dates.label"), "html", null, true);
            yield "</label>
                    </div>
                    <div>
                        ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), ("contact_pause_start_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 72)), [], "array", false, false, false, 72), 'widget');
            yield "
                        <div style=\"float:left;\">
                            ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 74)), [], "array", false, false, false, 74), 'label');
            yield "
                        </div>
                        ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), ("contact_pause_end_date_" . CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "value", [], "any", false, false, false, 76)), [], "array", false, false, false, 76), 'widget');
            yield "
                    </div>
                </div>
                <div class=\"clearfix\"></div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "    </tbody>
</table>
";
        // line 85
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "preferred_channel", [], "any", false, false, false, 85), "setRendered", [], "any", false, false, false, 85);
        // line 86
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "subscribed_channels", [], "any", false, false, false, 86), "setRendered", [], "any", false, false, false, 86);
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Batch/channel.html.twig";
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
        return array (  208 => 87,  206 => 86,  204 => 85,  200 => 83,  187 => 76,  182 => 74,  177 => 72,  171 => 69,  164 => 67,  148 => 60,  143 => 58,  134 => 52,  129 => 50,  126 => 49,  124 => 47,  122 => 45,  120 => 44,  111 => 38,  105 => 37,  97 => 34,  92 => 32,  88 => 30,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  73 => 25,  69 => 24,  61 => 19,  57 => 18,  53 => 17,  44 => 10,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Batch/channel.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Batch/channel.html.twig");
    }
}
