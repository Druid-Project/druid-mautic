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

/* @MauticForm/FormTheme/FormAction/_formaction_properties_row.html.twig */
class __TwigTemplate_e2ce8cde439c2e090b50b499ba652719 extends Template
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
            '_formaction_properties_row' => [$this, 'block__formaction_properties_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_formaction_properties_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__formaction_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-sm-8\">";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3), 'row');
        yield "</div>
      <div class=\"col-sm-4\">
          ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "immediately", [], "any", false, false, false, 5), 'row');
        yield "
          ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "set_replyto", [], "any", false, false, false, 6), 'row');
        yield "
      </div>
  </div>
  <div class=\"row\">
      <div class=\"col-sm-8\" id=\"emailMessage\">";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "message", [], "any", false, false, false, 10), 'row');
        yield "</div>
      <div class=\"col-sm-4\">
          ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email_to_owner", [], "any", false, false, false, 12), 'row');
        yield "
          ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "copy_lead", [], "any", false, false, false, 13), 'row');
        yield "
          <label class=\"control-label\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.action.sendemail.dragfield"), "html", null, true);
        yield "</label>
          <div id=\"formFieldTokens\" class=\"list-group\" style=\"max-height: 250px; overflow-y: auto;\">
              ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["token"] => $context["field"]) {
            // line 17
            yield "                <a class=\"list-group-item ellipsis\" href=\"#\" onclick=\"Mautic.insertTextInEditor(mQuery('#formaction_properties_message'), '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["token"], "html", null, true);
            yield "');\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
            yield "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['token'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "          </div>
      </div>
  </div>
  ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "templates", [], "any", false, false, false, 22), 'row');
        yield "
  ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "to", [], "any", false, false, false, 23), 'row');
        yield "
  ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "cc", [], "any", false, false, false, 24), 'row');
        yield "
  ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "bcc", [], "any", false, false, false, 25), 'row');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/FormTheme/FormAction/_formaction_properties_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  123 => 25,  119 => 24,  115 => 23,  111 => 22,  106 => 19,  95 => 17,  91 => 16,  86 => 14,  82 => 13,  78 => 12,  73 => 10,  66 => 6,  62 => 5,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/FormTheme/FormAction/_formaction_properties_row.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/FormTheme/FormAction/_formaction_properties_row.html.twig");
    }
}
