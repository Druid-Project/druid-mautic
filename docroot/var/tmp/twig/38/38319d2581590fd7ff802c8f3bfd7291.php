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

/* @bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php */
class __TwigTemplate_c33cf41858ff49571d625e1c700cac1c extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\CampaignBundle\\Helper\\CampaignEventHelper;
use Mautic\\CampaignBundle\\Tests\\CampaignTestAbstract;

class CampaignEventHelperTest extends CampaignTestAbstract
{
    public function testValidateLeadChangeTriggerWithEmptyCampaigns(): void
    {
        \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], 'badaction');
        \$event        = [
            'properties' => [
                'campaigns' => [],
                'action'    => 'added',
            ],
            'campaign' => [
                'id' => null,
            ],
        ];
        \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
        \$this->assertFalse(\$result);
    }

    public function testValidateLeadChangeTriggerWithUnmatchingCampaignsAndInvalidAction(): void
    {
        \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], 'badaction');
        \$event        = [
            'properties' => [
                'campaigns' => [3],
                'action'    => 'added',
            ],
            'campaign' => [
                'id' => 4,
            ],
        ];
        \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
        \$this->assertFalse(\$result);
    }

    public function testValidateLeadChangeTriggerWithMatchingCampaignsAndInvalidAction(): void
    {
        \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], 'removed');
        \$event        = [
            'properties' => [
                'campaigns' => [3],
                'action'    => 'added',
            ],
            'campaign' => [
                'id' => 3,
            ],
        ];
        \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
        \$this->assertFalse(\$result);
    }

    public function testValidateLeadChangeTriggerWithMatchingCampaignsAndVariousActions(): void
    {
        \$actions = [
            'added'   => true,
            'removed' => true,
            'invalid' => false,
        ];

        foreach (\$actions as \$action => \$expectedResult) {
            \$campaignId   = 3;
            \$eventDetails = new CampaignLeadChangeEvent(new Campaign(), [], \$action);
            \$event        = [
                'properties' => [
                    'campaigns' => [\$campaignId, 8],
                    'action'    => \$action,
                ],
                'campaign' => [
                    'id' => \$campaignId,
                ],
            ];
            \$result = CampaignEventHelper::validateLeadChangeTrigger(\$eventDetails, \$event);
            \$this->assertSame(\$expectedResult, \$result);
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
        return "@bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Helper/CampaignEventHelperTest.php");
    }
}
