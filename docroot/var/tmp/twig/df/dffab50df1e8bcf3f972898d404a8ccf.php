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

/* @bundles/EmailBundle/Tests/Model/EmailStatModelTest.php */
class __TwigTemplate_b3d331b9efb676e626c42806e56986c4 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\Model\\EmailStatModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

final class EmailStatModelTest extends TestCase
{
    public function testSave(): void
    {
        /** @var MockObject&EntityManager */
        \$entityManager = \$this->createMock(EntityManager::class);

        /** @var MockObject&StatRepository */
        \$statRepository = \$this->createMock(StatRepository::class);

        \$entityManager->method('getRepository')->willReturn(\$statRepository);

        \$statRepository->expects(\$this->once())
            ->method('saveEntities')
            ->willReturnCallback(
                function (array \$entities) {
                    Assert::assertCount(1, \$entities);
                    Assert::assertInstanceOf(StatTest::class, \$entities[0]);

                    // Emulate database adding the entity some autoincrement ID.
                    \$entities[0]->setId('123');
                }
            );

        \$dispatcher = new class() extends EventDispatcher {
            public int \$dispatchMethodCounter = 0;

            public function __construct()
            {
            }

            public function dispatch(object \$event, string \$eventName = null): object
            {
                switch (\$this->dispatchMethodCounter) {
                    case 0:
                        Assert::assertSame(EmailEvents::ON_EMAIL_STAT_PRE_SAVE, \$eventName);
                        Assert::assertCount(1, \$event->getStats());
                        Assert::assertSame(0, \$event->getStats()[0]->getId());
                        break;

                    case 1:
                        Assert::assertSame(EmailEvents::ON_EMAIL_STAT_POST_SAVE, \$eventName);
                        Assert::assertCount(1, \$event->getStats());
                        Assert::assertSame(123, \$event->getStats()[0]->getId());
                        break;
                }
                ++\$this->dispatchMethodCounter;

                return \$event;
            }
        };

        \$emailStatModel = new EmailStatModel(\$entityManager, \$dispatcher);

        \$emailStat = new StatTest();

        \$emailStatModel->saveEntity(\$emailStat);

        Assert::assertSame(2, \$dispatcher->dispatchMethodCounter);
    }
}

class StatTest extends Stat
{
    private ?string \$id = null;

    public function setId(string \$id): void
    {
        \$this->id = \$id;
    }

    public function getId(): int
    {
        return (int) \$this->id;
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
        return "@bundles/EmailBundle/Tests/Model/EmailStatModelTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Model/EmailStatModelTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Model/EmailStatModelTest.php");
    }
}
