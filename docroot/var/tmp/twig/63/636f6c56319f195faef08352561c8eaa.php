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

/* @bundles/AssetBundle/AssetEvents.php */
class __TwigTemplate_5fc4388534ef040f1d44be9c908cda54 extends Template
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

namespace Mautic\\AssetBundle;

/**
 * Events available for AssetBundle.
 */
final class AssetEvents
{
    /**
     * The mautic.asset_on_load event is dispatched when a public asset is downloaded, publicly viewed, or redirected to (remote).
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetLoadEvent instance.
     *
     * @var string
     */
    public const ASSET_ON_LOAD = 'mautic.asset_on_load';

    /**
     * The mautic.asset_on_remote_browse event is dispatched when browsing a remote provider.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\RemoteAssetBrowseEvent instance.
     *
     * @var string
     */
    public const ASSET_ON_REMOTE_BROWSE = 'mautic.asset_on_remote_browse';

    /**
     * The mautic.asset_on_upload event is dispatched before uploading a file.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    public const ASSET_ON_UPLOAD = 'mautic.asset_on_upload';

    /**
     * The mautic.asset_pre_save event is dispatched right before a asset is persisted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    public const ASSET_PRE_SAVE = 'mautic.asset_pre_save';

    /**
     * The mautic.asset_post_save event is dispatched right after a asset is persisted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    public const ASSET_POST_SAVE = 'mautic.asset_post_save';

    /**
     * The mautic.asset_pre_delete event is dispatched prior to when a asset is deleted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    public const ASSET_PRE_DELETE = 'mautic.asset_pre_delete';

    /**
     * The mautic.asset_post_delete event is dispatched after a asset is deleted.
     *
     * The event listener receives a
     * Mautic\\AssetBundle\\Event\\AssetEvent instance.
     *
     * @var string
     */
    public const ASSET_POST_DELETE = 'mautic.asset_post_delete';

    /**
     * The mautic.asset.on_campaign_trigger_decision event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_DECISION = 'mautic.asset.on_campaign_trigger_decision';

    /**
     * The mautic.asset.on_download_rate_winner event is fired when there is a need to determine download rate winner.
     *
     * The event listener receives a
     * Mautic\\CoreBundles\\Event\\DetermineWinnerEvent
     *
     * @var string
     */
    public const ON_DETERMINE_DOWNLOAD_RATE_WINNER = 'mautic.asset.on_download_rate_winner';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/AssetBundle/AssetEvents.php";
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
        return new Source("", "@bundles/AssetBundle/AssetEvents.php", "/app/docroot/app/bundles/AssetBundle/AssetEvents.php");
    }
}
