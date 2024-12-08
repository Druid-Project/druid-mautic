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

/* @bundles/FormBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_fce1e1cceea502563bb8a0a6fb777910 extends Template
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
        // line 1
        yield "mautic.form.error.notfound=\"No form with an id of %id% was found!\"
mautic.form.field.error.notfound=\"No form field with an id of %id% was found!\"
mautic.form.notice.batch_deleted=\"%count% forms have been deleted!\"
mautic.form.result.notice.batch_deleted=\"%count% form results have been deleted!\"
mautic.form.notice.batch_html_generated=\"{0}No forms were rebuilt.|{1}One form has been rebuilt.|]1,Inf[%count% forms have been rebuilt.\"
mautic.form.submit.error.expired=\"This form stopped accepting submissions on %date%.\"
mautic.form.submit.error.pending=\"This form start accepting submissions on %date%.\"
mautic.form.submit.error.unavailable=\"This form is no longer available.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Translations/en_US/flashes.ini";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/FormBundle/Translations/en_US/flashes.ini", "/app/docroot/app/bundles/FormBundle/Translations/en_US/flashes.ini");
    }
}
