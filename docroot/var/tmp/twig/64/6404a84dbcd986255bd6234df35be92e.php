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

/* @MauticEmail/Send/form.html.twig */
class __TwigTemplate_c6efeecd80b348dcb4cf3ad4bb278b5f extends Template
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Send/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "emailSend";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.list", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]));
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"row\">
        <div class=\"col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6\">
            <div class=\"ml-lg mr-lg mt-md pa-lg\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-body\">
                        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                        <div class=\"col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8\">
                            <div class=\"well mt-lg\">
                                <div class=\"input-group\">
                                <span class=\"input-group-btn text-center\">";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/confirm.html.twig", ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.form.confirmsend", ["%name%" => CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "getName", [], "method", false, false, false, 19)]), "confirmText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send"), "confirmCallback" => "submitSendForm", "iconClass" => "ri-send-plane-line-o", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send"), "btnClass" => ("btn btn-primary btn-send" . ((        // line 24
(isset($context["pending"]) || array_key_exists("pending", $context) ? $context["pending"] : (function () { throw new RuntimeError('Variable "pending" does not exist.', 24, $this->source); })())) ? ("") : (" disabled")))]);
        // line 26
        yield "</span>
                                </div>
                                <div class=\"text-center\">
                                <span class=\"label label-primary mt-lg\">
                                    ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.pending", ["%count%" => (isset($context["pending"]) || array_key_exists("pending", $context) ? $context["pending"] : (function () { throw new RuntimeError('Variable "pending" does not exist.', 30, $this->source); })())]), "html", null, true);
        yield "
                                </span>
                                    <div class=\"mt-sm\">
                                        <a class=\"text-danger mt-md\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "getId", [], "method", false, false, false, 33)]), "html", null, true);
        yield "\" data-toggle=\"ajax\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "html", null, true);
        yield "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
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
        return "@MauticEmail/Send/form.html.twig";
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
        return array (  122 => 38,  112 => 33,  106 => 30,  100 => 26,  98 => 24,  97 => 19,  96 => 18,  89 => 13,  82 => 8,  75 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Send/form.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Send/form.html.twig");
    }
}
