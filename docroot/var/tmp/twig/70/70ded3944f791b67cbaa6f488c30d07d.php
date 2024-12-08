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

/* @MauticCore/Helper/keyboard_shortcuts_helper.html.twig */
class __TwigTemplate_66440dc6b4612b0be27d0a2c2c5852ab extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["shortcuts"]) || array_key_exists("shortcuts", $context) ? $context["shortcuts"] : (function () { throw new RuntimeError('Variable "shortcuts" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["section"] => $context["shortcut_list"]) {
            // line 2
            yield "    <li class=\"panel\">
    <a role=\"button\" id=\"heading";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
        data-parent=\"#accordion\" href=\"#collapse";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "\" aria-expanded=\"false\"
        aria-controls=\"collapse";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "\">
        <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
        <span class=\"accordion-title\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.keyboard.section." . $context["section"])), "html", null, true);
            yield "</span>
    </a>
    <div id=\"collapse";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
        aria-labelledby=\"heading";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["section"], "html", null, true);
            yield "\">
        <div class=\"accordion-content col-xs-12\">
        <table class=\"shortcut-table bsv-xs\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["shortcut_list"]);
            foreach ($context['_seq'] as $context["key"] => $context["description"]) {
                // line 14
                yield "            <tr class=\"mb-xs\">
                <td class=\"shortcut-description\">
                ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["description"]), "html", null, true);
                yield "
                </td>
                <td class=\"shortcut-keys text-right\">
                ";
                // line 19
                $context["keys"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["key"], "+");
                // line 20
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["keys"]) || array_key_exists("keys", $context) ? $context["keys"] : (function () { throw new RuntimeError('Variable "keys" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 21
                    yield "                    <kbd>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield "</kbd>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['k'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        </table>
        </div>
    </div>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['section'], $context['shortcut_list'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/keyboard_shortcuts_helper.html.twig";
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
        return array (  115 => 26,  107 => 23,  98 => 21,  93 => 20,  91 => 19,  85 => 16,  81 => 14,  77 => 13,  71 => 10,  67 => 9,  62 => 7,  57 => 5,  53 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/keyboard_shortcuts_helper.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/keyboard_shortcuts_helper.html.twig");
    }
}
