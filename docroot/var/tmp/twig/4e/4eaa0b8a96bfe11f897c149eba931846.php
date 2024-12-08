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

/* @bundles/SmsBundle/Helper/ContactHelper.php */
class __TwigTemplate_17af0dca6ed0e02de6ad8e52bc690855 extends Template
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

namespace Mautic\\SmsBundle\\Helper;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\DBAL\\ArrayParameterType;
use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Helper\\PhoneNumberHelper;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;

class ContactHelper
{
    public function __construct(
        private LeadRepository \$leadRepository,
        private Connection \$connection,
        private PhoneNumberHelper \$phoneNumberHelper
    ) {
    }

    /**
     * @param string \$number
     *
     * @throws NumberNotFoundException
     */
    public function findContactsByNumber(\$number): ArrayCollection
    {
        // Who knows what the number was originally formatted as so let's try a few
        \$searchForNumbers = \$this->phoneNumberHelper->getFormattedNumberList(\$number);

        \$qb = \$this->connection->createQueryBuilder();

        \$foundContacts = \$qb->select('l.id')
            ->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
            ->where(
                \$qb->expr()->or(
                    'l.mobile IN (:numbers)',
                    'l.phone IN (:numbers)'
                )
            )
            ->setParameter('numbers', \$searchForNumbers, ArrayParameterType::STRING)
            ->executeQuery()
            ->fetchAllAssociative();

        \$ids = array_column(\$foundContacts, 'id');
        if (0 === count(\$ids)) {
            throw new NumberNotFoundException(\$number);
        }

        \$collection = new ArrayCollection();
        /** @var Lead[] \$contacts */
        \$contacts = \$this->leadRepository->getEntities(['ids' => \$ids]);
        foreach (\$contacts as \$contact) {
            \$collection->set(\$contact->getId(), \$contact);
        }

        return \$collection;
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
        return "@bundles/SmsBundle/Helper/ContactHelper.php";
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
        return new Source("", "@bundles/SmsBundle/Helper/ContactHelper.php", "/app/docroot/app/bundles/SmsBundle/Helper/ContactHelper.php");
    }
}
