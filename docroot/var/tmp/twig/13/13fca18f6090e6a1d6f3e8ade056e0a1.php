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

/* @bundles/WebhookBundle/Entity/EventRepository.php */
class __TwigTemplate_f5417063ac3efdd167637cafb2c373a0 extends Template
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
 * @extends CommonRepository<Event>
 */
class EventRepository extends CommonRepository
{
    /**
     * @return array
     */
    public function getEntitiesByEventType(\$type)
    {
        \$alias = \$this->getTableAlias();
        \$q     = \$this->createQueryBuilder(\$alias)
            ->leftJoin(\$alias.'.webhook', 'u');

        \$q->where(
            \$q->expr()->eq(\$alias.'.eventType', ':type')
        )->setParameter('type', \$type);

        // only find published webhooks
        \$q->andWhere(\$q->expr()->eq('u.isPublished', ':published'))
            ->setParameter('published', 1);

        return \$q->getQuery()->getResult();
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
        return "@bundles/WebhookBundle/Entity/EventRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/EventRepository.php", "/app/docroot/app/bundles/WebhookBundle/Entity/EventRepository.php");
    }
}
