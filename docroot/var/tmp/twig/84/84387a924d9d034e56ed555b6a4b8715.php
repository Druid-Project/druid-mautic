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

/* @bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php */
class __TwigTemplate_047b3fa911cb5652335c55ac7910449d extends Template
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
        yield "<?php

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Integration\\Interfaces;

interface ConfigFormInterface extends IntegrationInterface
{
    public function getDisplayName(): string;

    /**
     * Return the name/class of the form type to override the default or just return NULL to use the default.
     *
     * @return string|null Name of the form type service
     */
    public function getConfigFormName(): ?string;

    /**
     * Return the template to use from the controller. Return null to use the default.
     *
     * @return string|null Name of the template like SomethingBundle:Config:form.html.twig
     */
    public function getConfigFormContentTemplate(): ?string;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormInterface.php");
    }
}
