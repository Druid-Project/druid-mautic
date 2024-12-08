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

/* @bundles/PointBundle/Entity/GroupRepository.php */
class __TwigTemplate_451d260d391ccef8de7a3d0800029eb8 extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Group>
 */
class GroupRepository extends CommonRepository
{
    public function getTableAlias(): string
    {
        return 'pl';
    }

    public function getEntities(array \$args = [])
    {
        // Without qb it returns entities indexed by id instead of array indexes
        \$args['qb'] = \$this->createQueryBuilder(\$this->getTableAlias());

        return parent::getEntities(\$args);
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
        return "@bundles/PointBundle/Entity/GroupRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/GroupRepository.php", "/app/docroot/app/bundles/PointBundle/Entity/GroupRepository.php");
    }
}
