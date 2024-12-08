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

/* @bundles/PointBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_1f97fa7f0b70a6b59b87de6c177233d1 extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PointBundle\\Model\\PointModel;
use Mautic\\PointBundle\\Model\\TriggerModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private PointModel \$pointModel,
        private TriggerModel \$pointTriggerModel,
        private CorePermissions \$security,
        private Environment \$twig
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::GLOBAL_SEARCH      => ['onGlobalSearch', 0],
            CoreEvents::BUILD_COMMAND_LIST => ['onBuildCommandList', 0],
        ];
    }

    public function onGlobalSearch(MauticEvents\\GlobalSearchEvent \$event): void
    {
        if (\$this->security->isGranted('point:points:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$items = \$this->pointModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            \$pointCount = count(\$items);
            if (\$pointCount > 0) {
                \$pointsResults = [];
                \$canEdit       = \$this->security->isGranted('point:points:edit');
                foreach (\$items as \$item) {
                    \$pointsResults[] = \$this->twig->render(
                        '@MauticPoint/SubscribedEvents/Search/global_point.html.twig',
                        [
                            'item'    => \$item,
                            'canEdit' => \$canEdit,
                        ]
                    );
                }
                if (\$pointCount > 5) {
                    \$pointsResults[] = \$this->twig->render(
                        '@MauticPoint/SubscribedEvents/Search/global_point.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$pointCount - 5),
                        ]
                    );
                }
                \$pointsResults['count'] = \$pointCount;
                \$event->addResults('mautic.point.actions.header.index', \$pointsResults);
            }
        }

        if (\$this->security->isGranted('point:triggers:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$items = \$this->pointTriggerModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            \$count = count(\$items);
            if (\$count > 0) {
                \$results = [];
                \$canEdit = \$this->security->isGranted('point:triggers:edit');
                foreach (\$items as \$item) {
                    \$results[] = \$this->twig->render(
                        '@MauticPoint/SubscribedEvents/Search/global_trigger.html.twig',
                        [
                            'item'    => \$item,
                            'canEdit' => \$canEdit,
                        ]
                    );
                }
                if (\$count > 5) {
                    \$results[] = \$this->twig->render(
                        '@MauticPoint/SubscribedEvents/Search/global_trigger.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$count - 5),
                        ]
                    );
                }
                \$results['count'] = \$count;
                \$event->addResults('mautic.point.trigger.header.index', \$results);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        \$security = \$this->security;
        if (\$security->isGranted('point:points:view')) {
            \$event->addCommands(
                'mautic.point.actions.header.index',
                \$this->pointModel->getCommandList()
            );
        }
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
        return "@bundles/PointBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/SearchSubscriber.php", "/app/docroot/app/bundles/PointBundle/EventListener/SearchSubscriber.php");
    }
}
