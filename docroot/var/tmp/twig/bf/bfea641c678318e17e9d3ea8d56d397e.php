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

/* @bundles/UserBundle/Entity/Permission.php */
class __TwigTemplate_a1c0871605ab5febfc99027b1c5b09cc extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CacheInvalidateInterface;

class Permission implements CacheInvalidateInterface
{
    public const CACHE_NAMESPACE = 'Permission';

    /**
     * @var int
     */
    protected \$id;

    /**
     * @var string
     */
    protected \$bundle;

    /**
     * @var string
     */
    protected \$name;

    /**
     * @var Role
     */
    protected \$role;

    /**
     * @var int
     */
    protected \$bitwise;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('permissions')
            ->setCustomRepositoryClass(PermissionRepository::class)
            ->addUniqueConstraint(['bundle', 'name', 'role_id'], 'unique_perm');

        \$builder->addId();

        \$builder->createField('bundle', 'string')
            ->length(50)
            ->build();

        \$builder->createField('name', 'string')
            ->length(50)
            ->build();

        \$builder->createManyToOne('role', 'Role')
            ->inversedBy('permissions')
            ->addJoinColumn('role_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->addField('bitwise', 'integer');
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set bundle.
     *
     * @param string \$bundle
     *
     * @return Permission
     */
    public function setBundle(\$bundle)
    {
        \$this->bundle = \$bundle;

        return \$this;
    }

    /**
     * Get bundle.
     *
     * @return string
     */
    public function getBundle()
    {
        return \$this->bundle;
    }

    /**
     * Set bitwise.
     *
     * @param int \$bitwise
     *
     * @return Permission
     */
    public function setBitwise(\$bitwise)
    {
        \$this->bitwise = \$bitwise;

        return \$this;
    }

    /**
     * Get bitwise.
     *
     * @return int
     */
    public function getBitwise()
    {
        return \$this->bitwise;
    }

    /**
     * Set role.
     *
     * @return Permission
     */
    public function setRole(Role \$role = null)
    {
        \$this->role = \$role;

        return \$this;
    }

    /**
     * Get role.
     *
     * @return Role
     */
    public function getRole()
    {
        return \$this->role;
    }

    /**
     * Set name.
     *
     * @param string \$name
     *
     * @return Permission
     */
    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    public function getCacheNamespacesToDelete(): array
    {
        return [self::CACHE_NAMESPACE];
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
        return "@bundles/UserBundle/Entity/Permission.php";
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
        return new Source("", "@bundles/UserBundle/Entity/Permission.php", "/app/docroot/app/bundles/UserBundle/Entity/Permission.php");
    }
}
