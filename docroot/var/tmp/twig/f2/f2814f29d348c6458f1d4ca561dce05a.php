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

/* @MauticSocial/Integration/Foursquare/Profile/profile.html.twig */
class __TwigTemplate_38fc6caf4700769f20fb4293f40fa92d extends Template
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
        $macros["social"] = $this->macros["social"] = $this->loadTemplate("@MauticSocial//macros.html.twig", "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig", 1)->unwrap();
        // line 2
        $context["tableFields"] = ["gender", "homeCity", "bio"];
        // line 3
        yield "<div class=\"media\">
    ";
        // line 4
        yield CoreExtension::callMacro($macros["social"], "macro_profileImage", [(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 4, $this->source); })())], 4, $context, $this->getSourceContext());
        yield "
    <div class=\"media-body\">
        <h4 class=\"media-heading\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 6, $this->source); })()), "firstName", [], "any", false, false, false, 6), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 6, $this->source); })()), "lastName", [], "any", false, false, false, 6), "html", null, true);
        yield "</h4>
        <p class=\"text-muted\"><a href=\"https://foursquare.com/user/";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "profileHandle", [], "any", false, false, false, 7), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "profileHandle", [], "any", false, false, false, 7), "html", null, true);
        yield "</a></p>
        <table class=\"table table-condensed\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["tableFields"]) || array_key_exists("tableFields", $context) ? $context["tableFields"] : (function () { throw new RuntimeError('Variable "tableFields" does not exist.', 9, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()), [], "array", true, true, false, 9) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()), [], "array", false, false, false, 9))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 10
            yield "                <tr>
                    <td>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.integration.common." . $context["t"]), ("mautic.integration.Foursquare." . $context["t"])), "html", null, true);
            yield "</td>
                    <td>";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 12, $this->source); })()), $context["t"], [], "array", false, false, false, 12), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "        </table>
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
        return "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig";
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
        return array (  87 => 15,  78 => 12,  74 => 11,  71 => 10,  67 => 9,  60 => 7,  54 => 6,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/Foursquare/Profile/profile.html.twig");
    }
}
