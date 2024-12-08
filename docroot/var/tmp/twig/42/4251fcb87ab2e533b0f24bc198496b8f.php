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

/* @bundles/EmailBundle/Helper/StatsCollectionHelper.php */
class __TwigTemplate_038bbb1d9b4148b7b49cd897928e0ae3 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\EmailBundle\\Stats\\Helper\\BouncedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\ClickedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\FailedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\OpenedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\SentHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\UnsubscribedHelper;
use Mautic\\EmailBundle\\Stats\\StatHelperContainer;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class StatsCollectionHelper
{
    public const GENERAL_STAT_PREFIX = 'email';

    public function __construct(
        private StatHelperContainer \$helperContainer
    ) {
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchSentStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(SentHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchOpenedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(OpenedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchFailedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(FailedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchClickedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(ClickedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchBouncedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(BouncedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchUnsubscribedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(UnsubscribedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Generate stats from Mautic's raw data.
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function generateStats(
        \$statName,
        \\DateTime \$fromDateTime,
        \\DateTime \$toDateTime,
        EmailStatOptions \$options,
        StatCollection \$statCollection
    ): void {
        \$this->helperContainer->getHelper(\$statName)->generateStats(\$fromDateTime, \$toDateTime, \$options, \$statCollection);
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
        return "@bundles/EmailBundle/Helper/StatsCollectionHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/StatsCollectionHelper.php", "/app/docroot/app/bundles/EmailBundle/Helper/StatsCollectionHelper.php");
    }
}
