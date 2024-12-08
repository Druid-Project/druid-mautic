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

/* @bundles/CampaignBundle/Tests/Model/CampaignModelFunctionalTest.php */
class __TwigTemplate_4ddb20a2762613e34a04e9a2139739dd extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Model;

use Doctrine\\DBAL\\Exception;
use Doctrine\\ORM\\Exception\\ORMException;
use Doctrine\\ORM\\OptimisticLockException;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\Lead as CampaignLead;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\Redirect;
use Mautic\\PageBundle\\Entity\\Trackable;

class CampaignModelFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @throws OptimisticLockException
     * @throws ORMException
     * @throws Exception
     */
    public function testGetEmailsCountryStats(): void
    {
        /** @var CampaignModel \$model */
        \$model = \$this->getContainer()->get('mautic.campaign.model.campaign');

        \$dateFrom     = new \\DateTimeImmutable('2023-07-21');
        \$dateTo       = new \\DateTimeImmutable('2023-07-24');
        \$leadsPayload = [
            [
                'email'   => 'example1@test.com',
                'country' => 'Spain',
                'read'    => true,
                'click'   => true,
            ],
            [
                'email'   => 'example2@test.com',
                'country' => 'Spain',
                'read'    => true,
                'click'   => false,
            ],
            [
                'email'   => 'example3@test.com',
                'country' => 'Spain',
                'read'    => false,
                'click'   => false,
            ],
            [
                'email'   => 'example4@test.com',
                'country' => '',
                'read'    => true,
                'click'   => true,
            ],
            [
                'email'   => 'example5@test.com',
                'country' => 'Poland',
                'read'    => true,
                'click'   => false,
            ],
            [
                'email'   => 'example6@test.com',
                'country' => 'Poland',
                'read'    => true,
                'click'   => true,
            ],
        ];

        // Create test campaign
        \$campaign = new Campaign();
        \$campaign->setName('Test campaign');
        \$this->em->persist(\$campaign);
        \$this->em->flush();

        foreach (\$leadsPayload as \$key => \$values) {
            // Create lead
            \$lead = new Lead();
            \$lead->setEmail(\$values['email']);
            \$lead->setCountry(\$values['country']);
            \$this->em->persist(\$lead);

            \$leadsArr[] = [
                'lead'    => \$lead,
                'read'    => \$values['read'],
                'click'   => \$values['click'],
            ];

            // Create campaign lead and assign to lead
            \$campaignLead = new CampaignLead();
            \$campaignLead->setLead(\$lead);
            \$campaignLead->setDateAdded(new \\DateTime('2023-07-22'));
            \$campaignLead->setManuallyAdded(true);
            \$campaignLead->setCampaign(\$campaign);
            \$this->em->persist(\$campaignLead);
            \$this->em->flush();

            \$campaign->addLead(\$key, \$campaignLead);
        }

        for (\$i = 0; \$i < 4; ++\$i) {
            // Create email
            \$email = new Email();
            \$email->setName('Test email '.\$i);
            \$this->em->persist(\$email);
            \$this->em->flush();

            // Create email events
            \$event = new Event();
            \$event->setName('Send email '.\$i);
            \$event->setType('email.send');
            \$event->setEventType('action');
            \$event->setChannel('email');
            \$event->setChannelId(\$email->getId());
            \$event->setCampaign(\$campaign);
            \$this->em->persist(\$event);
            \$this->em->flush();

            // Add events to campaign
            \$campaign->addEvent(\$i, \$event);

            // Create campaign email sending statistics
            foreach (\$leadsArr as \$value) {
                \$this->emulateEmailStat(\$value['lead'], \$email, \$value['read'], \$event->getId());

                if (\$value['read'] && \$value['click']) {
                    \$hits       = rand(1, 5);
                    \$uniqueHits = rand(1, \$hits);
                    \$this->emulateClick(\$value['lead'], \$email, \$hits, \$uniqueHits);
                }
            }
        }

        \$results = \$model->getCountryStats(\$campaign, \$dateFrom, \$dateTo);

        \$this->assertCount(4, \$campaign->getEmailSendEvents());
        \$this->assertCount(3, \$results);
        \$this->assertSame([
            'contacts' => [
                [
                    'country'  => '',
                    'contacts' => '1',
                ],
                [
                    'country'  => 'Poland',
                    'contacts' => '2',
                ],
                [
                    'country'  => 'Spain',
                    'contacts' => '3',
                ],
            ],
            'clicked_through_count' => [
                [
                    'clicked_through_count' => '4',
                    'country'               => '',
                ],
                [
                    'clicked_through_count' => '4',
                    'country'               => 'Poland',
                ],
                [
                    'clicked_through_count' => '4',
                    'country'               => 'Spain',
                ],
            ],
            'read_count' => [
                [
                    'read_count'            => '4',
                    'country'               => '',
                ],
                [
                    'read_count'            => '8',
                    'country'               => 'Poland',
                ],
                [
                    'read_count'            => '8',
                    'country'               => 'Spain',
                ],
            ],
        ], \$results);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function testGetContextEntity(): void
    {
        /** @var CampaignModel \$model */
        \$model = \$this->getContainer()->get('mautic.campaign.model.campaign');

        \$campaign = new Campaign();
        \$campaign->setName('Test email');
        \$this->em->persist(\$campaign);
        \$this->em->flush();

        \$id     = \$campaign->getId();
        \$result = \$model->getEntity(\$id);

        \$this->assertSame(\$campaign, \$result);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    private function emulateEmailStat(Lead \$lead, Email \$email, bool \$isRead, int \$sourceId): void
    {
        \$stat = new Stat();
        \$stat->setEmailAddress('test@test.com');
        \$stat->setLead(\$lead);
        \$stat->setDateSent(new \\DateTime('2023-07-22'));
        \$stat->setEmail(\$email);
        \$stat->setIsRead(\$isRead);
        \$stat->setSource('campaign.event');
        \$stat->setSourceId(\$sourceId);
        \$this->em->persist(\$stat);
        \$this->em->flush();
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    private function emulateClick(Lead \$lead, Email \$email, int \$hits, int \$uniqueHits): void
    {
        \$ipAddress = new IpAddress();
        \$ipAddress->setIpAddress('127.0.0.1');
        \$this->em->persist(\$ipAddress);
        \$this->em->flush();

        \$redirect = new Redirect();
        \$redirect->setRedirectId(uniqid());
        \$redirect->setUrl('https://example.com');
        \$redirect->setUniqueHits(\$uniqueHits);
        \$redirect->setHits(\$hits);
        \$this->em->persist(\$redirect);

        \$trackable = new Trackable();
        \$trackable->setChannelId(\$email->getId());
        \$trackable->setHits(\$hits);
        \$trackable->setChannel('email');
        \$trackable->setUniqueHits(\$uniqueHits);
        \$trackable->setRedirect(\$redirect);
        \$this->em->persist(\$trackable);

        \$pageHit = new Hit();
        \$pageHit->setRedirect(\$redirect);
        \$pageHit->setIpAddress(\$ipAddress);
        \$pageHit->setEmail(\$email);
        \$pageHit->setLead(\$lead);
        \$pageHit->setDateHit(new \\DateTime('2023-07-22'));
        \$pageHit->setCode(200);
        \$pageHit->setUrl(\$redirect->getUrl());
        \$pageHit->setTrackingId(\$redirect->getRedirectId());
        \$pageHit->setSource('email');
        \$pageHit->setSourceId(\$email->getId());
        \$this->em->persist(\$pageHit);
        \$this->em->flush();
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
        return "@bundles/CampaignBundle/Tests/Model/CampaignModelFunctionalTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Model/CampaignModelFunctionalTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Model/CampaignModelFunctionalTest.php");
    }
}
