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

/* @bundles/IntegrationsBundle/Tests/Functional/Services/SyncService/TestExamples/Integration/ExampleIntegration.php */
class __TwigTemplate_b5dd1a15d3b668d4d577ff161620ae09 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncService\\TestExamples\\Integration;

use Mautic\\IntegrationsBundle\\Integration\\BasicIntegration;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\IntegrationInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\SyncInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\SyncDataExchangeInterface;
use Mautic\\IntegrationsBundle\\Tests\\Functional\\Services\\SyncService\\TestExamples\\Sync\\SyncDataExchange\\ExampleSyncDataExchange;

final class ExampleIntegration extends BasicIntegration implements IntegrationInterface, SyncInterface
{
    public const NAME = 'Example';

    public function __construct(
        private ExampleSyncDataExchange \$syncDataExchange
    ) {
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function isConfigured(): bool
    {
        return true;
    }

    public function isAuthorized(): bool
    {
        return true;
    }

    /**
     * Get if data priority is enabled in the integration or not default is false.
     */
    public function getDataPriority(): bool
    {
        return true;
    }

    public function getSyncDataExchange(): SyncDataExchangeInterface
    {
        return \$this->syncDataExchange;
    }

    public function getMappingManual(): MappingManualDAO
    {
        // Generate mapping manual that will be passed to the sync service. This instructs the sync service how to map Mautic fields to integration fields
        \$mappingManual = new MappingManualDAO(self::NAME);

        // Each object like lead, contact, user, company, account, etc, will need it's own ObjectMappingDAO
        // In this example, Mautic's Contact object is mapped to the Example's Lead object
        \$leadObjectMapping = new ObjectMappingDAO(
            Contact::NAME,
            ExampleSyncDataExchange::OBJECT_LEAD
        );
        \$mappingManual->addObjectMapping(\$leadObjectMapping);

        // Get field mapping as configured in Mautic's integration config
        \$mappedFields = \$this->getConfiguredFieldMapping();

        foreach (\$mappedFields as \$integrationField => \$mauticField) {
            // In this case, we're just adding each field to each of the objects
            // Of course, other integrations may need more logic

            // Sync bidirectionally by default but also can use ObjectMappingDAO::SYNC_TO_MAUTIC or ObjectMappingDAO::SYNC_TO_INTEGRATION

            if ('email' === \$mauticField) {
                // Set email as a required field so that it maps a value regardless if changed
                \$leadObjectMapping->addFieldMapping(\$mauticField, \$integrationField, ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
            } else {
                \$leadObjectMapping->addFieldMapping(\$mauticField, \$integrationField);
            }
        }

        return \$mappingManual;
    }

    /**
     * Likely will get this mapping out of the Integration's settings.
     *
     * @return array
     */
    private function getConfiguredFieldMapping()
    {
        return [
            'first_name' => 'firstname',
            'last_name'  => 'lastname',
            'email'      => 'email',
            'street1'    => 'address1',
        ];
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Tests/Functional/Services/SyncService/TestExamples/Integration/ExampleIntegration.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/Services/SyncService/TestExamples/Integration/ExampleIntegration.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Functional/Services/SyncService/TestExamples/Integration/ExampleIntegration.php");
    }
}
