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

/* @LightSamlSp/sessions.html.twig */
class __TwigTemplate_4adae4745d79b63f5d75f0379254a69a extends Template
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
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
</head>
<body>

<h1>SAML Sessions</h1>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 11
            yield "    <ul data-session>
        <li data-idp=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "idpEntityId", [], "any", false, false, false, 12), "html", null, true);
            yield "\">IDP: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "idpEntityId", [], "any", false, false, false, 12), "html", null, true);
            yield "</li>
        <li data-sp=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "spEntityId", [], "any", false, false, false, 13), "html", null, true);
            yield "\">SP: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "spEntityId", [], "any", false, false, false, 13), "html", null, true);
            yield "</li>
        <li>NameID: ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "nameId", [], "any", false, false, false, 14), "html", null, true);
            yield "</li>
        <li>NameIDFormat: ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "nameIdFormat", [], "any", false, false, false, 15), "html", null, true);
            yield "</li>
        <li>SessionIndex: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionIndex", [], "any", false, false, false, 16), "html", null, true);
            yield "</li>
        <li>AuthnInstant: ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "sessionInstant", [], "any", false, false, false, 17), "Y-m-d H:i:s P"), "html", null, true);
            yield "</li>
        <li>FirstAuthOn: ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "firstAuthOn", [], "any", false, false, false, 18), "Y-m-d H:i:s P"), "html", null, true);
            yield "</li>
        <li>LastAuthOn: ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "lastAuthOn", [], "any", false, false, false, 19), "Y-m-d H:i:s P"), "html", null, true);
            yield "</li>
    </ul>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "    <p>There are no SAML sessions established</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['session'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@LightSamlSp/sessions.html.twig";
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
        return array (  108 => 24,  101 => 22,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  67 => 13,  61 => 12,  58 => 11,  53 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@LightSamlSp/sessions.html.twig", "/app/vendor/lightsaml/sp-bundle/src/LightSaml/SpBundle/Resources/views/sessions.html.twig");
    }
}
