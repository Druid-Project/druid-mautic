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

/* @MauticPoint/Trigger/_list.html.twig */
class __TwigTemplate_f6192a35693b5b03a4451f2b46950fa3 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover pointtrigger-list\" id=\"triggerTable\">
            <thead>
            <tr>
                ";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#triggerTable", "langVar" => "point.trigger", "routeBase" => "pointtrigger", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "point:triggers:delete", [], "array", false, false, false, 12)]]);
            // line 14
            yield "

                <th class='col-pointtrigger-color'></th>

                ";
            // line 18
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "t.name", "text" => "mautic.core.name", "class" => "col-pointtrigger-name", "default" => true]);
            // line 24
            yield "

                ";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "col-pointtrigger-category visible-md visible-lg"]);
            // line 31
            yield "

                ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "pl.name", "text" => "mautic.point.thead.group", "class" => "visible-md visible-lg col-point-group"]);
            // line 38
            yield "

                ";
            // line 40
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "t.points", "text" => "mautic.point.trigger.thead.points", "class" => "col-pointtrigger-points"]);
            // line 45
            yield "

                ";
            // line 47
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point.trigger", "orderBy" => "t.id", "text" => "mautic.core.id", "class" => "col-pointtrigger-id visible-md visible-lg"]);
            // line 52
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 56, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                yield "                <tr>
                    <td>
                        ";
                // line 59
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 60
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 62
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 62, $this->source); })()), "point:triggers:edit", [], "array", false, false, false, 62), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "point:triggers:create", [], "array", false, false, false, 63), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 64
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 64, $this->source); })()), "point:triggers:delete", [], "array", false, false, false, 64)], "routeBase" => "pointtrigger", "langVar" => "point.trigger"]);
                // line 68
                yield "
                    </td>
                    <td>
                        <span class=\"label label-gray label-category\" style=\"background: ";
                // line 71
                yield ((!CoreExtension::inFilter("#", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 71))) ? ("#") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "color", [], "any", false, false, false, 71), "html", null, true);
                yield ";\"> </span>
                    </td>
                    <td>
                        <div>
                            ";
                // line 75
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "point.trigger"]);
                yield "
                            ";
                // line 76
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 76, $this->source); })()), "point:triggers:edit", [], "array", false, false, false, 76)) {
                    // line 77
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_pointtrigger_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                    ";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 78), "html", null, true);
                    yield "
                                </a>
                            ";
                } else {
                    // line 81
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 81), "html", null, true);
                    yield "
                            ";
                }
                // line 83
                yield "                        </div>
                        ";
                // line 84
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 84))) {
                    // line 85
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 86
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 86));
                    yield "</small>
                            </div>
                        ";
                }
                // line 89
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 91
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 91);
                // line 92
                yield "                        ";
                $context["catName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 92), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 93
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 93, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 93, $this->source); })()), "color", [], "any", false, false, false, 93))) : (""));
                // line 94
                yield "                        <div class=\"d-flex ai-center gap-xs\"><span class=\"label label-gray label-category\" style=\"background: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 94, $this->source); })()), "html", null, true);
                yield ";\"> </span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 94, $this->source); })()), "html", null, true);
                yield "</div>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "group", [], "any", false, true, false, 97), "name", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "group", [], "any", false, true, false, 97), "name", [], "any", false, false, false, 97), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))), "html", null, true);
                yield "
                    </td>
                    <td>";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "points", [], "any", false, false, false, 99), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 100), "html", null, true);
                yield "</td>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 107
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 108
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 108, $this->source); })())), "page" =>             // line 109
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()), "limit" =>             // line 110
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 110, $this->source); })()), "menuLinkId" => "mautic_pointtrigger_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_pointtrigger_index"), "sessionVar" => "point.trigger"]);
            // line 114
            yield "
    </div>
";
        } else {
            // line 117
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.point.trigger.noresults.tip"]);
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
        return "@MauticPoint/Trigger/_list.html.twig";
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
        return array (  231 => 117,  226 => 114,  224 => 110,  223 => 109,  222 => 108,  221 => 107,  215 => 103,  198 => 100,  194 => 99,  189 => 97,  180 => 94,  177 => 93,  174 => 92,  172 => 91,  168 => 89,  162 => 86,  159 => 85,  157 => 84,  154 => 83,  148 => 81,  142 => 78,  137 => 77,  135 => 76,  131 => 75,  123 => 71,  118 => 68,  116 => 64,  115 => 63,  114 => 62,  113 => 60,  112 => 59,  108 => 57,  91 => 56,  85 => 52,  83 => 47,  79 => 45,  77 => 40,  73 => 38,  71 => 33,  67 => 31,  65 => 26,  61 => 24,  59 => 18,  53 => 14,  51 => 12,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Trigger/_list.html.twig", "/app/docroot/app/bundles/PointBundle/Resources/views/Trigger/_list.html.twig");
    }
}
