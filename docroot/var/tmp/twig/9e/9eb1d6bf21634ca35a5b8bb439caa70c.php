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

/* @MauticCore/FormTheme/mautic_form_layout.html.twig */
class __TwigTemplate_cb76ae70d3251172481326e25eae6584 extends Template
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
            'button_attributes' => [$this, 'block_button_attributes'],
            'button_group_row' => [$this, 'block_button_group_row'],
            'button_group_widget' => [$this, 'block_button_group_widget'],
            'button_row' => [$this, 'block_button_row'],
            'button_widget' => [$this, 'block_button_widget'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'choice_attributes' => [$this, 'block_choice_attributes'],
            'choice_row' => [$this, 'block_choice_row'],
            'dynamiclist_entry_row' => [$this, 'block_dynamiclist_entry_row'],
            'dynamiclist_row' => [$this, 'block_dynamiclist_row'],
            'form_buttons_row' => [$this, 'block_form_buttons_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_label' => [$this, 'block_form_label'],
            'form_row' => [$this, 'block_form_row'],
            'form_start' => [$this, 'block_form_start'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'sortable_value_label_list_widget' => [$this, 'block_sortable_value_label_list_widget'],
            'sortablelist_entry_row' => [$this, 'block_sortablelist_entry_row'],
            'sortablelist_errors' => [$this, 'block_sortablelist_errors'],
            'sortablelist_row' => [$this, 'block_sortablelist_row'],
            'standalone_button_row' => [$this, 'block_standalone_button_row'],
            'standalone_button_widget' => [$this, 'block_standalone_button_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'yesno_button_group_widget' => [$this, 'block_yesno_button_group_widget'],
            'attributes' => [$this, 'block_attributes'],
            'form_help' => [$this, 'block_form_help'],
            'alert_widget' => [$this, 'block_alert_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('button_attributes', $context, $blocks);
        // line 18
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('button_group_row', $context, $blocks);
        // line 33
        yield "
";
        // line 35
        yield from $this->unwrap()->yieldBlock('button_group_widget', $context, $blocks);
        // line 48
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 53
        yield "
";
        // line 55
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 67
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 84
        yield "
";
        // line 86
        yield from $this->unwrap()->yieldBlock('choice_attributes', $context, $blocks);
        // line 95
        yield "
";
        // line 97
        yield from $this->unwrap()->yieldBlock('choice_row', $context, $blocks);
        // line 124
        yield "
";
        // line 126
        yield from $this->unwrap()->yieldBlock('dynamiclist_entry_row', $context, $blocks);
        // line 132
        yield "
";
        // line 134
        yield from $this->unwrap()->yieldBlock('dynamiclist_row', $context, $blocks);
        // line 160
        yield "
";
        // line 162
        yield from $this->unwrap()->yieldBlock('form_buttons_row', $context, $blocks);
        // line 173
        yield "
";
        // line 175
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 190
        yield "
";
        // line 192
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 210
        yield "
";
        // line 212
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 224
        yield "
";
        // line 226
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 246
        yield "
";
        // line 248
        yield from $this->unwrap()->yieldBlock('form_widget_compound', $context, $blocks);
        // line 259
        yield "
";
        // line 261
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 328
        yield "
";
        // line 330
        yield from $this->unwrap()->yieldBlock('sortable_value_label_list_widget', $context, $blocks);
        // line 360
        yield "
";
        // line 362
        yield from $this->unwrap()->yieldBlock('sortablelist_entry_row', $context, $blocks);
        // line 368
        yield "
";
        // line 370
        yield from $this->unwrap()->yieldBlock('sortablelist_errors', $context, $blocks);
        // line 392
        yield "
";
        // line 394
        yield from $this->unwrap()->yieldBlock('sortablelist_row', $context, $blocks);
        // line 425
        yield "
";
        // line 427
        yield from $this->unwrap()->yieldBlock('standalone_button_row', $context, $blocks);
        // line 434
        yield "
";
        // line 436
        yield from $this->unwrap()->yieldBlock('standalone_button_widget', $context, $blocks);
        // line 448
        yield "
";
        // line 450
        yield from $this->unwrap()->yieldBlock('tel_widget', $context, $blocks);
        // line 454
        yield "
";
        // line 456
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 482
        yield "
";
        // line 484
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 508
        yield "
";
        // line 510
        yield from $this->unwrap()->yieldBlock('yesno_button_group_widget', $context, $blocks);
        // line 573
        yield "
";
        // line 574
        yield from $this->unwrap()->yieldBlock('attributes', $context, $blocks);
        // line 589
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 606
        yield "
";
        // line 607
        yield from $this->unwrap()->yieldBlock('alert_widget', $context, $blocks);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()));
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 7, $this->source); })()));
        yield "\" ";
        yield (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 7, $this->source); })())) ? ("disabled=\"disabled\"") : (""));
        yield "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !CoreExtension::inFilter($context["k"], ["icon"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 9
            if (CoreExtension::inFilter($context["v"], ["placeholder", "title"])) {
                // line 10
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })()))));
                yield "
";
            } elseif ((            // line 11
$context["v"] === true)) {
                // line 12
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
";
            } elseif ( !(            // line 13
$context["v"] === false)) {
                // line 14
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_group_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
        // line 22
        $context["feedbackClass"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "getMethod", [], "method", false, false, false, 22) === "POST") && ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 22, $this->source); })()) > 0))) ? (" has-error") : (""));
        // line 23
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <div class=\"choice-wrapper\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'widget');
        yield "
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'errors');
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_group_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "attr", [], "any", false, false, false, 37);
        // line 38
        yield "<div class=\"btn-group list-group nav-justified btn-block d-flex fw-nowrap-sm ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonBlockClass"]) || array_key_exists("buttonBlockClass", $context) ? $context["buttonBlockClass"] : (function () { throw new RuntimeError('Variable "buttonBlockClass" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" data-toggle=\"buttons\">
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            yield "        ";
            $context["class"] = ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "checked", [], "any", false, false, false, 40))) ? (" active") : ("")) . ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "disabled", [], "any", false, false, false, 40)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "readonly", [], "any", true, true, false, 40) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "readonly", [], "any", false, false, false, 40))))) ? (" disabled") : ("")));
            // line 41
            yield "        <label class=\"btn ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 41, $this->source); })()), "html", null, true);
            yield " btn-block mt-0 list-group-item\">
            ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })())]);
            yield "
            <span class=\"list-group-item-text btn-block text-left\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 43), "label", [], "any", false, false, false, 43)), "html", null, true);
            yield "</span>
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "</div>
";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 56, $this->source); })())) {
            // line 57
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 57, $this->source); })()));
        }
        // line 59
        yield "<button type=\"";
        yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 59, $this->source); })()))) : ("button"));
        yield "\"
    ";
        // line 60
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "attr", [], "any", false, true, false, 61), "icon", [], "any", true, true, false, 61) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "attr", [], "any", false, false, false, 61), "icon", [], "any", false, false, false, 61)))) {
            // line 62
            yield "    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "attr", [], "any", false, false, false, 62), "icon", [], "any", false, false, false, 62), "html", null, true);
            yield " \"></i>
    ";
        }
        // line 64
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 64, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 64, $this->source); })())));
        yield "
