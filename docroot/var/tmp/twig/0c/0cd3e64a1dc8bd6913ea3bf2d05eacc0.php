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

/* @bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php */
class __TwigTemplate_2d1b992b22df521d4f5a22a9ca4fe189 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\DateTimeImmutableType;

class UTCDateTimeImmutableType extends DateTimeImmutableType
{
    /**
     * Persist the date in UTC.
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform): ?string
    {
        if (\$value instanceof \\DateTimeImmutable) {
            \$value = \$value->setTimezone(new \\DateTimeZone('UTC'));
        }

        return parent::convertToDatabaseValue(\$value, \$platform);
    }

    /**
     * Convert the UTC persisted date to the current timezone (determined by date_default_timezone_get()).
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform): ?\\DateTimeImmutable
    {
        \$value = parent::convertToPHPValue(\$value, \$platform);

        if (!\$value instanceof \\DateTimeImmutable) {
            return null;
        }

        \$value = new \\DateTimeImmutable(\$value->format(\$platform->getDateTimeFormatString()), new \\DateTimeZone('UTC'));

        return \$value->setTimezone(new \\DateTimeZone(date_default_timezone_get()));
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
        return "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php");
    }
}
