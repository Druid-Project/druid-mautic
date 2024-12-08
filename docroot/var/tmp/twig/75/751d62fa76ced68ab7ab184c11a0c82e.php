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

/* @bundles/AssetBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_2816881e9030e16d907db02d548ae2a5 extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Event\\AssetLoadEvent;
use Mautic\\AssetBundle\\Form\\Type\\CampaignEventAssetDownloadType;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private RealTimeExecutioner \$realTimeExecutioner
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD         => ['onCampaignBuild', 0],
            AssetEvents::ASSET_ON_LOAD                => ['onAssetDownload', 0],
            AssetEvents::ON_CAMPAIGN_TRIGGER_DECISION => ['onCampaignTriggerDecision', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event): void
    {
        \$trigger = [
            'label'          => 'mautic.asset.campaign.event.download',
            'description'    => 'mautic.asset.campaign.event.download_descr',
            'eventName'      => AssetEvents::ON_CAMPAIGN_TRIGGER_DECISION,
            'formType'       => CampaignEventAssetDownloadType::class,
            'channel'        => 'asset',
            'channelIdField' => 'assets',
        ];

        \$event->addDecision('asset.download', \$trigger);
    }

    /**
     * Trigger point actions for asset download.
     */
    public function onAssetDownload(AssetLoadEvent \$event): void
    {
        \$asset = \$event->getRecord()->getAsset();

        if (null !== \$asset) {
            \$this->realTimeExecutioner->execute('asset.download', \$asset, 'asset', \$asset->getId());
        }
    }

    public function onCampaignTriggerDecision(CampaignExecutionEvent \$event)
    {
        \$eventDetails = \$event->getEventDetails();

        if (null == \$eventDetails) {
            return \$event->setResult(true);
        }

        \$assetId       = \$eventDetails->getId();
        \$limitToAssets = \$event->getConfig()['assets'];

        if (!empty(\$limitToAssets) && !in_array(\$assetId, \$limitToAssets)) {
            // no points change
            return \$event->setResult(false);
        }

        \$event->setResult(true);
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
        return "@bundles/AssetBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/CampaignSubscriber.php", "/app/docroot/app/bundles/AssetBundle/EventListener/CampaignSubscriber.php");
    }
}
