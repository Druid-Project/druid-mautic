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

/* @MauticCore/Helper/builder.html.twig */
class __TwigTemplate_daea7d32b59ff89fbe866d66bca60f8f extends Template
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
        yield "<div class=\"hide builder ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "-builder ";
        if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 12, $this->source); })())) {
            yield "code-mode";
        }
        yield "\">
    <script type=\"text/html\" data-builder-assets>
        ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "
    </script>
    <div class=\"builder-content\">
        <input type=\"hidden\" id=\"builder_url\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((("mautic_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })())) . "_action"), ["objectAction" => "builder", "objectId" => (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 17, $this->source); })())]), "html", null, true);
        yield "\" />
    </div>
    <div class=\"builder-panel\">
        <div class=\"builder-panel-top\">
            ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/builder_buttons.html.twig", ["onclick" => (("Mautic.closeBuilder('" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 21, $this->source); })())) . "');"), "draftDetail" => ((array_key_exists("draftDetail", $context)) ? ((isset($context["draftDetail"]) || array_key_exists("draftDetail", $context) ? $context["draftDetail"] : (function () { throw new RuntimeError('Variable "draftDetail" does not exist.', 21, $this->source); })())) : (null))], false);
        yield "

            <div class=\"code-mode-toolbar ";
        // line 23
        if ( !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 23, $this->source); })())) {
            yield "hide";
        }
        yield "\">
                <button class=\"btn btn-ghost btn-nospin\" onclick=\"Mautic.openMediaManager()\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.media.manager.desc"), "html", null, true);
        yield "\">
                    <i class=\"ri-image-circle-line\"></i>
                    ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.media.manager"), "html", null, true);
        yield "
                </button>
                <button class=\"btn btn-ghost btn-nospin\" onclick=\"Mautic.formatCode()\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.format.code.desc"), "html", null, true);
        yield "\">
                    <i class=\"ri-indent-increase\"></i>
                    ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.format.code"), "html", null, true);
        yield "
                </button>
            </div>
        </div>

        ";
        // line 35
        if ((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 35, $this->source); })())) {
            // line 36
            yield "            <div class=\"panel panel-default\" id=\"preview\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.urlvariant"), "html", null, true);
            yield "</h4>
                </div>
                <div class=\"panel-body\">
                    <div id=\"public-preview-container\" class=\"col-md-12\">
                        <div class=\"input-group\">
                            <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 43, $this->source); })()), "html", null, true);
            yield "\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-ghost btn-nospin\" onclick=\"window.open('";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "', '_blank');\">
                                    <i class=\"ri-external-link-line\"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 54
        yield "        ";
        if ((array_key_exists("draftPreviewUrl", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 54, $this->source); })())))) {
            // line 55
            yield "        <div class=\"panel panel-default\" id=\"preview\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.drafturlvariant"), "html", null, true);
            yield "</h4>
            </div>
            <div class=\"panel-body\">
                <div id=\"public-preview-container\" class=\"col-md-12\">
                    <div class=\"input-group\">
                        <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\"
                               readonly
                               value=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "\"/>
                        <span class=\"input-group-btn\">
                                <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["draftPreviewUrl"]) || array_key_exists("draftPreviewUrl", $context) ? $context["draftPreviewUrl"] : (function () { throw new RuntimeError('Variable "draftPreviewUrl" does not exist.', 66, $this->source); })()), "html", null, true);
            yield "', '_blank');\">
                                    <i class=\"fa fa-external-link\"></i>
                                </button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 75
        yield "        <div class=\"code-editor ";
        if ( !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 75, $this->source); })())) {
            yield "hide";
        }
        yield "\">
            <div id=\"customHtmlContainer\"></div>
            <i class=\"text-muted\">";
        // line 77
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.code.mode.token.dropdown.hint"));
        yield "</i>
        </div>
        <div class=\"builder-toolbar ";
        // line 79
        if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 79, $this->source); })())) {
            yield "hide";
        }
        yield "\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.slot.types"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 85
        if ((array_key_exists("slots", $context) && is_iterable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 85, $this->source); })())))) {
            // line 86
            yield "                        <div id=\"slot-type-container\" class=\"col-md-12\">
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["slotKey"] => $context["slot"]) {
                // line 88
                yield "                                <div class=\"slot-type-handle btn btn-ghost btn-lg btn-nospin\" data-slot-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["slotKey"], "html", null, true);
                yield "\">
                                    <i class=\"fa fa-";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "icon", [], "any", false, false, false, 89), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                                    <br>
                                    <span class=\"slot-caption\">";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "header", [], "any", false, false, false, 91);
                yield "</span>
                                    <!-- slot template: \"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "content", [], "any", false, false, false, 92), "html", null, true);
                yield "\" -->
                                    <script type=\"text/html\">";
                // line 94
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "content", [], "any", false, false, false, 94), ((CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "params", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "params", [], "any", false, false, false, 94), [])) : ([])), false);
                // line 95
                yield "</script>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['slotKey'], $context['slot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        }
        // line 101
        yield "                    <p class=\"text-muted pt-md text-center\"><i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.drag.info"), "html", null, true);
        yield "</i></p>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.section.types"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 110
        if ((array_key_exists("sections", $context) && is_iterable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 110, $this->source); })())))) {
            // line 111
            yield "                        <div id=\"section-type-container\" class=\"col-md-12\">
                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 112, $this->source); })()));
            foreach ($context['_seq'] as $context["sectionKey"] => $context["section"]) {
                // line 113
                yield "                                <div class=\"section-type-handle btn btn-ghost btn-lg btn-nospin\" data-section-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sectionKey"], "html", null, true);
                yield "\">
                                    <i class=\"fa fa-";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "icon", [], "any", false, false, false, 114), "html", null, true);
                yield "\" aria-hidden=\"true\"></i>
                                    <br>
                                    <span class=\"slot-caption\">";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "header", [], "any", false, false, false, 116), "html", null, true);
                yield "</span>
                                    <!-- section template: \"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "content", [], "any", false, false, false, 117), "html", null, true);
                yield "\" -->
                                    <script type=\"text/html\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "content", [], "any", false, false, false, 119), array(), false));
                // line 120
                yield "</script>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['sectionKey'], $context['section'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        }
        // line 126
        yield "                    <p class=\"text-muted pt-md text-center\"><i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.drag.info"), "html", null, true);
        yield "</i></p>
                </div>
            </div>

            <div class=\"panel panel-default\" id=\"customize-slot-panel\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.customize.slot"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"panel-body\" id=\"customize-form-container\">
                    <div id=\"slot-form-container\" class=\"col-md-12\">
                        <p class=\"text-muted pt-md text-center\">
                            <i>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.slot.customize.info"), "html", null, true);
        yield "</i>
                        </p>
                    </div>
                    ";
        // line 140
        if ((array_key_exists("slots", $context) && is_iterable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 140, $this->source); })())))) {
            // line 141
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["slotKey"] => $context["slot"]) {
                // line 142
                yield "                            <script type=\"text/html\" data-slot-type-form=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["slotKey"], "html", null, true);
                yield "\">
                                ";
                // line 143
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "form", [], "any", false, false, false, 143), 'form');
                yield "
                            </script>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['slotKey'], $context['slot'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "                    ";
        }
        // line 147
        yield "                </div>
            </div>
            <div class=\"panel panel-default\" id=\"section\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.customize.section"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"panel-body\" id=\"customize-form-container\">
                    <div id=\"section-form-container\" class=\"col-md-12\">
                        <p class=\"text-muted pt-md text-center\">
                            <i>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.section.customize.info"), "html", null, true);
        yield "</i>
                        </p>
                    </div>
                    <script type=\"text/html\" data-section-form>
                        ";
        // line 160
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 160, $this->source); })()), 'form');
        yield "
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/builder.html.twig";
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
        return array (  360 => 160,  353 => 156,  345 => 151,  339 => 147,  336 => 146,  327 => 143,  322 => 142,  317 => 141,  315 => 140,  309 => 137,  301 => 132,  291 => 126,  286 => 123,  278 => 120,  276 => 119,  272 => 117,  268 => 116,  263 => 114,  258 => 113,  254 => 112,  251 => 111,  249 => 110,  243 => 107,  233 => 101,  228 => 98,  220 => 95,  218 => 94,  214 => 92,  210 => 91,  205 => 89,  200 => 88,  196 => 87,  193 => 86,  191 => 85,  185 => 82,  177 => 79,  172 => 77,  164 => 75,  152 => 66,  147 => 64,  137 => 57,  133 => 55,  130 => 54,  118 => 45,  113 => 43,  105 => 38,  101 => 36,  99 => 35,  91 => 30,  86 => 28,  81 => 26,  76 => 24,  70 => 23,  65 => 21,  58 => 17,  52 => 14,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/builder.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/builder.html.twig");
    }
}
