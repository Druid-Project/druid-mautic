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

/* @MauticForm/messenger.html.twig */
class __TwigTemplate_9d3ec252e0c573bc1a0cd3129127e050 extends Template
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
        yield "<html>
    <head>
        <script type=\"text/javascript\">
            parent.postMessage(\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 4, $this->source); })()), "js"), "html", null, true);
        yield "\", '*');
        </script>
        ";
        // line 6
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AnalyticsExtension']->getCode();
        yield "
    </head>
    <body></body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/messenger.html.twig";
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
        return array (  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/messenger.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/messenger.html.twig");
    }
}
