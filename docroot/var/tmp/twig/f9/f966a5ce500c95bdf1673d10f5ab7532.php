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

/* @MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig */
class __TwigTemplate_5947a5ec2ed10eda15666d55798b1404 extends Template
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
            'pointaction_urlhit_widget' => [$this, 'block_pointaction_urlhit_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('pointaction_urlhit_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pointaction_urlhit_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["timeFrames"] = ["s" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.seconds"), "i" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.minutes"), "H" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.hours"), "d" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.time.days")];
        // line 8
        yield "
<div class=\"row\">
    <div class=\"col-xs-12\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "page_url", [], "array", false, false, false, 11), 'row');
        yield "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "page_hits", [], "array", false, false, false, 17), 'row');
        yield "
    </div>
</div>

<div class=\"row\">
    <div class=\"col-xs-12 form-group \">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "returns_within", [], "array", false, false, false, 23), 'label');
        yield "
        <div class=\"input-group\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "returns_within", [], "array", false, false, false, 25), 'widget');
        // line 26
        $context["default"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "returns_within_unit", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "data", [], "any", false, false, false, 26);
        // line 27
        yield "            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-ghost dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"returns_within_label\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 29, $this->source); })()), (isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), "html", null, true);
        yield "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["abbr"] => $context["label"]) {
            // line 33
            yield "                    <li><a href=\"#\" data-time=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["abbr"], "html", null, true);
            yield "\" data-field=\"returns_within\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['abbr'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                </ul>
            </div>
        </div>
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "returns_within", [], "array", false, false, false, 38), 'errors');
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "returns_within_unit", [], "array", false, false, false, 39), 'widget');
        yield "
    </div>

    <div class=\"col-xs-12 form-group \">
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "returns_after", [], "array", false, false, false, 43), 'label');
        yield "
        <div class=\"input-group\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "returns_after", [], "array", false, false, false, 45), 'widget');
        // line 46
        $context["default"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "returns_after_unit", [], "array", false, false, false, 46), "vars", [], "any", false, false, false, 46), "data", [], "array", false, false, false, 46);
        // line 47
        yield "            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-ghost dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"returns_after_label\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 49, $this->source); })()), (isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 49, $this->source); })()), [], "array", false, false, false, 49), "html", null, true);
        yield "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["abbr"] => $context["label"]) {
            // line 53
            yield "                        <li><a href=\"#\" data-time=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["abbr"], "html", null, true);
            yield "\" data-field=\"returns_after\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['abbr'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                </ul>
            </div>
        </div>
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "returns_after", [], "array", false, false, false, 58), 'errors');
        yield "
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "returns_after_unit", [], "array", false, false, false, 59), 'widget');
        yield "
    </div>


    <div class=\"col-xs-12 form-group \">
        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "accumulative_time", [], "array", false, false, false, 64), 'label');
        yield "
        <div class=\"input-group\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "accumulative_time", [], "array", false, false, false, 66), 'widget');
        // line 67
        $context["default"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "accumulative_time_unit", [], "array", false, false, false, 67), "vars", [], "any", false, false, false, 67), "data", [], "array", false, false, false, 67);
        // line 68
        yield "            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-ghost dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"accumulative_time_label\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 70, $this->source); })()), (isset($context["default"]) || array_key_exists("default", $context) ? $context["default"] : (function () { throw new RuntimeError('Variable "default" does not exist.', 70, $this->source); })()), [], "array", false, false, false, 70), "html", null, true);
        yield "</span> <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu time-dropdown\">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeFrames"]) || array_key_exists("timeFrames", $context) ? $context["timeFrames"] : (function () { throw new RuntimeError('Variable "timeFrames" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["abbr"] => $context["label"]) {
            // line 74
            yield "                        <li><a href=\"#\" data-time=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["abbr"], "html", null, true);
            yield "\" data-field=\"accumulative_time\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['abbr'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                </ul>
            </div>
        </div>
        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "accumulative_time", [], "array", false, false, false, 79), 'errors');
        yield "
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "accumulative_time_unit", [], "array", false, false, false, 80), 'widget');
        yield "
    </div>
</div>

<script>
    mQuery('.time-dropdown li a').click(function (e) {
        e.preventDefault();
        var selected = mQuery(this).data('time');
        var label    = mQuery(this).html();
        var field    = mQuery(this).data('field');

        mQuery('#point_properties_' + field + '_unit').val(selected);
        mQuery('.' + field + '_label').html(label);
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  217 => 80,  213 => 79,  208 => 76,  198 => 74,  194 => 73,  189 => 70,  185 => 68,  183 => 67,  181 => 66,  176 => 64,  168 => 59,  164 => 58,  159 => 55,  149 => 53,  145 => 52,  140 => 49,  136 => 47,  134 => 46,  132 => 45,  127 => 43,  120 => 39,  116 => 38,  111 => 35,  101 => 33,  97 => 32,  92 => 29,  88 => 27,  86 => 26,  84 => 25,  79 => 23,  70 => 17,  61 => 11,  56 => 8,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/FormTheme/Point/pointaction_urlhit_widget.html.twig");
    }
}
