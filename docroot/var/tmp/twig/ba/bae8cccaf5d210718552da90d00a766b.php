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

/* @MauticUser/Role/form.html.twig */
class __TwigTemplate_6674c16252b278b48cd166bbcb89ec0e extends Template
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
        // line 3
        $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScriptDeclaration(("MauticVars.permissionList = " . json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissionsConfig"]) || array_key_exists("permissionsConfig", $context) ? $context["permissionsConfig"] : (function () { throw new RuntimeError('Variable "permissionsConfig" does not exist.', 3, $this->source); })()), "list", [], "array", false, false, false, 3))), "bodyClose");
        // line 5
        $context["objectId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5), "getId", [], "method", false, false, false, 5);
        // line 6
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 6, $this->source); })()))) {
            // line 7
            $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "data", [], "any", false, false, false, 7), "getName", [], "method", false, false, false, 7);
            // line 8
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.header.edit", ["%name%" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })())]);
        } else {
            // line 10
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.header.new");
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/Role/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "role";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 13, $this->source); })()), "html", null, true);
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
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
    <div class=\"box-layout\">
\t<div class=\"col-xs-12 height-auto\">
\t\t<!-- tabs controls -->
\t\t<ul class=\"nav nav-tabs nav-tabs-contained\">
\t\t\t<li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 21
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        yield "</a></li>
\t\t\t<li class=\"\" id=\"permissions-tab\"><a href=\"#permissions-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 22
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.permissions", [], "messages");
        yield "</a></li>
\t\t</ul>
\t\t<!--/ tabs controls -->

\t\t<div class=\"tab-content pa-md\">
\t\t\t<div class=\"tab-pane fade in active bdr-w-0 height-auto\" id=\"details-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"pa-md\">
\t\t\t\t\t\t<div class=\"col-md-6\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "isAdmin", [], "any", false, false, false, 34), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"pa-md\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'row');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

            ";
        // line 47
        $context["hidePerms"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "isAdmin", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47);
        // line 48
        yield "\t\t\t<div class=\"tab-pane fade bdr-w-0\" id=\"permissions-container\">
\t\t\t\t<div id=\"rolePermissions\"";
        // line 49
        if ((isset($context["hidePerms"]) || array_key_exists("hidePerms", $context) ? $context["hidePerms"] : (function () { throw new RuntimeError('Variable "hidePerms" does not exist.', 49, $this->source); })())) {
            yield "class=\"hide\"";
        }
        yield ">
\t\t\t\t\t<!-- start: box layout -->
\t\t\t\t\t<div class=\"box-layout\">
\t\t\t\t\t\t<!-- step container -->
\t\t\t\t\t\t<div class=\"col-md-5 height-auto\">
\t\t\t\t\t\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">

\t\t\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-tabs\" role=\"tablist\">
                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissionsConfig"]) || array_key_exists("permissionsConfig", $context) ? $context["permissionsConfig"] : (function () { throw new RuntimeError('Variable "permissionsConfig" does not exist.', 58, $this->source); })()), "config", [], "array", false, false, false, 58));
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
        foreach ($context['_seq'] as $context["bundle"] => $context["config"]) {
            // line 59
            yield "\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59) === 0)) ? ("in active") : (""));
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bundle"], "html", null, true);
            yield "PermissionTab\" aria-controls=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bundle"], "html", null, true);
            yield "PermissionTab\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text steps\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["config"], "label", [], "array", false, false, false, 61), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"permission-ratio\"> (<span class=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bundle"], "html", null, true);
            yield "_granted\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["config"], "ratio", [], "array", false, false, false, 62), 0, [], "array", false, false, false, 62), "html", null, true);
            yield "</span> / <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bundle"], "html", null, true);
            yield "_total\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["config"], "ratio", [], "array", false, false, false, 62), 1, [], "array", false, false, false, 62), "html", null, true);
            yield "</span>)</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['bundle'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- container -->
\t\t\t\t\t\t<div class=\"col-md-7 height-auto bdr-l\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 73
        $context["permissions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "permissions", [], "any", false, false, false, 73), "children", [], "any", false, false, false, 73);
        // line 74
        yield "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 74, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 75
            yield "\t\t\t\t\t\t\t\t\t";
            if (("newbundle" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75))) {
                // line 76
                yield "\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 76) > 0)) {
                    // line 77
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 78
                    yield "\t\t\t\t\t\t\t\t\t\t\t</div>";
                    yield "
";
                    yield "</div>";
                    yield "
";
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                yield "\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade";
                yield (((0 === CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80))) ? (" in active") : (""));
                yield " bdr-w-0\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                yield "PermissionTab\">";
                yield "
";
                yield "
\t\t\t\t\t\t\t\t\t\t<div class=\"pt-md pr-md pl-md pb-md\"> ";
                // line 81
                yield "
";
                yield "
\t\t\t\t\t\t\t\t\t\t";
                // line 82
                CoreExtension::getAttribute($this->env, $this->source, $context["child"], "setRendered", [], "method", false, false, false, 82);
                // line 83
                yield "\t\t\t\t\t\t\t\t\t";
            } else {
                // line 84
                yield "\t\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                yield "
\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            yield "\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "\t\t\t\t\t\t\t\t\t";
        // line 88
        yield "\t\t\t\t\t\t\t\t\t</div>";
        yield "
";
        yield "
\t\t\t\t\t\t\t\t";
        // line 89
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "permissions", [], "any", false, false, false, 89), "setRendered", [], "method", false, false, false, 89);
        // line 90
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"isAdminMessage\"";
        // line 94
        if ( !(isset($context["hidePerms"]) || array_key_exists("hidePerms", $context) ? $context["hidePerms"] : (function () { throw new RuntimeError('Variable "hidePerms" does not exist.', 94, $this->source); })())) {
            yield " class=\"hide\"";
        }
        yield ">
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<h4>";
        // line 96
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.permission.isadmin.header", [], "messages");
        yield "</h4>
\t\t\t\t\t\t<p>";
        // line 97
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.permission.isadmin.message", [], "messages");
        yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
    ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Role/form.html.twig";
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
        return array (  346 => 104,  336 => 97,  332 => 96,  325 => 94,  319 => 90,  317 => 89,  311 => 88,  309 => 87,  295 => 86,  289 => 84,  286 => 83,  284 => 82,  279 => 81,  269 => 80,  259 => 78,  257 => 77,  254 => 76,  251 => 75,  233 => 74,  231 => 73,  222 => 66,  198 => 62,  194 => 61,  188 => 60,  183 => 59,  166 => 58,  152 => 49,  149 => 48,  147 => 47,  138 => 41,  128 => 34,  122 => 31,  110 => 22,  106 => 21,  97 => 16,  90 => 15,  79 => 13,  68 => 2,  63 => 1,  60 => 10,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Role/form.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/Role/form.html.twig");
    }
}
