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

/* @MauticCore/Modal/search_commands.html.twig */
class __TwigTemplate_6de2f4dc0e51edbff6560ab6b0b4b8e6 extends Template
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
        yield "<!-- Search commands modal -->
<div class=\"modal fade\" id=\"searchCommandsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCommandsModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
        <p class=\"modal-title\" id=\"searchCommandsModalLabel\">
          ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.help.searchcommands.title"), "html", null, true);
        yield "
        </p>
      </div>

      <h4 class=\"fw-sb mb-sm mt-md pi-md\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.heading.operators"), "html", null, true);
        yield "</h4>
      <div class=\"text-helper mb-md pi-md\">
        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.heading.operators.description"), "html", null, true);
        yield "</div>
      <ul class=\"accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        <!-- General operators -->
        <li class=\"panel\">
          <a role=\"button\" id=\"headingSearchOperators\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
            data-parent=\"#accordion\" href=\"#collapseSearchOperators\" aria-expanded=\"false\"
            aria-controls=\"collapseSearchOperators\">
            <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
            <span class=\"accordion-title\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators"), "html", null, true);
        yield "</span>
          </a>

          <div id=\"collapseSearchOperators\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
            aria-labelledby=\"headingSearchOperators\">
            <div class=\"accordion-content\">
              <p><code>+term</code>: ";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators.exact_term");
        yield "</p>
              <p><code>!term</code>: ";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators.exclude_terms");
        yield "</p>
              <p><code>\"phrase\"</code>: ";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators.exact_phrase");
        yield "</p>
              <p><code>(term1 OR term2)</code>: ";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators.grouping");
        yield "</p>
              <p><code>term1 OR term2</code>: ";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators.multiple_terms");
        yield "
              </p>
              <p><code>%term%</code>: ";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.operators.wildcard");
        yield "</p>
            </div>
          </div>
        </li>
      </ul>

      <h4 class=\"fw-sb mb-sm mt-32 pi-md\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.heading.commands"), "html", null, true);
        yield "</h4>
      <div class=\"text-helper mb-md pi-md\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.searchcommands.heading.commands.description"), "html", null, true);
        yield "</div>

      ";
        // line 46
        $context["searchCommands"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\SearchCommandListExtension']->getSearchCommandList();
        // line 47
        yield "
      ";
        // line 48
        $context["commandGroups"] = ["identification" => ["ids", "name", "email"], "interactions" => ["email_sent", "email_read", "email_queued", "email_pending"], "filters" => []];
        // line 53
        yield "
      ";
        // line 54
        $context["specialFormats"] = ["category" => "{category alias}", "ids" => "ID1,ID2", "type" => "{type name}", "lang" => "{lang code}", "common" => "{segment_alias} + {segment_alias} + ...", "email_sent" => "EMAIL_ID", "email_read" => "EMAIL_ID", "email_queued" => "EMAIL_ID", "email_pending" => "EMAIL_ID", "segment" => "{segment_alias}"];
        // line 66
        yield "
      <ul id=\"specificCommandsAccordion\" class=\"accordion\">
      ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["searchCommands"]) || array_key_exists("searchCommands", $context) ? $context["searchCommands"] : (function () { throw new RuntimeError('Variable "searchCommands" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["section"] => $context["commands"]) {
            // line 69
            yield "          ";
            $context["sectionId"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["section"], ["." => "_"]));
            // line 70
            yield "          <li class=\"panel\">
              <a role=\"button\" id=\"heading";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["sectionId"]) || array_key_exists("sectionId", $context) ? $context["sectionId"] : (function () { throw new RuntimeError('Variable "sectionId" does not exist.', 71, $this->source); })())), "html", null, true);
            yield "\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
                data-parent=\"#specificCommandsAccordion\" href=\"#collapse";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["sectionId"]) || array_key_exists("sectionId", $context) ? $context["sectionId"] : (function () { throw new RuntimeError('Variable "sectionId" does not exist.', 72, $this->source); })())), "html", null, true);
            yield "\" aria-expanded=\"false\" aria-controls=\"collapse";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["sectionId"]) || array_key_exists("sectionId", $context) ? $context["sectionId"] : (function () { throw new RuntimeError('Variable "sectionId" does not exist.', 72, $this->source); })())), "html", null, true);
            yield "\">
                  <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
                  <span class=\"accordion-title\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["section"]), "html", null, true);
            yield "</span>
              </a>

              <div id=\"collapse";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["sectionId"]) || array_key_exists("sectionId", $context) ? $context["sectionId"] : (function () { throw new RuntimeError('Variable "sectionId" does not exist.', 77, $this->source); })())), "html", null, true);
            yield "\" class=\"collapse accordion-wrapper\" role=\"tabpanel\" aria-labelledby=\"heading";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["sectionId"]) || array_key_exists("sectionId", $context) ? $context["sectionId"] : (function () { throw new RuntimeError('Variable "sectionId" does not exist.', 77, $this->source); })())), "html", null, true);
            yield "\">
                  <div class=\"accordion-content\">
                      ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandGroups"]) || array_key_exists("commandGroups", $context) ? $context["commandGroups"] : (function () { throw new RuntimeError('Variable "commandGroups" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["groupName"] => $context["groupCommands"]) {
                // line 80
                yield "                          ";
                if (($context["groupName"] != "filters")) {
                    // line 81
                    yield "                              ";
                    $context["groupedCommands"] = Twig\Extension\CoreExtension::filter($this->env, $context["commands"], function ($__command__) use ($context, $macros) { $context["command"] = $__command__; return CoreExtension::inFilter(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 81, $this->source); })())), ":")), $context["groupCommands"]); });
                    // line 82
                    yield "                          ";
                } else {
                    // line 83
                    yield "                              ";
                    $context["groupedCommands"] = Twig\Extension\CoreExtension::filter($this->env, $context["commands"], function ($__command__) use ($context, $macros) { $context["command"] = $__command__; return (!CoreExtension::inFilter(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 83, $this->source); })())), ":")), CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandGroups"]) || array_key_exists("commandGroups", $context) ? $context["commandGroups"] : (function () { throw new RuntimeError('Variable "commandGroups" does not exist.', 83, $this->source); })()), "identification", [], "any", false, false, false, 83)) && !CoreExtension::inFilter(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["command"]) || array_key_exists("command", $context) ? $context["command"] : (function () { throw new RuntimeError('Variable "command" does not exist.', 83, $this->source); })())), ":")), CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandGroups"]) || array_key_exists("commandGroups", $context) ? $context["commandGroups"] : (function () { throw new RuntimeError('Variable "commandGroups" does not exist.', 83, $this->source); })()), "interactions", [], "any", false, false, false, 83))); });
                    // line 84
                    yield "                          ";
                }
                // line 85
                yield "
                          ";
                // line 86
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["groupedCommands"]) || array_key_exists("groupedCommands", $context) ? $context["groupedCommands"] : (function () { throw new RuntimeError('Variable "groupedCommands" does not exist.', 86, $this->source); })())) > 0)) {
                    // line 87
                    yield "                              <p class=\"fw-b mb-sm mt-md\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("searchcommand.group." . $context["groupName"])), "html", null, true);
                    yield "</p>
                              ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupedCommands"]) || array_key_exists("groupedCommands", $context) ? $context["groupedCommands"] : (function () { throw new RuntimeError('Variable "groupedCommands" does not exist.', 88, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                        // line 89
                        yield "                                  ";
                        $context["commandCode"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["command"]);
                        // line 90
                        yield "                                  ";
                        $context["descriptionKey"] = ($context["command"] . ".description");
                        // line 91
                        yield "                                  ";
                        if (CoreExtension::inFilter(":", (isset($context["commandCode"]) || array_key_exists("commandCode", $context) ? $context["commandCode"] : (function () { throw new RuntimeError('Variable "commandCode" does not exist.', 91, $this->source); })()))) {
                            // line 92
                            yield "                                      ";
                            // line 93
                            yield "                                  ";
                        } else {
                            // line 94
                            yield "                                      ";
                            $context["commandBase"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["commandCode"]) || array_key_exists("commandCode", $context) ? $context["commandCode"] : (function () { throw new RuntimeError('Variable "commandCode" does not exist.', 94, $this->source); })()), " "));
                            // line 95
                            yield "                                      ";
                            if (CoreExtension::inFilter((isset($context["commandBase"]) || array_key_exists("commandBase", $context) ? $context["commandBase"] : (function () { throw new RuntimeError('Variable "commandBase" does not exist.', 95, $this->source); })()), Twig\Extension\CoreExtension::keys((isset($context["specialFormats"]) || array_key_exists("specialFormats", $context) ? $context["specialFormats"] : (function () { throw new RuntimeError('Variable "specialFormats" does not exist.', 95, $this->source); })())))) {
                                // line 96
                                yield "                                          ";
                                $context["commandCode"] = (((isset($context["commandBase"]) || array_key_exists("commandBase", $context) ? $context["commandBase"] : (function () { throw new RuntimeError('Variable "commandBase" does not exist.', 96, $this->source); })()) . ":") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["specialFormats"]) || array_key_exists("specialFormats", $context) ? $context["specialFormats"] : (function () { throw new RuntimeError('Variable "specialFormats" does not exist.', 96, $this->source); })()), (isset($context["commandBase"]) || array_key_exists("commandBase", $context) ? $context["commandBase"] : (function () { throw new RuntimeError('Variable "commandBase" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96));
                                // line 97
                                yield "                                      ";
                            } else {
                                // line 98
                                yield "                                          ";
                                $context["commandCode"] = ((isset($context["commandCode"]) || array_key_exists("commandCode", $context) ? $context["commandCode"] : (function () { throw new RuntimeError('Variable "commandCode" does not exist.', 98, $this->source); })()) . ":*");
                                // line 99
                                yield "                                      ";
                            }
                            // line 100
                            yield "                                  ";
                        }
                        // line 101
                        yield "                                  <p><code>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commandCode"]) || array_key_exists("commandCode", $context) ? $context["commandCode"] : (function () { throw new RuntimeError('Variable "commandCode" does not exist.', 101, $this->source); })()), "html", null, true);
                        yield "</code>: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["descriptionKey"]) || array_key_exists("descriptionKey", $context) ? $context["descriptionKey"] : (function () { throw new RuntimeError('Variable "descriptionKey" does not exist.', 101, $this->source); })())), "html", null, true);
                        yield "</p>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['command'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    yield "                          ";
                }
                // line 104
                yield "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['groupName'], $context['groupCommands'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                  </div>
              </div>
          </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['section'], $context['commands'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "      </ul>
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
        return "@MauticCore/Modal/search_commands.html.twig";
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
        return array (  275 => 109,  266 => 105,  260 => 104,  257 => 103,  246 => 101,  243 => 100,  240 => 99,  237 => 98,  234 => 97,  231 => 96,  228 => 95,  225 => 94,  222 => 93,  220 => 92,  217 => 91,  214 => 90,  211 => 89,  207 => 88,  202 => 87,  200 => 86,  197 => 85,  194 => 84,  191 => 83,  188 => 82,  185 => 81,  182 => 80,  178 => 79,  171 => 77,  165 => 74,  158 => 72,  154 => 71,  151 => 70,  148 => 69,  144 => 68,  140 => 66,  138 => 54,  135 => 53,  133 => 48,  130 => 47,  128 => 46,  123 => 44,  119 => 43,  110 => 37,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  80 => 25,  69 => 17,  64 => 15,  57 => 11,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Modal/search_commands.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Modal/search_commands.html.twig");
    }
}
