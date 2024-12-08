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

/* @MauticEmail/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig */
class __TwigTemplate_0b922d60d39a12869e2ce1ed4c3ac24c extends Template
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
        // line 9
        $context["class"] = ((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })()), "table")) : ("table"));
        // line 10
        $context["shortenLinkText"] = ((array_key_exists("shortenLinkText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 10, $this->source); })()), 30)) : (30));
        // line 11
        $context["showHeaders"] = ["mautic.dashboard.label.url", "mautic.dashboard.label.unique.hit.count", "mautic.dashboard.label.total.hit.count", "mautic.dashboard.label.email.name"];
        // line 17
        $context["showValues"] = ["url", "unique_hits", "hits", "email_name"];
        // line 23
        yield "<table class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "        <thead>
            <tr>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["headItem"]) {
                // line 28
                yield "                ";
                if (CoreExtension::inFilter($context["headItem"], (isset($context["showHeaders"]) || array_key_exists("showHeaders", $context) ? $context["showHeaders"] : (function () { throw new RuntimeError('Variable "showHeaders" does not exist.', 28, $this->source); })()))) {
                    // line 29
                    yield "                <th>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["headItem"]), "html", null, true);
                    yield "</th>
                ";
                }
                // line 31
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['headItem'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "            </tr>
        </thead>
    ";
        }
        // line 35
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 35, $this->source); })()))) {
            // line 36
            yield "        <tbody>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["row"]) {
                // line 38
                yield "                <tr>
                    ";
                // line 39
                if (is_iterable($context["row"])) {
                    // line 40
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                    foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                        // line 41
                        yield "                            ";
                        if (CoreExtension::inFilter($context["key"], (isset($context["showValues"]) || array_key_exists("showValues", $context) ? $context["showValues"] : (function () { throw new RuntimeError('Variable "showValues" does not exist.', 41, $this->source); })()))) {
                            // line 42
                            yield "                            <td>
                                ";
                            // line 43
                            if (("email_name" == $context["key"])) {
                                // line 44
                                yield "                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "email_id", [], "any", false, false, false, 44)]), "html", null, true);
                                yield "\"
                                        title=\"";
                                // line 45
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"]);
                                yield "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 47
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 47, $this->source); })())), "html", null, true);
                                yield "
                                    </a>
                                ";
                            } else {
                                // line 50
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                                yield "
                                ";
                            }
                            // line 52
                            yield "                            </td>
                            ";
                        }
                        // line 54
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    yield "                    ";
                }
                // line 56
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "        </tbody>
    ";
        }
        // line 60
        yield "</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig";
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
        return array (  159 => 60,  155 => 58,  148 => 56,  145 => 55,  139 => 54,  135 => 52,  129 => 50,  123 => 47,  118 => 45,  113 => 44,  111 => 43,  108 => 42,  105 => 41,  100 => 40,  98 => 39,  95 => 38,  91 => 37,  88 => 36,  85 => 35,  80 => 32,  74 => 31,  68 => 29,  65 => 28,  61 => 27,  57 => 25,  55 => 24,  50 => 23,  48 => 17,  46 => 11,  44 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/SubscribedEvents/Dashboard/Most.hit.email.redirects.html.twig");
    }
}
