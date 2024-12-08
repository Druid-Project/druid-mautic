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

/* @bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php */
class __TwigTemplate_a10601df399db8d952ac51bdaa543f14 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\SAML\\Store;

use Doctrine\\Persistence\\ObjectManager;
use LightSaml\\Provider\\TimeProvider\\TimeProviderInterface;
use Mautic\\UserBundle\\Entity\\IdEntry;
use Mautic\\UserBundle\\Security\\SAML\\Store\\IdStore;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class IdStoreTest extends TestCase
{
    /**
     * @var ObjectManager|MockObject
     */
    private MockObject \$manager;

    /**
     * @var TimeProviderInterface|MockObject
     */
    private MockObject \$timeProvider;

    private IdStore \$store;

    protected function setUp(): void
    {
        \$this->manager      = \$this->createMock(ObjectManager::class);
        \$this->timeProvider = \$this->createMock(TimeProviderInterface::class);
        \$this->store        = new IdStore(\$this->manager, \$this->timeProvider);
    }

    public function testNewIdEntryCreatedIfEntityIdNotFound(): void
    {
        \$expiry = new \\DateTime('+5 minutes');
        \$this->manager->expects(\$this->once())
            ->method('persist')
            ->willReturnCallback(function (IdEntry \$idEntry) use (\$expiry): void {
                \$this->assertEquals('foobar', \$idEntry->getEntityId());
                \$this->assertEquals('abc', \$idEntry->getId());
                \$this->assertEquals(\$expiry->getTimestamp(), \$idEntry->getExpiryTime()->getTimestamp());
            });

        \$this->store->set('foobar', 'abc', \$expiry);
    }

    public function testIdEntryUpdatedIfEntityIdFound(): void
    {
        \$expiry  = new \\DateTime('+5 minutes');
        \$idEntry = new IdEntry();
        \$idEntry->setEntityId('foobar');
        \$idEntry->setId('abc');
        \$idEntry->setExpiryTime(\$expiry);

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(\$idEntry);

        \$this->manager->expects(\$this->once())
            ->method('persist')
            ->with(\$idEntry);

        \$this->store->set('foobar', 'abc', \$expiry);
    }

    public function testIdEntryIsFoundAndNotExpired(): void
    {
        \$expiry  = new \\DateTime('+5 minutes');
        \$idEntry = new IdEntry();
        \$idEntry->setEntityId('foobar');
        \$idEntry->setId('abc');
        \$idEntry->setExpiryTime(\$expiry);

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(\$idEntry);

        \$this->assertTrue(\$this->store->has('foobar', 'abc'));
    }

    public function testIdEntryIsFoundButIsExpired(): void
    {
        \$this->timeProvider->expects(\$this->once())
            ->method('getTimestamp')
            ->willReturn(time());

        \$expiry  = new \\DateTime('-5 minutes');
        \$idEntry = new IdEntry();
        \$idEntry->setEntityId('foobar');
        \$idEntry->setId('abc');
        \$idEntry->setExpiryTime(\$expiry);

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(\$idEntry);

        \$this->assertFalse(\$this->store->has('foobar', 'abc'));
    }

    public function testIdEntryIsNotFound(): void
    {
        \$this->timeProvider->expects(\$this->never())
            ->method('getTimestamp');

        \$this->manager->expects(\$this->once())
            ->method('find')
            ->willReturn(null);

        \$this->assertFalse(\$this->store->has('foobar', 'abc'));
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
        return "@bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Security/SAML/Store/IdStoreTest.php");
    }
}
