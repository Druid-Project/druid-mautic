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

/* @MauticSocial/Integration/Instagram/Profile/view.html.twig */
class __TwigTemplate_79c53e910e234ff2cba5cb6e68f69c28 extends Template
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
            <a href=\"#InstagramProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li>
            <a href=\"#InstagramPhotos\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.photos"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"InstagramProfile\">
        ";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Instagram/Profile/profile.html.twig", ["profile" => CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18)]);
        // line 19
        yield "
    </div>
    <div class=\"pa-20 tab-pane\" id=\"InstagramPhotos\">
        ";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Instagram/Profile/photos.html.twig", ["activity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
($context["details"] ?? null), "activity", [], "any", false, true, false, 23), "photos", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 23), "photos", [], "any", false, false, false, 23), [])) : ([]))]);
        // line 24
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
        return "@MauticSocial/Integration/Instagram/Profile/view.html.twig";
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
        return array (  77 => 24,  75 => 23,  74 => 22,  69 => 19,  67 => 18,  66 => 17,  56 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Instagram/Profile/view.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Instagram/Profile/view.html.twig");
    }
}
