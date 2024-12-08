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

/* @MauticSocial/Integration/Twitter/Profile/tags.html.twig */
class __TwigTemplate_b69157662a10a3b6aca6a10749c5b7ed extends Template
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
        yield "<ul class=\"twitter-tags tag-cloud\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["tag"] => $context["t"]) {
            // line 3
            yield "        ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 3) / 10) < 1)) {
                // line 4
                yield "            ";
                $context["fontSize"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 4) / 10) + 1);
                // line 5
                yield "        ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 5) / 10) > 2)) {
                // line 6
                yield "            ";
                $context["fontSize"] = 2;
                // line 7
                yield "        ";
            } else {
                // line 8
                yield "            ";
                $context["fontSize"] = (CoreExtension::getAttribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 8) / 10);
                // line 9
                yield "        ";
            }
            // line 10
            yield "        <li style=\"font-size: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "em\"><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["t"], "url", [], "any", false, false, false, 10), "html", null, true);
            yield "\" target=\"_new\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['tag'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Integration/Twitter/Profile/tags.html.twig";
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
        return array (  83 => 12,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Twitter/Profile/tags.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Twitter/Profile/tags.html.twig");
    }
}
