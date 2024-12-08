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

/* @MauticSocial/Integration/Foursquare/Profile/tips.html.twig */
class __TwigTemplate_ea2c5fe78595b39e9faeedc2fccff96f extends Template
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
            yield "        <li class=\"bdr-w-0 list-group-item\">
            <h4 class=\"mt-10 mb-10 pb-10\"><i class=\"ri-check-line-circle-o\"></i> ";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tipText", [], "any", false, false, false, 4), "html", null, true);
            yield "</h4>
            <p class=\"alert alert-warning\">
                ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "venueName", [], "any", false, false, false, 6), "html", null, true);
            yield "<br />
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "venueLocation", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 8
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["l"], "html", null, true);
                yield "<br />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "            </p>
            <p class=\"text-muted\"><i class=\"ri-time-line\"></i> ";
            // line 11
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 11), "UTC", "U");
            yield "</p>
            ";
            // line 12
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 12)) {
                yield "<hr />";
            }
            // line 13
            yield "        </li>
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
        // line 15
        yield "</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Integration/Foursquare/Profile/tips.html.twig";
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
        return array (  113 => 15,  98 => 13,  94 => 12,  90 => 11,  87 => 10,  78 => 8,  74 => 7,  70 => 6,  65 => 4,  62 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Foursquare/Profile/tips.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Foursquare/Profile/tips.html.twig");
    }
}
