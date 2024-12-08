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

/* @bundles/LeadBundle/Tests/Controller/AjaxControllerFunctionalTest.php */
class __TwigTemplate_d5bfa3e89125684b32f374c116716ca7 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use MauticPlugin\\MauticTagManagerBundle\\Entity\\Tag;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxControllerFunctionalTest extends MauticMysqlTestCase
{
    protected function beforeBeginTransaction(): void
    {
        \$this->resetAutoincrement([
            'leads',
            'campaigns',
        ]);
    }

    public function testToggleLeadCampaignAction(): void
    {
        \$campaign = \$this->createCampaign();
        \$contact  = \$this->createContact('blabla@contact.email');

        // Ensure there is no member for campaign 1 yet.
        \$this->assertSame([], \$this->getMembersForCampaign(\$campaign->getId()));

        // Create the member now.
        \$payload = [
            'action'         => 'lead:toggleLeadCampaign',
            'leadId'         => \$contact->getId(),
            'campaignId'     => \$campaign->getId(),
            'campaignAction' => 'add',
        ];

        \$this->client->request(Request::METHOD_POST, '/s/ajax', \$payload, [], \$this->createAjaxHeaders());
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        \$this->assertTrue(\$clientResponse->isOk(), \$clientResponse->getContent());

        // Ensure the contact 1 is a campaign 1 member now.
        \$this->assertSame([['lead_id' => (string) \$contact->getId(), 'manually_added' => '1', 'manually_removed' => '0']], \$this->getMembersForCampaign(\$campaign->getId()));

        \$this->assertTrue(isset(\$response['success']), 'The response does not contain the `success` param.');
        \$this->assertSame(1, \$response['success']);

        // Let's remove the member now.
        \$payload = [
            'action'         => 'lead:toggleLeadCampaign',
            'leadId'         => \$contact->getId(),
            'campaignId'     => \$campaign->getId(),
            'campaignAction' => 'remove',
        ];

        \$this->client->request(Request::METHOD_POST, '/s/ajax', \$payload, [], \$this->createAjaxHeaders());
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        // Ensure the contact 1 was removed as a member of campaign 1 member now.
        \$this->assertSame([['lead_id' => (string) \$contact->getId(), 'manually_added' => '0', 'manually_removed' => '1']], \$this->getMembersForCampaign(\$campaign->getId()));

        \$this->assertTrue(\$clientResponse->isOk(), \$clientResponse->getContent());
        \$this->assertTrue(isset(\$response['success']), 'The response does not contain the `success` param.');
        \$this->assertSame(1, \$response['success']);
    }

    public function testSegmentDependencyTreeWithNotExistingSegment(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/ajax?action=lead:getSegmentDependencyTree&id=9999');
        \$response = \$this->client->getResponse();
        Assert::assertSame(404, \$response->getStatusCode());
        Assert::assertSame('{\"message\":\"Segment 9999 could not be found.\"}', \$response->getContent());
    }

