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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php */
class __TwigTemplate_5fd5401e364b517d2c359fc89ed8e58f extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange\\Internal;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ObjectProviderTest extends TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$dispatcher;

    private ObjectProvider \$objectProvider;

    protected function setUp(): void
    {
        \$this->dispatcher     = \$this->createMock(EventDispatcherInterface::class);
        \$this->objectProvider = new ObjectProvider(\$this->dispatcher);
    }

    public function testGetObjectByNameIfItDoesNotExist(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf(InternalObjectEvent::class),
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS
            );

        \$this->expectException(ObjectNotFoundException::class);
        \$this->objectProvider->getObjectByName('Unicorn');
    }

    public function testGetObjectByNameIfItExists(): void
    {
        \$contact = new Contact();
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (InternalObjectEvent \$e) use (\$contact) {
                    // Fake a subscriber.
                    \$e->addObject(\$contact);

                    return true;
                }),
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS
            );

        \$this->assertSame(\$contact, \$this->objectProvider->getObjectByName(Contact::NAME));
    }

    public function testGetObjectByEntityNameIfItDoesNotExist(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->isInstanceOf(InternalObjectEvent::class),
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS,
            );

        \$this->expectException(ObjectNotFoundException::class);
        \$this->objectProvider->getObjectByEntityName('Unicorn');
    }

    public function testGetObjectByEntityNameIfItExists(): void
    {
        \$contact = new Contact();
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (InternalObjectEvent \$e) use (\$contact) {
                    // Fake a subscriber.
                    \$e->addObject(\$contact);

                    return true;
                }),
                IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS
            );

        \$this->assertSame(\$contact, \$this->objectProvider->getObjectByEntityName(Lead::class));
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/ObjectProviderTest.php");
    }
}
