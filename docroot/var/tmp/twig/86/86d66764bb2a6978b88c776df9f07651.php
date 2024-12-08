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

/* @bundles/CoreBundle/Tests/Unit/Service/BulkNotificationTest.php */
class __TwigTemplate_2477c8e623e7adf1d7af11d882287c6a extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Service;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\CoreBundle\\Service\\BulkNotification;
use Mautic\\UserBundle\\Entity\\User;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class BulkNotificationTest extends TestCase
{
    private BulkNotification \$bulkNotification;

    private NotificationModel \$notificationModelFake;

    protected function setUp(): void
    {
        \$this->notificationModelFake = \$this->createNotificationModelFake();
        \$this->bulkNotification      = new BulkNotification(\$this->notificationModelFake);
    }

    public function testNotifications(): void
    {
        \$this->bulkNotification->addNotification(...\$data1 = ['key 1', 'message 1', 'notice 1', 'header 1', 'fa-note 1', new \\DateTime('01:00'), (new User())->setUsername('first')]);
        \$this->bulkNotification->addNotification(...\$data2 = ['key 2', 'message 2', 'notice 1', 'header 2', 'fa-note 2', new \\DateTime('02:00'), (new User())->setUsername('second')]);
        \$this->bulkNotification->addNotification(...\$data3 = ['key 1', 'message 3', 'notice 3', 'header 3', 'fa-note 3', new \\DateTime('03:00'), (new User())->setUsername('third')]);

        Assert::assertCount(0, \$this->notificationModelFake->notifications ?? []);

        \$this->bulkNotification->flush(\$deduplicateDateTimeFrom = new \\DateTime('-2 days'));

        Assert::assertCount(2, \$this->notificationModelFake->notifications ?? []);
        \$this->assertNotification(\$data1, \$this->notificationModelFake->notifications[0] ?? [], \$deduplicateDateTimeFrom);
        \$this->assertNotification(\$data2, \$this->notificationModelFake->notifications[1] ?? [], \$deduplicateDateTimeFrom);

        \$this->bulkNotification->addNotification(...\$data4 = ['key 4', 'message 4', 'notice 4', 'header 4', 'fa-note 4', new \\DateTime('04:00'), (new User())->setUsername('forth')]);

        \$this->bulkNotification->flush();

        Assert::assertCount(3, \$this->notificationModelFake->notifications ?? []);
        \$this->assertNotification(\$data1, \$this->notificationModelFake->notifications[0] ?? [], \$deduplicateDateTimeFrom);
        \$this->assertNotification(\$data2, \$this->notificationModelFake->notifications[1] ?? [], \$deduplicateDateTimeFrom);
        \$this->assertNotification(\$data4, \$this->notificationModelFake->notifications[2] ?? [], null);
    }

    /**
     * @param mixed[] \$data
     * @param mixed[] \$notification
     */
    private function assertNotification(array \$data, array \$notification, ?\\DateTime \$deduplicateDateTimeFrom): void
    {
        Assert::assertSame(\$data[1], \$notification[0]);
        Assert::assertSame(\$data[2], \$notification[1]);
        Assert::assertSame(false, \$notification[2]);
        Assert::assertSame(\$data[3], \$notification[3]);
        Assert::assertSame(\$data[4], \$notification[4]);
        Assert::assertSame(\$data[5], \$notification[5]);
        Assert::assertSame(\$data[6], \$notification[6]);
        Assert::assertSame(\$data[0], \$notification[7]);
        Assert::assertSame(\$deduplicateDateTimeFrom, \$notification[8]);
    }

    private function createNotificationModelFake(): NotificationModel
    {
        return new class() extends NotificationModel {
            /**
             * @var mixed[]
             */
            public \$notifications = [];

            /**
             * @noinspection PhpMissingParentConstructorInspection
             */
            public function __construct()
            {
            }

            public function addNotification(\$message, \$type = null, \$isRead = false, \$header = null, \$iconClass = null, \\DateTime \$datetime = null, User \$user = null, string \$deduplicateValue = null, \\DateTime \$deduplicateDateTimeFrom = null): void
            {
                \$this->notifications[] = func_get_args();
            }
        };
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
        return "@bundles/CoreBundle/Tests/Unit/Service/BulkNotificationTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Service/BulkNotificationTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Service/BulkNotificationTest.php");
    }
}
