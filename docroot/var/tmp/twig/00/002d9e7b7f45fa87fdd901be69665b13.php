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

/* @MauticFullContact/FullContact/batchLookup.html.twig */
class __TwigTemplate_fa6cff38c518e5c2cfb348dafe4d723b extends Template
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
        // line 6
        yield "<div class=\"alert alert-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.submit_items"), "html", null, true);
        yield "</div>
<div style=\"margin-top: 10px\">
    <ul class=\"list-group\" style=\"max-height: 400px;overflow-y: auto\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lookupItems"]) || array_key_exists("lookupItems", $context) ? $context["lookupItems"] : (function () { throw new RuntimeError('Variable "lookupItems" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            yield "            <li class=\"list-group-item\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "    </ul>
</div>

<script>
    (function () {
        var ids = Mautic.getCheckedListIds(false, true);
        if (mQuery('#fullcontact_batch_lookup_ids').length) {
            mQuery('#fullcontact_batch_lookup_ids').val(ids);
        }
    })();
</script>
";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFullContact/FullContact/batchLookup.html.twig";
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
        return array (  75 => 23,  62 => 12,  53 => 10,  49 => 9,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFullContact/FullContact/batchLookup.html.twig", "/app/docroot/plugins/MauticFullContactBundle/Resources/views/FullContact/batchLookup.html.twig");
    }
}
