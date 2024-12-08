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

/* @bundles/CoreBundle/Event/CommonEvent.php */
class __TwigTemplate_a72484530676ab9efdc50c7399cad6ca extends Template
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

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CommonEvent extends Event
{
    /**
     * @var EntityManagerInterface
     */
    protected \$em;

    /**
     * @var object
     */
    protected \$entity;

    /**
     * @var bool
     */
    protected \$isNew = true;

    /**
     * @var bool|array
     */
    protected \$changes;

    /**
     * @var string
     */
    protected \$failed;

    /**
     * Sets the entity manager for the event to use.
     *
     * @param EntityManagerInterface \$em
     */
    public function setEntityManager(\$em): void
    {
        \$this->em = \$em;
    }

    /**
     * Returns if a saved lead is new or not.
     *
     * @return bool
     */
    public function isNew()
    {
        return \$this->isNew;
    }

    public function setFailed(string \$reason): void
    {
        \$this->failed = \$reason;
    }

    /**
     * Gets changes to original entity.
     *
     * @return mixed
     */
    public function getChanges()
    {
        if (null === \$this->changes) {
            \$this->changes = false;
            if (\$this->entity && method_exists(\$this->entity, 'getChanges')) {
                \$this->changes = \$this->entity->getChanges();
                // Reset changes
                if (method_exists(\$this->entity, 'resetChanges')) {
                    \$this->entity->resetChanges();
                }
            }
        }

        return \$this->changes;
    }

    /**
     * @return Lead|null
     */
    public function getLead()
    {
        if (method_exists(\$this->entity, 'getLead')) {
            return \$this->entity->getLead();
        }

        return null;
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
        return "@bundles/CoreBundle/Event/CommonEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CommonEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/CommonEvent.php");
    }
}
