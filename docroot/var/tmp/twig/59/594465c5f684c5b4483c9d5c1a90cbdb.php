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

/* @MauticCore/Menu/profile.html.twig */
class __TwigTemplate_acf4fd4ce416444a43af2a515865eeb9 extends Template
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
        $context["inline"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MenuExtension']->menuRender("profile");
        // line 2
        yield "<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"ri-account-circle-line ri-xl\"></i>
    </a>
    <ul class=\"dropdown-menu dropdown-menu-right\">
        <li>
            <div class=\"dropdown-menu-user row-no-gutters fw-nowrap ma-md\">
                <span class=\"img-wrapper\"><img onerror=\"this.classList.add('hide')\" src=\"";
        // line 9
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "getUser", [], "method", false, false, false, 9), "getEmail", [], "method", false, false, false, 9));
        yield "\"></span>
                <span class=\"d-flex fd-column jc-center ml-sm info\">
                    <span class=\"text text-nowrap fw-sb\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "getUser", [], "method", false, false, false, 11), "getName", [], "method", false, false, false, 11), "html", null, true);
        yield "</span>
                    ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "getUser", [], "method", false, false, false, 12), "getPosition", [], "method", false, false, false, 12)) {
            // line 13
            yield "                        <span class=\"text-nowrap small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "getUser", [], "method", false, false, false, 13), "getPosition", [], "method", false, false, false, 13), "html", null, true);
            yield "</span>
                    ";
        }
        // line 15
        yield "                </span>
            </div>
        </li>
        
        <li>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_account");
        yield "\" data-toggle=\"ajax\">
                <i class=\"ri-user-smile-line ri-lg\"></i><span>";
        // line 21
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.settings", [], "messages");
        yield "</span>
            </a>
        </li>

        ";
        // line 25
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("user:users:create")) {
            // line 26
            yield "        <li>
            <a href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "new"]);
            yield "\">
                <i class=\"ri-team-line\"></i>
                <span>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.profile.invite"), "html", null, true);
            yield "</span>
            </a>
        </li>
        ";
        }
        // line 33
        yield "
        <li>
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_logout");
        yield "\">
                <i class=\"ri-logout-circle-r-line ri-lg\"></i><span>";
        // line 36
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.auth.logout", [], "messages");
        yield "</span>
            </a>
        </li>

        ";
        // line 40
        if ((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 40, $this->source); })())) {
            // line 41
            yield "        <li role=\"separator\" class=\"divider\"></li>
        ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 42, $this->source); })()), "html", null, true);
            yield "
        ";
        }
        // line 44
        yield "    </ul>
</li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Menu/profile.html.twig";
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
        return array (  130 => 44,  125 => 42,  122 => 41,  120 => 40,  113 => 36,  109 => 35,  105 => 33,  98 => 29,  93 => 27,  90 => 26,  88 => 25,  81 => 21,  77 => 20,  70 => 15,  64 => 13,  62 => 12,  58 => 11,  53 => 9,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Menu/profile.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Menu/profile.html.twig");
    }
}
