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

/* @bundles/CoreBundle/Event/MaintenanceEvent.php */
class __TwigTemplate_db35b868c85f8ecc0647ed84558f4e35 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class MaintenanceEvent extends Event
{
    protected int \$daysOld;

    protected \\DateTimeInterface \$date;

    /**
     * @var array
     */
    protected \$stats = [];

    protected bool \$dryRun;

    protected bool \$gdpr;

    /**
     * @var array
     */
    protected \$debug = [];

    /**
     * @param int  \$daysOld
     * @param bool \$dryRun
     */
    public function __construct(\$daysOld, \$dryRun, \$gdpr)
    {
        \$this->daysOld = (int) \$daysOld;
        \$this->dryRun  = (bool) \$dryRun;
        \$this->date    = new \\DateTime(\"\$daysOld days ago\", new \\DateTimeZone('UTC'));
        \$this->gdpr    = (bool) \$gdpr;
    }

    /**
     * Get integer for number of days ago to purge data.
     */
    public function getDays(): int
    {
        return \$this->daysOld;
    }

    /**
     * Returns a DateTime in UTC for the date to delete records older than the given date.
     *
     * @return \\DateTimeInterface
     */
    public function getDate()
    {
        return \$this->date;
    }

    /**
     * Set the number of records purged by the listener.
     *
     * @param string \$key
     * @param int    \$recordCount
     */
    public function setStat(\$key, \$recordCount, \$sql = null, \$parameters = []): void
    {
        \$this->stats[\$key] = (int) \$recordCount;

        if (\$sql) {
            foreach (\$parameters as \$paramKey => \$value) {
                \$sql = str_replace(\":\$paramKey\", \$value, \$sql);
            }
            \$this->debug[\$key] = \$sql;
        }
    }

    /**
     * @return array
     */
    public function getStats()
    {
        ksort(\$this->stats, SORT_NATURAL);

        return \$this->stats;
    }

    /**
     * Return if this is to be a dry run.
     */
    public function isDryRun(): bool
    {
        return \$this->dryRun;
    }

    /**
     * @return array
     */
    public function getDebug()
    {
        return \$this->debug;
    }

    public function isGdpr(): bool
    {
        return \$this->gdpr;
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
        return "@bundles/CoreBundle/Event/MaintenanceEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/MaintenanceEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/MaintenanceEvent.php");
    }
}
