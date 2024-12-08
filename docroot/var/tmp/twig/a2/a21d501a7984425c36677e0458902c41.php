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

/* @MauticPoint/Trigger/form.html.twig */
class __TwigTemplate_9ed013b3abc0124955b5e5a1540f63ee extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'modal' => [$this, 'block_modal'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPoint/Trigger/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "pointTrigger";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) {
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7))]), "html", null, true);
        } else {
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.header.new"), "html", null, true);
        }
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_modal(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "triggerEventModal", "header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.form.modalheader"), "footerButtons" => true]);
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        yield "
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- tabs controls -->
                <ul class=\"nav nav-tabs nav-tabs-contained\">
                    <li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a></li>
                    <li class=\"\"><a href=\"#events-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.tab.events"), "html", null, true);
        yield "</a></li>
                </ul>
                <!--/ tabs controls -->

                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0 height-auto\" id=\"details-container\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"pa-md\">
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'row');
        yield "
                                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control editor"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"pa-md\">
                                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "points", [], "any", false, false, false, 43), 'row');
        yield "
                                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "color", [], "any", false, false, false, 44), 'row');
        yield "
                                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "group", [], "any", false, false, false, 45), 'row');
        yield "
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "triggerExistingLeads", [], "any", false, false, false, 46), 'row');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane fade bdr-w-0\" id=\"events-container\">
                        <div id=\"triggerEvents\">
                            <div class=\"mb-md\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-ghost dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                                        ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.event.add"), "html", null, true);
        yield "
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["event"]) {
            // line 62
            yield "                                            <li role=\"presentation\" class=\"dropdown-header\">
                                                ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "
                                            </li>
                                            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["event"]);
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 66
                yield "                                                <li id=\"event_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "\">
                                                    <a data-toggle=\"ajaxmodal\"
                                                       data-target=\"#triggerEventModal\"
                                                       class=\"list-group-item\"
                                                       href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_pointtriggerevent_action", ["objectAction" => "new", "type" => $context["k"], "tmpl" => "event", "triggerId" => (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 70, $this->source); })())]), "html", null, true);
                yield "\">
                                                        <div data-toggle=\"tooltip\" title=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 71), "html", null, true);
                yield "\">
                                                            <span>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "label", [], "any", false, false, false, 72), "html", null, true);
                yield "</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                                    </ul>
                                </div>
                            </div>
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["triggerEvents"]) || array_key_exists("triggerEvents", $context) ? $context["triggerEvents"] : (function () { throw new RuntimeError('Variable "triggerEvents" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 82
            yield "                                ";
            $context["template"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "settings", [], "any", false, true, false, 82), "template", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "settings", [], "any", false, true, false, 82), "template", [], "any", false, false, false, 82), "@MauticPoint/Event/generic.html.twig")) : ("@MauticPoint/Event/generic.html.twig"));
            // line 83
            yield "                                <!-- start: \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "\" -->
                                ";
            // line 84
            yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 84, $this->source); })()), ["event" =>             // line 85
$context["event"], "id" => CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["event"], "id", [], "any", false, false, false, 86), "deleted" => CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["event"], "id", [], "any", false, false, false, 87), (isset($context["deletedEvents"]) || array_key_exists("deletedEvents", $context) ? $context["deletedEvents"] : (function () { throw new RuntimeError('Variable "deletedEvents" does not exist.', 87, $this->source); })())), "sessionId" =>             // line 88
(isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 88, $this->source); })())], false);
            // line 89
            yield "
                                <!--/ start: \"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "\" -->
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            yield "                                <div class=\"alert alert-info\" id=\"triggerEventPlaceholder\">
                                    <p>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.addevent"), "html", null, true);
            yield "</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "category", [], "any", false, false, false, 104), 'row');
        yield "
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "isPublished", [], "any", false, false, false, 105), 'row');
        yield "
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "publishUp", [], "any", false, false, false, 106), 'row');
        yield "
            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "publishDown", [], "any", false, false, false, 107), 'row');
        yield "
        </div>
    </div>
</div>
";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Trigger/form.html.twig";
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
        return array (  296 => 111,  289 => 107,  285 => 106,  281 => 105,  277 => 104,  267 => 96,  258 => 93,  255 => 92,  248 => 90,  245 => 89,  243 => 88,  242 => 87,  241 => 86,  240 => 85,  239 => 84,  234 => 83,  231 => 82,  226 => 81,  221 => 78,  215 => 77,  204 => 72,  200 => 71,  196 => 70,  188 => 66,  184 => 65,  179 => 63,  176 => 62,  172 => 61,  165 => 57,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  131 => 38,  127 => 37,  115 => 28,  111 => 27,  101 => 20,  94 => 19,  83 => 13,  77 => 9,  74 => 7,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Trigger/form.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/Trigger/form.html.twig");
    }
}
