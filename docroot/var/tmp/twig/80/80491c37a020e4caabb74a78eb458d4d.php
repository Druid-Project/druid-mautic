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

/* @MauticLead/Integration/index.html.twig */
class __TwigTemplate_9c3737ebafc9640d7577e86fc7f42719 extends Template
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
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.lead.integrations.header"]);
            yield "
";
        } else {
            // line 9
            yield "  <div class=\"row\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 10, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
                // line 11
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "</div><div class=\"row\">"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 11)), "html", null, true);
                yield "
      <div class=\"col-md-6\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, $context["details"], "link", [], "any", true, true, false, 16)) {
                    // line 17
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "link", [], "any", false, false, false, 17), "html", null, true);
                    yield "\" class=\"pull-right\"><i class=\"ri-external-link-line\"></i></a>
              ";
                }
                // line 19
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "integration", [], "any", false, false, false, 19), "html", null, true);
                yield "
            </h3>
          </div>
          <div class=\"panel-body\">
            <dl class=\"dl-horizontal\">
              <dt>";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.object"), "html", null, true);
                yield "</dt><dd>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "integration_entity", [], "any", false, false, false, 24), "html", null, true);
                yield "</dd>
              <dt>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.object_id"), "html", null, true);
                yield "</dt><dd>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "integration_entity_id", [], "any", false, false, false, 25), "html", null, true);
                yield "</dd>
              <dt>";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.added"), "html", null, true);
                yield "</dt><dd>";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "date_added", [], "any", false, false, false, 26), "UTC", "Y-m-d H:i:s", true);
                yield "</dd>
              <dt>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.last_sync_date"), "html", null, true);
                yield "</dt><dd>";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "last_sync_date", [], "any", false, false, false, 27), "UTC", "Y-m-d H:i:s", true);
                yield "</dd>
            </dl>
          </div>
        </div>
      </div>
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
            unset($context['_seq'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Integration/index.html.twig";
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
        return array (  136 => 33,  114 => 27,  108 => 26,  102 => 25,  96 => 24,  87 => 19,  81 => 17,  79 => 16,  70 => 11,  53 => 10,  50 => 9,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Integration/index.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Integration/index.html.twig");
    }
}
