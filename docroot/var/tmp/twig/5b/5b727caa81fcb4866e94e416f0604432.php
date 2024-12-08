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

/* @bundles/CampaignBundle/Tests/Service/CampaignTest.php */
class __TwigTemplate_9dff7baa220a29946f6601aa0034bf67 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Service;

use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Service\\Campaign;
use Mautic\\EmailBundle\\Entity\\EmailRepository;

/**
 * @deprecated to be removed in 6.0
 */
class CampaignTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testHasUnpublishedEmail(): void
    {
        \$campaignId         = 1;
        \$campaignRepository = \$this->createMock(CampaignRepository::class);
        \$campaignRepository
            ->expects(\$this->once())
            ->method('fetchEmailIdsById')
            ->with(\$campaignId)
            ->willReturn([]);
        \$emailRepository = \$this->createMock(EmailRepository::class);
        \$campaignService = new Campaign(\$campaignRepository, \$emailRepository);

        \$this->assertFalse(\$campaignService->hasUnpublishedEmail(\$campaignId));

        \$emailIds             = [1, 2.3];
        \$hasUnpublishedEmails = true;
        \$campaignRepository   = \$this->createMock(CampaignRepository::class);
        \$campaignRepository
            ->expects(\$this->once())
            ->method('fetchEmailIdsById')
            ->with(\$campaignId)
            ->willReturn(\$emailIds);
        \$emailRepository = \$this->createMock(EmailRepository::class);
        \$emailRepository
            ->expects(\$this->once())
            ->method('isOneUnpublished')
            ->with(\$emailIds)
            ->willReturn(\$hasUnpublishedEmails);
        \$campaignService = new Campaign(\$campaignRepository, \$emailRepository);
        \$this->assertTrue(\$campaignService->hasUnpublishedEmail(\$campaignId));
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
        return "@bundles/CampaignBundle/Tests/Service/CampaignTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Service/CampaignTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Service/CampaignTest.php");
    }
}
