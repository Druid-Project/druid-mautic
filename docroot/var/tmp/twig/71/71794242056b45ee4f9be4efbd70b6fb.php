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

/* @bundles/LeadBundle/Entity/UtmTagRepository.php */
class __TwigTemplate_d702b8523b38fe78677256cec19524a1 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<UtmTag>
 */
class UtmTagRepository extends CommonRepository
{
    use TimelineTrait;

    /**
     * Get tag entities by lead.
     *
     * @return array
     */
    public function getUtmTagsByLead(Lead \$lead = null, \$options = [])
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->select('*')
            ->from(MAUTIC_TABLE_PREFIX.'lead_utmtags', 'ut');

        if (\$lead instanceof Lead) {
            \$qb->where('ut.lead_id = '.(int) \$lead->getId());
        }

        if (isset(\$options['search']) && \$options['search']) {
            \$qb->andWhere(\$qb->expr()->or(
                \$qb->expr()->like('ut.utm_campaign', \$qb->expr()->literal('%'.\$options['search'].'%')),
                \$qb->expr()->like('ut.utm_content', \$qb->expr()->literal('%'.\$options['search'].'%')),
                \$qb->expr()->like('ut.utm_medium', \$qb->expr()->literal('%'.\$options['search'].'%')),
                \$qb->expr()->like('ut.utm_source', \$qb->expr()->literal('%'.\$options['search'].'%')),
                \$qb->expr()->like('ut.utm_term', \$qb->expr()->literal('%'.\$options['search'].'%'))
            ));
        }

        return \$this->getTimelineResults(\$qb, \$options, 'ut.utm_campaign', 'ut.date_added', ['query'], ['date_added'], null, 'ut.id');
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
        return "@bundles/LeadBundle/Entity/UtmTagRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/UtmTagRepository.php", "/app/docroot/app/bundles/LeadBundle/Entity/UtmTagRepository.php");
    }
}
