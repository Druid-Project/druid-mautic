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

/* @bundles/CoreBundle/Entity/IpAddress.php */
class __TwigTemplate_028fed23745872cb42532d6f510adafc extends Template
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

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class IpAddress
{
    public const TABLE_NAME = 'ip_addresses';

    /**
     * Set by factory of configured IPs to not track.
     */
    private array \$doNotTrack = [];

    /**
     * @var int
     */
    private \$id;

    /**
     * @var array<string,string>
     */
    private \$ipDetails;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(IpAddressRepository::class)
            ->addIndex(['ip_address'], 'ip_search');

        \$builder->addId();

        \$builder->createField('ipAddress', 'string')
            ->columnName('ip_address')
            ->length(45)
            ->build();

        \$builder->createField('ipDetails', 'array')
            ->columnName('ip_details')
            ->nullable()
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('ipAddress')
            ->addListProperties(
                [
                    ['ipAddress', 'ip'],
                ]
            )
            ->addProperties(
                [
                    'id',
                    'ipAddress',
                    'ipDetails',
                ]
            )
            ->addGroup('ipAddress', true)
            ->build();
    }

    /**
     * @param string|null \$ipAddress
     */
    public function __construct(
        private \$ipAddress = null
    ) {
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
     * Set ipAddress.
     *
     * @return \$this
     */
    public function setIpAddress(\$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;

        return \$this;
    }

    /**
     * Get ipAddress.
     *
     * @return string
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * Set ipDetails.
     *
     * @param array<string,string> \$ipDetails
     *
     * @return IpAddress
     */
    public function setIpDetails(\$ipDetails)
    {
        \$this->ipDetails = \$ipDetails;

        return \$this;
    }

    /**
     * Get ipDetails.
     *
     * @return array<string,string>|null
     */
    public function getIpDetails()
    {
        return \$this->ipDetails;
    }

    /**
     * Set list of IPs to not track.
     */
    public function setDoNotTrackList(array \$ips): void
    {
        \$this->doNotTrack = \$ips;
    }

    /**
     * Get list of IPs to not track.
     *
     * @return array
     */
    public function getDoNotTrackList()
    {
        return \$this->doNotTrack;
    }

    /**
     * Determine if this IP is trackable.
     */
    public function isTrackable(): bool
    {
        foreach (\$this->doNotTrack as \$ip) {
            if (str_contains(\$ip, '/')) {
                // has a netmask range
                // https://gist.github.com/tott/7684443
                [\$range, \$netmask]     = explode('/', \$ip, 2);
                \$range_decimal         = ip2long(\$range);
                \$ip_decimal            = ip2long(\$this->ipAddress);
                \$wildcard_decimal      = 2 ** (32 - \$netmask) - 1;
                \$netmask_decimal       = ~\$wildcard_decimal;

                if ((\$ip_decimal & \$netmask_decimal) == (\$range_decimal & \$netmask_decimal)) {
                    return false;
                }

                continue;
            }

            if (\$ip === \$this->ipAddress) {
                return false;
            }

            if (preg_match('/'.str_replace('.', '\\\\.', \$ip).'/', \$this->ipAddress)) {
                return false;
            }
        }

        return true;
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
        return "@bundles/CoreBundle/Entity/IpAddress.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/IpAddress.php", "/app/docroot/app/bundles/CoreBundle/Entity/IpAddress.php");
    }
}
