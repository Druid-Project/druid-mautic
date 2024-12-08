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

/* @bundles/CampaignBundle/Tests/Functional/Fixtures/FixtureHelper.php */
class __TwigTemplate_89f60b12b22baf174c28ab7fc4df8f0a extends Template
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

declare(strict_types=1);

namespace Mautic\\CampaignBundle\\Tests\\Functional\\Fixtures;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\Lead as CampaignLead;
use Mautic\\LeadBundle\\Entity\\Lead;

final class FixtureHelper
{
    public function __construct(private EntityManagerInterface \$em)
    {
    }

    public function createContact(string \$email): Lead
    {
        \$contact = new Lead();
        \$contact->setEmail(\$email);

        \$this->em->persist(\$contact);

        return \$contact;
    }

    public function addContactToCampaign(Lead \$contact, Campaign \$campaign): CampaignLead
    {
        \$ref = new CampaignLead();
        \$ref->setCampaign(\$campaign);
        \$ref->setLead(\$contact);
        \$ref->setDateAdded(new \\DateTime());

        \$this->em->persist(\$ref);

        return \$ref;
    }

    public function createCampaign(string \$name): Campaign
    {
        \$campaign = new Campaign();
        \$campaign->setName(\$name);
        \$campaign->setIsPublished(true);

        \$this->em->persist(\$campaign);

        return \$campaign;
    }

    public function createCampaignWithScheduledEvent(Campaign \$campaign, int \$interval = 1, string \$intervalUnit = 'd', \\DateTimeInterface \$hour = null): Event
    {
        if (!\$campaign->getId()) {
            \$this->em->flush();
        }

        \$event = new Event();
        \$event->setCampaign(\$campaign);
        \$event->setName('Adjust contact points');
        \$event->setType('lead.changepoints');
        \$event->setEventType('action');
        \$event->setTriggerInterval(\$interval);
        \$event->setTriggerIntervalUnit(\$intervalUnit);
        \$event->setTriggerMode('interval');
        if (\$hour) {
            \$event->setTriggerHour(\$hour->format('H:i'));
        }
        \$event->setProperties(
            [
                'canvasSettings' => [
                    'droppedX' => '1080',
                    'droppedY' => '155',
                ],
                'name'                       => '',
                'triggerMode'                => 'interval',
                'triggerDate'                => null,
                'triggerInterval'            => \$interval,
                'triggerIntervalUnit'        => \$intervalUnit,
                'triggerHour'                => \$hour,
                'triggerRestrictedStartHour' => '',
                'triggerRestrictedStopHour'  => '',
                'anchor'                     => 'leadsource',
                'properties'                 => ['points' => '5'],
                'type'                       => 'lead.changepoints',
                'eventType'                  => 'action',
                'anchorEventType'            => 'source',
                'campaignId'                 => \$campaign->getId(),
                'buttons'                    => ['save' => ''],
                'points'                     => 5,
            ]
        );

        \$this->em->persist(\$event);
        \$this->em->flush();

        \$campaign->addEvent(0, \$event);
        \$campaign->setCanvasSettings(
            [
                'nodes' => [
                    [
                        'id'        => \$event->getId(),
                        'positionX' => '1080',
                        'positionY' => '155',
                    ],
                    [
                        'id'        => 'lists',
                        'positionX' => '1180',
                        'positionY' => '50',
                    ],
                ],
                'connections' => [
                    [
                        'sourceId' => 'lists',
                        'targetId' => \$event->getId(),
                        'anchors'  => [
                            'source' => 'leadsource',
                            'target' => 'top',
                        ],
                    ],
                ],
            ]
        );

        return \$event;
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
        return "@bundles/CampaignBundle/Tests/Functional/Fixtures/FixtureHelper.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Functional/Fixtures/FixtureHelper.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Functional/Fixtures/FixtureHelper.php");
    }
}
