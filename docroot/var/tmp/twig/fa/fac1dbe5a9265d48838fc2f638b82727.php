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

/* @bundles/WebhookBundle/Security/Permissions/WebhookPermissions.php */
class __TwigTemplate_6aaf01c209eb6904a441bc66eb7a7f53 extends Template
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

namespace Mautic\\WebhookBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class WebhookPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addExtendedPermissions('webhooks');
        \$this->addStandardPermissions('categories');
    }

    public function getName(): string
    {
        return 'webhook';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('webhook', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('webhook', 'webhooks', \$builder, \$data);
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
        return "@bundles/WebhookBundle/Security/Permissions/WebhookPermissions.php";
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
        return new Source("", "@bundles/WebhookBundle/Security/Permissions/WebhookPermissions.php", "/app/docroot/app/bundles/WebhookBundle/Security/Permissions/WebhookPermissions.php");
    }
}
