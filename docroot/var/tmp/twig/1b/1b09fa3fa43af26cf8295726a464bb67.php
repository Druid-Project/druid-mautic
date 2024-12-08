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

/* @bundles/CoreBundle/Doctrine/Mapping/OneToManyAssociationBuilder.php */
class __TwigTemplate_9aa13998ea27f327288debd982fb58dd extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Mapping;

/**
 * OneToMany Association Builder.
 *
 * Override Doctrine's builder classes to add support to orphanRemoval until the fix is incorporated into Doctrine release
 * See @see https://github.com/doctrine/doctrine2/pull/1326/
 */
class OneToManyAssociationBuilder extends \\Doctrine\\ORM\\Mapping\\Builder\\OneToManyAssociationBuilder
{
    /**
     * Set orphanRemoval.
     *
     * @param bool \$orphanRemoval
     *
     * @return OneToManyAssociationBuilder
     */
    public function orphanRemoval(\$orphanRemoval = true)
    {
        \$this->mapping['orphanRemoval'] = \$orphanRemoval;

        return \$this;
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
        return "@bundles/CoreBundle/Doctrine/Mapping/OneToManyAssociationBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Mapping/OneToManyAssociationBuilder.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Mapping/OneToManyAssociationBuilder.php");
    }
}
