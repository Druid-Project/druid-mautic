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

/* @bundles/SmsBundle/Api/AbstractSmsApi.php */
class __TwigTemplate_532319f624f196780ddaa5b83dbbca56 extends Template
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

namespace Mautic\\SmsBundle\\Api;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\Sms\\TransportInterface;

/**
 * @deprecated use TransportInterface instead
 */
abstract class AbstractSmsApi implements TransportInterface
{
    public function __construct(
        protected TrackableModel \$pageTrackableModel
    ) {
    }

    /**
     * @param string \$content
     *
     * @return mixed
     */
    abstract public function sendSms(Lead \$lead, \$content);

    /**
     * Convert a non-tracked url to a tracked url.
     *
     * @param string \$url
     *
     * @return string
     */
    public function convertToTrackedUrl(\$url, array \$clickthrough = [])
    {
        /* @var \\Mautic\\PageBundle\\Entity\\Redirect \$redirect */
        \$trackable = \$this->pageTrackableModel->getTrackableByUrl(\$url, 'sms', \$clickthrough['sms']);

        return \$this->pageTrackableModel->generateTrackableUrl(\$trackable, \$clickthrough, true);
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
        return "@bundles/SmsBundle/Api/AbstractSmsApi.php";
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
        return new Source("", "@bundles/SmsBundle/Api/AbstractSmsApi.php", "/app/docroot/app/bundles/SmsBundle/Api/AbstractSmsApi.php");
    }
}
