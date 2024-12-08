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

/* @bundles/CoreBundle/Twig/Extension/DateExtension.php */
class __TwigTemplate_c2a17dcf6efe854aaf7150049bf13fb4 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Twig\\Helper\\DateHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class DateExtension extends AbstractExtension
{
    public function __construct(
        protected DateHelper \$dateHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('dateToText', [\$this, 'toText'], ['is_safe' => ['all']]),
            new TwigFunction('dateToFull', [\$this, 'toFull'], ['is_safe' => ['all']]),
            new TwigFunction('dateToFullConcat', [\$this, 'toFullConcat'], ['is_safe' => ['all']]),
            new TwigFunction('dateToDate', [\$this, 'toDate'], ['is_safe' => ['all']]),
            new TwigFunction('dateToTime', [\$this, 'toTime'], ['is_safe' => ['all']]),
            new TwigFunction('dateToShort', [\$this, 'toShort'], ['is_safe' => ['all']]),
            new TwigFunction('dateFormatRange', [\$this, 'formatRange'], ['is_safe' => ['all']]),
            new TwigFunction('dateToHumanized', [\$this, 'toHumanized'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Returns date/time like Today, 10:00 AM.
     *
     * @param mixed \$datetime
     * @param bool  \$forceDateForNonText If true, return as full date/time rather than \"29 days ago\"
     */
    public function toText(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s', bool \$forceDateForNonText = false): string
    {
        return \$this->dateHelper->toText(\$datetime, \$timezone, \$fromFormat, \$forceDateForNonText);
    }

    /**
     * Returns a humanized date string like \"X hours ago\".
     *
     * @param \\DateTime|string \$datetime
     */
    public function toHumanized(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s'): string
    {
        return \$this->dateHelper->toHumanized(\$datetime, \$timezone, \$fromFormat);
    }

    /**
     * Returns full date. eg. October 8, 2014 21:19.
     *
     * @param \\DateTime|string \$datetime
     */
    public function toFull(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s'): string
    {
        return \$this->dateHelper->toFull(\$datetime, \$timezone, \$fromFormat);
    }

    /**
     * Returns date and time concat eg 2014-08-02 5:00am.
     *
     * @param \\DateTime|string \$datetime
     * @param string           \$timezone
     * @param string           \$fromFormat
     *
     * @return string
     */
    public function toFullConcat(\$datetime, \$timezone = 'local', \$fromFormat = 'Y-m-d H:i:s')
    {
        return \$this->dateHelper->toFullConcat(\$datetime, \$timezone, \$fromFormat);
    }

    /**
     * Returns date only e.g. 2014-08-09.
     *
     * @param \\DateTime|string \$datetime
     *
     * @return string
     */
    public function toDate(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s')
    {
        return \$this->dateHelper->toDate(\$datetime, \$timezone, \$fromFormat);
    }

    /**
     * Returns time only e.g. 21:19.
     *
     * @param \\DateTime|string \$datetime
     */
    public function toTime(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s'): string
    {
        return \$this->dateHelper->toTime(\$datetime, \$timezone, \$fromFormat);
    }

    /**
     * Returns short date format eg Sun, Oct 8.
     *
     * @param \\DateTime|string \$datetime
     */
    public function toShort(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s'): string
    {
        return \$this->dateHelper->toShort(\$datetime, \$timezone, \$fromFormat);
    }

    /**
     * @see DateHelper::formatRange
     */
    public function formatRange(\\DateInterval \$range): string
    {
        return \$this->dateHelper->formatRange(\$range);
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
        return "@bundles/CoreBundle/Twig/Extension/DateExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/DateExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/DateExtension.php");
    }
}