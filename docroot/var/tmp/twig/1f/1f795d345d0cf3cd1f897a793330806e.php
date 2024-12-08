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

/* @MauticFullContact/Integration/form.html.twig */
class __TwigTemplate_55ac0ed0cf9259f4688bcfe603c004ee extends Template
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
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFullContactBundle/Assets/js/fullcontact.js");
        yield "
<div class=\"well well-sm\" style=\"margin-bottom:0 !important;\">
    <p>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.webhook"), "html", null, true);
        yield "</p>
    <div class=\"alert alert-warning\">
        ";
        // line 5
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.public_info"));
        yield "
    </div>
    <input type=\"text\" readonly=\"readonly\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mauticUrl"]) || array_key_exists("mauticUrl", $context) ? $context["mauticUrl"] : (function () { throw new RuntimeError('Variable "mauticUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" title=\"url\"/>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFullContact/Integration/form.html.twig";
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
        return array (  57 => 7,  52 => 5,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFullContact/Integration/form.html.twig", "/app/docroot/plugins/MauticFullContactBundle/Resources/views/Integration/form.html.twig");
    }
}
