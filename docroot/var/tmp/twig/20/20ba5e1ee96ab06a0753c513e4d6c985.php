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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/PreUpAssertionMigrationTest.php */
class __TwigTemplate_dd23eafec3b402d67815411ffe8c87d5 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Mautic\\CoreBundle\\Doctrine\\PreUpAssertionMigration;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class PreUpAssertionMigrationTest extends TestCase
{
    public function testPreUpWithoutSkipAssertions(): void
    {
        \$migration = new class() extends PreUpAssertionMigration {
            /**
             * @var array<string>
             */
            public array \$messages = [];

            /**
             * @noinspection PhpMissingParentConstructorInspection
             */
            public function __construct()
            {
            }

            protected function preUpAssertions(): void
            {
            }

            protected function write(string \$message): void
            {
                \$this->messages[] = \$message;
            }
        };

        \$migration->preUp(\$this->createMock(Schema::class));

        Assert::assertEmpty(\$migration->messages);
    }

    public function testPreUpSkipped(): void
    {
        \$migration = new class() extends PreUpAssertionMigration {
            /**
             * @var array<string>
             */
            public array \$messages = [];

            /**
             * @noinspection PhpMissingParentConstructorInspection
             */
            public function __construct()
            {
            }

            protected function preUpAssertions(): void
            {
                \$this->skipAssertion(function (Schema \$schema) {
                    Assert::assertInstanceOf(Schema::class, \$schema);

                    return true;
                }, 'First exists');

                \$this->skipAssertion(function (Schema \$schema) {
                    Assert::assertInstanceOf(Schema::class, \$schema);

                    return true;
                }, 'Second exists');

                \$this->skipAssertion(function (Schema \$schema) {
                    Assert::assertInstanceOf(Schema::class, \$schema);

                    return true;
                }, 'Third exists');
            }

            protected function write(string \$message): void
            {
                \$this->messages[] = \$message;
            }
        };

        try {
            \$migration->preUp(\$this->createMock(Schema::class));
            \$this->fail(sprintf('Exception %s should have been thrown', SkipMigration::class));
        } catch (SkipMigration) {
        }

        Assert::assertCount(3, \$migration->messages);
        Assert::assertSame([
            '<comment>First exists</comment>',
            '<comment>Second exists</comment>',
            '<comment>Third exists</comment>',
        ], \$migration->messages);
    }

    public function testPreUpNotSkipped(): void
    {
        \$migration = new class() extends PreUpAssertionMigration {
            /**
             * @var array<string>
             */
            public array \$messages = [];

            /**
             * @noinspection PhpMissingParentConstructorInspection
             */
            public function __construct()
            {
            }

            protected function preUpAssertions(): void
            {
                \$this->skipAssertion(function (Schema \$schema) {
                    Assert::assertInstanceOf(Schema::class, \$schema);

                    return true;
                }, 'First exists');

                \$this->skipAssertion(function (Schema \$schema) {
                    Assert::assertInstanceOf(Schema::class, \$schema);

                    return true;
                }, 'Second exists');

                \$this->skipAssertion(function (Schema \$schema) {
                    Assert::assertInstanceOf(Schema::class, \$schema);

                    return false;
                }, 'Third does not exist');
            }

            protected function write(string \$message): void
            {
                \$this->messages[] = \$message;
            }
        };

        \$migration->preUp(\$this->createMock(Schema::class));

        Assert::assertCount(2, \$migration->messages);
        Assert::assertSame([
            '<comment>First exists</comment>',
            '<comment>Second exists</comment>',
        ], \$migration->messages);
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
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/PreUpAssertionMigrationTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/PreUpAssertionMigrationTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/PreUpAssertionMigrationTest.php");
    }
}
