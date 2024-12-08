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

/* @MauticCore/Helper/usage.html.twig */
class __TwigTemplate_707da8ed3ce2451f64f56c8f7059ce72 extends Template
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
        // line 7
        yield "
";
        // line 8
        if ((array_key_exists("stats", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 8, $this->source); })())))) {
            // line 9
            yield "    <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "</div>
        </div>
        <div class=\"panel-body pt-xs\">
            ";
            // line 14
            $context["hasDependences"] = false;
            // line 15
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                // line 16
                yield "                ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "ids", [], "any", false, false, false, 16)) > 0)) {
                    // line 17
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "route", [], "any", false, false, false, 17), ["search" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommand.ids") . ":") . Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "ids", [], "any", false, false, false, 17), ","))]), "html", null, true);
                    yield "\"
                       class=\"btn btn-ghost mt-4\">
                        ";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, false, 19)), "html", null, true);
                    yield "
                        <span class=\"mt-xs label label-primary\">";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "ids", [], "any", false, false, false, 20)), "html", null, true);
                    yield "</span>
                    </a>
                    ";
                    // line 22
                    $context["hasDependences"] = true;
                    // line 23
                    yield "                ";
                }
                // line 24
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "            ";
            if ( !(isset($context["hasDependences"]) || array_key_exists("hasDependences", $context) ? $context["hasDependences"] : (function () { throw new RuntimeError('Variable "hasDependences" does not exist.', 25, $this->source); })())) {
                // line 26
                yield "                <p class=\"text-muted mb-0\">
                    ";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("noUsages", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["noUsages"]) || array_key_exists("noUsages", $context) ? $context["noUsages"] : (function () { throw new RuntimeError('Variable "noUsages" does not exist.', 27, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.usage.not_found"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.usage.not_found"))), "html", null, true);
                yield "
                </p>
            ";
            }
            // line 30
            yield "        </div>
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
        return "@MauticCore/Helper/usage.html.twig";
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
        return array (  105 => 30,  99 => 27,  96 => 26,  93 => 25,  87 => 24,  84 => 23,  82 => 22,  77 => 20,  73 => 19,  67 => 17,  64 => 16,  59 => 15,  57 => 14,  51 => 11,  47 => 9,  45 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/usage.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/usage.html.twig");
    }
}
