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

/* @MauticPlugin/Integration/form.html.twig */
class __TwigTemplate_8474a80204c00c0d9bb3fe08f578e904 extends Template
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
        // line 12
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), (isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 12, $this->source); })()), true);
        // line 13
        yield "<!-- form themes: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["formThemes"]) || array_key_exists("formThemes", $context) ? $context["formThemes"] : (function () { throw new RuntimeError('Variable "formThemes" does not exist.', 13, $this->source); })()), ", "), "html", null, true);
        yield " -->";
        // line 14
        $context["nSupportedFeatures"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "supportedFeatures", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 14))) : (0));
        // line 15
        $context["hasSupportedFeatures"] = ((isset($context["nSupportedFeatures"]) || array_key_exists("nSupportedFeatures", $context) ? $context["nSupportedFeatures"] : (function () { throw new RuntimeError('Variable "nSupportedFeatures" does not exist.', 15, $this->source); })()) > 0);
        // line 16
        $context["nFeatureSettings"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "featureSettings", [], "any", false, false, false, 16))) : (0));
        // line 17
        $context["hasFields"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["formSettings"] ?? null), "dynamic_contact_fields", [], "any", true, true, false, 17) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 17, $this->source); })()), "dynamic_contact_fields", [], "any", false, false, false, 17))) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 17)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "featureSettings", [], "any", false, false, false, 17), "leadFields", [], "any", false, false, false, 17)) > 0));
        // line 20
        if ( !(isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 20, $this->source); })())) {
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "featureSettings", [], "any", false, false, false, 20), "leadFields", [], "any", false, false, false, 20), "setRendered", [], "method", false, false, false, 20);
            $context["nFeatureSettings"] = ((isset($context["nFeatureSettings"]) || array_key_exists("nFeatureSettings", $context) ? $context["nFeatureSettings"] : (function () { throw new RuntimeError('Variable "nFeatureSettings" does not exist.', 20, $this->source); })()) - 1);
        }
        // line 21
        $context["hideContactFieldTab"] = ((((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 21, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["formSettings"] ?? null), "dynamic_contact_fields", [], "any", true, true, false, 21)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 21, $this->source); })()), "dynamic_contact_fields", [], "any", false, false, false, 21))) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "featureSettings", [], "any", false, false, false, 21), "leadFields", [], "any", false, false, false, 21)) == 0));
        // line 22
        $context["hasFeatureSettings"] = (CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 23) && ((        // line 25
(isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 25, $this->source); })()) && ((isset($context["nFeatureSettings"]) || array_key_exists("nFeatureSettings", $context) ? $context["nFeatureSettings"] : (function () { throw new RuntimeError('Variable "nFeatureSettings" does not exist.', 25, $this->source); })()) > 1)) || ( !        // line 27
(isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 27, $this->source); })()) && ((isset($context["nFeatureSettings"]) || array_key_exists("nFeatureSettings", $context) ? $context["nFeatureSettings"] : (function () { throw new RuntimeError('Variable "nFeatureSettings" does not exist.', 27, $this->source); })()) > 0))));
        // line 30
        if (( !(isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 30, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", true, true, false, 30))) {
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "featureSettings", [], "any", false, false, false, 30), "setRendered", [], "method", false, false, false, 30);
        }
        // line 31
        $context["hasCompanyFields"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 31), "companyFields", [], "any", true, true, false, 31) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "featureSettings", [], "any", false, false, false, 31), "companyFields", [], "any", false, false, false, 31)) > 0));
        // line 32
        $context["companyFieldHtml"] = (((isset($context["hasCompanyFields"]) || array_key_exists("hasCompanyFields", $context) ? $context["hasCompanyFields"] : (function () { throw new RuntimeError('Variable "hasCompanyFields" does not exist.', 32, $this->source); })())) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "featureSettings", [], "any", false, false, false, 32), "companyFields", [], "any", false, false, false, 32), 'row')) : (""));
        // line 33
        $context["fieldHtml"] = (((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 33, $this->source); })())) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "featureSettings", [], "any", false, false, false, 33), "leadFields", [], "any", false, false, false, 33), 'row')) : (""));
        // line 34
        $context["fieldLabel"] = (((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 34, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "featureSettings", [], "any", false, false, false, 34), "leadFields", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "label", [], "any", false, false, false, 34)) : (""));
        // line 35
        $context["fieldTabClass"] = ((((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 35, $this->source); })()) && ((isset($context["hideContactFieldTab"]) || array_key_exists("hideContactFieldTab", $context) ? $context["hideContactFieldTab"] : (function () { throw new RuntimeError('Variable "hideContactFieldTab" does not exist.', 35, $this->source); })()) == false))) ?: ("hide"));
        // line 36
        $context["hasLeadFieldErrors"] = ((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 36, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "featureSettings", [], "any", false, false, false, 36), "leadFields", [], "any", false, false, false, 36)));
        // line 37
        $context["hasCompanyFieldErrors"] = ((isset($context["hasCompanyFields"]) || array_key_exists("hasCompanyFields", $context) ? $context["hasCompanyFields"] : (function () { throw new RuntimeError('Variable "hasCompanyFields" does not exist.', 37, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "featureSettings", [], "any", false, false, false, 37), "companyFields", [], "any", false, false, false, 37)));
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 38), "leadFields", [], "any", true, true, false, 38)) {
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "featureSettings", [], "any", false, false, false, 38), "leadFields", [], "any", false, false, false, 38), "setRendered", [], "method", false, false, false, 38);
        }
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "featureSettings", [], "any", false, true, false, 39), "companyFields", [], "any", true, true, false, 39)) {
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "featureSettings", [], "any", false, false, false, 39), "companyFields", [], "any", false, false, false, 39), "setRendered", [], "method", false, false, false, 39);
        }
        // line 41
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 41, $this->source); })()))) {
            // line 42
            yield "<div class=\"alert alert-info\">";
            // line 43
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 43, $this->source); })()));
            // line 44
            yield "</div>";
        }
        // line 47
        yield "<!-- tabs controls -->
