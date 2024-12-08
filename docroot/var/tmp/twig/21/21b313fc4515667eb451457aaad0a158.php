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

/* @bundles/EmailBundle/Stats/Helper/ClickedHelper.php */
class __TwigTemplate_423ccaca1f40dc4f0bcb765e3d6df749 extends Template
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

namespace Mautic\\EmailBundle\\Stats\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class ClickedHelper extends AbstractHelper
{
    public const NAME = 'email-clicked';

    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @throws \\Exception
     */
    public function generateStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options, StatCollection \$statCollection): void
    {
        \$query = \$this->getQuery(\$fromDateTime, \$toDateTime);
        \$q     = \$query->prepareTimeDataQuery('page_hits', 'date_hit', []);

        if (\$segmentId = \$options->getSegmentId()) {
            \$q->innerJoin(
                't',
                '(SELECT DISTINCT email_id, lead_id FROM '.MAUTIC_TABLE_PREFIX.'email_stats WHERE list_id = :segmentId)',
                'es',
                't.source_id = es.email_id'
            );
            \$q->setParameter('segmentId', \$segmentId);
        }

        \$q->andWhere('t.source = :source');
        \$q->setParameter('source', 'email');

        \$this->limitQueryToEmailIds(\$q, \$options->getEmailIds(), 'source_id', 't');

        if (!\$options->canViewOthers()) {
            \$this->limitQueryToCreator(\$q);
        }

        \$this->addCompanyFilter(\$q, \$options->getCompanyId());
        \$this->addCampaignFilterForEmailSource(\$q, \$options->getCampaignId());
        \$this->addSegmentFilter(\$q, \$segmentId, 'es');

        \$this->fetchAndBindToCollection(\$q, \$statCollection);
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
        return "@bundles/EmailBundle/Stats/Helper/ClickedHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/Helper/ClickedHelper.php", "/app/docroot/app/bundles/EmailBundle/Stats/Helper/ClickedHelper.php");
    }
}
