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

/* @bundles/PluginBundle/Exception/ApiErrorException.php */
class __TwigTemplate_97f31f6733a9c694ec7c9b4dbada7d18 extends Template
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

namespace Mautic\\PluginBundle\\Exception;

use Mautic\\LeadBundle\\Entity\\Lead;

class ApiErrorException extends \\Exception
{
    private \$contactId;

    private ?Lead \$contact = null;

    /**
     * @param string \$message
     * @param int    \$code
     */
    public function __construct(\$message = 'API error', \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return \$this->contactId;
    }

    /**
     * @param mixed \$contactId
     *
     * @return ApiErrorException
     */
    public function setContactId(\$contactId)
    {
        \$this->contactId = \$contactId;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return \$this->contact;
    }

    /**
     * @return ApiErrorException
     */
    public function setContact(Lead \$contact)
    {
        \$this->contact = \$contact;

        return \$this;
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
        return "@bundles/PluginBundle/Exception/ApiErrorException.php";
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
        return new Source("", "@bundles/PluginBundle/Exception/ApiErrorException.php", "/app/docroot/app/bundles/PluginBundle/Exception/ApiErrorException.php");
    }
}
