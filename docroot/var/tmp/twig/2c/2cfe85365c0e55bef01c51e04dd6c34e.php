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

/* @bundles/LeadBundle/Entity/MergeRecordRepository.php */
class __TwigTemplate_9c2e0607a4a55ed748167c6ec48c5fa4 extends Template
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
 * @extends CommonRepository<MergeRecord>
 */
class MergeRecordRepository extends CommonRepository
{
    /**
     * @return Lead|null
     */
    public function findMergedContact(\$id)
    {
        /** @var MergeRecord \$record */
        if (\$record = \$this->findOneBy(['mergedId' => (int) \$id], ['dateAdded' => 'desc'])) {
            \$contact = \$record->getContact();

            // Clear these records from the EM so that subsequent fetches don't return deleted entities
            \$this->getEntityManager()->detach(\$record);

            return \$contact;
        }

        return null;
    }

    /**
     * Keep track of subseqent merges by cascading records to the latest lead that was merged into.
     */
    public function moveMergeRecord(\$fromId, \$toId): void
    {
        \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->update(MAUTIC_TABLE_PREFIX.'contact_merge_records')
            ->set('contact_id', (int) \$toId)
            ->where('contact_id = '.(int) \$fromId)
            ->executeQuery();
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
        return "@bundles/LeadBundle/Entity/MergeRecordRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/MergeRecordRepository.php", "/app/docroot/app/bundles/LeadBundle/Entity/MergeRecordRepository.php");
    }
}
