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

/* @MauticForm/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_963a87d1e4d7bdf777f3e231ebfdc68f extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", true, true, false, 1)) {
            // line 2
            yield "  ";
            $context["form"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 2, $this->source); })()), "extra", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2);
            // line 3
            yield "  ";
            $context["page"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "extra", [], "any", false, false, false, 3), "page", [], "any", false, false, false, 3);
            // line 4
            yield "  ";
            $context["submission"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "extra", [], "any", false, false, false, 4), "submission", [], "any", false, false, false, 4);
            // line 5
            yield "  ";
            $context["results"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 5, $this->source); })()), "results", [], "any", false, false, false, 5);
            // line 6
            yield "
  <dl class=\"dl-horizontal\">
    ";
            // line 8
            if (array_key_exists("link", $context)) {
                // line 9
                yield "        <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.source"), "html", null, true);
                yield "</dt>
        <dd>";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "</dd>
    ";
            }
            // line 12
            yield "
    ";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13)) {
                // line 14
                yield "        <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.description"), "html", null, true);
                yield "</dt>
        <dd>";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
                yield "</dd>
    ";
            }
            // line 17
            yield "
    <dt>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.thead.referrer"), "html", null, true);
            yield "</dt>
    <dd>";
            // line 19
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(CoreExtension::getAttribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 19, $this->source); })()), "referer", [], "any", false, false, false, 19));
            yield "</dd>

    ";
            // line 21
            if (is_iterable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 21, $this->source); })()))) {
                // line 22
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "fields", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 23
                    yield "            ";
                    if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 23), Twig\Extension\CoreExtension::keys((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 23, $this->source); })()))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 23, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 23), [], "array", false, false, false, 23)))) {
                        // line 24
                        yield "                <dt>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 24), "html", null, true);
                        yield "</dt>
                <dd>
                    ";
                        // line 26
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "isFileType", [], "any", false, false, false, 26)) {
                            // line 27
                            yield "                        <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_file_download", ["submissionId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "field" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 27)]), "html", null, true);
                            yield "\">
                            ";
                            // line 28
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 28, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 28), [], "array", false, false, false, 28), "html", null, true);
                            yield "
                        </a>
                    ";
                        } else {
                            // line 31
                            yield "                        ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 31, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "html", null, true);
                            yield "
                    ";
                        }
                        // line 33
                        yield "                </dd>
            ";
                    }
                    // line 35
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "    ";
            }
            // line 37
            yield "  </dl>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  147 => 37,  144 => 36,  138 => 35,  134 => 33,  128 => 31,  122 => 28,  117 => 27,  115 => 26,  109 => 24,  106 => 23,  101 => 22,  99 => 21,  94 => 19,  90 => 18,  87 => 17,  82 => 15,  77 => 14,  75 => 13,  72 => 12,  67 => 10,  62 => 9,  60 => 8,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
