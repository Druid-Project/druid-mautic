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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Mapping/MappingManualDAOTest.php */
class __TwigTemplate_950f137d04c5023e5dd119415f20b8ef extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO\\Mapping;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use PHPUnit\\Framework\\TestCase;

class MappingManualDAOTest extends TestCase
{
    private \$integrationName       = 'Test';

    private \$integrationObjectName = 'Contact';

    public function testMappedIntegrationNamesAreReturnedBasedOnInternalObjectName(): void
    {
        \$this->assertEquals(
            [\$this->integrationObjectName],
            \$this->getMappingManualDAO()->getIntegrationObjectNames(Contact::NAME)
        );
    }

    public function testMappedInternalNamesAreReturnedBasedOnIntegrationObjectName(): void
    {
        \$this->assertEquals(
            [Contact::NAME],
            \$this->getMappingManualDAO()->getInternalObjectNames(\$this->integrationObjectName)
        );
    }

    public function testThatOneWayInternalObjectFieldsAreNotReturnedWhenNotRequired(): void
    {
        \$this->assertEquals(
            [
                'email',    // required and bidirectional
                'country',  // bidirectional
                'firstname', // sync from mautic to integration
            ],
            \$this->getMappingManualDAO()->getInternalObjectFieldsToSyncToIntegration(Contact::NAME)
        );
    }

    public function testThatRequiredInternalObjectFieldsAreReturned(): void
    {
        \$this->assertEquals(
            ['email'],
            \$this->getMappingManualDAO()->getInternalObjectRequiredFieldNames(Contact::NAME)
        );
    }

    public function testThatOneWayIntegrationObjectFieldsAreNotReturnedWhenNotRequired(): void
    {
        \$this->assertEquals(
            [
                'email',    // required and bidirectional
                'country',  // bidirectional
                'last_name', // sync from mautic to integration
            ],
            \$this->getMappingManualDAO()->getIntegrationObjectFieldsToSyncToMautic(\$this->integrationObjectName)
        );
    }

    public function testThatRequiredIntegrationObjectFieldsAreReturned(): void
    {
        \$this->assertEquals(
            ['email'],
            \$this->getMappingManualDAO()->getIntegrationObjectRequiredFieldNames(\$this->integrationObjectName)
        );
    }

    public function testMappedIntegrationFieldIsReturned(): void
    {
        \$this->assertEquals(
            'last_name',
            \$this->getMappingManualDAO()->getIntegrationMappedField(
                \$this->integrationObjectName,
                Contact::NAME,
                'lastname'
            )
        );
    }

    public function testMappedInternalFieldIsReturned(): void
    {
        \$this->assertEquals(
            'lastname',
            \$this->getMappingManualDAO()->getInternalMappedField(
                Contact::NAME,
                \$this->integrationObjectName,
                'last_name'
            )
        );
    }

    private function getMappingManualDAO()
    {
        \$mappingManual = new MappingManualDAO(\$this->integrationName);
        \$objectMapping = new ObjectMappingDAO(Contact::NAME, \$this->integrationObjectName);
        \$objectMapping->addFieldMapping('email', 'email', ObjectMappingDAO::SYNC_BIDIRECTIONALLY, true);
        \$objectMapping->addFieldMapping('country', 'country', ObjectMappingDAO::SYNC_BIDIRECTIONALLY);
        \$objectMapping->addFieldMapping('firstname', 'first_name', ObjectMappingDAO::SYNC_TO_INTEGRATION);
        \$objectMapping->addFieldMapping('lastname', 'last_name', ObjectMappingDAO::SYNC_TO_MAUTIC);

        \$mappingManual->addObjectMapping(\$objectMapping);

        return \$mappingManual;
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Mapping/MappingManualDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Mapping/MappingManualDAOTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Mapping/MappingManualDAOTest.php");
    }
}
