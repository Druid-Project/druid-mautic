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

/* @bundles/DynamicContentBundle/Controller/DynamicContentApiController.php */
class __TwigTemplate_8f92bfd0ac5b102801002a334028f506 extends Template
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

namespace Mautic\\DynamicContentBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\DynamicContentBundle\\Helper\\DynamicContentHelper;
use Mautic\\LeadBundle\\Helper\\ContactRequestHelper;
use Mautic\\LeadBundle\\Tracker\\Service\\DeviceTrackingService\\DeviceTrackingServiceInterface;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

class DynamicContentApiController extends CommonController
{
    /**
     * @return mixed
     */
    public function processAction(Request \$request, \$objectAlias)
    {
        // Don't store a visitor with this request
        defined('MAUTIC_NON_TRACKABLE_REQUEST') || define('MAUTIC_NON_TRACKABLE_REQUEST', 1);

        \$method = strtolower(\$request->getMethod());
        if (method_exists(\$this, \$method.'Action')) {
            return \$this->forwardWithPost(
                static::class.'::'.\$method.'Action',
                \$request->request->all(),
                [
                    'objectAlias' => \$objectAlias,
                ],
                \$request->query->all()
            );
        } else {
            throw new HttpException(Response::HTTP_FORBIDDEN, 'This endpoint is not able to process '.strtoupper(\$method).' requests.');
        }
    }

    public function getAction(
        Request \$request,
        DynamicContentHelper \$helper,
        DeviceTrackingServiceInterface \$deviceTrackingService,
        ContactRequestHelper \$contactRequestHelper,
        \$objectAlias
    ): Response {
        /** @var PageModel \$pageModel */
        \$pageModel = \$this->getModel('page');

        \$lead          = \$contactRequestHelper->getContactFromQuery(\$pageModel->getHitQuery(\$request));
        \$content       = \$helper->getDynamicContentForLead(\$objectAlias, \$lead);
        \$trackedDevice = \$deviceTrackingService->getTrackedDevice();
        \$deviceId      = (null === \$trackedDevice ? null : \$trackedDevice->getTrackingId());

        return empty(\$content)
            ? new Response('', Response::HTTP_NO_CONTENT)
            : new JsonResponse(
                [
                    'content'   => \$content,
                    'id'        => \$lead->getId(),
                    'sid'       => \$deviceId,
                    'device_id' => \$deviceId,
                ]
            );
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
        return "@bundles/DynamicContentBundle/Controller/DynamicContentApiController.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Controller/DynamicContentApiController.php", "/app/docroot/app/bundles/DynamicContentBundle/Controller/DynamicContentApiController.php");
    }
}
