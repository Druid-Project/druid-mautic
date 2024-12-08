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

/* @MauticConfig/Sysinfo/index.html.twig */
class __TwigTemplate_b8045e3cf9ae716416ef9f57ef754d2a extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticConfig/Sysinfo/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "sysinfo";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.header.index"), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- step container -->
    <div class=\"col-md-3 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <!-- Nav tabs -->
            <ul class=\"list-group list-group-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"list-group-item in active\">
                    <a href=\"#phpinfo\" aria-controls=\"phpinfo\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text\">
                        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.phpinfo"), "html", null, true);
        yield "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#recommendations\" aria-controls=\"phpinfo\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text\">
                        ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.recommendations"), "html", null, true);
        yield "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#folders\" aria-controls=\"folders\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text\">
                        ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.folders"), "html", null, true);
        yield "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#log\" aria-controls=\"log\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text\">
                        ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.log"), "html", null, true);
        yield "
                    </a>
                </li>
                <li role=\"presentation\" class=\"list-group-item\">
                    <a href=\"#dbinfo\" aria-controls=\"dbinfo\" role=\"tab\" data-toggle=\"tab\" class=\"list-group-item-text\">
                        ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.tab.dbinfo"), "html", null, true);
        yield "
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-l\">

        <!-- Tab panes -->
        <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade in active bdr-w-0\" id=\"phpinfo\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    ";
        // line 52
        yield (isset($context["phpInfo"]) || array_key_exists("phpInfo", $context) ? $context["phpInfo"] : (function () { throw new RuntimeError('Variable "phpInfo" does not exist.', 52, $this->source); })());
        yield "
                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"recommendations\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    ";
        // line 57
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 57, $this->source); })())) && Twig\Extension\CoreExtension::testEmpty((isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 57, $this->source); })())))) {
            // line 58
            yield "                        <div class=\"alert alert-info\">
                            ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.no.recommendations"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 62
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 63
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 64
            yield $context["requirement"];
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['requirement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recommendation"]) {
            // line 68
            yield "                        <div class=\"alert alert-warning\">
                            ";
            // line 69
            yield $context["recommendation"];
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recommendation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"folders\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <h2 class=\"pb-md\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.folders.title"), "html", null, true);
        yield "</h2>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.folder.path"), "html", null, true);
        yield "</th>
                                <th>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.is.writable"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>
                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["folder"] => $context["isWritable"]) {
            // line 85
            yield "                            <tr class=\"";
            if ($context["isWritable"]) {
                yield "success";
            } else {
                yield "danger";
            }
            yield "\">
                                <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["folder"], "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 88
            if ($context["isWritable"]) {
                // line 89
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.writable"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 91
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.unwritable"), "html", null, true);
                yield "
                                    ";
            }
            // line 93
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['folder'], $context['isWritable'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                    </table>
                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"log\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <h2 class=\"pb-md\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.log.title"), "html", null, true);
        yield "</h2>
                    ";
        // line 102
        if ((array_key_exists("log", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 102, $this->source); })())))) {
            // line 103
            yield "                        <pre>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "</pre>
                    ";
        } else {
            // line 105
            yield "                        <div class=\"alert alert-info\" role=\"alert\">
                            ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.log.missing"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 109
        yield "                </div>
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade bdr-w-0\" id=\"dbinfo\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <h2 class=\"pb-md\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.title"), "html", null, true);
        yield "</h2>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.property"), "html", null, true);
        yield "</th>
                                <th>";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.value"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.version"), "html", null, true);
        yield "</td>
                                <td id=\"dbinfo-version\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dbInfo"]) || array_key_exists("dbInfo", $context) ? $context["dbInfo"] : (function () { throw new RuntimeError('Variable "dbInfo" does not exist.', 124, $this->source); })()), "version", [], "any", false, false, false, 124), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td>";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.driver"), "html", null, true);
        yield "</td>
                                <td id=\"dbinfo-driver\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dbInfo"]) || array_key_exists("dbInfo", $context) ? $context["dbInfo"] : (function () { throw new RuntimeError('Variable "dbInfo" does not exist.', 128, $this->source); })()), "driver", [], "any", false, false, false, 128), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <td>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sysinfo.dbinfo.platform"), "html", null, true);
        yield "</td>
                                <td id=\"dbinfo-platform\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dbInfo"]) || array_key_exists("dbInfo", $context) ? $context["dbInfo"] : (function () { throw new RuntimeError('Variable "dbInfo" does not exist.', 132, $this->source); })()), "platform", [], "any", false, false, false, 132), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticConfig/Sysinfo/index.html.twig";
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
        return array (  336 => 132,  332 => 131,  326 => 128,  322 => 127,  316 => 124,  312 => 123,  304 => 118,  300 => 117,  293 => 113,  287 => 109,  281 => 106,  278 => 105,  272 => 103,  270 => 102,  266 => 101,  259 => 96,  251 => 93,  245 => 91,  239 => 89,  237 => 88,  232 => 86,  223 => 85,  219 => 84,  213 => 81,  209 => 80,  202 => 76,  196 => 72,  187 => 69,  184 => 68,  179 => 67,  170 => 64,  167 => 63,  162 => 62,  156 => 59,  153 => 58,  151 => 57,  143 => 52,  125 => 37,  117 => 32,  109 => 27,  101 => 22,  93 => 17,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticConfig/Sysinfo/index.html.twig", "/app/docroot/app/bundles/ConfigBundle/Resources/views/Sysinfo/index.html.twig");
    }
}
