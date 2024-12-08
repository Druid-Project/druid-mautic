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

/* @MauticAsset/Remote/browse.html.twig */
class __TwigTemplate_84dd21a706d6c53c700e8bda4ffa508d extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticAsset/Remote/browse.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.file.browse", [], "messages");
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "        <div id=\"page-list-wrapper\" class=\"panel panel-default\">
            <div class=\"page-list\">
                ";
            // line 12
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
            </div>
        </div>
    ";
        } else {
            // line 16
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("mainContent", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "    <!-- start: box layout -->
    <div class=\"box-layout\">
                <!-- step container -->
        <div class=\"col-md-3\">
            <div class=\"pt-md pr-md pb-md\">
                <ul class=\"list-group list-group-tabs\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 30, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["integration"]) {
                // line 31
                yield "                        <li class=\"list-group-item";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31) === 0)) {
                    yield " active";
                }
                yield "\" id=\"tab";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["integration"], "getName", [], "method", false, false, false, 31), "html", null, true);
                yield "\">
                            <a href=\"javascript: void(0);\" class=\"list-group-item-text steps\" onclick=\"Mautic.updateRemoteBrowser('";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["integration"], "getName", [], "method", false, false, false, 32), "html", null, true);
                yield "');\">
                                ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["integration"], "getDisplayName", [], "method", false, false, false, 33), "html", null, true);
                yield "
                            </a>
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
            unset($context['_seq'], $context['_key'], $context['integration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "                </ul>
            </div>
        </div>
        <!--/ step container -->

        <!-- container -->
        <div class=\"col-md-9 bdr-l\">
            <div id=\"remoteFileBrowser\">
                <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
                    <p>";
            // line 46
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.select_service", [], "messages");
            yield "</p>
                </div>
            </div>
        </div>
        <!--/ end: container -->
    </div>
    <!--/ end: box layout -->
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Remote/browse.html.twig";
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
        return array (  186 => 46,  175 => 37,  157 => 33,  153 => 32,  144 => 31,  127 => 30,  119 => 24,  117 => 23,  110 => 22,  101 => 16,  94 => 12,  90 => 10,  87 => 9,  80 => 8,  69 => 6,  58 => 5,  54 => 4,  52 => 2,  50 => 1,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Remote/browse.html.twig", "/app/docroot/app/bundles/AssetBundle/Resources/views/Remote/browse.html.twig");
    }
}
