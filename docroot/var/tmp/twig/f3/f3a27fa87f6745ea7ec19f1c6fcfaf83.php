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

/* @bundles/ApiBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_1331e724647560fb2e119d466c03d5f8 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\ApiBundle\\Model\\ClientModel;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ClientModel \$apiClientModel,
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
        if (\$this->security->isGranted('api:clients:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$clients = \$this->apiClientModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);

            if (count(\$clients) > 0) {
                \$clientResults = [];
                \$canEdit       = \$this->security->isGranted('api:clients:edit');
                foreach (\$clients as \$client) {
                    \$clientResults[] = \$this->twig->render(
                        '@MauticApi/SubscribedEvents/Search/global.html.twig',
                        [
                            'client'  => \$client,
                            'canEdit' => \$canEdit,
                        ]
                    );
                }
                if (count(\$clients) > 5) {
                    \$clientResults[] = \$this->twig->render(
                        '@MauticApi/SubscribedEvents/Search/global.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$clients) - 5),
                        ]
                    );
                }
                \$clientResults['count'] = count(\$clients);
                \$event->addResults('mautic.api.client.menu.index', \$clientResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted('api:clients:view')) {
            \$event->addCommands(
                'mautic.api.client.header.index',
                \$this->apiClientModel->getCommandList()
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
        return "@bundles/ApiBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/SearchSubscriber.php", "/app/docroot/app/bundles/ApiBundle/EventListener/SearchSubscriber.php");
    }
}
