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

/* @MauticEmail/Email/form.html.twig */
class __TwigTemplate_81d0ae5c3e5477641500eaf5a39f456f extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@MauticEmail/FormTheme/Email/layout.html.twig"], true);
        // line 6
        $context["dynamicContentPrototype"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dynamicContent", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "prototype", [], "any", false, false, false, 6);
        // line 7
        $context["filterBlockPrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 7), "children", [], "any", false, true, false, 7), 0, [], "array", false, true, false, 7), "filters", [], "any", false, true, false, 7), "vars", [], "any", false, true, false, 7), "prototype", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 7), "children", [], "any", false, true, false, 7), 0, [], "array", false, true, false, 7), "filters", [], "any", false, true, false, 7), "vars", [], "any", false, true, false, 7), "prototype", [], "any", false, false, false, 7), null)) : (null));
        // line 8
        $context["filterSelectPrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "prototype", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "prototype", [], "any", false, false, false, 8), null)) : (null));
        // line 10
        $context["variantParent"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "variantParent", [], "any", false, false, false, 10);
        // line 11
        $context["isExisting"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11));
        // line 12
        $context["emailType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "emailType", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12);
        // line 13
        $context["attachmentSize"] = ((array_key_exists("attachmentSize", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attachmentSize"]) || array_key_exists("attachmentSize", $context) ? $context["attachmentSize"] : (function () { throw new RuntimeError('Variable "attachmentSize" does not exist.', 13, $this->source); })()), 0)) : (0));
        // line 14
        $context["templates"] = ["select" => "select-template", "countries" => "country-template", "regions" => "region-template", "timezones" => "timezone-template", "stages" => "stage-template", "locales" => "locale-template"];
        // line 22
        $context["isCodeMode"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 22, $this->source); })()), "getTemplate", [], "method", false, false, false, 22) === "mautic_code_mode");
        // line 23
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 23, $this->source); })()), "")) : (""));
        // line 24
        $context["draftPreviewUrl"] = ((array_key_exists("draftPreviewUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 24, $this->source); })()), "")) : (""));
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Email/form.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "email";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))) {
            // line 27
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27)]), "html", null, true);
            yield "
  ";
        } else {
            // line 29
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.header.new"), "html", null, true);
            yield "
  ";
        }
        // line 31
        yield "
  ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 32, $this->source); })()), "variantParent", [], "any", false, false, false, 32)) {
            // line 33
            yield "    <div><span class=\"small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "%parent%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)]), "html", null, true);
            yield "</span></div>
  ";
        }
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        yield "
    <div class=\"box-layout\">
        <div class=\"col-md-9 height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <!-- tabs controls -->
                    <ul class=\"nav nav-tabs nav-tabs-contained\">
                        <li class=\"active\">
                            <a href=\"#email-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        yield "</a>
                        </li>
                        <li>
                            <a href=\"#advanced-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.advanced"), "html", null, true);
        yield "</a>
                        </li>
                        <li id=\"dynamic-content-tab\" ";
        // line 52
        yield (((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 52, $this->source); })())) ? ("") : ("class=\"hidden\""));
        yield ">
                            <a href=\"#dynamic-content-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent"), "html", null, true);
        yield "</a>
                        </li>
                        ";
        // line 55
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.tabs", $context);
        yield "
                    </ul>
                    <!--/ tabs controls -->

                    <div class=\"tab-content pa-md\">
                        <div class=\"tab-pane fade in active bdr-w-0\" id=\"email-container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "template", [], "any", false, false, false, 62), 'row');
        yield "</div>
                            </div>";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/theme_select.html.twig", ["type" => "email", "themes" =>         // line 66
(isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 66, $this->source); })()), "active" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "template", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67)]);
        // line 69
        yield "</div>
                        <div class=\"tab-pane fade bdr-w-0\" id=\"advanced-container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "fromName", [], "any", false, false, false, 73), 'row');
        yield "
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "fromAddress", [], "any", false, false, false, 74), 'row');
        yield "
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "replyToAddress", [], "any", false, false, false, 75), 'row');
        yield "
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "bccAddress", [], "any", false, false, false, 76), 'row');
        yield "
                                    ";
        // line 77
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.settings.advanced", $context);
        yield "
                                    <div>
                                        <div class=\"pull-left\">
                                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "assetAttachments", [], "any", false, false, false, 80), 'label');
        yield "
                                        </div>
                                        <div class=\"text-right pr-10\">
                                            <span class=\"label label-info\"
                                                  id=\"attachment-size\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attachmentSize"]) || array_key_exists("attachmentSize", $context) ? $context["attachmentSize"] : (function () { throw new RuntimeError('Variable "attachmentSize" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "</span>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "assetAttachments", [], "any", false, false, false, 87), 'widget');
        yield "
                                    </div>

                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "headers", [], "any", false, false, false, 92), 'row');
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "useOwnerAsMailer", [], "any", false, false, false, 95), 'row');
        yield "
                                </div>
                            </div>
                            <br/>
                            <div class=\"row hidden\" id=\"custom-html-row\">
                                <div class=\"col-md-12\">
                                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "customHtml", [], "any", false, false, false, 101), 'label');
        yield "
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "customHtml", [], "any", false, false, false, 102), 'widget');
        yield "
                                </div>
                            </div>
                            <br/>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "plainText", [], "any", false, false, false, 109), 'label');
        yield "
                                    </div>
                                    <div class=\"text-right pr-10\">
                                        <i class=\"ri-loader-3-line ri-spin ml-2 plaintext-spinner hide\"></i>
                                        <a class=\"small\"
                                           onclick=\"Mautic.autoGeneratePlaintext();\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.plaintext.generate"), "html", null, true);
        yield "</a>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "plainText", [], "any", false, false, false, 117), 'widget');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade bdr-w-0\" id=\"dynamic-content-container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-3 dynamicContentFilterContainer\">
                                          <ul class=\"nav nav-tabs nav-tabs-contained tabs-left\" id=\"dynamicContentTabs\">
                                            <li>
                                                ";
        // line 128
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticEmail/Email/form.html.twig", 128)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.form.new", "variant" => "primary", "icon" => "ri-add-line", "attributes" => ["id" => "addNewDynamicContent", "role" => "tab", "class" => "mr-xs", "type" => "button"]]]]));
        // line 143
        yield "                                            </li>
                                            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "dynamicContent", [], "any", false, false, false, 144));
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
        foreach ($context['_seq'] as $context["_key"] => $context["dynamicContent"]) {
            // line 145
            yield "                                              ";
            $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dynamicContent"], "tokenName", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "value", [], "any", false, false, false, 145);
            // line 146
            yield "                                              ";
            $context["linkText"] = ((array_key_exists("name", $context)) ? ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 146, $this->source); })())) : ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent") . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 146))));
            // line 147
            yield "                                              <li class=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 147)) {
                yield "active";
            }
            yield "\">
                                                <a role=\"tab\" data-toggle=\"tab\" href=\"#";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dynamicContent"], "vars", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkText"]) || array_key_exists("linkText", $context) ? $context["linkText"] : (function () { throw new RuntimeError('Variable "linkText" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "</a>
                                              </li>
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
        unset($context['_seq'], $context['_key'], $context['dynamicContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "                                            </ul>
                                        </div>
                                        <div class=\"tab-content pa-md col-xs-9\" id=\"dynamicContentContainer\">
                                          ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "dynamicContent", [], "any", false, false, false, 154));
        foreach ($context['_seq'] as $context["_key"] => $context["dynamicContent"]) {
            // line 155
            yield "                                              ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["dynamicContent"], 'widget');
            yield "
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dynamicContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 162
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.tabs.content", $context);
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto bdr-l\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "subject", [], "any", false, false, false, 169), 'row');
        yield "
                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "name", [], "any", false, false, false, 170), 'row');
        yield "
                ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "preheaderText", [], "any", false, false, false, 171), 'row');
        yield "
                ";
        // line 172
        if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 172, $this->source); })())) {
            // line 173
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "variantSettings", [], "any", false, false, false, 173), 'row');
            yield "
                    ";
            // line 174
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "isPublished", [], "any", false, false, false, 174), 'row');
            yield "
                    <div id=\"scheduleOptions\"";
            // line 175
            yield ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 175, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "publishUp", [], "any", false, false, false, 176), 'row', ["label" => "mautic.core.form.sending.start_at"]);
            yield "
                        ";
            // line 177
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "publishDown", [], "any", false, false, false, 177), 'row', ["label" => "mautic.core.form.sending.stop_at"]);
            yield "
                    </div>
                ";
        } else {
            // line 180
            yield "                    <div id=\"leadList\"";
            yield ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 180, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 181
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "lists", [], "any", false, false, false, 181), 'row');
            yield "
                        ";
            // line 182
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "excludedLists", [], "any", false, false, false, 182), 'row');
            yield "
                    </div>
                    ";
            // line 184
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "category", [], "any", false, false, false, 184), 'row');
            yield "
                    ";
            // line 185
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "language", [], "any", false, false, false, 185), 'row');
            yield "
                    <div id=\"segmentTranslationParent\"";
            // line 186
            yield ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 186, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 187
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "segmentTranslationParent", [], "any", false, false, false, 187), 'row');
            yield "
                    </div>
                    <div id=\"templateTranslationParent\"";
            // line 189
            yield ((("list" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 189, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 190
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "templateTranslationParent", [], "any", false, false, false, 190), 'row');
            yield "
                    </div>
                ";
        }
        // line 193
        yield "
                ";
        // line 194
        if ( !(isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 194, $this->source); })())) {
            // line 195
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "isPublished", [], "any", false, false, false, 195), 'row', ["attr" => ["data-none" => "mautic.core.form.sending_paused", "data-start" => "mautic.core.form.sending_on_scheduled_start", "data-both" => "mautic.core.form.sending_during_scheduled_period", "data-end" => "mautic.core.form.available_until_scheduled_end"]]);
            // line 202
            yield "
                    <div id=\"scheduleOptions\"";
            // line 203
            yield ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 203, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 204
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "publishUp", [], "any", false, false, false, 204), 'row', ["label" => "mautic.core.form.sending.start_at"]);
            yield "
                        ";
            // line 205
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "publishDown", [], "any", false, false, false, 205), 'row', ["label" => "mautic.core.form.sending.stop_at"]);
            yield "
                    </div>

                ";
        }
        // line 209
        yield "
                ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "unsubscribeForm", [], "any", false, false, false, 210), 'row');
        yield "
                ";
        // line 211
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 211, $this->source); })()), "page:preference_center:viewown", [], "array", false, false, false, 211)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 211, $this->source); })()), "page:preference_center:viewother", [], "array", false, false, false, 211)))) {
            // line 212
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "preferenceCenter", [], "any", false, false, false, 212), 'row');
            yield "
                ";
        }
        // line 214
        yield "                <hr/>
                ";
        // line 215
        yield from         $this->loadTemplate("@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig", "@MauticEmail/Email/form.html.twig", 215)->unwrap()->yield($context);
        // line 216
        yield "
            </div>
            <div class=\"hide\">
                ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), 'rest');
        yield "
            </div>
        </div>
    </div>
    ";
        // line 223
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        yield "

    <div id=\"dynamicContentPrototype\" data-prototype=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["dynamicContentPrototype"]) || array_key_exists("dynamicContentPrototype", $context) ? $context["dynamicContentPrototype"] : (function () { throw new RuntimeError('Variable "dynamicContentPrototype" does not exist.', 225, $this->source); })()), 'widget'));
        yield "\"></div>
    ";
        // line 226
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["filterBlockPrototype"]) || array_key_exists("filterBlockPrototype", $context) ? $context["filterBlockPrototype"] : (function () { throw new RuntimeError('Variable "filterBlockPrototype" does not exist.', 226, $this->source); })()), "\\Symfony\\Component\\Form\\FormView")) {
            // line 227
            yield "        <div id=\"filterBlockPrototype\" data-prototype=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filterBlockPrototype"]) || array_key_exists("filterBlockPrototype", $context) ? $context["filterBlockPrototype"] : (function () { throw new RuntimeError('Variable "filterBlockPrototype" does not exist.', 227, $this->source); })()), 'widget'));
            yield "\"></div>
    ";
        }
        // line 229
        yield "    ";
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["filterSelectPrototype"]) || array_key_exists("filterSelectPrototype", $context) ? $context["filterSelectPrototype"] : (function () { throw new RuntimeError('Variable "filterSelectPrototype" does not exist.', 229, $this->source); })()), "\\Symfony\\Component\\Form\\FormView")) {
            // line 230
            yield "        <div id=\"filterSelectPrototype\" data-prototype=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filterSelectPrototype"]) || array_key_exists("filterSelectPrototype", $context) ? $context["filterSelectPrototype"] : (function () { throw new RuntimeError('Variable "filterSelectPrototype" does not exist.', 230, $this->source); })()), 'widget'));
            yield "\"></div>
    ";
        }
        // line 232
        yield "
    <div class=\"hide\" id=\"templates\">
        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 234, $this->source); })()));
        foreach ($context['_seq'] as $context["dataKey"] => $context["template"]) {
            // line 235
            yield "            ";
            $context["attr"] = ((("tags" == $context["dataKey"])) ? (((((" data-placeholder=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mautic"]) || array_key_exists("mautic", $context) ? $context["mautic"] : (function () { throw new RuntimeError('Variable "mautic" does not exist.', 235, $this->source); })()), "lead", [], "any", false, false, false, 235), "tags", [], "any", false, false, false, 235), "select_or_create", [], "any", false, false, false, 235))) . "\" data-no-results-text=\"") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mautic"]) || array_key_exists("mautic", $context) ? $context["mautic"] : (function () { throw new RuntimeError('Variable "mautic" does not exist.', 235, $this->source); })()), "lead", [], "any", false, false, false, 235), "tags", [], "any", false, false, false, 235), "enter_to_create", [], "any", false, false, false, 235))) . "\" data-allow-add=\"true\" onchange=\"Mautic.createLeadTag(this)\"")) : (""));
            // line 236
            yield "            <select class=\"form-control not-chosen ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["template"], "html", null, true);
            yield "\"
                    name=\"emailform[dynamicContent][__dynamicContentIndex__][filters][__dynamicContentFilterIndex__][filters][__name__][filter]\"
                    id=\"emailform_dynamicContent___dynamicContentIndex___filters___dynamicContentFilterIndex___filters___name___filter\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 238, $this->source); })()), "html", null, true);
            yield ">
                ";
            // line 239
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 239), $context["dataKey"], [], "array", true, true, false, 239)) {
                // line 240
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "vars", [], "any", false, false, false, 240), $context["dataKey"], [], "array", false, false, false, 240));
                foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                    // line 241
                    yield "                        ";
                    if (is_iterable($context["label"])) {
                        // line 242
                        yield "                            <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">
                                ";
                        // line 243
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["label"]);
                        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
                            // line 244
                            yield "                                    <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionValue"], "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionLabel"], "html", null, true);
                            yield "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['optionValue'], $context['optionLabel'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 246
                        yield "                            </optgroup>
                        ";
                    } else {
                        // line 248
                        yield "                            ";
                        if ((("lists" != $context["dataKey"]) || ( !array_key_exists("currentListId", $context) || ($context["value"] != (isset($context["currentListId"]) || array_key_exists("currentListId", $context) ? $context["currentListId"] : (function () { throw new RuntimeError('Variable "currentListId" does not exist.', 248, $this->source); })()))))) {
                            // line 249
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                            yield "</option>
                            ";
                        }
                        // line 251
                        yield "                        ";
                    }
                    // line 252
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                yield "                ";
            }
            // line 254
            yield "            </select>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['dataKey'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        yield "    </div>";
        // line 257
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/builder.html.twig", ["type" => "email", "isCodeMode" =>         // line 259
(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 259, $this->source); })()), "sectionForm" =>         // line 260
(isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 260, $this->source); })()), "builderAssets" =>         // line 261
(isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 261, $this->source); })()), "slots" =>         // line 262
(isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 262, $this->source); })()), "sections" =>         // line 263
(isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 263, $this->source); })()), "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 264
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 264, $this->source); })()), "sessionId", [], "any", false, false, false, 264), "previewUrl" =>         // line 265
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 265, $this->source); })()), "draftPreviewUrl" =>         // line 266
(isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 266, $this->source); })())], false);
        // line 269
        $context["typeTwoDifferences"] = ["mautic.email.type.segment.differences.1st", "mautic.email.type.segment.differences.2nd", "mautic.email.type.segment.differences.3rd", "mautic.email.type.segment.differences.4th"];
        // line 270
        yield "    ";
        $context["typeOneDifferences"] = ["mautic.email.type.template.differences.1st", "mautic.email.type.template.differences.2nd", "mautic.email.type.template.differences.3rd", "mautic.email.type.template.differences.4th"];
        // line 271
        yield "
    ";
        // line 272
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 272, $this->source); })()), "emailType", [], "any", false, false, false, 272);
        // line 273
        yield "    ";
        if ((((((( !        // line 275
array_key_exists("updateSelect", $context) || (array_key_exists("updateSelect", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["updateSelect"]) || array_key_exists("updateSelect", $context) ? $context["updateSelect"] : (function () { throw new RuntimeError('Variable "updateSelect" does not exist.', 275, $this->source); })())))) &&  !        // line 276
(isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 276, $this->source); })())) &&  !$this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(        // line 277
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()))) &&  !        // line 278
(isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 278, $this->source); })())) || Twig\Extension\CoreExtension::testEmpty(        // line 280
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 280, $this->source); })()))) || (        // line 281
array_key_exists("forceTypeSelection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forceTypeSelection"]) || array_key_exists("forceTypeSelection", $context) ? $context["forceTypeSelection"] : (function () { throw new RuntimeError('Variable "forceTypeSelection" does not exist.', 281, $this->source); })()))))) {
            // line 284
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 285
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 285, $this->source); })()), "mauticLang" => ["newListEmail" => "mautic.email.type.list.header", "newTemplateEmail" => "mautic.email.type.template.header"], "typePrefix" => "email", "cancelUrl" => "mautic_email_index", "header" => "mautic.email.type.header", "typeOneHeader" => "mautic.email.type.template.header", "typeOneIconClass" => "ri-mail-send-fill", "typeOneDifferences" =>             // line 295
(isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 295, $this->source); })()), "typeOneOnClick" => "Mautic.selectEmailType('template');", "typeTwoHeader" => "mautic.email.type.list.header", "typeTwoIconClass" => "ri-pie-chart-fill", "typeTwoDifferences" =>             // line 299
(isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 299, $this->source); })()), "typeTwoOnClick" => "Mautic.selectEmailType('list');"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/form.html.twig";
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
        return array (  659 => 299,  658 => 295,  657 => 285,  656 => 284,  654 => 281,  653 => 280,  652 => 278,  651 => 277,  650 => 276,  649 => 275,  647 => 273,  645 => 272,  642 => 271,  639 => 270,  637 => 269,  635 => 266,  634 => 265,  633 => 264,  632 => 263,  631 => 262,  630 => 261,  629 => 260,  628 => 259,  627 => 257,  625 => 256,  618 => 254,  615 => 253,  609 => 252,  606 => 251,  598 => 249,  595 => 248,  591 => 246,  580 => 244,  576 => 243,  571 => 242,  568 => 241,  563 => 240,  561 => 239,  557 => 238,  551 => 236,  548 => 235,  544 => 234,  540 => 232,  534 => 230,  531 => 229,  525 => 227,  523 => 226,  519 => 225,  514 => 223,  507 => 219,  502 => 216,  500 => 215,  497 => 214,  491 => 212,  489 => 211,  485 => 210,  482 => 209,  475 => 205,  471 => 204,  467 => 203,  464 => 202,  461 => 195,  459 => 194,  456 => 193,  450 => 190,  446 => 189,  441 => 187,  437 => 186,  433 => 185,  429 => 184,  424 => 182,  420 => 181,  415 => 180,  409 => 177,  405 => 176,  401 => 175,  397 => 174,  392 => 173,  390 => 172,  386 => 171,  382 => 170,  378 => 169,  368 => 162,  361 => 157,  352 => 155,  348 => 154,  343 => 151,  324 => 148,  317 => 147,  314 => 146,  311 => 145,  294 => 144,  291 => 143,  289 => 128,  275 => 117,  269 => 114,  261 => 109,  251 => 102,  247 => 101,  238 => 95,  232 => 92,  224 => 87,  218 => 84,  211 => 80,  205 => 77,  201 => 76,  197 => 75,  193 => 74,  189 => 73,  183 => 69,  181 => 67,  180 => 66,  179 => 64,  175 => 62,  165 => 55,  160 => 53,  156 => 52,  151 => 50,  145 => 47,  132 => 38,  125 => 37,  116 => 33,  114 => 32,  111 => 31,  105 => 29,  99 => 27,  96 => 26,  89 => 25,  78 => 4,  73 => 2,  71 => 24,  69 => 23,  67 => 22,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 8,  53 => 7,  51 => 6,  49 => 1,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/form.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Email/form.html.twig");
    }
}
