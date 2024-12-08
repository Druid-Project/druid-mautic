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

/* @MauticLead/Lead/lead.html.twig */
class __TwigTemplate_19c614ebc07ab3ebbc74bd73f3fbe8a7 extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $context["isAnonymous"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 10, $this->source); })()), "isAnonymous", [], "any", false, false, false, 10);
        // line 11
        $context["leadName"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "isAnonymous", [], "any", false, false, false, 11)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 11)));
        // line 12
        $context["avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 13
            yield "  ";
            if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 13, $this->source); })())) {
                // line 14
                yield "    <span class=\"pull-left img-wrapper img-rounded mr-10\" style=\"width:33px\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })())), "html", null, true);
                yield "\" alt=\"\" /></span>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        $context["flag"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 18), "country", [], "any", true, true, false, 18) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "core", [], "any", false, false, false, 18), "country", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "core", [], "any", false, false, false, 18), "country", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18))) : (""));
        // line 19
        $context["groups"] = Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 19, $this->source); })()));
        // line 6
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Lead/lead.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "lead";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "<div class=\"pull-left mt-5\"><span class=\"span-block\">";
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 22, $this->source); })()));
        yield "</span><span class=\"span-block small ml-sm\">
    ";
        // line 23
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()), "secondaryIdentifier", [], "any", false, false, false, 23));
        yield "</span></div>
";
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 29
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 29, $this->source); })()), "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" => [], "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 35, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 36, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 37, $this->source); })()), "permissionUser", [], "any", false, false, false, 37))], "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads")]);
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "    ";
        $context["canEdit"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "lead:leads:editown", [], "array", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 46, $this->source); })()), "lead:leads:editother", [], "array", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 46, $this->source); })()), "permissionUser", [], "any", false, false, false, 46));
        // line 47
        yield "    ";
        $context["buttons"] = [];
        // line 48
        yield "
    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 49), "email", [], "any", true, true, false, 49)) {
            // line 50
            yield "        ";
            $context["emailAdress"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 50, $this->source); })()), "core", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50);
            // line 51
            yield "        ";
            $context["sendButton"] = ["attr" => ["id" => "sendEmailButton", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email.header", ["%email%" =>             // line 56
(isset($context["emailAdress"]) || array_key_exists("emailAdress", $context) ? $context["emailAdress"] : (function () { throw new RuntimeError('Variable "emailAdress" does not exist.', 56, $this->source); })())]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "objectAction" => "email"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.email.send_email"), "iconClass" => "ri-mail-send-line", "primary" => true];
            // line 63
            yield "        ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["emailAdress"]) || array_key_exists("emailAdress", $context) ? $context["emailAdress"] : (function () { throw new RuntimeError('Variable "emailAdress" does not exist.', 63, $this->source); })()))) {
                // line 64
                yield "            ";
                $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 64, $this->source); })()), ["tooltip" => "mautic.lead.email.send_email.disabled"]);
                // line 65
                yield "            ";
                $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 65, $this->source); })()), ["attr" => ["disabled" => true]]);
                // line 66
                yield "        ";
            }
            // line 67
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 67, $this->source); })()), [(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 67, $this->source); })())]);
            // line 68
            yield "    ";
        }
        // line 69
        yield "
    ";
        // line 70
        if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 70, $this->source); })())) {
            // line 71
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 71, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.contact.frequency", ["%name%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 75
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 75, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 75))]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 76
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "objectAction" => "contactFrequency"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.contact.frequency"), "iconClass" => "ri-settings-5-line"]]);
            // line 81
            yield "
        ";
            // line 82
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["pointGroups"]) || array_key_exists("pointGroups", $context) ? $context["pointGroups"] : (function () { throw new RuntimeError('Variable "pointGroups" does not exist.', 82, $this->source); })()))) {
                // line 83
                yield "            ";
                $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 83, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 88
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88), "objectAction" => "contactGroupPoints"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "iconClass" => "ri-coins-line"]]);
                // line 93
                yield "        ";
            }
            // line 94
            yield "    ";
        }
        // line 95
        yield "
    ";
        // line 96
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("campaign:campaigns:edit")) {
            // line 97
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 97, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.campaigns", ["%name%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 101, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 101))]), "data-footer" => "false", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 103
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103), "objectAction" => "campaign"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns"), "iconClass" => "ri-megaphone-line"]]);
            // line 108
            yield "    ";
        }
        // line 109
        yield "
    ";
        // line 110
        if (($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 110), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 110, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 110), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 110, $this->source); })()), "permissionUser", [], "any", false, false, false, 110)) && (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 110, $this->source); })()))) {
            // line 111
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 111, $this->source); })()), [["attr" => ["data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.merge", ["%name%" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 115
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 115, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 115))]), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 116
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116), "objectAction" => "merge"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.merge"), "iconClass" => "ri-exchange-2-line"]]);
            // line 121
            yield "    ";
        }
        // line 122
        yield "
    ";
        // line 123
        if (($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 123, $this->source); })()), "lead:leads:viewown", [], "array", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 123, $this->source); })()), "lead:leads:viewother", [], "array", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 123, $this->source); })()), "permissionUser", [], "any", false, false, false, 123)) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 123, $this->source); })())))) {
            // line 124
            yield "        ";
            $context["buttons"] = Twig\Extension\CoreExtension::merge((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 124, $this->source); })()), [["attr" => ["data-toggle" => "download", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_export_action", ["contactId" => CoreExtension::getAttribute($this->env, $this->source,             // line 127
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.export"), "iconClass" => "ri-export-line"]]);
            // line 132
            yield "    ";
        }
        // line 133
        yield "
    ";
        // line 134
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 135
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 135, $this->source); })()), "routeBase" => "contact", "langVar" => "lead.lead", "customButtons" =>         // line 138
(isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 138, $this->source); })()), "templateButtons" => ["edit" =>         // line 140
(isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 140, $this->source); })()), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 142
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 142, $this->source); })()), "lead:leads:deleteown", [], "array", false, false, false, 142), CoreExtension::getAttribute($this->env, $this->source,         // line 143
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 143, $this->source); })()), "lead:leads:deleteother", [], "array", false, false, false, 143), CoreExtension::getAttribute($this->env, $this->source,         // line 144
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 144, $this->source); })()), "permissionUser", [], "any", false, false, false, 144))]]);
        // line 147
        yield "
