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

/* @bundles/CoreBundle/EventListener/MaintenanceSubscriber.php */
class __TwigTemplate_d77315afa7ee69d284f31057985ea240 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MaintenanceEvent;
use Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class MaintenanceSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Connection \$db,
        private UserTokenRepositoryInterface \$userTokenRepository,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::MAINTENANCE_CLEANUP_DATA => ['onDataCleanup', -50],
        ];
    }

    public function onDataCleanup(MaintenanceEvent \$event): void
    {
        \$this->cleanupData(\$event, 'audit_log');
        \$this->cleanupData(\$event, 'notifications');

        \$rows = \$this->userTokenRepository->deleteExpired(\$event->isDryRun());
        \$event->setStat(\$this->translator->trans('mautic.maintenance.user_tokens'), \$rows);
    }

    /**
     * @param string \$table
     */
    private function cleanupData(MaintenanceEvent \$event, \$table): void
    {
        \$qb = \$this->db->createQueryBuilder()
            ->setParameter('date', \$event->getDate()->format('Y-m-d H:i:s'));

        if (\$event->isDryRun()) {
            \$rows = (int) \$qb->select('count(*) as records')
                ->from(MAUTIC_TABLE_PREFIX.\$table, 'log')
                ->where(
                    \$qb->expr()->lte('log.date_added', ':date')
                )
                ->executeQuery()
                ->fetchOne();
        } else {
            \$qb->select('log.id')
              ->from(MAUTIC_TABLE_PREFIX.\$table, 'log')
              ->where(
                  \$qb->expr()->lte('log.date_added', ':date')
              );

            \$rows = 0;
            \$qb->setMaxResults(10000)->setFirstResult(0);

            \$qb2 = \$this->db->createQueryBuilder();
            while (true) {
                \$ids = array_column(\$qb->executeQuery()->fetchAllAssociative(), 'id');

                if (0 === sizeof(\$ids)) {
                    break;
                }

                \$rows += \$qb2->delete(MAUTIC_TABLE_PREFIX.\$table)
                  ->where(
                      \$qb2->expr()->in(
                          'id', \$ids
                      )
                  )
                  ->executeStatement();
            }
        }

        \$event->setStat(\$this->translator->trans('mautic.maintenance.'.\$table), \$rows, \$qb->getSQL(), \$qb->getParameters());
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
        return "@bundles/CoreBundle/EventListener/MaintenanceSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/MaintenanceSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/MaintenanceSubscriber.php");
    }
}
