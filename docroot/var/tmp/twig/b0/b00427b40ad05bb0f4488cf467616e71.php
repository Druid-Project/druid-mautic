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

/* @MauticFocus/FormTheme/FocusShowList/focusshow_list_row.html.twig */
class __TwigTemplate_6671e6d8b7b278b679e7ab02c12e19eb extends Template
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
            'focusshow_list_row' => [$this, 'block_focusshow_list_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->unwrap()->yieldBlock('focusshow_list_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_focusshow_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "  ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        yield "
  <div class=\"row\">
      <div class=\"col-xs-12\">
          ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "focus", [], "any", false, false, false, 10), 'row');
        yield "
      </div>
      <div class=\"col-xs-12 mt-lg\">
          <div class=\"mt-3\">
              ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "newFocusButton", [], "any", false, false, false, 14), 'row');
        yield "
              ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "editFocusButton", [], "any", false, false, false, 15), 'row');
        yield "
          </div>
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
        return "@MauticFocus/FormTheme/FocusShowList/focusshow_list_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 15,  68 => 14,  61 => 10,  54 => 7,  43 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/FormTheme/FocusShowList/focusshow_list_row.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/FormTheme/FocusShowList/focusshow_list_row.html.twig");
    }
}
