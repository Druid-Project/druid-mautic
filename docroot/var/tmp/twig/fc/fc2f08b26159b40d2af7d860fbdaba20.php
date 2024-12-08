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

/* @MauticConfig/FormTheme/dsn_row.html.twig */
class __TwigTemplate_0760ea54d2743e1577c1862c4afedf73 extends Template
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
            'dsn_row' => [$this, 'block_dsn_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('dsn_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dsn_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    <div class=\"config-dsn-container\">
        ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "test_button", [], "any", true, true, false, 3)) {
            // line 4
            yield "            <div class=\"help-block\">
                <span class=\"ri-loader-3-line ri-spin hide pull-left\"></span>
                <div class=\"status-msg\"></div>
                <div class=\"alert alert-warning save-config-msg hide\">";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.dsn.save_to_test"), "html", null, true);
            yield "</div>
            </div>
        ";
        }
        // line 10
        yield "        <div class=\"row\">
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "scheme", [], "any", false, false, false, 12), 'row');
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "host", [], "any", false, false, false, 15), 'row', ["attr" => ["preaddon_text" => "://"]]);
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "port", [], "any", false, false, false, 18), 'row', ["attr" => ["preaddon_text" => ":"]]);
        yield "
            </div>
            <div class=\"col-md-6 col-lg-3\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "path", [], "any", false, false, false, 21), 'row', ["attr" => ["preaddon_text" => "/"]]);
        yield "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), 'row');
        yield "
                    </div>
                    <div class=\"col-lg-6\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "password", [], "any", false, false, false, 31), 'row', ["attr" => ["preaddon_text" => ":"]]);
        yield "
                    </div>
                </div>
                <div class=\"config-dsn-test-container\">
                    <div class=\"form-inline\">
                        <div class=\"form-group\">
                            ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "test_button", [], "any", true, true, false, 37)) {
            // line 38
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "test_button", [], "any", false, false, false, 38), 'widget');
            yield "
                            ";
        }
        // line 40
        yield "                        </div>
                        <div class=\"form-group\">
                            <div class=\"form-control-static ml-10\">
                                <span class=\"text-muted\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.dsn.using_current_dsn"), "html", null, true);
        yield ":</span>
                                <code>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 44), "currentDsn", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 44), "currentDsn", [], "any", false, false, false, 44), "n/a")) : ("n/a")), "html", null, true);
        yield "</code>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "options", [], "any", false, false, false, 52), 'row');
        yield "
            </div>
        </div>
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'rest');
        yield "
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticConfig/FormTheme/dsn_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  151 => 55,  145 => 52,  134 => 44,  130 => 43,  125 => 40,  119 => 38,  117 => 37,  108 => 31,  102 => 28,  92 => 21,  86 => 18,  80 => 15,  74 => 12,  70 => 10,  64 => 7,  59 => 4,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticConfig/FormTheme/dsn_row.html.twig", "/app/docroot/app/bundles/ConfigBundle/Resources/views/FormTheme/dsn_row.html.twig");
    }
}
