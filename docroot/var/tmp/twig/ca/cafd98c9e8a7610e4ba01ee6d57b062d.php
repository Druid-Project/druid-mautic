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

/* @MauticLead/Lead/_dnc_large.html.twig */
class __TwigTemplate_45e54c9f5fd7e58496134f8cd328ecdd extends Template
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
        yield "<div id=\"bounceLabel";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
    <div class=\"panel-heading text-center\">
        <h4 class=\"fw-sb\">
            ";
        // line 8
        if ((Twig\Extension\CoreExtension::constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::UNSUBSCRIBED") == CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 8, $this->source); })()), "reason", [], "any", false, false, false, 8))) {
            // line 9
            yield "              <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\LeadBundle\Twig\Extension\DncReasonExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 9, $this->source); })()), "reason", [], "any", false, false, false, 9)), "html", null, true);
            yield "\">
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_channel", ["%channel%" => Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 10, $this->source); })()), "channel", [], "any", false, false, false, 10))]), "html", null, true);
            yield "
              </span>
            ";
        } elseif ((Twig\Extension\CoreExtension::constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::MANUAL") == CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 12, $this->source); })()), "reason", [], "any", false, false, false, 12))) {
            // line 13
            yield "              <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\LeadBundle\Twig\Extension\DncReasonExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 13, $this->source); })()), "reason", [], "any", false, false, false, 13)), "html", null, true);
            yield "\">
                ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_channel", ["%channel%" => Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 14, $this->source); })()), "channel", [], "any", false, false, false, 14))]), "html", null, true);
            yield "
                <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.remove_dnc_status"), "html", null, true);
            yield "\">
                  <i class=\"ri-close-line\" onclick=\"Mautic.removeBounceStatus(this, ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 16, $this->source); })()), "channel", [], "any", false, false, false, 16), "html", null, true);
            yield "');\"></i>
                </span>
              </span>
            ";
        } elseif ((Twig\Extension\CoreExtension::constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED") == CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 19, $this->source); })()), "reason", [], "any", false, false, false, 19))) {
            // line 20
            yield "              <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 20, $this->source); })()), "comments", [], "any", false, false, false, 20));
            yield "\">
                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_bounced_channel", ["%channel%" => Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 21, $this->source); })()), "channel", [], "any", false, false, false, 21))]), "html", null, true);
            yield "
                <span data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.remove_dnc_status"), "html", null, true);
            yield "\">
                  <i class=\"ri-close-line\" onclick=\"Mautic.removeBounceStatus(this, ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 23, $this->source); })()), "channel", [], "any", false, false, false, 23), "html", null, true);
            yield "');\"></i>
                </span>
              </span>
            ";
        }
        // line 27
        yield "        </h4>
        <hr>
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
        return "@MauticLead/Lead/_dnc_large.html.twig";
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
        return array (  108 => 27,  99 => 23,  95 => 22,  91 => 21,  86 => 20,  84 => 19,  76 => 16,  72 => 15,  68 => 14,  63 => 13,  61 => 12,  56 => 10,  51 => 9,  49 => 8,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_dnc_large.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_dnc_large.html.twig");
    }
}
