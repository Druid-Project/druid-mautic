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

/* @MauticStage/SubscribedEvents/Search/global.html.twig */
class __TwigTemplate_2eec3c296b32f78f91fb759e06f4f287 extends Template
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
        if ((array_key_exists("showMore", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_index", ["search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 2, $this->source); })())]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
        <span>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 3, $this->source); })())]), "html", null, true);
            yield "</span>
    </a>
</div>
";
        } else {
            // line 7
            if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 7, $this->source); })())) {
                // line 8
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_stage_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "getId", [], "method", false, false, false, 8)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
    ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "getName", [], "method", false, false, false, 9), "html", null, true);
                yield "
</a>
";
            } else {
                // line 12
                yield "<span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "getName", [], "method", false, false, false, 12), "html", null, true);
                yield "</span>
";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticStage/SubscribedEvents/Search/global.html.twig";
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
        return array (  69 => 12,  63 => 9,  58 => 8,  56 => 7,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticStage/SubscribedEvents/Search/global.html.twig", "/app/docroot/app/bundles/StageBundle/Resources/views/SubscribedEvents/Search/global.html.twig");
    }
}
