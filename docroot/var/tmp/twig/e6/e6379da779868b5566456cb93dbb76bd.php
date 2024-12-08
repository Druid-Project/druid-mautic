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

/* @MauticApi/Security/login.html.twig */
class __TwigTemplate_71665de38a59f3594ecf4765819762c1 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticUser/Security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticUser/Security/base.html.twig", "@MauticApi/Security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.oauth.header"), "html", null, true);
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "<form class=\"form-group login-form\" name=\"login\" data-toggle=\"ajax\" role=\"form\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 4, $this->source); })()));
        yield "\" method=\"post\">
    <div class=\"input-group mb-md\">
        <span class=\"input-group-addon\"><i class=\"ri-user-6-fill\"></i></span>
        <label for=\"username\" class=\"sr-only\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.auth.form.loginusername"), "html", null, true);
        yield "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control input-lg\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\" required autofocus placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.auth.form.loginusername"), "html", null, true);
        yield "\" />
    </div>
    <div class=\"input-group mb-md\">
        <span class=\"input-group-addon\"><i class=\"ri-key-2-line\"></i></span>
        <label for=\"password\" class=\"sr-only\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.password"), "html", null, true);
        yield ":</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control input-lg\" required placeholder=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.password"), "html", null, true);
        yield "\" />
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.auth.form.loginbtn"), "html", null, true);
        yield "</button>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticApi/Security/login.html.twig";
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
        return array (  99 => 15,  94 => 13,  90 => 12,  81 => 8,  77 => 7,  70 => 4,  63 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticApi/Security/login.html.twig", "/app/docroot/app/bundles/ApiBundle/Resources/views/Security/login.html.twig");
    }
}
