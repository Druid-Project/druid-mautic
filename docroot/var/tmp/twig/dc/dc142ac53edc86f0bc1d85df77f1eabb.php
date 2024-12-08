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

/* @MauticSms/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_c13647fc53f0e6f385015f3c87e9bd8d extends Template
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
        $context["item"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 1), "stat", [], "any", true, true, false, 1)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "stat", [], "any", false, false, false, 1)) : (false));
        // line 2
        if ((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "    ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 3), "type", [], "any", true, true, false, 3)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "extra", [], "any", false, false, false, 3), "type", [], "any", false, false, false, 3)) : (null));
            // line 4
            yield "    <p>
        ";
            // line 5
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isFailed", [], "any", true, true, false, 5) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "isFailed", [], "any", false, false, false, 5))) && ("failed" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })())))) {
                // line 6
                yield "            ";
                $context["details"] = $this->env->getFilter('json_decode')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "details", [], "any", false, false, false, 6));
                // line 7
                yield "            ";
                $context["errors"] = "";
                // line 8
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "failed", [], "any", true, true, false, 8)) {
                    // line 9
                    yield "                ";
                    $context["failedDetails"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 9, $this->source); })()), "failed", [], "any", false, false, false, 9);
                    // line 10
                    yield "                ";
                    if ( !is_iterable((isset($context["failedDetails"]) || array_key_exists("failedDetails", $context) ? $context["failedDetails"] : (function () { throw new RuntimeError('Variable "failedDetails" does not exist.', 10, $this->source); })()))) {
                        // line 11
                        yield "                    ";
                        $context["failedDetails"] = [(isset($context["failedDetails"]) || array_key_exists("failedDetails", $context) ? $context["failedDetails"] : (function () { throw new RuntimeError('Variable "failedDetails" does not exist.', 11, $this->source); })())];
                        // line 12
                        yield "                ";
                    }
                    // line 13
                    yield "                ";
                    $context["errors"] = Twig\Extension\CoreExtension::join((isset($context["failedDetails"]) || array_key_exists("failedDetails", $context) ? $context["failedDetails"] : (function () { throw new RuntimeError('Variable "failedDetails" does not exist.', 13, $this->source); })()), "<br />");
                    // line 14
                    yield "            ";
                }
                // line 15
                yield "        <span class=\"text-danger mt-0 mb-10\"><i class=\"ri-alert-line\"></i>
            ";
                // line 16
                if ((array_key_exists("errors", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 16, $this->source); })())))) {
                    // line 17
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()), "html", null, true);
                    yield "
            ";
                } else {
                    // line 19
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.event.failed"), "html", null, true);
                    yield "
            ";
                }
                // line 21
                yield "        </span>

        ";
            }
            // line 24
            yield "        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "list_name", [], "any", true, true, false, 24) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "list_name", [], "any", false, false, false, 24))) && ("failed" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })())))) {
                // line 25
                yield "            <br />";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.event.list", ["%list%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "list_name", [], "any", false, false, false, 25)]), "html", null, true);
                yield "
        ";
            }
            // line 27
            yield "    </p>
";
        }
        // line 29
        yield "
";
        // line 30
        if (array_key_exists("errors", $context)) {
            // line 31
            yield "<p class=\"text-danger mt-0 mb-10\">
    <i class=\"ri-alert-line\"></i> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.last_error") . ": ") . (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 32, $this->source); })())), "html", null, true);
            yield "
</p>
";
        } else {
            // line 35
            yield "<dl class=\"dl-horizontal\">
    <dt>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.status"), "html", null, true);
            yield "</dt>
    <dd>
        ";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "is_failed", [], "any", true, true, false, 38) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "is_failed", [], "any", false, false, false, 38)))) {
                // line 39
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.failed"), "html", null, true);
                yield "
        ";
            } else {
                // line 41
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send"), "html", null, true);
                yield "
        ";
            }
            // line 43
            yield "    </dd>
    <dt>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.type"), "html", null, true);
            yield "</dt>
    <dd>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45)), "html", null, true);
            yield "</dd>
</dl>
";
        }
        // line 48
        yield "
";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "message", [], "any", true, true, false, 49) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "message", [], "any", false, false, false, 49)))) {
            // line 50
            yield "<div class=\"small\">
    <hr />
    <strong>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.content.heading"), "html", null, true);
            yield "</strong>
    <br />
    ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), "html", null, true);
            yield "
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
        return "@MauticSms/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  179 => 54,  174 => 52,  170 => 50,  168 => 49,  165 => 48,  159 => 45,  155 => 44,  152 => 43,  146 => 41,  140 => 39,  138 => 38,  133 => 36,  130 => 35,  124 => 32,  121 => 31,  119 => 30,  116 => 29,  112 => 27,  106 => 25,  103 => 24,  98 => 21,  92 => 19,  86 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSms/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/SmsBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
