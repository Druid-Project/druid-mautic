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

/* @MauticLead/Note/_list_filter_form.html.twig */
class __TwigTemplate_5f634583ddd74fe0d44bedf008e996d7 extends Template
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
        yield "<form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "tmpl" => "list"]), "html", null, true);
        yield "\" class=\"panel\" id=\"note-filters\" method=\"post\">
    <div class=\"form-control-icon pa-md\">
        <input type=\"text\"
               name=\"search\"
               value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 5, $this->source); })()));
        yield "\"
               id=\"NoteFilter\"
               class=\"form-control bdr-w-0\"
               placeholder=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        yield "\"
               data-toggle=\"livesearch\"
               data-target=\"#NoteList\"
               data-action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_index", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "page" => 1]), "html", null, true);
        yield "\">
        <span class=\"the-icon ri-search-line text-muted\"></span><!-- must below `form-control` -->
    </div>
    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14));
        yield "\" />
    <div class=\"panel-footer text-muted\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["noteTypes"]) || array_key_exists("noteTypes", $context) ? $context["noteTypes"] : (function () { throw new RuntimeError('Variable "noteTypes" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
            // line 17
            yield "            <div class=\"checkbox-inline custom-primary\">
                <label class=\"mb-0\">
                    <input name=\"noteTypes[]\" type=\"checkbox\" value=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
            yield "\" ";
            if (CoreExtension::inFilter($context["typeKey"], (isset($context["noteType"]) || array_key_exists("noteType", $context) ? $context["noteType"] : (function () { throw new RuntimeError('Variable "noteType" does not exist.', 19, $this->source); })()))) {
                yield "checked";
            }
            yield " />
                    <span class=\"mr-0\"></span>
                    ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["typeName"]), "html", null, true);
            yield "
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Note/_list_filter_form.html.twig";
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
        return array (  100 => 25,  90 => 21,  81 => 19,  77 => 17,  73 => 16,  68 => 14,  62 => 11,  56 => 8,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Note/_list_filter_form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Note/_list_filter_form.html.twig");
    }
}
