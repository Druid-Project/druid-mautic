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

/* @MauticLead/Lead/_devices.html.twig */
class __TwigTemplate_0c864dfb89fe1c737724624bf724787b extends Template
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
        yield "<table class=\"table table-hover mb-0\">
    <thead>
        <tr>
            <th class=\"timeline-icon\"></th>
            <th>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device.header"), "html", null, true);
        yield "</th>
            <th>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_os_name.header"), "html", null, true);
        yield "</th>
            <th>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_os_version.header"), "html", null, true);
        yield "</th>
            <th>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_browser.header"), "html", null, true);
        yield "</th>
            <th>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.device_brand.header"), "html", null, true);
        yield "</th>
            <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.added"), "html", null, true);
        yield "</th>
        </tr>
    </thead>
    <tbody>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 19
            yield "          <tr>
              <td>
                  <i class=\"fa ri-fw ri-";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["device"], "device", [], "any", false, false, false, 21), "html", null, true);
            yield "-line\"></i>
              </td>
              <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.lead.device." . CoreExtension::getAttribute($this->env, $this->source, $context["device"], "device", [], "array", false, false, false, 23)), Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["device"], "device", [], "array", false, false, false, 23))), "html", null, true);
            yield "</td>
              <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["device"], "device_os_name", [], "array", false, false, false, 24), "html", null, true);
            yield "</td>
              <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["device"], "device_os_version", [], "array", false, false, false, 25), "html", null, true);
            yield "</td>
              <td>
                  ";
            // line 27
            $context["clientInfo"] = Mautic\CoreBundle\Helper\Serializer::decode(CoreExtension::getAttribute($this->env, $this->source, $context["device"], "client_info", [], "any", false, false, false, 27));
            // line 28
            yield "                  ";
            (((is_iterable((isset($context["clientInfo"]) || array_key_exists("clientInfo", $context) ? $context["clientInfo"] : (function () { throw new RuntimeError('Variable "clientInfo" does not exist.', 28, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["clientInfo"] ?? null), "name", [], "any", true, true, false, 28))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["clientInfo"]) || array_key_exists("clientInfo", $context) ? $context["clientInfo"] : (function () { throw new RuntimeError('Variable "clientInfo" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true)) : (yield ""));
            yield "
              </td>
              <td>
                  ";
            // line 32
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(DeviceDetector\Parser\Device\AbstractDeviceParser::getFullName(CoreExtension::getAttribute($this->env, $this->source, $context["device"], "device_brand", [], "array", false, false, false, 32)), "html", null, true);
            yield "
              </td>
              <td>";
            // line 34
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["device"], "date_added", [], "array", false, false, false, 34), "utc");
            yield "</td>
          </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['device'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "    </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_devices.html.twig";
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
        return array (  125 => 37,  116 => 34,  110 => 32,  103 => 28,  101 => 27,  96 => 25,  92 => 24,  88 => 23,  83 => 21,  79 => 19,  75 => 18,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_devices.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_devices.html.twig");
    }
}
