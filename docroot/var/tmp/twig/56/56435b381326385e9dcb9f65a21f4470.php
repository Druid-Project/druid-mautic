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

/* @MauticCore/Notification/notifications.html.twig */
class __TwigTemplate_921911ad775b1ca03f91283c718dc945 extends Template
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
        yield "<li class=\"dropdown dropdown-custom\" id=\"notificationsDropdown\">
    <a href=\"javascript: void(0);\" onclick=\"Mautic.showNotifications();\" class=\"dropdown-toggle dropdown-notification\" data-toggle=\"dropdown\">
        ";
        // line 3
        $context["hideClass"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 3, $this->source); })()), "isNew", [], "any", false, false, false, 3) || (isset($context["showNewIndicator"]) || array_key_exists("showNewIndicator", $context) ? $context["showNewIndicator"] : (function () { throw new RuntimeError('Variable "showNewIndicator" does not exist.', 3, $this->source); })()))) ? ("") : (" hide"));
        // line 4
        yield "        <span class=\"label label-danger";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hideClass"]) || array_key_exists("hideClass", $context) ? $context["hideClass"] : (function () { throw new RuntimeError('Variable "hideClass" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" id=\"newNotificationIndicator\"><i class=\"ri-asterisk\"></i></span>
        <span class=\"ri-notification-3-line ri-xl\"></span>
    </a>
    <div class=\"dropdown-menu\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading pt-sm\">
                <div class=\"panel-title notification notification-title\">
                    <h6 class=\"fw-sb d-flex jc-space-between ai-center\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.notifications"), "html", null, true);
        yield "
                        ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "                            ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Notification/notifications.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.notifications.clearall", "variant" => "ghost", "size" => "xs", "icon_only" => true, "icon" => "ri-delete-bin-2-line", "attributes" => ["class" => "pull-right"], "onclick" => "Mautic.clearNotification(0);"]]]));
            // line 28
            yield "                        ";
        }
        // line 29
        yield "                    </h6>
                </div>
            </div>
            <div class=\"pt-0 pb-xs pl-0 pr-0\">
                <div class=\"scroll-content slimscroll d-flex fd-column\" id=\"notifications\">
                    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/notification_messages.html.twig", ["notifications" =>         // line 35
(isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 35, $this->source); })()), "updateMessage" =>         // line 36
(isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 36, $this->source); })())]);
        // line 37
        yield "
                    ";
        // line 38
        $context["class"] = (( !Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 38, $this->source); })()))) ? (" hide") : (""));
        // line 39
        yield "                    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 39, $this->source); })()), "html", null, true);
        yield " mautibot-image pa-lg d-flex fd-column ai-center jc-center\" id=\"notificationMautibot\">
                        <div class=\"fs-30\">🦄</div>
                        <div class=\"text-muted fw-sb\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.notifications.empty"), "html", null, true);
        yield "</div>
                        <div class=\"text-muted\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.notifications.empty_extra"), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>
            ";
        // line 46
        $context["lastNotification"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 46, $this->source); })()));
        // line 47
        yield "            <input id=\"mauticLastNotificationId\" type=\"hidden\" value=\"";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["lastNotification"] ?? null), "id", [], "any", true, true, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastNotification"]) || array_key_exists("lastNotification", $context) ? $context["lastNotification"] : (function () { throw new RuntimeError('Variable "lastNotification" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47))) : (""));
        yield "\" />
        </div>
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Notification/notifications.html.twig";
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
        return array (  106 => 47,  104 => 46,  97 => 42,  93 => 41,  87 => 39,  85 => 38,  82 => 37,  80 => 36,  79 => 35,  78 => 34,  71 => 29,  68 => 28,  65 => 13,  63 => 12,  59 => 11,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Notification/notifications.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Notification/notifications.html.twig");
    }
}