</button>
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "errors", [], "any", false, false, false, 70));
        // line 71
        $context["feedbackClass"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 71, $this->source); })()))) ? (" has-error") : (""));
        // line 72
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"checkbox\">
            <label>
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'widget');
        yield "
                ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77)), "html", null, true);
        yield "
            </label>
        </div>
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'errors');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choice_attr"]) || array_key_exists("choice_attr", $context) ? $context["choice_attr"] : (function () { throw new RuntimeError('Variable "choice_attr" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 88
            if (($context["v"] === true)) {
                // line 89
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
";
            } elseif ( !(            // line 90
$context["v"] === false)) {
                // line 91
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        $context["hasErrors"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "vars", [], "any", false, false, false, 98), "errors", [], "any", false, false, false, 98));
        // line 99
        $context["feedbackClass"] = (((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 99, $this->source); })())) ? (" has-error") : (""));
        // line 101
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "attr", [], "any", false, false, false, 101);
        // line 102
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12 ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 104, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <div class=\"choice-wrapper\">
            ";
        // line 106
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 106, $this->source); })()) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 106, $this->source); })()))) {
            // line 107
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "children", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 108
                yield "                <div class=\"checkbox\">
                    <label>
                        ";
                // line 110
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 110, $this->source); })())]);
                yield "
                        ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 111), "label", [], "any", false, false, false, 111)), "html", null, true);
                yield "
                    </label>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            yield "            ";
        } else {
            // line 116
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), 'widget');
            yield "
            ";
        }
        // line 118
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'help');
        yield "
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'errors');
        yield "
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamiclist_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "<div class=\"sortable\">
    ";
        // line 128
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
    ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'errors');
        yield "
</div>
";
        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamiclist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 135
        $context["list"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "children", [], "any", false, false, false, 135);
        // line 136
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "errors", [], "any", false, false, false, 136));
        // line 137
        $context["feedbackClass"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 137, $this->source); })()))) ? (" has-error") : (""));
        // line 138
        $context["datePrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 138), "prototype", [], "any", true, true, false, 138)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 138, $this->source); })()), "vars", [], "any", false, false, false, 138), "prototype", [], "any", false, false, false, 138), 'widget')) . "</div>"))) : (""));
        // line 139
        yield "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "vars", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
        yield "\" class=\"form-group col-xs-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "vars", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
        yield "_list\">
        ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 141, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <a  data-prototype=\"";
        // line 142
        yield (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 142, $this->source); })());
        yield "\"
           class=\"btn btn-tertiary btn-sm btn-warning btn-add-item\" href=\"#\" id=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        yield "_additem\">
            ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.list.additem"), "html", null, true);
        yield "
        </a>
        ";
        // line 146
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 146, $this->source); })())) {
            // line 147
            yield "        <div class=\"list-sortable\">
        ";
        }
        // line 149
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 149, $this->source); })()), "children", [], "any", false, false, false, 149));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            yield "          ";
            yield from             $this->unwrap()->yieldBlock("sortablelist_entry_row", $context, $blocks);
            yield "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "        </div>
        ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 153, $this->source); })()), 'errors');
        yield "
        ";
        // line 154
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 154, $this->source); })())) {
            // line 155
            yield "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "vars", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "html", null, true);
            yield "_itemcount\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 155, $this->source); })())), "html", null, true);
            yield "\" />
        ";
        }
        // line 157
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_buttons_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 163
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 163, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 164
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "parent", [], "any", false, false, false, 164) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 164, $this->source); })()))) {
            // line 165
            yield "        <div class=\"has-error\">
            ";
            // line 166
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'errors');
            yield "
        </div>
    ";
        }
        // line 169
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'rest');
        yield "
</div>
";
        yield from [];
    }

    // line 175
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 176
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 176, $this->source); })())) > 0)) {
            // line 177
            yield "    <div class=\"help-block\">
    ";
            // line 178
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 178, $this->source); })())) > 1)) {
                // line 179
                yield "        <ul>
            ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 180, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 181
                    yield "                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 181));
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                yield "        </ul>
    ";
            } else {
                // line 185
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 185, $this->source); })())), "getMessage", [], "method", false, false, false, 185));
                yield "
    ";
            }
            // line 187
            yield "    </div>
";
        }
        yield from [];
    }

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 193
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 193, $this->source); })()) === false)) {
            // line 194
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 194, $this->source); })())) {
                // line 195
                yield "    ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 195, $this->source); })()), ["class" => (Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 195)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 195, $this->source); })()), "class", [], "any", false, false, false, 195)) : (""))) . " required")]);
            }
            // line 197
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 197, $this->source); })())) {
                // line 198
                yield "    ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 198, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 198, $this->source); })())]);
            }
            // line 200
            if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 200, $this->source); })())) {
                // line 201
                yield "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 201, $this->source); })()));
            }
            // line 203
            $context["tooltip"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 203), "attr", [], "any", false, true, false, 203), "tooltip", [], "any", true, true, false, 203) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "vars", [], "any", false, false, false, 203), "attr", [], "any", false, false, false, 203), "tooltip", [], "any", false, false, false, 203)))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "vars", [], "any", false, false, false, 203), "attr", [], "any", false, false, false, 203), "tooltip", [], "any", false, false, false, 203))) : (false));
            // line 204
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 204, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 205
                yield "    ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            yield (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 206, $this->source); })())) ? (Twig\Extension\CoreExtension::sprintf("data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" title=\"%s\"", (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 206, $this->source); })()))) : (""));
            yield ">
