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

/* @MauticCore/FormTheme/form.html.twig */
class __TwigTemplate_d37d54fa337ec831281eb580d1695ec4 extends Template
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
            'mainFormContent' => [$this, 'block_mainFormContent'],
            'postFormContent' => [$this, 'block_postFormContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((("@MauticCore/Default/" . (((array_key_exists("useSlim", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["useSlim"]) || array_key_exists("useSlim", $context) ? $context["useSlim"] : (function () { throw new RuntimeError('Variable "useSlim" does not exist.', 1, $this->source); })())))) ? ("slim") : ("content"))) . ".html.twig"), "@MauticCore/FormTheme/form.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        if ( !array_key_exists("entity", $context)) {
            // line 4
            $context["entity"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4);
        }
        // line 13
        if ( !array_key_exists("headerTitle", $context)) {
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "getId", [], "method", false, false, false, 14)) {
                // line 15
                $context["headerTitle"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 15, $this->source); })()) . ".header.edit"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 15, $this->source); })()) . ".header.edit"), ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "getName", [], "method", false, false, false, 15)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "getName", [], "method", false, false, false, 15)])));
            } else {
                // line 17
                $context["headerTitle"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".header.new"))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 17, $this->source); })()) . ".header.new"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.header.new")));
            }
        }
        // line 23
        if ( !array_key_exists("entity", $context)) {
            // line 24
            $context["entity"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "data", [], "any", false, false, false, 24);
        }
        // line 27
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "attr", [], "any", false, false, false, 27);
        // line 29
        if ((        $this->unwrap()->hasBlock("formAttr", $context, $blocks) &&  !Twig\Extension\CoreExtension::testEmpty(        $this->unwrap()->renderBlock("formAttr", $context, $blocks)))) {
            // line 30
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 30, $this->source); })()),             $this->unwrap()->renderBlock("formAttr", $context, $blocks));
        }
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if (array_key_exists("mauticContent", $context)) {
            // line 9
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 9, $this->source); })()), "html", null, true);
            yield "
    ";
        }
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 21, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })())]);
        yield "
    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('mainFormContent', $context, $blocks);
        // line 36
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
    ";
        // line 37
        yield from $this->unwrap()->yieldBlock('postFormContent', $context, $blocks);
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_postFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/form.html.twig";
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
        return array (  147 => 37,  137 => 35,  132 => 37,  127 => 36,  125 => 35,  120 => 34,  113 => 33,  102 => 21,  93 => 9,  90 => 8,  83 => 7,  79 => 1,  76 => 30,  74 => 29,  72 => 27,  69 => 24,  67 => 23,  63 => 17,  60 => 15,  58 => 14,  56 => 13,  53 => 4,  51 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/form.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/form.html.twig");
    }
}
