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

/* @MauticCore/Notification/notification_messages.html.twig */
class __TwigTemplate_71d6f4f073ed99417c4353f149632d9b extends Template
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
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 1, $this->source); })()), "message", [], "any", false, false, false, 1))) {
            // line 2
            yield "<div class=\"pt-sm pb-sm pr-md pl-md nm bdr-b alert-mautic mautic-update\">
    <h4 class=\"pull-left\">";
            // line 3
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 3, $this->source); })()), "message", [], "any", false, false, false, 3));
            yield "</h4>
        ";
            // line 4
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Notification/notification_messages.html.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.update.now", "variant" => "primary", "icon" => "ri-refresh-line", "danger" => "true", "size" => "sm", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_update"), "attributes" => ["data-toggle" => "ajax", "class" => "mt-sm"], "wide" => true]]]));
            // line 21
            yield "    <div class=\"clearfix\"></div>
</div>
";
        }
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 24, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 25
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/notification.html.twig", ["n" => $context["n"]]);
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
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/notification_messages.html.twig";
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
        return array (  75 => 25,  58 => 24,  53 => 21,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/notification_messages.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/notification_messages.html.twig");
    }
}
