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

/* @bundles/WebhookBundle/Entity/WebhookRepository.php */
class __TwigTemplate_8555f515deb5f2ba93d64d9047fbfeec extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Webhook>
 */
class WebhookRepository extends CommonRepository
{
    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     */
    protected function addCatchAllWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, ['e.name']);
    }

    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     */
    protected function addSearchCommandWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
    }

    /**
     * @return string[]
     */
    public function getSearchCommands(): array
    {
        return \$this->getStandardSearchCommands();
    }

    /**
     * @return array<array<string>>
     */
    protected function getDefaultOrder(): array
    {
        return [
            [\$this->getTableAlias().'.name', 'ASC'],
        ];
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
        return "@bundles/WebhookBundle/Entity/WebhookRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookRepository.php", "/app/docroot/app/bundles/WebhookBundle/Entity/WebhookRepository.php");
    }
}
