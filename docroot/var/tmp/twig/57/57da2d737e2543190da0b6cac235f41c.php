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

/* @MauticSocial/Integration/Twitter/Profile/tweets.html.twig */
class __TwigTemplate_37613d8959570fe539bc3ea61346f96e extends Template
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
        yield "<ul class=\"list-group\">
     ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 2, $this->source); })()));
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
            // line 3
            yield "        ";
            $context["border"] = "bdr-b bdr-l-wdh-0 bdr-r-wdh-0";
            // line 4
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4) || CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 4))) {
                $context["border"] = "bdr-w-0";
            }
            // line 5
            yield "        <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["border"]) || array_key_exists("border", $context) ? $context["border"] : (function () { throw new RuntimeError('Variable "border" does not exist.', 5, $this->source); })()), "html", null, true);
            yield " pa-15 list-group-item\">
            <p>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tweet", [], "any", false, false, false, 6), "html", null, true);
            yield "</p>
            <span class=\"text-muted\"><i class=\"ri-time-line\"></i> ";
            // line 7
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "published", [], "any", false, false, false, 7));
            yield "</span>
        </li>
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
        // line 10
        yield "</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Integration/Twitter/Profile/tweets.html.twig";
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
        return array (  96 => 10,  79 => 7,  75 => 6,  70 => 5,  65 => 4,  62 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Twitter/Profile/tweets.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Twitter/Profile/tweets.html.twig");
    }
}
