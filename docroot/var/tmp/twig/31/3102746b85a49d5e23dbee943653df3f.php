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

/* @bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php */
class __TwigTemplate_d5c9c6b09ed2698a129b2c6a51dd89c2 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\ORM\\Tools\\Event\\GenerateSchemaEventArgs;
use Mautic\\CoreBundle\\Doctrine\\Provider\\GeneratedColumnsProviderInterface;
use Mautic\\CoreBundle\\Doctrine\\Type\\GeneratedType;
use Psr\\Log\\LoggerInterface;

class DoctrineGeneratedColumnsListener
{
    public function __construct(
        protected GeneratedColumnsProviderInterface \$generatedColumnsProvider,
        protected LoggerInterface \$logger
    ) {
    }

    public function postGenerateSchema(GenerateSchemaEventArgs \$args): void
    {
        \$schema           = \$args->getSchema();
        \$generatedColumns = \$this->generatedColumnsProvider->getGeneratedColumns();

        foreach (\$generatedColumns as \$generatedColumn) {
            try {
                if (!\$schema->hasTable(\$generatedColumn->getTableName())) {
                    continue;
                }

                \$table = \$schema->getTable(\$generatedColumn->getTableName());

                if (\$table->hasColumn(\$generatedColumn->getColumnName())) {
                    continue;
                }

                \$table->addColumn(
                    \$generatedColumn->getColumnName(),
                    GeneratedType::GENERATED,
                    [
                        'columnDefinition' => \$generatedColumn->getColumnDefinition(),
                        'notNull'          => false,
                    ]
                );

                \$table->addIndex(\$generatedColumn->getIndexColumns(), \$generatedColumn->getIndexName());
            } catch (\\Exception \$e) {
                // table doesn't exist or something bad happened so oh well
                \$this->logger->error('SCHEMA ERROR: '.\$e->getMessage());
            }
        }
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
        return "@bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php", "/app/docroot/app/bundles/CoreBundle/EventListener/DoctrineGeneratedColumnsListener.php");
    }
}
