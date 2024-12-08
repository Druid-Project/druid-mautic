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

/* @bundles/LeadBundle/Tests/Model/IpAddressModelTest.php */
class __TwigTemplate_6e64d5feb477c3ebd9c126aca393c4ef extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Exception\\UniqueConstraintViolationException;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\IpAddressModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;

class IpAddressModelTest extends TestCase
{
    /**
     * @var EntityManager|MockObject
     */
    private MockObject \$entityManager;

    /**
     * @var MockObject|LoggerInterface
     */
    private MockObject \$logger;

    private IpAddressModel \$ipAddressModel;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->entityManager  = \$this->createMock(EntityManager::class);
        \$this->logger         = \$this->createMock(LoggerInterface::class);
        \$this->ipAddressModel = new IpAddressModel(\$this->entityManager, \$this->logger);
    }

    /**
     * This test ensures it won't fail if there are no IP addresses.
     */
    public function testSaveIpAddressReferencesForContactWhenNoIps(): void
    {
        \$this->entityManager->expects(\$this->never())
            ->method('getConnection');

        \$this->ipAddressModel->saveIpAddressesReferencesForContact(new Lead());
    }

    public function testSaveIpAddressReferencesForContactThatHasIpsButNoChanges(): void
    {
        \$contact      = \$this->createMock(Lead::class);
        \$ipAddress    = \$this->createMock(IpAddress::class);
        \$ipAddresses  = new ArrayCollection(['1.2.3.4' => \$ipAddress]);
        \$connection   = \$this->createMock(Connection::class);
        \$queryBuilder = \$this->createMock(QueryBuilder::class);

        \$contact->expects(\$this->exactly(1))
            ->method('getIpAddresses')
            ->willReturn(\$ipAddresses);

        \$this->entityManager->expects(\$this->never())
            ->method('getConnection');

        \$this->ipAddressModel->saveIpAddressesReferencesForContact(\$contact);
    }

    public function testSaveIpAddressReferencesForContactThatHasIpsWithSomeAdded(): void
    {
        \$contact        = \$this->createMock(Lead::class);
        \$ipAddressAdded = \$this->createMock(IpAddress::class);
        \$ipAddressOld   = \$this->createMock(IpAddress::class);
        \$ipAddresses    = new ArrayCollection(['1.2.3.999' => \$ipAddressOld, '1.2.3.4' => \$ipAddressAdded]);
        \$connection     = \$this->createMock(Connection::class);
        \$queryBuilder   = \$this->createMock(QueryBuilder::class);

        \$contact->expects(\$this->exactly(2))
            ->method('getIpAddresses')
            ->willReturn(\$ipAddresses);

        \$contact->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(55);

        \$contact->expects(\$this->exactly(2))
            ->method('getChanges')
            ->willReturn(['ipAddressList' => ['1.2.3.4' => \$ipAddressAdded]]);

        \$ipAddressAdded->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(44);

        \$ipAddressAdded->expects(\$this->once())
            ->method('getIpAddress')
            ->willReturn('1.2.3.4');

        \$ipAddressOld->expects(\$this->never())
            ->method('getId');

        \$ipAddressOld->expects(\$this->once())
            ->method('getIpAddress')
            ->willReturn('1.2.3.999');

        \$queryBuilder->expects(\$this->once())
            ->method('executeStatement');

        \$connection->expects(\$this->once())
            ->method('createQueryBuilder')
            ->willReturn(\$queryBuilder);

        \$this->entityManager->expects(\$this->once())
            ->method('getConnection')
            ->willReturn(\$connection);

        \$this->ipAddressModel->saveIpAddressesReferencesForContact(\$contact);

        \$this->assertCount(2, \$contact->getIpAddresses());
    }

    public function testSaveIpAddressReferencesForContactWhenSomeIpsIfTheReferenceExistsAlready(): void
    {
        \$contact      = \$this->createMock(Lead::class);
        \$ipAddress    = \$this->createMock(IpAddress::class);
        \$ipAddresses  = new ArrayCollection(['1.2.3.4' => \$ipAddress]);
        \$connection   = \$this->createMock(Connection::class);
        \$queryBuilder = \$this->createMock(QueryBuilder::class);

        \$contact->expects(\$this->exactly(2))
            ->method('getIpAddresses')
            ->willReturn(\$ipAddresses);

        \$contact->expects(\$this->exactly(3))
            ->method('getId')
            ->willReturn(55);

        \$contact->expects(\$this->once())
            ->method('getChanges')
            ->willReturn(['ipAddressList' => ['1.2.3.4' => \$ipAddress]]);

        \$ipAddress->expects(\$this->exactly(3))
            ->method('getId')
            ->willReturn(44);

        \$ipAddress->expects(\$this->once())
            ->method('getIpAddress')
            ->willReturn('1.2.3.4');

        \$queryBuilder->expects(\$this->once())
            ->method('executeStatement')
            ->willThrowException(new UniqueConstraintViolationException(\$this->createMock(DriverException::class), null));

        \$connection->expects(\$this->once())
            ->method('createQueryBuilder')
            ->willReturn(\$queryBuilder);

        \$this->entityManager->expects(\$this->once())
            ->method('getConnection')
            ->willReturn(\$connection);

        \$this->ipAddressModel->saveIpAddressesReferencesForContact(\$contact);

        \$this->assertCount(1, \$contact->getIpAddresses());
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
        return "@bundles/LeadBundle/Tests/Model/IpAddressModelTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/IpAddressModelTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Model/IpAddressModelTest.php");
    }
}