";
            // line 207
            yield (((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 207, $this->source); })())) ? ($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 207, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 207, $this->source); })())))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 207, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 207, $this->source); })())))));
            yield (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 207, $this->source); })())) ? (" <i class=\"ri-question-line\"></i>") : (""));
            yield "</label>
";
        }
        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 213
        $context["hasErrors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "vars", [], "any", false, false, false, 213), "errors", [], "any", false, false, false, 213));
        // line 214
        $context["feedbackClass"] = ((((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 214, $this->source); })()) > 0)) ? (" has-error") : (""));
        // line 215
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 216, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 217, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), 'widget');
        yield "
        ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'errors');
        yield "
        ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'help');
        yield "
    </div>
 </div>
";
        yield from [];
    }

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 227
        $context["method"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 227, $this->source); })()));
        // line 228
        $context["form_method"] = (((((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 228, $this->source); })()) === "GET") || ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 228, $this->source); })()) === "POST"))) ? ((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 228, $this->source); })())) : ("POST"));
        // line 229
        yield "<form novalidate autocomplete=\"false\" data-toggle=\"ajax\" role=\"form\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "vars", [], "any", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
        yield "\" method=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 229, $this->source); })())), "html", null, true);
        yield "\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 229, $this->source); })()), "html", null, true);
        yield "\"";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 230
            yield "    ";
            yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield (((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new RuntimeError('Variable "multipart" does not exist.', 231, $this->source); })())) ? (" enctype=\"multipart/form-data\"") : (""));
        yield ">
";
        // line 232
        if ( !((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 232, $this->source); })()) === (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 232, $this->source); })()))) {
            // line 233
            yield "    <input type=\"hidden\" name=\"_method\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 233, $this->source); })()));
            yield "\" />
";
        }
        // line 235
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "vars", [], "any", false, false, false, 235), "errors", [], "any", false, false, false, 235)) > 0)) {
            // line 236
            yield "<div class=\"has-error pa-10\">
    ";
            // line 237
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), 'errors');
            yield "
</div>
";
        }
        // line 240
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "vars", [], "any", false, false, false, 240), "help", [], "any", false, false, false, 240)) > 0)) {
            // line 241
            yield "<div class=\"pa-10\">
    ";
            // line 242
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), 'help');
            yield "
</div>
";
        }
        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_compound(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 249
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 250
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "parent", [], "any", false, false, false, 250) && (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 250, $this->source); })()))) {
            // line 251
            yield "    <div class=\"has-error\">
        ";
            // line 252
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), 'errors');
            yield "
    </div>
    ";
        }
        // line 255
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
    ";
        // line 256
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), 'rest');
        yield "
</div>
";
        yield from [];
    }

    // line 261
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 262
        $context["preaddonAttr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_attr", [], "any", true, true, false, 262)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 262, $this->source); })()), "preaddon_attr", [], "any", false, false, false, 262)) : ([]));
        // line 263
        $context["postaddonAttr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_attr", [], "any", true, true, false, 263)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 263, $this->source); })()), "postaddon_attr", [], "any", false, false, false, 263)) : ([]));
        // line 264
        yield "
