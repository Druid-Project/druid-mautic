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

/* @MauticLead/Lead/email.html.twig */
class __TwigTemplate_261d195b8976d721c9c1921c3774076a extends Template
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
        if (((isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 6, $this->source); })()) && (Twig\Extension\CoreExtension::constant("\\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED") == CoreExtension::getAttribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 6, $this->source); })()), "reason", [], "any", false, false, false, 6)))) {
            // line 7
            yield "    <div class=\"alert alert-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.do.not.contact_bounced"), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dnc"]) || array_key_exists("dnc", $context) ? $context["dnc"] : (function () { throw new RuntimeError('Variable "dnc" does not exist.', 7, $this->source); })()), "comments", [], "any", false, false, false, 7), "html", null, true);
            yield "</div>
";
        } else {
            // line 9
            yield "    ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
            yield "
    ";
            // line 10
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "fromname", [], "array", false, false, false, 10), 'row');
            yield "
    ";
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "from", [], "array", false, false, false, 11), 'row');
            yield "
    ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "replyToAddress", [], "array", false, false, false, 12), 'row');
            yield "
    ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "subject", [], "array", false, false, false, 13), 'row');
            yield "
    ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "body", [], "array", false, false, false, 14), 'row');
            yield "
    ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "templates", [], "array", false, false, false, 15), 'row');
            yield "
    ";
            // line 16
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/email.html.twig";
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
        return array (  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  52 => 9,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/email.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/email.html.twig");
    }
}
