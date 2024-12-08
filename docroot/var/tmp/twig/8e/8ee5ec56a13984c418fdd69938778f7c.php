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

/* @MauticEmail/KeyboardShortcuts/emails_shortcuts.html.twig */
class __TwigTemplate_e9007d0d5a5e08a77a11ea53eb159d90 extends Template
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
        $context["shortcuts"] = ["emails" => ["s" => "mautic.keyboard.send_example"]];
        // line 6
        yield "
  ";
        // line 7
        yield from         $this->loadTemplate("@MauticCore/Helper/keyboard_shortcuts_helper.html.twig", "@MauticEmail/KeyboardShortcuts/emails_shortcuts.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["shortcuts" => (isset($context["shortcuts"]) || array_key_exists("shortcuts", $context) ? $context["shortcuts"] : (function () { throw new RuntimeError('Variable "shortcuts" does not exist.', 7, $this->source); })())]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/KeyboardShortcuts/emails_shortcuts.html.twig";
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
        return array (  47 => 7,  44 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/KeyboardShortcuts/emails_shortcuts.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/KeyboardShortcuts/emails_shortcuts.html.twig");
    }
}
