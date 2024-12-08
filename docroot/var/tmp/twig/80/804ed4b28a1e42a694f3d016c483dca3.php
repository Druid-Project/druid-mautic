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

/* @bundles/IntegrationsBundle/Tests/Functional/Entity/FieldChangeRepositoryTest.php */
class __TwigTemplate_e83e34055106da5fd7325578707d5a1b extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\IntegrationsBundle\\Entity\\FieldChange;
use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class FieldChangeRepositoryTest extends MauticMysqlTestCase
{
    private const INTEGRATION = 'someIntegration';
    private const COLUMN_NAME = 'some_column';
    private const OBJECT_ID   = 100;

    private FieldChangeRepository \$repository;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->repository = \$this->em->getRepository(FieldChange::class);
    }

    public function testThatFindChangesBeforeMethodReturnsChangesInCorrectOrder(): void
    {
        \$lead1        = \$this->createLead();
        \$lead2        = \$this->createLead();
        \$lead3        = \$this->createLead();
        \$lead4        = \$this->createLead();
        \$fieldChanges = \$this->generateFieldChanges(4);
        \$fieldChanges[0]->setObjectId((int) \$lead3->getId());
        \$fieldChanges[1]->setObjectId((int) \$lead4->getId());
        \$fieldChanges[2]->setObjectId((int) \$lead1->getId());
        \$fieldChanges[3]->setObjectId((int) \$lead2->getId());

        foreach (\$fieldChanges as \$fieldChange) {
            \$this->em->persist(\$fieldChange);
        }

        \$this->em->flush();

        \$this->deleteLead(\$lead2);

        \$changes = \$this->repository->findChangesBefore(
            static::INTEGRATION,
            Lead::class,
            \$this->getNow()->modify('+30 seconds'),
            null,
            2
        );

        Assert::assertEquals(\$lead1->getId(), \$changes[0]['object_id']);
        Assert::assertEquals(\$lead3->getId(), \$changes[1]['object_id'], 'Lead 2 record is not fetched as lead 2 is deleted');
    }

    public function testThatItDoesntDeleteObjectsThatCameDuringInternalSynchronization(): void
    {
        \$now          = \$this->getNow();
        \$fieldChanges = \$this->generateFieldChanges(2);
        \$aDayLater    = (clone \$now)->modify('+1 day'); // Don't use \\DateTimeImmutable because entity expects \\DateTime
        \$fieldChanges[1]->setModifiedAt(\$aDayLater);

        foreach (\$fieldChanges as \$fieldChange) {
            \$this->em->persist(\$fieldChange);
        }

        \$this->em->flush();

        \$this->repository->deleteEntitiesForObject(
            static::OBJECT_ID,
            Lead::class,
            static::INTEGRATION,
            \$now->modify('+30 seconds')
        );

        \$remainingChanges = \$this->repository->findAll();
        Assert::assertCount(1, \$remainingChanges);
        Assert::assertSame(\$fieldChanges[1]->getId(), \$remainingChanges[0]->getId());
    }

    /**
     * @return FieldChange[]
     */
    private function generateFieldChanges(int \$quantity): array
    {
        \$fieldChanges = [];
        \$now          = \$this->getNow();
        for (\$i = 1; \$i <= \$quantity; ++\$i) {
            \$fieldChange = new FieldChange();
            \$fieldChange->setIntegration(static::INTEGRATION);
            \$fieldChange->setObjectId(static::OBJECT_ID);
            \$fieldChange->setObjectType(Lead::class);
            \$fieldChange->setModifiedAt(\$now);
            \$fieldChange->setColumnName(static::COLUMN_NAME);
            \$fieldChange->setColumnType('string');
            \$fieldChange->setColumnValue((string) \$i);

            \$fieldChanges[] = \$fieldChange;
        }

        return \$fieldChanges;
    }

    private function createLead(): Lead
    {
        \$lead = new Lead();
        \$this->em->persist(\$lead);
        \$this->em->flush();

        return \$lead;
    }

    private function deleteLead(Lead \$lead): void
    {
        \$qb2 = \$this->em->getConnection()->createQueryBuilder();
        \$qb2->delete(MAUTIC_TABLE_PREFIX.'leads')
            ->where(
                \$qb2->expr()->eq('id', \$lead->getId())
            );

        \$qb2->executeStatement();
    }

    private function getNow(): \\DateTime
    {
        return new \\DateTime('now', new \\DateTimeZone('UTC'));
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
        return "@bundles/IntegrationsBundle/Tests/Functional/Entity/FieldChangeRepositoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/Entity/FieldChangeRepositoryTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Functional/Entity/FieldChangeRepositoryTest.php");
    }
}
