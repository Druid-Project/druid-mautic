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

/* @MauticCore/FormTheme/form_tabbed.html.twig */
class __TwigTemplate_39a25629d67eb9c34b6e3036fe18b75c extends Template
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
            'mainFormContent' => [$this, 'block_mainFormContent'],
            'aboveTabsContent' => [$this, 'block_aboveTabsContent'],
            'belowTabsContent' => [$this, 'block_belowTabsContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/FormTheme/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["hasRightColumn"] =         $this->unwrap()->hasBlock("rightFormContent", $context, $blocks);
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form.html.twig", "@MauticCore/FormTheme/form_tabbed.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        yield "
    <div class=\"box-layout\">
        <div class=\"col-md-";
        // line 6
        yield (((isset($context["hasRightColumn"]) || array_key_exists("hasRightColumn", $context) ? $context["hasRightColumn"] : (function () { throw new RuntimeError('Variable "hasRightColumn" does not exist.', 6, $this->source); })())) ? (9) : (12));
        yield " height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        yield "
                    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('aboveTabsContent', $context, $blocks);
        // line 11
        yield "                    ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.above", $context);
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tabs.html.twig", ["tabs" => (isset($context["formTabs"]) || array_key_exists("formTabs", $context) ? $context["formTabs"] : (function () { throw new RuntimeError('Variable "formTabs" does not exist.', 12, $this->source); })())]);
        // line 13
        yield "<div class=\"pr-md pl-md\">
                        ";
        // line 14
        if (        $this->unwrap()->hasBlock("_content", $context, $blocks)) {
            // line 15
            yield "                            ";
            yield from             $this->unwrap()->yieldBlock("_content", $context, $blocks);
            yield "
                        ";
        } else {
            // line 17
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'rest');
            yield "
                        ";
        }
        // line 19
        yield "                    </div>
                    ";
        // line 20
        yield from $this->unwrap()->yieldBlock('belowTabsContent', $context, $blocks);
        // line 21
        yield "                    ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.below", $context);
        yield "
                </div>
            </div>
        </div>
        ";
        // line 25
        $context["rightContent"] =         $this->unwrap()->renderBlock("rightFormContent", $context, $blocks);
        // line 26
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["rightContent"]) || array_key_exists("rightContent", $context) ? $context["rightContent"] : (function () { throw new RuntimeError('Variable "rightContent" does not exist.', 26, $this->source); })()))) {
            // line 27
            yield "        <div class=\"col-md-3 height-auto bdr-l\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
            // line 29
            yield (isset($context["rightContent"]) || array_key_exists("rightContent", $context) ? $context["rightContent"] : (function () { throw new RuntimeError('Variable "rightContent" does not exist.', 29, $this->source); })());
            yield "
            </div>
        </div>
        ";
        }
        // line 33
        yield "    </div>
";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_aboveTabsContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_belowTabsContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/form_tabbed.html.twig";
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
        return array (  152 => 20,  142 => 10,  135 => 34,  132 => 33,  125 => 29,  121 => 27,  118 => 26,  116 => 25,  108 => 21,  106 => 20,  103 => 19,  97 => 17,  91 => 15,  89 => 14,  86 => 13,  84 => 12,  81 => 11,  79 => 10,  75 => 9,  69 => 6,  63 => 4,  56 => 3,  51 => 1,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/form_tabbed.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/form_tabbed.html.twig");
    }
}
