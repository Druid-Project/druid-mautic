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

/* @bundles/CampaignBundle/Tests/Controller/AjaxControllerFunctionalTest.php */
class __TwigTemplate_914c4a07d9144e3431f6d30a2f8d6cec extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Controller;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\Lead as CampaignLead;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testCancelScheduledCampaignEventAction(): void
    {
        \$contact  = \$this->createContact();
        \$campaign = \$this->createCampaign();
        \$this->addContactToCampaign(\$contact, \$campaign);

        \$commandResult = \$this->testSymfonyCommand('mautic:campaigns:trigger', ['--campaign-id' => \$campaign->getId()]);

        Assert::assertStringContainsString('1 total event was scheduled', \$commandResult->getDisplay());

        \$payload = [
            'action'    => 'campaign:cancelScheduledCampaignEvent',
            'eventId'   => \$campaign->getEvents()[0]->getId(),
            'contactId' => \$contact->getId(),
        ];

        \$this->client->request(Request::METHOD_POST, '/s/ajax', \$payload, [], \$this->createAjaxHeaders());

        // Ensure we'll fetch fresh data from the database and not from entity manager.
        \$this->em->detach(\$contact);
        \$this->em->detach(\$campaign);

        /** @var LeadEventLogRepository \$leadEventLogRepository */
        \$leadEventLogRepository = \$this->em->getRepository(LeadEventLog::class);

        /** @var LeadEventLog \$log */
        \$log = \$leadEventLogRepository->findOneBy(['lead' => \$contact, 'campaign' => \$campaign]);

        Assert::assertTrue(\$this->client->getResponse()->isOk());
        Assert::assertSame('{\"success\":1}', \$this->client->getResponse()->getContent());
        Assert::assertFalse(\$log->getIsScheduled());
    }

    private function createContact(): Lead
    {
        \$contact = new Lead();

        \$this->em->persist(\$contact);
        \$this->em->flush();

        return \$contact;
    }

    private function addContactToCampaign(Lead \$contact, Campaign \$campaign): void
    {
        \$ref = new CampaignLead();
        \$ref->setCampaign(\$campaign);
        \$ref->setLead(\$contact);
        \$ref->setDateAdded(new \\DateTime());

        \$this->em->persist(\$ref);
        \$this->em->flush();
    }

    private function createCampaign(): Campaign
    {
        \$campaign = new Campaign();
        \$campaign->setName('Campaign A');
        \$campaign->setIsPublished(true);

        \$this->em->persist(\$campaign);
        \$this->em->flush();

        \$event = new Event();
        \$event->setCampaign(\$campaign);
        \$event->setName('Adjust contact points');
        \$event->setType('lead.changepoints');
        \$event->setEventType('action');
        \$event->setTriggerInterval(1);
        \$event->setTriggerIntervalUnit('d');
        \$event->setTriggerMode('interval');
        \$event->setProperties(
            [
                'canvasSettings' => [
                    'droppedX' => '1080',
                    'droppedY' => '155',
                ],
                'name'                       => '',
                'triggerMode'                => 'interval',
                'triggerDate'                => null,
                'triggerInterval'            => '1',
                'triggerIntervalUnit'        => 'd',
                'triggerHour'                => '',
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

        return \$campaign;
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
        return "@bundles/CampaignBundle/Tests/Controller/AjaxControllerFunctionalTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Controller/AjaxControllerFunctionalTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Controller/AjaxControllerFunctionalTest.php");
    }
}
