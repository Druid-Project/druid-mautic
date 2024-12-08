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

/* @MauticEmail/Email/details.html.twig */
class __TwigTemplate_26f5c2b508ad27dd0b6cd9fb38d44bba extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'indexButton' => [$this, 'block_indexButton'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((((isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), "@MauticEmail/Email/details.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        $context["variantContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 26
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 26, $this->source); })()), "variants" =>         // line 27
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 27, $this->source); })()), "abTestResults" =>         // line 28
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 28, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 33
        $context["showVariants"] = (array_key_exists("variantContent", $context) &&  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 33, $this->source); })()))));
        // line 35
        $context["translationContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 37
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 37, $this->source); })()), "translations" =>         // line 38
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 38, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 44
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 44, $this->source); })())));
        // line 45
        $context["emailType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 45, $this->source); })()), "emailType", [], "any", false, false, false, 45);
        // line 47
        if ( !array_key_exists("emailType", $context)) {
            // line 48
            $context["emailType"] = "template";
        }
        // line 50
        $context["customButtons"] = [];
        // line 52
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 52, $this->source); })())) {
            // line 53
            if (("list" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 53, $this->source); })()))) {
                // line 54
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 57
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 57)) ? ("javascript:void(0);") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "getId", [], "method", false, false, false, 57)])))], "iconClass" => "ri-send-plane-line", "btnText" => "mautic.email.send", "primary" => true];
                // line 63
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 63, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 63)) {
                    // line 64
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 64, $this->source); })()), ["tooltip" => "mautic.email.send.disabled"]);
                    // line 65
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 65, $this->source); })()), ["attr" => ["disabled" => true]]);
                }
                // line 68
                $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 68, $this->source); })()), [(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 68, $this->source); })())]);
            }
            // line 70
            $context["sendExampleButton"] = ["attr" => ["id" => "sendEmailButton", "class" => "btn btn-tertiary btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "sendExample", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 76
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 76, $this->source); })()), "getId", [], "method", false, false, false, 76)]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.example")], "iconClass" => "ri-mail-send-line", "btnText" => "mautic.email.send.example"];
            // line 82
            $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 82, $this->source); })()), [(isset($context["sendExampleButton"]) || array_key_exists("sendExampleButton", $context) ? $context["sendExampleButton"] : (function () { throw new RuntimeError('Variable "sendExampleButton" does not exist.', 82, $this->source); })())]);
            // line 83
            $context["heatmapButton"] = ["attr" => ["class" => "btn btn-tertiary btn-nospin", "data-toggle" => "email-heatmap", "data-email" => CoreExtension::getAttribute($this->env, $this->source,             // line 87
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 87, $this->source); })()), "getId", [], "method", false, false, false, 87), "data-target" => "#MauticSharedModal", "href" => "#", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.click_heatmap")], "iconClass" => "ri-fire-line", "btnText" => "mautic.email.heatmap.click_heatmap"];
            // line 95
            $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 95, $this->source); })()), [(isset($context["heatmapButton"]) || array_key_exists("heatmapButton", $context) ? $context["heatmapButton"] : (function () { throw new RuntimeError('Variable "heatmapButton" does not exist.', 95, $this->source); })())]);
        }
        // line 100
        $context["allowAbTest"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 100, $this->source); })()), "isTranslation", [true], "method", false, false, false, 100) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 100, $this->source); })()), "parent", [], "array", false, false, false, 100), "isVariant", [true], "method", false, false, false, 100))) ? (false) : (true));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "email";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 8, $this->source); })())) {
            // line 9
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>             // line 10
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "email:emails:viewown", [], "array", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "email:emails:viewother", [], "array", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 15, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 15))], "routeBase" => "email", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.emails"), "customButtons" => []]);
        }
        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 103
        yield "    ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 103, $this->source); })())) {
            // line 104
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>             // line 105
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 105, $this->source); })()), "status" => (( !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 106
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 106, $this->source); })()), "getPublishUp", [], "method", false, false, false, 106))) ? ("sending") : ("available"))]);
            // line 112
            $context["tags"] = [["color" => "warm-gray", "label" => (((            // line 115
(isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 115, $this->source); })()) == "list")) ? ("mautic.email.type.list.header") : ((((            // line 117
(isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 117, $this->source); })()) == "template")) ? ("mautic.email.type.template.header") : ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 117, $this->source); })())))))]];
            // line 120
            yield "
        ";
            // line 122
            yield "        ";
            $context["tags"] = Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 122, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source,             // line 123
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 123, $this->source); })()), "isVariant", [], "any", false, false, false, 123) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 123, $this->source); })()), "isVariant", [true], "method", false, false, false, 123))) ? ([["color" => "warm-gray", "label" => "mautic.email.icon_tooltip.abtest"]]) : ([]))), ((CoreExtension::getAttribute($this->env, $this->source,             // line 126
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 126, $this->source); })()), "isVariant", [true], "method", false, false, false, 126)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 127
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 127, $this->source); })()), "parent", [], "any", false, false, false, 127), "getName", [], "method", false, false, false, 127)]), "icon" => "ri-organization-chart"]]) : ([]))), (((CoreExtension::getAttribute($this->env, $this->source,             // line 129
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 129, $this->source); })()), "isTranslation", [], "any", false, false, false, 129) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 129, $this->source); })()), "isTranslation", [true], "method", false, false, false, 129))) ? ([["color" => "warm-gray", "label" => "mautic.core.icon_tooltip.translation"]]) : ([]))), ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 132, $this->source); })()), "isTranslation", [true], "method", false, false, false, 132)) ? ([["color" => "warm-gray", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 133
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 133, $this->source); })()), "parent", [], "any", false, false, false, 133), "name", [], "any", false, false, false, 133)]), "icon" => "ri-translate"]]) : ([])));
            // line 136
            yield "
        ";
            // line 137
            yield from             $this->loadTemplate("@MauticCore/Helper/_tag.html.twig", "@MauticEmail/Email/details.html.twig", 137)->unwrap()->yield(CoreExtension::merge($context, ["tags" => (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 137, $this->source); })())]));
            // line 138
            yield "
    ";
        }
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "    ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 143, $this->source); })())) {
            // line 144
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>             // line 145
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 145, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 148
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 148, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 148), CoreExtension::getAttribute($this->env, $this->source,             // line 149
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 149, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source,             // line 150
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 150, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 150)), "clone" => CoreExtension::getAttribute($this->env, $this->source,             // line 152
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 152, $this->source); })()), "email:emails:create", [], "array", false, false, false, 152), "abtest" => (            // line 153
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 153, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 153, $this->source); })()), "email:emails:create", [], "array", false, false, false, 153)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 155
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 155, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 155), CoreExtension::getAttribute($this->env, $this->source,             // line 156
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 156, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 156), CoreExtension::getAttribute($this->env, $this->source,             // line 157
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 157, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 157))], "routeBase" => "email", "customButtons" =>             // line 161
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 161, $this->source); })())]);
        }
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- email detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10\">
                          <div>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 176, $this->source); })()), "subject", [], "any", false, false, false, 176), "html", null, true);
        yield "</div>
                          <div class=\"text-muted\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailPreview"]) || array_key_exists("emailPreview", $context) ? $context["emailPreview"] : (function () { throw new RuntimeError('Variable "emailPreview" does not exist.', 177, $this->source); })()), "html", null, true);
        yield "</div>
                          ";
        // line 178
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 178, $this->source); })()), "isVariant", [true], "method", false, false, false, 178)) {
            // line 179
            yield "                            <div class=\"small\">
                              <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 180, $this->source); })()), "parent", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 181, $this->source); })()), "parent", [], "any", false, false, false, 181), "name", [], "any", false, false, false, 181)]), "html", null, true);
            // line 182
            yield "</a>
                            </div>
                          ";
        }
        // line 185
        yield "                          ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 185, $this->source); })()), "isTranslation", [true], "method", false, false, false, 185)) {
            // line 186
            yield "                            <div class=\"small\">
                              <a href=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 187, $this->source); })()), "parent", [], "any", false, false, false, 187), "id", [], "any", false, false, false, 187)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 188, $this->source); })()), "parent", [], "any", false, false, false, 188), "name", [], "any", false, false, false, 188)]), "html", null, true);
            // line 189
            yield "</a>
                            </div>
                          ";
        }
        // line 192
        yield "                      </div>
                  </div>
              </div>
              <!--/ email detail header -->

              <!-- email detail collapseable -->
              <div class=\"collapse pr-md pl-md\" id=\"email-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>";
        // line 203
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 203, $this->source); })())]);
        // line 204
        yield "<tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 208, $this->source); })()), "template", [], "any", false, false, false, 208), "html", null, true);
        yield "</td>
                              </tr>
                              ";
        // line 210
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 210, $this->source); })()), "fromName", [], "any", false, false, false, 210)) {
            // line 211
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_name"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 215, $this->source); })()), "fromName", [], "any", false, false, false, 215), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 218
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 218, $this->source); })()), "fromAddress", [], "any", false, false, false, 218)) {
            // line 219
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_email"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 223, $this->source); })()), "fromAddress", [], "any", false, false, false, 223), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 226
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 226, $this->source); })()), "replyToAddress", [], "any", false, false, false, 226)) {
            // line 227
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.reply_to_email"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 231, $this->source); })()), "replyToAddress", [], "any", false, false, false, 231), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 234
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 234, $this->source); })()), "bccAddress", [], "any", false, false, false, 234)) {
            // line 235
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.bcc"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 239, $this->source); })()), "bccAddress", [], "any", false, false, false, 239), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 242
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 242, $this->source); })()), "getPreheaderText", [], "method", false, false, false, 242)) {
            // line 243
            yield "                                <tr>
                                    <td width=\"20%\">
                                        <span class=\"fw-b\">";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preheader_text"), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 247, $this->source); })()), "getPreheaderText", [], "method", false, false, false, 247), "html", null, true);
            yield "</td>
                                </tr>
                              ";
        }
        // line 250
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 250, $this->source); })()), "headers", [], "any", false, false, false, 250)) {
            // line 251
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.custom_headers"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 255
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->simpleArrayToHtml(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 255, $this->source); })()), "headers", [], "any", false, false, false, 255));
            yield "</td>
                                  </tr>
                              ";
        }
        // line 258
        yield "                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sent"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 262, $this->source); })()), "sentCount", [], "any", false, false, false, 262), "html", null, true);
        yield "</td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.delivered"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td data-email-stat-delivered-for=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 268, $this->source); })()), "id", [], "any", false, false, false, 268), "html", null, true);
        yield "\"><div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div></td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.read"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 274, $this->source); })()), "readCount", [], "any", false, false, false, 274), "html", null, true);
        yield "</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ email detail collapseable -->
          </div>

          <div>
              <!-- email detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#email-details\">
                      <span class=\"caret\"></span> ";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
              </div>
              <!--/ email detail collapseable toggler -->

              ";
        // line 295
        $context["isVariant"] = ((((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 295, $this->source); })()) || (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 295, $this->source); })()))) ?: (0));
        // line 296
        yield "              ";
        $context["dateFrom"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 296, $this->source); })()), "children", [], "any", false, false, false, 296), "date_from", [], "array", false, false, false, 296), "vars", [], "any", false, false, false, 296), "data", [], "array", false, false, false, 296);
        // line 297
        yield "              ";
        $context["dateTo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 297, $this->source); })()), "children", [], "any", false, false, false, 297), "date_to", [], "array", false, false, false, 297), "vars", [], "any", false, false, false, 297), "data", [], "array", false, false, false, 297);
        // line 298
        yield "
              <div class=\"stats-menu pl-md mt-lg\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs nav-tabs-contained\">
                      <li class=\"active\">
                          <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.stats"), "html", null, true);
        yield "
                          </a>
                      </li>
                      <li>
                          <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                              ";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        yield "
                          </a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"date-range\">
                      ";
        // line 316
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 317
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 317, $this->source); })())]);
        // line 318
        yield "
                  </div>
              </div>

              <div class=\"stats-menu__content tab-content pa-md mb-lg shd-sm\">
                  <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                      <div id=\"emailGraphStats\"
                           data-graph-url=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_graph_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 325, $this->source); })()), "id", [], "any", false, false, false, 325), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 325, $this->source); })()), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 325, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 325, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                      >
                          <div class=\"spinner\">
                              <i class=\"ri-loader-3-line ri-spin\"></i>
                          </div>
                      </div>

                  </div>
                  <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                       data-map-url=\"";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_map_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 334, $this->source); })()), "id", [], "any", false, false, false, 334), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 334, $this->source); })()), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 334, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 334, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                  >
                      <div class=\"spinner\">
                          <i class=\"ri-loader-3-line ri-spin\"></i>
                      </div>
                  </div>
              </div>

              ";
        // line 342
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs nav-tabs-contained\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  <li>
                      <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.associated.contacts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  ";
        // line 356
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 356, $this->source); })())) {
            // line 357
            yield "                      <li>
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            yield "
                          </a>
                      </li>
                  ";
        }
        // line 363
        yield "                  ";
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 363, $this->source); })())) {
            // line 364
            yield "                      <li>
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            yield "
                          </a>
                      </li>
                  ";
        }
        // line 370
        yield "              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 377
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 378
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 378, $this->source); })()), "entity" =>         // line 379
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 379, $this->source); })()), "channel" => "email"]);
        // line 382
        yield "</div>

              <div class=\"tab-pane bdr-w-0 page-list\" id=\"contacts-container\">
                  ";
        // line 385
        yield (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 385, $this->source); })());
        yield "
              </div>

              ";
        // line 388
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 388, $this->source); })())) {
            // line 389
            yield "                  <!-- #variants-container -->
                  <div class=\"tab-pane bdr-w-0\" id=\"variants-container\">
                      ";
            // line 391
            yield (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 391, $this->source); })());
            yield "
                  </div>
                  <!--/ #variants-container -->
              ";
        }
        // line 395
        yield "
              <!-- #translation-container -->
              ";
        // line 397
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 397, $this->source); })())) {
            // line 398
            yield "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 399
            yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 399, $this->source); })());
            yield "
                  </div>
              ";
        }
        // line 402
        yield "              <!--/ #translation-container -->
          </div>
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- preview URL -->
          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.url"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 415
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 415)) {
            // line 416
            yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            yield "</div>
                          ";
            // line 419
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 419, $this->source); })()), "translation", [], "any", false, false, false, 419), 'widget');
            yield "
                      </div>
                  </div>
                  ";
        }
        // line 423
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 423)) {
            // line 424
            yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            yield "</div>
                          ";
            // line 427
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 427, $this->source); })()), "variant", [], "any", false, false, false, 427), 'widget');
            yield "
                      </div>
                  </div>
                  ";
        }
        // line 431
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 431)) {
            // line 432
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            yield "</div>
                              ";
            // line 435
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 435, $this->source); })()), "contact", [], "any", false, false, false, 435), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 439
        yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"input-group\">
                              <div class=\"input-group-addon\">";
        // line 443
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 444
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 444, $this->source); })()), "model" => "email", "query" => "customToggle=publicPreview"]);
        // line 448
        yield "</div>
                              <input id=\"content_preview_url\" data-route=\"email/preview\" onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 449, $this->source); })()));
        yield "\"/>
                              <span class=\"input-group-btn\">
                                ";
        // line 451
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticEmail/Email/details.html.twig", 451)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.open_link", "variant" => "ghost", "icon_only" => true, "icon" => "ri-external-link-line", "attributes" => ["id" => "content_preview_url_button", "type" => "button"], "onclick" => (("window.open(\"" .         // line 462
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 462, $this->source); })())) . "\", \"_blank\");")]]]));
        // line 466
        yield "                          </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 467, $this->source); })()), "id", [], "any", false, false, false, 467), "html", null, true);
        yield "\">
                              <input type=\"hidden\" id=\"content_preview_settings_contact_id\" value=\"\">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Draft preview URL -->
          ";
        // line 476
        if ((array_key_exists("draftPreviewUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 476, $this->source); })())))) {
            // line 477
            yield "          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.draft.preview.url"), "html", null, true);
            yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <div class=\"input-group\">
                      <div class=\"input-group-addon\">";
            // line 484
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => CoreExtension::getAttribute($this->env, $this->source,             // line 485
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 485, $this->source); })()), "getDraft", [], "method", false, false, false, 485), "model" => "email.email_draft", "query" => "customToggle=publicPreview"]);
            // line 489
            yield "</div>
                      <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                             readonly
                             value=\"";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 492, $this->source); })()));
            yield "\"/>
                      <span class=\"input-group-btn\">
                        <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 494, $this->source); })()), "html", null, true);
            yield "', '_blank');\">
                            <i class=\"fa fa-external-link\"></i>
                        </button>
                    </span>
                  </div>
              </div>
          </div>
          ";
        }
        // line 502
        yield "
          <!-- email usages -->
          <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\" data-fetch-email-usages=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 504, $this->source); })()), "id", [], "any", false, false, false, 504), "html", null, true);
        yield "\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.usages"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <i class=\"ri-loader-3-line ri-spin\"></i>
              </div>
          </div>

          <!-- activity feed -->";
        // line 514
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 514, $this->source); })())]);
        // line 516
        yield "</div>
      <!-- right section -->
      <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 518, $this->source); })()), "id", [], "any", false, false, false, 518));
        yield "\"/>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/details.html.twig";
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
        return array (  810 => 518,  806 => 516,  804 => 514,  794 => 506,  789 => 504,  785 => 502,  774 => 494,  769 => 492,  764 => 489,  762 => 485,  761 => 484,  754 => 479,  750 => 477,  748 => 476,  736 => 467,  733 => 466,  731 => 462,  730 => 451,  725 => 449,  722 => 448,  720 => 444,  719 => 443,  714 => 439,  707 => 435,  703 => 434,  699 => 432,  696 => 431,  689 => 427,  685 => 426,  681 => 424,  678 => 423,  671 => 419,  667 => 418,  663 => 416,  661 => 415,  655 => 412,  643 => 402,  637 => 399,  634 => 398,  632 => 397,  628 => 395,  621 => 391,  617 => 389,  615 => 388,  609 => 385,  604 => 382,  602 => 379,  601 => 378,  600 => 377,  592 => 370,  585 => 366,  581 => 364,  578 => 363,  571 => 359,  567 => 357,  565 => 356,  559 => 353,  551 => 348,  542 => 342,  531 => 334,  519 => 325,  510 => 318,  508 => 317,  507 => 316,  497 => 309,  489 => 304,  481 => 298,  478 => 297,  475 => 296,  473 => 295,  464 => 289,  459 => 287,  443 => 274,  438 => 272,  431 => 268,  426 => 266,  419 => 262,  414 => 260,  410 => 258,  404 => 255,  399 => 253,  395 => 251,  392 => 250,  386 => 247,  381 => 245,  377 => 243,  374 => 242,  368 => 239,  363 => 237,  359 => 235,  356 => 234,  350 => 231,  345 => 229,  341 => 227,  338 => 226,  332 => 223,  327 => 221,  323 => 219,  320 => 218,  314 => 215,  309 => 213,  305 => 211,  303 => 210,  298 => 208,  293 => 206,  289 => 204,  287 => 203,  275 => 192,  270 => 189,  268 => 188,  265 => 187,  262 => 186,  259 => 185,  254 => 182,  252 => 181,  249 => 180,  246 => 179,  244 => 178,  240 => 177,  236 => 176,  225 => 167,  218 => 166,  212 => 161,  211 => 157,  210 => 156,  209 => 155,  208 => 153,  207 => 152,  206 => 150,  205 => 149,  204 => 148,  203 => 145,  202 => 144,  199 => 143,  192 => 142,  185 => 138,  183 => 137,  180 => 136,  178 => 133,  177 => 132,  176 => 129,  175 => 127,  174 => 126,  173 => 123,  171 => 122,  168 => 120,  166 => 117,  165 => 115,  164 => 112,  162 => 106,  161 => 105,  160 => 104,  157 => 103,  150 => 102,  144 => 15,  143 => 14,  142 => 13,  141 => 10,  140 => 9,  137 => 8,  130 => 7,  119 => 5,  108 => 3,  104 => 1,  102 => 100,  99 => 95,  97 => 87,  96 => 83,  94 => 82,  92 => 76,  91 => 70,  88 => 68,  85 => 65,  83 => 64,  81 => 63,  79 => 57,  78 => 54,  76 => 53,  74 => 52,  72 => 50,  69 => 48,  67 => 47,  65 => 45,  63 => 44,  61 => 38,  60 => 37,  59 => 35,  57 => 33,  55 => 28,  54 => 27,  53 => 26,  52 => 25,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/details.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Email/details.html.twig");
    }
}
