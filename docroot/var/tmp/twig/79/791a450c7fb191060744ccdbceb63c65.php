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

/* @bundles/LeadBundle/Controller/Api/TagApiController.php */
class __TwigTemplate_33b477ada4bc3c3405957d202063d8ca extends Template
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

namespace Mautic\\LeadBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\Tag;
use Mautic\\LeadBundle\\Model\\TagModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Tag>
 */
class TagApiController extends CommonApiController
{
    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$leadTagModel = \$modelFactory->getModel('lead.tag');
        \\assert(\$leadTagModel instanceof TagModel);

        \$this->model           = \$leadTagModel;
        \$this->entityClass     = Tag::class;
        \$this->entityNameOne   = 'tag';
        \$this->entityNameMulti = 'tags';

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Creates new entity from provided params.
     *
     * @return object
     *
     * @throws \\InvalidArgumentException
     */
    public function getNewEntity(array \$params)
    {
        if (empty(\$params[\$this->entityNameOne])) {
            throw new \\InvalidArgumentException(\$this->translator->trans('mautic.lead.api.tag.required', [], 'validators'));
        }

        \$tagModel = \$this->model;
        \\assert(\$tagModel instanceof TagModel);

        return \$tagModel->getRepository()->getTagByNameOrCreateNewOne(\$params[\$this->entityNameOne]);
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
        return "@bundles/LeadBundle/Controller/Api/TagApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/TagApiController.php", "/app/docroot/app/bundles/LeadBundle/Controller/Api/TagApiController.php");
    }
}
