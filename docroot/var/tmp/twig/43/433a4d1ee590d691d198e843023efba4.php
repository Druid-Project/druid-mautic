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

/* @bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php */
class __TwigTemplate_5fa6dfe7bc2b8b8696777ed5da8c8481 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Provider;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumns;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class GeneratedColumnsProvider implements GeneratedColumnsProviderInterface
{
    /**
     * @var string
     *
     * @see https://dev.mysql.com/doc/refman/5.7/en/innodb-foreign-key-constraints.html#innodb-foreign-key-generated-columns
     */
    public const MYSQL_MINIMUM_VERSION = '5.7.14';

    /**
     * @var string
     *
     * @see https://mariadb.com/kb/en/library/generated-columns
     */
    public const MARIADB_MINIMUM_VERSION = '10.2.6';

    private GeneratedColumns \$generatedColumns;

    public function __construct(
        private VersionProviderInterface \$versionProvider,
        private EventDispatcherInterface \$dispatcher
    ) {
        \$this->generatedColumns = new GeneratedColumns();
    }

    public function getGeneratedColumns(): GeneratedColumns
    {
        if (\$this->generatedColumnsAreSupported()
            && 0 === \$this->generatedColumns->count()
            && \$this->dispatcher->hasListeners(CoreEvents::ON_GENERATED_COLUMNS_BUILD)
        ) {
            \$event                  = \$this->dispatcher->dispatch(new GeneratedColumnsEvent(), CoreEvents::ON_GENERATED_COLUMNS_BUILD);
            \$this->generatedColumns = \$event->getGeneratedColumns();
        }

        return \$this->generatedColumns;
    }

    public function generatedColumnsAreSupported(): bool
    {
        return 1 !== version_compare(\$this->getMinimalSupportedVersion(), \$this->versionProvider->getVersion());
    }

    public function getMinimalSupportedVersion(): string
    {
        if (\$this->versionProvider->isMariaDb()) {
            return self::MARIADB_MINIMUM_VERSION;
        }

        return self::MYSQL_MINIMUM_VERSION;
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
        return "@bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Provider/GeneratedColumnsProvider.php");
    }
}
