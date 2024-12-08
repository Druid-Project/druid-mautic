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

/* @bundles/CoreBundle/Doctrine/Type/GeneratedType.php */
class __TwigTemplate_21eeee751682c1a4a9f371e8f18977fd extends Template
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
use Doctrine\\DBAL\\Types\\Type;

/**
 * Type that creates a read-only generated (virtual) column.
 */
class GeneratedType extends Type
{
    /**
     * @var string
     */
    public const GENERATED = 'generated';

    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform): string
    {
        // Must be defined in `columnDefinition` option when adding the column in the subscriber
        return '';
    }

    /**
     * @param mixed \$value
     *
     * @return mixed
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value;
    }

    /**
     * @param mixed \$value
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        return null;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::GENERATED;
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
        return "@bundles/CoreBundle/Doctrine/Type/GeneratedType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/GeneratedType.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Type/GeneratedType.php");
    }
}
