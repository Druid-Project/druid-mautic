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

/* @bundles/SmsBundle/Tests/Helper/ReplyHelperTest.php */
class __TwigTemplate_235f37f852449e097667e117a4279684 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Helper;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\SmsBundle\\Callback\\CallbackInterface;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;
use Mautic\\SmsBundle\\Helper\\ReplyHelper;
use Psr\\Log\\NullLogger;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\Request;

class ReplyHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$eventDispatcher;

    private NullLogger \$logger;

    /**
     * @var ContactTracker|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactTracker;

    protected function setUp(): void
    {
        \$this->eventDispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->logger          = new NullLogger();
        \$this->contactTracker  = \$this->createMock(ContactTracker::class);
    }

    public function testFoundContactsDispatchEvent(): void
    {
        \$handler = \$this->createMock(CallbackInterface::class);
        \$handler->expects(\$this->once())
            ->method('getContacts')
            ->willReturn(new ArrayCollection([new Lead()]));

        \$handler->method('getMessage')->willReturn('some message');

        \$this->contactTracker->expects(\$this->once())
            ->method('setSystemContact');

        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatch');

        \$this->getHelper()->handleRequest(\$handler, new Request());
    }

    public function testContactsNotFoundDoesNotDispatchEvent(): void
    {
        \$handler = \$this->createMock(CallbackInterface::class);
        \$handler->expects(\$this->once())
            ->method('getContacts')
            ->willReturnCallback(
                function (): void {
                    throw new NumberNotFoundException('');
                }
            );

        \$this->contactTracker->expects(\$this->never())
            ->method('setSystemContact');

        \$this->eventDispatcher->expects(\$this->never())
            ->method('dispatch');

        \$this->getHelper()->handleRequest(\$handler, new Request());
    }

    /**
     * @return ReplyHelper
     */
    private function getHelper()
    {
        return new ReplyHelper(\$this->eventDispatcher, \$this->logger, \$this->contactTracker);
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
        return "@bundles/SmsBundle/Tests/Helper/ReplyHelperTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Helper/ReplyHelperTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Helper/ReplyHelperTest.php");
    }
}
