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

/* @MauticFocus/Focus/form.html.twig */
class __TwigTemplate_7543994189a8257d49b34cd586befb5f extends Template
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
        // line 3
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticFocus/Focus/form.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "focus";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)) {
            // line 9
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9))]), "html", null, true);
            yield "
  ";
        } else {
            // line 11
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeStylesheet("plugins/MauticFocusBundle/Assets/css/focus.css");
        yield "
  ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        yield "
    <!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- container -->
        <div class=\"col-md-9 height-auto bdr-r pa-md\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "website", [], "any", false, false, false, 24), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'row');
        yield "</div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "category", [], "any", false, false, false, 32), 'row');
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "isPublished", [], "any", false, false, false, 33), 'row');
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "publishUp", [], "any", false, false, false, 34), 'row');
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "publishDown", [], "any", false, false, false, 35), 'row');
        yield "
                <hr />
                ";
        // line 37
        yield from         $this->loadTemplate("@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig", "@MauticFocus/Focus/form.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "            </div>
        </div>
    </div>

    <div class=\"hide builder focus-builder\">
        <div class=\"builder-content\">
            <div class=\"website-preview\">

                <!-- Form to get preview URL -->
                <div class=\"website-placeholder hide well well-lg col-md-6 col-md-offset-3\">
                    <div class=\"row\">
                        <div class=\"mautibot-image col-xs-3 text-center\">
                            <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
        // line 50
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
        yield "\"/>
                        </div>
                        <div class=\"col-xs-9\">
                            <h4><i class=\"ri-double-quotes-l\"></i> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.noresults.tip"), "html", null, true);
        yield "
                                <i class=\"ri-double-quotes-r\"></i></h4>
                            <p class=\"mt-md\">
                                ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.website_placeholder"), "html", null, true);
        yield "
                            </p>
                            <div class=\"input-group\">
                                <input id=\"websiteUrlPlaceholderInput\" disabled type=\"text\" class=\"form-control\" placeholder=\"https://example.com\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-ghost btn-fetch\" type=\"button\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.fetch_snapshot"), "html", null, true);
        yield "</button>
                                </span>
                            </div>
                            <div class=\"help-block hide\"></div>
                        </div>
                    </div>
                </div>

                <!-- Viewport switcher -->
                <div class=\"viewport-switcher text-center\">
                    <div class=\"btn btn-sm btn-success btn-nospin btn-viewport\" data-viewport=\"desktop\">
                        <i class=\"ri-smartphone-line ri-2x\"></i>
                    </div>
                </div>

                <!-- Website preview block -->
                <div id=\"websiteScreenshot\">
                    <div class=\"screenshot-container text-center\">
                        <div class=\"preview-body center\"></div>
                        <div id=\"websiteCanvas\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Builder -->
        <div class=\"builder-panel builder-panel-focus\">
            <div class=\"builder-panel-top\">
                <p>
                    <button type=\"button\" class=\"btn btn-primary btn-close-builder btn-block\" onclick=\"Mautic.closeFocusBuilder(this);\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        yield "</button>
                </p>
            </div>
            ";
        // line 93
        $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, true, false, 93), "vars", [], "any", false, true, false, 93), "data", [], "any", true, true, false, 93) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "type", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "data", [], "any", false, false, false, 93)))) ? (("focus-type-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "type", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "data", [], "any", false, false, false, 93))) : ("focus-type-all"));
        // line 94
        yield "            ";
        $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, true, false, 94), "vars", [], "any", false, true, false, 94), "data", [], "any", true, true, false, 94) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "style", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "data", [], "any", false, false, false, 94)))) ? ((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 94, $this->source); })()) . " focus-style-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "style", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "data", [], "any", false, false, false, 94))) : (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 94, $this->source); })()) . " focus-style-all")));
        // line 95
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 95, $this->source); })()), "html", null, true);
        yield "\" style=\"margin-top: 40px;\" id=\"focusFormContent\">
                <!-- start focus type -->
                <div class=\"panel panel-default\" id=\"focusType\">
                    <div class=\"panel-heading\">
                        <h4 class=\"focus-type-header panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusTypePanel\" aria-expanded=\"true\" aria-controls=\"focusTypePanel\">
                                <i class=\"ri-focus-2-line\"></i> ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusTypePanel\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "type", [], "any", false, false, false, 106), 'widget');
        yield "
                        <ul class=\"list-group mb-0 bdr-w-0\">
                            <li data-focus-type=\"form\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"ri-2x ri-edit-box-line text-primary\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.form"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.form_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-form-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-type=\"notice\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"ri-2x ri-megaphone-line text-warning\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.notice"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.notice_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-notice-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-type=\"link\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"ri-2x ri-corner-up-right-line text-info\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.link"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.link_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-link-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>
                        </ul>
                    </div>

                    <div class=\"hide\" id=\"focusTypeProperties\">
                        ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "properties", [], "any", false, false, false, 153), "animate", [], "any", false, false, false, 153), 'row');
        yield "
                        ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "properties", [], "any", false, false, false, 154), "when", [], "any", false, false, false, 154), 'row');
        yield "
                        ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "properties", [], "any", false, false, false, 155), "timeout", [], "any", false, false, false, 155), 'row');
        yield "
                        ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "properties", [], "any", false, false, false, 156), "link_activation", [], "any", false, false, false, 156), 'row');
        yield "
                        ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "properties", [], "any", false, false, false, 157), "frequency", [], "any", false, false, false, 157), 'row');
        yield "
                        <div class=\"hidden-focus-type-notice\">
                            ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "properties", [], "any", false, false, false, 159), "stop_after_conversion", [], "any", false, false, false, 159), 'row');
        yield "
                        </div>
                        ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "properties", [], "any", false, false, false, 161), "stop_after_close", [], "any", false, false, false, 161), 'row');
        yield "
                    </div>
                </div>
                <!-- end focus type -->

                <!-- start focus type tab -->
                <div class=\"panel panel-default\" id=\"focusStyle\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title focus-style-header\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusStylePanel\" aria-expanded=\"true\" aria-controls=\"focusStylePanel\">
                                <i class=\"ri-mac-line\"></i> ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.style"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusStylePanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <ul class=\"list-group mb-0 bdr-w-0\">
                            <li data-focus-style=\"bar\" class=\"focus-style visible-focus-style-bar list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"pl-2 ri-2x ri-subtract-line text-primary\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.bar"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.bar_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"focus-properties focus-bar-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-style=\"modal\" class=\"focus-style visible-focus-style-modal list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"ri-2x ri-file-list-2-line text-warning\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.modal"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.modal_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"focus-properties focus-modal-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-style=\"notification\" class=\"focus-style visible-focus-style-notification list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"pl-2 ri-2x ri-information-2-line text-info\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.notification"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.notification_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"focus-properties focus-notification-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-style=\"page\" class=\"focus-style visible-focus-style-page list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"pl-2 ri-2x ri-square-line text-danger\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.page"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.page_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class=\"focus-properties focus-page-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li> -->
                        </ul>
                    </div>

                    <div class=\"hide\" id=\"focusStyleProperties\">
                        <!-- bar type properties -->
                        <div class=\"focus-hide visible-focus-style-bar\">
                            ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "properties", [], "any", false, false, false, 234), "bar", [], "any", false, false, false, 234), "allow_hide", [], "any", false, false, false, 234), 'row');
        yield "
                            ";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "properties", [], "any", false, false, false, 235), "bar", [], "any", false, false, false, 235), "push_page", [], "any", false, false, false, 235), 'row');
        yield "
                            ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "properties", [], "any", false, false, false, 236), "bar", [], "any", false, false, false, 236), "sticky", [], "any", false, false, false, 236), 'row');
        yield "
                            ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "properties", [], "any", false, false, false, 237), "bar", [], "any", false, false, false, 237), "placement", [], "any", false, false, false, 237), 'row');
        yield "
                            ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "properties", [], "any", false, false, false, 238), "bar", [], "any", false, false, false, 238), "size", [], "any", false, false, false, 238), 'row');
        yield "
                        </div>

                        <!-- modal type properties -->
                        <div class=\"focus-hide visible-focus-style-modal\">
                            ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "properties", [], "any", false, false, false, 243), "modal", [], "any", false, false, false, 243), "placement", [], "any", false, false, false, 243), 'row');
        yield "
                        </div>

                        <!-- notifications type properties -->
                        <div class=\"focus-hide visible-focus-style-notification\">
                            ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "properties", [], "any", false, false, false, 248), "notification", [], "any", false, false, false, 248), "placement", [], "any", false, false, false, 248), 'row');
        yield "
                        </div>

                        <!-- page type properties -->
                        <!-- <div class=\"focus-hide visible-focus-style-page\"></div> -->
                    </div>
                </div>
                <!-- end focus style -->

                <!-- start focus colors -->
                <div class=\"panel panel-default\" id=\"focusColors\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusColorsPanel\" aria-expanded=\"true\" aria-controls=\"focusColorsPanel\">
                                <i class=\"ri-paint-brush-line\"></i> ";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.tab.focus_colors"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusColorsPanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <div class=\"panel-body pa-xs\">
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 \">
                                    ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "properties", [], "any", false, false, false, 270), "colors", [], "any", false, false, false, 270), "primary", [], "any", false, false, false, 270), 'label');
        yield "
                                    <div class=\"input-group\">
                                        ";
        // line 272
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "properties", [], "any", false, false, false, 272), "colors", [], "any", false, false, false, 272), "primary", [], "any", false, false, false, 272), 'widget');
        yield "
                                        <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_primary\" class=\"btn btn-ghost btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-dropper-line\"></i></button>
                                    </span>
                                    </div>
                                    <div class=\"mt-xs site-color-list hide\" id=\"primary_site_colors\"></div>
                                    ";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "properties", [], "any", false, false, false, 278), "colors", [], "any", false, false, false, 278), "primary", [], "any", false, false, false, 278), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 \">
                                    ";
        // line 284
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "properties", [], "any", false, false, false, 284), "colors", [], "any", false, false, false, 284), "text", [], "any", false, false, false, 284), 'label');
        yield "
                                    <div class=\"input-group\">
                                        ";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "properties", [], "any", false, false, false, 286), "colors", [], "any", false, false, false, 286), "text", [], "any", false, false, false, 286), 'widget');
        yield "
                                        <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_text\" class=\"btn btn-ghost btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-dropper-line\"></i></button>
                                    </span>
                                    </div>
                                    <div class=\"mt-xs site-color-list hide\" id=\"text_site_colors\"></div>
                                    ";
        // line 292
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "properties", [], "any", false, false, false, 292), "colors", [], "any", false, false, false, 292), "text", [], "any", false, false, false, 292), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"hidden-focus-type-notice\">

                                <div class=\"row\">
                                    <div class=\"form-group col-xs-12 \">
                                        ";
        // line 300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "properties", [], "any", false, false, false, 300), "colors", [], "any", false, false, false, 300), "button", [], "any", false, false, false, 300), 'label');
        yield "
                                        <div class=\"input-group\">
                                            ";
        // line 302
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "properties", [], "any", false, false, false, 302), "colors", [], "any", false, false, false, 302), "button", [], "any", false, false, false, 302), 'widget');
        yield "
                                            <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_button\" class=\"btn btn-ghost btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-dropper-line\"></i></button>
                                    </span>
                                        </div>
                                        <div class=\"mt-xs site-color-list hide\" id=\"button_site_colors\"></div>
                                        ";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "properties", [], "any", false, false, false, 308), "colors", [], "any", false, false, false, 308), "button", [], "any", false, false, false, 308), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"form-group col-xs-12 \">
                                        ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "properties", [], "any", false, false, false, 314), "colors", [], "any", false, false, false, 314), "button_text", [], "any", false, false, false, 314), 'label');
        yield "
                                        <div class=\"input-group\">
                                            ";
        // line 316
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "properties", [], "any", false, false, false, 316), "colors", [], "any", false, false, false, 316), "button_text", [], "any", false, false, false, 316), 'widget');
        yield "
                                            <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_button_text\" class=\"btn btn-ghost btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-dropper-line\"></i></button>
                                    </span>
                                        </div>
                                        <div class=\"mt-xs site-color-list hide\" id=\"button_text_site_colors\"></div>
                                        ";
        // line 322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "properties", [], "any", false, false, false, 322), "colors", [], "any", false, false, false, 322), "button_text", [], "any", false, false, false, 322), 'errors');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end focus colors -->

                <!-- start focus content -->
                <div class=\"panel panel-default\" id=\"focusContent\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusContentPanel\" aria-expanded=\"true\" aria-controls=\"focusContentPanel\">
                                <i class=\"ri-newspaper-line\"></i> ";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.tab.focus_content"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusContentPanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <div class=\"panel-body pa-xs\">
                            ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "html_mode", [], "any", false, false, false, 342), 'row');
        yield "
                            ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "editor", [], "any", false, false, false, 343), 'row');
        yield "
                            ";
        // line 344
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "html", [], "any", false, false, false, 344), 'row');
        yield "
                            ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "properties", [], "any", false, false, false, 345), "content", [], "any", false, false, false, 345), "headline", [], "any", false, false, false, 345), 'row');
        yield "
                            <div class=\"hidden-focus-style-bar\">
                                ";
        // line 347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "properties", [], "any", false, false, false, 347), "content", [], "any", false, false, false, 347), "tagline", [], "any", false, false, false, 347), 'row');
        yield "
                            </div>
                            ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "properties", [], "any", false, false, false, 349), "content", [], "any", false, false, false, 349), "font", [], "any", false, false, false, 349), 'row');
        yield "

                            <!-- form type properties -->
                            <div class=\"focus-hide visible-focus-type-form\">
                                <div class=\"col-sm-12\" id=\"focusFormAlert\" data-hide-on='{\"focus_html_mode_0\":\"checked\"}'>
                                    <div class=\"alert alert-info\">
                                        ";
        // line 355
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form_token.instructions"));
        yield "
                                    </div>
                                </div>
                                ";
        // line 358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "form", [], "any", false, false, false, 358), 'row');
        yield "
                            </div>

                            <!-- link type properties -->
                            <div class=\"focus-hide visible-focus-type-link\">
                                ";
        // line 363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "properties", [], "any", false, false, false, 363), "content", [], "any", false, false, false, 363), "link_text", [], "any", false, false, false, 363), 'row');
        yield "
                                ";
        // line 364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "properties", [], "any", false, false, false, 364), "content", [], "any", false, false, false, 364), "link_url", [], "any", false, false, false, 364), 'row');
        yield "
                                ";
        // line 365
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "properties", [], "any", false, false, false, 365), "content", [], "any", false, false, false, 365), "link_new_window", [], "any", false, false, false, 365), 'row');
        yield "
                            </div>

                            ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "properties", [], "any", false, false, false, 368), "content", [], "any", false, false, false, 368), "css", [], "any", false, false, false, 368), 'row');
        yield "
                        </div>
                    </div>
                </div>
                <!-- end focus content -->

            </div>
        </div>
    </div>

  ";
        // line 378
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), 'form_end');
        yield "
