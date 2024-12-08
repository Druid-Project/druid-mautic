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

/* @bundles/CampaignBundle/Service/Campaign.php */
class __TwigTemplate_2906dd14cb88c8db9d3b80d2b2c685e1 extends Template
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

use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\EmailBundle\\Entity\\EmailRepository;

/**
 * @deprecated to be removed in 6.0; use CampaignAuditService instead
 */
class Campaign
{
    public function __construct(
        private CampaignRepository \$campaignRepository,
        private EmailRepository \$emailRepository
    ) {
    }

    /**
     * Has campaign at least one unpublished e-mail?
     *
     * @param int \$id
     */
    public function hasUnpublishedEmail(\$id): bool
    {
        \$emailIds = \$this->campaignRepository->fetchEmailIdsById(\$id);

        if (!\$emailIds) {
            return false;
        }

        return \$this->emailRepository->isOneUnpublished(\$emailIds);
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
        return "@bundles/CampaignBundle/Service/Campaign.php";
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
        return new Source("", "@bundles/CampaignBundle/Service/Campaign.php", "/app/docroot/app/bundles/CampaignBundle/Service/Campaign.php");
    }
}
