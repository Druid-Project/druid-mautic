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

/* @bundles/DynamicContentBundle/DynamicContentEvents.php */
class __TwigTemplate_2af67f89dfada12b096945b92d8d2a05 extends Template
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

namespace Mautic\\DynamicContentBundle;

/**
 * Events available for DynamicContentBundle.
 */
final class DynamicContentEvents
{
    /**
     * The mautic.dwc_token_replacement event is thrown right before the content is returned.
     *
     * The event listener receives a
     * Mautic\\CoreBundle\\Event\\TokenReplacementEvent instance.
     *
     * @var string
     */
    public const TOKEN_REPLACEMENT = 'mautic.dwc_token_replacement';

    /**
     * The mautic.dwc_pre_save event is thrown right before a asset is persisted.
     *
     * The event listener receives a
     * Mautic\\DynamicContentBundle\\Event\\DynamicContentEvent instance.
     *
     * @var string
     */
    public const PRE_SAVE = 'mautic.dwc_pre_save';

    /**
     * The mautic.dwc_post_save event is thrown right after a asset is persisted.
     *
     * The event listener receives a
     * Mautic\\DynamicContentBundle\\Event\\DynamicContentEvent instance.
     *
     * @var string
     */
    public const POST_SAVE = 'mautic.dwc_post_save';

    /**
     * The mautic.dwc_pre_delete event is thrown prior to when a asset is deleted.
     *
     * The event listener receives a
     * Mautic\\DynamicContentBundle\\Event\\DynamicContentEvent instance.
     *
     * @var string
     */
    public const PRE_DELETE = 'mautic.dwc_pre_delete';

    /**
     * The mautic.dwc_post_delete event is thrown after a asset is deleted.
     *
     * The event listener receives a
     * Mautic\\DynamicContentBundle\\Event\\DynamicContentEvent instance.
     *
     * @var string
     */
    public const POST_DELETE = 'mautic.dwc_post_delete';

    /**
     * The mautic.category_pre_save event is thrown right before a category is persisted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_PRE_SAVE = 'mautic.category_pre_save';

    /**
     * The mautic.category_post_save event is thrown right after a category is persisted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_POST_SAVE = 'mautic.category_post_save';

    /**
     * The mautic.category_pre_delete event is thrown prior to when a category is deleted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_PRE_DELETE = 'mautic.category_pre_delete';

    /**
     * The mautic.category_post_delete event is thrown after a category is deleted.
     *
     * The event listener receives a
     * Mautic\\CategoryBundle\\Event\\CategoryEvent instance.
     *
     * @var string
     */
    public const CATEGORY_POST_DELETE = 'mautic.category_post_delete';

    /**
     * The mautic.asset.on_campaign_trigger_decision event is fired when the campaign decision triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_DECISION = 'mautic.dwc.on_campaign_trigger_decision';

    /**
     * The mautic.asset.on_campaign_trigger_action event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_ACTION = 'mautic.dwc.on_campaign_trigger_action';

    /**
     * The mautic.dwc.on_contact_filters_evaluate event is fired when dynamic content's decision's
     * filters need to be evaluated.
     *
     * The event listener receives a
     * Mautic\\DynamicContentBundle\\Event\\ContactFiltersEvaluateEvent
     *
     * @var string
     */
    public const ON_CONTACTS_FILTER_EVALUATE = 'mautic.dwc.on_contact_filters_evaluate';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/DynamicContentBundle/DynamicContentEvents.php";
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
        return new Source("", "@bundles/DynamicContentBundle/DynamicContentEvents.php", "/app/docroot/app/bundles/DynamicContentBundle/DynamicContentEvents.php");
    }
}
