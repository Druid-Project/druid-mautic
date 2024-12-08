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

/* @MauticLead/Note/note.html.twig */
class __TwigTemplate_95b958644eef7b32d244111e56595c05 extends Template
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
        // line 7
        $context["icon"] = "ri-sticky-note-2-line";
        // line 8
        if (("email" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8))) {
            // line 9
            $context["icon"] = "ri-mail-line";
        } elseif (("call" == CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10))) {
            // line 11
            $context["icon"] = "ri-phone-line";
        } elseif (("meeting" == CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12))) {
            // line 13
            $context["icon"] = "ri-video-chat-line";
        }
        // line 15
        yield "<li class=\"note-single mb-lg\" id=\"LeadNote";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
    <div class=\"note-body d-flex np mb-md\">
        <div class=\"height-auto icon text-right\">
            <div class=\"icon-wrapper d-flex ai-center jc-center\"><i class=\"ri-lg fs-22 ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\"></i></div>
        </div>
        <div class=\"tile media-body pa-lg\">

            <div class=\"d-flex jc-space-between ai-center mb-md fw-wrap fw-nowrap-lg\">
                <span class=\"fw-b ellipsis\"><i class=\"ri-user-6-line mr-xs\"></i>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 23, $this->source); })()), "createdByUser", [], "any", false, false, false, 23), "html", null, true);
        yield "</span>
                <div class=\"d-flex fg-1 ai-center jc-space-between jc-end-lg gap-sm\">
                    <span class=\"small text-muted\">";
        // line 25
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 25, $this->source); })()), "dateTime", [], "any", false, false, false, 25));
        yield "</span>
                    <div class=\"pull-right btn-group\">
                        ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 27, $this->source); })()), "edit", [], "array", false, false, false, 27)) {
            // line 28
            yield "                        ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Note/note.html.twig", 28)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.lead.note.header.edit", "variant" => "ghost", "icon_only" => true, "icon" => "ri-edit-line", "size" => "xs", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contactnote_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,             // line 36
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "attributes" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal"]]]]));
            // line 44
            yield "                        ";
        }
        // line 45
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 45, $this->source); })()), "delete", [], "array", false, false, false, 45)) {
            // line 46
            yield "                        ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Note/note.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.lead.note.confirmdelete", "variant" => "ghost", "icon_only" => true, "danger" => "true", "icon" => "ri-delete-bin-line", "size" => "xs", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_action", ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 55
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "attributes" => ["data-toggle" => "confirmation", "data-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.confirmdelete"), "data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"), "data-confirm-callback" => "executeAction", "data-cancel-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel")]]]]));
            // line 66
            yield "                        ";
        }
        // line 67
        yield "                    </div>
                </div>
            </div>
            <div class=\"fs-18\">";
        // line 70
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 70, $this->source); })()), "text", [], "any", false, false, false, 70));
        yield "</div>
        </div>
    </div>
</li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Note/note.html.twig";
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
        return array (  106 => 70,  101 => 67,  98 => 66,  96 => 55,  94 => 46,  91 => 45,  88 => 44,  86 => 36,  84 => 28,  82 => 27,  77 => 25,  72 => 23,  64 => 18,  57 => 15,  54 => 13,  52 => 12,  50 => 11,  48 => 10,  46 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Note/note.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Note/note.html.twig");
    }
}
