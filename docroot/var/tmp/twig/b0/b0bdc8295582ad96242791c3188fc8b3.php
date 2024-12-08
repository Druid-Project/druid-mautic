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

/* @MauticCore/Default/base.html.twig */
class __TwigTemplate_8c4d3eeb9a599ad950ed03091fd3c893 extends Template
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
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    ";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/head.html.twig", ["headerTitle" => ((        $this->unwrap()->hasBlock("headerTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("headerTitle", $context, $blocks)) : (((        // line 4
array_key_exists("headerTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()), "")) : ("")))), "pageTitle" => ((        $this->unwrap()->hasBlock("pageTitle", $context, $blocks)) ? (        $this->unwrap()->renderBlock("pageTitle", $context, $blocks)) : ("Mautic"))]);
        // line 7
        yield "
    <body class=\"header-fixed\">
        <section id=\"app-wrapper\">
            ";
        // line 10
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        yield "

            ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        yield "
            ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Menu/quick_help.html.twig");
        yield "
            ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Modal/tokens_help.html.twig");
        yield "
            ";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Modal/keyboard_shortcuts.html.twig");
        yield "
            ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Modal/search_commands.html.twig");
        yield "

            <aside class=\"app-sidebar sidebar-left\">
                ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/LeftPanel/index.html.twig");
        yield "
            </aside>

            <header id=\"app-header\" class=\"navbar\">
                ";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/navbar.html.twig");
        yield "
            </header>

            <!-- start: app-footer(need to put on top of #app-content)-->
            <footer id=\"app-footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 text-muted\">";
        // line 30
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.copyright", ["%date%" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")], "messages");
        yield "</div>
                        <div class=\"col-xs-6 text-muted text-right small\">v";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\VersionExtension']->getVersion(), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </footer>
            <!--/ end: app-footer -->

            <section id=\"app-content\">
                ";
        // line 38
        yield from $this->unwrap()->yieldBlock('_content', $context, $blocks);
        // line 41
        yield "            </section>

            <script>
                Mautic.onPageLoad('body');
                ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "environment", [], "any", false, false, false, 45) === "dev")) {
            // line 46
            yield "                mQuery( document ).ajaxComplete(function(event, XMLHttpRequest, ajaxOption){
                    if(XMLHttpRequest.responseJSON && typeof XMLHttpRequest.responseJSON.ignore_wdt == 'undefined' && XMLHttpRequest.getResponseHeader('x-debug-token')) {
                        if (mQuery('[class*=\"sf-tool\"]').length) {
                            mQuery('[class*=\"sf-tool\"]').remove();
                        }

                        mQuery.get(mauticBaseUrl + '_wdt/'+XMLHttpRequest.getResponseHeader('x-debug-token'),function(data){
                            mQuery('body').append('<div class=\"sf-toolbar-reload\">'+data+'</div>');
                        });
                    }
                });
                ";
        }
        // line 58
        yield "            </script>
            ";
        // line 59
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        yield "
            ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 63
        yield "
        </section>
    </body>
</html>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Default/output.html.twig");
        yield "
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Default/base.html.twig";
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
        return array (  162 => 39,  155 => 38,  146 => 63,  144 => 60,  140 => 59,  137 => 58,  123 => 46,  121 => 45,  115 => 41,  113 => 38,  103 => 31,  99 => 30,  89 => 23,  82 => 19,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  55 => 10,  50 => 7,  48 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Default/base.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Default/base.html.twig");
    }
}
