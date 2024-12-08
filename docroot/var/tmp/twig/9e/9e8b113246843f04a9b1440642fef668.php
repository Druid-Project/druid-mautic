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

/* @MauticCore/Helper/list_actions.html.twig */
class __TwigTemplate_d3100661245c4f5462ed3b78bdc1e07e extends Template
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
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_LIST_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_DROPDOWN"),         // line 4
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()));
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

";
        // line 11
        if (((is_iterable((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", true, true, false, 11)) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", true, true, false, 11))) {
            // line 12
            yield "    ";
            [$context["id"], $context["name"]] =             [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12)];
        } else {
            // line 14
            yield "    ";
            [$context["id"], $context["name"]] =             [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 14, $this->source); })()), [], "any", false, false, false, 14)];
        }
        // line 16
        yield "
<div class=\"input-group input-group-sm\">
    <span class=\"input-group-addon\">
        <input type=\"checkbox\" data-target=\"tbody\" data-toggle=\"selectrow\" class=\"list-checkbox\" name=\"cb";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()));
        yield "\"/>
    </span>

    <div class=\"ml-xs\">
        ";
        // line 23
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/list_actions.html.twig", 23)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.options", "size" => "sm", "variant" => "ghost", "icon" => "ri-more-2-line", "icon_only" => true, "spin" => false, "attributes" => ["data-toggle" => "dropdown", "type" => "button"]]]]));
        // line 39
        yield "        ";
        if ((array_key_exists("tooltip", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 39, $this->source); })())))) {
            yield "<i class=\"ri-question-line\"></i>";
        }
        // line 40
        yield "        <ul class=\"pull-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pull"]) || array_key_exists("pull", $context) ? $context["pull"] : (function () { throw new RuntimeError('Variable "pull" does not exist.', 40, $this->source); })()), "html", null, true);
        yield " page-list-actions dropdown-menu\" role=\"menu\">
            ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "edit", [], "any", true, true, false, 41) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 41, $this->source); })()), "edit", [], "any", false, false, false, 41)))) {
            // line 42
            yield "            ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["attr" => Twig\Extension\CoreExtension::merge(            // line 43
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 43, $this->source); })()), ["class" => "hidden-xs btn btn-ghost btn-sm btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 46
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 46, $this->source); })()), Twig\Extension\CoreExtension::merge(            // line 47
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 47, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 47, $this->source); })())])), "data-toggle" =>             // line 49
(isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 49, $this->source); })())]), "iconClass" => "ri-edit-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.edit"), "primary" => true]);
            // line 54
            yield "
            ";
        }
        // line 56
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "clone", [], "any", true, true, false, 56) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 56, $this->source); })()), "clone", [], "any", false, false, false, 56)))) {
            // line 57
            yield "            ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["attr" => Twig\Extension\CoreExtension::merge(            // line 58
(isset($context["editAttr"]) || array_key_exists("editAttr", $context) ? $context["editAttr"] : (function () { throw new RuntimeError('Variable "editAttr" does not exist.', 58, $this->source); })()), ["class" => "hidden-xs btn btn-ghost btn-sm btn-nospin", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 61
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 61, $this->source); })()), Twig\Extension\CoreExtension::merge(            // line 62
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), ["objectAction" => "clone", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })())])), "data-toggle" => "ajax"]), "iconClass" => "ri-file-copy-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.clone"), "priority" => 200]);
            // line 69
            yield "
            ";
        }
        // line 71
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["templateButtons"] ?? null), "delete", [], "any", true, true, false, 71) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 71, $this->source); })()), "delete", [], "any", false, false, false, 71)))) {
            // line 72
            yield "            ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->addButton(["confirm" => ["btnClass" => false, "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"), "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((            // line 76
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 76, $this->source); })()) . ".form.confirmdelete"), ["%name%" => ((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 76, $this->source); })()) . " (") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })())) . ")")]), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 78
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 78, $this->source); })()), Twig\Extension\CoreExtension::merge(            // line 79
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 79, $this->source); })()), ["objectAction" => "delete", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 79, $this->source); })())])), "template" => "delete"], "priority" =>  -1]);
            // line 84
            yield "
            ";
        }
        // line 86
        yield "
            ";
        // line 87
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "
        </ul>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/list_actions.html.twig";
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
        return array (  130 => 87,  127 => 86,  123 => 84,  121 => 79,  120 => 78,  119 => 76,  117 => 72,  114 => 71,  110 => 69,  108 => 62,  107 => 61,  106 => 58,  104 => 57,  101 => 56,  97 => 54,  95 => 49,  94 => 47,  93 => 46,  92 => 43,  90 => 42,  88 => 41,  83 => 40,  78 => 39,  76 => 23,  67 => 19,  62 => 16,  58 => 14,  54 => 12,  52 => 11,  47 => 9,  45 => 7,  43 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_actions.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/list_actions.html.twig");
    }
}
