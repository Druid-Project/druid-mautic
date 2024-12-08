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

/* @MauticSocial/macros.html.twig */
class __TwigTemplate_02c05fe82b4e56806ab2b64be73fc19d extends Template
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
        yield from [];
    }

    // line 1
    public function macro_profileImage($__profile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "profile" => $__profile__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "profileImage", [], "any", true, true, false, 2) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 2, $this->source); })()), "profileImage", [], "any", false, false, false, 2)))) {
                // line 3
                yield "    <div class=\"pull-left thumbnail\">
      <img src=\"";
                // line 4
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 4, $this->source); })()), "profileImage", [], "any", false, false, false, 4), "html", null, true);
                yield "\" width=\"100px\" class=\"media-object img-rounded\" />
    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/macros.html.twig";
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
        return array (  63 => 4,  60 => 3,  57 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/macros.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/macros.html.twig");
    }
}
