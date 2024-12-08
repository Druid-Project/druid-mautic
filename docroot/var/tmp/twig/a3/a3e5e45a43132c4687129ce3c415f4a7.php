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

/* @bundles/MessengerBundle/Tests/Message/EmailHitNotificationTest.php */
class __TwigTemplate_e6bced67034f8503132f017a6fd49ca6 extends Template
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

namespace Mautic\\MessengerBundle\\Tests\\Message;

use Mautic\\MessengerBundle\\Message\\EmailHitNotification;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;

class EmailHitNotificationTest extends TestCase
{
    public function testConstruct(): void
    {
        \$request = new Request();
        \$request->query->set('testMe', 'Hit me once');

        \$message = new EmailHitNotification('statid', \$request);

        \$this->assertArrayHasKey('testMe', \$message->getRequest()->query->all());
        \$this->assertEquals(\$request, \$message->getRequest());
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
        return "@bundles/MessengerBundle/Tests/Message/EmailHitNotificationTest.php";
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
        return new Source("", "@bundles/MessengerBundle/Tests/Message/EmailHitNotificationTest.php", "/app/docroot/app/bundles/MessengerBundle/Tests/Message/EmailHitNotificationTest.php");
    }
}
