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

/* @Integrations/Config/form.html.twig */
class __TwigTemplate_ec5b12e24bdad12a4924a49e32feffc2 extends Template
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
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("app/bundles/IntegrationsBundle/Assets/js/integrations.js", "integrationsConfigOnLoad", "integrationsConfigOnLoad");
        yield "
";
        // line 3
        $context["activeTab"] = ((array_key_exists("activeTab", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 3, $this->source); })()), "details-container")) : ("details-container"));
        // line 4
        yield "
";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        yield "
<ul class=\"nav nav-tabs nav-tabs-contained\">
    <!-- Enabled\\Auth -->
    <li class=\"";
        // line 8
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 8, $this->source); })()))) {
            yield " active";
        }
        yield "\" id=\"details-tab\">
        <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.details"), "html", null, true);
        yield "
            ";
        // line 11
        if ((isset($context["hasAuthErrors"]) || array_key_exists("hasAuthErrors", $context) ? $context["hasAuthErrors"] : (function () { throw new RuntimeError('Variable "hasAuthErrors" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "                <i class=\"ri-fw ri-alert-fill text-danger\"></i>
            ";
        }
        // line 14
        yield "        </a>
    </li>
    <!-- Enabled\\Auth -->

    <!-- Features -->
    ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["showFeaturesTab"]) || array_key_exists("showFeaturesTab", $context) ? $context["showFeaturesTab"] : (function () { throw new RuntimeError('Variable "showFeaturesTab" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "        <li class=\"\" id=\"features-tab\">
            <a href=\"#features-container\" role=\"tab\" data-toggle=\"tab\">
                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.features"), "html", null, true);
            yield "
                ";
            // line 23
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["hasFeatureErrors"]) || array_key_exists("hasFeatureErrors", $context) ? $context["hasFeatureErrors"] : (function () { throw new RuntimeError('Variable "hasFeatureErrors" does not exist.', 23, $this->source); })()))) {
                // line 24
                yield "                <i class=\"ri-fw ri-alert-fill text-danger\"></i>
                ";
            }
            // line 26
            yield "            </a>
        </li>
    ";
        }
        // line 29
        yield "    <!-- Features -->

    <!-- Field Mapping -->
    ";
        // line 32
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "    ";
            $context["objects"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 33, $this->source); })()), "getSyncConfigObjects", [], "method", false, false, false, 33);
            // line 34
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "featureSettings", [], "any", false, false, false, 34), "sync", [], "any", false, false, false, 34), "fieldMappings", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["object"] => $context["objectFieldMapping"]) {
                // line 35
                yield "        <li class=\"";
                if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 35, $this->source); })()) == ("field-mapping-" . $context["object"]))) {
                    yield " active";
                }
                yield "\" id=\"fields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "-tab\">
            <a href=\"#field-mappings-";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "-container\" role=\"tab\" data-toggle=\"tab\">
                ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.sync_field_mapping", ["%object%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 37, $this->source); })()), $context["object"], [], "array", false, false, false, 37))]), "html", null, true);
                yield "
                ";
                // line 38
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors($context["objectFieldMapping"])) {
                    // line 39
                    yield "                    <i class=\"ri-fw ri-alert-fill text-danger\"></i>
                ";
                }
                // line 41
                yield "            </a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['object'], $context['objectFieldMapping'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "    ";
        }
        // line 45
        yield "    <!-- Field Mapping -->
</ul>

<div class=\"tab-content pa-md\">
    <!-- Enabled\\Auth -->
    <div class=\"tab-pane fade";
        // line 50
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 50, $this->source); })()))) {
            yield " in active";
        }
        yield " bdr-w-0\" id=\"details-container\">
        ";
        // line 51
        if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 51, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 51, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 51), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
            // line 52
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 52, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 52), "getType", [], "method", false, false, false, 52), "html", null, true);
            yield "\">
                ";
            // line 53
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 53, $this->source); })()), "getAuthorizationNote", [], "method", false, false, false, 53), "getNote", [], "method", false, false, false, 53)));
            yield "
            </div>
        ";
        }
        // line 56
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "isPublished", [], "any", false, false, false, 56), 'row');
        yield "
        ";
        // line 57
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 57, $this->source); })()), "\\Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormAuthInterface")) {
            // line 58
            yield "        <hr />
        ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "apiKeys", [], "any", false, false, false, 59), 'row');
            yield "
            ";
            // line 60
            if ((isset($context["useAuthorizationUrl"]) || array_key_exists("useAuthorizationUrl", $context) ? $context["useAuthorizationUrl"] : (function () { throw new RuntimeError('Variable "useAuthorizationUrl" does not exist.', 60, $this->source); })())) {
                // line 61
                yield "            <div class=\"alert alert-warning\">
                ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 62, $this->source); })()), "getCallbackHelpMessageTranslationKey", [], "method", false, false, false, 62)), "html", null, true);
                yield "
            </div>
            ";
                // line 64
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 64, $this->source); })()))) {
                    // line 65
                    yield "            <div class=\"well well-sm\">
                ";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.callbackuri"), "html", null, true);
                    yield "<br/>
                <input type=\"text\" name=\"callback_url\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 67, $this->source); })()), "html", null, true);
                    yield "\" class=\"form-control\"/>
            </div>
            ";
                }
                // line 70
                yield "            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <input type=\"hidden\" id=\"integration_details_in_auth\" name=\"integration_details[in_auth]\" autocomplete=\"false\">
                    ";
                // line 73
                yield from                 $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@Integrations/Config/form.html.twig", 73)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 76
(isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 76, $this->source); })()), "isAuthorized", [], "method", false, false, false, 76)) ? ("mautic.integration.form.reauthorize") : ("mautic.integration.form.authorize")), "variant" => "success", "icon" => "ri-key-2-line", "attributes" => ["id" => "integration_details_authButton", "name" => "integration_details[authButton]"], "onclick" => "Mautic.authorizeIntegration()"]]]));
                // line 87
                yield "                </div>
            </div>
            ";
            }
            // line 90
            yield "        ";
        }
        // line 91
        yield "    </div>
    <!-- Enabled\\Auth -->

    <!-- Features -->
    ";
        // line 95
        if ((isset($context["showFeaturesTab"]) || array_key_exists("showFeaturesTab", $context) ? $context["showFeaturesTab"] : (function () { throw new RuntimeError('Variable "showFeaturesTab" does not exist.', 95, $this->source); })())) {
            // line 96
            yield "    <div class=\"tab-pane fade";
            if (("features-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 96, $this->source); })()))) {
                yield " in active";
            }
            yield " bdr-w-0\" id=\"features-container\">
        ";
            // line 97
            if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 97, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 97, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 97), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
                // line 98
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 98, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 98), "getType", [], "method", false, false, false, 98), "html", null, true);
                yield "\">
                ";
                // line 99
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 99, $this->source); })()), "getFeaturesNote", [], "method", false, false, false, 99), "getNote", [], "method", false, false, false, 99)));
                yield "
            </div>
        ";
            }
            // line 103
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supportedFeatures", [], "any", true, true, false, 103)) {
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 103), 'row');
            }
            // line 104
            yield "
        ";
            // line 105
            if (((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 105, $this->source); })()) || (isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 105, $this->source); })()))) {
                // line 106
                yield "            <hr />
        ";
            }
            // line 108
            yield "
        ";
            // line 109
            if ((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 109, $this->source); })())) {
                // line 110
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "featureSettings", [], "any", false, false, false, 110), "sync", [], "any", false, false, false, 110), "objects", [], "any", false, false, false, 110), 'row');
                yield "
            ";
                // line 112
                yield "
            ";
                // line 113
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 113), "sync", [], "any", false, true, false, 113), "integration", [], "any", true, true, false, 113)) {
                    // line 114
                    yield "                ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "featureSettings", [], "any", false, false, false, 114), "sync", [], "any", false, false, false, 114), "integration", [], "any", false, false, false, 114), 'row');
                    yield "
            ";
                }
                // line 116
                yield "
            ";
                // line 117
                if ((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 117, $this->source); })())) {
                    // line 118
                    yield "                <hr />
            ";
                }
                // line 120
                yield "        ";
            }
            // line 121
            yield "
        ";
            // line 122
            if ((isset($context["useFeatureSettings"]) || array_key_exists("useFeatureSettings", $context) ? $context["useFeatureSettings"] : (function () { throw new RuntimeError('Variable "useFeatureSettings" does not exist.', 122, $this->source); })())) {
                // line 123
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "featureSettings", [], "any", false, false, false, 123), "integration", [], "any", false, false, false, 123), 'row');
                yield "
        ";
            }
            // line 125
            yield "    </div>
    ";
        }
        // line 127
        yield "    <!-- Features -->

    <!-- Field Mapping -->
    ";
        // line 130
        if ((isset($context["useSyncFeatures"]) || array_key_exists("useSyncFeatures", $context) ? $context["useSyncFeatures"] : (function () { throw new RuntimeError('Variable "useSyncFeatures" does not exist.', 130, $this->source); })())) {
            // line 131
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "featureSettings", [], "any", false, false, false, 131), "sync", [], "any", false, false, false, 131), "fieldMappings", [], "any", false, false, false, 131));
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
            foreach ($context['_seq'] as $context["object"] => $context["objectFieldMapping"]) {
                // line 132
                yield "    <div class=\"tab-pane fade";
                if (((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 132, $this->source); })()) == ("field-mapping-" . $context["object"]))) {
                    yield " in active";
                }
                yield " bdr-w-0\" id=\"field-mappings-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "-container\">
        <div class=\"has-error\">
            ";
                // line 134
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["objectFieldMapping"], 'errors');
                yield "
        </div>

        ";
                // line 137
                if (((isset($context["useConfigFormNotes"]) || array_key_exists("useConfigFormNotes", $context) ? $context["useConfigFormNotes"] : (function () { throw new RuntimeError('Variable "useConfigFormNotes" does not exist.', 137, $this->source); })()) && $this->env->getTest('instanceof')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 137, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 137), "\\Mautic\\IntegrationsBundle\\DTO\\Note"))) {
                    // line 138
                    yield "            <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 138, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 138), "getType", [], "method", false, false, false, 138), "html", null, true);
                    yield "\">
                ";
                    // line 139
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 139, $this->source); })()), "getFieldMappingNote", [], "method", false, false, false, 139), "getNote", [], "method", false, false, false, 139)));
                    yield "
            </div>
        ";
                }
                // line 142
                yield "
        ";
                // line 143
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["objectFieldMapping"], "filter-keyword", [], "array", false, false, false, 143), 'row');
                yield "

        <div id=\"field-mappings-";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "\">";
                // line 146
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Integrations/Config/field_mapping.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 147
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "featureSettings", [], "any", false, false, false, 147), "sync", [], "any", false, false, false, 147), "fieldMappings", [], "any", false, false, false, 147), $context["object"], [], "array", false, false, false, 147), "integration" => CoreExtension::getAttribute($this->env, $this->source,                 // line 148
(isset($context["integrationObject"]) || array_key_exists("integrationObject", $context) ? $context["integrationObject"] : (function () { throw new RuntimeError('Variable "integrationObject" does not exist.', 148, $this->source); })()), "getName", [], "method", false, false, false, 148), "object" =>                 // line 149
$context["object"], "page" => 1]);
                // line 152
                yield "</div>
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
            unset($context['_seq'], $context['object'], $context['objectFieldMapping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "    ";
        }
        // line 156
        yield "    <!-- Field Mapping -->
</div>

";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Integrations/Config/form.html.twig";
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
        return array (  415 => 159,  410 => 156,  407 => 155,  391 => 152,  389 => 149,  388 => 148,  387 => 147,  386 => 146,  383 => 145,  378 => 143,  375 => 142,  369 => 139,  364 => 138,  362 => 137,  356 => 134,  346 => 132,  328 => 131,  326 => 130,  321 => 127,  317 => 125,  311 => 123,  309 => 122,  306 => 121,  303 => 120,  299 => 118,  297 => 117,  294 => 116,  288 => 114,  286 => 113,  283 => 112,  278 => 110,  276 => 109,  273 => 108,  269 => 106,  267 => 105,  264 => 104,  260 => 103,  254 => 99,  249 => 98,  247 => 97,  240 => 96,  238 => 95,  232 => 91,  229 => 90,  224 => 87,  222 => 76,  221 => 73,  216 => 70,  210 => 67,  206 => 66,  203 => 65,  201 => 64,  196 => 62,  193 => 61,  191 => 60,  187 => 59,  184 => 58,  182 => 57,  177 => 56,  171 => 53,  166 => 52,  164 => 51,  158 => 50,  151 => 45,  148 => 44,  140 => 41,  136 => 39,  134 => 38,  130 => 37,  126 => 36,  117 => 35,  112 => 34,  109 => 33,  107 => 32,  102 => 29,  97 => 26,  93 => 24,  91 => 23,  87 => 22,  83 => 20,  81 => 19,  74 => 14,  70 => 12,  68 => 11,  64 => 10,  57 => 8,  51 => 5,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Integrations/Config/form.html.twig", "/app/docroot/app/bundles/IntegrationsBundle/Resources/views/Config/form.html.twig");
    }
}
