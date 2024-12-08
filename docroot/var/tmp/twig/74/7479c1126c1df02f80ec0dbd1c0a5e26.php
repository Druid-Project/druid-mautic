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

/* @bundles/SmsBundle/EventListener/ChannelSubscriber.php */
class __TwigTemplate_e7f273549437b395315b10f61df66636 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Mautic\\SmsBundle\\Form\\Type\\SmsListType;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ChannelSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TransportChain \$transportChain
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::ADD_CHANNEL => ['onAddChannel', 90],
        ];
    }

    public function onAddChannel(ChannelEvent \$event): void
    {
        if (count(\$this->transportChain->getEnabledTransports()) > 0) {
            \$event->addChannel(
                'sms',
                [
                    MessageModel::CHANNEL_FEATURE => [
                        'campaignAction'             => 'sms.send_text_sms',
                        'campaignDecisionsSupported' => [
                            'page.pagehit',
                            'asset.download',
                            'form.submit',
                        ],
                        'lookupFormType' => SmsListType::class,
                        'repository'     => \\Mautic\\SmsBundle\\Entity\\Sms::class,
                    ],
                    LeadModel::CHANNEL_FEATURE   => [],
                    ReportModel::CHANNEL_FEATURE => [
                        'table' => 'sms_messages',
                    ],
                ]
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
        return "@bundles/SmsBundle/EventListener/ChannelSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/ChannelSubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/ChannelSubscriber.php");
    }
}
