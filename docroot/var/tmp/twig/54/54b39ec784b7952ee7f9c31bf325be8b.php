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

/* @MauticCore/Menu/admin.html.twig */
class __TwigTemplate_29d6319be40b72de397790e6d0ebf203 extends Template
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
        yield "<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" id=\"admin-menu\" href=\"#\">
        <i class=\"ri-settings-5-line ri-xl\"></i>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        ";
        // line 6
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "hasChildren", [], "method", false, false, false, 6) &&  !(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 6, $this->source); })()), "depth", [], "any", false, false, false, 6) === 0)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "getDisplayChildren", [], "method", false, false, false, 6))) {
            // line 7
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "getChildren", [], "method", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isDisplayed", [], "method", false, false, false, 8)) {
                    // line 9
                    yield "                    <li>
                        ";
                    // line 10
                    $context["extras"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getExtras", [], "method", false, false, false, 10);
                    // line 11
                    yield "                        ";
                    $context["labelAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabelAttributes", [], "method", false, false, false, 11);
                    // line 12
                    yield "                        ";
                    $context["labelClasses"] = (( !CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 12)) ? ("nav-item-name") : ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 12, $this->source); })()), "class", [], "any", false, false, false, 12) . " nav-item-name")));
                    // line 13
                    yield "
                        ";
                    // line 14
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "hasChildren", [], "method", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getDisplayChildren", [], "method", false, false, false, 14))) {
                        // line 15
                        yield "                            <div class=\"dropdown-header\">
                                ";
                        // line 16
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 16) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 16, $this->source); })()), "iconClass", [], "any", false, false, false, 16)))) {
                            // line 17
                            yield "                                    <i class=\"icon ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 17, $this->source); })()), "iconClass", [], "any", false, false, false, 17), "html", null, true);
                            yield "\"></i>
                                ";
                        }
                        // line 19
                        yield "                                <span";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 19, $this->source); })()));
                        yield ">";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 19)));
                        yield "</span>
                            </div>
                            ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getChildren", [], "method", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                            // line 22
                            yield "                                ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["grandchild"], "isDisplayed", [], "method", false, false, false, 22)) {
                                // line 23
                                yield "                                    <li>
                                        ";
                                // line 24
                                $context["linkAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["grandchild"], "getLinkAttributes", [], "method", false, false, false, 24);
                                // line 25
                                yield "                                        ";
                                $context["extras"] = CoreExtension::getAttribute($this->env, $this->source, $context["grandchild"], "getExtras", [], "method", false, false, false, 25);
                                // line 26
                                yield "                                        ";
                                $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $context["grandchild"], "getUri", [], "method", false, false, false, 26);
                                // line 27
                                yield "                                        ";
                                $context["url"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 27, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 27, $this->source); })())));
                                // line 28
                                yield "
                                        <a href=\"";
                                // line 29
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 29, $this->source); })()), "html", null, true);
                                yield "\"";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 29, $this->source); })()));
                                yield " data-toggle=\"ajax\">
                                            ";
                                // line 30
                                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 30) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 30, $this->source); })()), "iconClass", [], "any", false, false, false, 30)))) {
                                    // line 31
                                    yield "                                                <i class=\"icon ";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 31, $this->source); })()), "iconClass", [], "any", false, false, false, 31), "html", null, true);
                                    yield "\"></i>
                                            ";
                                }
                                // line 33
                                yield "                                            <span";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes(CoreExtension::getAttribute($this->env, $this->source, $context["grandchild"], "getLabelAttributes", [], "method", false, false, false, 33));
                                yield ">";
                                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["grandchild"], "getLabel", [], "method", false, false, false, 33)));
                                yield "</span>
                                        </a>
                                    </li>
                                ";
                            }
                            // line 37
                            yield "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['grandchild'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        yield "                        ";
                    } else {
                        // line 39
                        yield "                            ";
                        $context["linkAttributes"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLinkAttributes", [], "method", false, false, false, 39);
                        // line 40
                        yield "                            ";
                        $context["url"] = CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getUri", [], "method", false, false, false, 40);
                        // line 41
                        yield "                            ";
                        $context["url"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 41, $this->source); })()))) ? ("javascript:void(0);") : ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 41, $this->source); })())));
                        // line 42
                        yield "
                            <a href=\"";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 43, $this->source); })()), "html", null, true);
                        yield "\"";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 43, $this->source); })()));
                        yield " data-toggle=\"ajax\">
                                ";
                        // line 44
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extras"] ?? null), "iconClass", [], "any", true, true, false, 44) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 44, $this->source); })()), "iconClass", [], "any", false, false, false, 44)))) {
                            // line 45
                            yield "                                    <i class=\"icon ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 45, $this->source); })()), "iconClass", [], "any", false, false, false, 45), "html", null, true);
                            yield "\"></i>
                                ";
                        }
                        // line 47
                        yield "                                <span";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->parseMenuAttributes((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 47, $this->source); })()));
                        yield ">";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getLabel", [], "method", false, false, false, 47)));
                        yield "</span>
                            </a>
                        ";
                    }
                    // line 50
                    yield "                    </li>
                ";
                }
                // line 52
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "        ";
        }
        // line 54
        yield "    </ul>
</li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/admin.html.twig";
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
        return array (  199 => 54,  196 => 53,  190 => 52,  186 => 50,  177 => 47,  171 => 45,  169 => 44,  163 => 43,  160 => 42,  157 => 41,  154 => 40,  151 => 39,  148 => 38,  142 => 37,  132 => 33,  126 => 31,  124 => 30,  118 => 29,  115 => 28,  112 => 27,  109 => 26,  106 => 25,  104 => 24,  101 => 23,  98 => 22,  94 => 21,  86 => 19,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  62 => 10,  59 => 9,  56 => 8,  51 => 7,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/admin.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Menu/admin.html.twig");
    }
}
