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

/* @bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php */
class __TwigTemplate_173a8e72e94c699de0b77cada4a0a8ef extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\Bundle\\FixturesBundle\\Purger\\PurgerFactory;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\Common\\DataFixtures\\Purger\\PurgerInterface;
use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Event\\PreExecuteEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class ORMPurgerFactory implements PurgerFactory
{
    public function __construct(
        private EventDispatcherInterface \$eventDispatcher
    ) {
    }

    public function createForEntityManager(
        ?string \$emName,
        EntityManagerInterface \$em,
        array \$excluded = [],
        bool \$purgeWithTruncate = false
    ): PurgerInterface {
        \$this->eventDispatcher->dispatch(
            new PreExecuteEvent(
                \$em,
                \$purgeWithTruncate ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE
            )
        );

        \$purger = new ORMPurger(\$em, \$excluded);
        \$purger->setPurgeMode(\$purgeWithTruncate ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE);

        return \$purger;
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
        return "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php");
    }
}
