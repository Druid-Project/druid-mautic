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

/* @bundles/EmailBundle/Stats/Helper/OpenedHelper.php */
class __TwigTemplate_2e2ba330b2f507963e1d0612fe093778 extends Template
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

class OpenedHelper extends AbstractHelper
{
    public const NAME = 'email-opened';

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
        \$q     = \$query->prepareTimeDataQuery('email_stats', 'date_read', \$options->getFilters());

        \$this->limitQueryToEmailIds(\$q, \$options->getEmailIds(), 'email_id', 't');

        if (!\$options->canViewOthers()) {
            \$this->limitQueryToCreator(\$q);
        }

        \$this->addCompanyFilter(\$q, \$options->getCompanyId());
        \$this->addCampaignFilter(\$q, \$options->getCampaignId());
        \$this->addSegmentFilter(\$q, \$options->getSegmentId());

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
        return "@bundles/EmailBundle/Stats/Helper/OpenedHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/Helper/OpenedHelper.php", "/app/docroot/app/bundles/EmailBundle/Stats/Helper/OpenedHelper.php");
    }
}
