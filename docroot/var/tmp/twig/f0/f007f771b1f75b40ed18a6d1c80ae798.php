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

/* @MauticCore/LeftPanel/index.html.twig */
class __TwigTemplate_c69f450a1432e774b885bcf944983200 extends Template
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
        $context["extraMenu"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("extra");
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["extraMenu"]) || array_key_exists("extraMenu", $context) ? $context["extraMenu"] : (function () { throw new RuntimeError('Variable "extraMenu" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "    <!-- start: sidebar-header -->
    <div class=\"sidebar-header\">
        <a class=\"mautic-brand";
            // line 5
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["extraMenu"]) || array_key_exists("extraMenu", $context) ? $context["extraMenu"] : (function () { throw new RuntimeError('Variable "extraMenu" does not exist.', 5, $this->source); })()))) ? ("") : (" pull-left pl-0 pr-0"));
            yield "\" href=\"#\">
            <div class=\"dropdown extra-menu\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                    <i class=\"ri-arrow-down-s-line ri-lg\"></i>
                </a>
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extraMenu"]) || array_key_exists("extraMenu", $context) ? $context["extraMenu"] : (function () { throw new RuntimeError('Variable "extraMenu" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "
            </div>
        </a>
    </div>
    <!--/ end: sidebar-header -->
";
        }
        // line 16
        yield "

<!-- start: sidebar-content -->
<div class=\"sidebar-content\">
    <!-- scroll-content -->
    <div class=\"scroll-content slimscroll\">
        <!-- start: navigation -->
        <nav class=\"nav-sidebar\">
            ";
        // line 24
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("menu.above", $context);
        yield "
            ";
        // line 25
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("main");
        yield "

            <!-- start: left nav -->
            <ul class=\"nav sidebar-left-dark\"></ul>
            <!--/ end: left nav -->

        </nav>
        <!--/ end: navigation -->
    </div>
    <!--/ scroll-content -->
</div>
<!--/ end: sidebar-content -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/LeftPanel/index.html.twig";
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
        return array (  81 => 25,  77 => 24,  67 => 16,  58 => 10,  50 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/LeftPanel/index.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/LeftPanel/index.html.twig");
    }
}