";
        // line 379
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Focus/form.html.twig";
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
        return array (  686 => 379,  682 => 378,  669 => 368,  663 => 365,  659 => 364,  655 => 363,  647 => 358,  641 => 355,  632 => 349,  627 => 347,  622 => 345,  618 => 344,  614 => 343,  610 => 342,  601 => 336,  584 => 322,  575 => 316,  570 => 314,  561 => 308,  552 => 302,  547 => 300,  536 => 292,  527 => 286,  522 => 284,  513 => 278,  504 => 272,  499 => 270,  488 => 262,  471 => 248,  463 => 243,  455 => 238,  451 => 237,  447 => 236,  443 => 235,  439 => 234,  425 => 223,  421 => 222,  406 => 210,  402 => 209,  387 => 197,  383 => 196,  368 => 184,  364 => 183,  349 => 171,  336 => 161,  331 => 159,  326 => 157,  322 => 156,  318 => 155,  314 => 154,  310 => 153,  297 => 143,  293 => 142,  277 => 129,  273 => 128,  257 => 115,  253 => 114,  242 => 106,  234 => 101,  224 => 95,  221 => 94,  219 => 93,  213 => 90,  181 => 61,  173 => 56,  167 => 53,  161 => 50,  147 => 38,  145 => 37,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  120 => 27,  114 => 24,  110 => 23,  101 => 17,  96 => 16,  89 => 15,  80 => 11,  74 => 9,  71 => 8,  64 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Focus/form.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Focus/form.html.twig");
    }
}
