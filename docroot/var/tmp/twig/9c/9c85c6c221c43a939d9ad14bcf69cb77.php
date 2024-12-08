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

/* @bundles/SmsBundle/Controller/ReplyController.php */
class __TwigTemplate_df3b991455d436bbf88ef8183489bd8f extends Template
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

namespace Mautic\\SmsBundle\\Controller;

use Mautic\\SmsBundle\\Callback\\HandlerContainer;
use Mautic\\SmsBundle\\Exception\\CallbackHandlerNotFound;
use Mautic\\SmsBundle\\Helper\\ReplyHelper;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

class ReplyController extends AbstractController
{
    public function __construct(
        private HandlerContainer \$callbackHandler,
        private ReplyHelper \$replyHelper
    ) {
    }

    /**
     * @return Response
     *
     * @throws \\Exception
     */
    public function callbackAction(Request \$request, \$transport)
    {
        define('MAUTIC_NON_TRACKABLE_REQUEST', 1);

        try {
            \$handler = \$this->callbackHandler->getHandler(\$transport);
        } catch (CallbackHandlerNotFound) {
            throw new NotFoundHttpException();
        }

        return \$this->replyHelper->handleRequest(\$handler, \$request);
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
        return "@bundles/SmsBundle/Controller/ReplyController.php";
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
        return new Source("", "@bundles/SmsBundle/Controller/ReplyController.php", "/app/docroot/app/bundles/SmsBundle/Controller/ReplyController.php");
    }
}
