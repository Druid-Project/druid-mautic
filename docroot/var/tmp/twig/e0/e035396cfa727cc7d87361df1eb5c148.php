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

/* @bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php */
class __TwigTemplate_7410a98e39653776f60d9f7b50dd9c0a extends Template
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

interface GeneratedColumnInterface
{
    public function getTableName(): string;

    public function getColumnName(): string;

    public function addIndexColumn(string \$indexColumn): void;

    /**
     * If set then the line chart queries will use this column for the time unit instead of the original.
     */
    public function setOriginalDateColumn(string \$originalDateColumn, string \$timeUnit): void;

    public function getOriginalDateColumn(): ?string;

    public function getTimeUnit(): string;

    public function getAlterTableSql(): string;

    public function getColumnDefinition(): string;

    public function getIndexColumns(): array;

    public function getIndexName(): string;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumnInterface.php");
    }
}
