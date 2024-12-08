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

/* @MauticSocial/Integration/Twitter/Profile/view.html.twig */
class __TwigTemplate_767281a52cb66fc84e61cadafe669ec0 extends Template
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
            <a href=\"#TwitterProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        yield "
            </a>
        </li>
        <li>
            <a href=\"#TwitterTweets\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.twitter.tweets"), "html", null, true);
        yield "
            </a>
        </li>
        <li>
            <a href=\"#TwitterPhotos\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.photos"), "html", null, true);
        yield "
            </a>
        </li>
        <li>
            <a href=\"#TwitterTags\" role=\"tab\" data-toggle=\"tab\">
               ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.tags"), "html", null, true);
        yield "
            </a>
        </li>
    </ul>
</div>
<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"TwitterProfile\">
        ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/profile.html.twig", ["lead" =>         // line 28
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 28, $this->source); })()), "profile" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 29, $this->source); })()), "profile", [], "any", false, false, false, 29)]);
        // line 30
        yield "
    </div>
    <div class=\"tab-pane\" id=\"TwitterTweets\">
        ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/tweets.html.twig", ["lead" =>         // line 34
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "activity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["details"] ?? null), "activity", [], "any", false, true, false, 35), "tweets", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 35), "tweets", [], "any", false, false, false, 35), [])) : ([]))]);
        // line 36
        yield "
    </div>
    <div class=\"pa-20 tab-pane\" id=\"TwitterPhotos\">
        ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/photos.html.twig", ["lead" =>         // line 40
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 40, $this->source); })()), "activity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["details"] ?? null), "activity", [], "any", false, true, false, 41), "photos", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 41), "photos", [], "any", false, false, false, 41), [])) : ([]))]);
        // line 42
        yield "
    </div>
    <div class=\"pa-20 tab-pane\" id=\"TwitterTags\">
        ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/tags.html.twig", ["lead" =>         // line 46
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 46, $this->source); })()), "activity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["details"] ?? null), "activity", [], "any", false, true, false, 47), "tags", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 47), "tags", [], "any", false, false, false, 47), [])) : ([]))]);
        // line 48
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
        return "@MauticSocial/Integration/Twitter/Profile/view.html.twig";
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
        return array (  113 => 48,  111 => 47,  110 => 46,  109 => 45,  104 => 42,  102 => 41,  101 => 40,  100 => 39,  95 => 36,  93 => 35,  92 => 34,  91 => 33,  86 => 30,  84 => 29,  83 => 28,  82 => 27,  72 => 20,  64 => 15,  56 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Twitter/Profile/view.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Twitter/Profile/view.html.twig");
    }
}
