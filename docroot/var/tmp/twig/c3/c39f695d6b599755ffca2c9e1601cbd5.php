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

/* @bundles/CoreBundle/Entity/OptimisticLockInterface.php */
class __TwigTemplate_b6563a437023af13cf71a8c85fc2e927 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

/**
 * Optimistic locking is applied for entities that implements this interface.
 */
interface OptimisticLockInterface
{
    /**
     * Returns the current version of the entity.
     */
    public function getVersion(): int;

    /**
     * Sets a new version of the entity and resets the mark for incrementing the version.
     */
    public function setVersion(int \$version): void;

    /**
     * Returns true if the entity is marked for incrementing the version in a subsequent flush call.
     */
    public function isMarkedForVersionIncrement(): bool;

    /**
     * Mark the entity for incrementing the version in a subsequent flush call.
     */
    public function markForVersionIncrement(): void;

    /**
     * Returns the name of the version field.
     */
    public function getVersionField(): string;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Entity/OptimisticLockInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/OptimisticLockInterface.php", "/app/docroot/app/bundles/CoreBundle/Entity/OptimisticLockInterface.php");
    }
}