";
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!--/ lead detail header -->

            <!-- lead detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"lead-details\">
                <ul class=\"pt-md nav nav-tabs nav-tabs-contained\" role=\"tablist\">
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 161, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 162
            yield "                        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 162, $this->source); })()), $context["g"], [], "array", false, false, false, 162))) {
                // line 163
                yield "                            <li class=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 163)) {
                    yield "active";
                }
                yield "\">
                                <a href=\"#";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"group\" data-toggle=\"tab\">
                                    ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "
                                </a>
                            </li>
                        ";
            }
            // line 169
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                        <li>
                            <a href=\"#devices\" class=\"group\" data-toggle=\"tab\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.devices"), "html", null, true);
        yield "</a>
                        </li>
                    <li>
                        <a href=\"#lead-stats\" class=\"group\" data-toggle=\"tab\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats"), "html", null, true);
        yield "</a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 180, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 181
            yield "                        <div class=\"tab-pane fade ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 181)) {
                yield "in active";
            }
            yield " bdr-w-0\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
                            <div class=\"pr-md pl-md pb-md\">
                                <div class=\"panel shd-none mb-0\">
                                    <table class=\"table table-hover mb-0\">
                                        <tbody>
                                        ";
            // line 186
            if (("core" == $context["group"])) {
                // line 187
                yield "                                          ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 187, $this->source); })())]);
                yield "
                                        ";
            }
            // line 189
            yield "                                        ";
            $context["no_result"] = true;
            // line 190
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 190, $this->source); })()), $context["group"], [], "array", false, false, false, 190));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 191
                yield "                                            ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 191))) {
                    // line 192
                    yield "                                                ";
                    $context["no_result"] = false;
                    // line 193
                    yield "                                                <tr>
                                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
                    // line 194
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 194));
                    yield "</span></td>
                                                    <td>
                                                        ";
                    // line 196
                    if (((("core" == $context["group"]) && ("country" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 196))) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 196, $this->source); })())))) {
                        // line 197
                        yield "                                                            <img class=\"mr-sm\" src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 197, $this->source); })()), "html", null, true);
                        yield "\" alt=\"\" style=\"max-height: 24px;\"/>
                                                            <span class=\"mt-1\">";
                        // line 198
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 198));
                        yield "</span>
                                                        ";
                    } else {
                        // line 200
                        yield "                                                            ";
                        if (("multiselect" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 200))) {
                            // line 201
                            yield "                                                                ";
                            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 201))) {
                                // line 202
                                yield "                                                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 202), ", "), "html", null, true);
                                yield "
                                                                ";
                            } else {
                                // line 204
                                yield "                                                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 204)), ["|" => ", "]), "html", null, true);
                                yield "
                                                                ";
                            }
                            // line 206
                            yield "                                                            ";
                        } elseif (("url" == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 206))) {
                            // line 207
                            yield "                                                                <a href=\"";
                            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 207));
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 207), "html", null, true);
                            yield "</a>
                                                            ";
                        } elseif (("html" == CoreExtension::getAttribute($this->env, $this->source,                         // line 208
$context["field"], "type", [], "any", false, false, false, 208))) {
                            // line 209
                            yield "                                                                <div style=\"resize: vertical; overflow: auto\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 209));
                            yield "</div>
                                                            ";
                        } elseif (("datetime" == CoreExtension::getAttribute($this->env, $this->source,                         // line 210
$context["field"], "type", [], "any", false, false, false, 210))) {
                            // line 211
                            yield "                                                                ";
                            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "value", [], "any", false, false, false, 211), "UTC");
                            yield "
                                                            ";
                        } else {
                            // line 213
                            yield "                                                                ";
                            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "normalizedValue", [], "any", false, false, false, 213));
                            yield "
                                                            ";
                        }
                        // line 215
                        yield "                                                        ";
                    }
                    // line 216
                    yield "                                                    </td>
                                                </tr>
                                            ";
                }
                // line 219
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            yield "
                                        ";
            // line 221
            if ((isset($context["no_result"]) || array_key_exists("no_result", $context) ? $context["no_result"] : (function () { throw new RuntimeError('Variable "no_result" does not exist.', 221, $this->source); })())) {
                // line 222
                yield "                                            <tr><td colspan=\"2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.group.no_data"), "html", null, true);
                yield "</td></tr>
                                        ";
            }
            // line 224
            yield "
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "                        <div class=\"tab-pane fade bdr-w-0\" id=\"devices\">
                            ";
        // line 232
        if ((isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 232, $this->source); })())) {
            // line 233
            yield "                                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_devices.html.twig", ["devices" => (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 233, $this->source); })())]);
            yield "
                            ";
        } else {
            // line 235
            yield "                                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.contact.noinformation.devices"]);
            yield "
                            ";
        }
        // line 237
        yield "                        </div>
                    <div class=\"tab-pane fade bdr-w-0\" id=\"lead-stats\" data-target-url=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 238, $this->source); })()), "id", [], "any", false, false, false, 238)]), "html", null, true);
        yield "\">
                        <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
                    </div>
                </div>
            </div>
            <!--/ lead detail collapseable -->
        </div>

        <div>
            <!-- lead detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#lead-details\">
                       <span class=\"caret\"></span>
                       ";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!--/ lead detail collapseable toggler -->

            ";
        // line 258
        if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 258, $this->source); })())) {
            // line 259
            yield "                <div class=\"pa-md\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"panel\">
                                <div class=\"panel-body box-layout\">
                                    <div class=\"col-xs-8 va-m\">
                                        <h5 class=\"text-white dark-md fw-sb mb-xs\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.engagements"), "html", null, true);
            yield "</h5>
                                    </div>
                                    <div class=\"col-xs-4 va-t text-right\">
                                        <h3 class=\"text-white dark-sm\"><span class=\"ri-eye-line\"></span></h3>
                                    </div>
                                </div>
                                ";
            // line 271
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["engagementData"]) || array_key_exists("engagementData", $context) ? $context["engagementData"] : (function () { throw new RuntimeError('Variable "engagementData" does not exist.', 271, $this->source); })()), "chartType" => "line", "chartHeight" => 250]);
            yield "
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 277
        yield "        </div>

        <div class=\"pa-md\">
            <!-- tabs controls -->
            <ul class=\"nav nav-tabs nav-tabs-contained mt-10\">
                <li class=\"active\">
                    <a href=\"#timeline-container\" role=\"tab\" data-toggle=\"tab\">
                        <span size=\"sm\" class=\"label label-primary mr-sm\" id=\"TimelineCount\">
                            ";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 285, $this->source); })()), "total", [], "any", false, false, false, 285), "html", null, true);
        yield "
                        </span>
                        ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.history"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#notes-container\" role=\"tab\" data-toggle=\"tab\">
                        <span size=\"sm\" class=\"label label-primary mr-sm\" id=\"NoteCount\">
                            ";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["noteCount"]) || array_key_exists("noteCount", $context) ? $context["noteCount"] : (function () { throw new RuntimeError('Variable "noteCount" does not exist.', 293, $this->source); })()), "html", null, true);
        yield "
                        </span>
                        ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.notes"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 298
        if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 298, $this->source); })())) {
            // line 299
            yield "                    <li class=\"\">
                        <a href=\"#social-container\" role=\"tab\" data-toggle=\"tab\">
                        <span size=\"sm\" class=\"label label-primary mr-sm\" id=\"SocialCount\">
                            ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 302, $this->source); })())), "html", null, true);
            yield "
                        </span>
                            ";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.social"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 308
        yield "                <li class=\"\">
                    <a href=\"#integration-container\" role=\"tab\" data-toggle=\"tab\">
                    <span size=\"sm\" class=\"label label-primary mr-sm\" id=\"IntegrationCount\">
                        ";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 311, $this->source); })())), "html", null, true);
        yield "
                    </span>
                        ";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.integration"), "html", null, true);
        yield "
                    </a>
                </li>
                <li class=\"\">
                    <a href=\"#auditlog-container\" role=\"tab\" data-toggle=\"tab\">
                    <span size=\"sm\" class=\"label label-primary mr-sm\" id=\"AuditLogCount\">
                        ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 319, $this->source); })()), "total", [], "any", false, false, false, 319), "html", null, true);
        yield "
                    </span>
                        ";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.auditlog"), "html", null, true);
        yield "
                    </a>
                </li>
                    <li class=\"\">
                        <a href=\"#place-container\" role=\"tab\" data-toggle=\"tab\" id=\"load-lead-map\">
                        <span size=\"sm\" class=\"label label-primary mr-sm\" id=\"PlaceCount\">
                            ";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 327, $this->source); })())), "html", null, true);
        yield "
                        </span>
                            ";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.tab.places"), "html", null, true);
        yield "
                        </a>
                    </li>
                ";
        // line 332
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs", $context);
        yield "
            </ul>
            <!--/ tabs controls -->

            <!-- start: tab-content -->
            <div class=\"tab-content pa-md\">
                <!-- #history-container -->
                <div class=\"tab-pane fade in active bdr-w-0\" id=\"timeline-container\">
                    ";
        // line 340
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Timeline/list.html.twig", ["events" => (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 340, $this->source); })()), "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 340, $this->source); })())]);
        yield "
                </div>
                <!--/ #history-container -->

                <!-- #notes-container -->
                <div class=\"tab-pane fade bdr-w-0\" id=\"notes-container\">
                    ";
        // line 346
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Mautic\\LeadBundle\\Controller\\NoteController::indexAction", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 346, $this->source); })()), "id", [], "any", false, false, false, 346), "ignoreAjax" => 1]));
        yield "
                </div>
                <!--/ #notes-container -->

                <!-- #social-container -->
                ";
        // line 351
        if ( !(isset($context["isAnonymous"]) || array_key_exists("isAnonymous", $context) ? $context["isAnonymous"] : (function () { throw new RuntimeError('Variable "isAnonymous" does not exist.', 351, $this->source); })())) {
            // line 352
            yield "                    <div class=\"tab-pane fade bdr-w-0\" id=\"social-container\">
                        ";
            // line 353
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Social/index.html.twig", ["lead" =>             // line 354
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 354, $this->source); })()), "socialProfiles" =>             // line 355
(isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 355, $this->source); })()), "socialProfileUrls" =>             // line 356
(isset($context["socialProfileUrls"]) || array_key_exists("socialProfileUrls", $context) ? $context["socialProfileUrls"] : (function () { throw new RuntimeError('Variable "socialProfileUrls" does not exist.', 356, $this->source); })())]);
            // line 357
            yield "
                    </div>
                ";
        }
        // line 360
        yield "                <!--/ #social-container -->

                <!-- #integration-container -->
                <div class=\"tab-pane fade bdr-w-0\" id=\"integration-container\">
                    ";
        // line 364
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Integration/index.html.twig", ["lead" =>         // line 365
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 365, $this->source); })()), "integrations" =>         // line 366
(isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 366, $this->source); })())]);
        // line 367
        yield "
                </div>
                <!--/ #integration-container -->

                <!-- #auditlog-container -->
                <div class=\"tab-pane fade bdr-w-0\" id=\"auditlog-container\">
                    ";
        // line 373
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Auditlog/_list.html.twig", ["lead" =>         // line 374
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 374, $this->source); })()), "events" =>         // line 375
(isset($context["auditlog"]) || array_key_exists("auditlog", $context) ? $context["auditlog"] : (function () { throw new RuntimeError('Variable "auditlog" does not exist.', 375, $this->source); })())]);
        // line 376
        yield "
                </div>
                <!--/ #auditlog-container -->

                <!-- custom content -->
                ";
        // line 381
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.content", $context);
        yield "
                <!-- end: custom content -->

                <!-- #place-container -->
                    <div class=\"tab-pane fade bdr-w-0\" id=\"place-container\">
                        ";
        // line 386
        if (( !(isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 386, $this->source); })()) &&  !$this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("ip_lookup_auth"))) {
            // line 387
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.contact.noinformation.places"]);
            // line 389
            yield "
                        ";
        }
        // line 391
        yield "                        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_map.html.twig", ["places" => (isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 391, $this->source); })())]);
        yield "
                    </div>
                <!--/ #place-container -->
            </div>
            <!--/ end: tab-content -->
        </div>

    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- form HTML -->
        <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
            ";
        // line 405
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 405, $this->source); })()), "isAnonymous", [], "any", false, false, false, 405)) {
            // line 406
            yield "                <div class=\"lead-avatar-panel\">
                    <div class=\"avatar-collapser hr-expand nm\">
                        <a href=\"javascript:void(0)\"
                            class=\"arrow text-muted text-center ";
            // line 409
            if (("expanded" != (isset($context["avatarPanelState"]) || array_key_exists("avatarPanelState", $context) ? $context["avatarPanelState"] : (function () { throw new RuntimeError('Variable "avatarPanelState" does not exist.', 409, $this->source); })()))) {
                yield "collapsed";
            }
            yield "\"
                            data-toggle=\"collapse\"
                            data-target=\"#lead-avatar-block\">
                            <span class=\"caret\"></span>
                        </a>
                    </div>
                    <div class=\"collapse ";
            // line 415
            if (("expanded" == (isset($context["avatarPanelState"]) || array_key_exists("avatarPanelState", $context) ? $context["avatarPanelState"] : (function () { throw new RuntimeError('Variable "avatarPanelState" does not exist.', 415, $this->source); })()))) {
                yield "in";
            }
            yield "\" id=\"lead-avatar-block\">
                        <img class=\"img-responsive\" src=\"";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 416, $this->source); })())), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadName"]) || array_key_exists("leadName", $context) ? $context["leadName"] : (function () { throw new RuntimeError('Variable "leadName" does not exist.', 416, $this->source); })()));
            yield "\"/>
                    </div>
                </div>
            ";
        }
        // line 420
        yield "            <div class=\"mt-sm points-panel text-center\">
                <h1 style=\"";
        // line 421
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 421, $this->source); })()), "color", [], "any", false, false, false, 421))) {
            yield "font-color:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 421, $this->source); })()), "color", [], "any", false, false, false, 421), "html", null, true);
            yield " !important;";
        }
        yield "\">
                    ";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.points.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 422, $this->source); })()), "points", [], "any", false, false, false, 422)]), "html", null, true);
        yield "
                </h1>
                <hr/>
                ";
        // line 425
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 425, $this->source); })()), "stage", [], "any", false, false, false, 425)) {
            // line 426
            yield "                    ";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 426, $this->source); })()), "stage", [], "any", false, false, false, 426), "name", [], "any", false, false, false, 426));
            yield "<hr>
                ";
        }
        // line 428
        yield "            </div>

            ";
        // line 430
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 430, $this->source); })()), "groupScores", [], "any", false, false, false, 430))) {
            // line 431
            yield "                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        ";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.groups.panel.title"), "html", null, true);
            yield "
                    </div>
                </div>

                <div class=\"panel-body pt-sm group-points-panel\">
                    ";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 438, $this->source); })()), "groupScores", [], "any", false, false, false, 438));
            foreach ($context['_seq'] as $context["_key"] => $context["groupScore"]) {
                // line 439
                yield "                        <div class=\"row\">
                            <h6 class=\"fw-sb col-md-6\">
                                ";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupScore"], "group", [], "any", false, false, false, 441), "name", [], "any", false, false, false, 441), "html", null, true);
                yield "
                            </h6>
                            <p class=\"text-muted col-md-6\">
                                ";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.points.count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, $context["groupScore"], "score", [], "any", false, false, false, 444)]), "html", null, true);
                yield "
                            </p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['groupScore'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            yield "                </div>
            ";
        }
        // line 450
        yield "
            ";
        // line 451
        if ((isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 451, $this->source); })())) {
            // line 452
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_dnc_large.html.twig", ["doNotContact" => (isset($context["doNotContact"]) || array_key_exists("doNotContact", $context) ? $context["doNotContact"] : (function () { throw new RuntimeError('Variable "doNotContact" does not exist.', 452, $this->source); })())]);
            yield "
            ";
        }
        // line 454
        yield "            ";
        if ((isset($context["doNotContactSms"]) || array_key_exists("doNotContactSms", $context) ? $context["doNotContactSms"] : (function () { throw new RuntimeError('Variable "doNotContactSms" does not exist.', 454, $this->source); })())) {
            // line 455
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Lead/_dnc_large.html.twig", ["doNotContact" => (isset($context["doNotContactSms"]) || array_key_exists("doNotContactSms", $context) ? $context["doNotContactSms"] : (function () { throw new RuntimeError('Variable "doNotContactSms" does not exist.', 455, $this->source); })())]);
            yield "
            ";
        }
        // line 457
        yield "            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    ";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.contact"), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"panel-body pt-sm\">
            ";
        // line 463
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 463, $this->source); })()), "owner", [], "any", false, false, false, 463)) {
            // line 464
            yield "                <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.field.owner"), "html", null, true);
            yield "</h6>
                <p class=\"text-muted\">";
            // line 465
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 465, $this->source); })()), "owner", [], "any", false, false, false, 465), "name", [], "any", false, false, false, 465));
            yield "</p>
            ";
        }
        // line 467
        yield "
                <h6 class=\"fw-sb\">
                    ";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
        yield "
                </h6>
                <address class=\"text-muted\">
                    ";
        // line 472
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 472), "address1", [], "any", true, true, false, 472)) {
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 472, $this->source); })()), "core", [], "any", false, false, false, 472), "address1", [], "any", false, false, false, 472), "value", [], "any", false, false, false, 472));
            yield "<br>";
        }
        // line 473
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 473), "address2", [], "any", true, true, false, 473)) {
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 473, $this->source); })()), "core", [], "any", false, false, false, 473), "address2", [], "any", false, false, false, 473), "value", [], "any", false, false, false, 473));
            yield "<br>";
        }
        // line 474
        yield "                    ";
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 474, $this->source); })()), "location", [], "any", false, false, false, 474));
        yield "
                    ";
        // line 475
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 475), "zipcode", [], "any", true, true, false, 475)) {
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 475, $this->source); })()), "core", [], "any", false, false, false, 475), "zipcode", [], "any", false, false, false, 475), "value", [], "any", false, false, false, 475));
        }
        // line 476
        yield "                    <br>
                </address>

                <h6 class=\"fw-sb\">";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.type.email"), "html", null, true);
        yield "</h6>
                <p class=\"text-muted\">";
        // line 480
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 480, $this->source); })()), "core", [], "any", false, false, false, 480), "email", [], "any", false, false, false, 480), "value", [], "any", false, false, false, 480));
        yield "</p>

                ";
        // line 482
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 482), "phone", [], "any", true, true, false, 482)) {
            // line 483
            yield "                    <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type.tel.home"), "html", null, true);
            yield "</h6>
                    <p class=\"text-muted\">";
            // line 484
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 484, $this->source); })()), "core", [], "any", false, false, false, 484), "phone", [], "any", false, false, false, 484), "value", [], "any", false, false, false, 484));
            yield "</p>
                ";
        }
        // line 486
        yield "
                ";
        // line 487
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 487), "mobile", [], "any", true, true, false, 487)) {
            // line 488
            yield "                    <h6 class=\"fw-sb\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.type.tel.mobile"), "html", null, true);
            yield "</h6>
                    <p class=\"text-muted mb-0\">";
            // line 489
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 489, $this->source); })()), "core", [], "any", false, false, false, 489), "mobile", [], "any", false, false, false, 489), "value", [], "any", false, false, false, 489));
            yield "</p>
                ";
        }
        // line 491
        yield "            </div>
        </div>
        <!--/ form HTML -->

            <hr class=\"hr-w-2\" style=\"width:50%\">

            <div class=\"panel shd-none bdr-rds-0 bdr-w-0\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.upcoming.events"), "html", null, true);
        yield "</div>
                </div>
                ";
        // line 501
        if ( !(isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 501, $this->source); })())) {
            // line 502
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.contact.noinformation.upcoming"]);
            yield "
                ";
        }
        // line 504
        yield "                <div class=\"panel-body pt-sm\">
                    <ul class=\"media-list media-list-feed\">
                        ";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEvents"]) || array_key_exists("upcomingEvents", $context) ? $context["upcomingEvents"] : (function () { throw new RuntimeError('Variable "upcomingEvents" does not exist.', 506, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 507
            yield "                            ";
            $context["metadata"] = Mautic\CoreBundle\Helper\Serializer::decode(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "metadata", [], "any", false, false, false, 507));
            // line 508
            yield "                            ";
            $context["errors"] = false;
            // line 509
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["metadata"] ?? null), "errors", [], "any", true, true, false, 509) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 509, $this->source); })()), "errors", [], "any", false, false, false, 509)))) {
                // line 510
                yield "                                ";
                $context["errors"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 510, $this->source); })()), "errors", [], "any", false, false, false, 510))) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 510, $this->source); })()), "errors", [], "any", false, false, false, 510), "<br/>")) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 510, $this->source); })()), "errors", [], "any", false, false, false, 510)));
                // line 511
                yield "                            ";
            }
            // line 512
            yield "                            <li class=\"media\">
                                <div class=\"media-object pull-left mt-xs\">
                                    <span class=\"figure\"></span>
                                </div>
                                <div class=\"media-body\">
                                    ";
            // line 517
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.upcoming.event.triggered.at", ["%event%" => CoreExtension::getAttribute($this->env, $this->source,             // line 518
$context["event"], "event_name", [], "any", false, false, false, 518), "%link%" => (((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 519
$context["event"], "campaign_id", [], "any", false, false, false, 519)])) . "\" data-toggle=\"ajax\">") . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "campaign_name", [], "any", false, false, false, 519)) . "</a>")]));
            // line 520
            yield "
                                    ";
            // line 521
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 521, $this->source); })()))) {
                // line 522
                yield "                                      <i class=\"ri-alert-line text-danger\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 522, $this->source); })()));
                yield "\"></i>
                                    ";
            }
            // line 524
            yield "                                    <p class=\"fs-12 dark-sm timeline-campaign-event-date-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "event_id", [], "any", false, false, false, 524), "html", null, true);
            yield "\">
                                      ";
            // line 525
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "trigger_date", [], "any", false, false, false, 525), "utc");
            yield "
                                    </p>
                                </div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 530
        yield "                    </ul>
                </div>
            </div>

        <div class=\"pa-sm\">
            ";
        // line 535
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 535, $this->source); })()), "tags", [], "any", false, false, false, 535));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 536
            yield "                <div id=\"tagLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 536), "html", null, true);
            yield "\">
                    <h5 class=\"pull-left mt-xs mr-xs\">
                        <span class=\"label label-blue\">
                            <a href=\"";
            // line 539
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 539)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">
                                ";
            // line 540
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 540));
            yield "
                            </a>
                            <i class=\"ri-close-line\" onclick=\"Mautic.removeTagFromLead(this, ";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 542, $this->source); })()), "id", [], "any", false, false, false, 542), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 542), "html", null, true);
            yield ");\"></i>
                        </span>
                    </h5>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 547
        yield "            <div class=\"clearfix\"></div>
        </div>
        <div class=\"pa-sm panel-companies\">
            <div class=\"panel-title\">
                ";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.companies"), "html", null, true);
        yield "
            </div>
            ";
        // line 553
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 553, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["company"]) {
            // line 554
            yield "            <h5 class=\"pull-left mt-xs mr-xs\">
                <span class=\"label label-success\">
                    <i id=\"company-";
            // line 556
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 556), "html", null, true);
            yield "\" class=\"ri-check-line ";
            if ((1 == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "is_primary", [], "any", false, false, false, 556))) {
                yield "primary";
            }
            yield "\" onclick=\"Mautic.setAsPrimaryCompany(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 556), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 556, $this->source); })()), "id", [], "any", false, false, false, 556), "html", null, true);
            yield ");\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.company.set.primary"), "html", null, true);
            yield "\"></i>
                    <a href=\"";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 557)]), "html", null, true);
            yield "\" data-toggle=\"ajax\" style=\"color: white;\">
                        ";
            // line 558
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyname", [], "any", false, false, false, 558));
            yield "
                    </a>
                </span>
            </h5>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        yield "            <div class=\"clearfix\"></div>
        </div>
        ";
        // line 565
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lists"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 565, $this->source); })()), "id", [], "any", false, false, false, 565), [], "array", true, true, false, 565)) {
            // line 566
            yield "            <div class=\"pa-sm panel-segments\">
                <div class=\"panel-title\">
                    ";
            // line 568
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists"), "html", null, true);
            yield "
                </div>
                ";
            // line 570
            $context["classes"] = ["label-gray", "label-red", "label-magenta", "label-purple", "label-blue", "label-cyan", "label-teal", "label-green"];
            // line 571
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 571, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 571, $this->source); })()), "id", [], "any", false, false, false, 571), [], "array", false, false, false, 571));
            foreach ($context['_seq'] as $context["key"] => $context["list"]) {
                // line 572
                yield "                    <h5 class=\"mt-xs mr-xs\">
                        <span class=\"label ";
                // line 573
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 573, $this->source); })()), $context["key"]), "html", null, true);
                yield " has-click-event\">
                            <a href=\"";
                // line 574
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["list"], "id", [], "any", false, false, false, 574)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 575
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 575));
                yield "
                            </a>
                        </span>
                    </h5>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['list'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 580
            yield "            </div>
        ";
        }
        // line 582
        yield "
          <div class=\"clearfix\"></div>
        </div>
    </div>
    <!--/ right section -->
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/lead.html.twig";
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
        return array (  1224 => 582,  1220 => 580,  1209 => 575,  1205 => 574,  1201 => 573,  1198 => 572,  1193 => 571,  1191 => 570,  1186 => 568,  1182 => 566,  1180 => 565,  1176 => 563,  1165 => 558,  1161 => 557,  1147 => 556,  1143 => 554,  1139 => 553,  1134 => 551,  1128 => 547,  1115 => 542,  1110 => 540,  1106 => 539,  1099 => 536,  1095 => 535,  1088 => 530,  1077 => 525,  1072 => 524,  1066 => 522,  1064 => 521,  1061 => 520,  1059 => 519,  1058 => 518,  1057 => 517,  1050 => 512,  1047 => 511,  1044 => 510,  1041 => 509,  1038 => 508,  1035 => 507,  1031 => 506,  1027 => 504,  1021 => 502,  1019 => 501,  1014 => 499,  1004 => 491,  999 => 489,  994 => 488,  992 => 487,  989 => 486,  984 => 484,  979 => 483,  977 => 482,  972 => 480,  968 => 479,  963 => 476,  959 => 475,  954 => 474,  948 => 473,  943 => 472,  937 => 469,  933 => 467,  928 => 465,  923 => 464,  921 => 463,  914 => 459,  910 => 457,  904 => 455,  901 => 454,  895 => 452,  893 => 451,  890 => 450,  886 => 448,  876 => 444,  870 => 441,  866 => 439,  862 => 438,  854 => 433,  850 => 431,  848 => 430,  844 => 428,  838 => 426,  836 => 425,  830 => 422,  822 => 421,  819 => 420,  810 => 416,  804 => 415,  793 => 409,  788 => 406,  786 => 405,  768 => 391,  764 => 389,  761 => 387,  759 => 386,  751 => 381,  744 => 376,  742 => 375,  741 => 374,  740 => 373,  732 => 367,  730 => 366,  729 => 365,  728 => 364,  722 => 360,  717 => 357,  715 => 356,  714 => 355,  713 => 354,  712 => 353,  709 => 352,  707 => 351,  699 => 346,  690 => 340,  679 => 332,  673 => 329,  668 => 327,  659 => 321,  654 => 319,  645 => 313,  640 => 311,  635 => 308,  628 => 304,  623 => 302,  618 => 299,  616 => 298,  610 => 295,  605 => 293,  596 => 287,  591 => 285,  581 => 277,  572 => 271,  563 => 265,  555 => 259,  553 => 258,  544 => 252,  538 => 249,  524 => 238,  521 => 237,  515 => 235,  509 => 233,  507 => 232,  504 => 231,  484 => 224,  478 => 222,  476 => 221,  473 => 220,  467 => 219,  462 => 216,  459 => 215,  453 => 213,  447 => 211,  445 => 210,  440 => 209,  438 => 208,  431 => 207,  428 => 206,  422 => 204,  416 => 202,  413 => 201,  410 => 200,  405 => 198,  400 => 197,  398 => 196,  393 => 194,  390 => 193,  387 => 192,  384 => 191,  379 => 190,  376 => 189,  370 => 187,  368 => 186,  355 => 181,  338 => 180,  329 => 174,  323 => 171,  320 => 170,  306 => 169,  299 => 165,  295 => 164,  288 => 163,  285 => 162,  268 => 161,  256 => 151,  249 => 150,  243 => 147,  241 => 144,  240 => 143,  239 => 142,  238 => 140,  237 => 138,  236 => 135,  235 => 134,  232 => 133,  229 => 132,  227 => 127,  225 => 124,  223 => 123,  220 => 122,  217 => 121,  215 => 116,  214 => 115,  212 => 111,  210 => 110,  207 => 109,  204 => 108,  202 => 103,  201 => 101,  199 => 97,  197 => 96,  194 => 95,  191 => 94,  188 => 93,  186 => 88,  184 => 83,  182 => 82,  179 => 81,  177 => 76,  176 => 75,  174 => 71,  172 => 70,  169 => 69,  166 => 68,  163 => 67,  160 => 66,  157 => 65,  154 => 64,  151 => 63,  149 => 57,  148 => 56,  146 => 51,  143 => 50,  141 => 49,  138 => 48,  135 => 47,  132 => 46,  125 => 45,  120 => 37,  119 => 36,  118 => 35,  117 => 29,  116 => 27,  109 => 26,  102 => 23,  95 => 22,  88 => 21,  77 => 8,  72 => 6,  70 => 19,  68 => 18,  60 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  44 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/lead.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/lead.html.twig");
    }
}
