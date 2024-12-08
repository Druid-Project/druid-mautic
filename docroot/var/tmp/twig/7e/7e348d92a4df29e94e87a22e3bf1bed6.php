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

/* @MauticCore/Helper/page_actions.html.twig */
class __TwigTemplate_03a7bb513d10264eecac5ba125b0fff5 extends Template
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
        $context["item"] = ((array_key_exists("item", $context)) ? ((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })())) : (null));
        // line 2
        $context["tooltip"] = ((array_key_exists("tooltip", $context)) ? ((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 2, $this->source); })())) : (null));
        // line 3
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_PAGE_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_BUTTON_DROPDOWN"),         // line 6
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()));
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "close", [], "any", true, true, false, 12)) {
            // line 13
            yield "    ";
            // line 14
            yield "    ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/page_actions.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close_back", ["%target%" => ((            // line 17
array_key_exists("targetLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["targetLabel"]) || array_key_exists("targetLabel", $context) ? $context["targetLabel"] : (function () { throw new RuntimeError('Variable "targetLabel" does not exist.', 17, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close_back.fallback"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close_back.fallback")))]), "size" => "xs", "variant" => "tertiary", "icon" => "ri-arrow-left-line", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 21
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 21, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["routeVars"] ?? null), "close", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["routeVars"] ?? null), "close", [], "any", false, false, false, 21), [])) : ([]))), "attributes" => ["data-toggle" => "ajax", "class" => "btn-back mb-lg"]]]]));
        } else {
            // line 30
            yield "    ";
            // line 31
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 31, $this->source); })()))) {
                // line 32
                yield "        ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButtonsFromTemplate(                // line 33
(isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 33, $this->source); })()),                 // line 34
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()),                 // line 35
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 35, $this->source); })()),                 // line 36
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 36, $this->source); })()),                 // line 37
(isset($context["langVar"]) || array_key_exists("langVar", $context) ? $context["langVar"] : (function () { throw new RuntimeError('Variable "langVar" does not exist.', 37, $this->source); })()),                 // line 38
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 38, $this->source); })()),                 // line 39
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 39, $this->source); })()),                 // line 40
(isset($context["routeVars"]) || array_key_exists("routeVars", $context) ? $context["routeVars"] : (function () { throw new RuntimeError('Variable "routeVars" does not exist.', 40, $this->source); })()),                 // line 41
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()),                 // line 42
(isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 42, $this->source); })()));
                // line 43
                yield "
    ";
            }
            // line 45
            yield "
    <div class=\"std-toolbar\">
        ";
            // line 47
            $context["dropdownButton"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 48
                yield "            ";
                yield from                 $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/page_actions.html.twig", 48)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["variant" => "primary", "icon_only" => true, "icon" => "ri-arrow-down-s-line", "label" => "mautic.core.options", "attributes" => ["class" => "dropdown-toggle", "data-toggle" => "dropdown", "aria-expanded" => "false"]]]]));
                // line 63
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 64
            yield "
        ";
            // line 65
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render(((isset($context["dropdownButton"]) || array_key_exists("dropdownButton", $context) ? $context["dropdownButton"] : (function () { throw new RuntimeError('Variable "dropdownButton" does not exist.', 65, $this->source); })()) . "<ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">"), "</ul>");
            yield "
    </div>

";
        }
        // line 69
        yield "
";
        // line 70
        yield (isset($context["extraHtml"]) || array_key_exists("extraHtml", $context) ? $context["extraHtml"] : (function () { throw new RuntimeError('Variable "extraHtml" does not exist.', 70, $this->source); })());
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/page_actions.html.twig";
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
        return array (  114 => 70,  111 => 69,  104 => 65,  101 => 64,  97 => 63,  94 => 48,  92 => 47,  88 => 45,  84 => 43,  82 => 42,  81 => 41,  80 => 40,  79 => 39,  78 => 38,  77 => 37,  76 => 36,  75 => 35,  74 => 34,  73 => 33,  71 => 32,  68 => 31,  66 => 30,  63 => 21,  62 => 17,  60 => 14,  58 => 13,  56 => 12,  51 => 10,  49 => 7,  47 => 6,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/page_actions.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/page_actions.html.twig");
    }
}