<ul class=\"nav nav-tabs nav-tabs-line\">
    <li class=\"";
        // line 49
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 49, $this->source); })()))) {
            yield "active";
        }
        yield "\" id=\"details-tab\">
        <a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.details"), "html", null, true);
        yield "</a>
    </li>";
        // line 53
        if (((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 53, $this->source); })()) || (isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "<li class=\"\" id=\"features-tab\">
            <a href=\"#features-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.features"), "html", null, true);
            // line 57
            if ((((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 57, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 57))) || ((isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 57, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "featureSettings", [], "any", false, false, false, 57), ["leadFields"])))) {
                // line 58
                yield "<i class=\"ri-fw ri-alert-fill text-danger\"></i>";
            }
            // line 60
            yield "</a>
        </li>";
        }
        // line 64
        if ((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 64, $this->source); })())) {
            // line 65
            yield "<li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldTabClass"]) || array_key_exists("fieldTabClass", $context) ? $context["fieldTabClass"] : (function () { throw new RuntimeError('Variable "fieldTabClass" does not exist.', 65, $this->source); })()), "html", null, true);
            yield " ";
            if (("leadFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 65, $this->source); })()))) {
                yield "active";
            }
            yield "\" id=\"fields-tab\">
            <a href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.fieldmapping"), "html", null, true);
            // line 68
            if ((isset($context["hasLeadFieldErrors"]) || array_key_exists("hasLeadFieldErrors", $context) ? $context["hasLeadFieldErrors"] : (function () { throw new RuntimeError('Variable "hasLeadFieldErrors" does not exist.', 68, $this->source); })())) {
                // line 69
                yield "<i class=\"ri-fw ri-alert-fill text-danger\"></i>";
            }
            // line 71
            yield "</a>
        </li>";
        }
        // line 75
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["companyFieldHtml"]) || array_key_exists("companyFieldHtml", $context) ? $context["companyFieldHtml"] : (function () { throw new RuntimeError('Variable "companyFieldHtml" does not exist.', 75, $this->source); })()))) {
            // line 76
            yield "<li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldTabClass"]) || array_key_exists("fieldTabClass", $context) ? $context["fieldTabClass"] : (function () { throw new RuntimeError('Variable "fieldTabClass" does not exist.', 76, $this->source); })()), "html", null, true);
            yield " ";
            if (("companyFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 76, $this->source); })()))) {
                yield "active";
            }
            yield "\" id=\"company-fields-tab\">
            <a href=\"#company-fields-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.integration.tab.companyfieldmapping"), "html", null, true);
            // line 79
            if ((isset($context["hasCompanyFieldErrors"]) || array_key_exists("hasCompanyFieldErrors", $context) ? $context["hasCompanyFieldErrors"] : (function () { throw new RuntimeError('Variable "hasCompanyFieldErrors" does not exist.', 79, $this->source); })())) {
                // line 80
                yield "<i class=\"ri-fw ri-alert-fill text-danger\"></i>
                ";
            }
            // line 82
            yield "            </a>
        </li>";
        }
        // line 85
        yield "</ul>
