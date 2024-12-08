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

/* @MauticEmail/SubscribedEvents/Search/global.html.twig */
class __TwigTemplate_7e1742e9d041082f008c8c71adeb8413 extends Template
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_index", ["search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 2, $this->source); })())]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
        <span>";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 3, $this->source); })())]), "html", null, true);
            yield "</span>
    </a>
";
        } else {
            // line 6
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
        ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 7, $this->source); })()), "getName", [], "method", false, false, false, 7), "html", null, true);
            yield "
        <span size=\"sm\" class=\"label label-gray pull-right\" data-toggle=\"tooltip\" title=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.readcount"), "html", null, true);
            yield "\" data-placement=\"left\">
            ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 9, $this->source); })()), "readCount", [], "any", false, false, false, 9), "html", null, true);
            yield "
        </span>
    </a>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/SubscribedEvents/Search/global.html.twig";
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
        return array (  68 => 9,  64 => 8,  60 => 7,  55 => 6,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Search/global.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/SubscribedEvents/Search/global.html.twig");
    }
}
