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

/* @bundles/EmailBundle/EventListener/ChannelSubscriber.php */
class __TwigTemplate_e29524827d2dc5847fd2b0f080e47345 extends Template
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

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\EmailBundle\\Form\\Type\\EmailListType;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

const CHANNEL_COLUMN_CATEGORY_ID     = 'category_id';
const CHANNEL_COLUMN_NAME            = 'name';
const CHANNEL_COLUMN_DESCRIPTION     = 'description';
const CHANNEL_COLUMN_DATE_ADDED      = 'date_added';
const CHANNEL_COLUMN_CREATED_BY      = 'created_by';
const CHANNEL_COLUMN_CREATED_BY_USER = 'created_by_user';

class ChannelSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::ADD_CHANNEL => ['onAddChannel', 100],
        ];
    }

    public function onAddChannel(ChannelEvent \$event): void
    {
        \$event->addChannel(
            'email',
            [
                MessageModel::CHANNEL_FEATURE => [
                    'campaignAction'             => 'email.send',
                    'campaignDecisionsSupported' => [
                        'email.open',
                        'page.pagehit',
                        'asset.download',
                        'form.submit',
                    ],
                    'lookupFormType' => EmailListType::class,
                ],
                LeadModel::CHANNEL_FEATURE   => [],
                ReportModel::CHANNEL_FEATURE => [
                    'table' => 'emails',
                ],
            ]
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
        return "@bundles/EmailBundle/EventListener/ChannelSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ChannelSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/ChannelSubscriber.php");
    }
}
