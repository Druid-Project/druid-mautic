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

/* @MauticPage/SubscribedEvents/PageToken/langbar.html.twig */
class __TwigTemplate_3509802cd5fd9252de4296544ba6485c extends Template
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
        // line 5
        $context["count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 5, $this->source); })()));
        // line 6
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 6, $this->source); })()) > 0)) {
            // line 7
            yield "<div class=\"page-lang-bar\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                yield "      ";
                $context["active"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "requestUri", [], "any", false, false, false, 9) == CoreExtension::getAttribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 9));
                // line 10
                yield "      <span>
          ";
                // line 11
                if ( !(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 11, $this->source); })())) {
                    // line 12
                    yield "              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 12), "html", null, true);
                    yield "\">
          ";
                }
                // line 14
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "lang", [], "any", false, false, false, 14), "html", null, true);
                yield "
          ";
                // line 15
                if ( !(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 15, $this->source); })())) {
                    // line 16
                    yield "              </a>
          ";
                }
                // line 18
                yield "      </span>
      ";
                // line 19
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 19, $this->source); })()) - 1);
                // line 20
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/SubscribedEvents/PageToken/langbar.html.twig";
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
        return array (  89 => 21,  83 => 20,  81 => 19,  78 => 18,  74 => 16,  72 => 15,  67 => 14,  61 => 12,  59 => 11,  56 => 10,  53 => 9,  49 => 8,  46 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/SubscribedEvents/PageToken/langbar.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/SubscribedEvents/PageToken/langbar.html.twig");
    }
}
