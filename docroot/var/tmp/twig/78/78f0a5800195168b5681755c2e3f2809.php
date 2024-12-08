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

/* @bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php */
class __TwigTemplate_1792d60f38bdecc133c1c9d422be47a6 extends Template
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

use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Action\\Remover;
use Mautic\\CampaignBundle\\Membership\\Exception\\ContactAlreadyRemovedFromCampaignException;
use Mautic\\CoreBundle\\Twig\\Helper\\DateHelper;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class RemoverTest extends \\PHPUnit\\Framework\\TestCase
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

    public function testMemberHasDateExitedSetWithForcedExit(): void
    {
        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(false);

        \$this->leadEventLogRepository->expects(\$this->once())
            ->method('unscheduleEvents');

        \$this->getRemover()->updateExistingMembership(\$campaignMember, true);

        \$this->assertInstanceOf(\\DateTime::class, \$campaignMember->getDateLastExited());
    }

    public function testMemberHasDateExistedSetToNullWhenRemovedByFilter(): void
    {
        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(false);

        \$this->leadEventLogRepository->expects(\$this->once())
            ->method('unscheduleEvents');

        \$this->getRemover()->updateExistingMembership(\$campaignMember, false);

        \$this->assertNull(\$campaignMember->getDateLastExited());
    }

    public function testExceptionThrownWhenMemberIsAlreadyRemoved(): void
    {
        \$this->expectException(ContactAlreadyRemovedFromCampaignException::class);

        \$campaignMember = new CampaignMember();
        \$campaignMember->setManuallyRemoved(true);

        \$this->getRemover()->updateExistingMembership(\$campaignMember, false);
    }

    /**
     * @return Remover
     */
    private function getRemover()
    {
        \$translator     = \$this->createMock(TranslatorInterface::class);
        \$dateTimeHelper = new DateHelper(
            'Y-m-d H:i:s',
            'Y-m-d H:i',
            'Y-m-d',
            'H:i',
            \$translator,
            \$this->createMock(\\Mautic\\CoreBundle\\Helper\\CoreParametersHelper::class)
        );

        return new Remover(\$this->leadRepository, \$this->leadEventLogRepository, \$translator, \$dateTimeHelper);
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
        return "@bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Membership/Action/RemoverTest.php");
    }
}
