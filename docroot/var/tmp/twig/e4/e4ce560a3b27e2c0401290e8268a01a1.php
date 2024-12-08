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

/* @MauticUser/User/form.html.twig */
class __TwigTemplate_290075edf2b18a0e226d96fea9a6024c extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["userId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4), "getId", [], "method", false, false, false, 4);
        // line 5
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 5, $this->source); })()))) {
            // line 6
            $context["user"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "getName", [], "method", false, false, false, 6);
            // line 7
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.header.edit", ["%name%" => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })())]);
        } else {
            // line 9
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.user.header.new");
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/User/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "user
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "
";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "
\t<!-- start: box layout -->
\t<div
\t\tclass=\"box-layout\">
\t\t<!-- container -->
\t\t";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        yield "
\t\t<div class=\"col-md-9 height-auto bdr-r\">
\t\t\t<div class=\"pa-md\">
\t\t\t\t<div class=\"form-group mb-0\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6";
        // line 28
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t<h3 class=\"mb-lg mt-lg\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.personal_information"), "html", null, true);
        yield "</h3>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "firstName", [], "any", false, false, false, 31), 'label');
        yield "</label>
\t\t\t\t\t\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "label", [], "any", false, false, false, 32)]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "firstName", [], "any", false, false, false, 33), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 35
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "lastName", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "lastName", [], "any", false, false, false, 36), 'label');
        yield "</label>
\t\t\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "label", [], "any", false, false, false, 37)]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lastName", [], "any", false, false, false, 38), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 40
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "role", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "role", [], "any", false, false, false, 41), 'label');
        yield "</label>
\t\t\t\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "label", [], "any", false, false, false, 42)]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "role", [], "any", false, false, false, 43), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group pb-lg";
        // line 45
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "position", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "position", [], "any", false, false, false, 46), 'label');
        yield "</label>
\t\t\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "position", [], "any", false, false, false, 47), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "position", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "label", [], "any", false, false, false, 47)]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "position", [], "any", false, false, false, 48), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group pt-md";
        // line 50
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "signature", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t\t<label class=\"control-label mb-xs\">";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "signature", [], "any", false, false, false, 51), 'label');
        yield "</label>
\t\t\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "signature", [], "any", false, false, false, 52), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "signature", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52)]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "signature", [], "any", false, false, false, 53), 'errors');
        yield "
\t\t\t\t\t\t\t\t<p class=\"help-text\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.signature.admin.helper"), "html", null, true);
        yield " </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<h3 class=\"mb-lg mt-lg\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.account_data_security"), "html", null, true);
        yield "</h3>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 59
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "username", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "username", [], "any", false, false, false, 60), 'label');
        yield "
\t\t\t\t\t\t\t\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61)]]);
        yield "
\t\t\t\t\t\t\t\t\t";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "username", [], "any", false, false, false, 62), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group";
        // line 64
        yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64))) ? (" has-error") : (""));
        yield "\">
\t\t\t\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "label", [], "any", false, false, false, 66)]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email", [], "any", false, false, false, 67), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "plainPassword", [], "any", false, false, false, 69), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "plainPassword", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "label", [], "any", false, false, false, 69)]]);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-3 height-auto\">
\t\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t\t<h3 class=\"mb-lg mt-lg\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.title.locale"), "html", null, true);
        yield "</h3>
\t\t\t\t";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'rest');
        yield "
\t\t\t</div>
\t\t</div>
\t\t";
        // line 81
        if ((array_key_exists("editAction", $context) && ((isset($context["editAction"]) || array_key_exists("editAction", $context) ? $context["editAction"] : (function () { throw new RuntimeError('Variable "editAction" does not exist.', 81, $this->source); })()) == true))) {
            // line 82
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticUser/User/recent_activity.html.twig", ["logs" =>             // line 83
(isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 83, $this->source); })()), "users" =>             // line 84
(isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 84, $this->source); })()), "roles" =>             // line 85
(isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 85, $this->source); })())]);
        }
        // line 88
        yield "
\t\t";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        yield "
\t</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/User/form.html.twig";
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
        return array (  281 => 89,  278 => 88,  275 => 85,  274 => 84,  273 => 83,  272 => 82,  270 => 81,  264 => 78,  260 => 77,  249 => 69,  244 => 67,  240 => 66,  236 => 65,  232 => 64,  227 => 62,  223 => 61,  219 => 60,  215 => 59,  211 => 58,  204 => 54,  200 => 53,  196 => 52,  192 => 51,  188 => 50,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  166 => 43,  162 => 42,  158 => 41,  154 => 40,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  132 => 33,  128 => 32,  124 => 31,  119 => 29,  115 => 28,  107 => 23,  100 => 18,  93 => 17,  85 => 13,  78 => 12,  66 => 2,  61 => 1,  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/User/form.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/User/form.html.twig");
    }
}
