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

/* @bundles/CampaignBundle/Entity/ContactLimiterTrait.php */
class __TwigTemplate_007f9b85adb642b410fc28e0d2c336f6 extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

use Doctrine\\DBAL\\ArrayParameterType;
use Doctrine\\DBAL\\Query\\QueryBuilder as DbalQueryBuilder;
use Doctrine\\ORM\\QueryBuilder as OrmQueryBuilder;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;

trait ContactLimiterTrait
{
    /**
     * @param string \$alias
     * @param bool   \$isCount
     */
    private function updateQueryFromContactLimiter(\$alias, DbalQueryBuilder \$qb, ContactLimiter \$contactLimiter, \$isCount = false): void
    {
        \$minContactId = \$contactLimiter->getMinContactId();
        \$maxContactId = \$contactLimiter->getMaxContactId();
        if (\$contactId = \$contactLimiter->getContactId()) {
            \$qb->andWhere(
                \$qb->expr()->eq(\"\$alias.lead_id\", ':contactId')
            )
                ->setParameter('contactId', \$contactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        } elseif (\$contactIds = \$contactLimiter->getContactIdList()) {
            \$qb->andWhere(
                \$qb->expr()->in(\"\$alias.lead_id\", ':contactIds')
            )
                ->setParameter('contactIds', \$contactIds, ArrayParameterType::INTEGER);
        } elseif (\$minContactId && \$maxContactId) {
            \$qb->andWhere(
                \"\$alias.lead_id BETWEEN :minContactId AND :maxContactId\"
            )
                ->setParameter('minContactId', \$minContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER)
                ->setParameter('maxContactId', \$maxContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        } elseif (\$minContactId) {
            \$qb->andWhere(
                \$qb->expr()->gte(\"\$alias.lead_id\", ':minContactId')
            )
                ->setParameter('minContactId', \$minContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        } elseif (\$maxContactId) {
            \$qb->andWhere(
                \$qb->expr()->lte(\"\$alias.lead_id\", ':maxContactId')
            )
                ->setParameter('maxContactId', \$maxContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        }

        if (\$threadId = \$contactLimiter->getThreadId()) {
            if (\$maxThreads = \$contactLimiter->getMaxThreads()) {
                if (\$threadId <= \$maxThreads) {
                    \$qb->andWhere(\"MOD((\$alias.lead_id + :threadShift), :maxThreads) = 0\")
                        ->setParameter('threadShift', \$threadId - 1, \\Doctrine\\DBAL\\ParameterType::INTEGER)
                        ->setParameter('maxThreads', \$maxThreads, \\Doctrine\\DBAL\\ParameterType::INTEGER);
                }
            }
        }

        if (!\$isCount && \$limit = \$contactLimiter->getBatchLimit()) {
            \$qb->setMaxResults(\$limit);
        }
    }

    /**
     * @param string \$alias
     * @param bool   \$isCount
     */
    private function updateOrmQueryFromContactLimiter(\$alias, OrmQueryBuilder \$qb, ContactLimiter \$contactLimiter, \$isCount = false): void
    {
        \$minContactId = \$contactLimiter->getMinContactId();
        \$maxContactId = \$contactLimiter->getMaxContactId();
        if (\$contactId = \$contactLimiter->getContactId()) {
            \$qb->andWhere(
                \$qb->expr()->eq(\"IDENTITY(\$alias.lead)\", ':contact')
            )
                ->setParameter('contact', \$contactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        } elseif (\$contactIds = \$contactLimiter->getContactIdList()) {
            \$qb->andWhere(
                \$qb->expr()->in(\"IDENTITY(\$alias.lead)\", ':contactIds')
            )
                ->setParameter('contactIds', \$contactIds, ArrayParameterType::INTEGER);
        } elseif (\$minContactId && \$maxContactId) {
            \$qb->andWhere(
                \"IDENTITY(\$alias.lead) BETWEEN :minContactId AND :maxContactId\"
            )
                ->setParameter('minContactId', \$minContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER)
                ->setParameter('maxContactId', \$maxContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        } elseif (\$minContactId) {
            \$qb->andWhere(
                \$qb->expr()->gte(\"IDENTITY(\$alias.lead)\", ':minContactId')
            )
                ->setParameter('minContactId', \$minContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        } elseif (\$maxContactId) {
            \$qb->andWhere(
                \$qb->expr()->lte(\"IDENTITY(\$alias.lead)\", ':maxContactId')
            )
                ->setParameter('maxContactId', \$maxContactId, \\Doctrine\\DBAL\\ParameterType::INTEGER);
        }

        if (\$threadId = \$contactLimiter->getThreadId()) {
            if (\$maxThreads = \$contactLimiter->getMaxThreads()) {
                \$qb->andWhere(\"MOD((IDENTITY(\$alias.lead) + :threadShift), :maxThreads) = 0\")
                    ->setParameter('threadShift', \$threadId - 1, \\Doctrine\\DBAL\\ParameterType::INTEGER)
                    ->setParameter('maxThreads', \$maxThreads, \\Doctrine\\DBAL\\ParameterType::INTEGER);
            }
        }

        if (!\$isCount && \$limit = \$contactLimiter->getBatchLimit()) {
            \$qb->setMaxResults(\$limit);
        }
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
        return "@bundles/CampaignBundle/Entity/ContactLimiterTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/ContactLimiterTrait.php", "/app/docroot/app/bundles/CampaignBundle/Entity/ContactLimiterTrait.php");
    }
}
