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

/* @bundles/EmailBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_59851b8065eb80e5208346d420e8bbfc extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\EventListener\\CommonStatsSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\Entity\\EmailReply;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatDevice;
use Mautic\\EmailBundle\\Entity\\StatDeviceRepository;
use MauticPlugin\\MauticFocusBundle\\Entity\\StatRepository;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);

        /** @var StatDeviceRepository \$repo */
        \$repo                                     = \$entityManager->getRepository(StatDevice::class);
        \$this->repositories[]                     = \$repo;
        \$this->permissions[\$repo->getTableName()] = ['stat.lead' => 'lead:leads'];

        \$this->addContactRestrictedRepositories([EmailReply::class]);

        /** @var StatRepository \$repo */
        \$repo                           = \$entityManager->getRepository(Stat::class);
        \$this->repositories[]           = \$repo;
        \$statsTable                     = \$repo->getTableName();
        \$this->permissions[\$statsTable] = ['lead' => 'lead:leads'];
        \$this->selects[\$statsTable]     = [
            'id',
            'email_id',
            'lead_id',
            'list_id',
            'ip_id',
            'email_address',
            'date_sent',
            'is_read',
            'is_failed',
            'viewed_in_browser',
            'date_read',
            'tracking_hash',
            'retry_count',
            'source',
            'source_id',
            'open_count',
            'last_opened',
            'open_details',
        ];
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
        return "@bundles/EmailBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/StatsSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/StatsSubscriber.php");
    }
}
