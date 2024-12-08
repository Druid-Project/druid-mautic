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

/* @bundles/PluginBundle/Entity/IntegrationRepository.php */
class __TwigTemplate_833da7a1169e5c1b7c59e3d553a8ef28 extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Doctrine\\ORM\\Query;
use Mautic\\CoreBundle\\Cache\\ResultCacheHelper;
use Mautic\\CoreBundle\\Cache\\ResultCacheOptions;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Integration>
 */
class IntegrationRepository extends CommonRepository
{
    /**
     * @return mixed[]
     */
    public function getIntegrations(): array
    {
        \$query = \$this->createQueryBuilder('i')
            ->join('i.plugin', 'p')
            ->getQuery();
        \$this->enableCache(\$query);

        \$services = \$query->getResult();

        \$results = [];
        foreach (\$services as \$s) {
            \$results[\$s->getName()] = \$s;
        }

        return \$results;
    }

    /**
     * Get core (no plugin) integrations.
     *
     * @return mixed[]
     */
    public function getCoreIntegrations(): array
    {
        \$query = \$this->createQueryBuilder('i')
            ->getQuery();
        \$this->enableCache(\$query);

        \$services = \$query->getResult();

        \$results = [];
        foreach (\$services as \$s) {
            \$results[\$s->getName()] = \$s;
        }

        return \$results;
    }

    public function findOneByName(string \$name): ?Integration
    {
        \$query = \$this->createQueryBuilder('i')
            ->where('i.name = :name')
            ->setParameter('name', \$name)
            ->setMaxResults(1)
            ->getQuery();
        \$this->enableCache(\$query);

        return \$query->getOneOrNullResult();
    }

    private function enableCache(Query \$query): void
    {
        ResultCacheHelper::enableOrmQueryCache(\$query, new ResultCacheOptions(Integration::CACHE_NAMESPACE));
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
        return "@bundles/PluginBundle/Entity/IntegrationRepository.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/IntegrationRepository.php", "/app/docroot/app/bundles/PluginBundle/Entity/IntegrationRepository.php");
    }
}
