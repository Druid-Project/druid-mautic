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

/* @MauticTagManager/Tag/list.html.twig */
class __TwigTemplate_cbc84dc7117c78d507a4054b4a73e782 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticTagManager/Tag/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 9
        if ( !array_key_exists("nameGetter", $context)) {
            // line 10
            $context["nameGetter"] = "getTag";
        }
        // line 13
        $context["listCommand"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.tag.searchcommand.list");
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.tagmanager.tag.header.index", [], "messages");
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "tags";
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
        yield "    <div id=\"page-list-wrapper\" class=\"panel panel-default\">";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>         // line 18
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 18, $this->source); })()), "action" =>         // line 19
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 19, $this->source); })()), "list_actions" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/toolbar_page_actions.html.twig", ["templateButtons" => ["new" => CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 22, $this->source); })()), "isGranted", ["tagManager:tagManager:create"], "method", false, false, false, 22)], "routeBase" => "tagmanager", "langVar" => "tag.list"])]);
        // line 28
        yield "<div class=\"page-list\">
            ";
        // line 29
        if ((array_key_exists("items", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })())))) {
            // line 30
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"tagsTable\">
                        <thead>
                        <tr>
                            ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#tagsTable", "langVar" => "tagmanager.tag", "routeBase" => "tagmanager", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 42, $this->source); })()), "tagManager:tagManager:delete", [], "array", false, false, false, 42)]]);
            // line 44
            yield "
                            ";
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "orderBy" => "lt.tag", "text" => "mautic.core.name", "class" => "col-tag-name"]);
            // line 53
            yield "

                            ";
            // line 55
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-tag-leadcount"]);
            // line 62
            yield "

                            ";
            // line 64
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "orderBy" => "lt.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-tag-id"]);
            // line 72
            yield "
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 76, $this->source); })()));
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
                // line 77
                yield "                            <tr>
                                <td>";
                // line 79
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 80
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 82
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 82, $this->source); })()), "tagManager:tagManager:edit", [], "array", false, false, false, 82), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 83
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 83, $this->source); })()), "tagManager:tagManager:delete", [], "array", false, false, false, 83)], "routeBase" => "tagmanager", "langVar" => "tagmanager.tag", "nameGetter" =>                 // line 87
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 87, $this->source); })()), "custom" => [["attr" => ["data-toggle" => "ajax", "href" => ""], "icon" => "ri-team-line", "label" => "mautic.lead.list.view_contacts"]]]);
                // line 99
                yield "</td>
                                <td>
                                    <div>
                                        ";
                // line 102
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 102, $this->source); })()), "tagManager:tagManager:edit", [], "array", false, false, false, 102)) {
                    // line 103
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                     // line 105
$context["item"], "getId", [], "method", false, false, false, 105)]), "html", null, true);
                    // line 106
                    yield "\" data-toggle=\"ajax\">
                                                ";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTag", [], "method", false, false, false, 107), "html", null, true);
                    yield "
                                            </a>
                                        ";
                } else {
                    // line 110
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getTag", [], "method", false, false, false, 110), "html", null, true);
                    yield "
                                        ";
                }
                // line 112
                yield "                                    </div>
                                    ";
                // line 113
                $context["description"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 113);
                // line 114
                yield "                                    ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 114, $this->source); })())) {
                    // line 115
                    yield "                                        <div class=\"text-muted mt-4\">
                                            <small>";
                    // line 116
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 116, $this->source); })()));
                    yield "</small>
                                        </div>
                                    ";
                }
                // line 119
                yield "                                </td>
                                <td class=\"visible-md visible-lg\">
                                    <a size=\"sm\" class=\"label label-gray\" href=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.lead.searchcommand.list") . ":\"") . CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["item"], "getTag", [], "method", false, false, false, 122)) . "\"")]), "html", null, true);
                // line 123
                yield "\" data-toggle=\"ajax\"";
                yield (((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["tagsCount"]) || array_key_exists("tagsCount", $context) ? $context["tagsCount"] : (function () { throw new RuntimeError('Variable "tagsCount" does not exist.', 123, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 123), [], "array", false, false, false, 123))) ? ("disabled=disabled") : (""));
                yield ">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.viewleads_count", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tagsCount"]) || array_key_exists("tagsCount", $context) ? $context["tagsCount"] : (function () { throw new RuntimeError('Variable "tagsCount" does not exist.', 124, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 124), [], "array", false, false, false, 124)]), "html", null, true);
                // line 125
                yield "</a>
                                </td>
                                <td class=\"visible-md visible-lg\">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 127), "html", null, true);
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
            // line 130
            yield "                        </tbody>
                    </table>
                    <div class=\"panel-footer\">";
            // line 133
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 134
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 134, $this->source); })())), "page" =>             // line 135
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 135, $this->source); })()), "limit" =>             // line 136
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 136, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_index"), "sessionVar" => "tagmanager"]);
            // line 140
            yield "</div>
                </div>
            ";
        } else {
            // line 143
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            yield "
            ";
        }
        // line 145
        yield "        </div>
    </div>
    ";
        // line 147
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/protip.html.twig", ["tip" => Twig\Extension\CoreExtension::random($this->env->getCharset(), ["mautic.protip.tags.segmentation", "mautic.protip.tags.multivalue", "mautic.protip.tags.creation"])]);
        // line 149
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticTagManager/Tag/list.html.twig";
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
        return array (  266 => 149,  264 => 147,  260 => 145,  254 => 143,  249 => 140,  247 => 136,  246 => 135,  245 => 134,  244 => 133,  240 => 130,  223 => 127,  219 => 125,  217 => 124,  213 => 123,  211 => 122,  210 => 121,  206 => 119,  200 => 116,  197 => 115,  194 => 114,  192 => 113,  189 => 112,  183 => 110,  177 => 107,  174 => 106,  172 => 105,  170 => 103,  168 => 102,  163 => 99,  161 => 87,  160 => 83,  159 => 82,  158 => 80,  157 => 79,  154 => 77,  137 => 76,  131 => 72,  129 => 64,  125 => 62,  123 => 55,  119 => 53,  117 => 45,  114 => 44,  112 => 42,  111 => 34,  105 => 30,  103 => 29,  100 => 28,  98 => 22,  97 => 19,  96 => 18,  95 => 17,  93 => 16,  86 => 15,  75 => 6,  64 => 5,  60 => 4,  58 => 13,  55 => 10,  53 => 9,  51 => 2,  49 => 1,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticTagManager/Tag/list.html.twig", "/app/docroot/plugins/MauticTagManagerBundle/Resources/views/Tag/list.html.twig");
    }
}
