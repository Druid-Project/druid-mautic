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

/* @bundles/FormBundle/Model/FieldModel.php */
class __TwigTemplate_0c0a22ce51ef96933a39c5b07846afec extends Template
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

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\FormFieldEvent;
use Mautic\\FormBundle\\Form\\Type\\FieldType;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\LeadBundle\\Model\\FieldModel as LeadFieldModel;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @extends CommonFormModel<Field>
 */
class FieldModel extends CommonFormModel
{
    public function __construct(
        protected LeadFieldModel \$leadFieldModel,
        EntityManager \$em,
        CorePermissions \$security,
        EventDispatcherInterface \$dispatcher,
        UrlGeneratorInterface \$router,
        Translator \$translator,
        UserHelper \$userHelper,
        LoggerInterface \$mauticLogger,
        CoreParametersHelper \$coreParametersHelper,
        private RequestStack \$requestStack
    ) {
        parent::__construct(\$em, \$security, \$dispatcher, \$router, \$translator, \$userHelper, \$mauticLogger, \$coreParametersHelper);
    }

    private function getSession(): SessionInterface
    {
        return \$this->requestStack->getSession();
    }

    /**
     * @param object|array<mixed> \$entity
     * @param string|null         \$action
     * @param array               \$options
     *
     * @return \\Symfony\\Component\\Form\\FormInterface<mixed>
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (\$action) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(FieldType::class, \$entity, \$options);
    }

    /**
     * @deprecated to be removed in Mautic 4. This method is not used anymore.
     *
     * @return array{mixed[], mixed[]}
     */
    public function getObjectFields(\$object = 'lead'): array
    {
        \$fields  = \$this->leadFieldModel->getFieldListWithProperties(\$object);
        \$choices = [];

        foreach (\$fields as \$alias => \$field) {
            if (empty(\$field['isPublished'])) {
                continue;
            }
            if (!isset(\$choices[\$field['group_label']])) {
                \$choices[\$field['group_label']] = [];
            }
            \$choices[\$field['group_label']][\$field['label']] = \$alias;
        }

        return [\$fields, \$choices];
    }

    /**
     * @return \\Mautic\\FormBundle\\Entity\\FieldRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(Field::class);
    }

    public function getPermissionBase(): string
    {
        return 'form:forms';
    }

    public function getEntity(\$id = null): ?Field
    {
        if (null === \$id) {
            return new Field();
        }

        return parent::getEntity(\$id);
    }

    /**
     * Get the fields saved in session.
     */
    public function getSessionFields(\$formId): array
    {
        \$fields = \$this->getSession()->get('mautic.form.'.\$formId.'.fields.modified', []);
        \$remove = \$this->getSession()->get('mautic.form.'.\$formId.'.fields.deleted', []);

        return array_diff_key(\$fields, array_flip(\$remove));
    }

    /**
     * @param string[] \$aliases
     */
    public function generateAlias(string \$label, array &\$aliases): string
    {
        \$alias = \$this->cleanAlias(\$label, 'f_', 25);

        // make sure alias is not already taken
        \$testAlias = \$alias;

        \$count    = (int) in_array(\$alias, \$aliases);
        \$aliasTag = \$count;

        while (\$count) {
            \$testAlias = \$alias.\$aliasTag;
            \$count     = (int) in_array(\$testAlias, \$aliases);
            ++\$aliasTag;
        }

        // Prevent internally used identifiers in the form HTML from colliding with the generated field's ID
        \$internalUse = ['message', 'error', 'id', 'return', 'name', 'messenger'];
        if (in_array(\$testAlias, \$internalUse)) {
            \$testAlias = 'f_'.\$testAlias;
        }

        \$aliases[] = \$testAlias;

        return \$testAlias;
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null): ?Event
    {
        if (!\$entity instanceof Field) {
            throw new MethodNotAllowedHttpException(['Form']);
        }

        switch (\$action) {
            case 'pre_save':
                \$name = FormEvents::FIELD_PRE_SAVE;
                break;
            case 'post_save':
                \$name = FormEvents::FIELD_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = FormEvents::FIELD_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = FormEvents::FIELD_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new FormFieldEvent(\$entity, \$isNew);
            }

            \$this->dispatcher->dispatch(\$event, \$name);

            return \$event;
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
        return "@bundles/FormBundle/Model/FieldModel.php";
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
        return new Source("", "@bundles/FormBundle/Model/FieldModel.php", "/app/docroot/app/bundles/FormBundle/Model/FieldModel.php");
    }
}
