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

/* @MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig */
class __TwigTemplate_a50422097bac13b4636f90a5a590ed93 extends Template
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
            '_formaction_properties_useremail_row' => [$this, 'block__formaction_properties_useremail_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield from $this->unwrap()->yieldBlock('_formaction_properties_useremail_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__formaction_properties_useremail_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "  <div class=\"row\">
      <div class=\"col-xs-";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 6)) {
            yield "7";
        } else {
            yield "12";
        }
        yield "\">
          ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "email", [], "any", false, false, false, 7), 'row');
        yield "
      </div>
      ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 9)) {
            // line 10
            yield "          <div class=\"col-xs-5\">
              ";
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email_type", [], "any", false, false, false, 11), 'row');
            yield "
          </div>
      ";
        }
        // line 14
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", true, true, false, 14)) {
            // line 15
            yield "          <div id=\"priority\" class=\"col-xs-5 queue_hide\">
              ";
            // line 16
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "priority", [], "any", false, false, false, 16), 'row');
            yield "
          </div>
      ";
        }
        // line 19
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attempts", [], "any", true, true, false, 19)) {
            // line 20
            yield "          <div id=\"attempts\" class=\"col-xs-5 queue_hide\">
              ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "attempts", [], "any", false, false, false, 21), 'row');
            yield "
          </div>
      ";
        }
        // line 24
        yield "  </div>
  <div class=\"row mb-5\">
      <div class=\"col-xs-12\">
          ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "newEmailButton", [], "any", false, false, false, 27), 'row');
        yield "
          ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "editEmailButton", [], "any", false, false, false, 28), 'row');
        yield "
          ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "previewEmailButton", [], "any", false, false, false, 29), 'row');
        yield "
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
        return "@MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  118 => 29,  114 => 28,  110 => 27,  105 => 24,  99 => 21,  96 => 20,  93 => 19,  87 => 16,  84 => 15,  81 => 14,  75 => 11,  72 => 10,  70 => 9,  65 => 7,  57 => 6,  54 => 5,  43 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/FormAction/_formaction_properties_useremail_row.html.twig");
    }
}
