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

/* @MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig */
class __TwigTemplate_80d9ee5dee42e7d732db901a79f204a8 extends Template
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
            'emailsend_list_row' => [$this, 'block_emailsend_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('emailsend_list_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_emailsend_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-xs-";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 3)) {
            yield "6";
        } else {
            yield "12";
        }
        yield " pr-0\">
          ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4), 'row');
        yield "
          <div class=\"mb-lg d-flex\">
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "newEmailButton", [], "any", false, false, false, 6), 'row');
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "editEmailButton", [], "any", false, false, false, 7), 'row');
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "previewEmailButton", [], "any", false, false, false, 8), 'row');
        yield "
        </div>
      </div>

      ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email_type", [], "any", true, true, false, 12)) {
            // line 13
            yield "          <div class=\"col-xs-12\">
              ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "email_type", [], "any", false, false, false, 14), 'row');
            yield "
          </div>
      ";
        }
        // line 17
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "priority", [], "any", true, true, false, 17)) {
            // line 18
            yield "          <div id=\"priority\" class=\"col-xs-5 queue_hide\">
              ";
            // line 19
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "priority", [], "any", false, false, false, 19), 'row');
            yield "
          </div>
      ";
        }
        // line 22
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attempts", [], "any", true, true, false, 22)) {
            // line 23
            yield "          <div id=\"attempts\" class=\"col-xs-5 queue_hide\">
              ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "attempts", [], "any", false, false, false, 24), 'row');
            yield "
          </div>
      ";
        }
        // line 27
        yield "  </div>
  <div class=\"row\">

  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  120 => 27,  114 => 24,  111 => 23,  108 => 22,  102 => 19,  99 => 18,  96 => 17,  90 => 14,  87 => 13,  85 => 12,  78 => 8,  74 => 7,  70 => 6,  65 => 4,  57 => 3,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/EmailSendList/emailsend_list_row.html.twig");
    }
}
