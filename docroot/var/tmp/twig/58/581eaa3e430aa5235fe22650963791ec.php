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

/* @MauticEmailMarketing/FormTheme/EmailMarketing/layout.html.twig */
class __TwigTemplate_7988bfe0362cca4c1cd29473a884e132 extends Template
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
            'emailmarketing_constantcontact_row' => [$this, 'block_emailmarketing_constantcontact_row'],
            'emailmarketing_icontact_row' => [$this, 'block_emailmarketing_icontact_row'],
            'emailmarketing_mailchimp_row' => [$this, 'block_emailmarketing_mailchimp_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('emailmarketing_constantcontact_row', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('emailmarketing_icontact_row', $context, $blocks);
        // line 17
        yield "
";
        // line 18
        yield from $this->unwrap()->yieldBlock('emailmarketing_mailchimp_row', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_emailmarketing_constantcontact_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-md-8\">
          ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "list", [], "any", false, false, false, 4), 'row');
        yield "
      </div>
  </div>
  ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "sendWelcome", [], "any", false, false, false, 7), 'row');
        yield "
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_emailmarketing_icontact_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "list", [], "any", false, false, false, 13), 'row');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_emailmarketing_mailchimp_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "<div class=\"alert alert-info\">
    ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.emailmarketing.list.update"), "html", null, true);
        yield "
</div>
<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "list", [], "any", false, false, false, 24), 'row');
        yield "
    </div>
</div>

";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "doubleOptin", [], "any", false, false, false, 28), 'row');
        yield "
";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "sendWelcome", [], "any", false, false, false, 29), 'row');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmailMarketing/FormTheme/EmailMarketing/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 29,  128 => 28,  121 => 24,  114 => 20,  111 => 19,  104 => 18,  95 => 13,  91 => 11,  84 => 10,  77 => 7,  71 => 4,  67 => 2,  60 => 1,  55 => 18,  52 => 17,  50 => 10,  47 => 9,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmailMarketing/FormTheme/EmailMarketing/layout.html.twig", "/app/docroot/plugins/MauticEmailMarketingBundle/Resources/views/FormTheme/EmailMarketing/layout.html.twig");
    }
}
