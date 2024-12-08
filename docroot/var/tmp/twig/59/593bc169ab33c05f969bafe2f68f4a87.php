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

/* @bundles/CoreBundle/Entity/Notification.php */
class __TwigTemplate_2f22b8ccc2ecfbf067219dd9a7797eb5 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\UserBundle\\Entity\\User;

class Notification
{
    /**
     * @var int|null
     */
    protected \$id;

    /**
     * @var User|null
     */
    protected \$user;

    /**
     * @var string|null
     */
    protected \$type;

    /**
     * @var string|null
     */
    protected \$header;

    /**
     * @var string|null
     */
    protected \$message;

    /**
     * @var \\DateTimeInterface|null
     */
    protected \$dateAdded;

    /**
     * @var string|null
     */
    protected \$iconClass;

    /**
     * @var bool
     */
    protected \$isRead = false;

    /**
     * @var string|null
     */
    protected \$deduplicate;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('notifications')
            ->setCustomRepositoryClass(NotificationRepository::class)
            ->addIndex(['is_read'], 'notification_read_status')
            ->addIndex(['type'], 'notification_type')
            ->addIndex(['is_read', 'user_id'], 'notification_user_read_status')
            ->addIndex(['deduplicate', 'date_added'], 'deduplicate_date_added');

        \$builder->addId();

        \$builder->createManyToOne('user', User::class)
            ->addJoinColumn('user_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('type', Types::STRING)
            ->nullable()
            ->length(25)
            ->build();

        \$builder->createField('header', Types::STRING)
            ->nullable()
            ->length(512)
            ->build();

        \$builder->addField('message', Types::TEXT);

        \$builder->addDateAdded();

        \$builder->createField('iconClass', Types::STRING)
            ->columnName('icon_class')
            ->nullable()
            ->build();

        \$builder->createField('isRead', Types::BOOLEAN)
            ->columnName('is_read')
            ->build();

        \$builder->createField('deduplicate', 'string')
            ->nullable()
            ->length(32)
            ->build();
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return User|null
     */
    public function getUser()
    {
        return \$this->user;
    }

    public function setUser(User \$user): void
    {
        \$this->user = \$user;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @param string|null \$type
     */
    public function setType(\$type): void
    {
        \$this->type = \$type;
    }

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * @param string|null \$message
     */
    public function setMessage(\$message): void
    {
        \$this->message = \$message;
    }

    /**
     * @return \\DateTimeInterface|null
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime|null \$dateAdded
     */
    public function setDateAdded(\$dateAdded): void
    {
        \$this->dateAdded = \$dateAdded;
    }

    /**
     * @return string|null
     */
    public function getIconClass()
    {
        return \$this->iconClass;
    }

    /**
     * @param string|null \$iconClass
     */
    public function setIconClass(\$iconClass): void
    {
        \$this->iconClass = \$iconClass;
    }

    /**
     * @return bool|null
     */
    public function getIsRead()
    {
        return \$this->isRead;
    }

    /**
     * @param bool|null \$isRead
     */
    public function setIsRead(\$isRead): void
    {
        \$this->isRead = (bool) \$isRead;
    }

    /**
     * @return string|null
     */
    public function getHeader()
    {
        return \$this->header;
    }

    /**
     * @param string|null \$header
     */
    public function setHeader(\$header): void
    {
        \$this->header = \$header;
    }

    public function getDeduplicate(): ?string
    {
        return \$this->deduplicate;
    }

    public function setDeduplicate(?string \$deduplicate): void
    {
        \$this->deduplicate = \$deduplicate;
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
        return "@bundles/CoreBundle/Entity/Notification.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/Notification.php", "/app/docroot/app/bundles/CoreBundle/Entity/Notification.php");
    }
}
