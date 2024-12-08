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

/* @MauticCore/Modal/keyboard_shortcuts.html.twig */
class __TwigTemplate_5e58cd04830a913a1b0fa55fb3a67058 extends Template
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
        yield "<div class=\"modal fade\" id=\"keyboardShortcutsModal\" tabindex=\"-1\" role=\"dialog\"
  aria-labelledby=\"keyboardShortcutsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-sm\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
        <h4 class=\"modal-title\" id=\"keyboardShortcutsModalLabel\">
          ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.shortcuts"), "html", null, true);
        yield "
        </h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"row-no-gutters\">
          <div class=\"col-md-12\">
            ";
        // line 16
        $context["shortcuts"] = ["navigation" => ["g+d" => "mautic.keyboard.load_dashboard", "g+c" => "mautic.keyboard.load_contacts", "g+e" => "mautic.keyboard.load_emails", "g+f" => "mautic.keyboard.load_forms", "g+s" => "mautic.keyboard.load_segments", "g+p" => "mautic.keyboard.load_landing_pages"], "functions" => ["/" => "mautic.keyboard.list_search", "f+/" => "mautic.keyboard.global_search", "f+n" => "mautic.keyboard.show_notifications", "f+m" => "mautic.keyboard.open_settings"], "actions" => ["e" => "mautic.keyboard.edit", "c" => "mautic.keyboard.create", "⌘+Enter" => "mautic.keyboard.save", "g+i" => "mautic.keyboard.back", "Del / ⌘+⌫" => "mautic.keyboard.delete"]];
        // line 38
        yield "            <h4 class=\"fw-sb\">
              ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.section.global"), "html", null, true);
        yield "
            </h4>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["shortcuts"]) || array_key_exists("shortcuts", $context) ? $context["shortcuts"] : (function () { throw new RuntimeError('Variable "shortcuts" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["section"] => $context["shortcut_list"]) {
            // line 42
            yield "            <h5 class=\"mb-xs mt-md fw-sb\">
              ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.keyboard.section." . $context["section"])), "html", null, true);
            yield "
            </h5>
            <table class=\"shortcut-table bsv-xs\">
              ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["shortcut_list"]);
            foreach ($context['_seq'] as $context["key"] => $context["description"]) {
                // line 47
                yield "              <tr class=\"mb-xs\">
                <td class=\"shortcut-description\">
                  ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["description"]), "html", null, true);
                yield "
                </td>
                <td class=\"shortcut-keys text-right\">
                  ";
                // line 52
                $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["key"], " / ");
                // line 53
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 53, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
                    // line 54
                    yield "                    ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) {
                        // line 55
                        yield "                      / <!-- Add the separator outside of the <kbd> tags -->
                    ";
                    }
                    // line 57
                    yield "                    ";
                    $context["keys"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["part"], "+");
                    // line 58
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 58, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                        // line 59
                        yield "                      ";
                        $context["title"] = "";
                        // line 60
                        yield "                      ";
                        if (($context["k"] == "⌫")) {
                            // line 61
                            yield "                        ";
                            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.backspace");
                            // line 62
                            yield "                      ";
                        } elseif (($context["k"] == "⌘")) {
                            // line 63
                            yield "                        ";
                            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.command");
                            // line 64
                            yield "                     ";
                        }
                        // line 65
                        yield "                  <kbd";
                        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 65, $this->source); })())) {
                            yield " title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 65, $this->source); })()), "html", null, true);
                            yield "\" data-toggle=\"tooltip\" ";
                        }
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        yield "</kbd>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['k'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    yield "                  ";
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
                unset($context['_seq'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "                </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['section'], $context['shortcut_list'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "          </div>
        </div>
      </div>
      <hr />
      <ul class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/KeyboardShortcuts/lead_shortcuts.html.twig", array(), true, true);
        yield "
        ";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticEmail/KeyboardShortcuts/emails_shortcuts.html.twig", array(), true, true);
        yield "
      </ul>
      <div class=\"alert alert-info col-xs-12\">
        <div class=\"d-flex jc-space-between ai-center small\">
          <div> <strong class=\"mr-xs\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.tip"), "html", null, true);
        yield "</strong><kbd>⌘</kbd> <i
              class=\"ri-arrow-right-line\"></i> <kbd>Ctrl</kbd></div>
        </div>
      </div>
      <div class=\"modal-footer\">
        <p>
          ";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.keyboard.press_to_view", ["%shift%" => "", "%question%" => "<kbd>?</kbd>"]);
        yield "
        </p>
      </div>
    </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Modal/keyboard_shortcuts.html.twig";
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
        return array (  226 => 89,  217 => 83,  210 => 79,  206 => 78,  199 => 73,  192 => 71,  184 => 68,  170 => 67,  155 => 65,  152 => 64,  149 => 63,  146 => 62,  143 => 61,  140 => 60,  137 => 59,  132 => 58,  129 => 57,  125 => 55,  122 => 54,  104 => 53,  102 => 52,  96 => 49,  92 => 47,  88 => 46,  82 => 43,  79 => 42,  75 => 41,  70 => 39,  67 => 38,  65 => 16,  56 => 10,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Modal/keyboard_shortcuts.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Modal/keyboard_shortcuts.html.twig");
    }
}
