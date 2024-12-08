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

/* @bundles/PointBundle/Entity/GroupContactScoreRepository.php */
class __TwigTemplate_857f2c3e9085d0f21a5ff6069a243c9b extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<GroupContactScore>
 */
class GroupContactScoreRepository extends CommonRepository
{
    public function compareScore(int \$leadId, int \$groupId, int \$score, string \$operatorExpr): bool
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->select('lcs.contact_id')
            ->from(MAUTIC_TABLE_PREFIX.GroupContactScore::TABLE_NAME, 'lcs');

        \$expr = \$q->expr()->and(
            \$q->expr()->eq('lcs.contact_id', ':lead'),
            \$q->expr()->eq('lcs.group_id', ':groupId'),
            \$q->expr()->\$operatorExpr('lcs.score', ':score'),
        );

        \$q->where(\$expr)
            ->setParameter('lead', \$leadId)
            ->setParameter('groupId', \$groupId)
            ->setParameter('score', \$score);

        return false !== \$q->executeQuery()->fetchOne();
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
        return "@bundles/PointBundle/Entity/GroupContactScoreRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/GroupContactScoreRepository.php", "/app/docroot/app/bundles/PointBundle/Entity/GroupContactScoreRepository.php");
    }
}
