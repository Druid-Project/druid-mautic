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

/* @MauticSocial/FormTheme/Campaigns/twitter_tweet_widget.html.twig */
class __TwigTemplate_86e9a8da8ebd142982dad75b43ead8e6 extends Template
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
        yield "<div id=\"compose-tweet\">
    <div id=\"character-count\" class=\"text-right small\">
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.twitter.tweet.count"), "html", null, true);
        yield "
        <span></span>
    </div>
    ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "tweet_text", [], "any", false, false, false, 6), 'row');
        yield "

    <div class=\"row\">
        <div id=\"handle\" class=\"col-md-2\">
            <label class=\"control-label\">
                ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.twitter.tweet.handle"), "html", null, true);
        yield "
            </label>
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "handle", [], "any", false, false, false, 13), 'row');
        yield "
        </div>

        <div id=\"asset\" class=\"col-md-5\">
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "asset_link", [], "any", false, false, false, 17), 'row');
        yield "
        </div>

        <div id=\"page\" class=\"col-md-5\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "page_link", [], "any", false, false, false, 21), 'row');
        yield "
        </div>
    </div>
</div>
";
        // line 25
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticSocialBundle/Assets/js/social.js", "composeSocialWatcher", "composeSocialWatcher");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/FormTheme/Campaigns/twitter_tweet_widget.html.twig";
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
        return array (  86 => 25,  79 => 21,  72 => 17,  65 => 13,  60 => 11,  52 => 6,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/FormTheme/Campaigns/twitter_tweet_widget.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/FormTheme/Campaigns/twitter_tweet_widget.html.twig");
    }
}
