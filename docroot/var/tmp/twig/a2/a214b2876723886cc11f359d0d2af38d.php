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

/* @bundles/CoreBundle/Helper/PhoneNumberHelper.php */
class __TwigTemplate_1bac86a11980bc6a04c94b5b48168186 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use libphonenumber\\PhoneNumberFormat;
use libphonenumber\\PhoneNumberUtil;

class PhoneNumberHelper
{
    /**
     * @param int \$format
     *
     * @return string
     */
    public function format(\$number, \$format = PhoneNumberFormat::E164)
    {
        \$phoneUtil   = PhoneNumberUtil::getInstance();
        \$phoneNumber = \$phoneUtil->parse(\$number, 'US');

        return \$phoneUtil->format(\$phoneNumber, \$format);
    }

    public function getFormattedNumberList(\$number): array
    {
        return array_unique(
            [
                \$number,
                \$this->format(\$number, PhoneNumberFormat::E164),
                \$this->formatNumericalNational(\$number),
                \$this->format(\$number, PhoneNumberFormat::NATIONAL),
                \$this->formatDelimitedNational(\$number),
                \$this->format(\$number, PhoneNumberFormat::INTERNATIONAL),
                \$this->formatNumericalInternational(\$number),
                \$this->formatDelimitedNational(\$number, '.'),
            ]
        );
    }

    public function formatNumericalInternational(\$number): ?string
    {
        return preg_replace('/[^0-9]/', '', \$this->format(\$number, PhoneNumberFormat::INTERNATIONAL));
    }

    public function formatNumericalNational(\$number): ?string
    {
        return preg_replace('/[^0-9]/', '', \$this->format(\$number, PhoneNumberFormat::NATIONAL));
    }

    /**
     * @param string \$number
     * @param string \$delimiter
     */
    public function formatDelimitedNational(\$number, \$delimiter = '-'): ?string
    {
        \$national = \$this->format(\$number, PhoneNumberFormat::NATIONAL);
        \$national = str_replace([') ', '-'], \$delimiter, \$national);

        return preg_replace('/[^0-9'.\$delimiter.']/', '', \$national);
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
        return "@bundles/CoreBundle/Helper/PhoneNumberHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PhoneNumberHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/PhoneNumberHelper.php");
    }
}
