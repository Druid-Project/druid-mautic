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

/* @bundles/LeadBundle/Validator/SegmentUsedInCampaignsValidator.php */
class __TwigTemplate_7872d562cb806dc5eddfd89afdb9089a extends Template
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

namespace Mautic\\LeadBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\RecordNotUnpublishedException;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class SegmentUsedInCampaignsValidator
{
    public function __construct(private LeadListRepository \$leadListRepository, private TranslatorInterface \$translator)
    {
    }

    /**
     * @throws RecordNotUnpublishedException
     */
    public function validate(LeadList \$segment): void
    {
        if (!\$segment->getId()) {
            return;
        }

        \$campaignNames = \$this->leadListRepository->getSegmentCampaigns(\$segment->getId());

        if (1 > count(\$campaignNames)) {
            return;
        }

        \$campaignNames = array_map(fn (string \$segmentName): string => sprintf('\"%s\"', \$segmentName), \$campaignNames);
        \$errorMessage  = \$this->translator->trans(
            'mautic.lead.lists.used_in_campaigns',
            [
                '%count%'         => count(\$campaignNames),
                '%campaignNames%' => implode(', ', \$campaignNames),
            ],
            'validators'
        );

        throw new RecordNotUnpublishedException(\$errorMessage);
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
        return "@bundles/LeadBundle/Validator/SegmentUsedInCampaignsValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/SegmentUsedInCampaignsValidator.php", "/app/docroot/app/bundles/LeadBundle/Validator/SegmentUsedInCampaignsValidator.php");
    }
}
