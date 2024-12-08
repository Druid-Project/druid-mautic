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

/* @MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig */
class __TwigTemplate_2bdddb31b86b59041d7464b3d5841d75 extends Template
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

        // line 1
        $_trait_0 = $this->loadTemplate("@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig", "@MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticEmail/FormTheme/EmailSendList/emailsend_list_row.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'email_to_user_row' => [$this, 'block_email_to_user_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('email_to_user_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_to_user_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  <div class=\"row\">
      <div class=\"col-md-6\">
          ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "user_id", [], "any", false, false, false, 6), 'row');
        yield "
      </div>
      <div class=\"col-md-6\">
          ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "to_owner", [], "any", false, false, false, 9), 'row');
        yield "
      </div>
  </div>
  ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "to", [], "any", false, false, false, 12), 'row');
        yield "
  ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "cc", [], "any", false, false, false, 13), 'row');
        yield "
  ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "bcc", [], "any", false, false, false, 14), 'row');
        yield "
  ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'rest');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  97 => 15,  93 => 14,  89 => 13,  85 => 12,  79 => 9,  73 => 6,  69 => 4,  58 => 3,  55 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/EmailSendList/email_to_user_row.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/EmailSendList/email_to_user_row.html.twig");
    }
}
