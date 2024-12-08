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

/* @MauticOutlook/Integration/form.html.twig */
class __TwigTemplate_01b1be01f494e22f2612f7619b2f8096 extends Template
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
        yield "<div class=\"well well-sm\" style=\"margin-bottom:0 !important;\">
    <p>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.outlook.url"), "html", null, true);
        yield "</p>
    <div class=\"alert alert-warning\">
        ";
        // line 4
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.outlook.public_info"));
        yield "
    </div>
    <input type=\"text\" readonly=\"readonly\" onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticUrl"]) || array_key_exists("mauticUrl", $context) ? $context["mauticUrl"] : (function () { throw new RuntimeError('Variable "mauticUrl" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\">
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticOutlook/Integration/form.html.twig";
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
        return array (  55 => 6,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticOutlook/Integration/form.html.twig", "/app/docroot/plugins/MauticOutlookBundle/Resources/views/Integration/form.html.twig");
    }
}
