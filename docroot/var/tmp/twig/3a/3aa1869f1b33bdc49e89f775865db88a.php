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

/* @MauticCore/FormTheme/Config/iplookup_download_data_store_button_row.html.twig */
class __TwigTemplate_ff568eadaad9d6ebdbad3ee6c5460b3b extends Template
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
            'iplookup_download_data_store_button_row' => [$this, 'block_iplookup_download_data_store_button_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('iplookup_download_data_store_button_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iplookup_download_data_store_button_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"row\">
    <div class=\"col-sm-6\">
        <div id=\"iplookup_fetch_button_container\">
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "fetch_button", [], "any", false, false, false, 5), 'widget');
        yield "
            <span class=\"ri-loader-3-line ri-spin hide\"></span>
            ";
        // line 7
        if (array_key_exists("ipDataStoreLastDownloaded", $context)) {
            // line 8
            yield "              <div class=\"small text-muted\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ipDataStoreLastDownloaded"]) || array_key_exists("ipDataStoreLastDownloaded", $context) ? $context["ipDataStoreLastDownloaded"] : (function () { throw new RuntimeError('Variable "ipDataStoreLastDownloaded" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "</div>
            ";
        }
        // line 10
        yield "        </div>
        <div class=\"col-md-9 help-block\"></div>
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
        return "@MauticCore/FormTheme/Config/iplookup_download_data_store_button_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  72 => 10,  66 => 8,  64 => 7,  59 => 5,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/Config/iplookup_download_data_store_button_row.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/Config/iplookup_download_data_store_button_row.html.twig");
    }
}
