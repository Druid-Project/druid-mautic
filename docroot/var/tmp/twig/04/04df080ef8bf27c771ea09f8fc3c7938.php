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

/* @MauticCore/Slots/preferredchannel.html.twig */
class __TwigTemplate_b27337aaffeacf36eeadff28de78fa64 extends Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lead_channels", [], "any", false, true, false, 2), "preferred_channel", [], "any", true, true, false, 2)) {
                // line 3
                yield "        ";
                if ((array_key_exists("showContactPreferredChannels", $context) && (isset($context["showContactPreferredChannels"]) || array_key_exists("showContactPreferredChannels", $context) ? $context["showContactPreferredChannels"] : (function () { throw new RuntimeError('Variable "showContactPreferredChannels" does not exist.', 3, $this->source); })()))) {
                    // line 4
                    yield "            <div class=\"preferred_channel text-left\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "lead_channels", [], "any", false, false, false, 4), "preferred_channel", [], "any", false, false, false, 4), 'row');
                    yield "</div>
        ";
                }
                // line 6
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "lead_channels", [], "any", false, false, false, 6), "preferred_channel", [], "any", false, false, false, 6), "setRendered", [true], "method", false, false, false, 6);
                // line 7
                yield "    ";
            }
        } else {
            // line 9
            yield "  <div class=\"preferred_channel text-left\">
      <div class=\"row\">
          <div class=\"form-group col-xs-12 \">
              <label class=\"control-label\">
                  ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.frequency.preferred.channel"), "html", null, true);
            yield "
              </label>
              <div class=\"choice-wrapper\">
                  <select class=\"form-control\">
                      <option value=\"email\" selected=\"selected\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.email"), "html", null, true);
            yield "</option>
                  </select></div>
          </div>
      </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Slots/preferredchannel.html.twig";
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
        return array (  76 => 17,  69 => 13,  63 => 9,  59 => 7,  56 => 6,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/preferredchannel.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/preferredchannel.html.twig");
    }
}
