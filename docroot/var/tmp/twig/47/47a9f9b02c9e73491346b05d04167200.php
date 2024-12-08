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

/* @bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php */
class __TwigTemplate_4fe7be176c23e07aaff08aed26f26fb5 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\DateTime;

use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DateTimeLocalization
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public function localize(string \$format): string
    {
        return str_replace(\$this->getDictionary(), array_keys(\$this->getDictionary()), \$format);
    }

    /**
     * @return array<string,string>
     */
    private function getDictionary(): array
    {
        \$months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];
        \$days   = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
            'Sun',
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat',
        ];
        \$values = array_merge(\$months, \$days);
        \$keys   = \$values;
        array_walk(\$keys, function (&\$key): void {
            \$key = \$this->translator->trans('mautic.core.date.'.strtolower(\$key));
        });

        return array_combine(\$keys, \$values);
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
        return "@bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php", "/app/docroot/app/bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php");
    }
}
