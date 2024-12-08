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

/* @bundles/MessengerBundle/Tests/Message/PageHitNotificationTest.php */
class __TwigTemplate_09d19234c19f3e07638a00643dd66eab extends Template
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

use Mautic\\MessengerBundle\\Message\\PageHitNotification;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;

class PageHitNotificationTest extends TestCase
{
    public function testConstruct(): void
    {
        \$request = new Request();
        \$request->query->set('testMe', 'Hit me once');

        \$message = new PageHitNotification(78, \$request, false, false, 3, 1);

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
        return "@bundles/MessengerBundle/Tests/Message/PageHitNotificationTest.php";
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
        return new Source("", "@bundles/MessengerBundle/Tests/Message/PageHitNotificationTest.php", "/app/docroot/app/bundles/MessengerBundle/Tests/Message/PageHitNotificationTest.php");
    }
}
