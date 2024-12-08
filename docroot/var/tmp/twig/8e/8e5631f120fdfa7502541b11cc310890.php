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

/* @MauticLead/List/_list.html.twig */
class __TwigTemplate_afcb925c4423b603d95309f279af4f4a extends Template
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
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadListTable\">
            <thead>
            <tr>
                ";
            // line 13
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadListTable", "langVar" => "lead.list", "routeBase" => "segment", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "lead:lists:deleteother", [], "array", false, false, false, 19)]]);
            // line 21
            yield "
                ";
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.name", "text" => "mautic.core.name", "class" => "col-leadlist-name"]);
            // line 27
            yield "
                ";
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 32
            yield "
                ";
            // line 33
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-leadlist-dateAdded"]);
            // line 38
            yield "
                ";
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-leadlist-dateModified", "default" => true]);
            // line 45
            yield "
                ";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-leadlist-createdByUser"]);
            // line 51
            yield "
                ";
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-leadlist-id"]);
            // line 57
            yield "
            </tr>
            </thead>
            <tbody>
              ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })()));
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
                // line 62
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/List/_list_row.html.twig", ["item" => $context["item"]]);
                yield "
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
            // line 64
            yield "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 67
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 68
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })())), "page" =>             // line 69
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 69, $this->source); })()), "limit" =>             // line 70
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 70, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_index"), "sessionVar" => "lead.list"]);
            // line 73
            yield "
        </div>
    </div>
";
        } else {
            // line 77
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
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
        return "@MauticLead/List/_list.html.twig";
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
        return array (  139 => 77,  133 => 73,  131 => 70,  130 => 69,  129 => 68,  128 => 67,  123 => 64,  106 => 62,  89 => 61,  83 => 57,  81 => 52,  78 => 51,  76 => 46,  73 => 45,  71 => 39,  68 => 38,  66 => 33,  63 => 32,  61 => 28,  58 => 27,  56 => 22,  53 => 21,  51 => 19,  50 => 13,  44 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/List/_list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/List/_list.html.twig");
    }
}
