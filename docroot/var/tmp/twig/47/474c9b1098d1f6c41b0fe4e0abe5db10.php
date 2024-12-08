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

/* @bundles/LeadBundle/Model/TagModel.php */
class __TwigTemplate_b180cd0ec4493569c42a499e1e201256 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\LeadBundle\\Entity\\Tag;
use Mautic\\LeadBundle\\Entity\\TagRepository;
use Mautic\\LeadBundle\\Event\\TagEvent;
use Mautic\\LeadBundle\\Form\\Type\\TagEntityType;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @extends FormModel<Tag>
 */
class TagModel extends FormModel
{
    /**
     * @return TagRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(Tag::class);
    }

    public function getPermissionBase(): string
    {
        return 'lead:leads';
    }

    /**
     * Get a specific entity or generate a new one if id is empty.
     *
     * @param int \$id
     */
    public function getEntity(\$id = null): ?Tag
    {
        if (is_null(\$id)) {
            return new Tag();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @param Tag   \$entity
     * @param array \$options
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof Tag) {
            throw new MethodNotAllowedHttpException(['Tag']);
        }

        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(TagEntityType::class, \$entity, \$options);
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null): ?Event
    {
        if (!\$entity instanceof Tag) {
            throw new MethodNotAllowedHttpException(['Tag']);
        }

        switch (\$action) {
            case 'pre_save':
                \$name = LeadEvents::TAG_PRE_SAVE;
                break;
            case 'post_save':
                \$name = LeadEvents::TAG_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = LeadEvents::TAG_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = LeadEvents::TAG_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new TagEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
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
        return "@bundles/LeadBundle/Model/TagModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/TagModel.php", "/app/docroot/app/bundles/LeadBundle/Model/TagModel.php");
    }
}
