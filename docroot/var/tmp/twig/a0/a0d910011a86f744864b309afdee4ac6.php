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

/* @MauticCampaign/Event/form.html.twig */
class __TwigTemplate_b3b018c24b8e4db887a077e96098c33a extends Template
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@MauticCampaign/FormTheme/Event/_campaignevent_properties_row.html.twig"], true);
        // line 8
        if (array_key_exists("formTheme", $context)) {
            // line 9
            yield "  ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), [(isset($context["formTheme"]) || array_key_exists("formTheme", $context) ? $context["formTheme"] : (function () { throw new RuntimeError('Variable "formTheme" does not exist.', 9, $this->source); })())], true);
        }
        // line 11
        yield "<div class=\"bundle-form\">
    <div class=\"bundle-form-header mb-10\">
        <h3>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventHeader"]) || array_key_exists("eventHeader", $context) ? $context["eventHeader"] : (function () { throw new RuntimeError('Variable "eventHeader" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h3>
        ";
        // line 14
        if (array_key_exists("eventDescription", $context)) {
            // line 15
            yield "          <h6 class=\"text-muted\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["eventDescription"]) || array_key_exists("eventDescription", $context) ? $context["eventDescription"] : (function () { throw new RuntimeError('Variable "eventDescription" does not exist.', 15, $this->source); })()));
            yield "</h6>
        ";
        }
        // line 17
        yield "    </div>

    ";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        yield "

    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "canvasSettings", [], "any", false, false, false, 21), "droppedX", [], "any", false, false, false, 21), 'widget');
        yield "
    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "canvasSettings", [], "any", false, false, false, 22), "droppedY", [], "any", false, false, false, 22), 'widget');
        yield "

    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row');
        yield "

    ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "triggerMode", [], "any", true, true, false, 26)) {
            // line 27
            yield "    <div class=\"mb-lg";
            if ((isset($context["hideTriggerMode"]) || array_key_exists("hideTriggerMode", $context) ? $context["hideTriggerMode"] : (function () { throw new RuntimeError('Variable "hideTriggerMode" does not exist.', 27, $this->source); })())) {
                yield " hide";
            }
            yield "\">
        ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "triggerMode", [], "any", false, false, false, 28), 'row');
            yield "

        <div";
            // line 30
            if (("date" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "triggerMode", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "data", [], "array", false, false, false, 30))) {
                yield " class=\"hide\"";
            }
            yield " id=\"triggerDate\">
            ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "triggerDate", [], "any", false, false, false, 31), 'row');
            yield "
        </div>

        <div";
            // line 34
            if (("interval" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "triggerMode", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "data", [], "array", false, false, false, 34))) {
                yield " class=\"hide\"";
            }
            yield " id=\"triggerInterval\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "triggerInterval", [], "any", false, false, false, 37), 'row');
            yield "
                </div>
                <div class=\"col-sm-8\">
                    ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "triggerIntervalUnit", [], "any", false, false, false, 40), 'row');
            yield "
                </div>
            </div>
            <div id=\"interval_settings\">
                <hr />
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"d-flex fd-row fw-nowrap ai-center gap-sm\">
                            <div>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.type.interval_schedule_at"), "html", null, true);
            yield " </div>
                            <div>";
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "triggerHour", [], "any", false, false, false, 49), 'widget');
            yield "</div>
                            <div> ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.type.interval_schedule_between_hours"), "html", null, true);
            yield " </div>
                            <div>";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "triggerRestrictedStartHour", [], "any", false, false, false, 51), 'widget');
            yield "</div>
                            <div> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.and"), "html", null, true);
            yield " </div>
                            <div>";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "triggerRestrictedStopHour", [], "any", false, false, false, 53), 'widget');
            yield "</div>
                        </div>

                    </div>
                </div>
                <hr />
                <div class=\"row mt-5\">
                    <div class=\"col-sm-12\" style=\"font-weight: 600;\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.type.interval_trigger_restricted_dow"), "html", null, true);
            yield "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 65), 0, [], "array", false, false, false, 65), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 65), 0, [], "array", false, false, false, 65), 'label');
            yield "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 68), 1, [], "array", false, false, false, 68), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 68), 1, [], "array", false, false, false, 68), 'label');
            yield "</label>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 73
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 73), 2, [], "array", false, false, false, 73), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 73), 2, [], "array", false, false, false, 73), 'label');
            yield "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 76), 3, [], "array", false, false, false, 76), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 76), 3, [], "array", false, false, false, 76), 'label');
            yield "</label>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 81), 4, [], "array", false, false, false, 81), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 81), 4, [], "array", false, false, false, 81), 'label');
            yield "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 84
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 84), 5, [], "array", false, false, false, 84), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 84), 5, [], "array", false, false, false, 84), 'label');
            yield "</label>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 89
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 89), 6, [], "array", false, false, false, 89), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 89), 6, [], "array", false, false, false, 89), 'label');
            yield "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 92
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 92), 7, [], "array", false, false, false, 92), 'widget');
            yield " ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 92), 7, [], "array", false, false, false, 92), 'label');
            yield "</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div";
            // line 98
            if (("optimized" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "triggerMode", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "data", [], "array", false, false, false, 98))) {
                yield " class=\"hide\"";
            }
            yield " id=\"triggerOptimized\">
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"mb-15\">
                        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "triggerWindow", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                yield "                            <div>
                                ";
                // line 104
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
                                ";
                // line 105
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                yield "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 114
        yield "
    ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Event/form.html.twig";
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
        return array (  291 => 115,  288 => 114,  280 => 108,  271 => 105,  267 => 104,  264 => 103,  260 => 102,  251 => 98,  240 => 92,  232 => 89,  222 => 84,  214 => 81,  204 => 76,  196 => 73,  186 => 68,  178 => 65,  170 => 60,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  129 => 40,  123 => 37,  115 => 34,  109 => 31,  103 => 30,  98 => 28,  91 => 27,  89 => 26,  84 => 24,  79 => 22,  75 => 21,  70 => 19,  66 => 17,  60 => 15,  58 => 14,  54 => 13,  50 => 11,  46 => 9,  44 => 8,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Event/form.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Event/form.html.twig");
    }
}
