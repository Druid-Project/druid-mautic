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

/* @MauticLead/Import/_upload_form.html.twig */
class __TwigTemplate_9d21bc4d5c610d45f9ce60177275d089 extends Template
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
        // line 5
        $context["uploadMaxFilesize"] = Twig\Extension\CoreExtension::replace($this->env->getFunction('ini_get')->getCallable()("upload_max_filesize"), ["M" => ""]);
        // line 6
        yield "<div class=\"row\">
    <div class=\"col-sm-offset-3 col-sm-6\">
        <div class=\"ml-lg mr-lg mt-md pa-lg\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.start.instructions", ["%size%" => (isset($context["uploadMaxFilesize"]) || array_key_exists("uploadMaxFilesize", $context) ? $context["uploadMaxFilesize"] : (function () { throw new RuntimeError('Variable "uploadMaxFilesize" does not exist.', 11, $this->source); })())]), "html", null, true);
        yield "</div>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
                    <div class=\"input-group well mt-lg\">
                        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "file", [], "any", false, false, false, 16), 'widget');
        yield "
                        <span class=\"input-group-btn\">
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "start", [], "any", false, false, false, 18), 'widget');
        yield "
                        </span>
                    </div>

                    <div class=\"d-flex fd-row-md fd-column fw-wrap fw-nowrap-md gap-md\">
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "batchlimit", [], "any", false, false, false, 23), 'row');
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "delimiter", [], "any", false, false, false, 24), 'row');
        yield "
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "enclosure", [], "any", false, false, false, 25), 'row');
        yield "
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "escape", [], "any", false, false, false, 26), 'row');
        yield "
                    </div>
                    ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
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
        return "@MauticLead/Import/_upload_form.html.twig";
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
        return array (  92 => 28,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  67 => 18,  62 => 16,  57 => 14,  51 => 11,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/_upload_form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/_upload_form.html.twig");
    }
}
