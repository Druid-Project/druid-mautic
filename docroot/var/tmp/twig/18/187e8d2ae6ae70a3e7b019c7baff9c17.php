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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php */
class __TwigTemplate_a09d54e48670e6be236cb34a42163161 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Provider\\Oauth1aTwoLegged;

use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth1aTwoLegged\\CredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth1aTwoLegged\\HttpFactory;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;
use PHPUnit\\Framework\\TestCase;

class HttpFactoryTest extends TestCase
{
    public function testType(): void
    {
        \$this->assertEquals('oauth1a_two_legged', (new HttpFactory())->getAuthType());
    }

    public function testGetClientWithEmptyCredentials(): void
    {
        \$credentials = \$this->createMock(CredentialsInterface::class);
        \$httpFactory = new HttpFactory();
        \$this->expectException(PluginNotConfiguredException::class);
        \$httpFactory->getClient(\$credentials);
    }

    public function testGetClientWithFullCredentials(): void
    {
        \$credentials = \$this->createMock(CredentialsInterface::class);
        \$credentials->method('getConsumerKey')->willReturn('ConsumerKeyValue');
        \$credentials->method('getConsumerSecret')->willReturn('ConsumerSecretValue');
        \$credentials->method('getToken')->willReturn('TokenValue');
        \$credentials->method('getTokenSecret')->willReturn('TokenSecretValue');
        \$credentials->method('getAuthUrl')->willReturn('AuthUrlValue');
        \$httpFactory = new HttpFactory();
        \$client      = \$httpFactory->getClient(\$credentials);
        \$config      = \$client->getConfig();

        \$this->assertSame('oauth', \$config['auth']);
        \$this->assertSame('AuthUrlValue', \$config['base_uri']->getPath());
        \$this->assertTrue(\$config['handler']->hasHandler());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Provider/Oauth1aTwoLegged/HttpFactoryTest.php");
    }
}
