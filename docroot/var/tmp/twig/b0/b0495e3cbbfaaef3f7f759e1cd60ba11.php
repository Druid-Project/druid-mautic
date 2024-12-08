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

/* @bundles/PointBundle/Model/TriggerEventModel.php */
class __TwigTemplate_2d0b683a9f0e615ed4deddee7e142116 extends Template
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

namespace Mautic\\PointBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Mautic\\PointBundle\\Entity\\TriggerEventRepository;
use Mautic\\PointBundle\\Form\\Type\\TriggerEventType;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;

/**
 * @extends CommonFormModel<TriggerEvent>
 */
class TriggerEventModel extends CommonFormModel
{
    /**
     * @return TriggerEventRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(TriggerEvent::class);
    }

    public function getPermissionBase(): string
    {
        return 'point:triggers';
    }

    public function getEntity(\$id = null): ?TriggerEvent
    {
        if (null === \$id) {
            return new TriggerEvent();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof TriggerEvent) {
            throw new MethodNotAllowedHttpException(['Trigger']);
        }

        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(TriggerEventType::class, \$entity, \$options);
    }

    /**
     * Get segments which are dependent on given segment.
     *
     * @param int \$segmentId
     */
    public function getReportIdsWithDependenciesOnSegment(\$segmentId): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'eq', 'value'=>'lead.changelists'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$dependents = [];
        foreach (\$entities as \$entity) {
            \$retrFilters = \$entity->getProperties();
            foreach (\$retrFilters as \$eachFilter) {
                if (in_array(\$segmentId, \$eachFilter)) {
                    \$dependents[] = \$entity->getTrigger()->getId();
                }
            }
        }

        return \$dependents;
    }

    /**
     * @return array<int, int>
     */
    public function getPointTriggerIdsWithDependenciesOnEmail(int \$emailId): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'in', 'value' => ['email.send', 'email.send_to_user']],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$triggerIds = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            if (isset(\$properties['email']) && (int) \$properties['email'] === \$emailId) {
                \$triggerIds[] = \$entity->getTrigger()->getId();
            }
            if (isset(\$properties['useremail']['email']) && (int) \$properties['useremail']['email'] === \$emailId) {
                \$triggerIds[] = \$entity->getTrigger()->getId();
            }
        }

        return array_unique(\$triggerIds);
    }

    /**
     * @return array<int, int>
     */
    public function getPointTriggerIdsWithDependenciesOnTag(string \$tagName): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'eq', 'value' => 'lead.changetags'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$triggerIds = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            foreach (\$properties as \$property) {
                if (in_array(\$tagName, \$property)) {
                    \$triggerIds[] = \$entity->getTrigger()->getId();
                }
            }
        }

        return array_unique(\$triggerIds);
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
        return "@bundles/PointBundle/Model/TriggerEventModel.php";
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
        return new Source("", "@bundles/PointBundle/Model/TriggerEventModel.php", "/app/docroot/app/bundles/PointBundle/Model/TriggerEventModel.php");
    }
}
