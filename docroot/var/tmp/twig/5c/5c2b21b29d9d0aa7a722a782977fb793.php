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

/* @bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php */
class __TwigTemplate_7ad3adcf1fb515a3fe1e30a67dff458e extends Template
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

namespace Mautic\\CoreBundle\\Test\\DoctrineExtensions;

use Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs;
use Doctrine\\ORM\\Mapping\\ClassMetadataInfo;

class TablePrefix
{
    /**
     * @var string
     */
    protected \$prefix = '';

    /**
     * @param string \$prefix
     */
    public function __construct(\$prefix)
    {
        \$this->prefix = (string) \$prefix;
    }

    public function loadClassMetadata(LoadClassMetadataEventArgs \$eventArgs): void
    {
        /** @var ClassMetadataInfo \$classMetadata */
        \$classMetadata = \$eventArgs->getClassMetadata();

        if (!\$classMetadata->isInheritanceTypeSingleTable() || \$classMetadata->getName() === \$classMetadata->rootEntityName) {
            \$table = \$classMetadata->table;

            \$this->addPrefixToIndexes(\$this->prefix, \$table, 'indexes');
            \$this->addPrefixToIndexes(\$this->prefix, \$table, 'uniqueConstraints');

            \$classMetadata->setPrimaryTable(\$table);
        }
    }

    private function addPrefixToIndexes(\$prefix, array &\$table, \$key): void
    {
        if (!isset(\$table[\$key])) {
            return;
        }

        \$indexes    = &\$table[\$key];
        \$newIndexes = [];

        foreach (\$indexes as \$name => \$index) {
            \$newName              = uniqid(\$prefix.\$name);
            \$newIndexes[\$newName] = \$index;
        }

        \$table[\$key] = \$newIndexes;
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
        return "@bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php";
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
        return new Source("", "@bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php", "/app/docroot/app/bundles/CoreBundle/Test/DoctrineExtensions/TablePrefix.php");
    }
}
