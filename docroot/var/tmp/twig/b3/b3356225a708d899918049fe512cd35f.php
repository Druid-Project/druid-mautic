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

/* @bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormSyncInterface.php */
class __TwigTemplate_5227ce4bfa06e03c64e5f31ac862d729 extends Template
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

use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;

interface ConfigFormSyncInterface extends IntegrationInterface
{
    /**
     * Return an array of Integration objects in the format of [\$object => \$translatableObjectNameString].
     * i.e. ['Customer' => 'mautic.something.object.customer', 'Account' => 'mautic.something.object.account'];.
     */
    public function getSyncConfigObjects(): array;

    /**
     * Return an array of Integration objects and what Mautic objects they are mapped to.
     * i.e. ['Customer' => Contact::NAME, 'Account' =>  Company::NAME];.
     */
    public function getSyncMappedObjects(): array;

    /**
     * Return an array of required fields.
     *
     * @return MappedFieldInfoInterface[]
     */
    public function getRequiredFieldsForMapping(string \$object): array;

    /**
     * Return an array of optional fields.
     *
     * @return MappedFieldInfoInterface[]
     */
    public function getOptionalFieldsForMapping(string \$object): array;

    /**
     * Return an array of all fields.
     *
     * @return MappedFieldInfoInterface[]
     */
    public function getAllFieldsForMapping(string \$object): array;

    /**
     * Return a custom form field name to be included in the features array specific to sync.
     */
    public function getSyncConfigFormName(): ?string;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormSyncInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormSyncInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Integration/Interfaces/ConfigFormSyncInterface.php");
    }
}
