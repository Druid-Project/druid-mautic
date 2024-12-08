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

/* @MauticSocial/Integration/Twitter/share.html.twig */
class __TwigTemplate_d9b6a62a80ffda68a88f21826044a62e extends Template
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
        yield "<div class=\"share-button twitter-share-button layout-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "count", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "count", [], "any", false, false, false, 1), "0")) : ("0")), "html", null, true);
        yield "\">
    <a href=\"https://twitter.com/share\"
    ";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "text", [], "any", true, true, false, 3) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 3, $this->source); })()), "text", [], "any", false, false, false, 3)))) {
            yield "data-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 3, $this->source); })()), "text", [], "any", false, false, false, 3), "html", null, true);
            yield "\"";
        }
        // line 4
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "via", [], "any", true, true, false, 4) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 4, $this->source); })()), "via", [], "any", false, false, false, 4)))) {
            yield "data-via=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 4, $this->source); })()), "via", [], "any", false, false, false, 4), "html", null, true);
            yield "\"";
        }
        // line 5
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "related", [], "any", true, true, false, 5) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "related", [], "any", false, false, false, 5)))) {
            yield "data-related=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "related", [], "any", false, false, false, 5), "html", null, true);
            yield "\"";
        }
        // line 6
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "hashtags", [], "any", true, true, false, 6) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), "hashtags", [], "any", false, false, false, 6)))) {
            yield "data-hashtags=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), "hashtags", [], "any", false, false, false, 6), "html", null, true);
            yield "\"";
        }
        // line 7
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "size", [], "any", true, true, false, 7) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 7, $this->source); })()), "size", [], "any", false, false, false, 7)))) {
            yield "data-size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 7, $this->source); })()), "size", [], "any", false, false, false, 7), "html", null, true);
            yield "\"";
        }
        // line 8
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "count", [], "any", true, true, false, 8) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 8, $this->source); })()), "count", [], "any", false, false, false, 8)))) {
            yield "data-count=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 8, $this->source); })()), "count", [], "any", false, false, false, 8), "html", null, true);
            yield "\"";
        }
        // line 9
        yield "    class=\"twitter-share-button share-button\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.Twitter.share.tweet"), "html", null, true);
        yield "</a>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Integration/Twitter/share.html.twig";
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
        return array (  89 => 9,  82 => 8,  75 => 7,  68 => 6,  61 => 5,  54 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Twitter/share.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Twitter/share.html.twig");
    }
}
