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

/* @MauticForm/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig */
class __TwigTemplate_c46e1702507baac2cd7397c23742750b extends Template
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
            '_submit_action_repost_widget' => [$this, 'block__submit_action_repost_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_submit_action_repost_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__submit_action_repost_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "post_url", [], "any", false, false, false, 4), 'row');
        yield "
      </div>
  </div>

  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "failure_email", [], "any", false, false, false, 10), 'row');
        yield "
      </div>
  </div>

  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "authorization_header", [], "any", false, false, false, 16), 'row');
        yield "
      </div>
  </div>

  <h4>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.action.repost.field_mapping"), "html", null, true);
        yield "</h4>
  <div class=\"row mt-lg\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["child"]) {
            // line 23
            yield "        ";
            if (!CoreExtension::inFilter($context["k"], ["post_url", "failure_email", "authorization_header"])) {
                // line 24
                yield "          <div class=\"col-sm-6\">
              ";
                // line 25
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                yield "
          </div>
        ";
            }
            // line 28
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  110 => 29,  104 => 28,  98 => 25,  95 => 24,  92 => 23,  88 => 22,  83 => 20,  76 => 16,  67 => 10,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/FormTheme/SubmitAction/_submit_action_repost_widget.html.twig");
    }
}
