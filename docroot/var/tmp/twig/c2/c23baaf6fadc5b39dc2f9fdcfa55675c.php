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

/* @bundles/ApiBundle/Security/Permissions/ApiPermissions.php */
class __TwigTemplate_ba4ed5f9101a7f490ad6942f1affacca extends Template
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

namespace Mautic\\ApiBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\UserBundle\\Form\\Type\\PermissionListType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class ApiPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);

        \$this->permissions = [
            'access' => [
                'full' => 1024,
            ],
        ];
        \$this->addStandardPermissions('clients', false);
    }

    public function getName(): string
    {
        return 'api';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$builder->add(
            'api:access',
            PermissionListType::class,
            [
                'choices' => [
                    'mautic.api.permissions.granted' => 'full',
                ],
                'label'             => 'mautic.api.permissions.apiaccess',
                'data'              => (!empty(\$data['access']) ? \$data['access'] : []),
                'bundle'            => 'api',
                'level'             => 'access',
            ]
        );

        \$this->addStandardFormFields('api', 'clients', \$builder, \$data, false);
    }

    public function getValue(\$name, \$perm)
    {
        // ensure api is enabled system wide
        if (empty(\$this->params['api_enabled'])) {
            return 0;
        }

        return parent::getValue(\$name, \$perm);
    }

    public function isEnabled(): bool
    {
        return !empty(\$this->params['api_enabled']);
    }

    protected function getSynonym(\$name, \$level)
    {
        if ('access' == \$name && 'granted' == \$level) {
            return [\$name, 'full'];
        }

        return parent::getSynonym(\$name, \$level);
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
        return "@bundles/ApiBundle/Security/Permissions/ApiPermissions.php";
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
        return new Source("", "@bundles/ApiBundle/Security/Permissions/ApiPermissions.php", "/app/docroot/app/bundles/ApiBundle/Security/Permissions/ApiPermissions.php");
    }
}
