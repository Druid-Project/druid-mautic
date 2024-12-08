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

/* @bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php */
class __TwigTemplate_c2f9f28946636bf8832cfba9d2bb21df extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Event;

use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class PreExecuteEvent extends Event
{
    public function __construct(
        private EntityManagerInterface \$entityManager,
        private int \$purgeMode
    ) {
    }

    public function getEntityManager(): EntityManagerInterface
    {
        return \$this->entityManager;
    }

    public function isDelete(): bool
    {
        return ORMPurger::PURGE_MODE_DELETE === \$this->purgeMode;
    }

    public function isTruncate(): bool
    {
        return ORMPurger::PURGE_MODE_TRUNCATE === \$this->purgeMode;
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
        return "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php");
    }
}