";
        // line 265
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 265) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 265, $this->source); })()), "preaddon", [], "any", false, false, false, 265))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 266
($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 266) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 266, $this->source); })()), "postaddon", [], "any", false, false, false, 266)))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 267
($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 267) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 267, $this->source); })()), "preaddon_text", [], "any", false, false, false, 267)))) || (CoreExtension::getAttribute($this->env, $this->source,         // line 268
($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 268) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 268, $this->source); })()), "postaddon_text", [], "any", false, false, false, 268))))) {
            // line 269
            yield "    <div class=\"input-group\">
        ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon", [], "any", true, true, false, 270) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 270, $this->source); })()), "preaddon", [], "any", false, false, false, 270)))) {
                // line 271
                yield "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 271, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 272
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                yield ">
            <i class=\"";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 274, $this->source); })()), "preaddon", [], "any", false, false, false, 274), "html", null, true);
                yield "\"></i>
        </span>
        ";
            }
            // line 277
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "preaddon_text", [], "any", true, true, false, 277) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 277, $this->source); })()), "preaddon_text", [], "any", false, false, false, 277)))) {
                // line 278
                yield "        <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 278, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 279
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                yield ">
            <span>";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 281, $this->source); })()), "preaddon_text", [], "any", false, false, false, 281), "html", null, true);
                yield "</span>
        </span>
        ";
            }
            // line 284
            yield "        <input autocomplete=\"false\" type=\"";
            yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 284, $this->source); })()))) : ("text"));
            yield "\"
            ";
            // line 285
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 285, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 285, $this->source); })())))) {
                // line 286
                yield "            value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 286, $this->source); })()));
                yield "\"";
            }
            yield " />

        ";
            // line 288
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon", [], "any", true, true, false, 288) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 288, $this->source); })()), "postaddon", [], "any", false, false, false, 288)))) {
                // line 289
                yield "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 289, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 290
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                yield ">
            <i class=\"";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 292, $this->source); })()), "postaddon", [], "any", false, false, false, 292), "html", null, true);
                yield "\"></i>
        </span>
        ";
            }
            // line 295
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "postaddon_text", [], "any", true, true, false, 295) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 295, $this->source); })()), "postaddon_text", [], "any", false, false, false, 295)))) {
                // line 296
                yield "        <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 296, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 297
                    yield "            ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                yield ">
            <span>";
                // line 299
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 299, $this->source); })()), "postaddon_text", [], "any", false, false, false, 299), "html", null, true);
                yield "</span>
        </span>
        ";
            }
            // line 302
            yield "    </div>
    ";
        } else {
            // line 304
            yield "    ";
            if ((array_key_exists("id", $context) && CoreExtension::inFilter("publish", (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 304, $this->source); })())))) {
                // line 305
                yield "    <div class=\"d-flex gap-3\">
        <label class=\"btn btn-tertiary btn-icon btn-nospin btn-datepicker\" size=\"sm\" for=\"";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 306, $this->source); })()));
                yield "\">
            ";
                // line 307
                if (CoreExtension::inFilter("publishUp", (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 307, $this->source); })()))) {
                    // line 308
                    yield "                <i class=\"ri-calendar-check-line ri-1x\"></i>
            ";
                } elseif (CoreExtension::inFilter("publishDown",                 // line 309
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 309, $this->source); })()))) {
                    // line 310
                    yield "                <i class=\"ri-calendar-close-line ri-1x\"></i>
            ";
                }
                // line 312
                yield "        </label>

        <input type=\"";
                // line 314
                yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 314, $this->source); })()))) : ("text"));
                yield "\"
               ";
                // line 315
                yield from                 $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
                yield "
               ";
                // line 316
                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 316, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 316, $this->source); })())))) {
                    // line 317
                    yield "               value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 317, $this->source); })()));
                    yield "\"
               ";
                }
                // line 318
                yield " />
    </div>

    ";
            } else {
                // line 322
                yield "    <input type=\"";
                yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 322, $this->source); })()))) : ("text"));
                yield "\"
        ";
                // line 323
                yield from                 $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 323, $this->source); })())) || $this->env->getTest('numeric')->getCallable()((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 323, $this->source); })())))) {
                    // line 324
                    yield "        value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 324, $this->source); })()));
                    yield "\"";
                }
                yield " />
    ";
            }
            // line 326
            yield "    ";
        }
        yield from [];
    }

    // line 330
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortable_value_label_list_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 331
        if (( !is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "label", [], "any", false, false, false, 331), "vars", [], "any", false, false, false, 331), "value", [], "any", false, false, false, 331)) &&  !is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "value", [], "any", false, false, false, 331), "vars", [], "any", false, false, false, 331), "value", [], "any", false, false, false, 331)))) {
            // line 332
            yield "<div class=\"input-group sortable-no-reorder\">
    ";
            // line 333
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 333, $this->source); })()))) {
                // line 334
                yield "    <span class=\"input-group-addon preaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preaddonAttr"]) || array_key_exists("preaddonAttr", $context) ? $context["preaddonAttr"] : (function () { throw new RuntimeError('Variable "preaddonAttr" does not exist.', 334, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 335
                    yield "    ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                yield ">
    <i class=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["preaddon"]) || array_key_exists("preaddon", $context) ? $context["preaddon"] : (function () { throw new RuntimeError('Variable "preaddon" does not exist.', 337, $this->source); })()), "html", null, true);
                yield "\"></i>
    </span>
    ";
            }
            // line 340
            yield "    <div>
        <div class=\"row\">
            <div class=\"col-xs-6 mr-0 pr-0 bdr-r-wdh-0\">
            ";
            // line 343
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "label", [], "any", false, false, false, 343), 'widget', ["attr" => ["class" => "form-control sortable-label", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "label", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "label", [], "any", false, false, false, 343)]]);
            yield "
            </div>
            <div class=\"col-xs-6 ml-0 pl-0\">
            ";
            // line 346
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "value", [], "any", false, false, false, 346), 'widget', ["attr" => ["class" => "form-control sortable-value", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "value", [], "any", false, false, false, 346), "vars", [], "any", false, false, false, 346), "label", [], "any", false, false, false, 346)]]);
            yield "
            </div>
        </div>
    </div>
    ";
            // line 350
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 350, $this->source); })()))) {
                // line 351
                yield "    <span class=\"input-group-addon postaddon\" ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["postaddonAttr"]) || array_key_exists("postaddonAttr", $context) ? $context["postaddonAttr"] : (function () { throw new RuntimeError('Variable "postaddonAttr" does not exist.', 351, $this->source); })()));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 352
                    yield "    ";
                    yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                    yield "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                yield ">
        <i class=\"";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["postaddon"]) || array_key_exists("postaddon", $context) ? $context["postaddon"] : (function () { throw new RuntimeError('Variable "postaddon" does not exist.', 354, $this->source); })()), "html", null, true);
                yield "\"></i>
    </span>
    ";
            }
            // line 357
            yield "</div>
";
        }
        yield from [];
    }

    // line 362
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 363
        yield "<div class=\"sortable\">
    ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 364, $this->source); })()), 'widget');
        yield "
    ";
        // line 365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 365, $this->source); })()), 'errors');
        yield "
</div>
";
        yield from [];
    }

    // line 370
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 371
        $context["errorMessages"] = [];
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 372, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 373
            yield "    ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 373), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 373, $this->source); })()))) {
                // line 374
                yield "        ";
                $context["errorMessages"] = Twig\Extension\CoreExtension::merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 374, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["error"], "getMessage", [], "method", false, false, false, 374)]);
                // line 375
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        yield "
";
        // line 378
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 378, $this->source); })())) > 0)) {
            // line 379
            yield "    <div class=\"help-block\">
        ";
            // line 380
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 380, $this->source); })())) > 1)) {
                // line 381
                yield "            <ul>
                ";
                // line 382
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 382, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["errorMessage"]) {
                    // line 383
                    yield "                    <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["errorMessage"]);
                    yield "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['errorMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                yield "            </ul>
        ";
            } else {
                // line 387
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 387, $this->source); })())));
                yield "
        ";
            }
            // line 389
            yield "    </div>
