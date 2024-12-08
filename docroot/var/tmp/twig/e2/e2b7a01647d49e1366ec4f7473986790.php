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

/* @bundles/PageBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_56a36f765cafde020590920e3577bc60 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private UserHelper \$userHelper,
        private PageModel \$pageModel,
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
        \$str = \$event->getSearchString();
        if (empty(\$str)) {
            return;
        }

        \$filter = ['string' => \$str, 'force' => []];

        \$permissions = \$this->security->isGranted(
            ['page:pages:viewown', 'page:pages:viewother'],
            'RETURN_ARRAY'
        );
        if (\$permissions['page:pages:viewown'] || \$permissions['page:pages:viewother']) {
            if (!\$permissions['page:pages:viewother']) {
                \$filter['force'][] = [
                    'column' => 'IDENTITY(p.createdBy)',
                    'expr'   => 'eq',
                    'value'  => \$this->userHelper->getUser()->getId(),
                ];
            }

            \$pages = \$this->pageModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            if (count(\$pages) > 0) {
                \$pageResults = [];

                foreach (\$pages as \$page) {
                    \$pageResults[] = \$this->twig->render(
                        '@MauticPage/SubscribedEvents/Search/global.html.twig',
                        ['page' => \$page]
                    );
                }
                if (count(\$pages) > 5) {
                    \$pageResults[] = \$this->twig->render(
                        '@MauticPage/SubscribedEvents/Search/global.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$pages) - 5),
                        ]
                    );
                }
                \$pageResults['count'] = count(\$pages);
                \$event->addResults('mautic.page.pages', \$pageResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted(['page:pages:viewown', 'page:pages:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.page.pages',
                \$this->pageModel->getCommandList()
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
        return "@bundles/PageBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/SearchSubscriber.php", "/app/docroot/app/bundles/PageBundle/EventListener/SearchSubscriber.php");
    }
}
