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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/Executioner/Exception/FieldSchemaNotFoundExceptionTest.php */
class __TwigTemplate_a9f24e3cbfff54770c09559edc472587 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\SyncDataExchange\\Internal\\Executioner\\Exception;

use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner\\Exception\\FieldSchemaNotFoundException;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class FieldSchemaNotFoundExceptionTest extends TestCase
{
    public function testMessage(): void
    {
        \$object    = 'SomeObject';
        \$alias     = 'SomeAlias';
        \$exception = new FieldSchemaNotFoundException(\$object, \$alias);
        \$expected  = sprintf('Schema for alias \"%s\" of object \"%s\" not found', \$alias, \$object);
        Assert::assertSame(\$expected, \$exception->getMessage());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/Executioner/Exception/FieldSchemaNotFoundExceptionTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/Executioner/Exception/FieldSchemaNotFoundExceptionTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/SyncDataExchange/Internal/Executioner/Exception/FieldSchemaNotFoundExceptionTest.php");
    }
}
