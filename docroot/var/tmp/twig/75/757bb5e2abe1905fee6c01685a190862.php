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

/* @bundles/CampaignBundle/Tests/Membership/Action/AdderTest.php */
class __TwigTemplate_3365aa84f531b591349d7c124f5307a8 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Membership\\Action;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Action\\Adder;
use Mautic\\CampaignBundle\\Membership\\Exception\\ContactCannotBeAddedToCampaignException;
use Mautic\\LeadBundle\\Entity\\Lead;

class AdderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var LeadRepository|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$leadRepository;

    /**
     * @var LeadEventLogRepository|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$leadEventLogRepository;

    protected function setUp(): void
    {
        \$this->leadRepository         = \$this->createMock(LeadRepository::class);
        \$this->leadEventLogRepository = \$this->createMock(LeadEventLogRepository::class);
    }

    public function testNewMemberAdded(): void
    {
        \$campaign = \$this->createMock(Campaign::class);
        \$campaign->method('getId')
            ->willReturn(1);
        \$campaign->method('allowRestart')
            ->willReturn(true);

        \$contact = \$this->createMock(Lead::class);
        \$contact->method('getId')
            ->WillReturn(2);

        \$this->leadEventLogRepository->method('hasBeenInCampaignRotation')
            ->with(2, 1, 1)
            ->willReturn(true);

        \$this->leadRepository->expects(\$this->once())
            ->method('saveEntity');

        \$campaignMember = \$this->getAdder()->createNewMembership(\$contact, \$campaign, true);

        \$this->assertEquals(\$contact, \$campaignMember->getLead());
        \$this->assertEquals(\$campaign, \$campaignMember->getCampaign());
        \$this->assertEquals(true, \$campaignMember->wasManuallyAdded());
        \$this->assertEquals(2, \$campaignMember->getRotation());
    }

    public function testManuallyRemovedAddedBackWhenManualActionAddsTheMember(): void
    {
        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(true);
        \$campaignMember->setRotation(1);
        \$campaign = new Campaign();
        \$campaign->setAllowRestart(true);
        \$campaignMember->setCampaign(\$campaign);

        \$this->getAdder()->updateExistingMembership(\$campaignMember, true);

        \$this->assertEquals(true, \$campaignMember->wasManuallyAdded());
        \$this->assertEquals(2, \$campaignMember->getRotation());
    }

    public function testFilterRemovedAddedBackWhenManualActionAddsTheMember(): void
    {
        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(true);
        \$campaignMember->setRotation(1);
        \$campaignMember->setDateLastExited(new \\DateTime());
        \$campaign = new Campaign();
        \$campaign->setAllowRestart(true);
        \$campaignMember->setCampaign(\$campaign);

        \$this->getAdder()->updateExistingMembership(\$campaignMember, false);

        \$this->assertEquals(false, \$campaignMember->wasManuallyAdded());
        \$this->assertEquals(2, \$campaignMember->getRotation());
    }

    public function testManuallyRemovedIsNotAddedBackWhenFilterActionAddsTheMember(): void
    {
        \$this->expectException(ContactCannotBeAddedToCampaignException::class);

        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(true);
        \$campaignMember->setRotation(1);
        \$campaign = new Campaign();
        \$campaign->setAllowRestart(false);
        \$campaignMember->setCampaign(\$campaign);

        \$this->getAdder()->updateExistingMembership(\$campaignMember, false);
    }

    /**
     * @return Adder
     */
    private function getAdder()
    {
        return new Adder(\$this->leadRepository, \$this->leadEventLogRepository);
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
        return "@bundles/CampaignBundle/Tests/Membership/Action/AdderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/Action/AdderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Membership/Action/AdderTest.php");
    }
}
