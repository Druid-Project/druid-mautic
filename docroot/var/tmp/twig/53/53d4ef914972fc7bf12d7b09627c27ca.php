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

/* @MauticLead/Import/new.html.twig */
class __TwigTemplate_28dfda75e187f801ce80a93c44769180 extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 11
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/new.html.twig", 11);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadImport";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.leads", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["objectName"]) || array_key_exists("objectName", $context) ? $context["objectName"] : (function () { throw new RuntimeError('Variable "objectName" does not exist.', 16, $this->source); })()))]), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "  ";
        if ((array_key_exists("step", $context) && (Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Controller\\ImportController::STEP_UPLOAD_CSV") == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 20, $this->source); })())))) {
            // line 21
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "import", "langVar" => "lead.import", "templateButtons" => ["close" => true], "routeVars" => ["close" => ["object" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["object", "contacts"], "method", false, false, false, 27)]]]);
        }
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "  ";
        if ((array_key_exists("step", $context) && (Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Controller\\ImportController::STEP_UPLOAD_CSV") == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })())))) {
            // line 36
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Import/_upload_form.html.twig");
            yield "
  ";
        } else {
            // line 38
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Import/_mapping_form.html.twig");
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
        return "@MauticLead/Import/new.html.twig";
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
        return array (  113 => 38,  107 => 36,  104 => 35,  97 => 34,  91 => 27,  90 => 21,  87 => 20,  80 => 19,  72 => 16,  65 => 15,  54 => 13,  43 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/new.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/new.html.twig");
    }
}
