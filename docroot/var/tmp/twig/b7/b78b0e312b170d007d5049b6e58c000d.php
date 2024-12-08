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

/* @MauticCore/Update/schema.html.twig */
class __TwigTemplate_1ad0f203d12d8cb1c0b5a64abacd4742 extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCore/Update/schema.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "update";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.index"), "html", null, true);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        $context["message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.schema_updated");
        // line 14
        $context["class"] = "success";
        // line 16
        if ((isset($context["failed"]) || array_key_exists("failed", $context) ? $context["failed"] : (function () { throw new RuntimeError('Variable "failed" does not exist.', 16, $this->source); })())) {
            // line 17
            $context["message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.error_performing_migration");
            // line 18
            $context["class"] = "danger";
        } elseif (        // line 19
(isset($context["noMigrations"]) || array_key_exists("noMigrations", $context) ? $context["noMigrations"] : (function () { throw new RuntimeError('Variable "noMigrations" does not exist.', 19, $this->source); })())) {
            // line 20
            $context["message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.schema_uptodate");
            // line 21
            $context["class"] = "info";
        }
        // line 23
        yield "<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
    <div id=\"update-panel\" class=\"panel-body\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"alert alert-";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 26, $this->source); })()), "html", null, true);
        yield " mb-sm\">
                ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "
            </div>";
        // line 29
        if ( !(isset($context["failed"]) || array_key_exists("failed", $context) ? $context["failed"] : (function () { throw new RuntimeError('Variable "failed" does not exist.', 29, $this->source); })())) {
            // line 30
            yield "                <div class=\"text-center\">
                    ";
            // line 31
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCore/Update/schema.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.go_to_dashboard", "variant" => "primary", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_index"), "icon" => "ri-funds-fill", "attributes" => ["data-toggle" => "ajax"]]]]));
            // line 44
            yield "                </div>";
        }
        // line 46
        yield "        </div>
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
        return "@MauticCore/Update/schema.html.twig";
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
        return array (  122 => 46,  119 => 44,  117 => 31,  114 => 30,  112 => 29,  108 => 27,  104 => 26,  99 => 23,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  88 => 17,  86 => 16,  84 => 14,  82 => 13,  75 => 12,  64 => 10,  53 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Update/schema.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Update/schema.html.twig");
    }
}