<!--/ tabs controls -->";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_start');
        // line 89
        yield "<div class=\"tab-content pa-md\">
    <div class=\"tab-pane fade ";
        // line 90
        if (("details-container" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 90, $this->source); })()))) {
            yield "in active";
        }
        yield " bdr-w-0\" id=\"details-container\">";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "isPublished", [], "any", false, false, false, 91), 'row');
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "virtual", [], "any", true, true, false, 92)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "virtual", [], "any", false, false, false, 92), 'row');
        }
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "apiKeys", [], "any", true, true, false, 93)) {
            // line 94
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "apiKeys", [], "any", false, false, false, 94), 'row');
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["formNotes"] ?? null), "authorization", [], "any", true, true, false, 95)) {
                // line 96
                yield "<div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 96, $this->source); })()), "authorization", [], "any", false, false, false, 96), "type", [], "any", false, false, false, 96), "html", null, true);
                yield "\">";
                // line 97
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 97, $this->source); })()), "authorization", [], "any", false, false, false, 97), "note", [], "any", false, false, false, 97));
                // line 98
                yield "</div>";
            }
            // line 101
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "apiKeys", [], "any", false, false, false, 101)) > 0) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 101, $this->source); })())))) {
                // line 102
                yield "<div class=\"well well-sm\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.callbackuri"), "html", null, true);
                yield "<br/>
                    <input type=\"text\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["callbackUrl"]) || array_key_exists("callbackUrl", $context) ? $context["callbackUrl"] : (function () { throw new RuntimeError('Variable "callbackUrl" does not exist.', 104, $this->source); })()));
                yield "\" class=\"form-control\"/>
                </div>";
            }
            // line 108
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "authButton", [], "any", true, true, false, 108)) {
                // line 109
                yield "<div class=\"row\">
                    <div class=\"col-xs-12 text-center\">";
                // line 111
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "authButton", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "btn btn-success btn-lg"]]);
                // line 112
                yield "</div>
                </div>";
            }
        }
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["formNotes"] ?? null), "custom", [], "any", true, true, false, 117)) {
            // line 118
            if ($this->env->getTest('string')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 118, $this->source); })()), "custom", [], "any", false, false, false, 118))) {
                // line 119
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 119, $this->source); })()), "custom", [], "any", false, false, false, 119));
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 120
($context["formNotes"] ?? null), "custom", [], "any", false, true, false, 120), "custom", [], "any", true, true, false, 120) && $this->env->getTest('string')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 120, $this->source); })()), "custom", [], "any", false, false, false, 120), "template", [], "any", false, false, false, 120)))) {
                // line 121
                yield "<!-- start: \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 121, $this->source); })()), "custom", [], "any", false, false, false, 121), "template", [], "any", false, false, false, 121), "html", null, true);
                yield "\" -->
                ";
                // line 122
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 122, $this->source); })()), "custom", [], "any", false, false, false, 122), "template", [], "any", false, false, false, 122), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["formNotes"] ?? null), "custom", [], "any", false, true, false, 122), "parameters", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["formNotes"] ?? null), "custom", [], "any", false, true, false, 122), "parameters", [], "any", false, false, false, 122), [])) : ([])), true, true);
                yield "
                <!-- end: \"";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 123, $this->source); })()), "custom", [], "any", false, false, false, 123), "template", [], "any", false, false, false, 123), "html", null, true);
                yield "\" -->";
            }
        }
        // line 126
        yield "</div>";
        // line 128
        if (((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 128, $this->source); })()) || (isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 128, $this->source); })()))) {
            // line 129
            yield "<div class=\"tab-pane fade bdr-w-0\" id=\"features-container\">";
            // line 130
            if ((isset($context["hasSupportedFeatures"]) || array_key_exists("hasSupportedFeatures", $context) ? $context["hasSupportedFeatures"] : (function () { throw new RuntimeError('Variable "hasSupportedFeatures" does not exist.', 130, $this->source); })())) {
                // line 131
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "supportedFeatures", [], "any", false, false, false, 131), 'row', ["formSettings" =>                 // line 132
(isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 132, $this->source); })()), "formNotes" =>                 // line 133
(isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 133, $this->source); })())]);
            }
            // line 137
            if ((isset($context["hasFeatureSettings"]) || array_key_exists("hasFeatureSettings", $context) ? $context["hasFeatureSettings"] : (function () { throw new RuntimeError('Variable "hasFeatureSettings" does not exist.', 137, $this->source); })())) {
                // line 138
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "featureSettings", [], "any", false, false, false, 138), 'row', ["formSettings" =>                 // line 139
(isset($context["formSettings"]) || array_key_exists("formSettings", $context) ? $context["formSettings"] : (function () { throw new RuntimeError('Variable "formSettings" does not exist.', 139, $this->source); })()), "formNotes" =>                 // line 140
(isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 140, $this->source); })())]);
            }
            // line 143
            yield "</div>";
        }
        // line 146
        if ((isset($context["hasFields"]) || array_key_exists("hasFields", $context) ? $context["hasFields"] : (function () { throw new RuntimeError('Variable "hasFields" does not exist.', 146, $this->source); })())) {
            // line 147
            yield "<div class=\"tab-pane fade ";
            if (("leadFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 147, $this->source); })()))) {
                yield "in active";
            }
            yield "  bdr-w-0\" id=\"fields-container\">
            <h4 class=\"mb-sm\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["fieldLabel"]) || array_key_exists("fieldLabel", $context) ? $context["fieldLabel"] : (function () { throw new RuntimeError('Variable "fieldLabel" does not exist.', 148, $this->source); })())), "html", null, true);
            yield "</h4>";
            // line 149
            yield (isset($context["fieldHtml"]) || array_key_exists("fieldHtml", $context) ? $context["fieldHtml"] : (function () { throw new RuntimeError('Variable "fieldHtml" does not exist.', 149, $this->source); })());
            // line 150
            yield "</div>";
        }
        // line 153
        if ((isset($context["hasCompanyFields"]) || array_key_exists("hasCompanyFields", $context) ? $context["hasCompanyFields"] : (function () { throw new RuntimeError('Variable "hasCompanyFields" does not exist.', 153, $this->source); })())) {
            // line 154
            yield "<div class=\"tab-pane fade ";
            if (("companyFieldsContainer" == (isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 154, $this->source); })()))) {
                yield "in active";
            }
            yield " bdr-w-0\" id=\"company-fields-container\">
            <h4 class=\"mb-sm\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.companyfield_matches"), "html", null, true);
            yield "</h4>";
            // line 156
            yield (isset($context["companyFieldHtml"]) || array_key_exists("companyFieldHtml", $context) ? $context["companyFieldHtml"] : (function () { throw new RuntimeError('Variable "companyFieldHtml" does not exist.', 156, $this->source); })());
            // line 157
            yield "</div>";
        }
        // line 159
        yield "</div>
