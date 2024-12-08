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

/* @MauticCore/Theme/list.html.twig */
class __TwigTemplate_3419a190a831642beb9f27117e9ef92a extends Template
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
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Theme/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Theme/index.html.twig", "@MauticCore/Theme/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
    ";
        // line 5
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 5, $this->source); })()))) {
            // line 6
            yield "        <div class=\"table-responsive\">
            <table class=\"table table-hover theme-list\" id=\"themeTable\">
                <thead>
                    <tr>
                        ";
            // line 10
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#themeTable", "langVar" => "core.theme", "routeBase" => "themes", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "core:themes:delete", [], "array", false, false, false, 16)]]);
            // line 18
            yield "

                        ";
            // line 20
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.title"]);
            // line 22
            yield "

                        ";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.author"]);
            // line 26
            yield "

                        ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.features"]);
            // line 30
            yield "

                    </tr>
                </thead>
                <tbody>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 35, $this->source); })()));
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
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 36
                yield "                        ";
                $context["thumbnailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . $context["k"]) . "/thumbnail.png"));
                // line 37
                yield "                        ";
                $context["hasThumbnail"] = $this->env->getTest('file')->getCallable()((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dir", [], "array", false, false, false, 37) . "/thumbnail.png"));
                // line 38
                yield "                        ";
                $context["visibilityButton"] = [];
                // line 39
                yield "                        ";
                $context["visibilityCss"] = "";
                // line 40
                yield "
                        ";
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "visibility", [], "any", true, true, false, 41)) {
                    // line 42
                    yield "                            ";
                    $context["btnText"] = "mautic.core.theme.hide";
                    // line 43
                    yield "                            ";
                    $context["iconClass"] = "ri-eye-off-line";
                    // line 44
                    yield "                            ";
                    $context["message"] = "mautic.core.theme.form.confirm.hide";
                    // line 45
                    yield "                            ";
                    $context["confirmBtnClass"] = "";
                    // line 46
                    yield "
                            ";
                    // line 47
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "visibility", [], "any", false, true, false, 47), "hidden", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "visibility", [], "any", false, true, false, 47), "hidden", [], "any", false, false, false, 47), false)) : (false))) {
                        // line 48
                        yield "                                ";
                        $context["btnText"] = "mautic.core.theme.unhide";
                        // line 49
                        yield "                                ";
                        $context["iconClass"] = "ri-eye-line";
                        // line 50
                        yield "                                ";
                        $context["message"] = "mautic.core.theme.form.confirm.unhide";
                        // line 51
                        yield "                                ";
                        $context["confirmBtnClass"] = "btn btn-success";
                        // line 52
                        yield "                                ";
                        $context["visibilityCss"] = "disabled-row";
                        // line 53
                        yield "                            ";
                    }
                    // line 54
                    yield "
                            ";
                    // line 55
                    $context["visibilityButton"] = ["attr" => ["data-toggle" => "confirmation", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_themes_action", ["objectAction" => "visibility", "objectId" =>                     // line 58
$context["k"]]), "data-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 59
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), ["%theme%" => (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 59) . " (") . $context["k"]) . ")")]), "data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 60
(isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 60, $this->source); })())), "data-confirm-callback" => "executeAction", "data-cancel-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "data-confirm-btn-class" =>                     // line 63
(isset($context["confirmBtnClass"]) || array_key_exists("confirmBtnClass", $context) ? $context["confirmBtnClass"] : (function () { throw new RuntimeError('Variable "confirmBtnClass" does not exist.', 63, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 65
(isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 65, $this->source); })())), "iconClass" =>                     // line 66
(isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 66, $this->source); })()), "priority" =>  -1];
                    // line 69
                    yield "                        ";
                }
                // line 70
                yield "
                        <tr>
                            <td>
                                ";
                // line 73
                $context["item"] = Twig\Extension\CoreExtension::merge($context["item"], ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 73)]);
                // line 74
                yield "                                ";
                $context["previewButtonSettings"] = ["attr" => ["data-toggle" => "modal", "data-target" => ("#theme-" .                 // line 77
$context["k"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.preview"), "iconClass" => "ri-image-line"];
                // line 82
                yield "                                ";
                $context["previewButton"] = (((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 82, $this->source); })())) ? ((isset($context["previewButtonSettings"]) || array_key_exists("previewButtonSettings", $context) ? $context["previewButtonSettings"] : (function () { throw new RuntimeError('Variable "previewButtonSettings" does not exist.', 82, $this->source); })())) : ([]));
                // line 83
                yield "                                ";
                $context["deleteButton"] = ["delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "core:themes:delete", [], "array", false, false, false, 84)];
                // line 86
                yield "                                ";
                $context["templateButtons"] = ((!CoreExtension::inFilter($context["k"], (isset($context["defaultThemes"]) || array_key_exists("defaultThemes", $context) ? $context["defaultThemes"] : (function () { throw new RuntimeError('Variable "defaultThemes" does not exist.', 86, $this->source); })()))) ? ((isset($context["deleteButton"]) || array_key_exists("deleteButton", $context) ? $context["deleteButton"] : (function () { throw new RuntimeError('Variable "deleteButton" does not exist.', 86, $this->source); })())) : ([]));
                // line 87
                yield "
                                ";
                // line 88
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 90
$context["item"], "templateButtons" =>                 // line 91
(isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 91, $this->source); })()), "routeBase" => "themes", "langVar" => "core.theme", "customButtons" => [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_themes_action", ["objectAction" => "download", "objectId" =>                 // line 99
$context["k"]]), "data-toggle" => "0"], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.download"), "iconClass" => "ri-download-line"],                 // line 106
(isset($context["previewButton"]) || array_key_exists("previewButton", $context) ? $context["previewButton"] : (function () { throw new RuntimeError('Variable "previewButton" does not exist.', 106, $this->source); })()),                 // line 107
(isset($context["visibilityButton"]) || array_key_exists("visibilityButton", $context) ? $context["visibilityButton"] : (function () { throw new RuntimeError('Variable "visibilityButton" does not exist.', 107, $this->source); })())]]);
                // line 110
                yield "

                                ";
                // line 112
                if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 112, $this->source); })())) {
                    // line 113
                    yield "                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"theme-";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield "\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 120));
                    yield "</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div style=\"background-image: url(";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 123, $this->source); })()), "html", null, true);
                    yield ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 600px\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                // line 129
                yield "                            </td>
                            <td class=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibilityCss"]) || array_key_exists("visibilityCss", $context) ? $context["visibilityCss"] : (function () { throw new RuntimeError('Variable "visibilityCss" does not exist.', 130, $this->source); })()), "html", null, true);
                yield "\">
                                <div>
                                    ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 132));
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "array", false, false, false, 132));
                yield ")
                                </div>
                            </td>
                            <td class=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibilityCss"]) || array_key_exists("visibilityCss", $context) ? $context["visibilityCss"] : (function () { throw new RuntimeError('Variable "visibilityCss" does not exist.', 135, $this->source); })()), "html", null, true);
                yield "\">
                                <div>
                                    ";
                // line 137
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, true, false, 137), "authorUrl", [], "array", true, true, false, 137) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 137), "authorUrl", [], "array", false, false, false, 137))) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, true, false, 137), "author", [], "array", true, true, false, 137))) {
                    // line 138
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::url(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 138), "authorUrl", [], "array", false, false, false, 138)), "html", null, true);
                    yield "\" target=\"_blank\">
                                            ";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 139), "author", [], "array", false, false, false, 139));
                    yield "
                                        </a>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 141
