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

/* @MauticTagManager/Tag/details.html.twig */
class __TwigTemplate_c162216db8299668dfcb67cb88fdce24 extends Template
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
            'indexButton' => [$this, 'block_indexButton'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["customButtons"] = [];
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticTagManager/Tag/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "tagmanager";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 4, $this->source); })()), "getTag", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 11
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 11, $this->source); })()), "templateButtons" => ["close" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 13, $this->source); })()), "isGranted", ["tagManager:tagManager:edit"], "method", false, false, false, 13)], "routeBase" => "tagmanager", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.tags")]);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 23
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 23, $this->source); })()), "nameGetter" => "getTag", "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 26, $this->source); })()), "isGranted", ["tagManager:tagManager:edit"], "method", false, false, false, 26), "delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 27, $this->source); })()), "isGranted", ["tagManager:tagManager:delete"], "method", false, false, false, 27)], "routeBase" => "tagmanager"]);
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "    <!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- left section -->
        <div class=\"col-md-9 height-auto\">
            <div>
                <!-- page detail header -->
                <!-- sms detail collapseable toggler -->
                ";
        // line 42
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticTagManager/Tag/details.html.twig", 42)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42)]));
        // line 43
        yield "                <div class=\"collapse pr-md pl-md\" id=\"sms-details\">
                    <div class=\"pr-md pl-md pb-md\">
                        <div class=\"panel shd-none mb-0\">
                            <table class=\"table table-hover mb-0\">
                                <tbody>
                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 49
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
        yield "</span></td>
                                    <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 50, $this->source); })()), "getId", [], "method", false, false, false, 50), "html", null, true);
        yield "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ sms detail collapseable toggler -->
            <div>
                <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#sms-details\">
                        <span class=\"caret\"></span>";
        // line 64
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        // line 65
        yield "                    </a>
                </span>
                </div>
            </div>
        </div>

        <!-- right section -->
        <div class=\"col-md-3 bdr-l height-auto\">
            ";
        // line 73
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/usage.html.twig", ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.tag.usages"), "stats" =>         // line 75
(isset($context["usageStats"]) || array_key_exists("usageStats", $context) ? $context["usageStats"] : (function () { throw new RuntimeError('Variable "usageStats" does not exist.', 75, $this->source); })()), "noUsages" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.tag.no_usages")]);
        // line 77
        yield "
        </div>
        <!--/ right section -->

        <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 81, $this->source); })()), "getId", [], "method", false, false, false, 81));
        yield "\" />
    </div>
    <!--/ end: box layout -->

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticTagManager/Tag/details.html.twig";
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
        return array (  179 => 81,  173 => 77,  171 => 75,  170 => 73,  160 => 65,  158 => 64,  141 => 50,  137 => 49,  129 => 43,  127 => 42,  118 => 35,  111 => 34,  106 => 27,  105 => 26,  104 => 23,  103 => 22,  96 => 21,  91 => 13,  90 => 11,  89 => 9,  82 => 8,  69 => 4,  58 => 3,  53 => 1,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticTagManager/Tag/details.html.twig", "/app/docroot/plugins/MauticTagManagerBundle/Resources/views/Tag/details.html.twig");
    }
}
