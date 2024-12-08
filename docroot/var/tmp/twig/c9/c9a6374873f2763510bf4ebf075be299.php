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

/* @bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php */
class __TwigTemplate_5cb99e20363626e0b7a9faba4b7cad0d extends Template
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

namespace Mautic\\UserBundle\\Security\\SAML\\Store;

use LightSaml\\Model\\Metadata\\EntityDescriptor;
use LightSaml\\Store\\EntityDescriptor\\EntityDescriptorStoreInterface;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class EntityDescriptorStore implements EntityDescriptorStoreInterface
{
    /**
     * @var EntityDescriptor
     */
    private \$entityDescriptor;

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function get(\$entityId): ?EntityDescriptor
    {
        if (\$this->entityDescriptor) {
            return \$this->entityDescriptor;
        }

        \$this->createEntityDescriptor();

        if (\$entityId !== \$this->entityDescriptor->getEntityID()) {
            return null;
        }

        return \$this->entityDescriptor;
    }

    public function has(\$entityId): bool
    {
        // SAML is not enabled
        if (!\$this->coreParametersHelper->get('saml_idp_metadata')) {
            return false;
        }

        \$entityDescriptor = \$this->get(\$entityId);

        // EntityIds do not match
        if (!\$entityDescriptor) {
            return false;
        }

        return true;
    }

    /**
     * @return array|EntityDescriptor[]
     */
    public function all(): array
    {
        if (!\$this->entityDescriptor) {
            \$this->createEntityDescriptor();
        }

        return [\$this->entityDescriptor];
    }

    private function createEntityDescriptor(): void
    {
        \$xml = base64_decode(\$this->coreParametersHelper->get('saml_idp_metadata'));

        \$this->entityDescriptor = EntityDescriptor::loadXml(\$xml);
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
        return "@bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php", "/app/docroot/app/bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php");
    }
}
