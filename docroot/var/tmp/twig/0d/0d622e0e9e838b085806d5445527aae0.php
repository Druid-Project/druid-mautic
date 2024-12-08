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

/* @MauticChannel/Message/list_item.html.twig */
class __TwigTemplate_4e64254086d98fdc7fda969f5ed28fb7 extends Template
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
        [$context["messageChannels"], $context["channels"]] =         [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 1, $this->source); })()), "getChannels", [], "method", false, false, false, 1), []];
        // line 2
        if ((isset($context["messageChannels"]) || array_key_exists("messageChannels", $context) ? $context["messageChannels"] : (function () { throw new RuntimeError('Variable "messageChannels" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messageChannels"]) || array_key_exists("messageChannels", $context) ? $context["messageChannels"] : (function () { throw new RuntimeError('Variable "messageChannels" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["channelName"] => $context["channel"]) {
                // line 4
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["channel"], "isEnabled", [], "method", false, false, false, 4)) {
                    // line 5
                    yield "            ";
                    $context["channels"] = Twig\Extension\CoreExtension::merge((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 5, $this->source); })()), [(($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(("mautic.channel." . $context["channelName"]))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.channel." . $context["channelName"]))) : (Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["channelName"])))]);
                    // line 6
                    yield "        ";
                }
                // line 7
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['channelName'], $context['channel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 9
        yield "<td class=\"visible-md visible-lg\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 11
            yield "    <span size=\"sm\" class=\"label label-gray\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['channel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "</td>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticChannel/Message/list_item.html.twig";
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
        return array (  83 => 13,  74 => 11,  70 => 10,  67 => 9,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticChannel/Message/list_item.html.twig", "/app/docroot/app/bundles/ChannelBundle/Resources/views/Message/list_item.html.twig");
    }
}
