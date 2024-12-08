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

/* @MauticChannel/Message/form.html.twig */
class __TwigTemplate_1bce70369fb57b685ed9a2de267acaac extends Template
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

        $this->blocks = [
            'channel_row' => [$this, 'block_channel_row'],
            'aboveTabsContent' => [$this, 'block_aboveTabsContent'],
            'rightFormContent' => [$this, 'block_rightFormContent'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/FormTheme/form_tabbed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [$this->getTemplateName()], true);
        // line 40
        [$context["tabs"], $context["active"]] =         [[], true];
        // line 41
        $context["_channel"] = "";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["config"]) {
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, true, false, 43), $context["channel"], [], "array", true, true, false, 43)) {
                // line 44
                $context["tab"] = ["active" =>                 // line 45
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 45, $this->source); })()), "id" => ("channel_" .                 // line 46
$context["channel"]), "name" => CoreExtension::getAttribute($this->env, $this->source,                 // line 47
$context["config"], "label", [], "any", false, false, false, 47), "content" =>                 // line 48
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "channels", [], "any", false, false, false, 48), $context["channel"], [], "array", false, false, false, 48), 'row'), "containerAttr" => ["style" => "min-height: 200px;"]];
                // line 53
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "channels", [], "any", false, false, false, 53), $context["channel"], [], "array", false, false, false, 53))) {
                    // line 54
                    $context["tab"] = Twig\Extension\CoreExtension::merge((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 54, $this->source); })()), ["class" => "text-danger", "icon" => "ri-alert-fill"]);
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "channels", [], "any", false, false, false, 55), $context["channel"], [], "array", false, false, false, 55), "isEnabled", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "data", [], "any", false, false, false, 55)) {
                    // line 56
                    $context["tab"] = Twig\Extension\CoreExtension::merge((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 56, $this->source); })()), ["published" => true]);
                }
                // line 59
                [$context["tabs"], $context["active"]] =                 [Twig\Extension\CoreExtension::merge((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 59, $this->source); })()), [(isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 59, $this->source); })())]), false];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channel'], $context['config'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context["formTabs"] = (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 62, $this->source); })());
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form_tabbed.html.twig", "@MauticChannel/Message/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_channel_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 4), "channel", [], "any", true, true, false, 4)) {
            // line 5
            yield "        ";
            $context["channel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "children", [], "any", false, false, false, 5), "channel", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5);
            // line 6
            yield "        ";
            $context["enabled"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "children", [], "any", false, false, false, 6), "isEnabled", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6);
            // line 7
            yield "        ";
            $context["channelContent"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("channel.right", $context);
            // line 8
            yield "        ";
            $context["leftCol"] = (((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 8, $this->source); })())) ? (6) : (12));
            // line 9
            yield "        ";
            $context["enableCol"] = (((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 9, $this->source); })())) ? ("") : ("col-md-2"));
            // line 10
            yield "        ";
            $context["propsCol"] = (((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 10, $this->source); })())) ? ("") : ("col-md-10"));
            // line 11
            yield "
        ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, false, 12), "channel", [], "any", false, false, false, 12), 'row');
            yield "
        ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
            yield "
        <div class=\"row\">
            <div class=\"col-md-";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leftCol"]) || array_key_exists("leftCol", $context) ? $context["leftCol"] : (function () { throw new RuntimeError('Variable "leftCol" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "\">
                <div class=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enableCol"]) || array_key_exists("enableCol", $context) ? $context["enableCol"] : (function () { throw new RuntimeError('Variable "enableCol" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "\">
                    ";
            // line 17
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "children", [], "any", false, false, false, 17), "isEnabled", [], "any", false, false, false, 17), 'row');
            yield "
                </div>
                <div class=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["propsCol"]) || array_key_exists("propsCol", $context) ? $context["propsCol"] : (function () { throw new RuntimeError('Variable "propsCol" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\">
                    <div class=\"message_channel_properties_";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 20, $this->source); })()), "html", null, true);
            if ( !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new RuntimeError('Variable "enabled" does not exist.', 20, $this->source); })())) {
                yield " hide";
            }
            yield "\">
                        ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 21), "channelId", [], "any", true, true, false, 21)) {
                // line 22
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "children", [], "any", false, false, false, 22), "channelId", [], "any", false, false, false, 22), 'row');
                yield "
                        ";
            }
            // line 24
            yield "
                        ";
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 25), "properties", [], "any", true, true, false, 25) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "children", [], "any", false, false, false, 25), "properties", [], "any", false, false, false, 25)))) {
                // line 26
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "children", [], "any", false, false, false, 26), "properties", [], "any", false, false, false, 26), 'row');
                yield "
                        ";
            }
            // line 28
            yield "                    </div>
                </div>
            </div>
            ";
            // line 31
            if ((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 31, $this->source); })())) {
                // line 32
                yield "            <div class=\"col-md-6\">
                ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 33, $this->source); })()), "html", null, true);
                yield "
            </div>
            ";
            }
            // line 36
            yield "        </div>
    ";
        }
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_aboveTabsContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "<div class=\"pa-md row\">
    <div class=\"col-md-12\">
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), 'row');
        yield "
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'row');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rightFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "category", [], "any", false, false, false, 74), 'row');
        yield "
";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "isPublished", [], "any", false, false, false, 75), 'row', ["attr" => ["data-none" => "mautic.core.form.unavailable_regardless_of_scheduling", "data-start" => "mautic.core.form.available_on_scheduled_date", "data-both" => "mautic.core.form.available_during_scheduled_period", "data-end" => "mautic.core.form.available_until_scheduled_end"]]);
        // line 82
        yield "
";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "publishUp", [], "any", false, false, false, 83), 'row', ["label" => "mautic.core.form.available.available_from"]);
        yield "
";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "publishDown", [], "any", false, false, false, 84), 'row', ["label" => "mautic.core.form.available.unavailable_from"]);
        yield "
";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticChannel/Message/form.html.twig";
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
        return array (  248 => 86,  241 => 84,  237 => 83,  234 => 82,  232 => 75,  228 => 74,  221 => 73,  212 => 68,  208 => 67,  204 => 65,  197 => 64,  190 => 36,  184 => 33,  181 => 32,  179 => 31,  174 => 28,  168 => 26,  166 => 25,  163 => 24,  157 => 22,  155 => 21,  148 => 20,  144 => 19,  139 => 17,  135 => 16,  131 => 15,  126 => 13,  122 => 12,  119 => 11,  116 => 10,  113 => 9,  110 => 8,  107 => 7,  104 => 6,  101 => 5,  98 => 4,  91 => 3,  86 => 1,  84 => 62,  77 => 59,  74 => 56,  72 => 55,  70 => 54,  68 => 53,  66 => 48,  65 => 47,  64 => 46,  63 => 45,  62 => 44,  60 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticChannel/Message/form.html.twig", "/app/docroot/app/bundles/ChannelBundle/Resources/views/Message/form.html.twig");
    }
}