$context["item"], "config", [], "array", false, true, false, 141), "author", [], "array", true, true, false, 141) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 141), "author", [], "array", false, false, false, 141)))) {
                    // line 142
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 142), "author", [], "array", false, false, false, 142));
                    yield "
                                    ";
                }
                // line 144
                yield "                                </div>
                            </td>
                            <td class=\"visible-md visible-lg ";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibilityCss"]) || array_key_exists("visibilityCss", $context) ? $context["visibilityCss"] : (function () { throw new RuntimeError('Variable "visibilityCss" does not exist.', 146, $this->source); })()), "html", null, true);
                yield "\">
                                <div class=\"d-flex ai-center gap-xs\">
                                    ";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 148), "builder", [], "array", false, false, false, 148));
                foreach ($context['_seq'] as $context["_key"] => $context["builder"]) {
                    // line 149
                    yield "                                    <span style=\"white-space: nowrap;\">
                                        <span class=\"label label-primary\">";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["builder"], "html", null, true);
                    yield "</span>
                                    </span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['builder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, true, false, 153), "features", [], "array", true, true, false, 153) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 153), "features", [], "array", false, false, false, 153)))) {
                    // line 154
                    yield "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 154), "features", [], "array", false, false, false, 154));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 155
                        yield "
                                            <span class=\"label label-gray\">
                                                ";
                        // line 157
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.theme.feature." . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["feature"]))), "html", null, true);
                        yield "
                                            </span>

                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    yield "                                ";
                }
                // line 162
                yield "                                </div>
                            </td>
                        </tr>
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
            unset($context['_seq'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 170
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.theme.noresults.tip"]);
            // line 173
            yield "
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Theme/list.html.twig";
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
        return array (  365 => 173,  362 => 170,  356 => 166,  339 => 162,  336 => 161,  326 => 157,  322 => 155,  317 => 154,  314 => 153,  305 => 150,  302 => 149,  298 => 148,  293 => 146,  289 => 144,  283 => 142,  281 => 141,  276 => 139,  271 => 138,  269 => 137,  264 => 135,  256 => 132,  251 => 130,  248 => 129,  239 => 123,  231 => 120,  220 => 114,  217 => 113,  215 => 112,  211 => 110,  209 => 107,  208 => 106,  207 => 99,  206 => 91,  205 => 90,  204 => 88,  201 => 87,  198 => 86,  196 => 84,  194 => 83,  191 => 82,  189 => 77,  187 => 74,  185 => 73,  180 => 70,  177 => 69,  175 => 66,  174 => 65,  173 => 63,  172 => 60,  171 => 59,  170 => 58,  169 => 55,  166 => 54,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  151 => 49,  148 => 48,  146 => 47,  143 => 46,  140 => 45,  137 => 44,  134 => 43,  131 => 42,  129 => 41,  126 => 40,  123 => 39,  120 => 38,  117 => 37,  114 => 36,  97 => 35,  90 => 30,  88 => 28,  84 => 26,  82 => 24,  78 => 22,  76 => 20,  72 => 18,  70 => 16,  69 => 10,  63 => 6,  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Theme/list.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Theme/list.html.twig");
    }
}
