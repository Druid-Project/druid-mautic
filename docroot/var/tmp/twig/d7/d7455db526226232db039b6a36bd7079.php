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

/* @MauticCore/Helper/details.html.twig */
class __TwigTemplate_3bd04c657e6a5556419638895f0de970 extends Template
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
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.top", $context);
        yield "
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getCategory", [], "any", true, true, false, 2) && $this->env->getFunction('method_exists')->getCallable()((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), "getCategory"))) {
            // line 3
            yield "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 4
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.category", [], "messages");
            yield "</span></td>
    <td>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->env->getTest('object')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "getCategory", [], "method", false, false, false, 5))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "getCategory", [], "method", false, false, false, 5), "getTitle", [], "method", false, false, false, 5)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), "html", null, true);
            yield "</td>
</tr>
";
        }
        // line 8
        yield "
";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getCreateByUser", [], "any", true, true, false, 9)) {
            // line 10
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "getCreatedByUser", [], "method", false, false, false, 10)) {
                // line 11
                yield "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
                // line 12
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.createdby", [], "messages");
                yield "</span></td>
    <td>";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "getCreatedByUser", [], "method", false, false, false, 13), "html", null, true);
                yield "</td>
</tr>
";
            }
            // line 16
            yield "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 17
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.created", [], "messages");
            yield "</span></td>
    <td>";
            // line 18
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "getDateAdded", [], "method", false, false, false, 18));
            yield "</td>
</tr>
";
        }
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getModifiedByUser", [], "any", true, true, false, 21)) {
            // line 22
            $context["modified"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "getModifiedByUser", [], "method", false, false, false, 22);
            // line 23
            if ((isset($context["modified"]) || array_key_exists("modified", $context) ? $context["modified"] : (function () { throw new RuntimeError('Variable "modified" does not exist.', 23, $this->source); })())) {
                // line 24
                yield "    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\">";
                // line 25
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.modifiedby", [], "messages");
                yield "</span></td>
        <td>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "getModifiedByUser", [], "method", false, false, false, 26), "html", null, true);
                yield "</td>
    </tr>
    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\">";
                // line 29
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.modified", [], "messages");
                yield "</span></td>
        <td>";
                // line 30
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "getDateModified", [], "method", false, false, false, 30));
                yield "</td>
    </tr>
";
            }
        }
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getPublishUp", [], "any", true, true, false, 34) && $this->env->getFunction('method_exists')->getCallable()((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "getPublishUp"))) {
            // line 35
            yield "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 36
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.page.publish.up", [], "messages");
            yield "</span></td>
    <td>";
            // line 37
            yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "getPublishUp", [], "method", false, false, false, 37))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "getPublishUp", [], "method", false, false, false, 37))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "getDateAdded", [], "method", false, false, false, 37))));
            yield "</td>
</tr>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 40
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.page.publish.down", [], "messages");
            yield "</span></td>
    <td>";
            // line 41
            (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "getPublishDown", [], "method", false, false, false, 41))) ? (yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "getPublishDown", [], "method", false, false, false, 41))) : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.never"), "html", null, true)));
            yield "</td>
</tr>
";
        }
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "getId", [], "any", true, true, false, 44)) {
            // line 45
            yield "    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 46
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
            yield "</span></td>
        <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()), "getId", [], "method", false, false, false, 47), "html", null, true);
            yield "</td>
    </tr>
";
        }
        // line 50
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.bottom", $context);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/details.html.twig";
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
        return array (  164 => 50,  158 => 47,  154 => 46,  151 => 45,  149 => 44,  143 => 41,  139 => 40,  133 => 37,  129 => 36,  126 => 35,  124 => 34,  117 => 30,  113 => 29,  107 => 26,  103 => 25,  100 => 24,  98 => 23,  96 => 22,  94 => 21,  88 => 18,  84 => 17,  81 => 16,  75 => 13,  71 => 12,  68 => 11,  66 => 10,  64 => 9,  61 => 8,  55 => 5,  51 => 4,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/details.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/details.html.twig");
    }
}
