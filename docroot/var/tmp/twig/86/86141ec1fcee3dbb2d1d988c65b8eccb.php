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

/* @MauticPlugin/Auth/postauth.html.twig */
class __TwigTemplate_5ea1b9bcd60059429af1236c8f188431 extends Template
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
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["contentOnly"] = true;
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPlugin/Auth/postauth.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "social";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "";
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
        $context["data"] = json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()));
        // line 9
        yield "<script>
function postFormHandler() {
    var opener = window.opener;
    if (opener && typeof opener.postAuthCallback == 'function') {
        opener.postAuthCallback({\$data});
    } else {
        Mautic.refreshIntegrationForm();
    }
    window.close()
}
";
        // line 19
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })())) && ("success" === (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 19, $this->source); })())))) {
            // line 20
            yield "(function() { postFormHandler(); })();
";
        }
        // line 22
        yield "</script>

";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()))) {
            // line 25
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 26
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()));
            yield "
    </div>
";
        }
        // line 29
        yield "<div class=\"row\">
    <div class=\"col-sm-12 text-center\">
        <a class=\"btn btn-lg btn-primary\" href=\"javascript:void(0);\" onclick=\"postFormHandler();\">
            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.closewindow"), "html", null, true);
        yield "
        </a>
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
        return "@MauticPlugin/Auth/postauth.html.twig";
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
        return array (  127 => 32,  122 => 29,  116 => 26,  111 => 25,  109 => 24,  105 => 22,  101 => 20,  99 => 19,  87 => 9,  85 => 8,  78 => 7,  67 => 5,  56 => 4,  51 => 2,  49 => 1,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/Auth/postauth.html.twig", "/app/docroot/app/bundles/PluginBundle/Resources/views/Auth/postauth.html.twig");
    }
}
