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

/* @bundles/PageBundle/Entity/Trackable.php */
class __TwigTemplate_f1dc5047df49db9ce8ef92d08d520f10 extends Template
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

namespace Mautic\\PageBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class Trackable
{
    /**
     * @var Redirect
     */
    private \$redirect;

    /**
     * @var string
     */
    private \$channel;

    /**
     * @var int
     */
    private \$channelId;

    /**
     * @var int
     */
    private \$hits = 0;

    /**
     * @var int
     */
    private \$uniqueHits = 0;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('channel_url_trackables')
            ->setCustomRepositoryClass(TrackableRepository::class)
            ->addIndex(['channel', 'channel_id'], 'channel_url_trackable_search');

        \$builder->createManyToOne('redirect', Redirect::class)
            ->addJoinColumn('redirect_id', 'id', true, false, 'CASCADE')
            ->cascadePersist()
            ->inversedBy('trackables')
            ->isPrimaryKey()
            ->build();

        \$builder->createField('channelId', 'integer')
            ->columnName('channel_id')
            ->makePrimaryKey()
            ->build();

        \$builder->addField('channel', 'string');

        \$builder->addField('hits', 'integer');

        \$builder->addNamedField('uniqueHits', 'integer', 'unique_hits');
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('trackable')
            ->addListProperties(
                [
                    'redirect',
                    'channelId',
                    'channel',
                    'hits',
                    'uniqueHits',
                ]
            )
            ->build();
    }

    /**
     * @return Redirect
     */
    public function getRedirect()
    {
        return \$this->redirect;
    }

    /**
     * @return Trackable
     */
    public function setRedirect(Redirect \$redirect)
    {
        \$this->redirect = \$redirect;

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
     * @return Trackable
     */
    public function setChannel(\$channel)
    {
        \$this->channel = \$channel;

        return \$this;
    }

    /**
     * @return int
     */
    public function getChannelId()
    {
        return \$this->channelId;
    }

    /**
     * @param int \$channelId
     *
     * @return Trackable
     */
    public function setChannelId(\$channelId)
    {
        \$this->channelId = \$channelId;

        return \$this;
    }

    /**
     * @return int
     */
    public function getHits()
    {
        return \$this->hits;
    }

    /**
     * @param int \$hits
     *
     * @return Trackable
     */
    public function setHits(\$hits)
    {
        \$this->hits = \$hits;

        return \$this;
    }

    /**
     * @return int
     */
    public function getUniqueHits()
    {
        return \$this->uniqueHits;
    }

    /**
     * @param int \$uniqueHits
     *
     * @return Trackable
     */
    public function setUniqueHits(\$uniqueHits)
    {
        \$this->uniqueHits = \$uniqueHits;

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
        return "@bundles/PageBundle/Entity/Trackable.php";
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
        return new Source("", "@bundles/PageBundle/Entity/Trackable.php", "/app/docroot/app/bundles/PageBundle/Entity/Trackable.php");
    }
}
