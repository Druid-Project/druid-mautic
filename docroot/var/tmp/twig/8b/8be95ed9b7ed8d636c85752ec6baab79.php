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

/* @bundles/FormBundle/Model/ActionModel.php */
class __TwigTemplate_ffa60218699891d184d416f70cd59fe6 extends Template
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

namespace Mautic\\FormBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\FormBundle\\Entity\\Action;
use Mautic\\FormBundle\\Form\\Type\\ActionType;
use Symfony\\Component\\Form\\FormFactoryInterface;

/**
 * @extends CommonFormModel<Action>
 */
class ActionModel extends CommonFormModel
{
    /**
     * @return \\Mautic\\FormBundle\\Entity\\ActionRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(Action::class);
    }

    public function getPermissionBase(): string
    {
        return 'form:forms';
    }

    public function getEntity(\$id = null): ?Action
    {
        if (null === \$id) {
            return new Action();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @param object \$entity
     * @param array  \$options
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof Action) {
            throw new \\InvalidArgumentException('Entity must be of class Action');
        }

        if (\$action) {
            \$options['action'] = \$action;
        }

        if (empty(\$options['formId']) && null !== \$entity->getForm()) {
            \$options['formId'] = \$entity->getForm()->getId();
        }

        return \$formFactory->create(ActionType::class, \$entity->convertToArray(), \$options);
    }

    /**
     * Get segments which are dependent on given segment.
     *
     * @param int \$segmentId
     */
    public function getFormsIdsWithDependenciesOnSegment(\$segmentId): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'LIKE', 'value'=>'lead.changelist'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$dependents = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            foreach (\$properties as \$property) {
                if (in_array(\$segmentId, \$property)) {
                    \$dependents[] = \$entity->getForm()->getId();
                }
            }
        }

        return \$dependents;
    }

    /**
     * @return array<int, int>
     */
    public function getFormsIdsWithDependenciesOnEmail(int \$emailId): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'LIKE', 'value' => 'email.send%'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$formIds = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            if (isset(\$properties['email']) && (int) \$properties['email'] === \$emailId) {
                \$formIds[] = \$entity->getForm()->getid();
            }
            if (isset(\$properties['useremail']['email']) && (int) \$properties['useremail']['email'] === \$emailId) {
                \$formIds[] = \$entity->getForm()->getid();
            }
        }

        return array_unique(\$formIds);
    }

    /**
     * @return array<int, int>
     */
    public function getFormsIdsWithDependenciesOnTag(string \$tagName): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'EQ', 'value' => 'lead.changetags'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$dependents = [];

        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            foreach (\$properties as \$property) {
                if (in_array(\$tagName, \$property)) {
                    \$dependents[] = \$entity->getForm()->getId();
                }
            }
        }

        return \$dependents;
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
        return "@bundles/FormBundle/Model/ActionModel.php";
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
        return new Source("", "@bundles/FormBundle/Model/ActionModel.php", "/app/docroot/app/bundles/FormBundle/Model/ActionModel.php");
    }
}
