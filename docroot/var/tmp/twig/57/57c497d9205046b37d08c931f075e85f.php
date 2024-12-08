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

/* @MauticPlugin/Integration/info.html.twig */
class __TwigTemplate_4ca94667ead2b3a78d8a79348a99f83f extends Template
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
        // line 6
        yield "<div class=\"row\">
    <div class=\"col-xs-4\">
        <img class=\"img img-responsive\" style=\"margin: auto;\" src=\"";
        // line 8
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 8, $this->source); })()));
        yield "\" />
    </div>

    <div class=\"col-xs-8\">
        <h3>";
        // line 12
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 12, $this->source); })()), "primaryDescription", [], "any", false, false, false, 12));
        yield "</h3>
    </div>
</div>

";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 16, $this->source); })()), "hasSecondaryDescription", [], "any", false, false, false, 16)) {
            // line 17
            yield "<div class=\"row mt-lg\">
    <div class=\"col-xs-12\">
        ";
            // line 19
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 19, $this->source); })()), "secondaryDescription", [], "any", false, false, false, 19));
            yield "
    </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPlugin/Integration/info.html.twig";
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
        return array (  66 => 19,  62 => 17,  60 => 16,  53 => 12,  46 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/Integration/info.html.twig", "/app/docroot/app/bundles/PluginBundle/Resources/views/Integration/info.html.twig");
    }
}
