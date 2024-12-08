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

/* @bundles/CoreBundle/Entity/UpsertTrait.php */
class __TwigTemplate_2b75371005b3318bb6029f4f190a97a6 extends Template
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

trait UpsertTrait
{
    /*
     * This file has been added to the list of excluded files in phpstan.neon, since it is (currently) not being used in a entity.
     * When using this trait in an entity, make sure you
     * 1. Remove this comment
     * 2. Remove it from the list of excluded files in phpstan.neon
     */
    private bool \$hasBeenInserted = false;

    private bool \$hasBeenUpdated  = false;

    public function hasBeenInserted(): bool
    {
        return \$this->hasBeenInserted;
    }

    public function hasBeenUpdated(): bool
    {
        return \$this->hasBeenUpdated;
    }

    public function setHasBeenInserted(bool \$hasBeenInserted): void
    {
        \$this->hasBeenInserted = \$hasBeenInserted;
    }

    public function setHasBeenUpdated(bool \$hasBeenUpdated): void
    {
        \$this->hasBeenUpdated = \$hasBeenUpdated;
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
        return "@bundles/CoreBundle/Entity/UpsertTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/UpsertTrait.php", "/app/docroot/app/bundles/CoreBundle/Entity/UpsertTrait.php");
    }
}
