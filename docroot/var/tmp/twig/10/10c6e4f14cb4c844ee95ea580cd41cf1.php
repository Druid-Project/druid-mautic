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

/* @MauticCore/Helper/list_toolbar.html.twig */
class __TwigTemplate_9ab31cb705b69e1daf039b76e9766f5f extends Template
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
        $context["wrap"] = true;
        // line 2
        yield "
";
        // line 3
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->reset(Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::LOCATION_TOOLBAR_ACTIONS"), Twig\Extension\CoreExtension::constant("Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper::TYPE_GROUP"));
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/action_button_helper.html.twig");
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\StorageExtension']->restore($context, "action_button_helper"), "html", null, true);
        yield "

<div class=\"panel-heading pa-0\">
    <div class=\"d-flex ai-center list-toolbar\">
        ";
        // line 14
        if (array_key_exists("searchValue", $context)) {
            // line 15
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/search.html.twig", ["searchId" => ((            // line 16
array_key_exists("searchId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchId"]) || array_key_exists("searchId", $context) ? $context["searchId"] : (function () { throw new RuntimeError('Variable "searchId" does not exist.', 16, $this->source); })()), null)) : (null)), "searchValue" =>             // line 17
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 17, $this->source); })()), "action" => ((            // line 18
array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "")) : ("")), "searchHelp" => ((            // line 19
array_key_exists("searchHelp", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchHelp"]) || array_key_exists("searchHelp", $context) ? $context["searchHelp"] : (function () { throw new RuntimeError('Variable "searchHelp" does not exist.', 19, $this->source); })()), "")) : ("")), "target" => ((            // line 20
array_key_exists("target", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 20, $this->source); })()), null)) : (null)), "tmpl" => ((            // line 21
array_key_exists("tmpl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 21, $this->source); })()), null)) : (null)), "overlayDisabled" => ((            // line 22
array_key_exists("overlayDisabled", $context)) ? ((isset($context["overlayDisabled"]) || array_key_exists("overlayDisabled", $context) ? $context["overlayDisabled"] : (function () { throw new RuntimeError('Variable "overlayDisabled" does not exist.', 22, $this->source); })())) : (null))]);
        }
        // line 25
        yield "
    ";
        // line 26
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ButtonExtension']->render();
        yield "
    ";
        // line 27
        if (array_key_exists("list_actions", $context)) {
            // line 28
            yield "    ";
            yield (isset($context["list_actions"]) || array_key_exists("list_actions", $context) ? $context["list_actions"] : (function () { throw new RuntimeError('Variable "list_actions" does not exist.', 28, $this->source); })());
            yield "
    ";
        }
        // line 30
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/list_toolbar.html.twig";
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
        return array (  85 => 30,  79 => 28,  77 => 27,  73 => 26,  70 => 25,  67 => 22,  66 => 21,  65 => 20,  64 => 19,  63 => 18,  62 => 17,  61 => 16,  60 => 15,  58 => 14,  51 => 10,  49 => 8,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/list_toolbar.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/list_toolbar.html.twig");
    }
}
