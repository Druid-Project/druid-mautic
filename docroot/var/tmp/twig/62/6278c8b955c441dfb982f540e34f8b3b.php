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

/* @MauticCore/Helper/theme_select.html.twig */
class __TwigTemplate_5239015023c89c3cc5f1028bb17bbf64 extends Template
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
        $context["codeMode"] = "mautic_code_mode";
        // line 8
        $context["isCodeMode"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 8, $this->source); })()) == (isset($context["codeMode"]) || array_key_exists("codeMode", $context) ? $context["codeMode"] : (function () { throw new RuntimeError('Variable "codeMode" does not exist.', 8, $this->source); })()));
        // line 9
        if ((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "  <div class=\"row\">
      <div class=\"col-md-3 theme-list\">
          <div class=\"panel panel-default ";
            // line 12
            if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 12, $this->source); })())) {
                yield "theme-selected";
            }
            yield "\">
              <div class=\"panel-body text-center\">
                  <h3>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.code.mode"), "html", null, true);
            yield "</h3>
                  <div class=\"panel-body text-center\" style=\"height: 250px\">
                      <i class=\"ri-code-s-slash-line ri-5x text-muted\" aria-hidden=\"true\" style=\"padding-top: 75px; color: #E4E4E4;\"></i>
                  </div>
                  ";
            // line 18
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/theme_select.html.twig", 18)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => "#", "label" => "mautic.core.select", "variant" => "ghost", "attributes" => ["type" => "button", "data-theme" =>             // line 26
(isset($context["codeMode"]) || array_key_exists("codeMode", $context) ? $context["codeMode"] : (function () { throw new RuntimeError('Variable "codeMode" does not exist.', 26, $this->source); })()), "class" => ("select-theme-link" . ((            // line 27
(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 27, $this->source); })())) ? (" hide") : (""))), "onclick" => "mQuery('#dynamic-content-tab').removeClass('hidden')"]], ["label" => "mautic.core.form.filters.selected", "variant" => "ghost", "attributes" => ["type" => "button", "class" => ("select-theme-selected" . (( !            // line 36
(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 36, $this->source); })())) ? (" hide") : (""))), "disabled" => "disabled"]]]]));
            // line 42
            yield "              </div>
          </div>
      </div>
      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 45, $this->source); })()));
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
            foreach ($context['_seq'] as $context["themeKey"] => $context["themeInfo"]) {
                // line 46
                yield "          ";
                $context["isSelected"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 46, $this->source); })()) === $context["themeKey"]);
                // line 47
                yield "          ";
                if ((( !(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 47, $this->source); })()) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "config", [], "any", false, true, false, 47), "features", [], "any", true, true, false, 47)) || CoreExtension::inFilter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 47, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "config", [], "any", false, false, false, 47), "features", [], "any", false, false, false, 47)))) {
                    // line 48
                    yield "            ";
                    if ($this->env->getTest('file')->getCallable()((((CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "dir", [], "any", false, false, false, 48) . "/thumbnail_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 48, $this->source); })())) . ".png"))) {
                        // line 49
                        yield "                ";
                        [$context["thumbnailName"], $context["hasThumbnail"]] =                         [(("thumbnail_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 49, $this->source); })())) . ".png"), true];
                        // line 50
                        yield "            ";
                    } else {
                        // line 51
                        yield "                ";
                        $context["thumbnailName"] = "thumbnail.png";
                        // line 52
                        yield "                ";
                        $context["hasThumbnail"] = $this->env->getFunction('is_file')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "dir", [], "any", false, false, false, 52) . "/") . (isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 52, $this->source); })())));
                        // line 53
                        yield "            ";
                    }
                    // line 54
                    yield "            ";
                    $context["thumbnailUrl"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(((((CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "themesLocalDir", [], "any", false, false, false, 54) . "/") . $context["themeKey"]) . "/") . (isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 54, $this->source); })())));
                    // line 55
                    yield "            <div class=\"col-md-3 theme-list ";
                    yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "visibility", [], "any", false, true, false, 55), "hidden", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "visibility", [], "any", false, true, false, 55), "hidden", [], "any", false, false, false, 55), false)) : (false)))) ? ("") : ("hide"));
                    yield "\">
                <div class=\"panel panel-default ";
                    // line 56
                    if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 56, $this->source); })())) {
                        yield "theme-selected";
                    }
                    yield "\">
                    <div class=\"panel-body text-center\">
                        <h3>";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "name", [], "any", false, false, false, 58), "html", null, true);
                    yield "</h3>
                        ";
                    // line 59
                    if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 59, $this->source); })())) {
                        // line 60
                        yield "                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#theme-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\">
                                <div style=\"background-image: url(";
                        // line 61
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 61, $this->source); })()), "html", null, true);
                        yield ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 250px\"></div>
                            </a>
                        ";
                    } else {
                        // line 64
                        yield "                            <div class=\"panel-body text-center\" style=\"height: 250px\">
                                <i class=\"ri-file-image-line ri-5x text-muted\" aria-hidden=\"true\" style=\"padding-top: 75px; color: #E4E4E4;\"></i>
                            </div>
                        ";
                    }
                    // line 68
                    yield "                        ";
                    yield from                     $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Helper/theme_select.html.twig", 68)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => "#", "label" => "mautic.core.select", "variant" => "ghost", "attributes" => ["type" => "button", "data-theme" =>                     // line 76
$context["themeKey"], "class" => ("select-theme-link" . ((                    // line 77
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 77, $this->source); })())) ? (" hide") : (""))), "onclick" => "mQuery('#dynamic-content-tab').addClass('hidden')"]], ["label" => "mautic.core.form.filters.selected", "variant" => "ghost", "attributes" => ["type" => "button", "class" => ("select-theme-selected" . (( !                    // line 86
(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 86, $this->source); })())) ? (" hide") : (""))), "disabled" => ""]]]]));
                    // line 92
                    yield "                    </div>
                </div>
                ";
                    // line 94
                    if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 94, $this->source); })())) {
                        // line 95
                        yield "                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"theme-";
                        // line 96
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "name", [], "any", false, false, false, 101), "html", null, true);
                        yield "</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div style=\"background-image: url(";
                        // line 104
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 104, $this->source); })()), "html", null, true);
                        yield ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 600px\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                    }
                    // line 110
                    yield "            </div>
          ";
                }
                // line 112
                yield "      ";
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
            unset($context['_seq'], $context['themeKey'], $context['themeInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "      <div class=\"clearfix\"></div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/theme_select.html.twig";
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
        return array (  215 => 113,  201 => 112,  197 => 110,  188 => 104,  180 => 101,  170 => 96,  167 => 95,  165 => 94,  161 => 92,  159 => 86,  158 => 77,  157 => 76,  155 => 68,  149 => 64,  143 => 61,  138 => 60,  136 => 59,  132 => 58,  125 => 56,  120 => 55,  117 => 54,  114 => 53,  111 => 52,  108 => 51,  105 => 50,  102 => 49,  99 => 48,  96 => 47,  93 => 46,  76 => 45,  71 => 42,  69 => 36,  68 => 27,  67 => 26,  66 => 18,  59 => 14,  52 => 12,  48 => 10,  46 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/theme_select.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/theme_select.html.twig");
    }
}
