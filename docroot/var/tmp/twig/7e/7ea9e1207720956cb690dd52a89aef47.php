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

/* @bundles/CoreBundle/Config/services.php */
class __TwigTemplate_3f1ef0da91f9b88f75da35371ccd56e2 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Mautic\\CoreBundle\\EventListener\\OptimisticLockSubscriber;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

use function Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\service;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Doctrine',
        'Model/IteratorExportDataModel.php',
        'Form/EventListener/FormExitSubscriber.php',
        'Release',
        'Helper/Chart',
        'Form/DataTransformer',
        'Helper/CommandResponse.php',
        'Helper/Language/Installer.php',
        'Helper/PageHelper.php',
        'Helper/Tree/IntNode.php',
        'Helper/Update/Github/Release.php',
        'Helper/Update/PreUpdateChecks',
        'Predis/Replication/StrategyConfig.php',
        'Predis/Replication/MasterOnlyStrategy.php',
        'Session/Storage/Handler/RedisSentinelSessionHandler.php',
        'Twig/Helper/ThemeHelper.php',
        'Translation/TranslatorLoader.php',
        'Helper/Dsn/Dsn.php',
        'Cache/ResultCacheOptions.php',
    ];

    \$services->load('Mautic\\\\CoreBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\CoreBundle\\\\Entity\\\\', '../Entity/*Repository.php');

    \$services->set('mautic.http.client', GuzzleHttp\\Client::class)->autowire();

    \$services->alias(GuzzleHttp\\Client::class, 'mautic.http.client');
    \$services->alias(Psr\\Http\\Client\\ClientInterface::class, 'mautic.http.client');
    \$services->alias('mautic.factory', Mautic\\CoreBundle\\Factory\\MauticFactory::class);
    \$services->alias(Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface::class, 'argument_resolver');

    \$services->alias(Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProviderInterface::class, Mautic\\CoreBundle\\Doctrine\\Provider\\VersionProvider::class);
    \$services->alias('mautic.model.factory', Mautic\\CoreBundle\\Factory\\ModelFactory::class);
    \$services->alias('twig.helper.assets', Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper::class);
    \$services->alias('transifex.factory', Mautic\\CoreBundle\\Factory\\TransifexFactory::class);
    \$services->alias('mautic.helper.language', Mautic\\CoreBundle\\Helper\\LanguageHelper::class);
    \$services->alias('mautic.helper.email.address', Mautic\\CoreBundle\\Helper\\EmailAddressHelper::class);
    \$services->alias('mautic.helper.assetgeneration', Mautic\\CoreBundle\\Helper\\AssetGenerationHelper::class);
    \$services->alias('twig.helper.slots', Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper::class);

    \$services->get(Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper::class)->tag('twig.helper', ['alias' => 'assets']);

    \$services->get(Mautic\\CoreBundle\\Model\\NotificationModel::class)->call('setDisableUpdates', ['%mautic.security.disableUpdates%']);
    \$services->alias('mautic.core.model.auditlog', Mautic\\CoreBundle\\Model\\AuditLogModel::class);
    \$services->alias('mautic.core.model.notification', Mautic\\CoreBundle\\Model\\NotificationModel::class);
    \$services->alias('mautic.core.model.form', Mautic\\CoreBundle\\Model\\FormModel::class);
    \$services->get(Mautic\\CoreBundle\\EventListener\\CacheInvalidateSubscriber::class)
        ->arg('\$ormConfiguration', service('doctrine.orm.default_configuration'))
        ->tag('doctrine.event_subscriber');
    \$services->get(OptimisticLockSubscriber::class)
        ->tag('doctrine.event_subscriber');
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Config/services.php";
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
        return new Source("", "@bundles/CoreBundle/Config/services.php", "/app/docroot/app/bundles/CoreBundle/Config/services.php");
    }
}
