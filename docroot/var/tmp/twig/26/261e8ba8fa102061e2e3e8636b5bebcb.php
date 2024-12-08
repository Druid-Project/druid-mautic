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

/* @MauticLead/Lead/_filter.html.twig */
class __TwigTemplate_007133e8e41e8b0e65381760f58b060d extends Template
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
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    ";
            $context["toolbarButtons"] = [["attr" => ["class" => "hidden-xs btn btn-ghost btn-icon btn-sm btn-nospin", "href" => "javascript: void(0)", "onclick" => "Mautic.toggleLiveLeadListUpdate();", "id" => "liveModeButton", "data-toggle" => false, "data-max-id" =>             // line 10
(isset($context["maxLeadId"]) || array_key_exists("maxLeadId", $context) ? $context["maxLeadId"] : (function () { throw new RuntimeError('Variable "maxLeadId" does not exist.', 10, $this->source); })())], "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.live_update"), "iconClass" => "ri-refresh-line"]];
            // line 16
            yield "    ";
            if (("list" == (isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new RuntimeError('Variable "indexMode" does not exist.', 16, $this->source); })()))) {
                // line 17
                yield "        ";
                $context["toolbarButtons"] = Twig\Extension\CoreExtension::merge((isset($context["toolbarButtons"]) || array_key_exists("toolbarButtons", $context) ? $context["toolbarButtons"] : (function () { throw new RuntimeError('Variable "toolbarButtons" does not exist.', 17, $this->source); })()), [["attr" => ["class" => ("hidden-xs btn btn-ghost btn-icon btn-sm btn-nospin" . ((                // line 19
(isset($context["anonymousShowing"]) || array_key_exists("anonymousShowing", $context) ? $context["anonymousShowing"] : (function () { throw new RuntimeError('Variable "anonymousShowing" does not exist.', 19, $this->source); })())) ? (" btn-primary") : (""))), "href" => "javascript: void(0)", "onclick" => "Mautic.toggleAnonymousLeads();", "id" => "anonymousLeadButton", "data-anonymous" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.searchcommand.isanonymous")], "tooltip" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.anonymous_leads"), "iconClass" => "ri-spy-line"]]);
                // line 28
                yield "    ";
            }
            // line 29
            yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
            // line 30
            $context["pageButtons"] = [];
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 31)) {
                // line 32
                yield "    ";
                $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 32, $this->source); })()), [["attr" => ["class" => "btn btn-ghost btn-nospin quickadd", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "quickAdd"]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.menu.quickadd")], "iconClass" => "ri-flashlight-line", "btnText" => "mautic.lead.lead.menu.quickadd", "primary" => true]]);
                // line 44
                yield "
    ";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 45, $this->source); })()), "lead:imports:create", [], "array", false, false, false, 45)) {
                    // line 46
                    yield "        ";
                    $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 46, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "contacts", "objectAction" => "new"])], "iconClass" => "ri-import-line", "btnText" => "mautic.lead.lead.import"]]);
                    // line 53
                    yield "    ";
                }
                // line 54
                yield "
    ";
                // line 55
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 55, $this->source); })()), "lead:imports:view", [], "array", false, false, false, 55)) {
                    // line 56
                    yield "        ";
                    $context["pageButtons"] = Twig\Extension\CoreExtension::merge((isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 56, $this->source); })()), [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_index", ["object" => "contacts"])], "iconClass" => "ri-history-line", "btnText" => "mautic.lead.lead.import.index"]]);
                    // line 63
                    yield "    ";
                }
            }
            // line 66
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" => ((            // line 67
array_key_exists("searchValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 67, $this->source); })()), "")) : ("")), "action" =>             // line 68
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 68, $this->source); })()), "customButtons" =>             // line 69
(isset($context["toolbarButtons"]) || array_key_exists("toolbarButtons", $context) ? $context["toolbarButtons"] : (function () { throw new RuntimeError('Variable "toolbarButtons" does not exist.', 69, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,             // line 71
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "lead:leads:create", [], "array", false, false, false, 71)], "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>             // line 74
(isset($context["pageButtons"]) || array_key_exists("pageButtons", $context) ? $context["pageButtons"] : (function () { throw new RuntimeError('Variable "pageButtons" does not exist.', 74, $this->source); })())]), "quickFilters" => [["search" => "mautic.core.searchcommand.ismine", "label" => "mautic.core.searchcommand.ismine.label", "tooltip" => "mautic.core.searchcommand.ismine.description", "icon" => "ri-user-line"], ["search" => "mautic.lead.lead.searchcommand.isunowned", "label" => "mautic.lead.lead.searchcommand.isunowned.label", "tooltip" => "mautic.lead.lead.searchcommand.isunowned.description", "icon" => "ri-user-unfollow-line"]]]);
            // line 92
            yield "<div class=\"btn-group ml-5 sr-only \">
    <span data-toggle=\"tooltip\" title=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tooltip.list"), "html", null, true);
            yield "\" data-placement=\"left\">
      <a id=\"table-view\" href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 94, $this->source); })()), "view" => "list"]), "html", null, true);
            yield "\" data-toggle=\"ajax\" class=\"btn btn-ghost\">
          <i class=\"ri-table-line\"></i>
      </a>
    </span>
    <span data-toggle=\"tooltip\" title=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tooltip.grid"), "html", null, true);
            yield "\" data-placement=\"left\">
      <a id=\"card-view\" href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()), "view" => "grid"]), "html", null, true);
            yield "\" data-toggle=\"ajax\" class=\"btn btn-ghost\">
        <i class=\"ri-layout-grid-line\"></i>
      </a>
    </span>
</div>
        <div class=\"page-list\">
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_filter.html.twig";
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
        return array (  115 => 99,  111 => 98,  104 => 94,  100 => 93,  97 => 92,  95 => 74,  94 => 71,  93 => 69,  92 => 68,  91 => 67,  90 => 66,  86 => 63,  83 => 56,  81 => 55,  78 => 54,  75 => 53,  72 => 46,  70 => 45,  67 => 44,  64 => 32,  62 => 31,  60 => 30,  58 => 29,  55 => 28,  53 => 19,  51 => 17,  48 => 16,  46 => 10,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_filter.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_filter.html.twig");
    }
}
