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

/* @bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php */
class __TwigTemplate_c89b58ccd152dbafd722c280d5956389 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\GeneratedColumn;

final class GeneratedColumns implements GeneratedColumnsInterface
{
    private int \$position = 0;

    /**
     * Simple array of generated columns.
     */
    private array \$generatedColumns = [];

    /**
     * Array structure holding the generated columns that allows to
     * search by date column and unit without need for a loop.
     */
    private array \$dateColumnIndex = [];

    public function add(GeneratedColumn \$generatedColumn): void
    {
        \$this->generatedColumns[] = \$generatedColumn;

        if (\$generatedColumn->getOriginalDateColumn() && \$generatedColumn->getTimeUnit()) {
            if (!isset(\$this->dateColumnIndex[\$generatedColumn->getOriginalDateColumn()])) {
                \$this->dateColumnIndex[\$generatedColumn->getOriginalDateColumn()] = [];
            }

            \$this->dateColumnIndex[\$generatedColumn->getOriginalDateColumn()][\$generatedColumn->getTimeUnit()] = \$generatedColumn;
        }
    }

    public function getForOriginalDateColumnAndUnit(string \$originalDateColumn, string \$unit): GeneratedColumnInterface
    {
        if (isset(\$this->dateColumnIndex[\$originalDateColumn][\$unit])) {
            return \$this->dateColumnIndex[\$originalDateColumn][\$unit];
        }

        throw new \\UnexpectedValueException(\"Generated column for original date column {\$originalDateColumn} with unit {\$unit} does not exist.\");
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function current(): mixed
    {
        return \$this->generatedColumns[\$this->position];
    }

    public function key(): mixed
    {
        return \$this->position;
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->generatedColumns[\$this->position]);
    }

    public function count(): int
    {
        return count(\$this->generatedColumns);
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
        return "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumns.php");
    }
}
