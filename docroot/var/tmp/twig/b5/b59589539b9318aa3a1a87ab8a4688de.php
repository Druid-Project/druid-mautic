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

/* @bundles/ApiBundle/Entity/oAuth2/Client.php */
class __TwigTemplate_1e79c9db9fdc746ce8c69579d165ad09 extends Template
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

namespace Mautic\\ApiBundle\\Entity\\oAuth2;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use FOS\\OAuthServerBundle\\Model\\Client as BaseClient;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use OAuth2\\OAuth2;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class Client extends BaseClient
{
    /**
     * @var int
     */
    protected \$id;

    /**
     * @var string
     */
    protected \$name;

    /**
     * @var ArrayCollection<int, \\Mautic\\UserBundle\\Entity\\User>
     */
    protected \$users;

    /**
     * @var ArrayCollection
     */
    protected \$authCodes;

    /**
     * @var string
     */
    protected \$randomId;

    /**
     * @var string
     */
    protected \$secret;

    /**
     * @var array
     */
    protected \$redirectUris = [];

    /**
     * @var array
     */
    protected \$allowedGrantTypes;

    /**
     * @var Role|null
     */
    protected \$role;

    public function __construct()
    {
        parent::__construct();

        \$this->allowedGrantTypes = [
            OAuth2::GRANT_TYPE_AUTH_CODE,
            OAuth2::GRANT_TYPE_REFRESH_TOKEN,
        ];

        \$this->users     = new ArrayCollection();
        \$this->authCodes = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('oauth2_clients')
            ->setCustomRepositoryClass(ClientRepository::class)
            ->addIndex(['random_id'], 'client_id_search');

        \$builder->addIdColumns('name', false);

        \$builder->createManyToMany('users', User::class)
            ->setJoinTable('oauth2_user_client_xref')
            ->addInverseJoinColumn('user_id', 'id', false, false, 'CASCADE')
            ->addJoinColumn('client_id', 'id', false, false, 'CASCADE')
            ->fetchExtraLazy()
            ->build();

        \$builder->createField('randomId', 'string')
            ->columnName('random_id')
            ->build();

        \$builder->addField('secret', 'string');

        \$builder->createField('redirectUris', 'array')
            ->columnName('redirect_uris')
            ->build();

        \$builder->createField('allowedGrantTypes', 'array')
            ->columnName('allowed_grant_types')
            ->build();

        \$builder->createManyToOne('role', Role::class)
            ->addJoinColumn('role_id', 'id', true, false)
            ->cascadePersist()
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata): void
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank(
            ['message' => 'mautic.core.name.required']
        ));

        \$metadata->addPropertyConstraint('redirectUris', new Assert\\NotBlank(
            ['message' => 'mautic.api.client.redirecturis.notblank']
        ));
    }

    /**
     * @var array
     */
    protected \$changes;

    protected function isChanged(\$prop, \$val)
    {
        \$getter  = 'get'.ucfirst(\$prop);
        \$current = \$this->\$getter();
        if (\$current != \$val) {
            \$this->changes[\$prop] = [\$current, \$val];
        }
    }

    /**
     * @return array
     */
    public function getChanges()
    {
        return \$this->changes;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param string \$name
     *
     * @return Client
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);

        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setRedirectUris(array \$redirectUris): void
    {
        \$this->isChanged('redirectUris', \$redirectUris);

        \$this->redirectUris = \$redirectUris;
    }

    /**
     * @return Client
     */
    public function addAuthCode(AuthCode \$authCodes)
    {
        \$this->authCodes[] = \$authCodes;

        return \$this;
    }

    public function removeAuthCode(AuthCode \$authCodes): void
    {
        \$this->authCodes->removeElement(\$authCodes);
    }

    /**
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getAuthCodes()
    {
        return \$this->authCodes;
    }

    /**
     * Determines if a client attempting API access is already authorized by the user.
     *
     * @return bool
     */
    public function isAuthorizedClient(User \$user)
    {
        \$users = \$this->getUsers();

        return \$users->contains(\$user);
    }

    /**
     * @return Client
     */
    public function addUser(User \$users)
    {
        \$this->users[] = \$users;

        return \$this;
    }

    public function removeUser(User \$users): void
    {
        \$this->users->removeElement(\$users);
    }

    /**
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getUsers()
    {
        return \$this->users;
    }

    /**
     * Add Authorization Grant Type.
     */
    public function addGrantType(string \$grantType): Client
    {
        \$this->allowedGrantTypes[] = \$grantType;

        return \$this;
    }

    public function getRole(): Role
    {
        return \$this->role;
    }

    public function setRole(Role \$role): void
    {
        \$this->role = \$role;
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
        return "@bundles/ApiBundle/Entity/oAuth2/Client.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/Client.php", "/app/docroot/app/bundles/ApiBundle/Entity/oAuth2/Client.php");
    }
}
