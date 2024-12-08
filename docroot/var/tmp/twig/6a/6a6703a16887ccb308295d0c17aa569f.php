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

/* @MauticAsset/Remote/list.html.twig */
class __TwigTemplate_085d3a381bc4f906fa2169e00d05e289 extends Template
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
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div class=\"panel panel-primary mb-0\">
        <div class=\"panel-body\">
            <input type='text' class='remote-file-search form-control mb-lg' autocomplete='off' placeholder=\"";
            // line 4
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.search.placeholder", [], "messages");
            yield "\" />

            <div class=\"list-group remote-file-list\">
                ";
            // line 7
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "dirs", [], "any", true, true, false, 7)) {
                // line 8
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })()), "dirs", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 9
                    yield "                        <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.updateRemoteBrowser('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 9, $this->source); })()), "getName", [], "method", false, false, false, 9), "html", null, true);
                    yield "', '/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["item"], "/", "right"), "html", null, true);
                    yield "');\">
                            ";
                    // line 10
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                    yield "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()), "keys", [], "any", false, false, false, 13));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 14
                    yield "                        <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.selectRemoteFile('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 14, $this->source); })()), "getPublicUrl", [$context["item"]], "method", false, false, false, 14), "html", null, true);
                    yield "');\">
                            ";
                    // line 15
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                    yield "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                yield "                ";
            } else {
                // line 19
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 19, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["connector"]) || array_key_exists("connector", $context) ? $context["connector"] : (function () { throw new RuntimeError('Variable "connector" does not exist.', 20, $this->source); })()), "getAdapter", [], "method", false, false, false, 20), "isDirectory", [$context["item"]], "method", false, false, false, 20)) {
                        // line 21
                        yield "                            <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.updateRemoteBrowser('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 21, $this->source); })()), "getName", [], "method", false, false, false, 21), "html", null, true);
                        yield "', '/";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["item"], "/", "right"), "html", null, true);
                        yield "');\">
                                ";
                        // line 22
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                        yield "
                            </a>
                        ";
                    } else {
                        // line 25
                        yield "                            <a class=\"list-group-item\" href=\"javascript: void(0);\" onclick=\"Mautic.selectRemoteFile('";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 25, $this->source); })()), "getPublicUrl", [$context["item"]], "method", false, false, false, 25), "html", null, true);
                        yield "');\">
                                ";
                        // line 26
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                        yield "
                            </a>
                        ";
                    }
                    // line 29
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "                ";
            }
            // line 31
            yield "            </div>
        </div>
    </div>
";
        } else {
            // line 35
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["message" => "mautic.asset.remote.no_results"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Remote/list.html.twig";
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
        return array (  146 => 35,  140 => 31,  137 => 30,  131 => 29,  125 => 26,  120 => 25,  114 => 22,  107 => 21,  104 => 20,  99 => 19,  96 => 18,  87 => 15,  82 => 14,  77 => 13,  68 => 10,  61 => 9,  56 => 8,  54 => 7,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Remote/list.html.twig", "/app/docroot/app/bundles/AssetBundle/Resources/views/Remote/list.html.twig");
    }
}
