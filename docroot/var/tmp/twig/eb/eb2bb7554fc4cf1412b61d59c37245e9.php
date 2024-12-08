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

/* @bundles/LeadBundle/Entity/DoNotContact.php */
class __TwigTemplate_2ed3d6794fdedeeb011d4d58e0e78f27 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Helper\\InputHelper;

class DoNotContact
{
    /**
     * Lead is contactable.
     */
    public const IS_CONTACTABLE = 0;

    /**
     * Lead unsubscribed themselves.
     */
    public const UNSUBSCRIBED = 1;

    /**
     * Lead was unsubscribed due to an unsuccessful send.
     */
    public const BOUNCED = 2;

    /**
     * Lead was manually unsubscribed by user.
     */
    public const MANUAL = 3;

    /**
     * @var int
     */
    private \$id;

    /**
     * @var Lead|null
     */
    private \$lead;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var int
     */
    private \$reason = 0;

    /**
     * @var string|null
     */
    private \$comments;

    /**
     * @var string
     */
    private \$channel;

    private \$channelId;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_donotcontact')
            ->setCustomRepositoryClass(DoNotContactRepository::class)
            ->addIndex(['lead_id', 'channel', 'reason'], 'leadid_reason_channel')
            ->addIndex(['reason'], 'dnc_reason_search')
            ->addIndex(['date_added'], 'dnc_date_added');

        \$builder->addId();

        \$builder->addLead(true, 'CASCADE', false, 'doNotContact');

        \$builder->addDateAdded();

        \$builder->createField('reason', 'smallint')
            ->build();

        \$builder->createField('channel', 'string')
            ->build();

        \$builder->addNamedField('channelId', 'integer', 'channel_id', true);

        \$builder->createField('comments', 'text')
            ->nullable()
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('doNotContact')
            ->addListProperties(
                [
                    'id',
                    'dateAdded',
                    'reason',
                    'comments',
                    'channel',
                    'channelId',
                ]
            )
            ->addProperties(
                [
                    'lead',
                ]
            )
            ->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return DoNotContact
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @return DoNotContact
     */
    public function setDateAdded(\\DateTime \$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return int
     */
    public function getReason()
    {
        return \$this->reason;
    }

    /**
     * @param int \$reason
     *
     * @return DoNotContact
     */
    public function setReason(\$reason)
    {
        \$this->reason = \$reason;

        return \$this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return \$this->comments;
    }

    /**
     * @param string \$comments
     *
     * @return DoNotContact
     */
    public function setComments(\$comments)
    {
        \$this->comments = InputHelper::string((string) \$comments);

        return \$this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @param string \$channel
     *
     * @return DoNotContact
     */
    public function setChannel(\$channel)
    {
        \$this->channel = \$channel;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return \$this->channelId;
    }

    /**
     * @param mixed \$channelId
     *
     * @return DoNotContact
     */
    public function setChannelId(\$channelId)
    {
        \$this->channelId = \$channelId;

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
        return "@bundles/LeadBundle/Entity/DoNotContact.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/DoNotContact.php", "/app/docroot/app/bundles/LeadBundle/Entity/DoNotContact.php");
    }
}
