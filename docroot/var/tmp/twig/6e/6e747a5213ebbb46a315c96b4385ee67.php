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

/* @bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php */
class __TwigTemplate_0fdf1787035737f70cd41d2f1b7d6800 extends Template
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

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Events;
use Doctrine\\Persistence\\Event\\LifecycleEventArgs;
use Mautic\\CoreBundle\\Entity\\OptimisticLockInterface;
use Mautic\\CoreBundle\\Entity\\OptimisticLockTrait;

class OptimisticLockSubscriber implements EventSubscriber
{
    public function getSubscribedEvents(): array
    {
        return [
            Events::postUpdate,
        ];
    }

    /**
     * If the object implements OptimisticLockInterface and is marked for incrementing the version, object's version column/field is incremented.
     */
    public function postUpdate(LifecycleEventArgs \$args): void
    {
        \$object = \$args->getObject();

        if (!\$object instanceof OptimisticLockInterface || !\$object->isMarkedForVersionIncrement()) {
            return;
        }

        \$entityManager = \$args->getObjectManager();

        if (!\$entityManager instanceof EntityManagerInterface) {
            return;
        }

        \$className     = \$object::class;
        \$metadata      = \$entityManager->getClassMetadata(\$className);
        \$versionField  = \$object->getVersionField();
        \$versionColumn = \$metadata->fieldNames[\$versionField] ?? null;

        if (null === \$versionColumn) {
            throw new \\LogicException(sprintf('Field \"%s::\$%s\" is not mapped. Did you forget to do so? See \"%s::addVersionField()\"', \$className, \$versionField, OptimisticLockTrait::class));
        }

        \$connection = \$entityManager->getConnection();
        \$connection->createQueryBuilder()
            ->update(\$metadata->table['name'])
            ->set(\$versionColumn, \"(@newVersion := {\$versionColumn} + 1)\")
            ->where(implode(' AND ', array_map(function (string \$name): string {
                return \"{\$name} = :{\$name}\";
            }, \$metadata->getIdentifierFieldNames())))
            ->setParameters(\$entityManager->getUnitOfWork()->getEntityIdentifier(\$object))
            ->executeQuery();

        \$newVersion = (int) \$connection->executeQuery('SELECT @newVersion')->fetchOne();
        \$object->setVersion(\$newVersion);
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
        return "@bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php");
    }
}
