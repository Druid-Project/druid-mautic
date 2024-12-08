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

/* @MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig */
class __TwigTemplate_8fc77a187f858f9204b4d125abb59196 extends Template
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
        // line 2
        $context["utmTagsContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "utmTags", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["i"] => $context["utmTag"]) {
                // line 4
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['i'], $context['utmTag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        yield "<div class=\"row\">
";
        // line 8
        yield from         $this->loadTemplate("@MauticCore/Helper/accordion.html.twig", "@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig", 8)->unwrap()->yield(CoreExtension::merge($context, ["items" => [["id" => "UTM", "title" => "mautic.email.utm_tags", "content" =>         // line 13
(isset($context["utmTagsContent"]) || array_key_exists("utmTagsContent", $context) ? $context["utmTagsContent"] : (function () { throw new RuntimeError('Variable "utmTagsContent" does not exist.', 13, $this->source); })())]]]));
        // line 17
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig";
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
        return array (  66 => 17,  64 => 13,  63 => 8,  60 => 7,  49 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Fields/_utm_tags_fields.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Fields/_utm_tags_fields.html.twig");
    }
}
