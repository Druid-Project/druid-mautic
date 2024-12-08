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

/* @MauticCore/Slots/saveprefsbutton.html.twig */
class __TwigTemplate_a9241bdd11591759227c357db6eb8b9f extends Template
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
        $context["style"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "style", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "style", [], "any", false, false, false, 1), "display:inline-block;text-decoration:none;border-color:#4e5d9d;border-width: 10px 20px;border-style:solid; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background-color: #4e5d9d; display: inline-block;font-size: 16px; color: #ffffff;")) : ("display:inline-block;text-decoration:none;border-color:#4e5d9d;border-width: 10px 20px;border-style:solid; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background-color: #4e5d9d; display: inline-block;font-size: 16px; color: #ffffff;"));
        // line 2
        $context["background"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "background", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["saveprefsbutton"] ?? null), "background", [], "any", false, false, false, 2), "")) : (""));
        // line 3
        yield "
";
        // line 4
        if (array_key_exists("form", $context)) {
            // line 5
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "lead_channels", [], "any", false, false, false, 5), "subscribed_channels", [], "any", false, false, false, 5), "setRendered", [], "method", false, false, false, 5);
            // line 6
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "buttons", [], "any", false, false, false, 6), "save", [], "any", false, false, false, 6), "setRendered", [], "method", false, false, false, 6);
            // line 7
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "buttons", [], "any", false, false, false, 7), "cancel", [], "any", false, false, false, 7), "setRendered", [], "method", false, false, false, 7);
            // line 8
            yield "    ";
            // line 9
            yield "    <script src=\"";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("app/bundles/PageBundle/Assets/js/prefcenter.js");
            yield "\"></script>

    ";
            // line 12
            yield "    ";
            // line 13
            yield "    ";
            // line 14
            yield "    ";
            if ((array_key_exists("custom_tag", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["custom_tag"]) || array_key_exists("custom_tag", $context) ? $context["custom_tag"] : (function () { throw new RuntimeError('Variable "custom_tag" does not exist.', 14, $this->source); })())))) {
                // line 15
                yield "        ";
                yield (isset($context["custom_tag"]) || array_key_exists("custom_tag", $context) ? $context["custom_tag"] : (function () { throw new RuntimeError('Variable "custom_tag" does not exist.', 15, $this->source); })());
                yield "
        ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addCustomDeclaration($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'rest'), "customTag"), "html", null, true);
                yield "
    ";
            } else {
                // line 18
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addCustomDeclaration($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'rest'), "bodyClose"), "html", null, true);
                yield "
    ";
            }
        }
        // line 21
        yield "
    <a href=\"javascript:void(null)\"
        class=\"button btn btn-ghost btn-save\"
        ";
        // line 24
        if (array_key_exists("form", $context)) {
            yield "onclick=\"saveUnsubscribePreferences('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
            yield "')\"";
        }
        // line 25
        yield "        style=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "\"
        background=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.form.saveprefs"), "html", null, true);
        yield "
    </a>
    <div style=\"clear:both\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Slots/saveprefsbutton.html.twig";
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
        return array (  112 => 27,  108 => 26,  103 => 25,  97 => 24,  92 => 21,  85 => 18,  80 => 16,  75 => 15,  72 => 14,  70 => 13,  68 => 12,  62 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/saveprefsbutton.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/saveprefsbutton.html.twig");
    }
}
