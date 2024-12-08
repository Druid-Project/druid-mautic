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

/* @bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php */
class __TwigTemplate_62a9c174b884c24d6982de5cd6e10f8b extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

class TimezoneResolver
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @param bool \$hasTimePart
     */
    public function getDefaultDate(\$hasTimePart): DateTimeHelper
    {
        /**
         * \$hasTimePart tells us if field in a database is date or datetime
         * All datetime fields are stored in UTC
         * Date field, however, is always stored in a local time (there is no time information, so it cannot be converted to UTC).
         *
         * We will generate default date according to this. We need midnight as a default date (for relative intervals like \"today\" or \"-1 day\"
         *  1) in UTC for datetime fields
         *  2) in the local timezone for date fields
         *
         * Later we use toLocalString() method - it gives us midnight in UTC for first condition and midnight in local timezone for second option.
         */
        \$timezone = \$hasTimePart ? 'UTC' : \$this->coreParametersHelper->get('default_timezone', 'UTC');

        \$date = new \\DateTime('midnight today', new \\DateTimeZone(\$timezone));

        return new DateTimeHelper(\$date, null, \$timezone);
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
        return "@bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php", "/app/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php");
    }
}
