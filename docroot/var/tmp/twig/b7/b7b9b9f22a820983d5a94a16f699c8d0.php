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

/* @bundles/CoreBundle/Test/Doctrine/MockedConnectionTrait.php */
class __TwigTemplate_39df5a16ef21002670104dea975bfbdf extends Template
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

namespace Mautic\\CoreBundle\\Test\\Doctrine;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\MockObject\\Rule\\AnyInvokedCount;
use PHPUnit\\Framework\\MockObject\\Rule\\InvocationOrder;

trait MockedConnectionTrait
{
    public function getMockedConnection(): mixed
    {
        \$platform = \$this->createMock(AbstractPlatform::class);
        // Following line is needed once we update to doctrine/dbal >= 3.8.0.
        // This allows easy mocking of the createSelectSQLBuilder method without needing to mock the whole chain.
        // \$this->passThrough(\$platform, AbstractPlatform::class, 'createSelectSQLBuilder');

        \$connection = \$this->createMock(Connection::class);
        \$connection->method('getDatabasePlatform')
          ->willReturn(\$platform);

        return \$connection;
    }

    private function passThrough(MockObject \$object, string \$class, string \$method, ?InvocationOrder \$invocationRule = null): void
    {
        if (!\$invocationRule) {
            \$invocationRule = new AnyInvokedCount();
        }

        \$object
          ->expects(\$invocationRule)
          ->method(\$method)
          ->willReturnCallback(function (...\$parameters) use (\$object, \$class, \$method) {
              \$reflectionMethod = new \\ReflectionMethod(\$class, \$method);

              return \$reflectionMethod->invoke(\$object, ...\$parameters);
          });
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
        return "@bundles/CoreBundle/Test/Doctrine/MockedConnectionTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Doctrine/MockedConnectionTrait.php", "/app/docroot/app/bundles/CoreBundle/Test/Doctrine/MockedConnectionTrait.php");
    }
}
