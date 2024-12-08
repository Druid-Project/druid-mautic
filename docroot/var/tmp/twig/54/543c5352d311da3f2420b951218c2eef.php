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

/* @bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php */
class __TwigTemplate_595473a089be25edf24495c62ababf95 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\DependencyInjection\\Compiler;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\SmsBundle\\DependencyInjection\\Compiler\\SmsTransportPass;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

class SmsTransportPassTest extends TestCase
{
    public function testProcess(): void
    {
        \$container = new ContainerBuilder();
        \$container->addCompilerPass(new SmsTransportPass());
        \$container
            ->register('foo')
            ->setPublic(true)
            ->setAbstract(true)
            ->addTag('mautic.sms_transport', ['alias'=>'fakeAliasDefault', 'integrationAlias' => 'fakeIntegrationDefault']);

        \$container
            ->register('chocolate')
            ->setPublic(true)
            ->setAbstract(true);

        \$container
            ->register('bar')
            ->setPublic(true)
            ->setAbstract(true)
            ->addTag('mautic.sms_transport');

        \$transport = \$this->getMockBuilder(TransportChain::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['addTransport'])
            ->getMock();

        \$container
            ->register('mautic.sms.transport_chain')
            ->setClass(\$transport::class)
            ->setArguments(['foo', \$this->createMock(IntegrationHelper::class)])
            ->setShared(false)
            ->setSynthetic(true)
            ->setAbstract(true);

        \$pass = new SmsTransportPass();
        \$pass->process(\$container);

        \$this->assertEquals(2, count(\$container->findTaggedServiceIds('mautic.sms_transport')));

        \$methodCalls = \$container->getDefinition('mautic.sms.transport_chain')->getMethodCalls();
        \$this->assertCount(count(\$methodCalls), \$container->findTaggedServiceIds('mautic.sms_transport'));

        // Translation string
        \$this->assertEquals('fakeAliasDefault', \$methodCalls[0][1][2]);
        // Integration name/alias
        \$this->assertEquals('fakeIntegrationDefault', \$methodCalls[0][1][3]);

        // Translation string is set as service ID by default
        \$this->assertEquals('bar', \$methodCalls[1][1][2]);
        // Integration name/alias is set to service ID by default
        \$this->assertEquals('bar', \$methodCalls[1][1][3]);
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
        return "@bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/DependencyInjection/Compiler/SmsTransportPassTest.php");
    }
}
