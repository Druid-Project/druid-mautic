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

/* @MauticSocial/Integration/Facebook/share.html.twig */
class __TwigTemplate_f47ff008f9c7d11c473c041bed99bbc6 extends Template
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
        $context["locale"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1);
        // line 2
        $context["settings"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, false, false, 2), [])) : ([]));
        // line 3
        $context["layout"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "layout", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "layout", [], "any", false, false, false, 3), "standard")) : ("standard"));
        // line 4
        $context["action"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "action", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "action", [], "any", false, false, false, 4), "like")) : ("like"));
        // line 5
        $context["showFaces"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "showFaces", [], "any", false, false, false, 5))) ? ("true") : ("false"));
        // line 6
        $context["showShare"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), "showShare", [], "any", false, false, false, 6))) ? ("true") : ("false"));
        // line 7
        $context["clientId"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "keys", [], "any", false, true, false, 7), "clientId", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "keys", [], "any", false, true, false, 7), "clientId", [], "any", false, false, false, 7), "")) : (""));
        // line 8
        yield "
";
        // line 10
        yield "<meta property=\"og:type\" content=\"website\" />
<div class=\"fb-";
        // line 11
        if (("share" == (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()))) {
            yield "share-button";
        } else {
            yield "like";
        }
        yield " share-button facebook-share-button layout-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 11, $this->source); })()), "html", null, true);
        yield " action-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\"
     data-";
        // line 12
        if (("share" == (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()))) {
            yield "type";
        } else {
            yield "layout";
        }
        yield "=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\"
     ";
        // line 13
        if (("share" != (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "       data-action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\"
       data-show-faces=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["showFaces"]) || array_key_exists("showFaces", $context) ? $context["showFaces"] : (function () { throw new RuntimeError('Variable "showFaces" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "\"
       data-share=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["showShare"]) || array_key_exists("showShare", $context) ? $context["showShare"] : (function () { throw new RuntimeError('Variable "showShare" does not exist.', 16, $this->source); })()), "html", null, true);
            yield "\"
     ";
        }
        // line 18
        yield "</div>
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/{\$locale}/sdk.js#xfbml=1&appId=";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Integration/Facebook/share.html.twig";
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
        return array (  108 => 24,  100 => 18,  95 => 16,  91 => 15,  86 => 14,  84 => 13,  74 => 12,  62 => 11,  59 => 10,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Facebook/share.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Facebook/share.html.twig");
    }
}
