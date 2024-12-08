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

/* @MauticCore/Helper/recentactivity.html.twig */
class __TwigTemplate_298e15527642f676813ea7c97105bf41 extends Template
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
        yield "<div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 3
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.recent.activity", [], "messages");
        yield "</div>
    </div>
    <div class=\"panel-body pt-xs\">
        ";
        // line 6
        if ((array_key_exists("logs", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 6, $this->source); })())))) {
            // line 7
            yield "        <ul class=\"media-list media-list-feed\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 9
                yield "            <li class=\"media\">
                <div class=\"media-object pull-left\">
                ";
                // line 11
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 11) == "create")) {
                    // line 12
                    yield "                    <span class=\"figure featured bg-success\"><span class=\"ri-check-line\"></span></span>
                ";
                } else {
                    // line 14
                    yield "                    <span class=\"figure\"></span>
                ";
                }
                // line 16
                yield "                </div>
                <div class=\"media-body\">
                    ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.core." . CoreExtension::getAttribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 18)) . ".by.past.tense")), "html", null, true);
                yield "
                    ";
                // line 19
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 19) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 19)))) {
                    // line 20
                    yield "                        <a
                            href=\"";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 21)]), "html", null, true);
                    yield "\"
                            data-toggle=\"ajax\"
                        >";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 23), "html", null, true);
                    yield "</a>
                    ";
                } else {
                    // line 25
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 25), "html", null, true);
                    yield "
                    ";
                }
                // line 27
                yield "                    <p class=\"fs-12 dark-sm\"><small> ";
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 27));
                yield "</small></p>
                </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "        </ul>
        ";
        }
        // line 33
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/recentactivity.html.twig";
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
        return array (  119 => 33,  115 => 31,  104 => 27,  98 => 25,  93 => 23,  88 => 21,  85 => 20,  83 => 19,  79 => 18,  75 => 16,  71 => 14,  67 => 12,  65 => 11,  61 => 9,  57 => 8,  54 => 7,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/recentactivity.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/recentactivity.html.twig");
    }
}
