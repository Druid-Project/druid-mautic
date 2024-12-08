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

/* @bundles/LeadBundle/Model/IpAddressModel.php */
class __TwigTemplate_ee05416351795209a3ec82db22dfd107 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Doctrine\\DBAL\\Exception\\ForeignKeyConstraintViolationException;
use Doctrine\\DBAL\\Exception\\UniqueConstraintViolationException;
use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Psr\\Log\\LoggerInterface;

class IpAddressModel
{
    private const DELETE_SIZE = 10000;

    public function __construct(
        protected EntityManager \$entityManager,
        protected LoggerInterface \$logger
    ) {
    }

    /**
     * Saving IP Address references sometimes throws UniqueConstraintViolationException exception on Lead entity save.
     * Rather pre-save the IP references here and catch the exception.
     */
    public function saveIpAddressesReferencesForContact(Lead \$contact): void
    {
        foreach (\$contact->getIpAddresses() as \$ipAddress) {
            \$this->insertIpAddressReference(\$contact, \$ipAddress);
        }
    }

    /**
     * @param string \$ip
     *
     * @return IpAddress|null
     */
    public function findOneByIpAddress(\$ip)
    {
        return \$this->entityManager->getRepository(IpAddress::class)->findOneByIpAddress(\$ip);
    }

    /**
     * Tries to insert the Lead/IP relation and continues even if UniqueConstraintViolationException is thrown.
     */
    private function insertIpAddressReference(Lead \$contact, IpAddress \$ipAddress): void
    {
        \$ipAddressAdded = isset(\$contact->getChanges()['ipAddressList'][\$ipAddress->getIpAddress()]);
        if (!\$ipAddressAdded || !\$ipAddress->getId() || !\$contact->getId()) {
            return;
        }

        \$qb     = \$this->entityManager->getConnection()->createQueryBuilder();
        \$values = [
            'lead_id' => ':leadId',
            'ip_id'   => ':ipId',
        ];

        \$qb->insert(MAUTIC_TABLE_PREFIX.'lead_ips_xref');
        \$qb->values(\$values);
        \$qb->setParameter('leadId', \$contact->getId());
        \$qb->setParameter('ipId', \$ipAddress->getId());

        try {
            \$qb->executeStatement();
        } catch (UniqueConstraintViolationException) {
            \$this->logger->warning(\"The reference for contact {\$contact->getId()} and IP address {\$ipAddress->getId()} is already there. (Unique constraint)\");
        } catch (ForeignKeyConstraintViolationException) {
            \$this->logger->warning(\"The reference for contact {\$contact->getId()} and IP address {\$ipAddress->getId()} is already there. (Foreign key constraint)\");
        }

        \$this->entityManager->detach(\$ipAddress);
    }

    /**
     * @throws \\Doctrine\\DBAL\\Exception
     */
    public function deleteUnusedIpAddresses(int \$limit): int
    {
        /** @var IpAddressRepository \$ipAddressRepo */
        \$ipAddressRepo = \$this->entityManager->getRepository(IpAddress::class);
        \$ipIds         = \$ipAddressRepo->getUnusedIpAddressesIds(\$limit);

        \$chunkedIds = array_chunk(\$ipIds, self::DELETE_SIZE);
        \$count      = 0;

        foreach (\$chunkedIds as \$ids) {
            \$count += \$ipAddressRepo->deleteUnusedIpAddresses(\$ids);

            // Use sleep to recover from any potential table locks.
            usleep(50000);
        }

        return \$count;
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
        return "@bundles/LeadBundle/Model/IpAddressModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/IpAddressModel.php", "/app/docroot/app/bundles/LeadBundle/Model/IpAddressModel.php");
    }
}
