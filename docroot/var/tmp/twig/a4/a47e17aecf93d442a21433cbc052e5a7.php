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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php */
class __TwigTemplate_1be800598807edc98b651a8128a0f253 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\RelationDAO;

class RelationsDAO implements \\Iterator, \\Countable
{
    /**
     * @var RelationDAO[]
     */
    private array \$relations = [];

    private int \$position = 0;

    /**
     * @param RelationDAO[] \$relations
     */
    public function addRelations(array \$relations): void
    {
        foreach (\$relations as \$relation) {
            \$this->addRelation(\$relation);
        }
    }

    public function addRelation(RelationDAO \$relation): void
    {
        \$this->relations[] = \$relation;
    }

    public function current(): RelationDAO
    {
        return \$this->relations[\$this->position];
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function key(): int
    {
        return \$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->relations[\$this->position]);
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function count(): int
    {
        return count(\$this->relations);
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/RelationsDAO.php");
    }
}
