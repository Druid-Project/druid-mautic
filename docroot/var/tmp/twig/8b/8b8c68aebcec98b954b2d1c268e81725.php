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

/* @bundles/CoreBundle/Tests/Unit/EventListener/DoctrineGeneratedColumnsListenerTest.php */
class __TwigTemplate_655fc463cce09c5b7d1c0746f06bf2a7 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\ORM\\Tools\\Event\\GenerateSchemaEventArgs;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumns;
use Mautic\\CoreBundle\\Doctrine\\Provider\\GeneratedColumnsProviderInterface;
use Mautic\\CoreBundle\\EventListener\\DoctrineGeneratedColumnsListener;
use Psr\\Log\\LoggerInterface;

class DoctrineGeneratedColumnsListenerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var GeneratedColumnsProviderInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$generatedColumnsProvider;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LoggerInterface
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$logger;

    /**
     * @var GenerateSchemaEventArgs|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$event;

    /**
     * @var Schema|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$schema;

    /**
     * @var Table|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$table;

    private DoctrineGeneratedColumnsListener \$listener;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->generatedColumnsProvider = \$this->createMock(GeneratedColumnsProviderInterface::class);
        \$this->logger                   = \$this->createMock(LoggerInterface::class);
        \$this->event                    = \$this->createMock(GenerateSchemaEventArgs::class);
        \$this->schema                   = \$this->createMock(Schema::class);
        \$this->table                    = \$this->createMock(Table::class);
        \$this->listener                 = new DoctrineGeneratedColumnsListener(\$this->generatedColumnsProvider, \$this->logger);

        \$generatedColumn  = new GeneratedColumn('page_hits', 'generated_hit_date', 'DATE', 'not important');
        \$generatedColumns = new GeneratedColumns();

        \$generatedColumns->add(\$generatedColumn);

        \$this->generatedColumnsProvider->method('getGeneratedColumns')->willReturn(\$generatedColumns);
        \$this->event->method('getSchema')->willReturn(\$this->schema);
    }

    public function testPostGenerateSchemaWhenTableDoesNotExist(): void
    {
        \$this->schema->expects(\$this->once())
            ->method('hasTable')
            ->with(MAUTIC_TABLE_PREFIX.'page_hits')
            ->willReturn(false);

        \$this->schema->expects(\$this->never())
            ->method('getTable');

        \$this->listener->postGenerateSchema(\$this->event);
    }

    public function testPostGenerateSchemaWhenColumnExists(): void
    {
        \$this->schema->expects(\$this->once())
            ->method('hasTable')
            ->with(MAUTIC_TABLE_PREFIX.'page_hits')
            ->willReturn(true);

        \$this->schema->expects(\$this->once())
            ->method('getTable')
            ->with(MAUTIC_TABLE_PREFIX.'page_hits')
            ->willReturn(\$this->table);

        \$this->table->expects(\$this->once())
            ->method('hasColumn')
            ->with('generated_hit_date')
            ->willReturn(true);

        \$this->table->expects(\$this->never())
            ->method('addColumn');

        \$this->listener->postGenerateSchema(\$this->event);
    }

    public function testPostGenerateSchemaWhenColumnDoesNotExist(): void
    {
        \$this->schema->expects(\$this->once())
            ->method('hasTable')
            ->with(MAUTIC_TABLE_PREFIX.'page_hits')
            ->willReturn(true);

        \$this->schema->expects(\$this->once())
            ->method('getTable')
            ->with(MAUTIC_TABLE_PREFIX.'page_hits')
            ->willReturn(\$this->table);

        \$this->table->expects(\$this->once())
            ->method('hasColumn')
            ->with('generated_hit_date')
            ->willReturn(false);

        \$this->table->expects(\$this->once())
            ->method('addColumn')
            ->with('generated_hit_date');

        \$this->table->expects(\$this->once())
            ->method('addIndex')
            ->with(['generated_hit_date'], MAUTIC_TABLE_PREFIX.'generated_hit_date');

        \$this->listener->postGenerateSchema(\$this->event);
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
        return "@bundles/CoreBundle/Tests/Unit/EventListener/DoctrineGeneratedColumnsListenerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/DoctrineGeneratedColumnsListenerTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/DoctrineGeneratedColumnsListenerTest.php");
    }
}
