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

/* @bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php */
class __TwigTemplate_72bbcacd273392fcd3b87961d56e1984 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Factory;

use Mautic\\CoreBundle\\Factory\\TransifexFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\Transifex\\Connector\\Resources;
use Mautic\\Transifex\\Exception\\MissingCredentialsException;
use Mautic\\Transifex\\TransifexInterface;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Http\\Client\\ClientInterface;

class TransifexFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ClientInterface&MockObject
     */
    private MockObject \$client;

    /**
     * @var CoreParametersHelper&MockObject
     */
    private MockObject \$coreParametersHelper;

    private TransifexFactory \$transifexFactory;

    protected function setUp(): void
    {
        \$this->client               = \$this->createMock(ClientInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->transifexFactory     = new TransifexFactory(\$this->client, \$this->coreParametersHelper);
    }

    public function testCreatingTransifexWithoutCredentials(): void
    {
        \$this->expectException(MissingCredentialsException::class);
        \$this->transifexFactory->getTransifex();
    }

    public function testCreatingTransifexWithCredentials(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('transifex_api_token')
            ->willReturn('the_api_key');

        \$transifex = \$this->transifexFactory->getTransifex();

        Assert::assertTrue(\$transifex instanceof TransifexInterface);

        // Getting a connector validates the config, so this should throw an exception.
        Assert::assertTrue(\$transifex->getConnector(Resources::class) instanceof Resources);
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
        return "@bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Factory/TransifexFactoryTest.php");
    }
}
