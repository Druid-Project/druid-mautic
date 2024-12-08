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

/* @bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php */
class __TwigTemplate_2b5468ccb3792c1747d7d2b9ea10780c extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\AbstractQuery;
use Doctrine\\ORM\\QueryBuilder;
use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMappingRepository;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

final class ObjectMappingRepositoryTest extends TestCase
{
    use RepositoryConfiguratorTrait;

    /**
     * @var MockObject&AbstractQuery<mixed>
     */
    private MockObject \$query;

    private ObjectMappingRepository \$repository;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->repository = \$this->configureRepository(ObjectMapping::class);

        \$this->entityManager->method('createQueryBuilder')->willReturnCallback(fn () => new QueryBuilder(\$this->entityManager));

        // This is terrible, but the Query class is final and AbstractQuery doesn't have some methods used.
        \$this->query = \$this->getMockBuilder(AbstractQuery::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['setParameters', 'getSingleResult', 'getSQL', '_doExecute'])
            ->addMethods(['setFirstResult', 'setMaxResults'])
            ->getMock();

        \$this->query->expects(\$this->once())
            ->method('setFirstResult')
            ->willReturnSelf();

        \$this->query->expects(\$this->once())
            ->method('setMaxResults')
            ->willReturnSelf();
    }

    public function testDeleteEntitiesForObject(): void
    {
        \$this->entityManager->expects(\$this->once())
            ->method('createQuery')
            ->with('DELETE Mautic\\IntegrationsBundle\\Entity\\ObjectMapping m WHERE m.internalObjectName = :internalObject AND m.internalObjectId = :internalObjectId')
            ->willReturn(\$this->query);

        \$this->query->expects(\$this->once())
            ->method('setParameters')
            ->with(\$this->callback(function (ArrayCollection \$collection) {
                /** @var Parameter \$parameter */
                \$parameter = \$collection[0];
                \$this->assertSame('internalObject', \$parameter->getName());
                \$this->assertSame('company', \$parameter->getValue());

                /** @var Parameter \$parameter */
                \$parameter = \$collection[1];
                \$this->assertSame('internalObjectId', \$parameter->getName());
                \$this->assertSame(123, \$parameter->getValue());

                return true;
            }))
            ->willReturnSelf();

        // // Stopping early to avoid Mocking hell. We have what we needed.
        \$this->query->expects(\$this->once())
            ->method('_doExecute')
            ->willReturn(0);

        \$this->repository->deleteEntitiesForObject(123, 'company');
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Entity/ObjectMappingRepositoryTest.php");
    }
}
