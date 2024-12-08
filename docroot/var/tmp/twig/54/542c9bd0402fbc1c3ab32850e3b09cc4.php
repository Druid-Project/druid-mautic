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

/* @bundles/SmsBundle/Callback/CallbackInterface.php */
class __TwigTemplate_579396a06e19f5304875839d3b84d899 extends Template
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

namespace Mautic\\SmsBundle\\Callback;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

interface CallbackInterface
{
    /**
     * Returns a \"transport\" string to match the URL path /sms/{transport}/callback.
     *
     * @return string
     */
    public function getTransportName();

    /**
     * Return all contacts that match whatever identifiers the service provides (likely number).
     *
     * @return ArrayCollection
     *
     * @throws NumberNotFoundException
     * @throws BadRequestHttpException
     * @throws NotFoundHttpException
     */
    public function getContacts(Request \$request);

    /**
     * Extract the message in the reply from the request.
     *
     * @return string
     *
     * @throws BadRequestHttpException
     * @throws NotFoundHttpException
     */
    public function getMessage(Request \$request);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/SmsBundle/Callback/CallbackInterface.php";
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
        return new Source("", "@bundles/SmsBundle/Callback/CallbackInterface.php", "/app/docroot/app/bundles/SmsBundle/Callback/CallbackInterface.php");
    }
}
