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

/* @bundles/MessengerBundle/Tests/MessageHandler/EmailHitNotificationHandlerTest.php */
class __TwigTemplate_d95236212435e5dc778ad27b8b1b1463 extends Template
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

namespace Mautic\\MessengerBundle\\Tests\\MessageHandler;

use Doctrine\\DBAL\\Exception\\RetryableException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\MessengerBundle\\Message\\EmailHitNotification;
use Mautic\\MessengerBundle\\MessageHandler\\EmailHitNotificationHandler;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Messenger\\Exception\\RecoverableMessageHandlingException;

class EmailHitNotificationHandlerTest extends TestCase
{
    public function testInvoke(): void
    {
        \$hitId   = sha1((string) random_int(0, 1_000_000));
        \$request = new Request();
        \$request->query->set('testMe', 'I am here');

        /** @var MockObject|EmailModel \$emailModelMock */
        \$emailModelMock = \$this->createMock(EmailModel::class);
        \$emailModelMock
            ->expects(\$this->exactly(1))
            ->method('hitEmail')
            ->with(\$hitId, \$request);

        /** @var MockObject&CoreParametersHelper \$parametersHelper */
        \$parametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$parametersHelper->method('get')
            ->willReturn('sync://');

        \$message = new EmailHitNotification(\$hitId, \$request);

        \$handler  = new EmailHitNotificationHandler(\$emailModelMock, \$parametersHelper);
        \$handler->__invoke(\$message);
    }

    public function testInvokeThrowsRecoverableExceptionOnDBLock(): void
    {
        \$hitId   = sha1((string) random_int(0, 1_000_000));
        \$request = new Request();
        \$request->query->set('testMe', 'I am here');

        /** @var MockObject|EmailModel \$emailModelMock */
        \$emailModelMock = \$this->createMock(EmailModel::class);
        \$emailModelMock
            ->expects(\$this->exactly(1))
            ->method('hitEmail')
            ->willThrowException(\$this->createMock(RetryableException::class));

        /** @var MockObject&CoreParametersHelper \$parametersHelper */
        \$parametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$parametersHelper->method('get')
            ->willReturn('sync://');

        \$message = new EmailHitNotification(\$hitId, \$request);

        \$handler  = new EmailHitNotificationHandler(\$emailModelMock, \$parametersHelper);
        \$this->expectException(RecoverableMessageHandlingException::class);
        \$handler->__invoke(\$message);
    }

    public function testInvokeLogsUnrecoverableException(): void
    {
        \$hitId   = sha1((string) random_int(0, 1_000_000));
        \$request = new Request();
        \$request->query->set('testMe', 'I am here');

        /** @var MockObject|EmailModel \$emailModelMock */
        \$emailModelMock = \$this->createMock(EmailModel::class);
        \$emailModelMock
            ->expects(\$this->exactly(1))
            ->method('hitEmail')
            ->willThrowException(new \\InvalidArgumentException('got my argument?'));

        /** @var MockObject&CoreParametersHelper \$parametersHelper */
        \$parametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$parametersHelper->method('get')
            ->willReturn('sync://');

        \$message  = new EmailHitNotification(\$hitId, \$request);
        \$handler  = new EmailHitNotificationHandler(\$emailModelMock, \$parametersHelper);
        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectErrorMessage('got my argument?');
        \$handler->__invoke(\$message);
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
        return "@bundles/MessengerBundle/Tests/MessageHandler/EmailHitNotificationHandlerTest.php";
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
        return new Source("", "@bundles/MessengerBundle/Tests/MessageHandler/EmailHitNotificationHandlerTest.php", "/app/docroot/app/bundles/MessengerBundle/Tests/MessageHandler/EmailHitNotificationHandlerTest.php");
    }
}
