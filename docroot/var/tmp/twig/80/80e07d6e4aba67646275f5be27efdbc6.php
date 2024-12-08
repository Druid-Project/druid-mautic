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

/* @bundles/PointBundle/Controller/GroupController.php */
class __TwigTemplate_4161114da528134826acfaace3e87deb extends Template
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

namespace Mautic\\PointBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AbstractStandardFormController;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class GroupController extends AbstractStandardFormController
{
    protected function getTemplateBase(): string
    {
        return '@MauticPoint/Group';
    }

    protected function getModelName(): string
    {
        return 'point.group';
    }

    /**
     * @param int \$page
     */
    public function indexAction(Request \$request, \$page = 1): Response
    {
        return parent::indexStandard(\$request, \$page);
    }

    /**
     * Generates new form and processes post data.
     *
     * @return JsonResponse|Response
     */
    public function newAction(Request \$request)
    {
        return parent::newStandard(\$request);
    }

    /**
     * Generates edit form and processes post data.
     *
     * @param int  \$objectId
     * @param bool \$ignorePost
     *
     * @return JsonResponse|Response
     */
    public function editAction(Request \$request, \$objectId, \$ignorePost = false)
    {
        return parent::editStandard(\$request, \$objectId, \$ignorePost);
    }

    /**
     * Deletes the entity.
     *
     * @param int \$objectId
     *
     * @return JsonResponse|RedirectResponse
     */
    public function deleteAction(Request \$request, \$objectId)
    {
        return parent::deleteStandard(\$request, \$objectId);
    }

    /**
     * Deletes a group of entities.
     *
     * @return JsonResponse|RedirectResponse
     */
    public function batchDeleteAction(Request \$request)
    {
        return parent::batchDeleteStandard(\$request);
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
        return "@bundles/PointBundle/Controller/GroupController.php";
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
        return new Source("", "@bundles/PointBundle/Controller/GroupController.php", "/app/docroot/app/bundles/PointBundle/Controller/GroupController.php");
    }
}
