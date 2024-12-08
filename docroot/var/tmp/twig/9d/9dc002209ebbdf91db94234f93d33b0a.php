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

/* @MauticSocial/Integration/Foursquare/Profile/view.html.twig */
class __TwigTemplate_43e28c389e6eb0ed63015129c34e266e extends Template
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
            <a href=\"#FoursquareProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li>
            <a href=\"#FoursquareTips\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.foursquare.tips"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>

<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"FoursquareProfile\">
        ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig", ["lead" =>         // line 19
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 19, $this->source); })()), "profile" => CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 20, $this->source); })()), "profile", [], "any", false, false, false, 20)]);
        // line 21
        yield "
    </div>
    <div class=\"tab-pane\" id=\"FoursquareTips\">
        ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Foursquare/Profile/tips.html.twig", ["lead" =>         // line 25
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "activity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 26
($context["details"] ?? null), "activity", [], "any", false, true, false, 26), "tips", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 26), "tips", [], "any", false, false, false, 26), [])) : ([]))]);
        // line 27
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
        return "@MauticSocial/Integration/Foursquare/Profile/view.html.twig";
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
        return array (  80 => 27,  78 => 26,  77 => 25,  76 => 24,  71 => 21,  69 => 20,  68 => 19,  67 => 18,  56 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Foursquare/Profile/view.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Foursquare/Profile/view.html.twig");
    }
}