";
        }
        yield from [];
    }

    // line 394
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sortablelist_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 395
        $context["list"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "children", [], "any", false, false, false, 395), "list", [], "any", false, false, false, 395);
        // line 396
        if (((($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "parent", [], "any", false, false, false, 396), 'errors') && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 396, $this->source); })()), "vars", [], "any", false, false, false, 396), "value", [], "any", false, false, false, 396))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 396), "children", [], "any", false, true, false, 396), "properties", [], "any", false, true, false, 396), "list", [], "any", true, true, false, 396)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "parent", [], "any", false, false, false, 396), "vars", [], "any", false, false, false, 396), "data", [], "any", false, false, false, 396), "getId", [], "method", false, false, false, 396) === null))) {
            // line 397
            yield "    ";
            // line 398
            yield "    ";
            $context["list"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "parent", [], "any", false, false, false, 398), "children", [], "any", false, false, false, 398), "properties", [], "any", false, false, false, 398), "list", [], "any", false, false, false, 398);
        }
        // line 400
        $context["feedbackClass"] = (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 400, $this->source); })()), 'errors')) ? (" has-error") : (""));
        // line 401
        $context["datePrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["list"] ?? null), "vars", [], "any", false, true, false, 401), "prototype", [], "any", true, true, false, 401)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("<div class=\"sortable\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 401, $this->source); })()), "vars", [], "any", false, false, false, 401), "prototype", [], "any", false, false, false, 401), 'widget')) . "</div>"))) : (""));
        // line 402
        yield "<div class=\"row\">
    <div data-toggle=\"sortablelist\" data-prefix=\"";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), "vars", [], "any", false, false, false, 403), "id", [], "any", false, false, false, 403), "html", null, true);
        yield "\" class=\"form-group col-xs-12 ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedbackClass"]) || array_key_exists("feedbackClass", $context) ? $context["feedbackClass"] : (function () { throw new RuntimeError('Variable "feedbackClass" does not exist.', 403, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), "vars", [], "any", false, false, false, 403), "id", [], "any", false, false, false, 403), "html", null, true);
        yield "_list\" style=\"overflow:auto\">
        ";
        // line 404
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), 'label', (CoreExtension::testEmpty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 404, $this->source); })())) ? [] : ["label" => $_label_]));
        yield "
        <a data-prototype=\"";
        // line 405
        yield (isset($context["datePrototype"]) || array_key_exists("datePrototype", $context) ? $context["datePrototype"] : (function () { throw new RuntimeError('Variable "datePrototype" does not exist.', 405, $this->source); })());
        yield "\"
           class=\"btn btn-tertiary btn-sm btn-add-item\" href=\"#\" id=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "vars", [], "any", false, false, false, 406), "id", [], "any", false, false, false, 406), "html", null, true);
        yield "_additem\">
            ";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["addValueButton"]) || array_key_exists("addValueButton", $context) ? $context["addValueButton"] : (function () { throw new RuntimeError('Variable "addValueButton" does not exist.', 407, $this->source); })())), "html", null, true);
        yield "
        </a>
        ";
        // line 409
        yield from         $this->unwrap()->yieldBlock("sortablelist_errors", $context, $blocks);
        yield "
        ";
        // line 410
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 410, $this->source); })())) {
            // line 411
            yield "        <div id=\"sortable-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "vars", [], "any", false, false, false, 411), "id", [], "any", false, false, false, 411), "html", null, true);
            yield "\" class=\"list-sortable\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 411, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 412
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 413
            yield ">
        ";
        }
        // line 415
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 415, $this->source); })()), "children", [], "any", false, false, false, 415));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 416
            yield "            ";
            yield from             $this->unwrap()->yieldBlock("sortablelist_entry_row", $context, $blocks);
            yield "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        yield "        </div>
        ";
        // line 419
        if ((isset($context["isSortable"]) || array_key_exists("isSortable", $context) ? $context["isSortable"] : (function () { throw new RuntimeError('Variable "isSortable" does not exist.', 419, $this->source); })())) {
            // line 420
            yield "        <input type=\"hidden\" class=\"sortable-itemcount\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "vars", [], "any", false, false, false, 420), "id", [], "any", false, false, false, 420), "html", null, true);
            yield "_itemcount\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 420, $this->source); })())), "html", null, true);
            yield "\" />
        ";
        }
        // line 422
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 427
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_standalone_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 428
        yield "<div class=\"row\">
    <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
        ";
        // line 430
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 430, $this->source); })()), 'widget');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 436
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_standalone_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 437
        if ( !(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 437, $this->source); })())) {
            // line 438
            $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 438, $this->source); })()));
        }
        // line 440
        yield "<button type=\"";
        yield ((array_key_exists("type", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 440, $this->source); })()))) : ("button"));
        yield "\"
    ";
        // line 441
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    ";
        // line 442
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 442), "attr", [], "any", false, true, false, 442), "icon", [], "any", true, true, false, 442) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), "vars", [], "any", false, false, false, 442), "attr", [], "any", false, false, false, 442), "icon", [], "any", false, false, false, 442)))) {
            // line 443
            yield "    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "vars", [], "any", false, false, false, 443), "attr", [], "any", false, false, false, 443), "icon", [], "any", false, false, false, 443), "html", null, true);
            yield " \"></i>
    ";
        }
        // line 445
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 445, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 445, $this->source); })())));
        yield "
</button>
";
        yield from [];
    }

    // line 450
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tel_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 452
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 456
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 457
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 457, $this->source); })()) === "single_text")) {
            // line 458
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
            yield "
";
        } else {
            // line 460
            yield "    ";
            $context["size"] = 4;
            // line 461
            yield "    ";
            if (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 461, $this->source); })()) &&  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 461, $this->source); })()))) {
                // line 462
                yield "        ";
                $context["size"] = 12;
                // line 463
                yield "    ";
            } elseif (( !(isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 463, $this->source); })()) ||  !(isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 463, $this->source); })()))) {
                // line 464
                yield "        ";
                $context["size"] = 6;
                // line 465
                yield "    ";
            }
            // line 466
            yield "    ";
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 466, $this->source); })()) === "text")) ? (["attr" => ["size" => 1, "class" => "not-chosen"]]) : (["attr" => ["class" => "not-chosen"]]));
            // line 467
            yield "    <div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">
        ";
            // line 470
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 470, $this->source); })()), "hour", [], "any", false, false, false, 470), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 470, $this->source); })()));
            yield "

        ";
            // line 472
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 472, $this->source); })())) {
                // line 473
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), "minute", [], "any", false, false, false, 473), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 473, $this->source); })()))), "html", null, true);
                yield "
        ";
            }
            // line 475
            yield "
        ";
            // line 476
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 476, $this->source); })())) {
                // line 477
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((":" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), "second", [], "any", false, false, false, 477), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 477, $this->source); })()))), "html", null, true);
                yield "
        ";
            }
            // line 479
            yield "    </div>
";
        }
        yield from [];
    }

    // line 484
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 485
        yield "id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 485, $this->source); })()));
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 485, $this->source); })()));
        yield "\"
";
        // line 486
        yield ((((array_key_exists("disabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 486, $this->source); })()), false)) : (false))) ? ("disabled=\"disabled\"") : (""));
        yield "
";
        // line 487
        yield ((((array_key_exists("required", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 487, $this->source); })()), false)) : (false))) ? ("required=\"required\"") : (""));
        yield "

