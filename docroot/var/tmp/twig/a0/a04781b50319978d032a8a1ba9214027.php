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

/* @bundles/LeadBundle/EventListener/ButtonSubscriber.php */
class __TwigTemplate_1465af87de3160708d012561d1412519 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomButtonEvent;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ButtonSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private RouterInterface \$router,
        private CorePermissions \$security
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_BUTTONS => ['injectViewButtons', 0],
        ];
    }

    public function injectViewButtons(CustomButtonEvent \$event): void
    {
        if (!str_contains(\$event->getRoute(), 'mautic_contact_index')) {
            return;
        }

        if (!\$this->security->isAdmin() && !\$this->security->isGranted('lead:export:enable', 'MATCH_ONE')) {
            return;
        }

        \$exportRoute = \$this->router->generate('mautic_contact_action', ['objectAction' => 'batchExport']);

        \$event->addButton(
            [
                'attr'      => [
                    'data-toggle'           => 'confirmation',
                    'href'                  => \$exportRoute.'?filetype=xlsx',
                    'data-precheck'         => 'batchActionPrecheck',
                    'data-message'          => \$this->translator->trans(
                        'mautic.core.export.items',
                        ['%items%' => 'contacts']
                    ),
                    'data-confirm-text'     => \$this->translator->trans('mautic.core.export.xlsx'),
                    'data-confirm-callback' => 'executeBatchAction',
                    'data-cancel-text'      => \$this->translator->trans('mautic.core.form.cancel'),
                    'data-cancel-callback'  => 'dismissConfirmation',
                ],
                'btnText'   => \$this->translator->trans('mautic.core.export.xlsx'),
                'iconClass' => 'ri-file-excel-line',
            ],
            ButtonHelper::LOCATION_BULK_ACTIONS
        );

        \$event->addButton(
            [
                'attr'      => [
                    'data-toggle'           => 'confirmation',
                    'href'                  => \$exportRoute.'?filetype=csv',
                    'data-precheck'         => 'batchActionPrecheck',
                    'data-message'          => \$this->translator->trans(
                        'mautic.core.export.items',
                        ['%items%' => 'contacts']
                    ),
                    'data-confirm-text'     => \$this->translator->trans('mautic.core.export.csv'),
                    'data-confirm-callback' => 'executeBatchAction',
                    'data-cancel-text'      => \$this->translator->trans('mautic.core.form.cancel'),
                    'data-cancel-callback'  => 'dismissConfirmation',
                ],
                'btnText'   => \$this->translator->trans('mautic.core.export.csv'),
                'iconClass' => 'ri-file-text-line',
            ],
            ButtonHelper::LOCATION_BULK_ACTIONS
        );

        \$event->addButton(
            [
                'attr'      => [
                    'href'        => \$exportRoute.'?filetype=xlsx',
                    'data-toggle' => null,
                ],
                'btnText'   => \$this->translator->trans('mautic.core.export.xlsx'),
                'iconClass' => 'ri-file-excel-line',
            ],
            ButtonHelper::LOCATION_PAGE_ACTIONS
        );

        \$event->addButton(
            [
                'attr'      => [
                    'href'        => \$exportRoute.'?filetype=csv',
                    'data-toggle' => null,
                ],
                'btnText'   => \$this->translator->trans('mautic.core.export.csv'),
                'iconClass' => 'ri-file-text-line',
            ],
            ButtonHelper::LOCATION_PAGE_ACTIONS
        );
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
        return "@bundles/LeadBundle/EventListener/ButtonSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ButtonSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/ButtonSubscriber.php");
    }
}