";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPlugin/Integration/form.html.twig";
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
        return array (  319 => 160,  316 => 159,  313 => 157,  311 => 156,  308 => 155,  301 => 154,  299 => 153,  296 => 150,  294 => 149,  291 => 148,  284 => 147,  282 => 146,  279 => 143,  276 => 140,  275 => 139,  274 => 138,  272 => 137,  269 => 133,  268 => 132,  267 => 131,  265 => 130,  263 => 129,  261 => 128,  259 => 126,  254 => 123,  250 => 122,  245 => 121,  243 => 120,  241 => 119,  239 => 118,  237 => 117,  232 => 112,  230 => 111,  227 => 109,  225 => 108,  220 => 104,  216 => 103,  214 => 102,  212 => 101,  209 => 98,  207 => 97,  203 => 96,  201 => 95,  199 => 94,  197 => 93,  193 => 92,  191 => 91,  186 => 90,  183 => 89,  181 => 88,  178 => 85,  174 => 82,  170 => 80,  168 => 79,  166 => 78,  157 => 76,  155 => 75,  151 => 71,  148 => 69,  146 => 68,  144 => 67,  135 => 65,  133 => 64,  129 => 60,  126 => 58,  124 => 57,  122 => 56,  119 => 54,  117 => 53,  113 => 50,  107 => 49,  103 => 47,  100 => 44,  98 => 43,  96 => 42,  94 => 41,  90 => 39,  86 => 38,  84 => 37,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 32,  72 => 31,  68 => 30,  66 => 27,  65 => 25,  64 => 23,  63 => 22,  61 => 21,  56 => 20,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/Integration/form.html.twig", "/app/docroot/app/bundles/PluginBundle/Resources/views/Integration/form.html.twig");
    }
}
