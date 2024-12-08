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

/* @bundles/CampaignBundle/Service/CampaignAuditService.php */
class __TwigTemplate_18788cf24bc436a03d300b992395ef13 extends Template
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

namespace Mautic\\CampaignBundle\\Service;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\EmailRepository;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class CampaignAuditService
{
    public function __construct(
        private FlashBag \$flashBag,
        private UrlGeneratorInterface \$urlGenerator,
        private CampaignRepository \$campaignRepository,
        private EmailRepository \$emailRepository
    ) {
    }

    public function addWarningForUnpublishedEmails(Campaign \$campaign): void
    {
        \$emailIds = \$this->campaignRepository->fetchEmailIdsById(\$campaign->getId());
        \$emails   = \$this->emailRepository->findBy(['id' => \$emailIds]);

        foreach (\$emails as \$email) {
            if (!\$email->isPublished()) {
                \$this->setEmailWarningFlashMessage(\$email);
            }
        }
    }

    private function setEmailWarningFlashMessage(Email \$email): void
    {
        \$this->flashBag->add(
            'mautic.core.notice.campaign.unpublished.email',
            [
                '%name%'      => \$email->getName(),
                '%menu_link%' => 'mautic_email_index',
                '%url%'       => \$this->urlGenerator->generate('mautic_email_action', [
                    'objectAction' => 'edit',
                    'objectId'     => \$email->getId(),
                ]),
            ],
            FlashBag::LEVEL_WARNING,
        );
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
        return "@bundles/CampaignBundle/Service/CampaignAuditService.php";
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
        return new Source("", "@bundles/CampaignBundle/Service/CampaignAuditService.php", "/app/docroot/app/bundles/CampaignBundle/Service/CampaignAuditService.php");
    }
}