";
        // line 490
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 490, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return !CoreExtension::inFilter($context["k"], ["tooltip", "preaddon", "preaddon_attr", "postaddon_attr", "help_icon"]); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 491
            yield "    ";
            if (CoreExtension::inFilter($context["k"], ["placeholder", "title"])) {
                // line 492
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 492, $this->source); })()))));
                yield "
    ";
            } elseif (((            // line 493
$context["k"] === "data-order") && $this->env->getTest('string')->getCallable()($context["v"]))) {
                // line 494
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=\"";
                yield $context["v"];
                yield "\"
    ";
            } elseif (((is_string($__internal_compile_0 =             // line 495
$context["k"]) && is_string($__internal_compile_1 = "data-") && str_starts_with($__internal_compile_0, $__internal_compile_1)) && CoreExtension::matches("/data-(none|start|both|end)/", $context["k"]))) {
                // line 496
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\"", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            } elseif ((            // line 497
$context["v"] === true)) {
                // line 498
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]));
                yield "
    ";
            } elseif (is_iterable(            // line 499
$context["v"])) {
                // line 500
                yield "        ";
                $context["v"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->formatList(Twig\Extension\CoreExtension::constant("Mautic\\FormBundle\\Helper\\FormFieldHelper::FORMAT_BAR"), $context["v"]);
                // line 501
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            } elseif ( !(            // line 502
$context["v"] === false)) {
                // line 503
                yield "        ";
                yield Twig\Extension\CoreExtension::sprintf("%s=\"%s\" ", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]));
                yield "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "autocomplete", [], "any", true, true, false, 506)) ? ("autocomplete=\"false\" ") : (""));
        yield "
";
        yield from [];
    }

    // line 510
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_yesno_button_group_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 511
        yield "    ";
        // line 512
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge(((array_key_exists("attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 512, $this->source); })()), [])) : ([])), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 512), "attr", [], "any", true, true, false, 512)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 512), "attr", [], "any", false, false, false, 512), [])) : ([])));
        // line 513
        yield "    ";
        // line 514
        yield "    ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 514, $this->source); })()), ["onchange" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 515
($context["attr"] ?? null), "onchange", [], "any", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "onchange", [], "any", false, false, false, 515), "")) : ("")) . "; Mautic.toggleYesNo(this);"))]);
        // line 517
        yield "    ";
        $context["id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 517, $this->source); })()), "vars", [], "any", false, false, false, 517), "id", [], "any", false, false, false, 517);
        // line 518
        yield "    ";
        $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "vars", [], "any", false, false, false, 518), "full_name", [], "any", false, false, false, 518);
        // line 519
        yield "    ";
        $context["value"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 519, $this->source); })()), "vars", [], "any", false, false, false, 519), "value", [], "any", false, false, false, 519);
        // line 520
        yield "    ";
        $context["size"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 520), "attr", [], "any", false, true, false, 520), "size", [], "any", true, true, false, 520)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 520), "attr", [], "any", false, true, false, 520), "size", [], "any", false, false, false, 520), null)) : (null));
        // line 521
        yield "
    ";
        // line 522
        $context["yes_choice"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "vars", [], "any", false, false, false, 522), "choices", [], "any", false, false, false, 522), 1, [], "array", false, false, false, 522);
        // line 523
        yield "    ";
        $context["no_choice"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "vars", [], "any", false, false, false, 523), "choices", [], "any", false, false, false, 523), 0, [], "array", false, false, false, 523);
        // line 524
        yield "
    <div class=\"toggle\"
         data-yes=\"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 526, $this->source); })()), "label", [], "any", false, false, false, 526)), "html", null, true);
        yield "\"
         data-no=\"";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 527, $this->source); })()), "label", [], "any", false, false, false, 527)), "html", null, true);
        yield "\"
         data-yes-value=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 528, $this->source); })()), "value", [], "any", false, false, false, 528), "html", null, true);
        yield "\"
         data-no-value=\"";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 529, $this->source); })()), "value", [], "any", false, false, false, 529), "html", null, true);
        yield "\"
         ";
        // line 530
        if ((array_key_exists("id", $context) && CoreExtension::inFilter("Publish", (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 530, $this->source); })())))) {
            // line 531
            yield "            data-none=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-none", [], "array", true, true, false, 531)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-none", [], "array", false, false, false, 531), "mautic.core.form.inactive_regardless_of_scheduling")) : ("mautic.core.form.inactive_regardless_of_scheduling"))), "html", null, true);
            yield "\"
            data-start=\"";
            // line 532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-start", [], "array", true, true, false, 532)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-start", [], "array", false, false, false, 532), "mautic.core.form.active_on_scheduled_date")) : ("mautic.core.form.active_on_scheduled_date"))), "html", null, true);
            yield "\"
            data-both=\"";
            // line 533
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-both", [], "array", true, true, false, 533)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-both", [], "array", false, false, false, 533), "mautic.core.form.active_during_scheduled_period")) : ("mautic.core.form.active_during_scheduled_period"))), "html", null, true);
            yield "\"
            data-end=\"";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-end", [], "array", true, true, false, 534)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-end", [], "array", false, false, false, 534), "mautic.core.form.active_until_scheduled_end")) : ("mautic.core.form.active_until_scheduled_end"))), "html", null, true);
            yield "\"
        ";
        }
        // line 535
        yield " >

        ";
        // line 538
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([(isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 538, $this->source); })()), (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 538, $this->source); })())]);
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 539
            yield "            <input type=\"radio\"
                   id=\"";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 540, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 540), "html", null, true);
            yield "\"
                   name=\"";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 541, $this->source); })()), "html", null, true);
            yield "\"
                   value=\"";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 542), "html", null, true);
            yield "\"
                   ";
            // line 543
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 543, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 543))) {
                yield "checked";
            }
            // line 544
            yield "                   style=\"display: none;\"
                   aria-checked=\"";
            // line 545
            yield ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 545, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 545))) ? ("true") : ("false"));
            yield "\"
                   ";
            // line 546
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 546, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                // line 547
                yield "                       ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            yield ">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        yield "
        <label id=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 551, $this->source); })()), "html", null, true);
        yield "_label\"
               class=\"toggle__label\"
               data-yes-id=\"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 553, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 553, $this->source); })()), "value", [], "any", false, false, false, 553), "html", null, true);
        yield "\"
               data-no-id=\"";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 554, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 554, $this->source); })()), "value", [], "any", false, false, false, 554), "html", null, true);
        yield "\"
               onclick=\"Mautic.toggleYesNo(this);\"
               role=\"switch\"
               tabindex=\"0\"
               onkeydown=\"Mautic.handleKeyDown(event, this)\">
            <div class=\"toggle__appearance\" ";
        // line 559
        if ((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 559, $this->source); })())) {
            yield "size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 559, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">
                <div class=\"toggle__switch ";
        // line 560
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 560, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 560, $this->source); })()), "value", [], "any", false, false, false, 560))) {
            yield "toggle__switch--checked";
        }
        yield "\">
                    <svg class=\"toggle__check\" width=\"6px\" height=\"5px\" viewBox=\"0 0 6 5\">
                        <path d=\"M2.2 2.7L5 0 6 1 2.2 5 0 2.7 1 1.5z\"></path>
                    </svg>
                </div>
                <span class=\"toggle__text\" aria-hidden=\"true\">
                    ";
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 566, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 566, $this->source); })()), "value", [], "any", false, false, false, 566))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["yes_choice"]) || array_key_exists("yes_choice", $context) ? $context["yes_choice"] : (function () { throw new RuntimeError('Variable "yes_choice" does not exist.', 566, $this->source); })()), "label", [], "any", false, false, false, 566))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["no_choice"]) || array_key_exists("no_choice", $context) ? $context["no_choice"] : (function () { throw new RuntimeError('Variable "no_choice" does not exist.', 566, $this->source); })()), "label", [], "any", false, false, false, 566)))), "html", null, true);
        yield "
                </span>
            </div>
        </label>
    </div>
    ";
        // line 571
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 571, $this->source); })()), 'help');
        yield "
