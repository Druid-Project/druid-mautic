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

/* @MauticLead/Lead/_list_column_name.html.twig */
class __TwigTemplate_7d855b7c77bed1e997c8892e366d2655 extends Template
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
        yield "<td>
    <a href=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\" data-toggle=\"ajax\">
        ";
        // line 3
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), Twig\Extension\CoreExtension::keys((isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 3, $this->source); })())))) {
            // line 4
            yield "            <div class=\"pull-right\">
                ";
            // line 5
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/dnc_small.html.twig", ["dncList" => CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 6, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), [], "array", false, false, false, 6)]);
            // line 7
            yield "
            </div>
        ";
        }
        // line 10
        yield "        ";
        $context["primaryIdentifier"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "isAnonymous", [], "any", false, false, false, 10)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 10))) : ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 10))));
        // line 11
        yield "        <div>
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["primaryIdentifier"]) || array_key_exists("primaryIdentifier", $context) ? $context["primaryIdentifier"] : (function () { throw new RuntimeError('Variable "primaryIdentifier" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "
        </div>
        ";
        // line 14
        if (((CoreExtension::inFilter("company", Twig\Extension\CoreExtension::keys((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 14, $this->source); })()))) && ((isset($context["primaryIdentifier"]) || array_key_exists("primaryIdentifier", $context) ? $context["primaryIdentifier"] : (function () { throw new RuntimeError('Variable "primaryIdentifier" does not exist.', 14, $this->source); })()) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 14))) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 14))) {
            // line 15
            yield "            <div class=\"small\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 15));
            yield "</div>
        ";
        }
        // line 17
        yield "    </a>
</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_list_column_name.html.twig";
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
        return array (  81 => 17,  75 => 15,  73 => 14,  68 => 12,  65 => 11,  62 => 10,  57 => 7,  55 => 6,  54 => 5,  51 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_list_column_name.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_list_column_name.html.twig");
    }
}
