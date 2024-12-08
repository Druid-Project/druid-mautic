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

/* @bundles/PluginBundle/Tests/Entity/IntegrationEntityRepositoryTest.php */
class __TwigTemplate_fd59d4698ec4659136383e047aa59d20 extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\PluginBundle\\Entity\\IntegrationEntityRepository;
use PHPUnit\\Framework\\Assert;

/**
 * IntegrationRepository.
 */
class IntegrationEntityRepositoryTest extends MauticMysqlTestCase
{
    /**
     * @var string
     */
    private \$prefix;

    /**
     * @var IntegrationEntityRepository
     */
    private \$integrationEntityRepository;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->prefix                      = static::getContainer()->getParameter('mautic.db_table_prefix');
        \$this->integrationEntityRepository = \$this->em->getRepository(\\Mautic\\PluginBundle\\Entity\\IntegrationEntity::class);
    }

    public function testThatGetIntegrationsEntityIdReturnsCorrectValues(): void
    {
        \$now                 = new \\DateTimeImmutable();
        \$integrationEntityId = random_int(1, 1000);
        \$internalEntityId    = random_int(1, 1000);

        \$this->connection->insert(\$this->prefix.'integration_entity', [
            'date_added'            => \$now->format('Y-m-d H:i:s'),
            'integration'           => 'someIntegration',
            'integration_entity'    => 'someIntegrationEntity',
            'integration_entity_id' => \$integrationEntityId,
            'internal_entity'       => 'someInternalEntity',
            'internal_entity_id'    => \$internalEntityId,
            'last_sync_date'        => null,
            'internal'              => 'someInternalValue',
        ]);

        \$results = \$this->integrationEntityRepository->getIntegrationsEntityId(
            'someIntegration',
            'someIntegrationEntity',
            'someInternalEntity',
            [\$internalEntityId],
            null,
            null,
            false,
            0,
            0,
            null
        );

        Assert::assertCount(1, \$results);
        Assert::assertSame(\$integrationEntityId, (int) \$results[0]['integration_entity_id']);
        Assert::assertSame(\$internalEntityId, (int) \$results[0]['internal_entity_id']);
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
        return "@bundles/PluginBundle/Tests/Entity/IntegrationEntityRepositoryTest.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Entity/IntegrationEntityRepositoryTest.php", "/app/docroot/app/bundles/PluginBundle/Tests/Entity/IntegrationEntityRepositoryTest.php");
    }
}
