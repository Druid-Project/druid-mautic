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

/* @bundles/CoreBundle/Controller/FormController.php */
class __TwigTemplate_537cfbf1ee17c0cb706fa02284fd40c4 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @deprecated 2.3 - to be removed in 3.0; use AbstractFormController instead
 */
class FormController extends AbstractStandardFormController
{
    private string \$deprecatedModelName = '';

    private ?string \$deprecatedPermissionBase = null;

    private ?string \$deprecatedRouteBase = null;

    private ?string \$deprecatedSessionBase = null;

    private ?string \$deprecatedTranslationBase = null;

    private ?string \$deprecatedTemplateBase = null;

    private ?string \$deprecatedMauticContent = null;

    protected \$activeLink;

    /**
     * @deprecated 2.3 - to be removed in 3.0; extend AbstractStandardFormController instead
     *
     * @param string \$modelName       The model for this controller
     * @param string \$permissionBase  Permission base for the model (i.e. form.forms or addon.yourAddon.items)
     * @param string \$routeBase       Route base for the controller routes (i.e. mautic_form or custom_addon)
     * @param string \$sessionBase     Session name base for items saved to session such as filters, page, etc
     * @param string \$translationBase Language string base for the shared strings
     * @param string \$templateBase    Template base (i.e. YourController:Default) for the view/controller
     * @param string \$activeLink      Link ID to return via ajax response
     * @param string \$mauticContent   Mautic content string to return via ajax response for onLoad functions
     */
    protected function setStandardParameters(
        string \$modelName,
        string \$permissionBase,
        string \$routeBase,
        string \$sessionBase,
        string \$translationBase,
        string \$templateBase,
        string \$activeLink,
        string \$mauticContent
    ) {
        \$this->deprecatedModelName      = \$modelName;
        \$this->deprecatedPermissionBase = \$permissionBase;
        if (!str_starts_with(\$sessionBase, 'mautic.')) {
            \$sessionBase = 'mautic.'.\$sessionBase;
        }
        \$this->deprecatedSessionBase     = \$sessionBase;
        \$this->deprecatedRouteBase       = \$routeBase;
        \$this->deprecatedTranslationBase = \$translationBase;
        \$this->activeLink                = \$activeLink;
        \$this->deprecatedMauticContent   = \$mauticContent;
        \$this->deprecatedTemplateBase    = \$templateBase;
    }

    /**
     * @return mixed[]
     */
    public function getViewArguments(array \$args, \$action): array
    {
        return \$this->customizeViewArguments(\$args, \$action);
    }

    /**
     * @deprecated 2.6.0 to be removed in 3.0; use getViewArguments instead
     *
     * @return array
     */
    public function customizeViewArguments(\$args, \$action)
    {
        return \$args;
    }

    protected function getModelName(): string
    {
        return \$this->deprecatedModelName;
    }

    /**
     * @return mixed
     */
    protected function getJsLoadMethodPrefix()
    {
        return \$this->deprecatedMauticContent;
    }

    /**
     * @return mixed
     */
    protected function getRouteBase()
    {
        return \$this->deprecatedRouteBase;
    }

    /**
     * @return mixed
     */
    protected function getSessionBase(\$objectId = null)
    {
        return \$this->deprecatedSessionBase ?? parent::getSessionBase(\$objectId);
    }

    /**
     * @return mixed
     */
    protected function getTemplateBase()
    {
        return \$this->deprecatedTemplateBase;
    }

    /**
     * @return mixed
     */
    protected function getTranslationBase()
    {
        return \$this->deprecatedTranslationBase;
    }

    /**
     * @return mixed
     */
    protected function getPermissionBase()
    {
        return \$this->deprecatedPermissionBase;
    }

    public function __construct(FormFactoryInterface \$formFactory, FormFieldHelper \$fieldHelper, ManagerRegistry \$managerRegistry, MauticFactory \$factory, ModelFactory \$modelFactory, UserHelper \$userHelper, CoreParametersHelper \$coreParametersHelper, EventDispatcherInterface \$dispatcher, Translator \$translator, FlashBag \$flashBag, RequestStack \$requestStack, CorePermissions \$security)
    {
        parent::__construct(\$formFactory, \$fieldHelper, \$managerRegistry, \$factory, \$modelFactory, \$userHelper, \$coreParametersHelper, \$dispatcher, \$translator, \$flashBag, \$requestStack, \$security);
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
        return "@bundles/CoreBundle/Controller/FormController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/FormController.php", "/app/docroot/app/bundles/CoreBundle/Controller/FormController.php");
    }
}