";
        yield from [];
    }

    // line 574
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 575, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 576
            yield " ";
            // line 577
            if (CoreExtension::inFilter($context["attrname"], ["placeholder", "title"])) {
                // line 578
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 578, $this->source); })()) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 578, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 578, $this->source); })())))), "html", null, true);
                yield "\"";
            } elseif (CoreExtension::inFilter(            // line 579
$context["attrname"], ["data-filter-definitions", "data-filter-operators"])) {
                // line 580
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $context["attrvalue"];
                yield "\"";
            } elseif ((            // line 581
$context["attrvalue"] === true)) {
                // line 582
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "\"";
            } elseif ( !(            // line 583
$context["attrvalue"] === false)) {
                // line 584
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    // line 589
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 590
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 590, $this->source); })())) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 590), "attr", [], "any", false, true, false, 590), "help_icon", [], "any", true, true, false, 590))) {
            // line 591
            $context["help_attr"] = Twig\Extension\CoreExtension::merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 591, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 591)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 591), "")) : ("")) . " help-block"))]);
            // line 592
            yield "<p id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 592, $this->source); })()), "html", null, true);
            yield "_help\"";
            $__internal_compile_2 = $context;
            $__internal_compile_3 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 592, $this->source); })())];
            if (!is_iterable($__internal_compile_3)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 592, $this->getSourceContext());
            }
            $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
            $context = $__internal_compile_3 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_2;
            yield ">";
            // line 593
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 593), "attr", [], "any", false, true, false, 593), "help_icon", [], "any", true, true, false, 593) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 593, $this->source); })()), "vars", [], "any", false, false, false, 593), "attr", [], "any", false, false, false, 593), "help_icon", [], "any", false, false, false, 593)))) {
                // line 594
                yield "<i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 594, $this->source); })()), "vars", [], "any", false, false, false, 594), "attr", [], "any", false, false, false, 594), "help_icon", [], "any", false, false, false, 594), "html", null, true);
                yield " ri-lg mr-xs\"></i>";
            }
            // line 596
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 596, $this->source); })()))) {
                // line 597
                if (((isset($context["help_html"]) || array_key_exists("help_html", $context) ? $context["help_html"] : (function () { throw new RuntimeError('Variable "help_html" does not exist.', 597, $this->source); })()) === false)) {
                    // line 598
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 598, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 598, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 598, $this->source); })())), "html", null, true);
                } else {
                    // line 600
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 600, $this->source); })()), (isset($context["help_translation_parameters"]) || array_key_exists("help_translation_parameters", $context) ? $context["help_translation_parameters"] : (function () { throw new RuntimeError('Variable "help_translation_parameters" does not exist.', 600, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 600, $this->source); })())));
                }
            }
            // line 603
            yield "</p>";
        }
        yield from [];
    }

    // line 607
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_alert_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 608
        yield "    <div class=\"row\">
        <div ";
        // line 609
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::merge(["class" => "col-sm-12"], (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 609, $this->source); })()))];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 609, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $__internal_compile_5 + $context + $this->env->getGlobals();
        yield " ";
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">
            <div class=\"alert alert-";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["messageType"]) || array_key_exists("messageType", $context) ? $context["messageType"] : (function () { throw new RuntimeError('Variable "messageType" does not exist.', 610, $this->source); })()), "html", null, true);
        yield "\">
                ";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 611, $this->source); })()), "html", null, true);
        yield "
            </div>
        </div>
    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/mautic_form_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  2027 => 611,  2023 => 610,  2010 => 609,  2007 => 608,  2000 => 607,  1994 => 603,  1990 => 600,  1987 => 598,  1985 => 597,  1983 => 596,  1978 => 594,  1976 => 593,  1962 => 592,  1960 => 591,  1958 => 590,  1951 => 589,  1938 => 584,  1936 => 583,  1931 => 582,  1929 => 581,  1924 => 580,  1922 => 579,  1917 => 578,  1915 => 577,  1913 => 576,  1909 => 575,  1902 => 574,  1895 => 571,  1887 => 566,  1876 => 560,  1868 => 559,  1858 => 554,  1852 => 553,  1847 => 551,  1844 => 550,  1837 => 548,  1826 => 547,  1822 => 546,  1818 => 545,  1815 => 544,  1811 => 543,  1807 => 542,  1803 => 541,  1797 => 540,  1794 => 539,  1789 => 538,  1785 => 535,  1780 => 534,  1776 => 533,  1772 => 532,  1767 => 531,  1765 => 530,  1761 => 529,  1757 => 528,  1753 => 527,  1749 => 526,  1745 => 524,  1742 => 523,  1740 => 522,  1737 => 521,  1734 => 520,  1731 => 519,  1728 => 518,  1725 => 517,  1723 => 515,  1721 => 514,  1719 => 513,  1716 => 512,  1714 => 511,  1707 => 510,  1700 => 506,  1690 => 503,  1688 => 502,  1683 => 501,  1680 => 500,  1678 => 499,  1673 => 498,  1671 => 497,  1666 => 496,  1664 => 495,  1657 => 494,  1655 => 493,  1650 => 492,  1647 => 491,  1643 => 490,  1638 => 487,  1634 => 486,  1627 => 485,  1620 => 484,  1613 => 479,  1607 => 477,  1605 => 476,  1602 => 475,  1596 => 473,  1594 => 472,  1588 => 470,  1583 => 467,  1580 => 466,  1577 => 465,  1574 => 464,  1571 => 463,  1568 => 462,  1565 => 461,  1562 => 460,  1556 => 458,  1554 => 457,  1547 => 456,  1540 => 452,  1533 => 450,  1524 => 445,  1518 => 443,  1516 => 442,  1512 => 441,  1507 => 440,  1504 => 438,  1502 => 437,  1495 => 436,  1486 => 430,  1482 => 428,  1475 => 427,  1468 => 422,  1460 => 420,  1458 => 419,  1455 => 418,  1438 => 416,  1420 => 415,  1416 => 413,  1407 => 412,  1400 => 411,  1398 => 410,  1394 => 409,  1389 => 407,  1385 => 406,  1381 => 405,  1377 => 404,  1369 => 403,  1366 => 402,  1364 => 401,  1362 => 400,  1358 => 398,  1356 => 397,  1354 => 396,  1352 => 395,  1345 => 394,  1338 => 389,  1332 => 387,  1328 => 385,  1319 => 383,  1315 => 382,  1312 => 381,  1310 => 380,  1307 => 379,  1305 => 378,  1302 => 377,  1295 => 375,  1292 => 374,  1289 => 373,  1285 => 372,  1283 => 371,  1276 => 370,  1268 => 365,  1264 => 364,  1261 => 363,  1254 => 362,  1247 => 357,  1241 => 354,  1238 => 353,  1229 => 352,  1224 => 351,  1222 => 350,  1215 => 346,  1209 => 343,  1204 => 340,  1198 => 337,  1195 => 336,  1186 => 335,  1181 => 334,  1179 => 333,  1176 => 332,  1174 => 331,  1167 => 330,  1161 => 326,  1153 => 324,  1150 => 323,  1145 => 322,  1139 => 318,  1133 => 317,  1131 => 316,  1127 => 315,  1123 => 314,  1119 => 312,  1115 => 310,  1113 => 309,  1110 => 308,  1108 => 307,  1104 => 306,  1101 => 305,  1098 => 304,  1094 => 302,  1088 => 299,  1085 => 298,  1076 => 297,  1071 => 296,  1068 => 295,  1062 => 292,  1059 => 291,  1050 => 290,  1045 => 289,  1043 => 288,  1035 => 286,  1032 => 285,  1027 => 284,  1021 => 281,  1018 => 280,  1009 => 279,  1004 => 278,  1001 => 277,  995 => 274,  992 => 273,  983 => 272,  978 => 271,  976 => 270,  973 => 269,  971 => 268,  970 => 267,  969 => 266,  968 => 265,  965 => 264,  963 => 263,  961 => 262,  954 => 261,  946 => 256,  941 => 255,  935 => 252,  932 => 251,  930 => 250,  925 => 249,  918 => 248,  909 => 242,  906 => 241,  904 => 240,  898 => 237,  895 => 236,  893 => 235,  887 => 233,  885 => 232,  881 => 231,  872 => 230,  861 => 229,  859 => 228,  857 => 227,  850 => 226,  841 => 220,  837 => 219,  833 => 218,  829 => 217,  825 => 216,  822 => 215,  820 => 214,  818 => 213,  811 => 212,  802 => 207,  798 => 206,  789 => 205,  784 => 204,  782 => 203,  778 => 201,  776 => 200,  772 => 198,  770 => 197,  766 => 195,  764 => 194,  762 => 193,  755 => 192,  748 => 187,  742 => 185,  738 => 183,  729 => 181,  725 => 180,  722 => 179,  720 => 178,  717 => 177,  715 => 176,  708 => 175,  700 => 170,  698 => 169,  692 => 166,  689 => 165,  687 => 164,  680 => 163,  673 => 162,  666 => 157,  658 => 155,  656 => 154,  652 => 153,  649 => 152,  632 => 150,  614 => 149,  610 => 147,  608 => 146,  603 => 144,  599 => 143,  595 => 142,  591 => 141,  583 => 140,  580 => 139,  578 => 138,  576 => 137,  574 => 136,  572 => 135,  565 => 134,  557 => 129,  553 => 128,  550 => 127,  543 => 126,  533 => 119,  528 => 118,  522 => 116,  519 => 115,  509 => 111,  505 => 110,  501 => 108,  496 => 107,  494 => 106,  489 => 104,  485 => 103,  482 => 102,  480 => 101,  478 => 99,  476 => 98,  469 => 97,  457 => 91,  455 => 90,  451 => 89,  449 => 88,  445 => 87,  438 => 86,  429 => 80,  423 => 77,  419 => 76,  413 => 73,  410 => 72,  408 => 71,  406 => 70,  399 => 69,  390 => 64,  384 => 62,  382 => 61,  378 => 60,  373 => 59,  370 => 57,  368 => 56,  361 => 55,  354 => 51,  347 => 50,  341 => 46,  332 => 43,  328 => 42,  323 => 41,  320 => 40,  316 => 39,  311 => 38,  309 => 37,  302 => 35,  292 => 28,  288 => 27,  283 => 25,  279 => 24,  276 => 23,  274 => 22,  272 => 21,  265 => 20,  253 => 14,  251 => 13,  247 => 12,  245 => 11,  241 => 10,  239 => 9,  235 => 8,  226 => 7,  219 => 6,  214 => 607,  211 => 606,  209 => 589,  207 => 574,  204 => 573,  202 => 510,  199 => 508,  197 => 484,  194 => 482,  192 => 456,  189 => 454,  187 => 450,  184 => 448,  182 => 436,  179 => 434,  177 => 427,  174 => 425,  172 => 394,  169 => 392,  167 => 370,  164 => 368,  162 => 362,  159 => 360,  157 => 330,  154 => 328,  152 => 261,  149 => 259,  147 => 248,  144 => 246,  142 => 226,  139 => 224,  137 => 212,  134 => 210,  132 => 192,  129 => 190,  127 => 175,  124 => 173,  122 => 162,  119 => 160,  117 => 134,  114 => 132,  112 => 126,  109 => 124,  107 => 97,  104 => 95,  102 => 86,  99 => 84,  97 => 69,  94 => 67,  92 => 55,  89 => 53,  87 => 50,  84 => 48,  82 => 35,  79 => 33,  77 => 20,  74 => 18,  72 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/mautic_form_layout.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/mautic_form_layout.html.twig");
    }
}
