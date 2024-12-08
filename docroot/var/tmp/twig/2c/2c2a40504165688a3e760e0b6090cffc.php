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

/* @MauticCore/Translation/row.html.twig */
class __TwigTemplate_7d1c482613b6e30afd82eae028475f7f extends Template
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
        // line 10
        $context["isCurrent"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10));
        // line 11
        yield "<li class=\"list-group-item bg-";
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 11, $this->source); })())) {
            yield "dark";
        } else {
            yield "light";
        }
        yield "-xs\">
    <div class=\"box-layout\">
        <div class=\"col-md-1 va-m\">
            <h3>
                ";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 16
(isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })()), "model" =>         // line 17
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 17, $this->source); })()), "size" => "", "query" => "size="]);
        // line 20
        yield "
            </h3>
        </div>
        <div class=\"col-md-7 va-m\">
            <h5 class=\"fw-sb text-primary\">
                <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 25, $this->source); })()), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" data-toggle=\"ajax\">
                    <span>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 26, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 26, $this->source); })()), [], "any", false, false, false, 26), "html", null, true);
        yield "</span>
                </a>
                ";
        // line 28
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 28, $this->source); })())) {
            // line 29
            yield "                    &nbsp;<span class=\"label label-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.current"), "html", null, true);
            yield "</span>
                ";
        }
        // line 31
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 31, $this->source); })()), "parent", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31))) {
            // line 32
            yield "                    &nbsp;<span class=\"label label-warning\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.parent"), "html", null, true);
            yield "</span>
                ";
        }
        // line 34
        yield "            </h5>
            ";
        // line 35
        if ($this->env->getFunction('method_exists')->getCallable()((isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 35, $this->source); })()), "getAlias")) {
            // line 36
            yield "                <span class=\"text-white dark-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 36, $this->source); })()), "alias", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
            ";
        }
        // line 38
        yield "        </div>
        <div class=\"col-md-4 va-m text-right\">
            <em class=\"text-white dark-sm\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 40, $this->source); })()), "language", [], "any", false, false, false, 40), "html", null, true);
        yield "</em>
        </div>
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Translation/row.html.twig";
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
        return array (  108 => 40,  104 => 38,  98 => 36,  96 => 35,  93 => 34,  87 => 32,  84 => 31,  78 => 29,  76 => 28,  71 => 26,  67 => 25,  60 => 20,  58 => 17,  57 => 16,  56 => 15,  44 => 11,  42 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Translation/row.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Translation/row.html.twig");
    }
}
