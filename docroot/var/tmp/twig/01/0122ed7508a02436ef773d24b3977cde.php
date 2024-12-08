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

/* @MauticTagManager/Tag/form.html.twig */
class __TwigTemplate_aa7c4009472c3cf1902e8c502c4feb4e extends Template
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
        // line 3
        $context["id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "data", [], "array", false, false, false, 3), "getId", [], "method", false, false, false, 3);
        // line 5
        $context["header"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.menu.new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.menu.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "getTag", [], "method", false, false, false, 5))])));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticTagManager/Tag/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "tagmanager";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 6, $this->source); })()), "html", null, true);
        yield " ";
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        // line 10
        yield "<div class=\"box-layout\">
        <div class=\"col-md-9 height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul class=\"nav nav-tabs nav-tabs-contained\">
                        <li class=\"active\">
                            <a href=\"#details\" role=\"tab\" data-toggle=\"tab\">
                                ";
        // line 17
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        // line 18
        yield "                            </a>
                        </li>
                    </ul>

                    <!-- start: tab-content -->
                    <div class=\"tab-content pa-md\">
                        <div class=\"tab-pane fade in active bdr-w-0\" id=\"details\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "tag", [], "any", false, false, false, 27), 'row');
        // line 28
        yield "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'row');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticTagManager/Tag/form.html.twig";
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
        return array (  131 => 41,  120 => 32,  114 => 28,  112 => 27,  102 => 18,  100 => 17,  91 => 10,  89 => 9,  82 => 8,  69 => 6,  58 => 2,  53 => 1,  51 => 5,  49 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticTagManager/Tag/form.html.twig", "/app/docroot/plugins/MauticTagManagerBundle/Resources/views/Tag/form.html.twig");
    }
}
