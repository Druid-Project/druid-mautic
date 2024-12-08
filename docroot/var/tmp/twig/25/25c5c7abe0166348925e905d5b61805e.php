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

/* @MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig */
class __TwigTemplate_5b51b7118a09a395a2759d2f19022376 extends Template
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
        $context["item"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1)) : (null));
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "    <table class=\"table table-hover table-sm table-condensed\">
        <thead>
            <tr>
                <th>";
            // line 6
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.channel", [], "messages");
            yield "</th>
                <th>";
            // line 7
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.attempts", [], "messages");
            yield "</th>
                <th>";
            // line 8
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.date.added", [], "messages");
            yield "</th>
                <th>";
            // line 9
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.rescheduled", [], "messages");
            yield "</th>
                <th>";
            // line 10
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.timeline.status", [], "messages");
            yield "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope=\"row\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelLabel(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "channelName", [], "any", false, false, false, 16)), "html", null, true);
            yield "</th>
                <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "attempts", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                <td>";
            // line 18
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "dateAdded", [], "any", false, false, false, 18))) {
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "dateAdded", [], "any", false, false, false, 18), "UTC");
            }
            yield "</td>
                <td>";
            // line 19
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "scheduledDate", [], "any", false, false, false, 19))) {
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "scheduledDate", [], "any", false, false, false, 19), "UTC");
            }
            yield "</td>
                <td id=\"queued-status-";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.message.queue.status." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21)), [], "javascript"), "html", null, true);
            yield "
                </td>
                <td>
                    ";
            // line 24
            if (("pending" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24))) {
                // line 25
                yield "                    <button type=\"button\" id=\"queued-message-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
                yield "\" class=\"btn btn-ghost btn-nospin\" onclick=\"Mautic.cancelQueuedMessageEvent(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
                yield ")\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.queued.message.event.cancel", [], "messages");
                yield "\">
                        <i class=\"ri-close-line text-danger\"></i>
                    </button>
                    ";
            }
            // line 29
            yield "                </td>
            </tr>
        </tbody>
    </table>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig";
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
        return array (  120 => 29,  108 => 25,  106 => 24,  100 => 21,  96 => 20,  90 => 19,  84 => 18,  80 => 17,  76 => 16,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig", "/app/docroot/app/bundles/ChannelBundle/Resources/views/SubscribedEvents/Timeline/queued_messages.html.twig");
    }
}
