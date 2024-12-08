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

/* @MauticSocial/Integration/LinkedIn/Profile/view.html.twig */
class __TwigTemplate_a69aba67ca0972b0dafbf67e46bc7dff extends Template
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
        yield "<div class=\"panel-toolbar np\">
    <ul class=\"nav nav-tabs nav-tabs-contained\">
        <li class=\"active\">
            <a href=\"#LinkedInProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li>
            <a href=\"#LinkedInPhotos\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.photos"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"LinkedInProfile\">
        ";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/LinkedIn/Profile/profile.html.twig", ["profile" => CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18)]);
        // line 19
        yield "
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
        return "@MauticSocial/Integration/LinkedIn/Profile/view.html.twig";
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
        return array (  69 => 19,  67 => 18,  66 => 17,  56 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/LinkedIn/Profile/view.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/LinkedIn/Profile/view.html.twig");
    }
}
