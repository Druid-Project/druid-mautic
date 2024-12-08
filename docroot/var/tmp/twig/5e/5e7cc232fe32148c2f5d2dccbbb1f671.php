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

/* @Integrations/Auth/authenticated.html.twig */
class __TwigTemplate_76a81c579f5e20761bdbf3e51db4e457 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/slim.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["alertClass"] = (((isset($context["authenticationError"]) || array_key_exists("authenticationError", $context) ? $context["authenticationError"] : (function () { throw new RuntimeError('Variable "authenticationError" does not exist.', 2, $this->source); })())) ? ("danger") : ("success"));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/slim.html.twig", "@Integrations/Auth/authenticated.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<style>
    #app-content {margin: 0;}
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"alert alert-";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alertClass"]) || array_key_exists("alertClass", $context) ? $context["alertClass"] : (function () { throw new RuntimeError('Variable "alertClass" does not exist.', 9, $this->source); })()), "html", null, true);
        yield " margin\" style=\"margin:20px\" role=\"alert\">
            ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "
        </div>
    </div>
</div>
<div class=\"row text-center\">
    ";
        // line 15
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@Integrations/Auth/authenticated.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.integration.closewindow", "variant" => "success", "icon" => "ri-check-line", "attributes" => ["id" => "integration_details_authButton", "name" => "integration_details[authButton]"], "onclick" => "window.close();"]]]));
        // line 29
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Integrations/Auth/authenticated.html.twig";
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
        return array (  82 => 29,  80 => 15,  72 => 10,  68 => 9,  61 => 4,  54 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Integrations/Auth/authenticated.html.twig", "/app/docroot/app/bundles/IntegrationsBundle/Resources/views/Auth/authenticated.html.twig");
    }
}
