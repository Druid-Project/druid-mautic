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

/* @bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php */
class __TwigTemplate_14beb5f50d42a189b1a6b1c5c1a8082e extends Template
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
 * ManyToMany Association Builder.
 *
 * Override Doctrine's builder classes to add support to orphanRemoval until the fix is incorporated into Doctrine release
 * See @see https://github.com/doctrine/doctrine2/pull/1326/
 */
class ManyToManyAssociationBuilder extends \\Doctrine\\ORM\\Mapping\\Builder\\ManyToManyAssociationBuilder
{
    /**
     * Set orphanRemoval.
     *
     * @param bool \$orphanRemoval
     *
     * @return ManyToManyAssociationBuilder
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
        return "@bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php");
    }
}
