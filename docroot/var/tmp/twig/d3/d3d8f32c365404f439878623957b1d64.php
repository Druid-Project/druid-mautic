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

/* @MauticCore/Helper/description.html.twig */
class __TwigTemplate_d5f5b47a8fc9deac3b7b7bfed4639db0 extends Template
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
        // line 2
        if ((array_key_exists("description", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 2, $this->source); })())))) {
            // line 3
            yield "    ";
            $context["isCollapsed"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::striptags((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 3, $this->source); })()))) > 70);
            // line 4
            yield "
    <div class=\"row-no-gutters ml-md\">
        <div class=\"well description pa-0\">
            <a href=\"javascript:void(0)\" class=\"d-flex jc-space-between gap-sm pa-sm text-muted pr-xs ";
            // line 7
            yield (((isset($context["isCollapsed"]) || array_key_exists("isCollapsed", $context) ? $context["isCollapsed"] : (function () { throw new RuntimeError('Variable "isCollapsed" does not exist.', 7, $this->source); })())) ? ("collapsed") : (""));
            yield "\" data-toggle=\"collapse\" data-target=\"#description\">
                <div class=\"small fw-b text-muted\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.description"), "html", null, true);
            yield "</div>
                <i class=\"arrow ri-arrow-up-wide-line ri-sm text-muted\"></i>
            </a>
            <div id=\"description\" class=\"collapse ";
            // line 11
            yield (( !(isset($context["isCollapsed"]) || array_key_exists("isCollapsed", $context) ? $context["isCollapsed"] : (function () { throw new RuntimeError('Variable "isCollapsed" does not exist.', 11, $this->source); })())) ? ("in") : (""));
            yield "\">
                <div class=\"well layer-two description-content mb-sm ml-sm mr-sm mt-0 pa-sm\">
                    ";
            // line 13
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 13, $this->source); })()));
            yield "
                    ";
            // line 14
            if ((array_key_exists("extra_content", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["extra_content"]) || array_key_exists("extra_content", $context) ? $context["extra_content"] : (function () { throw new RuntimeError('Variable "extra_content" does not exist.', 14, $this->source); })())))) {
                // line 15
                yield "                        <hr class=\"mt-xs mb-xs\">
                        ";
                // line 16
                yield (isset($context["extra_content"]) || array_key_exists("extra_content", $context) ? $context["extra_content"] : (function () { throw new RuntimeError('Variable "extra_content" does not exist.', 16, $this->source); })());
                yield "
                    ";
            }
            // line 18
            yield "                </div>
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
        return "@MauticCore/Helper/description.html.twig";
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
        return array (  81 => 18,  76 => 16,  73 => 15,  71 => 14,  67 => 13,  62 => 11,  56 => 8,  52 => 7,  47 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/description.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/description.html.twig");
    }
}
