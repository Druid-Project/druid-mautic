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

/* @bundles/LeadBundle/Entity/LeadCategoryRepository.php */
class __TwigTemplate_5e04caa851428ecc2a434882dc7b2d60 extends Template
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
 * @extends CommonRepository<LeadCategory>
 */
class LeadCategoryRepository extends CommonRepository
{
    /**
     * @return array<mixed, array<string, mixed>>
     */
    public function getLeadCategories(Lead \$lead): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('lc.id, lc.category_id, lc.date_added, lc.manually_added, lc.manually_removed, c.alias, c.title')
            ->from(MAUTIC_TABLE_PREFIX.'lead_categories', 'lc')
            ->join('lc', MAUTIC_TABLE_PREFIX.'categories', 'c', 'c.id = lc.category_id')
            ->where('lc.lead_id = :lead')
            ->andWhere('lc.manually_removed = 0')
            ->setParameter('lead', \$lead->getId());

        \$results = \$q->executeQuery()
            ->fetchAllAssociative();

        \$categories = [];
        foreach (\$results as \$category) {
            \$categories[\$category['category_id']] = \$category;
        }

        return \$categories;
    }

    /**
     * @return mixed[]
     */
    public function getUnsubscribedLeadCategories(Lead \$lead): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('lc.id, lc.category_id, lc.date_added, lc.manually_added, lc.manually_removed, c.alias, c.title')
            ->from(MAUTIC_TABLE_PREFIX.'lead_categories', 'lc')
            ->join('lc', MAUTIC_TABLE_PREFIX.'categories', 'c', 'c.id = lc.category_id')
            ->where('lc.lead_id = :lead')
            ->andWhere('lc.manually_removed = 1')
            ->setParameter('lead', \$lead->getId());

        \$results = \$q->executeQuery()->fetchAllAssociative();

        \$categories = [];
        foreach (\$results as \$category) {
            \$categories[\$category['category_id']] = \$category;
        }

        return \$categories;
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
        return "@bundles/LeadBundle/Entity/LeadCategoryRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadCategoryRepository.php", "/app/docroot/app/bundles/LeadBundle/Entity/LeadCategoryRepository.php");
    }
}