    public function testCompanyLookupWithNoCompanySelected(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/ajax?action=lead:getLookupChoiceList&searchKey=lead.company&lead.company=unicorn');
        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode());
        Assert::assertSame('[]', \$response->getContent());
    }

    public function testCompanyLookupWithCompanySelected(): void
    {
        \$company = new Company();
        \$company->setName('SaaS Company');
        \$this->em->persist(\$company);
        \$this->em->flush();

        \$this->client->request(Request::METHOD_GET, '/s/ajax?action=lead:getLookupChoiceList&searchKey=lead.company&lead.company=sa');
        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode());
        Assert::assertSame('[{\"text\":\"SaaS Company\",\"value\":\"'.\$company->getId().'\"}]', \$response->getContent());
    }

    public function testCompanyLookupWithNoModelSet(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/ajax?action=lead:getLookupChoiceList&lead.company=unicorn', [], [], \$this->createAjaxHeaders());
        \$response = \$this->client->getResponse();
        Assert::assertSame(400, \$response->getStatusCode());
        Assert::assertStringContainsString('Bad Request - The searchKey parameter is required', \$response->getContent());
    }

    public function testSegmentDependencyTree(): void
    {
        \$segmentA = new LeadList();
        \$segmentA->setName('Segment A');
        \$segmentA->setPublicName('Segment A');
        \$segmentA->setAlias('segment-a');

        \$segmentB = new LeadList();
        \$segmentB->setName('Segment B');
        \$segmentB->setPublicName('Segment B');
        \$segmentB->setAlias('segment-b');

        \$segmentC = new LeadList();
        \$segmentC->setName('Segment C');
        \$segmentC->setPublicName('Segment C');
        \$segmentC->setAlias('segment-c');

        \$segmentD = new LeadList();
        \$segmentD->setName('Segment D');
        \$segmentD->setPublicName('Segment D');
        \$segmentD->setAlias('segment-d');

        \$segmentE = new LeadList();
        \$segmentE->setName('Segment E');
        \$segmentE->setPublicName('Segment E');
        \$segmentE->setAlias('segment-e');

        \$this->em->persist(\$segmentA);
        \$this->em->persist(\$segmentB);
        \$this->em->persist(\$segmentC);
        \$this->em->persist(\$segmentD);
        \$this->em->persist(\$segmentE);
        \$this->em->flush();

        \$segmentA->setFilters(
            [
                [
                    'object'     => 'lead',
                    'glue'       => 'and',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => 'in',
                    'properties' => ['filter' => [\$segmentB->getId()]],
                ], [
                    'object'     => 'lead',
                    'glue'       => 'or',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => '!in',
                    'properties' => ['filter' => [\$segmentC->getId(), \$segmentD->getId()]],
                ],
            ]
        );

        \$segmentC->setFilters(
            [
                [
                    'object'     => 'lead',
                    'glue'       => 'and',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => 'in',
                    'properties' => ['filter' => [\$segmentE->getId()]],
                ],
            ]
        );

        \$this->em->persist(\$segmentA);
        \$this->em->persist(\$segmentC);
        \$this->em->flush();

        \$this->client->request(Request::METHOD_GET, \"/s/ajax?action=lead:getSegmentDependencyTree&id={\$segmentA->getId()}\");
        \$response = \$this->client->getResponse();
        self::assertTrue(\$response->isOk(), \$response->getContent());

        Assert::assertSame(
            [
                'levels' => [
                    [
                        'nodes' => [
                            ['id' => \"0-{\$segmentA->getId()}\", 'name' => \$segmentA->getName(), 'link' => \"/s/segments/view/{\$segmentA->getId()}\"],
                        ],
                    ],
                    [
                        'nodes' => [
                            ['id' => \"{\$segmentA->getId()}-{\$segmentB->getId()}\", 'name' => \$segmentB->getName(), 'link' => \"/s/segments/view/{\$segmentB->getId()}\"],
                            ['id' => \"{\$segmentA->getId()}-{\$segmentC->getId()}\", 'name' => \$segmentC->getName(), 'link' => \"/s/segments/view/{\$segmentC->getId()}\"],
                            ['id' => \"{\$segmentA->getId()}-{\$segmentD->getId()}\", 'name' => \$segmentD->getName(), 'link' => \"/s/segments/view/{\$segmentD->getId()}\"],
                        ],
                    ],
                    [
                        'nodes' => [
                            ['id' => \"{\$segmentC->getId()}-{\$segmentE->getId()}\", 'name' => \$segmentE->getName(), 'link' => \"/s/segments/view/{\$segmentE->getId()}\"],
                        ],
                    ],
                ],
                'edges' => [
                    ['source' => \"0-{\$segmentA->getId()}\", 'target' => \"{\$segmentA->getId()}-{\$segmentB->getId()}\"],
                    ['source' => \"0-{\$segmentA->getId()}\", 'target' => \"{\$segmentA->getId()}-{\$segmentC->getId()}\"],
                    ['source' => \"0-{\$segmentA->getId()}\", 'target' => \"{\$segmentA->getId()}-{\$segmentD->getId()}\"],
                    ['source' => \"{\$segmentA->getId()}-{\$segmentC->getId()}\", 'target' => \"{\$segmentC->getId()}-{\$segmentE->getId()}\"],
                ],
            ],
            json_decode(\$response->getContent(), true)
        );
    }

    public function testSegmentDependencyTreeWithLoop(): void
    {
        \$segmentA = new LeadList();
        \$segmentA->setName('Segment A');
        \$segmentA->setPublicName('Segment A');
        \$segmentA->setAlias('segment-a');

        \$segmentB = new LeadList();
        \$segmentB->setName('Segment B');
        \$segmentB->setPublicName('Segment B');
        \$segmentB->setAlias('segment-b');

        \$segmentC = new LeadList();
        \$segmentC->setName('Segment C');
        \$segmentC->setPublicName('Segment C');
        \$segmentC->setAlias('segment-c');

        \$segmentD = new LeadList();
        \$segmentD->setName('Segment D');
        \$segmentD->setPublicName('Segment D');
        \$segmentD->setAlias('segment-d');

        \$segmentE = new LeadList();
        \$segmentE->setName('Segment E');
        \$segmentE->setPublicName('Segment E');
        \$segmentE->setAlias('segment-e');

        \$this->em->persist(\$segmentA);
        \$this->em->persist(\$segmentB);
        \$this->em->persist(\$segmentC);
        \$this->em->persist(\$segmentD);
        \$this->em->persist(\$segmentE);
        \$this->em->flush();

        \$segmentA->setFilters(
            [
                [
                    'object'     => 'lead',
                    'glue'       => 'and',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => 'in',
                    'properties' => ['filter' => [\$segmentB->getId()]],
                ], [
                    'object'     => 'lead',
                    'glue'       => 'or',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => '!in',
                    'properties' => ['filter' => [\$segmentC->getId(), \$segmentD->getId()]],
                ],
            ]
        );

        \$segmentC->setFilters(
            [
                [
                    'object'     => 'lead',
                    'glue'       => 'and',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => 'in',
                    'properties' => ['filter' => [\$segmentE->getId()]],
                ],
            ]
        );

        \$segmentE->setFilters(
            [
                [
                    'object'     => 'lead',
                    'glue'       => 'and',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => 'in',
                    'properties' => ['filter' => [\$segmentA->getId()]],
                ],
            ]
        );

        \$this->em->persist(\$segmentA);
        \$this->em->persist(\$segmentC);
        \$this->em->flush();

        \$this->client->request(Request::METHOD_GET, \"/s/ajax?action=lead:getSegmentDependencyTree&id={\$segmentA->getId()}\");
        \$response = \$this->client->getResponse();
        self::assertTrue(\$response->isOk(), \$response->getContent());

        Assert::assertSame(
            [
                'levels' => [
                    [
                        'nodes' => [
                            ['id' => \"0-{\$segmentA->getId()}\", 'name' => \$segmentA->getName(), 'link' => \"/s/segments/view/{\$segmentA->getId()}\"],
                        ],
                    ],
                    [
                        'nodes' => [
                            ['id' => \"{\$segmentA->getId()}-{\$segmentB->getId()}\", 'name' => \$segmentB->getName(), 'link' => \"/s/segments/view/{\$segmentB->getId()}\"],
                            ['id' => \"{\$segmentA->getId()}-{\$segmentC->getId()}\", 'name' => \$segmentC->getName(), 'link' => \"/s/segments/view/{\$segmentC->getId()}\"],
                            ['id' => \"{\$segmentA->getId()}-{\$segmentD->getId()}\", 'name' => \$segmentD->getName(), 'link' => \"/s/segments/view/{\$segmentD->getId()}\"],
                        ],
                    ],
                    [
                        'nodes' => [
                            ['id' => \"{\$segmentC->getId()}-{\$segmentE->getId()}\", 'name' => \$segmentE->getName(), 'link' => \"/s/segments/view/{\$segmentE->getId()}\"],
                        ],
                    ],
                    [
                        'nodes' => [
                            [
                                'id'      => \"{\$segmentE->getId()}-{\$segmentA->getId()}\",
                                'name'    => \$segmentA->getName(),
                                'link'    => \"/s/segments/view/{\$segmentA->getId()}\",
                                'message' => 'This segment already exists in the segment dependency tree',
                            ],
                        ],
                    ],
                ],
                'edges' => [
                    ['source' => \"0-{\$segmentA->getId()}\", 'target' => \"{\$segmentA->getId()}-{\$segmentB->getId()}\"],
                    ['source' => \"0-{\$segmentA->getId()}\", 'target' => \"{\$segmentA->getId()}-{\$segmentC->getId()}\"],
                    ['source' => \"0-{\$segmentA->getId()}\", 'target' => \"{\$segmentA->getId()}-{\$segmentD->getId()}\"],
                    ['source' => \"{\$segmentA->getId()}-{\$segmentC->getId()}\", 'target' => \"{\$segmentC->getId()}-{\$segmentE->getId()}\"],
                    ['source' => \"{\$segmentC->getId()}-{\$segmentE->getId()}\", 'target' => \"{\$segmentE->getId()}-{\$segmentA->getId()}\"],
                ],
            ],
            json_decode(\$response->getContent(), true)
        );
    }

    public function testRemoveTagFromLeadAction(): void
    {
        // Create a lead
        \$lead = \$this->createContact('test@email.com');
        // ... set other properties as needed

        // Create a tag
        \$tag = new Tag();
        \$tag->setTag('Test Tag');
        // ... set other properties as needed

        // Link the lead and tag
        \$lead->addTag(\$tag);

        // Persist the lead and tag
        \$this->em->persist(\$lead);
        \$this->em->persist(\$tag);
        \$this->em->flush();

        // Call the removeTagFromLeadAction
        \$this->client->request(Request::METHOD_POST, '/s/ajax?action=lead:removeTagFromLead', [
            'leadId' => \$lead->getId(),
            'tagId'  => \$tag->getId(),
        ]);
        \$clientResponse = \$this->client->getResponse();

        \$response = json_decode(\$clientResponse->getContent(), true);
        \$this->assertTrue(\$clientResponse->isOk(), \$clientResponse->getContent());

        // Assert the tag is removed from the lead
        \$updatedLead = \$this->em->getRepository(Lead::class)->find(\$lead->getId());
        \$this->assertFalse(in_array(\$tag, \$updatedLead->getTags()->toArray()));
    }

    private function getMembersForCampaign(int \$campaignId): array
    {
        return \$this->connection->createQueryBuilder()
            ->select('cl.lead_id, cl.manually_added, cl.manually_removed')
            ->from(MAUTIC_TABLE_PREFIX.'campaign_leads', 'cl')
            ->where(\"cl.campaign_id = {\$campaignId}\")
            ->executeQuery()
            ->fetchAllAssociative();
    }

    private function createContact(string \$email): Lead
    {
        \$lead = new Lead();
        \$lead->setEmail(\$email);

        \$this->em->persist(\$lead);
        \$this->em->flush();

        return \$lead;
    }

    private function createCampaign(): Campaign
    {
        \$campaign = new Campaign();

        \$campaign->setName('Campaign A');
        \$campaign->setCanvasSettings(
            [
                'nodes' => [
                    [
                        'id'        => '148',
                        'positionX' => '760',
                        'positionY' => '155',
                    ],
                    [
                        'id'        => 'lists',
                        'positionX' => '860',
                        'positionY' => '50',
                    ],
                ],
                'connections' => [
                    [
                        'sourceId' => 'lists',
                        'targetId' => '148',
                        'anchors'  => [
                            'source' => 'leadsource',
                            'target' => 'top',
                        ],
                    ],
                ],
            ]
        );

        \$this->em->persist(\$campaign);
        \$this->em->flush();

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
        return "@bundles/LeadBundle/Tests/Controller/AjaxControllerFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/AjaxControllerFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/AjaxControllerFunctionalTest.php");
    }
}