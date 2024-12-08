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

/* @MauticPoint/SubscribedEvents/Search/global_trigger.html.twig */
class __TwigTemplate_30b7b666b423e8f2601eb6a3946c2572 extends Template
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
        if (array_key_exists("showMore", $context)) {
            // line 2
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_pointtrigger_index", ["search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 2, $this->source); })())]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
        <span>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 3, $this->source); })())]), "html", null, true);
            yield "</span>
    </a>
";
        } else {
            // line 6
            yield "  ";
            if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 6, $this->source); })())) {
                // line 7
                yield "    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_pointtrigger_index", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
        ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
                yield "
    </a>
  ";
            } else {
                // line 11
                yield "    <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
                yield "</span>
  ";
            }
            // line 13
            yield "  <div class=\"clearfix\"></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/SubscribedEvents/Search/global_trigger.html.twig";
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
        return array (  75 => 13,  69 => 11,  63 => 8,  58 => 7,  55 => 6,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/SubscribedEvents/Search/global_trigger.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/SubscribedEvents/Search/global_trigger.html.twig");
    }
}
