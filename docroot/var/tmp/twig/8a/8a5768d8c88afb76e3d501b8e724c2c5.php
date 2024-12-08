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

/* @bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php */
class __TwigTemplate_f8b7a1674fe769b8d4f466f84ff3ad4a extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;
use Doctrine\\DBAL\\Types\\DateTimeType;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

class UTCDateTimeType extends DateTimeType
{
    private static ?\\DateTimeZone \$utc = null;

    /**
     * @param \\DateTime \$value
     *
     * @return string|null
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }

        if (!self::\$utc) {
            self::\$utc = new \\DateTimeZone('UTC');
        }

        if (!is_object(\$value)) {
            \$dateHelper = new DateTimeHelper(\$value);
            \$value      = \$dateHelper->getDateTime();
        } else {
            \$value = clone \$value;
        }

        \$value->setTimezone(self::\$utc);

        return parent::convertToDatabaseValue(\$value, \$platform);
    }

    /**
     * @param mixed \$value
     *
     * @return \\DateTimeInterface|null
     *
     * @throws ConversionException
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }

        if (!self::\$utc) {
            self::\$utc = new \\DateTimeZone('UTC');
        }

        // Set to UTC before converting to DateTime
        \$timezone = date_default_timezone_get();
        date_default_timezone_set('UTC');

        \$value = parent::convertToPHPValue(\$value, \$platform);

        // Set to local timezone
        date_default_timezone_set(\$timezone);
        if (\$value instanceof \\DateTime) {
            \$value->setTimezone(new \\DateTimeZone(\$timezone));
        }

        return \$value;
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
        return "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php");
    }
}
