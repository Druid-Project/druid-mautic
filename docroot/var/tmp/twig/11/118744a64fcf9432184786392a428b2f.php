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

/* @MauticForm/FormTheme/FieldValueCondition/_campaignevent_form_field_value_widget.html.twig */
class __TwigTemplate_ae6a476cda0fe0fb58bec34ae4718e41 extends Template
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
            '_campaignevent_form_field_value_widget' => [$this, 'block__campaignevent_form_field_value_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_campaignevent_form_field_value_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__campaignevent_form_field_value_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-xs-12\">
          ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "form", [], "any", false, false, false, 4), 'row');
        yield "
      </div>
  </div>
  <div class=\"row\">
      <div class=\"col-xs-4\">
          ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "field", [], "any", false, false, false, 9), 'row');
        yield "
      </div>
      <div class=\"col-xs-4\">
          ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "operator", [], "any", false, false, false, 12), 'row');
        yield "
      </div>
      <div class=\"col-xs-4\">
          ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "value", [], "any", false, false, false, 15), 'row');
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
        return "@MauticForm/FormTheme/FieldValueCondition/_campaignevent_form_field_value_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  78 => 15,  72 => 12,  66 => 9,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/FormTheme/FieldValueCondition/_campaignevent_form_field_value_widget.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/FormTheme/FieldValueCondition/_campaignevent_form_field_value_widget.html.twig");
    }
}
