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

/* @bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php */
class __TwigTemplate_0350ee2ae07595b61879815f6ecb013d extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Entity;

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use Mautic\\IntegrationsBundle\\Entity\\FieldChange;
use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Mautic\\LeadBundle\\Entity\\Company;
use PHPUnit\\Framework\\TestCase;

class FieldChangeRepositoryTest extends TestCase
{
    use RepositoryConfiguratorTrait;

    private FieldChangeRepository \$repository;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->repository = \$this->configureRepository(FieldChange::class);
        \$this->connection->method('createQueryBuilder')->willReturnCallback(fn () => new QueryBuilder(\$this->connection));
    }

    public function testWhereQueryPartForFindingChangesForSingleObject(): void
    {
        \$integration = 'test';
        \$objectType  = 'foobar';
        \$objectId    = 5;

        \$this->connection->expects(\$this->once())
            ->method('executeQuery')
            ->with(
                'SELECT * FROM '.MAUTIC_TABLE_PREFIX.'sync_object_field_change_report f WHERE (f.integration = :integration) AND (f.object_type = :objectType) AND (f.object_id = :objectId) ORDER BY f.modified_at ASC',
                [
                    'integration' => \$integration,
                    'objectType'  => \$objectType,
                    'objectId'    => \$objectId,
                ]
            );

        \$this->repository->findChangesForObject(\$integration, \$objectType, \$objectId);
    }

    public function testDeleteEntitiesForObject(): void
    {
        \$this->connection->expects(\$this->once())
            ->method('executeStatement')
            ->with(
                'DELETE FROM '.MAUTIC_TABLE_PREFIX.'sync_object_field_change_report WHERE (object_type = :objectType) AND (object_id = :objectId)',
                [
                    'objectType'  => Company::class,
                    'objectId'    => 123,
                ]
            )->willReturn(1);

        \$this->repository->deleteEntitiesForObject(123, Company::class);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Entity/FieldChangeRepositoryTest.php");
    }
}
