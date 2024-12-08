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

/* @bundles/CoreBundle/Tests/Functional/Command/AnonymizeIpCommandTest.php */
class __TwigTemplate_6c2e6620a50b47e3bb0c03f9911401d3 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Command;

use Mautic\\CoreBundle\\Command\\AnonymizeIpCommand;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class AnonymizeIpCommandTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['anonymize_ip'] = 'testAnonymizeIpCommandWithFeatureEnable' === \$this->getName();
        parent::setUp();
    }

    public function testAnonymizeIpCommandWithFeatureEnableDisable(): void
    {
        \$this->createIpAddress();
        \$response = \$this->testSymfonyCommand(AnonymizeIpCommand::COMMAND_NAME);
        Assert::assertStringContainsString('Anonymization could not be done because anonymize Ip feature is disabled for this instance.', \$response->getDisplay());
        \$ipAddressList = \$this->em->getRepository(IpAddress::class)->findBy(['ipAddress' => '*.*.*.*']);
        Assert::assertCount(0, \$ipAddressList);
    }

    public function testAnonymizeIpCommandWithFeatureEnable(): void
    {
        \$this->createIpAddress();

        \$this->testSymfonyCommand(AnonymizeIpCommand::COMMAND_NAME);
        \$this->em->clear();
        \$ipAddressList = \$this->em->getRepository(IpAddress::class)->findBy(['ipAddress' => '*.*.*.*']);
        Assert::assertCount(1, \$ipAddressList);
        Assert::assertNull(\$ipAddressList[0]->getIpDetails());
    }

    private function createIpAddress(): IpAddress
    {
        \$ipAddress = new IpAddress();
        \$ipAddress->setIpAddress('192.168.8.9');
        \$ipAddress->setIpDetails(['city' => 'Boston', 'region' => 'MA', 'country' => 'United States', 'zipcode' => '02113']);
        \$this->em->persist(\$ipAddress);
        \$this->em->flush();

        return \$ipAddress;
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
        return "@bundles/CoreBundle/Tests/Functional/Command/AnonymizeIpCommandTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Command/AnonymizeIpCommandTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Command/AnonymizeIpCommandTest.php");
    }
}
