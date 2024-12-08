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

/* @bundles/IntegrationsBundle/Tests/Functional/Command/CleanupCommandTest.php */
class __TwigTemplate_9fc771915c9d4d49fe1957889fb51456 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Functional\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\IntegrationsBundle\\Command\\CleanupCommand;
use Mautic\\IntegrationsBundle\\Entity\\FieldChange;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Console\\Command\\Command;

class CleanupCommandTest extends MauticMysqlTestCase
{
    public function testOrphanFieldChangeRecordDeleted(): void
    {
        \$lead                    = \$this->createLead();
        \$fieldChangeExistLead    = \$this->createFieldChange((int) \$lead->getId());
        \$fieldChangeNonExistLead = \$this->createFieldChange(9999);
        \$response                = \$this->testSymfonyCommand(CleanupCommand::NAME);
        Assert::assertSame(Command::SUCCESS, \$response->getStatusCode());
        Assert::assertStringContainsString('1 records deleted.', \$response->getDisplay());

        \$fieldChangeRecordDeleted = \$this->em->getRepository(FieldChange::class)->findOneBy(['id' => \$fieldChangeNonExistLead->getId()]);
        Assert::assertNull(\$fieldChangeRecordDeleted);
        \$fieldChangeRecordShouldNotDeleted = \$this->em->getRepository(FieldChange::class)->findOneBy(['id' => \$fieldChangeExistLead->getId()]);
        Assert::assertNotNull(\$fieldChangeRecordShouldNotDeleted);
    }

    public function testWhenNoRecordsToDelete(): void
    {
        \$response = \$this->testSymfonyCommand(CleanupCommand::NAME);
        Assert::assertSame(Command::SUCCESS, \$response->getStatusCode());
        Assert::assertStringContainsString('0 records deleted.', \$response->getDisplay());
    }

    private function createFieldChange(int \$objectID): FieldChange
    {
        \$fieldChange = new FieldChange();
        \$fieldChange->setIntegration('testIntegration');
        \$fieldChange->setObjectId(\$objectID);
        \$fieldChange->setObjectType(Lead::class);
        \$fieldChange->setModifiedAt(new \\DateTime('now', new \\DateTimeZone('UTC')));
        \$fieldChange->setColumnName('firstname');
        \$fieldChange->setColumnType('string');
        \$fieldChange->setColumnValue('test-value');
        \$this->em->persist(\$fieldChange);
        \$this->em->flush();

        return \$fieldChange;
    }

    private function createLead(): Lead
    {
        \$lead = new Lead();
        \$this->em->persist(\$lead);
        \$this->em->flush();

        return \$lead;
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
        return "@bundles/IntegrationsBundle/Tests/Functional/Command/CleanupCommandTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Functional/Command/CleanupCommandTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Functional/Command/CleanupCommandTest.php");
    }
}
