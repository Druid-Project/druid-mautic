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

/* @bundles/ChannelBundle/Controller/AjaxController.php */
class __TwigTemplate_6a20a4f3244fcb23e1875e1b24b61273 extends Template
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

namespace Mautic\\ChannelBundle\\Controller;

use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\AjaxLookupControllerTrait;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    use AjaxLookupControllerTrait;

    public function cancelQueuedMessageEventAction(Request \$request): JsonResponse
    {
        \$dataArray      = ['success' => 0];
        \$messageQueueId = (int) \$request->request->get('channelId');
        \$queueModel     = \$this->getModel('channel.queue');
        \\assert(\$queueModel instanceof MessageQueueModel);
        \$queuedMessage  = \$queueModel->getEntity(\$messageQueueId);
        if (\$queuedMessage) {
            \$queuedMessage->setStatus('cancelled');
            \$queueModel->saveEntity(\$queuedMessage);
            \$dataArray = ['success' => 1];
        }

        return \$this->sendJsonResponse(\$dataArray);
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
        return "@bundles/ChannelBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/ChannelBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/ChannelBundle/Controller/AjaxController.php");
    }
}
