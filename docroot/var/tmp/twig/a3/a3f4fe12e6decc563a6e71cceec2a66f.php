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

/* @bundles/UserBundle/Security/Permissions/UserPermissions.php */
class __TwigTemplate_b2992929a745ca29860cdf52ef2b47c6 extends Template
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

namespace Mautic\\UserBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\UserBundle\\Form\\Type\\PermissionListType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class UserPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->permissions = [
            'profile' => [
                'editusername' => 1,
                'editemail'    => 2,
                'editposition' => 4,
                'editname'     => 8,
                'full'         => 1024,
            ],
        ];
        \$this->addStandardPermissions('users', false);
        \$this->addStandardPermissions('roles', false);
    }

    public function getName(): string
    {
        return 'user';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('user', 'users', \$builder, \$data, false);
        \$this->addStandardFormFields('user', 'roles', \$builder, \$data, false);

        \$builder->add(
            'user:profile',
            PermissionListType::class,
            [
                'choices'           => [
                    'mautic.user.account.permissions.editname'     => 'editname',
                    'mautic.user.account.permissions.editusername' => 'editusername',
                    'mautic.user.account.permissions.editemail'    => 'editemail',
                    'mautic.user.account.permissions.editposition' => 'editposition',
                    'mautic.user.account.permissions.editall'      => 'full',
                ],
                'label'  => 'mautic.user.permissions.profile',
                'data'   => (!empty(\$data['profile']) ? \$data['profile'] : []),
                'bundle' => 'user',
                'level'  => 'profile',
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
        return "@bundles/UserBundle/Security/Permissions/UserPermissions.php";
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
        return new Source("", "@bundles/UserBundle/Security/Permissions/UserPermissions.php", "/app/docroot/app/bundles/UserBundle/Security/Permissions/UserPermissions.php");
    }
}
